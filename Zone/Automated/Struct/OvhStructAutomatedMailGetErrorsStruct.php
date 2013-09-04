<?php
/**
 * File for class OvhStructAutomatedMailGetErrorsStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructAutomatedMailGetErrorsStruct originally named automatedMailGetErrorsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructAutomatedMailGetErrorsStruct extends OvhWsdlClass
{
	/**
	 * The to
	 * @var string
	 */
	public $to;
	/**
	 * The total
	 * @var int
	 */
	public $total;
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
	 * Constructor method for automatedMailGetErrorsStruct
	 * @see parent::__construct()
	 * @param string $_to
	 * @param int $_total
	 * @param string $_date
	 * @param string $_message
	 * @return OvhStructAutomatedMailGetErrorsStruct
	 */
	public function __construct($_to = NULL,$_total = NULL,$_date = NULL,$_message = NULL)
	{
		parent::__construct(array('to'=>$_to,'total'=>$_total,'date'=>$_date,'message'=>$_message));
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
	 * Get total value
	 * @return int|null
	 */
	public function getTotal()
	{
		return $this->total;
	}
	/**
	 * Set total value
	 * @param int $_total the total
	 * @return int
	 */
	public function setTotal($_total)
	{
		return ($this->total = $_total);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructAutomatedMailGetErrorsStruct
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