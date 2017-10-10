<?php
/**
 * Acierno News
 */

/**
 * Acierno News Model Category
 *
 *
 * Category Model
 * @method Acierno_News_Model_Category getCode()
 * @method setCode(string $code)
 * @method Acierno_News_Model_Category getName()
 * @method setName(string $name)
 * @method Acierno_News_Model_Category getStatus()
 * @method setStatus(bool $status)
 * @method Acierno_News_Model_Category getCreatedAt()
 * @method Acierno_News_Model_Category getUpdatedAt()
 * @method setUpdatedAt(string $updatedAt)
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Acierno_News_Model_Category extends Mage_Core_Model_Abstract
{

    /**
     * Event prefix overiding
     *
     * $_eventPrefix
     * @var string
     */
    protected $_eventPrefix = 'acierno_news_category';


    /**
     * Name for the object
     *
     * $_eventObject
     * @var string
     */
    protected $_eventObject = 'category';


    /**
     * _construct
     */

    protected function _construct()
    {
        $this->_init('acierno_news/category');
    }

    /**
     * _beforeSave
     * @return Mage_Core_Model_Abstract
     */
    protected function _beforeSave()
    {
        parent::_beforeSave();
        $this->setUpdatedAt(Mage::getSingleton('core/date')->gmtDate());
        return $this;
    }


}
