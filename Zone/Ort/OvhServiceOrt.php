<?php
/**
 * File for class OvhServiceOrt
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceOrt originally named Ort
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceOrt extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named ortDomainDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructOrtDomainDel::getSession()
	 * @uses OvhStructOrtDomainDel::getDomain()
	 * @uses OvhStructOrtDomainDel::getSubdomain()
	 * @uses OvhStructOrtDomainDel::getTarget()
	 * @param OvhStructOrtDomainDel $_ovhStructOrtDomainDel
	 * @return OvhStructOrtDomainDelResponse
	 */
	public function ortDomainDel(OvhStructOrtDomainDel $_ovhStructOrtDomainDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ortDomainDel($_ovhStructOrtDomainDel->getSession(),$_ovhStructOrtDomainDel->getDomain(),$_ovhStructOrtDomainDel->getSubdomain(),$_ovhStructOrtDomainDel->getTarget()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named ortDomainList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructOrtDomainList::getSession()
	 * @uses OvhStructOrtDomainList::getDomain()
	 * @param OvhStructOrtDomainList $_ovhStructOrtDomainList
	 * @return OvhStructOrtDomainListResponse
	 */
	public function ortDomainList(OvhStructOrtDomainList $_ovhStructOrtDomainList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ortDomainList($_ovhStructOrtDomainList->getSession(),$_ovhStructOrtDomainList->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named ortDomainAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructOrtDomainAdd::getSession()
	 * @uses OvhStructOrtDomainAdd::getDomain()
	 * @uses OvhStructOrtDomainAdd::getSubdomain()
	 * @uses OvhStructOrtDomainAdd::getTarget()
	 * @uses OvhStructOrtDomainAdd::getType()
	 * @uses OvhStructOrtDomainAdd::getOverwrite()
	 * @param OvhStructOrtDomainAdd $_ovhStructOrtDomainAdd
	 * @return OvhStructOrtDomainAddResponse
	 */
	public function ortDomainAdd(OvhStructOrtDomainAdd $_ovhStructOrtDomainAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ortDomainAdd($_ovhStructOrtDomainAdd->getSession(),$_ovhStructOrtDomainAdd->getDomain(),$_ovhStructOrtDomainAdd->getSubdomain(),$_ovhStructOrtDomainAdd->getTarget(),$_ovhStructOrtDomainAdd->getType(),$_ovhStructOrtDomainAdd->getOverwrite()));
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
	 * @return OvhStructOrtDomainAddResponse|OvhStructOrtDomainDelResponse|OvhStructOrtDomainListResponse
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