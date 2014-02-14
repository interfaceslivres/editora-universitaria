<?php /* Smarty version 2.6.26, created on 2013-11-06 12:59:27
         compiled from controllers/grid/languages/localeNameCell.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/grid/languages/localeNameCell.tpl', 10, false),array('modifier', 'escape', 'controllers/grid/languages/localeNameCell.tpl', 14, false),)), $this); ?>
<?php if ($this->_tpl_vars['id']): ?>
	<?php $this->assign('cellId', ((is_array($_tmp="cell-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['id']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['id']))); ?>
<?php else: ?>
	<?php $this->assign('cellId', ""); ?>
<?php endif; ?>
<span <?php if ($this->_tpl_vars['cellId']): ?>id="<?php echo ((is_array($_tmp=$this->_tpl_vars['cellId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" <?php endif; ?>class="gridCellContainer">
	<?php echo $this->_tpl_vars['label']; ?>

</span>
<?php if ($this->_tpl_vars['incomplete']): ?>
	<span class="pkp_form_error">*</span>
<?php endif; ?>

