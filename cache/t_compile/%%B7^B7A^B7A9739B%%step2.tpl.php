<?php /* Smarty version 2.6.26, created on 2013-10-31 12:42:22
         compiled from submission/form/step2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'submission/form/step2.tpl', 16, false),array('modifier', 'assign', 'submission/form/step2.tpl', 26, false),array('function', 'url', 'submission/form/step2.tpl', 20, false),array('function', 'load_url_in_div', 'submission/form/step2.tpl', 27, false),array('function', 'translate', 'submission/form/step2.tpl', 35, false),array('function', 'fbvFormButtons', 'submission/form/step2.tpl', 39, false),)), $this); ?>
<?php $this->assign('pageTitle', "submission.submit"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/form/submitStepHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#submitStep2Form').pkpHandler('$.pkp.controllers.form.AjaxFormHandler', {
			baseUrl: '<?php echo ((is_array($_tmp=$this->_tpl_vars['baseUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
'
		});
	});
</script>
<form class="pkp_form" id="submitStep2Form" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveStep','path' => $this->_tpl_vars['submitStep']), $this);?>
" enctype="multipart/form-data">
	<input type="hidden" name="monographId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['monographId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'submitStep2FormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<!-- Submission upload grid -->

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.submission.SubmissionWizardFilesGridHandler",'op' => 'fetchGrid','monographId' => $this->_tpl_vars['monographId']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submissionFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submissionFilesGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'submissionFilesGridDiv','url' => $this->_tpl_vars['submissionFilesGridUrl']), $this);?>


	<?php if ($this->_tpl_vars['pressSettings']['supportPhone']): ?>
		<?php $this->assign('howToKeyName', "submission.submit.howToSubmit"); ?>
	<?php else: ?>
		<?php $this->assign('howToKeyName', "submission.submit.howToSubmitNoPhone"); ?>
	<?php endif; ?>

	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['howToKeyName'],'supportName' => $this->_tpl_vars['pressSettings']['supportName'],'supportEmail' => $this->_tpl_vars['pressSettings']['supportEmail'],'supportPhone' => $this->_tpl_vars['pressSettings']['supportPhone']), $this);?>
</p>

	<div class="separator"></div>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'step2Buttons','submitText' => "common.saveAndContinue"), $this);?>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
