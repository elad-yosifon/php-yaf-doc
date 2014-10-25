<?php
namespace Yaf\Route ;

/**
 * @link http://www.php.net/manual/en/class.yaf-route-supervar.php
 */
final class Supervar implements \Yaf\Route_Interface {

	/**
	 * @var string
	 */
	protected $_var_name;

	/**
	 * <p>\Yaf\Route\Supervar is similar to\Yaf\Route_Static, the difference is that \Yaf\Route\Supervar will look for path info in query string, and the parameter supervar_name is the key.</p>
	 *
	 * @link http://www.php.net/manual/en/yaf-route-supervar.construct.php
	 *
	 * @param string $supervar_name The name of key.
	 *
	 * @throws\Yaf\Exception\TypeError
	 */
	public function __construct($supervar_name){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-route-supervar.route.php
	 *
	 * @param \Yaf\Request_Abstract $request
	 *
	 * @return bool If there is a key(which was defined in \Yaf\Route\Supervar::__construct()) in $_GET, return TRUE. otherwise return FALSE.
	 */
	public function route(\Yaf\Request_Abstract $request){ }

	/**
	 * <p><b>\Yaf\Route\Supervar::assemble()</b> - Assemble a url
	 *
	 * @link http://www.php.net/manual/en/yaf-route-supervar.assemble.php
	 *
	 * @param array $info
	 * @param array $query
	 * @return bool
	 */
	public function assemble(array $info, array $query = null){ }
}