<?php
namespace Yaf\View ;

/**
 * @see Yaf_View_Simple
 */
class Simple implements \Yaf\View_Interface {
    /**
     * @see Yaf_View_Simple::$_tpl_dir
     */
    protected $_tpl_dir;
    /**
     * @see Yaf_View_Simple::$_tpl_vars
     */
    protected $_tpl_vars;
    /**
     * @see Yaf_View_Simple::$_options
     */
    protected $_options;
    /**
     * @see Yaf_View_Simple::__construct()
     */
    final public function __construct($template_dir, array $options = null){ }
    /**
     * @see Yaf_View_Simple::__isset()
     */
    public function __isset($name){ }
    /**
     * @see Yaf_View_Simple::assign()
     */
    public function assign($name, $value = null){ }
    /**
     * @see Yaf_View_Simple::render()
     */
    public function render($tpl, array $tpl_vars = null){ }
    /**
     * @see Yaf_View_Simple::display()
     */
    public function display($tpl, array $tpl_vars = null){ }
    /**
     * @see Yaf_View_Simple::assignRef()
     */
    public function assignRef($name, &$value){ }
    /**
     * @see Yaf_View_Simple::clear()
     */
    public function clear($name = null){ }
    /**
     * @see Yaf_View_Simple::setScriptPath()
     */
    public function setScriptPath($template_dir){ }
    /**
     * @see Yaf_View_Simple::getScriptPath()
     */
    public function getScriptPath(){ }
    /**
     * @see Yaf_View_Simple::__get()
     */
    public function __get($name = null){ }
    /**
     * @see Yaf_View_Simple::__set()
     */
    public function __set($name, $value = null){ }
}