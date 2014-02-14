<?php /* Smarty version 2.6.26, created on 2013-10-30 14:04:25
         compiled from catalog/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'catalog/index.tpl', 15, false),array('function', 'load_url_in_div', 'catalog/index.tpl', 16, false),array('modifier', 'assign', 'catalog/index.tpl', 15, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "navigation.catalog"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array('suppressPageTitle' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "carousel.CarouselHandler",'op' => 'fetch'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'carouselUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'carouselUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'carousel','url' => $this->_tpl_vars['carouselUrl']), $this);?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "catalog/monographs.tpl", 'smarty_include_vars' => array('publishedMonographs' => $this->_tpl_vars['publishedMonographs'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>