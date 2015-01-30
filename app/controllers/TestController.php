<?php

class TestController extends BaseController
{

	public function showMyPage()
	{
		return View::make('mypage')
			->with('name', Input::get('name', 'Default User'));
	}

}