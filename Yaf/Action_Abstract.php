<?php
namespace Yaf ;

/**
 * @see Yaf_Action_Abstract
 */
abstract class Action_Abstract extends \Yaf\Controller_Abstract {
    /**
     * @see Yaf_Action_Abstract::$_controller
     */
    protected $_controller;
    /**
     * @see Yaf_Action_Abstract::execute()
     */
    abstract public function execute();
    /**
     * @see Yaf_Action_Abstract::getController()
     */
    public function getController(){ }
}