<?php
/**
 * @Author: huhuaquan
 * @Date:   2015-06-08 17:45:18
 * @Last Modified by:   huhuaquan
 * @Last Modified time: 2015-06-08 18:53:49
 */
class PDO_MySQL {
	public static $instance = null;
	public static $table = null;

	private static $config_file_path = '/config/config.php';

	//程序统一入口
	public static function __callStatic($func_name, $args)
	{
		//初始化连接
		if (self::$instance === null)
		{
			$config = require_once(self::$config_file_path);
			$dsn = $config['mysql']['dsn'];
			$username = $config['mysql']['username'];
			$password = $config['mysql']['password'];
			$option = $config['mysql']['option'];

			try
			{
				self::$instance = new PDO($dsn, $username, $password, $option);
			}
			catch(Exception $e)
			{
				var_dump('catch connection exception, info : ' . $e->__toString());
				return false;
			}
		}
		self::$table = $args[0];
		if (method_exists("PDO_MySQL", $func_name))
		{
			try
			{
				$ret = call_user_func_array("self::$func_name", $args);
			}
			catch(Exception $e)
			{
				var_dump("query mysql exception, info : " . $e->__toString());
				return false;
			}
			return $ret;
		}

		var_dump("method not allow, args:" . json_encode(func_get_args()));
		return false;
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