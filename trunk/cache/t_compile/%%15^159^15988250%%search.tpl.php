<?php /* Smarty version 2.6.26, created on 2013-07-25 14:43:55
         compiled from common/search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'common/search.tpl', 16, false),array('function', 'translate', 'common/search.tpl', 18, false),array('modifier', 'escape', 'common/search.tpl', 18, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		$('#topSearchFormField').jLabel();
	});
</script>

<div class="pkp_structure_search pkp_helpers_align_right">
	<form id="topSearchForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'catalog','op' => 'results'), $this);?>
" method="post">
		<fieldset>
			<input id="topSearchFormField" name="query" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['searchQuery'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" type="text" title="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.searchCatalog"), $this);?>
..." />
			<button class="go"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.go"), $this);?>
</button>
		</fieldset>
	</form>
</div>