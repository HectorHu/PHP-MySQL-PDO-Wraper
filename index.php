<?php
/**
 * @Author: huhuaquan
 * @Date:   2015-06-08 18:04:31
 * @Last Modified by:   huhuaquan
 * @Last Modified time: 2015-06-09 19:17:22
 */
require_once 'src/pdo.class.php';

//insert test
// $result = PDO_MySQL::insert('test', array('id' => '', 'name' => 'hhq'));
// var_dump($result);

//insertall test
$result = PDO_MySQL::insertAll('test', array('id', 'name'), array(array('', 'hhq'), array('', 'hhj')));
var_dump($result);