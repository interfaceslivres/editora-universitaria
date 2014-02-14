<?php /* Smarty version 2.6.26, created on 2013-11-01 12:35:29
         compiled from workflow/editorial.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'workflow/editorial.tpl', 14, false),array('function', 'load_url_in_div', 'workflow/editorial.tpl', 15, false),array('function', 'translate', 'workflow/editorial.tpl', 17, false),array('modifier', 'assign', 'workflow/editorial.tpl', 14, false),)), $this); ?>
<?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "workflow/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<div id="editorial">
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorDecisionActions','monographId' => $this->_tpl_vars['monograph']->getId(),'stageId' => $this->_tpl_vars['stageId'],'contextId' => 'copyediting','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'copyeditingEditorDecisionsUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'copyeditingEditorDecisionsUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'copyeditingEditorDecisionsDiv','url' => $this->_tpl_vars['copyeditingEditorDecisionsUrl'],'class' => 'editorDecisionActions'), $this);?>


	<p class="pkp_help"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.monograph.editorial.introduction"), $this);?>
</p>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.final.FinalDraftFilesGridHandler",'op' => 'fetchGrid','monographId' => $this->_tpl_vars['monograph']->getId(),'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'finalDraftGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'finalDraftGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'finalDraftGrid','url' => $this->_tpl_vars['finalDraftGridUrl']), $this);?>


	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.copyedit.CopyeditingFilesGridHandler",'op' => 'fetchGrid','monographId' => $this->_tpl_vars['monograph']->getId(),'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'copyeditingGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'copyeditingGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'copyeditingGrid','class' => 'update_target_signoff','url' => $this->_tpl_vars['copyeditingGridUrl']), $this);?>


</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>