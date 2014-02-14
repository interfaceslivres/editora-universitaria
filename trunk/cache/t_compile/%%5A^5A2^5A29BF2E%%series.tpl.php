<?php /* Smarty version 2.6.26, created on 2013-10-30 14:03:52
         compiled from submission/form/series.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormSection', 'submission/form/series.tpl', 10, false),array('function', 'fbvElement', 'submission/form/series.tpl', 11, false),array('modifier', 'escape', 'submission/form/series.tpl', 15, false),)), $this); ?>
<?php if (count ( $this->_tpl_vars['seriesOptions'] ) > 1): ?> 	<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "series.series",'description' => "submission.submit.placement.seriesDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'seriesId','from' => $this->_tpl_vars['seriesOptions'],'selected' => $this->_tpl_vars['seriesId'],'translate' => false,'disabled' => $this->_tpl_vars['readOnly']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "submission.submit.seriesPosition",'description' => "submission.submit.placement.seriesPositionDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'seriesPosition','name' => 'seriesPosition','value' => ((is_array($_tmp=$this->_tpl_vars['seriesPosition'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'maxlength' => '255','disabled' => $this->_tpl_vars['readOnly']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>