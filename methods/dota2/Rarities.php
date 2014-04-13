<?php
/**
 * User: MReal
 * Date: 4/13/14
 * Time: 7:37 PM
 */

namespace vMReal\steamWebApi\methods\dota2;

use vMReal\steamWebApi\methods\Method;

class Rarities extends Method
{
	/**
	 * The language to provide rarity names in.
	 * The ISO639-1 language code.
	 * @param $language string
	 * @return $this
	 */
	public function language($language) {
		$this->setParams(['language'=> $language]);
		return $this;
	}
} 