<?php

/**
 * @file controllers/modals/editorDecision/form/InitiateExternalReviewForm.inc.php
 *
 * Copyright (c) 2003-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class InitiateReviewForm
 * @ingroup controllers_modal_editorDecision_form
 *
 * @brief Form for creating the first review round for a submission's external
 *  review (skipping internal)
 */

import('controllers.modals.editorDecision.form.InitiateReviewForm');

class InitiateExternalReviewForm extends InitiateReviewForm {

	/**
	 * Constructor.
	 * @param $seriesEditorSubmission SeriesEditorSubmission
	 * @param $decision int SUBMISSION_EDITOR_DECISION_...
	 * @param $stageId int WORKFLOW_STAGE_ID_...
	 */
	function InitiateExternalReviewForm($seriesEditorSubmission, $decision, $stageId) {
		parent::InitiateReviewForm($seriesEditorSubmission, $decision, $stageId, 'controllers/modals/editorDecision/form/initiateExternalReviewForm.tpl');
	}

	/**
	 * Get the stage ID constant for the submission to be moved to.
	 * @return int WORKFLOW_STAGE_ID_...
	 */
	function _getStageId() {
		return WORKFLOW_STAGE_ID_EXTERNAL_REVIEW;
	}
}

?>
