<?php

define('YAF_VERSION', '2.2.9', true);
define('YAF_ENVIRON', 'product', true);
define('YAF_ERR_STARTUP_FAILED', 512, true);
define('YAF_ERR_ROUTE_FAILED', 513, true);
define('YAF_ERR_DISPATCH_FAILED', 514, true);
define('YAF_ERR_NOTFOUND_MODULE', 515, true);
define('YAF_ERR_NOTFOUND_CONTROLLER', 516, true);
define('YAF_ERR_NOTFOUND_ACTION', 517, true);
define('YAF_ERR_NOTFOUND_VIEW', 518, true);
define('YAF_ERR_CALL_FAILED', 519, true);
define('YAF_ERR_AUTOLOAD_FAILED', 520, true);
define('YAF_ERR_TYPE_ERROR', 521, true);

/**
 * Yaf_Application provides a bootstrapping facility for applications which provides reusable resources, common- and module-based bootstrap classes and dependency checking.
 *
 * <br/>
 * <b>Note:</b>
 * <p>
 * Yaf_Application implements the singleton pattern, and Yaf_Application can not be serialized or un-serialized which will cause problem when you try to use PHPUnit to write some test case for Yaf.<br/>
 * You may use &#64;backupGlobals annotation of PHPUnit to control the backup and restore operations for global variables. thus can solve this problem.
 * </p>
 * @link http://www.php.net/manual/en/class.yaf-application.php
 */
final class Yaf_Application {

	/**
	 * @var Yaf_Config_Abstract
	 */
	protected $config;
	/**
	 * @var Yaf_Dispatcher
	 */
	protected $dispatcher;
	/**
	 * @var Yaf_Application
	 */
	protected static $_app;
	/**
	 * @var array
	 */
	protected $_modules;
	/**
	 * @var string
	 */
	protected $_running = "";
	/**
	 * @var string
	 */
	protected $_environ = YAF_ENVIRON;
	/**
	 * @since v2.1.2
	 * @var string
	 */
	protected $_err_no = 0;
	/**
	 * @since v2.1.2
	 * @var string
	 */
	protected $_err_msg = "";

	/**
	 * @since v1.0.0
	 * @link http://www.php.net/manual/en/yaf-application.construct.php
	 *
	 * @param string|array $config - A ini config file path, or a config array
	 * <p>
	 * If is a ini config file, there should be a section named as the one defined by yaf.environ, which is "product" by default.
	 * </p>
	 * <br/>
	 * <b>Note:</b>
	 * <p>If you use a ini configuration file as your application's config container. you would open the yaf.cache_config to improve performance.</p>
	 * <p>And the config entry(and there default value) list blow:</p>
	 *
	 * <p>
	 *    <b>Example #1 A ini config file example</b><br/>
	 *    [product]<br/>
	 *    ;this one should alway be defined, and have no default value<br/>
	 *    application.directory=APPLICATION_PATH<br/><br/>
	 * </p>
	 * <p>
	 *    ;following configs have default value, you may no need to define them
	 * <br/>
	 *    application.library = APPLICATION_PATH . "/library" <br/>
	 *    application.dispatcher.throwException=1 <br/>
	 *    application.dispatcher.catchException=1 <br/><br/>
	 * </p>
	 * <p>application.baseUri=""<br/><br/></p>
	 * <p>
	 *    ;the php script ext name<br/>
	 *    ap.ext=php<br/><br/>
	 * </p>
	 * <p>
	 *    ;the view template ext name<br/>
	 *    ap.view.ext=phtml<br/><br/>
	 * </p>
	 * <p>
	 *    ap.dispatcher.defaultModuel=Index<br/>
	 *    ap.dispatcher.defaultController=Index<br/>
	 *    ap.dispatcher.defaultAction=index<br/><br/>
	 * </p>
	 * <p>
	 *    ;defined modules<br/>
	 *    ap.modules=Index
	 * </p>
	 * @param string $envrion - Which section will be loaded as the final config
	 */
	public function __construct($config, $envrion = NULL){}

