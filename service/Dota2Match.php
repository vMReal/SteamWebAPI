<?php
/**
 * User: MReal
 * Date: 3/30/14
 * Time: 6:16 AM
 */

namespace vMReal\steamWebApi\service;

use vMReal\steamWebApi\methods\dota2Match\MatchDetails;
use vMReal\steamWebApi\methods\dota2Match\MatchHistory;
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
} 