<?php
namespace Yaf\Config ;

/**
 * @link http://www.php.net/manual/en/class.yaf-config-simple.php
 */
class Simple extends \Yaf\Config_Abstract implements \Iterator, \Traversable, \ArrayAccess, \Countable {

	/**
	 * @see \Yaf\Config_Abstract::get
	 */
	public function __get($name = null){ }

	/**
	 * @see \Yaf\Config_Abstract::set
	 */
	public function __set($name, $value){ }

	/**
	 * @see \Yaf\Config_Abstract::get
	 */
	public function get($name = null){ }

	/**
	 * @see \Yaf\Config_Abstract::set
	 */
	public function set($name, $value){ }

	/**
	 * @see \Yaf\Config_Abstract::toArray
	 */
	public function toArray(){ }

	/**
	 * @see \Yaf\Config_Abstract::readonly
	 */
	public function readonly(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-config-simple.construct.php
	 *
	 * @param string $config_file path to an INI configure file
	 * @param string $section which section in that INI file you want to be parsed
	 *
	 * @throws\Yaf\Exception\TypeError
	 */
	public function __construct($config_file, $section = null){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-config-simple.isset.php
	 * @param string $name
	 */
	public function __isset($name){ }

	/**
	 * @see \Countable::count
	 */
	public function count(){ }

	/**
	 * @see \Iterator::rewind
	 */
	public function rewind(){ }

	/**
	 * @see \Iterator::current
	 */
	public function current(){ }

	/**
	 * @see \Iterator::next
	 */
	public function next(){ }

	/**
	 * @see \Iterator::valid
	 */
	public function valid(){ }

	/**
	 * @see \Iterator::key
	 */
	public function key(){ }

	/**
	 * @see \ArrayAccess::offsetUnset
	 */
	public function offsetUnset($name){ }

	/**
	 * @see \ArrayAccess::offsetGet
	 */
	public function offsetGet($name){ }

	/**
	 * @see \ArrayAccess::offsetExists
	 */
	public function offsetExists($name){ }

	/**
	 * @see \ArrayAccess::offsetSet
	 */
	public function offsetSet($name, $value){ }
}