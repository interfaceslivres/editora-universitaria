<?php /* Smarty version 2.6.26, created on 2013-07-25 14:44:00
         compiled from sidebar/sidebar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'call_hook', 'sidebar/sidebar.tpl', 9, false),array('modifier', 'assign', 'sidebar/sidebar.tpl', 9, false),)), $this); ?>
<?php echo ((is_array($_tmp=$this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::LeftSidebar"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'leftSidebarCode') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'leftSidebarCode'));?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::RightSidebar"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'rightSidebarCode') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'rightSidebarCode'));?>

<?php if (! $this->_tpl_vars['leftSidebarCode'] && ! $this->_tpl_vars['rightSidebarCode']): ?>
		<div class="pkp_structure_nosidebar">
	</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['leftSidebarCode']): ?>
	<div class="pkp_structure_sidebar pkp_structure_sidebar_left mod simple">
		<?php echo $this->_tpl_vars['leftSidebarCode']; ?>

	</div><!-- pkp_structure_sidebar_left -->
<?php endif; ?>
<?php if ($this->_tpl_vars['rightSidebarCode']): ?>
	<div class="pkp_structure_sidebar pkp_structure_sidebar_right mod simple">
		<?php echo $this->_tpl_vars['rightSidebarCode']; ?>

	</div><!-- pkp_structure_sidebar_right -->
<?php endif; ?>