<?php
/**
 * File for class OvhServiceService
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceService originally named Service
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceService extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named serviceGroupGetAllInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructServiceGroupGetAllInfo::getSession()
	 * @param OvhStructServiceGroupGetAllInfo $_ovhStructServiceGroupGetAllInfo
	 * @return OvhStructServiceGroupGetAllInfoResponse
	 */
	public function serviceGroupGetAllInfo(OvhStructServiceGroupGetAllInfo $_ovhStructServiceGroupGetAllInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->serviceGroupGetAllInfo($_ovhStructServiceGroupGetAllInfo->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named serviceGroupList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructServiceGroupList::getSession()
	 * @param OvhStructServiceGroupList $_ovhStructServiceGroupList
	 * @return OvhStructServiceGroupListResponse
	 */
	public function serviceGroupList(OvhStructServiceGroupList $_ovhStructServiceGroupList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->serviceGroupList($_ovhStructServiceGroupList->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named serviceListPaginated
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructServiceListPaginated::getSession()
	 * @uses OvhStructServiceListPaginated::getStart()
	 * @uses OvhStructServiceListPaginated::getLimit()
	 * @uses OvhStructServiceListPaginated::getDomain()
	 * @uses OvhStructServiceListPaginated::getComponent()
	 * @uses OvhStructServiceListPaginated::getGroup()
	 * @param OvhStructServiceListPaginated $_ovhStructServiceListPaginated
	 * @return OvhStructServiceListPaginatedResponse
	 */
	public function serviceListPaginated(OvhStructServiceListPaginated $_ovhStructServiceListPaginated)
	{
		try
		{
			$this->setResult(self::getSoapClient()->serviceListPaginated($_ovhStructServiceListPaginated->getSession(),$_ovhStructServiceListPaginated->getStart(),$_ovhStructServiceListPaginated->getLimit(),$_ovhStructServiceListPaginated->getDomain(),$_ovhStructServiceListPaginated->getComponent(),$_ovhStructServiceListPaginated->getGroup()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named serviceGroupCreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructServiceGroupCreate::getSession()
	 * @uses OvhStructServiceGroupCreate::getName()
	 * @uses OvhStructServiceGroupCreate::getComment()
	 * @param OvhStructServiceGroupCreate $_ovhStructServiceGroupCreate
	 * @return OvhStructServiceGroupCreateResponse
	 */
	public function serviceGroupCreate(OvhStructServiceGroupCreate $_ovhStructServiceGroupCreate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->serviceGroupCreate($_ovhStructServiceGroupCreate->getSession(),$_ovhStructServiceGroupCreate->getName(),$_ovhStructServiceGroupCreate->getComment()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named serviceModifyContact
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructServiceModifyContact::getSession()
	 * @uses OvhStructServiceModifyContact::getDomain()
	 * @uses OvhStructServiceModifyContact::getComponent()
	 * @uses OvhStructServiceModifyContact::getContact()
	 * @uses OvhStructServiceModifyContact::getNic()
	 * @uses OvhStructServiceModifyContact::getComponentSubType()
	 * @param OvhStructServiceModifyContact $_ovhStructServiceModifyContact
	 * @return OvhStructServiceModifyContactResponse
	 */
	public function serviceModifyContact(OvhStructServiceModifyContact $_ovhStructServiceModifyContact)
	{
		try
		{
			$this->setResult(self::getSoapClient()->serviceModifyContact($_ovhStructServiceModifyContact->getSession(),$_ovhStructServiceModifyContact->getDomain(),$_ovhStructServiceModifyContact->getComponent(),$_ovhStructServiceModifyContact->getContact(),$_ovhStructServiceModifyContact->getNic(),$_ovhStructServiceModifyContact->getComponentSubType()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named serviceModifyOwner
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructServiceModifyOwner::getSession()
	 * @uses OvhStructServiceModifyOwner::getDomain()
	 * @uses OvhStructServiceModifyOwner::getComponent()
	 * @uses OvhStructServiceModifyOwner::getLegalform()
	 * @uses OvhStructServiceModifyOwner::getOrganisation()
	 * @uses OvhStructServiceModifyOwner::getName()
	 * @uses OvhStructServiceModifyOwner::getFirstname()
	 * @uses OvhStructServiceModifyOwner::getAddress()
	 * @uses OvhStructServiceModifyOwner::getCity()
	 * @uses OvhStructServiceModifyOwner::getZip()
	 * @uses OvhStructServiceModifyOwner::getArea()
	 * @uses OvhStructServiceModifyOwner::getCountry()
	 * @uses OvhStructServiceModifyOwner::getPhone()
	 * @uses OvhStructServiceModifyOwner::getFax()
	 * @uses OvhStructServiceModifyOwner::getEmail()
	 * @uses OvhStructServiceModifyOwner::getIdentityConfirmation()
	 * @uses OvhStructServiceModifyOwner::getAcceptanceConfirmation()
	 * @param OvhStructServiceModifyOwner $_ovhStructServiceModifyOwner
	 * @return OvhStructServiceModifyOwnerResponse
	 */
	public function serviceModifyOwner(OvhStructServiceModifyOwner $_ovhStructServiceModifyOwner)
	{
		try
		{
			$this->setResult(self::getSoapClient()->serviceModifyOwner($_ovhStructServiceModifyOwner->getSession(),$_ovhStructServiceModifyOwner->getDomain(),$_ovhStructServiceModifyOwner->getComponent(),$_ovhStructServiceModifyOwner->getLegalform(),$_ovhStructServiceModifyOwner->getOrganisation(),$_ovhStructServiceModifyOwner->getName(),$_ovhStructServiceModifyOwner->getFirstname(),$_ovhStructServiceModifyOwner->getAddress(),$_ovhStructServiceModifyOwner->getCity(),$_ovhStructServiceModifyOwner->getZip(),$_ovhStructServiceModifyOwner->getArea(),$_ovhStructServiceModifyOwner->getCountry(),$_ovhStructServiceModifyOwner->getPhone(),$_ovhStructServiceModifyOwner->getFax(),$_ovhStructServiceModifyOwner->getEmail(),$_ovhStructServiceModifyOwner->getIdentityConfirmation(),$_ovhStructServiceModifyOwner->getAcceptanceConfirmation()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named serviceModifyOwnerInfos
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructServiceModifyOwnerInfos::getSession()
	 * @uses OvhStructServiceModifyOwnerInfos::getOwner()
	 * @uses OvhStructServiceModifyOwnerInfos::getDomain()
	 * @uses OvhStructServiceModifyOwnerInfos::getComponent()
	 * @uses OvhStructServiceModifyOwnerInfos::getAddress()
	 * @uses OvhStructServiceModifyOwnerInfos::getCity()
	 * @uses OvhStructServiceModifyOwnerInfos::getZip()
	 * @uses OvhStructServiceModifyOwnerInfos::getCountry()
	 * @uses OvhStructServiceModifyOwnerInfos::getPhone()
	 * @uses OvhStructServiceModifyOwnerInfos::getFax()
	 * @uses OvhStructServiceModifyOwnerInfos::getEmail()
	 * @param OvhStructServiceModifyOwnerInfos $_ovhStructServiceModifyOwnerInfos
	 * @return OvhStructServiceModifyOwnerInfosResponse
	 */
	public function serviceModifyOwnerInfos(OvhStructServiceModifyOwnerInfos $_ovhStructServiceModifyOwnerInfos)
	{
		try
		{
			$this->setResult(self::getSoapClient()->serviceModifyOwnerInfos($_ovhStructServiceModifyOwnerInfos->getSession(),$_ovhStructServiceModifyOwnerInfos->getOwner(),$_ovhStructServiceModifyOwnerInfos->getDomain(),$_ovhStructServiceModifyOwnerInfos->getComponent(),$_ovhStructServiceModifyOwnerInfos->getAddress(),$_ovhStructServiceModifyOwnerInfos->getCity(),$_ovhStructServiceModifyOwnerInfos->getZip(),$_ovhStructServiceModifyOwnerInfos->getCountry(),$_ovhStructServiceModifyOwnerInfos->getPhone(),$_ovhStructServiceModifyOwnerInfos->getFax(),$_ovhStructServiceModifyOwnerInfos->getEmail()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named serviceGroupDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructServiceGroupDelete::getSession()
	 * @uses OvhStructServiceGroupDelete::getName()
	 * @param OvhStructServiceGroupDelete $_ovhStructServiceGroupDelete
	 * @return OvhStructServiceGroupDeleteResponse
	 */
	public function serviceGroupDelete(OvhStructServiceGroupDelete $_ovhStructServiceGroupDelete)
	{
		try
		{
			$this->setResult(self::getSoapClient()->serviceGroupDelete($_ovhStructServiceGroupDelete->getSession(),$_ovhStructServiceGroupDelete->getName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named serviceList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructServiceList::getSession()
	 * @uses OvhStructServiceList::getDomain()
	 * @uses OvhStructServiceList::getComponent()
	 * @uses OvhStructServiceList::getGroup()
	 * @uses OvhStructServiceList::getComponentSubType()
	 * @param OvhStructServiceList $_ovhStructServiceList
	 * @return OvhStructServiceListResponse
	 */
	public function serviceList(OvhStructServiceList $_ovhStructServiceList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->serviceList($_ovhStructServiceList->getSession(),$_ovhStructServiceList->getDomain(),$_ovhStructServiceList->getComponent(),$_ovhStructServiceList->getGroup(),$_ovhStructServiceList->getComponentSubType()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named serviceGroupSetComment
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructServiceGroupSetComment::getSession()
	 * @uses OvhStructServiceGroupSetComment::getName()
	 * @uses OvhStructServiceGroupSetComment::getComment()
	 * @param OvhStructServiceGroupSetComment $_ovhStructServiceGroupSetComment
	 * @return OvhStructServiceGroupSetCommentResponse
	 */
	public function serviceGroupSetComment(OvhStructServiceGroupSetComment $_ovhStructServiceGroupSetComment)
	{
		try
		{
			$this->setResult(self::getSoapClient()->serviceGroupSetComment($_ovhStructServiceGroupSetComment->getSession(),$_ovhStructServiceGroupSetComment->getName(),$_ovhStructServiceGroupSetComment->getComment()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named serviceGroupRemoveService
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructServiceGroupRemoveService::getSession()
	 * @uses OvhStructServiceGroupRemoveService::getName()
	 * @uses OvhStructServiceGroupRemoveService::getService()
	 * @uses OvhStructServiceGroupRemoveService::getComponent()
	 * @param OvhStructServiceGroupRemoveService $_ovhStructServiceGroupRemoveService
	 * @return OvhStructServiceGroupRemoveServiceResponse
	 */
	public function serviceGroupRemoveService(OvhStructServiceGroupRemoveService $_ovhStructServiceGroupRemoveService)
	{
		try
		{
			$this->setResult(self::getSoapClient()->serviceGroupRemoveService($_ovhStructServiceGroupRemoveService->getSession(),$_ovhStructServiceGroupRemoveService->getName(),$_ovhStructServiceGroupRemoveService->getService(),$_ovhStructServiceGroupRemoveService->getComponent()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named serviceFreedomList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructServiceFreedomList::getSession()
	 * @uses OvhStructServiceFreedomList::getDomain()
	 * @uses OvhStructServiceFreedomList::getComponent()
	 * @param OvhStructServiceFreedomList $_ovhStructServiceFreedomList
	 * @return OvhStructServiceFreedomListResponse
	 */
	public function serviceFreedomList(OvhStructServiceFreedomList $_ovhStructServiceFreedomList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->serviceFreedomList($_ovhStructServiceFreedomList->getSession(),$_ovhStructServiceFreedomList->getDomain(),$_ovhStructServiceFreedomList->getComponent()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named serviceGroupSetName
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructServiceGroupSetName::getSession()
	 * @uses OvhStructServiceGroupSetName::getName()
	 * @uses OvhStructServiceGroupSetName::getNewName()
	 * @param OvhStructServiceGroupSetName $_ovhStructServiceGroupSetName
	 * @return OvhStructServiceGroupSetNameResponse
	 */
	public function serviceGroupSetName(OvhStructServiceGroupSetName $_ovhStructServiceGroupSetName)
	{
		try
		{
			$this->setResult(self::getSoapClient()->serviceGroupSetName($_ovhStructServiceGroupSetName->getSession(),$_ovhStructServiceGroupSetName->getName(),$_ovhStructServiceGroupSetName->getNewName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named serviceGroupInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructServiceGroupInfo::getSession()
	 * @uses OvhStructServiceGroupInfo::getName()
	 * @param OvhStructServiceGroupInfo $_ovhStructServiceGroupInfo
	 * @return OvhStructServiceGroupInfoResponse
	 */
	public function serviceGroupInfo(OvhStructServiceGroupInfo $_ovhStructServiceGroupInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->serviceGroupInfo($_ovhStructServiceGroupInfo->getSession(),$_ovhStructServiceGroupInfo->getName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named serviceGroupAddService
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructServiceGroupAddService::getSession()
	 * @uses OvhStructServiceGroupAddService::getName()
	 * @uses OvhStructServiceGroupAddService::getService()
	 * @uses OvhStructServiceGroupAddService::getComponent()
	 * @param OvhStructServiceGroupAddService $_ovhStructServiceGroupAddService
	 * @return OvhStructServiceGroupAddServiceResponse
	 */
	public function serviceGroupAddService(OvhStructServiceGroupAddService $_ovhStructServiceGroupAddService)
	{
		try
		{
			$this->setResult(self::getSoapClient()->serviceGroupAddService($_ovhStructServiceGroupAddService->getSession(),$_ovhStructServiceGroupAddService->getName(),$_ovhStructServiceGroupAddService->getService(),$_ovhStructServiceGroupAddService->getComponent()));
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
	 * @return OvhStructServiceFreedomListResponse|OvhStructServiceGroupAddServiceResponse|OvhStructServiceGroupCreateResponse|OvhStructServiceGroupDeleteResponse|OvhStructServiceGroupGetAllInfoResponse|OvhStructServiceGroupInfoResponse|OvhStructServiceGroupListResponse|OvhStructServiceGroupRemoveServiceResponse|OvhStructServiceGroupSetCommentResponse|OvhStructServiceGroupSetNameResponse|OvhStructServiceListPaginatedResponse|OvhStructServiceListResponse|OvhStructServiceModifyContactResponse|OvhStructServiceModifyOwnerInfosResponse|OvhStructServiceModifyOwnerResponse
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