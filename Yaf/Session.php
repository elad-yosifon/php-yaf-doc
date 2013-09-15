<?php
namespace Yaf ;

/**
 * @see Yaf_Session
 */
final class Session implements \Iterator, \Traversable, \ArrayAccess, \Countable {
    /**
     * @see Yaf_Session::$_instance
     */
    protected static $_instance;
    /**
     * @see Yaf_Session::$_session
     */
    protected $_session;
    /**
     * @see Yaf_Session::$_started
     */
    protected $_started = true;
    /**
     * @see Yaf_Session::__construct()
     */
    private function __construct(){ }
    /**
     * @see Yaf_Session::__clone()
     */
    private function __clone(){ }
    /**
     * @see Yaf_Session::__sleep()
     */
    private function __sleep(){ }
    /**
     * @see Yaf_Session::__wakeup()
     */
    private function __wakeup(){ }
    /**
     * @see Yaf_Session::getInstance()
     */
    public static function getInstance(){ }
    /**
     * @see Yaf_Session::start()
     */
    public function start(){ }
    /**
     * @see Yaf_Session::get()
     */
    public function get($name){ }
    /**
     * @see Yaf_Session::has()
     */
    public function has($name){ }
    /**
     * @see Yaf_Session::set()
     */
    public function set($name, $value){ }
    /**
     * @see Yaf_Session::del()
     */
    public function del($name){ }
    /**
     * @see Yaf_Session::count()
     */
    public function count(){ }
    /**
     * @see Yaf_Session::rewind()
     */
    public function rewind(){ }
    /**
     * @see Yaf_Session::current()
     */
    public function current(){ }
    /**
     * @see Yaf_Session::next()
     */
    public function next(){ }
    /**
     * @see Yaf_Session::valid()
     */
    public function valid(){ }
    /**
     * @see Yaf_Session::key()
     */
    public function key(){ }
    /**
     * @see Yaf_Session::offsetUnset()
     */
    public function offsetUnset($name){ }
    /**
     * @see Yaf_Session::offsetGet()
     */
    public function offsetGet($name){ }
    /**
     * @see Yaf_Session::offsetExists()
     */
    public function offsetExists($name){ }
    /**
     * @see Yaf_Session::offsetSet()
     */
    public function offsetSet($name, $value){ }
    /**
     * @see Yaf_Session::__get()
     */
    public function __get($name){ }
    /**
     * @see Yaf_Session::__isset()
     */
    public function __isset($name){ }
    /**
     * @see Yaf_Session::__set()
     */
    public function __set($name, $value){ }
    /**
     * @see Yaf_Session::__unset()
     */
    public function __unset($name){ }
}