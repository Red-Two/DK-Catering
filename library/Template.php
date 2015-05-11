<?php

class Template
{
	/*
	 * Global Variables
	*/
	protected $controllerData = array();

	/*
	 * Accessors
	*/
	public function getData($key)
	{
		return $this->controllerData[$key];
	}

	/*
	 * Mutators
	*/
	public function setData($key, $value)
	{
		$this->controllerData[$key] = $value;
	}

	/*
	 * Include File
	*/
	public function includeFile($file)
	{
		$helper = new Helper();

		$this->controllerData[] = $helper::fileInclusion($file);

		$this->output($file);
	}

	/*
	 *	Include Data
	*/
	public function includeData($data)
	{
		$helper = new Helper();

		return $helper::dataInclusion($data);
	}

	/*
	 * Render Template
	*/
	public function render($template)
	{
		if (!file_exists($template))
		{
			echo "Template " . $template . " doesn't exist.";
			exit();
		}

		$this->output($template);
	}

	/*
	 * Output Template
	*/
	private function output($file)
	{
		$helper = new Helper();
		extract(get_object_vars($helper), EXTR_REFS);

		extract($this->controllerData);

		ob_start();
		include_once($file);
		$output = ob_get_contents();
		ob_end_clean();

		echo $output;
	}
}