	/**
	 * Run a Yaf_Application, let the Yaf_Application accept a request, and route the request, dispatch to controller/action, and render response.
	 * return response to client finally.
	 *
	 * @since v1.0.0
	 * @link http://www.php.net/manual/en/yaf-application.run.php
	 */
	public function run(){}

	/**
	 * This method is typically used to run Yaf_Application in a crontab work.
	 * Make the crontab work can also use the autoloader and Bootstrap mechanism.
	 *
	 * @since v1.0.0
	 * @link http://www.php.net/manual/en/yaf-application.execute.php
	 *
	 * @param callable $entry - a valid callback
	 * @param string $_ - parameters will pass to the callback
	 */
	public function execute(callable $entry, $_ = "..."){}

	/**
	 * Retrieve the Yaf_Application instance, alternatively, we also could use Yaf_Dispatcher::getApplication().
	 *
	 * @since v1.0.0
	 * @link http://www.php.net/manual/en/yaf-application.app.php
	 *
	 * @return Yaf_Application|NULL - an Yaf_Application instance, if no Yaf_Application initialized before, NULL will be returned.
	 */
	public static function app(){}

	/**
	 * Retrieve environ which was defined in yaf.environ which has a default value "product".
	 *
	 * @since v1.0.0
	 * @link http://www.php.net/manual/en/yaf-application.environ.php
	 *
	 * @return string
	 */
	public function environ(){}

	/**
	 * Run a Bootstrap, all the methods defined in the Bootstrap and named with prefix "_init" will be called according to their declaration order, if the parameter bootstrap is not supplied, Yaf will look for a Bootstrap under application.directory.
	 *
	 * @since v1.0.0
	 * @link http://www.php.net/manual/en/yaf-application.bootstrap.php
	 *
	 * @param Yaf_Bootstrap_Abstract $bootstrap - A Yaf_Bootstrap_Abstract instance
	 * @return Yaf_Application
	 */
	public function bootstrap(Yaf_Bootstrap_Abstract $bootstrap = NULL){}

	/**
	 * @since v1.0.0
	 * @link http://www.php.net/manual/en/yaf-application.getconfig.php
	 *
	 * @return Yaf_Config_Abstract
	 */
	public function getConfig(){}

	/**
	 * Get the modules list defined in config, if no one defined, there will always be a module named "Index".
	 *
	 * @since v1.0.0
	 * @link http://www.php.net/manual/en/yaf-application.getmodules.php
	 *
	 * @return array
	 */
	public function getModules(){}

	/**
	 * @since v1.0.0
	 * @link http://www.php.net/manual/en/yaf-application.getdispatcher.php
	 *
	 * @return Yaf_Dispatcher
	 */
	public function getDispatcher(){}

	/**
	 * Change the application directory
	 *
	 * @since v2.1.4
	 * @link http://www.php.net/manual/en/yaf-application.setappdirectory.php
	 *
	 * @param string $directory
	 * @return Yaf_Application
	 */
	public function setAppDirectory($directory){}

	/**
	 *
	 * @since v2.1.4
	 * @link http://www.php.net/manual/en/yaf-application.getappdirectory.php
	 *
	 * @return string
	 */
	public function getAppDirectory(){}

	/**
	 *
	 * @since v2.1.2
	 * @link http://www.php.net/manual/en/yaf-application.getlasterrorno.php
	 *
	 * @return int
	 */
	public function getLastErrorNo(){}

	/**
	 *
	 * @since v2.1.2
	 * @link http://www.php.net/manual/en/yaf-application.getlasterrormsg.php
	 *
	 * @return string
	 */
	public function getLastErrorMsg(){}

	/**
	 *
	 * @since v2.1.2
	 * @link http://www.php.net/manual/en/yaf-application.clearlasterror.php
	 */
	public function clearLastError(){}

