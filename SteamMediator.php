<?php
/**
 * User: MReal
 * Date: 3/30/14
 * Time: 6:29 AM
 */

namespace vMReal\steamWebApi;

use vMReal\steamWebApi\interfaces\MediatorInterface;
use vMReal\steamWebApi\interfaces\CollectorResponseInterface;

class SteamMediator implements MediatorInterface
{
	private $collector;
	private $host;
	private $service;
	private $typeService;
	private $method;
	private $version;

	private $params = [];


	public function __construct(CollectorResponseInterface $collector, $config) {
		$this->collector = $collector;

		if (empty($config['devKey']))
			throw new \Exception('You must specify devKey in config!');

		if (empty($config['host']))
			throw new \Exception('You must specify host in config!');

		if (empty($config['language']))
			throw new \Exception('You must specify language in config!');

		$this->host = $config['host'];
		$this->setParams([
			'language'=> $config['language'],
			'key'=> $config['devKey'],
		]);
	}


	public function get($params) {
		$this->setParams($params);
		$data = $this->getData($this->getlink(), false);
		$this->collector->setInformation($data->httpCode, $data->totalTime, $data->error);
		return ($data->httpCode == 200 && !$data->error)? $data->body : NULL;
	}


	private function getLink() {
		if (!$this->service)
			throw new \Exception('You must specify service in config of Service!');

		if (!$this->method)
			throw new \Exception('You must specify method in config of Method!');

		if (!$this->version)
			throw new \Exception('You must specify version in config Method!');

		$link = $this->host;
		$link .= '/' .$this->service;
		$link .= (!$this->typeService)? '' : '_' .$this->typeService;
		$link .= '/' .$this->method;
		$link .= '/' .$this->version;

		$params = http_build_query($this->params) ;
		return $link .'/?' .$params;
	}


	private function getData($link, $ssl) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $link);
		curl_setopt($ch, CURLOPT_ENCODING , "gzip");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		if($ssl) {
			// Ignore SSL warnings and questions
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		}

		$data = new \stdClass();
		$data->body = curl_exec($ch);
		$data->httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$data->totalTime = curl_getinfo($ch, CURLINFO_TOTAL_TIME);
		curl_close($ch);

		$data->error = $this->getError($data->body);
		return $data;
	}


	private function getError($data) {
		switch ($this->params['format']) {
			case 'json':
				$object = json_decode($data);
				return isset($object->result->error)? $object->result->error : '';
				break;

			case 'xml':
				$xml = new \SimpleXMLElement($data);
				return isset($xml->error)? $xml->error : '';
				break;

			case 'vdf':
				return '';
				break;
		}
	}


	public function setService($serviceName){
		$this->service = $serviceName;
	}


	public function setTypeService($type){
		$this->typeService = $type;
	}


	public function setMethod($methodName){
		$this->method = $methodName;
	}


	public function setVersion($version){
		$this->version = $version;
	}


	private function setParams($params) {
		$this->params = array_merge($this->params, $params);
	}
} 