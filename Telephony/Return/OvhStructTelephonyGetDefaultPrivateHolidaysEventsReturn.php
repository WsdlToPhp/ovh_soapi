<?php
/**
 * File for class OvhStructTelephonyGetDefaultPrivateHolidaysEventsReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyGetDefaultPrivateHolidaysEventsReturn originally named telephonyGetDefaultPrivateHolidaysEventsReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyGetDefaultPrivateHolidaysEventsReturn extends OvhWsdlClass
{
	/**
	 * The fr
	 * @var OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct
	 */
	public $fr;
	/**
	 * The be
	 * @var OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct
	 */
	public $be;
	/**
	 * The uk
	 * @var OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct
	 */
	public $uk;
	/**
	 * The de
	 * @var OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct
	 */
	public $de;
	/**
	 * The es
	 * @var OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct
	 */
	public $es;
	/**
	 * Constructor method for telephonyGetDefaultPrivateHolidaysEventsReturn
	 * @see parent::__construct()
	 * @param OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct $_fr
	 * @param OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct $_be
	 * @param OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct $_uk
	 * @param OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct $_de
	 * @param OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct $_es
	 * @return OvhStructTelephonyGetDefaultPrivateHolidaysEventsReturn
	 */
	public function __construct($_fr = NULL,$_be = NULL,$_uk = NULL,$_de = NULL,$_es = NULL)
	{
		parent::__construct(array('fr'=>$_fr,'be'=>$_be,'uk'=>$_uk,'de'=>$_de,'es'=>$_es));
	}
	/**
	 * Get fr value
	 * @return OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct|null
	 */
	public function getFr()
	{
		return $this->fr;
	}
	/**
	 * Set fr value
	 * @param OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct $_fr the fr
	 * @return OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct
	 */
	public function setFr($_fr)
	{
		return ($this->fr = $_fr);
	}
	/**
	 * Get be value
	 * @return OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct|null
	 */
	public function getBe()
	{
		return $this->be;
	}
	/**
	 * Set be value
	 * @param OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct $_be the be
	 * @return OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct
	 */
	public function setBe($_be)
	{
		return ($this->be = $_be);
	}
	/**
	 * Get uk value
	 * @return OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct|null
	 */
	public function getUk()
	{
		return $this->uk;
	}
	/**
	 * Set uk value
	 * @param OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct $_uk the uk
	 * @return OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct
	 */
	public function setUk($_uk)
	{
		return ($this->uk = $_uk);
	}
	/**
	 * Get de value
	 * @return OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct|null
	 */
	public function getDe()
	{
		return $this->de;
	}
	/**
	 * Set de value
	 * @param OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct $_de the de
	 * @return OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct
	 */
	public function setDe($_de)
	{
		return ($this->de = $_de);
	}
	/**
	 * Get es value
	 * @return OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct|null
	 */
	public function getEs()
	{
		return $this->es;
	}
	/**
	 * Set es value
	 * @param OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct $_es the es
	 * @return OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct
	 */
	public function setEs($_es)
	{
		return ($this->es = $_es);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyGetDefaultPrivateHolidaysEventsReturn
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