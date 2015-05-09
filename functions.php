<?php

/*
 * Configuration
*/

// Website Root Folder (optional, INCLUDE TRAILING SLASH!)
define("_websiteRootFolder_", "class/");

// Main Website Name
define("_name_", "DK-Recipe");

/* ---------------------------------------
 * ---------------------------------------
 * DO NOT EDIT ANYTHING BELOW THIS LINE!!!
 * ---------------------------------------
 * ---------------------------------------
*/

/*
 * Constants
*/

// Server Root
define("_serverRoot_", dirname(__FILE__) . "/");

// Website Root
define("_websiteRoot_", (!empty($_SERVER["HTTPS"]) ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . "/");

/*
 * Global Variables
*/
$pageTitle = null;
$bbItem = null;

/*
 * File Routing (Inclusion)
 * Used to include PHP files.
*/
function fileInclusion($file)
{
	$include = getServerRoot() . $file;

	include $include;
}

/*
 * Data Routing (Inclusion)
 * Used for images, CSS, JS, etc...
*/
function dataInclusion($data)
{
	$uri = getWebsiteRoot() . $data;

	return $uri;
}

/*
 * Accessors
*/
function getServerRoot()
{
	return _serverRoot_;
}

function getWebsiteRoot()
{
	return _websiteRoot_ . _websiteRootFolder_;
}

function getName()
{
	return _name_;
}

function getPageTitle()
{
	global $pageTitle;

	return $pageTitle;
}

function getBBItem()
{
	global $bbItem;

	return $bbItem;
}

/*
 * Mutators
*/
function setPageTitle($_pageTitle)
{
	global $pageTitle;

	$pageTitle = $_pageTitle;
}

function setBBItem($_bbItem)
{
	global $bbItem;

	$bbItem = $_bbItem;
}