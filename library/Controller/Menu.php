<?php

class Controller_Menu extends Controller
{
	public function actionIndex()
	{
		$this->template->setData("title", "Menu");
		$this->template->setdata("billboardItem", "indexBB");

		return $this->template->render("assets/templates/menu.php");
	}

	public function actionBreakfast()
	{
		$this->template->setData("title", "Breakfast");
		$this->template->setdata("billboardItem", "indexBB");

		return $this->template->render("assets/templates/menu/breakfast.php");
	}

	public function actionLunch()
	{
		$this->template->setData("title", "Lunch");
		$this->template->setdata("billboardItem", "indexBB");

		return $this->template->render("assets/templates/menu/lunch.php");
	}

	public function actionDinner()
	{
		$this->template->setData("title", "Dinner");
		$this->template->setdata("billboardItem", "indexBB");

		return $this->template->render("assets/templates/menu/dinner.php");
	}

	public function actionDesert()
	{
		$this->template->setData("title", "Desert");
		$this->template->setdata("billboardItem", "indexBB");

		return $this->template->render("assets/templates/menu/desert.php");
	}

	public function actionPlatters()
	{
		$this->template->setData("title", "Platters");
		$this->template->setdata("billboardItem", "indexBB");

		return $this->template->render("assets/templates/menu/platters.php");
	}
}