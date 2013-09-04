<?php
/**
 * File for class OvhStructSupportSendMessageReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSupportSendMessageReturn originally named supportSendMessageReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSupportSendMessageReturn extends OvhWsdlClass
{
	/**
	 * The threadId
	 * @var int
	 */
	public $threadId;
	/**
	 * The messageId
	 * @var int
	 */
	public $messageId;
	/**
	 * The dateTime
	 * @var string
	 */
	public $dateTime;
	/**
	 * Constructor method for supportSendMessageReturn
	 * @see parent::__construct()
	 * @param int $_threadId
	 * @param int $_messageId
	 * @param string $_dateTime
	 * @return OvhStructSupportSendMessageReturn
	 */
	public function __construct($_threadId = NULL,$_messageId = NULL,$_dateTime = NULL)
	{
		parent::__construct(array('threadId'=>$_threadId,'messageId'=>$_messageId,'dateTime'=>$_dateTime));
	}
	/**
	 * Get threadId value
	 * @return int|null
	 */
	public function getThreadId()
	{
		return $this->threadId;
	}
	/**
	 * Set threadId value
	 * @param int $_threadId the threadId
	 * @return int
	 */
	public function setThreadId($_threadId)
	{
		return ($this->threadId = $_threadId);
	}
	/**
	 * Get messageId value
	 * @return int|null
	 */
	public function getMessageId()
	{
		return $this->messageId;
	}
	/**
	 * Set messageId value
	 * @param int $_messageId the messageId
	 * @return int
	 */
	public function setMessageId($_messageId)
	{
		return ($this->messageId = $_messageId);
	}
	/**
	 * Get dateTime value
	 * @return string|null
	 */
	public function getDateTime()
	{
		return $this->dateTime;
	}
	/**
	 * Set dateTime value
	 * @param string $_dateTime the dateTime
	 * @return string
	 */
	public function setDateTime($_dateTime)
	{
		return ($this->dateTime = $_dateTime);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSupportSendMessageReturn
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>