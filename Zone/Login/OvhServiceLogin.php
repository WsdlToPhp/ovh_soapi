<?php
/**
 * File for class OvhServiceLogin
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceLogin originally named Login
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceLogin extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named login
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructLogin::getNic()
	 * @uses OvhStructLogin::getPassword()
	 * @uses OvhStructLogin::getLanguage()
	 * @uses OvhStructLogin::getMultisession()
	 * @param OvhStructLogin $_ovhStructLogin
	 * @return OvhStructLoginResponse
	 */
	public function login(OvhStructLogin $_ovhStructLogin)
	{
		try
		{
			$this->setResult(self::getSoapClient()->login($_ovhStructLogin->getNic(),$_ovhStructLogin->getPassword(),$_ovhStructLogin->getLanguage(),$_ovhStructLogin->getMultisession()));
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
	 * @return OvhStructLoginResponse
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