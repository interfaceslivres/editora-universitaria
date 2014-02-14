<?php /* Smarty version 2.6.26, created on 2013-11-06 13:01:18
         compiled from controllers/grid/languages/installLanguageForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/languages/installLanguageForm.tpl', 17, false),array('function', 'fbvElement', 'controllers/grid/languages/installLanguageForm.tpl', 23, false),array('function', 'translate', 'controllers/grid/languages/installLanguageForm.tpl', 25, false),array('function', 'fbvFormButtons', 'controllers/grid/languages/installLanguageForm.tpl', 47, false),array('block', 'fbvFormArea', 'controllers/grid/languages/installLanguageForm.tpl', 20, false),array('block', 'fbvFormSection', 'controllers/grid/languages/installLanguageForm.tpl', 21, false),)), $this); ?>

 <script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#installLanguageForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="installLanguageForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.admin.languages.AdminLanguageGridHandler",'op' => 'saveInstallLocale'), $this);?>
">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'installLanguageFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'availableLocalesFormArea','title' => "admin.languages.availableLocales",'class' => 'border')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true','description' => "admin.languages.installNewLocalesInstructions")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $_from = $this->_tpl_vars['notInstalledLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['locales'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['locales']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['locale']):
        $this->_foreach['locales']['iteration']++;
?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => "locale-".($this->_tpl_vars['locale']),'name' => "localesToInstall[".($this->_tpl_vars['locale'])."]",'value' => $this->_tpl_vars['locale'],'label' => $this->_tpl_vars['allLocales'][$this->_tpl_vars['locale']],'translate' => false), $this);?>

			<?php endforeach; else: ?>
				<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.noLocalesAvailable"), $this);?>
</p>
			<?php endif; unset($_from); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'downloadLocaleFormArea','title' => "admin.languages.downloadLocales",'class' => 'border')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if ($this->_tpl_vars['downloadAvailable']): ?>
				<ul>
				<?php $_from = $this->_tpl_vars['downloadableLocaleLinks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['downloadableLocaleLinks'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['downloadableLocaleLinks']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['localeLink']):
        $this->_foreach['downloadableLocaleLinks']['iteration']++;
?>
					<li><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['localeLink'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></li>
				<?php endforeach; else: ?>
					<li><p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.noLocalesToDownload"), $this);?>
</p></li>
				<?php endif; unset($_from); ?>
				</ul>
			<?php else: ?>
				<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.downloadUnavailable"), $this);?>
</p>
			<?php endif; ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php if (! empty ( $this->_tpl_vars['notInstalledLocales'] )): ?>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'mastheadFormSubmit','submitText' => "common.save"), $this);?>

	<?php endif; ?>
</form>
