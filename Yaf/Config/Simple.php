<?php
namespace Yaf\Config ;

/**
 * @see Yaf_Config_Simple
 */
class Simple extends \Yaf\Config_Abstract implements \Iterator, \Traversable, \ArrayAccess, \Countable {
    /**
     * @see Yaf_Config_Simple::__get()
     */
    public function __get($name = null){ }
    /**
     * @see Yaf_Config_Simple::__set()
     */
    public function __set($name, $value){ }
    /**
     * @see Yaf_Config_Simple::get()
     */
    public function get($name = null){ }
    /**
     * @see Yaf_Config_Simple::set()
     */
    public function set($name, $value){ }
    /**
     * @see Yaf_Config_Simple::toArray()
     */
    public function toArray(){ }
    /**
     * @see Yaf_Config_Simple::readonly()
     */
    public function readonly(){ }
    /**
     * @see Yaf_Config_Simple::__construct()
     */
    public function __construct($config_file, $section = null){ }
    /**
     * @see Yaf_Config_Simple::__isset()
     */
    public function __isset($name){ }
    /**
     * @see Yaf_Config_Simple::count()
     */
    public function count(){ }
    /**
     * @see Yaf_Config_Simple::rewind()
     */
    public function rewind(){ }
    /**
     * @see Yaf_Config_Simple::current()
     */
    public function current(){ }
    /**
     * @see Yaf_Config_Simple::next()
     */
    public function next(){ }
    /**
     * @see Yaf_Config_Simple::valid()
     */
    public function valid(){ }
    /**
     * @see Yaf_Config_Simple::key()
     */
    public function key(){ }
    /**
     * @see Yaf_Config_Simple::offsetUnset()
     */
    public function offsetUnset($name){ }
    /**
     * @see Yaf_Config_Simple::offsetGet()
     */
    public function offsetGet($name){ }
    /**
     * @see Yaf_Config_Simple::offsetExists()
     */
    public function offsetExists($name){ }
    /**
     * @see Yaf_Config_Simple::offsetSet()
     */
    public function offsetSet($name, $value){ }
}