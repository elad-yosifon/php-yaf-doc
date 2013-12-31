<?php
namespace Yaf\View ;

/**
 * <b>\Yaf\View\Simple</b> is the built-in template engine in Yaf, it is a simple but fast template engine, and only support PHP script template.
 * @link http://www.php.net/manual/en/class.yaf-view-simple.php
 *
 * @method void|bool eval(string $tpl_str, array $vars = null) <p>Render a string template and return the result.</p>
 *
 * @link http://www.php.net/manual/en/yaf-view-simple.eval.php
 *
 * @param string $tpl_str string template
 * @param array $vars
 *
 * @return void|bool return FALSE on failure
 */
class Simple implements \Yaf\View_Interface {

	/**
	 * @var string
	 */
	protected $_tpl_dir;
	/**
	 * @var array
	 */
	protected $_tpl_vars;
	/**
	 * @var array
	 */
	protected $_options;

	/**
	 * @link http://www.php.net/manual/en/yaf-view-simple.construct.php
	 *
	 * @param string $template_dir The base directory of the templates, by default, it is APPLICATION . "/views" for Yaf.
	 * @param array $options <p>Options for the engine, as of Yaf 2.1.13, you can use short tag
	 * "<?=$var?>" in your template(regardless of "short_open_tag"),
	 * so comes a option named "short_tag",  you can switch this off
	 * to prevent use short_tag in template.
	 *
	 * @throws\Yaf\Exception\TypeError
	 */
	final public function __construct($template_dir, array $options = null){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-view-simple.isset.php
	 *
	 * @param string $name
	 */
	public function __isset($name){ }

	/**
	 * assign variable to view engine
	 *
	 * @link http://www.php.net/manual/en/yaf-view-simple.assign.php
	 *
	 * @param string|array $name A string or an array.<br/>if is string, then the next argument $value is required.
	 * @param mixed $value mixed value
	 * @return \Yaf\View\Simple
	 */
	public function assign($name, $value = null){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-view-simple.render.php
	 *
	 * @param string $tpl
	 * @param array $tpl_vars
	 *
	 * @throws\Yaf\Exception\LoadFailed\View
	 *
	 * @return string|void
	 */
	public function render($tpl, array $tpl_vars = null){ }

	/**
	 * <p>Render a template and display the result instantly.</p>
	 *
	 * @link http://www.php.net/manual/en/yaf-view-simple.display.php
	 *
	 * @param string $tpl
	 * @param array $tpl_vars
	 *
	 * @throws\Yaf\Exception\LoadFailed\View
	 *
	 * @return bool
	 */
	public function display($tpl, array $tpl_vars = null){ }

	/**
	 * <p>unlike \Yaf\View\Simple::assign(), this method assign a ref value to engine.</p>
	 * @link http://www.php.net/manual/en/yaf-view-simple.assignref.php
	 *
	 * @param string $name A string name which will be used to access the value in the template.
	 * @param mixed $value mixed value
	 *
	 * @return \Yaf\View\Simple
	 */
	public function assignRef($name, &$value){ }

	/**
	 * clear assigned variable
	 * @link http://www.php.net/manual/en/yaf-view-simple.clear.php
	 *
	 * @param string $name assigned variable name. <br/>if empty, will clear all assigned variables.
	 *
	 * @return \Yaf\View\Simple
	 */
	public function clear($name = null){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-view-simple.setscriptpath.php
	 *
	 * @param string $template_dir
	 *
	 * @return \Yaf\View\Simple
	 */
	public function setScriptPath($template_dir){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-view-simple.getscriptpath.php
	 *
	 * @return string
	 */
	public function getScriptPath(){ }

	/**
	 * <p>Retrieve assigned variable</p>
	 * <br/>
	 * <b>Note:</b>
	 * <p>$name parameter can be empty since 2.1.11</p>
	 * @link http://www.php.net/manual/en/yaf-view-simple.get.php
	 *
	 * @param null $name <p>the assigned variable name</p>
	 * <br/>
	 * <p>if this is empty, all assigned variables will be returned</p>
	 *
	 * @return mixed
	 */
	public function __get($name = null){ }

	/**
	 * <p>This is a alternative and easier way to \Yaf\View\Simple::assign().</p>
	 *
	 * @link http://www.php.net/manual/en/yaf-view-simple.set.php
	 *
	 * @param string $name A string value name.
	 * @param mixed $value mixed value
	 */
	public function __set($name, $value = null){ }
}