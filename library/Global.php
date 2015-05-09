<?php

/*
 * Include Configuration File
*/
require_once "config.php";

/*
 * Autoload PHP Files
*/
function __autoload($className)
{
	include $className . '.php';
}