<?php /* Smarty version 2.6.26, created on 2013-07-25 19:03:49
         compiled from controllers/tab/settings/submissionStage/form/submissionStageForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/tab/settings/submissionStage/form/submissionStageForm.tpl', 18, false),array('function', 'load_url_in_div', 'controllers/tab/settings/submissionStage/form/submissionStageForm.tpl', 22, false),array('function', 'fbvFormButtons', 'controllers/tab/settings/submissionStage/form/submissionStageForm.tpl', 25, false),array('modifier', 'assign', 'controllers/tab/settings/submissionStage/form/submissionStageForm.tpl', 21, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#submissionStageForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="submissionStageForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.PublicationSettingsTabHandler",'op' => 'saveFormData','tab' => 'submissionStage'), $this);?>
">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'submissionStageFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.submissionChecklist.SubmissionChecklistGridHandler",'op' => 'fetchGrid'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submissionChecklistGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submissionChecklistGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'submissionChecklistGridDiv','url' => $this->_tpl_vars['submissionChecklistGridUrl']), $this);?>


	<?php if (! $this->_tpl_vars['wizardMode']): ?>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'submissionStageFormSubmit','submitText' => "common.save",'hideCancel' => true), $this);?>

	<?php endif; ?>
</form>