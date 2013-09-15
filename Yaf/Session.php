<?php
namespace Yaf ;

/**
 * @link http://www.php.net/manual/en/class.yaf-session.php
 * @version 2.2.9
 */
final class Session implements \Iterator, \Traversable, \ArrayAccess, \Countable {

	/**
	 * @var \Yaf\Session
	 */
	protected static $_instance;
	/**
	 * @var array
	 */
	protected $_session;
	/**
	 * @var bool
	 */
	protected $_started = true;

	/**
	 * @link http://www.php.net/manual/en/yaf-session.construct.php
	 */
	private function __construct(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-session.clone.php
	 */
	private function __clone(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-session.sleep.php
	 */
	private function __sleep(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-session.wakeup.php
	 */
	private function __wakeup(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-session.getinstance.php
	 *
	 * @return \Yaf\Session
	 */
	public static function getInstance(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-session.start.php
	 *
	 * @return \Yaf\Session
	 */
	public function start(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-session.get.php
	 *
	 * @param string $name
	 *
	 * @return mixed
	 */
	public function get($name){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-session.has.php
	 *
	 * @param string $name
	 *
	 * @return bool
	 */
	public function has($name){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-session.set.php
	 *
	 * @param string $name
	 * @param mixed $value
	 *
	 * @return bool|\Yaf\Session return FALSE on failure
	 */
	public function set($name, $value){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-session.del.php
	 *
	 * @param string $name
	 *
	 * @return bool|\Yaf\Session return FALSE on failure
	 */
	public function del($name){ }

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

	/**
	 * @see \Yaf\Session::get()
	 */
	public function __get($name){ }

	/**
	 * @see \Yaf\Session::has()
	 */
	public function __isset($name){ }

	/**
	 * @see \Yaf\Session::set()
	 */
	public function __set($name, $value){ }

	/**
	 * @see \Yaf\Session::del()
	 */
	public function __unset($name){ }
}