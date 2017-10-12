<?php

/**
 * Acierno News
 */

/**
 * Acierno News Block Adminhtml Category Edit
 *
 *
 * Backend Category Adminhtml Edit for category controller
 * Main Helper
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

class Acierno_News_Block_Adminhtml_Category_Edit extends
Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Acierno_News_Block_Adminhtml_Category_Edit constructor.
     */
    public function __construct()
    {
        $this->_objectId ="category_id";
        $this->_blockGroup="acierno_news";
        $this->_controller="adminhtml_category";


        parent::__construct();
    }

    /**
     * hetHeaderText
     *
     * Returns the text for the header in the
     * edit page.
     * @return string
     */
    public function getHeaderText()
    {
        return $this->__('Category Details');
    }
}