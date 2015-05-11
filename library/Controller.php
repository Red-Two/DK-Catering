<?php

class Controller 
{
	/*
	 * Global Variables
	*/
	protected $controller = null;
	protected $template = null;

	/*
	 * Constructor
	*/
	public function __construct()
	{
		$this->controller = ucwords(__CLASS__);

		$this->template = new Template();
	}
}