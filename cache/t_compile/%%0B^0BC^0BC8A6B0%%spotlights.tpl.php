<?php /* Smarty version 2.6.26, created on 2014-03-15 23:27:37
         compiled from index/spotlights.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'index/spotlights.tpl', 10, false),array('function', 'url', 'index/spotlights.tpl', 20, false),array('modifier', 'escape', 'index/spotlights.tpl', 15, false),array('modifier', 'strip_unsafe_html', 'index/spotlights.tpl', 22, false),array('modifier', 'truncate', 'index/spotlights.tpl', 28, false),)), $this); ?>
<div id="spotlightsHome" class="pkp_helpers_dotted_underline">
	<h2 class="pkp_helpers_text_center"><em><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "spotlight.title.homePage"), $this);?>
</em></h2>
	<ul>
		<?php $_from = $this->_tpl_vars['spotlights']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['spotlight']):
        $this->_foreach['loop']['iteration']++;
?>
			<?php $this->assign('item', $this->_tpl_vars['spotlight']->getSpotlightItem()); ?>
			<li class="pkp_helpers_align_left pkp_helpers_third">
				<h4 class="pkp_helpers_text_center"><?php echo ((is_array($_tmp=$this->_tpl_vars['spotlight']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</h4>
				<div class="pkp_catalog_spotlight">
					<?php if ($this->_tpl_vars['spotlight']->getAssocType() == @SPOTLIGHT_TYPE_BOOK): ?>
						<?php $this->assign('coverImage', $this->_tpl_vars['item']->getCoverImage()); ?>
						<?php if ($this->_tpl_vars['coverImage']): ?>
							<a class="pkp_helpers_image_right" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'catalog','op' => 'book','path' => $this->_tpl_vars['item']->getId()), $this);?>
"><img height="<?php echo $this->_tpl_vars['coverImage']['thumbnailHeight']; ?>
" width="<?php echo $this->_tpl_vars['coverImage']['thumbnailWidth']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']->getLocalizedFullTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "submission.CoverHandler",'op' => 'thumbnail','monographId' => $this->_tpl_vars['item']->getId()), $this);?>
" /></a>
						<?php endif; ?>
						<div class="pkp_catalog_spotlight_itemTitle"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']->getLocalizedFullTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</div>
						<div class="pkp_catalog_spotlight_itemAuthorship"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']->getAuthorString())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</div>
						<div class="pkp_catalog_spotlight_itemDescription">
							<?php if ($this->_tpl_vars['spotlight']->getLocalizedDescription()): ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['spotlight']->getLocalizedDescription())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>

							<?php else: ?>
								<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']->getLocalizedAbstract())) ? $this->_run_mod_handler('truncate', true, $_tmp, 150) : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 150)))) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>

							<?php endif; ?>
						</div>
						<div class="pkp_catalog_readMore"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'book','path' => $this->_tpl_vars['item']->getId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.plusMore"), $this);?>
</a></div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['spotlight']->getAssocType() == @SPOTLIGHT_TYPE_SERIES): ?>
						<?php $this->assign('image', $this->_tpl_vars['item']->getImage()); ?>
						<?php if ($this->_tpl_vars['image']): ?>
							<a class="pkp_helpers_image_right" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'catalog','op' => 'fullSize','type' => 'series','id' => $this->_tpl_vars['item']->getId()), $this);?>
"><img height="<?php echo $this->_tpl_vars['image']['thumbnailHeight']; ?>
" width="<?php echo $this->_tpl_vars['image']['thumbnailWidth']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']->getLocalizedFullTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'catalog','op' => 'thumbnail','type' => 'series','id' => $this->_tpl_vars['item']->getId()), $this);?>
" /></a>
						<?php endif; ?>
						<div class="pkp_catalog_spotlight_itemTitle">
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "series.series"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['item']->getLocalizedFullTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>

						</div>
						<?php $this->assign('editorsString', $this->_tpl_vars['item']->getEditorsString()); ?>
						<?php if ($this->_tpl_vars['editorsString']): ?>
							<div class="pkp_catalog_spotlight_itemAuthorship">
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editors"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['editorsString'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

							</div>
						<?php endif; ?>
						<div class="pkp_catalog_spotlight_itemDescription">
							<?php if ($this->_tpl_vars['spotlight']->getLocalizedDescription()): ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['spotlight']->getLocalizedDescription())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>

							<?php else: ?>
								<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']->getLocalizedDescription())) ? $this->_run_mod_handler('truncate', true, $_tmp, 150) : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 150)))) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>

							<?php endif; ?>
						</div>
						<div class="pkp_catalog_readMore"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'series','path' => $this->_tpl_vars['item']->getPath()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.plusMore"), $this);?>
</a></div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['spotlight']->getAssocType() == @SPOTLIGHT_TYPE_AUTHOR): ?>
						<?php $this->assign('monograph', $this->_tpl_vars['item']->getPublishedMonograph()); ?>
						<?php if ($this->_tpl_vars['monograph']): ?>
							<?php $this->assign('coverImage', $this->_tpl_vars['monograph']->getCoverImage()); ?>
							<?php if ($this->_tpl_vars['coverImage']): ?>
								<a class="pkp_helpers_image_right" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'book','path' => $this->_tpl_vars['monograph']->getId()), $this);?>
"><img height="<?php echo $this->_tpl_vars['coverImage']['thumbnailHeight']; ?>
" width="<?php echo $this->_tpl_vars['coverImage']['thumbnailWidth']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['monograph']->getLocalizedFullTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "submission.CoverHandler",'op' => 'thumbnail','monographId' => $this->_tpl_vars['monograph']->getId()), $this);?>
" /></a>
							<?php endif; ?>
						<?php endif; ?>
						<?php $this->assign('authorName', ((is_array($_tmp=$this->_tpl_vars['item']->getFullName())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp))); ?>
						<?php if ($this->_tpl_vars['monograph']): ?>
							<div class="pkp_catalog_spotlight_itemTitle"><?php echo ((is_array($_tmp=$this->_tpl_vars['monograph']->getLocalizedFullTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</div>
							<div class="pkp_catalog_spotlight_itemAuthorship"><?php echo $this->_tpl_vars['authorName']; ?>
</div>
							<div class="pkp_catalog_spotlight_itemDescription">
								<?php if ($this->_tpl_vars['spotlight']->getLocalizedDescription()): ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['spotlight']->getLocalizedDescription())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>

								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['monograph']->getLocalizedAbstract())) ? $this->_run_mod_handler('truncate', true, $_tmp, 150) : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 150)))) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>

								<?php endif; ?>
							</div>
							<div class="pkp_catalog_readMore"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'book','path' => $this->_tpl_vars['monograph']->getId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.plusMore"), $this);?>
</a></div>
						<?php else: ?>
							<div class="pkp_catalog_spotlight_itemTitle"><?php echo $this->_tpl_vars['authorName']; ?>
</div>
							<div class="pkp_catalog_spotlight_itemDescription">
								<?php echo ((is_array($_tmp=$this->_tpl_vars['spotlight']->getLocalizedDescription())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>

							</div>
						<?php endif; ?>
					<?php endif; ?>
				</div>
			</li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>