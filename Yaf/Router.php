<?php
namespace Yaf ;

/**
 * @see Yaf_Router
 */
class Router {
    /**
     * @see Yaf_Router::$_routes
     */
    protected $_routes;
    /**
     * @see Yaf_Router::$_current
     */
    protected $_current;
    /**
     * @see Yaf_Router::__construct()
     */
    public function __construct(){ }
    /**
     * @see Yaf_Router::addRoute()
     */
    public function addRoute($name, \Yaf\Route_Interface $route){ }
    /**
     * @see Yaf_Router::addConfig()
     */
    public function addConfig(\Yaf\Config_Abstract $config){ }
    /**
     * @see Yaf_Router::route()
     */
    public function route(\Yaf\Request_Abstract $request){ }
    /**
     * @see Yaf_Router::getRoute()
     */
    public function getRoute($name){ }
    /**
     * @see Yaf_Router::getRoutes()
     */
    public function getRoutes(){ }
    /**
     * @see Yaf_Router::getCurrentRoute()
     */
    public function getCurrentRoute(){ }
}