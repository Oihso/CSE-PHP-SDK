<?php

declare(strict_types=1);

namespace Oihso\CSESDK\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Check ServiceType
 * @subpackage Services
 */
class Check extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CheckClientNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Oihso\CSESDK\StructType\CheckClientNumber $parameters
     * @return \Oihso\CSESDK\StructType\CheckClientNumberResponse|bool
     */
    public function CheckClientNumber(\Oihso\CSESDK\StructType\CheckClientNumber $parameters)
    {
        try {
            $this->setResult($resultCheckClientNumber = $this->getSoapClient()->__soapCall('CheckClientNumber', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckClientNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CheckPlannedDeliveryDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Oihso\CSESDK\StructType\CheckPlannedDeliveryDate $parameters
     * @return \Oihso\CSESDK\StructType\CheckPlannedDeliveryDateResponse|bool
     */
    public function CheckPlannedDeliveryDate(\Oihso\CSESDK\StructType\CheckPlannedDeliveryDate $parameters)
    {
        try {
            $this->setResult($resultCheckPlannedDeliveryDate = $this->getSoapClient()->__soapCall('CheckPlannedDeliveryDate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckPlannedDeliveryDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Oihso\CSESDK\StructType\CheckClientNumberResponse|\Oihso\CSESDK\StructType\CheckPlannedDeliveryDateResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
