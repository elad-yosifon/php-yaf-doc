<?php
namespace Yaf ;

/**
 * @link http://www.php.net/manual/en/class.yaf-request-abstract.php
 */
abstract class Request_Abstract {

	const SCHEME_HTTP  = 'http';
	const SCHEME_HTTPS = 'https';
	/**
	 * @var string
	 */
	public $module;
	/**
	 * @var string
	 */
	public $controller;
	/**
	 * @var string
	 */
	public $action;
	/**
	 * @var string
	 */
	public $method;
	/**
	 * @var array
	 */
	protected $params;
	/**
	 * @var string
	 */
	protected $language;
	/**
	 * @var\Yaf\Exception
	 */
	protected $_exception;
	/**
	 * @var string
	 */
	protected $_base_uri = "";
	/**
	 * @var string
	 */
	protected $uri = "";
	/**
	 * @var string
	 */
	protected $dispatched = "";
	/**
	 * @var string
	 */
	protected $routed = "";

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.isget.php
	 *
	 * @return bool
	 */
	public function isGet(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.ispost.php
	 *
	 * @return bool
	 */
	public function isPost(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.isput.php
	 *
	 * @return bool
	 */
	public function isPut(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.ishead.php
	 *
	 * @return bool
	 */
	public function isHead(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.isoptions.php
	 *
	 * @return bool
	 */
	public function isOptions(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.iscli.php
	 *
	 * @return bool
	 */
	public function isCli(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.isdispached.php
	 *
	 * @return bool
	 */
	public function isDispatched(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.isrouted.php
	 *
	 * @return bool
	 */
	public function isRouted(){ }

	/**
	 *
	 * @link http://www.php.net/manual/en/yaf-request-abstract.isxmlhttprequest.php
	 *
	 * @return bool false
	 */
	public function isXmlHttpRequest(){ }

	/**
	 * Retrieve $_SERVER variable
	 *
	 * @link http://www.php.net/manual/en/yaf-request-abstract.getserver.php
	 *
	 * @param string $name the variable name, if not provided returns all
	 * @param mixed $default if this parameter is provide, this will be returned if the variable can not be found
	 *
	 * @return mixed
	 */
	public function getServer($name = null, $default = null){ }

	/**
	 * Retrieve $_ENV variable
	 *
	 * @link http://www.php.net/manual/en/yaf-request-abstract.getenv.php
	 *
	 * @param string $name the variable name, if not provided returns all
	 * @param mixed $default if this parameter is provide, this will be returned if the variable can not be found
	 *
	 * @return mixed
	 */
	public function getEnv($name = null, $default = null){ }

	/**
	 *
	 * @link http://www.php.net/manual/en/yaf-request-abstract.getparam.php
	 *
	 * @param string $name
	 * @param mixed $default
	 *
	 * @return mixed
	 */
	public function getParam($name, $default = null){ }

	/**
	 *
	 * @link http://www.php.net/manual/en/yaf-request-abstract.getparams.php
	 *
	 * @return array
	 */
	public function getParams(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.getexception.php
	 *
	 * @return\Yaf\Exception
	 */
	public function getException(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.getmoudlename.php
	 *
	 * @return string
	 */
	public function getModuleName(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.getcontrollername.php
	 *
	 * @return string
	 */
	public function getControllerName(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.getactionname.php
	 *
	 * @return string
	 */
	public function getActionName(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.setparam.php
	 *
	 * @param string|array $name the variable name, or an array of key=>value pairs
	 * @param string $value
	 *
	 * @return \Yaf\Request_Abstract|bool
	 */
	public function setParam($name, $value = null){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.setmodulename.php
	 *
	 * @param string $module
	 *
	 * @return \Yaf\Request_Abstract|bool
	 */
	public function setModuleName($module){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.setcontrollername.php
	 *
	 * @param string $controller
	 *
	 * @return \Yaf\Request_Abstract|bool
	 */
	public function setControllerName($controller){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.setactionname.php
	 *
	 * @param string $action
	 *
	 * @return \Yaf\Request_Abstract|bool
	 */
	public function setActionName($action){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.getmethod.php
	 *
	 * @return string
	 */
	public function getMethod(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.getlanguage.php
	 *
	 * @return string
	 */
	public function getLanguage(){ }

	/**
	 * <p>Set base URI, base URI is used when doing routing, in routing phase request URI is used to route a request, while base URI is used to skip the leading part(base URI) of request URI. That is, if comes a request with request URI a/b/c, then if you set base URI to "a/b", only "/c" will be used in routing phase.</p>
	 * <br/>
	 * <b>Note:</b>
	 * <p>generally, you don't need to set this, Yaf will determine it automatically.</p>
	 *
	 * @link http://www.php.net/manual/en/yaf-request-abstract.setbaseuri.php
	 *
	 * @param string $uri base URI
	 *
	 * @return bool
	 */
	public function setBaseUri($uri){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.getbaseuri.php
	 *
	 * @return string
	 */
	public function getBaseUri(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-request-abstract.getrequesturi.php
	 *
	 * @return string
	 */
	public function getRequestUri(){ }

	/**
	 * @since 2.1.0
	 * @link http://www.php.net/manual/en/yaf-request-abstract.setrequesturi.php
	 *
	 * @param string $uri request URI
	 */
	public function setRequestUri($uri){ }

	/**
	 * Set request as dispatched
	 *
	 * @link http://www.php.net/manual/en/yaf-request-abstract.setdispatched.php
	 *
	 * @return bool
	 */
	public function setDispatched(){ }

	/**
	 * Set request as routed
	 *
	 * @link http://www.php.net/manual/en/yaf-request-abstract.setrouted.php
	 *
	 * @return \Yaf\Request_Abstract|bool
	 */
	public function setRouted(){ }
}