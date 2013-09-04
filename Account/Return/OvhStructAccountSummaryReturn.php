<?php
/**
 * File for class OvhStructAccountSummaryReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructAccountSummaryReturn originally named accountSummaryReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructAccountSummaryReturn extends OvhWsdlClass
{
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * The account
	 * @var string
	 */
	public $account;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The balance
	 * @var int
	 */
	public $balance;
	/**
	 * The alertThreshold
	 * @var int
	 */
	public $alertThreshold;
	/**
	 * The limitThreshold
	 * @var int
	 */
	public $limitThreshold;
	/**
	 * The openDate
	 * @var string
	 */
	public $openDate;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The closeDate
	 * @var string
	 */
	public $closeDate;
	/**
	 * Constructor method for accountSummaryReturn
	 * @see parent::__construct()
	 * @param string $_nic
	 * @param string $_account
	 * @param string $_country
	 * @param string $_description
	 * @param int $_balance
	 * @param int $_alertThreshold
	 * @param int $_limitThreshold
	 * @param string $_openDate
	 * @param string $_date
	 * @param string $_closeDate
	 * @return OvhStructAccountSummaryReturn
	 */
	public function __construct($_nic = NULL,$_account = NULL,$_country = NULL,$_description = NULL,$_balance = NULL,$_alertThreshold = NULL,$_limitThreshold = NULL,$_openDate = NULL,$_date = NULL,$_closeDate = NULL)
	{
		parent::__construct(array('nic'=>$_nic,'account'=>$_account,'country'=>$_country,'description'=>$_description,'balance'=>$_balance,'alertThreshold'=>$_alertThreshold,'limitThreshold'=>$_limitThreshold,'openDate'=>$_openDate,'date'=>$_date,'closeDate'=>$_closeDate));
	}
	/**
	 * Get nic value
	 * @return string|null
	 */
	public function getNic()
	{
		return $this->nic;
	}
	/**
	 * Set nic value
	 * @param string $_nic the nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
	}
	/**
	 * Get account value
	 * @return string|null
	 */
	public function getAccount()
	{
		return $this->account;
	}
	/**
	 * Set account value
	 * @param string $_account the account
	 * @return string
	 */
	public function setAccount($_account)
	{
		return ($this->account = $_account);
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
	 * Get description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set description value
	 * @param string $_description the description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get balance value
	 * @return int|null
	 */
	public function getBalance()
	{
		return $this->balance;
	}
	/**
	 * Set balance value
	 * @param int $_balance the balance
	 * @return int
	 */
	public function setBalance($_balance)
	{
		return ($this->balance = $_balance);
	}
	/**
	 * Get alertThreshold value
	 * @return int|null
	 */
	public function getAlertThreshold()
	{
		return $this->alertThreshold;
	}
	/**
	 * Set alertThreshold value
	 * @param int $_alertThreshold the alertThreshold
	 * @return int
	 */
	public function setAlertThreshold($_alertThreshold)
	{
		return ($this->alertThreshold = $_alertThreshold);
	}
	/**
	 * Get limitThreshold value
	 * @return int|null
	 */
	public function getLimitThreshold()
	{
		return $this->limitThreshold;
	}
	/**
	 * Set limitThreshold value
	 * @param int $_limitThreshold the limitThreshold
	 * @return int
	 */
	public function setLimitThreshold($_limitThreshold)
	{
		return ($this->limitThreshold = $_limitThreshold);
	}
	/**
	 * Get openDate value
	 * @return string|null
	 */
	public function getOpenDate()
	{
		return $this->openDate;
	}
	/**
	 * Set openDate value
	 * @param string $_openDate the openDate
	 * @return string
	 */
	public function setOpenDate($_openDate)
	{
		return ($this->openDate = $_openDate);
	}
	/**
	 * Get date value
	 * @return string|null
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set date value
	 * @param string $_date the date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get closeDate value
	 * @return string|null
	 */
	public function getCloseDate()
	{
		return $this->closeDate;
	}
	/**
	 * Set closeDate value
	 * @param string $_closeDate the closeDate
	 * @return string
	 */
	public function setCloseDate($_closeDate)
	{
		return ($this->closeDate = $_closeDate);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructAccountSummaryReturn
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