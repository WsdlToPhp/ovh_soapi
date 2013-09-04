<?php
/**
 * File for class OvhStructLogin
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructLogin originally named login
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructLogin extends OvhWsdlClass
{
	/**
	 * The nic
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $nic;
	/**
	 * The password
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $password;
	/**
	 * The language
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $language;
	/**
	 * The multisession
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $multisession;
	/**
	 * Constructor method for login
	 * @see parent::__construct()
	 * @param string $_nic
	 * @param string $_password
	 * @param string $_language
	 * @param boolean $_multisession
	 * @return OvhStructLogin
	 */
	public function __construct($_nic = NULL,$_password = NULL,$_language = NULL,$_multisession = NULL)
	{
		parent::__construct(array('nic'=>$_nic,'password'=>$_password,'language'=>$_language,'multisession'=>$_multisession));
	}
	/**
	 * Get nic value
	 * @return string|null
	 */
	public function getNic()
	{
		return $this->nic;
	}
	/**
	 * Set nic value
	 * @param string $_nic the nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
	}
	/**
	 * Get password value
	 * @return string|null
	 */
	public function getPassword()
	{
		return $this->password;
	}
	/**
	 * Set password value
	 * @param string $_password the password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
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
	 * Get multisession value
	 * @return boolean|null
	 */
	public function getMultisession()
	{
		return $this->multisession;
	}
	/**
	 * Set multisession value
	 * @param boolean $_multisession the multisession
	 * @return boolean
	 */
	public function setMultisession($_multisession)
	{
		return ($this->multisession = $_multisession);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructLogin
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