<?php /* Smarty version 2.6.26, created on 2013-07-25 19:13:38
         compiled from controllers/tab/settings/users.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/tab/settings/users.tpl', 11, false),array('function', 'load_url_in_div', 'controllers/tab/settings/users.tpl', 13, false),array('modifier', 'assign', 'controllers/tab/settings/users.tpl', 11, false),)), $this); ?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.user.UserGridHandler",'op' => 'fetchGrid'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'usersUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'usersUrl'));?>

<?php $this->assign('gridContainerId', 'userGridContainer'); ?>
<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => $this->_tpl_vars['gridContainerId'],'url' => $this->_tpl_vars['usersUrl']), $this);?>
