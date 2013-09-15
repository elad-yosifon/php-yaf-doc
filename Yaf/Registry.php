<?php
namespace Yaf ;

/**
 * @see Yaf_Registry
 */
final class Registry {
    /**
     * @see Yaf_Registry::$_instance
     */
    protected static $_instance;
    /**
     * @see Yaf_Registry::$_entries
     */
    protected $_entries;
    /**
     * @see Yaf_Registry::__construct()
     */
    private function __construct(){ }
    /**
     * @see Yaf_Registry::__clone()
     */
    private function __clone(){ }
    /**
     * @see Yaf_Registry::get()
     */
    public static function get($name){ }
    /**
     * @see Yaf_Registry::has()
     */
    public static function has($name){ }
    /**
     * @see Yaf_Registry::set()
     */
    public static function set($name, $value){ }
    /**
     * @see Yaf_Registry::del()
     */
    public static function del($name){ }
}