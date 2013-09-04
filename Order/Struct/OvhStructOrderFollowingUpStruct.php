<?php
/**
 * File for class OvhStructOrderFollowingUpStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructOrderFollowingUpStruct originally named orderFollowingUpStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructOrderFollowingUpStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * The urlId
	 * @var string
	 */
	public $urlId;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The creationDate
	 * @var string
	 */
	public $creationDate;
	/**
	 * The payment
	 * @var string
	 */
	public $payment;
	/**
	 * The procedure
	 * @var string
	 */
	public $procedure;
	/**
	 * The install
	 * @var string
	 */
	public $install;
	/**
	 * The shipping
	 * @var string
	 */
	public $shipping;
	/**
	 * The cloture
	 * @var string
	 */
	public $cloture;
	/**
	 * The paymentBuffer
	 * @var OvhStructBufferStepStruct
	 */
	public $paymentBuffer;
	/**
	 * The procedureBuffer
	 * @var OvhStructBufferStepStruct
	 */
	public $procedureBuffer;
	/**
	 * The installBuffer
	 * @var OvhStructBufferStepStruct
	 */
	public $installBuffer;
	/**
	 * The shippingBuffer
	 * @var OvhStructBufferStepStruct
	 */
	public $shippingBuffer;
	/**
	 * The clotureBuffer
	 * @var OvhStructBufferStepStruct
	 */
	public $clotureBuffer;
	/**
	 * The avancement
	 * @var string
	 */
	public $avancement;
	/**
	 * Constructor method for orderFollowingUpStruct
	 * @see parent::__construct()
	 * @param string $_id
	 * @param string $_urlId
	 * @param string $_type
	 * @param string $_creationDate
	 * @param string $_payment
	 * @param string $_procedure
	 * @param string $_install
	 * @param string $_shipping
	 * @param string $_cloture
	 * @param OvhStructBufferStepStruct $_paymentBuffer
	 * @param OvhStructBufferStepStruct $_procedureBuffer
	 * @param OvhStructBufferStepStruct $_installBuffer
	 * @param OvhStructBufferStepStruct $_shippingBuffer
	 * @param OvhStructBufferStepStruct $_clotureBuffer
	 * @param string $_avancement
	 * @return OvhStructOrderFollowingUpStruct
	 */
	public function __construct($_id = NULL,$_urlId = NULL,$_type = NULL,$_creationDate = NULL,$_payment = NULL,$_procedure = NULL,$_install = NULL,$_shipping = NULL,$_cloture = NULL,$_paymentBuffer = NULL,$_procedureBuffer = NULL,$_installBuffer = NULL,$_shippingBuffer = NULL,$_clotureBuffer = NULL,$_avancement = NULL)
	{
		parent::__construct(array('id'=>$_id,'urlId'=>$_urlId,'type'=>$_type,'creationDate'=>$_creationDate,'payment'=>$_payment,'procedure'=>$_procedure,'install'=>$_install,'shipping'=>$_shipping,'cloture'=>$_cloture,'paymentBuffer'=>$_paymentBuffer,'procedureBuffer'=>$_procedureBuffer,'installBuffer'=>$_installBuffer,'shippingBuffer'=>$_shippingBuffer,'clotureBuffer'=>$_clotureBuffer,'avancement'=>$_avancement));
	}
	/**
	 * Get id value
	 * @return string|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param string $_id the id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get urlId value
	 * @return string|null
	 */
	public function getUrlId()
	{
		return $this->urlId;
	}
	/**
	 * Set urlId value
	 * @param string $_urlId the urlId
	 * @return string
	 */
	public function setUrlId($_urlId)
	{
		return ($this->urlId = $_urlId);
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
	 * Get creationDate value
	 * @return string|null
	 */
	public function getCreationDate()
	{
		return $this->creationDate;
	}
	/**
	 * Set creationDate value
	 * @param string $_creationDate the creationDate
	 * @return string
	 */
	public function setCreationDate($_creationDate)
	{
		return ($this->creationDate = $_creationDate);
	}
	/**
	 * Get payment value
	 * @return string|null
	 */
	public function getPayment()
	{
		return $this->payment;
	}
	/**
	 * Set payment value
	 * @param string $_payment the payment
	 * @return string
	 */
	public function setPayment($_payment)
	{
		return ($this->payment = $_payment);
	}
	/**
	 * Get procedure value
	 * @return string|null
	 */
	public function getProcedure()
	{
		return $this->procedure;
	}
	/**
	 * Set procedure value
	 * @param string $_procedure the procedure
	 * @return string
	 */
	public function setProcedure($_procedure)
	{
		return ($this->procedure = $_procedure);
	}
	/**
	 * Get install value
	 * @return string|null
	 */
	public function getInstall()
	{
		return $this->install;
	}
	/**
	 * Set install value
	 * @param string $_install the install
	 * @return string
	 */
	public function setInstall($_install)
	{
		return ($this->install = $_install);
	}
	/**
	 * Get shipping value
	 * @return string|null
	 */
	public function getShipping()
	{
		return $this->shipping;
	}
	/**
	 * Set shipping value
	 * @param string $_shipping the shipping
	 * @return string
	 */
	public function setShipping($_shipping)
	{
		return ($this->shipping = $_shipping);
	}
	/**
	 * Get cloture value
	 * @return string|null
	 */
	public function getCloture()
	{
		return $this->cloture;
	}
	/**
	 * Set cloture value
	 * @param string $_cloture the cloture
	 * @return string
	 */
	public function setCloture($_cloture)
	{
		return ($this->cloture = $_cloture);
	}
	/**
	 * Get paymentBuffer value
	 * @return OvhStructBufferStepStruct|null
	 */
	public function getPaymentBuffer()
	{
		return $this->paymentBuffer;
	}
	/**
	 * Set paymentBuffer value
	 * @param OvhStructBufferStepStruct $_paymentBuffer the paymentBuffer
	 * @return OvhStructBufferStepStruct
	 */
	public function setPaymentBuffer($_paymentBuffer)
	{
		return ($this->paymentBuffer = $_paymentBuffer);
	}
	/**
	 * Get procedureBuffer value
	 * @return OvhStructBufferStepStruct|null
	 */
	public function getProcedureBuffer()
	{
		return $this->procedureBuffer;
	}
	/**
	 * Set procedureBuffer value
	 * @param OvhStructBufferStepStruct $_procedureBuffer the procedureBuffer
	 * @return OvhStructBufferStepStruct
	 */
	public function setProcedureBuffer($_procedureBuffer)
	{
		return ($this->procedureBuffer = $_procedureBuffer);
	}
	/**
	 * Get installBuffer value
	 * @return OvhStructBufferStepStruct|null
	 */
	public function getInstallBuffer()
	{
		return $this->installBuffer;
	}
	/**
	 * Set installBuffer value
	 * @param OvhStructBufferStepStruct $_installBuffer the installBuffer
	 * @return OvhStructBufferStepStruct
	 */
	public function setInstallBuffer($_installBuffer)
	{
		return ($this->installBuffer = $_installBuffer);
	}
	/**
	 * Get shippingBuffer value
	 * @return OvhStructBufferStepStruct|null
	 */
	public function getShippingBuffer()
	{
		return $this->shippingBuffer;
	}
	/**
	 * Set shippingBuffer value
	 * @param OvhStructBufferStepStruct $_shippingBuffer the shippingBuffer
	 * @return OvhStructBufferStepStruct
	 */
	public function setShippingBuffer($_shippingBuffer)
	{
		return ($this->shippingBuffer = $_shippingBuffer);
	}
	/**
	 * Get clotureBuffer value
	 * @return OvhStructBufferStepStruct|null
	 */
	public function getClotureBuffer()
	{
		return $this->clotureBuffer;
	}
	/**
	 * Set clotureBuffer value
	 * @param OvhStructBufferStepStruct $_clotureBuffer the clotureBuffer
	 * @return OvhStructBufferStepStruct
	 */
	public function setClotureBuffer($_clotureBuffer)
	{
		return ($this->clotureBuffer = $_clotureBuffer);
	}
	/**
	 * Get avancement value
	 * @return string|null
	 */
	public function getAvancement()
	{
		return $this->avancement;
	}
	/**
	 * Set avancement value
	 * @param string $_avancement the avancement
	 * @return string
	 */
	public function setAvancement($_avancement)
	{
		return ($this->avancement = $_avancement);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructOrderFollowingUpStruct
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