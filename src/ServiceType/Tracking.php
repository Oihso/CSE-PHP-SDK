<?php

declare(strict_types=1);

namespace Oihso\CSESDK\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Tracking ServiceType
 * @subpackage Services
 */
class Tracking extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Tracking
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Oihso\CSESDK\StructType\Tracking $parameters
     * @return \Oihso\CSESDK\StructType\TrackingResponse|bool
     */
    public function Tracking(\Oihso\CSESDK\StructType\Tracking $parameters)
    {
        try {
            $this->setResult($resultTracking = $this->getSoapClient()->__soapCall('Tracking', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTracking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Oihso\CSESDK\StructType\TrackingResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
