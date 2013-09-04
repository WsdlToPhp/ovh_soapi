<?php
/**
 * File for class OvhStructFtpInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructFtpInfoReturn originally named ftpInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructFtpInfoReturn extends OvhWsdlClass
{
	/**
	 * The login
	 * @var string
	 */
	public $login;
	/**
	 * The quota
	 * @var int
	 */
	public $quota;
	/**
	 * The maxQuota
	 * @var int
	 */
	public $maxQuota;
	/**
	 * The url
	 * @var string
	 */
	public $url;
	/**
	 * The hostedOn
	 * @var string
	 */
	public $hostedOn;
	/**
	 * The isTodo
	 * @var string
	 */
	public $isTodo;
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
	 * Constructor method for ftpInfoReturn
	 * @see parent::__construct()
	 * @param string $_login
	 * @param int $_quota
	 * @param int $_maxQuota
	 * @param string $_url
	 * @param string $_hostedOn
	 * @param string $_isTodo
	 * @param boolean $_highCapacity
	 * @param boolean $_highSecurity
	 * @return OvhStructFtpInfoReturn
	 */
	public function __construct($_login = NULL,$_quota = NULL,$_maxQuota = NULL,$_url = NULL,$_hostedOn = NULL,$_isTodo = NULL,$_highCapacity = NULL,$_highSecurity = NULL)
	{
		parent::__construct(array('login'=>$_login,'quota'=>$_quota,'maxQuota'=>$_maxQuota,'url'=>$_url,'hostedOn'=>$_hostedOn,'isTodo'=>$_isTodo,'highCapacity'=>$_highCapacity,'highSecurity'=>$_highSecurity));
	}
	/**
	 * Get login value
	 * @return string|null
	 */
	public function getLogin()
	{
		return $this->login;
	}
	/**
	 * Set login value
	 * @param string $_login the login
	 * @return string
	 */
	public function setLogin($_login)
	{
		return ($this->login = $_login);
	}
	/**
	 * Get quota value
	 * @return int|null
	 */
	public function getQuota()
	{
		return $this->quota;
	}
	/**
	 * Set quota value
	 * @param int $_quota the quota
	 * @return int
	 */
	public function setQuota($_quota)
	{
		return ($this->quota = $_quota);
	}
	/**
	 * Get maxQuota value
	 * @return int|null
	 */
	public function getMaxQuota()
	{
		return $this->maxQuota;
	}
	/**
	 * Set maxQuota value
	 * @param int $_maxQuota the maxQuota
	 * @return int
	 */
	public function setMaxQuota($_maxQuota)
	{
		return ($this->maxQuota = $_maxQuota);
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
	 * Get hostedOn value
	 * @return string|null
	 */
	public function getHostedOn()
	{
		return $this->hostedOn;
	}
	/**
	 * Set hostedOn value
	 * @param string $_hostedOn the hostedOn
	 * @return string
	 */
	public function setHostedOn($_hostedOn)
	{
		return ($this->hostedOn = $_hostedOn);
	}
	/**
	 * Get isTodo value
	 * @return string|null
	 */
	public function getIsTodo()
	{
		return $this->isTodo;
	}
	/**
	 * Set isTodo value
	 * @param string $_isTodo the isTodo
	 * @return string
	 */
	public function setIsTodo($_isTodo)
	{
		return ($this->isTodo = $_isTodo);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructFtpInfoReturn
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