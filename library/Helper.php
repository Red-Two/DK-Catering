<?php

class Helper
{
	/*
	 * Retrieves the Server Root
	 * Useful for server-file inclusions
	*/
	public static function getServerRoot()
	{
		return dirname(__FILE__) . "/";
	}

	/*
	 * Retrieves the Website Root
	 * Useful for client-file inclusions
	*/
	public static function getWebsiteRoot()
	{
		global $config;

		return(!empty($_SERVER["HTTPS"]) ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . "/" . $config["rootFolder"];
	}

	/*
	 * Basic link Routing
	*/
	public static function route($link)
	{
		return self::getWebsiteRoot() . "index.php?p=" . $link;
	}

	/*
	 * File Routing (Inclusion)
	 * Used for PHP.
	*/
	public static function fileInclusion($file)
	{
		return self::removeLibraryString(self::getWebsiteRoot()) . $file;
	}

	/*
	 * Data Routing (Inclusion)
	 * Used for html, images, CSS, JS, etc...
	*/
	public static function dataInclusion($data)
	{
		return self::removeLibraryString(self::getWebsiteRoot()) . $data;
	}

	/*
	 * Remove "library" string
	*/
	public static function removeLibraryString($string)
	{
		return str_replace("library/", "", $string);
	}

	/*
	 * Get Website Name
	*/
	public static function getWebsiteName()
	{
		global $config;

		return $config["name"];
	}
}