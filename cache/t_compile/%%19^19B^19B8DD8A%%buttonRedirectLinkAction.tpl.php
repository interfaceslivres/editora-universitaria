<?php /* Smarty version 2.6.26, created on 2013-07-25 18:42:24
         compiled from linkAction/buttonRedirectLinkAction.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'linkAction/buttonRedirectLinkAction.tpl', 18, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		$('<?php echo ((is_array($_tmp=$this->_tpl_vars['buttonSelector'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
').pkpHandler(
				'$.pkp.controllers.linkAction.LinkActionHandler',
				{
					actionRequest: '$.pkp.classes.linkAction.RedirectRequest',
					actionRequestOptions: {
						url: '<?php echo $this->_tpl_vars['cancelUrl']; ?>
'
					},
			});
	});
</script>