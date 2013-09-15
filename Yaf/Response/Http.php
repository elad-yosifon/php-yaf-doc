<?php
namespace Yaf\Response ;

/**
 * @see Yaf_Response_Http
 */
class Http extends \Yaf\Response_Abstract {
    /**
     * @see Yaf_Response_Http::$_response_code
     */
    protected $_response_code = 200;
    /**
     * @see Yaf_Response_Http::__clone()
     */
    private function __clone(){ }
    /**
     * @see Yaf_Response_Http::__toString()
     */
    private function __toString(){ }
}