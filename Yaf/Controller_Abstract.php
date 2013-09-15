<?php
namespace Yaf ;

/**
 * @see Yaf_Controller_Abstract
 */
abstract class Controller_Abstract {
    /**
     * @see Yaf_Controller_Abstract::$actions
     */
    public $actions;
    /**
     * @see Yaf_Controller_Abstract::$_module
     */
    protected $_module;
    /**
     * @see Yaf_Controller_Abstract::$_name
     */
    protected $_name;
    /**
     * @see Yaf_Controller_Abstract::$_request
     */
    protected $_request;
    /**
     * @see Yaf_Controller_Abstract::$_response
     */
    protected $_response;
    /**
     * @see Yaf_Controller_Abstract::$_invoke_args
     */
    protected $_invoke_args;
    /**
     * @see Yaf_Controller_Abstract::$_view
     */
    protected $_view;
    /**
     * @see Yaf_Controller_Abstract::render()
     */
    protected function render($tpl, array $parameters = null){ }
    /**
     * @see Yaf_Controller_Abstract::display()
     */
    protected function display($tpl, array $parameters = null){ }
    /**
     * @see Yaf_Controller_Abstract::getRequest()
     */
    public function getRequest(){ }
    /**
     * @see Yaf_Controller_Abstract::getResponse()
     */
    public function getResponse(){ }
    /**
     * @see Yaf_Controller_Abstract::getModuleName()
     */
    public function getModuleName(){ }
    /**
     * @see Yaf_Controller_Abstract::getView()
     */
    public function getView(){ }
    /**
     * @see Yaf_Controller_Abstract::initView()
     */
    public function initView(array $options = null){ }
    /**
     * @see Yaf_Controller_Abstract::setViewpath()
     */
    public function setViewpath($view_directory){ }
    /**
     * @see Yaf_Controller_Abstract::getViewpath()
     */
    public function getViewpath(){ }
    /**
     * @see Yaf_Controller_Abstract::forward()
     */
    public function forward($module, $controller = null, $action = null, array $parameters = null){ }
    /**
     * @see Yaf_Controller_Abstract::redirect()
     */
    public function redirect($url){ }
    /**
     * @see Yaf_Controller_Abstract::getInvokeArgs()
     */
    public function getInvokeArgs(){ }
    /**
     * @see Yaf_Controller_Abstract::getInvokeArg()
     */
    public function getInvokeArg($name){ }
    /**
     * @see Yaf_Controller_Abstract::init()
     */
    public function init(){ }
    /**
     * @see Yaf_Controller_Abstract::__construct()
     */
    final public function __construct(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response, \Yaf\View_Interface $view, array $invokeArgs = null){ }
    /**
     * @see Yaf_Controller_Abstract::__clone()
     */
    final private function __clone(){ }
}