<?php
/**
 * File for class OvhStructHostingSummaryReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructHostingSummaryReturn originally named hostingSummaryReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructHostingSummaryReturn extends OvhWsdlClass
{
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The webspace
	 * @var string
	 */
	public $webspace;
	/**
	 * The maxWebspace
	 * @var string
	 */
	public $maxWebspace;
	/**
	 * The subdomains
	 * @var string
	 */
	public $subdomains;
	/**
	 * The multidomains
	 * @var string
	 */
	public $multidomains;
	/**
	 * The multiftps
	 * @var string
	 */
	public $multiftps;
	/**
	 * The anonymousftp
	 * @var string
	 */
	public $anonymousftp;
	/**
	 * The databases
	 * @var string
	 */
	public $databases;
	/**
	 * The freedom_remaining
	 * @var string
	 */
	public $freedom_remaining;
	/**
	 * The freedom_assigned
	 * @var string
	 */
	public $freedom_assigned;
	/**
	 * The freedom_total
	 * @var string
	 */
	public $freedom_total;
	/**
	 * The highCapacity
	 * @var boolean
	 */
	public $highCapacity;
	/**
	 * The highSecurity
	 * @var boolean
	 */
	public $highSecurity;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * Constructor method for hostingSummaryReturn
	 * @see parent::__construct()
	 * @param string $_country
	 * @param string $_webspace
	 * @param string $_maxWebspace
	 * @param string $_subdomains
	 * @param string $_multidomains
	 * @param string $_multiftps
	 * @param string $_anonymousftp
	 * @param string $_databases
	 * @param string $_freedom_remaining
	 * @param string $_freedom_assigned
	 * @param string $_freedom_total
	 * @param boolean $_highCapacity
	 * @param boolean $_highSecurity
	 * @param string $_state
	 * @return OvhStructHostingSummaryReturn
	 */
	public function __construct($_country = NULL,$_webspace = NULL,$_maxWebspace = NULL,$_subdomains = NULL,$_multidomains = NULL,$_multiftps = NULL,$_anonymousftp = NULL,$_databases = NULL,$_freedom_remaining = NULL,$_freedom_assigned = NULL,$_freedom_total = NULL,$_highCapacity = NULL,$_highSecurity = NULL,$_state = NULL)
	{
		parent::__construct(array('country'=>$_country,'webspace'=>$_webspace,'maxWebspace'=>$_maxWebspace,'subdomains'=>$_subdomains,'multidomains'=>$_multidomains,'multiftps'=>$_multiftps,'anonymousftp'=>$_anonymousftp,'databases'=>$_databases,'freedom_remaining'=>$_freedom_remaining,'freedom_assigned'=>$_freedom_assigned,'freedom_total'=>$_freedom_total,'highCapacity'=>$_highCapacity,'highSecurity'=>$_highSecurity,'state'=>$_state));
	}
	/**
	 * Get country value
	 * @return string|null
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set country value
	 * @param string $_country the country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get webspace value
	 * @return string|null
	 */
	public function getWebspace()
	{
		return $this->webspace;
	}
	/**
	 * Set webspace value
	 * @param string $_webspace the webspace
	 * @return string
	 */
	public function setWebspace($_webspace)
	{
		return ($this->webspace = $_webspace);
	}
	/**
	 * Get maxWebspace value
	 * @return string|null
	 */
	public function getMaxWebspace()
	{
		return $this->maxWebspace;
	}
	/**
	 * Set maxWebspace value
	 * @param string $_maxWebspace the maxWebspace
	 * @return string
	 */
	public function setMaxWebspace($_maxWebspace)
	{
		return ($this->maxWebspace = $_maxWebspace);
	}
	/**
	 * Get subdomains value
	 * @return string|null
	 */
	public function getSubdomains()
	{
		return $this->subdomains;
	}
	/**
	 * Set subdomains value
	 * @param string $_subdomains the subdomains
	 * @return string
	 */
	public function setSubdomains($_subdomains)
	{
		return ($this->subdomains = $_subdomains);
	}
	/**
	 * Get multidomains value
	 * @return string|null
	 */
	public function getMultidomains()
	{
		return $this->multidomains;
	}
	/**
	 * Set multidomains value
	 * @param string $_multidomains the multidomains
	 * @return string
	 */
	public function setMultidomains($_multidomains)
	{
		return ($this->multidomains = $_multidomains);
	}
	/**
	 * Get multiftps value
	 * @return string|null
	 */
	public function getMultiftps()
	{
		return $this->multiftps;
	}
	/**
	 * Set multiftps value
	 * @param string $_multiftps the multiftps
	 * @return string
	 */
	public function setMultiftps($_multiftps)
	{
		return ($this->multiftps = $_multiftps);
	}
	/**
	 * Get anonymousftp value
	 * @return string|null
	 */
	public function getAnonymousftp()
	{
		return $this->anonymousftp;
	}
	/**
	 * Set anonymousftp value
	 * @param string $_anonymousftp the anonymousftp
	 * @return string
	 */
	public function setAnonymousftp($_anonymousftp)
	{
		return ($this->anonymousftp = $_anonymousftp);
	}
	/**
	 * Get databases value
	 * @return string|null
	 */
	public function getDatabases()
	{
		return $this->databases;
	}
	/**
	 * Set databases value
	 * @param string $_databases the databases
	 * @return string
	 */
	public function setDatabases($_databases)
	{
		return ($this->databases = $_databases);
	}
	/**
	 * Get freedom_remaining value
	 * @return string|null
	 */
	public function getFreedom_remaining()
	{
		return $this->freedom_remaining;
	}
	/**
	 * Set freedom_remaining value
	 * @param string $_freedom_remaining the freedom_remaining
	 * @return string
	 */
	public function setFreedom_remaining($_freedom_remaining)
	{
		return ($this->freedom_remaining = $_freedom_remaining);
	}
	/**
	 * Get freedom_assigned value
	 * @return string|null
	 */
	public function getFreedom_assigned()
	{
		return $this->freedom_assigned;
	}
	/**
	 * Set freedom_assigned value
	 * @param string $_freedom_assigned the freedom_assigned
	 * @return string
	 */
	public function setFreedom_assigned($_freedom_assigned)
	{
		return ($this->freedom_assigned = $_freedom_assigned);
	}
	/**
	 * Get freedom_total value
	 * @return string|null
	 */
	public function getFreedom_total()
	{
		return $this->freedom_total;
	}
	/**
	 * Set freedom_total value
	 * @param string $_freedom_total the freedom_total
	 * @return string
	 */
	public function setFreedom_total($_freedom_total)
	{
		return ($this->freedom_total = $_freedom_total);
	}
	/**
	 * Get highCapacity value
	 * @return boolean|null
	 */
	public function getHighCapacity()
	{
		return $this->highCapacity;
	}
	/**
	 * Set highCapacity value
	 * @param boolean $_highCapacity the highCapacity
	 * @return boolean
	 */
	public function setHighCapacity($_highCapacity)
	{
		return ($this->highCapacity = $_highCapacity);
	}
	/**
	 * Get highSecurity value
	 * @return boolean|null
	 */
	public function getHighSecurity()
	{
		return $this->highSecurity;
	}
	/**
	 * Set highSecurity value
	 * @param boolean $_highSecurity the highSecurity
	 * @return boolean
	 */
	public function setHighSecurity($_highSecurity)
	{
		return ($this->highSecurity = $_highSecurity);
	}
	/**
	 * Get state value
	 * @return string|null
	 */
	public function getState()
	{
		return $this->state;
	}
	/**
	 * Set state value
	 * @param string $_state the state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructHostingSummaryReturn
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