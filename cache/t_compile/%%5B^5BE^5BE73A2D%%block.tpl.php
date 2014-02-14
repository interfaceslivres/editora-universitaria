<?php /* Smarty version 2.6.26, created on 2013-07-25 18:51:29
         compiled from file:C:%5Cwamp%5Cwww%5Ceditora/plugins/blocks/browse/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'file:C:\\wamp\\www\\editora/plugins/blocks/browse/block.tpl', 12, false),array('function', 'translate', 'file:C:\\wamp\\www\\editora/plugins/blocks/browse/block.tpl', 12, false),array('modifier', 'escape', 'file:C:\\wamp\\www\\editora/plugins/blocks/browse/block.tpl', 17, false),array('block', 'iterate', 'file:C:\\wamp\\www\\editora/plugins/blocks/browse/block.tpl', 19, false),)), $this); ?>
<div class="block" id="sidebarBrowse">

	<span class="blockTitle pkp_helpers_dotted_underline"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'catalog','op' => 'newReleases'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.newReleases"), $this);?>
</a></span>
	<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.browse"), $this);?>
</span>

	<form class="pkp_form" action="#">
		<div id="browseCategoryContainer">
			<select class="applyPlugin selectMenu" size="1" name="browseCategory" onchange="location.href=('<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'catalog','op' => 'category','path' => 'CATEGORY_PATH'), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
'.replace('CATEGORY_PATH', this.options[this.selectedIndex].value))">
				<option disabled="disabled"<?php if (! $this->_tpl_vars['browseBlockSelectedCategory']): ?> selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.browse.category"), $this);?>
</option>
				<?php $this->_tag_stack[] = array('iterate', array('from' => 'browseCategories','item' => 'browseCategory')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<option <?php if ($this->_tpl_vars['browseBlockSelectedCategory'] == $this->_tpl_vars['browseCategory']->getPath()): ?>selected="selected"<?php endif; ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['browseCategory']->getPath())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php if ($this->_tpl_vars['browseCategory']->getParentId()): ?>&nbsp;&nbsp;<?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['browseCategory']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</option>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			</select>
		</div>
		<div id="browseSeriesContainer">
			<select class="applyPlugin selectMenu" size="1" name="browseSeries" onchange="location.href=('<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'catalog','op' => 'series','path' => 'SERIES_PATH'), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
'.replace('SERIES_PATH', this.options[this.selectedIndex].value))">
				<option disabled="disabled"<?php if (! $this->_tpl_vars['browseBlockSelectedSeries']): ?> selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.browse.series"), $this);?>
</option>
				<?php $this->_tag_stack[] = array('iterate', array('from' => 'browseSeries','item' => 'browseSeriesItem')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<option <?php if ($this->_tpl_vars['browseBlockSelectedSeries'] == $this->_tpl_vars['browseSeriesItem']->getPath()): ?>selected="selected"<?php endif; ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['browseSeriesItem']->getPath())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['browseSeriesItem']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</option>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			</select>
		</div>
	</form>
</div>