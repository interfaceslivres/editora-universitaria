<?php /* Smarty version 2.6.26, created on 2014-03-15 23:27:37
         compiled from common/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'common/header.tpl', 10, false),array('function', 'url', 'common/header.tpl', 103, false),array('function', 'load_url_in_div', 'common/header.tpl', 112, false),array('modifier', 'assign', 'common/header.tpl', 10, false),array('modifier', 'escape', 'common/header.tpl', 20, false),array('modifier', 'strip_tags', 'common/header.tpl', 21, false),)), $this); ?>
<?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.omp"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'applicationName') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'applicationName'));?><?php echo ''; ?><?php if (! $this->_tpl_vars['pageTitleTranslated']): ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageTitle']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageTitleTranslated'));?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['pageCrumbTitle']): ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageCrumbTitle']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageCrumbTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageCrumbTitleTranslated'));?><?php echo ''; ?><?php elseif (! $this->_tpl_vars['pageCrumbTitleTranslated']): ?><?php echo ''; ?><?php $this->assign('pageCrumbTitleTranslated', $this->_tpl_vars['pageTitleTranslated']); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo ((is_array($_tmp=$this->_tpl_vars['defaultCharset'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<title><?php echo ((is_array($_tmp=$this->_tpl_vars['pageTitleTranslated'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</title>
	<meta name="description" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaSearchDescription'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<meta name="keywords" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaSearchKeywords'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<meta name="generator" content="<?php echo $this->_tpl_vars['applicationName']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['currentVersionString'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<?php echo $this->_tpl_vars['metaCustomHeaders']; ?>

	<?php if ($this->_tpl_vars['displayFavicon']): ?><link rel="icon" href="<?php echo $this->_tpl_vars['faviconDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['displayFavicon']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" /><?php endif; ?>

	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/lib.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/compiled.css" />

	<?php $_from = $this->_tpl_vars['stylesheets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cssUrl']):
?>
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['cssUrl']; ?>
" type="text/css" />
	<?php endforeach; endif; unset($_from); ?>

	<!-- Base Jquery -->
	<?php if ($this->_tpl_vars['allowCDN']): ?>
		<script src="http://www.google.com/jsapi" type="text/javascript"></script>
		<script type="text/javascript"><?php echo '
			// Provide a local fallback if the CDN cannot be reached
			if (typeof google == \'undefined\') {
				document.write(unescape("%3Cscript src=\''; ?>
<?php echo $this->_tpl_vars['baseUrl']; ?>
<?php echo '/lib/pkp/js/lib/jquery/jquery.min.js\' type=\'text/javascript\'%3E%3C/script%3E"));
				document.write(unescape("%3Cscript src=\''; ?>
<?php echo $this->_tpl_vars['baseUrl']; ?>
<?php echo '/lib/pkp/js/lib/jquery/plugins/jqueryUi.min.js\' type=\'text/javascript\'%3E%3C/script%3E"));
			} else {
				google.load("jquery", "'; ?>
<?php echo @CDN_JQUERY_VERSION; ?>
<?php echo '");
				google.load("jqueryui", "'; ?>
<?php echo @CDN_JQUERY_UI_VERSION; ?>
<?php echo '");
			}
		'; ?>
</script>
	<?php else: ?>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/lib/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/lib/jquery/plugins/jqueryUi.min.js"></script>
	<?php endif; ?>

	<!-- UI elements (menus, forms, etc) -->
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/lib/superfish/hoverIntent.js"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/lib/superfish/superfish.js"></script>

	<!-- Form validation -->
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/lib/jquery/plugins/validate/jquery.validate.min.js"></script>
	<script type="text/javascript"><?php echo '
		$(function(){
			// Include the appropriate validation localization.
			// FIXME: Replace with a smarty template that includes {translate} keys, see #6443.
			jqueryValidatorI18n("'; ?>
<?php echo $this->_tpl_vars['baseUrl']; ?>
<?php echo '", "'; ?>
<?php echo $this->_tpl_vars['currentLocale']; ?>
<?php echo '");
		});
	'; ?>
</script>

	<!-- Plupload -->
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/lib/plupload/plupload.full.js"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/lib/plupload/jquery.ui.plupload/jquery.ui.plupload.js"></script>

		<?php if ($this->_tpl_vars['currentLocale'] !== 'en_US'): ?><script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/lib/plupload/i18n/<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
.js"></script><?php endif; ?>

	<!-- Constants for JavaScript -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/jsConstants.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<!-- Default global locale keys for JavaScript -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/jsLocaleKeys.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<!-- Compiled scripts -->
	<?php if ($this->_tpl_vars['useMinifiedJavaScript']): ?>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/js/pkp.min.js"></script>
	<?php else: ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/minifiedScripts.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

		<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/themes/default/theme.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/lib/selectBox/jquery.selectBox.css" />

	<?php echo $this->_tpl_vars['additionalHeadData']; ?>

</head>
<body>
	<script type="text/javascript">
		// Initialise JS handler.
		$(function() {
			$('body').pkpHandler(
				'$.pkp.controllers.SiteHandler',
				{
					<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
						inlineHelpState: <?php echo $this->_tpl_vars['initialHelpState']; ?>
,
					<?php endif; ?>
					toggleHelpUrl: '<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'toggleHelp'), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
',
					toggleHelpOnText: '<?php echo ((is_array($_tmp=$this->_tpl_vars['toggleHelpOnText'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
',
					toggleHelpOffText: '<?php echo ((is_array($_tmp=$this->_tpl_vars['toggleHelpOffText'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
',
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:controllers/notification/notificationOptions.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				});
		});
	</script>
	<div class="pkp_structure_page">
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'header','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'fetchHeaderUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'fetchHeaderUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('class' => 'pkp_structure_head','id' => 'headerContainer','url' => $this->_tpl_vars['fetchHeaderUrl']), $this);?>

		<div class="pkp_structure_body">
			<div class="pkp_structure_content">
				<div class="line">
hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
				</div>

				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'sidebar'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'fetchSidebarUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'fetchSidebarUrl'));?>

				<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'sidebarContainer','url' => $this->_tpl_vars['fetchSidebarUrl']), $this);?>


				<script type="text/javascript">
					// Attach the JS page handler to the main content wrapper.
					$(function() {
						$('div.pkp_structure_main').pkpHandler('$.pkp.controllers.PageHandler');
					});
				</script>

				<div class="pkp_structure_main">
										<?php if (! $this->_tpl_vars['suppressPageTitle']): ?>
						<h2 class="title_left"><?php echo $this->_tpl_vars['pageTitleTranslated']; ?>
</h2>
					<?php endif; ?>