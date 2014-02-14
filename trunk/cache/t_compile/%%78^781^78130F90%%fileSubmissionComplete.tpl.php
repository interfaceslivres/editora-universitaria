<?php /* Smarty version 2.6.26, created on 2013-11-01 12:25:31
         compiled from controllers/wizard/fileUpload/form/fileSubmissionComplete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/wizard/fileUpload/form/fileSubmissionComplete.tpl', 10, false),)), $this); ?>
<div id="finishSubmissionForm" class="pkp_helpers_text_center">
	<h2><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.fileAdded"), $this);?>
</h2>
	<br />
	<br />
	<button type="button" name="newFile" id="newFile"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => 'submission.submit.newFile'), $this);?>
</button>
	<br />
	<br />
</div>