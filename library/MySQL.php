<?php

class MySQL
{
	/*
	 * Global Variables
	*/
	protected $db = null;

	/*
	 * Constructor
	*/
	public function __construct()
	{
		global $mysqlInfo;

		try
		{
			$this->db = new PDO("mysql:host=" . $mysqlInfo["hostname"] . ";dbname=" . $mysqlInfo["database"] . ";charset=utf8", $mysqlInfo["username"], $mysqlInfo["password"]);
		}
		catch(Exception $e)
		{
			throw $e->getMessage();
		}
	}

	/*
	 * Destructor
	*/
	public function __destruct()
	{
		$this->db = null;
	}

	/*
	 * Accessor
	*/
	public function getDb()
	{
		return $this->db;
	}
}