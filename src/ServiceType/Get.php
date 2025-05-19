<?php

declare(strict_types=1);

namespace Oihso\CSESDK\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Oihso\CSESDK\StructType\GetDocuments $parameters
     * @return \Oihso\CSESDK\StructType\GetDocumentsResponse|bool
     */
    public function GetDocuments(\Oihso\CSESDK\StructType\GetDocuments $parameters)
    {
        try {
            $this->setResult($resultGetDocuments = $this->getSoapClient()->__soapCall('GetDocuments', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFormsForDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Oihso\CSESDK\StructType\GetFormsForDocuments $parameters
     * @return \Oihso\CSESDK\StructType\GetFormsForDocumentsResponse|bool
     */
    public function GetFormsForDocuments(\Oihso\CSESDK\StructType\GetFormsForDocuments $parameters)
    {
        try {
            $this->setResult($resultGetFormsForDocuments = $this->getSoapClient()->__soapCall('GetFormsForDocuments', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFormsForDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListOfDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Oihso\CSESDK\StructType\GetListOfDocuments $parameters
     * @return \Oihso\CSESDK\StructType\GetListOfDocumentsResponse|bool
     */
    public function GetListOfDocuments(\Oihso\CSESDK\StructType\GetListOfDocuments $parameters)
    {
        try {
            $this->setResult($resultGetListOfDocuments = $this->getSoapClient()->__soapCall('GetListOfDocuments', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetListOfDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReferenceData
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Oihso\CSESDK\StructType\GetReferenceData $parameters
     * @return \Oihso\CSESDK\StructType\GetReferenceDataResponse|bool
     */
    public function GetReferenceData(\Oihso\CSESDK\StructType\GetReferenceData $parameters)
    {
        try {
            $this->setResult($resultGetReferenceData = $this->getSoapClient()->__soapCall('GetReferenceData', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReferenceData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Oihso\CSESDK\StructType\GetUserInfo $parameters
     * @return \Oihso\CSESDK\StructType\GetUserInfoResponse|bool
     */
    public function GetUserInfo(\Oihso\CSESDK\StructType\GetUserInfo $parameters)
    {
        try {
            $this->setResult($resultGetUserInfo = $this->getSoapClient()->__soapCall('GetUserInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Oihso\CSESDK\StructType\GetDocumentsResponse|\Oihso\CSESDK\StructType\GetFormsForDocumentsResponse|\Oihso\CSESDK\StructType\GetListOfDocumentsResponse|\Oihso\CSESDK\StructType\GetReferenceDataResponse|\Oihso\CSESDK\StructType\GetUserInfoResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
