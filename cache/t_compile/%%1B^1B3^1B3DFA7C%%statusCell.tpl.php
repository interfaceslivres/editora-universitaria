<?php /* Smarty version 2.6.26, created on 2013-11-01 12:51:38
         compiled from controllers/grid/common/cell/statusCell.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/grid/common/cell/statusCell.tpl', 9, false),array('modifier', 'escape', 'controllers/grid/common/cell/statusCell.tpl', 16, false),array('function', 'translate', 'controllers/grid/common/cell/statusCell.tpl', 15, false),)), $this); ?>
<?php $this->assign('cellId', ((is_array($_tmp="cell-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['id']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['id']))); ?>
<span id="<?php echo $this->_tpl_vars['cellId']; ?>
" class="pkp_linkActions">
	<?php if (count ( $this->_tpl_vars['actions'] ) > 0): ?>
		<?php $this->assign('defaultCellAction', $this->_tpl_vars['actions'][0]); ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['defaultCellAction'],'contextId' => $this->_tpl_vars['cellId'],'imageClass' => 'task')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php elseif ($this->_tpl_vars['status']): ?>
		<?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ((is_array($_tmp="grid.task.status.")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['status']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['status']))), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('statusTitle', ob_get_contents());ob_end_clean(); ?>
		<a title="<?php echo ((is_array($_tmp=$this->_tpl_vars['statusTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="task <?php echo ((is_array($_tmp=$this->_tpl_vars['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">status</a>
	<?php endif; ?>
</span>
