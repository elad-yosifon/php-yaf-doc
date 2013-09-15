<?php
namespace Yaf ;

/**
 * <p>All methods of <b>\Yaf\Registry</b> declared as static, making it universally accessible. This provides the ability to get or set any custom data from anyway in your code as necessary.</p>
 * @link http://www.php.net/manual/en/class.yaf-registry.php
 */
final class Registry {

	/**
	 * @var \Yaf\Registry
	 */
	protected static $_instance;
	/**
	 * @var array
	 */
	protected $_entries;

	/**
	 * @link http://www.php.net/manual/en/yaf-registry.construct.php
	 */
	private function __construct(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-registry.clone.php
	 */
	private function __clone(){ }

	/**
	 * Retrieve an item from registry
	 *
	 * @link http://www.php.net/manual/en/yaf-registry.get.php
	 *
	 * @param string $name
	 *
	 * @return mixed
	 */
	public static function get($name){ }

	/**
	 * Check whether an item exists
	 *
	 * @link http://www.php.net/manual/en/yaf-registry.has.php
	 *
	 * @param string $name
	 *
	 * @return bool
	 */
	public static function has($name){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-registry.set.php
	 *
	 * @param string $name
	 * @param mixed $value
	 *
	 * @return bool
	 */
	public static function set($name, $value){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-registry.del.php
	 *
	 * @param string $name
	 *
	 * @return void|bool
	 */
	public static function del($name){ }
}