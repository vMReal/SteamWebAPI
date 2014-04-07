<?php
/**
 * User: MReal
 * Date: 3/30/14
 * Time: 6:18 AM
 */

namespace vMReal\steamWebApi\service;

use vMReal\steamWebApi\interfaces\MediatorInterface;

abstract class Service
{
	private $mediator;


	public function __construct(MediatorInterface $mediator, $serviceName, $type = NULL) {
		$this->mediator = $mediator;
		$this->getMediator()->setService($serviceName);

		if ($type) {
			$this->getMediator()->setTypeService($type);
		}
	}


	protected function getMediator() {
		return $this->mediator;
	}
} 