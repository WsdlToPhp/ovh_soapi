<?php
/**
 * File for class OvhStructServiceGroupStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructServiceGroupStruct originally named serviceGroupStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructServiceGroupStruct extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * The details
	 * @var OvhStructMyArrayOfServiceStructType
	 */
	public $details;
	/**
	 * Constructor method for serviceGroupStruct
	 * @see parent::__construct()
	 * @param string $_name
	 * @param string $_comment
	 * @param OvhStructMyArrayOfServiceStructType $_details
	 * @return OvhStructServiceGroupStruct
	 */
	public function __construct($_name = NULL,$_comment = NULL,$_details = NULL)
	{
		parent::__construct(array('name'=>$_name,'comment'=>$_comment,'details'=>($_details instanceof OvhStructMyArrayOfServiceStructType)?$_details:new OvhStructMyArrayOfServiceStructType($_details)));
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
	 * Get comment value
	 * @return string|null
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Set comment value
	 * @param string $_comment the comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get details value
	 * @return OvhStructMyArrayOfServiceStructType|null
	 */
	public function getDetails()
	{
		return $this->details;
	}
	/**
	 * Set details value
	 * @param OvhStructMyArrayOfServiceStructType $_details the details
	 * @return OvhStructMyArrayOfServiceStructType
	 */
	public function setDetails($_details)
	{
		return ($this->details = $_details);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructServiceGroupStruct
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