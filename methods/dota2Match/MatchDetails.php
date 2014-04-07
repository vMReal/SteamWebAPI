<?php
/**
 * Created by PhpStorm.
 * User: MReal
 * Date: 4/2/14
 * Time: 4:42 AM
 */

namespace vMReal\steamWebApi\methods\dota2Match;


use vMReal\steamWebApi\interfaces\MultiFormatsInterface;
use vMReal\steamWebApi\methods\Method;

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