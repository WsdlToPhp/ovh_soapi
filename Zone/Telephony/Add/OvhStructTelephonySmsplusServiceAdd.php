<?php
/**
 * File for class OvhStructTelephonySmsplusServiceAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsplusServiceAdd originally named telephonySmsplusServiceAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsplusServiceAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The billingAccount
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $billingAccount;
	/**
	 * The shortCode
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $shortCode;
	/**
	 * The keyword
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $keyword;
	/**
	 * The procedureId
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $procedureId;
	/**
	 * The applicationType
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $applicationType;
	/**
	 * The applicationDescription
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $applicationDescription;
	/**
	 * The company
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $company;
	/**
	 * The acceptedContract
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $acceptedContract;
	/**
	 * Constructor method for telephonySmsplusServiceAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_billingAccount
	 * @param string $_shortCode
	 * @param string $_keyword
	 * @param int $_procedureId
	 * @param string $_applicationType
	 * @param string $_applicationDescription
	 * @param string $_company
	 * @param boolean $_acceptedContract
	 * @return OvhStructTelephonySmsplusServiceAdd
	 */
	public function __construct($_session = NULL,$_billingAccount = NULL,$_shortCode = NULL,$_keyword = NULL,$_procedureId = NULL,$_applicationType = NULL,$_applicationDescription = NULL,$_company = NULL,$_acceptedContract = NULL)
	{
		parent::__construct(array('session'=>$_session,'billingAccount'=>$_billingAccount,'shortCode'=>$_shortCode,'keyword'=>$_keyword,'procedureId'=>$_procedureId,'applicationType'=>$_applicationType,'applicationDescription'=>$_applicationDescription,'company'=>$_company,'acceptedContract'=>$_acceptedContract));
	}
	/**
	 * Get session value
	 * @return string|null
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set session value
	 * @param string $_session the session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
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
	 * Get procedureId value
	 * @return int|null
	 */
	public function getProcedureId()
	{
		return $this->procedureId;
	}
	/**
	 * Set procedureId value
	 * @param int $_procedureId the procedureId
	 * @return int
	 */
	public function setProcedureId($_procedureId)
	{
		return ($this->procedureId = $_procedureId);
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
	 * Get acceptedContract value
	 * @return boolean|null
	 */
	public function getAcceptedContract()
	{
		return $this->acceptedContract;
	}
	/**
	 * Set acceptedContract value
	 * @param boolean $_acceptedContract the acceptedContract
	 * @return boolean
	 */
	public function setAcceptedContract($_acceptedContract)
	{
		return ($this->acceptedContract = $_acceptedContract);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsplusServiceAdd
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