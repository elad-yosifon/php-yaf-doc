<?php
namespace Yaf ;

/**
 * <p><b>\Yaf\Loader</b> introduces a comprehensive autoloading solution for Yaf.</p>
 * <br/>
 * <p>The first time an instance of\Yaf\Application is retrieved, <b>\Yaf\Loader</b> will instance a singleton, and registers itself with spl_autoload. You retrieve an instance using the \Yaf\Loader::getInstance()</p>
 * <br/>
 * <p><b>\Yaf\Loader</b> attempt to load a class only one shot, if failed, depend on yaf.use_spl_autoload, if this config is On \Yaf\Loader::autoload() will return FALSE, thus give the chance to other autoload function. if it is Off (by default), \Yaf\Loader::autoload() will return TRUE, and more important is that a very useful warning will be triggered (very useful to find out why a class could not be loaded).</p>
 * <br/>
 * <b>Note:</b>
 * <p>Please keep yaf.use_spl_autoload Off unless there is some library have their own autoload mechanism and impossible to rewrite it.</p>
 * <br/>
 * <p>If you want <b>\Yaf\Loader</b> search some classes(libraries) in the local class directory(which is defined in application.ini, and by default, it is application.directory . "/library"), you should register the class prefix using the \Yaf\Loader::registerLocalNameSpace()</p>
 * @link http://www.php.net/manual/en/class.yaf-loader.php
 *
 */
class Loader {

	/**
	 * @var string
	 */
	protected $_local_ns;
	/**
	 * By default, this value is application.directory . "/library", you can change this either in the application.ini(application.library) or call to \Yaf\Loader::setLibraryPath()
	 * @var string
	 */
	protected $_library;
	/**
	 * @var string
	 */
	protected $_global_library;
	/**
	 * @var \Yaf\Loader
	 */
	protected static $_instance;

	/**
	 * @link http://www.php.net/manual/en/yaf-loader.construct.php
	 */
	private function __construct(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-loader.clone.php
	 */
	private function __clone(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-loader.sleep.php
	 */
	private function __sleep(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-loader.wakeup.php
	 */
	private function __wakeup(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-loader.autoload.php
	 *
	 * @param string $class_name
	 *
	 * @return bool
	 */
	public function autoload($class_name){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-loader.getinstance.php
	 *
	 * @param string $local_library_path
	 * @param string $global_library_path
	 *
	 * @return \Yaf\Loader
	 */
	public static function getInstance($local_library_path = null, $global_library_path = null){ }

	/**
	 * <p>Register local class prefix name, \Yaf\Loader search classes in two library directories, the one is configured via application.library.directory(in application.ini) which is called local library directory; the other is configured via yaf.library (in php.ini) which is called global library directory, since it can be shared by many applications in the same server.</p>
	 * <br/>
	 * <p>When an autoloading is triggered, \Yaf\Loader will determine which library directory should be searched in by examining the prefix name of the missed classname. If the prefix name is registered as a local namespace then look for it in local library directory, otherwise look for it in global library directory.</p>
	 * <br/>
	 * <b>Note:</b>
	 * <p>If yaf.library is not configured, then the global library directory is assumed to be the local library directory. in that case, all autoloading will look for local library directory. But if you want your Yaf application be strong, then always register your own classes as local classes.</p>
	 * @link http://www.php.net/manual/en/yaf-loader.registerlocalnamespace.php
	 *
	 * @param string|string[] $name_prefix a string or a array of class name prefix. all class prefix with these prefix will be loaded in local library path.
	 *
	 * @return bool
	 */
	public function registerLocalNamespace($name_prefix){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-loader.getlocalnamespace.php
	 *
	 * @return string
	 */
	public function getLocalNamespace(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-loader.clearlocalnamespace.php
	 */
	public function clearLocalNamespace(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-loader.islocalname.php
	 *
	 * @param string $class_name
	 *
	 * @return bool
	 */
	public function isLocalName($class_name){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-loader.import.php
	 *
	 * @param string $file
	 *
	 * @return bool
	 */
	public static function import($file){ }

	/**
	 * @since 2.1.4
	 * @link http://www.php.net/manual/en/yaf-loader.setlibrarypath.php
	 *
	 * @param string $directory
	 * @param bool $global
	 *
	 * @return \Yaf\Loader
	 */
	public function setLibraryPath($directory, $global = false){ }

	/**
	 * @since 2.1.4
	 * @link http://www.php.net/manual/en/yaf-loader.getlibrarypath.php
	 *
	 * @param bool $is_global
	 *
	 * @return string
	 */
	public function getLibraryPath($is_global = false){ }
}