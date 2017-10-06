<?php

/**
 * Acierno News
 */

/**
 * Acierno News Installer
 *
 * MySQL Installer.
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 * @version 0.1.0
 * @package Cms
 */

/* @var Mage_Core_Model_Resource_Setup $installer */
$installer=$this;
$installer->startSetup();

//Prepare table for gugliotti_news_category
$tableCategory = $installer->getConnection()->newTable($installer->getTable('acierno_news/category'));

$tableCategory->addColumn(
    'category_id',
    Varien_Db_Ddl_Table::TYPE_INTEGER,
    null,
     array('primary'=>true,'identity'=>true,'nullable'=>false),
    'category ID'
)->addColumn(
    'code',
    Varien_Db_Ddl_Table::TYPE_TEXT,
    64,
    array('nullable'=>false),
    'category code'
)->addColumn(
    'name',
    Varien_Db_Ddl_Table::TYPE_TEXT,
    64,
    array('nullable'=>false),
    'category name'
)->addColumn(
    'status',
    Varien_Db_Ddl_Table::TYPE_BOOLEAN,
    null,
    array('nullable'=>false),
    'category status'
)->addColumn(
    'created_at',
    Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
    null,
    array('default'=>Varien_Db_Ddl_Table::TIMESTAMP_INIT),
    'category created at'
)->addColumn(
    'updated_at',
    Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
    null,
    array('default'=>Varien_Db_Ddl_Table::TIMESTAMP_INIT_UPDATE),
    'category updated at'
);



//Create tables
$installer->getConnection()->createTable($tableCategory);
$installer->endSetup();