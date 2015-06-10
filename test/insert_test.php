<?php
/**
 * @Author: huhuaquan
 * @Date:   2015-06-10 16:40:56
 * @Last Modified by:   huhuaquan
 * @Last Modified time: 2015-06-10 16:44:49
 */
require_once '../src/pdo.class.php';
	//insert test
	$result = PDO_MySQL::insert('test', array('id' => '', 'name' => 'hhq'));
	var_dump($result);