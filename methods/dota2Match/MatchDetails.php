<?php
/**
 * Created by PhpStorm.
 * User: MReal
 * Date: 4/2/14
 * Time: 4:42 AM
 */

namespace vMReal\SteamWebAPI\methods\dota2Match;


use vMReal\SteamWebAPI\interfaces\MultiFormatsInterface;
use vMReal\SteamWebAPI\methods\Method;

class MatchDetails extends Method implements MultiFormatsInterface
{

	/**
	 * Find by match id
	 * @param $matchId int
	 * @return $this
	 */
	public function byMatchId($matchId) {
		$this->setParams(['match_id'=> $matchId]);
		return $this;
	}
} 