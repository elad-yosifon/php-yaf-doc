<?php
namespace Yaf\Config ;

/**
 * <p>\Yaf\Config\Ini enables developers to store configuration data in a familiar INI format and read them in the application by using nested object property syntax. The INI format is specialized to provide both the ability to have a hierarchy of configuration data keys and inheritance between configuration data sections. Configuration data hierarchies are supported by separating the keys with the dot or period character ("."). A section may extend or inherit from another section by following the section name with a colon character (":") and the name of the section from which data are to be inherited.</p><br/>
 * <b>Note:</b>
 * <p>\Yaf\Config\Ini utilizes the » parse_ini_file() PHP function. Please review this documentation to be aware of its specific behaviors, which propagate to \Yaf\Config\Ini, such as how the special values of "TRUE", "FALSE", "yes", "no", and "NULL" are handled.</p>
 * @link http://www.php.net/manual/en/class.yaf-config-ini.php
 */
class Ini extends \Yaf\Config_Abstract implements \Iterator, \Traversable, \ArrayAccess, \Countable {

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
	 * @deprecated not_implemented
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
	 * @link http://www.php.net/manual/en/yaf-config-ini.construct.php
	 *
	 * @param string $config_file path to an INI configure file
	 * @param string $section which section in that INI file you want to be parsed
	 *
	 * @throws\Yaf\Exception\TypeError
	 */
	public function __construct($config_file, $section = null){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-config-ini.isset.php
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
	 * @deprecated not_implemented
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