<?php /* Smarty version 2.6.26, created on 2013-11-01 12:46:35
         compiled from workflow/productionFormatsTab.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'workflow/productionFormatsTab.tpl', 16, false),array('modifier', 'escape', 'workflow/productionFormatsTab.tpl', 16, false),)), $this); ?>

<script type="text/javascript">
// Attach the JS file tab handler.
$(function() {
	$('#publicationFormatTabs').pkpHandler(
		'$.pkp.controllers.tab.publicationFormat.PublicationFormatsTabHandler',
		{
			tabsUrl:'<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'op' => 'productionFormatsTab','monographId' => $this->_tpl_vars['monograph']->getId(),'stageId' => @WORKFLOW_STAGE_ID_PRODUCTION,'escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
',
			<?php if ($this->_tpl_vars['currentFormatTabId']): ?>currentFormatTabId: '<?php echo $this->_tpl_vars['currentFormatTabId']; ?>
',<?php endif; ?>
			emptyLastTab: true,
		}
	);
});
</script>
<div id="publicationFormatTabs">
	<ul>
		<?php $_from = $this->_tpl_vars['publicationFormats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['format']):
?>
			<li>				<a id="publication<?php echo ((is_array($_tmp=$this->_tpl_vars['format']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"
					href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'op' => 'fetchPublicationFormat','publicationFormatId' => $this->_tpl_vars['format']->getId(),'monographId' => $this->_tpl_vars['format']->getMonographId(),'stageId' => @WORKFLOW_STAGE_ID_PRODUCTION), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['format']->getLocalizedName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
			</li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>
