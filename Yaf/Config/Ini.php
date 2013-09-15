<?php
namespace Yaf\Config ;

/**
 * @see Yaf_Config_Ini
 */
class Ini extends \Yaf\Config_Abstract implements \Iterator, \Traversable, \ArrayAccess, \Countable {
    /**
     * @see Yaf_Config_Ini::__get()
     */
    public function __get($name = null){ }
    /**
     * @see Yaf_Config_Ini::__set()
     */
    public function __set($name, $value){ }
    /**
     * @see Yaf_Config_Ini::get()
     */
    public function get($name = null){ }
    /**
     * @see Yaf_Config_Ini::set()
     */
    public function set($name, $value){ }
    /**
     * @see Yaf_Config_Ini::toArray()
     */
    public function toArray(){ }
    /**
     * @see Yaf_Config_Ini::readonly()
     */
    public function readonly(){ }
    /**
     * @see Yaf_Config_Ini::__construct()
     */
    public function __construct($config_file, $section = null){ }
    /**
     * @see Yaf_Config_Ini::__isset()
     */
    public function __isset($name){ }
    /**
     * @see Yaf_Config_Ini::count()
     */
    public function count(){ }
    /**
     * @see Yaf_Config_Ini::rewind()
     */
    public function rewind(){ }
    /**
     * @see Yaf_Config_Ini::current()
     */
    public function current(){ }
    /**
     * @see Yaf_Config_Ini::next()
     */
    public function next(){ }
    /**
     * @see Yaf_Config_Ini::valid()
     */
    public function valid(){ }
    /**
     * @see Yaf_Config_Ini::key()
     */
    public function key(){ }
    /**
     * @see Yaf_Config_Ini::offsetUnset()
     */
    public function offsetUnset($name){ }
    /**
     * @see Yaf_Config_Ini::offsetGet()
     */
    public function offsetGet($name){ }
    /**
     * @see Yaf_Config_Ini::offsetExists()
     */
    public function offsetExists($name){ }
    /**
     * @see Yaf_Config_Ini::offsetSet()
     */
    public function offsetSet($name, $value){ }
}