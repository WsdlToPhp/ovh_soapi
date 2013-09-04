<?php
/**
 * File for class OvhStructTelephonyFaxCampaignStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyFaxCampaignStruct originally named telephonyFaxCampaignStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyFaxCampaignStruct extends OvhWsdlClass
{
	/**
	 * The campaignName
	 * @var string
	 */
	public $campaignName;
	/**
	 * The campaignStatus
	 * @var string
	 */
	public $campaignStatus;
	/**
	 * The dateStart
	 * @var string
	 */
	public $dateStart;
	/**
	 * The dateEnd
	 * @var string
	 */
	public $dateEnd;
	/**
	 * The total
	 * @var int
	 */
	public $total;
	/**
	 * The success
	 * @var int
	 */
	public $success;
	/**
	 * The failed
	 * @var int
	 */
	public $failed;
	/**
	 * The reference
	 * @var string
	 */
	public $reference;
	/**
	 * Constructor method for telephonyFaxCampaignStruct
	 * @see parent::__construct()
	 * @param string $_campaignName
	 * @param string $_campaignStatus
	 * @param string $_dateStart
	 * @param string $_dateEnd
	 * @param int $_total
	 * @param int $_success
	 * @param int $_failed
	 * @param string $_reference
	 * @return OvhStructTelephonyFaxCampaignStruct
	 */
	public function __construct($_campaignName = NULL,$_campaignStatus = NULL,$_dateStart = NULL,$_dateEnd = NULL,$_total = NULL,$_success = NULL,$_failed = NULL,$_reference = NULL)
	{
		parent::__construct(array('campaignName'=>$_campaignName,'campaignStatus'=>$_campaignStatus,'dateStart'=>$_dateStart,'dateEnd'=>$_dateEnd,'total'=>$_total,'success'=>$_success,'failed'=>$_failed,'reference'=>$_reference));
	}
	/**
	 * Get campaignName value
	 * @return string|null
	 */
	public function getCampaignName()
	{
		return $this->campaignName;
	}
	/**
	 * Set campaignName value
	 * @param string $_campaignName the campaignName
	 * @return string
	 */
	public function setCampaignName($_campaignName)
	{
		return ($this->campaignName = $_campaignName);
	}
	/**
	 * Get campaignStatus value
	 * @return string|null
	 */
	public function getCampaignStatus()
	{
		return $this->campaignStatus;
	}
	/**
	 * Set campaignStatus value
	 * @param string $_campaignStatus the campaignStatus
	 * @return string
	 */
	public function setCampaignStatus($_campaignStatus)
	{
		return ($this->campaignStatus = $_campaignStatus);
	}
	/**
	 * Get dateStart value
	 * @return string|null
	 */
	public function getDateStart()
	{
		return $this->dateStart;
	}
	/**
	 * Set dateStart value
	 * @param string $_dateStart the dateStart
	 * @return string
	 */
	public function setDateStart($_dateStart)
	{
		return ($this->dateStart = $_dateStart);
	}
	/**
	 * Get dateEnd value
	 * @return string|null
	 */
	public function getDateEnd()
	{
		return $this->dateEnd;
	}
	/**
	 * Set dateEnd value
	 * @param string $_dateEnd the dateEnd
	 * @return string
	 */
	public function setDateEnd($_dateEnd)
	{
		return ($this->dateEnd = $_dateEnd);
	}
	/**
	 * Get total value
	 * @return int|null
	 */
	public function getTotal()
	{
		return $this->total;
	}
	/**
	 * Set total value
	 * @param int $_total the total
	 * @return int
	 */
	public function setTotal($_total)
	{
		return ($this->total = $_total);
	}
	/**
	 * Get success value
	 * @return int|null
	 */
	public function getSuccess()
	{
		return $this->success;
	}
	/**
	 * Set success value
	 * @param int $_success the success
	 * @return int
	 */
	public function setSuccess($_success)
	{
		return ($this->success = $_success);
	}
	/**
	 * Get failed value
	 * @return int|null
	 */
	public function getFailed()
	{
		return $this->failed;
	}
	/**
	 * Set failed value
	 * @param int $_failed the failed
	 * @return int
	 */
	public function setFailed($_failed)
	{
		return ($this->failed = $_failed);
	}
	/**
	 * Get reference value
	 * @return string|null
	 */
	public function getReference()
	{
		return $this->reference;
	}
	/**
	 * Set reference value
	 * @param string $_reference the reference
	 * @return string
	 */
	public function setReference($_reference)
	{
		return ($this->reference = $_reference);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyFaxCampaignStruct
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