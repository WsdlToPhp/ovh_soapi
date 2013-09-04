<?php
/**
 * File for class OvhStructMessageDetailStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructMessageDetailStruct originally named messageDetailStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructMessageDetailStruct extends OvhWsdlClass
{
	/**
	 * The to
	 * @var string
	 */
	public $to;
	/**
	 * The from
	 * @var string
	 */
	public $from;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The message
	 * @var string
	 */
	public $message;
	/**
	 * Constructor method for messageDetailStruct
	 * @see parent::__construct()
	 * @param string $_to
	 * @param string $_from
	 * @param string $_date
	 * @param string $_ip
	 * @param string $_type
	 * @param string $_message
	 * @return OvhStructMessageDetailStruct
	 */
	public function __construct($_to = NULL,$_from = NULL,$_date = NULL,$_ip = NULL,$_type = NULL,$_message = NULL)
	{
		parent::__construct(array('to'=>$_to,'from'=>$_from,'date'=>$_date,'ip'=>$_ip,'type'=>$_type,'message'=>$_message));
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
	 * Get ip value
	 * @return string|null
	 */
	public function getIp()
	{
		return $this->ip;
	}
	/**
	 * Set ip value
	 * @param string $_ip the ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get type value
	 * @return string|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @param string $_type the type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
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
	 * @return OvhStructMessageDetailStruct
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