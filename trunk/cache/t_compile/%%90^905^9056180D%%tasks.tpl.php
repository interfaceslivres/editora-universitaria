<?php /* Smarty version 2.6.26, created on 2013-10-30 14:02:45
         compiled from dashboard/tasks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'dashboard/tasks.tpl', 16, false),array('function', 'translate', 'dashboard/tasks.tpl', 28, false),array('function', 'fbvElement', 'dashboard/tasks.tpl', 29, false),array('function', 'load_url_in_div', 'dashboard/tasks.tpl', 42, false),array('block', 'fbvFormSection', 'dashboard/tasks.tpl', 27, false),array('modifier', 'assign', 'dashboard/tasks.tpl', 41, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#pressSubmissionForm').pkpHandler('$.pkp.controllers.dashboard.form.DashboardTaskFormHandler',
			{
				<?php if ($this->_tpl_vars['pressCount'] == 1): ?>
					singlePressSubmissionUrl: '<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('press' => $this->_tpl_vars['press']->getPath(),'page' => 'submission','op' => 'wizard'), $this);?>
',
				<?php endif; ?>
				trackFormChanges: false
			}
		);
	});
</script>
<br />
<form class="pkp_form" id="pressSubmissionForm">
<!-- New Submission entry point -->
	<?php if ($this->_tpl_vars['pressCount'] > 1): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.submit.newSubmissionMultiple")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "press.select"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('defaultLabel', ob_get_contents());ob_end_clean(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'multiplePress','from' => $this->_tpl_vars['presses'],'defaultValue' => 0,'defaultLabel' => $this->_tpl_vars['defaultLabel'],'translate' => false,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php elseif ($this->_tpl_vars['pressCount'] == 1): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.newSubmissionSingle",'pressName' => $this->_tpl_vars['press']->getLocalizedName()), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('singleLabel', ob_get_contents());ob_end_clean(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'button','id' => 'singlePress','label' => $this->_tpl_vars['singleLabel'],'translate' => false), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

</form>
<div class="pkp_helpers_clear"></div>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.notifications.NotificationsGridHandler",'op' => 'fetchGrid'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'notificationsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'notificationsGridUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'notificationsGrid','url' => $this->_tpl_vars['notificationsGridUrl']), $this);?>
