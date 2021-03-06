<?php
/**
 * File for class OvhStructTicketAnswer
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTicketAnswer originally named ticketAnswer
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTicketAnswer extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The ticketId
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $ticketId;
	/**
	 * The message
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $message;
	/**
	 * Constructor method for ticketAnswer
	 * @see parent::__construct()
	 * @param string $_session
	 * @param int $_ticketId
	 * @param string $_message
	 * @return OvhStructTicketAnswer
	 */
	public function __construct($_session = NULL,$_ticketId = NULL,$_message = NULL)
	{
		parent::__construct(array('session'=>$_session,'ticketId'=>$_ticketId,'message'=>$_message));
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
	 * Get ticketId value
	 * @return int|null
	 */
	public function getTicketId()
	{
		return $this->ticketId;
	}
	/**
	 * Set ticketId value
	 * @param int $_ticketId the ticketId
	 * @return int
	 */
	public function setTicketId($_ticketId)
	{
		return ($this->ticketId = $_ticketId);
	}
	/**
	 * Get message value
	 * @return string|null
	 */
	public function getMessage()
	{
		return $this->message;
	}
	/**
	 * Set message value
	 * @param string $_message the message
	 * @return string
	 */
	public function setMessage($_message)
	{
		return ($this->message = $_message);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTicketAnswer
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