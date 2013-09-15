<?php
namespace Yaf\Route ;

/**
 * @see Yaf_Route_Supervar
 */
final class Supervar implements \Yaf\Route_Interface {
    /**
     * @see Yaf_Route_Supervar::$_var_name
     */
    protected $_var_name;
    /**
     * @see Yaf_Route_Supervar::__construct()
     */
    public function __construct($supervar_name){ }
    /**
     * @see Yaf_Route_Supervar::route()
     */
    public function route(\Yaf\Request_Abstract $request){ }
}