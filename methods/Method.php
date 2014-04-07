<?php
/**
 * User: MReal
 * Date: 3/30/14
 * Time: 7:09 PM
 */

namespace vMReal\steamWebApi\methods;


use vMReal\steamWebApi\interfaces\MediatorInterface;

abstract class Method
{
	const IN_JSON = 'json';
	const IN_XML = 'xml';
	const IN_VDF = 'vdf';

	private $mediator;
	private $params = [];


	public function __construct(MediatorInterface $mediator, $methodName, $version) {
		$this->mediator = $mediator;
		$this->getMediator()->setMethod($methodName);
		$this->getMediator()->setVersion($version);
	}


	/**
	 * @return MediatorInterface
	 */
	private function getMediator() {
		return $this->mediator;
	}


	/**
	 * @param $param array
	 */
	protected function setParams($param) {
		$this->params = array_merge($this->params, $param);
	}


	/**
	 * Receiving data from an intermediary, according to the specified parameters
	 * @param $format string
	 * @return null|mixed
	 */
	protected function getData($format) {
		$this->setParams(['format'=> $format]);
		return $this->getMediator()->get($this->params);
	}

	public function inJSON() {
		return $this->getData(self::IN_JSON);
	}


	public function inXML() {
		return $this->getData(self::IN_XML);
	}


	public function inVDF() {
		return $this->getData(self::IN_VDF);
	}


	public function inArray() {
		return json_decode($this->inJSON());
	}
} 