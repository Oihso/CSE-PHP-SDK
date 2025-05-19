<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationInformation StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DestinationInformation extends AbstractStructBase
{
    /**
     * The Client
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Client = null;
    /**
     * The Official
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Official = null;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\DestinationAddress|null
     */
    protected ?\Oihso\CSESDK\StructType\DestinationAddress $Address = null;
    /**
     * The SubwayStation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SubwayStation = null;
    /**
     * The Phone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Phone = null;
    /**
     * The EMail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EMail = null;
    /**
     * The Info
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Info = null;
    /**
     * The Urgency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Urgency = null;
    /**
     * The Cargo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\Cargo|null
     */
    protected ?\Oihso\CSESDK\StructType\Cargo $Cargo = null;
    /**
     * The Products
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\Products[]
     */
    protected ?array $Products = null;
    /**
     * The ProductsProcessingAction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductsProcessingAction = null;
    /**
     * The StoreDependsOnDestination
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $StoreDependsOnDestination = null;
    /**
     * The Materials
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\Materials[]
     */
    protected ?array $Materials = null;
    /**
     * The PVZ
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PVZ = null;
    /**
     * The DeliveryOptions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\DeliveryOptions|null
     */
    protected ?\Oihso\CSESDK\StructType\DeliveryOptions $DeliveryOptions = null;
    /**
     * Constructor method for DestinationInformation
     * @uses DestinationInformation::setClient()
     * @uses DestinationInformation::setOfficial()
     * @uses DestinationInformation::setAddress()
     * @uses DestinationInformation::setSubwayStation()
     * @uses DestinationInformation::setPhone()
     * @uses DestinationInformation::setEMail()
     * @uses DestinationInformation::setInfo()
     * @uses DestinationInformation::setUrgency()
     * @uses DestinationInformation::setCargo()
     * @uses DestinationInformation::setProducts()
     * @uses DestinationInformation::setProductsProcessingAction()
     * @uses DestinationInformation::setStoreDependsOnDestination()
     * @uses DestinationInformation::setMaterials()
     * @uses DestinationInformation::setPVZ()
     * @uses DestinationInformation::setDeliveryOptions()
     * @param string $client
     * @param string $official
     * @param \Oihso\CSESDK\StructType\DestinationAddress $address
     * @param string $subwayStation
     * @param string $phone
     * @param string $eMail
     * @param string $info
     * @param string $urgency
     * @param \Oihso\CSESDK\StructType\Cargo $cargo
     * @param \Oihso\CSESDK\StructType\Products[] $products
     * @param string $productsProcessingAction
     * @param bool $storeDependsOnDestination
     * @param \Oihso\CSESDK\StructType\Materials[] $materials
     * @param string $pVZ
     * @param \Oihso\CSESDK\StructType\DeliveryOptions $deliveryOptions
     */
    public function __construct(?string $client = null, ?string $official = null, ?\Oihso\CSESDK\StructType\DestinationAddress $address = null, ?string $subwayStation = null, ?string $phone = null, ?string $eMail = null, ?string $info = null, ?string $urgency = null, ?\Oihso\CSESDK\StructType\Cargo $cargo = null, ?array $products = null, ?string $productsProcessingAction = null, ?bool $storeDependsOnDestination = null, ?array $materials = null, ?string $pVZ = null, ?\Oihso\CSESDK\StructType\DeliveryOptions $deliveryOptions = null)
    {
        $this
            ->setClient($client)
            ->setOfficial($official)
            ->setAddress($address)
            ->setSubwayStation($subwayStation)
            ->setPhone($phone)
            ->setEMail($eMail)
            ->setInfo($info)
            ->setUrgency($urgency)
            ->setCargo($cargo)
            ->setProducts($products)
            ->setProductsProcessingAction($productsProcessingAction)
            ->setStoreDependsOnDestination($storeDependsOnDestination)
            ->setMaterials($materials)
            ->setPVZ($pVZ)
            ->setDeliveryOptions($deliveryOptions);
    }
    /**
     * Get Client value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getClient(): ?string
    {
        return $this->Client ?? null;
    }
    /**
     * Set Client value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $client
     * @return \Oihso\CSESDK\StructType\DestinationInformation
     */
    public function setClient(?string $client = null): self
    {
        // validation for constraint: string
        if (!is_null($client) && !is_string($client)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($client, true), gettype($client)), __LINE__);
        }
        if (is_null($client) || (is_array($client) && empty($client))) {
            unset($this->Client);
        } else {
            $this->Client = $client;
        }
        
        return $this;
    }
    /**
     * Get Official value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOfficial(): ?string
    {
        return $this->Official ?? null;
    }
    /**
     * Set Official value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $official
     * @return \Oihso\CSESDK\StructType\DestinationInformation
     */
    public function setOfficial(?string $official = null): self
    {
        // validation for constraint: string
        if (!is_null($official) && !is_string($official)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($official, true), gettype($official)), __LINE__);
        }
        if (is_null($official) || (is_array($official) && empty($official))) {
            unset($this->Official);
        } else {
            $this->Official = $official;
        }
        
        return $this;
    }
    /**
     * Get Address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Oihso\CSESDK\StructType\DestinationAddress|null
     */
    public function getAddress(): ?\Oihso\CSESDK\StructType\DestinationAddress
    {
        return $this->Address ?? null;
    }
    /**
     * Set Address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Oihso\CSESDK\StructType\DestinationAddress $address
     * @return \Oihso\CSESDK\StructType\DestinationInformation
     */
    public function setAddress(?\Oihso\CSESDK\StructType\DestinationAddress $address = null): self
    {
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->Address);
        } else {
            $this->Address = $address;
        }
        
        return $this;
    }
    /**
     * Get SubwayStation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSubwayStation(): ?string
    {
        return $this->SubwayStation ?? null;
    }
    /**
     * Set SubwayStation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $subwayStation
     * @return \Oihso\CSESDK\StructType\DestinationInformation
     */
    public function setSubwayStation(?string $subwayStation = null): self
    {
        // validation for constraint: string
        if (!is_null($subwayStation) && !is_string($subwayStation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subwayStation, true), gettype($subwayStation)), __LINE__);
        }
        if (is_null($subwayStation) || (is_array($subwayStation) && empty($subwayStation))) {
            unset($this->SubwayStation);
        } else {
            $this->SubwayStation = $subwayStation;
        }
        
        return $this;
    }
    /**
     * Get Phone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->Phone ?? null;
    }
    /**
     * Set Phone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phone
     * @return \Oihso\CSESDK\StructType\DestinationInformation
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        if (is_null($phone) || (is_array($phone) && empty($phone))) {
            unset($this->Phone);
        } else {
            $this->Phone = $phone;
        }
        
        return $this;
    }
    /**
     * Get EMail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEMail(): ?string
    {
        return $this->EMail ?? null;
    }
    /**
     * Set EMail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $eMail
     * @return \Oihso\CSESDK\StructType\DestinationInformation
     */
    public function setEMail(?string $eMail = null): self
    {
        // validation for constraint: string
        if (!is_null($eMail) && !is_string($eMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eMail, true), gettype($eMail)), __LINE__);
        }
        if (is_null($eMail) || (is_array($eMail) && empty($eMail))) {
            unset($this->EMail);
        } else {
            $this->EMail = $eMail;
        }
        
        return $this;
    }
    /**
     * Get Info value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInfo(): ?string
    {
        return $this->Info ?? null;
    }
    /**
     * Set Info value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $info
     * @return \Oihso\CSESDK\StructType\DestinationInformation
     */
    public function setInfo(?string $info = null): self
    {
        // validation for constraint: string
        if (!is_null($info) && !is_string($info)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($info, true), gettype($info)), __LINE__);
        }
        if (is_null($info) || (is_array($info) && empty($info))) {
            unset($this->Info);
        } else {
            $this->Info = $info;
        }
        
        return $this;
    }
    /**
     * Get Urgency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUrgency(): ?string
    {
        return $this->Urgency ?? null;
    }
    /**
     * Set Urgency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $urgency
     * @return \Oihso\CSESDK\StructType\DestinationInformation
     */
    public function setUrgency(?string $urgency = null): self
    {
        // validation for constraint: string
        if (!is_null($urgency) && !is_string($urgency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($urgency, true), gettype($urgency)), __LINE__);
        }
        if (is_null($urgency) || (is_array($urgency) && empty($urgency))) {
            unset($this->Urgency);
        } else {
            $this->Urgency = $urgency;
        }
        
        return $this;
    }
    /**
     * Get Cargo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Oihso\CSESDK\StructType\Cargo|null
     */
    public function getCargo(): ?\Oihso\CSESDK\StructType\Cargo
    {
        return $this->Cargo ?? null;
    }
    /**
     * Set Cargo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Oihso\CSESDK\StructType\Cargo $cargo
     * @return \Oihso\CSESDK\StructType\DestinationInformation
     */
    public function setCargo(?\Oihso\CSESDK\StructType\Cargo $cargo = null): self
    {
        if (is_null($cargo) || (is_array($cargo) && empty($cargo))) {
            unset($this->Cargo);
        } else {
            $this->Cargo = $cargo;
        }
        
        return $this;
    }
    /**
     * Get Products value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Oihso\CSESDK\StructType\Products[]
     */
    public function getProducts(): ?array
    {
        return $this->Products ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setProducts method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProducts method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductsForArrayConstraintFromSetProducts(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $destinationInformationProductsItem) {
            // validation for constraint: itemType
            if (!$destinationInformationProductsItem instanceof \Oihso\CSESDK\StructType\Products) {
                $invalidValues[] = is_object($destinationInformationProductsItem) ? get_class($destinationInformationProductsItem) : sprintf('%s(%s)', gettype($destinationInformationProductsItem), var_export($destinationInformationProductsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Products property can only contain items of type \Oihso\CSESDK\StructType\Products, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Products value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Oihso\CSESDK\StructType\Products[] $products
     * @return \Oihso\CSESDK\StructType\DestinationInformation
     */
    public function setProducts(?array $products = null): self
    {
        // validation for constraint: array
        if ('' !== ($productsArrayErrorMessage = self::validateProductsForArrayConstraintFromSetProducts($products))) {
            throw new InvalidArgumentException($productsArrayErrorMessage, __LINE__);
        }
        if (is_null($products) || (is_array($products) && empty($products))) {
            unset($this->Products);
        } else {
            $this->Products = $products;
        }
        
        return $this;
    }
    /**
     * Add item to Products value
     * @throws InvalidArgumentException
     * @param \Oihso\CSESDK\StructType\Products $item
     * @return \Oihso\CSESDK\StructType\DestinationInformation
     */
    public function addToProducts(\Oihso\CSESDK\StructType\Products $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Oihso\CSESDK\StructType\Products) {
            throw new InvalidArgumentException(sprintf('The Products property can only contain items of type \Oihso\CSESDK\StructType\Products, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Products[] = $item;
        
        return $this;
    }
    /**
     * Get ProductsProcessingAction value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductsProcessingAction(): ?string
    {
        return $this->ProductsProcessingAction ?? null;
    }
    /**
     * Set ProductsProcessingAction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productsProcessingAction
     * @return \Oihso\CSESDK\StructType\DestinationInformation
     */
    public function setProductsProcessingAction(?string $productsProcessingAction = null): self
    {
        // validation for constraint: string
        if (!is_null($productsProcessingAction) && !is_string($productsProcessingAction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productsProcessingAction, true), gettype($productsProcessingAction)), __LINE__);
        }
        if (is_null($productsProcessingAction) || (is_array($productsProcessingAction) && empty($productsProcessingAction))) {
            unset($this->ProductsProcessingAction);
        } else {
            $this->ProductsProcessingAction = $productsProcessingAction;
        }
        
        return $this;
    }
    /**
     * Get StoreDependsOnDestination value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getStoreDependsOnDestination(): ?bool
    {
        return $this->StoreDependsOnDestination ?? null;
    }
    /**
     * Set StoreDependsOnDestination value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $storeDependsOnDestination
     * @return \Oihso\CSESDK\StructType\DestinationInformation
     */
    public function setStoreDependsOnDestination(?bool $storeDependsOnDestination = null): self
    {
        // validation for constraint: boolean
        if (!is_null($storeDependsOnDestination) && !is_bool($storeDependsOnDestination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($storeDependsOnDestination, true), gettype($storeDependsOnDestination)), __LINE__);
        }
        if (is_null($storeDependsOnDestination) || (is_array($storeDependsOnDestination) && empty($storeDependsOnDestination))) {
            unset($this->StoreDependsOnDestination);
        } else {
            $this->StoreDependsOnDestination = $storeDependsOnDestination;
        }
        
        return $this;
    }
    /**
     * Get Materials value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Oihso\CSESDK\StructType\Materials[]
     */
    public function getMaterials(): ?array
    {
        return $this->Materials ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMaterials method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMaterials method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMaterialsForArrayConstraintFromSetMaterials(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $destinationInformationMaterialsItem) {
            // validation for constraint: itemType
            if (!$destinationInformationMaterialsItem instanceof \Oihso\CSESDK\StructType\Materials) {
                $invalidValues[] = is_object($destinationInformationMaterialsItem) ? get_class($destinationInformationMaterialsItem) : sprintf('%s(%s)', gettype($destinationInformationMaterialsItem), var_export($destinationInformationMaterialsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Materials property can only contain items of type \Oihso\CSESDK\StructType\Materials, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Materials value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Oihso\CSESDK\StructType\Materials[] $materials
     * @return \Oihso\CSESDK\StructType\DestinationInformation
     */
    public function setMaterials(?array $materials = null): self
    {
        // validation for constraint: array
        if ('' !== ($materialsArrayErrorMessage = self::validateMaterialsForArrayConstraintFromSetMaterials($materials))) {
            throw new InvalidArgumentException($materialsArrayErrorMessage, __LINE__);
        }
        if (is_null($materials) || (is_array($materials) && empty($materials))) {
            unset($this->Materials);
        } else {
            $this->Materials = $materials;
        }
        
        return $this;
    }
    /**
     * Add item to Materials value
     * @throws InvalidArgumentException
     * @param \Oihso\CSESDK\StructType\Materials $item
     * @return \Oihso\CSESDK\StructType\DestinationInformation
     */
    public function addToMaterials(\Oihso\CSESDK\StructType\Materials $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Oihso\CSESDK\StructType\Materials) {
            throw new InvalidArgumentException(sprintf('The Materials property can only contain items of type \Oihso\CSESDK\StructType\Materials, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Materials[] = $item;
        
        return $this;
    }
    /**
     * Get PVZ value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPVZ(): ?string
    {
        return $this->PVZ ?? null;
    }
    /**
     * Set PVZ value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pVZ
     * @return \Oihso\CSESDK\StructType\DestinationInformation
     */
    public function setPVZ(?string $pVZ = null): self
    {
        // validation for constraint: string
        if (!is_null($pVZ) && !is_string($pVZ)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pVZ, true), gettype($pVZ)), __LINE__);
        }
        if (is_null($pVZ) || (is_array($pVZ) && empty($pVZ))) {
            unset($this->PVZ);
        } else {
            $this->PVZ = $pVZ;
        }
        
        return $this;
    }
    /**
     * Get DeliveryOptions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Oihso\CSESDK\StructType\DeliveryOptions|null
     */
    public function getDeliveryOptions(): ?\Oihso\CSESDK\StructType\DeliveryOptions
    {
        return $this->DeliveryOptions ?? null;
    }
    /**
     * Set DeliveryOptions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Oihso\CSESDK\StructType\DeliveryOptions $deliveryOptions
     * @return \Oihso\CSESDK\StructType\DestinationInformation
     */
    public function setDeliveryOptions(?\Oihso\CSESDK\StructType\DeliveryOptions $deliveryOptions = null): self
    {
        if (is_null($deliveryOptions) || (is_array($deliveryOptions) && empty($deliveryOptions))) {
            unset($this->DeliveryOptions);
        } else {
            $this->DeliveryOptions = $deliveryOptions;
        }
        
        return $this;
    }
}
