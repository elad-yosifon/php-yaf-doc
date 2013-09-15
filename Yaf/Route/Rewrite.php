<?php
namespace Yaf\Route ;

/**
 * @see Yaf_Route_Rewrite
 */
final class Rewrite extends \Yaf\Router implements \Yaf\Route_Interface {
    /**
     * @see Yaf_Route_Rewrite::$_route
     */
    protected $_route;
    /**
     * @see Yaf_Route_Rewrite::$_default
     */
    protected $_default;
    /**
     * @see Yaf_Route_Rewrite::$_verify
     */
    protected $_verify;
    /**
     * @see Yaf_Route_Rewrite::__construct()
     */
    public function __construct($match, array $route, array $verify = null){ }
    /**
     * @see Yaf_Route_Rewrite::route()
     */
    public function route(\Yaf\Request_Abstract $request){ }
}