<?php /* Smarty version 2.6.26, created on 2013-07-25 18:45:27
         compiled from admin/presses.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'admin/presses.tpl', 30, false),array('function', 'load_url_in_div', 'admin/presses.tpl', 31, false),array('modifier', 'assign', 'admin/presses.tpl', 30, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "press.presses"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
	// Initialise JS handler.
	$(function() {
		$('#presses').pkpHandler(
				'$.pkp.pages.admin.PressesHandler');
	});
</script>

<div id="presses" >

	<?php if ($this->_tpl_vars['openWizardLinkAction']): ?>
		<div id="<?php echo $this->_tpl_vars['openWizardLinkAction']->getId(); ?>
" class="pkp_linkActions inline">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['openWizardLinkAction'],'contextId' => 'presses','selfActivate' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
	<?php endif; ?>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.admin.press.PressGridHandler",'op' => 'fetchGrid'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pressesUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pressesUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'pressGridContainer','url' => $this->_tpl_vars['pressesUrl']), $this);?>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>