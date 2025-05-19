<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryOptions StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeliveryOptions extends AbstractStructBase
{
    /**
     * The CashOnDelivery
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $CashOnDelivery = null;
    /**
     * The AdditionalConditions
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ListOfCorrespondences[]
     */
    protected ?array $AdditionalConditions = null;
    /**
     * Constructor method for DeliveryOptions
     * @uses DeliveryOptions::setCashOnDelivery()
     * @uses DeliveryOptions::setAdditionalConditions()
     * @param bool $cashOnDelivery
     * @param \StructType\ListOfCorrespondences[] $additionalConditions
     */
    public function __construct(?bool $cashOnDelivery = null, ?array $additionalConditions = null)
    {
        $this
            ->setCashOnDelivery($cashOnDelivery)
            ->setAdditionalConditions($additionalConditions);
    }
    /**
     * Get CashOnDelivery value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getCashOnDelivery(): ?bool
    {
        return $this->CashOnDelivery ?? null;
    }
    /**
     * Set CashOnDelivery value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $cashOnDelivery
     * @return \StructType\DeliveryOptions
     */
    public function setCashOnDelivery(?bool $cashOnDelivery = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cashOnDelivery) && !is_bool($cashOnDelivery)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cashOnDelivery, true), gettype($cashOnDelivery)), __LINE__);
        }
        if (is_null($cashOnDelivery) || (is_array($cashOnDelivery) && empty($cashOnDelivery))) {
            unset($this->CashOnDelivery);
        } else {
            $this->CashOnDelivery = $cashOnDelivery;
        }
        
        return $this;
    }
    /**
     * Get AdditionalConditions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ListOfCorrespondences[]
     */
    public function getAdditionalConditions(): ?array
    {
        return $this->AdditionalConditions ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAdditionalConditions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalConditions method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalConditionsForArrayConstraintFromSetAdditionalConditions(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deliveryOptionsAdditionalConditionsItem) {
            // validation for constraint: itemType
            if (!$deliveryOptionsAdditionalConditionsItem instanceof \StructType\ListOfCorrespondences) {
                $invalidValues[] = is_object($deliveryOptionsAdditionalConditionsItem) ? get_class($deliveryOptionsAdditionalConditionsItem) : sprintf('%s(%s)', gettype($deliveryOptionsAdditionalConditionsItem), var_export($deliveryOptionsAdditionalConditionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdditionalConditions property can only contain items of type \StructType\ListOfCorrespondences, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdditionalConditions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ListOfCorrespondences[] $additionalConditions
     * @return \StructType\DeliveryOptions
     */
    public function setAdditionalConditions(?array $additionalConditions = null): self
    {
        // validation for constraint: array
        if ('' !== ($additionalConditionsArrayErrorMessage = self::validateAdditionalConditionsForArrayConstraintFromSetAdditionalConditions($additionalConditions))) {
            throw new InvalidArgumentException($additionalConditionsArrayErrorMessage, __LINE__);
        }
        if (is_null($additionalConditions) || (is_array($additionalConditions) && empty($additionalConditions))) {
            unset($this->AdditionalConditions);
        } else {
            $this->AdditionalConditions = $additionalConditions;
        }
        
        return $this;
    }
    /**
     * Add item to AdditionalConditions value
     * @throws InvalidArgumentException
     * @param \StructType\ListOfCorrespondences $item
     * @return \StructType\DeliveryOptions
     */
    public function addToAdditionalConditions(\StructType\ListOfCorrespondences $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ListOfCorrespondences) {
            throw new InvalidArgumentException(sprintf('The AdditionalConditions property can only contain items of type \StructType\ListOfCorrespondences, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AdditionalConditions[] = $item;
        
        return $this;
    }
}
