<?php
/**
 * @file controllers/modals/submissionMetadata/linkAction/CatalogEntryLinkAction.inc.php
 *
 * Copyright (c) 2003-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class CatalogEntryLinkAction
 * @ingroup controllers_modals_submissionMetadata_linkAction
 *
 * @brief An action to open a modal to allow addition of a submission to the catalog.
 */

import('lib.pkp.classes.linkAction.LinkAction');

class CatalogEntryLinkAction extends LinkAction {

	/**
	 * Constructor
	 * @param $request Request
	 * @param $monographId integer The submission to show meta-data for.
	 * @param $stageId integer The stage ID of the viewer's context
	 * @param $selectedFormatId integer The publication format ID that
	 * will be used to open the correspondent publication format tab. If
	 * none is passed, the first catalog entry tab will be opened.
	 * @param $image string
	 */
	function CatalogEntryLinkAction(&$request, $monographId, $stageId, $selectedFormatId = null, $image = 'information') {
		// Instantiate the modal.
		$dispatcher =& $request->getDispatcher();
		import('lib.pkp.classes.linkAction.request.AjaxModal');

		$actionArgs = array();
		$actionArgs['monographId'] = $monographId;
		$actionArgs['stageId'] = $stageId;
		if ($selectedFormatId) {
			$actionArgs['selectedFormatId'] = $selectedFormatId;
		}

		$modal = new AjaxModal(
			$dispatcher->url(
				$request, ROUTE_COMPONENT, null,
				'modals.submissionMetadata.CatalogEntryHandler',
				'fetch', null,
				$actionArgs
			),
			__('submission.catalogEntry'),
			'modal_more_info'
		);

		// Configure the link action.
		$toolTip = ($image == 'completed') ? __('grid.action.formatInCatalogEntry') : null;
		parent::LinkAction('catalogEntry', $modal, __('submission.catalogEntry'), $image, $toolTip);
	}
}

?>
