<?php
namespace Yaf ;

/**
 * <p>Plugins allow for easy extensibility and customization of the framework.</p>
 * <br/>
 * <p>Plugins are classes. The actual class definition will vary based on the component -- you may need to implement this interface, but the fact remains that the plugin is itself a class.</p>
 * <br/>
 * <p>A plugin could be loaded into Yaf by using\Yaf\Dispatcher::registerPlugin(), after registered, All the methods which the plugin implemented according to this interface, will be called at the proper time.</p>
 * @link http://www.php.net/manual/en/class.yaf-plugin-abstract.php
 */
abstract class Plugin_Abstract {

	/**
	 * This is the earliest hook in Yaf plugin hook system, if a custom plugin implement this method, then it will be called before routing a request.
	 *
	 * @link http://www.php.net/manual/en/yaf-plugin-abstract.routerstartup.php
	 *
	 * @param \Yaf\Request_Abstract $request
	 * @param \Yaf\Response_Abstract $response
	 *
	 * @return bool true
	 */
	public function routerStartup(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response){ }

	/**
	 * This hook will be trigged after the route process finished, this hook is usually used for login check.
	 *
	 * @link http://www.php.net/manual/en/yaf-plugin-abstract.routershutdown.php
	 *
	 * @param \Yaf\Request_Abstract $request
	 * @param \Yaf\Response_Abstract $response
	 *
	 * @return bool true
	 */
	public function routerShutdown(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-plugin-abstract.dispatchloopstartup.php
	 *
	 * @param \Yaf\Request_Abstract $request
	 * @param \Yaf\Response_Abstract $response
	 *
	 * @return bool true
	 */
	public function dispatchLoopStartup(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response){ }

	/**
	 * This is the latest hook in Yaf plugin hook system, if a custom plugin implement this method, then it will be called after the dispatch loop finished.
	 *
	 * @link http://www.php.net/manual/en/yaf-plugin-abstract.dispatchloopshutdown.php
	 *
	 * @param \Yaf\Request_Abstract $request
	 * @param \Yaf\Response_Abstract $response
	 *
	 * @return bool true
	 */
	public function dispatchLoopShutdown(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-plugin-abstract.predispatch.php
	 *
	 * @param \Yaf\Request_Abstract $request
	 * @param \Yaf\Response_Abstract $response
	 *
	 * @return bool true
	 */
	public function preDispatch(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-plugin-abstract.postdispatch.php
	 *
	 * @param \Yaf\Request_Abstract $request
	 * @param \Yaf\Response_Abstract $response
	 *
	 * @return bool true
	 */
	public function postDispatch(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-plugin-abstract.preresponse.php
	 *
	 * @param \Yaf\Request_Abstract $request
	 * @param \Yaf\Response_Abstract $response
	 *
	 * @return bool true
	 */
	public function preResponse(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response){ }
}