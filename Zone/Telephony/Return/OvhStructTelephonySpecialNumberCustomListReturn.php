<?php
/**
 * File for class OvhStructTelephonySpecialNumberCustomListReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySpecialNumberCustomListReturn originally named telephonySpecialNumberCustomListReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySpecialNumberCustomListReturn extends OvhWsdlClass
{
	/**
	 * The easyNumbers
	 * @var OvhStructMyArrayOfStringType
	 */
	public $easyNumbers;
	/**
	 * The staticAttributionRange
	 * @var OvhStructMyArrayOfStringType
	 */
	public $staticAttributionRange;
	/**
	 * The proposedNumbers
	 * @var OvhStructMyArrayOfStringType
	 */
	public $proposedNumbers;
	/**
	 * Constructor method for telephonySpecialNumberCustomListReturn
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfStringType $_easyNumbers
	 * @param OvhStructMyArrayOfStringType $_staticAttributionRange
	 * @param OvhStructMyArrayOfStringType $_proposedNumbers
	 * @return OvhStructTelephonySpecialNumberCustomListReturn
	 */
	public function __construct($_easyNumbers = NULL,$_staticAttributionRange = NULL,$_proposedNumbers = NULL)
	{
		parent::__construct(array('easyNumbers'=>($_easyNumbers instanceof OvhStructMyArrayOfStringType)?$_easyNumbers:new OvhStructMyArrayOfStringType($_easyNumbers),'staticAttributionRange'=>($_staticAttributionRange instanceof OvhStructMyArrayOfStringType)?$_staticAttributionRange:new OvhStructMyArrayOfStringType($_staticAttributionRange),'proposedNumbers'=>($_proposedNumbers instanceof OvhStructMyArrayOfStringType)?$_proposedNumbers:new OvhStructMyArrayOfStringType($_proposedNumbers)));
	}
	/**
	 * Get easyNumbers value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getEasyNumbers()
	{
		return $this->easyNumbers;
	}
	/**
	 * Set easyNumbers value
	 * @param OvhStructMyArrayOfStringType $_easyNumbers the easyNumbers
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setEasyNumbers($_easyNumbers)
	{
		return ($this->easyNumbers = $_easyNumbers);
	}
	/**
	 * Get staticAttributionRange value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getStaticAttributionRange()
	{
		return $this->staticAttributionRange;
	}
	/**
	 * Set staticAttributionRange value
	 * @param OvhStructMyArrayOfStringType $_staticAttributionRange the staticAttributionRange
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setStaticAttributionRange($_staticAttributionRange)
	{
		return ($this->staticAttributionRange = $_staticAttributionRange);
	}
	/**
	 * Get proposedNumbers value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getProposedNumbers()
	{
		return $this->proposedNumbers;
	}
	/**
	 * Set proposedNumbers value
	 * @param OvhStructMyArrayOfStringType $_proposedNumbers the proposedNumbers
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setProposedNumbers($_proposedNumbers)
	{
		return ($this->proposedNumbers = $_proposedNumbers);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySpecialNumberCustomListReturn
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