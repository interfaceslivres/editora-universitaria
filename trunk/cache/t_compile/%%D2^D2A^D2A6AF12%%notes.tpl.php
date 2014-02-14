<?php /* Smarty version 2.6.26, created on 2013-11-01 12:33:11
         compiled from controllers/informationCenter/notes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/informationCenter/notes.tpl', 16, false),array('function', 'translate', 'controllers/informationCenter/notes.tpl', 33, false),array('modifier', 'escape', 'controllers/informationCenter/notes.tpl', 16, false),)), $this); ?>

<script type="text/javascript">
	// Attach the Notes handler.
	$(function() {
		$('#informationCenterNotes').pkpHandler(
			'$.pkp.controllers.informationCenter.NotesHandler',
			{
				fetchNotesUrl: '<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'listNotes','params' => $this->_tpl_vars['linkParams'],'escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
',
				fetchPastNotesUrl: '<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'listPastNotes','params' => $this->_tpl_vars['linkParams'],'escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
'
			}
		);
	});
</script>

<div id="informationCenterNotes">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['newNoteFormTemplate'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<hr />

	<?php if ($this->_tpl_vars['showEarlierEntries']): ?>
			<div id="notesAccordion">
			<h3><a href="#"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "informationCenter.currentNotes"), $this);?>
</a></h3>
	<?php endif; ?>
		<div id="notesList">
	</div>

	<?php if ($this->_tpl_vars['showEarlierEntries']): ?>
			<h3><a href="#" id="showPastNotesLink"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "informationCenter.pastNotes"), $this);?>
</a></h3>
						<div id="pastNotesList">
			</div>
		</div>
	<?php endif; ?>
</div>