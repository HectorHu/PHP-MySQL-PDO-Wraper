<?php
/**
 * @Author: huhuaquan
 * @Date:   2015-06-08 17:45:18
 * @Last Modified by:   huhuaquan
 * @Last Modified time: 2015-06-09 19:36:18
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

	private static function insert($table, $data)
	{
		$columns = array();
		$places = array();
		$params = array();
		foreach ($data as $tmp_field => $value)
		{
			$columns[] = "`" . $tmp_field . "`";
			$places[] = ":" . $tmp_field;
			$params[":" . $tmp_field] = $value;
		}
		$columns = '(' . implode(',', $columns). ')';
		$places = '(' . implode(',', $places) . ')';
		$insert_sql = implode(" ", array(
			'insert into',
			self::$table,
			$columns,
			'values',
			$places
		));
		$stmt = self::$instance->prepare($insert_sql);
		self::bind($params, $stmt);
		$result = $stmt->execute();
		if ($result !== true)
		{
			var_dump("Insert error, args" . json_encode(func_get_args()));
			return false;
		}
		return self::$instance->lastInsertId();
	}

	private static function insertAll($table, $fields, $datas)
	{
		$columns = array();
		foreach ($fields as $field)
		{
			$columns[] = "`" . $field . "`";
		}
		$columns = '(' . implode(',', $columns) . ')';

		$places = array();
		$params = array();
		$i = 0;
		foreach ($datas as $data)
		{
			$tmp_places = array();
			$tmp_params = array();
			foreach ($data as $key => $value)
			{
				$tmp_places[] = ":" . $fields[$key] . "_$i";
				$tmp_params[":" . $fields[$key] . "_$i"] = $value;
			}
			$places[] = "(" . implode(',', $tmp_places) . ")";
			$params[] = $tmp_params;
			++$i;
		}
		$places = implode(',', $places);
		$insert_sql = implode(" ", array(
			'insert into',
			self::$table,
			$columns,
			'values ',
			$places
		));
		$stmt = self::$instance->prepare($insert_sql);
		self::bindMulti($params, $stmt);
		$result = $stmt->execute();
		if ($result !== true)
		{
			var_dump("Insert error, args" . json_encode(func_get_args()));
			return false;
		}
		return self::multiLastInsertId($stmt);
	}

	private static function delete($conditions)
	{
		//todo
	}

	private static function update($conditions)
	{
		//todo
	}

	private static function bind($params, &$stmt)
	{
		foreach ($params as $field => $value)
		{
			$stmt->bindParam($field, $value);
		}
	}

	private static function bindMulti($params_array, &$stmt)
	{
		foreach ($params_array as $params)
		{
			self::bind($params, $stmt);
		}
	}

	private static function multiLastInsertId($stmt)
	{
		$firstInsertedId = self::$instance->lastInsertId();
		$lastInsertedId = $firstInsertedId + ($stmt->rowCount() - 1);
		return $lastInsertedId;
	}
}