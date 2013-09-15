<?php
namespace Yaf ;

/**
 * @see Yaf_Loader
 */
class Loader {
    /**
     * @see Yaf_Loader::$_local_ns
     */
    protected $_local_ns;
    /**
     * @see Yaf_Loader::$_library
     */
    protected $_library;
    /**
     * @see Yaf_Loader::$_global_library
     */
    protected $_global_library;
    /**
     * @see Yaf_Loader::$_instance
     */
    protected static $_instance;
    /**
     * @see Yaf_Loader::__construct()
     */
    private function __construct(){ }
    /**
     * @see Yaf_Loader::__clone()
     */
    private function __clone(){ }
    /**
     * @see Yaf_Loader::__sleep()
     */
    private function __sleep(){ }
    /**
     * @see Yaf_Loader::__wakeup()
     */
    private function __wakeup(){ }
    /**
     * @see Yaf_Loader::autoload()
     */
    public function autoload($class_name){ }
    /**
     * @see Yaf_Loader::getInstance()
     */
    public static function getInstance($local_library_path = null, $global_library_path = null){ }
    /**
     * @see Yaf_Loader::registerLocalNamespace()
     */
    public function registerLocalNamespace($name_prefix){ }
    /**
     * @see Yaf_Loader::getLocalNamespace()
     */
    public function getLocalNamespace(){ }
    /**
     * @see Yaf_Loader::clearLocalNamespace()
     */
    public function clearLocalNamespace(){ }
    /**
     * @see Yaf_Loader::isLocalName()
     */
    public function isLocalName($class_name){ }
    /**
     * @see Yaf_Loader::import()
     */
    public static function import($file){ }
    /**
     * @see Yaf_Loader::setLibraryPath()
     */
    public function setLibraryPath($directory, $global = false){ }
    /**
     * @see Yaf_Loader::getLibraryPath()
     */
    public function getLibraryPath($is_global = false){ }
}