<?php
/**
 * Created by PhpStorm.
 * User: MReal
 * Date: 4/2/14
 * Time: 5:04 AM
 */

namespace vMReal\steamWebApi\methods\dota2Match;


use vMReal\SteamWebAPI\methods\Method;

class TournamentPlayerStats extends Method
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
	 * A list of league IDs can be found via the GetLeagueListing method. Will return status 8 - only supports tournament 65006 (The International) unless you provide 65006.
	 * @param $leagueId int
	 * @return $this
	 */
	public function byLeagueId($leagueId) {
		$this->setParams(['league_id'=> $leagueId]);
		return $this;
	}


	/**
	 * Only return stats between this time frame.
	 * @param $time parameter format not yet known
	 * @return $this
	 */
	public function byTimeFrame($time) {
		$this->setParams(['time_frame'=> $time]);
		return $this;
	}
} 