<?php
/**
 * File for class OvhStructCmsAvailableStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructCmsAvailableStruct originally named cmsAvailableStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructCmsAvailableStruct extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The version
	 * @var string
	 */
	public $version;
	/**
	 * The language
	 * @var OvhStructMyArrayOfStringType
	 */
	public $language;
	/**
	 * The category
	 * @var string
	 */
	public $category;
	/**
	 * The dbPrefix
	 * @var string
	 */
	public $dbPrefix;
	/**
	 * The enable
	 * @var boolean
	 */
	public $enable;
	/**
	 * Constructor method for cmsAvailableStruct
	 * @see parent::__construct()
	 * @param string $_name
	 * @param string $_version
	 * @param OvhStructMyArrayOfStringType $_language
	 * @param string $_category
	 * @param string $_dbPrefix
	 * @param boolean $_enable
	 * @return OvhStructCmsAvailableStruct
	 */
	public function __construct($_name = NULL,$_version = NULL,$_language = NULL,$_category = NULL,$_dbPrefix = NULL,$_enable = NULL)
	{
		parent::__construct(array('name'=>$_name,'version'=>$_version,'language'=>($_language instanceof OvhStructMyArrayOfStringType)?$_language:new OvhStructMyArrayOfStringType($_language),'category'=>$_category,'dbPrefix'=>$_dbPrefix,'enable'=>$_enable));
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
	 * Get version value
	 * @return string|null
	 */
	public function getVersion()
	{
		return $this->version;
	}
	/**
	 * Set version value
	 * @param string $_version the version
	 * @return string
	 */
	public function setVersion($_version)
	{
		return ($this->version = $_version);
	}
	/**
	 * Get language value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set language value
	 * @param OvhStructMyArrayOfStringType $_language the language
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get category value
	 * @return string|null
	 */
	public function getCategory()
	{
		return $this->category;
	}
	/**
	 * Set category value
	 * @param string $_category the category
	 * @return string
	 */
	public function setCategory($_category)
	{
		return ($this->category = $_category);
	}
	/**
	 * Get dbPrefix value
	 * @return string|null
	 */
	public function getDbPrefix()
	{
		return $this->dbPrefix;
	}
	/**
	 * Set dbPrefix value
	 * @param string $_dbPrefix the dbPrefix
	 * @return string
	 */
	public function setDbPrefix($_dbPrefix)
	{
		return ($this->dbPrefix = $_dbPrefix);
	}
	/**
	 * Get enable value
	 * @return boolean|null
	 */
	public function getEnable()
	{
		return $this->enable;
	}
	/**
	 * Set enable value
	 * @param boolean $_enable the enable
	 * @return boolean
	 */
	public function setEnable($_enable)
	{
		return ($this->enable = $_enable);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructCmsAvailableStruct
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