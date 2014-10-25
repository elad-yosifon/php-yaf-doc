<?php
namespace Yaf\Route ;

/**
 * <p><b>\Yaf\Route\Simple</b> will match the query string, and find the route info.</p>
 * <br/>
 * <p>all you need to do is tell <b>\Yaf\Route\Simple</b> what key in the $_GET is module, what key is controller, and what key is action.</p>
 * <br/>
 * <p>\Yaf\Route\Simple::route() will always return TRUE, so it is important put <b>\Yaf\Route\Simple</b> in the front of the Route stack, otherwise all the other routes will not be called</p>
 *
 * @link http://www.php.net/manual/en/class.yaf-route-simple.php
 */
final class Simple implements \Yaf\Route_Interface {

	/**
	 * @var string
	 */
	protected $controller;
	/**
	 * @var string
	 */
	protected $module;
	/**
	 * @var string
	 */
	protected $action;

	/**
	 * <p>\Yaf\Route\Simple will get route info from query string. and the parameters of this constructor will used as keys while searching for the route info in $_GET.</p>
	 *
	 * @link http://www.php.net/manual/en/yaf-route-simple.construct.php
	 *
	 * @param string $module_name
	 * @param string $controller_name
	 * @param string $action_name
	 *
	 * @throws\Yaf\Exception\TypeError
	 */
	public function __construct($module_name, $controller_name, $action_name){ }

	/**
	 * <p>see \Yaf\Route\Simple::__construct()</p>
	 *
	 * @link http://www.php.net/manual/en/yaf-route-simple.route.php
	 *
	 * @param \Yaf\Request_Abstract $request
	 *
	 * @return bool always TRUE
	 */
	public function route(\Yaf\Request_Abstract $request){ }

	/**
	 * <p><b>\Yaf\Route\Simple::assemble()</b> - Assemble a url
	 *
	 * @link http://www.php.net/manual/en/yaf-route-simple.assemble.php
	 *
	 * @param array $info
	 * @param array $query
	 * @return bool
	 */
	public function assemble(array $info, array $query = null){ }
}