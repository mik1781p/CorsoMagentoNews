<?php

require_once ('app/Mage.php');
Varien_Profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set('display_errors',1);
umask(0);
Mage::app();

//create a category

/**
$category = Mage::getModel('acierno_news/category');
$category->setCode('top');
$category->setName('Think Open');
$category->setStatus(true);
$category->save();
$category =  Mage::getModel('acierno_news/category')->load(1);
echo 'Category: <hr>';
Zend_Debug::dump($category);
echo '<hr>';
$story = Mage::getModel('acierno_news/story');
$story -> setTitle('La mia storia 2, la vendetta ');
$story -> setContent('Lorem ipsum');
$story -> setStatus(true);
$story -> setCategory($category);
$story->save();
Zend_Debug::dump($story);
echo '<hr>';
echo 'Category Name = '.$story->getCategory()->getName();
**/

$resource = Mage::getSingleton('core/resource');

$read = $resource->getConnection('core/read');
$write = $resource->getConnection('core/write');

$table1 = $resource->getTableName('acierno_news/category');
$table2 = $resource->getTableName('acierno_news/story');


$query = "SELECT * FROM {table1} AS story JOIN ({table1} AS category) 
ON {category.category_id} = story.category_id";
$result= $read->fetchAll($query);

foreach($result as $re) {
    echo '<hr><pre>';
    var_dump($re);
    echo '<hr><pre>';
}

/*
$query = "SELECT *FROM {$table2} WHERE category_id=1";
$result= $read->fetchAll($query);

foreach($result as $re) {
    echo '<hr><pre>';
    var_dump($re);
    echo '<hr><pre>';
}
*/