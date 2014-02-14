<?php /* Smarty version 2.6.26, created on 2013-07-25 18:46:57
         compiled from admin/pressSettings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'admin/pressSettings.tpl', 17, false),array('function', 'fbvElement', 'admin/pressSettings.tpl', 21, false),array('function', 'translate', 'admin/pressSettings.tpl', 23, false),array('function', 'fbvFormButtons', 'admin/pressSettings.tpl', 45, false),array('block', 'fbvFormArea', 'admin/pressSettings.tpl', 26, false),array('block', 'fbvFormSection', 'admin/pressSettings.tpl', 27, false),array('modifier', 'assign', 'admin/pressSettings.tpl', 35, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#pressSettingsForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="pressSettingsForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.admin.press.PressGridHandler",'op' => 'updatePress'), $this);?>
">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'pressSettingsNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php if ($this->_tpl_vars['pressId']): ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('id' => 'pressId','type' => 'hidden','name' => 'pressId','value' => $this->_tpl_vars['pressId']), $this);?>

	<?php else: ?>
		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.presses.createInstructions"), $this);?>
</p>
	<?php endif; ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'pressSettings')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "manager.setup.pressName",'required' => true,'for' => 'name')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'name','value' => $this->_tpl_vars['name'],'multilingual' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "admin.presses.pressDescription",'for' => 'description')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'description','value' => $this->_tpl_vars['description'],'multilingual' => true,'rich' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "press.path",'required' => true,'for' => 'path')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'path','value' => $this->_tpl_vars['path'],'size' => @SMALL,'maxlength' => '32'), $this);?>

			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'press' => 'path'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'sampleUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'sampleUrl'));?>

						<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.presses.urlWillBe",'sampleUrl' => $this->_tpl_vars['sampleUrl']), $this);?>
</span>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'enabled','list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if ($this->_tpl_vars['enabled']): ?><?php $this->assign('enabled', 'checked'); ?><?php endif; ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'enabled','checked' => $this->_tpl_vars['enabled'],'value' => '1','label' => "admin.presses.enablePressInstructions"), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'pressSettingsFormSubmit','submitText' => "common.save"), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>

