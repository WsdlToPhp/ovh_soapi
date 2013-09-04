<?php
/**
 * File for class OvhServiceEmail
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceEmail originally named Email
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceEmail extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named emailGetCapabilities
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructEmailGetCapabilities::getSession()
	 * @uses OvhStructEmailGetCapabilities::getDomain()
	 * @param OvhStructEmailGetCapabilities $_ovhStructEmailGetCapabilities
	 * @return OvhStructEmailGetCapabilitiesResponse
	 */
	public function emailGetCapabilities(OvhStructEmailGetCapabilities $_ovhStructEmailGetCapabilities)
	{
		try
		{
			$this->setResult(self::getSoapClient()->emailGetCapabilities($_ovhStructEmailGetCapabilities->getSession(),$_ovhStructEmailGetCapabilities->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named emailDomainListByMasterNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructEmailDomainListByMasterNic::getSession()
	 * @param OvhStructEmailDomainListByMasterNic $_ovhStructEmailDomainListByMasterNic
	 * @return OvhStructEmailDomainListByMasterNicResponse
	 */
	public function emailDomainListByMasterNic(OvhStructEmailDomainListByMasterNic $_ovhStructEmailDomainListByMasterNic)
	{
		try
		{
			$this->setResult(self::getSoapClient()->emailDomainListByMasterNic($_ovhStructEmailDomainListByMasterNic->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named emailDomainSummary
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructEmailDomainSummary::getSession()
	 * @uses OvhStructEmailDomainSummary::getDomain()
	 * @param OvhStructEmailDomainSummary $_ovhStructEmailDomainSummary
	 * @return OvhStructEmailDomainSummaryResponse
	 */
	public function emailDomainSummary(OvhStructEmailDomainSummary $_ovhStructEmailDomainSummary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->emailDomainSummary($_ovhStructEmailDomainSummary->getSession(),$_ovhStructEmailDomainSummary->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named emailFilterAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructEmailFilterAdd::getSession()
	 * @uses OvhStructEmailFilterAdd::getDomain()
	 * @uses OvhStructEmailFilterAdd::getPop()
	 * @uses OvhStructEmailFilterAdd::getFilter()
	 * @uses OvhStructEmailFilterAdd::getPriority()
	 * @uses OvhStructEmailFilterAdd::getActive()
	 * @uses OvhStructEmailFilterAdd::getAction()
	 * @uses OvhStructEmailFilterAdd::getAction_param()
	 * @uses OvhStructEmailFilterAdd::getHeader()
	 * @uses OvhStructEmailFilterAdd::getRule()
	 * @uses OvhStructEmailFilterAdd::getRule_param()
	 * @param OvhStructEmailFilterAdd $_ovhStructEmailFilterAdd
	 * @return OvhStructEmailFilterAddResponse
	 */
	public function emailFilterAdd(OvhStructEmailFilterAdd $_ovhStructEmailFilterAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->emailFilterAdd($_ovhStructEmailFilterAdd->getSession(),$_ovhStructEmailFilterAdd->getDomain(),$_ovhStructEmailFilterAdd->getPop(),$_ovhStructEmailFilterAdd->getFilter(),$_ovhStructEmailFilterAdd->getPriority(),$_ovhStructEmailFilterAdd->getActive(),$_ovhStructEmailFilterAdd->getAction(),$_ovhStructEmailFilterAdd->getAction_param(),$_ovhStructEmailFilterAdd->getHeader(),$_ovhStructEmailFilterAdd->getRule(),$_ovhStructEmailFilterAdd->getRule_param()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named emailAccessByNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructEmailAccessByNic::getSession()
	 * @param OvhStructEmailAccessByNic $_ovhStructEmailAccessByNic
	 * @return OvhStructEmailAccessByNicResponse
	 */
	public function emailAccessByNic(OvhStructEmailAccessByNic $_ovhStructEmailAccessByNic)
	{
		try
		{
			$this->setResult(self::getSoapClient()->emailAccessByNic($_ovhStructEmailAccessByNic->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named emailFilterRuleDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructEmailFilterRuleDel::getSession()
	 * @uses OvhStructEmailFilterRuleDel::getDomain()
	 * @uses OvhStructEmailFilterRuleDel::getPop()
	 * @uses OvhStructEmailFilterRuleDel::getFilter()
	 * @uses OvhStructEmailFilterRuleDel::getId()
	 * @param OvhStructEmailFilterRuleDel $_ovhStructEmailFilterRuleDel
	 * @return OvhStructEmailFilterRuleDelResponse
	 */
	public function emailFilterRuleDel(OvhStructEmailFilterRuleDel $_ovhStructEmailFilterRuleDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->emailFilterRuleDel($_ovhStructEmailFilterRuleDel->getSession(),$_ovhStructEmailFilterRuleDel->getDomain(),$_ovhStructEmailFilterRuleDel->getPop(),$_ovhStructEmailFilterRuleDel->getFilter(),$_ovhStructEmailFilterRuleDel->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named emailFilterPriority
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructEmailFilterPriority::getSession()
	 * @uses OvhStructEmailFilterPriority::getDomain()
	 * @uses OvhStructEmailFilterPriority::getPop()
	 * @uses OvhStructEmailFilterPriority::getFilter()
	 * @uses OvhStructEmailFilterPriority::getPriority()
	 * @param OvhStructEmailFilterPriority $_ovhStructEmailFilterPriority
	 * @return OvhStructEmailFilterPriorityResponse
	 */
	public function emailFilterPriority(OvhStructEmailFilterPriority $_ovhStructEmailFilterPriority)
	{
		try
		{
			$this->setResult(self::getSoapClient()->emailFilterPriority($_ovhStructEmailFilterPriority->getSession(),$_ovhStructEmailFilterPriority->getDomain(),$_ovhStructEmailFilterPriority->getPop(),$_ovhStructEmailFilterPriority->getFilter(),$_ovhStructEmailFilterPriority->getPriority()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named emailFilterDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructEmailFilterDel::getSession()
	 * @uses OvhStructEmailFilterDel::getDomain()
	 * @uses OvhStructEmailFilterDel::getPop()
	 * @uses OvhStructEmailFilterDel::getFilter()
	 * @param OvhStructEmailFilterDel $_ovhStructEmailFilterDel
	 * @return OvhStructEmailFilterDelResponse
	 */
	public function emailFilterDel(OvhStructEmailFilterDel $_ovhStructEmailFilterDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->emailFilterDel($_ovhStructEmailFilterDel->getSession(),$_ovhStructEmailFilterDel->getDomain(),$_ovhStructEmailFilterDel->getPop(),$_ovhStructEmailFilterDel->getFilter()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named emailSetDomainCatchAll
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructEmailSetDomainCatchAll::getSession()
	 * @uses OvhStructEmailSetDomainCatchAll::getDomain()
	 * @uses OvhStructEmailSetDomainCatchAll::getType()
	 * @uses OvhStructEmailSetDomainCatchAll::getPop()
	 * @uses OvhStructEmailSetDomainCatchAll::getAddress()
	 * @param OvhStructEmailSetDomainCatchAll $_ovhStructEmailSetDomainCatchAll
	 * @return OvhStructEmailSetDomainCatchAllResponse
	 */
	public function emailSetDomainCatchAll(OvhStructEmailSetDomainCatchAll $_ovhStructEmailSetDomainCatchAll)
	{
		try
		{
			$this->setResult(self::getSoapClient()->emailSetDomainCatchAll($_ovhStructEmailSetDomainCatchAll->getSession(),$_ovhStructEmailSetDomainCatchAll->getDomain(),$_ovhStructEmailSetDomainCatchAll->getType(),$_ovhStructEmailSetDomainCatchAll->getPop(),$_ovhStructEmailSetDomainCatchAll->getAddress()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named emailDomainMxList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructEmailDomainMxList::getSession()
	 * @uses OvhStructEmailDomainMxList::getDomain()
	 * @param OvhStructEmailDomainMxList $_ovhStructEmailDomainMxList
	 * @return OvhStructEmailDomainMxListResponse
	 */
	public function emailDomainMxList(OvhStructEmailDomainMxList $_ovhStructEmailDomainMxList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->emailDomainMxList($_ovhStructEmailDomainMxList->getSession(),$_ovhStructEmailDomainMxList->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named emailFilterRuleAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructEmailFilterRuleAdd::getSession()
	 * @uses OvhStructEmailFilterRuleAdd::getDomain()
	 * @uses OvhStructEmailFilterRuleAdd::getPop()
	 * @uses OvhStructEmailFilterRuleAdd::getFilter()
	 * @uses OvhStructEmailFilterRuleAdd::getHeader()
	 * @uses OvhStructEmailFilterRuleAdd::getRule()
	 * @uses OvhStructEmailFilterRuleAdd::getRule_param()
	 * @param OvhStructEmailFilterRuleAdd $_ovhStructEmailFilterRuleAdd
	 * @return OvhStructEmailFilterRuleAddResponse
	 */
	public function emailFilterRuleAdd(OvhStructEmailFilterRuleAdd $_ovhStructEmailFilterRuleAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->emailFilterRuleAdd($_ovhStructEmailFilterRuleAdd->getSession(),$_ovhStructEmailFilterRuleAdd->getDomain(),$_ovhStructEmailFilterRuleAdd->getPop(),$_ovhStructEmailFilterRuleAdd->getFilter(),$_ovhStructEmailFilterRuleAdd->getHeader(),$_ovhStructEmailFilterRuleAdd->getRule(),$_ovhStructEmailFilterRuleAdd->getRule_param()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named emailFilterActive
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructEmailFilterActive::getSession()
	 * @uses OvhStructEmailFilterActive::getDomain()
	 * @uses OvhStructEmailFilterActive::getPop()
	 * @uses OvhStructEmailFilterActive::getFilter()
	 * @uses OvhStructEmailFilterActive::getActive()
	 * @param OvhStructEmailFilterActive $_ovhStructEmailFilterActive
	 * @return OvhStructEmailFilterActiveResponse
	 */
	public function emailFilterActive(OvhStructEmailFilterActive $_ovhStructEmailFilterActive)
	{
		try
		{
			$this->setResult(self::getSoapClient()->emailFilterActive($_ovhStructEmailFilterActive->getSession(),$_ovhStructEmailFilterActive->getDomain(),$_ovhStructEmailFilterActive->getPop(),$_ovhStructEmailFilterActive->getFilter(),$_ovhStructEmailFilterActive->getActive()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named emailFilterList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructEmailFilterList::getSession()
	 * @uses OvhStructEmailFilterList::getDomain()
	 * @uses OvhStructEmailFilterList::getPop()
	 * @param OvhStructEmailFilterList $_ovhStructEmailFilterList
	 * @return OvhStructEmailFilterListResponse
	 */
	public function emailFilterList(OvhStructEmailFilterList $_ovhStructEmailFilterList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->emailFilterList($_ovhStructEmailFilterList->getSession(),$_ovhStructEmailFilterList->getDomain(),$_ovhStructEmailFilterList->getPop()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named emailGetDomainMxFiltering
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructEmailGetDomainMxFiltering::getSession()
	 * @uses OvhStructEmailGetDomainMxFiltering::getDomain()
	 * @uses OvhStructEmailGetDomainMxFiltering::getSubdomain()
	 * @param OvhStructEmailGetDomainMxFiltering $_ovhStructEmailGetDomainMxFiltering
	 * @return OvhStructEmailGetDomainMxFilteringResponse
	 */
	public function emailGetDomainMxFiltering(OvhStructEmailGetDomainMxFiltering $_ovhStructEmailGetDomainMxFiltering)
	{
		try
		{
			$this->setResult(self::getSoapClient()->emailGetDomainMxFiltering($_ovhStructEmailGetDomainMxFiltering->getSession(),$_ovhStructEmailGetDomainMxFiltering->getDomain(),$_ovhStructEmailGetDomainMxFiltering->getSubdomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named emailDelMasterNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructEmailDelMasterNic::getSession()
	 * @uses OvhStructEmailDelMasterNic::getDomain()
	 * @param OvhStructEmailDelMasterNic $_ovhStructEmailDelMasterNic
	 * @return OvhStructEmailDelMasterNicResponse
	 */
	public function emailDelMasterNic(OvhStructEmailDelMasterNic $_ovhStructEmailDelMasterNic)
	{
		try
		{
			$this->setResult(self::getSoapClient()->emailDelMasterNic($_ovhStructEmailDelMasterNic->getSession(),$_ovhStructEmailDelMasterNic->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named emailGetDomainCatchAll
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructEmailGetDomainCatchAll::getSession()
	 * @uses OvhStructEmailGetDomainCatchAll::getDomain()
	 * @param OvhStructEmailGetDomainCatchAll $_ovhStructEmailGetDomainCatchAll
	 * @return OvhStructEmailGetDomainCatchAllResponse
	 */
	public function emailGetDomainCatchAll(OvhStructEmailGetDomainCatchAll $_ovhStructEmailGetDomainCatchAll)
	{
		try
		{
			$this->setResult(self::getSoapClient()->emailGetDomainCatchAll($_ovhStructEmailGetDomainCatchAll->getSession(),$_ovhStructEmailGetDomainCatchAll->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named emailSetMasterNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructEmailSetMasterNic::getSession()
	 * @uses OvhStructEmailSetMasterNic::getDomain()
	 * @uses OvhStructEmailSetMasterNic::getNic()
	 * @param OvhStructEmailSetMasterNic $_ovhStructEmailSetMasterNic
	 * @return OvhStructEmailSetMasterNicResponse
	 */
	public function emailSetMasterNic(OvhStructEmailSetMasterNic $_ovhStructEmailSetMasterNic)
	{
		try
		{
			$this->setResult(self::getSoapClient()->emailSetMasterNic($_ovhStructEmailSetMasterNic->getSession(),$_ovhStructEmailSetMasterNic->getDomain(),$_ovhStructEmailSetMasterNic->getNic()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named emailSetDomainMxFiltering
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructEmailSetDomainMxFiltering::getSession()
	 * @uses OvhStructEmailSetDomainMxFiltering::getDomain()
	 * @uses OvhStructEmailSetDomainMxFiltering::getSubdomain()
	 * @uses OvhStructEmailSetDomainMxFiltering::getType()
	 * @uses OvhStructEmailSetDomainMxFiltering::getMx()
	 * @param OvhStructEmailSetDomainMxFiltering $_ovhStructEmailSetDomainMxFiltering
	 * @return OvhStructEmailSetDomainMxFilteringResponse
	 */
	public function emailSetDomainMxFiltering(OvhStructEmailSetDomainMxFiltering $_ovhStructEmailSetDomainMxFiltering)
	{
		try
		{
			$this->setResult(self::getSoapClient()->emailSetDomainMxFiltering($_ovhStructEmailSetDomainMxFiltering->getSession(),$_ovhStructEmailSetDomainMxFiltering->getDomain(),$_ovhStructEmailSetDomainMxFiltering->getSubdomain(),$_ovhStructEmailSetDomainMxFiltering->getType(),$_ovhStructEmailSetDomainMxFiltering->getMx()));
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
	 * @return OvhStructEmailAccessByNicResponse|OvhStructEmailDelMasterNicResponse|OvhStructEmailDomainListByMasterNicResponse|OvhStructEmailDomainMxListResponse|OvhStructEmailDomainSummaryResponse|OvhStructEmailFilterActiveResponse|OvhStructEmailFilterAddResponse|OvhStructEmailFilterDelResponse|OvhStructEmailFilterListResponse|OvhStructEmailFilterPriorityResponse|OvhStructEmailFilterRuleAddResponse|OvhStructEmailFilterRuleDelResponse|OvhStructEmailGetCapabilitiesResponse|OvhStructEmailGetDomainCatchAllResponse|OvhStructEmailGetDomainMxFilteringResponse|OvhStructEmailSetDomainCatchAllResponse|OvhStructEmailSetDomainMxFilteringResponse|OvhStructEmailSetMasterNicResponse
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