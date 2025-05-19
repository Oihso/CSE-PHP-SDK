<?php

declare(strict_types=1);

namespace CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResultPrint StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResultPrint extends AbstractStructBase
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
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Size
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Size = null;
    /**
     * The ErrorInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ErrorInfo = null;
    /**
     * Constructor method for ResultPrint
     * @uses ResultPrint::setError()
     * @uses ResultPrint::setValue()
     * @uses ResultPrint::setName()
     * @uses ResultPrint::setSize()
     * @uses ResultPrint::setErrorInfo()
     * @param bool $error
     * @param string $value
     * @param string $name
     * @param string $size
     * @param string $errorInfo
     */
    public function __construct(?bool $error = null, ?string $value = null, ?string $name = null, ?string $size = null, ?string $errorInfo = null)
    {
        $this
            ->setError($error)
            ->setValue($value)
            ->setName($name)
            ->setSize($size)
            ->setErrorInfo($errorInfo);
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
     * @return \StructType\ResultPrint
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
     * @return \StructType\ResultPrint
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
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\ResultPrint
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
    /**
     * Get Size value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSize(): ?string
    {
        return $this->Size ?? null;
    }
    /**
     * Set Size value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $size
     * @return \StructType\ResultPrint
     */
    public function setSize(?string $size = null): self
    {
        // validation for constraint: string
        if (!is_null($size) && !is_string($size)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        if (is_null($size) || (is_array($size) && empty($size))) {
            unset($this->Size);
        } else {
            $this->Size = $size;
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
     * @return \StructType\ResultPrint
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
}
