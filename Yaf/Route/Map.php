<?php
namespace Yaf\Route ;

/**
 * <p><b>\Yaf\Route\Map</b> is a built-in route, it simply convert a URI endpoint (that part of the URI which comes after the base URI: see \Yaf\Request_Abstract::setBaseUri()) to a controller name or action name(depends on the parameter passed to \Yaf\Route\Map::__construct()) in following rule: A => controller A. A/B/C => controller A_B_C. A/B/C/D/E => controller A_B_C_D_E.</p>
 * <br/>
 * <p>If the second parameter of \Yaf\Route\Map::__construct() is specified, then only the part before delimiter of URI will used to routing, the part after it is used to routing request parameters (see the example section of \Yaf\Route\Map::__construct()).</p>
 *
 * @link http://www.php.net/manual/en/class.yaf-route-map.php
 */
final class Map implements \Yaf\Route_Interface {

	/**
	 * @var string
	 */
	protected $_ctl_router = '';
	/**
	 * @var string
	 */
	protected $_delimiter;

	/**
	 * @link http://www.php.net/manual/en/yaf-route-map.construct.php
	 *
	 * @param bool $controller_prefer Whether the result should considering as controller or action
	 * @param string $delimiter
	 */
	public function __construct($controller_prefer = false, $delimiter = ''){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-route-map.route.php
	 *
	 * @param \Yaf\Request_Abstract $request
	 *
	 * @return bool
	 */
	public function route(\Yaf\Request_Abstract $request){ }

	/**
	 * <p><b>\Yaf\Route\Map::assemble()</b> - Assemble a url
	 *
	 * @link http://www.php.net/manual/en/yaf-route-map.assemble.php
	 *
	 * @param array $info
	 * @param array $query
	 * @return bool
	 */
	public function assemble(array $info, array $query = null){ }
}