<?php
/**
 * File for class OvhServiceLanguage
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceLanguage originally named Language
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceLanguage extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named language
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructLanguage::getSession()
	 * @uses OvhStructLanguage::getLanguage()
	 * @param OvhStructLanguage $_ovhStructLanguage
	 * @return OvhStructLanguageResponse
	 */
	public function language(OvhStructLanguage $_ovhStructLanguage)
	{
		try
		{
			$this->setResult(self::getSoapClient()->language($_ovhStructLanguage->getSession(),$_ovhStructLanguage->getLanguage()));
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
	 * @return OvhStructLanguageResponse
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