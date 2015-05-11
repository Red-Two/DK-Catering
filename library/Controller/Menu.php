<?php

class Controller_Menu extends Controller
{
	public function actionIndex()
	{
		$this->template->setData("title", "Menu");

		return $this->template->render("assets/templates/menu.php");
	}
}