<?php /* Smarty version 2.6.26, created on 2013-11-01 12:29:29
         compiled from workflow/submission.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'workflow/submission.tpl', 13, false),array('function', 'load_url_in_div', 'workflow/submission.tpl', 14, false),array('function', 'translate', 'workflow/submission.tpl', 16, false),array('modifier', 'assign', 'workflow/submission.tpl', 13, false),)), $this); ?>
<?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "workflow/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorDecisionActions','monographId' => $this->_tpl_vars['monograph']->getId(),'stageId' => $this->_tpl_vars['stageId'],'contextId' => 'submission','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submissionEditorDecisionsUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submissionEditorDecisionsUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'submissionEditorDecisionsDiv','url' => $this->_tpl_vars['submissionEditorDecisionsUrl'],'class' => 'editorDecisionActions'), $this);?>


<p class="pkp_help"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submission.introduction"), $this);?>
</p>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.submission.EditorSubmissionDetailsFilesGridHandler",'op' => 'fetchGrid','monographId' => $this->_tpl_vars['monograph']->getId(),'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submissionFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submissionFilesGridUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'submissionFilesGridDiv','url' => $this->_tpl_vars['submissionFilesGridUrl']), $this);?>


<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.submissionDocuments.SubmissionDocumentsFilesGridHandler",'op' => 'fetchGrid','monographId' => $this->_tpl_vars['monograph']->getId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'documentsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'documentsGridUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'documentsGridDiv','url' => $this->_tpl_vars['documentsGridUrl']), $this);?>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>