	/**
	 *
	 * @since v1.0.0
	 * @link http://www.php.net/manual/en/yaf-application.destruct.php
	 */
	public function __destruct(){}

	/**
	 *
	 * @since v1.0.0
	 * @link http://www.php.net/manual/en/yaf-application.clone.php
	 */
	private function __clone(){}

	/**
	 *
	 * @since v1.0.0
	 * @link http://www.php.net/manual/en/yaf-application.sleep.php
	 */
	private function __sleep(){}

	/**
	 *
	 * @since v1.0.0
	 * @link http://www.php.net/manual/en/yaf-application.wakeup.php
	 */
	private function __wakeup(){}
}

abstract class Yaf_Bootstrap_Abstract {

	/* constants */
	/* properties */
	/* methods */
}

final class Yaf_Dispatcher {

	/* constants */

	/* properties */
	protected $_router = NULL;
	protected $_view = NULL;
	protected $_request = NULL;
	protected $_plugins = NULL;
	protected static $_instance = NULL;
	protected $_auto_render = "1";
	protected $_return_response = "";
	protected $_instantly_flush = "";
	protected $_default_module = NULL;
	protected $_default_controller = NULL;
	protected $_default_action = NULL;

	/* methods */
	private function __construct(){}

	private function __clone(){}

	private function __sleep(){}

	private function __wakeup(){}

	public function enableView(){}

	public function disableView(){}

	public function initView($templates_dir, array $options = NULL){}

	public function setView($view){}

	public function setRequest($request){}

	public function getApplication(){}

	public function getRouter(){}

	public function getRequest(){}

	public function setErrorHandler($callback, $error_types){}

	public function setDefaultModule($module){}

	public function setDefaultController($controller){}

	public function setDefaultAction($action){}

	public function returnResponse($flag){}

	public function autoRender($flag){}

	public function flushInstantly($flag){}

	public static function getInstance(){}

	public function dispatch($request){}

	public function throwException($flag = NULL){}

	public function catchException($flag = NULL){}

	public function registerPlugin($plugin){}
}

final class Yaf_Loader {

	/* constants */

	/* properties */
	protected $_local_ns = NULL;
	protected $_library = NULL;
	protected $_global_library = NULL;
	protected static $_instance = NULL;

	/* methods */
	private function __construct(){}

	private function __clone(){}

	private function __sleep(){}

	private function __wakeup(){}

	public function autoload($class_name){}

	public static function getInstance($local_library_path = NULL, $global_library_path = NULL){}

	public function registerLocalNamespace($name_prefix){}

	public function getLocalNamespace(){}

	public function clearLocalNamespace(){}

	public function isLocalName($class_name){}

	public static function import($file){}

	public function setLibraryPath($library_path, $is_global = NULL){}

	public function getLibraryPath($is_global = NULL){}
}

abstract class Yaf_Request_Abstract {

	/* constants */
	const SCHEME_HTTP = 'http';
	const SCHEME_HTTPS = 'https';

	/* properties */
	public $module = NULL;
	public $controller = NULL;
	public $action = NULL;
	public $method = NULL;
	protected $params = NULL;
	protected $language = NULL;
	protected $_exception = NULL;
	protected $_base_uri = "";
	protected $uri = "";
	protected $dispatched = "";
	protected $routed = "";

	/* methods */
	public function isGet(){}

	public function isPost(){}

	public function isPut(){}

	public function isHead(){}

	public function isOptions(){}

	public function isCli(){}

	public function isXmlHttpRequest(){}

	public function getServer($name, $default = NULL){}

	public function getEnv($name, $default = NULL){}

	public function setParam($name, $value = NULL){}

	public function getParam($name, $default = NULL){}

	public function getParams(){}

	public function getException(){}

	public function getModuleName(){}

	public function getControllerName(){}

	public function getActionName(){}

	public function setModuleName($module){}

	public function setControllerName($controller){}

