<?php
/**
 * File for class OvhStructTelephonyLineOptionsListReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyLineOptionsListReturn originally named telephonyLineOptionsListReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyLineOptionsListReturn extends OvhWsdlClass
{
	/**
	 * The identificationRestriction
	 * @var boolean
	 */
	public $identificationRestriction;
	/**
	 * The anonymousCallRejection
	 * @var boolean
	 */
	public $anonymousCallRejection;
	/**
	 * The doNotDisturb
	 * @var boolean
	 */
	public $doNotDisturb;
	/**
	 * The absentSuscriber
	 * @var boolean
	 */
	public $absentSuscriber;
	/**
	 * The lockOutCall
	 * @var boolean
	 */
	public $lockOutCall;
	/**
	 * The lockOutCallPassword
	 * @var string
	 */
	public $lockOutCallPassword;
	/**
	 * The forwardUnconditional
	 * @var boolean
	 */
	public $forwardUnconditional;
	/**
	 * The forwardUnconditionalNumber
	 * @var string
	 */
	public $forwardUnconditionalNumber;
	/**
	 * The forwardNoReply
	 * @var boolean
	 */
	public $forwardNoReply;
	/**
	 * The forwardNoReplyDelay
	 * @var int
	 */
	public $forwardNoReplyDelay;
	/**
	 * The forwardNoReplyNumber
	 * @var string
	 */
	public $forwardNoReplyNumber;
	/**
	 * The forwardBusy
	 * @var boolean
	 */
	public $forwardBusy;
	/**
	 * The forwardBusyNumber
	 * @var string
	 */
	public $forwardBusyNumber;
	/**
	 * The forwardBackup
	 * @var boolean
	 */
	public $forwardBackup;
	/**
	 * The forwardBackupNumber
	 * @var string
	 */
	public $forwardBackupNumber;
	/**
	 * The callWaiting
	 * @var boolean
	 */
	public $callWaiting;
	/**
	 * The displayCallNumber
	 * @var string
	 */
	public $displayCallNumber;
	/**
	 * The forwardUnconditionalNature
	 * @var string
	 */
	public $forwardUnconditionalNature;
	/**
	 * The forwardNoReplyNature
	 * @var string
	 */
	public $forwardNoReplyNature;
	/**
	 * The forwardBusyNature
	 * @var string
	 */
	public $forwardBusyNature;
	/**
	 * The forwardBackupNature
	 * @var string
	 */
	public $forwardBackupNature;
	/**
	 * Constructor method for telephonyLineOptionsListReturn
	 * @see parent::__construct()
	 * @param boolean $_identificationRestriction
	 * @param boolean $_anonymousCallRejection
	 * @param boolean $_doNotDisturb
	 * @param boolean $_absentSuscriber
	 * @param boolean $_lockOutCall
	 * @param string $_lockOutCallPassword
	 * @param boolean $_forwardUnconditional
	 * @param string $_forwardUnconditionalNumber
	 * @param boolean $_forwardNoReply
	 * @param int $_forwardNoReplyDelay
	 * @param string $_forwardNoReplyNumber
	 * @param boolean $_forwardBusy
	 * @param string $_forwardBusyNumber
	 * @param boolean $_forwardBackup
	 * @param string $_forwardBackupNumber
	 * @param boolean $_callWaiting
	 * @param string $_displayCallNumber
	 * @param string $_forwardUnconditionalNature
	 * @param string $_forwardNoReplyNature
	 * @param string $_forwardBusyNature
	 * @param string $_forwardBackupNature
	 * @return OvhStructTelephonyLineOptionsListReturn
	 */
	public function __construct($_identificationRestriction = NULL,$_anonymousCallRejection = NULL,$_doNotDisturb = NULL,$_absentSuscriber = NULL,$_lockOutCall = NULL,$_lockOutCallPassword = NULL,$_forwardUnconditional = NULL,$_forwardUnconditionalNumber = NULL,$_forwardNoReply = NULL,$_forwardNoReplyDelay = NULL,$_forwardNoReplyNumber = NULL,$_forwardBusy = NULL,$_forwardBusyNumber = NULL,$_forwardBackup = NULL,$_forwardBackupNumber = NULL,$_callWaiting = NULL,$_displayCallNumber = NULL,$_forwardUnconditionalNature = NULL,$_forwardNoReplyNature = NULL,$_forwardBusyNature = NULL,$_forwardBackupNature = NULL)
	{
		parent::__construct(array('identificationRestriction'=>$_identificationRestriction,'anonymousCallRejection'=>$_anonymousCallRejection,'doNotDisturb'=>$_doNotDisturb,'absentSuscriber'=>$_absentSuscriber,'lockOutCall'=>$_lockOutCall,'lockOutCallPassword'=>$_lockOutCallPassword,'forwardUnconditional'=>$_forwardUnconditional,'forwardUnconditionalNumber'=>$_forwardUnconditionalNumber,'forwardNoReply'=>$_forwardNoReply,'forwardNoReplyDelay'=>$_forwardNoReplyDelay,'forwardNoReplyNumber'=>$_forwardNoReplyNumber,'forwardBusy'=>$_forwardBusy,'forwardBusyNumber'=>$_forwardBusyNumber,'forwardBackup'=>$_forwardBackup,'forwardBackupNumber'=>$_forwardBackupNumber,'callWaiting'=>$_callWaiting,'displayCallNumber'=>$_displayCallNumber,'forwardUnconditionalNature'=>$_forwardUnconditionalNature,'forwardNoReplyNature'=>$_forwardNoReplyNature,'forwardBusyNature'=>$_forwardBusyNature,'forwardBackupNature'=>$_forwardBackupNature));
	}
	/**
	 * Get identificationRestriction value
	 * @return boolean|null
	 */
	public function getIdentificationRestriction()
	{
		return $this->identificationRestriction;
	}
	/**
	 * Set identificationRestriction value
	 * @param boolean $_identificationRestriction the identificationRestriction
	 * @return boolean
	 */
	public function setIdentificationRestriction($_identificationRestriction)
	{
		return ($this->identificationRestriction = $_identificationRestriction);
	}
	/**
	 * Get anonymousCallRejection value
	 * @return boolean|null
	 */
	public function getAnonymousCallRejection()
	{
		return $this->anonymousCallRejection;
	}
	/**
	 * Set anonymousCallRejection value
	 * @param boolean $_anonymousCallRejection the anonymousCallRejection
	 * @return boolean
	 */
	public function setAnonymousCallRejection($_anonymousCallRejection)
	{
		return ($this->anonymousCallRejection = $_anonymousCallRejection);
	}
	/**
	 * Get doNotDisturb value
	 * @return boolean|null
	 */
	public function getDoNotDisturb()
	{
		return $this->doNotDisturb;
	}
	/**
	 * Set doNotDisturb value
	 * @param boolean $_doNotDisturb the doNotDisturb
	 * @return boolean
	 */
	public function setDoNotDisturb($_doNotDisturb)
	{
		return ($this->doNotDisturb = $_doNotDisturb);
	}
	/**
	 * Get absentSuscriber value
	 * @return boolean|null
	 */
	public function getAbsentSuscriber()
	{
		return $this->absentSuscriber;
	}
	/**
	 * Set absentSuscriber value
	 * @param boolean $_absentSuscriber the absentSuscriber
	 * @return boolean
	 */
	public function setAbsentSuscriber($_absentSuscriber)
	{
		return ($this->absentSuscriber = $_absentSuscriber);
	}
	/**
	 * Get lockOutCall value
	 * @return boolean|null
	 */
	public function getLockOutCall()
	{
		return $this->lockOutCall;
	}
	/**
	 * Set lockOutCall value
	 * @param boolean $_lockOutCall the lockOutCall
	 * @return boolean
	 */
	public function setLockOutCall($_lockOutCall)
	{
		return ($this->lockOutCall = $_lockOutCall);
	}
	/**
	 * Get lockOutCallPassword value
	 * @return string|null
	 */
	public function getLockOutCallPassword()
	{
		return $this->lockOutCallPassword;
	}
	/**
	 * Set lockOutCallPassword value
	 * @param string $_lockOutCallPassword the lockOutCallPassword
	 * @return string
	 */
	public function setLockOutCallPassword($_lockOutCallPassword)
	{
		return ($this->lockOutCallPassword = $_lockOutCallPassword);
	}
	/**
	 * Get forwardUnconditional value
	 * @return boolean|null
	 */
	public function getForwardUnconditional()
	{
		return $this->forwardUnconditional;
	}
	/**
	 * Set forwardUnconditional value
	 * @param boolean $_forwardUnconditional the forwardUnconditional
	 * @return boolean
	 */
	public function setForwardUnconditional($_forwardUnconditional)
	{
		return ($this->forwardUnconditional = $_forwardUnconditional);
	}
	/**
	 * Get forwardUnconditionalNumber value
	 * @return string|null
	 */
	public function getForwardUnconditionalNumber()
	{
		return $this->forwardUnconditionalNumber;
	}
	/**
	 * Set forwardUnconditionalNumber value
	 * @param string $_forwardUnconditionalNumber the forwardUnconditionalNumber
	 * @return string
	 */
	public function setForwardUnconditionalNumber($_forwardUnconditionalNumber)
	{
		return ($this->forwardUnconditionalNumber = $_forwardUnconditionalNumber);
	}
	/**
	 * Get forwardNoReply value
	 * @return boolean|null
	 */
	public function getForwardNoReply()
	{
		return $this->forwardNoReply;
	}
	/**
	 * Set forwardNoReply value
	 * @param boolean $_forwardNoReply the forwardNoReply
	 * @return boolean
	 */
	public function setForwardNoReply($_forwardNoReply)
	{
		return ($this->forwardNoReply = $_forwardNoReply);
	}
	/**
	 * Get forwardNoReplyDelay value
	 * @return int|null
	 */
	public function getForwardNoReplyDelay()
	{
		return $this->forwardNoReplyDelay;
	}
	/**
	 * Set forwardNoReplyDelay value
	 * @param int $_forwardNoReplyDelay the forwardNoReplyDelay
	 * @return int
	 */
	public function setForwardNoReplyDelay($_forwardNoReplyDelay)
	{
		return ($this->forwardNoReplyDelay = $_forwardNoReplyDelay);
	}
	/**
	 * Get forwardNoReplyNumber value
	 * @return string|null
	 */
	public function getForwardNoReplyNumber()
	{
		return $this->forwardNoReplyNumber;
	}
	/**
	 * Set forwardNoReplyNumber value
	 * @param string $_forwardNoReplyNumber the forwardNoReplyNumber
	 * @return string
	 */
	public function setForwardNoReplyNumber($_forwardNoReplyNumber)
	{
		return ($this->forwardNoReplyNumber = $_forwardNoReplyNumber);
	}
	/**
	 * Get forwardBusy value
	 * @return boolean|null
	 */
	public function getForwardBusy()
	{
		return $this->forwardBusy;
	}
	/**
	 * Set forwardBusy value
	 * @param boolean $_forwardBusy the forwardBusy
	 * @return boolean
	 */
	public function setForwardBusy($_forwardBusy)
	{
		return ($this->forwardBusy = $_forwardBusy);
	}
	/**
	 * Get forwardBusyNumber value
	 * @return string|null
	 */
	public function getForwardBusyNumber()
	{
		return $this->forwardBusyNumber;
	}
	/**
	 * Set forwardBusyNumber value
	 * @param string $_forwardBusyNumber the forwardBusyNumber
	 * @return string
	 */
	public function setForwardBusyNumber($_forwardBusyNumber)
	{
		return ($this->forwardBusyNumber = $_forwardBusyNumber);
	}
	/**
	 * Get forwardBackup value
	 * @return boolean|null
	 */
	public function getForwardBackup()
	{
		return $this->forwardBackup;
	}
	/**
	 * Set forwardBackup value
	 * @param boolean $_forwardBackup the forwardBackup
	 * @return boolean
	 */
	public function setForwardBackup($_forwardBackup)
	{
		return ($this->forwardBackup = $_forwardBackup);
	}
	/**
	 * Get forwardBackupNumber value
	 * @return string|null
	 */
	public function getForwardBackupNumber()
	{
		return $this->forwardBackupNumber;
	}
	/**
	 * Set forwardBackupNumber value
	 * @param string $_forwardBackupNumber the forwardBackupNumber
	 * @return string
	 */
	public function setForwardBackupNumber($_forwardBackupNumber)
	{
		return ($this->forwardBackupNumber = $_forwardBackupNumber);
	}
	/**
	 * Get callWaiting value
	 * @return boolean|null
	 */
	public function getCallWaiting()
	{
		return $this->callWaiting;
	}
	/**
	 * Set callWaiting value
	 * @param boolean $_callWaiting the callWaiting
	 * @return boolean
	 */
	public function setCallWaiting($_callWaiting)
	{
		return ($this->callWaiting = $_callWaiting);
	}
	/**
	 * Get displayCallNumber value
	 * @return string|null
	 */
	public function getDisplayCallNumber()
	{
		return $this->displayCallNumber;
	}
	/**
	 * Set displayCallNumber value
	 * @param string $_displayCallNumber the displayCallNumber
	 * @return string
	 */
	public function setDisplayCallNumber($_displayCallNumber)
	{
		return ($this->displayCallNumber = $_displayCallNumber);
	}
	/**
	 * Get forwardUnconditionalNature value
	 * @return string|null
	 */
	public function getForwardUnconditionalNature()
	{
		return $this->forwardUnconditionalNature;
	}
	/**
	 * Set forwardUnconditionalNature value
	 * @param string $_forwardUnconditionalNature the forwardUnconditionalNature
	 * @return string
	 */
	public function setForwardUnconditionalNature($_forwardUnconditionalNature)
	{
		return ($this->forwardUnconditionalNature = $_forwardUnconditionalNature);
	}
	/**
	 * Get forwardNoReplyNature value
	 * @return string|null
	 */
	public function getForwardNoReplyNature()
	{
		return $this->forwardNoReplyNature;
	}
	/**
	 * Set forwardNoReplyNature value
	 * @param string $_forwardNoReplyNature the forwardNoReplyNature
	 * @return string
	 */
	public function setForwardNoReplyNature($_forwardNoReplyNature)
	{
		return ($this->forwardNoReplyNature = $_forwardNoReplyNature);
	}
	/**
	 * Get forwardBusyNature value
	 * @return string|null
	 */
	public function getForwardBusyNature()
	{
		return $this->forwardBusyNature;
	}
	/**
	 * Set forwardBusyNature value
	 * @param string $_forwardBusyNature the forwardBusyNature
	 * @return string
	 */
	public function setForwardBusyNature($_forwardBusyNature)
	{
		return ($this->forwardBusyNature = $_forwardBusyNature);
	}
	/**
	 * Get forwardBackupNature value
	 * @return string|null
	 */
	public function getForwardBackupNature()
	{
		return $this->forwardBackupNature;
	}
	/**
	 * Set forwardBackupNature value
	 * @param string $_forwardBackupNature the forwardBackupNature
	 * @return string
	 */
	public function setForwardBackupNature($_forwardBackupNature)
	{
		return ($this->forwardBackupNature = $_forwardBackupNature);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyLineOptionsListReturn
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