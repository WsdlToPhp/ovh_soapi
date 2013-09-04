<?php
/**
 * File for class OvhStructEmailRedirectionStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructEmailRedirectionStruct originally named emailRedirectionStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructEmailRedirectionStruct extends OvhWsdlClass
{
	/**
	 * The target
	 * @var string
	 */
	public $target;
	/**
	 * The local
	 * @var string
	 */
	public $local;
	/**
	 * The subdomain
	 * @var string
	 */
	public $subdomain;
	/**
	 * The dnsRedirection
	 * @var boolean
	 */
	public $dnsRedirection;
	/**
	 * Constructor method for emailRedirectionStruct
	 * @see parent::__construct()
	 * @param string $_target
	 * @param string $_local
	 * @param string $_subdomain
	 * @param boolean $_dnsRedirection
	 * @return OvhStructEmailRedirectionStruct
	 */
	public function __construct($_target = NULL,$_local = NULL,$_subdomain = NULL,$_dnsRedirection = NULL)
	{
		parent::__construct(array('target'=>$_target,'local'=>$_local,'subdomain'=>$_subdomain,'dnsRedirection'=>$_dnsRedirection));
	}
	/**
	 * Get target value
	 * @return string|null
	 */
	public function getTarget()
	{
		return $this->target;
	}
	/**
	 * Set target value
	 * @param string $_target the target
	 * @return string
	 */
	public function setTarget($_target)
	{
		return ($this->target = $_target);
	}
	/**
	 * Get local value
	 * @return string|null
	 */
	public function getLocal()
	{
		return $this->local;
	}
	/**
	 * Set local value
	 * @param string $_local the local
	 * @return string
	 */
	public function setLocal($_local)
	{
		return ($this->local = $_local);
	}
	/**
	 * Get subdomain value
	 * @return string|null
	 */
	public function getSubdomain()
	{
		return $this->subdomain;
	}
	/**
	 * Set subdomain value
	 * @param string $_subdomain the subdomain
	 * @return string
	 */
	public function setSubdomain($_subdomain)
	{
		return ($this->subdomain = $_subdomain);
	}
	/**
	 * Get dnsRedirection value
	 * @return boolean|null
	 */
	public function getDnsRedirection()
	{
		return $this->dnsRedirection;
	}
	/**
	 * Set dnsRedirection value
	 * @param boolean $_dnsRedirection the dnsRedirection
	 * @return boolean
	 */
	public function setDnsRedirection($_dnsRedirection)
	{
		return ($this->dnsRedirection = $_dnsRedirection);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructEmailRedirectionStruct
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