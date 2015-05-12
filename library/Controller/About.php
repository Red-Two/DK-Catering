<?php

class Controller_About extends Controller
{
	public function actionIndex()
	{
		$this->template->setData("title", "About");
		$this->template->setdata("billboardItem", "indexBB");

		return $this->template->render("assets/templates/about/about.php");
	}

	public function actionOurStory()
	{
		$this->template->setData("title", "Our Story");
		$this->template->setdata("billboardItem", "indexBB");

		return $this->template->render("assets/templates/about/ourstory.php");
	}
}