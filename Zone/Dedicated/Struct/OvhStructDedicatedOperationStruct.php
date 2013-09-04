<?php
/**
 * File for class OvhStructDedicatedOperationStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedOperationStruct originally named dedicatedOperationStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedOperationStruct extends OvhWsdlClass
{
	/**
	 * The designation
	 * @var string
	 */
	public $designation;
	/**
	 * The id_designation
	 * @var int
	 */
	public $id_designation;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The level
	 * @var int
	 */
	public $level;
	/**
	 * Constructor method for dedicatedOperationStruct
	 * @see parent::__construct()
	 * @param string $_designation
	 * @param int $_id_designation
	 * @param string $_date
	 * @param int $_level
	 * @return OvhStructDedicatedOperationStruct
	 */
	public function __construct($_designation = NULL,$_id_designation = NULL,$_date = NULL,$_level = NULL)
	{
		parent::__construct(array('designation'=>$_designation,'id_designation'=>$_id_designation,'date'=>$_date,'level'=>$_level));
	}
	/**
	 * Get designation value
	 * @return string|null
	 */
	public function getDesignation()
	{
		return $this->designation;
	}
	/**
	 * Set designation value
	 * @param string $_designation the designation
	 * @return string
	 */
	public function setDesignation($_designation)
	{
		return ($this->designation = $_designation);
	}
	/**
	 * Get id_designation value
	 * @return int|null
	 */
	public function getId_designation()
	{
		return $this->id_designation;
	}
	/**
	 * Set id_designation value
	 * @param int $_id_designation the id_designation
	 * @return int
	 */
	public function setId_designation($_id_designation)
	{
		return ($this->id_designation = $_id_designation);
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
	 * Get level value
	 * @return int|null
	 */
	public function getLevel()
	{
		return $this->level;
	}
	/**
	 * Set level value
	 * @param int $_level the level
	 * @return int
	 */
	public function setLevel($_level)
	{
		return ($this->level = $_level);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedOperationStruct
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