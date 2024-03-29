<?php

/**
 * @file pages/submission/PKPSubmissionHandler.inc.php
 *
 * Copyright (c) 2003-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPSubmissionHandler
 * @ingroup pages_submission
 *
 * @brief Base handler for submission requests.
 */

import('classes.handler.Handler');
import('lib.pkp.classes.core.JSONMessage');

class PKPSubmissionHandler extends Handler {
	/**
	 * Constructor
	 */
	function PKPSubmissionHandler() {
		parent::Handler();
	}


	//
	// Public Handler Methods
	//
	/**
	 * Retrieves a JSON list of available choices for a tagit metadata input field.
	 * @param $args array
	 * @param $request Request
	 */
	function fetchChoices($args, &$request) {
		$codeList = (int) $request->getUserVar('codeList');
		$term =& $request->getUserVar('term');

		$onixCodelistItemDao =& DAORegistry::getDAO('ONIXCodelistItemDAO');
		$codes =& $onixCodelistItemDao->getCodes('List' . $codeList, array(), $term); // $term is escaped in the getCodes method.
		import('lib.pkp.classes.core.JSONManager');
		$jsonManager = new JSONManager();
		header('Content-Type: text/json');
		echo $jsonManager->encode(array_values($codes));
	}

	//
	// Protected helper methods
	//
	/**
	 * Setup common template variables.
	 */
	function setupTemplate() {
		parent::setupTemplate();
	}
}
?>
