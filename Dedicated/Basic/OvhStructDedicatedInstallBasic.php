<?php
/**
 * File for class OvhStructDedicatedInstallBasic
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedInstallBasic originally named dedicatedInstallBasic
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedInstallBasic extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The hostname
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $hostname;
	/**
	 * The status
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $status;
	/**
	 * The language
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $language;
	/**
	 * The bitFormat
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $bitFormat;
	/**
	 * The os
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $os;
	/**
	 * The sql
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $sql;
	/**
	 * The customerScriptLink
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $customerScriptLink;
	/**
	 * The customerScriptReturn
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $customerScriptReturn;
	/**
	 * Constructor method for dedicatedInstallBasic
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_hostname
	 * @param string $_status
	 * @param string $_language
	 * @param string $_bitFormat
	 * @param string $_os
	 * @param string $_sql
	 * @param string $_customerScriptLink
	 * @param string $_customerScriptReturn
	 * @return OvhStructDedicatedInstallBasic
	 */
	public function __construct($_session = NULL,$_hostname = NULL,$_status = NULL,$_language = NULL,$_bitFormat = NULL,$_os = NULL,$_sql = NULL,$_customerScriptLink = NULL,$_customerScriptReturn = NULL)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'status'=>$_status,'language'=>$_language,'bitFormat'=>$_bitFormat,'os'=>$_os,'sql'=>$_sql,'customerScriptLink'=>$_customerScriptLink,'customerScriptReturn'=>$_customerScriptReturn));
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
	 * Get hostname value
	 * @return string|null
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set hostname value
	 * @param string $_hostname the hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param string $_status the status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
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
	 * Get bitFormat value
	 * @return string|null
	 */
	public function getBitFormat()
	{
		return $this->bitFormat;
	}
	/**
	 * Set bitFormat value
	 * @param string $_bitFormat the bitFormat
	 * @return string
	 */
	public function setBitFormat($_bitFormat)
	{
		return ($this->bitFormat = $_bitFormat);
	}
	/**
	 * Get os value
	 * @return string|null
	 */
	public function getOs()
	{
		return $this->os;
	}
	/**
	 * Set os value
	 * @param string $_os the os
	 * @return string
	 */
	public function setOs($_os)
	{
		return ($this->os = $_os);
	}
	/**
	 * Get sql value
	 * @return string|null
	 */
	public function getSql()
	{
		return $this->sql;
	}
	/**
	 * Set sql value
	 * @param string $_sql the sql
	 * @return string
	 */
	public function setSql($_sql)
	{
		return ($this->sql = $_sql);
	}
	/**
	 * Get customerScriptLink value
	 * @return string|null
	 */
	public function getCustomerScriptLink()
	{
		return $this->customerScriptLink;
	}
	/**
	 * Set customerScriptLink value
	 * @param string $_customerScriptLink the customerScriptLink
	 * @return string
	 */
	public function setCustomerScriptLink($_customerScriptLink)
	{
		return ($this->customerScriptLink = $_customerScriptLink);
	}
	/**
	 * Get customerScriptReturn value
	 * @return string|null
	 */
	public function getCustomerScriptReturn()
	{
		return $this->customerScriptReturn;
	}
	/**
	 * Set customerScriptReturn value
	 * @param string $_customerScriptReturn the customerScriptReturn
	 * @return string
	 */
	public function setCustomerScriptReturn($_customerScriptReturn)
	{
		return ($this->customerScriptReturn = $_customerScriptReturn);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedInstallBasic
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