<?php
/**
 * User: MReal
 * Date: 3/30/14
 * Time: 4:30 PM
 */

namespace vMReal\steamWebApi\interfaces;


interface CollectorResponseInterface {

	/**
	 * Set info from obtained response an api
	 * @param $httpCode int
	 * @param $totalTime float
	 * @param $error str
	 */
	public function setInformation($httpCode, $totalTime, $error);

}