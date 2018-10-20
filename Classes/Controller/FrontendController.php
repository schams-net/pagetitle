<?php
namespace SchamsNet\Pagetitle\Controller;

/*
 * This file is part of the TYPO3 CMS Extension "Page Title"
 * Extension author: Michael Schams <schams.net>
 *
 * @package     TYPO3
 * @subpackage  pagetitle
 * @author      Michael Schams <schams.net>
 */

use TYPO3\CMS\Core\Messaging\AbstractMessage;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

use SchamsNet\Pagetitle\PageTitle\PageTitleProvider;

/**
 * FrontendController class
 */
class FrontendController extends ActionController
{
    /**
     * Extension key
     *
     * @access private
     * @var string
     */
    private $extensionKey;

    /**
     * Action name
     *
     * @access private
     * @var string
     */
    private $action;

    /**
     * Controller name
     *
     * @access private
     * @var string
     */
    private $controller;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Initialize action
     *
     * @access public
     */
    public function initializeAction() : void
    {
        // ...
        $this->extensionKey = $this->request->getControllerExtensionKey();
        $this->action = $this->request->getControllerActionName();
        $this->controller = $this->request->getControllerName();

        /** @var $pageTitleProvider \SchamsNet\Pagetitle\PageTitle\PageTitleProvider; */
        $pageTitleProvider = GeneralUtility::makeInstance(PageTitleProvider::class);
        $pageTitleProvider->setTitle(ucfirst($this->action));
    }

    /**
     * Initialize View
     *
     * @param \TYPO3\CMS\Extbase\Mvc\View\ViewInterface
     */
    protected function initializeView(ViewInterface $view) : void
    {
        // Set action name as variable '' in Fluid templates
        $this->view->assign('action', $this->action);
    }

    /**
     * Index action (default action)
     *
     * @access public
     */
    public function indexAction() : void
    {
    }

    /**
     * List action
     *
     * @access public
     */
    public function listAction() : void
    {
    }

    /**
     * Flash action
     *
     * @access public
     */
    public function flashAction() : void
    {
        // Generate a Flash Message
        $this->addFlashMessage(
            LocalizationUtility::translate('flashmessage_message', $this->extensionKey),
            LocalizationUtility::translate('flashmessage_headline', $this->extensionKey),
            AbstractMessage::OK
        );

        // Redirect to the "index" action
        $this->redirect('index');
    }
}
