<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeasurementResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MeasurementResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Oihso\CSESDK\StructType\ResultString|null
     */
    protected ?\Oihso\CSESDK\StructType\ResultString $return = null;
    /**
     * Constructor method for MeasurementResponse
     * @uses MeasurementResponse::setReturn()
     * @param \Oihso\CSESDK\StructType\ResultString $return
     */
    public function __construct(?\Oihso\CSESDK\StructType\ResultString $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Oihso\CSESDK\StructType\ResultString|null
     */
    public function getReturn(): ?\Oihso\CSESDK\StructType\ResultString
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Oihso\CSESDK\StructType\ResultString $return
     * @return \Oihso\CSESDK\StructType\MeasurementResponse
     */
    public function setReturn(?\Oihso\CSESDK\StructType\ResultString $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
