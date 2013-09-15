<?php
namespace Yaf\Route ;

/**
 * @see Yaf_Route_Map
 */
final class Map implements \Yaf\Route_Interface {
    /**
     * @see Yaf_Route_Map::$_ctl_router
     */
    protected $_ctl_router = '';
    /**
     * @see Yaf_Route_Map::$_delimeter
     */
    protected $_delimeter;
    /**
     * @see Yaf_Route_Map::__construct()
     */
    public function __construct($controller_prefer = false, $delimiter = ''){ }
    /**
     * @see Yaf_Route_Map::route()
     */
    public function route(\Yaf\Request_Abstract $request){ }
}