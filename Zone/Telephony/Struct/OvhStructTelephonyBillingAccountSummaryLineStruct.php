<?php
/**
 * File for class OvhStructTelephonyBillingAccountSummaryLineStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyBillingAccountSummaryLineStruct originally named telephonyBillingAccountSummaryLineStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyBillingAccountSummaryLineStruct extends OvhWsdlClass
{
	/**
	 * The line
	 * @var string
	 */
	public $line;
	/**
	 * The phoneNumber
	 * @var string
	 */
	public $phoneNumber;
	/**
	 * The fixe
	 * @var OvhStructTelephonyCallsSummaryStruct
	 */
	public $fixe;
	/**
	 * The special
	 * @var OvhStructTelephonyCallsSummaryStruct
	 */
	public $special;
	/**
	 * The mobile
	 * @var OvhStructTelephonyCallsSummaryStruct
	 */
	public $mobile;
	/**
	 * The fax
	 * @var OvhStructTelephonyFaxSummaryStruct
	 */
	public $fax;
	/**
	 * Constructor method for telephonyBillingAccountSummaryLineStruct
	 * @see parent::__construct()
	 * @param string $_line
	 * @param string $_phoneNumber
	 * @param OvhStructTelephonyCallsSummaryStruct $_fixe
	 * @param OvhStructTelephonyCallsSummaryStruct $_special
	 * @param OvhStructTelephonyCallsSummaryStruct $_mobile
	 * @param OvhStructTelephonyFaxSummaryStruct $_fax
	 * @return OvhStructTelephonyBillingAccountSummaryLineStruct
	 */
	public function __construct($_line = NULL,$_phoneNumber = NULL,$_fixe = NULL,$_special = NULL,$_mobile = NULL,$_fax = NULL)
	{
		parent::__construct(array('line'=>$_line,'phoneNumber'=>$_phoneNumber,'fixe'=>$_fixe,'special'=>$_special,'mobile'=>$_mobile,'fax'=>$_fax));
	}
	/**
	 * Get line value
	 * @return string|null
	 */
	public function getLine()
	{
		return $this->line;
	}
	/**
	 * Set line value
	 * @param string $_line the line
	 * @return string
	 */
	public function setLine($_line)
	{
		return ($this->line = $_line);
	}
	/**
	 * Get phoneNumber value
	 * @return string|null
	 */
	public function getPhoneNumber()
	{
		return $this->phoneNumber;
	}
	/**
	 * Set phoneNumber value
	 * @param string $_phoneNumber the phoneNumber
	 * @return string
	 */
	public function setPhoneNumber($_phoneNumber)
	{
		return ($this->phoneNumber = $_phoneNumber);
	}
	/**
	 * Get fixe value
	 * @return OvhStructTelephonyCallsSummaryStruct|null
	 */
	public function getFixe()
	{
		return $this->fixe;
	}
	/**
	 * Set fixe value
	 * @param OvhStructTelephonyCallsSummaryStruct $_fixe the fixe
	 * @return OvhStructTelephonyCallsSummaryStruct
	 */
	public function setFixe($_fixe)
	{
		return ($this->fixe = $_fixe);
	}
	/**
	 * Get special value
	 * @return OvhStructTelephonyCallsSummaryStruct|null
	 */
	public function getSpecial()
	{
		return $this->special;
	}
	/**
	 * Set special value
	 * @param OvhStructTelephonyCallsSummaryStruct $_special the special
	 * @return OvhStructTelephonyCallsSummaryStruct
	 */
	public function setSpecial($_special)
	{
		return ($this->special = $_special);
	}
	/**
	 * Get mobile value
	 * @return OvhStructTelephonyCallsSummaryStruct|null
	 */
	public function getMobile()
	{
		return $this->mobile;
	}
	/**
	 * Set mobile value
	 * @param OvhStructTelephonyCallsSummaryStruct $_mobile the mobile
	 * @return OvhStructTelephonyCallsSummaryStruct
	 */
	public function setMobile($_mobile)
	{
		return ($this->mobile = $_mobile);
	}
	/**
	 * Get fax value
	 * @return OvhStructTelephonyFaxSummaryStruct|null
	 */
	public function getFax()
	{
		return $this->fax;
	}
	/**
	 * Set fax value
	 * @param OvhStructTelephonyFaxSummaryStruct $_fax the fax
	 * @return OvhStructTelephonyFaxSummaryStruct
	 */
	public function setFax($_fax)
	{
		return ($this->fax = $_fax);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyBillingAccountSummaryLineStruct
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