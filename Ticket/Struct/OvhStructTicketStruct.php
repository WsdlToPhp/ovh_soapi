<?php
/**
 * File for class OvhStructTicketStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTicketStruct originally named ticketStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTicketStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The creationDate
	 * @var string
	 */
	public $creationDate;
	/**
	 * The requestStatus
	 * @var string
	 */
	public $requestStatus;
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
	 * Constructor method for ticketStruct
	 * @see parent::__construct()
	 * @param int $_id
	 * @param string $_creationDate
	 * @param string $_requestStatus
	 * @param string $_subject
	 * @param string $_nic
	 * @param string $_level
	 * @param string $_domain
	 * @param int $_orderId
	 * @param string $_componentType
	 * @return OvhStructTicketStruct
	 */
	public function __construct($_id = NULL,$_creationDate = NULL,$_requestStatus = NULL,$_subject = NULL,$_nic = NULL,$_level = NULL,$_domain = NULL,$_orderId = NULL,$_componentType = NULL)
	{
		parent::__construct(array('id'=>$_id,'creationDate'=>$_creationDate,'requestStatus'=>$_requestStatus,'subject'=>$_subject,'nic'=>$_nic,'level'=>$_level,'domain'=>$_domain,'orderId'=>$_orderId,'componentType'=>$_componentType));
	}
	/**
	 * Get id value
	 * @return int|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param int $_id the id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get creationDate value
	 * @return string|null
	 */
	public function getCreationDate()
	{
		return $this->creationDate;
	}
	/**
	 * Set creationDate value
	 * @param string $_creationDate the creationDate
	 * @return string
	 */
	public function setCreationDate($_creationDate)
	{
		return ($this->creationDate = $_creationDate);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTicketStruct
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