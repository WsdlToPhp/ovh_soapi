<?php
/**
 * File for class OvhStructDedicatedAllowedDistributionDetailsStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedAllowedDistributionDetailsStruct originally named dedicatedAllowedDistributionDetailsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedAllowedDistributionDetailsStruct extends OvhWsdlClass
{
	/**
	 * The language
	 * @var OvhStructMyArrayOfDedicatedAllowedDistributionLanguageStructType
	 */
	public $language;
	/**
	 * The languageList
	 * @var OvhStructMyArrayOfStringType
	 */
	public $languageList;
	/**
	 * The defaultLanguage
	 * @var string
	 */
	public $defaultLanguage;
	/**
	 * The bitFormat
	 * @var OvhStructMyArrayOfDedicatedAllowedDistributionBitFormatStructType
	 */
	public $bitFormat;
	/**
	 * The longName
	 * @var string
	 */
	public $longName;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * Constructor method for dedicatedAllowedDistributionDetailsStruct
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfDedicatedAllowedDistributionLanguageStructType $_language
	 * @param OvhStructMyArrayOfStringType $_languageList
	 * @param string $_defaultLanguage
	 * @param OvhStructMyArrayOfDedicatedAllowedDistributionBitFormatStructType $_bitFormat
	 * @param string $_longName
	 * @param string $_name
	 * @return OvhStructDedicatedAllowedDistributionDetailsStruct
	 */
	public function __construct($_language = NULL,$_languageList = NULL,$_defaultLanguage = NULL,$_bitFormat = NULL,$_longName = NULL,$_name = NULL)
	{
		parent::__construct(array('language'=>($_language instanceof OvhStructMyArrayOfDedicatedAllowedDistributionLanguageStructType)?$_language:new OvhStructMyArrayOfDedicatedAllowedDistributionLanguageStructType($_language),'languageList'=>($_languageList instanceof OvhStructMyArrayOfStringType)?$_languageList:new OvhStructMyArrayOfStringType($_languageList),'defaultLanguage'=>$_defaultLanguage,'bitFormat'=>($_bitFormat instanceof OvhStructMyArrayOfDedicatedAllowedDistributionBitFormatStructType)?$_bitFormat:new OvhStructMyArrayOfDedicatedAllowedDistributionBitFormatStructType($_bitFormat),'longName'=>$_longName,'name'=>$_name));
	}
	/**
	 * Get language value
	 * @return OvhStructMyArrayOfDedicatedAllowedDistributionLanguageStructType|null
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set language value
	 * @param OvhStructMyArrayOfDedicatedAllowedDistributionLanguageStructType $_language the language
	 * @return OvhStructMyArrayOfDedicatedAllowedDistributionLanguageStructType
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get languageList value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getLanguageList()
	{
		return $this->languageList;
	}
	/**
	 * Set languageList value
	 * @param OvhStructMyArrayOfStringType $_languageList the languageList
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setLanguageList($_languageList)
	{
		return ($this->languageList = $_languageList);
	}
	/**
	 * Get defaultLanguage value
	 * @return string|null
	 */
	public function getDefaultLanguage()
	{
		return $this->defaultLanguage;
	}
	/**
	 * Set defaultLanguage value
	 * @param string $_defaultLanguage the defaultLanguage
	 * @return string
	 */
	public function setDefaultLanguage($_defaultLanguage)
	{
		return ($this->defaultLanguage = $_defaultLanguage);
	}
	/**
	 * Get bitFormat value
	 * @return OvhStructMyArrayOfDedicatedAllowedDistributionBitFormatStructType|null
	 */
	public function getBitFormat()
	{
		return $this->bitFormat;
	}
	/**
	 * Set bitFormat value
	 * @param OvhStructMyArrayOfDedicatedAllowedDistributionBitFormatStructType $_bitFormat the bitFormat
	 * @return OvhStructMyArrayOfDedicatedAllowedDistributionBitFormatStructType
	 */
	public function setBitFormat($_bitFormat)
	{
		return ($this->bitFormat = $_bitFormat);
	}
	/**
	 * Get longName value
	 * @return string|null
	 */
	public function getLongName()
	{
		return $this->longName;
	}
	/**
	 * Set longName value
	 * @param string $_longName the longName
	 * @return string
	 */
	public function setLongName($_longName)
	{
		return ($this->longName = $_longName);
	}
	/**
	 * Get name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set name value
	 * @param string $_name the name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedAllowedDistributionDetailsStruct
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