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
	$value = Session::get('key');
	echo "Session : ".$value.".";

	$command="/sbin/ifconfig eth0 | grep 'inet addr:' | cut -d: -f2 | awk '{ print $1}'";
	$localIP = exec ($command);

	return "<br>[".$localIP."]";
});


Route::get('session/{data}', function($data)
{
	Session::put('key', $data);

	echo $data;

	$command="/sbin/ifconfig eth0 | grep 'inet addr:' | cut -d: -f2 | awk '{ print $1}'";
	$localIP = exec ($command);

	return "<br>Session Set to "."[".$localIP."]"."[".$_SERVER['SERVER_ADDR']."]";
});


Route::get('hello', function()
{
	return "Hello Beanstalk";
});


Route::get('fizzbuzz/{number}', 'FizzBuzzController@getResult');

Route::get('grade/{number}', 'GradeController@gradeCalculator');
