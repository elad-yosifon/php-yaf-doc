<?php
namespace Yaf\Route ;

/**
 * <p>For usage, please see the example section of \Yaf\Route\Rewrite::__construct()</p>
 *
 * @link http://www.php.net/manual/en/class.yaf-route-rewrite.php
 */
final class Rewrite extends \Yaf\Router implements \Yaf\Route_Interface {

	/**
	 * @var string
	 */
	protected $_route;
	/**
	 * @var array
	 */
	protected $_default;
	/**
	 * @var array
	 */
	protected $_verify;

	/**
	 * @link http://www.php.net/manual/en/yaf-route-rewrite.construct.php
	 *
	 * @param string $match A pattern, will be used to match a request uri, if doesn't matched, \Yaf\Route\Rewrite will return FALSE.
	 * @param array $route <p>When the match pattern matches the request uri, \Yaf\Route\Rewrite will use this to decide which m/c/a to routed.</p>
	 * <br/>
	 * <p>either of m/c/a in this array is optional, if you don't assign a specific value, it will be routed to default.</p>
	 * @param array $verify
	 * @param string $reverse
	 *
	 * @throws\Yaf\Exception\TypeError
	 */
	public function __construct($match, array $route, array $verify = null, $reverse = null){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-route-rewrite.route.php
	 *
	 * @param \Yaf\Request_Abstract $request
	 *
	 * @return bool
	 */
	public function route(\Yaf\Request_Abstract $request){ }

	/**
	 * <p><b>\Yaf\Route\Rewrite::assemble()</b> - Assemble a url
	 *
	 * @link http://www.php.net/manual/en/yaf-route-rewrite.assemble.php
	 *
	 * @param array $info
	 * @param array $query
	 * @return bool
	 */
	public function assemble(array $info, array $query = null){ }
}