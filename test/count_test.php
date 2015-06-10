<?php
/**
 * @Author: huhuaquan
 * @Date:   2015-06-10 16:42:11
 * @Last Modified by:   huhuaquan
 * @Last Modified time: 2015-06-10 16:44:47
 */
require_once '../src/pdo.class.php';
	//count test
	$result = PDO_MySQL::count('test', array('id' => array('>=' => 30)));
	var_dump($result);