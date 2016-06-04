<?php

class HomePageController extends BaseController {

	public function showHomepage()
	{
		return View::make('home');
	}

}
