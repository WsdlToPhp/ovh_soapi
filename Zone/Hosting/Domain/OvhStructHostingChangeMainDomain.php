<?php
/**
 * File for class OvhStructHostingChangeMainDomain
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructHostingChangeMainDomain originally named hostingChangeMainDomain
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructHostingChangeMainDomain extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $domain;
	/**
	 * The newDomain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $newDomain;
	/**
	 * The mxAction
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $mxAction;
	/**
	 * The mxOffer
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $mxOffer;
	/**
	 * Constructor method for hostingChangeMainDomain
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_newDomain
	 * @param string $_mxAction
	 * @param string $_mxOffer
	 * @return OvhStructHostingChangeMainDomain
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_newDomain = NULL,$_mxAction = NULL,$_mxOffer = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'newDomain'=>$_newDomain,'mxAction'=>$_mxAction,'mxOffer'=>$_mxOffer));
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
	 * Get domain value
	 * @return string|null
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set domain value
	 * @param string $_domain the domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get newDomain value
	 * @return string|null
	 */
	public function getNewDomain()
	{
		return $this->newDomain;
	}
	/**
	 * Set newDomain value
	 * @param string $_newDomain the newDomain
	 * @return string
	 */
	public function setNewDomain($_newDomain)
	{
		return ($this->newDomain = $_newDomain);
	}
	/**
	 * Get mxAction value
	 * @return string|null
	 */
	public function getMxAction()
	{
		return $this->mxAction;
	}
	/**
	 * Set mxAction value
	 * @param string $_mxAction the mxAction
	 * @return string
	 */
	public function setMxAction($_mxAction)
	{
		return ($this->mxAction = $_mxAction);
	}
	/**
	 * Get mxOffer value
	 * @return string|null
	 */
	public function getMxOffer()
	{
		return $this->mxOffer;
	}
	/**
	 * Set mxOffer value
	 * @param string $_mxOffer the mxOffer
	 * @return string
	 */
	public function setMxOffer($_mxOffer)
	{
		return ($this->mxOffer = $_mxOffer);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructHostingChangeMainDomain
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