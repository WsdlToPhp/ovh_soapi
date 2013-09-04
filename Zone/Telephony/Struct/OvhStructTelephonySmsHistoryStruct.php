<?php
/**
 * File for class OvhStructTelephonySmsHistoryStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsHistoryStruct originally named telephonySmsHistoryStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsHistoryStruct extends OvhWsdlClass
{
	/**
	 * The smsId
	 * @var int
	 */
	public $smsId;
	/**
	 * The numberFrom
	 * @var string
	 */
	public $numberFrom;
	/**
	 * The numberTo
	 * @var string
	 */
	public $numberTo;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The message
	 * @var string
	 */
	public $message;
	/**
	 * The text
	 * @var string
	 */
	public $text;
	/**
	 * The user
	 * @var string
	 */
	public $user;
	/**
	 * The tag
	 * @var string
	 */
	public $tag;
	/**
	 * The pttDescription
	 * @var string
	 */
	public $pttDescription;
	/**
	 * The deliveryReceiptDescription
	 * @var string
	 */
	public $deliveryReceiptDescription;
	/**
	 * The pttDescriptionDetail
	 * @var string
	 */
	public $pttDescriptionDetail;
	/**
	 * Constructor method for telephonySmsHistoryStruct
	 * @see parent::__construct()
	 * @param int $_smsId
	 * @param string $_numberFrom
	 * @param string $_numberTo
	 * @param string $_status
	 * @param string $_date
	 * @param string $_message
	 * @param string $_text
	 * @param string $_user
	 * @param string $_tag
	 * @param string $_pttDescription
	 * @param string $_deliveryReceiptDescription
	 * @param string $_pttDescriptionDetail
	 * @return OvhStructTelephonySmsHistoryStruct
	 */
	public function __construct($_smsId = NULL,$_numberFrom = NULL,$_numberTo = NULL,$_status = NULL,$_date = NULL,$_message = NULL,$_text = NULL,$_user = NULL,$_tag = NULL,$_pttDescription = NULL,$_deliveryReceiptDescription = NULL,$_pttDescriptionDetail = NULL)
	{
		parent::__construct(array('smsId'=>$_smsId,'numberFrom'=>$_numberFrom,'numberTo'=>$_numberTo,'status'=>$_status,'date'=>$_date,'message'=>$_message,'text'=>$_text,'user'=>$_user,'tag'=>$_tag,'pttDescription'=>$_pttDescription,'deliveryReceiptDescription'=>$_deliveryReceiptDescription,'pttDescriptionDetail'=>$_pttDescriptionDetail));
	}
	/**
	 * Get smsId value
	 * @return int|null
	 */
	public function getSmsId()
	{
		return $this->smsId;
	}
	/**
	 * Set smsId value
	 * @param int $_smsId the smsId
	 * @return int
	 */
	public function setSmsId($_smsId)
	{
		return ($this->smsId = $_smsId);
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
	 * @return string|null
	 */
	public function getNumberTo()
	{
		return $this->numberTo;
	}
	/**
	 * Set numberTo value
	 * @param string $_numberTo the numberTo
	 * @return string
	 */
	public function setNumberTo($_numberTo)
	{
		return ($this->numberTo = $_numberTo);
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
	 * Get date value
	 * @return string|null
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set date value
	 * @param string $_date the date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
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
	 * Get text value
	 * @return string|null
	 */
	public function getText()
	{
		return $this->text;
	}
	/**
	 * Set text value
	 * @param string $_text the text
	 * @return string
	 */
	public function setText($_text)
	{
		return ($this->text = $_text);
	}
	/**
	 * Get user value
	 * @return string|null
	 */
	public function getUser()
	{
		return $this->user;
	}
	/**
	 * Set user value
	 * @param string $_user the user
	 * @return string
	 */
	public function setUser($_user)
	{
		return ($this->user = $_user);
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
	 * Get pttDescription value
	 * @return string|null
	 */
	public function getPttDescription()
	{
		return $this->pttDescription;
	}
	/**
	 * Set pttDescription value
	 * @param string $_pttDescription the pttDescription
	 * @return string
	 */
	public function setPttDescription($_pttDescription)
	{
		return ($this->pttDescription = $_pttDescription);
	}
	/**
	 * Get deliveryReceiptDescription value
	 * @return string|null
	 */
	public function getDeliveryReceiptDescription()
	{
		return $this->deliveryReceiptDescription;
	}
	/**
	 * Set deliveryReceiptDescription value
	 * @param string $_deliveryReceiptDescription the deliveryReceiptDescription
	 * @return string
	 */
	public function setDeliveryReceiptDescription($_deliveryReceiptDescription)
	{
		return ($this->deliveryReceiptDescription = $_deliveryReceiptDescription);
	}
	/**
	 * Get pttDescriptionDetail value
	 * @return string|null
	 */
	public function getPttDescriptionDetail()
	{
		return $this->pttDescriptionDetail;
	}
	/**
	 * Set pttDescriptionDetail value
	 * @param string $_pttDescriptionDetail the pttDescriptionDetail
	 * @return string
	 */
	public function setPttDescriptionDetail($_pttDescriptionDetail)
	{
		return ($this->pttDescriptionDetail = $_pttDescriptionDetail);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsHistoryStruct
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