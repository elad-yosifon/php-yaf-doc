<?php
namespace Yaf\Request ;

/**
 * @see Yaf_Request_Http
 */
class Http extends \Yaf\Request_Abstract {
    /**
     * @see Yaf_Request_Http::getQuery()
     */
    public function getQuery($name = null, $default = null){ }
    /**
     * @see Yaf_Request_Http::getRequest()
     */
    public function getRequest($name = null, $default = null){ }
    /**
     * @see Yaf_Request_Http::getPost()
     */
    public function getPost($name = null, $default = null){ }
    /**
     * @see Yaf_Request_Http::getCookie()
     */
    public function getCookie($name = null, $default = null){ }
    /**
     * @see Yaf_Request_Http::getFiles()
     */
    public function getFiles($name = null, $default = null){ }
    /**
     * @see Yaf_Request_Http::get()
     */
    public function get($name, $default = null){ }
    /**
     * @see Yaf_Request_Http::isXmlHttpRequest()
     */
    public function isXmlHttpRequest(){ }
    /**
     * @see Yaf_Request_Http::__construct()
     */
    public function __construct($request_uri, $base_uri){ }
    /**
     * @see Yaf_Request_Http::__clone()
     */
    private function __clone(){ }
}