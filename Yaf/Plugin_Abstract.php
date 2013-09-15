<?php
namespace Yaf ;

/**
 * @see Yaf_Plugin_Abstract
 */
abstract class Plugin_Abstract {
    /**
     * @see Yaf_Plugin_Abstract::routerStartup()
     */
    public function routerStartup(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response){ }
    /**
     * @see Yaf_Plugin_Abstract::routerShutdown()
     */
    public function routerShutdown(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response){ }
    /**
     * @see Yaf_Plugin_Abstract::dispatchLoopStartup()
     */
    public function dispatchLoopStartup(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response){ }
    /**
     * @see Yaf_Plugin_Abstract::dispatchLoopShutdown()
     */
    public function dispatchLoopShutdown(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response){ }
    /**
     * @see Yaf_Plugin_Abstract::preDispatch()
     */
    public function preDispatch(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response){ }
    /**
     * @see Yaf_Plugin_Abstract::postDispatch()
     */
    public function postDispatch(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response){ }
    /**
     * @see Yaf_Plugin_Abstract::preResponse()
     */
    public function preResponse(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response){ }
}