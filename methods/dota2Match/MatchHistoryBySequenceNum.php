<?php
/**
 * User: MReal
 * Date: 4/13/14
 * Time: 5:18 PM
 */

namespace vMReal\steamWebApi\methods\dota2Match;

use vMReal\steamWebApi\methods\Method;


class MatchHistoryBySequenceNum extends Method
{
	/**
	 * The match sequence number to start returning results from.
	 * @param $num int 64 bit
	 * @return $this
	 */
	public function startAtMatchSeqNum($num) {
		$this->setParams(['start_at_match_seq_num'=> $num]);
		return $this;
	}



	/**
	 * The amount of matches to return.
	 * @param $limit int 32 bit
	 * @return $this
	 */
	public function limit($limit) {
		$this->setParams(['matches_requested'=> $limit]);
		return $this;
	}
} 