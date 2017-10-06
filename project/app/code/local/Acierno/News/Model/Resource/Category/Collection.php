<?php
/**
 * Acierno News
 */

/**
 * Acierno News Model Resource Category Collection
 *
 * Resource Category Collection
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Acierno_News_Model_Resource_Category_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * _construct
     *
     *
     */
    protected function _construct()
    {
        $this->_init('acierno_news/category');
    }
}
