<?php
namespace Yaf\Request ;

/**
 * @link http://www.php.net/manual/en/class.yaf-request-http.php
 */
class Http extends \Yaf\Request_Abstract {

	/**
	 * Retrieve $_GET variable
	 *
	 * @link http://www.php.net/manual/en/yaf-request-http.getquery.php
	 *
	 * @param string $name the variable name, if not provided returns all
	 * @param mixed $default if this parameter is provide, this will be returned if the variable can not be found
	 *
	 * @return mixed
	 */
	public function getQuery($name = null, $default = null){ }

	/**
	 * Retrieve $_REQUEST variable
	 *
	 * @link http://www.php.net/manual/en/yaf-request-http.getrequest.php
	 *
	 * @param string $name the variable name, if not provided returns all
	 * @param mixed $default if this parameter is provide, this will be returned if the variable can not be found
	 *
	 * @return mixed
	 */
	public function getRequest($name = null, $default = null){ }

	/**
	 * Retrieve $_POST variable
	 *
	 * @link http://www.php.net/manual/en/yaf-request-http.getpost.php
	 *
	 * @param string $name the variable name, if not provided returns all
	 * @param mixed $default if this parameter is provide, this will be returned if the variable can not be found
	 *
	 * @return mixed
	 */
	public function getPost($name = null, $default = null){ }

	/**
	 * Retrieve $_COOKIE variable
	 *
	 * @link http://www.php.net/manual/en/yaf-request-http.getcookie.php
	 *
	 * @param string $name the variable name, if not provided returns all
	 * @param mixed $default if this parameter is provide, this will be returned if the variable can not be found
	 *
	 * @return mixed
	 */
	public function getCookie($name = null, $default = null){ }

	/**
	 * Retrieve $_FILES variable
	 *
	 * @link http://www.php.net/manual/en/yaf-request-http.getfiles.php
	 *
	 * @param string $name the variable name, if not provided returns all
	 * @param mixed $default if this parameter is provide, this will be returned if the variable can not be found
	 *
	 * @return mixed
	 */
	public function getFiles($name = null, $default = null){ }

	/**
	 * Retrieve variable from client, this method will search the name in $_REQUEST params, if the name is not found, then will search in $_POST, $_GET, $_COOKIE, $_SERVER
	 *
	 * @link http://www.php.net/manual/en/yaf-request-http.get.php
	 *
	 * @param string $name the variable name
	 * @param string $default if this parameter is provide, this will be returned if the variable can not be found
	 *
	 * @return mixed
	 */
	public function get($name, $default = null){ }

	/**
	 * Check the request whether it is a Ajax Request
	 *
	 * <br/>
	 * <b>Note:</b>
	 * <p>
	 * This method depends on the request header: HTTP_X_REQUESTED_WITH, some Javascript library doesn't set this header while doing Ajax request
	 * </p>
	 * @link http://www.php.net/manual/en/yaf-request-http.isxmlhttprequest.php
	 *
	 * @return bool
	 */
	public function isXmlHttpRequest(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-http.construct.php
	 *
	 * @param string $request_uri
	 * @param string $base_uri
	 *
	 */
	public function __construct($request_uri, $base_uri){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-http.clone.php
	 */
	private function __clone(){ }
}