<?php

/**
 * Acierno News
 */

/**
 * Acierno News Block Adminhtml Category Edit Tabs
 *
 *
 * Backend Category Adminhtml form for tabs category
 * Main Helper
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

class Acierno_News_Block_Adminhtml_Category_Edit_Tabs extends
Mage_Adminhtml_Block_Widget_Tabs
{
    /**
     * _construct
     */
    public function _construct()
    {
        parent::_construct();
        $this->setId('category_edit_tabs'); // nome della tab
        $this->setDestElementId('category_edit_form'); //Il contenuto della tab
    }


    protected function _beforeToHtml()
    {
        $this->addTab(
            'Category Details',
            array(
                'label' => $this->__('Details'),
                'title' => $this->__('Details'),

            )
        );
        parent::_beforeToHtml();
    }
}