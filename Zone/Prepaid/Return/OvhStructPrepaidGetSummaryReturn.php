<?php
/**
 * File for class OvhStructPrepaidGetSummaryReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructPrepaidGetSummaryReturn originally named prepaidGetSummaryReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructPrepaidGetSummaryReturn extends OvhWsdlClass
{
	/**
	 * The contract
	 * @var string
	 */
	public $contract;
	/**
	 * The threshold
	 * @var int
	 */
	public $threshold;
	/**
	 * The balance
	 * @var float
	 */
	public $balance;
	/**
	 * The md5
	 * @var string
	 */
	public $md5;
	/**
	 * Constructor method for prepaidGetSummaryReturn
	 * @see parent::__construct()
	 * @param string $_contract
	 * @param int $_threshold
	 * @param float $_balance
	 * @param string $_md5
	 * @return OvhStructPrepaidGetSummaryReturn
	 */
	public function __construct($_contract = NULL,$_threshold = NULL,$_balance = NULL,$_md5 = NULL)
	{
		parent::__construct(array('contract'=>$_contract,'threshold'=>$_threshold,'balance'=>$_balance,'md5'=>$_md5));
	}
	/**
	 * Get contract value
	 * @return string|null
	 */
	public function getContract()
	{
		return $this->contract;
	}
	/**
	 * Set contract value
	 * @param string $_contract the contract
	 * @return string
	 */
	public function setContract($_contract)
	{
		return ($this->contract = $_contract);
	}
	/**
	 * Get threshold value
	 * @return int|null
	 */
	public function getThreshold()
	{
		return $this->threshold;
	}
	/**
	 * Set threshold value
	 * @param int $_threshold the threshold
	 * @return int
	 */
	public function setThreshold($_threshold)
	{
		return ($this->threshold = $_threshold);
	}
	/**
	 * Get balance value
	 * @return float|null
	 */
	public function getBalance()
	{
		return $this->balance;
	}
	/**
	 * Set balance value
	 * @param float $_balance the balance
	 * @return float
	 */
	public function setBalance($_balance)
	{
		return ($this->balance = $_balance);
	}
	/**
	 * Get md5 value
	 * @return string|null
	 */
	public function getMd5()
	{
		return $this->md5;
	}
	/**
	 * Set md5 value
	 * @param string $_md5 the md5
	 * @return string
	 */
	public function setMd5($_md5)
	{
		return ($this->md5 = $_md5);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructPrepaidGetSummaryReturn
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