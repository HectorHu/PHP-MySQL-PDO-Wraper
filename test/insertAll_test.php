<?php
/**
 * @Author: huhuaquan
 * @Date:   2015-06-10 16:41:41
 * @Last Modified by:   huhuaquan
 * @Last Modified time: 2015-06-10 16:44:53
 */
require_once '../src/pdo.class.php';
	//insertall test
	$result = PDO_MySQL::insertAll('test', array('id', 'name'), array(array('', 'hhq'), array('', 'hhj')));
	var_dump($result);