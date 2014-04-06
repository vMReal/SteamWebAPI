<?php
/**
 * User: MReal
 * Date: 3/30/14
 * Time: 4:30 PM
 */

namespace vMReal\SteamWebAPI\interfaces;


interface TrackingInterface {

	/**
	 * Set last HTTP response code
	 * @param $httpCode int
	 */
	public function setHttpCode($httpCode);


	/**
	 * Set last total time response
	 * @param $time float
	 */
	public function setTotalTime($time);


	/**
	 * Set last body to response
	 * @param $bodyResponse mixed
	 */
	public function setResponse($bodyResponse);


	/**
	 * Get last HTTP response code
	 * @return int
	 */
	public function getLastHttpCode();


	/**
	 * Get last body to response
	 * @return mixed
	 */
	public function getLastResponse();


	/**
	 * Get last total time response
	 * @return float
	 */
	public function getLastTotalTime();

}