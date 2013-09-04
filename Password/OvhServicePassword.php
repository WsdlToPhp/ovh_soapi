<?php
/**
 * File for class OvhServicePassword
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServicePassword originally named Password
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServicePassword extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named passwordSoapi
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPasswordSoapi::getSession()
	 * @uses OvhStructPasswordSoapi::getCurrentPassword()
	 * @uses OvhStructPasswordSoapi::getPassword()
	 * @param OvhStructPasswordSoapi $_ovhStructPasswordSoapi
	 * @return OvhStructPasswordSoapiResponse
	 */
	public function passwordSoapi(OvhStructPasswordSoapi $_ovhStructPasswordSoapi)
	{
		try
		{
			$this->setResult(self::getSoapClient()->passwordSoapi($_ovhStructPasswordSoapi->getSession(),$_ovhStructPasswordSoapi->getCurrentPassword(),$_ovhStructPasswordSoapi->getPassword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named passwordManager
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPasswordManager::getSession()
	 * @uses OvhStructPasswordManager::getCurrentPassword()
	 * @uses OvhStructPasswordManager::getPassword()
	 * @param OvhStructPasswordManager $_ovhStructPasswordManager
	 * @return OvhStructPasswordManagerResponse
	 */
	public function passwordManager(OvhStructPasswordManager $_ovhStructPasswordManager)
	{
		try
		{
			$this->setResult(self::getSoapClient()->passwordManager($_ovhStructPasswordManager->getSession(),$_ovhStructPasswordManager->getCurrentPassword(),$_ovhStructPasswordManager->getPassword()));
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
	 * @return OvhStructPasswordManagerResponse|OvhStructPasswordSoapiResponse
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