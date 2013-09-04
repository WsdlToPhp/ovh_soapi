<?php
/**
 * File for class OvhStructTelephonySmsCsvSlotStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsCsvSlotStruct originally named telephonySmsCsvSlotStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsCsvSlotStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The records
	 * @var string
	 */
	public $records;
	/**
	 * Constructor method for telephonySmsCsvSlotStruct
	 * @see parent::__construct()
	 * @param string $_id
	 * @param string $_name
	 * @param string $_date
	 * @param string $_records
	 * @return OvhStructTelephonySmsCsvSlotStruct
	 */
	public function __construct($_id = NULL,$_name = NULL,$_date = NULL,$_records = NULL)
	{
		parent::__construct(array('id'=>$_id,'name'=>$_name,'date'=>$_date,'records'=>$_records));
	}
	/**
	 * Get id value
	 * @return string|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param string $_id the id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
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
	 * Get date value
	 * @return string|null
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set date value
	 * @param string $_date the date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get records value
	 * @return string|null
	 */
	public function getRecords()
	{
		return $this->records;
	}
	/**
	 * Set records value
	 * @param string $_records the records
	 * @return string
	 */
	public function setRecords($_records)
	{
		return ($this->records = $_records);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsCsvSlotStruct
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