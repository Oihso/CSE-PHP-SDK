<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveWaybillOfficeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveWaybillOfficeResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \StructType\ResultArray|null
     */
    protected ?\StructType\ResultArray $return = null;
    /**
     * Constructor method for SaveWaybillOfficeResponse
     * @uses SaveWaybillOfficeResponse::setReturn()
     * @param \StructType\ResultArray $return
     */
    public function __construct(?\StructType\ResultArray $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultArray|null
     */
    public function getReturn(): ?\StructType\ResultArray
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultArray $return
     * @return \StructType\SaveWaybillOfficeResponse
     */
    public function setReturn(?\StructType\ResultArray $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
