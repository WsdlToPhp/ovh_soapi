<?php
/**
 * File for class OvhStructTelephonySmsMultiSend
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsMultiSend originally named telephonySmsMultiSend
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsMultiSend extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The smsAccount
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The numberFrom
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $numberFrom;
	/**
	 * The numberTo
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $numberTo;
	/**
	 * The message
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $message;
	/**
	 * The smsValidity
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $smsValidity;
	/**
	 * The smsClass
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $smsClass;
	/**
	 * The smsDeferred
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $smsDeferred;
	/**
	 * The smsPriority
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $smsPriority;
	/**
	 * The smsCoding
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $smsCoding;
	/**
	 * The tag
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $tag;
	/**
	 * The numberToCsv
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $numberToCsv;
	/**
	 * The noStop
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $noStop;
	/**
	 * Constructor method for telephonySmsMultiSend
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_smsAccount
	 * @param string $_numberFrom
	 * @param OvhStructMyArrayOfStringType $_numberTo
	 * @param string $_message
	 * @param int $_smsValidity
	 * @param int $_smsClass
	 * @param int $_smsDeferred
	 * @param int $_smsPriority
	 * @param int $_smsCoding
	 * @param string $_tag
	 * @param string $_numberToCsv
	 * @param boolean $_noStop
	 * @return OvhStructTelephonySmsMultiSend
	 */
	public function __construct($_session = NULL,$_smsAccount = NULL,$_numberFrom = NULL,$_numberTo = NULL,$_message = NULL,$_smsValidity = NULL,$_smsClass = NULL,$_smsDeferred = NULL,$_smsPriority = NULL,$_smsCoding = NULL,$_tag = NULL,$_numberToCsv = NULL,$_noStop = NULL)
	{
		parent::__construct(array('session'=>$_session,'smsAccount'=>$_smsAccount,'numberFrom'=>$_numberFrom,'numberTo'=>($_numberTo instanceof OvhStructMyArrayOfStringType)?$_numberTo:new OvhStructMyArrayOfStringType($_numberTo),'message'=>$_message,'smsValidity'=>$_smsValidity,'smsClass'=>$_smsClass,'smsDeferred'=>$_smsDeferred,'smsPriority'=>$_smsPriority,'smsCoding'=>$_smsCoding,'tag'=>$_tag,'numberToCsv'=>$_numberToCsv,'noStop'=>$_noStop));
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
	 * Get smsAccount value
	 * @return string|null
	 */
	public function getSmsAccount()
	{
		return $this->smsAccount;
	}
	/**
	 * Set smsAccount value
	 * @param string $_smsAccount the smsAccount
	 * @return string
	 */
	public function setSmsAccount($_smsAccount)
	{
		return ($this->smsAccount = $_smsAccount);
	}
	/**
	 * Get numberFrom value
	 * @return string|null
	 */
	public function getNumberFrom()
	{
		return $this->numberFrom;
	}
	/**
	 * Set numberFrom value
	 * @param string $_numberFrom the numberFrom
	 * @return string
	 */
	public function setNumberFrom($_numberFrom)
	{
		return ($this->numberFrom = $_numberFrom);
	}
	/**
	 * Get numberTo value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getNumberTo()
	{
		return $this->numberTo;
	}
	/**
	 * Set numberTo value
	 * @param OvhStructMyArrayOfStringType $_numberTo the numberTo
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setNumberTo($_numberTo)
	{
		return ($this->numberTo = $_numberTo);
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
	 * Get smsValidity value
	 * @return int|null
	 */
	public function getSmsValidity()
	{
		return $this->smsValidity;
	}
	/**
	 * Set smsValidity value
	 * @param int $_smsValidity the smsValidity
	 * @return int
	 */
	public function setSmsValidity($_smsValidity)
	{
		return ($this->smsValidity = $_smsValidity);
	}
	/**
	 * Get smsClass value
	 * @return int|null
	 */
	public function getSmsClass()
	{
		return $this->smsClass;
	}
	/**
	 * Set smsClass value
	 * @param int $_smsClass the smsClass
	 * @return int
	 */
	public function setSmsClass($_smsClass)
	{
		return ($this->smsClass = $_smsClass);
	}
	/**
	 * Get smsDeferred value
	 * @return int|null
	 */
	public function getSmsDeferred()
	{
		return $this->smsDeferred;
	}
	/**
	 * Set smsDeferred value
	 * @param int $_smsDeferred the smsDeferred
	 * @return int
	 */
	public function setSmsDeferred($_smsDeferred)
	{
		return ($this->smsDeferred = $_smsDeferred);
	}
	/**
	 * Get smsPriority value
	 * @return int|null
	 */
	public function getSmsPriority()
	{
		return $this->smsPriority;
	}
	/**
	 * Set smsPriority value
	 * @param int $_smsPriority the smsPriority
	 * @return int
	 */
	public function setSmsPriority($_smsPriority)
	{
		return ($this->smsPriority = $_smsPriority);
	}
	/**
	 * Get smsCoding value
	 * @return int|null
	 */
	public function getSmsCoding()
	{
		return $this->smsCoding;
	}
	/**
	 * Set smsCoding value
	 * @param int $_smsCoding the smsCoding
	 * @return int
	 */
	public function setSmsCoding($_smsCoding)
	{
		return ($this->smsCoding = $_smsCoding);
	}
	/**
	 * Get tag value
	 * @return string|null
	 */
	public function getTag()
	{
		return $this->tag;
	}
	/**
	 * Set tag value
	 * @param string $_tag the tag
	 * @return string
	 */
	public function setTag($_tag)
	{
		return ($this->tag = $_tag);
	}
	/**
	 * Get numberToCsv value
	 * @return string|null
	 */
	public function getNumberToCsv()
	{
		return $this->numberToCsv;
	}
	/**
	 * Set numberToCsv value
	 * @param string $_numberToCsv the numberToCsv
	 * @return string
	 */
	public function setNumberToCsv($_numberToCsv)
	{
		return ($this->numberToCsv = $_numberToCsv);
	}
	/**
	 * Get noStop value
	 * @return boolean|null
	 */
	public function getNoStop()
	{
		return $this->noStop;
	}
	/**
	 * Set noStop value
	 * @param boolean $_noStop the noStop
	 * @return boolean
	 */
	public function setNoStop($_noStop)
	{
		return ($this->noStop = $_noStop);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsMultiSend
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