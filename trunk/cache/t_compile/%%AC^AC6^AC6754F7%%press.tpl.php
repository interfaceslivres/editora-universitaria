<?php /* Smarty version 2.6.26, created on 2013-10-30 12:58:03
         compiled from index/press.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'call_hook', 'index/press.tpl', 13, false),array('function', 'translate', 'index/press.tpl', 18, false),array('function', 'url', 'index/press.tpl', 36, false),array('function', 'load_url_in_div', 'index/press.tpl', 37, false),array('modifier', 'escape', 'index/press.tpl', 18, false),array('modifier', 'assign', 'index/press.tpl', 36, false),array('modifier', 'count', 'index/press.tpl', 39, false),)), $this); ?>
<?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array('suppressPageTitle' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Index::press"), $this);?>


<?php if ($this->_tpl_vars['homepageImage']): ?>
	<br />
	<div id="homepageImage">
		 <img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" <?php if ($this->_tpl_vars['homepageImage']['altText'] != ''): ?>alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage']['altText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?>alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.pressHomepageImage.altText"), $this);?>
"<?php endif; ?> />
	</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['additionalHomeContent']): ?>
	<br />
	<?php echo $this->_tpl_vars['additionalHomeContent']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['enableAnnouncementsHomepage']): ?>
		<div id="announcementsHome">
		<h3 class="pkp_helpers_text_center"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.announcementsHome"), $this);?>
</h3>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "announcements/announcements.tpl", 'smarty_include_vars' => array('displayLimit' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
<?php endif; ?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "carousel.CarouselHandler",'op' => 'fetch'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'carouselUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'carouselUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'carousel','url' => $this->_tpl_vars['carouselUrl']), $this);?>


<?php if (count($this->_tpl_vars['spotlights']) > 0): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "index/spotlights.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<div class="pkp_helpers_clear"></div>

<?php if (! empty ( $this->_tpl_vars['socialMediaBlocks'] )): ?>
	<div id="socialMediaBlocksContainer">
	<?php $_from = $this->_tpl_vars['socialMediaBlocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['b'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['b']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['b']['iteration']++;
?>
		<div id="socialMediaBlock<?php echo ($this->_foreach['b']['iteration']-1); ?>
" class="socialMediaBlock pkp_helpers_clear">
			<?php echo $this->_tpl_vars['block']; ?>

		</div>
	<?php endforeach; endif; unset($_from); ?>
	</div>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>