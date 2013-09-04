<?php
/**
 * File for class OvhStructRpsGetIOStatsDetailIoRequestsStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRpsGetIOStatsDetailIoRequestsStruct originally named rpsGetIOStatsDetailIoRequestsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRpsGetIOStatsDetailIoRequestsStruct extends OvhWsdlClass
{
	/**
	 * The read
	 * @var OvhStructRpsGetIOStatsDetailRawStruct
	 */
	public $read;
	/**
	 * The write
	 * @var OvhStructRpsGetIOStatsDetailRawStruct
	 */
	public $write;
	/**
	 * Constructor method for rpsGetIOStatsDetailIoRequestsStruct
	 * @see parent::__construct()
	 * @param OvhStructRpsGetIOStatsDetailRawStruct $_read
	 * @param OvhStructRpsGetIOStatsDetailRawStruct $_write
	 * @return OvhStructRpsGetIOStatsDetailIoRequestsStruct
	 */
	public function __construct($_read = NULL,$_write = NULL)
	{
		parent::__construct(array('read'=>$_read,'write'=>$_write));
	}
	/**
	 * Get read value
	 * @return OvhStructRpsGetIOStatsDetailRawStruct|null
	 */
	public function getRead()
	{
		return $this->read;
	}
	/**
	 * Set read value
	 * @param OvhStructRpsGetIOStatsDetailRawStruct $_read the read
	 * @return OvhStructRpsGetIOStatsDetailRawStruct
	 */
	public function setRead($_read)
	{
		return ($this->read = $_read);
	}
	/**
	 * Get write value
	 * @return OvhStructRpsGetIOStatsDetailRawStruct|null
	 */
	public function getWrite()
	{
		return $this->write;
	}
	/**
	 * Set write value
	 * @param OvhStructRpsGetIOStatsDetailRawStruct $_write the write
	 * @return OvhStructRpsGetIOStatsDetailRawStruct
	 */
	public function setWrite($_write)
	{
		return ($this->write = $_write);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRpsGetIOStatsDetailIoRequestsStruct
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