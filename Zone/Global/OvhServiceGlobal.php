<?php
/**
 * File for class OvhServiceGlobal
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceGlobal originally named Global
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceGlobal extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named globalAccessByNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructGlobalAccessByNic::getSession()
	 * @param OvhStructGlobalAccessByNic $_ovhStructGlobalAccessByNic
	 * @return OvhStructGlobalAccessByNicResponse
	 */
	public function globalAccessByNic(OvhStructGlobalAccessByNic $_ovhStructGlobalAccessByNic)
	{
		try
		{
			$this->setResult(self::getSoapClient()->globalAccessByNic($_ovhStructGlobalAccessByNic->getSession()));
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
	 * @return OvhStructGlobalAccessByNicResponse
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