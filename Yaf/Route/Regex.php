<?php
namespace Yaf\Route ;

/**
 * <p><b>\Yaf\Route\Regex</b> is the most flexible route among the Yaf built-in routes.</p>
 *
 * @link http://www.php.net/manual/en/class.yaf-route-regex.php
 */
final class Regex extends \Yaf\Router implements \Yaf\Route_Interface {

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
	protected $_maps;
	/**
	 * @var array
	 */
	protected $_verify;
	/**
	 * @var string
	 */
	protected $_reverse;

	/**
	 * @link http://www.php.net/manual/en/yaf-route-regex.construct.php
	 *
	 * @param string $match A complete Regex pattern, will be used to match a request uri, if doesn't matched, \Yaf\Route\Regex will return FALSE.
	 * @param array $route <p>When the match pattern matches the request uri, \Yaf\Route\Regex will use this to decide which m/c/a to routed.</p>
	 * <br/>
	 * <p>either of m/c/a in this array is optional, if you don't assign a specific value, it will be routed to default.</p>
	 * @param array $map A array to assign name to the captures in the match result.
	 * @param array $verify
	 * @param string $reverse
	 *
	 * @throws\Yaf\Exception\TypeError
	 */
	public function __construct($match, array $route, array $map = null, array $verify = null, $reverse = null){ }

	/**
	 * Route a incoming request.
	 *
	 * @link http://www.php.net/manual/en/yaf-route-regex.route.php
	 *
	 * @param \Yaf\Request_Abstract $request
	 *
	 * @return bool If the pattern given by the first parameter of \Yaf\Route\Regex::_construct() matches the request uri, return TRUE, otherwise return FALSE.
	 */
	public function route(\Yaf\Request_Abstract $request){ }

	/**
	 * <p><b>\Yaf\Route\Regex::assemble()</b> - Assemble a url
	 *
	 * @link http://www.php.net/manual/en/yaf-route-regex.assemble.php
	 *
	 * @param array $info
	 * @param array $query
	 * @return bool
	 */
	public function assemble(array $info, array $query = null){ }
}