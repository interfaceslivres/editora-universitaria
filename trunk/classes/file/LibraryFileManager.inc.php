<?php

/**
 * @file classes/file/LibraryFileManager.inc.php
 *
 * Copyright (c) 2003-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class LibraryFileManager
 * @ingroup file
 *
 * @brief Wrapper class for uploading files to a site/press' library directory.
 */


import('classes.press.LibraryFile');
import('lib.pkp.classes.file.PrivateFileManager');

class LibraryFileManager extends PrivateFileManager {
	/* @var $pressId Press id for the current press */
	var $pressId;

	/**
	 * Constructor
	 * @param $pressId int
	 */
	function LibraryFileManager($pressId) {
		parent::FileManager();
		$this->pressId = $pressId;
	}

	/**
	 * Get the base path for file storage.
	 * @return string
	 */
	function getBasePath() {
		return parent::getBasePath() . '/presses/' . $this->pressId . '/library/';
	}

	/**
	 * Delete a file by ID.
	 * @param $fileId int
	 * @return int number of files removed
	 */
	function deleteFile($fileId) {
		$libraryFileDao =& DAORegistry::getDAO('LibraryFileDAO');
		$libraryFile =& $libraryFileDao->getById($fileId);

		parent::deleteFile($this->getBasePath() . $libraryFile->getFileName());

		$libraryFileDao->deleteById($fileId);
	}

	/**
	 * Generate a filename for a library file.
	 * @param $type int LIBRARY_FILE_TYPE_...
	 * @param $originalFileName string
	 * @return string
	 */
	function generateFileName($type, $originalFileName) {
		$libraryFileDao =& DAORegistry::getDAO('LibraryFileDAO');
		$suffix = $this->getFileSuffixFromType($type);
		$ext = $this->getExtension($originalFileName);
		$truncated = $this->truncateFileName($originalFileName, 127 - String::strlen($suffix) - 1);
		$baseName = String::substr($truncated, 0, String::strpos($originalFileName, $ext) - 1);

		// Try a simple syntax first
		$fileName = $baseName . '-' . $suffix . '.' . $ext;
		if (!$libraryFileDao->filenameExists($this->pressId, $fileName)) return $fileName;

		for ($i = 1; ; $i++) {
			$fullSuffix = $suffix . '-' . $i;
			//truncate more if necessary
			$truncated = $this->truncateFileName($originalFileName, 127 - String::strlen($fullSuffix) - 1);
			// get the base name and append the suffix
			$baseName = String::substr($truncated, 0, String::strpos($originalFileName, $ext) - 1);

			//try the following
			$fileName = $baseName . '-' . $fullSuffix . '.' . $ext;
			if (!$libraryFileDao->filenameExists($this->pressId, $fileName)) {
				return $fileName;
			}
		}
	}

	/**
	 * Routine to copy a library file from a temporary file.
	 * @param $temporaryFile object
	 * @return LibraryFile the generated file, prepared as much as possible for insert (false if upload failed)
	 */
	function &copyFromTemporaryFile(&$temporaryFile, $libraryFileType) {
		$libraryFileDao =& DAORegistry::getDAO('LibraryFileDAO');
		$libraryFile = $libraryFileDao->newDataObject();

		$libraryFile->setDateUploaded($temporaryFile->getDateUploaded());
		$libraryFile->setDateModified($temporaryFile->getDateUploaded());
		$libraryFile->setFileType($temporaryFile->getFileType());
		$libraryFile->setFileSize($temporaryFile->getFileSize());
		$libraryFile->setFileName($this->generateFilename($libraryFileType, $temporaryFile->getOriginalFileName()));
		$libraryFile->setOriginalFileName($temporaryFile->getOriginalFileName());
		if (!$this->copyFile($temporaryFile->getFilePath(), $this->getBasePath() . $temporaryFile->getOriginalFileName())) {
			return false;
		}

		return $libraryFile;
	}

	/**
	 * Get the file suffix for the given file type
	 * @param $type int LIBRARY_FILE_TYPE_...
	 */
	function getFileSuffixFromType($type) {
		$typeSuffixMap =& $this->getTypeSuffixMap();
		return $typeSuffixMap[$type];
	}

	/**
	 * Get the type => suffix mapping array
	 * @return array
	 */
	function &getTypeSuffixMap() {
		static $map = array(
			LIBRARY_FILE_TYPE_CONTRACT => 'CON',
			LIBRARY_FILE_TYPE_MARKETING => 'MAR',
			LIBRARY_FILE_TYPE_PERMISSION => 'PER',
			LIBRARY_FILE_TYPE_REPORT => 'REP',
			LIBRARY_FILE_TYPE_OTHER => 'OTH'
		);
		return $map;
	}

	/**
	 * Get the symbolic name from the type
	 * @param $type int LIBRARY_FILE_TYPE_...
	 */
	function getNameFromType($type) {
		$typeNameMap =& $this->getTypeNameMap();
		if (isset($typeNameMap[$type])) {
			return $typeNameMap[$type];
		} else {
			return false;
		}
	}

	/**
	 * Get the type => locale key mapping array
	 * @return array
	 */
	function &getTypeTitleKeyMap() {
		static $map = array(
			LIBRARY_FILE_TYPE_CONTRACT => 'settings.libraryFiles.category.contracts',
			LIBRARY_FILE_TYPE_MARKETING => 'settings.libraryFiles.category.marketing',
			LIBRARY_FILE_TYPE_PERMISSION => 'settings.libraryFiles.category.permissions',
			LIBRARY_FILE_TYPE_REPORT => 'settings.libraryFiles.category.reports',
			LIBRARY_FILE_TYPE_OTHER => 'settings.libraryFiles.category.other'
		);
		return $map;
	}

	/**
	 * Get the display name locale key from the type title
	 * @param $type int LIBRARY_FILE_TYPE_...
	 */
	function getTitleKeyFromType($type) {
		$typeTitleKeyMap =& $this->getTypeTitleKeyMap();
		return $typeTitleKeyMap[$type];
	}

	/**
	 * Get the type => name mapping array
	 * @return array
	 */
	function &getTypeNameMap() {
		static $typeNameMap = array(
			LIBRARY_FILE_TYPE_CONTRACT => 'contacts',
			LIBRARY_FILE_TYPE_MARKETING => 'marketing',
			LIBRARY_FILE_TYPE_PERMISSION => 'permissions',
			LIBRARY_FILE_TYPE_REPORT => 'reports',
			LIBRARY_FILE_TYPE_OTHER => 'other',
		);
		return $typeNameMap;
	}
}

?>