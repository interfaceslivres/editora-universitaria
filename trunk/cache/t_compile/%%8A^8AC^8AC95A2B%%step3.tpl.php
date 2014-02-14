<?php /* Smarty version 2.6.26, created on 2013-11-01 12:25:58
         compiled from submission/form/step3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'submission/form/step3.tpl', 21, false),array('function', 'load_url_in_div', 'submission/form/step3.tpl', 30, false),array('function', 'fbvFormButtons', 'submission/form/step3.tpl', 43, false),array('modifier', 'escape', 'submission/form/step3.tpl', 22, false),array('modifier', 'assign', 'submission/form/step3.tpl', 29, false),array('block', 'fbvFormArea', 'submission/form/step3.tpl', 27, false),)), $this); ?>

<?php $this->assign('pageTitle', "submission.submit"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/form/submitStepHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#submitStep3Form').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="submitStep3Form" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveStep','path' => $this->_tpl_vars['submitStep']), $this);?>
">
	<input type="hidden" name="monographId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['monographId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'submitStep3FormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/submissionMetadataFormTitleFields.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'contributors')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<!--  Contributors -->
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.users.author.AuthorGridHandler",'op' => 'fetchGrid','monographId' => $this->_tpl_vars['monographId']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'authorGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'authorGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'authorsGridContainer','class' => 'update_source_author','url' => ($this->_tpl_vars['authorGridUrl'])), $this);?>


		<!--  Chapters -->
		<?php if ($this->_tpl_vars['isEditedVolume']): ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.users.chapter.ChapterGridHandler",'op' => 'fetchGrid','monographId' => $this->_tpl_vars['monographId']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'chaptersGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'chaptersGridUrl'));?>

			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'chaptersGridContainer','class' => 'update_target_author','url' => ($this->_tpl_vars['chaptersGridUrl'])), $this);?>

		<?php endif; ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/form/categories.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/submissionMetadataFormFields.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'step3Buttons','submitText' => "submission.submit.finishSubmission",'confirmSubmit' => "submission.confirmSubmit"), $this);?>

</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>