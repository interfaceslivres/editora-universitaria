<?php /* Smarty version 2.6.26, created on 2013-07-25 18:45:37
         compiled from linkAction/linkActionOptions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'linkAction/linkActionOptions.tpl', 26, false),)), $this); ?>

{
	<?php if ($this->_tpl_vars['selfActivate']): ?>
		selfActivate: <?php echo $this->_tpl_vars['selfActivate']; ?>
,
	<?php endif; ?>
	staticId: '<?php echo $this->_tpl_vars['staticId']; ?>
',
	<?php $this->assign('actionRequest', $this->_tpl_vars['action']->getActionRequest()); ?>
	actionRequest: '<?php echo $this->_tpl_vars['actionRequest']->getJSLinkActionRequest(); ?>
',
	actionRequestOptions: {
		<?php $_from = $this->_tpl_vars['actionRequest']->getLocalizedOptions(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['actionRequestOptions'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['actionRequestOptions']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['optionName'] => $this->_tpl_vars['optionValue']):
        $this->_foreach['actionRequestOptions']['iteration']++;
?>
			<?php echo $this->_tpl_vars['optionName']; ?>
: <?php if ($this->_tpl_vars['optionValue']): ?>'<?php echo ((is_array($_tmp=$this->_tpl_vars['optionValue'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
'<?php else: ?>false<?php endif; ?><?php if (! ($this->_foreach['actionRequestOptions']['iteration'] == $this->_foreach['actionRequestOptions']['total'])): ?>,<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	}
}