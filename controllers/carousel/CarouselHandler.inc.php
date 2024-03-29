<?php

/**
 * @file controllers/carousel/CarouselHandler.inc.php
 *
 * Copyright (c) 2000-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class CarouselHandler
 * @ingroup controllers_carousel
 *
 * @brief Class defining basic operations for carousel widget.
 */

// Import the base Handler.
import('classes.handler.Handler');

// Import JSON class for use with all AJAX requests.
import('lib.pkp.classes.core.JSONMessage');

class CarouselHandler extends Handler {

	/**
	 * Constructor.
	 */
	function CarouselHandler() {
		parent::Handler();
	}


	function authorize($request, $args, $roleAssignments) {
		import('lib.pkp.classes.security.authorization.ContextRequiredPolicy');
		$this->addPolicy(new ContextRequiredPolicy($request));

		return parent::authorize($request, $args, $roleAssignments);
	}

	//
	// Public handler methods
	//
	/**
	 * Render the entire carousel and send
	 * it to the client.
	 * @param $args array
	 * @param $request Request
	 * @return string the serialized grid JSON message
	 */
	function fetch($args, &$request) {
		$this->setupTemplate();

		$press =& $request->getPress();
		$templateMgr =& TemplateManager::getManager();

		// Expose the featured monograph IDs and associated params
		$featureDao =& DAORegistry::getDAO('FeatureDAO');
		$featuredMonographIds = $featureDao->getSequencesByAssoc(ASSOC_TYPE_PRESS, $press->getId());

		if (empty($featuredMonographIds)) {
			$returner = null;
		} else {
			$templateMgr->assign('featuredMonographIds', $featuredMonographIds);

			// Fetch the monographs to display
			$publishedMonographDao =& DAORegistry::getDAO('PublishedMonographDAO');
			$publishedMonographs =& $publishedMonographDao->getByPressId($press->getId());
			$templateMgr->assign('publishedMonographs', $publishedMonographs->toAssociativeArray());

			// Render the carousel.
			$returner = $templateMgr->fetch('catalog/carousel.tpl');
		}

		$json = new JSONMessage(true, $returner);
		return $json->getString();
	}
}
?>
