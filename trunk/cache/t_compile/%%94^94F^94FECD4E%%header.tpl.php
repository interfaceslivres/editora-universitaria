<?php /* Smarty version 2.6.26, created on 2013-11-01 12:29:29
         compiled from workflow/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'workflow/header.tpl', 15, false),array('modifier', 'assign', 'workflow/header.tpl', 30, false),array('function', 'url', 'workflow/header.tpl', 30, false),array('function', 'load_url_in_div', 'workflow/header.tpl', 31, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('primaryAuthor', $this->_tpl_vars['monograph']->getPrimaryAuthor()); ?><?php echo ''; ?><?php if (! $this->_tpl_vars['primaryAuthor']): ?><?php echo ''; ?><?php $this->assign('authors', $this->_tpl_vars['monograph']->getAuthors()); ?><?php echo ''; ?><?php $this->assign('primaryAuthor', $this->_tpl_vars['authors'][0]); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('pageTitleTranslated', ((is_array($_tmp=$this->_tpl_vars['primaryAuthor']->getLastName())) ? $this->_run_mod_handler('concat', true, $_tmp, ", ", $this->_tpl_vars['monograph']->getLocalizedTitle()) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, ", ", $this->_tpl_vars['monograph']->getLocalizedTitle()))); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array('suppressPageTitle' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
	// Initialise JS handler.
	$(function() {
		$('#submissionWorkflow').pkpHandler(
			'$.pkp.pages.workflow.WorkflowHandler'
		);
	});
</script>

<div id="submissionWorkflow">

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionProgressBar','monographId' => $this->_tpl_vars['monograph']->getId(),'stageId' => $this->_tpl_vars['stageId'],'contextId' => 'submission','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submissionProgressBarUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submissionProgressBarUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'submissionProgressBarDiv','url' => $this->_tpl_vars['submissionProgressBarUrl'],'class' => 'submissionProgressBar'), $this);?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'workflowNotification','requestOptions' => $this->_tpl_vars['workflowNotificationRequestOptions'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<br />
<div class="pkp_helpers_clear"></div>