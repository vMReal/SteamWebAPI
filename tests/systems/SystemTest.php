<?php
/**
 * User: MReal
 * Date: 4/12/14
 * Time: 5:16 AM
 */

namespace vMReal\steamWebApi\tests\systems;

use vMReal\steamWebApi\SteamWebApi;


abstract class SystemTest extends \PHPUnit_Framework_TestCase
{
	private  $api;

	public function __construct() {
		$config = require(__DIR__ . '/../../config-test.php');
		$this->api = new SteamWebApi($config);
	}


	public function getApi() {
		return $this->api;
	}


	public function showContentResponse($title, $content) {
		$totalTime = $this->getApi()->getLogger()->getLastTotalTime();

		echo("====================================== $title =================================== \r\n \r\n");
		var_dump($content);
		echo("\r\n -------- total time: $totalTime s \r\n \r\n \r\n");
	}
} 