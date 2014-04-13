<?php
/**
 * User: MReal
 * Date: 4/13/14
 * Time: 4:39 PM
 */

namespace vMReal\steamWebApi\methods\dota2Match;


use vMReal\steamWebApi\methods\Method;

class TeamInfo extends  Method
{

	/**
	 * The amount of teams to return.
	 * @param $teamId int 64bit
	 * @return $this
	 */
	public function startAtTeamId($teamId) {
		$this->setParams(['start_at_team_id'=> $teamId]);
		return $this;
	}

	/**
	 * The amount of teams to return.
	 * @param $limit int 32bit
	 * @return $this
	 */
	public function limit($limit) {
		$this->setParams(['teams_requested'=> $limit]);
		return $this;
	}
} 