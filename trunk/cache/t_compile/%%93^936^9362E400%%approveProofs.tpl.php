<?php /* Smarty version 2.6.26, created on 2013-11-06 13:54:18
         compiled from controllers/modals/editorDecision/approveProofs.tpl */ ?>

<script type="text/javascript">
	$(function() {
		// Attach the approve proofs handler.
		$('#approveProofsContainer').pkpHandler('$.pkp.controllers.modals.editorDecision.ApproveProofsHandler');
	});
</script>

<div id="approveProofsContainer">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "workflow/publicationFormat.tpl", 'smarty_include_vars' => array('monograph' => $this->_tpl_vars['monograph'],'publicationFormat' => $this->_tpl_vars['publicationFormat'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>