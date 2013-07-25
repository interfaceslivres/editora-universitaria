<?php /* Smarty version 2.6.26, created on 2013-07-25 14:44:00
         compiled from header/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'header/index.tpl', 15, false),array('modifier', 'assign', 'header/index.tpl', 23, false),array('function', 'url', 'header/index.tpl', 23, false),array('function', 'translate', 'header/index.tpl', 25, false),)), $this); ?>
<script type="text/javascript">
	// Initialise JS handler.
	$(function() {
		$('#headerTemplateContainer').pkpHandler(
			'$.pkp.pages.index.HeaderHandler',
			{
				requestedPage: '<?php echo ((is_array($_tmp=$this->_tpl_vars['requestedPage'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
',
			});
	});
</script>
<div class="pkp_structure_content" id="headerTemplateContainer">
	<div class="unit size1of5">
		<div class="pkp_structure_masthead">
			<h1>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('context' => $this->_tpl_vars['homeContext'],'page' => 'index'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'homeUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'homeUrl'));?>

				<?php if ($this->_tpl_vars['displayPageHeaderLogo'] && is_array ( $this->_tpl_vars['displayPageHeaderLogo'] )): ?>
					<a href="<?php echo $this->_tpl_vars['homeUrl']; ?>
"><img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogo']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogo']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogo']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" <?php if ($this->_tpl_vars['displayPageHeaderLogoAltText'] != ''): ?>alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogoAltText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?>alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.pageHeaderLogo.altText"), $this);?>
"<?php endif; ?> /></a>
				<?php elseif ($this->_tpl_vars['displayPageHeaderTitle'] && is_array ( $this->_tpl_vars['displayPageHeaderTitle'] )): ?>
					<a href="<?php echo $this->_tpl_vars['homeUrl']; ?>
"><img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderTitle']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderTitle']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderTitle']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" <?php if ($this->_tpl_vars['displayPageHeaderTitleAltText'] != ''): ?>alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderTitleAltText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?>alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.pageHeader.altText"), $this);?>
"<?php endif; ?> /></a>
				<?php elseif ($this->_tpl_vars['displayPageHeaderTitle']): ?>
					<a href="<?php echo $this->_tpl_vars['homeUrl']; ?>
"><?php echo $this->_tpl_vars['displayPageHeaderTitle']; ?>
</a>
				<?php elseif ($this->_tpl_vars['alternatePageHeader']): ?>
					<a href="<?php echo $this->_tpl_vars['homeUrl']; ?>
"><?php echo $this->_tpl_vars['alternatePageHeader']; ?>
</a>
				<?php else: ?>
					<a href="<?php echo $this->_tpl_vars['homeUrl']; ?>
"><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/templates/images/structure/omp_logo.png" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['applicationName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['applicationName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" width="180" height="90" /></a>
				<?php endif; ?>
			</h1>
		</div><!-- pkp_structure_masthead -->
	</div>
	<div class="unit size4of5">
		<div class="pkp_structure_navigation">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header/sitenav.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header/localnav.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
	</div>
</div><!-- pkp_structure_content -->