<?php
namespace Yaf ;

/**
 * @see Yaf_Route_Interface
 */
interface Route_Interface {
    /**
     * @see Yaf_Route_Interface::route()
     */
    function route(\Yaf\Request_Abstract $request);
}