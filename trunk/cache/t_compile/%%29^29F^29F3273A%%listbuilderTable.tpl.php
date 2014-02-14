<?php /* Smarty version 2.6.26, created on 2013-07-25 19:03:05
         compiled from controllers/listbuilder/listbuilderTable.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'controllers/listbuilder/listbuilderTable.tpl', 10, false),array('modifier', 'count', 'controllers/listbuilder/listbuilderTable.tpl', 11, false),array('function', 'translate', 'controllers/listbuilder/listbuilderTable.tpl', 29, false),)), $this); ?>

<table id="<?php echo ((is_array($_tmp=$this->_tpl_vars['gridTableId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">
	<?php if (count($this->_tpl_vars['columns']) > 1): ?>		<thead>
			<tr>
			<?php $_from = $this->_tpl_vars['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['column']):
?>
				<th><?php echo ((is_array($_tmp=$this->_tpl_vars['column']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</th>
			<?php endforeach; endif; unset($_from); ?>
			</tr>
		</thead>
	<?php endif; ?>
	<tbody>
		<?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lb_row']):
?>
			<?php echo $this->_tpl_vars['lb_row']; ?>

		<?php endforeach; endif; unset($_from); ?>
				<tr class="empty"<?php if ($this->_tpl_vars['rows']): ?> style="display: none;"<?php endif; ?>>
			<td colspan="<?php echo count($this->_tpl_vars['columns']); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.noItems"), $this);?>
</td>
		</tr>
		<div class="newRow"></div>
	</tbody>
</table>