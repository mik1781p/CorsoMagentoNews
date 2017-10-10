<?php

/**
 * Acierno News
 */

/**
 * Acierno News Adminhtml Controller
 *
 *
 * Backend Category Controller
 * Main Helper
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */


class Acierno_News_Adminhtml_CategoryController extends Mage_Adminhtml_Controller_Action
{
    /**
     * indexAction
     */
    public function indexAction()
    {
        echo 'eccomi'; die;
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