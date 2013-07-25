<?php /* Smarty version 2.6.26, created on 2013-07-25 14:44:00
         compiled from header/sitenav.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'header/sitenav.tpl', 14, false),array('function', 'translate', 'header/sitenav.tpl', 14, false),array('function', 'null_link_action', 'header/sitenav.tpl', 24, false),array('modifier', 'escape', 'header/sitenav.tpl', 23, false),)), $this); ?>

<div class="pkp_structure_head_siteNav">
	<ul class="pkp_helpers_flatlist pkp_helpers_align_left">
		<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
			<?php if (array_intersect ( array ( ROLE_ID_SITE_ADMIN ) , $this->_tpl_vars['userRoles'] )): ?>
				<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'admin','op' => 'index'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.admin"), $this);?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['multiplePresses']): ?>
			<li><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/pressSwitcher.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></li>
		<?php endif; ?>
	</ul>
	<ul class="pkp_helpers_flatlist pkp_helpers_align_right">
		<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
			<li class="profile"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.hello"), $this);?>
&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'profile'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['loggedInUsername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></li>
			<li><?php echo $this->_plugins['function']['null_link_action'][0][0]->smartyNullLinkAction(array('id' => 'toggleHelp','key' => "help.toggleInlineHelpOn"), $this);?>
</li>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'signOut'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.logOut"), $this);?>
</a></li>
		<?php else: ?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.register"), $this);?>
</a></li>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.login"), $this);?>
</a></li>
		<?php endif; ?>
	</ul>
</div>