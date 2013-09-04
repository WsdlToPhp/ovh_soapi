<?php
/**
 * File for class OvhServiceReseller
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceReseller originally named Reseller
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceReseller extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named resellerDomainTransferIT
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructResellerDomainTransferIT::getSession()
	 * @uses OvhStructResellerDomainTransferIT::getDomain()
	 * @uses OvhStructResellerDomainTransferIT::getAuthinfo()
	 * @uses OvhStructResellerDomainTransferIT::getHosting()
	 * @uses OvhStructResellerDomainTransferIT::getOffer()
	 * @uses OvhStructResellerDomainTransferIT::getProfile()
	 * @uses OvhStructResellerDomainTransferIT::getOwo()
	 * @uses OvhStructResellerDomainTransferIT::getOwner()
	 * @uses OvhStructResellerDomainTransferIT::getAdmin()
	 * @uses OvhStructResellerDomainTransferIT::getTech()
	 * @uses OvhStructResellerDomainTransferIT::getBilling()
	 * @uses OvhStructResellerDomainTransferIT::getDns1()
	 * @uses OvhStructResellerDomainTransferIT::getDns2()
	 * @uses OvhStructResellerDomainTransferIT::getDns3()
	 * @uses OvhStructResellerDomainTransferIT::getDns4()
	 * @uses OvhStructResellerDomainTransferIT::getDns5()
	 * @uses OvhStructResellerDomainTransferIT::getLegalRepresentantFirstName()
	 * @uses OvhStructResellerDomainTransferIT::getLegalRepresentantLastName()
	 * @uses OvhStructResellerDomainTransferIT::getLegalNumber()
	 * @uses OvhStructResellerDomainTransferIT::getVat()
	 * @uses OvhStructResellerDomainTransferIT::getBirthDate()
	 * @uses OvhStructResellerDomainTransferIT::getBirthCity()
	 * @uses OvhStructResellerDomainTransferIT::getBirthDepartement()
	 * @uses OvhStructResellerDomainTransferIT::getBirthCountry()
	 * @uses OvhStructResellerDomainTransferIT::getNationality()
	 * @uses OvhStructResellerDomainTransferIT::getDryRun()
	 * @param OvhStructResellerDomainTransferIT $_ovhStructResellerDomainTransferIT
	 * @return OvhStructResellerDomainTransferITResponse
	 */
	public function resellerDomainTransferIT(OvhStructResellerDomainTransferIT $_ovhStructResellerDomainTransferIT)
	{
		try
		{
			$this->setResult(self::getSoapClient()->resellerDomainTransferIT($_ovhStructResellerDomainTransferIT->getSession(),$_ovhStructResellerDomainTransferIT->getDomain(),$_ovhStructResellerDomainTransferIT->getAuthinfo(),$_ovhStructResellerDomainTransferIT->getHosting(),$_ovhStructResellerDomainTransferIT->getOffer(),$_ovhStructResellerDomainTransferIT->getProfile(),$_ovhStructResellerDomainTransferIT->getOwo(),$_ovhStructResellerDomainTransferIT->getOwner(),$_ovhStructResellerDomainTransferIT->getAdmin(),$_ovhStructResellerDomainTransferIT->getTech(),$_ovhStructResellerDomainTransferIT->getBilling(),$_ovhStructResellerDomainTransferIT->getDns1(),$_ovhStructResellerDomainTransferIT->getDns2(),$_ovhStructResellerDomainTransferIT->getDns3(),$_ovhStructResellerDomainTransferIT->getDns4(),$_ovhStructResellerDomainTransferIT->getDns5(),$_ovhStructResellerDomainTransferIT->getLegalRepresentantFirstName(),$_ovhStructResellerDomainTransferIT->getLegalRepresentantLastName(),$_ovhStructResellerDomainTransferIT->getLegalNumber(),$_ovhStructResellerDomainTransferIT->getVat(),$_ovhStructResellerDomainTransferIT->getBirthDate(),$_ovhStructResellerDomainTransferIT->getBirthCity(),$_ovhStructResellerDomainTransferIT->getBirthDepartement(),$_ovhStructResellerDomainTransferIT->getBirthCountry(),$_ovhStructResellerDomainTransferIT->getNationality(),$_ovhStructResellerDomainTransferIT->getDryRun()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named resellerDomainRestore
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructResellerDomainRestore::getSession()
	 * @uses OvhStructResellerDomainRestore::getDomain()
	 * @uses OvhStructResellerDomainRestore::getDryRun()
	 * @param OvhStructResellerDomainRestore $_ovhStructResellerDomainRestore
	 * @return OvhStructResellerDomainRestoreResponse
	 */
	public function resellerDomainRestore(OvhStructResellerDomainRestore $_ovhStructResellerDomainRestore)
	{
		try
		{
			$this->setResult(self::getSoapClient()->resellerDomainRestore($_ovhStructResellerDomainRestore->getSession(),$_ovhStructResellerDomainRestore->getDomain(),$_ovhStructResellerDomainRestore->getDryRun()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named resellerDomainRenew
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructResellerDomainRenew::getSession()
	 * @uses OvhStructResellerDomainRenew::getDomain()
	 * @uses OvhStructResellerDomainRenew::getDryRun()
	 * @param OvhStructResellerDomainRenew $_ovhStructResellerDomainRenew
	 * @return OvhStructResellerDomainRenewResponse
	 */
	public function resellerDomainRenew(OvhStructResellerDomainRenew $_ovhStructResellerDomainRenew)
	{
		try
		{
			$this->setResult(self::getSoapClient()->resellerDomainRenew($_ovhStructResellerDomainRenew->getSession(),$_ovhStructResellerDomainRenew->getDomain(),$_ovhStructResellerDomainRenew->getDryRun()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named resellerDomainCreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructResellerDomainCreate::getSession()
	 * @uses OvhStructResellerDomainCreate::getDomain()
	 * @uses OvhStructResellerDomainCreate::getHosting()
	 * @uses OvhStructResellerDomainCreate::getOffer()
	 * @uses OvhStructResellerDomainCreate::getProfile()
	 * @uses OvhStructResellerDomainCreate::getOwo()
	 * @uses OvhStructResellerDomainCreate::getOwner()
	 * @uses OvhStructResellerDomainCreate::getAdmin()
	 * @uses OvhStructResellerDomainCreate::getTech()
	 * @uses OvhStructResellerDomainCreate::getBilling()
	 * @uses OvhStructResellerDomainCreate::getDns1()
	 * @uses OvhStructResellerDomainCreate::getDns2()
	 * @uses OvhStructResellerDomainCreate::getDns3()
	 * @uses OvhStructResellerDomainCreate::getDns4()
	 * @uses OvhStructResellerDomainCreate::getDns5()
	 * @uses OvhStructResellerDomainCreate::getMethod()
	 * @uses OvhStructResellerDomainCreate::getLegalName()
	 * @uses OvhStructResellerDomainCreate::getLegalNumber()
	 * @uses OvhStructResellerDomainCreate::getAfnicIdent()
	 * @uses OvhStructResellerDomainCreate::getBirthDate()
	 * @uses OvhStructResellerDomainCreate::getBirthCity()
	 * @uses OvhStructResellerDomainCreate::getBirthDepartement()
	 * @uses OvhStructResellerDomainCreate::getBirthCountry()
	 * @uses OvhStructResellerDomainCreate::getDryRun()
	 * @param OvhStructResellerDomainCreate $_ovhStructResellerDomainCreate
	 * @return OvhStructResellerDomainCreateResponse
	 */
	public function resellerDomainCreate(OvhStructResellerDomainCreate $_ovhStructResellerDomainCreate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->resellerDomainCreate($_ovhStructResellerDomainCreate->getSession(),$_ovhStructResellerDomainCreate->getDomain(),$_ovhStructResellerDomainCreate->getHosting(),$_ovhStructResellerDomainCreate->getOffer(),$_ovhStructResellerDomainCreate->getProfile(),$_ovhStructResellerDomainCreate->getOwo(),$_ovhStructResellerDomainCreate->getOwner(),$_ovhStructResellerDomainCreate->getAdmin(),$_ovhStructResellerDomainCreate->getTech(),$_ovhStructResellerDomainCreate->getBilling(),$_ovhStructResellerDomainCreate->getDns1(),$_ovhStructResellerDomainCreate->getDns2(),$_ovhStructResellerDomainCreate->getDns3(),$_ovhStructResellerDomainCreate->getDns4(),$_ovhStructResellerDomainCreate->getDns5(),$_ovhStructResellerDomainCreate->getMethod(),$_ovhStructResellerDomainCreate->getLegalName(),$_ovhStructResellerDomainCreate->getLegalNumber(),$_ovhStructResellerDomainCreate->getAfnicIdent(),$_ovhStructResellerDomainCreate->getBirthDate(),$_ovhStructResellerDomainCreate->getBirthCity(),$_ovhStructResellerDomainCreate->getBirthDepartement(),$_ovhStructResellerDomainCreate->getBirthCountry(),$_ovhStructResellerDomainCreate->getDryRun()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named resellerDomainCreateIT
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructResellerDomainCreateIT::getSession()
	 * @uses OvhStructResellerDomainCreateIT::getDomain()
	 * @uses OvhStructResellerDomainCreateIT::getHosting()
	 * @uses OvhStructResellerDomainCreateIT::getOffer()
	 * @uses OvhStructResellerDomainCreateIT::getProfile()
	 * @uses OvhStructResellerDomainCreateIT::getOwo()
	 * @uses OvhStructResellerDomainCreateIT::getOwner()
	 * @uses OvhStructResellerDomainCreateIT::getAdmin()
	 * @uses OvhStructResellerDomainCreateIT::getTech()
	 * @uses OvhStructResellerDomainCreateIT::getBilling()
	 * @uses OvhStructResellerDomainCreateIT::getDns1()
	 * @uses OvhStructResellerDomainCreateIT::getDns2()
	 * @uses OvhStructResellerDomainCreateIT::getDns3()
	 * @uses OvhStructResellerDomainCreateIT::getDns4()
	 * @uses OvhStructResellerDomainCreateIT::getDns5()
	 * @uses OvhStructResellerDomainCreateIT::getLegalRepresentantFirstName()
	 * @uses OvhStructResellerDomainCreateIT::getLegalRepresentantLastName()
	 * @uses OvhStructResellerDomainCreateIT::getLegalNumber()
	 * @uses OvhStructResellerDomainCreateIT::getVat()
	 * @uses OvhStructResellerDomainCreateIT::getBirthDate()
	 * @uses OvhStructResellerDomainCreateIT::getBirthCity()
	 * @uses OvhStructResellerDomainCreateIT::getBirthDepartement()
	 * @uses OvhStructResellerDomainCreateIT::getBirthCountry()
	 * @uses OvhStructResellerDomainCreateIT::getNationality()
	 * @uses OvhStructResellerDomainCreateIT::getDryRun()
	 * @param OvhStructResellerDomainCreateIT $_ovhStructResellerDomainCreateIT
	 * @return OvhStructResellerDomainCreateITResponse
	 */
	public function resellerDomainCreateIT(OvhStructResellerDomainCreateIT $_ovhStructResellerDomainCreateIT)
	{
		try
		{
			$this->setResult(self::getSoapClient()->resellerDomainCreateIT($_ovhStructResellerDomainCreateIT->getSession(),$_ovhStructResellerDomainCreateIT->getDomain(),$_ovhStructResellerDomainCreateIT->getHosting(),$_ovhStructResellerDomainCreateIT->getOffer(),$_ovhStructResellerDomainCreateIT->getProfile(),$_ovhStructResellerDomainCreateIT->getOwo(),$_ovhStructResellerDomainCreateIT->getOwner(),$_ovhStructResellerDomainCreateIT->getAdmin(),$_ovhStructResellerDomainCreateIT->getTech(),$_ovhStructResellerDomainCreateIT->getBilling(),$_ovhStructResellerDomainCreateIT->getDns1(),$_ovhStructResellerDomainCreateIT->getDns2(),$_ovhStructResellerDomainCreateIT->getDns3(),$_ovhStructResellerDomainCreateIT->getDns4(),$_ovhStructResellerDomainCreateIT->getDns5(),$_ovhStructResellerDomainCreateIT->getLegalRepresentantFirstName(),$_ovhStructResellerDomainCreateIT->getLegalRepresentantLastName(),$_ovhStructResellerDomainCreateIT->getLegalNumber(),$_ovhStructResellerDomainCreateIT->getVat(),$_ovhStructResellerDomainCreateIT->getBirthDate(),$_ovhStructResellerDomainCreateIT->getBirthCity(),$_ovhStructResellerDomainCreateIT->getBirthDepartement(),$_ovhStructResellerDomainCreateIT->getBirthCountry(),$_ovhStructResellerDomainCreateIT->getNationality(),$_ovhStructResellerDomainCreateIT->getDryRun()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named resellerDomainTransferASIA
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructResellerDomainTransferASIA::getSession()
	 * @uses OvhStructResellerDomainTransferASIA::getDomain()
	 * @uses OvhStructResellerDomainTransferASIA::getAuthinfo()
	 * @uses OvhStructResellerDomainTransferASIA::getHosting()
	 * @uses OvhStructResellerDomainTransferASIA::getOffer()
	 * @uses OvhStructResellerDomainTransferASIA::getProfile()
	 * @uses OvhStructResellerDomainTransferASIA::getOwo()
	 * @uses OvhStructResellerDomainTransferASIA::getOwner()
	 * @uses OvhStructResellerDomainTransferASIA::getAdmin()
	 * @uses OvhStructResellerDomainTransferASIA::getTech()
	 * @uses OvhStructResellerDomainTransferASIA::getBilling()
	 * @uses OvhStructResellerDomainTransferASIA::getDns1()
	 * @uses OvhStructResellerDomainTransferASIA::getDns2()
	 * @uses OvhStructResellerDomainTransferASIA::getDns3()
	 * @uses OvhStructResellerDomainTransferASIA::getDns4()
	 * @uses OvhStructResellerDomainTransferASIA::getDns5()
	 * @uses OvhStructResellerDomainTransferASIA::getCedCea()
	 * @uses OvhStructResellerDomainTransferASIA::getContactCED()
	 * @uses OvhStructResellerDomainTransferASIA::getLocalityCity()
	 * @uses OvhStructResellerDomainTransferASIA::getLocalitySp()
	 * @uses OvhStructResellerDomainTransferASIA::getCcLocality()
	 * @uses OvhStructResellerDomainTransferASIA::getLegalEntityType()
	 * @uses OvhStructResellerDomainTransferASIA::getOtherLEType()
	 * @uses OvhStructResellerDomainTransferASIA::getIdentForm()
	 * @uses OvhStructResellerDomainTransferASIA::getOtherIdentForm()
	 * @uses OvhStructResellerDomainTransferASIA::getIdentNumber()
	 * @uses OvhStructResellerDomainTransferASIA::getDryRun()
	 * @param OvhStructResellerDomainTransferASIA $_ovhStructResellerDomainTransferASIA
	 * @return OvhStructResellerDomainTransferASIAResponse
	 */
	public function resellerDomainTransferASIA(OvhStructResellerDomainTransferASIA $_ovhStructResellerDomainTransferASIA)
	{
		try
		{
			$this->setResult(self::getSoapClient()->resellerDomainTransferASIA($_ovhStructResellerDomainTransferASIA->getSession(),$_ovhStructResellerDomainTransferASIA->getDomain(),$_ovhStructResellerDomainTransferASIA->getAuthinfo(),$_ovhStructResellerDomainTransferASIA->getHosting(),$_ovhStructResellerDomainTransferASIA->getOffer(),$_ovhStructResellerDomainTransferASIA->getProfile(),$_ovhStructResellerDomainTransferASIA->getOwo(),$_ovhStructResellerDomainTransferASIA->getOwner(),$_ovhStructResellerDomainTransferASIA->getAdmin(),$_ovhStructResellerDomainTransferASIA->getTech(),$_ovhStructResellerDomainTransferASIA->getBilling(),$_ovhStructResellerDomainTransferASIA->getDns1(),$_ovhStructResellerDomainTransferASIA->getDns2(),$_ovhStructResellerDomainTransferASIA->getDns3(),$_ovhStructResellerDomainTransferASIA->getDns4(),$_ovhStructResellerDomainTransferASIA->getDns5(),$_ovhStructResellerDomainTransferASIA->getCedCea(),$_ovhStructResellerDomainTransferASIA->getContactCED(),$_ovhStructResellerDomainTransferASIA->getLocalityCity(),$_ovhStructResellerDomainTransferASIA->getLocalitySp(),$_ovhStructResellerDomainTransferASIA->getCcLocality(),$_ovhStructResellerDomainTransferASIA->getLegalEntityType(),$_ovhStructResellerDomainTransferASIA->getOtherLEType(),$_ovhStructResellerDomainTransferASIA->getIdentForm(),$_ovhStructResellerDomainTransferASIA->getOtherIdentForm(),$_ovhStructResellerDomainTransferASIA->getIdentNumber(),$_ovhStructResellerDomainTransferASIA->getDryRun()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named resellerDomainCreateCAT
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructResellerDomainCreateCAT::getSession()
	 * @uses OvhStructResellerDomainCreateCAT::getDomain()
	 * @uses OvhStructResellerDomainCreateCAT::getHosting()
	 * @uses OvhStructResellerDomainCreateCAT::getOffer()
	 * @uses OvhStructResellerDomainCreateCAT::getProfile()
	 * @uses OvhStructResellerDomainCreateCAT::getOwo()
	 * @uses OvhStructResellerDomainCreateCAT::getOwner()
	 * @uses OvhStructResellerDomainCreateCAT::getAdmin()
	 * @uses OvhStructResellerDomainCreateCAT::getTech()
	 * @uses OvhStructResellerDomainCreateCAT::getBilling()
	 * @uses OvhStructResellerDomainCreateCAT::getDns1()
	 * @uses OvhStructResellerDomainCreateCAT::getDns2()
	 * @uses OvhStructResellerDomainCreateCAT::getDns3()
	 * @uses OvhStructResellerDomainCreateCAT::getDns4()
	 * @uses OvhStructResellerDomainCreateCAT::getDns5()
	 * @uses OvhStructResellerDomainCreateCAT::getReason()
	 * @uses OvhStructResellerDomainCreateCAT::getDryRun()
	 * @param OvhStructResellerDomainCreateCAT $_ovhStructResellerDomainCreateCAT
	 * @return OvhStructResellerDomainCreateCATResponse
	 */
	public function resellerDomainCreateCAT(OvhStructResellerDomainCreateCAT $_ovhStructResellerDomainCreateCAT)
	{
		try
		{
			$this->setResult(self::getSoapClient()->resellerDomainCreateCAT($_ovhStructResellerDomainCreateCAT->getSession(),$_ovhStructResellerDomainCreateCAT->getDomain(),$_ovhStructResellerDomainCreateCAT->getHosting(),$_ovhStructResellerDomainCreateCAT->getOffer(),$_ovhStructResellerDomainCreateCAT->getProfile(),$_ovhStructResellerDomainCreateCAT->getOwo(),$_ovhStructResellerDomainCreateCAT->getOwner(),$_ovhStructResellerDomainCreateCAT->getAdmin(),$_ovhStructResellerDomainCreateCAT->getTech(),$_ovhStructResellerDomainCreateCAT->getBilling(),$_ovhStructResellerDomainCreateCAT->getDns1(),$_ovhStructResellerDomainCreateCAT->getDns2(),$_ovhStructResellerDomainCreateCAT->getDns3(),$_ovhStructResellerDomainCreateCAT->getDns4(),$_ovhStructResellerDomainCreateCAT->getDns5(),$_ovhStructResellerDomainCreateCAT->getReason(),$_ovhStructResellerDomainCreateCAT->getDryRun()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named resellerDomainCreateASIA
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructResellerDomainCreateASIA::getSession()
	 * @uses OvhStructResellerDomainCreateASIA::getDomain()
	 * @uses OvhStructResellerDomainCreateASIA::getHosting()
	 * @uses OvhStructResellerDomainCreateASIA::getOffer()
	 * @uses OvhStructResellerDomainCreateASIA::getProfile()
	 * @uses OvhStructResellerDomainCreateASIA::getOwo()
	 * @uses OvhStructResellerDomainCreateASIA::getOwner()
	 * @uses OvhStructResellerDomainCreateASIA::getAdmin()
	 * @uses OvhStructResellerDomainCreateASIA::getTech()
	 * @uses OvhStructResellerDomainCreateASIA::getBilling()
	 * @uses OvhStructResellerDomainCreateASIA::getDns1()
	 * @uses OvhStructResellerDomainCreateASIA::getDns2()
	 * @uses OvhStructResellerDomainCreateASIA::getDns3()
	 * @uses OvhStructResellerDomainCreateASIA::getDns4()
	 * @uses OvhStructResellerDomainCreateASIA::getDns5()
	 * @uses OvhStructResellerDomainCreateASIA::getCedCea()
	 * @uses OvhStructResellerDomainCreateASIA::getContactCED()
	 * @uses OvhStructResellerDomainCreateASIA::getLocalityCity()
	 * @uses OvhStructResellerDomainCreateASIA::getLocalitySp()
	 * @uses OvhStructResellerDomainCreateASIA::getCcLocality()
	 * @uses OvhStructResellerDomainCreateASIA::getLegalEntityType()
	 * @uses OvhStructResellerDomainCreateASIA::getOtherLEType()
	 * @uses OvhStructResellerDomainCreateASIA::getIdentForm()
	 * @uses OvhStructResellerDomainCreateASIA::getOtherIdentForm()
	 * @uses OvhStructResellerDomainCreateASIA::getIdentNumber()
	 * @uses OvhStructResellerDomainCreateASIA::getDryRun()
	 * @param OvhStructResellerDomainCreateASIA $_ovhStructResellerDomainCreateASIA
	 * @return OvhStructResellerDomainCreateASIAResponse
	 */
	public function resellerDomainCreateASIA(OvhStructResellerDomainCreateASIA $_ovhStructResellerDomainCreateASIA)
	{
		try
		{
			$this->setResult(self::getSoapClient()->resellerDomainCreateASIA($_ovhStructResellerDomainCreateASIA->getSession(),$_ovhStructResellerDomainCreateASIA->getDomain(),$_ovhStructResellerDomainCreateASIA->getHosting(),$_ovhStructResellerDomainCreateASIA->getOffer(),$_ovhStructResellerDomainCreateASIA->getProfile(),$_ovhStructResellerDomainCreateASIA->getOwo(),$_ovhStructResellerDomainCreateASIA->getOwner(),$_ovhStructResellerDomainCreateASIA->getAdmin(),$_ovhStructResellerDomainCreateASIA->getTech(),$_ovhStructResellerDomainCreateASIA->getBilling(),$_ovhStructResellerDomainCreateASIA->getDns1(),$_ovhStructResellerDomainCreateASIA->getDns2(),$_ovhStructResellerDomainCreateASIA->getDns3(),$_ovhStructResellerDomainCreateASIA->getDns4(),$_ovhStructResellerDomainCreateASIA->getDns5(),$_ovhStructResellerDomainCreateASIA->getCedCea(),$_ovhStructResellerDomainCreateASIA->getContactCED(),$_ovhStructResellerDomainCreateASIA->getLocalityCity(),$_ovhStructResellerDomainCreateASIA->getLocalitySp(),$_ovhStructResellerDomainCreateASIA->getCcLocality(),$_ovhStructResellerDomainCreateASIA->getLegalEntityType(),$_ovhStructResellerDomainCreateASIA->getOtherLEType(),$_ovhStructResellerDomainCreateASIA->getIdentForm(),$_ovhStructResellerDomainCreateASIA->getOtherIdentForm(),$_ovhStructResellerDomainCreateASIA->getIdentNumber(),$_ovhStructResellerDomainCreateASIA->getDryRun()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named resellerDomainTransfer
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructResellerDomainTransfer::getSession()
	 * @uses OvhStructResellerDomainTransfer::getDomain()
	 * @uses OvhStructResellerDomainTransfer::getAuthinfo()
	 * @uses OvhStructResellerDomainTransfer::getHosting()
	 * @uses OvhStructResellerDomainTransfer::getOffer()
	 * @uses OvhStructResellerDomainTransfer::getProfile()
	 * @uses OvhStructResellerDomainTransfer::getOwo()
	 * @uses OvhStructResellerDomainTransfer::getOwner()
	 * @uses OvhStructResellerDomainTransfer::getAdmin()
	 * @uses OvhStructResellerDomainTransfer::getTech()
	 * @uses OvhStructResellerDomainTransfer::getBilling()
	 * @uses OvhStructResellerDomainTransfer::getDns1()
	 * @uses OvhStructResellerDomainTransfer::getDns2()
	 * @uses OvhStructResellerDomainTransfer::getDns3()
	 * @uses OvhStructResellerDomainTransfer::getDns4()
	 * @uses OvhStructResellerDomainTransfer::getDns5()
	 * @uses OvhStructResellerDomainTransfer::getMethod()
	 * @uses OvhStructResellerDomainTransfer::getLegalName()
	 * @uses OvhStructResellerDomainTransfer::getLegalNumber()
	 * @uses OvhStructResellerDomainTransfer::getAfnicIdent()
	 * @uses OvhStructResellerDomainTransfer::getBirthDate()
	 * @uses OvhStructResellerDomainTransfer::getBirthCity()
	 * @uses OvhStructResellerDomainTransfer::getBirthDepartement()
	 * @uses OvhStructResellerDomainTransfer::getBirthCountry()
	 * @uses OvhStructResellerDomainTransfer::getDryRun()
	 * @param OvhStructResellerDomainTransfer $_ovhStructResellerDomainTransfer
	 * @return OvhStructResellerDomainTransferResponse
	 */
	public function resellerDomainTransfer(OvhStructResellerDomainTransfer $_ovhStructResellerDomainTransfer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->resellerDomainTransfer($_ovhStructResellerDomainTransfer->getSession(),$_ovhStructResellerDomainTransfer->getDomain(),$_ovhStructResellerDomainTransfer->getAuthinfo(),$_ovhStructResellerDomainTransfer->getHosting(),$_ovhStructResellerDomainTransfer->getOffer(),$_ovhStructResellerDomainTransfer->getProfile(),$_ovhStructResellerDomainTransfer->getOwo(),$_ovhStructResellerDomainTransfer->getOwner(),$_ovhStructResellerDomainTransfer->getAdmin(),$_ovhStructResellerDomainTransfer->getTech(),$_ovhStructResellerDomainTransfer->getBilling(),$_ovhStructResellerDomainTransfer->getDns1(),$_ovhStructResellerDomainTransfer->getDns2(),$_ovhStructResellerDomainTransfer->getDns3(),$_ovhStructResellerDomainTransfer->getDns4(),$_ovhStructResellerDomainTransfer->getDns5(),$_ovhStructResellerDomainTransfer->getMethod(),$_ovhStructResellerDomainTransfer->getLegalName(),$_ovhStructResellerDomainTransfer->getLegalNumber(),$_ovhStructResellerDomainTransfer->getAfnicIdent(),$_ovhStructResellerDomainTransfer->getBirthDate(),$_ovhStructResellerDomainTransfer->getBirthCity(),$_ovhStructResellerDomainTransfer->getBirthDepartement(),$_ovhStructResellerDomainTransfer->getBirthCountry(),$_ovhStructResellerDomainTransfer->getDryRun()));
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
	 * @return OvhStructResellerDomainCreateASIAResponse|OvhStructResellerDomainCreateCATResponse|OvhStructResellerDomainCreateITResponse|OvhStructResellerDomainCreateResponse|OvhStructResellerDomainRenewResponse|OvhStructResellerDomainRestoreResponse|OvhStructResellerDomainTransferASIAResponse|OvhStructResellerDomainTransferITResponse|OvhStructResellerDomainTransferResponse
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