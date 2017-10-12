<?php

/**
 * Acierno News
 */

/**
 * Acierno News Block Adminhtml Category Grid
 *
 *
 * Backend Category Adminhtml grid for category
 * Main Helper
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

class Acierno_News_Block_Adminhtml_Category_Grid extends
Mage_Adminhtml_Block_Widget_Grid
{

    /**
     * Acierno_News_Block_Adminhtml_Category_Grid constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('category_id'); //ID DELLA CHIAVE PRIMARIA
        $this->setDefaultSort('category_id'); //COLONNA PER L'ORDINE DI DEFAULT
        $this->setDefaultDir('asc');//Ascendente o discendente
        $this->setSaveParametersInSession(true);
        //Salva i parametri in sessione
    }

    /**
     * _prepareCollection
     * @return Mage_Adminhtml_Block_Widget_Grid
     */
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('acierno_news/category')
        ->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    /**
     * _prepareColumns
     * @return $this
     */
    protected function _prepareColumns()
    {
        $this->addColumn('category_id',
            array(
                'index' => 'category_id',
                'header' => $this->__('ID'),
                'width' => 50,
                'type' => 'number'
            )
        );

        $this->addColumn('code',
            array(
                'index' => 'code',
                'header' => $this->__('Code'),
                'width' => 200
            )
        );

        $this->addColumn('name',
            array(
                'index' => 'name',
                'header' => $this->__('Name'),
            )
        );

        $this->addColumn('status',
            array(
                'index' => 'status',
                'header' => $this->__('Status'),
                'width' => 250,
                'type'  => 'options',
                'options' => Mage::getModel('acierno_news/source_status')->toGridArray(),
                'renderer'=> 'acierno_news/adminhtml_category_grid_renderer_status'
            )
        );

        $this->addColumn('actions',
            array(
                'header' => $this->__('Actions'),
                'width' => 100,
                'type' => 'action',
                'getter' => 'getId',
                'actions' => array(
                    array(
                        'caption' => $this->__('Edit'),
                        'url' => array('base' => '*/*/edit'),
                        'field' => 'category_id'
                    ),
                    array(
                        'caption' => $this->__('Delete'),
                        'url' => array('base' => '*/*/delete'),
                        'field' => 'category_id',
                        'confirm' => $this->__('Are you sure you want to delete this?')
                    ),
                ),
                'filter' => false,
                'sortable'=> false,
                'index' => 'stores',
                'is_system' => true

            )
        );
        return parent::_prepareColumns();
    }
}