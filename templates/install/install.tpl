{**
 * templates/install/install.tpl
 *
 * Copyright (c) 2000-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Installation form.
 *}

{strip}
{assign var="pageTitle" value="installer.ompInstallation"}
{include file="common/header.tpl"}
{/strip}

{if is_writeable('config.inc.php')}{translate|assign:"writable_config" key="installer.checkYes"}{else}{translate|assign:"writable_config" key="installer.checkNo"}{/if}
{if is_writeable('cache')}{translate|assign:"writable_cache" key="installer.checkYes"}{else}{translate|assign:"writable_cache" key="installer.checkNo"}{/if}
{if is_writeable('public')}{translate|assign:"writable_public" key="installer.checkYes"}{else}{translate|assign:"writable_public" key="installer.checkNo"}{/if}
{if is_writeable('cache/_db')}{translate|assign:"writable_db_cache" key="installer.checkYes"}{else}{translate|assign:"writable_db_cache" key="installer.checkNo"}{/if}
{if is_writeable('cache/t_cache')}{translate|assign:"writable_templates_cache" key="installer.checkYes"}{else}{translate|assign:"writable_templates_cache" key="installer.checkNo"}{/if}
{if is_writeable('cache/t_compile')}{translate|assign:"writable_templates_compile" key="installer.checkYes"}{else}{translate|assign:"writable_templates_compile" key="installer.checkNo"}{/if}

{if !$phpIsSupportedVersion}
	{translate|assign:"wrongPhpText" key="installer.installationWrongPhp"}
{/if}

<script type="text/javascript">
	$(function() {ldelim}
		// Attach the form handler.
		$('#installForm').pkpHandler('$.pkp.controllers.form.FormHandler');
	{rdelim});
