<?php
/**
 * File for class OvhStructTelephonyLineGetCodecsReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyLineGetCodecsReturn originally named telephonyLineGetCodecsReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyLineGetCodecsReturn extends OvhWsdlClass
{
	/**
	 * The codecs
	 * @var string
	 */
	public $codecs;
	/**
	 * The availableCodecsList
	 * @var OvhStructMyArrayOfStringType
	 */
	public $availableCodecsList;
	/**
	 * The defaultCodecs
	 * @var string
	 */
	public $defaultCodecs;
	/**
	 * Constructor method for telephonyLineGetCodecsReturn
	 * @see parent::__construct()
	 * @param string $_codecs
	 * @param OvhStructMyArrayOfStringType $_availableCodecsList
	 * @param string $_defaultCodecs
	 * @return OvhStructTelephonyLineGetCodecsReturn
	 */
	public function __construct($_codecs = NULL,$_availableCodecsList = NULL,$_defaultCodecs = NULL)
	{
		parent::__construct(array('codecs'=>$_codecs,'availableCodecsList'=>($_availableCodecsList instanceof OvhStructMyArrayOfStringType)?$_availableCodecsList:new OvhStructMyArrayOfStringType($_availableCodecsList),'defaultCodecs'=>$_defaultCodecs));
	}
	/**
	 * Get codecs value
	 * @return string|null
	 */
	public function getCodecs()
	{
		return $this->codecs;
	}
	/**
	 * Set codecs value
	 * @param string $_codecs the codecs
	 * @return string
	 */
	public function setCodecs($_codecs)
	{
		return ($this->codecs = $_codecs);
	}
	/**
	 * Get availableCodecsList value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getAvailableCodecsList()
	{
		return $this->availableCodecsList;
	}
	/**
	 * Set availableCodecsList value
	 * @param OvhStructMyArrayOfStringType $_availableCodecsList the availableCodecsList
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setAvailableCodecsList($_availableCodecsList)
	{
		return ($this->availableCodecsList = $_availableCodecsList);
	}
	/**
	 * Get defaultCodecs value
	 * @return string|null
	 */
	public function getDefaultCodecs()
	{
		return $this->defaultCodecs;
	}
	/**
	 * Set defaultCodecs value
	 * @param string $_defaultCodecs the defaultCodecs
	 * @return string
	 */
	public function setDefaultCodecs($_defaultCodecs)
	{
		return ($this->defaultCodecs = $_defaultCodecs);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyLineGetCodecsReturn
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