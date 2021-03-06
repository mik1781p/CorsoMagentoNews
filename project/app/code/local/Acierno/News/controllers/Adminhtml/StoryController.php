<?php

/**
 * Acierno News
 */

/**
 * Acierno News Adminhtml Controller
 *
 *
 * Backend Story Controller
 * Main Helper
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */


class Acierno_News_Adminhtml_StoryController extends Mage_Adminhtml_Controller_Action
{
    /**
     * indexAction
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     * _isAllowed
     * @return bool
     */
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('acierno_news');
    }
}