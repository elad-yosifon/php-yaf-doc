<?php
namespace Yaf ;

/**
 * @link http://www.php.net/manual/en/class.yaf-config-abstract.php
 */
abstract class Config_Abstract {

	/**
	 * @var array
	 */
	protected $_config = null;
	/**
	 * @var bool
	 */
	protected $_readonly = true;

	/**
	 * @link http://www.php.net/manual/en/yaf-config-abstract.get.php
	 *
	 * @param string $name
	 * @return mixed
	 */
	abstract public function get($name = null);

	/**
	 * @link http://www.php.net/manual/en/yaf-config-abstract.set.php
	 *
	 * @param string $name
	 * @param mixed $value
	 * @return \Yaf\Config_Abstract
	 */
	abstract public function set($name, $value);

	/**
	 * @link http://www.php.net/manual/en/yaf-config-abstract.readonly.php
	 *
	 * @return bool
	 */
	abstract public function readonly();

	/**
	 * @link http://www.php.net/manual/en/yaf-config-abstract.toarray.php
	 *
	 * @return array
	 */
	abstract public function toArray();
}