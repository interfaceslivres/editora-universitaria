<?php /* Smarty version 2.6.26, created on 2013-10-30 14:03:52
         compiled from submission/form/step1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'submission/form/step1.tpl', 16, false),array('function', 'url', 'submission/form/step1.tpl', 21, false),array('function', 'fbvElement', 'submission/form/step1.tpl', 31, false),array('function', 'fbvFormButtons', 'submission/form/step1.tpl', 100, false),array('block', 'fbvFormArea', 'submission/form/step1.tpl', 27, false),array('block', 'fbvFormSection', 'submission/form/step1.tpl', 30, false),)), $this); ?>
<?php $this->assign('pageTitle', "submission.submit"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/form/submitStepHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#submitStep1Form').pkpHandler('$.pkp.controllers.form.AjaxFormHandler', {
			baseUrl: '<?php echo ((is_array($_tmp=$this->_tpl_vars['baseUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
'
		});
	});
</script>

<form class="pkp_form" id="submitStep1Form" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveStep','path' => $this->_tpl_vars['submitStep']), $this);?>
">
<?php if ($this->_tpl_vars['monographId']): ?><input type="hidden" name="monographId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['monographId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/><?php endif; ?>
	<input type="hidden" name="submissionChecklist" value="1"/>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'submitStep1FormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'submissionStep1')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<!-- Author user group selection (only appears if user has > 1 author user groups) -->
	<?php if (count ( $this->_tpl_vars['authorUserGroupOptions'] ) > 1): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "submission.submit.userGroup",'description' => "submission.submit.userGroupDescription",'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'authorUserGroupId','from' => $this->_tpl_vars['authorUserGroupOptions'],'translate' => false), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php else: ?>
		<?php $_from = $this->_tpl_vars['authorUserGroupOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['authorUserGroupName']):
?><?php $this->assign('authorUserGroupId', $this->_tpl_vars['key']); ?><?php endforeach; endif; unset($_from); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'hidden','id' => 'authorUserGroupId','value' => $this->_tpl_vars['authorUserGroupId']), $this);?>

	<?php endif; ?>

	<?php if ($this->_tpl_vars['copyrightNoticeAgree']): ?>
		<?php echo $this->_tpl_vars['copyrightNotice']; ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'copyrightNoticeAgree','required' => true,'value' => 1,'label' => "submission.submit.copyrightNoticeAgree",'checked' => $this->_tpl_vars['monographId']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<!-- Submission Type -->
	<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true','label' => "submission.workType",'description' => "submission.workType.description")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php if ($this->_tpl_vars['workType'] == @WORK_TYPE_EDITED_VOLUME): ?>
			<?php $this->assign('notIsEditedVolume', 0); ?>
			<?php $this->assign('isEditedVolume', 1); ?>
		<?php else: ?>
			<?php $this->assign('notIsEditedVolume', 1); ?>
			<?php $this->assign('isEditedVolume', 0); ?>
		<?php endif; ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','name' => 'workType','id' => "isEditedVolume-0",'value' => @WORK_TYPE_AUTHORED_WORK,'checked' => $this->_tpl_vars['notIsEditedVolume'],'label' => "submission.workType.authoredWork"), $this);?>

		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','name' => 'workType','id' => "isEditedVolume-1",'value' => @WORK_TYPE_EDITED_VOLUME,'checked' => $this->_tpl_vars['isEditedVolume'],'label' => "submission.workType.editedVolume"), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php if (count ( $this->_tpl_vars['supportedSubmissionLocaleNames'] ) == 1): ?>
			<?php $_from = $this->_tpl_vars['supportedSubmissionLocaleNames']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['locale'] => $this->_tpl_vars['localeName']):
?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'hidden','id' => 'locale','value' => ((is_array($_tmp=$this->_tpl_vars['locale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>

		<?php endforeach; endif; unset($_from); ?>
		<?php else: ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.submit.submissionLocale",'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'for' => 'locale')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('label' => "submission.submit.submissionLocaleDescription",'required' => 'true','type' => 'select','id' => 'locale','from' => $this->_tpl_vars['supportedSubmissionLocaleNames'],'selected' => $this->_tpl_vars['locale'],'translate' => false), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/form/series.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<!-- Submission checklist -->
	<?php if ($this->_tpl_vars['currentPress']->getLocalizedSetting('submissionChecklist')): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true','label' => "submission.submit.submissionChecklist",'description' => "submission.submit.submissionChecklistDescription",'id' => 'pkp_submissionChecklist')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $_from = $this->_tpl_vars['currentPress']->getLocalizedSetting('submissionChecklist'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['checklist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['checklist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['checklistId'] => $this->_tpl_vars['checklistItem']):
        $this->_foreach['checklist']['iteration']++;
?>
				<?php if ($this->_tpl_vars['checklistItem']['content']): ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => "checklist-".($this->_tpl_vars['checklistId']),'required' => true,'value' => 1,'label' => $this->_tpl_vars['checklistItem']['content'],'translate' => false,'checked' => $this->_tpl_vars['monographId']), $this);?>

				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<!-- Cover Note To Editor-->
	<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'commentsToEditor','title' => "submission.submit.coverNote")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','name' => 'commentsToEditor','id' => 'commentsToEditor','value' => $this->_tpl_vars['commentsToEditor'],'rich' => true), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<!-- Privacy Statement -->
	<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'privacyStatement','title' => "submission.submit.privacyStatement")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','name' => 'privacyStatement','id' => 'privacyStatement','disabled' => true,'value' => $this->_tpl_vars['currentPress']->getLocalizedSetting('privacyStatement'),'rich' => true), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php if ($this->_tpl_vars['submissionProgress'] > 1): ?>
		<?php $this->assign('confirmCancelMessage', "submission.submit.cancelSubmission"); ?>
	<?php else: ?>
		<?php $this->assign('confirmCancelMessage', "submission.submit.cancelSubmissionStep1"); ?>
	<?php endif; ?>

	<!-- Buttons -->
	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'step1Buttons','submitText' => "common.saveAndContinue",'confirmCancel' => $this->_tpl_vars['confirmCancelMessage']), $this);?>


<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>