<?php /* Smarty version 2.6.26, created on 2014-03-15 23:27:43
         compiled from catalog/carousel.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'catalog/carousel.tpl', 21, false),array('function', 'url', 'catalog/carousel.tpl', 30, false),array('modifier', 'uniqid', 'catalog/carousel.tpl', 30, false),array('modifier', 'escape', 'catalog/carousel.tpl', 30, false),)), $this); ?>

<script type="text/javascript">
	// Initialize JS handler for catalog header.
	$(function() {
		$('#featuresCarousel').pkpHandler(
			'$.pkp.pages.catalog.CarouselHandler'
		);
	});
</script>

<!-- Features carousel -->
<div class="pkp_catalog_carousel_wrapper pkp_helpers_clear pkp_helpers_dotted_underline" id="featuresCarousel">
	<h2 class="pkp_helpers_text_center"><em><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.featuredBooks"), $this);?>
</em></h2>
	<div class="carousel_control" id="nextCarouselItem"></div>
	<div class="carousel_control" id="previousCarouselItem"></div>
	<ul class="pkp_catalog_carousel">
		<?php $_from = $this->_tpl_vars['publishedMonographs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['publishedMonograph']):
?>
						<?php $this->assign('monographId', $this->_tpl_vars['publishedMonograph']->getId()); ?>
			<?php if (isset ( $this->_tpl_vars['featuredMonographIds'][$this->_tpl_vars['monographId']] )): ?>
			<li id="publishedMonograph-<?php echo $this->_tpl_vars['monographId']; ?>
" class="mover">
				<span class="moverImg"><div><img src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "submission.CoverHandler",'op' => 'cover','monographId' => $this->_tpl_vars['publishedMonograph']->getId(),'random' => ((is_array($_tmp=$this->_tpl_vars['publishedMonograph']->getId())) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))), $this);?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['publishedMonograph']->getLocalizedFullTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" data-caption="#publishedMonograph-<?php echo $this->_tpl_vars['monographId']; ?>
-caption"/></div></span>
				<div class="details_box" id="publishedMonograph-<?php echo $this->_tpl_vars['monographId']; ?>
-details">
					<h4><?php echo ((is_array($_tmp=$this->_tpl_vars['publishedMonograph']->getLocalizedFullTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</h4>
					<div class="pkp_catalog_monograph_authorship"><?php echo ((is_array($_tmp=$this->_tpl_vars['publishedMonograph']->getAuthorString())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</div>
					<?php if ($this->_tpl_vars['publishedMonograph']->getPublicationFormatString()): ?>
						<div class="pkp_catalog_formats">
							<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "monograph.carousel.publicationFormats"), $this);?>
</strong><br />
							<?php echo ((is_array($_tmp=$this->_tpl_vars['publishedMonograph']->getPublicationFormatString())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

						</div>
					<?php endif; ?>
					<div class="pkp_catalog_readMore"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'book','path' => $this->_tpl_vars['monographId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.plusMore"), $this);?>
</a></div>
				</div>
				<div class="pkp_helpers_progressIndicator"></div>
			</li>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>