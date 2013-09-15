<?php
namespace Yaf ;

/**
 * @see Yaf_Response_Abstract
 */
abstract class Response_Abstract {
    /**
     * @see Yaf_Response_Abstract::DEFAULT_BODY
     */
    const DEFAULT_BODY = "content";
    /**
     * @see Yaf_Response_Abstract::$_header
     */
    protected $_header;
    /**
     * @see Yaf_Response_Abstract::$_body
     */
    protected $_body;
    /**
     * @see Yaf_Response_Abstract::$_sendheader
     */
    protected $_sendheader;
    /**
     * @see Yaf_Response_Abstract::__construct()
     */
    public function __construct(){ }
    /**
     * @see Yaf_Response_Abstract::__destruct()
     */
    public function __destruct(){ }
    /**
     * @see Yaf_Response_Abstract::__clone()
     */
    private function __clone(){ }
    /**
     * @see Yaf_Response_Abstract::__toString()
     */
    private function __toString(){ }
    /**
     * @see Yaf_Response_Abstract::setBody()
     */
    public function setBody($content, $key = self::DEFAULT_BODY){ }
    /**
     * @see Yaf_Response_Abstract::appendBody()
     */
    public function appendBody($content, $key = self::DEFAULT_BODY){ }
    /**
     * @see Yaf_Response_Abstract::prependBody()
     */
    public function prependBody($content, $key = self::DEFAULT_BODY){ }
    /**
     * @see Yaf_Response_Abstract::clearBody()
     */
    public function clearBody($key = self::DEFAULT_BODY){ }
    /**
     * @see Yaf_Response_Abstract::getBody()
     */
    public function getBody($key = self::DEFAULT_BODY){ }
    /**
     * @see Yaf_Response_Abstract::setHeader()
     */
    public function setHeader(){ }
    /**
     * @see Yaf_Response_Abstract::setAllHeaders()
     */
    protected function setAllHeaders(){ }
    /**
     * @see Yaf_Response_Abstract::getHeader()
     */
    public function getHeader(){ }
    /**
     * @see Yaf_Response_Abstract::clearHeaders()
     */
    public function clearHeaders(){ }
    /**
     * @see Yaf_Response_Abstract::setRedirect()
     */
    public function setRedirect($url){ }
    /**
     * @see Yaf_Response_Abstract::response()
     */
    public function response(){ }
}