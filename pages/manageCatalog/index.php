<?php

/**
 * @defgroup pages_manageCatalog
 */

/**
 * @file pages/manageCatalog/index.php
 *
 * Copyright (c) 2003-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_catalog
 * @brief Handle requests for catalog management functions.
 *
 */

switch ($op) {
	case 'index':
	case 'homepage':
	case 'getCategories':
	case 'category':
	case 'getSeries':
	case 'series':
	case 'search':
	case 'toggle':
		define('HANDLER_CLASS', 'ManageCatalogHandler');
		import('pages.manageCatalog.ManageCatalogHandler');
		break;
}

?>