	public function setActionName($action){}

	public function getMethod(){}

	public function getLanguage(){}

	public function setBaseUri($uir){}

	public function getBaseUri(){}

	public function getRequestUri(){}

	public function setRequestUri($uir){}

	public function isDispatched(){}

	public function setDispatched(){}

	public function isRouted(){}

	public function setRouted($flag = NULL){}
}

class Yaf_Request_Http extends Yaf_Request_Abstract {

	/* constants */

	/* properties */
	public $module = NULL;
	public $controller = NULL;
	public $action = NULL;
	public $method = NULL;
	protected $params = NULL;
	protected $language = NULL;
	protected $_exception = NULL;
	protected $_base_uri = "";
	protected $uri = "";
	protected $dispatched = "";
	protected $routed = "";

	/* methods */
	public function getQuery(){}

	private function __clone(){}

	public function getRequest(){}

	public function getPost(){}

	public function getCookie(){}

	public function getFiles(){}

	public function get(){}

	public function isXmlHttpRequest(){}

	public function __construct(){}

	public function isGet(){}

	public function isPost(){}

	public function isPut(){}

	public function isHead(){}

	public function isOptions(){}

	public function isCli(){}

	public function getServer($name, $default = NULL){}

	public function getEnv($name, $default = NULL){}

	public function setParam($name, $value = NULL){}

	public function getParam($name, $default = NULL){}

	public function getParams(){}

	public function getException(){}

	public function getModuleName(){}

	public function getControllerName(){}

	public function getActionName(){}

	public function setModuleName($module){}

	public function setControllerName($controller){}

	public function setActionName($action){}

	public function getMethod(){}

	public function getLanguage(){}

	public function setBaseUri($uir){}

	public function getBaseUri(){}

	public function getRequestUri(){}

	public function setRequestUri($uir){}

	public function isDispatched(){}

	public function setDispatched(){}

	public function isRouted(){}

	public function setRouted($flag = NULL){}
}

final class Yaf_Request_Simple extends Yaf_Request_Abstract {

	/* constants */
	const SCHEME_HTTP = 'http';
	const SCHEME_HTTPS = 'https';
	/* properties */
	public $module = NULL;
	public $controller = NULL;
	public $action = NULL;
	public $method = NULL;
	protected $params = NULL;
	protected $language = NULL;
	protected $_exception = NULL;
	protected $_base_uri = "";
	protected $uri = "";
	protected $dispatched = "";
	protected $routed = "";

	/* methods */
	public function __construct(){}

	private function __clone(){}

	public function getQuery(){}

	public function getRequest(){}

	public function getPost(){}

	public function getCookie(){}

	public function getFiles(){}

	public function get(){}

	public function isXmlHttpRequest(){}

	public function isGet(){}

	public function isPost(){}

	public function isPut(){}

	public function isHead(){}

	public function isOptions(){}

	public function isCli(){}

	public function getServer($name, $default = NULL){}

	public function getEnv($name, $default = NULL){}

	public function setParam($name, $value = NULL){}

	public function getParam($name, $default = NULL){}

	public function getParams(){}

	public function getException(){}

	public function getModuleName(){}

	public function getControllerName(){}

	public function getActionName(){}

	public function setModuleName($module){}

	public function setControllerName($controller){}

	public function setActionName($action){}

	public function getMethod(){}

	public function getLanguage(){}

	public function setBaseUri($uir){}

	public function getBaseUri(){}

	public function getRequestUri(){}

	public function setRequestUri($uir){}

	public function isDispatched(){}

	public function setDispatched(){}

	public function isRouted(){}

	public function setRouted($flag = NULL){}
}

abstract class Yaf_Response_Abstract {

	/* constants */

	/* properties */
	protected $_header = NULL;
	protected $_body = NULL;
	protected $_sendheader = "";

	/* methods */
	public function __construct(){}

	public function __destruct(){}

	private function __clone(){}

