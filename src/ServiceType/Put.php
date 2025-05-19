<?php

declare(strict_types=1);

namespace CSESDK\ServiceType;

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
     * @param \StructType\PutReferenceData $parameters
     * @return \StructType\PutReferenceDataResponse|bool
     */
    public function PutReferenceData(\StructType\PutReferenceData $parameters)
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
     * @param \StructType\PutUserInfo $parameters
     * @return \StructType\PutUserInfoResponse|bool
     */
    public function PutUserInfo(\StructType\PutUserInfo $parameters)
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
     * @return \StructType\PutReferenceDataResponse|\StructType\PutUserInfoResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
