<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PutReferenceDataResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PutReferenceDataResponse extends AbstractStructBase
{
    /**
     * The return
     * @var string|null
     */
    protected ?string $return = null;
    /**
     * Constructor method for PutReferenceDataResponse
     * @uses PutReferenceDataResponse::setReturn()
     * @param string $return
     */
    public function __construct(?string $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return string|null
     */
    public function getReturn(): ?string
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param string $return
     * @return \Oihso\CSESDK\StructType\PutReferenceDataResponse
     */
    public function setReturn(?string $return = null): self
    {
        // validation for constraint: string
        if (!is_null($return) && !is_string($return)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return, true), gettype($return)), __LINE__);
        }
        $this->return = $return;
        
        return $this;
    }
}
