<?php
/**
 * User: MReal
 * Date: 3/30/14
 * Time: 6:16 AM
 */

namespace vMReal\steamWebApi\service;

use vMReal\steamWebApi\methods\dota2Match\LeagueListing;
use vMReal\steamWebApi\methods\dota2Match\LiveLeagueGames;
use vMReal\steamWebApi\methods\dota2Match\MatchDetails;
use vMReal\steamWebApi\methods\dota2Match\MatchHistory;
use vMReal\steamWebApi\methods\dota2Match\MatchHistoryBySequenceNum;
use vMReal\steamWebApi\methods\dota2Match\ScheduledLeagueGames;
use vMReal\steamWebApi\methods\dota2Match\TeamInfo;
use vMReal\steamWebApi\methods\dota2Match\TournamentPlayerStats;

class Dota2Match extends Service
{

	/**
	 * A list of matches, filterable by various parameters.
	 * @return MatchHistory
	 */
	public function getMatchHistory() {
		return new MatchHistory($this->getMediator(), 'GetMatchHistory', 'V001');
	}


	/**
	 * Information about a particular match.
	 * @return MatchDetails
	 */
	public function getMatchDetails() {
		return new MatchDetails($this->getMediator(), 'GetMatchDetails', 'V001');
	}


	/**
	 * Stats about a particular player within a tournament.
	 * @return TournamentPlayerStats
	 */
	public function getTournamentPlayerStats() {
		return new TournamentPlayerStats($this->getMediator(), 'GetTournamentPlayerStats', 'V001');
	}


	/**
	 * A list of all the teams set up in-game.
	 * @return TeamInfo
	 */
	public function getTeamInfo() {
		return new TeamInfo($this->getMediator(), 'GetTeamInfoByTeamID', 'V001');
	}


	/**
	 * A list of scheduled league games coming up.
	 * @return ScheduledLeagueGames
	 */
	public function getScheduledLeagueGames() {
		return new ScheduledLeagueGames($this->getMediator(), 'GetScheduledLeagueGames', 'V001');
	}


	/**
	 * A list of matches ordered by their sequence num.
	 * @return MatchHistoryBySequenceNum
	 */
	public function getMatchHistoryBySequenceNum() {
		return new MatchHistoryBySequenceNum($this->getMediator(), 'GetMatchHistoryBySequenceNum', 'V001');
	}


	/**
	 * A list of in-progress league matches, as well as details of that match as it unfolds.
	 * @return LiveLeagueGames
	 */
	public function getLiveLeagueGames() {
		return new LiveLeagueGames($this->getMediator(), 'GetLiveLeagueGames', 'V001');
	}


	/**
	 * Information about DotaTV-supported leagues.
	 * @return LeagueListing
	 */
	public function getLeagueListing() {
		return new LeagueListing($this->getMediator(), 'GetLeagueListing', 'V001');
	}

} 