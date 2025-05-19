<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResultArray StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResultArray extends AbstractStructBase
{
    /**
     * The Error
     * @var bool|null
     */
    protected ?bool $Error = null;
    /**
     * The Items
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\ResultString[]
     */
    protected ?array $Items = null;
    /**
     * The ErrorInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ErrorInfo = null;
    /**
     * Constructor method for ResultArray
     * @uses ResultArray::setError()
     * @uses ResultArray::setItems()
     * @uses ResultArray::setErrorInfo()
     * @param bool $error
     * @param \Oihso\CSESDK\StructType\ResultString[] $items
     * @param string $errorInfo
     */
    public function __construct(?bool $error = null, ?array $items = null, ?string $errorInfo = null)
    {
        $this
            ->setError($error)
            ->setItems($items)
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
     * @return \Oihso\CSESDK\StructType\ResultArray
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
     * Get Items value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Oihso\CSESDK\StructType\ResultString[]
     */
    public function getItems(): ?array
    {
        return $this->Items ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItems method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemsForArrayConstraintFromSetItems(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $resultArrayItemsItem) {
            // validation for constraint: itemType
            if (!$resultArrayItemsItem instanceof \Oihso\CSESDK\StructType\ResultString) {
                $invalidValues[] = is_object($resultArrayItemsItem) ? get_class($resultArrayItemsItem) : sprintf('%s(%s)', gettype($resultArrayItemsItem), var_export($resultArrayItemsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Items property can only contain items of type \Oihso\CSESDK\StructType\ResultString, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Items value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Oihso\CSESDK\StructType\ResultString[] $items
     * @return \Oihso\CSESDK\StructType\ResultArray
     */
    public function setItems(?array $items = null): self
    {
        // validation for constraint: array
        if ('' !== ($itemsArrayErrorMessage = self::validateItemsForArrayConstraintFromSetItems($items))) {
            throw new InvalidArgumentException($itemsArrayErrorMessage, __LINE__);
        }
        if (is_null($items) || (is_array($items) && empty($items))) {
            unset($this->Items);
        } else {
            $this->Items = $items;
        }
        
        return $this;
    }
    /**
     * Add item to Items value
     * @throws InvalidArgumentException
     * @param \Oihso\CSESDK\StructType\ResultString $item
     * @return \Oihso\CSESDK\StructType\ResultArray
     */
    public function addToItems(\Oihso\CSESDK\StructType\ResultString $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Oihso\CSESDK\StructType\ResultString) {
            throw new InvalidArgumentException(sprintf('The Items property can only contain items of type \Oihso\CSESDK\StructType\ResultString, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Items[] = $item;
        
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
     * @return \Oihso\CSESDK\StructType\ResultArray
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
