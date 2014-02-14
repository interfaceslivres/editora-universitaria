<?php /* Smarty version 2.6.26, created on 2013-11-01 12:23:24
         compiled from controllers/wizard/fileUpload/fileUploadWizard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/wizard/fileUpload/fileUploadWizard.tpl', 21, false),array('function', 'url', 'controllers/wizard/fileUpload/fileUploadWizard.tpl', 24, false),array('modifier', 'escape', 'controllers/wizard/fileUpload/fileUploadWizard.tpl', 21, false),)), $this); ?>

<script type="text/javascript">
	// Attach the JS file upload wizard handler.
	$(function() {
		$('#fileUploadWizard').pkpHandler(
				'$.pkp.controllers.wizard.fileUpload.FileUploadWizardHandler',
				{
					cancelButtonText: '<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
',
					continueButtonText: '<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.continue"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
',
					finishButtonText: '<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.complete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
',
					deleteUrl: '<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('component' => "api.file.ManageFileApiHandler",'op' => 'deleteFile','monographId' => $this->_tpl_vars['monographId'],'stageId' => $this->_tpl_vars['stageId'],'fileStage' => $this->_tpl_vars['fileStage'],'escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
',
					metadataUrl: '<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editMetadata','monographId' => $this->_tpl_vars['monographId'],'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'fileStage' => $this->_tpl_vars['fileStage'],'escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
',
					finishUrl: '<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'finishFileSubmission','monographId' => $this->_tpl_vars['monographId'],'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'fileStage' => $this->_tpl_vars['fileStage'],'escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
'
				});
	});
</script>

<div id="fileUploadWizard">
	<ul>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'displayFileUploadForm','monographId' => $this->_tpl_vars['monographId'],'stageId' => $this->_tpl_vars['stageId'],'uploaderRoles' => $this->_tpl_vars['uploaderRoles'],'fileStage' => $this->_tpl_vars['fileStage'],'revisionOnly' => $this->_tpl_vars['revisionOnly'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'revisedFileId' => $this->_tpl_vars['revisedFileId'],'assocType' => $this->_tpl_vars['assocType'],'assocId' => $this->_tpl_vars['assocId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.uploadStep"), $this);?>
</a></li>
		<li><a href="metadata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.metadataStep"), $this);?>
</a></li>
		<li><a href="finish"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.finishingUpStep"), $this);?>
</a></li>
	</ul>
</div>