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
			->inJson();

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


	public function testTeamInfo()
	{
		$response = $this->getApi()->getDota2Match()->getTeamInfo()
			->limit(1)
			->inJson();

		$this->assertEquals(200, $this->getApi()->getLogger()->getLastHttpCode());
		$this->showContentResponse('getTeamInfo', $response);
	}


	public function testScheduledLeagueGames()
	{
		$response = $this->getApi()->getDota2Match()->getScheduledLeagueGames()
			->dateMin(1396310400)
			->inJson();

		$this->assertEquals(200, $this->getApi()->getLogger()->getLastHttpCode());
		$this->showContentResponse('getScheduledLeagueGames', $response);
	}


	public function testMatchHistoryBySequenceNum()
	{
		$response = $this->getApi()->getDota2Match()->getMatchHistoryBySequenceNum()
			->limit(2)
			->inJson();

		$this->assertEquals(200, $this->getApi()->getLogger()->getLastHttpCode());
		$this->showContentResponse('getMatchHistoryBySequenceNum', $response);
	}


	public function testLiveLeagueGames()
	{
		$response = $this->getApi()->getDota2Match()->getLiveLeagueGames()
			->inJson();

		$this->assertEquals(200, $this->getApi()->getLogger()->getLastHttpCode());
		$this->showContentResponse('getLiveLeagueGames', $response);
	}


	public function testLeagueListing()
	{
		$response = $this->getApi()->getDota2Match()->getLeagueListing()
			->language('ru')
			->inJson();

		$this->assertEquals(200, $this->getApi()->getLogger()->getLastHttpCode());
		$this->showContentResponse('getLeagueListing', $response);
	}
} 