	private function __toString(){}

	public function setBody(){}

	public function appendBody(){}

	public function prependBody(){}

	public function clearBody(){}

	public function getBody(){}

	public function setHeader(){}

	protected function setAllHeaders(){}

	public function getHeader(){}

	public function clearHeaders(){}

	public function setRedirect(){}

	public function response(){}
}

class Yaf_Response_Http extends Yaf_Response_Abstract {

	/* constants */

	/* properties */
	protected $_header = NULL;
	protected $_body = NULL;
	protected $_sendheader = "1";
	protected $_response_code = "200";

	/* methods */
	public function __construct(){}

	public function __destruct(){}

	private function __clone(){}

	private function __toString()
	{
		return '';
	}

	public function setBody(){}

	public function appendBody(){}

	public function prependBody(){}

	public function clearBody(){}

	public function getBody(){}

	public function setHeader(){}

	protected function setAllHeaders(){}

	public function getHeader(){}

	public function clearHeaders(){}

	public function setRedirect(){}

	public function response(){}
}

class Yaf_Response_Cli extends Yaf_Response_Abstract {

	/* constants */

	/* properties */
	protected $_header = NULL;
	protected $_body = NULL;
	protected $_sendheader = "";

	/* methods */
	public function __construct(){}

	public function __destruct(){}

	private function __clone(){}

	private function __toString()
	{
		return '';
	}

	public function setBody(){}

	public function appendBody(){}

	public function prependBody(){}

	public function clearBody(){}

	public function getBody(){}

	public function setHeader(){}

	protected function setAllHeaders(){}

	public function getHeader(){}

	public function clearHeaders(){}

	public function setRedirect(){}

	public function response(){}
}

abstract class Yaf_Controller_Abstract {

	/* constants */

	/* properties */
	public $actions = NULL;
	protected $_module = NULL;
	protected $_name = NULL;
	protected $_request = NULL;
	protected $_response = NULL;
	protected $_invoke_args = NULL;
	protected $_view = NULL;

	/* methods */
	final protected function render($tpl, array $parameters = NULL){}

	final protected function display($tpl, array $parameters = NULL){}

	final public function getRequest(){}

	final public function getResponse(){}

	final public function getModuleName(){}

	final public function getView(){}

	final public function initView(array $options = NULL){}

	final public function setViewpath($view_directory){}

	final public function getViewpath(){}

	final public function forward($module, $controller = NULL, $action = NULL, array $paramters = NULL){}

	final public function redirect($url){}

	final public function getInvokeArgs(){}

	final public function getInvokeArg($name){}

	final public function __construct(){}

	final private function __clone(){}
}

abstract class Yaf_Action_Abstract extends Yaf_Controller_Abstract {

	/* constants */

	/* properties */
	public $actions = NULL;
	protected $_module = NULL;
	protected $_name = NULL;
	protected $_request = NULL;
	protected $_response = NULL;
	protected $_invoke_args = NULL;
	protected $_view = NULL;
	protected $_controller = NULL;

	/* methods */
	abstract public function execute();

	public function getController(){}

	final protected function render($tpl, array $parameters = NULL){}

	final protected function display($tpl, array $parameters = NULL){}

	final public function getRequest(){}

	final public function getResponse(){}

	final public function getModuleName(){}

	final public function getView(){}

	final public function initView(array $options = NULL){}

	final public function setViewpath($view_directory){}

	final public function getViewpath(){}

	final public function forward($module, $controller = NULL, $action = NULL, array $paramters = NULL){}

	final public function redirect($url){}

	final public function getInvokeArgs(){}

	final public function getInvokeArg($name){}

	final public function __construct(){}

	final private function __clone(){}
}

abstract class Yaf_Config_Abstract {

	/* constants */

	/* properties */
	protected $_config = NULL;
	protected $_readonly = "1";

	/* methods */
	abstract public function get();

	abstract public function set();

	abstract public function readonly();

