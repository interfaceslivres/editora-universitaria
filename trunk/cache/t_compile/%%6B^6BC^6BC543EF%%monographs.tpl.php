<?php /* Smarty version 2.6.26, created on 2013-10-30 14:04:25
         compiled from catalog/monographs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'catalog/monographs.tpl', 19, false),array('modifier', 'assign', 'catalog/monographs.tpl', 19, false),array('modifier', 'count', 'catalog/monographs.tpl', 21, false),)), $this); ?>
<script type="text/javascript">
	// Initialize JS handler.
	$(function() {
		$('#monographListContainer').pkpHandler(
			'$.pkp.pages.catalog.MonographPublicListHandler'
		);
	});
</script>
<div class="pkp_catalog_monographs" id="monographListContainer">
	<?php if ($this->_tpl_vars['monographListTitleKey']): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['monographListTitleKey']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'monographListTitle') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'monographListTitle'));?>

	<?php else: ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.browseTitles",'numTitles' => count($this->_tpl_vars['publishedMonographs'])), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'monographListTitle') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'monographListTitle'));?>

	<?php endif; ?>
	<h2><em><?php echo $this->_tpl_vars['monographListTitle']; ?>
</em></h2>
	<?php if (count($this->_tpl_vars['publishedMonographs'])): ?>
		<ul class="pkp_helpers_clear">
		<?php $_from = $this->_tpl_vars['publishedMonographs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['publishedMonograph']):
?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "catalog/monograph.tpl", 'smarty_include_vars' => array('publishedMonograph' => $this->_tpl_vars['publishedMonograph'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endforeach; endif; unset($_from); ?>
		</ul>
	<?php endif; ?>
</div>