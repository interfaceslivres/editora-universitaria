{**
 * systemInfo.tpl
 *
 * Copyright (c) 2003-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display system information.
 *}
{strip}
{assign var="pageTitle" value="admin.systemInformation"}
{include file="common/header.tpl"}
{/strip}

<h3>{translate key="admin.currentVersion"}: {$currentVersion->getVersionString(false)} ({$currentVersion->getDateInstalled()|date_format:$datetimeFormatLong})</h3>

{if $latestVersionInfo}
		<p>{translate key="admin.version.latest"}: {$latestVersionInfo.release|escape} ({$latestVersionInfo.date|date_format:$dateFormatLong})</p>
	{if $currentVersion->compare($latestVersionInfo.version) < 0}
		<p><strong>{translate key="admin.version.updateAvailable"}</strong>: <a href="{$latestVersionInfo.package|escape}">{translate key="admin.version.downloadPackage"}</a> | {if $latestVersionInfo.patch}<a href="{$latestVersionInfo.patch|escape}">{translate key="admin.version.downloadPatch"}</a>{else}{translate key="admin.version.downloadPatch"}{/if} | <a href="{$latestVersionInfo.info|escape}">{translate key="admin.version.moreInfo"}</a></p>
	{else}
		<p><strong>{translate key="admin.version.upToDate"}</strong></p>
	{/if}
{else}
<p><a href="{url versionCheck=1}">{translate key="admin.version.checkForUpdates"}</a></p>
{/if}

{url|assign:versionInfoGridUrl router=$smarty.const.ROUTE_COMPONENT component="grid.admin.systemInfo.VersionInfoGridHandler" op="fetchGrid"}
{load_url_in_div id="versionInfoGridContainer" url=$versionInfoGridUrl}

{url|assign:serverInfoGridUrl router=$smarty.const.ROUTE_COMPONENT component="grid.admin.systemInfo.ServerInfoGridHandler" op="fetchGrid"}
{load_url_in_div id="serverInfoGridContainer" url=$serverInfoGridUrl}

{url|assign:systemInfoGridUrl router=$smarty.const.ROUTE_COMPONENT component="grid.admin.systemInfo.SystemInfoGridHandler" op="fetchGrid"}
{load_url_in_div id="systemInfoGridContainer" url=$systemInfoGridUrl}

<a href="{url op="phpinfo"}" target="_blank">{translate key="admin.phpInfo"}</a><br />
{include file="common/footer.tpl"}

