<?php /* Smarty version 2.6.26, created on 2013-11-06 14:02:53
         compiled from controllers/tab/catalogEntry/form/digitalPublicationFormat.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormArea', 'controllers/tab/catalogEntry/form/digitalPublicationFormat.tpl', 2, false),array('block', 'fbvFormSection', 'controllers/tab/catalogEntry/form/digitalPublicationFormat.tpl', 3, false),array('function', 'fbvElement', 'controllers/tab/catalogEntry/form/digitalPublicationFormat.tpl', 4, false),array('modifier', 'escape', 'controllers/tab/catalogEntry/form/digitalPublicationFormat.tpl', 4, false),)), $this); ?>
<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'productDimensions','title' => "monograph.publicationFormat.digitalInformation",'class' => 'border')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'digitalInformation')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "monograph.publicationFormat.productFileSize",'name' => 'fileSize','id' => 'fileSize','value' => ((is_array($_tmp=$this->_tpl_vars['fileSize'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'maxlength' => '255','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => 'true','required' => 'true'), $this);?>

		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','label' => "monograph.publicationFormat.technicalProtection",'from' => $this->_tpl_vars['technicalProtectionCodes'],'selected' => $this->_tpl_vars['technicalProtectionCode'],'translate' => false,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => 'true','id' => 'technicalProtectionCode'), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'override','list' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','label' => "monograph.publicationFormat.productFileSize.override",'id' => 'override','checked' => $this->_tpl_vars['override']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>