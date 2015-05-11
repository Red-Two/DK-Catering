<?php

class Controller_Error extends Controller
{
	public function actionIndex()
	{
		return $this->template->render("assets/templates/error.php");
	}
}