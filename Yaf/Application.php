<?php
namespace Yaf ;

/**
 * @see Yaf_Application
 */
final class Application {
    /**
     * @see Yaf_Application::$_app
     */
    protected static $_app;
    /**
     * @see Yaf_Application::$config
     */
    protected $config;
    /**
     * @see Yaf_Application::$dispatcher
     */
    protected $dispatcher;
    /**
     * @see Yaf_Application::$_modules
     */
    protected $_modules;
    /**
     * @see Yaf_Application::$_running
     */
    protected $_running = "";
    /**
     * @see Yaf_Application::$_environ
     */
    protected $_environ = YAF_ENVIRON;
    /**
     * @see Yaf_Application::$_err_no
     */
    protected $_err_no = 0;
    /**
     * @see Yaf_Application::$_err_msg
     */
    protected $_err_msg = "";
    /**
     * @see Yaf_Application::__construct()
     */
    public function __construct($config, $envrion = null){ }
    /**
     * @see Yaf_Application::run()
     */
    public function run(){ }
    /**
     * @see Yaf_Application::execute()
     */
    public function execute(callable $entry, $_ = "..."){ }
    /**
     * @see Yaf_Application::app()
     */
    public static function app(){ }
    /**
     * @see Yaf_Application::environ()
     */
    public function environ(){ }
    /**
     * @see Yaf_Application::bootstrap()
     */
    public function bootstrap(\Yaf\Bootstrap_Abstract $bootstrap = null){ }
    /**
     * @see Yaf_Application::getConfig()
     */
    public function getConfig(){ }
    /**
     * @see Yaf_Application::getModules()
     */
    public function getModules(){ }
    /**
     * @see Yaf_Application::getDispatcher()
     */
    public function getDispatcher(){ }
    /**
     * @see Yaf_Application::setAppDirectory()
     */
    public function setAppDirectory($directory){ }
    /**
     * @see Yaf_Application::getAppDirectory()
     */
    public function getAppDirectory(){ }
    /**
     * @see Yaf_Application::getLastErrorNo()
     */
    public function getLastErrorNo(){ }
    /**
     * @see Yaf_Application::getLastErrorMsg()
     */
    public function getLastErrorMsg(){ }
    /**
     * @see Yaf_Application::clearLastError()
     */
    public function clearLastError(){ }
    /**
     * @see Yaf_Application::__destruct()
     */
    public function __destruct(){ }
    /**
     * @see Yaf_Application::__clone()
     */
    private function __clone(){ }
    /**
     * @see Yaf_Application::__sleep()
     */
    private function __sleep(){ }
    /**
     * @see Yaf_Application::__wakeup()
     */
    private function __wakeup(){ }
}