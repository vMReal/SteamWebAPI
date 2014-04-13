<?php
/**
 * User: MReal
 * Date: 4/13/14
 * Time: 6:22 PM
 */

namespace vMReal\steamWebApi\tests\systems;


class Dota2Test extends SystemTest
{
	public function testHeroes()
	{
		$response = $this->getApi()->getDota2()->getHeroes()
			->itemizedOnly(true)
			->inJson();

		$this->assertEquals(200, $this->getApi()->getLogger()->getLastHttpCode());
		$this->showContentResponse('getHeroes', $response);
	}


	public function testRarities()
	{
		$response = $this->getApi()->getDota2()->getRarities()
			->inJson();

		$this->assertEquals(200, $this->getApi()->getLogger()->getLastHttpCode());
		$this->showContentResponse('getHeroes', $response);
	}
} 