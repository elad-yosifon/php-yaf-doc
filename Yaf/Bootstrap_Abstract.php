<?php
namespace Yaf ;

/**
 * <p>Bootstrap is a mechanism used to do some initial config before a Application run.<br/><br/></p>
 * <p>User may define their own Bootstrap class by inheriting <b>\Yaf\Bootstrap_Abstract</b><br/><br/></p>
 * <p>Any method declared in Bootstrap class with leading "_init", will be called by\Yaf\Application::bootstrap() one by one according to their defined order<br/><br/></p>
 *
 * @link http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 */
abstract class Bootstrap_Abstract {

}