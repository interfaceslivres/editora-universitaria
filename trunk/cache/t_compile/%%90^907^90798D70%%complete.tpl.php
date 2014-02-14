<?php /* Smarty version 2.6.26, created on 2013-11-01 12:28:52
         compiled from submission/form/complete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'submission/form/complete.tpl', 14, false),array('function', 'url', 'submission/form/complete.tpl', 23, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "submission.submit.nextSteps"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/form/submitStepHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<h2><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.submissionComplete"), $this);?>
</h2>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.submissionCompleteThanks",'pressName' => $this->_tpl_vars['press']->getLocalizedName()), $this);?>
</p>
<div class="separator"></div>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.whatNext"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.whatNext.description"), $this);?>
</p>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.whatNext.forNow"), $this);?>
</p>

<ul class="plain">
	<li><a href=<?php echo $this->_tpl_vars['reviewSubmissionUrl']; ?>
><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.whatNext.review"), $this);?>
</a></li>
	<li><a href=<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'submission','op' => 'wizard'), $this);?>
><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.whatNext.create"), $this);?>
</a></li>
	<li><a href=<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'dashboard','anchor' => 'submissions'), $this);?>
><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.whatNext.return"), $this);?>
</a></li>
</ul>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
