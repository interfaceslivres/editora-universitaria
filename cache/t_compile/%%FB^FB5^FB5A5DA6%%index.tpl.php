<?php /* Smarty version 2.6.26, created on 2013-10-30 14:02:31
         compiled from dashboard/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'dashboard/index.tpl', 23, false),array('function', 'translate', 'dashboard/index.tpl', 23, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "navigation.dashboard"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#dashboardTabs').pkpHandler(
				'$.pkp.controllers.TabHandler');
	});
</script>
<div id="dashboardTabs">
	<ul>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'tasks'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "dashboard.tasks"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "dashboard.submissions"), $this);?>
</a></li>
	</ul>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
