<?php /* Smarty version 2.6.26, created on 2013-11-01 12:29:53
         compiled from controllers/grid/gridBodyPartWithCategory.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/grid/gridBodyPartWithCategory.tpl', 9, false),array('modifier', 'escape', 'controllers/grid/gridBodyPartWithCategory.tpl', 9, false),array('function', 'translate', 'controllers/grid/gridBodyPartWithCategory.tpl', 24, false),)), $this); ?>
<?php $this->assign('categoryId', ((is_array($_tmp=((is_array($_tmp="component-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['categoryRow']->getGridId(), "-category-", $this->_tpl_vars['categoryRow']->getId()) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['categoryRow']->getGridId(), "-category-", $this->_tpl_vars['categoryRow']->getId())))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))); ?>
<tbody id="<?php echo ((is_array($_tmp=$this->_tpl_vars['categoryId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="element<?php echo ((is_array($_tmp=$this->_tpl_vars['categoryRow']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 category_grid_body">
	<?php echo $this->_tpl_vars['renderedCategoryRow']; ?>

		<?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
		<?php echo $this->_tpl_vars['row']; ?>

	<?php endforeach; endif; unset($_from); ?>
</tbody>
<tbody id="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['categoryId'])) ? $this->_run_mod_handler('concat', true, $_tmp, '-emptyPlaceholder') : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, '-emptyPlaceholder')))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="empty category_placeholder"<?php if (count ( $this->_tpl_vars['rows'] ) > 0): ?> style="display: none;"<?php endif; ?>>
		<tr>
		<td class="no_border indent_row"></td>
		<td colspan="<?php echo $this->_tpl_vars['grid']->getColumnsCount('indent'); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['grid']->getEmptyCategoryRowText()), $this);?>
</td>
	</tr>
</tbody>
