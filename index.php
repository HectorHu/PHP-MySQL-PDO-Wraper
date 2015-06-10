<?php
/**
 * @Author: huhuaquan
 * @Date:   2015-06-08 18:04:31
 * @Last Modified by:   huhuaquan
 * @Last Modified time: 2015-06-10 16:28:15
 */
require_once 'src/pdo.class.php';

//insert test
// $result = PDO_MySQL::insert('test', array('id' => '', 'name' => 'hhq'));
// var_dump($result);

//insertall test
// $result = PDO_MySQL::insertAll('test', array('id', 'name'), array(array('', 'hhq'), array('', 'hhj')));
// var_dump($result);

//count test
// $result = PDO_MySQL::count('test', array('id' => array('>=' => 30)));
// var_dump($result);

//get onerow test
// $result = PDO_MySQL::getOneRow('test', array('id' => 30), 'name');
// var_dump($result);

//delete test
// $result = PDO_MySQL::delete('test', array('id' => array('<=' => 32)));
// var_dump($result);

//update test
// $result = PDO_MySQL::update('test', array('id' => 33), array('name' => 'hhh'));
// var_dump($result);

//getAll test
$result = PDO_MySQL::getAll('test', array('where' => array('id' => array('>' => 40)), 'fields' => 'id'));
var_dump($result);