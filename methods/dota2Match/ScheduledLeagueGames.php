<?php
/**
 * User: MReal
 * Date: 4/13/14
 * Time: 4:53 PM
 */

namespace vMReal\steamWebApi\methods\dota2Match;


use vMReal\steamWebApi\methods\Method;

/**
 * Class ScheduledLeagueGames
 * A list of scheduled league games coming up.
 */
class ScheduledLeagueGames extends Method
{
	/**
	 * Maximum date date unix timestamp.
	 * @param $unixTimestamp int
	 * @return $this
	 */
	public function dateMax($unixTimestamp) {
		$this->setParams(['date_max'=> $unixTimestamp]);
		return $this;
	}


	/**
	 * Minimum date unix timestamp.
	 * @param $unixTimestamp int
	 * @return $this
	 */
	public function dateMin($unixTimestamp) {
		$this->setParams(['date_min'=> $unixTimestamp]);
		return $this;
	}
} 