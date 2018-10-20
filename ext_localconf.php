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

$boot = function () {
    $extensionKey = 'pagetitle';

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'SchamsNet.' . $extensionKey,
        'fe',
        [
            // Allowed "controller/action" combinations
            'Frontend' => 'index, list, flash',
        ],
        [
            // Do not cache these actions
            'Frontend' => 'index, list, flash',
        ]
    );
};

$boot();
unset($boot);