</script>
<form class="pkp_form" method="post" id="installForm" action="{url op="install"}">
	<input type="hidden" name="installing" value="0" />

	{url|assign:"upgradeUrl" op="upgrade"}
	{translate key="installer.installationInstructions" version=$version->getVersionString(false) baseUrl=$baseUrl upgradeUrl=$upgradeUrl}

	{if $isInstallError}
		{* The notification framework requires user sessions, which are not available on install. Use the template directly. *}
		<div class="pkp_notification">
			{if $dbErrorMsg}
				{translate|assign:"errorMsg" key="common.error.databaseError" error=$dbErrorMsg}
			{else}
				{translate|assign:"errorMsg" key=$errorMsg}
			{/if}
			{include file="controllers/notification/inPlaceNotificationContent.tpl" notificationId=installer notificationStyleClass=notifyError notificationTitle="installer.installErrorsOccurred"|translate notificationContents=$errorMsg}
		</div>
	{/if}

	<!-- OMP requires XSL or an XSL parser engine installed -->
	{if !$xslEnabled}
		{* The notification framework requires user sessions, which are not available on install. Use the template directly. *}
		<div class="pkp_notification">
			{include file="controllers/notification/inPlaceNotificationContent.tpl" notificationId=installerXsl notificationStyleClass=notifyWarning notificationTitle="common.warning"|translate notificationContents="installer.configureXSLMessage"|translate}
		</div>
	{/if}

	{fbvFormArea id="preInstallationFormArea" class="border" title="installer.preInstallationInstructionsTitle"}
		{url|assign:"upgradeUrl" page="install" op="upgrade"}
		{translate key="installer.preInstallationInstructions" upgradeUrl=$upgradeUrl baseUrl=$baseUrl writable_config=$writable_config writable_db_cache=$writable_db_cache writable_cache=$writable_cache writable_public=$writable_public writable_templates_cache=$writable_templates_cache writable_templates_compile=$writable_templates_compile phpRequiredVersion=$phpRequiredVersion wrongPhpText=$wrongPhpText phpVersion=$phpVersion}
	{/fbvFormArea}

	<!-- Administrator username, password, and email -->
	{fbvFormArea id="administratorAccountFormArea" title="installer.administratorAccount" class="border"}
		<p>{translate key="installer.administratorAccountInstructions"}</p>
		{fbvFormSection label="user.username"}
			{fbvElement type="text" id="adminUsername" value=$adminUsername|escape maxlength="32" size=$fbvStyles.size.MEDIUM}
		{/fbvFormSection}
		{fbvFormSection label="user.password"}
			{fbvElement type="text" password=true id="adminPassword" value=$adminPassword|escape maxlength="32" size=$fbvStyles.size.MEDIUM}
		{/fbvFormSection}
		{fbvFormSection label="user.repeatPassword"}
			{fbvElement type="text" password=true id="adminPassword2" value=$adminPassword2|escape maxlength="32" size=$fbvStyles.size.MEDIUM}
		{/fbvFormSection}
		{fbvFormSection label="user.email"}
			{fbvElement type="text" id="adminEmail" value=$adminEmail|escape maxlength="90" size=$fbvStyles.size.MEDIUM}
		{/fbvFormSection}
	{/fbvFormArea}

	<!-- Locale configuration -->
	{fbvFormArea id="localeSettingsFormArea" class="border" title="installer.localeSettings" title="installer.localeSettings"}
		<p>{translate key="installer.localeSettingsInstructions" supportsMBString=$supportsMBString}</p>
		{fbvFormSection label="locale.primary" description="installer.localeInstructions" for="locale"}
			{fbvElement type="select" name="locale" id="localeOptions" from=$localeOptions selected=$locale translate=false size=$fbvStyles.size.SMALL subLabelTranslate=true}
		{/fbvFormSection}
		{fbvFormSection list="true" label="installer.additionalLocales" description="installer.additionalLocalesInstructions"}
			{foreach from=$localeOptions key=localeKey item=localeName}
				{assign var=localeKeyEscaped value=$localeKey|escape}
				{if !$localesComplete[$localeKey]}
					{assign var=localeName value=$localeName|concat:"*"}
				{/if}
				{if in_array($localeKey,$additionalLocales)}
					{assign var=localeSelected value=true}
				{else}
					{assign var=localeSelected value=false}
				{/if}
				{fbvElement type="checkbox" name="additionalLocales[]" id="additionalLocales-$localeKeyEscaped" value=$localeKeyEscaped translate=false label="manager.people.createUserSendNotify" checked=$localeSelected label=$localeName|escape}
			{/foreach}
		{/fbvFormSection}

		{fbvFormSection label="installer.clientCharset" description="installer.clientCharsetInstructions"}
			{fbvElement type="select" id="clientCharset" from=$clientCharsetOptions selected=$clientCharset translate=false size=$fbvStyles.size.SMALL}
		{/fbvFormSection}

		{fbvFormSection label="installer.connectionCharset" description="installer.connectionCharsetInstructions"}
			{fbvElement type="select" id="connectionCharset" from=$connectionCharsetOptions selected=$connectionCharset translate=false size=$fbvStyles.size.SMALL}
		{/fbvFormSection}

		{fbvFormSection label="installer.databaseCharset" description="installer.databaseCharsetInstructions"}
			{fbvElement type="select" id="databaseCharset" from=$databaseCharsetOptions selected=$databaseCharset translate=false size=$fbvStyles.size.SMALL}
		{/fbvFormSection}
	{/fbvFormArea}

	<!-- Files directory configuration -->
	{if !$skipFilesDirSection}
		{fbvFormArea id="fileSettingsFormArea" class="border" title="installer.fileSettings"}
			{fbvFormSection label="installer.filesDir" description="installer.filesDirInstructions"}
				{fbvElement type="text" id="filesDir" value=$filesDir|escape maxlength="255" size=$fbvStyles.size.LARGE}
			{/fbvFormSection}
			<p>{translate key="installer.allowFileUploads" allowFileUploads=$allowFileUploads}</p>
			<p>{translate key="installer.maxFileUploadSize" maxFileUploadSize=$maxFileUploadSize}</p>
		{/fbvFormArea}
	{/if}{* !$skipFilesDirSection *}

	<!-- Security configuration -->
	{fbvFormArea id="securityFormArea" title="installer.securitySettings" class="border"}
		{fbvFormSection label="installer.encryption" description="installer.encryptionInstructions"}
			{fbvElement type="select" id="encryption" from=$encryptionOptions selected=$encryption translate=false size=$fbvStyles.size.SMALL}
		{/fbvFormSection}
	{/fbvFormArea}

	<!-- Database configuration -->
	{fbvFormArea id="databaseSettingsFormArea" class="border" title="installer.databaseSettings"}
		<p>{translate key="installer.databaseSettingsInstructions"}</p>
		{fbvFormSection label="installer.databaseDriver" description="installer.databaseDriverInstructions"}
			{fbvElement type="select" id="databaseDriver" from=$databaseDriverOptions selected=$databaseDriver translate=false size=$fbvStyles.size.SMALL}
		{/fbvFormSection}
		{fbvFormSection label="installer.databaseHost"}
			{fbvElement type="text" id="databaseHost" value=$databaseHost|escape maxlength="60" size=$fbvStyles.size.MEDIUM}
		{/fbvFormSection}
		{fbvFormSection label="installer.databaseUsername"}
			{fbvElement type="text" id="databaseUsername" value=$databaseUsername|escape maxlength="60" size=$fbvStyles.size.MEDIUM}
		{/fbvFormSection}
		{fbvFormSection label="installer.databasePassword"}
			{fbvElement type="text" id="databasePassword" value=$databasePassword|escape maxlength="60" size=$fbvStyles.size.MEDIUM}
		{/fbvFormSection}
		{fbvFormSection label="installer.databaseName"}
			{fbvElement type="text" id="databaseName" value=$databaseName|escape maxlength="60" size=$fbvStyles.size.MEDIUM}
		{/fbvFormSection}
		{fbvFormSection list="true"}
			{fbvElement type="checkbox" id="createDatabase" value="1" checked=$createDatabase label="installer.createDatabase"}
		{/fbvFormSection}
	{/fbvFormArea}

	{fbvFormArea id="oaiSettingsFormArea" class="border" title="installer.oaiSettings"}
		{fbvFormSection label="installer.oaiRepositoryId" description="installer.oaiRepositoryIdInstructions"}
			{fbvElement type="text" id="oaiRepositoryId" value=$oaiRepositoryId|escape maxlength="60" size=$fbvStyles.size.LARGE}
		{/fbvFormSection}
	{/fbvFormArea}

	{fbvFormButtons id="appearanceFormSubmit" submitText="common.save" hideCancel=true submitText="installer.installApplication"}
</form>

{include file="common/footer.tpl"}

