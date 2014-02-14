<?php /* Smarty version 2.6.26, created on 2013-11-06 14:02:43
         compiled from controllers/modals/submissionMetadata/catalogEntryTabs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/modals/submissionMetadata/catalogEntryTabs.tpl', 25, false),array('function', 'url', 'controllers/modals/submissionMetadata/catalogEntryTabs.tpl', 29, false),array('function', 'counter', 'controllers/modals/submissionMetadata/catalogEntryTabs.tpl', 34, false),array('modifier', 'escape', 'controllers/modals/submissionMetadata/catalogEntryTabs.tpl', 37, false),array('modifier', 'concat', 'controllers/modals/submissionMetadata/catalogEntryTabs.tpl', 38, false),)), $this); ?>

<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#newCatalogEntryTabs').pkpHandler(
				'$.pkp.controllers.tab.catalogEntry.CatalogEntryTabHandler',
				{
					<?php if ($this->_tpl_vars['selectedTab']): ?>selected:<?php echo $this->_tpl_vars['selectedTab']; ?>
,<?php endif; ?>
					<?php if ($this->_tpl_vars['selectedFormatId']): ?>selectedFormatId:<?php echo $this->_tpl_vars['selectedFormatId']; ?>
,<?php endif; ?>
					<?php if ($this->_tpl_vars['tabsUrl']): ?>tabsUrl:'<?php echo $this->_tpl_vars['tabsUrl']; ?>
',<?php endif; ?>
					<?php if ($this->_tpl_vars['tabContentUrl']): ?>tabContentUrl:'<?php echo $this->_tpl_vars['tabContentUrl']; ?>
',<?php endif; ?>
					emptyLastTab: true
				});
	});
</script>
<?php if (! $this->_tpl_vars['hideHelp']): ?><p class="pkp_help"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.manage.entryDescription"), $this);?>
</p><?php endif; ?>
<div id="newCatalogEntryTabs">
	<ul>
		<li>
			<a title="submission" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.catalogEntry.CatalogEntryTabHandler",'tab' => 'submission','op' => 'submissionMetadata','monographId' => ($this->_tpl_vars['monographId']),'stageId' => $this->_tpl_vars['stageId'],'tabPos' => '0'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.catalogEntry.monographMetadata"), $this);?>
</a>
		</li>
		<li>
			<a title="catalog" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.catalogEntry.CatalogEntryTabHandler",'tab' => 'catalog','op' => 'catalogMetadata','monographId' => ($this->_tpl_vars['monographId']),'stageId' => $this->_tpl_vars['stageId'],'tabPos' => '1'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.catalogEntry.catalogMetadata"), $this);?>
</a>
		</li>
		<?php echo smarty_function_counter(array('start' => 2,'assign' => 'counter'), $this);?>

		<?php $_from = $this->_tpl_vars['publicationFormats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['format']):
?>
			<li>
				<a id="publication<?php echo ((is_array($_tmp=$this->_tpl_vars['format']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"
					href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.catalogEntry.CatalogEntryTabHandler",'tab' => ((is_array($_tmp='publication')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['format']->getId()) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['format']->getId())),'op' => 'publicationMetadata','publicationFormatId' => $this->_tpl_vars['format']->getId(),'monographId' => $this->_tpl_vars['monographId'],'stageId' => $this->_tpl_vars['stageId'],'tabPos' => $this->_tpl_vars['counter']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['format']->getLocalizedName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
			</li>
			<?php echo smarty_function_counter(array(), $this);?>
 		<?php endforeach; endif; unset($_from); ?>
</ul>