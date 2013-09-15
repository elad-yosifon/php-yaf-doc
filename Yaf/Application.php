<?php
namespace Yaf ;

/**
 * \Yaf\Application provides a bootstrapping facility for applications which provides reusable resources, common- and module-based bootstrap classes and dependency checking.
 * <br/>
 * <b>Note:</b>
 * <p>
 * \Yaf\Application implements the singleton pattern, and \Yaf\Application can not be serialized or un-serialized which will cause problem when you try to use PHPUnit to write some test case for Yaf.<br/>
 * You may use &#64;backupGlobals annotation of PHPUnit to control the backup and restore operations for global variables. thus can solve this problem.
 * </p>
 * @link http://www.php.net/manual/en/class.yaf-application.php
 */
final class Application {

	/**
	 * @var \Yaf\Application
	 */
	protected static $_app;
	/**
	 * @var\Yaf\Config_Abstract
	 */
	protected $config;
	/**
	 * @var\Yaf\Dispatcher
	 */
	protected $dispatcher;
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
	 * @since 2.1.2
	 * @var int
	 */
	protected $_err_no = 0;
	/**
	 * @since 2.1.2
	 * @var string
	 */
	protected $_err_msg = "";

	/**
	 * @link http://www.php.net/manual/en/yaf-application.construct.php
	 *
	 * @param string|array $config A ini config file path, or a config array
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
	 *    ;this one should always be defined, and have no default value<br/>
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
	 *    ap.dispatcher.defaultModule=Index<br/>
	 *    ap.dispatcher.defaultController=Index<br/>
	 *    ap.dispatcher.defaultAction=index<br/><br/>
	 * </p>
	 * <p>
	 *    ;defined modules<br/>
	 *    ap.modules=Index
	 * </p>
	 * @param string $envrion Which section will be loaded as the final config
	 *
	 * @throws\Yaf\Exception\TypeError|\Yaf\Exception\StartupError
	 */
	public function __construct($config, $envrion = null){ }

	/**
	 * Run a \Yaf\Application, let the \Yaf\Application accept a request, and route the request, dispatch to controller/action, and render response.
	 * return response to client finally.
	 *
	 * @link http://www.php.net/manual/en/yaf-application.run.php
	 * @throws\Yaf\Exception\StartupError
	 */
	public function run(){ }

	/**
	 * This method is typically used to run \Yaf\Application in a crontab work.
	 * Make the crontab work can also use the autoloader and Bootstrap mechanism.
	 *
	 * @link http://www.php.net/manual/en/yaf-application.execute.php
	 *
	 * @param callable $entry a valid callback
	 * @param string $_ parameters will pass to the callback
	 */
	public function execute(callable $entry, $_ = "..."){ }

	/**
	 * Retrieve the \Yaf\Application instance, alternatively, we also could use\Yaf\Dispatcher::getApplication().
	 *
	 * @link http://www.php.net/manual/en/yaf-application.app.php
	 *
	 * @return \Yaf\Application|NULL an \Yaf\Application instance, if no \Yaf\Application initialized before, NULL will be returned.
	 */
	public static function app(){ }

	/**
	 * Retrieve environ which was defined in yaf.environ which has a default value "product".
	 *
	 * @link http://www.php.net/manual/en/yaf-application.environ.php
	 *
	 * @return string
	 */
	public function environ(){ }

	/**
	 * Run a Bootstrap, all the methods defined in the Bootstrap and named with prefix "_init" will be called according to their declaration order, if the parameter bootstrap is not supplied, Yaf will look for a Bootstrap under application.directory.
	 *
	 * @link http://www.php.net/manual/en/yaf-application.bootstrap.php
	 *
	 * @param \Yaf\Bootstrap_Abstract $bootstrap A \Yaf\Bootstrap_Abstract instance
	 * @return \Yaf\Application
	 */
	public function bootstrap(\Yaf\Bootstrap_Abstract $bootstrap = null){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-application.getconfig.php
	 *
	 * @return\Yaf\Config_Abstract
	 */
	public function getConfig(){ }

	/**
	 * Get the modules list defined in config, if no one defined, there will always be a module named "Index".
	 *
	 * @link http://www.php.net/manual/en/yaf-application.getmodules.php
	 *
	 * @return array
	 */
	public function getModules(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-application.getdispatcher.php
	 *
	 * @return\Yaf\Dispatcher
	 */
	public function getDispatcher(){ }

	/**
	 * Change the application directory
	 *
	 * @since 2.1.4
	 * @link http://www.php.net/manual/en/yaf-application.setappdirectory.php
	 *
	 * @param string $directory
	 * @return \Yaf\Application
	 */
	public function setAppDirectory($directory){ }

	/**
	 * @since 2.1.4
	 * @link http://www.php.net/manual/en/yaf-application.getappdirectory.php
	 *
	 * @return string
	 */
	public function getAppDirectory(){ }

	/**
	 * @since 2.1.2
	 * @link http://www.php.net/manual/en/yaf-application.getlasterrorno.php
	 *
	 * @return int
	 */
	public function getLastErrorNo(){ }

	/**
	 * @since 2.1.2
	 * @link http://www.php.net/manual/en/yaf-application.getlasterrormsg.php
	 *
	 * @return string
	 */
	public function getLastErrorMsg(){ }

	/**
	 *
	 * @since 2.1.2
	 * @link http://www.php.net/manual/en/yaf-application.clearlasterror.php
	 */
	public function clearLastError(){ }

	/**
	 *
	 * @link http://www.php.net/manual/en/yaf-application.destruct.php
	 */
	public function __destruct(){ }

	/**
	 *
	 * @link http://www.php.net/manual/en/yaf-application.clone.php
	 */
	private function __clone(){ }

	/**
	 *
	 * @link http://www.php.net/manual/en/yaf-application.sleep.php
	 */
	private function __sleep(){ }

	/**
	 *
	 * @link http://www.php.net/manual/en/yaf-application.wakeup.php
	 */
	private function __wakeup(){ }
}