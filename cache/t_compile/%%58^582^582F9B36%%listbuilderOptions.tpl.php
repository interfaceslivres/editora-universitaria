<?php /* Smarty version 2.6.26, created on 2013-07-25 19:03:05
         compiled from controllers/listbuilder/listbuilderOptions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'controllers/listbuilder/listbuilderOptions.tpl', 11, false),array('function', 'url', 'controllers/listbuilder/listbuilderOptions.tpl', 12, false),)), $this); ?>


gridId: '<?php echo ((is_array($_tmp=$this->_tpl_vars['grid']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
',
fetchRowUrl: '<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'fetchRow','params' => $this->_tpl_vars['gridRequestArgs'],'escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
',
fetchOptionsUrl: '<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'fetchOptions','params' => $this->_tpl_vars['gridRequestArgs'],'escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
',
<?php if ($this->_tpl_vars['grid']->getSaveType() == @LISTBUILDER_SAVE_TYPE_INTERNAL): ?>
	saveUrl: '<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'save','params' => $this->_tpl_vars['gridRequestArgs'],'escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
',
	saveFieldName: null,
<?php else: ?>	saveUrl: null,
	saveFieldName: '<?php echo ((is_array($_tmp=$this->_tpl_vars['grid']->getSaveFieldName())) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
',
<?php endif; ?>
sourceType: '<?php echo ((is_array($_tmp=$this->_tpl_vars['grid']->getSourceType())) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
',
bodySelector: '#<?php echo ((is_array($_tmp=$this->_tpl_vars['gridActOnId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
',
features: <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'controllers/grid/feature/featuresOptions.tpl', 'smarty_include_vars' => array('features' => $this->_tpl_vars['features'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>,