	abstract public function toArray();
}

final class Yaf_Config_Ini extends Yaf_Config_Abstract implements Iterator, Traversable, ArrayAccess, Countable {

	/* constants */

	/* properties */
	protected $_config = NULL;
	protected $_readonly = "1";

	/* methods */
	public function __construct($config_file, $section = NULL){}

	public function __isset($name){}

	public function get($name = NULL){}

	public function set($name, $value){}

	public function count(){}

	public function rewind(){}

	public function current(){}

	public function next(){}

	public function valid(){}

	public function key(){}

	public function toArray(){}

	public function readonly(){}

	public function offsetUnset($name){}

	public function offsetGet($name){}

	public function offsetExists($name){}

	public function offsetSet($name, $value){}

	public function __get($name = NULL){}

	public function __set($name, $value){}
}

final class Yaf_Config_Simple extends Yaf_Config_Abstract implements Iterator, Traversable, ArrayAccess, Countable {

	/* constants */

	/* properties */
	protected $_config = NULL;
	protected $_readonly = "";

	/* methods */
	public function __construct($config_file, $section = NULL){}

	public function __isset($name){}

	public function get($name = NULL){}

	public function set($name, $value){}

	public function count(){}

	public function offsetUnset($name){}

	public function rewind(){}

	public function current(){}

	public function next(){}

	public function valid(){}

	public function key(){}

	public function readonly(){}

	public function toArray(){}

	public function __set($name, $value){}

	public function __get($name = NULL){}

	public function offsetGet($name){}

	public function offsetExists($name){}

	public function offsetSet($name, $value){}
}

final class Yaf_View_Simple implements Yaf_View_Interface {

	/* constants */

	/* properties */
	protected $_tpl_vars = NULL;
	protected $_tpl_dir = NULL;
	protected $_options = NULL;

	/* methods */
	public function __construct($tempalte_dir, array $options = NULL){}

	public function __isset($name){}

	public function get($name = NULL){}

	public function assign($name, $value = NULL){}

	public function render($tpl, $tpl_vars = NULL){}

	//todo: change to eval
	public function eval1($tpl_str, $vars = NULL){}

	public function display($tpl, $tpl_vars = NULL){}

	public function assignRef($name, &$value){}

	public function clear($name = NULL){}

	public function setScriptPath($template_dir){}

	public function getScriptPath(){}

	public function __get($name = NULL){}

	public function __set($name, $value = NULL){}
}

final class Yaf_Router {

	/* constants */

	/* properties */
	protected $_routes = NULL;
	protected $_current = NULL;

	/* methods */
	public function __construct(){}

	public function addRoute(){}

	public function addConfig(){}

	public function route(){}

	public function getRoute(){}

	public function getRoutes(){}

	public function getCurrentRoute(){}
}

class Yaf_Route_Static implements Yaf_Router {

	/* constants */

	/* properties */

	/* methods */
	public function match($uri){}

	public function route($request){}

	public function __construct(){}

	public function addRoute(){}

	public function addConfig(){}

	public function getRoute(){}

	public function getRoutes(){}

	public function getCurrentRoute(){}
}

final class Yaf_Route_Simple implements Yaf_Route_Interface {

	/* constants */

	/* properties */
	protected $controller = NULL;
	protected $module = NULL;
	protected $action = NULL;

	/* methods */
	public function __construct($module_name, $controller_name, $action_name){}

	public function route($request){}
}

final class Yaf_Route_Supervar implements Yaf_Route_Interface {

	/* constants */

	/* properties */
	protected $_var_name = NULL;

	/* methods */
	public function __construct($supervar_name){}

	public function route($request){}
}

final class Yaf_Route_Rewrite extends Yaf_Route_Interface implements Yaf_Route_Interface {

	/* constants */

	/* properties */
	protected $_route = NULL;
	protected $_default = NULL;
	protected $_verify = NULL;

