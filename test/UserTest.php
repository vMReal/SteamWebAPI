<?php
/**
 * Created by PhpStorm.
 * User: MReal
 * Date: 4/3/14
 * Time: 6:23 AM
 */

namespace vMReal\steamWebApi\test;

use vMReal\steamWebApi\SteamWebAPI;
use vMReal\steamWebApi\SteamMediator;

class UserTest extends \PHPUnit_Framework_TestCase {

	public function testOlo() {

		$config = [
			'devKey'=> 'dfdf',
			'language'=> 'en_us',
			'host'=> 'http://api.steampowered.com',
		];

		$apiNew = new SteamWebAPI($config);

		/*$mediator = $this->getMock('SteamMediator', array($apiNew, $config));
		$mediator->expects($this->once())
			->method('get')
			->will($this->returnValueMap(NULL));


		$api = $this->getMock('SteamWebAPI', array($config));
		$api->expects($this->once())
			->method('getMediator')
			->will($this->returnValueMap($mediator));

		$api->getDota2();*/

		//$this->assertTrue(true);
	}

}