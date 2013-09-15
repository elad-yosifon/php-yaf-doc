<?php
namespace Yaf ;

/**
 * @see Yaf_View_Interface
 */
interface View_Interface {
    /**
     * @see Yaf_View_Interface::assign()
     */
    function assign($name, $value);
    /**
     * @see Yaf_View_Interface::display()
     */
    function display($tpl, array $tpl_vars = null);
    /**
     * @see Yaf_View_Interface::getScriptPath()
     */
    function getScriptPath();
    /**
     * @see Yaf_View_Interface::render()
     */
    function render($tpl, array $tpl_vars = null);
    /**
     * @see Yaf_View_Interface::setScriptPath()
     */
    function setScriptPath($template_dir);
}