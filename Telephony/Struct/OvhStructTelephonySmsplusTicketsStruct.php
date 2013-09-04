<?php
/**
 * File for class OvhStructTelephonySmsplusTicketsStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsplusTicketsStruct originally named telephonySmsplusTicketsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsplusTicketsStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The from
	 * @var string
	 */
	public $from;
	/**
	 * The to
	 * @var string
	 */
	public $to;
	/**
	 * The operator
	 * @var string
	 */
	public $operator;
	/**
	 * The priceReversed
	 * @var float
	 */
	public $priceReversed;
	/**
	 * The message
	 * @var string
	 */
	public $message;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * Constructor method for telephonySmsplusTicketsStruct
	 * @see parent::__construct()
	 * @param string $_id
	 * @param string $_date
	 * @param string $_from
	 * @param string $_to
	 * @param string $_operator
	 * @param float $_priceReversed
	 * @param string $_message
	 * @param string $_status
	 * @return OvhStructTelephonySmsplusTicketsStruct
	 */
	public function __construct($_id = NULL,$_date = NULL,$_from = NULL,$_to = NULL,$_operator = NULL,$_priceReversed = NULL,$_message = NULL,$_status = NULL)
	{
		parent::__construct(array('id'=>$_id,'date'=>$_date,'from'=>$_from,'to'=>$_to,'operator'=>$_operator,'priceReversed'=>$_priceReversed,'message'=>$_message,'status'=>$_status));
	}
	/**
	 * Get id value
	 * @return string|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param string $_id the id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
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
	 * Get from value
	 * @return string|null
	 */
	public function getFrom()
	{
		return $this->from;
	}
	/**
	 * Set from value
	 * @param string $_from the from
	 * @return string
	 */
	public function setFrom($_from)
	{
		return ($this->from = $_from);
	}
	/**
	 * Get to value
	 * @return string|null
	 */
	public function getTo()
	{
		return $this->to;
	}
	/**
	 * Set to value
	 * @param string $_to the to
	 * @return string
	 */
	public function setTo($_to)
	{
		return ($this->to = $_to);
	}
	/**
	 * Get operator value
	 * @return string|null
	 */
	public function getOperator()
	{
		return $this->operator;
	}
	/**
	 * Set operator value
	 * @param string $_operator the operator
	 * @return string
	 */
	public function setOperator($_operator)
	{
		return ($this->operator = $_operator);
	}
	/**
	 * Get priceReversed value
	 * @return float|null
	 */
	public function getPriceReversed()
	{
		return $this->priceReversed;
	}
	/**
	 * Set priceReversed value
	 * @param float $_priceReversed the priceReversed
	 * @return float
	 */
	public function setPriceReversed($_priceReversed)
	{
		return ($this->priceReversed = $_priceReversed);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsplusTicketsStruct
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