<?php
namespace SchamsNet\Pagetitle\PageTitle;

/*
 * This file is part of the TYPO3 CMS Extension "Page Title"
 * Extension author: Michael Schams <schams.net>
 *
 * @package     TYPO3
 * @subpackage  pagetitle
 * @author      Michael Schams <schams.net>
 */

use TYPO3\CMS\Core\PageTitle\AbstractPageTitleProvider;

/*
 * PageTitleProvider class
 */
class PageTitleProvider extends AbstractPageTitleProvider
{
    /**
     * Set page title
     *
     * @access public
     * @param string Page title
     */
    public function setTitle(string $title) : void
    {
        $this->title = $title;
    }
}
