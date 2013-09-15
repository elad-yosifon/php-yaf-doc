<?php
namespace Yaf ;

/**
 * @see Yaf_Config_Abstract
 */
abstract class Config_Abstract {
    /**
     * @see Yaf_Config_Abstract::$_config
     */
    protected $_config = null;
    /**
     * @see Yaf_Config_Abstract::$_readonly
     */
    protected $_readonly = true;
    /**
     * @see Yaf_Config_Abstract::get()
     */
    abstract public function get($name = null);
    /**
     * @see Yaf_Config_Abstract::set()
     */
    abstract public function set($name, $value);
    /**
     * @see Yaf_Config_Abstract::readonly()
     */
    abstract public function readonly();
    /**
     * @see Yaf_Config_Abstract::toArray()
     */
    abstract public function toArray();
}