<?php
/**
 * File for class OvhServiceNic
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceNic originally named Nic
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceNic extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named nicModifyInfos
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructNicModifyInfos::getSession()
	 * @uses OvhStructNicModifyInfos::getName()
	 * @uses OvhStructNicModifyInfos::getFirstname()
	 * @uses OvhStructNicModifyInfos::getLegalform()
	 * @uses OvhStructNicModifyInfos::getOrganisation()
	 * @uses OvhStructNicModifyInfos::getAddress()
	 * @uses OvhStructNicModifyInfos::getZip()
	 * @uses OvhStructNicModifyInfos::getCity()
	 * @uses OvhStructNicModifyInfos::getCountry()
	 * @uses OvhStructNicModifyInfos::getPhone()
	 * @uses OvhStructNicModifyInfos::getFax()
	 * @uses OvhStructNicModifyInfos::getEmail()
	 * @uses OvhStructNicModifyInfos::getSpareEmail()
	 * @uses OvhStructNicModifyInfos::getLanguage()
	 * @uses OvhStructNicModifyInfos::getVat()
	 * @uses OvhStructNicModifyInfos::getArea()
	 * @param OvhStructNicModifyInfos $_ovhStructNicModifyInfos
	 * @return OvhStructNicModifyInfosResponse
	 */
	public function nicModifyInfos(OvhStructNicModifyInfos $_ovhStructNicModifyInfos)
	{
		try
		{
			$this->setResult(self::getSoapClient()->nicModifyInfos($_ovhStructNicModifyInfos->getSession(),$_ovhStructNicModifyInfos->getName(),$_ovhStructNicModifyInfos->getFirstname(),$_ovhStructNicModifyInfos->getLegalform(),$_ovhStructNicModifyInfos->getOrganisation(),$_ovhStructNicModifyInfos->getAddress(),$_ovhStructNicModifyInfos->getZip(),$_ovhStructNicModifyInfos->getCity(),$_ovhStructNicModifyInfos->getCountry(),$_ovhStructNicModifyInfos->getPhone(),$_ovhStructNicModifyInfos->getFax(),$_ovhStructNicModifyInfos->getEmail(),$_ovhStructNicModifyInfos->getSpareEmail(),$_ovhStructNicModifyInfos->getLanguage(),$_ovhStructNicModifyInfos->getVat(),$_ovhStructNicModifyInfos->getArea()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named nic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructNic::getSession()
	 * @param OvhStructNic $_ovhStructNic
	 * @return OvhStructNicResponse
	 */
	public function nic(OvhStructNic $_ovhStructNic)
	{
		try
		{
			$this->setResult(self::getSoapClient()->nic($_ovhStructNic->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named nicTldEligibility
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructNicTldEligibility::getSession()
	 * @uses OvhStructNicTldEligibility::getNic()
	 * @uses OvhStructNicTldEligibility::getTld()
	 * @param OvhStructNicTldEligibility $_ovhStructNicTldEligibility
	 * @return OvhStructNicTldEligibilityResponse
	 */
	public function nicTldEligibility(OvhStructNicTldEligibility $_ovhStructNicTldEligibility)
	{
		try
		{
			$this->setResult(self::getSoapClient()->nicTldEligibility($_ovhStructNicTldEligibility->getSession(),$_ovhStructNicTldEligibility->getNic(),$_ovhStructNicTldEligibility->getTld()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named nicModifyLanguage
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructNicModifyLanguage::getSession()
	 * @uses OvhStructNicModifyLanguage::getNic()
	 * @uses OvhStructNicModifyLanguage::getLanguage()
	 * @param OvhStructNicModifyLanguage $_ovhStructNicModifyLanguage
	 * @return OvhStructNicModifyLanguageResponse
	 */
	public function nicModifyLanguage(OvhStructNicModifyLanguage $_ovhStructNicModifyLanguage)
	{
		try
		{
			$this->setResult(self::getSoapClient()->nicModifyLanguage($_ovhStructNicModifyLanguage->getSession(),$_ovhStructNicModifyLanguage->getNic(),$_ovhStructNicModifyLanguage->getLanguage()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named nicCreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructNicCreate::getSession()
	 * @uses OvhStructNicCreate::getName()
	 * @uses OvhStructNicCreate::getFirstname()
	 * @uses OvhStructNicCreate::getPassword()
	 * @uses OvhStructNicCreate::getEmail()
	 * @uses OvhStructNicCreate::getPhone()
	 * @uses OvhStructNicCreate::getFax()
	 * @uses OvhStructNicCreate::getAddress()
	 * @uses OvhStructNicCreate::getCity()
	 * @uses OvhStructNicCreate::getArea()
	 * @uses OvhStructNicCreate::getZip()
	 * @uses OvhStructNicCreate::getCountry()
	 * @uses OvhStructNicCreate::getLanguage()
	 * @uses OvhStructNicCreate::getIsOwner()
	 * @uses OvhStructNicCreate::getLegalform()
	 * @uses OvhStructNicCreate::getOrganisation()
	 * @uses OvhStructNicCreate::getLegalName()
	 * @uses OvhStructNicCreate::getLegalNumber()
	 * @uses OvhStructNicCreate::getVat()
	 * @param OvhStructNicCreate $_ovhStructNicCreate
	 * @return OvhStructNicCreateResponse
	 */
	public function nicCreate(OvhStructNicCreate $_ovhStructNicCreate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->nicCreate($_ovhStructNicCreate->getSession(),$_ovhStructNicCreate->getName(),$_ovhStructNicCreate->getFirstname(),$_ovhStructNicCreate->getPassword(),$_ovhStructNicCreate->getEmail(),$_ovhStructNicCreate->getPhone(),$_ovhStructNicCreate->getFax(),$_ovhStructNicCreate->getAddress(),$_ovhStructNicCreate->getCity(),$_ovhStructNicCreate->getArea(),$_ovhStructNicCreate->getZip(),$_ovhStructNicCreate->getCountry(),$_ovhStructNicCreate->getLanguage(),$_ovhStructNicCreate->getIsOwner(),$_ovhStructNicCreate->getLegalform(),$_ovhStructNicCreate->getOrganisation(),$_ovhStructNicCreate->getLegalName(),$_ovhStructNicCreate->getLegalNumber(),$_ovhStructNicCreate->getVat()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named nicInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructNicInfo::getSession()
	 * @uses OvhStructNicInfo::getNic()
	 * @param OvhStructNicInfo $_ovhStructNicInfo
	 * @return OvhStructNicInfoResponse
	 */
	public function nicInfo(OvhStructNicInfo $_ovhStructNicInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->nicInfo($_ovhStructNicInfo->getSession(),$_ovhStructNicInfo->getNic()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named nicModifyInfosIT
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructNicModifyInfosIT::getSession()
	 * @uses OvhStructNicModifyInfosIT::getName()
	 * @uses OvhStructNicModifyInfosIT::getFirstname()
	 * @uses OvhStructNicModifyInfosIT::getSex()
	 * @uses OvhStructNicModifyInfosIT::getLegalform()
	 * @uses OvhStructNicModifyInfosIT::getOrganisation()
	 * @uses OvhStructNicModifyInfosIT::getAddress()
	 * @uses OvhStructNicModifyInfosIT::getArea()
	 * @uses OvhStructNicModifyInfosIT::getZip()
	 * @uses OvhStructNicModifyInfosIT::getCity()
	 * @uses OvhStructNicModifyInfosIT::getCountry()
	 * @uses OvhStructNicModifyInfosIT::getPhone()
	 * @uses OvhStructNicModifyInfosIT::getFax()
	 * @uses OvhStructNicModifyInfosIT::getEmail()
	 * @uses OvhStructNicModifyInfosIT::getSpareEmail()
	 * @uses OvhStructNicModifyInfosIT::getLanguage()
	 * @uses OvhStructNicModifyInfosIT::getVat()
	 * @uses OvhStructNicModifyInfosIT::getBirthDay()
	 * @uses OvhStructNicModifyInfosIT::getBirthCity()
	 * @uses OvhStructNicModifyInfosIT::getNationalIdentificationNumber()
	 * @uses OvhStructNicModifyInfosIT::getCompanyNationalIdentificationNumber()
	 * @uses OvhStructNicModifyInfosIT::getCorporationType()
	 * @param OvhStructNicModifyInfosIT $_ovhStructNicModifyInfosIT
	 * @return OvhStructNicModifyInfosITResponse
	 */
	public function nicModifyInfosIT(OvhStructNicModifyInfosIT $_ovhStructNicModifyInfosIT)
	{
		try
		{
			$this->setResult(self::getSoapClient()->nicModifyInfosIT($_ovhStructNicModifyInfosIT->getSession(),$_ovhStructNicModifyInfosIT->getName(),$_ovhStructNicModifyInfosIT->getFirstname(),$_ovhStructNicModifyInfosIT->getSex(),$_ovhStructNicModifyInfosIT->getLegalform(),$_ovhStructNicModifyInfosIT->getOrganisation(),$_ovhStructNicModifyInfosIT->getAddress(),$_ovhStructNicModifyInfosIT->getArea(),$_ovhStructNicModifyInfosIT->getZip(),$_ovhStructNicModifyInfosIT->getCity(),$_ovhStructNicModifyInfosIT->getCountry(),$_ovhStructNicModifyInfosIT->getPhone(),$_ovhStructNicModifyInfosIT->getFax(),$_ovhStructNicModifyInfosIT->getEmail(),$_ovhStructNicModifyInfosIT->getSpareEmail(),$_ovhStructNicModifyInfosIT->getLanguage(),$_ovhStructNicModifyInfosIT->getVat(),$_ovhStructNicModifyInfosIT->getBirthDay(),$_ovhStructNicModifyInfosIT->getBirthCity(),$_ovhStructNicModifyInfosIT->getNationalIdentificationNumber(),$_ovhStructNicModifyInfosIT->getCompanyNationalIdentificationNumber(),$_ovhStructNicModifyInfosIT->getCorporationType()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named nicPublicInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructNicPublicInfo::getSession()
	 * @uses OvhStructNicPublicInfo::getNic()
	 * @param OvhStructNicPublicInfo $_ovhStructNicPublicInfo
	 * @return OvhStructNicPublicInfoResponse
	 */
	public function nicPublicInfo(OvhStructNicPublicInfo $_ovhStructNicPublicInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->nicPublicInfo($_ovhStructNicPublicInfo->getSession(),$_ovhStructNicPublicInfo->getNic()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named nicCreateIT
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructNicCreateIT::getSession()
	 * @uses OvhStructNicCreateIT::getName()
	 * @uses OvhStructNicCreateIT::getFirstname()
	 * @uses OvhStructNicCreateIT::getSex()
	 * @uses OvhStructNicCreateIT::getPassword()
	 * @uses OvhStructNicCreateIT::getEmail()
	 * @uses OvhStructNicCreateIT::getPhone()
	 * @uses OvhStructNicCreateIT::getFax()
	 * @uses OvhStructNicCreateIT::getAddress()
	 * @uses OvhStructNicCreateIT::getCity()
	 * @uses OvhStructNicCreateIT::getArea()
	 * @uses OvhStructNicCreateIT::getZip()
	 * @uses OvhStructNicCreateIT::getCountry()
	 * @uses OvhStructNicCreateIT::getLanguage()
	 * @uses OvhStructNicCreateIT::getIsOwner()
	 * @uses OvhStructNicCreateIT::getLegalform()
	 * @uses OvhStructNicCreateIT::getOrganisation()
	 * @uses OvhStructNicCreateIT::getLegalName()
	 * @uses OvhStructNicCreateIT::getLegalNumber()
	 * @uses OvhStructNicCreateIT::getVat()
	 * @uses OvhStructNicCreateIT::getBirthDay()
	 * @uses OvhStructNicCreateIT::getBirthCity()
	 * @uses OvhStructNicCreateIT::getNationalIdentificationNumber()
	 * @uses OvhStructNicCreateIT::getCompanyNationalIdentificationNumber()
	 * @uses OvhStructNicCreateIT::getCorporationType()
	 * @param OvhStructNicCreateIT $_ovhStructNicCreateIT
	 * @return OvhStructNicCreateITResponse
	 */
	public function nicCreateIT(OvhStructNicCreateIT $_ovhStructNicCreateIT)
	{
		try
		{
			$this->setResult(self::getSoapClient()->nicCreateIT($_ovhStructNicCreateIT->getSession(),$_ovhStructNicCreateIT->getName(),$_ovhStructNicCreateIT->getFirstname(),$_ovhStructNicCreateIT->getSex(),$_ovhStructNicCreateIT->getPassword(),$_ovhStructNicCreateIT->getEmail(),$_ovhStructNicCreateIT->getPhone(),$_ovhStructNicCreateIT->getFax(),$_ovhStructNicCreateIT->getAddress(),$_ovhStructNicCreateIT->getCity(),$_ovhStructNicCreateIT->getArea(),$_ovhStructNicCreateIT->getZip(),$_ovhStructNicCreateIT->getCountry(),$_ovhStructNicCreateIT->getLanguage(),$_ovhStructNicCreateIT->getIsOwner(),$_ovhStructNicCreateIT->getLegalform(),$_ovhStructNicCreateIT->getOrganisation(),$_ovhStructNicCreateIT->getLegalName(),$_ovhStructNicCreateIT->getLegalNumber(),$_ovhStructNicCreateIT->getVat(),$_ovhStructNicCreateIT->getBirthDay(),$_ovhStructNicCreateIT->getBirthCity(),$_ovhStructNicCreateIT->getNationalIdentificationNumber(),$_ovhStructNicCreateIT->getCompanyNationalIdentificationNumber(),$_ovhStructNicCreateIT->getCorporationType()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named nicModifyEmail
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructNicModifyEmail::getSession()
	 * @uses OvhStructNicModifyEmail::getNic()
	 * @uses OvhStructNicModifyEmail::getEmail()
	 * @param OvhStructNicModifyEmail $_ovhStructNicModifyEmail
	 * @return OvhStructNicModifyEmailResponse
	 */
	public function nicModifyEmail(OvhStructNicModifyEmail $_ovhStructNicModifyEmail)
	{
		try
		{
			$this->setResult(self::getSoapClient()->nicModifyEmail($_ovhStructNicModifyEmail->getSession(),$_ovhStructNicModifyEmail->getNic(),$_ovhStructNicModifyEmail->getEmail()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named nicUpdateIT
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructNicUpdateIT::getSession()
	 * @uses OvhStructNicUpdateIT::getNic()
	 * @uses OvhStructNicUpdateIT::getName()
	 * @uses OvhStructNicUpdateIT::getFirstname()
	 * @uses OvhStructNicUpdateIT::getSex()
	 * @uses OvhStructNicUpdateIT::getLegalForm()
	 * @uses OvhStructNicUpdateIT::getOrganisation()
	 * @uses OvhStructNicUpdateIT::getLegalName()
	 * @uses OvhStructNicUpdateIT::getLegalNumber()
	 * @uses OvhStructNicUpdateIT::getVat()
	 * @uses OvhStructNicUpdateIT::getBirthDay()
	 * @uses OvhStructNicUpdateIT::getBirthCity()
	 * @uses OvhStructNicUpdateIT::getNationalIdentificationNumber()
	 * @uses OvhStructNicUpdateIT::getCompanyNationalIdentificationNumber()
	 * @uses OvhStructNicUpdateIT::getCorporationType()
	 * @param OvhStructNicUpdateIT $_ovhStructNicUpdateIT
	 * @return OvhStructNicUpdateITResponse
	 */
	public function nicUpdateIT(OvhStructNicUpdateIT $_ovhStructNicUpdateIT)
	{
		try
		{
			$this->setResult(self::getSoapClient()->nicUpdateIT($_ovhStructNicUpdateIT->getSession(),$_ovhStructNicUpdateIT->getNic(),$_ovhStructNicUpdateIT->getName(),$_ovhStructNicUpdateIT->getFirstname(),$_ovhStructNicUpdateIT->getSex(),$_ovhStructNicUpdateIT->getLegalForm(),$_ovhStructNicUpdateIT->getOrganisation(),$_ovhStructNicUpdateIT->getLegalName(),$_ovhStructNicUpdateIT->getLegalNumber(),$_ovhStructNicUpdateIT->getVat(),$_ovhStructNicUpdateIT->getBirthDay(),$_ovhStructNicUpdateIT->getBirthCity(),$_ovhStructNicUpdateIT->getNationalIdentificationNumber(),$_ovhStructNicUpdateIT->getCompanyNationalIdentificationNumber(),$_ovhStructNicUpdateIT->getCorporationType()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named nicUpdate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructNicUpdate::getSession()
	 * @uses OvhStructNicUpdate::getNic()
	 * @uses OvhStructNicUpdate::getName()
	 * @uses OvhStructNicUpdate::getFirstname()
	 * @uses OvhStructNicUpdate::getLegalForm()
	 * @uses OvhStructNicUpdate::getOrganisation()
	 * @uses OvhStructNicUpdate::getLegalName()
	 * @uses OvhStructNicUpdate::getLegalNumber()
	 * @uses OvhStructNicUpdate::getVat()
	 * @param OvhStructNicUpdate $_ovhStructNicUpdate
	 * @return OvhStructNicUpdateResponse
	 */
	public function nicUpdate(OvhStructNicUpdate $_ovhStructNicUpdate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->nicUpdate($_ovhStructNicUpdate->getSession(),$_ovhStructNicUpdate->getNic(),$_ovhStructNicUpdate->getName(),$_ovhStructNicUpdate->getFirstname(),$_ovhStructNicUpdate->getLegalForm(),$_ovhStructNicUpdate->getOrganisation(),$_ovhStructNicUpdate->getLegalName(),$_ovhStructNicUpdate->getLegalNumber(),$_ovhStructNicUpdate->getVat()));
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
	 * @return OvhStructNicCreateITResponse|OvhStructNicCreateResponse|OvhStructNicInfoResponse|OvhStructNicModifyEmailResponse|OvhStructNicModifyInfosITResponse|OvhStructNicModifyInfosResponse|OvhStructNicModifyLanguageResponse|OvhStructNicPublicInfoResponse|OvhStructNicResponse|OvhStructNicTldEligibilityResponse|OvhStructNicUpdateITResponse|OvhStructNicUpdateResponse
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