<?php
/**
 * File for class OvhStructRpsMigrationGetProgressStatusReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRpsMigrationGetProgressStatusReturn originally named rpsMigrationGetProgressStatusReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRpsMigrationGetProgressStatusReturn extends OvhWsdlClass
{
	/**
	 * The step1
	 * @var OvhStructRpsMigrationGetProgressStatusStepStruct
	 */
	public $step1;
	/**
	 * The step2
	 * @var OvhStructRpsMigrationGetProgressStatusStepStruct
	 */
	public $step2;
	/**
	 * The step3
	 * @var OvhStructRpsMigrationGetProgressStatusStepStruct
	 */
	public $step3;
	/**
	 * The step4
	 * @var OvhStructRpsMigrationGetProgressStatusStepStruct
	 */
	public $step4;
	/**
	 * Constructor method for rpsMigrationGetProgressStatusReturn
	 * @see parent::__construct()
	 * @param OvhStructRpsMigrationGetProgressStatusStepStruct $_step1
	 * @param OvhStructRpsMigrationGetProgressStatusStepStruct $_step2
	 * @param OvhStructRpsMigrationGetProgressStatusStepStruct $_step3
	 * @param OvhStructRpsMigrationGetProgressStatusStepStruct $_step4
	 * @return OvhStructRpsMigrationGetProgressStatusReturn
	 */
	public function __construct($_step1 = NULL,$_step2 = NULL,$_step3 = NULL,$_step4 = NULL)
	{
		parent::__construct(array('step1'=>$_step1,'step2'=>$_step2,'step3'=>$_step3,'step4'=>$_step4));
	}
	/**
	 * Get step1 value
	 * @return OvhStructRpsMigrationGetProgressStatusStepStruct|null
	 */
	public function getStep1()
	{
		return $this->step1;
	}
	/**
	 * Set step1 value
	 * @param OvhStructRpsMigrationGetProgressStatusStepStruct $_step1 the step1
	 * @return OvhStructRpsMigrationGetProgressStatusStepStruct
	 */
	public function setStep1($_step1)
	{
		return ($this->step1 = $_step1);
	}
	/**
	 * Get step2 value
	 * @return OvhStructRpsMigrationGetProgressStatusStepStruct|null
	 */
	public function getStep2()
	{
		return $this->step2;
	}
	/**
	 * Set step2 value
	 * @param OvhStructRpsMigrationGetProgressStatusStepStruct $_step2 the step2
	 * @return OvhStructRpsMigrationGetProgressStatusStepStruct
	 */
	public function setStep2($_step2)
	{
		return ($this->step2 = $_step2);
	}
	/**
	 * Get step3 value
	 * @return OvhStructRpsMigrationGetProgressStatusStepStruct|null
	 */
	public function getStep3()
	{
		return $this->step3;
	}
	/**
	 * Set step3 value
	 * @param OvhStructRpsMigrationGetProgressStatusStepStruct $_step3 the step3
	 * @return OvhStructRpsMigrationGetProgressStatusStepStruct
	 */
	public function setStep3($_step3)
	{
		return ($this->step3 = $_step3);
	}
	/**
	 * Get step4 value
	 * @return OvhStructRpsMigrationGetProgressStatusStepStruct|null
	 */
	public function getStep4()
	{
		return $this->step4;
	}
	/**
	 * Set step4 value
	 * @param OvhStructRpsMigrationGetProgressStatusStepStruct $_step4 the step4
	 * @return OvhStructRpsMigrationGetProgressStatusStepStruct
	 */
	public function setStep4($_step4)
	{
		return ($this->step4 = $_step4);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRpsMigrationGetProgressStatusReturn
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