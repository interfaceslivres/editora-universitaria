<?php /* Smarty version 2.6.26, created on 2013-11-06 12:59:28
         compiled from controllers/grid/common/cell/radioButtonCell.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/grid/common/cell/radioButtonCell.tpl', 9, false),)), $this); ?>
<?php $this->assign('cellId', ((is_array($_tmp="cell-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['id']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['id']))); ?>
<span id="<?php echo $this->_tpl_vars['cellId']; ?>
">
	<?php if (count ( $this->_tpl_vars['actions'] ) > 0): ?>
		<?php $this->assign('defaultCellAction', $this->_tpl_vars['actions'][0]); ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/buttonGenericLinkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['defaultCellAction'],'buttonSelector' => ((is_array($_tmp="#select-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['cellId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['cellId'])))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<input type="radio" id="select-<?php echo $this->_tpl_vars['cellId']; ?>
" style="height: 15px; width: 15px;" <?php if ($this->_tpl_vars['selected']): ?>checked="checked"<?php endif; ?> <?php if ($this->_tpl_vars['disabled']): ?>disabled="disabled"<?php endif; ?>/>
</span>
