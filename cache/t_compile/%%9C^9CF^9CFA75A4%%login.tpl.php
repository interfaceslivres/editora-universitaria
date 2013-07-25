<?php /* Smarty version 2.6.26, created on 2013-07-25 18:42:24
         compiled from user/login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'user/login.tpl', 26, false),array('function', 'url', 'user/login.tpl', 33, false),array('function', 'fbvElement', 'user/login.tpl', 61, false),array('function', 'fbvFormButtons', 'user/login.tpl', 78, false),array('modifier', 'strip_unsafe_html', 'user/login.tpl', 56, false),array('modifier', 'escape', 'user/login.tpl', 56, false),array('modifier', 'assign', 'user/login.tpl', 74, false),array('block', 'fbvFormArea', 'user/login.tpl', 59, false),array('block', 'fbvFormSection', 'user/login.tpl', 60, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('helpTopicId', "user.registerAndProfile"); ?><?php echo ''; ?><?php $this->assign('registerOp', 'register'); ?><?php echo ''; ?><?php $this->assign('registerLocaleKey', "user.login.registerNewAccount"); ?><?php echo ''; ?><?php $this->assign('pageTitle', "user.login"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php if (! $this->_tpl_vars['registerOp']): ?>
	<?php $this->assign('registerOp', 'register'); ?>
<?php endif; ?>
<?php if (! $this->_tpl_vars['registerLocaleKey']): ?>
	<?php $this->assign('registerLocaleKey', "user.login.registerNewAccount"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['loginMessage']): ?>
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ($this->_tpl_vars['loginMessage'])), $this);?>
</span>
	<br />
	<br />
<?php endif; ?>


<?php if ($this->_tpl_vars['implicitAuth']): ?>
	<a id="implicitAuthLogin" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'implicitAuthLogin'), $this);?>
">Login</a>
<?php else: ?>
	<script type="text/javascript">
		$(function() {
			// Attach the form handler.
			$('#signinForm').pkpHandler(
				'$.pkp.controllers.form.FormHandler',
				{
					trackFormChanges: false
				});
		});
	</script>

	<form class="pkp_form" id="signinForm" method="post" action="<?php echo $this->_tpl_vars['loginUrl']; ?>
" style="width: 400px;">
<?php endif; ?>


<?php if ($this->_tpl_vars['error']): ?>
	<span class="pkp_form_error"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ($this->_tpl_vars['error']),'reason' => $this->_tpl_vars['reason']), $this);?>
</span>
	<br />
	<br />
<?php endif; ?>

<input type="hidden" name="source" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['source'])) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />

<?php if (! $this->_tpl_vars['implicitAuth']): ?>
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'loginFields')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "user.username",'for' => 'username')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'username','value' => ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'maxlength' => '32','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "user.password",'for' => 'password')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','password' => true,'id' => 'password','value' => ((is_array($_tmp=$this->_tpl_vars['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'maxlength' => '32','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'lostPassword'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.forgotPassword"), $this);?>
</a>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php if ($this->_tpl_vars['showRemember']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','label' => "user.login.rememberUsernameAndPassword",'id' => 'remember','value' => '1','checked' => $this->_tpl_vars['remember']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>		<?php if (! $this->_tpl_vars['hideRegisterLink']): ?>
			<?php if ($this->_tpl_vars['source']): ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => $this->_tpl_vars['registerOp'],'source' => $this->_tpl_vars['source']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'cancelUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'cancelUrl'));?>

			<?php else: ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => $this->_tpl_vars['registerOp']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'cancelUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'cancelUrl'));?>

			<?php endif; ?>
			<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('cancelUrl' => $this->_tpl_vars['cancelUrl'],'cancelText' => $this->_tpl_vars['registerLocaleKey'],'submitText' => "user.login"), $this);?>

		<?php else: ?>
			<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('hideCancel' => true,'submitText' => "user.login.resetPassword"), $this);?>

		<?php endif; ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php endif; ?>
<script type="text/javascript">
	<?php if ($this->_tpl_vars['username']): ?>$("#password").focus();
	<?php else: ?>$("#username").focus();<?php endif; ?>
</script>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>