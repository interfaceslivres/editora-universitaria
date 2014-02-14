<?php /* Smarty version 2.6.26, created on 2013-11-01 12:33:11
         compiled from controllers/informationCenter/newNoteForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'controllers/informationCenter/newNoteForm.tpl', 16, false),array('function', 'url', 'controllers/informationCenter/newNoteForm.tpl', 23, false),array('function', 'fbvElement', 'controllers/informationCenter/newNoteForm.tpl', 25, false),array('function', 'fbvFormButtons', 'controllers/informationCenter/newNoteForm.tpl', 27, false),array('block', 'fbvFormSection', 'controllers/informationCenter/newNoteForm.tpl', 24, false),)), $this); ?>

<script type="text/javascript">
	// Attach the Information Center handler.
	$(function() {
		$('#newNoteForm').pkpHandler(
			'$.pkp.controllers.form.AjaxFormHandler',
			{
				baseUrl: '<?php echo ((is_array($_tmp=$this->_tpl_vars['baseUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
'
			}
		);
	});
</script>

<div id="newNoteContainer">
	<form class="pkp_form" id="newNoteForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'saveNote','params' => $this->_tpl_vars['linkParams']), $this);?>
" method="post">
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "informationCenter.composeNote",'for' => 'newNote')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'newNote'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('hideCancel' => true,'submitText' => $this->_tpl_vars['submitNoteText']), $this);?>

	</form>
</div>