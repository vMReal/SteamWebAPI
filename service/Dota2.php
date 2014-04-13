<?php
/**
 * User: MReal
 * Date: 3/30/14
 * Time: 6:16 AM
 */

namespace vMReal\steamWebApi\service;

use vMReal\steamWebApi\methods\dota2\Heroes;
use vMReal\steamWebApi\methods\dota2\Rarities;

class Dota2 extends Service
{

	/**
	 * A list of heroes within Dota 2.
	 * @return Heroes
	 */
	public function getHeroes() {
		return new Heroes($this->getMediator(), 'GetHeroes', 'V001');
	}


	/**
	 * Dota 2 item rarity list.
	 * @return Rarities
	 */
	public function getRarities() {
		return new Rarities($this->getMediator(), 'GetRarities', 'V001');
	}
} 