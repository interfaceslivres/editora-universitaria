<?php return array (
  'admin.hostedPresses' => 'Hosted Presses',
  'admin.settings.pressRedirect' => 'Press redirect',
  'admin.settings.pressRedirectInstructions' => 'Requests to the main site will be redirected to this press. This may be useful if the site is hosting only a single press, for example.',
  'admin.settings.noPressRedirect' => 'Do not redirect',
  'admin.languages.primaryLocaleInstructions' => 'This will be the default language for the site and any hosted presses.',
  'admin.languages.supportedLocalesInstructions' => 'Select all locales to support on the site. The selected locales will be available for use by all presses hosted on the site, and also appear in a language select menu to appear on each site page (which can be overridden on press-specific pages). If multiple locales are not selected, the language toggle menu will not appear and extended language settings will not be available to presses.',
  'admin.locale.maybeIncomplete' => '* Marked locales may be incomplete.',
  'admin.languages.confirmUninstall' => 'Are you sure you want to uninstall this locale? This may affect any hosted presses currently using the locale.',
  'admin.languages.installNewLocalesInstructions' => 'Select any additional locales to install support for in this system. Locales must be installed before they can be used by hosted presses. See the OMP documentation for information on adding support for new languages.',
  'admin.languages.noLocalesToDownload' => 'No locales are available for download.',
  'admin.languages.downloadFailed' => 'The locale download failed. The error message(s) below describe the failure.',
  'admin.languages.downloadUnavailable' => '<p>Downloading language packs from the Public Knowledge Project web server is not currently available because:</p>
	<ul>
		<li>Your server does not have or allow execution of the GNU "tar" utility</li>
		<li>OMP is unable to modify the locale registry file, typically "registry/locales.xml".</li>
	</ul>
<p>Language packs can be manually downloaded from the <a href="http://pkp.sfu.ca" target="_blank">PKP web site</a>.</p>',
  'admin.languages.confirmDisable' => 'Are you sure you want to disable this locale? This may affect any hosted presses currently using the locale.',
  'admin.systemInfo.settingName' => 'Setting Name',
  'admin.systemInfo.settingValue' => 'Setting Value',
  'admin.systemVersion' => 'OMP Version',
  'admin.systemConfiguration' => 'OMP Configuration',
  'admin.systemConfigurationDescription' => 'OMP configuration settings from <tt>config.inc.php</tt>.',
  'admin.presses.pressSettings' => 'Press Settings',
  'admin.presses.noneCreated' => 'No presses have been created.',
  'admin.presses.confirmDelete' => 'Are you sure you want to permanently delete this press and all of its contents?',
  'admin.presses.create' => 'Create Press',
  'admin.presses.createInstructions' => 'You will automatically be enrolled as the manager of this press. After creating a new press, you will be redirected to its settings wizard, to complete the initial press setup.',
  'admin.presses.urlWillBe' => 'The press URL will be {$sampleUrl}',
  'admin.presses.form.titleRequired' => 'A title is required.',
  'admin.presses.form.pathRequired' => 'A path is required.',
  'admin.presses.form.pathAlphaNumeric' => 'The path can contain only alphanumeric characters, underscores, and hyphens, and must begin and end with an alphanumeric character.',
  'admin.presses.form.pathExists' => 'The selected path is already in use by another press.',
  'admin.presses.enablePressInstructions' => 'Enable this press to appear publicly on the site',
  'admin.presses.pressDescription' => 'Press description',
  'admin.presses.addPress' => 'Add Press',
  'admin.mergeUsers' => 'Merge Users',
  'admin.mergeUsers.mergeUser' => 'Merge User',
  'admin.mergeUsers.mergeIntoUser' => 'Merge into this User',
  'admin.mergeUsers.into.description' => 'Now, you must select a user to whom to attribute the previous user\'s authorships, editing assignments, etc.',
  'admin.mergeUsers.from.description' => 'Select a user to merge into another user account (e.g., when someone has two user accounts). The account selected first will be deleted and its submissions, assignments, etc. will be attributed to the second account.',
  'admin.mergeUsers.allUsers' => 'All Enrolled Users',
  'admin.mergeUsers.mergeUserSelect.confirm' => 'Are you sure you wish to merge this user with another one?  You will choose the next user on the following screen.',
  'admin.mergeUsers.confirm' => 'Are you sure you wish to merge the account with the username "{$oldUsername}" into the account with the username "{$newUsername}"? The account with the username "{$oldUsername}" will not exist afterwards. This action is not reversible.',
  'admin.mergeUsers.noneEnrolled' => 'No users exist with that role.',
  'admin.settings.oaiRegistrationDescription' => 'To have the contents of all presses hosted on this site indexed within a globally distributed system of research databases, <a href="http://pkp.sfu.ca/harvester/add.php" target="_blank">register</a> your site\'s URL with the Public Knowledge Project metadata <a href="http://pkp.sfu.ca/harvester/" target="_blank">harvester</a>. This tool collects the metadata from each indexed item in this press, enabling accurate and collective searching among the research sites that adhere to the <a href="http://www.openarchives.org/OAI/openarchivesprotocol.htm#Introduction" target="_blank">Open Archives Initiative Protocol for Metadata Harvesting</a>.
<br /><br />
<a href="http://pkp.sfu.ca/harvester/add.php" target="_blank">Click here</a> and enter <span class="highlight">{$siteUrl}</span> under <strong>Site URL</strong>, and <span class="highlight">{$oaiUrl}</span> under <strong>Base URL for OAI Archive</strong>.
<br /><br />
Note that the OAI interface can be disabled for this site by editing the OMP system configuration. Future versions of OMP will allow the OAI interface to be enabled or disabled for individual presses within the site.',
  'admin.overwriteConfigFileInstructions' => '<h4>NOTE!</div>
<p>The system could not automatically overwrite the configuration file. To apply your configuration changes you must open <tt>config.inc.php</tt> in a suitable text editor and replace its contents with the contents of the text field below.</p>',
); ?>