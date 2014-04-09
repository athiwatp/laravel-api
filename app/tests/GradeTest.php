<?php

class GradeTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */

	public function test86()
	{
		$crawler = $this->client->request('GET', '/grade/86');

		$this->assertEquals("A+", $this->client->getResponse()->getContent());
	}

	public function test80()
	{
		$crawler = $this->client->request('GET', '/grade/80');

		$this->assertEquals("A", $this->client->getResponse()->getContent());
	}

	public function test75()
	{
		$crawler = $this->client->request('GET', '/grade/75');

		$this->assertEquals("B+", $this->client->getResponse()->getContent());
	}

	public function test70()
	{
		$crawler = $this->client->request('GET', '/grade/70');

		$this->assertEquals("B", $this->client->getResponse()->getContent());
	}

	public function test65()
	{
		$crawler = $this->client->request('GET', '/grade/65');

		$this->assertEquals("C+", $this->client->getResponse()->getContent());
	}

	public function test35()
	{
		$crawler = $this->client->request('GET', '/grade/35');

		$this->assertEquals("F", $this->client->getResponse()->getContent());
	}


}