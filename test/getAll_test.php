<?php
/**
 * @Author: huhuaquan
 * @Date:   2015-06-10 16:44:13
 * @Last Modified by:   huhuaquan
 * @Last Modified time: 2015-06-10 16:44:34
 */
require_once '../src/pdo.class.php';
//getAll test
$result = PDO_MySQL::getAll('test', array(
			'where' => array('id' => array('>' => 40)),
			'fields' => 'id',
			'group by' => 'id',
			'sort' => array('id' => 0),
			'join' => array(
				'table' => 'test_join',
				'on' => 'test.id = test_join.test_id'
				)
		));
var_dump($result);