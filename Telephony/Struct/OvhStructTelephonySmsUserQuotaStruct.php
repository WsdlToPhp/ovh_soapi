<?php
/**
 * File for class OvhStructTelephonySmsUserQuotaStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsUserQuotaStruct originally named telephonySmsUserQuotaStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsUserQuotaStruct extends OvhWsdlClass
{
	/**
	 * The quotaLeft
	 * @var string
	 */
	public $quotaLeft;
	/**
	 * The quotaStatus
	 * @var string
	 */
	public $quotaStatus;
	/**
	 * Constructor method for telephonySmsUserQuotaStruct
	 * @see parent::__construct()
	 * @param string $_quotaLeft
	 * @param string $_quotaStatus
	 * @return OvhStructTelephonySmsUserQuotaStruct
	 */
	public function __construct($_quotaLeft = NULL,$_quotaStatus = NULL)
	{
		parent::__construct(array('quotaLeft'=>$_quotaLeft,'quotaStatus'=>$_quotaStatus));
	}
	/**
	 * Get quotaLeft value
	 * @return string|null
	 */
	public function getQuotaLeft()
	{
		return $this->quotaLeft;
	}
	/**
	 * Set quotaLeft value
	 * @param string $_quotaLeft the quotaLeft
	 * @return string
	 */
	public function setQuotaLeft($_quotaLeft)
	{
		return ($this->quotaLeft = $_quotaLeft);
	}
	/**
	 * Get quotaStatus value
	 * @return string|null
	 */
	public function getQuotaStatus()
	{
		return $this->quotaStatus;
	}
	/**
	 * Set quotaStatus value
	 * @param string $_quotaStatus the quotaStatus
	 * @return string
	 */
	public function setQuotaStatus($_quotaStatus)
	{
		return ($this->quotaStatus = $_quotaStatus);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsUserQuotaStruct
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