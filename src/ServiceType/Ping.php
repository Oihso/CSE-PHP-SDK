<?php

declare(strict_types=1);

namespace Oihso\CSESDK\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Ping ServiceType
 * @subpackage Services
 */
class Ping extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Ping
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Oihso\CSESDK\StructType\Ping $parameters
     * @return \Oihso\CSESDK\StructType\PingResponse|bool
     */
    public function Ping(\Oihso\CSESDK\StructType\Ping $parameters)
    {
        try {
            $this->setResult($resultPing = $this->getSoapClient()->__soapCall('Ping', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultPing;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Oihso\CSESDK\StructType\PingResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
