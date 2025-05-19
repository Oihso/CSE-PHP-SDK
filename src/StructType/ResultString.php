<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResultString StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResultString extends AbstractStructBase
{
    /**
     * The Error
     * @var bool|null
     */
    protected ?bool $Error = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * The ErrorInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ErrorInfo = null;
    /**
     * The Info
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Element|null
     */
    protected ?\StructType\Element $Info = null;
    /**
     * Constructor method for ResultString
     * @uses ResultString::setError()
     * @uses ResultString::setValue()
     * @uses ResultString::setErrorInfo()
     * @uses ResultString::setInfo()
     * @param bool $error
     * @param string $value
     * @param string $errorInfo
     * @param \StructType\Element $info
     */
    public function __construct(?bool $error = null, ?string $value = null, ?string $errorInfo = null, ?\StructType\Element $info = null)
    {
        $this
            ->setError($error)
            ->setValue($value)
            ->setErrorInfo($errorInfo)
            ->setInfo($info);
    }
    /**
     * Get Error value
     * @return bool|null
     */
    public function getError(): ?bool
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @param bool $error
     * @return \StructType\ResultString
     */
    public function setError(?bool $error = null): self
    {
        // validation for constraint: boolean
        if (!is_null($error) && !is_bool($error)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->Error = $error;
        
        return $this;
    }
    /**
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->Value ?? null;
    }
    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $value
     * @return \StructType\ResultString
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        
        return $this;
    }
    /**
     * Get ErrorInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getErrorInfo(): ?string
    {
        return $this->ErrorInfo ?? null;
    }
    /**
     * Set ErrorInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $errorInfo
     * @return \StructType\ResultString
     */
    public function setErrorInfo(?string $errorInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($errorInfo) && !is_string($errorInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorInfo, true), gettype($errorInfo)), __LINE__);
        }
        if (is_null($errorInfo) || (is_array($errorInfo) && empty($errorInfo))) {
            unset($this->ErrorInfo);
        } else {
            $this->ErrorInfo = $errorInfo;
        }
        
        return $this;
    }
    /**
     * Get Info value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Element|null
     */
    public function getInfo(): ?\StructType\Element
    {
        return $this->Info ?? null;
    }
    /**
     * Set Info value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Element $info
     * @return \StructType\ResultString
     */
    public function setInfo(?\StructType\Element $info = null): self
    {
        if (is_null($info) || (is_array($info) && empty($info))) {
            unset($this->Info);
        } else {
            $this->Info = $info;
        }
        
        return $this;
    }
}
