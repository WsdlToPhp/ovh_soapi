<?php
/**
 * File for class OvhServiceBilling
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceBilling originally named Billing
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceBilling extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named billingInvoiceList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructBillingInvoiceList::getSession()
	 * @param OvhStructBillingInvoiceList $_ovhStructBillingInvoiceList
	 * @return OvhStructBillingInvoiceListResponse
	 */
	public function billingInvoiceList(OvhStructBillingInvoiceList $_ovhStructBillingInvoiceList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->billingInvoiceList($_ovhStructBillingInvoiceList->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named billingGetReferencesToExpired
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructBillingGetReferencesToExpired::getSession()
	 * @uses OvhStructBillingGetReferencesToExpired::getDelay()
	 * @param OvhStructBillingGetReferencesToExpired $_ovhStructBillingGetReferencesToExpired
	 * @return OvhStructBillingGetReferencesToExpiredResponse
	 */
	public function billingGetReferencesToExpired(OvhStructBillingGetReferencesToExpired $_ovhStructBillingGetReferencesToExpired)
	{
		try
		{
			$this->setResult(self::getSoapClient()->billingGetReferencesToExpired($_ovhStructBillingGetReferencesToExpired->getSession(),$_ovhStructBillingGetReferencesToExpired->getDelay()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named billingGetAccessByNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructBillingGetAccessByNic::getSession()
	 * @param OvhStructBillingGetAccessByNic $_ovhStructBillingGetAccessByNic
	 * @return OvhStructBillingGetAccessByNicResponse
	 */
	public function billingGetAccessByNic(OvhStructBillingGetAccessByNic $_ovhStructBillingGetAccessByNic)
	{
		try
		{
			$this->setResult(self::getSoapClient()->billingGetAccessByNic($_ovhStructBillingGetAccessByNic->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named billingInvoiceInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructBillingInvoiceInfo::getSession()
	 * @uses OvhStructBillingInvoiceInfo::getNumber()
	 * @uses OvhStructBillingInvoiceInfo::getPassword()
	 * @uses OvhStructBillingInvoiceInfo::getCountry()
	 * @param OvhStructBillingInvoiceInfo $_ovhStructBillingInvoiceInfo
	 * @return OvhStructBillingInvoiceInfoResponse
	 */
	public function billingInvoiceInfo(OvhStructBillingInvoiceInfo $_ovhStructBillingInvoiceInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->billingInvoiceInfo($_ovhStructBillingInvoiceInfo->getSession(),$_ovhStructBillingInvoiceInfo->getNumber(),$_ovhStructBillingInvoiceInfo->getPassword(),$_ovhStructBillingInvoiceInfo->getCountry()));
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
	 * @return OvhStructBillingGetAccessByNicResponse|OvhStructBillingGetReferencesToExpiredResponse|OvhStructBillingInvoiceInfoResponse|OvhStructBillingInvoiceListResponse
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