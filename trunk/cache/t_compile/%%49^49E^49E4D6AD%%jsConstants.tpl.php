<?php /* Smarty version 2.6.26, created on 2013-07-25 14:43:55
         compiled from common/jsConstants.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'common/jsConstants.tpl', 15, false),)), $this); ?>

<script type="text/javascript">
	jQuery.pkp = jQuery.pkp || { };
	jQuery.pkp.cons = { };
	<?php $_from = $this->_tpl_vars['exposedConstants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
	jQuery.pkp.cons.<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
 = <?php if (is_numeric ( $this->_tpl_vars['value'] )): ?><?php echo $this->_tpl_vars['value']; ?>
<?php else: ?>'<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
'<?php endif; ?>;
	<?php endforeach; endif; unset($_from); ?>
</script>