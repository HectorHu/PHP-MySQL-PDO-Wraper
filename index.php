<?php
/**
 * @Author: huhuaquan
 * @Date:   2015-06-08 18:04:31
 * @Last Modified by:   huhuaquan
 * @Last Modified time: 2015-06-09 09:33:05
 */
require_once 'src/pdo.class.php';
$result = PDO_MySQL::insert('test', array('id' => '', 'name' => 'hhq'));
var_dump($result);