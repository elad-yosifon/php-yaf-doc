<?php
namespace Yaf ;

/**
 * <p><b>\Yaf\Controller_Abstract</b> is the heart of Yaf's system. MVC stands for Model-View-Controller and is a design pattern targeted at separating application logic from display logic.</p>
 * <br/>
 * <p>Every custom controller shall inherit <b>\Yaf\Controller_Abstract</b>.</p>
 * <br/>
 * <p>You will find that you can not define __construct function for your custom controller, thus, <b>\Yaf\Controller_Abstract</b> provides a magic method: \Yaf\Controller_Abstract::init().</p>
 * <br/>
 * <p>If you have defined a init() method in your custom controller, it will be called as long as the controller was instantiated.</p>
 * <br/>
 * <p>Action may have arguments, when a request coming, if there are the same name variable in the request parameters(see \Yaf\Request_Abstract::getParam()) after routed, Yaf will pass them to the action method (see\Yaf\Action_Abstract::execute()).</p>
 * <br/>
 * <b>Note:</b>
 * <p>These arguments are directly fetched without filtering, it should be carefully processed before use them.</p>
 *
 * @link http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
abstract class Controller_Abstract {

	/**
	 * @see\Yaf\Action_Abstract
	 * @var array You can also define a action method in a separate PHP script by using this property and\Yaf\Action_Abstract.
	 */
	public $actions;
	/**
	 * @var string module name
	 */
	protected $_module;
	/**
	 * @var string controller name
	 */
	protected $_name;
	/**
	 * @var \Yaf\Request_Abstract current request object
	 */
	protected $_request;
	/**
	 * @var \Yaf\Response_Abstract current response object
	 */
	protected $_response;
	/**
	 * @var array
	 */
	protected $_invoke_args;
	/**
	 * @var \Yaf\View_Interface view engine object
	 */
	protected $_view;

	/**
	 * @link http://www.php.net/manual/en/yaf-controller-abstract.render.php
	 *
	 * @param string $tpl
	 * @param array $parameters
	 *
	 * @return string
	 */
	protected function render($tpl, array $parameters = null){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-controller-abstract.display.php
	 *
	 * @param string $tpl
	 * @param array $parameters
	 *
	 * @return bool
	 */
	protected function display($tpl, array $parameters = null){ }

	/**
	 * retrieve current request object
	 *
	 * @link http://www.php.net/manual/en/yaf-controller-abstract.getrequest.php
	 *
	 * @return \Yaf\Request_Abstract
	 */
	public function getRequest(){ }

	/**
	 * retrieve current response object
	 *
	 * @link http://www.php.net/manual/en/yaf-controller-abstract.getresponse.php
	 *
	 * @return \Yaf\Response_Abstract
	 */
	public function getResponse(){ }

	/**
	 * get the controller's module name
	 *
	 * @link http://www.php.net/manual/en/yaf-controller-abstract.getmodulename.php
	 *
	 * @return string
	 */
	public function getModuleName(){ }

	/**
	 * retrieve view engine
	 *
	 * @link http://www.php.net/manual/en/yaf-controller-abstract.getview.php
	 *
	 * @return \Yaf\View_Interface
	 */
	public function getView(){ }

	/**
	 * @deprecated not_implemented
	 * @link http://www.php.net/manual/en/yaf-controller-abstract.initview.php
	 *
	 * @param array $options
	 *
	 * @return \Yaf\Response_Abstract
	 */
	public function initView(array $options = null){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-controller-abstract.setviewpath.php
	 *
	 * @param string $view_directory
	 *
	 * @return bool
	 */
	public function setViewpath($view_directory){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-controller-abstract.getviewpath.php
	 *
	 * @return string
	 */
	public function getViewpath(){ }

	/**
	 * <p>forward current execution process to other action.</p>
	 * <br/>
	 * <b>Note:</b>
	 * <p>this method doesn't switch to the destination action immediately, it will take place after current flow finish.</p>
	 * <br/>
	 * <b>Notice, there are 3 available method signatures:</b>
	 * <p>\Yaf\Controller_Abstract::forward ( string $module , string $controller , string $action [, array $parameters ] )</p>
	 * <p>\Yaf\Controller_Abstract::forward ( string $controller , string $action [, array $parameters ] )</p>
	 * <p>\Yaf\Controller_Abstract::forward ( string $action [, array $parameters ] )</p>
	 *
	 * @link http://www.php.net/manual/en/yaf-controller-abstract.forward.php
	 *
	 * @param string $module destination module name, if NULL was given, then default module name is assumed
	 * @param string $controller destination controller name
	 * @param string $action destination action name
	 * @param array $parameters calling arguments
	 *
	 * @return bool return FALSE on failure
	 */
	public function forward($module, $controller = null, $action = null, array $parameters = null){ }

	/**
	 * redirect to a URL by sending a 302 header
	 *
	 * @link http://www.php.net/manual/en/yaf-controller-abstract.redirect.php
	 *
	 * @param string $url a location URL
	 *
	 * @return bool
	 */
	public function redirect($url){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-controller-abstract.getinvokeargs.php
	 *
	 * @return array
	 */
	public function getInvokeArgs(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-controller-abstract.getinvokearg.php
	 * @param string $name
	 *
	 * @return null|mixed
	 */
	public function getInvokeArg($name){ }

	/**
	 * <p>\Yaf\Controller_Abstract::__construct() is final, which means users can not override it. but users can define <b>\Yaf\Controller_Abstract::init()</b>, which will be called after controller object is instantiated.</p>
	 *
	 * @link http://www.php.net/manual/en/yaf-controller-abstract.init.php
	 *
	 */
	public function init(){ }

	/**
	 * <b>\Yaf\Controller_Abstract</b>::__construct() is final, which means it can not be overridden. You may want to see \Yaf\Controller_Abstract::init() instead.
	 *
	 * @see \Yaf\Controller_Abstract::init()
	 * @link http://www.php.net/manual/en/yaf-controller-abstract.construct.php
	 *
	 * @param \Yaf\Request_Abstract $request
	 * @param \Yaf\Response_Abstract $response
	 * @param \Yaf\View_Interface $view
	 * @param array $invokeArgs
	 */
	final public function __construct(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response, \Yaf\View_Interface $view, array $invokeArgs = null){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-controller-abstract.clone.php
	 */
	final private function __clone(){ }
}