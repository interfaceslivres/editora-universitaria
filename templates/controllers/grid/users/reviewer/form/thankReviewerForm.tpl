{**
 * templates/controllers/grid/users/reviewer/thankReviewerForm.tpl
 *
 * Copyright (c) 2003-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display the form to send a thank you -- Contains a user-editable message field.
 *
 *}
<script type="text/javascript">
	$(function() {ldelim}
		// Attach the form handler.
		$('#sendThankYouForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	{rdelim});
</script>

<form class="pkp_form" id="sendThankYouForm" method="post" action="{url op="thankReviewer"}" >
	{fbvFormArea id="sendReminder"}
		<input type="hidden" name="monographId" value="{$monographId|escape}" />
		<input type="hidden" name="stageId" value="{$stageId|escape}" />
		<input type="hidden" name="reviewAssignmentId" value="{$reviewAssignmentId}" />

		{fbvFormSection title="user.role.reviewer"}
			{fbvElement type="text" id="reviewerName" value=$reviewerName disabled="true"}
		{/fbvFormSection}

		{fbvFormSection title="editor.review.personalMessageToReviewer" for="message"}
			{fbvElement type="textarea" id="message" value=$message}
		{/fbvFormSection}

		<!-- skip email checkbox -->
		{fbvFormSection for="skipEmail" size=$fbvStyles.size.MEDIUM list=true}
			{fbvElement type="checkbox" id="skipEmail" name="skipEmail" label="editor.review.skipEmail"}
		{/fbvFormSection}

		{fbvFormButtons submitText="editor.review.thankReviewer"}
	{/fbvFormArea}
</form>
