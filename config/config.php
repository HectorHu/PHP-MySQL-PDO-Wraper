<?php
/**
 * @Author: huhuaquan
 * @Date:   2015-06-08 17:56:27
 * @Last Modified by:   huhuaquan
 * @Last Modified time: 2015-06-08 18:12:36
 */
return array(
	'mysql' => array(
		'host' => '127.0.0.1',
		'port' => 3306,
		'username' => 'root',
		'password' => 'root',
		'dbname' => 'test',
		'charset' => 'utf8',
		'dsn' => 'mysql:host=127.0.0.1;port=3306;dbname=test',
		'option' => array(
			PDO::ATTR_AUTOCOMMIT => 0,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_TIMEOUT => 1,
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';",
			),
	)
);