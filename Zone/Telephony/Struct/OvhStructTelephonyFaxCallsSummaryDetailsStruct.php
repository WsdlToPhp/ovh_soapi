<?php
/**
 * File for class OvhStructTelephonyFaxCallsSummaryDetailsStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyFaxCallsSummaryDetailsStruct originally named telephonyFaxCallsSummaryDetailsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyFaxCallsSummaryDetailsStruct extends OvhWsdlClass
{
	/**
	 * The faxNumber
	 * @var int
	 */
	public $faxNumber;
	/**
	 * The pages
	 * @var int
	 */
	public $pages;
	/**
	 * The priceWithoutVAT
	 * @var float
	 */
	public $priceWithoutVAT;
	/**
	 * Constructor method for telephonyFaxCallsSummaryDetailsStruct
	 * @see parent::__construct()
	 * @param int $_faxNumber
	 * @param int $_pages
	 * @param float $_priceWithoutVAT
	 * @return OvhStructTelephonyFaxCallsSummaryDetailsStruct
	 */
	public function __construct($_faxNumber = NULL,$_pages = NULL,$_priceWithoutVAT = NULL)
	{
		parent::__construct(array('faxNumber'=>$_faxNumber,'pages'=>$_pages,'priceWithoutVAT'=>$_priceWithoutVAT));
	}
	/**
	 * Get faxNumber value
	 * @return int|null
	 */
	public function getFaxNumber()
	{
		return $this->faxNumber;
	}
	/**
	 * Set faxNumber value
	 * @param int $_faxNumber the faxNumber
	 * @return int
	 */
	public function setFaxNumber($_faxNumber)
	{
		return ($this->faxNumber = $_faxNumber);
	}
	/**
	 * Get pages value
	 * @return int|null
	 */
	public function getPages()
	{
		return $this->pages;
	}
	/**
	 * Set pages value
	 * @param int $_pages the pages
	 * @return int
	 */
	public function setPages($_pages)
	{
		return ($this->pages = $_pages);
	}
	/**
	 * Get priceWithoutVAT value
	 * @return float|null
	 */
	public function getPriceWithoutVAT()
	{
		return $this->priceWithoutVAT;
	}
	/**
	 * Set priceWithoutVAT value
	 * @param float $_priceWithoutVAT the priceWithoutVAT
	 * @return float
	 */
	public function setPriceWithoutVAT($_priceWithoutVAT)
	{
		return ($this->priceWithoutVAT = $_priceWithoutVAT);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyFaxCallsSummaryDetailsStruct
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