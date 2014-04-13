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
	private $showFullContent;

	public function __construct() {
		$config = require(__DIR__ . '/../../config-test.php');
		$this->api = new SteamWebApi($config);
		$this->showFullContent = empty($config['showFullContent']) ? false : true;
	}


	public function getApi() {
		return $this->api;
	}


	public function showContentResponse($title, $content) {
		$totalTime = $this->getApi()->getLogger()->getLastTotalTime();
		$httpCode =  $this->getApi()->getLogger()->getLastHttpCode();
		$error = $this->getApi()->getLogger()->getLastError();

		echo("====================================== $title =================================== \r\n \r\n");

		if ($this->showFullContent)
			echo $content;
		else
			var_dump($content);

		echo("\r\n-------- Http code: $httpCode \r\n");
		echo("-------- Error: $error \r\n");
		echo("-------- Total time: $totalTime s \r\n \r\n \r\n");
	}
} 