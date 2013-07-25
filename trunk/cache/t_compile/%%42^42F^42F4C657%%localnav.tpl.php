<?php /* Smarty version 2.6.26, created on 2013-07-25 14:44:00
         compiled from header/localnav.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'header/localnav.tpl', 13, false),array('function', 'translate', 'header/localnav.tpl', 13, false),)), $this); ?>

<?php ob_start(); ?>
	<?php if ($this->_tpl_vars['currentPress']): ?>
		<?php if ($this->_tpl_vars['enableAnnouncements']): ?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'announcement'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.announcements"), $this);?>
</a></li>
		<?php endif; ?>
		<li><a href="#"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.about"), $this);?>
</a>
			<ul>
				<?php if (! ( empty ( $this->_tpl_vars['pressSettings']['mailingAddress'] ) && empty ( $this->_tpl_vars['pressSettings']['contactName'] ) && empty ( $this->_tpl_vars['pressSettings']['contactAffiliation'] ) && empty ( $this->_tpl_vars['pressSettings']['contactMailingAddress'] ) && empty ( $this->_tpl_vars['pressSettings']['contactPhone'] ) && empty ( $this->_tpl_vars['pressSettings']['contactFax'] ) && empty ( $this->_tpl_vars['pressSettings']['contactEmail'] ) && empty ( $this->_tpl_vars['pressSettings']['supportName'] ) && empty ( $this->_tpl_vars['pressSettings']['supportPhone'] ) && empty ( $this->_tpl_vars['pressSettings']['supportEmail'] ) )): ?>
					<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'contact'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact"), $this);?>
</a></li>
				<?php endif; ?>
				<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'description'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.description"), $this);?>
</a></li>
				<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'editorialTeam'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.editorialTeam"), $this);?>
</a></li>
				<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'editorialPolicies'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.policies"), $this);?>
</a></li>
				<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'submissions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.submissions"), $this);?>
</a></li>
				<?php if (! ( $this->_tpl_vars['currentPress']->getLocalizedSetting('contributorNote') == '' && empty ( $this->_tpl_vars['pressSettings']['contributors'] ) && $this->_tpl_vars['currentPress']->getLocalizedSetting('sponsorNote') == '' && empty ( $this->_tpl_vars['pressSettings']['sponsors'] ) )): ?><li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'pressSponsorship'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.pressSponsorship"), $this);?>
</a></li><?php endif; ?>
			</ul>
		</li>
	<?php endif; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('publicMenu', ob_get_contents());ob_end_clean(); ?>

<div class="pkp_structure_head_localNav">
	<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
		<ul class="sf-menu">
			<?php if (array_intersect ( array ( ROLE_ID_PRESS_MANAGER , ROLE_ID_SERIES_EDITOR , ROLE_ID_PRESS_ASSISTANT , ROLE_ID_REVIEWER , ROLE_ID_AUTHOR ) , $this->_tpl_vars['userRoles'] )): ?>
				<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'dashboard'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.dashboard"), $this);?>
</a></li>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['currentPress']): ?>
				<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'catalog'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.catalog"), $this);?>
</a>
				<?php if (array_intersect ( array ( ROLE_ID_PRESS_MANAGER , ROLE_ID_SERIES_EDITOR ) , $this->_tpl_vars['userRoles'] )): ?>
					<li>
						<a href="#"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.management"), $this);?>
</a>
						<ul>
							<li>
								<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'manageCatalog'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.catalog"), $this);?>
</a>
							</li>
							<?php if (array_intersect ( array ( ROLE_ID_PRESS_MANAGER ) , $this->_tpl_vars['userRoles'] )): ?>
							<li>
								<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'management','op' => 'settings','path' => 'index'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.settings"), $this);?>
</a>
								<ul>
									<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'management','op' => 'settings','path' => 'press'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "press.press"), $this);?>
</a></li>
									<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'management','op' => 'settings','path' => 'website'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.website"), $this);?>
</a></li>
									<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'management','op' => 'settings','path' => 'publication'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.publicationProcess"), $this);?>
</a></li>
									<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'management','op' => 'settings','path' => 'distribution'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.distributionProcess"), $this);?>
</a></li>
									<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'management','op' => 'settings','path' => 'access'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.access"), $this);?>
</a></li>
								</ul>
							</li>
							<li>
								<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'management','op' => 'tools','path' => 'index'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.tools"), $this);?>
</a>
								<ul>
									<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'manager','op' => 'importexport'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.tools.importExport"), $this);?>
</a></li>
								</ul>
							</li>
							<?php endif; ?>
						</ul>
					</li>
				<?php endif; ?>				<?php echo $this->_tpl_vars['publicMenu']; ?>

			<?php endif; ?>
		</ul>
	<?php else: ?>		<ul class="sf-menu">
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'index'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.home"), $this);?>
</a></li>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'catalog'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.catalog"), $this);?>
</a>
			<?php echo $this->_tpl_vars['publicMenu']; ?>

		</ul>
	<?php endif; ?></div>