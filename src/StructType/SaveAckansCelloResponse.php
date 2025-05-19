<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAckansCelloResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveAckansCelloResponse extends AbstractStructBase
{
    /**
     * The return
     * @var bool|null
     */
    protected ?bool $return = null;
    /**
     * Constructor method for SaveAckansCelloResponse
     * @uses SaveAckansCelloResponse::setReturn()
     * @param bool $return
     */
    public function __construct(?bool $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return bool|null
     */
    public function getReturn(): ?bool
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param bool $return
     * @return \StructType\SaveAckansCelloResponse
     */
    public function setReturn(?bool $return = null): self
    {
        // validation for constraint: boolean
        if (!is_null($return) && !is_bool($return)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($return, true), gettype($return)), __LINE__);
        }
        $this->return = $return;
        
        return $this;
    }
}
