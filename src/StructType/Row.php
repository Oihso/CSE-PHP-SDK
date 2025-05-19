<?php

declare(strict_types=1);

namespace CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Row StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Row extends AbstractStructBase
{
    /**
     * The Cells
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    protected ?array $Cells = null;
    /**
     * The Rows
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Row[]
     */
    protected ?array $Rows = null;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Element[]
     */
    protected ?array $Properties = null;
    /**
     * Constructor method for Row
     * @uses Row::setCells()
     * @uses Row::setRows()
     * @uses Row::setProperties()
     * @param string[] $cells
     * @param \StructType\Row[] $rows
     * @param \StructType\Element[] $properties
     */
    public function __construct(?array $cells = null, ?array $rows = null, ?array $properties = null)
    {
        $this
            ->setCells($cells)
            ->setRows($rows)
            ->setProperties($properties);
    }
    /**
     * Get Cells value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]
     */
    public function getCells(): ?array
    {
        return $this->Cells ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCells method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCells method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCellsForArrayConstraintFromSetCells(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rowCellsItem) {
            // validation for constraint: itemType
            if (!is_string($rowCellsItem)) {
                $invalidValues[] = is_object($rowCellsItem) ? get_class($rowCellsItem) : sprintf('%s(%s)', gettype($rowCellsItem), var_export($rowCellsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Cells property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Cells value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param string[] $cells
     * @return \StructType\Row
     */
    public function setCells(?array $cells = null): self
    {
        // validation for constraint: array
        if ('' !== ($cellsArrayErrorMessage = self::validateCellsForArrayConstraintFromSetCells($cells))) {
            throw new InvalidArgumentException($cellsArrayErrorMessage, __LINE__);
        }
        if (is_null($cells) || (is_array($cells) && empty($cells))) {
            unset($this->Cells);
        } else {
            $this->Cells = $cells;
        }
        
        return $this;
    }
    /**
     * Add item to Cells value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Row
     */
    public function addToCells(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Cells property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Cells[] = $item;
        
        return $this;
    }
    /**
     * Get Rows value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Row[]
     */
    public function getRows(): ?array
    {
        return $this->Rows ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRows method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRows method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRowsForArrayConstraintFromSetRows(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rowRowsItem) {
            // validation for constraint: itemType
            if (!$rowRowsItem instanceof \StructType\Row) {
                $invalidValues[] = is_object($rowRowsItem) ? get_class($rowRowsItem) : sprintf('%s(%s)', gettype($rowRowsItem), var_export($rowRowsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Rows property can only contain items of type \StructType\Row, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Rows value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\Row[] $rows
     * @return \StructType\Row
     */
    public function setRows(?array $rows = null): self
    {
        // validation for constraint: array
        if ('' !== ($rowsArrayErrorMessage = self::validateRowsForArrayConstraintFromSetRows($rows))) {
            throw new InvalidArgumentException($rowsArrayErrorMessage, __LINE__);
        }
        if (is_null($rows) || (is_array($rows) && empty($rows))) {
            unset($this->Rows);
        } else {
            $this->Rows = $rows;
        }
        
        return $this;
    }
    /**
     * Add item to Rows value
     * @throws InvalidArgumentException
     * @param \StructType\Row $item
     * @return \StructType\Row
     */
    public function addToRows(\StructType\Row $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Row) {
            throw new InvalidArgumentException(sprintf('The Rows property can only contain items of type \StructType\Row, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Rows[] = $item;
        
        return $this;
    }
    /**
     * Get Properties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Element[]
     */
    public function getProperties(): ?array
    {
        return $this->Properties ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setProperties method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProperties method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePropertiesForArrayConstraintFromSetProperties(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rowPropertiesItem) {
            // validation for constraint: itemType
            if (!$rowPropertiesItem instanceof \StructType\Element) {
                $invalidValues[] = is_object($rowPropertiesItem) ? get_class($rowPropertiesItem) : sprintf('%s(%s)', gettype($rowPropertiesItem), var_export($rowPropertiesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Properties property can only contain items of type \StructType\Element, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Properties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\Element[] $properties
     * @return \StructType\Row
     */
    public function setProperties(?array $properties = null): self
    {
        // validation for constraint: array
        if ('' !== ($propertiesArrayErrorMessage = self::validatePropertiesForArrayConstraintFromSetProperties($properties))) {
            throw new InvalidArgumentException($propertiesArrayErrorMessage, __LINE__);
        }
        if (is_null($properties) || (is_array($properties) && empty($properties))) {
            unset($this->Properties);
        } else {
            $this->Properties = $properties;
        }
        
        return $this;
    }
    /**
     * Add item to Properties value
     * @throws InvalidArgumentException
     * @param \StructType\Element $item
     * @return \StructType\Row
     */
    public function addToProperties(\StructType\Element $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Element) {
            throw new InvalidArgumentException(sprintf('The Properties property can only contain items of type \StructType\Element, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Properties[] = $item;
        
        return $this;
    }
}
