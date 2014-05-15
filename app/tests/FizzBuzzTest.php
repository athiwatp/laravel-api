<?php

class FizzBuzzTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */

	public function testOne()
	{
		$crawler = $this->client->request('GET', '/fizzbuzz/1');

		$this->assertEquals("2", $this->client->getResponse()->getContent());
	}

	public function testTwo()
	{
		$crawler = $this->client->request('GET', '/fizzbuzz/2');

		$this->assertEquals("2", $this->client->getResponse()->getContent());
	}

	public function testThree()
	{
		$crawler = $this->client->request('GET', '/fizzbuzz/3');

		$this->assertEquals("Fizz", $this->client->getResponse()->getContent());
	}

	public function testFive()
	{
		$crawler = $this->client->request('GET', '/fizzbuzz/5');

		$this->assertEquals("Buzz", $this->client->getResponse()->getContent());
	}

	public function testSix()
	{
		$crawler = $this->client->request('GET', '/fizzbuzz/6');

		$this->assertEquals("Fizz", $this->client->getResponse()->getContent());
	}

	public function testTen()
	{
		$crawler = $this->client->request('GET', '/fizzbuzz/10');

		$this->assertEquals("Buzz", $this->client->getResponse()->getContent());
	}

	public function testFifteen()
	{
		$crawler = $this->client->request('GET', '/fizzbuzz/15');

		$this->assertEquals("FizzBuzz", $this->client->getResponse()->getContent());
	}

}
