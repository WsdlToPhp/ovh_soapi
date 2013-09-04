<?php
/**
 * File for class OvhStructTelephonySmsplusDetailsStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsplusDetailsStruct originally named telephonySmsplusDetailsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsplusDetailsStruct extends OvhWsdlClass
{
	/**
	 * The shortCodeCategory
	 * @var string
	 */
	public $shortCodeCategory;
	/**
	 * The shortCode
	 * @var string
	 */
	public $shortCode;
	/**
	 * The keyword
	 * @var string
	 */
	public $keyword;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The publicType
	 * @var string
	 */
	public $publicType;
	/**
	 * The price
	 * @var float
	 */
	public $price;
	/**
	 * The priceReversed
	 * @var float
	 */
	public $priceReversed;
	/**
	 * The rates
	 * @var string
	 */
	public $rates;
	/**
	 * The level
	 * @var string
	 */
	public $level;
	/**
	 * The company
	 * @var string
	 */
	public $company;
	/**
	 * The applicationDescription
	 * @var string
	 */
	public $applicationDescription;
	/**
	 * The applicationType
	 * @var string
	 */
	public $applicationType;
	/**
	 * The cgiUrl
	 * @var string
	 */
	public $cgiUrl;
	/**
	 * The text
	 * @var string
	 */
	public $text;
	/**
	 * The cgiActivation
	 * @var boolean
	 */
	public $cgiActivation;
	/**
	 * The options
	 * @var OvhStructTelephonySmsplusOptionsStruct
	 */
	public $options;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * Constructor method for telephonySmsplusDetailsStruct
	 * @see parent::__construct()
	 * @param string $_shortCodeCategory
	 * @param string $_shortCode
	 * @param string $_keyword
	 * @param string $_domain
	 * @param string $_publicType
	 * @param float $_price
	 * @param float $_priceReversed
	 * @param string $_rates
	 * @param string $_level
	 * @param string $_company
	 * @param string $_applicationDescription
	 * @param string $_applicationType
	 * @param string $_cgiUrl
	 * @param string $_text
	 * @param boolean $_cgiActivation
	 * @param OvhStructTelephonySmsplusOptionsStruct $_options
	 * @param string $_description
	 * @return OvhStructTelephonySmsplusDetailsStruct
	 */
	public function __construct($_shortCodeCategory = NULL,$_shortCode = NULL,$_keyword = NULL,$_domain = NULL,$_publicType = NULL,$_price = NULL,$_priceReversed = NULL,$_rates = NULL,$_level = NULL,$_company = NULL,$_applicationDescription = NULL,$_applicationType = NULL,$_cgiUrl = NULL,$_text = NULL,$_cgiActivation = NULL,$_options = NULL,$_description = NULL)
	{
		parent::__construct(array('shortCodeCategory'=>$_shortCodeCategory,'shortCode'=>$_shortCode,'keyword'=>$_keyword,'domain'=>$_domain,'publicType'=>$_publicType,'price'=>$_price,'priceReversed'=>$_priceReversed,'rates'=>$_rates,'level'=>$_level,'company'=>$_company,'applicationDescription'=>$_applicationDescription,'applicationType'=>$_applicationType,'cgiUrl'=>$_cgiUrl,'text'=>$_text,'cgiActivation'=>$_cgiActivation,'options'=>$_options,'description'=>$_description));
	}
	/**
	 * Get shortCodeCategory value
	 * @return string|null
	 */
	public function getShortCodeCategory()
	{
		return $this->shortCodeCategory;
	}
	/**
	 * Set shortCodeCategory value
	 * @param string $_shortCodeCategory the shortCodeCategory
	 * @return string
	 */
	public function setShortCodeCategory($_shortCodeCategory)
	{
		return ($this->shortCodeCategory = $_shortCodeCategory);
	}
	/**
	 * Get shortCode value
	 * @return string|null
	 */
	public function getShortCode()
	{
		return $this->shortCode;
	}
	/**
	 * Set shortCode value
	 * @param string $_shortCode the shortCode
	 * @return string
	 */
	public function setShortCode($_shortCode)
	{
		return ($this->shortCode = $_shortCode);
	}
	/**
	 * Get keyword value
	 * @return string|null
	 */
	public function getKeyword()
	{
		return $this->keyword;
	}
	/**
	 * Set keyword value
	 * @param string $_keyword the keyword
	 * @return string
	 */
	public function setKeyword($_keyword)
	{
		return ($this->keyword = $_keyword);
	}
	/**
	 * Get domain value
	 * @return string|null
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set domain value
	 * @param string $_domain the domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get publicType value
	 * @return string|null
	 */
	public function getPublicType()
	{
		return $this->publicType;
	}
	/**
	 * Set publicType value
	 * @param string $_publicType the publicType
	 * @return string
	 */
	public function setPublicType($_publicType)
	{
		return ($this->publicType = $_publicType);
	}
	/**
	 * Get price value
	 * @return float|null
	 */
	public function getPrice()
	{
		return $this->price;
	}
	/**
	 * Set price value
	 * @param float $_price the price
	 * @return float
	 */
	public function setPrice($_price)
	{
		return ($this->price = $_price);
	}
	/**
	 * Get priceReversed value
	 * @return float|null
	 */
	public function getPriceReversed()
	{
		return $this->priceReversed;
	}
	/**
	 * Set priceReversed value
	 * @param float $_priceReversed the priceReversed
	 * @return float
	 */
	public function setPriceReversed($_priceReversed)
	{
		return ($this->priceReversed = $_priceReversed);
	}
	/**
	 * Get rates value
	 * @return string|null
	 */
	public function getRates()
	{
		return $this->rates;
	}
	/**
	 * Set rates value
	 * @param string $_rates the rates
	 * @return string
	 */
	public function setRates($_rates)
	{
		return ($this->rates = $_rates);
	}
	/**
	 * Get level value
	 * @return string|null
	 */
	public function getLevel()
	{
		return $this->level;
	}
	/**
	 * Set level value
	 * @param string $_level the level
	 * @return string
	 */
	public function setLevel($_level)
	{
		return ($this->level = $_level);
	}
	/**
	 * Get company value
	 * @return string|null
	 */
	public function getCompany()
	{
		return $this->company;
	}
	/**
	 * Set company value
	 * @param string $_company the company
	 * @return string
	 */
	public function setCompany($_company)
	{
		return ($this->company = $_company);
	}
	/**
	 * Get applicationDescription value
	 * @return string|null
	 */
	public function getApplicationDescription()
	{
		return $this->applicationDescription;
	}
	/**
	 * Set applicationDescription value
	 * @param string $_applicationDescription the applicationDescription
	 * @return string
	 */
	public function setApplicationDescription($_applicationDescription)
	{
		return ($this->applicationDescription = $_applicationDescription);
	}
	/**
	 * Get applicationType value
	 * @return string|null
	 */
	public function getApplicationType()
	{
		return $this->applicationType;
	}
	/**
	 * Set applicationType value
	 * @param string $_applicationType the applicationType
	 * @return string
	 */
	public function setApplicationType($_applicationType)
	{
		return ($this->applicationType = $_applicationType);
	}
	/**
	 * Get cgiUrl value
	 * @return string|null
	 */
	public function getCgiUrl()
	{
		return $this->cgiUrl;
	}
	/**
	 * Set cgiUrl value
	 * @param string $_cgiUrl the cgiUrl
	 * @return string
	 */
	public function setCgiUrl($_cgiUrl)
	{
		return ($this->cgiUrl = $_cgiUrl);
	}
	/**
	 * Get text value
	 * @return string|null
	 */
	public function getText()
	{
		return $this->text;
	}
	/**
	 * Set text value
	 * @param string $_text the text
	 * @return string
	 */
	public function setText($_text)
	{
		return ($this->text = $_text);
	}
	/**
	 * Get cgiActivation value
	 * @return boolean|null
	 */
	public function getCgiActivation()
	{
		return $this->cgiActivation;
	}
	/**
	 * Set cgiActivation value
	 * @param boolean $_cgiActivation the cgiActivation
	 * @return boolean
	 */
	public function setCgiActivation($_cgiActivation)
	{
		return ($this->cgiActivation = $_cgiActivation);
	}
	/**
	 * Get options value
	 * @return OvhStructTelephonySmsplusOptionsStruct|null
	 */
	public function getOptions()
	{
		return $this->options;
	}
	/**
	 * Set options value
	 * @param OvhStructTelephonySmsplusOptionsStruct $_options the options
	 * @return OvhStructTelephonySmsplusOptionsStruct
	 */
	public function setOptions($_options)
	{
		return ($this->options = $_options);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsplusDetailsStruct
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