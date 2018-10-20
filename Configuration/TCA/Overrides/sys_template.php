<?php

/*
 * This file is part of the TYPO3 CMS Extension "Page Title"
 * Extension author: Michael Schams <schams.net>
 *
 * @package     TYPO3
 * @subpackage  pagetitle
 * @author      Michael Schams <schams.net>
 */

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// Add constants.typoscript and setup.typoscript
call_user_func(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        // Extension key
        'pagetitle',
        // Path
        'Configuration/TypoScript',
        // Extension name
        // 'LLL:EXT:pagetitle/Resources/Private/Language/locallang.xlf:extension_name',
        'Page Title'
    );
});
