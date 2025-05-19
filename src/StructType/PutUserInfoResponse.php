<?php

declare(strict_types=1);

namespace CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PutUserInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PutUserInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \StructType\Element|null
     */
    protected ?\StructType\Element $return = null;
    /**
     * Constructor method for PutUserInfoResponse
     * @uses PutUserInfoResponse::setReturn()
     * @param \StructType\Element $return
     */
    public function __construct(?\StructType\Element $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\Element|null
     */
    public function getReturn(): ?\StructType\Element
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\Element $return
     * @return \StructType\PutUserInfoResponse
     */
    public function setReturn(?\StructType\Element $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
