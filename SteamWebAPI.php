<?php
/**
 * User: MReal
 * Date: 3/30/14
 * Time: 4:57 AM
 */

namespace vMReal\steamWebApi;


use vMReal\steamWebApi\service\Dota2;
use vMReal\steamWebApi\service\Dota2Match;

class SteamWebApi
{

	private $config = [
		'devKey'=> '',
		'language'=> 'en_us',
		'host'=> 'http://api.steampowered.com',
	];
	private $logger;



	public function __construct($config){
		$this->setConfig($config);
		if (empty($this->config['devKey']))
			throw new \Exception('You must specify devKey in config!');

		$this->logger = new Logger();
	}


	public function setConfig($config) {
		$this->config = array_merge($this->config, $config);
	}


	protected function getMediator() {
		return new SteamMediator($this, $this->config);
	}


	public function getDota2($type = 570) {
		return new Dota2($this->getMediator(), 'IDOTA2', $type);
	}


	public function getDota2Match($type = 570) {
		return new Dota2Match($this->getMediator(), 'IDOTA2Match', $type);
	}


	public function getLogger() {
		return $this->logger;
	}
} 