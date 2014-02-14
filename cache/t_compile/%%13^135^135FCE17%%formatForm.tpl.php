<?php /* Smarty version 2.6.26, created on 2013-11-01 12:55:20
         compiled from controllers/grid/catalogEntry/form/formatForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/catalogEntry/form/formatForm.tpl', 17, false),array('function', 'fbvElement', 'controllers/grid/catalogEntry/form/formatForm.tpl', 22, false),array('function', 'fbvFormButtons', 'controllers/grid/catalogEntry/form/formatForm.tpl', 29, false),array('modifier', 'escape', 'controllers/grid/catalogEntry/form/formatForm.tpl', 18, false),array('block', 'fbvFormArea', 'controllers/grid/catalogEntry/form/formatForm.tpl', 20, false),array('block', 'fbvFormSection', 'controllers/grid/catalogEntry/form/formatForm.tpl', 21, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#addPublicationFormatForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="addPublicationFormatForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.catalogEntry.PublicationFormatGridHandler",'op' => 'updateFormat'), $this);?>
">
	<input type="hidden" name="monographId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['monographId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="publicationFormatId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['publicationFormatId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'addFormat','class' => 'border','title' => "grid.catalogEntry.publicationFormatDetails")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'title')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','required' => 'true','id' => 'name','label' => "common.name",'value' => ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'multilingual' => 'true','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','label' => "grid.catalogEntry.publicationFormatType",'from' => $this->_tpl_vars['entryKeys'],'selected' => $this->_tpl_vars['entryKey'],'id' => 'entryKey','translate' => false,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'publicationFormat','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','label' => "grid.catalogEntry.physicalFormat",'id' => 'isPhysicalFormat','checked' => $this->_tpl_vars['isPhysicalFormat']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

</form>