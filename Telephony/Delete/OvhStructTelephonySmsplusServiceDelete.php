<?php
/**
 * File for class OvhStructTelephonySmsplusServiceDelete
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsplusServiceDelete originally named telephonySmsplusServiceDelete
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsplusServiceDelete extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The shortCode
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $shortCode;
	/**
	 * The keyword
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $keyword;
	/**
	 * The cancelDelete
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $cancelDelete;
	/**
	 * Constructor method for telephonySmsplusServiceDelete
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_shortCode
	 * @param string $_keyword
	 * @param boolean $_cancelDelete
	 * @return OvhStructTelephonySmsplusServiceDelete
	 */
	public function __construct($_session = NULL,$_shortCode = NULL,$_keyword = NULL,$_cancelDelete = NULL)
	{
		parent::__construct(array('session'=>$_session,'shortCode'=>$_shortCode,'keyword'=>$_keyword,'cancelDelete'=>$_cancelDelete));
	}
	/**
	 * Get session value
	 * @return string|null
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set session value
	 * @param string $_session the session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get shortCode value
	 * @return string|null
	 */
	public function getShortCode()
	{
		return $this->shortCode;
	}
	/**
	 * Set shortCode value
	 * @param string $_shortCode the shortCode
	 * @return string
	 */
	public function setShortCode($_shortCode)
	{
		return ($this->shortCode = $_shortCode);
	}
	/**
	 * Get keyword value
	 * @return string|null
	 */
	public function getKeyword()
	{
		return $this->keyword;
	}
	/**
	 * Set keyword value
	 * @param string $_keyword the keyword
	 * @return string
	 */
	public function setKeyword($_keyword)
	{
		return ($this->keyword = $_keyword);
	}
	/**
	 * Get cancelDelete value
	 * @return boolean|null
	 */
	public function getCancelDelete()
	{
		return $this->cancelDelete;
	}
	/**
	 * Set cancelDelete value
	 * @param boolean $_cancelDelete the cancelDelete
	 * @return boolean
	 */
	public function setCancelDelete($_cancelDelete)
	{
		return ($this->cancelDelete = $_cancelDelete);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsplusServiceDelete
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