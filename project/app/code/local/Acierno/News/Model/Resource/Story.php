<?php
/**
 * Acierno News
 */

/**
 * Acierno News Model Resource Story
 *
 * Resource Story
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Acierno_News_Model_Resource_Story extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * _construct
     *
     *
     */
    protected function _construct()
    {
        $this->_init('acierno_news/story', 'story_id');
    }
}
