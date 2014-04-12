<?php
/**
 * User: MReal
 * Date: 4/9/14
 * Time: 5:15 AM
 */

namespace vMReal\steamWebApi;


use vMReal\steamWebApi\interfaces\CollectorResponseInterface;

class Logger implements CollectorResponseInterface
{

	public $responseResults = [];

	public function setInformation($httpCode, $totalTime) {
		$this->responseResults[] = (object) array(
			'httpCode'=> $httpCode,
			'totalTime'=> $totalTime,
		);
	}


	/**
	 * Returns last  http code at request
	 * @return int
	 */
	public function getLastHttpCode() {
		$count = count($this->responseResults);
		return $count? $this->responseResults[$count-1]->httpCode : 0;
	}


	/**
	 * Returns last total time at request
	 * @return float
	 */
	public function getLastTotalTime() {
		$count = count($this->responseResults);
		return $count? $this->responseResults[$count-1]->totalTime : 0;
	}
} 