<?php
/**
 * File for class OvhStructTelephonyLineStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyLineStruct originally named telephonyLineStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyLineStruct extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The billingAccount
	 * @var string
	 */
	public $billingAccount;
	/**
	 * The offer
	 * @var string
	 */
	public $offer;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The service
	 * @var string
	 */
	public $service;
	/**
	 * The expirationDate
	 * @var string
	 */
	public $expirationDate;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The betaGamaOffer
	 * @var boolean
	 */
	public $betaGamaOffer;
	/**
	 * The setOn
	 * @var string
	 */
	public $setOn;
	/**
	 * The aliasPool
	 * @var OvhStructTelephonyLineAliasPoolStruct
	 */
	public $aliasPool;
	/**
	 * The pendingAction
	 * @var OvhStructTelephonyPendingActionStruct
	 */
	public $pendingAction;
	/**
	 * The simultaneousLines
	 * @var int
	 */
	public $simultaneousLines;
	/**
	 * Constructor method for telephonyLineStruct
	 * @see parent::__construct()
	 * @param string $_number
	 * @param string $_billingAccount
	 * @param string $_offer
	 * @param string $_type
	 * @param string $_service
	 * @param string $_expirationDate
	 * @param string $_description
	 * @param boolean $_betaGamaOffer
	 * @param string $_setOn
	 * @param OvhStructTelephonyLineAliasPoolStruct $_aliasPool
	 * @param OvhStructTelephonyPendingActionStruct $_pendingAction
	 * @param int $_simultaneousLines
	 * @return OvhStructTelephonyLineStruct
	 */
	public function __construct($_number = NULL,$_billingAccount = NULL,$_offer = NULL,$_type = NULL,$_service = NULL,$_expirationDate = NULL,$_description = NULL,$_betaGamaOffer = NULL,$_setOn = NULL,$_aliasPool = NULL,$_pendingAction = NULL,$_simultaneousLines = NULL)
	{
		parent::__construct(array('number'=>$_number,'billingAccount'=>$_billingAccount,'offer'=>$_offer,'type'=>$_type,'service'=>$_service,'expirationDate'=>$_expirationDate,'description'=>$_description,'betaGamaOffer'=>$_betaGamaOffer,'setOn'=>$_setOn,'aliasPool'=>$_aliasPool,'pendingAction'=>$_pendingAction,'simultaneousLines'=>$_simultaneousLines));
	}
	/**
	 * Get number value
	 * @return string|null
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set number value
	 * @param string $_number the number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get billingAccount value
	 * @return string|null
	 */
	public function getBillingAccount()
	{
		return $this->billingAccount;
	}
	/**
	 * Set billingAccount value
	 * @param string $_billingAccount the billingAccount
	 * @return string
	 */
	public function setBillingAccount($_billingAccount)
	{
		return ($this->billingAccount = $_billingAccount);
	}
	/**
	 * Get offer value
	 * @return string|null
	 */
	public function getOffer()
	{
		return $this->offer;
	}
	/**
	 * Set offer value
	 * @param string $_offer the offer
	 * @return string
	 */
	public function setOffer($_offer)
	{
		return ($this->offer = $_offer);
	}
	/**
	 * Get type value
	 * @return string|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @param string $_type the type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get service value
	 * @return string|null
	 */
	public function getService()
	{
		return $this->service;
	}
	/**
	 * Set service value
	 * @param string $_service the service
	 * @return string
	 */
	public function setService($_service)
	{
		return ($this->service = $_service);
	}
	/**
	 * Get expirationDate value
	 * @return string|null
	 */
	public function getExpirationDate()
	{
		return $this->expirationDate;
	}
	/**
	 * Set expirationDate value
	 * @param string $_expirationDate the expirationDate
	 * @return string
	 */
	public function setExpirationDate($_expirationDate)
	{
		return ($this->expirationDate = $_expirationDate);
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
	 * Get betaGamaOffer value
	 * @return boolean|null
	 */
	public function getBetaGamaOffer()
	{
		return $this->betaGamaOffer;
	}
	/**
	 * Set betaGamaOffer value
	 * @param boolean $_betaGamaOffer the betaGamaOffer
	 * @return boolean
	 */
	public function setBetaGamaOffer($_betaGamaOffer)
	{
		return ($this->betaGamaOffer = $_betaGamaOffer);
	}
	/**
	 * Get setOn value
	 * @return string|null
	 */
	public function getSetOn()
	{
		return $this->setOn;
	}
	/**
	 * Set setOn value
	 * @param string $_setOn the setOn
	 * @return string
	 */
	public function setSetOn($_setOn)
	{
		return ($this->setOn = $_setOn);
	}
	/**
	 * Get aliasPool value
	 * @return OvhStructTelephonyLineAliasPoolStruct|null
	 */
	public function getAliasPool()
	{
		return $this->aliasPool;
	}
	/**
	 * Set aliasPool value
	 * @param OvhStructTelephonyLineAliasPoolStruct $_aliasPool the aliasPool
	 * @return OvhStructTelephonyLineAliasPoolStruct
	 */
	public function setAliasPool($_aliasPool)
	{
		return ($this->aliasPool = $_aliasPool);
	}
	/**
	 * Get pendingAction value
	 * @return OvhStructTelephonyPendingActionStruct|null
	 */
	public function getPendingAction()
	{
		return $this->pendingAction;
	}
	/**
	 * Set pendingAction value
	 * @param OvhStructTelephonyPendingActionStruct $_pendingAction the pendingAction
	 * @return OvhStructTelephonyPendingActionStruct
	 */
	public function setPendingAction($_pendingAction)
	{
		return ($this->pendingAction = $_pendingAction);
	}
	/**
	 * Get simultaneousLines value
	 * @return int|null
	 */
	public function getSimultaneousLines()
	{
		return $this->simultaneousLines;
	}
	/**
	 * Set simultaneousLines value
	 * @param int $_simultaneousLines the simultaneousLines
	 * @return int
	 */
	public function setSimultaneousLines($_simultaneousLines)
	{
		return ($this->simultaneousLines = $_simultaneousLines);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyLineStruct
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