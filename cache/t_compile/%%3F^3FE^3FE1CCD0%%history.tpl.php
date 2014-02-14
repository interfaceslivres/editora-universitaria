<?php /* Smarty version 2.6.26, created on 2013-11-01 12:33:18
         compiled from controllers/informationCenter/history.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/informationCenter/history.tpl', 16, false),array('function', 'translate', 'controllers/informationCenter/history.tpl', 30, false),array('modifier', 'escape', 'controllers/informationCenter/history.tpl', 16, false),)), $this); ?>

<script type="text/javascript">
	// Attach the Notes handler.
	$(function() {
		$('#informationCenterHistoryTab').pkpHandler(
			'$.pkp.controllers.informationCenter.HistoryHandler',
			{
				fetchHistoryUrl: '<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'listHistory','params' => $this->_tpl_vars['linkParams'],'escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
',
				fetchPastHistoryUrl: '<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'listPastHistory','params' => $this->_tpl_vars['linkParams'],'escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
'
			}
		);
	});
</script>

<div id="informationCenterHistoryTab">
	<?php if ($this->_tpl_vars['showEarlierEntries']): ?>
			<div id="historyAccordion">
			<h3><a href="#"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "informationCenter.currentHistory"), $this);?>
</a></h3>
	<?php endif; ?>

		<div id="historyList">
	</div>
	<?php if ($this->_tpl_vars['showEarlierEntries']): ?>
			<h3><a href="#" id="showPastHistoryLink"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "informationCenter.pastHistory"), $this);?>
</a></h3>
						<div id="pastHistoryList">
			</div>
		</div>
	<?php endif; ?>
</div>