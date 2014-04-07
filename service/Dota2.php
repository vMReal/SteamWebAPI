<?php
/**
 * User: MReal
 * Date: 3/30/14
 * Time: 6:16 AM
 */

namespace vMReal\steamWebApi\service;

class Dota2 extends Service
{

	private $typeService = 570;

	protected function getServiceName() {
		return 'IDOTA2';
	}


	public function getTypeService() {
		return $this->typeService;
	}


	public function setTypeService($typeId) {
		$this->typeService = $typeId;
	}


	public function GetMatchHistory() {
	}
} 