<?php /* Smarty version 2.6.26, created on 2013-11-01 12:24:37
         compiled from controllers/wizard/fileUpload/form/metadataForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/wizard/fileUpload/form/metadataForm.tpl', 21, false),array('function', 'fbvElement', 'controllers/wizard/fileUpload/form/metadataForm.tpl', 26, false),array('function', 'math', 'controllers/wizard/fileUpload/form/metadataForm.tpl', 63, false),array('function', 'translate', 'controllers/wizard/fileUpload/form/metadataForm.tpl', 66, false),array('block', 'fbvFormArea', 'controllers/wizard/fileUpload/form/metadataForm.tpl', 24, false),array('block', 'fbvFormSection', 'controllers/wizard/fileUpload/form/metadataForm.tpl', 25, false),array('modifier', 'escape', 'controllers/wizard/fileUpload/form/metadataForm.tpl', 52, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#metadataForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="metadataForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveMetadata','monographId' => $this->_tpl_vars['submissionFile']->getMonographId(),'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'fileStage' => $this->_tpl_vars['submissionFile']->getFileStage(),'fileId' => $this->_tpl_vars['submissionFile']->getFileId(),'escape' => false), $this);?>
" method="post">

		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'fileMetaData')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.form.name",'required' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'name','value' => $this->_tpl_vars['submissionFile']->getLocalizedName(),'maxlength' => '120'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php if (is_a ( $this->_tpl_vars['submissionFile'] , 'ArtworkFile' )): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.artworkFile.caption",'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'artworkCaption','height' => $this->_tpl_vars['fbvStyles']['height']['SHORT'],'value' => $this->_tpl_vars['submissionFile']->getCaption()), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.artworkFile.credit",'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'artworkCredit','height' => $this->_tpl_vars['fbvStyles']['height']['SHORT'],'value' => $this->_tpl_vars['submissionFile']->getCredit()), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.artworkFile.copyrightOwner",'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'artworkCopyrightOwner','height' => $this->_tpl_vars['fbvStyles']['height']['SHORT'],'value' => $this->_tpl_vars['submissionFile']->getCopyrightOwner()), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.artworkFile.permissionTerms",'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'artworkPermissionTerms','height' => $this->_tpl_vars['fbvStyles']['height']['SHORT'],'value' => $this->_tpl_vars['submissionFile']->getPermissionTerms()), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.upload.noteToAccompanyFile")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'note','height' => $this->_tpl_vars['fbvStyles']['height']['SHORT']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'fileInfo','title' => "submission.submit.fileInformation",'class' => 'border')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.fileName",'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.fileType",'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionFile']->getExtension())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.fileSize",'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_tpl_vars['submissionFile']->getNiceFileSize(); ?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php if (is_a ( $this->_tpl_vars['submissionFile'] , 'ArtworkFile' ) && $this->_tpl_vars['submissionFile']->getWidth() > 0 && $this->_tpl_vars['submissionFile']->getHeight() > 0): ?>
			<?php $this->assign('dpi', 300); ?>
			<?php echo smarty_function_math(array('assign' => 'imageWidthOnDevice','equation' => "w/dpi",'w' => $this->_tpl_vars['submissionFile']->getWidth(),'dpi' => $this->_tpl_vars['dpi'],'format' => "%.2f"), $this);?>

			<?php echo smarty_function_math(array('assign' => 'imageHeightOnDevice','equation' => "h/dpi",'h' => $this->_tpl_vars['submissionFile']->getHeight(),'dpi' => $this->_tpl_vars['dpi'],'format' => "%.2f"), $this);?>

			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.quality",'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dimensionsInches",'width' => $this->_tpl_vars['imageWidthOnDevice'],'height' => $this->_tpl_vars['imageHeightOnDevice'],'dpi' => $this->_tpl_vars['dpi']), $this);?>

				<br/>
				(<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dimensionsPixels",'width' => $this->_tpl_vars['submissionFile']->getWidth(),'height' => $this->_tpl_vars['submissionFile']->getHeight()), $this);?>
)
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.preview",'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php if ($this->_tpl_vars['submissionFile']->getFileType() == 'image/tiff'): ?>
					<embed width="100" src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('component' => "api.file.FileApiHandler",'op' => 'viewFile','monographId' => $this->_tpl_vars['submissionFile']->getMonographId(),'stageId' => $this->_tpl_vars['stageId'],'fileStage' => $this->_tpl_vars['submissionFile']->getFileStage(),'fileId' => $this->_tpl_vars['submissionFile']->getFileId()), $this);?>
" type="image/tiff" negative=yes>
				<?php else: ?><a target="_blank" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('component' => "api.file.FileApiHandler",'op' => 'viewFile','monographId' => $this->_tpl_vars['submissionFile']->getMonographId(),'stageId' => $this->_tpl_vars['stageId'],'fileStage' => $this->_tpl_vars['submissionFile']->getFileStage(),'fileId' => $this->_tpl_vars['submissionFile']->getFileId(),'revision' => $this->_tpl_vars['submissionFile']->getRevision()), $this);?>
">
					<img class="thumbnail" width="100" src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('component' => "api.file.FileApiHandler",'op' => 'viewFile','monographId' => $this->_tpl_vars['submissionFile']->getMonographId(),'stageId' => $this->_tpl_vars['stageId'],'fileStage' => $this->_tpl_vars['submissionFile']->getFileStage(),'fileId' => $this->_tpl_vars['submissionFile']->getFileId()), $this);?>
" />
				</a><?php endif; ?>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>