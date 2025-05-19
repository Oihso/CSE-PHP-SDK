<?php

declare(strict_types=1);

namespace Oihso\CSESDK\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Report ServiceType
 * @subpackage Services
 */
class Report extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Report
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Oihso\CSESDK\StructType\Report $parameters
     * @return \Oihso\CSESDK\StructType\ReportResponse|bool
     */
    public function Report(\Oihso\CSESDK\StructType\Report $parameters)
    {
        try {
            $this->setResult($resultReport = $this->getSoapClient()->__soapCall('Report', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Oihso\CSESDK\StructType\ReportResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
