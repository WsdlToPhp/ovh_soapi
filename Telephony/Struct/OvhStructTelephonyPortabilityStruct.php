<?php
/**
 * File for class OvhStructTelephonyPortabilityStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyPortabilityStruct originally named telephonyPortabilityStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyPortabilityStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The customerFullName
	 * @var string
	 */
	public $customerFullName;
	/**
	 * The billingAccount
	 * @var string
	 */
	public $billingAccount;
	/**
	 * The callNumber
	 * @var string
	 */
	public $callNumber;
	/**
	 * The extraNumbers
	 * @var OvhStructMyArrayOfStringType
	 */
	public $extraNumbers;
	/**
	 * The planDate
	 * @var string
	 */
	public $planDate;
	/**
	 * The resellerOrder
	 * @var boolean
	 */
	public $resellerOrder;
	/**
	 * The customerMailSent
	 * @var boolean
	 */
	public $customerMailSent;
	/**
	 * The customerMailSendDate
	 * @var string
	 */
	public $customerMailSendDate;
	/**
	 * The customerMailReturned
	 * @var boolean
	 */
	public $customerMailReturned;
	/**
	 * The customerMailReturnDate
	 * @var string
	 */
	public $customerMailReturnDate;
	/**
	 * The customerMailTracking
	 * @var string
	 */
	public $customerMailTracking;
	/**
	 * The rangeHolderName
	 * @var string
	 */
	public $rangeHolderName;
	/**
	 * The losingCpName
	 * @var string
	 */
	public $losingCpName;
	/**
	 * The rhOrderSent
	 * @var boolean
	 */
	public $rhOrderSent;
	/**
	 * The rhOrderReceived
	 * @var boolean
	 */
	public $rhOrderReceived;
	/**
	 * The rhOrderAck
	 * @var string
	 */
	public $rhOrderAck;
	/**
	 * The rhOrderAckComment
	 * @var string
	 */
	public $rhOrderAckComment;
	/**
	 * The rhOrderPort
	 * @var string
	 */
	public $rhOrderPort;
	/**
	 * The rhOrderPortComment
	 * @var string
	 */
	public $rhOrderPortComment;
	/**
	 * The lcpOrderSent
	 * @var boolean
	 */
	public $lcpOrderSent;
	/**
	 * The lcpOrderReceived
	 * @var boolean
	 */
	public $lcpOrderReceived;
	/**
	 * The lcpOrderAck
	 * @var string
	 */
	public $lcpOrderAck;
	/**
	 * The lcpOrderAckComment
	 * @var string
	 */
	public $lcpOrderAckComment;
	/**
	 * The lcpOrderPort
	 * @var string
	 */
	public $lcpOrderPort;
	/**
	 * The lcpOrderPortComment
	 * @var string
	 */
	public $lcpOrderPortComment;
	/**
	 * Constructor method for telephonyPortabilityStruct
	 * @see parent::__construct()
	 * @param int $_id
	 * @param string $_customerFullName
	 * @param string $_billingAccount
	 * @param string $_callNumber
	 * @param OvhStructMyArrayOfStringType $_extraNumbers
	 * @param string $_planDate
	 * @param boolean $_resellerOrder
	 * @param boolean $_customerMailSent
	 * @param string $_customerMailSendDate
	 * @param boolean $_customerMailReturned
	 * @param string $_customerMailReturnDate
	 * @param string $_customerMailTracking
	 * @param string $_rangeHolderName
	 * @param string $_losingCpName
	 * @param boolean $_rhOrderSent
	 * @param boolean $_rhOrderReceived
	 * @param string $_rhOrderAck
	 * @param string $_rhOrderAckComment
	 * @param string $_rhOrderPort
	 * @param string $_rhOrderPortComment
	 * @param boolean $_lcpOrderSent
	 * @param boolean $_lcpOrderReceived
	 * @param string $_lcpOrderAck
	 * @param string $_lcpOrderAckComment
	 * @param string $_lcpOrderPort
	 * @param string $_lcpOrderPortComment
	 * @return OvhStructTelephonyPortabilityStruct
	 */
	public function __construct($_id = NULL,$_customerFullName = NULL,$_billingAccount = NULL,$_callNumber = NULL,$_extraNumbers = NULL,$_planDate = NULL,$_resellerOrder = NULL,$_customerMailSent = NULL,$_customerMailSendDate = NULL,$_customerMailReturned = NULL,$_customerMailReturnDate = NULL,$_customerMailTracking = NULL,$_rangeHolderName = NULL,$_losingCpName = NULL,$_rhOrderSent = NULL,$_rhOrderReceived = NULL,$_rhOrderAck = NULL,$_rhOrderAckComment = NULL,$_rhOrderPort = NULL,$_rhOrderPortComment = NULL,$_lcpOrderSent = NULL,$_lcpOrderReceived = NULL,$_lcpOrderAck = NULL,$_lcpOrderAckComment = NULL,$_lcpOrderPort = NULL,$_lcpOrderPortComment = NULL)
	{
		parent::__construct(array('id'=>$_id,'customerFullName'=>$_customerFullName,'billingAccount'=>$_billingAccount,'callNumber'=>$_callNumber,'extraNumbers'=>($_extraNumbers instanceof OvhStructMyArrayOfStringType)?$_extraNumbers:new OvhStructMyArrayOfStringType($_extraNumbers),'planDate'=>$_planDate,'resellerOrder'=>$_resellerOrder,'customerMailSent'=>$_customerMailSent,'customerMailSendDate'=>$_customerMailSendDate,'customerMailReturned'=>$_customerMailReturned,'customerMailReturnDate'=>$_customerMailReturnDate,'customerMailTracking'=>$_customerMailTracking,'rangeHolderName'=>$_rangeHolderName,'losingCpName'=>$_losingCpName,'rhOrderSent'=>$_rhOrderSent,'rhOrderReceived'=>$_rhOrderReceived,'rhOrderAck'=>$_rhOrderAck,'rhOrderAckComment'=>$_rhOrderAckComment,'rhOrderPort'=>$_rhOrderPort,'rhOrderPortComment'=>$_rhOrderPortComment,'lcpOrderSent'=>$_lcpOrderSent,'lcpOrderReceived'=>$_lcpOrderReceived,'lcpOrderAck'=>$_lcpOrderAck,'lcpOrderAckComment'=>$_lcpOrderAckComment,'lcpOrderPort'=>$_lcpOrderPort,'lcpOrderPortComment'=>$_lcpOrderPortComment));
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
	 * Get customerFullName value
	 * @return string|null
	 */
	public function getCustomerFullName()
	{
		return $this->customerFullName;
	}
	/**
	 * Set customerFullName value
	 * @param string $_customerFullName the customerFullName
	 * @return string
	 */
	public function setCustomerFullName($_customerFullName)
	{
		return ($this->customerFullName = $_customerFullName);
	}
	/**
	 * Get billingAccount value
	 * @return string|null
	 */
	public function getBillingAccount()
	{
		return $this->billingAccount;
	}
	/**
	 * Set billingAccount value
	 * @param string $_billingAccount the billingAccount
	 * @return string
	 */
	public function setBillingAccount($_billingAccount)
	{
		return ($this->billingAccount = $_billingAccount);
	}
	/**
	 * Get callNumber value
	 * @return string|null
	 */
	public function getCallNumber()
	{
		return $this->callNumber;
	}
	/**
	 * Set callNumber value
	 * @param string $_callNumber the callNumber
	 * @return string
	 */
	public function setCallNumber($_callNumber)
	{
		return ($this->callNumber = $_callNumber);
	}
	/**
	 * Get extraNumbers value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getExtraNumbers()
	{
		return $this->extraNumbers;
	}
	/**
	 * Set extraNumbers value
	 * @param OvhStructMyArrayOfStringType $_extraNumbers the extraNumbers
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setExtraNumbers($_extraNumbers)
	{
		return ($this->extraNumbers = $_extraNumbers);
	}
	/**
	 * Get planDate value
	 * @return string|null
	 */
	public function getPlanDate()
	{
		return $this->planDate;
	}
	/**
	 * Set planDate value
	 * @param string $_planDate the planDate
	 * @return string
	 */
	public function setPlanDate($_planDate)
	{
		return ($this->planDate = $_planDate);
	}
	/**
	 * Get resellerOrder value
	 * @return boolean|null
	 */
	public function getResellerOrder()
	{
		return $this->resellerOrder;
	}
	/**
	 * Set resellerOrder value
	 * @param boolean $_resellerOrder the resellerOrder
	 * @return boolean
	 */
	public function setResellerOrder($_resellerOrder)
	{
		return ($this->resellerOrder = $_resellerOrder);
	}
	/**
	 * Get customerMailSent value
	 * @return boolean|null
	 */
	public function getCustomerMailSent()
	{
		return $this->customerMailSent;
	}
	/**
	 * Set customerMailSent value
	 * @param boolean $_customerMailSent the customerMailSent
	 * @return boolean
	 */
	public function setCustomerMailSent($_customerMailSent)
	{
		return ($this->customerMailSent = $_customerMailSent);
	}
	/**
	 * Get customerMailSendDate value
	 * @return string|null
	 */
	public function getCustomerMailSendDate()
	{
		return $this->customerMailSendDate;
	}
	/**
	 * Set customerMailSendDate value
	 * @param string $_customerMailSendDate the customerMailSendDate
	 * @return string
	 */
	public function setCustomerMailSendDate($_customerMailSendDate)
	{
		return ($this->customerMailSendDate = $_customerMailSendDate);
	}
	/**
	 * Get customerMailReturned value
	 * @return boolean|null
	 */
	public function getCustomerMailReturned()
	{
		return $this->customerMailReturned;
	}
	/**
	 * Set customerMailReturned value
	 * @param boolean $_customerMailReturned the customerMailReturned
	 * @return boolean
	 */
	public function setCustomerMailReturned($_customerMailReturned)
	{
		return ($this->customerMailReturned = $_customerMailReturned);
	}
	/**
	 * Get customerMailReturnDate value
	 * @return string|null
	 */
	public function getCustomerMailReturnDate()
	{
		return $this->customerMailReturnDate;
	}
	/**
	 * Set customerMailReturnDate value
	 * @param string $_customerMailReturnDate the customerMailReturnDate
	 * @return string
	 */
	public function setCustomerMailReturnDate($_customerMailReturnDate)
	{
		return ($this->customerMailReturnDate = $_customerMailReturnDate);
	}
	/**
	 * Get customerMailTracking value
	 * @return string|null
	 */
	public function getCustomerMailTracking()
	{
		return $this->customerMailTracking;
	}
	/**
	 * Set customerMailTracking value
	 * @param string $_customerMailTracking the customerMailTracking
	 * @return string
	 */
	public function setCustomerMailTracking($_customerMailTracking)
	{
		return ($this->customerMailTracking = $_customerMailTracking);
	}
	/**
	 * Get rangeHolderName value
	 * @return string|null
	 */
	public function getRangeHolderName()
	{
		return $this->rangeHolderName;
	}
	/**
	 * Set rangeHolderName value
	 * @param string $_rangeHolderName the rangeHolderName
	 * @return string
	 */
	public function setRangeHolderName($_rangeHolderName)
	{
		return ($this->rangeHolderName = $_rangeHolderName);
	}
	/**
	 * Get losingCpName value
	 * @return string|null
	 */
	public function getLosingCpName()
	{
		return $this->losingCpName;
	}
	/**
	 * Set losingCpName value
	 * @param string $_losingCpName the losingCpName
	 * @return string
	 */
	public function setLosingCpName($_losingCpName)
	{
		return ($this->losingCpName = $_losingCpName);
	}
	/**
	 * Get rhOrderSent value
	 * @return boolean|null
	 */
	public function getRhOrderSent()
	{
		return $this->rhOrderSent;
	}
	/**
	 * Set rhOrderSent value
	 * @param boolean $_rhOrderSent the rhOrderSent
	 * @return boolean
	 */
	public function setRhOrderSent($_rhOrderSent)
	{
		return ($this->rhOrderSent = $_rhOrderSent);
	}
	/**
	 * Get rhOrderReceived value
	 * @return boolean|null
	 */
	public function getRhOrderReceived()
	{
		return $this->rhOrderReceived;
	}
	/**
	 * Set rhOrderReceived value
	 * @param boolean $_rhOrderReceived the rhOrderReceived
	 * @return boolean
	 */
	public function setRhOrderReceived($_rhOrderReceived)
	{
		return ($this->rhOrderReceived = $_rhOrderReceived);
	}
	/**
	 * Get rhOrderAck value
	 * @return string|null
	 */
	public function getRhOrderAck()
	{
		return $this->rhOrderAck;
	}
	/**
	 * Set rhOrderAck value
	 * @param string $_rhOrderAck the rhOrderAck
	 * @return string
	 */
	public function setRhOrderAck($_rhOrderAck)
	{
		return ($this->rhOrderAck = $_rhOrderAck);
	}
	/**
	 * Get rhOrderAckComment value
	 * @return string|null
	 */
	public function getRhOrderAckComment()
	{
		return $this->rhOrderAckComment;
	}
	/**
	 * Set rhOrderAckComment value
	 * @param string $_rhOrderAckComment the rhOrderAckComment
	 * @return string
	 */
	public function setRhOrderAckComment($_rhOrderAckComment)
	{
		return ($this->rhOrderAckComment = $_rhOrderAckComment);
	}
	/**
	 * Get rhOrderPort value
	 * @return string|null
	 */
	public function getRhOrderPort()
	{
		return $this->rhOrderPort;
	}
	/**
	 * Set rhOrderPort value
	 * @param string $_rhOrderPort the rhOrderPort
	 * @return string
	 */
	public function setRhOrderPort($_rhOrderPort)
	{
		return ($this->rhOrderPort = $_rhOrderPort);
	}
	/**
	 * Get rhOrderPortComment value
	 * @return string|null
	 */
	public function getRhOrderPortComment()
	{
		return $this->rhOrderPortComment;
	}
	/**
	 * Set rhOrderPortComment value
	 * @param string $_rhOrderPortComment the rhOrderPortComment
	 * @return string
	 */
	public function setRhOrderPortComment($_rhOrderPortComment)
	{
		return ($this->rhOrderPortComment = $_rhOrderPortComment);
	}
	/**
	 * Get lcpOrderSent value
	 * @return boolean|null
	 */
	public function getLcpOrderSent()
	{
		return $this->lcpOrderSent;
	}
	/**
	 * Set lcpOrderSent value
	 * @param boolean $_lcpOrderSent the lcpOrderSent
	 * @return boolean
	 */
	public function setLcpOrderSent($_lcpOrderSent)
	{
		return ($this->lcpOrderSent = $_lcpOrderSent);
	}
	/**
	 * Get lcpOrderReceived value
	 * @return boolean|null
	 */
	public function getLcpOrderReceived()
	{
		return $this->lcpOrderReceived;
	}
	/**
	 * Set lcpOrderReceived value
	 * @param boolean $_lcpOrderReceived the lcpOrderReceived
	 * @return boolean
	 */
	public function setLcpOrderReceived($_lcpOrderReceived)
	{
		return ($this->lcpOrderReceived = $_lcpOrderReceived);
	}
	/**
	 * Get lcpOrderAck value
	 * @return string|null
	 */
	public function getLcpOrderAck()
	{
		return $this->lcpOrderAck;
	}
	/**
	 * Set lcpOrderAck value
	 * @param string $_lcpOrderAck the lcpOrderAck
	 * @return string
	 */
	public function setLcpOrderAck($_lcpOrderAck)
	{
		return ($this->lcpOrderAck = $_lcpOrderAck);
	}
	/**
	 * Get lcpOrderAckComment value
	 * @return string|null
	 */
	public function getLcpOrderAckComment()
	{
		return $this->lcpOrderAckComment;
	}
	/**
	 * Set lcpOrderAckComment value
	 * @param string $_lcpOrderAckComment the lcpOrderAckComment
	 * @return string
	 */
	public function setLcpOrderAckComment($_lcpOrderAckComment)
	{
		return ($this->lcpOrderAckComment = $_lcpOrderAckComment);
	}
	/**
	 * Get lcpOrderPort value
	 * @return string|null
	 */
	public function getLcpOrderPort()
	{
		return $this->lcpOrderPort;
	}
	/**
	 * Set lcpOrderPort value
	 * @param string $_lcpOrderPort the lcpOrderPort
	 * @return string
	 */
	public function setLcpOrderPort($_lcpOrderPort)
	{
		return ($this->lcpOrderPort = $_lcpOrderPort);
	}
	/**
	 * Get lcpOrderPortComment value
	 * @return string|null
	 */
	public function getLcpOrderPortComment()
	{
		return $this->lcpOrderPortComment;
	}
	/**
	 * Set lcpOrderPortComment value
	 * @param string $_lcpOrderPortComment the lcpOrderPortComment
	 * @return string
	 */
	public function setLcpOrderPortComment($_lcpOrderPortComment)
	{
		return ($this->lcpOrderPortComment = $_lcpOrderPortComment);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyPortabilityStruct
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