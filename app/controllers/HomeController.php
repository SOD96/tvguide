<?php

class HomeController extends BaseController
{

	/**
	 * Shows the welcome page.
	 * 
	 * @return View
	 */
	public function showWelcome()
	{
		return View::make('hello');
	}

}
