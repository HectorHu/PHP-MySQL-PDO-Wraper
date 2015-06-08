<?php
/**
 * @Author: huhuaquan
 * @Date:   2015-06-08 17:45:18
 * @Last Modified by:   huhuaquan
 * @Last Modified time: 2015-06-08 17:55:08
 */
class PDO_MySQL {
	public static $instance = null;
	public static $table = null;

	//程序统一入口
	public static function __callStatic($func_name, $args)
	{
		//todo
	}

	private static function execute($sql, $params)
	{
		//todo
	}

	private static function getOne($conditions)
	{
		//todo
	}

	private static function getAll($conditions, $option = array())
	{
		//todo
	}

	private static function count($conditions)
	{
		//todo
	}

	private static function insert($data)
	{
		//todo
	}

	private static function insertAll($data)
	{
		//todo
	}

	private static function delete($conditions)
	{
		//todo
	}

	private static function update($conditions)
	{
		//todo
	}
}