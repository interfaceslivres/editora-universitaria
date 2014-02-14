<?php /* Smarty version 2.6.26, created on 2013-07-25 18:45:38
         compiled from controllers/grid/feature/gridOrderFinishControls.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'fbvElement', 'controllers/grid/feature/gridOrderFinishControls.tpl', 10, false),array('modifier', 'concat', 'controllers/grid/feature/gridOrderFinishControls.tpl', 10, false),)), $this); ?>
<div class="grid_controls order_finish_controls">
<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'link','class' => 'cancelFormButton pkp_helpers_align_left','id' => ((is_array($_tmp=$this->_tpl_vars['gridId'])) ? $this->_run_mod_handler('concat', true, $_tmp, "-cancel") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-cancel")),'label' => "grid.action.cancelOrdering"), $this);?>

<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'link','class' => 'saveButton pkp_helpers_align_right','id' => ((is_array($_tmp=$this->_tpl_vars['gridId'])) ? $this->_run_mod_handler('concat', true, $_tmp, "-saveButton") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-saveButton")),'label' => "common.done"), $this);?>

</div>