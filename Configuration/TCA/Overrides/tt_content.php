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

// Register plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    // Extension key
    'pagetitle',
    // Plugin name
    'fe',
    // Extension name
    // 'LLL:EXT:pagetitle/Resources/Private/Language/locallang.xlf:extension_name',
    'Page Title',
    // Icon
    'EXT:pagetitle/Resources/Public/Icons/Extension.png'
);
