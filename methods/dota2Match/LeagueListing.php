<?php
/**
 * User: MReal
 * Date: 4/13/14
 * Time: 6:05 PM
 */

namespace vMReal\steamWebApi\methods\dota2Match;


use vMReal\steamWebApi\methods\Method;

class LeagueListing extends Method
{

	/**
	 * 		The ISO639-1 language code for the language all tokenized strings should be returned in.
	 * Not all strings have been translated to every language.
	 * If a language does not have a string, the English string will be returned instead.
	 * If this parameter is omitted the string token will be returned for the strings.
	 * @param $language string
	 * @return $this
	 */
	public function language($language) {
		$this->setParams(['language'=> $language]);
		return $this;
	}
} 