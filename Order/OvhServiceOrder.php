<?php
/**
 * File for class OvhServiceOrder
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceOrder originally named Order
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceOrder extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named orderTelephonySmsCredit
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructOrderTelephonySmsCredit::getSession()
	 * @uses OvhStructOrderTelephonySmsCredit::getSmsAccount()
	 * @uses OvhStructOrderTelephonySmsCredit::getQuantity()
	 * @uses OvhStructOrderTelephonySmsCredit::getPayWithPoints()
	 * @param OvhStructOrderTelephonySmsCredit $_ovhStructOrderTelephonySmsCredit
	 * @return OvhStructOrderTelephonySmsCreditResponse
	 */
	public function orderTelephonySmsCredit(OvhStructOrderTelephonySmsCredit $_ovhStructOrderTelephonySmsCredit)
	{
		try
		{
			$this->setResult(self::getSoapClient()->orderTelephonySmsCredit($_ovhStructOrderTelephonySmsCredit->getSession(),$_ovhStructOrderTelephonySmsCredit->getSmsAccount(),$_ovhStructOrderTelephonySmsCredit->getQuantity(),$_ovhStructOrderTelephonySmsCredit->getPayWithPoints()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named orderAccountCredit
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructOrderAccountCredit::getSession()
	 * @uses OvhStructOrderAccountCredit::getAmount()
	 * @param OvhStructOrderAccountCredit $_ovhStructOrderAccountCredit
	 * @return OvhStructOrderAccountCreditResponse
	 */
	public function orderAccountCredit(OvhStructOrderAccountCredit $_ovhStructOrderAccountCredit)
	{
		try
		{
			$this->setResult(self::getSoapClient()->orderAccountCredit($_ovhStructOrderAccountCredit->getSession(),$_ovhStructOrderAccountCredit->getAmount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named orderEmailMxPlan
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructOrderEmailMxPlan::getSession()
	 * @uses OvhStructOrderEmailMxPlan::getDomain()
	 * @uses OvhStructOrderEmailMxPlan::getType()
	 * @uses OvhStructOrderEmailMxPlan::getPayWithPoints()
	 * @param OvhStructOrderEmailMxPlan $_ovhStructOrderEmailMxPlan
	 * @return OvhStructOrderEmailMxPlanResponse
	 */
	public function orderEmailMxPlan(OvhStructOrderEmailMxPlan $_ovhStructOrderEmailMxPlan)
	{
		try
		{
			$this->setResult(self::getSoapClient()->orderEmailMxPlan($_ovhStructOrderEmailMxPlan->getSession(),$_ovhStructOrderEmailMxPlan->getDomain(),$_ovhStructOrderEmailMxPlan->getType(),$_ovhStructOrderEmailMxPlan->getPayWithPoints()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named orderEmailMxLarge
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructOrderEmailMxLarge::getSession()
	 * @uses OvhStructOrderEmailMxLarge::getDomain()
	 * @uses OvhStructOrderEmailMxLarge::getType()
	 * @uses OvhStructOrderEmailMxLarge::getPayWithPoints()
	 * @param OvhStructOrderEmailMxLarge $_ovhStructOrderEmailMxLarge
	 * @return OvhStructOrderEmailMxLargeResponse
	 */
	public function orderEmailMxLarge(OvhStructOrderEmailMxLarge $_ovhStructOrderEmailMxLarge)
	{
		try
		{
			$this->setResult(self::getSoapClient()->orderEmailMxLarge($_ovhStructOrderEmailMxLarge->getSession(),$_ovhStructOrderEmailMxLarge->getDomain(),$_ovhStructOrderEmailMxLarge->getType(),$_ovhStructOrderEmailMxLarge->getPayWithPoints()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named orderDedicatedFailover
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructOrderDedicatedFailover::getSession()
	 * @uses OvhStructOrderDedicatedFailover::getDomain()
	 * @uses OvhStructOrderDedicatedFailover::getOrderIps()
	 * @uses OvhStructOrderDedicatedFailover::getPayWithPoints()
	 * @param OvhStructOrderDedicatedFailover $_ovhStructOrderDedicatedFailover
	 * @return OvhStructOrderDedicatedFailoverResponse
	 */
	public function orderDedicatedFailover(OvhStructOrderDedicatedFailover $_ovhStructOrderDedicatedFailover)
	{
		try
		{
			$this->setResult(self::getSoapClient()->orderDedicatedFailover($_ovhStructOrderDedicatedFailover->getSession(),$_ovhStructOrderDedicatedFailover->getDomain(),$_ovhStructOrderDedicatedFailover->getOrderIps(),$_ovhStructOrderDedicatedFailover->getPayWithPoints()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named orderDedicatedFailoverRipe
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructOrderDedicatedFailoverRipe::getSession()
	 * @uses OvhStructOrderDedicatedFailoverRipe::getHostname()
	 * @uses OvhStructOrderDedicatedFailoverRipe::getAddress()
	 * @uses OvhStructOrderDedicatedFailoverRipe::getPeriod()
	 * @uses OvhStructOrderDedicatedFailoverRipe::getPayWithPoints()
	 * @param OvhStructOrderDedicatedFailoverRipe $_ovhStructOrderDedicatedFailoverRipe
	 * @return OvhStructOrderDedicatedFailoverRipeResponse
	 */
	public function orderDedicatedFailoverRipe(OvhStructOrderDedicatedFailoverRipe $_ovhStructOrderDedicatedFailoverRipe)
	{
		try
		{
			$this->setResult(self::getSoapClient()->orderDedicatedFailoverRipe($_ovhStructOrderDedicatedFailoverRipe->getSession(),$_ovhStructOrderDedicatedFailoverRipe->getHostname(),$_ovhStructOrderDedicatedFailoverRipe->getAddress(),$_ovhStructOrderDedicatedFailoverRipe->getPeriod(),$_ovhStructOrderDedicatedFailoverRipe->getPayWithPoints()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Returns the result
	 * @see OvhWsdlClass::getResult()
	 * @return OvhStructOrderAccountCreditResponse|OvhStructOrderDedicatedFailoverResponse|OvhStructOrderDedicatedFailoverRipeResponse|OvhStructOrderEmailMxLargeResponse|OvhStructOrderEmailMxPlanResponse|OvhStructOrderTelephonySmsCreditResponse
	 */
	public function getResult()
	{
		return parent::getResult();
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