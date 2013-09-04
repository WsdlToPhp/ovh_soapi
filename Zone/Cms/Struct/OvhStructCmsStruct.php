<?php
/**
 * File for class OvhStructCmsStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructCmsStruct originally named cmsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructCmsStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
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
	 * @var string
	 */
	public $language;
	/**
	 * The url
	 * @var string
	 */
	public $url;
	/**
	 * The path
	 * @var string
	 */
	public $path;
	/**
	 * The adminLogin
	 * @var string
	 */
	public $adminLogin;
	/**
	 * Constructor method for cmsStruct
	 * @see parent::__construct()
	 * @param int $_id
	 * @param string $_name
	 * @param string $_version
	 * @param string $_language
	 * @param string $_url
	 * @param string $_path
	 * @param string $_adminLogin
	 * @return OvhStructCmsStruct
	 */
	public function __construct($_id = NULL,$_name = NULL,$_version = NULL,$_language = NULL,$_url = NULL,$_path = NULL,$_adminLogin = NULL)
	{
		parent::__construct(array('id'=>$_id,'name'=>$_name,'version'=>$_version,'language'=>$_language,'url'=>$_url,'path'=>$_path,'adminLogin'=>$_adminLogin));
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
	 * @return string|null
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set language value
	 * @param string $_language the language
	 * @return string
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get url value
	 * @return string|null
	 */
	public function getUrl()
	{
		return $this->url;
	}
	/**
	 * Set url value
	 * @param string $_url the url
	 * @return string
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
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
	 * Get adminLogin value
	 * @return string|null
	 */
	public function getAdminLogin()
	{
		return $this->adminLogin;
	}
	/**
	 * Set adminLogin value
	 * @param string $_adminLogin the adminLogin
	 * @return string
	 */
	public function setAdminLogin($_adminLogin)
	{
		return ($this->adminLogin = $_adminLogin);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructCmsStruct
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