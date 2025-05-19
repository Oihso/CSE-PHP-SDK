<?php

declare(strict_types=1);

namespace Oihso\CSESDK\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Put ServiceType
 * @subpackage Services
 */
class Put extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named PutReferenceData
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Oihso\CSESDK\StructType\PutReferenceData $parameters
     * @return \Oihso\CSESDK\StructType\PutReferenceDataResponse|bool
     */
    public function PutReferenceData(\Oihso\CSESDK\StructType\PutReferenceData $parameters)
    {
        try {
            $this->setResult($resultPutReferenceData = $this->getSoapClient()->__soapCall('PutReferenceData', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultPutReferenceData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named PutUserInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Oihso\CSESDK\StructType\PutUserInfo $parameters
     * @return \Oihso\CSESDK\StructType\PutUserInfoResponse|bool
     */
    public function PutUserInfo(\Oihso\CSESDK\StructType\PutUserInfo $parameters)
    {
        try {
            $this->setResult($resultPutUserInfo = $this->getSoapClient()->__soapCall('PutUserInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultPutUserInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Oihso\CSESDK\StructType\PutReferenceDataResponse|\Oihso\CSESDK\StructType\PutUserInfoResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
