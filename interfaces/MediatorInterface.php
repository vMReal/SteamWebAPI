<?php
/**
 * User: MReal
 * Date: 3/30/14
 * Time: 4:30 PM
 */

namespace vMReal\SteamWebAPI\interfaces;


interface MediatorInterface {

	/**
	 *  -- Return object with information received at your request to the api --
	 * @param $params array
	 * @return json | xml | vdf | array
	 */
	public function get($params);


	/**
	 *  -- Set service name --
	 * @param $serviceName string;
	 */
	public function setService($serviceName);


	/**
	 *  -- Set type service --
	 * @param $type int;
	 */
	public function setTypeService($type);


	/**
	 *  -- Set service method name --
	 * @param $methodName string;
	 */
	public function setMethod($methodName);


	/**
	 *  -- Set version --
	 * @param $version string;
	 */
	public function setVersion($version);
}