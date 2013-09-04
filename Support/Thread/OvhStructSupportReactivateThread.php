<?php
/**
 * File for class OvhStructSupportReactivateThread
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSupportReactivateThread originally named supportReactivateThread
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSupportReactivateThread extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The threadId
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $threadId;
	/**
	 * Constructor method for supportReactivateThread
	 * @see parent::__construct()
	 * @param string $_session
	 * @param int $_threadId
	 * @return OvhStructSupportReactivateThread
	 */
	public function __construct($_session = NULL,$_threadId = NULL)
	{
		parent::__construct(array('session'=>$_session,'threadId'=>$_threadId));
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSupportReactivateThread
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