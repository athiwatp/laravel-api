<?php

class FizzBuzzController extends Controller {

	public function getResult($number)
	{
		if($number % 3 == 0 && $number % 5 == 0)
			return 'FizzBuzz';
		if($number % 3 == 0)
			return 'Fizz';
		else if($number % 5 == 0)
			return 'Buzz';
		return $number;
	}

}