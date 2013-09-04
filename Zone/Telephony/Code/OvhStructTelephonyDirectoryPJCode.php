<?php
/**
 * File for class OvhStructTelephonyDirectoryPJCode
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyDirectoryPJCode originally named telephonyDirectoryPJCode
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyDirectoryPJCode extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The ape
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ape;
	/**
	 * The PJCode
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $PJCode;
	/**
	 * The showOnlyAssociatedWithAPE
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $showOnlyAssociatedWithAPE;
	/**
	 * Constructor method for telephonyDirectoryPJCode
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_ape
	 * @param string $_pJCode
	 * @param boolean $_showOnlyAssociatedWithAPE
	 * @return OvhStructTelephonyDirectoryPJCode
	 */
	public function __construct($_session = NULL,$_ape = NULL,$_pJCode = NULL,$_showOnlyAssociatedWithAPE = NULL)
	{
		parent::__construct(array('session'=>$_session,'ape'=>$_ape,'PJCode'=>$_pJCode,'showOnlyAssociatedWithAPE'=>$_showOnlyAssociatedWithAPE));
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
	 * Get ape value
	 * @return string|null
	 */
	public function getApe()
	{
		return $this->ape;
	}
	/**
	 * Set ape value
	 * @param string $_ape the ape
	 * @return string
	 */
	public function setApe($_ape)
	{
		return ($this->ape = $_ape);
	}
	/**
	 * Get PJCode value
	 * @return string|null
	 */
	public function getPJCode()
	{
		return $this->PJCode;
	}
	/**
	 * Set PJCode value
	 * @param string $_pJCode the PJCode
	 * @return string
	 */
	public function setPJCode($_pJCode)
	{
		return ($this->PJCode = $_pJCode);
	}
	/**
	 * Get showOnlyAssociatedWithAPE value
	 * @return boolean|null
	 */
	public function getShowOnlyAssociatedWithAPE()
	{
		return $this->showOnlyAssociatedWithAPE;
	}
	/**
	 * Set showOnlyAssociatedWithAPE value
	 * @param boolean $_showOnlyAssociatedWithAPE the showOnlyAssociatedWithAPE
	 * @return boolean
	 */
	public function setShowOnlyAssociatedWithAPE($_showOnlyAssociatedWithAPE)
	{
		return ($this->showOnlyAssociatedWithAPE = $_showOnlyAssociatedWithAPE);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyDirectoryPJCode
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