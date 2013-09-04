<?php
/**
 * File for class OvhStructTelephonyRecipientStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyRecipientStruct originally named telephonyRecipientStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyRecipientStruct extends OvhWsdlClass
{
	/**
	 * The recipient
	 * @var string
	 */
	public $recipient;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * Constructor method for telephonyRecipientStruct
	 * @see parent::__construct()
	 * @param string $_recipient
	 * @param string $_status
	 * @return OvhStructTelephonyRecipientStruct
	 */
	public function __construct($_recipient = NULL,$_status = NULL)
	{
		parent::__construct(array('recipient'=>$_recipient,'status'=>$_status));
	}
	/**
	 * Get recipient value
	 * @return string|null
	 */
	public function getRecipient()
	{
		return $this->recipient;
	}
	/**
	 * Set recipient value
	 * @param string $_recipient the recipient
	 * @return string
	 */
	public function setRecipient($_recipient)
	{
		return ($this->recipient = $_recipient);
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
	 * @return OvhStructTelephonyRecipientStruct
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