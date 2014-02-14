<?php /* Smarty version 2.6.26, created on 2013-11-06 14:05:56
         compiled from controllers/grid/catalogEntry/form/salesRightsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/catalogEntry/form/salesRightsForm.tpl', 17, false),array('function', 'fbvElement', 'controllers/grid/catalogEntry/form/salesRightsForm.tpl', 23, false),array('function', 'fbvFormButtons', 'controllers/grid/catalogEntry/form/salesRightsForm.tpl', 38, false),array('modifier', 'escape', 'controllers/grid/catalogEntry/form/salesRightsForm.tpl', 18, false),array('block', 'fbvFormArea', 'controllers/grid/catalogEntry/form/salesRightsForm.tpl', 21, false),array('block', 'fbvFormSection', 'controllers/grid/catalogEntry/form/salesRightsForm.tpl', 22, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#addSalesRightsForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="addSalesRightsForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.catalogEntry.SalesRightsGridHandler",'op' => 'updateRights'), $this);?>
">
	<input type="hidden" name="monographId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['monographId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="publicationFormatId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['publicationFormatId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="salesRightsId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['salesRightsId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'addRights')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.catalogEntry.salesRightsType",'for' => 'type','required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','from' => $this->_tpl_vars['salesRights'],'selected' => $this->_tpl_vars['type'],'id' => 'type','translate' => false), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'value','list' => 'true','description' => "grid.catalogEntry.salesRightsROW.tip")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		
			<?php if ($this->_tpl_vars['ROWSetting']): ?>
				<?php $this->assign('checked', true); ?>
			<?php else: ?>
				<?php $this->assign('checked', false); ?>
			<?php endif; ?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'ROWSetting','checked' => $this->_tpl_vars['checked'],'list' => 'true','label' => "grid.catalogEntry.salesRightsROW"), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/catalogEntry/form/countriesAndRegions.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>