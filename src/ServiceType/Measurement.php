<?php

declare(strict_types=1);

namespace Oihso\CSESDK\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Measurement ServiceType
 * @subpackage Services
 */
class Measurement extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Measurement
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Oihso\CSESDK\StructType\Measurement $parameters
     * @return \Oihso\CSESDK\StructType\MeasurementResponse|bool
     */
    public function Measurement(\Oihso\CSESDK\StructType\Measurement $parameters)
    {
        try {
            $this->setResult($resultMeasurement = $this->getSoapClient()->__soapCall('Measurement', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultMeasurement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Oihso\CSESDK\StructType\MeasurementResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
