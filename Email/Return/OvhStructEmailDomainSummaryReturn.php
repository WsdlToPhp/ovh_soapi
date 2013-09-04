<?php
/**
 * File for class OvhStructEmailDomainSummaryReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructEmailDomainSummaryReturn originally named emailDomainSummaryReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructEmailDomainSummaryReturn extends OvhWsdlClass
{
	/**
	 * The masterNic
	 * @var string
	 */
	public $masterNic;
	/**
	 * The nbpops
	 * @var int
	 */
	public $nbpops;
	/**
	 * The nbforwards
	 * @var int
	 */
	public $nbforwards;
	/**
	 * The nbaliases
	 * @var int
	 */
	public $nbaliases;
	/**
	 * The nbresponders
	 * @var int
	 */
	public $nbresponders;
	/**
	 * The nbmls
	 * @var int
	 */
	public $nbmls;
	/**
	 * Constructor method for emailDomainSummaryReturn
	 * @see parent::__construct()
	 * @param string $_masterNic
	 * @param int $_nbpops
	 * @param int $_nbforwards
	 * @param int $_nbaliases
	 * @param int $_nbresponders
	 * @param int $_nbmls
	 * @return OvhStructEmailDomainSummaryReturn
	 */
	public function __construct($_masterNic = NULL,$_nbpops = NULL,$_nbforwards = NULL,$_nbaliases = NULL,$_nbresponders = NULL,$_nbmls = NULL)
	{
		parent::__construct(array('masterNic'=>$_masterNic,'nbpops'=>$_nbpops,'nbforwards'=>$_nbforwards,'nbaliases'=>$_nbaliases,'nbresponders'=>$_nbresponders,'nbmls'=>$_nbmls));
	}
	/**
	 * Get masterNic value
	 * @return string|null
	 */
	public function getMasterNic()
	{
		return $this->masterNic;
	}
	/**
	 * Set masterNic value
	 * @param string $_masterNic the masterNic
	 * @return string
	 */
	public function setMasterNic($_masterNic)
	{
		return ($this->masterNic = $_masterNic);
	}
	/**
	 * Get nbpops value
	 * @return int|null
	 */
	public function getNbpops()
	{
		return $this->nbpops;
	}
	/**
	 * Set nbpops value
	 * @param int $_nbpops the nbpops
	 * @return int
	 */
	public function setNbpops($_nbpops)
	{
		return ($this->nbpops = $_nbpops);
	}
	/**
	 * Get nbforwards value
	 * @return int|null
	 */
	public function getNbforwards()
	{
		return $this->nbforwards;
	}
	/**
	 * Set nbforwards value
	 * @param int $_nbforwards the nbforwards
	 * @return int
	 */
	public function setNbforwards($_nbforwards)
	{
		return ($this->nbforwards = $_nbforwards);
	}
	/**
	 * Get nbaliases value
	 * @return int|null
	 */
	public function getNbaliases()
	{
		return $this->nbaliases;
	}
	/**
	 * Set nbaliases value
	 * @param int $_nbaliases the nbaliases
	 * @return int
	 */
	public function setNbaliases($_nbaliases)
	{
		return ($this->nbaliases = $_nbaliases);
	}
	/**
	 * Get nbresponders value
	 * @return int|null
	 */
	public function getNbresponders()
	{
		return $this->nbresponders;
	}
	/**
	 * Set nbresponders value
	 * @param int $_nbresponders the nbresponders
	 * @return int
	 */
	public function setNbresponders($_nbresponders)
	{
		return ($this->nbresponders = $_nbresponders);
	}
	/**
	 * Get nbmls value
	 * @return int|null
	 */
	public function getNbmls()
	{
		return $this->nbmls;
	}
	/**
	 * Set nbmls value
	 * @param int $_nbmls the nbmls
	 * @return int
	 */
	public function setNbmls($_nbmls)
	{
		return ($this->nbmls = $_nbmls);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructEmailDomainSummaryReturn
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