<?php /* Smarty version 2.6.26, created on 2013-07-25 14:44:00
         compiled from file:C:%5Cwamp%5Cwww%5Ceditora/plugins/blocks/languageToggle/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:C:\\wamp\\www\\editora/plugins/blocks/languageToggle/block.tpl', 11, false),array('function', 'url', 'file:C:\\wamp\\www\\editora/plugins/blocks/languageToggle/block.tpl', 14, false),array('function', 'html_options', 'file:C:\\wamp\\www\\editora/plugins/blocks/languageToggle/block.tpl', 15, false),array('modifier', 'escape', 'file:C:\\wamp\\www\\editora/plugins/blocks/languageToggle/block.tpl', 14, false),)), $this); ?>
<?php if ($this->_tpl_vars['enableLanguageToggle']): ?>
<div class="block" id="sidebarLanguageToggle">
	<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.language"), $this);?>
</span>
	<form class="pkp_form" action="#">
		<p>
			<select class="applyPlugin selectMenu" size="1" name="locale" onchange="location.href=<?php if ($this->_tpl_vars['languageToggleNoUser']): ?>'<?php echo ((is_array($_tmp=$this->_tpl_vars['currentUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if (strstr ( $this->_tpl_vars['currentUrl'] , '?' )): ?>&amp;<?php else: ?>?<?php endif; ?>setLocale='+this.options[this.selectedIndex].value<?php else: ?>('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'setLocale','path' => 'NEW_LOCALE','source' => $_SERVER['REQUEST_URI']), $this);?>
'.replace('NEW_LOCALE', this.options[this.selectedIndex].value))<?php endif; ?>">
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['languageToggleLocales'],'selected' => $this->_tpl_vars['currentLocale']), $this);?>

			</select>
		</p>
	</form>
</div>
<?php endif; ?>