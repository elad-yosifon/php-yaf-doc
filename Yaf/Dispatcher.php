<?php
namespace Yaf ;

/**
 * @see Yaf_Dispatcher
 */
final class Dispatcher {
    /**
     * @see Yaf_Dispatcher::$_instance
     */
    protected static $_instance;
    /**
     * @see Yaf_Dispatcher::$_router
     */
    protected $_router;
    /**
     * @see Yaf_Dispatcher::$_view
     */
    protected $_view;
    /**
     * @see Yaf_Dispatcher::$_request
     */
    protected $_request;
    /**
     * @see Yaf_Dispatcher::$_plugins
     */
    protected $_plugins;
    /**
     * @see Yaf_Dispatcher::$_auto_render
     */
    protected $_auto_render = true;
    /**
     * @see Yaf_Dispatcher::$_return_response
     */
    protected $_return_response = "";
    /**
     * @see Yaf_Dispatcher::$_instantly_flush
     */
    protected $_instantly_flush = "";
    /**
     * @see Yaf_Dispatcher::$_default_module
     */
    protected $_default_module;
    /**
     * @see Yaf_Dispatcher::$_default_controller
     */
    protected $_default_controller;
    /**
     * @see Yaf_Dispatcher::$_default_action
     */
    protected $_default_action;
    /**
     * @see Yaf_Dispatcher::__construct()
     */
    private function __construct(){ }
    /**
     * @see Yaf_Dispatcher::__clone()
     */
    private function __clone(){ }
    /**
     * @see Yaf_Dispatcher::__sleep()
     */
    private function __sleep(){ }
    /**
     * @see Yaf_Dispatcher::__wakeup()
     */
    private function __wakeup(){ }
    /**
     * @see Yaf_Dispatcher::enableView()
     */
    public function enableView(){ }
    /**
     * @see Yaf_Dispatcher::disableView()
     */
    public function disableView(){ }
    /**
     * @see Yaf_Dispatcher::initView()
     */
    public function initView($templates_dir, array $options = null){ }
    /**
     * @see Yaf_Dispatcher::setView()
     */
    public function setView(\Yaf\View_Interface $view){ }
    /**
     * @see Yaf_Dispatcher::setRequest()
     */
    public function setRequest(\Yaf\Request_Abstract $request){ }
    /**
     * @see Yaf_Dispatcher::getApplication()
     */
    public function getApplication(){ }
    /**
     * @see Yaf_Dispatcher::getRouter()
     */
    public function getRouter(){ }
    /**
     * @see Yaf_Dispatcher::getRequest()
     */
    public function getRequest(){ }
    /**
     * @see Yaf_Dispatcher::setErrorHandler()
     */
    public function setErrorHandler(callable $callback, $error_types){ }
    /**
     * @see Yaf_Dispatcher::setDefaultModule()
     */
    public function setDefaultModule($module){ }
    /**
     * @see Yaf_Dispatcher::setDefaultController()
     */
    public function setDefaultController($controller){ }
    /**
     * @see Yaf_Dispatcher::setDefaultAction()
     */
    public function setDefaultAction($action){ }
    /**
     * @see Yaf_Dispatcher::returnResponse()
     */
    public function returnResponse($flag){ }
    /**
     * @see Yaf_Dispatcher::autoRender()
     */
    public function autoRender($flag = null){ }
    /**
     * @see Yaf_Dispatcher::flushInstantly()
     */
    public function flushInstantly($flag = null){ }
    /**
     * @see Yaf_Dispatcher::getInstance()
     */
    public static function getInstance(){ }
    /**
     * @see Yaf_Dispatcher::dispatch()
     */
    public function dispatch(\Yaf\Request_Abstract $request){ }
    /**
     * @see Yaf_Dispatcher::throwException()
     */
    public function throwException($flag = null){ }
    /**
     * @see Yaf_Dispatcher::catchException()
     */
    public function catchException($flag = null){ }
    /**
     * @see Yaf_Dispatcher::registerPlugin()
     */
    public function registerPlugin(\Yaf\Plugin_Abstract $plugin){ }
}