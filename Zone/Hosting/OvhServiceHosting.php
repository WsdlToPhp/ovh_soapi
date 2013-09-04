<?php
/**
 * File for class OvhServiceHosting
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceHosting originally named Hosting
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceHosting extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named hostingAccessByNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructHostingAccessByNic::getSession()
	 * @uses OvhStructHostingAccessByNic::getDomain()
	 * @param OvhStructHostingAccessByNic $_ovhStructHostingAccessByNic
	 * @return OvhStructHostingAccessByNicResponse
	 */
	public function hostingAccessByNic(OvhStructHostingAccessByNic $_ovhStructHostingAccessByNic)
	{
		try
		{
			$this->setResult(self::getSoapClient()->hostingAccessByNic($_ovhStructHostingAccessByNic->getSession(),$_ovhStructHostingAccessByNic->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named hostingSummary
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructHostingSummary::getSession()
	 * @uses OvhStructHostingSummary::getDomain()
	 * @param OvhStructHostingSummary $_ovhStructHostingSummary
	 * @return OvhStructHostingSummaryResponse
	 */
	public function hostingSummary(OvhStructHostingSummary $_ovhStructHostingSummary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->hostingSummary($_ovhStructHostingSummary->getSession(),$_ovhStructHostingSummary->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named hostingGetCapabilities
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructHostingGetCapabilities::getSession()
	 * @uses OvhStructHostingGetCapabilities::getDomain()
	 * @param OvhStructHostingGetCapabilities $_ovhStructHostingGetCapabilities
	 * @return OvhStructHostingGetCapabilitiesResponse
	 */
	public function hostingGetCapabilities(OvhStructHostingGetCapabilities $_ovhStructHostingGetCapabilities)
	{
		try
		{
			$this->setResult(self::getSoapClient()->hostingGetCapabilities($_ovhStructHostingGetCapabilities->getSession(),$_ovhStructHostingGetCapabilities->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named hostingChangeMainDomain
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructHostingChangeMainDomain::getSession()
	 * @uses OvhStructHostingChangeMainDomain::getDomain()
	 * @uses OvhStructHostingChangeMainDomain::getNewDomain()
	 * @uses OvhStructHostingChangeMainDomain::getMxAction()
	 * @uses OvhStructHostingChangeMainDomain::getMxOffer()
	 * @param OvhStructHostingChangeMainDomain $_ovhStructHostingChangeMainDomain
	 * @return OvhStructHostingChangeMainDomainResponse
	 */
	public function hostingChangeMainDomain(OvhStructHostingChangeMainDomain $_ovhStructHostingChangeMainDomain)
	{
		try
		{
			$this->setResult(self::getSoapClient()->hostingChangeMainDomain($_ovhStructHostingChangeMainDomain->getSession(),$_ovhStructHostingChangeMainDomain->getDomain(),$_ovhStructHostingChangeMainDomain->getNewDomain(),$_ovhStructHostingChangeMainDomain->getMxAction(),$_ovhStructHostingChangeMainDomain->getMxOffer()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named hostingList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructHostingList::getSession()
	 * @param OvhStructHostingList $_ovhStructHostingList
	 * @return OvhStructHostingListResponse
	 */
	public function hostingList(OvhStructHostingList $_ovhStructHostingList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->hostingList($_ovhStructHostingList->getSession()));
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
	 * @return OvhStructHostingAccessByNicResponse|OvhStructHostingChangeMainDomainResponse|OvhStructHostingGetCapabilitiesResponse|OvhStructHostingListResponse|OvhStructHostingSummaryResponse
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