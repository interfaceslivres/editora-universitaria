<?php /* Smarty version 2.6.26, created on 2013-11-01 14:55:44
         compiled from controllers/grid/settings/user/form/userForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/settings/user/form/userForm.tpl', 15, false),array('function', 'translate', 'controllers/grid/settings/user/form/userForm.tpl', 16, false),array('function', 'fbvElement', 'controllers/grid/settings/user/form/userForm.tpl', 44, false),array('function', 'load_url_in_div', 'controllers/grid/settings/user/form/userForm.tpl', 174, false),array('function', 'fbvFormButtons', 'controllers/grid/settings/user/form/userForm.tpl', 178, false),array('modifier', 'escape', 'controllers/grid/settings/user/form/userForm.tpl', 15, false),array('modifier', 'assign', 'controllers/grid/settings/user/form/userForm.tpl', 173, false),array('block', 'fbvFormArea', 'controllers/grid/settings/user/form/userForm.tpl', 40, false),array('block', 'fbvFormSection', 'controllers/grid/settings/user/form/userForm.tpl', 42, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#userForm').pkpHandler('$.pkp.controllers.grid.settings.user.form.UserFormHandler',
			{
				fetchUsernameSuggestionUrl: '<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.user.UserGridHandler",'op' => 'suggestUsername','params' => $this->_tpl_vars['suggestUsernameParams'],'escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
',
				usernameSuggestionTextAlert: '<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.user.mustProvideName"), $this);?>
'
			}
		);
	});
</script>

<?php if (! $this->_tpl_vars['userId']): ?>
	<?php $this->assign('passwordRequired', 'true'); ?>
<?php endif; ?>
<form class="pkp_form" id="userForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.user.UserGridHandler",'op' => 'updateUser'), $this);?>
">
	<div id="userFormContainer">
		<div id="userDetails" class="full left">
			<?php if ($this->_tpl_vars['userId']): ?>
				<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.user.userDetails"), $this);?>
</h3>
			<?php else: ?>
				<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.user.step1"), $this);?>
</h3>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['userId']): ?>
				<input type="hidden" id="userId" name="userId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
			<?php endif; ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'userFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
		<div id="userFormCompactLeftContainer" class="pkp_helpers_clear">
			<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'userFormCompactLeft')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php if (! $this->_tpl_vars['userId']): ?><?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.usernameRestriction"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('usernameInstruction', ob_get_contents());ob_end_clean(); ?><?php endif; ?>
				<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'username','description' => $this->_tpl_vars['usernameInstruction'],'translate' => false)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php if (! $this->_tpl_vars['userId']): ?>
						<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.username",'id' => 'username','required' => 'true','value' => ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'maxlength' => '32','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

						<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'button','label' => "common.suggest",'id' => 'suggestUsernameButton','inline' => true,'class' => 'default'), $this);?>

					<?php else: ?>
						<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "user.username",'suppressId' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					<?php endif; ?>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

				<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "user.name")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.firstName",'required' => 'true','id' => 'firstName','value' => ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'maxlength' => '40','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.middleName",'id' => 'middleName','value' => ((is_array($_tmp=$this->_tpl_vars['middleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'maxlength' => '40','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.lastName",'required' => 'true','id' => 'lastName','value' => ((is_array($_tmp=$this->_tpl_vars['lastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'maxlength' => '40','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

				<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "about.contact")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.email",'id' => 'email','required' => 'true','value' => ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'maxlength' => '90','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

				<?php if ($this->_tpl_vars['authSourceOptions']): ?>
					<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.user.authSource",'for' => 'authId')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','name' => 'authId','id' => 'authId','defaultLabel' => "",'defaultValue' => "",'from' => $this->_tpl_vars['authSourceOptions'],'translate' => 'true','selected' => $this->_tpl_vars['authId']), $this);?>

					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php endif; ?>

				<?php if (! $this->_tpl_vars['implicitAuth']): ?>
					<?php if ($this->_tpl_vars['userId']): ?><?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.profile.leavePasswordBlank"), $this);?>
 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.passwordLengthRestriction",'length' => $this->_tpl_vars['minPasswordLength']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('passwordInstruction', ob_get_contents());ob_end_clean(); ?><?php endif; ?>
					<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'passwordSection','class' => 'border','title' => "user.password")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'password','class' => 'border','description' => $this->_tpl_vars['passwordInstruction'],'translate' => false)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.password",'required' => $this->_tpl_vars['passwordRequired'],'name' => 'password','id' => 'password','password' => 'true','value' => $this->_tpl_vars['password'],'maxlength' => '32','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

							<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.repeatPassword",'required' => $this->_tpl_vars['passwordRequired'],'name' => 'password2','id' => 'password2','password' => 'true','value' => $this->_tpl_vars['password2'],'maxlength' => '32','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						<?php if (! $this->_tpl_vars['userId']): ?>
							<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.user.generatePassword",'for' => 'generatePassword','list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
								<?php if ($this->_tpl_vars['generatePassword']): ?>
									<?php $this->assign('checked', true); ?>
								<?php else: ?>
									<?php $this->assign('checked', false); ?>
								<?php endif; ?>
								<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','name' => 'generatePassword','id' => 'generatePassword','checked' => $this->_tpl_vars['checked'],'label' => "grid.user.generatePasswordDescription",'translate' => 'true'), $this);?>

							<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						<?php endif; ?>						<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.user.mustChangePassword",'for' => 'mustChangePassword','list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<?php if ($this->_tpl_vars['mustChangePassword']): ?>
								<?php $this->assign('checked', true); ?>
							<?php else: ?>
								<?php $this->assign('checked', false); ?>
							<?php endif; ?>
							<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','name' => 'mustChangePassword','id' => 'mustChangePassword','checked' => $this->_tpl_vars['checked'],'label' => "grid.user.mustChangePasswordDescription",'translate' => 'true'), $this);?>

						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

				<?php endif; ?>
				<?php if (! $this->_tpl_vars['implicitAuth'] && ! $this->_tpl_vars['userId']): ?>
					<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.user.notifyUser",'for' => 'sendNotify','list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php if ($this->_tpl_vars['sendNotify']): ?>
							<?php $this->assign('checked', true); ?>
						<?php else: ?>
							<?php $this->assign('checked', false); ?>
						<?php endif; ?>
						<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','name' => 'sendNotify','id' => 'sendNotify','checked' => $this->_tpl_vars['checked'],'label' => "grid.user.notifyUserDescription",'translate' => 'true'), $this);?>

					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php endif; ?> 			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
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
					<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'interests')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'interests','id' => 'interests','interestsKeywords' => $this->_tpl_vars['interestsKeywords'],'interestsTextOnly' => $this->_tpl_vars['interestsTextOnly'],'label' => "user.interests"), $this);?>

					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

					<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'affiliation')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.affiliation",'multilingual' => 'true','name' => 'affiliation','id' => 'affiliation','value' => $this->_tpl_vars['affiliation'],'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['LARGE']), $this);?>

					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

					<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','label' => "user.biography",'multilingual' => 'true','name' => 'biography','id' => 'biography','value' => $this->_tpl_vars['biography'],'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

						<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','label' => "common.mailingAddress",'name' => 'mailingAddress','id' => 'mailingAddress','value' => $this->_tpl_vars['mailingAddress'],'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					<br />
					<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.biography.description"), $this);?>
</span>

					<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','label' => "user.signature",'multilingual' => 'true','name' => 'signature','id' => 'signature','value' => $this->_tpl_vars['signature'],'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

					<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'country')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','label' => "common.country",'name' => 'country','id' => 'country','defaultLabel' => "",'defaultValue' => "",'from' => $this->_tpl_vars['countries'],'selected' => $this->_tpl_vars['country'],'translate' => '0','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

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
			<?php if ($this->_tpl_vars['userId']): ?>
				<div id="userRoles" class="full left">
					<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.user.userRoles"), $this);?>
</h3>
					<div id="userRolesContainer" class="full left">
						<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "listbuilder.users.UserUserGroupListbuilderHandler",'op' => 'fetch','userId' => $this->_tpl_vars['userId'],'title' => "grid.user.addRoles",'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'userRolesUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'userRolesUrl'));?>

						<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'userRolesContainer','url' => $this->_tpl_vars['userRolesUrl']), $this);?>

					</div>
				</div>
			<?php endif; ?>
			<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

		</div>
</form>