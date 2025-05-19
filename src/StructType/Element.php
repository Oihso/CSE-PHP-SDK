<?php

declare(strict_types=1);

namespace CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Element StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Element extends AbstractStructBase
{
    /**
     * The Key
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * The CultureSpecificValues
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Element[]
     */
    protected ?array $CultureSpecificValues = null;
    /**
     * The ValueType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ValueType = null;
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
     * The Fields
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Element[]
     */
    protected ?array $Fields = null;
    /**
     * The List
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Element[]
     */
    protected ?array $List = null;
    /**
     * The Tables
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Element[]
     */
    protected ?array $Tables = null;
    /**
     * The Values
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    protected ?array $Values = null;
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
     * The BData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    protected ?array $BData = null;
    /**
     * Constructor method for Element
     * @uses Element::setKey()
     * @uses Element::setValue()
     * @uses Element::setCultureSpecificValues()
     * @uses Element::setValueType()
     * @uses Element::setProperties()
     * @uses Element::setFields()
     * @uses Element::setList()
     * @uses Element::setTables()
     * @uses Element::setValues()
     * @uses Element::setRows()
     * @uses Element::setBData()
     * @param string $key
     * @param string $value
     * @param \StructType\Element[] $cultureSpecificValues
     * @param string $valueType
     * @param \StructType\Element[] $properties
     * @param \StructType\Element[] $fields
     * @param \StructType\Element[] $list
     * @param \StructType\Element[] $tables
     * @param string[] $values
     * @param \StructType\Row[] $rows
     * @param string[] $bData
     */
    public function __construct(?string $key = null, ?string $value = null, ?array $cultureSpecificValues = null, ?string $valueType = null, ?array $properties = null, ?array $fields = null, ?array $list = null, ?array $tables = null, ?array $values = null, ?array $rows = null, ?array $bData = null)
    {
        $this
            ->setKey($key)
            ->setValue($value)
            ->setCultureSpecificValues($cultureSpecificValues)
            ->setValueType($valueType)
            ->setProperties($properties)
            ->setFields($fields)
            ->setList($list)
            ->setTables($tables)
            ->setValues($values)
            ->setRows($rows)
            ->setBData($bData);
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \StructType\Element
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
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
     * @return \StructType\Element
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
     * Get CultureSpecificValues value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Element[]
     */
    public function getCultureSpecificValues(): ?array
    {
        return $this->CultureSpecificValues ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCultureSpecificValues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCultureSpecificValues method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCultureSpecificValuesForArrayConstraintFromSetCultureSpecificValues(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $elementCultureSpecificValuesItem) {
            // validation for constraint: itemType
            if (!$elementCultureSpecificValuesItem instanceof \StructType\Element) {
                $invalidValues[] = is_object($elementCultureSpecificValuesItem) ? get_class($elementCultureSpecificValuesItem) : sprintf('%s(%s)', gettype($elementCultureSpecificValuesItem), var_export($elementCultureSpecificValuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CultureSpecificValues property can only contain items of type \StructType\Element, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CultureSpecificValues value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\Element[] $cultureSpecificValues
     * @return \StructType\Element
     */
    public function setCultureSpecificValues(?array $cultureSpecificValues = null): self
    {
        // validation for constraint: array
        if ('' !== ($cultureSpecificValuesArrayErrorMessage = self::validateCultureSpecificValuesForArrayConstraintFromSetCultureSpecificValues($cultureSpecificValues))) {
            throw new InvalidArgumentException($cultureSpecificValuesArrayErrorMessage, __LINE__);
        }
        if (is_null($cultureSpecificValues) || (is_array($cultureSpecificValues) && empty($cultureSpecificValues))) {
            unset($this->CultureSpecificValues);
        } else {
            $this->CultureSpecificValues = $cultureSpecificValues;
        }
        
        return $this;
    }
    /**
     * Add item to CultureSpecificValues value
     * @throws InvalidArgumentException
     * @param \StructType\Element $item
     * @return \StructType\Element
     */
    public function addToCultureSpecificValues(\StructType\Element $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Element) {
            throw new InvalidArgumentException(sprintf('The CultureSpecificValues property can only contain items of type \StructType\Element, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CultureSpecificValues[] = $item;
        
        return $this;
    }
    /**
     * Get ValueType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValueType(): ?string
    {
        return $this->ValueType ?? null;
    }
    /**
     * Set ValueType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $valueType
     * @return \StructType\Element
     */
    public function setValueType(?string $valueType = null): self
    {
        // validation for constraint: string
        if (!is_null($valueType) && !is_string($valueType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valueType, true), gettype($valueType)), __LINE__);
        }
        if (is_null($valueType) || (is_array($valueType) && empty($valueType))) {
            unset($this->ValueType);
        } else {
            $this->ValueType = $valueType;
        }
        
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
        foreach ($values as $elementPropertiesItem) {
            // validation for constraint: itemType
            if (!$elementPropertiesItem instanceof \StructType\Element) {
                $invalidValues[] = is_object($elementPropertiesItem) ? get_class($elementPropertiesItem) : sprintf('%s(%s)', gettype($elementPropertiesItem), var_export($elementPropertiesItem, true));
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
     * @return \StructType\Element
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
     * @return \StructType\Element
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
    /**
     * Get Fields value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Element[]
     */
    public function getFields(): ?array
    {
        return $this->Fields ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFields method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFields method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFieldsForArrayConstraintFromSetFields(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $elementFieldsItem) {
            // validation for constraint: itemType
            if (!$elementFieldsItem instanceof \StructType\Element) {
                $invalidValues[] = is_object($elementFieldsItem) ? get_class($elementFieldsItem) : sprintf('%s(%s)', gettype($elementFieldsItem), var_export($elementFieldsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Fields property can only contain items of type \StructType\Element, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Fields value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\Element[] $fields
     * @return \StructType\Element
     */
    public function setFields(?array $fields = null): self
    {
        // validation for constraint: array
        if ('' !== ($fieldsArrayErrorMessage = self::validateFieldsForArrayConstraintFromSetFields($fields))) {
            throw new InvalidArgumentException($fieldsArrayErrorMessage, __LINE__);
        }
        if (is_null($fields) || (is_array($fields) && empty($fields))) {
            unset($this->Fields);
        } else {
            $this->Fields = $fields;
        }
        
        return $this;
    }
    /**
     * Add item to Fields value
     * @throws InvalidArgumentException
     * @param \StructType\Element $item
     * @return \StructType\Element
     */
    public function addToFields(\StructType\Element $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Element) {
            throw new InvalidArgumentException(sprintf('The Fields property can only contain items of type \StructType\Element, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Fields[] = $item;
        
        return $this;
    }
    /**
     * Get List value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Element[]
     */
    public function getList(): ?array
    {
        return $this->List ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setList method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListForArrayConstraintFromSetList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $elementListItem) {
            // validation for constraint: itemType
            if (!$elementListItem instanceof \StructType\Element) {
                $invalidValues[] = is_object($elementListItem) ? get_class($elementListItem) : sprintf('%s(%s)', gettype($elementListItem), var_export($elementListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The List property can only contain items of type \StructType\Element, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set List value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\Element[] $list
     * @return \StructType\Element
     */
    public function setList(?array $list = null): self
    {
        // validation for constraint: array
        if ('' !== ($listArrayErrorMessage = self::validateListForArrayConstraintFromSetList($list))) {
            throw new InvalidArgumentException($listArrayErrorMessage, __LINE__);
        }
        if (is_null($list) || (is_array($list) && empty($list))) {
            unset($this->List);
        } else {
            $this->List = $list;
        }
        
        return $this;
    }
    /**
     * Add item to List value
     * @throws InvalidArgumentException
     * @param \StructType\Element $item
     * @return \StructType\Element
     */
    public function addToList(\StructType\Element $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Element) {
            throw new InvalidArgumentException(sprintf('The List property can only contain items of type \StructType\Element, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->List[] = $item;
        
        return $this;
    }
    /**
     * Get Tables value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Element[]
     */
    public function getTables(): ?array
    {
        return $this->Tables ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTables method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTables method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTablesForArrayConstraintFromSetTables(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $elementTablesItem) {
            // validation for constraint: itemType
            if (!$elementTablesItem instanceof \StructType\Element) {
                $invalidValues[] = is_object($elementTablesItem) ? get_class($elementTablesItem) : sprintf('%s(%s)', gettype($elementTablesItem), var_export($elementTablesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Tables property can only contain items of type \StructType\Element, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Tables value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\Element[] $tables
     * @return \StructType\Element
     */
    public function setTables(?array $tables = null): self
    {
        // validation for constraint: array
        if ('' !== ($tablesArrayErrorMessage = self::validateTablesForArrayConstraintFromSetTables($tables))) {
            throw new InvalidArgumentException($tablesArrayErrorMessage, __LINE__);
        }
        if (is_null($tables) || (is_array($tables) && empty($tables))) {
            unset($this->Tables);
        } else {
            $this->Tables = $tables;
        }
        
        return $this;
    }
    /**
     * Add item to Tables value
     * @throws InvalidArgumentException
     * @param \StructType\Element $item
     * @return \StructType\Element
     */
    public function addToTables(\StructType\Element $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Element) {
            throw new InvalidArgumentException(sprintf('The Tables property can only contain items of type \StructType\Element, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Tables[] = $item;
        
        return $this;
    }
    /**
     * Get Values value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]
     */
    public function getValues(): ?array
    {
        return $this->Values ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setValues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValues method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValuesForArrayConstraintFromSetValues(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $elementValuesItem) {
            // validation for constraint: itemType
            if (!is_string($elementValuesItem)) {
                $invalidValues[] = is_object($elementValuesItem) ? get_class($elementValuesItem) : sprintf('%s(%s)', gettype($elementValuesItem), var_export($elementValuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Values property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Values value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param string[] $values
     * @return \StructType\Element
     */
    public function setValues(?array $values = null): self
    {
        // validation for constraint: array
        if ('' !== ($valuesArrayErrorMessage = self::validateValuesForArrayConstraintFromSetValues($values))) {
            throw new InvalidArgumentException($valuesArrayErrorMessage, __LINE__);
        }
        if (is_null($values) || (is_array($values) && empty($values))) {
            unset($this->Values);
        } else {
            $this->Values = $values;
        }
        
        return $this;
    }
    /**
     * Add item to Values value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Element
     */
    public function addToValues(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Values property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Values[] = $item;
        
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
        foreach ($values as $elementRowsItem) {
            // validation for constraint: itemType
            if (!$elementRowsItem instanceof \StructType\Row) {
                $invalidValues[] = is_object($elementRowsItem) ? get_class($elementRowsItem) : sprintf('%s(%s)', gettype($elementRowsItem), var_export($elementRowsItem, true));
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
     * @return \StructType\Element
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
     * @return \StructType\Element
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
     * Get BData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]
     */
    public function getBData(): ?array
    {
        return $this->BData ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBData method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBDataForArrayConstraintFromSetBData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $elementBDataItem) {
            // validation for constraint: itemType
            if (!is_string($elementBDataItem)) {
                $invalidValues[] = is_object($elementBDataItem) ? get_class($elementBDataItem) : sprintf('%s(%s)', gettype($elementBDataItem), var_export($elementBDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BData property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param string[] $bData
     * @return \StructType\Element
     */
    public function setBData(?array $bData = null): self
    {
        // validation for constraint: array
        if ('' !== ($bDataArrayErrorMessage = self::validateBDataForArrayConstraintFromSetBData($bData))) {
            throw new InvalidArgumentException($bDataArrayErrorMessage, __LINE__);
        }
        if (is_null($bData) || (is_array($bData) && empty($bData))) {
            unset($this->BData);
        } else {
            $this->BData = $bData;
        }
        
        return $this;
    }
    /**
     * Add item to BData value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Element
     */
    public function addToBData(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The BData property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BData[] = $item;
        
        return $this;
    }
}
