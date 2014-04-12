<?php
/**
 * User: MReal
 * Date: 4/12/14
 * Time: 6:00 AM
 */

namespace vMReal\steamWebApi\tests\systems;


class Dota2MatchTest extends SystemTest
{
	public function testMatchDetails()
	{
		$response = $this->getApi()->getDota2Match()->getMatchDetails()
				->byMatchId(496934798)
				->inJSON();

		$this->assertEquals(200, $this->getApi()->getLogger()->getLastHttpCode());
		$this->showContentResponse('getMatchDetails', $response);
	}


	public function testMatchHistory()
	{
		$response = $this->getApi()->getDota2Match()->getMatchHistory()
				->byAccountId(67679224)
				->inJson();

		$this->assertEquals(200, $this->getApi()->getLogger()->getLastHttpCode());
		$this->showContentResponse('getMatchHistory', $response);
	}


	public function testTournamentPlayerStats()
	{
		$response = $this->getApi()->getDota2Match()->getTournamentPlayerStats()
			->byAccountId(67679224)
			->inJson();

		$this->assertEquals(200, $this->getApi()->getLogger()->getLastHttpCode());
		$this->showContentResponse('getTournamentPlayerStats', $response);
	}
} 