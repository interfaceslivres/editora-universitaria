<?php /* Smarty version 2.6.26, created on 2013-11-01 12:33:16
         compiled from controllers/informationCenter/notify.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/informationCenter/notify.tpl', 15, false),array('function', 'load_url_in_div', 'controllers/informationCenter/notify.tpl', 26, false),array('function', 'fbvElement', 'controllers/informationCenter/notify.tpl', 29, false),array('function', 'fbvFormButtons', 'controllers/informationCenter/notify.tpl', 35, false),array('modifier', 'escape', 'controllers/informationCenter/notify.tpl', 15, false),array('modifier', 'assign', 'controllers/informationCenter/notify.tpl', 25, false),array('block', 'fbvFormArea', 'controllers/informationCenter/notify.tpl', 23, false),array('block', 'fbvFormSection', 'controllers/informationCenter/notify.tpl', 28, false),)), $this); ?>
<script type="text/javascript">
	// Attach the file upload form handler.
	$(function() {
		$('#notifyForm').pkpHandler(
			'$.pkp.controllers.informationCenter.form.InformationCenterNotifyHandler',
			{
				templateUrl: "<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "informationCenter.SubmissionInformationCenterHandler",'op' => 'fetchTemplateBody','monographId' => $this->_tpl_vars['monographId']), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
"
			}
		);
	});
</script>
<div id="informationCenterNotifyTab">
	<form class="pkp_form" id="notifyForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'sendNotification','params' => $this->_tpl_vars['linkParams']), $this);?>
" method="post">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'notifyFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'notifyFormArea')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if ($this->_tpl_vars['lastEventUser']): ?><?php $this->assign('userId', $this->_tpl_vars['lastEventUser']->getUserId()); ?><?php endif; ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "listbuilder.users.NotifyUsersListbuilderHandler",'op' => 'fetch','params' => $this->_tpl_vars['linkParams'],'userId' => $this->_tpl_vars['userId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'notifyUsersUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'notifyUsersUrl'));?>

			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'notifyUsersContainer','url' => $this->_tpl_vars['notifyUsersUrl']), $this);?>


			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "informationCenter.notify.chooseMessage",'for' => 'template','size' => $this->_tpl_vars['fbvStyles']['size']['medium'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','from' => $this->_tpl_vars['templates'],'translate' => false,'id' => 'template','defaultValue' => "",'defaultLabel' => ""), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "informationCenter.notify.message",'for' => 'message','required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'message'), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'notifyButton','hideCancel' => true,'submitText' => "submission.informationCenter.notify"), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</form>
</div>