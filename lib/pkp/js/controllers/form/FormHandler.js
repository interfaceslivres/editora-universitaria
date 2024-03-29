/**
 * @defgroup js_controllers_form
 */
// Define the namespace.
$.pkp.controllers.form = $.pkp.controllers.form || {};


/**
 * @file js/controllers/form/FormHandler.js
 *
 * Copyright (c) 2000-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class FormHandler
 * @ingroup js_controllers_form
 *
 * @brief Abstract form handler.
 */
(function($) {


	/**
	 * @constructor
	 *
	 * @extends $.pkp.classes.Handler
	 *
	 * @param {jQuery} $form the wrapped HTML form element.
	 * @param {Object} options options to configure the form handler.
	 */
	$.pkp.controllers.form.FormHandler = function($form, options) {
		this.parent($form, options);

		// Check whether we really got a form.
		if (!$form.is('form')) {
			throw Error(['A form handler controller can only be bound',
				' to an HTML form element!'].join(''));
		}

		// Transform all form buttons with jQueryUI.
		$('.button', $form).button();

		// Activate and configure the validation plug-in.
		if (options.submitHandler) {
			this.callerSubmitHandler_ = options.submitHandler;
		}

		// Set the redirect-to URL for the cancel button (if there is one).
		if (options.cancelRedirectUrl) {
			this.cancelRedirectUrl_ = options.cancelRedirectUrl;
		}

		// specific forms may override the form's default behavior
		// to warn about unsaved changes.
		if (typeof options.trackFormChanges !== 'undefined') {
			this.trackFormChanges_ = options.trackFormChanges;
		}

		// disable submission controls on certain forms.
		if (options.disableControlsOnSubmit) {
			this.disableControlsOnSubmit_ = options.disableControlsOnSubmit;
		}

		if (options.enableDisablePairs) {
			this.enableDisablePairs_ = options.enableDisablePairs;
			this.setupEnableDisablePairs();
		}

		var validator = $form.validate({
			onfocusout: this.callbackWrapper(this.onFocusOutValidation_),
			errorClass: 'error',
			highlight: function(element, errorClass) {
				$(element).parent().parent().addClass(errorClass);
			},
			unhighlight: function(element, errorClass) {
				$(element).parent().parent().removeClass(errorClass);
			},
			submitHandler: this.callbackWrapper(this.submitHandler_),
			showErrors: this.callbackWrapper(this.showErrors)
		});

		// Activate the cancel button (if present).
		$('#cancelFormButton', $form).click(this.callbackWrapper(this.cancelForm));

		// Activate the reset button (if present).
		$('#resetFormButton', $form).click(this.callbackWrapper(this.resetForm));
		$form.find('.showMore, .showLess').bind('click', this.switchViz);


		// Initial form validation.
		if (validator.checkForm()) {
			this.trigger('formValid');
		} else {
			this.trigger('formInvalid');
		}

		this.callbackWrapper(this.initializeTinyMCE_());

		// bind a handler to make sure tinyMCE fields are populated.
		$('#submitFormButton', $form).click(this.callbackWrapper(
				this.pushTinyMCEChanges_));

		// bind a handler to handle change events on input fields.
		$(':input', $form).change(this.callbackWrapper(this.formChange));

		this.publishEvent('tinyMCEInitialized');
		this.bind('tinyMCEInitialized', this.tinyMCEInitHandler_);
	};
	$.pkp.classes.Helper.inherits(
			$.pkp.controllers.form.FormHandler,
			$.pkp.classes.Handler);


	//
	// Private properties
	//
	/**
	 * If provided, the caller's submit handler, which will be
	 * triggered to save the form.
	 * @private
	 * @type {Function}
	 */
	$.pkp.controllers.form.FormHandler.prototype.callerSubmitHandler_ = null;


	/**
	 * If provided, the URL to redirect to when the cancel button is clicked
	 * @private
	 * @type {String}
	 */
	$.pkp.controllers.form.FormHandler.prototype.cancelRedirectUrl_ = null;


	/**
	 * By default, all FormHandler instances and subclasses track changes to
	 * form data.
	 * @private
	 * @type {Boolean}
	 */
	$.pkp.controllers.form.FormHandler.prototype.trackFormChanges_ = true;


	/**
	 * Only submit a track event for this form once.
	 * @type {Boolean}
	 */
	$.pkp.controllers.form.FormHandler.prototype.formChangesTracked = false;


	/**
	 * If true, the FormHandler will disable the submit button if the form
	 * successfully validates and is submitted.
	 * @private
	 * @type {Boolean}
	 */
	$.pkp.controllers.form.FormHandler.prototype.disableControlsOnSubmit_ = false;


	/**
	 * An object containing items that should enable or disable each other.
	 * @private
	 * @type {Object}
	 */
	$.pkp.controllers.form.FormHandler.prototype.enableDisablePairs_ = null;


	//
	// Public methods
	//
	/**
	 * Internal callback called whenever the validator has to show form errors.
	 *
	 * @param {Object} validator The validator plug-in.
	 * @param {Object} errorMap An associative list that attributes
	 *  element names to error messages.
	 * @param {Array} errorList An array with objects that contains
	 *  error messages and the corresponding HTMLElements.
	 */
	$.pkp.controllers.form.FormHandler.prototype.showErrors =
			function(validator, errorMap, errorList) {

		// ensure that rich content elements have their
		// values stored before validation.
		if (typeof tinyMCE !== 'undefined') {
			tinyMCE.triggerSave();
		}

		// Clone the form validator before checking the entire form.
		// We need to clone otherwise the internal validator error
		// list will be changed when the show errors timeout is
		// executed, showing/hiding the wrong errors.
		var validatorClone = $.extend(true, {}, validator);

		// Show errors generated by the form change.
		// Use a timer so we make sure that concurrent triggered events
		// are handled before the error messages appear in the UI.
		//
		// The main issue  is a click event in cancel buttons while a non
		// valid field is focused. Without the timer, the UI is changed
		// before the click action is complete (the mouse up will not occur in
		// the cancel link, because it will be moved by the error messages).
		setTimeout(this.callbackWrapper(function() {
			validatorClone.defaultShowErrors();
			validatorClone = null;
		}), 250);

		// Emit validation events.
		if (validator.checkForm()) {
			// Trigger a "form valid" event.
			this.trigger('formValid');
		} else {
			// Trigger a "form invalid" event.
			this.trigger('formInvalid');
			this.enableFormControls();
		}
	};


	/**
	 * Internal callback called when a form element changes.
	 *
	 * @param {HTMLElement} formElement The form element that generated the event.
	 * @param {Event} event The formChange event.
	 */
	$.pkp.controllers.form.FormHandler.prototype.formChange =
			function(formElement, event) {

		if (this.trackFormChanges_ && !this.formChangesTracked) {
			this.trigger('formChanged');
			this.formChangesTracked = true;
		}
	};


	//
	// Protected methods
	//
	/**
	 * Protected method to disable a form's submit control if it is
	 * desired.
	 *
	 * @return {boolean} true.
	 * @protected
	 */
	$.pkp.controllers.form.FormHandler.prototype.disableFormControls =
			function() {

		// We have made it to submission, disable the form control if
		// necessary, submit the form.
		if (this.disableControlsOnSubmit_) {
			this.getHtmlElement().find(':submit').attr('disabled', 'disabled').
					addClass('ui-state-disabled');
		}
		return true;
	};


	/**
	 * Protected method to reenable a form's submit control if it is
	 * desired.
	 *
	 * @return {boolean} true.
	 * @protected
	 */
	$.pkp.controllers.form.FormHandler.prototype.enableFormControls =
			function() {

		this.getHtmlElement().find(':submit').removeAttr('disabled').
				removeClass('ui-state-disabled');
		return true;
	};


	/**
	 * Internal callback called to cancel the form.
	 *
	 * @param {HTMLElement} cancelButton The cancel button.
	 * @param {Event} event The event that triggered the
	 *  cancel button.
	 * @return {boolean} false.
	 */
	$.pkp.controllers.form.FormHandler.prototype.cancelForm =
			function(cancelButton, event) {

		this.unregisterForm();
		this.trigger('formCanceled');
		return false;
	};


	/**
	 * Unregister form for tracking changed data.
	 */
	$.pkp.controllers.form.FormHandler.prototype.unregisterForm =
			function() {
		// Trigger the "form canceled" event and unregister the form.
		this.formChangesTracked = false;
		this.trigger('unregisterChangedForm');
	};


	/**
	 * Internal callback called to reset the form.
	 *
	 * @param {HTMLElement} resetButton The reset button.
	 * @param {Event} event The event that triggered the
	 *  reset button.
	 * @return {boolean} false.
	 */
	$.pkp.controllers.form.FormHandler.prototype.resetForm =
			function(resetButton, event) {

		//unregister the form.
		this.formChangesTracked = false;
		this.trigger('unregisterChangedForm');

		var $form = this.getHtmlElement();
		$form.each(function() {
			this.reset();
		});

		return false;
	};


	/**
	 * Configures the enable/disable pair bindings between a checkbox
	 * and some other form element.
	 *
	 * @return {boolean} true.
	 */
	$.pkp.controllers.form.FormHandler.prototype.setupEnableDisablePairs =
			function() {

		var formElement = this.getHtmlElement();
		for (var key in this.enableDisablePairs_) {
			$(formElement).find("[id^='" + key + "']").bind(
					'click', this.callbackWrapper(this.toggleDependentElement_));
		}
		return true;
	};


	//
	// Private Methods
	//
	/**
	 * Internal callback called after form validation to handle form
	 * submission.
	 *
	 * @private
	 *
	 * @param {Object} validator The validator plug-in.
	 * @param {HTMLElement} formElement The wrapped HTML form.
	 * @return {Function|boolean} a callback method.
	 */
	$.pkp.controllers.form.FormHandler.prototype.submitHandler_ =
			function(validator, formElement) {

		// Notify any nested formWidgets of the submit action.
		var formSubmitEvent = new $.Event('formSubmitRequested');
		$(formElement).find('.formWidget').trigger(formSubmitEvent);

		// If the default behavior was prevented for any reason, stop.
		if (formSubmitEvent.isDefaultPrevented()) {
			return false;
		}

		$(formElement).find('.pkp_helpers_progressIndicator').show();

		this.trigger('unregisterChangedForm');

		if (this.callerSubmitHandler_ !== null) {

			this.formChangesTracked = false;
			// A form submission handler (e.g. Ajax) was provided. Use it.
			return this.callbackWrapper(this.callerSubmitHandler_).
					call(validator, formElement);
		} else {
			// No form submission handler was provided. Use the usual method.

			// FIXME: Is there a better way? This is used to invoke
			// the default form submission code. (Necessary to
			// avoid an infinite loop.)
			validator.settings.submitHandler = null;

			this.disableFormControls();

			this.getHtmlElement().submit();
			this.formChangesTracked = false;
		}
	};


	/**
	 * Internal callback called to push TinyMCE changes back to fields
	 * so they can be validated.
	 *
	 * @param {HTMLElement} submitButton The submit button.
	 * @param {Event} event The event that triggered the
	 *  submit button.
	 * @return {boolean} true.
	 * @private
	 */
	$.pkp.controllers.form.FormHandler.prototype.pushTinyMCEChanges_ =
			function(submitButton, event) {

		// ensure that rich content elements have their
		// values stored before validation.
		if (typeof tinyMCE !== 'undefined') {
			tinyMCE.triggerSave();
		}
		return true;
	};


	/**
	 * Enables or disables the item which depends on the state of source of the
	 * Event.
	 * @param {HTMLElement} sourceElement The element which generated the event.
	 * @param {Event} event The event.
	 * @return {boolean} true.
	 * @private
	 */
	$.pkp.controllers.form.FormHandler.prototype.toggleDependentElement_ =
			function(sourceElement, event) {

		var formElement = this.getHtmlElement();
		var elementId = $(sourceElement).attr('id');
		var targetElement = $(formElement).find(
				"[id^='" + this.enableDisablePairs_[elementId] + "']");

		if ($(sourceElement).is(':checked')) {
			$(targetElement).attr('disabled', '');
		} else {
			$(targetElement).attr('disabled', 'disabled');
		}

		return true;
	};


	/**
	 * Bind a blur handler on tinyMCE instances inside this form
	 * to call form validation on form elements that stores the correspondent
	 * tinyMCE editors.
	 * @private
	 * @param {HTMLElement} input The input element that triggered the
	 * event.
	 * @param {Event} event The tinyMCE initialized event.
	 * @param {Object} tinyMCEObject The tinyMCE object inside this
	 * multilingual element handler that was initialized.
	 */
	$.pkp.controllers.form.FormHandler.prototype.tinyMCEInitHandler_ =
			function(input, event, tinyMCEObject) {
		$(tinyMCEObject.getWin()).blur(
				this.callbackWrapper(function() {
					// Save the current tinyMCE value to the form element.
					tinyMCEObject.save();

					$form = this.getHtmlElement();

					// Get the form element that stores the tinyMCE data.
					var formElement =
						$('#' + tinyMCEObject.editorId, $form);

					// Validate only this element.
					var validator = $form.validate();
					validator.element(formElement);
		}));
	};


	/**
	 * Blur event handler, attached to all input fields on this form
	 * by the form validator. It's passed as an option when initializing
	 * the validator.
	 *
	 * It will make sure that fields are always validated on blur. Without this
	 * users can delete data from a required field and move to another one
	 * without receiving any validation alert.
	 * @private
	 * @return {Boolean} True so the blur event can still be handled.
	 */
	$.pkp.controllers.form.FormHandler.prototype.onFocusOutValidation_ =
			function(validator, element) {

		var $form = this.getHtmlElement();
		// Make sure the element is still present in form.
		if ($(element).parents('#' + $form.attr('id')).length) {
			validator.element(element);
		}

		return true;
	};


/** @param {jQuery} $ jQuery closure. */
})(jQuery);