	/* methods */
	public function __construct($match, array $route, array $verify = NULL){}

	public function route($request){}
}

final class Yaf_Route_Regex extends Yaf_Route_Interface implements Yaf_Route_Interface {

	/* constants */

	/* properties */
	protected $_route = NULL;
	protected $_default = NULL;
	protected $_maps = NULL;
	protected $_verify = NULL;

	/* methods */
	public function __construct($match, array $route, array $map = NULL, array $verify = NULL){}

	public function route($request){}
}

final class Yaf_Route_Map implements Yaf_Route_Interface {

	/* constants */

	/* properties */
	protected $_ctl_router = "";
	protected $_delimeter = NULL;

	/* methods */
	public function __construct($controller_prefer = NULL, $delimiter = NULL){}

	public function route($request){}
}

abstract class Yaf_Plugin_Abstract {

	/* constants */

	/* properties */

	/* methods */
	public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}

	public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}

	public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}

	public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}

	public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}

	public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}

	public function preResponse(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}
}

final class Yaf_Registry {

	/* constants */

	/* properties */
	protected static $_instance = NULL;
	protected $_entries = NULL;

	/* methods */
	private function __construct(){}

	private function __clone(){}

	public static function get($name){}

	public static function has($name){}

	public static function set($name, $value){}

	public static function del($name){}
}

final class Yaf_Session implements Iterator, Traversable, ArrayAccess, Countable {

	/* constants */

	/* properties */
	protected static  $_instance = NULL;
	protected $_session = NULL;
	protected $_started = "";

	/* methods */
	private function __construct(){}

	private function __clone(){}

	private function __sleep(){}

	private function __wakeup(){}

	public static function getInstance(){}

	public function start(){}

	public function get($name){}

	public function has($name){}

	public function set($name, $value){}

	public function del($name){}

	public function count(){}

	public function rewind(){}

	public function next(){}

	public function current(){}

	public function key(){}

	public function valid(){}

	public function offsetGet($name){}

	public function offsetSet($name, $value){}

	public function offsetExists($name){}

	public function offsetUnset($name){}

	public function __get($name){}

	public function __isset($name){}

	public function __set($name, $value){}

	public function __unset($name){}
}

class Yaf_Exception extends Exception {

	/* constants */

	/* properties */
	protected $message = NULL;
	protected $code = "0";
	protected $file = NULL;
	protected $line = NULL;
	protected $previous = NULL;

	/* methods */
	public function __construct(){}

	public function getPrevious(){}

	final private function __clone(){}

	final public function getMessage(){}

	final public function getCode(){}

	final public function getFile(){}

	final public function getLine(){}

	final public function getTrace(){}

	final public function getTraceAsString(){}

	public function __toString(){}
}

class Yaf_Exception_StartupError extends Yaf_Exception {

	/* constants */

	/* properties */
	protected $message = NULL;
	protected $code = "0";
	protected $file = NULL;
	protected $line = NULL;
	protected $previous = NULL;

	/* methods */
	public function __construct(){}

	public function getPrevious(){}

	final private function __clone(){}

	final public function getMessage(){}

	final public function getCode(){}

	final public function getFile(){}

	final public function getLine(){}

	final public function getTrace(){}

	final public function getTraceAsString(){}

	public function __toString(){}
}

class Yaf_Exception_RouterFailed extends Yaf_Exception {

	/* constants */

	/* properties */
	protected $message = NULL;
	protected $code = "0";
	protected $file = NULL;
	protected $line = NULL;
	protected $previous = NULL;

	/* methods */
	public function __construct(){}

	public function getPrevious(){}

	final private function __clone(){}

	final public function getMessage(){}

	final public function getCode(){}

	final public function getFile(){}

	final public function getLine(){}

	final public function getTrace(){}

	final public function getTraceAsString(){}

	public function __toString(){}
}

class Yaf_Exception_DispatchFailed extends Yaf_Exception {

	/* constants */

