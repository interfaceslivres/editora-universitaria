<?php /* Smarty version 2.6.26, created on 2013-11-01 12:36:13
         compiled from controllers/grid/files/final/manageFinalDraftFiles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/grid/files/final/manageFinalDraftFiles.tpl', 18, false),array('function', 'url', 'controllers/grid/files/final/manageFinalDraftFiles.tpl', 21, false),array('function', 'load_url_in_div', 'controllers/grid/files/final/manageFinalDraftFiles.tpl', 27, false),array('function', 'fbvFormButtons', 'controllers/grid/files/final/manageFinalDraftFiles.tpl', 30, false),array('block', 'fbvFormArea', 'controllers/grid/files/final/manageFinalDraftFiles.tpl', 22, false),array('block', 'fbvFormSection', 'controllers/grid/files/final/manageFinalDraftFiles.tpl', 23, false),array('modifier', 'escape', 'controllers/grid/files/final/manageFinalDraftFiles.tpl', 24, false),array('modifier', 'assign', 'controllers/grid/files/final/manageFinalDraftFiles.tpl', 26, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#manageFinalDraftFilesForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<!-- Current final draft files -->
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.monograph.final.manageFinalDraftFilesDescription"), $this);?>
</p>

<div id="existingFilesContainer">
	<form class="pkp_form" id="manageFinalDraftFilesForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('component' => "grid.files.final.ManageFinalDraftFilesGridHandler",'op' => 'updateFinalDraftFiles','monographId' => $this->_tpl_vars['monographId']), $this);?>
 method="post">
		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'manageFinalDraftFiles')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<input type="hidden" name="monographId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['monographId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
				<input type="hidden" name="stageId" value="<?php echo @WORKFLOW_STAGE_ID_EDITING; ?>
" />
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.final.ManageFinalDraftFilesGridHandler",'op' => 'fetchGrid','monographId' => $this->_tpl_vars['monographId']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'availableReviewFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'availableReviewFilesGridUrl'));?>

				<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'availableReviewFilesGrid','url' => $this->_tpl_vars['availableReviewFilesGridUrl']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

			<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</form>
</div>