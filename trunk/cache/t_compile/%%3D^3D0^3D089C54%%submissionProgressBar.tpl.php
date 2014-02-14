<?php /* Smarty version 2.6.26, created on 2013-11-01 12:29:38
         compiled from workflow/submissionProgressBar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'workflow/submissionProgressBar.tpl', 14, false),array('modifier', 'truncate', 'workflow/submissionProgressBar.tpl', 14, false),array('modifier', 'assign', 'workflow/submissionProgressBar.tpl', 25, false),array('function', 'url', 'workflow/submissionProgressBar.tpl', 25, false),array('function', 'load_url_in_div', 'workflow/submissionProgressBar.tpl', 26, false),array('function', 'translate', 'workflow/submissionProgressBar.tpl', 34, false),)), $this); ?>
<?php $this->assign('primaryAuthor', $this->_tpl_vars['monograph']->getPrimaryAuthor()); ?>
<?php if (! $this->_tpl_vars['primaryAuthor']): ?>
	<?php $this->assign('authors', $this->_tpl_vars['monograph']->getAuthors()); ?>
	<?php $this->assign('primaryAuthor', $this->_tpl_vars['authors'][0]); ?>
<?php endif; ?>
<?php $this->assign('pageTitleTranslated', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['primaryAuthor']->getLastName())) ? $this->_run_mod_handler('concat', true, $_tmp, ", <em>", $this->_tpl_vars['monograph']->getLocalizedTitle(), "</em>") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, ", <em>", $this->_tpl_vars['monograph']->getLocalizedTitle(), "</em>")))) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 50))); ?>
<script type="text/javascript">
	// Initialise JS handler.
	$(function() {
		$('#submissionHeader').pkpHandler(
			'$.pkp.pages.workflow.SubmissionHeaderHandler'
		);
	});
</script>
<div id="submissionHeader" class="pkp_page_header">
	<div class="participant_popover" style="display: none;">
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.users.stageParticipant.StageParticipantGridHandler",'op' => 'fetchGrid','monographId' => $this->_tpl_vars['monograph']->getId(),'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'stageParticipantGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'stageParticipantGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'stageParticipantGridContainer','class' => 'update_source','url' => ($this->_tpl_vars['stageParticipantGridUrl'])), $this);?>

	</div>
	<div class="pkp_helpers_align_right">
		<ul class="submission_actions pkp_helpers_flatlist">
			<?php if (array_intersect ( array ( ROLE_ID_PRESS_MANAGER , ROLE_ID_SERIES_EDITOR ) , $this->_tpl_vars['userRoles'] )): ?>
				<li><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['catalogEntryAction'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></li>
			<?php endif; ?>
			<li><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['submissionInformationCenterAction'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></li>
			<li class="participants"><a href="javascript:$.noop();" id="participantToggle" class="sprite participants"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.monograph.stageParticipants"), $this);?>
</a></li>
		</ul>
	</div>
	<div class="pkp_helpers_align_left"><span class="h2"><?php echo $this->_tpl_vars['pageTitleTranslated']; ?>
</span></div>

	<div class="submission_progress_wrapper">
		<ul class="submission_progress pkp_helpers_flatlist">
			<?php $_from = $this->_tpl_vars['workflowStages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['stage']):
?>
				<?php $this->assign('progressClass', ""); ?>
				<?php $this->assign('currentClass', ""); ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.noActionRequired"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'stageTitle') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'stageTitle'));?>

				<?php if ($this->_tpl_vars['stageNotifications'][$this->_tpl_vars['key']]): ?>
					<?php $this->assign('progressClass', 'actionNeeded'); ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.actionNeeded"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'stageTitle') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'stageTitle'));?>

				<?php endif; ?>
				<?php if (! array_key_exists ( $this->_tpl_vars['key'] , $this->_tpl_vars['accessibleWorkflowStages'] )): ?>
					<?php $this->assign('progressClass', 'stageDisabled'); ?>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['submissionIsReady'] && $this->_tpl_vars['stage']['path'] == @WORKFLOW_STAGE_PATH_PRODUCTION): ?>
					<?php $this->assign('progressClass', 'productionReady'); ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.productionReady"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'stageTitle') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'stageTitle'));?>

				<?php endif; ?>
				<?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['stageId']): ?>
					<?php $this->assign('currentClass', 'current'); ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.currentStage"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'stageTitle') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'stageTitle'));?>

				<?php endif; ?>
				<li class="<?php echo $this->_tpl_vars['progressClass']; ?>
 <?php echo $this->_tpl_vars['currentClass']; ?>
">
					<?php if (array_key_exists ( $this->_tpl_vars['key'] , $this->_tpl_vars['accessibleWorkflowStages'] )): ?>
						<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'workflow','op' => $this->_tpl_vars['stage']['path'],'path' => $this->_tpl_vars['monograph']->getId()), $this);?>
" title="<?php echo $this->_tpl_vars['stageTitle']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['stage']['translationKey']), $this);?>
</a>
					<?php else: ?>
						<a class="pkp_common_disabled"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['stage']['translationKey']), $this);?>
</a>
					<?php endif; ?>
				</li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
	</div>

</div>