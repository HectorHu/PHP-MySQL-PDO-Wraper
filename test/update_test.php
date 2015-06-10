<?php
/**
 * @Author: huhuaquan
 * @Date:   2015-06-10 16:43:40
 * @Last Modified by:   huhuaquan
 * @Last Modified time: 2015-06-10 16:44:40
 */
require_once '../src/pdo.class.php';
	//update test
	$result = PDO_MySQL::update('test', array('id' => 33), array('name' => 'hhh'));
	var_dump($result);