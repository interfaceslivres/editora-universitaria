<?php /* Smarty version 2.6.26, created on 2013-11-06 14:06:17
         compiled from controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 17, false),array('function', 'translate', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 35, false),array('function', 'fbvElement', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 49, false),array('function', 'load_url_in_div', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 62, false),array('function', 'fbvFormButtons', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 74, false),array('modifier', 'escape', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 17, false),array('modifier', 'uniqid', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 39, false),array('modifier', 'concat', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 60, false),array('modifier', 'assign', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 61, false),array('block', 'fbvFormSection', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 34, false),array('block', 'fbvFormArea', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 47, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#catalogMetadataEntryForm').pkpHandler(
			'$.pkp.controllers.catalog.form.CatalogMetadataFormHandler',
			{
				trackFormChanges: true,
				$uploader: $('#plupload_catalogMetadata'),
				uploaderOptions: {
					uploadUrl: '<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'uploadCoverImage','escape' => false,'stageId' => $this->_tpl_vars['stageId'],'monographId' => $this->_tpl_vars['monographId']), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
',
					baseUrl: '<?php echo ((is_array($_tmp=$this->_tpl_vars['baseUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
'
				}
			}
		);
	});
</script>

<form class="pkp_form" id="catalogMetadataEntryForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'saveForm'), $this);?>
">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'catalogMetadataFormFieldsNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<input type="hidden" name="monographId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['monographId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="tabPos" value="1" />
	<input type="hidden" name="displayedInContainer" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['formParams']['displayedInContainer'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="tab" value="catalog" />

	<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "monograph.coverImage")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<div class="pkp_help"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "monograph.coverImage.uploadInstructions"), $this);?>
</div>
		<div id="plupload_catalogMetadata" class="pkp_helpers_threeQuarter pkp_helpers_align_right"></div>
		<div class="pkp_helpers_align_left">
			<?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "monograph.currentCoverImage"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('altTitle', ob_get_contents());ob_end_clean(); ?>
			<img height="<?php echo $this->_tpl_vars['coverImage']['thumbnailHeight']; ?>
" width="<?php echo $this->_tpl_vars['coverImage']['thumbnailWidth']; ?>
" src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "submission.CoverHandler",'op' => 'thumbnail','monographId' => $this->_tpl_vars['monographId'],'random' => ((is_array($_tmp=$this->_tpl_vars['monographId'])) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))), $this);?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['altTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
		</div>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<input type="hidden" name="temporaryFileId" id="temporaryFileId" value="" />

	<div class="pkp_helpers_clear"></div>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'audienceInformation','title' => "monograph.audience",'class' => 'border')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'audience')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('label' => "monograph.audience",'type' => 'select','from' => $this->_tpl_vars['audienceCodes'],'selected' => $this->_tpl_vars['audience'],'translate' => false,'id' => 'audience','defaultValue' => "",'defaultLabel' => ""), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('label' => "monograph.audience.rangeQualifier",'type' => 'select','from' => $this->_tpl_vars['audienceRangeQualifiers'],'selected' => $this->_tpl_vars['audienceRangeQualifier'],'translate' => false,'id' => 'audienceRangeQualifier','defaultValue' => "",'defaultLabel' => ""), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('label' => "monograph.audience.rangeFrom",'type' => 'select','from' => $this->_tpl_vars['audienceRanges'],'selected' => $this->_tpl_vars['audienceRangeFrom'],'translate' => false,'id' => 'audienceRangeFrom','defaultValue' => "",'defaultLabel' => ""), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('label' => "monograph.audience.rangeTo",'type' => 'select','from' => $this->_tpl_vars['audienceRanges'],'selected' => $this->_tpl_vars['audienceRangeTo'],'translate' => false,'id' => 'audienceRangeTo','defaultValue' => "",'defaultLabel' => ""), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('label' => "monograph.audience.rangeExact",'type' => 'select','from' => $this->_tpl_vars['audienceRanges'],'selected' => $this->_tpl_vars['audienceRangeExact'],'translate' => false,'id' => 'audienceRangeExact','defaultValue' => "",'defaultLabel' => ""), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'representatives')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('description' => "grid.catalogEntry.representativesDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<!-- Representatives -->
			<?php $this->assign('divId', ((is_array($_tmp=((is_array($_tmp='representativesGridContainer')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['publicationFormatId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['publicationFormatId'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))); ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.catalogEntry.RepresentativesGridHandler",'op' => 'fetchGrid','monographId' => $this->_tpl_vars['monographId']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'representativesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'representativesGridUrl'));?>

			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => ($this->_tpl_vars['divId']),'url' => ($this->_tpl_vars['representativesGridUrl'])), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'publicationFormats')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<!--  Formats -->
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.catalogEntry.PublicationFormatGridHandler",'op' => 'fetchGrid','monographId' => $this->_tpl_vars['monographId'],'inCatalogEntryModal' => true,'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'formatGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'formatGridUrl'));?>

			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => ((is_array($_tmp='formatsGridContainer')) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)),'url' => $this->_tpl_vars['formatGridUrl']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'catalogMetadataFormSubmit','submitText' => "common.save"), $this);?>

</form>