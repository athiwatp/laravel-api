<?php

class UserController extends BaseController {

	public function getIndex()
	{
		return "UserController@getIndex";
	}

	public function showProfile($id,$name){
		return "Hello".$id.$name;
	}	

}