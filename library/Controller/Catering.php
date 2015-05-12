<?php

class Controller_Catering extends Controller
{
	public function actionIndex()
	{
		$this->template->setData("title", "Catering");
		$this->template->setdata("billboardItem", "indexBB");

		return $this->template->render("assets/templates/catering.php");
	}

	public function actionEvents()
	{
		$this->template->setData("title", "Events");
		$this->template->setdata("billboardItem", "indexBB");

		return $this->template->render("assets/templates/catering/events.php");
	}

	public function actionTestimonials()
	{
		$this->template->setData("title", "Testimonials");
		$this->template->setdata("billboardItem", "indexBB");

		return $this->template->render("assets/templates/catering/testimonials.php");
	}

	public function actionPhotos()
	{
		$this->template->setData("title", "Photos");
		$this->template->setdata("billboardItem", "indexBB");

		return $this->template->render("assets/templates/catering/photos.php");
	}
}