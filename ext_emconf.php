<?php

/*
 * This file is part of the TYPO3 CMS Extension "Page Title"
 * Extension author: Michael Schams <schams.net>
 *
 * @package     TYPO3
 * @subpackage  pagetitle
 * @author      Michael Schams <schams.net>
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Page Title',
    'description' => 'Demo extension to showcase TYPO3\'s PageTitle API',
    'category' => 'fe',
    'version' => '1.0.0',
    'module' => '',
    'state' => 'stable',
    'createDirs' => '',
    'clearcacheonload' => 0,
    'author' => 'Michael Schams',
    'author_email' => '',
    'author_company' => 'https://schams.net',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ]
];
