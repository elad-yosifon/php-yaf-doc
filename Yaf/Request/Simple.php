<?php
namespace Yaf\Request ;

/**
 * <b>\Yaf\Request\Simple</b> is particularly used for test purpose. ie. simulate a spacial request under CLI mode.
 * @link http://www.php.net/manual/en/class.yaf-request-simple.php
 */
class Simple extends \Yaf\Request_Abstract {

	/**
	 * Retrieve $_GET variable
	 *
	 * @link http://www.php.net/manual/en/yaf-request-simple.getquery.php
	 *
	 * @param string $name the variable name, if not provided returns all
	 * @param string $default if this parameter is provide, this will be returned if the variable can not be found
	 *
	 * @return mixed
	 */
	public function getQuery($name = null, $default = null){ }

	/**
	 * Retrieve $_REQUEST variable
	 *
	 * @link http://www.php.net/manual/en/yaf-request-simple.getrequest.php
	 *
	 * @param string $name the variable name, if not provided returns all
	 * @param string $default if this parameter is provide, this will be returned if the variable can not be found
	 *
	 * @return mixed
	 */
	public function getRequest($name = null, $default = null){ }

	/**
	 * Retrieve $_POST variable
	 *
	 * @link http://www.php.net/manual/en/yaf-request-simple.getpost.php
	 *
	 * @param string $name the variable name, if not provided returns all
	 * @param string $default if this parameter is provide, this will be returned if the variable can not be found
	 *
	 * @return mixed
	 */
	public function getPost($name = null, $default = null){ }

	/**
	 * Retrieve $_Cookie variable
	 *
	 * @link http://www.php.net/manual/en/yaf-request-simple.getcookie.php
	 *
	 * @param string $name the variable name, if not provided returns all
	 * @param string $default if this parameter is provide, this will be returned if the variable can not be found
	 *
	 * @return mixed
	 */
	public function getCookie($name = null, $default = null){ }

	/**
	 * @param mixed $name
	 * @param null $default
	 *
	 * @return array
	 */
	public function getFiles($name = null, $default = null){ }

	/**
	 * Retrieve variable from client, this method will search the name in $_REQUEST params, if the name is not found, then will search in $_POST, $_GET, $_COOKIE, $_SERVER
	 *
	 * @link http://www.php.net/manual/en/yaf-request-simple.get.php
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
	 * @link http://www.php.net/manual/en/yaf-request-simple.isxmlhttprequest.php
	 *
	 * @return bool
	 */
	public function isXmlHttpRequest(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-simple.construct.php
	 *
	 * @param string $method
	 * @param string $controller
	 * @param string $action
	 * @param string $params
	 *
	 * @throws\Yaf\Exception\TypeError
	 */
	public function __construct($method, $controller, $action, $params = null){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-simple.clone.php
	 */
	private function __clone(){ }
}