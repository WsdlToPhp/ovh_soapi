<?php
/**
 * File for class OvhStructHostingGetCapabilitiesReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructHostingGetCapabilitiesReturn originally named hostingGetCapabilitiesReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructHostingGetCapabilitiesReturn extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The webspace
	 * @var int
	 */
	public $webspace;
	/**
	 * The traffic
	 * @var string
	 */
	public $traffic;
	/**
	 * The databases
	 * @var int
	 */
	public $databases;
	/**
	 * The databaseSpace
	 * @var int
	 */
	public $databaseSpace;
	/**
	 * The multidomains
	 * @var int
	 */
	public $multidomains;
	/**
	 * The subdomains
	 * @var int
	 */
	public $subdomains;
	/**
	 * The streaming
	 * @var int
	 */
	public $streaming;
	/**
	 * The multiftp
	 * @var int
	 */
	public $multiftp;
	/**
	 * The anonymousftp
	 * @var int
	 */
	public $anonymousftp;
	/**
	 * The freeDomPerYear
	 * @var int
	 */
	public $freeDomPerYear;
	/**
	 * The freeDomMax
	 * @var int
	 */
	public $freeDomMax;
	/**
	 * The sharedSSL
	 * @var boolean
	 */
	public $sharedSSL;
	/**
	 * The ssh
	 * @var boolean
	 */
	public $ssh;
	/**
	 * The geoloc
	 * @var boolean
	 */
	public $geoloc;
	/**
	 * The cgi
	 * @var boolean
	 */
	public $cgi;
	/**
	 * The crontab
	 * @var boolean
	 */
	public $crontab;
	/**
	 * The sip
	 * @var boolean
	 */
	public $sip;
	/**
	 * The vpn
	 * @var boolean
	 */
	public $vpn;
	/**
	 * The jabber
	 * @var boolean
	 */
	public $jabber;
	/**
	 * Constructor method for hostingGetCapabilitiesReturn
	 * @see parent::__construct()
	 * @param string $_name
	 * @param int $_webspace
	 * @param string $_traffic
	 * @param int $_databases
	 * @param int $_databaseSpace
	 * @param int $_multidomains
	 * @param int $_subdomains
	 * @param int $_streaming
	 * @param int $_multiftp
	 * @param int $_anonymousftp
	 * @param int $_freeDomPerYear
	 * @param int $_freeDomMax
	 * @param boolean $_sharedSSL
	 * @param boolean $_ssh
	 * @param boolean $_geoloc
	 * @param boolean $_cgi
	 * @param boolean $_crontab
	 * @param boolean $_sip
	 * @param boolean $_vpn
	 * @param boolean $_jabber
	 * @return OvhStructHostingGetCapabilitiesReturn
	 */
	public function __construct($_name = NULL,$_webspace = NULL,$_traffic = NULL,$_databases = NULL,$_databaseSpace = NULL,$_multidomains = NULL,$_subdomains = NULL,$_streaming = NULL,$_multiftp = NULL,$_anonymousftp = NULL,$_freeDomPerYear = NULL,$_freeDomMax = NULL,$_sharedSSL = NULL,$_ssh = NULL,$_geoloc = NULL,$_cgi = NULL,$_crontab = NULL,$_sip = NULL,$_vpn = NULL,$_jabber = NULL)
	{
		parent::__construct(array('name'=>$_name,'webspace'=>$_webspace,'traffic'=>$_traffic,'databases'=>$_databases,'databaseSpace'=>$_databaseSpace,'multidomains'=>$_multidomains,'subdomains'=>$_subdomains,'streaming'=>$_streaming,'multiftp'=>$_multiftp,'anonymousftp'=>$_anonymousftp,'freeDomPerYear'=>$_freeDomPerYear,'freeDomMax'=>$_freeDomMax,'sharedSSL'=>$_sharedSSL,'ssh'=>$_ssh,'geoloc'=>$_geoloc,'cgi'=>$_cgi,'crontab'=>$_crontab,'sip'=>$_sip,'vpn'=>$_vpn,'jabber'=>$_jabber));
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
	 * Get webspace value
	 * @return int|null
	 */
	public function getWebspace()
	{
		return $this->webspace;
	}
	/**
	 * Set webspace value
	 * @param int $_webspace the webspace
	 * @return int
	 */
	public function setWebspace($_webspace)
	{
		return ($this->webspace = $_webspace);
	}
	/**
	 * Get traffic value
	 * @return string|null
	 */
	public function getTraffic()
	{
		return $this->traffic;
	}
	/**
	 * Set traffic value
	 * @param string $_traffic the traffic
	 * @return string
	 */
	public function setTraffic($_traffic)
	{
		return ($this->traffic = $_traffic);
	}
	/**
	 * Get databases value
	 * @return int|null
	 */
	public function getDatabases()
	{
		return $this->databases;
	}
	/**
	 * Set databases value
	 * @param int $_databases the databases
	 * @return int
	 */
	public function setDatabases($_databases)
	{
		return ($this->databases = $_databases);
	}
	/**
	 * Get databaseSpace value
	 * @return int|null
	 */
	public function getDatabaseSpace()
	{
		return $this->databaseSpace;
	}
	/**
	 * Set databaseSpace value
	 * @param int $_databaseSpace the databaseSpace
	 * @return int
	 */
	public function setDatabaseSpace($_databaseSpace)
	{
		return ($this->databaseSpace = $_databaseSpace);
	}
	/**
	 * Get multidomains value
	 * @return int|null
	 */
	public function getMultidomains()
	{
		return $this->multidomains;
	}
	/**
	 * Set multidomains value
	 * @param int $_multidomains the multidomains
	 * @return int
	 */
	public function setMultidomains($_multidomains)
	{
		return ($this->multidomains = $_multidomains);
	}
	/**
	 * Get subdomains value
	 * @return int|null
	 */
	public function getSubdomains()
	{
		return $this->subdomains;
	}
	/**
	 * Set subdomains value
	 * @param int $_subdomains the subdomains
	 * @return int
	 */
	public function setSubdomains($_subdomains)
	{
		return ($this->subdomains = $_subdomains);
	}
	/**
	 * Get streaming value
	 * @return int|null
	 */
	public function getStreaming()
	{
		return $this->streaming;
	}
	/**
	 * Set streaming value
	 * @param int $_streaming the streaming
	 * @return int
	 */
	public function setStreaming($_streaming)
	{
		return ($this->streaming = $_streaming);
	}
	/**
	 * Get multiftp value
	 * @return int|null
	 */
	public function getMultiftp()
	{
		return $this->multiftp;
	}
	/**
	 * Set multiftp value
	 * @param int $_multiftp the multiftp
	 * @return int
	 */
	public function setMultiftp($_multiftp)
	{
		return ($this->multiftp = $_multiftp);
	}
	/**
	 * Get anonymousftp value
	 * @return int|null
	 */
	public function getAnonymousftp()
	{
		return $this->anonymousftp;
	}
	/**
	 * Set anonymousftp value
	 * @param int $_anonymousftp the anonymousftp
	 * @return int
	 */
	public function setAnonymousftp($_anonymousftp)
	{
		return ($this->anonymousftp = $_anonymousftp);
	}
	/**
	 * Get freeDomPerYear value
	 * @return int|null
	 */
	public function getFreeDomPerYear()
	{
		return $this->freeDomPerYear;
	}
	/**
	 * Set freeDomPerYear value
	 * @param int $_freeDomPerYear the freeDomPerYear
	 * @return int
	 */
	public function setFreeDomPerYear($_freeDomPerYear)
	{
		return ($this->freeDomPerYear = $_freeDomPerYear);
	}
	/**
	 * Get freeDomMax value
	 * @return int|null
	 */
	public function getFreeDomMax()
	{
		return $this->freeDomMax;
	}
	/**
	 * Set freeDomMax value
	 * @param int $_freeDomMax the freeDomMax
	 * @return int
	 */
	public function setFreeDomMax($_freeDomMax)
	{
		return ($this->freeDomMax = $_freeDomMax);
	}
	/**
	 * Get sharedSSL value
	 * @return boolean|null
	 */
	public function getSharedSSL()
	{
		return $this->sharedSSL;
	}
	/**
	 * Set sharedSSL value
	 * @param boolean $_sharedSSL the sharedSSL
	 * @return boolean
	 */
	public function setSharedSSL($_sharedSSL)
	{
		return ($this->sharedSSL = $_sharedSSL);
	}
	/**
	 * Get ssh value
	 * @return boolean|null
	 */
	public function getSsh()
	{
		return $this->ssh;
	}
	/**
	 * Set ssh value
	 * @param boolean $_ssh the ssh
	 * @return boolean
	 */
	public function setSsh($_ssh)
	{
		return ($this->ssh = $_ssh);
	}
	/**
	 * Get geoloc value
	 * @return boolean|null
	 */
	public function getGeoloc()
	{
		return $this->geoloc;
	}
	/**
	 * Set geoloc value
	 * @param boolean $_geoloc the geoloc
	 * @return boolean
	 */
	public function setGeoloc($_geoloc)
	{
		return ($this->geoloc = $_geoloc);
	}
	/**
	 * Get cgi value
	 * @return boolean|null
	 */
	public function getCgi()
	{
		return $this->cgi;
	}
	/**
	 * Set cgi value
	 * @param boolean $_cgi the cgi
	 * @return boolean
	 */
	public function setCgi($_cgi)
	{
		return ($this->cgi = $_cgi);
	}
	/**
	 * Get crontab value
	 * @return boolean|null
	 */
	public function getCrontab()
	{
		return $this->crontab;
	}
	/**
	 * Set crontab value
	 * @param boolean $_crontab the crontab
	 * @return boolean
	 */
	public function setCrontab($_crontab)
	{
		return ($this->crontab = $_crontab);
	}
	/**
	 * Get sip value
	 * @return boolean|null
	 */
	public function getSip()
	{
		return $this->sip;
	}
	/**
	 * Set sip value
	 * @param boolean $_sip the sip
	 * @return boolean
	 */
	public function setSip($_sip)
	{
		return ($this->sip = $_sip);
	}
	/**
	 * Get vpn value
	 * @return boolean|null
	 */
	public function getVpn()
	{
		return $this->vpn;
	}
	/**
	 * Set vpn value
	 * @param boolean $_vpn the vpn
	 * @return boolean
	 */
	public function setVpn($_vpn)
	{
		return ($this->vpn = $_vpn);
	}
	/**
	 * Get jabber value
	 * @return boolean|null
	 */
	public function getJabber()
	{
		return $this->jabber;
	}
	/**
	 * Set jabber value
	 * @param boolean $_jabber the jabber
	 * @return boolean
	 */
	public function setJabber($_jabber)
	{
		return ($this->jabber = $_jabber);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructHostingGetCapabilitiesReturn
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