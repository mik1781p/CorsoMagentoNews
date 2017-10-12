<?php

/**
 * Acierno News
 */

/**
 * Acierno News Block Adminhtml Category
 *
 *
 * Backend Category Adminhtml block for category
 * Main Helper
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */


class Acierno_News_Block_Adminhtml_Category extends
 Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {

        //Quale sarà il block group da utilizzare
        $this->_blockGroup = 'acierno_news';

        //Quale controller sarà utilizzato
        $this->_controller = 'adminhtml_category';

        //Settiamo l'header text con con traduzione
        $this->_headerText = $this->__('News Categories');

        //richiamiamo il construct del padre
        parent::__construct();
    }
}