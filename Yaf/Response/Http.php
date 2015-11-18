<?php
namespace Yaf\Response ;

/**
 *
 */
class Http extends \Yaf\Response_Abstract {

	/**
	 * @var int
	 */
	protected $_response_code = 0;

	/**
	 *
	 */
	private function __clone(){ }

	/**
	 * @return string
	 */
	private function __toString(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-response-abstract.setheader.php
	 *
	 * @param string $name
	 * @param string $value
	 * @param bool $replace
	 * @param int $response_code
	 *
	 * @return bool
	 */
	public function setHeader($name,$value,$replace = false,$response_code = 0){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-response-abstract.setallheaders.php
	 *
	 * @param array $headers
	 *
	 * @return bool
	 */
	protected function setAllHeaders(array $headers){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-response-abstract.getheader.php
	 *
	 * @param string $name
	 *
	 * @return mixed
	 */
	public function getHeader($name = null){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-response-abstract.clearheaders.php
	 *
	 * @param string $name
	 *
	 * @return \Yaf\Response_Abstract|false
	 */
	public function clearHeaders($name = null){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-response-abstract.setredirect.php
	 *
	 * @param string $url
	 *
	 * @return bool
	 */
	public function setRedirect($url){ }

	/**
	 * send response
	 *
	 * @link http://www.php.net/manual/en/yaf-response-abstract.response.php
	 *
	 * @return bool
	 */
	public function response(){ }
}