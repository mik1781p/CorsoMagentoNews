<?php

/**
 * Acierno News
 */

/**
 * Acierno News Updater
 *
 * MySQL Updater from 0.1.0 to 0.2.0.
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

/* @var Mage_Core_Model_Resource_Setup $installer */
$installer=$this;
$installer->startSetup();

//Prepare table for acierno_news_story
$tableStory = $installer->getConnection()->newTable($installer->getTable('acierno_news/story'));

$tableStory->addColumn(
    'story_id',
    Varien_Db_Ddl_Table::TYPE_INTEGER,
    null,
    array('primary'=>true,'identity'=>true,'nullable'=>false),
    'story ID'
)->addColumn(
    'title',
    Varien_Db_Ddl_Table::TYPE_TEXT,
    256,
    array('nullable'=>false),
    'story title'
)->addColumn(
    'content',
    Varien_Db_Ddl_Table::TYPE_TEXT,
    null,
    array('nullable'=>false),
    'story content'
)->addColumn(
    'status',
    Varien_Db_Ddl_Table::TYPE_BOOLEAN,
    null,
    array('nullable'=>false),
    'story status'
)->addColumn(
    'category_id',
    Varien_Db_Ddl_Table::TYPE_INTEGER,
    null,
    array('nullable'=>true),
    'story category'
)->addColumn(
    'created_at',
    Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
    null,
    array('default'=>Varien_Db_Ddl_Table::TIMESTAMP_INIT),
    'story created at'
)->addColumn(
    'updated_at',
    Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
    null,
    array('default'=>Varien_Db_Ddl_Table::TIMESTAMP_INIT_UPDATE),
    'story updated at'
);



//Create tables
$installer->getConnection()->createTable($tableStory);
$installer->endSetup();