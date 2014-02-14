<?php /* Smarty version 2.6.26, created on 2013-11-06 12:59:21
         compiled from controllers/tab/settings/languages/languages.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/tab/settings/languages/languages.tpl', 11, false),array('function', 'load_url_in_div', 'controllers/tab/settings/languages/languages.tpl', 12, false),array('modifier', 'assign', 'controllers/tab/settings/languages/languages.tpl', 11, false),)), $this); ?>

<?php if (in_array ( ROLE_ID_SITE_ADMIN , $this->_tpl_vars['userRoles'] ) && ! $this->_tpl_vars['multiplePresses']): ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.admin.languages.AdminLanguageGridHandler",'op' => 'fetchGrid'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'languagesUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'languagesUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'languageGridContainer','url' => $this->_tpl_vars['languagesUrl']), $this);?>

<?php else: ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.languages.ManageLanguageGridHandler",'op' => 'fetchGrid'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'languagesUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'languagesUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'languageGridContainer','url' => $this->_tpl_vars['languagesUrl']), $this);?>

<?php endif; ?>