<?php
/**
 * File for class OvhStructTelephonyHuntingInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyHuntingInfoReturn originally named telephonyHuntingInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyHuntingInfoReturn extends OvhWsdlClass
{
	/**
	 * The members
	 * @var OvhStructMyArrayOfTelephonyHuntingInfoMemberStructType
	 */
	public $members;
	/**
	 * The strategy
	 * @var string
	 */
	public $strategy;
	/**
	 * The pattern
	 * @var string
	 */
	public $pattern;
	/**
	 * The onHoldTimer
	 * @var int
	 */
	public $onHoldTimer;
	/**
	 * The queueSize
	 * @var int
	 */
	public $queueSize;
	/**
	 * The numberOfCalls
	 * @var int
	 */
	public $numberOfCalls;
	/**
	 * The noReplyTimer
	 * @var int
	 */
	public $noReplyTimer;
	/**
	 * The mainVoicemail
	 * @var string
	 */
	public $mainVoicemail;
	/**
	 * The toneOnHold
	 * @var boolean
	 */
	public $toneOnHold;
	/**
	 * The toneRingback
	 * @var boolean
	 */
	public $toneRingback;
	/**
	 * The toneOnClosure
	 * @var boolean
	 */
	public $toneOnClosure;
	/**
	 * The anonymousCallRejection
	 * @var boolean
	 */
	public $anonymousCallRejection;
	/**
	 * Constructor method for telephonyHuntingInfoReturn
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfTelephonyHuntingInfoMemberStructType $_members
	 * @param string $_strategy
	 * @param string $_pattern
	 * @param int $_onHoldTimer
	 * @param int $_queueSize
	 * @param int $_numberOfCalls
	 * @param int $_noReplyTimer
	 * @param string $_mainVoicemail
	 * @param boolean $_toneOnHold
	 * @param boolean $_toneRingback
	 * @param boolean $_toneOnClosure
	 * @param boolean $_anonymousCallRejection
	 * @return OvhStructTelephonyHuntingInfoReturn
	 */
	public function __construct($_members = NULL,$_strategy = NULL,$_pattern = NULL,$_onHoldTimer = NULL,$_queueSize = NULL,$_numberOfCalls = NULL,$_noReplyTimer = NULL,$_mainVoicemail = NULL,$_toneOnHold = NULL,$_toneRingback = NULL,$_toneOnClosure = NULL,$_anonymousCallRejection = NULL)
	{
		parent::__construct(array('members'=>($_members instanceof OvhStructMyArrayOfTelephonyHuntingInfoMemberStructType)?$_members:new OvhStructMyArrayOfTelephonyHuntingInfoMemberStructType($_members),'strategy'=>$_strategy,'pattern'=>$_pattern,'onHoldTimer'=>$_onHoldTimer,'queueSize'=>$_queueSize,'numberOfCalls'=>$_numberOfCalls,'noReplyTimer'=>$_noReplyTimer,'mainVoicemail'=>$_mainVoicemail,'toneOnHold'=>$_toneOnHold,'toneRingback'=>$_toneRingback,'toneOnClosure'=>$_toneOnClosure,'anonymousCallRejection'=>$_anonymousCallRejection));
	}
	/**
	 * Get members value
	 * @return OvhStructMyArrayOfTelephonyHuntingInfoMemberStructType|null
	 */
	public function getMembers()
	{
		return $this->members;
	}
	/**
	 * Set members value
	 * @param OvhStructMyArrayOfTelephonyHuntingInfoMemberStructType $_members the members
	 * @return OvhStructMyArrayOfTelephonyHuntingInfoMemberStructType
	 */
	public function setMembers($_members)
	{
		return ($this->members = $_members);
	}
	/**
	 * Get strategy value
	 * @return string|null
	 */
	public function getStrategy()
	{
		return $this->strategy;
	}
	/**
	 * Set strategy value
	 * @param string $_strategy the strategy
	 * @return string
	 */
	public function setStrategy($_strategy)
	{
		return ($this->strategy = $_strategy);
	}
	/**
	 * Get pattern value
	 * @return string|null
	 */
	public function getPattern()
	{
		return $this->pattern;
	}
	/**
	 * Set pattern value
	 * @param string $_pattern the pattern
	 * @return string
	 */
	public function setPattern($_pattern)
	{
		return ($this->pattern = $_pattern);
	}
	/**
	 * Get onHoldTimer value
	 * @return int|null
	 */
	public function getOnHoldTimer()
	{
		return $this->onHoldTimer;
	}
	/**
	 * Set onHoldTimer value
	 * @param int $_onHoldTimer the onHoldTimer
	 * @return int
	 */
	public function setOnHoldTimer($_onHoldTimer)
	{
		return ($this->onHoldTimer = $_onHoldTimer);
	}
	/**
	 * Get queueSize value
	 * @return int|null
	 */
	public function getQueueSize()
	{
		return $this->queueSize;
	}
	/**
	 * Set queueSize value
	 * @param int $_queueSize the queueSize
	 * @return int
	 */
	public function setQueueSize($_queueSize)
	{
		return ($this->queueSize = $_queueSize);
	}
	/**
	 * Get numberOfCalls value
	 * @return int|null
	 */
	public function getNumberOfCalls()
	{
		return $this->numberOfCalls;
	}
	/**
	 * Set numberOfCalls value
	 * @param int $_numberOfCalls the numberOfCalls
	 * @return int
	 */
	public function setNumberOfCalls($_numberOfCalls)
	{
		return ($this->numberOfCalls = $_numberOfCalls);
	}
	/**
	 * Get noReplyTimer value
	 * @return int|null
	 */
	public function getNoReplyTimer()
	{
		return $this->noReplyTimer;
	}
	/**
	 * Set noReplyTimer value
	 * @param int $_noReplyTimer the noReplyTimer
	 * @return int
	 */
	public function setNoReplyTimer($_noReplyTimer)
	{
		return ($this->noReplyTimer = $_noReplyTimer);
	}
	/**
	 * Get mainVoicemail value
	 * @return string|null
	 */
	public function getMainVoicemail()
	{
		return $this->mainVoicemail;
	}
	/**
	 * Set mainVoicemail value
	 * @param string $_mainVoicemail the mainVoicemail
	 * @return string
	 */
	public function setMainVoicemail($_mainVoicemail)
	{
		return ($this->mainVoicemail = $_mainVoicemail);
	}
	/**
	 * Get toneOnHold value
	 * @return boolean|null
	 */
	public function getToneOnHold()
	{
		return $this->toneOnHold;
	}
	/**
	 * Set toneOnHold value
	 * @param boolean $_toneOnHold the toneOnHold
	 * @return boolean
	 */
	public function setToneOnHold($_toneOnHold)
	{
		return ($this->toneOnHold = $_toneOnHold);
	}
	/**
	 * Get toneRingback value
	 * @return boolean|null
	 */
	public function getToneRingback()
	{
		return $this->toneRingback;
	}
	/**
	 * Set toneRingback value
	 * @param boolean $_toneRingback the toneRingback
	 * @return boolean
	 */
	public function setToneRingback($_toneRingback)
	{
		return ($this->toneRingback = $_toneRingback);
	}
	/**
	 * Get toneOnClosure value
	 * @return boolean|null
	 */
	public function getToneOnClosure()
	{
		return $this->toneOnClosure;
	}
	/**
	 * Set toneOnClosure value
	 * @param boolean $_toneOnClosure the toneOnClosure
	 * @return boolean
	 */
	public function setToneOnClosure($_toneOnClosure)
	{
		return ($this->toneOnClosure = $_toneOnClosure);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyHuntingInfoReturn
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