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


class Acierno_News_Block_Story extends Mage_Core_Block_Template
{

    /**
     * getStories
     *
     * @return Acierno_News_Model_
     */
    public function getStories()
    {

        //TODO aggiungerela verifica

        //Control if there are filter parameters
        if ($this->getRequest()->getParam('category')) {
            $stories= Mage::getModel('acierno_news/story')->getCollection()
                ->addFieldToFilter('status', array('eq' => 1))
                ->addFieldToFilter('category_id', array('eq'=>
                $this->getRequest()->getParam('category')));
        } else {
            $stories= Mage::getModel('acierno_news/story ')->getCollection()
                ->addFieldToFilter('status', array('eq' => 1));
        }
    return $stories;
    }
}