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

        $this->loadLayout();
        $this->renderLayout();

    }

    /**
     * newAction
     */
    public function newAction()
    {
        $this->_forward('edit');
    }


    /**
     * editAction
     */
    public function editAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     * saveAction
     */
    public function saveAction()
    {
        //prepare model
        if($this->getRequest()->getParam('category_id')){
            $model= Mage::getModel('acierno_news/category')
                ->load($this->getRequest()->getParam('category_id'));
            if(!$model instanceof Acierno_News_Model_Category){
                Mage::getSingleton('adminhtml/session')->addError($this->__('There was an error during the category loading'));
                return $this->_redirect('*/*/');
            }
        }else{
            $model= Mage::getModel('acierno_news/category');
        }

        //verify code and name
        if(!$this->getRequest()->getParam('code') || !$this->getRequest()->getParam('name')){
            Mage::getSingleton('adminhtml/session')->addError($this->__('Some required fields are missing'));
            return $this->_redirect('*/*/edit/', array('category_id' =>
                $this->getRequest()->getParam('category_id')));
        }

        //save the object

        try{

            $model->setCode($this->getRequest()->getParam('code'));
            $model->setName($this->getRequest()->getParam('name'));
            $model->setStatus($this->getRequest()->getParam('status') == 1 ? 1:0);
            $model->save();

        }catch(Exception $e){

            Mage::logException($e);
            Mage::getSingleton('adminhtml/session')->addError($this->__('There was an error while saving the category'));
            return $this->_redirect('*/*/edit/', array('category_id' =>
                $this->getRequest()->getParam('category_id')));
        }
        Mage::getSingleton('adminhtml/session')->addSuccess($this->__('The category was successfully saved'));
        return $this->_redirect('*/*/');

    }

    /**
     * deleteAction
     *
     * This method removes the object from the DB.
     * Redirects in case of success (or not) with a
     * specific message
     * @return $this|Mage_Core_Controller_Varien_Action
     */
    public function deleteAction()
    {
        //Load object
        $category = Mage::getModel('acierno_news/category')->load($this->getRequest()->getParam('category_id'));

        if(!$category || !$category->getId())
        {
            Mage::getSingleton('adminhtml/session')->addError($this->__('There was an error during the category loading'));
            return $this->_redirect('*/*/');
        }

        //delete category
        try{
            $category->delete();
        } catch(Exception $e) {
            Mage::logException($e);
            Mage::getSingleton('adminhtml/session')->addError($this->__('There was an error during the category deleting'));
            return $this->_redirect('*/*/');

        }
        Mage::getSingleton('adminhtml/session')->addSuccess($this->__('The category was successfully deleted'));
        return $this->_redirect('*/*/');
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