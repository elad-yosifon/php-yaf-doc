<?php
namespace Yaf ;

/**
 * <p>by default,\Yaf\Router only have a <b>\Yaf\Route_Static</b> as its default route.</p>
 * <br/>
 * <p><b>\Yaf\Route_Static</b> is designed to handle 80% of normal requirements.</p>
 * <br/>
 * <b>Note:</b>
 * <p> it is unnecessary to instance a <b>\Yaf\Route_Static</b>, also unnecessary to add it into\Yaf\Router's routes stack, since there is always be one in\Yaf\Router's routes stack, and always be called at the last time.</p>
 *
 * @link http://www.php.net/manual/en/class.yaf-route-static.php
 *
 */
class Route_Static implements \Yaf\Route_Interface {

	/**
	 * @deprecated not_implemented
	 * @link http://www.php.net/manual/en/yaf-route-static.match.php
	 *
	 * @param string $uri
	 *
	 * @return bool
	 */
	public function match($uri){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-route-static.route.php
	 *
	 * @param \Yaf\Request_Abstract $request
	 *
	 * @return bool always TRUE
	 */
	public function route(\Yaf\Request_Abstract $request){ }

	/**
	 * <p><b>\Yaf\Route_Static::assemble()</b> - Assemble a url
	 *
	 * @link http://www.php.net/manual/en/yaf-route-static.assemble.php
	 *
	 * @param array $info
	 * @param array $query
	 * @return bool
	 */
	public function assemble(array $info, array $query = null){ }
}