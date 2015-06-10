<?php
/**
 * @Author: huhuaquan
 * @Date:   2015-06-10 16:43:19
 * @Last Modified by:   huhuaquan
 * @Last Modified time: 2015-06-10 16:44:42
 */
require_once '../src/pdo.class.php';
	//delete test
	$result = PDO_MySQL::delete('test', array('id' => array('<=' => 32)));
	var_dump($result);