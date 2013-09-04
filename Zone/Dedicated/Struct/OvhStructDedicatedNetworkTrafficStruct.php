<?php
/**
 * File for class OvhStructDedicatedNetworkTrafficStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedNetworkTrafficStruct originally named dedicatedNetworkTrafficStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedNetworkTrafficStruct extends OvhWsdlClass
{
	/**
	 * The lastUpdate
	 * @var string
	 */
	public $lastUpdate;
	/**
	 * The currentQuota
	 * @var OvhStructDedicatedNetworkTrafficDetailsStruct
	 */
	public $currentQuota;
	/**
	 * The monthlyTraffic
	 * @var OvhStructDedicatedNetworkTrafficDetailsStruct
	 */
	public $monthlyTraffic;
	/**
	 * The nextTrafficReset
	 * @var string
	 */
	public $nextTrafficReset;
	/**
	 * The monthlyQuota
	 * @var string
	 */
	public $monthlyQuota;
	/**
	 * The nextQuotaReset
	 * @var string
	 */
	public $nextQuotaReset;
	/**
	 * Constructor method for dedicatedNetworkTrafficStruct
	 * @see parent::__construct()
	 * @param string $_lastUpdate
	 * @param OvhStructDedicatedNetworkTrafficDetailsStruct $_currentQuota
	 * @param OvhStructDedicatedNetworkTrafficDetailsStruct $_monthlyTraffic
	 * @param string $_nextTrafficReset
	 * @param string $_monthlyQuota
	 * @param string $_nextQuotaReset
	 * @return OvhStructDedicatedNetworkTrafficStruct
	 */
	public function __construct($_lastUpdate = NULL,$_currentQuota = NULL,$_monthlyTraffic = NULL,$_nextTrafficReset = NULL,$_monthlyQuota = NULL,$_nextQuotaReset = NULL)
	{
		parent::__construct(array('lastUpdate'=>$_lastUpdate,'currentQuota'=>$_currentQuota,'monthlyTraffic'=>$_monthlyTraffic,'nextTrafficReset'=>$_nextTrafficReset,'monthlyQuota'=>$_monthlyQuota,'nextQuotaReset'=>$_nextQuotaReset));
	}
	/**
	 * Get lastUpdate value
	 * @return string|null
	 */
	public function getLastUpdate()
	{
		return $this->lastUpdate;
	}
	/**
	 * Set lastUpdate value
	 * @param string $_lastUpdate the lastUpdate
	 * @return string
	 */
	public function setLastUpdate($_lastUpdate)
	{
		return ($this->lastUpdate = $_lastUpdate);
	}
	/**
	 * Get currentQuota value
	 * @return OvhStructDedicatedNetworkTrafficDetailsStruct|null
	 */
	public function getCurrentQuota()
	{
		return $this->currentQuota;
	}
	/**
	 * Set currentQuota value
	 * @param OvhStructDedicatedNetworkTrafficDetailsStruct $_currentQuota the currentQuota
	 * @return OvhStructDedicatedNetworkTrafficDetailsStruct
	 */
	public function setCurrentQuota($_currentQuota)
	{
		return ($this->currentQuota = $_currentQuota);
	}
	/**
	 * Get monthlyTraffic value
	 * @return OvhStructDedicatedNetworkTrafficDetailsStruct|null
	 */
	public function getMonthlyTraffic()
	{
		return $this->monthlyTraffic;
	}
	/**
	 * Set monthlyTraffic value
	 * @param OvhStructDedicatedNetworkTrafficDetailsStruct $_monthlyTraffic the monthlyTraffic
	 * @return OvhStructDedicatedNetworkTrafficDetailsStruct
	 */
	public function setMonthlyTraffic($_monthlyTraffic)
	{
		return ($this->monthlyTraffic = $_monthlyTraffic);
	}
	/**
	 * Get nextTrafficReset value
	 * @return string|null
	 */
	public function getNextTrafficReset()
	{
		return $this->nextTrafficReset;
	}
	/**
	 * Set nextTrafficReset value
	 * @param string $_nextTrafficReset the nextTrafficReset
	 * @return string
	 */
	public function setNextTrafficReset($_nextTrafficReset)
	{
		return ($this->nextTrafficReset = $_nextTrafficReset);
	}
	/**
	 * Get monthlyQuota value
	 * @return string|null
	 */
	public function getMonthlyQuota()
	{
		return $this->monthlyQuota;
	}
	/**
	 * Set monthlyQuota value
	 * @param string $_monthlyQuota the monthlyQuota
	 * @return string
	 */
	public function setMonthlyQuota($_monthlyQuota)
	{
		return ($this->monthlyQuota = $_monthlyQuota);
	}
	/**
	 * Get nextQuotaReset value
	 * @return string|null
	 */
	public function getNextQuotaReset()
	{
		return $this->nextQuotaReset;
	}
	/**
	 * Set nextQuotaReset value
	 * @param string $_nextQuotaReset the nextQuotaReset
	 * @return string
	 */
	public function setNextQuotaReset($_nextQuotaReset)
	{
		return ($this->nextQuotaReset = $_nextQuotaReset);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedNetworkTrafficStruct
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