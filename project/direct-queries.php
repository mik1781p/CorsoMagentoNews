<?php

require_once 'app/Mage.php';
Varien_Profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set('display_errors', 1);
umask(0);
Mage::app();

// preparing resources
$resource = Mage::getSingleton('core/resource');
$read = $resource->getConnection('core/read');
$write = $resource->getConnection('core/write');

// getting table name
$table1 = $resource->getTableName('gugliotti_news/category');

// exercise 1
//$query = "SELECT * FROM {$table1}";
//$result = $read->fetchAll($query); // fetchAll(), fetchCol(), fetchOne()
//
//echo '<h1>CATEGORIES</h1>';
//foreach ($result as $re) {
//	echo '<hr><pre>';
//	var_dump($re);
//	echo '</pre>';
//}
//
//// exercise 2
//$query = "SELECT * FROM {$table1} WHERE category_id = 9";
//$result = $read->fetchAll($query); // fetchAll(), fetchCol(), fetchOne()
//
//echo '<h1>CATEGORIES</h1>';
//foreach ($result as $re) {
//	echo '<hr><pre>';
//	var_dump($re);
//	echo '</pre>';
//}
//
//// exercise 3
//$table2 = $resource->getTableName('gugliotti_news/story');
//$query = "SELECT * FROM {$table2} AS story JOIN ({$table1} AS category) ON (category.category_id = story.category_id)";
//$result = $read->fetchAll($query); // fetchAll(), fetchCol(), fetchOne()
//
//echo '<h1>STORIES</h1>';
//foreach ($result as $re) {
//	echo '<hr><pre>';
//	var_dump($re);
//	echo '</pre>';
//}
//
//// exercise 4
//$query = "INSERT INTO {$table1} (code, label, status) VALUES ('query3', 'Category Via Query3', 1)";
//$result = $write->query($query);
//
//echo '<h1>INSERTING DATA VIA QUERY</h1>';
//echo '<hr><pre>';
//var_dump($result);
//echo '</pre>';

// exercise 5
//$query = "UPDATE {$table1} SET code = 'newquery2', label = 'Updating Category Via Query2' WHERE category_id = 11";
//$result = $write->query($query);
//echo '<h1>UPDATING DATA VIA QUERY</h1>';
//echo 'rows: ' . $result->rowCount();
//echo '<hr><pre>';
//var_dump($result);
//echo '</pre>';

// exercise 6
//$resource = Mage::getResourceSingleton('core/resource');
//$name = 'name';
//$result = $resource->getReadConnection()
//	->select()
//	->from('tableName')
//	->where('name = ?', $name)
//	->query()
//	->fetchAll();