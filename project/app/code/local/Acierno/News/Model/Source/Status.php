<?php
/**
 * Created by PhpStorm.
 * User: skaarl
 * Date: 11/10/17
 * Time: 12.51
 */


class Acierno_News_Model_Source_Status
{
    public function toOptionArray()
    {
        return array(
            array(
                'value'=> 0,
                'label'=> Mage::helper('acierno_news')->__('Disabled')),
            array(
                'value'=> 1,
                'label'=> Mage::helper('acierno_news')->__('Enabled'))
        );
    }
}