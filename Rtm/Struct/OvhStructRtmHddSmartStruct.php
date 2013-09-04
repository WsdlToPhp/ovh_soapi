<?php
/**
 * File for class OvhStructRtmHddSmartStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmHddSmartStruct originally named rtmHddSmartStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmHddSmartStruct extends OvhWsdlClass
{
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The multizoneErrorRate
	 * @var int
	 */
	public $multizoneErrorRate;
	/**
	 * The currentPendingSector
	 * @var int
	 */
	public $currentPendingSector;
	/**
	 * The udmaCrcError
	 * @var int
	 */
	public $udmaCrcError;
	/**
	 * The offlineUncorrectable
	 * @var int
	 */
	public $offlineUncorrectable;
	/**
	 * Constructor method for rtmHddSmartStruct
	 * @see parent::__construct()
	 * @param string $_status
	 * @param int $_multizoneErrorRate
	 * @param int $_currentPendingSector
	 * @param int $_udmaCrcError
	 * @param int $_offlineUncorrectable
	 * @return OvhStructRtmHddSmartStruct
	 */
	public function __construct($_status = NULL,$_multizoneErrorRate = NULL,$_currentPendingSector = NULL,$_udmaCrcError = NULL,$_offlineUncorrectable = NULL)
	{
		parent::__construct(array('status'=>$_status,'multizoneErrorRate'=>$_multizoneErrorRate,'currentPendingSector'=>$_currentPendingSector,'udmaCrcError'=>$_udmaCrcError,'offlineUncorrectable'=>$_offlineUncorrectable));
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
	 * Get multizoneErrorRate value
	 * @return int|null
	 */
	public function getMultizoneErrorRate()
	{
		return $this->multizoneErrorRate;
	}
	/**
	 * Set multizoneErrorRate value
	 * @param int $_multizoneErrorRate the multizoneErrorRate
	 * @return int
	 */
	public function setMultizoneErrorRate($_multizoneErrorRate)
	{
		return ($this->multizoneErrorRate = $_multizoneErrorRate);
	}
	/**
	 * Get currentPendingSector value
	 * @return int|null
	 */
	public function getCurrentPendingSector()
	{
		return $this->currentPendingSector;
	}
	/**
	 * Set currentPendingSector value
	 * @param int $_currentPendingSector the currentPendingSector
	 * @return int
	 */
	public function setCurrentPendingSector($_currentPendingSector)
	{
		return ($this->currentPendingSector = $_currentPendingSector);
	}
	/**
	 * Get udmaCrcError value
	 * @return int|null
	 */
	public function getUdmaCrcError()
	{
		return $this->udmaCrcError;
	}
	/**
	 * Set udmaCrcError value
	 * @param int $_udmaCrcError the udmaCrcError
	 * @return int
	 */
	public function setUdmaCrcError($_udmaCrcError)
	{
		return ($this->udmaCrcError = $_udmaCrcError);
	}
	/**
	 * Get offlineUncorrectable value
	 * @return int|null
	 */
	public function getOfflineUncorrectable()
	{
		return $this->offlineUncorrectable;
	}
	/**
	 * Set offlineUncorrectable value
	 * @param int $_offlineUncorrectable the offlineUncorrectable
	 * @return int
	 */
	public function setOfflineUncorrectable($_offlineUncorrectable)
	{
		return ($this->offlineUncorrectable = $_offlineUncorrectable);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmHddSmartStruct
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