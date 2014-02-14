<?php /* Smarty version 2.6.26, created on 2013-11-01 12:57:14
         compiled from controllers/grid/users/stageParticipant/addParticipantForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 16, false),array('function', 'translate', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 22, false),array('function', 'fbvElement', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 28, false),array('function', 'fbvFormButtons', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 34, false),array('block', 'fbvFormArea', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 24, false),array('block', 'fbvFormSection', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 27, false),array('modifier', 'escape', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 25, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#addParticipantForm').pkpHandler('$.pkp.controllers.grid.users.stageParticipant.form.AddParticipantFormHandler',
			{
				fetchUserListUrl: '<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'fetchUserList','monographId' => $this->_tpl_vars['monographId'],'stageId' => $this->_tpl_vars['stageId'],'userGroupId' => $this->_tpl_vars['selectedUserGroupId'],'escape' => false), $this);?>
'
			}
		);
	});
</script>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.monograph.addStageParticipant.description"), $this);?>
</p>
<form class="pkp_form" id="addParticipantForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveParticipant'), $this);?>
" method="post">
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'addParticipant')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<input type="hidden" name="monographId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['monographId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
		<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "user.group")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'userGroupId','from' => $this->_tpl_vars['userGroupOptions'],'translate' => false,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "user.name",'required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.chooseOne"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('defaultLabel', ob_get_contents());ob_end_clean(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('class' => 'noStyling','type' => 'select','id' => 'userId','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'required' => 'true','defaultValue' => "",'defaultLabel' => $this->_tpl_vars['defaultLabel']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>