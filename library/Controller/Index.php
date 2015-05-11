<?php

class Controller_Index extends Controller
{
	public function actionIndex()
	{
		$this->template->setData("title", "Home");
		$this->template->setdata("billboardItem", "indexBB");

		return $this->template->render("assets/templates/index.php");
	}
}