<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//return View::make('hello');
	echo "xx";
	$command="/sbin/ifconfig eth0 | grep 'inet addr:' | cut -d: -f2 | awk '{ print $1}'";
	$localIP = exec ($command);
	return $localIP."xx";

	//return "Hello Beanstalk";
});

Route::get('hello', function()
{
	return "Hello Beanstalk";
});


Route::get('fizzbuzz/{number}', 'FizzBuzzController@getResult');

Route::get('grade/{number}', 'GradeController@gradeCalculator');
