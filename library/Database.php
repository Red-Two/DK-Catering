<?php

class Database
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
		global $config;

		$this->db = new PDO("mysql:host=" . $config["mysql"]["hostname"] . ";dbname=" . $config["mysql"]["database"] . ";charset=utf8", $config["mysql"]["username"], $config["mysql"]["password"]);
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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