<?php

/*
 * Include Configuration File
*/
require_once "config.php";

/*
 * Enable Errors
*/
ini_set("display_errors", 1);

class Application
{
	/*
	 * Constructor
	*/
	public function __construct()
	{
		spl_autoload_register(array($this, "autoLoader"));

		$this->routeController();
	}

	/*
	 * Chooses where the user-defined action will go
	*/
	public function routeController()
	{
		$action = "actionIndex";

		if (isset($_GET["p"]))
		{
			$params = array();
			$params = array_filter(explode("/", $_GET["p"]));

			if (count($params) != 1)
			{
				$action = "action";

				for ($i = 1; $i < count($params); $i++)
				{
					$action .= ucwords($params[$i]);
				}
			}

			$controller = "Controller_" . ucwords($params[0]);
		}
		else
		{
			call_user_func(array(new Controller_Index(), $action));
			exit();
		}

		if (isset($controller) && class_exists($controller))
		{
			if (method_exists(new $controller(), $action))
			{
				call_user_func(array(new $controller(), $action));
				exit();
			}
			else
			{
				call_user_func(array(new Controller_Error(), "actionIndex"));
				exit();
			}
		}
		else
		{
			call_user_func(array(new Controller_Error(), "actionIndex"));
			exit();
		}
	}

	/*
	 * AutoLoader
	*/
	public function autoLoader($className) 
	{
		$fileName = str_replace("_", DIRECTORY_SEPARATOR, $className) . ".php";
		$file = dirname(__FILE__) . "/" . $fileName;

		if (!file_exists($file))
		{
			return false;
		}

		require_once $file;
	}
}