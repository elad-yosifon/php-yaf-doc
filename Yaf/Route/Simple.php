<?php
namespace Yaf\Route ;

/**
 * @see Yaf_Route_Simple
 */
final class Simple implements \Yaf\Route_Interface {
    /**
     * @see Yaf_Route_Simple::$controller
     */
    protected $controller;
    /**
     * @see Yaf_Route_Simple::$module
     */
    protected $module;
    /**
     * @see Yaf_Route_Simple::$action
     */
    protected $action;
    /**
     * @see Yaf_Route_Simple::__construct()
     */
    public function __construct($module_name, $controller_name, $action_name){ }
    /**
     * @see Yaf_Route_Simple::route()
     */
    public function route(\Yaf\Request_Abstract $request){ }
}