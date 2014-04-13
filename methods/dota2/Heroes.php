<?php
/**
 * User: MReal
 * Date: 4/13/14
 * Time: 6:54 PM
 */

namespace vMReal\steamWebApi\methods\dota2;

use vMReal\steamWebApi\methods\Method;

class Heroes extends Method
{
	/**
	 * The language to provide hero names in.
	 * The ISO639-1 language code.
	 * @param $language string
	 * @return $this
	 */
	public function language($language) {
		$this->setParams(['language'=> $language]);
		return $this;
	}


	/**
	 * Return a list of itemized heroes only.
	 * @param $boolean boolean
	 * @return $this
	 */
	public function itemizedOnly($boolean) {
		$this->setParams(['itemizedonly'=> $boolean]);
		return $this;
	}
} 