<?php /* Smarty version 2.6.26, created on 2013-11-01 12:46:34
         compiled from workflow/production.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'workflow/production.tpl', 29, false),array('function', 'url', 'workflow/production.tpl', 31, false),array('function', 'load_url_in_div', 'workflow/production.tpl', 32, false),array('modifier', 'assign', 'workflow/production.tpl', 31, false),array('modifier', 'uniqid', 'workflow/production.tpl', 39, false),array('block', 'fbvFormArea', 'workflow/production.tpl', 35, false),array('block', 'fbvFormSection', 'workflow/production.tpl', 36, false),)), $this); ?>
<?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "workflow/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
	// Initialise JS handler.
	$(function() {
		$('#production').pkpHandler(
			'$.pkp.pages.workflow.ProductionHandler',
			{
				formatsTabContainerSelector: '#publicationFormatTabsContainer',
				submissionProgressBarSelector: '#submissionProgressBarDiv'
			}
		);
	});
</script>

<div id="production">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'productionNotification','requestOptions' => $this->_tpl_vars['productionNotificationRequestOptions'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<p class="pkp_help"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.monograph.production.introduction"), $this);?>
</p>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.productionReady.ProductionReadyFilesGridHandler",'op' => 'fetchGrid','monographId' => $this->_tpl_vars['monograph']->getId(),'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'productionReadyFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'productionReadyFilesGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'productionReadyFilesGridDiv','url' => $this->_tpl_vars['productionReadyFilesGridUrl']), $this);?>


	<?php if (array_intersect ( array ( ROLE_ID_PRESS_MANAGER , ROLE_ID_SERIES_EDITOR ) , $this->_tpl_vars['userRoles'] )): ?>
		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'publicationFormats')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<!--  Formats -->
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.catalogEntry.PublicationFormatGridHandler",'op' => 'fetchGrid','monographId' => $this->_tpl_vars['monograph']->getId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'formatGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'formatGridUrl'));?>

				<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => ((is_array($_tmp='formatsGridContainer')) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)),'url' => $this->_tpl_vars['formatGridUrl']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php else: ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.publicationFormats"), $this);?>
</h3>
	<?php endif; ?>

	<div id='publicationFormatTabsContainer'>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "workflow/productionFormatsTab.tpl", 'smarty_include_vars' => array('formatTabsId' => $this->_tpl_vars['formatTabsId'],'publicationFormats' => $this->_tpl_vars['publicationFormats'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>