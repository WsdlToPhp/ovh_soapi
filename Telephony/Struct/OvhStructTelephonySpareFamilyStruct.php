<?php
/**
 * File for class OvhStructTelephonySpareFamilyStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySpareFamilyStruct originally named telephonySpareFamilyStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySpareFamilyStruct extends OvhWsdlClass
{
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The family
	 * @var string
	 */
	public $family;
	/**
	 * The compatibles
	 * @var OvhStructMyArrayOfStringType
	 */
	public $compatibles;
	/**
	 * The spares
	 * @var OvhStructMyArrayOfTelephonySpareDetailStructType
	 */
	public $spares;
	/**
	 * Constructor method for telephonySpareFamilyStruct
	 * @see parent::__construct()
	 * @param string $_type
	 * @param string $_family
	 * @param OvhStructMyArrayOfStringType $_compatibles
	 * @param OvhStructMyArrayOfTelephonySpareDetailStructType $_spares
	 * @return OvhStructTelephonySpareFamilyStruct
	 */
	public function __construct($_type = NULL,$_family = NULL,$_compatibles = NULL,$_spares = NULL)
	{
		parent::__construct(array('type'=>$_type,'family'=>$_family,'compatibles'=>($_compatibles instanceof OvhStructMyArrayOfStringType)?$_compatibles:new OvhStructMyArrayOfStringType($_compatibles),'spares'=>($_spares instanceof OvhStructMyArrayOfTelephonySpareDetailStructType)?$_spares:new OvhStructMyArrayOfTelephonySpareDetailStructType($_spares)));
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
	 * Get family value
	 * @return string|null
	 */
	public function getFamily()
	{
		return $this->family;
	}
	/**
	 * Set family value
	 * @param string $_family the family
	 * @return string
	 */
	public function setFamily($_family)
	{
		return ($this->family = $_family);
	}
	/**
	 * Get compatibles value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getCompatibles()
	{
		return $this->compatibles;
	}
	/**
	 * Set compatibles value
	 * @param OvhStructMyArrayOfStringType $_compatibles the compatibles
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setCompatibles($_compatibles)
	{
		return ($this->compatibles = $_compatibles);
	}
	/**
	 * Get spares value
	 * @return OvhStructMyArrayOfTelephonySpareDetailStructType|null
	 */
	public function getSpares()
	{
		return $this->spares;
	}
	/**
	 * Set spares value
	 * @param OvhStructMyArrayOfTelephonySpareDetailStructType $_spares the spares
	 * @return OvhStructMyArrayOfTelephonySpareDetailStructType
	 */
	public function setSpares($_spares)
	{
		return ($this->spares = $_spares);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySpareFamilyStruct
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