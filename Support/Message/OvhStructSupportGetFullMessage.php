<?php
/**
 * File for class OvhStructSupportGetFullMessage
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSupportGetFullMessage originally named supportGetFullMessage
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSupportGetFullMessage extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The messageId
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $messageId;
	/**
	 * Constructor method for supportGetFullMessage
	 * @see parent::__construct()
	 * @param string $_session
	 * @param int $_messageId
	 * @return OvhStructSupportGetFullMessage
	 */
	public function __construct($_session = NULL,$_messageId = NULL)
	{
		parent::__construct(array('session'=>$_session,'messageId'=>$_messageId));
	}
	/**
	 * Get session value
	 * @return string|null
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set session value
	 * @param string $_session the session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSupportGetFullMessage
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