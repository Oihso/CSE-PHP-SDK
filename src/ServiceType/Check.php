<?php

declare(strict_types=1);

namespace CSESDK\ServiceType;

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
     * @param \StructType\CheckClientNumber $parameters
     * @return \StructType\CheckClientNumberResponse|bool
     */
    public function CheckClientNumber(\StructType\CheckClientNumber $parameters)
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
     * @param \StructType\CheckPlannedDeliveryDate $parameters
     * @return \StructType\CheckPlannedDeliveryDateResponse|bool
     */
    public function CheckPlannedDeliveryDate(\StructType\CheckPlannedDeliveryDate $parameters)
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
     * @return \StructType\CheckClientNumberResponse|\StructType\CheckPlannedDeliveryDateResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
