<?php
namespace Yaf ;

/**
 * <p>A action can be defined in a separate file in Yaf(see \Yaf\Controller_Abstract). that is a action method can also be a <b>\Yaf\Action_Abstract</b> class.</P>
 * <br/>
 * <p>Since there should be a entry point which can be called by Yaf (as of PHP 5.3, there is a new magic method __invoke, but Yaf is not only works with PHP 5.3+, Yaf choose another magic method execute), you must implement the abstract method \Yaf\Action_Abstract::execute() in your custom action class.</p>
 *
 * @link http://www.php.net/manual/en/class.yaf-action-abstract.php
 *
 */
abstract class Action_Abstract extends \Yaf\Controller_Abstract {

	/**
	 * @var \Yaf\Controller_Abstract
	 */
	protected $_controller;

	/**
	 * <p>user should always define this method for a action, this is the entry point of an action. <b>\Yaf\Action_Abstract::execute()</b> may have arguments.</p>
	 * <br/>
	 * <b>Note:</b>
	 * <p>The value retrieved from the request is not safe. you should do some filtering work before you use it.</p>
	 * @link http://www.php.net/manual/en/yaf-action-abstract.execute.php
	 *
	 * @param mixed ... unlimited number of arguments
	 * @return mixed
	 */
	abstract public function execute();

	/**
	 * retrieve current controller object.
	 *
	 * @link http://www.php.net/manual/en/yaf-action-abstract.getcontroller.php
	 *
	 * @return \Yaf\Controller_Abstract
	 */
	public function getController(){ }
}