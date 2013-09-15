<?php
namespace Yaf\Route ;

/**
 * @see Yaf_Route_Regex
 */
final class Regex extends \Yaf\Router implements \Yaf\Route_Interface {
    /**
     * @see Yaf_Route_Regex::$_route
     */
    protected $_route;
    /**
     * @see Yaf_Route_Regex::$_default
     */
    protected $_default;
    /**
     * @see Yaf_Route_Regex::$_maps
     */
    protected $_maps;
    /**
     * @see Yaf_Route_Regex::$_verify
     */
    protected $_verify;
    /**
     * @see Yaf_Route_Regex::__construct()
     */
    public function __construct($match, array $route, array $map = null, array $verify = null){ }
    /**
     * @see Yaf_Route_Regex::route()
     */
    public function route(\Yaf\Request_Abstract $request){ }
}