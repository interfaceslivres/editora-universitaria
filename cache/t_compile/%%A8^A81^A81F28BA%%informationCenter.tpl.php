<?php /* Smarty version 2.6.26, created on 2013-11-01 12:33:04
         compiled from controllers/informationCenter/informationCenter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'controllers/informationCenter/informationCenter.tpl', 15, false),array('modifier', 'date_format', 'controllers/informationCenter/informationCenter.tpl', 22, false),array('function', 'translate', 'controllers/informationCenter/informationCenter.tpl', 22, false),array('function', 'url', 'controllers/informationCenter/informationCenter.tpl', 29, false),)), $this); ?>

<script type="text/javascript">
	// Attach the Information Center handler.
	$(function() {
		$('#informationCenter').pkpHandler(
			'$.pkp.controllers.TabHandler', {
				selected: <?php echo ((is_array($_tmp=$this->_tpl_vars['selectedTabIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>

			}
		);
	});
</script>

<?php if ($this->_tpl_vars['lastEvent']): ?>
	<span class="pkp_controllers_informationCenter_itemLastEvent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "informationCenter.lastUpdated"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['lastEvent']->getDateLogged())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['lastEventUser']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</span>
	<br /><br />
<?php endif; ?>

<div id="informationCenter" class="pkp_controllers_informationCenter">
	<ul>
		<?php if (array_intersect ( array ( ROLE_ID_PRESS_MANAGER , ROLE_ID_SERIES_EDITOR , ROLE_ID_PRESS_ASSISTANT ) , $this->_tpl_vars['userRoles'] ) && $this->_tpl_vars['showMetadataLink']): ?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'metadata','params' => $this->_tpl_vars['linkParams']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.informationCenter.metadata"), $this);?>
</a></li>
		<?php endif; ?>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewNotes','params' => $this->_tpl_vars['linkParams']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.informationCenter.notes"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewNotify','params' => $this->_tpl_vars['linkParams']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.informationCenter.notify"), $this);?>
</a></li>
		<?php if (! $this->_tpl_vars['removeHistoryTab']): ?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewHistory','params' => $this->_tpl_vars['linkParams']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.informationCenter.history"), $this);?>
</a></li>
		<?php endif; ?>
	</ul>
</div>