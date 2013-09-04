<?php
/**
 * File for class OvhStructCrontabStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructCrontabStruct originally named crontabStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructCrontabStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The path
	 * @var string
	 */
	public $path;
	/**
	 * The desc
	 * @var string
	 */
	public $desc;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The enabled
	 * @var boolean
	 */
	public $enabled;
	/**
	 * Constructor method for crontabStruct
	 * @see parent::__construct()
	 * @param int $_id
	 * @param string $_path
	 * @param string $_desc
	 * @param string $_email
	 * @param boolean $_enabled
	 * @return OvhStructCrontabStruct
	 */
	public function __construct($_id = NULL,$_path = NULL,$_desc = NULL,$_email = NULL,$_enabled = NULL)
	{
		parent::__construct(array('id'=>$_id,'path'=>$_path,'desc'=>$_desc,'email'=>$_email,'enabled'=>$_enabled));
	}
	/**
	 * Get id value
	 * @return int|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param int $_id the id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get path value
	 * @return string|null
	 */
	public function getPath()
	{
		return $this->path;
	}
	/**
	 * Set path value
	 * @param string $_path the path
	 * @return string
	 */
	public function setPath($_path)
	{
		return ($this->path = $_path);
	}
	/**
	 * Get desc value
	 * @return string|null
	 */
	public function getDesc()
	{
		return $this->desc;
	}
	/**
	 * Set desc value
	 * @param string $_desc the desc
	 * @return string
	 */
	public function setDesc($_desc)
	{
		return ($this->desc = $_desc);
	}
	/**
	 * Get email value
	 * @return string|null
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set email value
	 * @param string $_email the email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get enabled value
	 * @return boolean|null
	 */
	public function getEnabled()
	{
		return $this->enabled;
	}
	/**
	 * Set enabled value
	 * @param boolean $_enabled the enabled
	 * @return boolean
	 */
	public function setEnabled($_enabled)
	{
		return ($this->enabled = $_enabled);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructCrontabStruct
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