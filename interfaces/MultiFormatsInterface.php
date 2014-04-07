<?php
/**
 * User: MReal
 * Date: 3/30/14
 * Time: 6:30 AM
 */

namespace vMReal\steamWebApi\interfaces;


interface MultiFormatsInterface
{
	/**
	 * @return JSON object with information received at your request to the api.
	 */
	public function inJSON();


	/**
	 * @return XML document with information received at your request to the api.
	 */
	public function inXML();


	/**
	 * @return Valve Data Format document with information received at your request to the api.
	 */
	public function inVDF();


	/**
	 * @return arrays with information received at your request to the api.
	 */
	public function inArray();
} 