<?php /* Smarty version 2.6.26, created on 2013-11-01 12:30:01
         compiled from workflow/editorialLinkActions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'workflow/editorialLinkActions.tpl', 11, false),)), $this); ?>
<?php if (! empty ( $this->_tpl_vars['editorActions'] )): ?>
	<?php if (array_intersect ( array ( ROLE_ID_PRESS_MANAGER , ROLE_ID_SERIES_EDITOR ) , $this->_tpl_vars['userRoles'] )): ?>
		<?php $this->assign('editorDecisionActionsId', ((is_array($_tmp='editor_decision_actions_')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['stageId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['stageId']))); ?>
		<script type="text/javascript">
		// Initialise JS handler.
		$(function() {
			$('#<?php echo $this->_tpl_vars['editorDecisionActionsId']; ?>
').pkpHandler(
				'$.pkp.pages.workflow.EditorDecisionsHandler'
			);
		});
		</script>
		<div id="<?php echo $this->_tpl_vars['editorDecisionActionsId']; ?>
" class="grid_actions editor_decision_actions">
			<?php $_from = $this->_tpl_vars['editorActions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'contextId' => $this->_tpl_vars['contextId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endforeach; endif; unset($_from); ?>
		</div>
	<?php endif; ?>
<?php endif; ?>