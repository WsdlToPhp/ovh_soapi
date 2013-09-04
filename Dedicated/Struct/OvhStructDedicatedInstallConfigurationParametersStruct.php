<?php
/**
 * File for class OvhStructDedicatedInstallConfigurationParametersStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedInstallConfigurationParametersStruct originally named dedicatedInstallConfigurationParametersStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedInstallConfigurationParametersStruct extends OvhWsdlClass
{
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * The bitFormat
	 * @var string
	 */
	public $bitFormat;
	/**
	 * The softRaidDevices
	 * @var int
	 */
	public $softRaidDevices;
	/**
	 * The serverName
	 * @var string
	 */
	public $serverName;
	/**
	 * The softRaid
	 * @var string
	 */
	public $softRaid;
	/**
	 * The distribution
	 * @var string
	 */
	public $distribution;
	/**
	 * The resinstallTodoId
	 * @var int
	 */
	public $resinstallTodoId;
	/**
	 * Constructor method for dedicatedInstallConfigurationParametersStruct
	 * @see parent::__construct()
	 * @param string $_language
	 * @param string $_bitFormat
	 * @param int $_softRaidDevices
	 * @param string $_serverName
	 * @param string $_softRaid
	 * @param string $_distribution
	 * @param int $_resinstallTodoId
	 * @return OvhStructDedicatedInstallConfigurationParametersStruct
	 */
	public function __construct($_language = NULL,$_bitFormat = NULL,$_softRaidDevices = NULL,$_serverName = NULL,$_softRaid = NULL,$_distribution = NULL,$_resinstallTodoId = NULL)
	{
		parent::__construct(array('language'=>$_language,'bitFormat'=>$_bitFormat,'softRaidDevices'=>$_softRaidDevices,'serverName'=>$_serverName,'softRaid'=>$_softRaid,'distribution'=>$_distribution,'resinstallTodoId'=>$_resinstallTodoId));
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
	 * Get softRaidDevices value
	 * @return int|null
	 */
	public function getSoftRaidDevices()
	{
		return $this->softRaidDevices;
	}
	/**
	 * Set softRaidDevices value
	 * @param int $_softRaidDevices the softRaidDevices
	 * @return int
	 */
	public function setSoftRaidDevices($_softRaidDevices)
	{
		return ($this->softRaidDevices = $_softRaidDevices);
	}
	/**
	 * Get serverName value
	 * @return string|null
	 */
	public function getServerName()
	{
		return $this->serverName;
	}
	/**
	 * Set serverName value
	 * @param string $_serverName the serverName
	 * @return string
	 */
	public function setServerName($_serverName)
	{
		return ($this->serverName = $_serverName);
	}
	/**
	 * Get softRaid value
	 * @return string|null
	 */
	public function getSoftRaid()
	{
		return $this->softRaid;
	}
	/**
	 * Set softRaid value
	 * @param string $_softRaid the softRaid
	 * @return string
	 */
	public function setSoftRaid($_softRaid)
	{
		return ($this->softRaid = $_softRaid);
	}
	/**
	 * Get distribution value
	 * @return string|null
	 */
	public function getDistribution()
	{
		return $this->distribution;
	}
	/**
	 * Set distribution value
	 * @param string $_distribution the distribution
	 * @return string
	 */
	public function setDistribution($_distribution)
	{
		return ($this->distribution = $_distribution);
	}
	/**
	 * Get resinstallTodoId value
	 * @return int|null
	 */
	public function getResinstallTodoId()
	{
		return $this->resinstallTodoId;
	}
	/**
	 * Set resinstallTodoId value
	 * @param int $_resinstallTodoId the resinstallTodoId
	 * @return int
	 */
	public function setResinstallTodoId($_resinstallTodoId)
	{
		return ($this->resinstallTodoId = $_resinstallTodoId);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedInstallConfigurationParametersStruct
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