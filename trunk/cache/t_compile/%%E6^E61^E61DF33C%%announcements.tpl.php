<?php /* Smarty version 2.6.26, created on 2014-03-15 23:27:37
         compiled from announcements/announcements.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'announcements/announcements.tpl', 12, false),array('modifier', 'assign', 'announcements/announcements.tpl', 16, false),array('function', 'url', 'announcements/announcements.tpl', 16, false),array('function', 'load_url_in_div', 'announcements/announcements.tpl', 17, false),)), $this); ?>
<?php if ($this->_tpl_vars['announcementsIntroduction']): ?>
	<div id="announcementsIntro">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['announcementsIntroduction'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

	</div>
<?php endif; ?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.content.announcements.ViewAnnouncementGridHandler",'op' => 'fetchGrid','displayLimit' => $this->_tpl_vars['displayLimit']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'announcementGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'announcementGridUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'announcementGridContainer','url' => ($this->_tpl_vars['announcementGridUrl'])), $this);?>