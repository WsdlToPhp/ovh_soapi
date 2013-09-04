<?php
/**
 * File for class OvhServiceInfrastructure
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceInfrastructure originally named Infrastructure
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceInfrastructure extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named infrastructureReverseModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructInfrastructureReverseModify::getSession()
	 * @uses OvhStructInfrastructureReverseModify::getHostname()
	 * @uses OvhStructInfrastructureReverseModify::getIp()
	 * @uses OvhStructInfrastructureReverseModify::getReverse()
	 * @param OvhStructInfrastructureReverseModify $_ovhStructInfrastructureReverseModify
	 * @return OvhStructInfrastructureReverseModifyResponse
	 */
	public function infrastructureReverseModify(OvhStructInfrastructureReverseModify $_ovhStructInfrastructureReverseModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->infrastructureReverseModify($_ovhStructInfrastructureReverseModify->getSession(),$_ovhStructInfrastructureReverseModify->getHostname(),$_ovhStructInfrastructureReverseModify->getIp(),$_ovhStructInfrastructureReverseModify->getReverse()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named infrastructureIpListGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructInfrastructureIpListGet::getSession()
	 * @uses OvhStructInfrastructureIpListGet::getHostname()
	 * @param OvhStructInfrastructureIpListGet $_ovhStructInfrastructureIpListGet
	 * @return OvhStructInfrastructureIpListGetResponse
	 */
	public function infrastructureIpListGet(OvhStructInfrastructureIpListGet $_ovhStructInfrastructureIpListGet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->infrastructureIpListGet($_ovhStructInfrastructureIpListGet->getSession(),$_ovhStructInfrastructureIpListGet->getHostname()));
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
	 * @return OvhStructInfrastructureIpListGetResponse|OvhStructInfrastructureReverseModifyResponse
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