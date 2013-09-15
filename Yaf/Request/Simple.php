<?php
namespace Yaf\Request ;

/**
 * @see Yaf_Request_Simple
 */
class Simple extends \Yaf\Request_Abstract {
    /**
     * @see Yaf_Request_Simple::getQuery()
     */
    public function getQuery($name = null, $default = null){ }
    /**
     * @see Yaf_Request_Simple::getRequest()
     */
    public function getRequest($name = null, $default = null){ }
    /**
     * @see Yaf_Request_Simple::getPost()
     */
    public function getPost($name = null, $default = null){ }
    /**
     * @see Yaf_Request_Simple::getCookie()
     */
    public function getCookie($name = null, $default = null){ }
    /**
     * @see Yaf_Request_Simple::getFiles()
     */
    public function getFiles($name = null, $default = null){ }
    /**
     * @see Yaf_Request_Simple::get()
     */
    public function get($name, $default = null){ }
    /**
     * @see Yaf_Request_Simple::isXmlHttpRequest()
     */
    public function isXmlHttpRequest(){ }
    /**
     * @see Yaf_Request_Simple::__construct()
     */
    public function __construct($method, $controller, $action, $params = null){ }
    /**
     * @see Yaf_Request_Simple::__clone()
     */
    private function __clone(){ }
}