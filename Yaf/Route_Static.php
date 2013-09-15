<?php
namespace Yaf ;

/**
 * @see Yaf_Route_Static
 */
class Route_Static implements \Yaf\Route_Interface {
    /**
     * @see Yaf_Route_Static::match()
     */
    public function match($uri){ }
    /**
     * @see Yaf_Route_Static::route()
     */
    public function route(\Yaf\Request_Abstract $request){ }
}