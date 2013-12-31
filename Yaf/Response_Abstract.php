<?php
namespace Yaf ;

/**
 * @link http://www.php.net/manual/en/class.yaf-response-abstract.php
 */
abstract class Response_Abstract {

	const DEFAULT_BODY = "content";
	/**
	 * @var string
	 */
	protected $_header;
	/**
	 * @var string
	 */
	protected $_body;
	/**
	 * @var bool
	 */
	protected $_sendheader;

	/**
	 * @link http://www.php.net/manual/en/yaf-response-abstract.construct.php
	 */
	public function __construct(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-response-abstract.destruct.php
	 */
	public function __destruct(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-response-abstract.clone.php
	 */
	private function __clone(){ }

	/**
	 * @link http://www.php.net/manual/en/yaf-response-abstract.tostring.php
	 */
	private function __toString(){ }

	/**
	 * Set content to response
	 *
	 * @link http://www.php.net/manual/en/yaf-response-abstract.setbody.php
	 *
	 * @param string $content content string
	 * @param string $key <p>the content key, you can set a content with a key, if you don't specific, then \Yaf\Response_Abstract::DEFAULT_BODY will be used</p>
	 * <br/>
	 * <b>Note:</b>
	 * <p>this parameter is introduced as of 2.2.0</p>
	 *
	 * @return bool
	 */
	public function setBody($content, $key = self::DEFAULT_BODY){ }

	/**
	 * append a content to a exists content block
	 *
	 * @link http://www.php.net/manual/en/yaf-response-abstract.appendbody.php
	 *
	 * @param string $content content string
	 * @param string $key <p>the content key, you can set a content with a key, if you don't specific, then \Yaf\Response_Abstract::DEFAULT_BODY will be used</p>
	 * <br/>
	 * <b>Note:</b>
	 * <p>this parameter is introduced as of 2.2.0</p>
	 *
	 * @return bool
	 */
	public function appendBody($content, $key = self::DEFAULT_BODY){ }

	/**
	 * prepend a content to a exists content block
	 *
	 * @link http://www.php.net/manual/en/yaf-response-abstract.prependbody.php
	 *
	 * @param string $content content string
	 * @param string $key <p>the content key, you can set a content with a key, if you don't specific, then \Yaf\Response_Abstract::DEFAULT_BODY will be used</p>
	 * <br/>
	 * <b>Note:</b>
	 * <p>this parameter is introduced as of 2.2.0</p>
	 *
	 * @return bool
	 */
	public function prependBody($content, $key = self::DEFAULT_BODY){ }

	/**
	 * Clear existing content
	 *
	 * @link http://www.php.net/manual/en/yaf-response-abstract.clearbody.php
	 *
	 * @param string $key <p>the content key, you can set a content with a key, if you don't specific, then \Yaf\Response_Abstract::DEFAULT_BODY will be used</p>
	 * <br/>
	 * <b>Note:</b>
	 * <p>this parameter is introduced as of 2.2.0</p>
	 *
	 * @return bool
	 */
	public function clearBody($key = self::DEFAULT_BODY){ }

	/**
	 * Retrieve an existing content
	 *
	 * @link http://www.php.net/manual/en/yaf-response-abstract.getbody.php
	 *
	 * @param null|string $key <p>the content key, if you don't specific, then \Yaf\Response_Abstract::DEFAULT_BODY will be used. if you pass in a NULL, then all contents will be returned as a array</p>
	 * <br/>
	 * <b>Note:</b>
	 * <p>this parameter is introduced as of 2.2.0</p>
	 *
	 * @return mixed
	 */
	public function getBody($key = self::DEFAULT_BODY){ }
}