<?php
/**
 * Acierno News
 */

/**
 * Acierno News Model Story
 *
 *
 * Story Model
 * @method Acierno_News_Model_Story getTitle()
 * @method setTitle(string $title)
 * @method Acierno_News_Model_Story getContent()
 * @method setContent(string $content)
 * @method Acierno_News_Model_Story getCategoryId()
 * @method setCategoryId(bool $categoryId)
 * @method Acierno_News_Model_Story getStatus()
 * @method setStatus(bool $status)
 * @method Acierno_News_Model_Story getCreatedAt()
 * @method Acierno_News_Model_Story getUpdatedAt()
 * @method setUpdatedAt(string $updatedAt)
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Acierno_News_Model_Story extends Mage_Core_Model_Abstract
{
    /**
     * Event prefix overiding
     *
     * $_eventPrefix
     * @var string
     */
    protected $_eventPrefix = 'acierno_news_story';


    /**
     * Name for the object
     *
     * $_eventObject
     * @var string
     */
    protected $_eventObject = 'story';

    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('acierno_news/story');
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


    /**
     * getCategory
     *
     * Get Category object
     * @return bool|Acierno_News_Model_Category|Mage_Core_Model_Abstract
     */
    public function getCategory()
    {
        $category = Mage::getModel('acierno_news/category')->load($this->getData('category_id'));
        if($category && $category->getId())
        {
            return $category;
        }
        return false;
    }

    /**
     * setCategory
     *
     * Set category id from Category object
     * @param $category
     */
    public function setCategory(Acierno_News_Model_Category $category)
    {
        $this->setData('category_id', $category->getId());
    }
}
