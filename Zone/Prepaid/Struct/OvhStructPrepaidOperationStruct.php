<?php
/**
 * File for class OvhStructPrepaidOperationStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructPrepaidOperationStruct originally named prepaidOperationStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructPrepaidOperationStruct extends OvhWsdlClass
{
	/**
	 * The balance_forward
	 * @var float
	 */
	public $balance_forward;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * The account_name
	 * @var string
	 */
	public $account_name;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The amount
	 * @var float
	 */
	public $amount;
	/**
	 * The balance
	 * @var float
	 */
	public $balance;
	/**
	 * The order
	 * @var int
	 */
	public $order;
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The operation
	 * @var string
	 */
	public $operation;
	/**
	 * Constructor method for prepaidOperationStruct
	 * @see parent::__construct()
	 * @param float $_balance_forward
	 * @param string $_date
	 * @param string $_nic
	 * @param string $_account_name
	 * @param string $_description
	 * @param float $_amount
	 * @param float $_balance
	 * @param int $_order
	 * @param int $_id
	 * @param string $_operation
	 * @return OvhStructPrepaidOperationStruct
	 */
	public function __construct($_balance_forward = NULL,$_date = NULL,$_nic = NULL,$_account_name = NULL,$_description = NULL,$_amount = NULL,$_balance = NULL,$_order = NULL,$_id = NULL,$_operation = NULL)
	{
		parent::__construct(array('balance_forward'=>$_balance_forward,'date'=>$_date,'nic'=>$_nic,'account_name'=>$_account_name,'description'=>$_description,'amount'=>$_amount,'balance'=>$_balance,'order'=>$_order,'id'=>$_id,'operation'=>$_operation));
	}
	/**
	 * Get balance_forward value
	 * @return float|null
	 */
	public function getBalance_forward()
	{
		return $this->balance_forward;
	}
	/**
	 * Set balance_forward value
	 * @param float $_balance_forward the balance_forward
	 * @return float
	 */
	public function setBalance_forward($_balance_forward)
	{
		return ($this->balance_forward = $_balance_forward);
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
	 * Get account_name value
	 * @return string|null
	 */
	public function getAccount_name()
	{
		return $this->account_name;
	}
	/**
	 * Set account_name value
	 * @param string $_account_name the account_name
	 * @return string
	 */
	public function setAccount_name($_account_name)
	{
		return ($this->account_name = $_account_name);
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
	 * Get amount value
	 * @return float|null
	 */
	public function getAmount()
	{
		return $this->amount;
	}
	/**
	 * Set amount value
	 * @param float $_amount the amount
	 * @return float
	 */
	public function setAmount($_amount)
	{
		return ($this->amount = $_amount);
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
	 * Get id value
	 * @return int|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param int $_id the id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructPrepaidOperationStruct
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