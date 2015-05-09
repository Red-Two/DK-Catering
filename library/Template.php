<?php

/*
 * Constants
*/

// Server Root
define("_serverRoot_", dirname(__FILE__) . "/");

// Website Root
define("_websiteRoot_", (!empty($_SERVER["HTTPS"]) ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . "/");

class Template
{
	/*
	 * Global Variables
	*/
	private $pageTitle = null;
	private $bbItem = null;

	/*
	 * File Routing (Inclusion)
	 * Used to include PHP files.
	*/
	public function fileInclusion($file)
	{
		$include = $this->getServerRoot() . $file;

		include $include;
	}

	/*
	 * Data Routing (Inclusion)
	 * Used for html, images, CSS, JS, etc...
	*/
	public function dataInclusion($data)
	{
		$uri = $this->getWebsiteRoot() . $data;

		return $uri;
	}

	/*
	 * Remove "library" extension
	*/
	public function removeLibrary($string)
	{
		return str_replace("library/", "", $string);
	}

	/*
	 * Accessors
	*/
	public function getServerRoot()
	{
		return $this->removeLibrary(_serverRoot_);
	}

	public function getWebsiteRoot()
	{
		return $this->removeLibrary(_websiteRoot_) . _websiteRootFolder_;
	}

	public function getName()
	{
		return _name_;
	}

	public function getPageTitle()
	{
		global $pageTitle;

		return $pageTitle;
	}

	public function getBBItem()
	{
		global $bbItem;

		return $bbItem;
	}

	/*
	 * Mutators
	*/
	public function setPageTitle($_pageTitle)
	{
		global $pageTitle;

		$pageTitle = $_pageTitle;
	}

	public function setBBItem($_bbItem)
	{
		global $bbItem;

		$bbItem = $_bbItem;
	}
}