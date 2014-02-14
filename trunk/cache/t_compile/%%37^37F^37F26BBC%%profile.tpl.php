<?php /* Smarty version 2.6.26, created on 2013-11-01 14:28:39
         compiled from user/profile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'user/profile.tpl', 21, false),array('function', 'translate', 'user/profile.tpl', 30, false),array('function', 'fbvElement', 'user/profile.tpl', 37, false),array('function', 'fbvFormButtons', 'user/profile.tpl', 148, false),array('block', 'fbvFormArea', 'user/profile.tpl', 24, false),array('block', 'fbvFormSection', 'user/profile.tpl', 25, false),array('block', 'iterate', 'user/profile.tpl', 112, false),array('modifier', 'escape', 'user/profile.tpl', 26, false),array('modifier', 'assign', 'user/profile.tpl', 147, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "user.profile.editProfile"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#profile').pkpHandler('$.pkp.controllers.form.FormHandler');
	});
</script>

<form class="pkp_form" id="profile" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveProfile'), $this);?>
" enctype="multipart/form-data">
	<div id="userFormContainer">
		<div id="userDetails" class="full left">
			<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'userNameInfo')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "user.username")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

				<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "user.password")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'changePassword'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.changePassword"), $this);?>
</a>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</div>
	<div id="userFormCompactLeftContainer" class="pkp_helpers_clear">
		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'userFormCompactLeft')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.name")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.firstName",'required' => 'true','id' => 'firstName','value' => $this->_tpl_vars['firstName'],'maxlength' => '40','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.middleName",'id' => 'middleName','value' => $this->_tpl_vars['middleName'],'maxlength' => '40','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.lastName",'required' => 'true','id' => 'lastName','value' => $this->_tpl_vars['lastName'],'maxlength' => '40','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.suffix",'id' => 'suffix','value' => $this->_tpl_vars['suffix'],'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'inline' => true), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "about.contact")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.email",'id' => 'email','required' => 'true','value' => $this->_tpl_vars['email'],'maxlength' => '90','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true), $this);?>

				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','label' => "common.country",'name' => 'country','id' => 'country','defaultLabel' => "",'defaultValue' => "",'from' => $this->_tpl_vars['countries'],'selected' => $this->_tpl_vars['country'],'translate' => '0','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true,'required' => true), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'country')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</div>
	<?php ob_start(); ?>
		<div id="userFormExtendedContainer" class="full left">
			<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'userFormExtendedLeft')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.salutation",'name' => 'salutation','id' => 'salutation','value' => $this->_tpl_vars['salutation'],'maxlength' => '40','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','label' => "user.gender",'name' => 'gender','id' => 'gender','defaultLabel' => "",'defaultValue' => "",'from' => $this->_tpl_vars['genderOptions'],'translate' => 'true','selected' => $this->_tpl_vars['gender'],'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.initials",'name' => 'initials','id' => 'initials','value' => $this->_tpl_vars['initials'],'maxlength' => '5','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

				<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.url",'name' => 'userUrl','id' => 'userUrl','value' => $this->_tpl_vars['userUrl'],'maxlength' => '90','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.phone",'name' => 'phone','id' => 'phone','value' => $this->_tpl_vars['phone'],'maxlength' => '24','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.fax",'name' => 'fax','id' => 'fax','value' => $this->_tpl_vars['fax'],'maxlength' => '24','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

				<?php if (count ( $this->_tpl_vars['availableLocales'] ) > 1): ?>
					<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "user.workingLanguages",'list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php $_from = $this->_tpl_vars['availableLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
							<?php if ($this->_tpl_vars['userLocales'] && in_array ( $this->_tpl_vars['localeKey'] , $this->_tpl_vars['userLocales'] )): ?>
								<?php $this->assign('checked', 'true'); ?>
							<?php else: ?>
								<?php $this->assign('checked', 'false'); ?>
							<?php endif; ?>
							<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','name' => "userLocales[]",'id' => "userLocales-".($this->_tpl_vars['localeKey']),'value' => ($this->_tpl_vars['localeKey']),'checked' => $this->_tpl_vars['checked'],'label' => ($this->_tpl_vars['localeName']),'translate' => false), $this);?>

						<?php endforeach; endif; unset($_from); ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php endif; ?>

				<?php if ($this->_tpl_vars['allowRegReviewer']): ?>
					<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'interests')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'interests','id' => 'interests','interestsKeywords' => $this->_tpl_vars['interestsKeywords'],'interestsTextOnly' => $this->_tpl_vars['interestsTextOnly'],'label' => "user.interests"), $this);?>

					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php endif; ?>

				<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'affiliation')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.affiliation",'multilingual' => 'true','name' => 'affiliation','id' => 'affiliation','value' => $this->_tpl_vars['affiliation'],'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['LARGE']), $this);?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

				<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.biography"), $this);?>
 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.biography.description"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('biographyLabel', ob_get_contents());ob_end_clean(); ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','label' => ($this->_tpl_vars['biographyLabel']),'multilingual' => 'true','name' => 'biography','id' => 'biography','value' => $this->_tpl_vars['biography'],'subLabelTranslate' => false,'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','label' => "common.mailingAddress",'name' => 'mailingAddress','id' => 'mailingAddress','value' => $this->_tpl_vars['mailingAddress'],'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

				<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','label' => "user.signature",'multilingual' => 'true','name' => 'signature','id' => 'signature','value' => $this->_tpl_vars['signature'],'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</div>
	<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('extraContent', ob_get_contents());ob_end_clean(); ?>
	<div id="userExtraFormFields" class="left full">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/extrasOnDemand.tpl", 'smarty_include_vars' => array('widgetWrapper' => "#userExtraFormFields",'moreDetailsText' => "grid.user.moreDetails",'lessDetailsText' => "grid.user.lessDetails",'extraContent' => $this->_tpl_vars['extraContent'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>

	<?php if ($this->_tpl_vars['currentPress'] && ( $this->_tpl_vars['allowRegAuthor'] || $this->_tpl_vars['allowRegReviewer'] )): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "user.register.registerAs",'list' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if ($this->_tpl_vars['allowRegAuthor']): ?>
				<?php $this->_tag_stack[] = array('iterate', array('from' => 'authorUserGroups','item' => 'userGroup')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php $this->assign('userGroupId', $this->_tpl_vars['userGroup']->getId()); ?>
					<?php if (in_array ( $this->_tpl_vars['userGroup']->getId() , $this->_tpl_vars['userGroupIds'] )): ?>
						<?php $this->assign('checked', true); ?>
					<?php else: ?>
						<?php $this->assign('checked', false); ?>
					<?php endif; ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => "authorGroup-".($this->_tpl_vars['userGroupId']),'name' => "authorGroup[".($this->_tpl_vars['userGroupId'])."]",'checked' => $this->_tpl_vars['checked'],'label' => $this->_tpl_vars['userGroup']->getLocalizedName(),'translate' => false), $this);?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['allowRegReviewer']): ?>
				<?php $this->_tag_stack[] = array('iterate', array('from' => 'reviewerUserGroups','item' => 'userGroup')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php $this->assign('userGroupId', $this->_tpl_vars['userGroup']->getId()); ?>
					<?php if (in_array ( $this->_tpl_vars['userGroup']->getId() , $this->_tpl_vars['userGroupIds'] )): ?>
						<?php $this->assign('checked', true); ?>
					<?php else: ?>
						<?php $this->assign('checked', false); ?>
					<?php endif; ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => "reviewerGroup-".($this->_tpl_vars['userGroupId']),'name' => "reviewerGroup[".($this->_tpl_vars['userGroupId'])."]",'checked' => $this->_tpl_vars['checked'],'label' => $this->_tpl_vars['userGroup']->getLocalizedName(),'translate' => false), $this);?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php endif; ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	
	<br /><br />
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'dashboard'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'cancelUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'cancelUrl'));?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "common.save",'cancelUrl' => $this->_tpl_vars['cancelUrl']), $this);?>

</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
