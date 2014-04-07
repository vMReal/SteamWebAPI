<?php
/**
 * User: MReal
 * Date: 3/30/14
 * Time: 7:49 PM
 */

namespace vMReal\steamWebApi\methods\dota2Match;


use vMReal\steamWebApi\methods\Method;

class MatchHistory extends Method
{

	/**
	 * account ID
	 * @param $id32bit int 32-bit
	 * @return $this
	 */
	public function byAccountId($id32bit) {
		$this->setParams(['account_id'=> $id32bit]);
		return $this;
	}


	/**
	 * A list of hero IDs can be found via the GetHeroes method
	 * @param $heroId int 32-bit
	 * @return $this
	 */
	public function byHeroId($heroId) {
		$this->setParams(['hero_id'=> $heroId]);
		return $this;
	}


	/**
	 * Search ranging from $matchId to old games.
	 * @param $matchId int
	 * @return $this
	 */
	public function offset($matchId) {
		$this->setParams(['start_at_match_id'=> $matchId]);
		return $this;
	}


	/**
	 * Amount of matches to include in results (default: 25).
	 * @param $limit
	 * @return $this
	 */
	public function limit($limit) {
		$this->setParams(['matches_requested'=> $limit]);
		return $this;
	}


	/**
	 * Maximum date range for returned matches (unix timestamp, rounded to the nearest day)
	 * @param $unixTimestamp int
	 * @return $this
	 */
	public function dateMax($unixTimestamp) {
		$this->setParams(['date_max'=> $unixTimestamp]);
		return $this;
	}


	/**
	 * Minimum date range for returned matches (unix timestamp, rounded to the nearest day)
	 * @param $unixTimestamp int
	 * @return $this
	 */
	public function dateMin($unixTimestamp) {
		$this->setParams(['date_min'=> $unixTimestamp]);
		return $this;
	}


	/**
	 * Minimum amount of players in a match for the match to be returned
	 * @param $players int
	 * @return $this
	 */
	public function minPlayers($players) {
		$this->setParams(['min_players'=> $players]);
		return $this;
	}


	/**
	 * Skill bracket for the matches (Ignored if an account ID is specified).
	 * @param $skill int
	 * @return $this
	 */
	public function skill($skill) {
		$this->setParams(['skill'=> $skill]);
		return $this;
	}


	/**
	 * @param $mode int
	 * @return $this
	 */
	public function gameMode($mode) {
		$this->setParams(['game_mode'=> $mode]);
		return $this;
	}


	/**
	 * Only return matches from this league. A list of league IDs can be found via the GetLeagueListing method.
	 * @param $id
	 * @return $this
	 */
	public function leagueId($id)
	{
		$this->setParams(['league_id'=> $id]);
		return $this;
	}


	/**
	 * Whether to limit results to tournament matches
	 * @param $onlyTournament boolean
	 * @return $this
	 */
	public function tournamentGamesOnly($onlyTournament) {
		$this->setParams(['league_id'=> $onlyTournament]);
		return $this;
	}

} 