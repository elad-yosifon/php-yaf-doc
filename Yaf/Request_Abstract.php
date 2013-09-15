<?php
namespace Yaf ;

/**
 * @see Yaf_Request_Abstract
 */
abstract class Request_Abstract {
    /**
     * @see Yaf_Request_Abstract::SCHEME_HTTP
     */
    const SCHEME_HTTP  = 'http';
    /**
     * @see Yaf_Request_Abstract::SCHEME_HTTPS
     */
    const SCHEME_HTTPS = 'https';
    /**
     * @see Yaf_Request_Abstract::$module
     */
    public $module;
    /**
     * @see Yaf_Request_Abstract::$controller
     */
    public $controller;
    /**
     * @see Yaf_Request_Abstract::$action
     */
    public $action;
    /**
     * @see Yaf_Request_Abstract::$method
     */
    public $method;
    /**
     * @see Yaf_Request_Abstract::$params
     */
    protected $params;
    /**
     * @see Yaf_Request_Abstract::$language
     */
    protected $language;
    /**
     * @see Yaf_Request_Abstract::$_exception
     */
    protected $_exception;
    /**
     * @see Yaf_Request_Abstract::$_base_uri
     */
    protected $_base_uri = "";
    /**
     * @see Yaf_Request_Abstract::$uri
     */
    protected $uri = "";
    /**
     * @see Yaf_Request_Abstract::$dispatched
     */
    protected $dispatched = "";
    /**
     * @see Yaf_Request_Abstract::$routed
     */
    protected $routed = "";
    /**
     * @see Yaf_Request_Abstract::isGet()
     */
    public function isGet(){ }
    /**
     * @see Yaf_Request_Abstract::isPost()
     */
    public function isPost(){ }
    /**
     * @see Yaf_Request_Abstract::isPut()
     */
    public function isPut(){ }
    /**
     * @see Yaf_Request_Abstract::isHead()
     */
    public function isHead(){ }
    /**
     * @see Yaf_Request_Abstract::isOptions()
     */
    public function isOptions(){ }
    /**
     * @see Yaf_Request_Abstract::isCli()
     */
    public function isCli(){ }
    /**
     * @see Yaf_Request_Abstract::isDispatched()
     */
    public function isDispatched(){ }
    /**
     * @see Yaf_Request_Abstract::isRouted()
     */
    public function isRouted(){ }
    /**
     * @see Yaf_Request_Abstract::isXmlHttpRequest()
     */
    public function isXmlHttpRequest(){ }
    /**
     * @see Yaf_Request_Abstract::getServer()
     */
    public function getServer($name = null, $default = null){ }
    /**
     * @see Yaf_Request_Abstract::getEnv()
     */
    public function getEnv($name = null, $default = null){ }
    /**
     * @see Yaf_Request_Abstract::getParam()
     */
    public function getParam($name, $default = null){ }
    /**
     * @see Yaf_Request_Abstract::getParams()
     */
    public function getParams(){ }
    /**
     * @see Yaf_Request_Abstract::getException()
     */
    public function getException(){ }
    /**
     * @see Yaf_Request_Abstract::getModuleName()
     */
    public function getModuleName(){ }
    /**
     * @see Yaf_Request_Abstract::getControllerName()
     */
    public function getControllerName(){ }
    /**
     * @see Yaf_Request_Abstract::getActionName()
     */
    public function getActionName(){ }
    /**
     * @see Yaf_Request_Abstract::setParam()
     */
    public function setParam($name, $value = null){ }
    /**
     * @see Yaf_Request_Abstract::setModuleName()
     */
    public function setModuleName($module){ }
    /**
     * @see Yaf_Request_Abstract::setControllerName()
     */
    public function setControllerName($controller){ }
    /**
     * @see Yaf_Request_Abstract::setActionName()
     */
    public function setActionName($action){ }
    /**
     * @see Yaf_Request_Abstract::getMethod()
     */
    public function getMethod(){ }
    /**
     * @see Yaf_Request_Abstract::getLanguage()
     */
    public function getLanguage(){ }
    /**
     * @see Yaf_Request_Abstract::setBaseUri()
     */
    public function setBaseUri($uri){ }
    /**
     * @see Yaf_Request_Abstract::getBaseUri()
     */
    public function getBaseUri(){ }
    /**
     * @see Yaf_Request_Abstract::getRequestUri()
     */
    public function getRequestUri(){ }
    /**
     * @see Yaf_Request_Abstract::setRequestUri()
     */
    public function setRequestUri($uri){ }
    /**
     * @see Yaf_Request_Abstract::setDispatched()
     */
    public function setDispatched(){ }
    /**
     * @see Yaf_Request_Abstract::setRouted()
     */
    public function setRouted(){ }
}