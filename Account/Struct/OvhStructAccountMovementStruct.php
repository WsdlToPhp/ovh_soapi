<?php
/**
 * File for class OvhStructAccountMovementStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructAccountMovementStruct originally named accountMovementStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructAccountMovementStruct extends OvhWsdlClass
{
	/**
	 * The amount
	 * @var int
	 */
	public $amount;
	/**
	 * The balance
	 * @var int
	 */
	public $balance;
	/**
	 * The previousBalance
	 * @var int
	 */
	public $previousBalance;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The operation
	 * @var string
	 */
	public $operation;
	/**
	 * The order
	 * @var int
	 */
	public $order;
	/**
	 * Constructor method for accountMovementStruct
	 * @see parent::__construct()
	 * @param int $_amount
	 * @param int $_balance
	 * @param int $_previousBalance
	 * @param string $_date
	 * @param string $_description
	 * @param string $_operation
	 * @param int $_order
	 * @return OvhStructAccountMovementStruct
	 */
	public function __construct($_amount = NULL,$_balance = NULL,$_previousBalance = NULL,$_date = NULL,$_description = NULL,$_operation = NULL,$_order = NULL)
	{
		parent::__construct(array('amount'=>$_amount,'balance'=>$_balance,'previousBalance'=>$_previousBalance,'date'=>$_date,'description'=>$_description,'operation'=>$_operation,'order'=>$_order));
	}
	/**
	 * Get amount value
	 * @return int|null
	 */
	public function getAmount()
	{
		return $this->amount;
	}
	/**
	 * Set amount value
	 * @param int $_amount the amount
	 * @return int
	 */
	public function setAmount($_amount)
	{
		return ($this->amount = $_amount);
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
	 * Get previousBalance value
	 * @return int|null
	 */
	public function getPreviousBalance()
	{
		return $this->previousBalance;
	}
	/**
	 * Set previousBalance value
	 * @param int $_previousBalance the previousBalance
	 * @return int
	 */
	public function setPreviousBalance($_previousBalance)
	{
		return ($this->previousBalance = $_previousBalance);
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
	 * Get operation value
	 * @return string|null
	 */
	public function getOperation()
	{
		return $this->operation;
	}
	/**
	 * Set operation value
	 * @param string $_operation the operation
	 * @return string
	 */
	public function setOperation($_operation)
	{
		return ($this->operation = $_operation);
	}
	/**
	 * Get order value
	 * @return int|null
	 */
	public function getOrder()
	{
		return $this->order;
	}
	/**
	 * Set order value
	 * @param int $_order the order
	 * @return int
	 */
	public function setOrder($_order)
	{
		return ($this->order = $_order);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructAccountMovementStruct
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