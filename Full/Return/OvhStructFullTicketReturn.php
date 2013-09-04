<?php
/**
 * File for class OvhStructFullTicketReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructFullTicketReturn originally named fullTicketReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructFullTicketReturn extends OvhWsdlClass
{
	/**
	 * The ticketId
	 * @var int
	 */
	public $ticketId;
	/**
	 * The requestStatus
	 * @var string
	 */
	public $requestStatus;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The subject
	 * @var string
	 */
	public $subject;
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * The phone
	 * @var string
	 */
	public $phone;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The level
	 * @var string
	 */
	public $level;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The orderId
	 * @var int
	 */
	public $orderId;
	/**
	 * The componentType
	 * @var string
	 */
	public $componentType;
	/**
	 * The messages
	 * @var OvhStructMyArrayOfMessageDetailStructType
	 */
	public $messages;
	/**
	 * Constructor method for fullTicketReturn
	 * @see parent::__construct()
	 * @param int $_ticketId
	 * @param string $_requestStatus
	 * @param string $_status
	 * @param string $_subject
	 * @param string $_nic
	 * @param string $_phone
	 * @param string $_email
	 * @param string $_level
	 * @param string $_domain
	 * @param int $_orderId
	 * @param string $_componentType
	 * @param OvhStructMyArrayOfMessageDetailStructType $_messages
	 * @return OvhStructFullTicketReturn
	 */
	public function __construct($_ticketId = NULL,$_requestStatus = NULL,$_status = NULL,$_subject = NULL,$_nic = NULL,$_phone = NULL,$_email = NULL,$_level = NULL,$_domain = NULL,$_orderId = NULL,$_componentType = NULL,$_messages = NULL)
	{
		parent::__construct(array('ticketId'=>$_ticketId,'requestStatus'=>$_requestStatus,'status'=>$_status,'subject'=>$_subject,'nic'=>$_nic,'phone'=>$_phone,'email'=>$_email,'level'=>$_level,'domain'=>$_domain,'orderId'=>$_orderId,'componentType'=>$_componentType,'messages'=>($_messages instanceof OvhStructMyArrayOfMessageDetailStructType)?$_messages:new OvhStructMyArrayOfMessageDetailStructType($_messages)));
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
	 * Get requestStatus value
	 * @return string|null
	 */
	public function getRequestStatus()
	{
		return $this->requestStatus;
	}
	/**
	 * Set requestStatus value
	 * @param string $_requestStatus the requestStatus
	 * @return string
	 */
	public function setRequestStatus($_requestStatus)
	{
		return ($this->requestStatus = $_requestStatus);
	}
	/**
	 * Get status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param string $_status the status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get subject value
	 * @return string|null
	 */
	public function getSubject()
	{
		return $this->subject;
	}
	/**
	 * Set subject value
	 * @param string $_subject the subject
	 * @return string
	 */
	public function setSubject($_subject)
	{
		return ($this->subject = $_subject);
	}
	/**
	 * Get nic value
	 * @return string|null
	 */
	public function getNic()
	{
		return $this->nic;
	}
	/**
	 * Set nic value
	 * @param string $_nic the nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
	}
	/**
	 * Get phone value
	 * @return string|null
	 */
	public function getPhone()
	{
		return $this->phone;
	}
	/**
	 * Set phone value
	 * @param string $_phone the phone
	 * @return string
	 */
	public function setPhone($_phone)
	{
		return ($this->phone = $_phone);
	}
	/**
	 * Get email value
	 * @return string|null
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set email value
	 * @param string $_email the email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get level value
	 * @return string|null
	 */
	public function getLevel()
	{
		return $this->level;
	}
	/**
	 * Set level value
	 * @param string $_level the level
	 * @return string
	 */
	public function setLevel($_level)
	{
		return ($this->level = $_level);
	}
	/**
	 * Get domain value
	 * @return string|null
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set domain value
	 * @param string $_domain the domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get orderId value
	 * @return int|null
	 */
	public function getOrderId()
	{
		return $this->orderId;
	}
	/**
	 * Set orderId value
	 * @param int $_orderId the orderId
	 * @return int
	 */
	public function setOrderId($_orderId)
	{
		return ($this->orderId = $_orderId);
	}
	/**
	 * Get componentType value
	 * @return string|null
	 */
	public function getComponentType()
	{
		return $this->componentType;
	}
	/**
	 * Set componentType value
	 * @param string $_componentType the componentType
	 * @return string
	 */
	public function setComponentType($_componentType)
	{
		return ($this->componentType = $_componentType);
	}
	/**
	 * Get messages value
	 * @return OvhStructMyArrayOfMessageDetailStructType|null
	 */
	public function getMessages()
	{
		return $this->messages;
	}
	/**
	 * Set messages value
	 * @param OvhStructMyArrayOfMessageDetailStructType $_messages the messages
	 * @return OvhStructMyArrayOfMessageDetailStructType
	 */
	public function setMessages($_messages)
	{
		return ($this->messages = $_messages);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructFullTicketReturn
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