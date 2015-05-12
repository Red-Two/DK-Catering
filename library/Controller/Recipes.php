<?php

class Controller_Recipes extends Controller
{
	public function actionIndex()
	{
		$this->template->setData("title", "Recipes");
		$this->template->setdata("billboardItem", "indexBB");

		return $this->template->render("assets/templates/recipes.php");
	}

	public function actionYours()
	{
		$this->template->setData("title", "Customer Submitted Recipes");
		$this->template->setdata("billboardItem", "indexBB");

		return $this->template->render("assets/templates/recipes/yours.php");
	}
}