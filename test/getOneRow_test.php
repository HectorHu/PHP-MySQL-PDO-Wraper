<?php
/**
 * @Author: huhuaquan
 * @Date:   2015-06-10 16:42:47
 * @Last Modified by:   huhuaquan
 * @Last Modified time: 2015-06-10 16:44:44
 */
require_once '../src/pdo.class.php';
	//get onerow test
	$result = PDO_MySQL::getOneRow('test', array('id' => 30), 'name');
	var_dump($result);