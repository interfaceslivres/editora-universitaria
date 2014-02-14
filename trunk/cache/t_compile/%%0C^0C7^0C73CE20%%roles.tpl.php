<?php /* Smarty version 2.6.26, created on 2013-11-06 13:19:06
         compiled from controllers/tab/settings/roles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/tab/settings/roles.tpl', 11, false),array('function', 'load_url_in_div', 'controllers/tab/settings/roles.tpl', 12, false),array('modifier', 'assign', 'controllers/tab/settings/roles.tpl', 11, false),)), $this); ?>

<div id="userGroupsContainer">
<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.roles.UserGroupGridHandler",'op' => 'fetchGrid'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'rolesUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'rolesUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'roleGridContainer','url' => $this->_tpl_vars['rolesUrl']), $this);?>

</div>