	/* properties */
	protected $message = NULL;
	protected $code = "0";
	protected $file = NULL;
	protected $line = NULL;
	protected $previous = NULL;

	/* methods */
	public function __construct(){}

	public function getPrevious(){}

	final private function __clone(){}

	final public function getMessage(){}

	final public function getCode(){}

	final public function getFile(){}

	final public function getLine(){}

	final public function getTrace(){}

	final public function getTraceAsString(){}

	public function __toString(){}
}

class Yaf_Exception_LoadFailed extends Yaf_Exception {

	/* constants */

	/* properties */
	protected $message = NULL;
	protected $code = "0";
	protected $file = NULL;
	protected $line = NULL;
	protected $previous = NULL;

	/* methods */
	public function __construct(){}

	public function getPrevious(){}

	final private function __clone(){}

	final public function getMessage(){}

	final public function getCode(){}

	final public function getFile(){}

	final public function getLine(){}

	final public function getTrace(){}

	final public function getTraceAsString(){}

	public function __toString(){}
}

class Yaf_Exception_LoadFailed_Module extends Yaf_Exception_LoadFailed {

	/* constants */

	/* properties */
	protected $message = NULL;
	protected $code = "0";
	protected $file = NULL;
	protected $line = NULL;
	protected $previous = NULL;

	/* methods */
	public function __construct(){}

	public function getPrevious(){}

	final private function __clone(){}

	final public function getMessage(){}

	final public function getCode(){}

	final public function getFile(){}

	final public function getLine(){}

	final public function getTrace(){}

	final public function getTraceAsString(){}

	public function __toString(){}
}

class Yaf_Exception_LoadFailed_Controller extends Yaf_Exception_LoadFailed {

	/* constants */

	/* properties */
	protected $message = NULL;
	protected $code = "0";
	protected $file = NULL;
	protected $line = NULL;
	protected $previous = NULL;

	/* methods */
	public function __construct(){}

	public function getPrevious(){}

	final private function __clone(){}

	final public function getMessage(){}

	final public function getCode(){}

	final public function getFile(){}

	final public function getLine(){}

	final public function getTrace(){}

	final public function getTraceAsString(){}

	public function __toString(){}
}

class Yaf_Exception_LoadFailed_Action extends Yaf_Exception_LoadFailed {

	/* constants */

	/* properties */
	protected $message = NULL;
	protected $code = "0";
	protected $file = NULL;
	protected $line = NULL;
	protected $previous = NULL;

	/* methods */
	public function __construct(){}

	public function getPrevious(){}

	final private function __clone(){}

	final public function getMessage(){}

	final public function getCode(){}

	final public function getFile(){}

	final public function getLine(){}

	final public function getTrace(){}

	final public function getTraceAsString(){}

	public function __toString(){}
}

class Yaf_Exception_LoadFailed_View extends Yaf_Exception_LoadFailed {

	/* constants */

	/* properties */
	protected $message = NULL;
	protected $code = "0";
	protected $file = NULL;
	protected $line = NULL;
	protected $previous = NULL;

	/* methods */
	public function __construct(){}

	public function getPrevious(){}

	final private function __clone(){}

	final public function getMessage(){}

	final public function getCode(){}

	final public function getFile(){}

	final public function getLine(){}

	final public function getTrace(){}

	final public function getTraceAsString(){}

	public function __toString(){}
}

class Yaf_Exception_TypeError extends Yaf_Exception {

	/* constants */

	/* properties */
	protected $message = NULL;
	protected $code = "0";
	protected $file = NULL;
	protected $line = NULL;
	protected $previous = NULL;

	/* methods */
	public function __construct(){}

	public function getPrevious(){}

	final private function __clone(){}

	final public function getMessage(){}

	final public function getCode(){}

	final public function getFile(){}

	final public function getLine(){}

	final public function getTrace(){}

	final public function getTraceAsString(){}

	public function __toString(){}
}

