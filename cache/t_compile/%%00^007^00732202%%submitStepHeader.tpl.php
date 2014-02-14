<?php /* Smarty version 2.6.26, created on 2013-10-30 14:03:52
         compiled from submission/form/submitStepHeader.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'submission/form/submitStepHeader.tpl', 16, false),array('function', 'translate', 'submission/form/submitStepHeader.tpl', 41, false),array('modifier', 'assign', 'submission/form/submitStepHeader.tpl', 16, false),)), $this); ?>
<?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>



<?php echo ''; ?><?php $this->assign('pageCrumbTitle', "submission.submit"); ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'wizard'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'currentUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'currentUrl'));?><?php echo ''; ?>


<div class="fake-tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		<?php $_from = $this->_tpl_vars['steps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['step'] => $this->_tpl_vars['stepLocaleKey']):
?>
			<?php $this->assign('stepUrl', "#"); ?>
			<?php $this->assign('cssClass', ""); ?>
			<?php if ($this->_tpl_vars['step'] <= $this->_tpl_vars['submissionProgress']): ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'wizard','path' => $this->_tpl_vars['step'],'monographId' => $this->_tpl_vars['monographId']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'stepUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'stepUrl'));?>

			<?php endif; ?>

			<?php if ($this->_tpl_vars['step'] <= $this->_tpl_vars['submissionProgress'] && $this->_tpl_vars['submissionProgress'] != 0): ?>
				<?php $this->assign('cssClass', "ui-state-default ui-corner-top ui-state-active"); ?>
			<?php endif; ?>

			<?php if ($this->_tpl_vars['step'] > $this->_tpl_vars['submissionProgress']): ?>
				<?php $this->assign('cssClass', "ui-state-default ui-corner-top ui-state-disabled"); ?>
			<?php endif; ?>

			<?php if ($this->_tpl_vars['step'] == $this->_tpl_vars['submitStep']): ?>
				<?php $this->assign('cssClass', "ui-state-default ui-corner-top ui-tabs-selected ui-state-active"); ?>
			<?php endif; ?>

			<li class="<?php echo $this->_tpl_vars['cssClass']; ?>
">
				<a href="<?php echo $this->_tpl_vars['stepUrl']; ?>
"><?php echo $this->_tpl_vars['step']; ?>
. <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['stepLocaleKey']), $this);?>
</a>
			</li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>