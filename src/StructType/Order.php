<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Order StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Order extends AbstractStructBase
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
     * The ClientContact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ClientContact = null;
    /**
     * The Contract
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Contract = null;
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CreateDate = null;
    /**
     * The DeliveryDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DeliveryDate = null;
    /**
     * The DeliveryMethod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DeliveryMethod = null;
    /**
     * The DeliveryTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DeliveryTime = null;
    /**
     * The Department
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Department = null;
    /**
     * The DescriptionForTheVPDReturn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DescriptionForTheVPDReturn = null;
    /**
     * The Office
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Office = null;
    /**
     * The Official
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Official = null;
    /**
     * The Project
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Project = null;
    /**
     * The Recipient
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\DestinationInformation[]
     */
    protected ?array $Recipient = null;
    /**
     * The ReplyEMail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ReplyEMail = null;
    /**
     * The ReplySMSPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ReplySMSPhone = null;
    /**
     * The Sender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\DestinationInformation|null
     */
    protected ?\Oihso\CSESDK\StructType\DestinationInformation $Sender = null;
    /**
     * The TakeDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TakeDate = null;
    /**
     * The TakeTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TakeTime = null;
    /**
     * The TypeOfCargo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TypeOfCargo = null;
    /**
     * The TypeOfPayer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TypeOfPayer = null;
    /**
     * The Urgency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Urgency = null;
    /**
     * The WayOfPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $WayOfPayment = null;
    /**
     * The WithReturn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $WithReturn = null;
    /**
     * The AutoType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AutoType = null;
    /**
     * The AutoModel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AutoModel = null;
    /**
     * The SenderPowerOfAttorney
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $SenderPowerOfAttorney = null;
    /**
     * The RecipientPowerOfAttorney
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $RecipientPowerOfAttorney = null;
    /**
     * The OrderForAutoReservation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $OrderForAutoReservation = null;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Comment = null;
    /**
     * The StoreDoor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $StoreDoor = null;
    /**
     * The DeliveryOfCargo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DeliveryOfCargo = null;
    /**
     * The Insurance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $Insurance = null;
    /**
     * The Declared
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $Declared = null;
    /**
     * The PersonallyInHand
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $PersonallyInHand = null;
    /**
     * The LUW
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $LUW = null;
    /**
     * The WithSignature
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $WithSignature = null;
    /**
     * The TypeOfOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TypeOfOrder = null;
    /**
     * The Distribution
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $Distribution = null;
    /**
     * The Notifications
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\Notifications[]
     */
    protected ?array $Notifications = null;
    /**
     * The CallCourer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $CallCourer = null;
    /**
     * The TypeOfParentForWaybill
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TypeOfParentForWaybill = null;
    /**
     * The ParentOrderForWaybill
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ParentOrderForWaybill = null;
    /**
     * The ClientNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ClientNumber = null;
    /**
     * The ArrayOfDocumentsPhoto
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\DocumentsPhoto[]
     */
    protected ?array $ArrayOfDocumentsPhoto = null;
    /**
     * The Repository
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Repository = null;
    /**
     * The ClientCodes
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\ListOfCorrespondences[]
     */
    protected ?array $ClientCodes = null;
    /**
     * The DeliveryDateOf
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DeliveryDateOf = null;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\ListOfCorrespondences[]
     */
    protected ?array $Services = null;
    /**
     * The AdditionalServices
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\ListOfCorrespondences[]
     */
    protected ?array $AdditionalServices = null;
    /**
     * Constructor method for Order
     * @uses Order::setClient()
     * @uses Order::setClientContact()
     * @uses Order::setContract()
     * @uses Order::setCreateDate()
     * @uses Order::setDeliveryDate()
     * @uses Order::setDeliveryMethod()
     * @uses Order::setDeliveryTime()
     * @uses Order::setDepartment()
     * @uses Order::setDescriptionForTheVPDReturn()
     * @uses Order::setOffice()
     * @uses Order::setOfficial()
     * @uses Order::setProject()
     * @uses Order::setRecipient()
     * @uses Order::setReplyEMail()
     * @uses Order::setReplySMSPhone()
     * @uses Order::setSender()
     * @uses Order::setTakeDate()
     * @uses Order::setTakeTime()
     * @uses Order::setTypeOfCargo()
     * @uses Order::setTypeOfPayer()
     * @uses Order::setUrgency()
     * @uses Order::setWayOfPayment()
     * @uses Order::setWithReturn()
     * @uses Order::setAutoType()
     * @uses Order::setAutoModel()
     * @uses Order::setSenderPowerOfAttorney()
     * @uses Order::setRecipientPowerOfAttorney()
     * @uses Order::setOrderForAutoReservation()
     * @uses Order::setComment()
     * @uses Order::setStoreDoor()
     * @uses Order::setDeliveryOfCargo()
     * @uses Order::setInsurance()
     * @uses Order::setDeclared()
     * @uses Order::setPersonallyInHand()
     * @uses Order::setLUW()
     * @uses Order::setWithSignature()
     * @uses Order::setTypeOfOrder()
     * @uses Order::setDistribution()
     * @uses Order::setNotifications()
     * @uses Order::setCallCourer()
     * @uses Order::setTypeOfParentForWaybill()
     * @uses Order::setParentOrderForWaybill()
     * @uses Order::setClientNumber()
     * @uses Order::setArrayOfDocumentsPhoto()
     * @uses Order::setRepository()
     * @uses Order::setClientCodes()
     * @uses Order::setDeliveryDateOf()
     * @uses Order::setServices()
     * @uses Order::setAdditionalServices()
     * @param string $client
     * @param string $clientContact
     * @param string $contract
     * @param string $createDate
     * @param string $deliveryDate
     * @param string $deliveryMethod
     * @param string $deliveryTime
     * @param string $department
     * @param string $descriptionForTheVPDReturn
     * @param string $office
     * @param string $official
     * @param string $project
     * @param \Oihso\CSESDK\StructType\DestinationInformation[] $recipient
     * @param string $replyEMail
     * @param string $replySMSPhone
     * @param \Oihso\CSESDK\StructType\DestinationInformation $sender
     * @param string $takeDate
     * @param string $takeTime
     * @param string $typeOfCargo
     * @param string $typeOfPayer
     * @param string $urgency
     * @param string $wayOfPayment
     * @param bool $withReturn
     * @param string $autoType
     * @param string $autoModel
     * @param int $senderPowerOfAttorney
     * @param int $recipientPowerOfAttorney
     * @param int $orderForAutoReservation
     * @param string $comment
     * @param bool $storeDoor
     * @param string $deliveryOfCargo
     * @param bool $insurance
     * @param bool $declared
     * @param bool $personallyInHand
     * @param bool $lUW
     * @param bool $withSignature
     * @param string $typeOfOrder
     * @param bool $distribution
     * @param \Oihso\CSESDK\StructType\Notifications[] $notifications
     * @param bool $callCourer
     * @param string $typeOfParentForWaybill
     * @param string $parentOrderForWaybill
     * @param string $clientNumber
     * @param \Oihso\CSESDK\StructType\DocumentsPhoto[] $arrayOfDocumentsPhoto
     * @param string $repository
     * @param \Oihso\CSESDK\StructType\ListOfCorrespondences[] $clientCodes
     * @param string $deliveryDateOf
     * @param \Oihso\CSESDK\StructType\ListOfCorrespondences[] $services
     * @param \Oihso\CSESDK\StructType\ListOfCorrespondences[] $additionalServices
     */
    public function __construct(?string $client = null, ?string $clientContact = null, ?string $contract = null, ?string $createDate = null, ?string $deliveryDate = null, ?string $deliveryMethod = null, ?string $deliveryTime = null, ?string $department = null, ?string $descriptionForTheVPDReturn = null, ?string $office = null, ?string $official = null, ?string $project = null, ?array $recipient = null, ?string $replyEMail = null, ?string $replySMSPhone = null, ?\Oihso\CSESDK\StructType\DestinationInformation $sender = null, ?string $takeDate = null, ?string $takeTime = null, ?string $typeOfCargo = null, ?string $typeOfPayer = null, ?string $urgency = null, ?string $wayOfPayment = null, ?bool $withReturn = null, ?string $autoType = null, ?string $autoModel = null, ?int $senderPowerOfAttorney = null, ?int $recipientPowerOfAttorney = null, ?int $orderForAutoReservation = null, ?string $comment = null, ?bool $storeDoor = null, ?string $deliveryOfCargo = null, ?bool $insurance = null, ?bool $declared = null, ?bool $personallyInHand = null, ?bool $lUW = null, ?bool $withSignature = null, ?string $typeOfOrder = null, ?bool $distribution = null, ?array $notifications = null, ?bool $callCourer = null, ?string $typeOfParentForWaybill = null, ?string $parentOrderForWaybill = null, ?string $clientNumber = null, ?array $arrayOfDocumentsPhoto = null, ?string $repository = null, ?array $clientCodes = null, ?string $deliveryDateOf = null, ?array $services = null, ?array $additionalServices = null)
    {
        $this
            ->setClient($client)
            ->setClientContact($clientContact)
            ->setContract($contract)
            ->setCreateDate($createDate)
            ->setDeliveryDate($deliveryDate)
            ->setDeliveryMethod($deliveryMethod)
            ->setDeliveryTime($deliveryTime)
            ->setDepartment($department)
            ->setDescriptionForTheVPDReturn($descriptionForTheVPDReturn)
            ->setOffice($office)
            ->setOfficial($official)
            ->setProject($project)
            ->setRecipient($recipient)
            ->setReplyEMail($replyEMail)
            ->setReplySMSPhone($replySMSPhone)
            ->setSender($sender)
            ->setTakeDate($takeDate)
            ->setTakeTime($takeTime)
            ->setTypeOfCargo($typeOfCargo)
            ->setTypeOfPayer($typeOfPayer)
            ->setUrgency($urgency)
            ->setWayOfPayment($wayOfPayment)
            ->setWithReturn($withReturn)
            ->setAutoType($autoType)
            ->setAutoModel($autoModel)
            ->setSenderPowerOfAttorney($senderPowerOfAttorney)
            ->setRecipientPowerOfAttorney($recipientPowerOfAttorney)
            ->setOrderForAutoReservation($orderForAutoReservation)
            ->setComment($comment)
            ->setStoreDoor($storeDoor)
            ->setDeliveryOfCargo($deliveryOfCargo)
            ->setInsurance($insurance)
            ->setDeclared($declared)
            ->setPersonallyInHand($personallyInHand)
            ->setLUW($lUW)
            ->setWithSignature($withSignature)
            ->setTypeOfOrder($typeOfOrder)
            ->setDistribution($distribution)
            ->setNotifications($notifications)
            ->setCallCourer($callCourer)
            ->setTypeOfParentForWaybill($typeOfParentForWaybill)
            ->setParentOrderForWaybill($parentOrderForWaybill)
            ->setClientNumber($clientNumber)
            ->setArrayOfDocumentsPhoto($arrayOfDocumentsPhoto)
            ->setRepository($repository)
            ->setClientCodes($clientCodes)
            ->setDeliveryDateOf($deliveryDateOf)
            ->setServices($services)
            ->setAdditionalServices($additionalServices);
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
     * @return \Oihso\CSESDK\StructType\Order
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
     * Get ClientContact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getClientContact(): ?string
    {
        return $this->ClientContact ?? null;
    }
    /**
     * Set ClientContact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $clientContact
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setClientContact(?string $clientContact = null): self
    {
        // validation for constraint: string
        if (!is_null($clientContact) && !is_string($clientContact)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientContact, true), gettype($clientContact)), __LINE__);
        }
        if (is_null($clientContact) || (is_array($clientContact) && empty($clientContact))) {
            unset($this->ClientContact);
        } else {
            $this->ClientContact = $clientContact;
        }
        
        return $this;
    }
    /**
     * Get Contract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContract(): ?string
    {
        return $this->Contract ?? null;
    }
    /**
     * Set Contract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contract
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setContract(?string $contract = null): self
    {
        // validation for constraint: string
        if (!is_null($contract) && !is_string($contract)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contract, true), gettype($contract)), __LINE__);
        }
        if (is_null($contract) || (is_array($contract) && empty($contract))) {
            unset($this->Contract);
        } else {
            $this->Contract = $contract;
        }
        
        return $this;
    }
    /**
     * Get CreateDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreateDate(): ?string
    {
        return $this->CreateDate ?? null;
    }
    /**
     * Set CreateDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $createDate
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setCreateDate(?string $createDate = null): self
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createDate, true), gettype($createDate)), __LINE__);
        }
        if (is_null($createDate) || (is_array($createDate) && empty($createDate))) {
            unset($this->CreateDate);
        } else {
            $this->CreateDate = $createDate;
        }
        
        return $this;
    }
    /**
     * Get DeliveryDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryDate(): ?string
    {
        return $this->DeliveryDate ?? null;
    }
    /**
     * Set DeliveryDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryDate
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setDeliveryDate(?string $deliveryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDate, true), gettype($deliveryDate)), __LINE__);
        }
        if (is_null($deliveryDate) || (is_array($deliveryDate) && empty($deliveryDate))) {
            unset($this->DeliveryDate);
        } else {
            $this->DeliveryDate = $deliveryDate;
        }
        
        return $this;
    }
    /**
     * Get DeliveryMethod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryMethod(): ?string
    {
        return $this->DeliveryMethod ?? null;
    }
    /**
     * Set DeliveryMethod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryMethod
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setDeliveryMethod(?string $deliveryMethod = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryMethod) && !is_string($deliveryMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryMethod, true), gettype($deliveryMethod)), __LINE__);
        }
        if (is_null($deliveryMethod) || (is_array($deliveryMethod) && empty($deliveryMethod))) {
            unset($this->DeliveryMethod);
        } else {
            $this->DeliveryMethod = $deliveryMethod;
        }
        
        return $this;
    }
    /**
     * Get DeliveryTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryTime(): ?string
    {
        return $this->DeliveryTime ?? null;
    }
    /**
     * Set DeliveryTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryTime
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setDeliveryTime(?string $deliveryTime = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryTime) && !is_string($deliveryTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryTime, true), gettype($deliveryTime)), __LINE__);
        }
        if (is_null($deliveryTime) || (is_array($deliveryTime) && empty($deliveryTime))) {
            unset($this->DeliveryTime);
        } else {
            $this->DeliveryTime = $deliveryTime;
        }
        
        return $this;
    }
    /**
     * Get Department value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDepartment(): ?string
    {
        return $this->Department ?? null;
    }
    /**
     * Set Department value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $department
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setDepartment(?string $department = null): self
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($department, true), gettype($department)), __LINE__);
        }
        if (is_null($department) || (is_array($department) && empty($department))) {
            unset($this->Department);
        } else {
            $this->Department = $department;
        }
        
        return $this;
    }
    /**
     * Get DescriptionForTheVPDReturn value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescriptionForTheVPDReturn(): ?string
    {
        return $this->DescriptionForTheVPDReturn ?? null;
    }
    /**
     * Set DescriptionForTheVPDReturn value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $descriptionForTheVPDReturn
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setDescriptionForTheVPDReturn(?string $descriptionForTheVPDReturn = null): self
    {
        // validation for constraint: string
        if (!is_null($descriptionForTheVPDReturn) && !is_string($descriptionForTheVPDReturn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descriptionForTheVPDReturn, true), gettype($descriptionForTheVPDReturn)), __LINE__);
        }
        if (is_null($descriptionForTheVPDReturn) || (is_array($descriptionForTheVPDReturn) && empty($descriptionForTheVPDReturn))) {
            unset($this->DescriptionForTheVPDReturn);
        } else {
            $this->DescriptionForTheVPDReturn = $descriptionForTheVPDReturn;
        }
        
        return $this;
    }
    /**
     * Get Office value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOffice(): ?string
    {
        return $this->Office ?? null;
    }
    /**
     * Set Office value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $office
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setOffice(?string $office = null): self
    {
        // validation for constraint: string
        if (!is_null($office) && !is_string($office)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($office, true), gettype($office)), __LINE__);
        }
        if (is_null($office) || (is_array($office) && empty($office))) {
            unset($this->Office);
        } else {
            $this->Office = $office;
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
     * @return \Oihso\CSESDK\StructType\Order
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
     * Get Project value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProject(): ?string
    {
        return $this->Project ?? null;
    }
    /**
     * Set Project value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $project
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setProject(?string $project = null): self
    {
        // validation for constraint: string
        if (!is_null($project) && !is_string($project)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($project, true), gettype($project)), __LINE__);
        }
        if (is_null($project) || (is_array($project) && empty($project))) {
            unset($this->Project);
        } else {
            $this->Project = $project;
        }
        
        return $this;
    }
    /**
     * Get Recipient value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Oihso\CSESDK\StructType\DestinationInformation[]
     */
    public function getRecipient(): ?array
    {
        return $this->Recipient ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRecipient method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipient method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecipientForArrayConstraintFromSetRecipient(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderRecipientItem) {
            // validation for constraint: itemType
            if (!$orderRecipientItem instanceof \Oihso\CSESDK\StructType\DestinationInformation) {
                $invalidValues[] = is_object($orderRecipientItem) ? get_class($orderRecipientItem) : sprintf('%s(%s)', gettype($orderRecipientItem), var_export($orderRecipientItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Recipient property can only contain items of type \Oihso\CSESDK\StructType\DestinationInformation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Recipient value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Oihso\CSESDK\StructType\DestinationInformation[] $recipient
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setRecipient(?array $recipient = null): self
    {
        // validation for constraint: array
        if ('' !== ($recipientArrayErrorMessage = self::validateRecipientForArrayConstraintFromSetRecipient($recipient))) {
            throw new InvalidArgumentException($recipientArrayErrorMessage, __LINE__);
        }
        if (is_null($recipient) || (is_array($recipient) && empty($recipient))) {
            unset($this->Recipient);
        } else {
            $this->Recipient = $recipient;
        }
        
        return $this;
    }
    /**
     * Add item to Recipient value
     * @throws InvalidArgumentException
     * @param \Oihso\CSESDK\StructType\DestinationInformation $item
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function addToRecipient(\Oihso\CSESDK\StructType\DestinationInformation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Oihso\CSESDK\StructType\DestinationInformation) {
            throw new InvalidArgumentException(sprintf('The Recipient property can only contain items of type \Oihso\CSESDK\StructType\DestinationInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Recipient[] = $item;
        
        return $this;
    }
    /**
     * Get ReplyEMail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReplyEMail(): ?string
    {
        return $this->ReplyEMail ?? null;
    }
    /**
     * Set ReplyEMail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $replyEMail
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setReplyEMail(?string $replyEMail = null): self
    {
        // validation for constraint: string
        if (!is_null($replyEMail) && !is_string($replyEMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($replyEMail, true), gettype($replyEMail)), __LINE__);
        }
        if (is_null($replyEMail) || (is_array($replyEMail) && empty($replyEMail))) {
            unset($this->ReplyEMail);
        } else {
            $this->ReplyEMail = $replyEMail;
        }
        
        return $this;
    }
    /**
     * Get ReplySMSPhone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReplySMSPhone(): ?string
    {
        return $this->ReplySMSPhone ?? null;
    }
    /**
     * Set ReplySMSPhone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $replySMSPhone
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setReplySMSPhone(?string $replySMSPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($replySMSPhone) && !is_string($replySMSPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($replySMSPhone, true), gettype($replySMSPhone)), __LINE__);
        }
        if (is_null($replySMSPhone) || (is_array($replySMSPhone) && empty($replySMSPhone))) {
            unset($this->ReplySMSPhone);
        } else {
            $this->ReplySMSPhone = $replySMSPhone;
        }
        
        return $this;
    }
    /**
     * Get Sender value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Oihso\CSESDK\StructType\DestinationInformation|null
     */
    public function getSender(): ?\Oihso\CSESDK\StructType\DestinationInformation
    {
        return $this->Sender ?? null;
    }
    /**
     * Set Sender value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Oihso\CSESDK\StructType\DestinationInformation $sender
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setSender(?\Oihso\CSESDK\StructType\DestinationInformation $sender = null): self
    {
        if (is_null($sender) || (is_array($sender) && empty($sender))) {
            unset($this->Sender);
        } else {
            $this->Sender = $sender;
        }
        
        return $this;
    }
    /**
     * Get TakeDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTakeDate(): ?string
    {
        return $this->TakeDate ?? null;
    }
    /**
     * Set TakeDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $takeDate
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setTakeDate(?string $takeDate = null): self
    {
        // validation for constraint: string
        if (!is_null($takeDate) && !is_string($takeDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($takeDate, true), gettype($takeDate)), __LINE__);
        }
        if (is_null($takeDate) || (is_array($takeDate) && empty($takeDate))) {
            unset($this->TakeDate);
        } else {
            $this->TakeDate = $takeDate;
        }
        
        return $this;
    }
    /**
     * Get TakeTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTakeTime(): ?string
    {
        return $this->TakeTime ?? null;
    }
    /**
     * Set TakeTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $takeTime
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setTakeTime(?string $takeTime = null): self
    {
        // validation for constraint: string
        if (!is_null($takeTime) && !is_string($takeTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($takeTime, true), gettype($takeTime)), __LINE__);
        }
        if (is_null($takeTime) || (is_array($takeTime) && empty($takeTime))) {
            unset($this->TakeTime);
        } else {
            $this->TakeTime = $takeTime;
        }
        
        return $this;
    }
    /**
     * Get TypeOfCargo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTypeOfCargo(): ?string
    {
        return $this->TypeOfCargo ?? null;
    }
    /**
     * Set TypeOfCargo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $typeOfCargo
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setTypeOfCargo(?string $typeOfCargo = null): self
    {
        // validation for constraint: string
        if (!is_null($typeOfCargo) && !is_string($typeOfCargo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeOfCargo, true), gettype($typeOfCargo)), __LINE__);
        }
        if (is_null($typeOfCargo) || (is_array($typeOfCargo) && empty($typeOfCargo))) {
            unset($this->TypeOfCargo);
        } else {
            $this->TypeOfCargo = $typeOfCargo;
        }
        
        return $this;
    }
    /**
     * Get TypeOfPayer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTypeOfPayer(): ?string
    {
        return $this->TypeOfPayer ?? null;
    }
    /**
     * Set TypeOfPayer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $typeOfPayer
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setTypeOfPayer(?string $typeOfPayer = null): self
    {
        // validation for constraint: string
        if (!is_null($typeOfPayer) && !is_string($typeOfPayer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeOfPayer, true), gettype($typeOfPayer)), __LINE__);
        }
        if (is_null($typeOfPayer) || (is_array($typeOfPayer) && empty($typeOfPayer))) {
            unset($this->TypeOfPayer);
        } else {
            $this->TypeOfPayer = $typeOfPayer;
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
     * @return \Oihso\CSESDK\StructType\Order
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
     * Get WayOfPayment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWayOfPayment(): ?string
    {
        return $this->WayOfPayment ?? null;
    }
    /**
     * Set WayOfPayment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $wayOfPayment
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setWayOfPayment(?string $wayOfPayment = null): self
    {
        // validation for constraint: string
        if (!is_null($wayOfPayment) && !is_string($wayOfPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wayOfPayment, true), gettype($wayOfPayment)), __LINE__);
        }
        if (is_null($wayOfPayment) || (is_array($wayOfPayment) && empty($wayOfPayment))) {
            unset($this->WayOfPayment);
        } else {
            $this->WayOfPayment = $wayOfPayment;
        }
        
        return $this;
    }
    /**
     * Get WithReturn value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getWithReturn(): ?bool
    {
        return $this->WithReturn ?? null;
    }
    /**
     * Set WithReturn value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $withReturn
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setWithReturn(?bool $withReturn = null): self
    {
        // validation for constraint: boolean
        if (!is_null($withReturn) && !is_bool($withReturn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($withReturn, true), gettype($withReturn)), __LINE__);
        }
        if (is_null($withReturn) || (is_array($withReturn) && empty($withReturn))) {
            unset($this->WithReturn);
        } else {
            $this->WithReturn = $withReturn;
        }
        
        return $this;
    }
    /**
     * Get AutoType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAutoType(): ?string
    {
        return $this->AutoType ?? null;
    }
    /**
     * Set AutoType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $autoType
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setAutoType(?string $autoType = null): self
    {
        // validation for constraint: string
        if (!is_null($autoType) && !is_string($autoType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autoType, true), gettype($autoType)), __LINE__);
        }
        if (is_null($autoType) || (is_array($autoType) && empty($autoType))) {
            unset($this->AutoType);
        } else {
            $this->AutoType = $autoType;
        }
        
        return $this;
    }
    /**
     * Get AutoModel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAutoModel(): ?string
    {
        return $this->AutoModel ?? null;
    }
    /**
     * Set AutoModel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $autoModel
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setAutoModel(?string $autoModel = null): self
    {
        // validation for constraint: string
        if (!is_null($autoModel) && !is_string($autoModel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autoModel, true), gettype($autoModel)), __LINE__);
        }
        if (is_null($autoModel) || (is_array($autoModel) && empty($autoModel))) {
            unset($this->AutoModel);
        } else {
            $this->AutoModel = $autoModel;
        }
        
        return $this;
    }
    /**
     * Get SenderPowerOfAttorney value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getSenderPowerOfAttorney(): ?int
    {
        return $this->SenderPowerOfAttorney ?? null;
    }
    /**
     * Set SenderPowerOfAttorney value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $senderPowerOfAttorney
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setSenderPowerOfAttorney(?int $senderPowerOfAttorney = null): self
    {
        // validation for constraint: int
        if (!is_null($senderPowerOfAttorney) && !(is_int($senderPowerOfAttorney) || ctype_digit($senderPowerOfAttorney))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($senderPowerOfAttorney, true), gettype($senderPowerOfAttorney)), __LINE__);
        }
        if (is_null($senderPowerOfAttorney) || (is_array($senderPowerOfAttorney) && empty($senderPowerOfAttorney))) {
            unset($this->SenderPowerOfAttorney);
        } else {
            $this->SenderPowerOfAttorney = $senderPowerOfAttorney;
        }
        
        return $this;
    }
    /**
     * Get RecipientPowerOfAttorney value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getRecipientPowerOfAttorney(): ?int
    {
        return $this->RecipientPowerOfAttorney ?? null;
    }
    /**
     * Set RecipientPowerOfAttorney value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $recipientPowerOfAttorney
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setRecipientPowerOfAttorney(?int $recipientPowerOfAttorney = null): self
    {
        // validation for constraint: int
        if (!is_null($recipientPowerOfAttorney) && !(is_int($recipientPowerOfAttorney) || ctype_digit($recipientPowerOfAttorney))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($recipientPowerOfAttorney, true), gettype($recipientPowerOfAttorney)), __LINE__);
        }
        if (is_null($recipientPowerOfAttorney) || (is_array($recipientPowerOfAttorney) && empty($recipientPowerOfAttorney))) {
            unset($this->RecipientPowerOfAttorney);
        } else {
            $this->RecipientPowerOfAttorney = $recipientPowerOfAttorney;
        }
        
        return $this;
    }
    /**
     * Get OrderForAutoReservation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getOrderForAutoReservation(): ?int
    {
        return $this->OrderForAutoReservation ?? null;
    }
    /**
     * Set OrderForAutoReservation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $orderForAutoReservation
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setOrderForAutoReservation(?int $orderForAutoReservation = null): self
    {
        // validation for constraint: int
        if (!is_null($orderForAutoReservation) && !(is_int($orderForAutoReservation) || ctype_digit($orderForAutoReservation))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderForAutoReservation, true), gettype($orderForAutoReservation)), __LINE__);
        }
        if (is_null($orderForAutoReservation) || (is_array($orderForAutoReservation) && empty($orderForAutoReservation))) {
            unset($this->OrderForAutoReservation);
        } else {
            $this->OrderForAutoReservation = $orderForAutoReservation;
        }
        
        return $this;
    }
    /**
     * Get Comment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->Comment ?? null;
    }
    /**
     * Set Comment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comment
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment) || (is_array($comment) && empty($comment))) {
            unset($this->Comment);
        } else {
            $this->Comment = $comment;
        }
        
        return $this;
    }
    /**
     * Get StoreDoor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getStoreDoor(): ?bool
    {
        return $this->StoreDoor ?? null;
    }
    /**
     * Set StoreDoor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $storeDoor
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setStoreDoor(?bool $storeDoor = null): self
    {
        // validation for constraint: boolean
        if (!is_null($storeDoor) && !is_bool($storeDoor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($storeDoor, true), gettype($storeDoor)), __LINE__);
        }
        if (is_null($storeDoor) || (is_array($storeDoor) && empty($storeDoor))) {
            unset($this->StoreDoor);
        } else {
            $this->StoreDoor = $storeDoor;
        }
        
        return $this;
    }
    /**
     * Get DeliveryOfCargo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryOfCargo(): ?string
    {
        return $this->DeliveryOfCargo ?? null;
    }
    /**
     * Set DeliveryOfCargo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryOfCargo
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setDeliveryOfCargo(?string $deliveryOfCargo = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryOfCargo) && !is_string($deliveryOfCargo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryOfCargo, true), gettype($deliveryOfCargo)), __LINE__);
        }
        if (is_null($deliveryOfCargo) || (is_array($deliveryOfCargo) && empty($deliveryOfCargo))) {
            unset($this->DeliveryOfCargo);
        } else {
            $this->DeliveryOfCargo = $deliveryOfCargo;
        }
        
        return $this;
    }
    /**
     * Get Insurance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getInsurance(): ?bool
    {
        return $this->Insurance ?? null;
    }
    /**
     * Set Insurance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $insurance
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setInsurance(?bool $insurance = null): self
    {
        // validation for constraint: boolean
        if (!is_null($insurance) && !is_bool($insurance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($insurance, true), gettype($insurance)), __LINE__);
        }
        if (is_null($insurance) || (is_array($insurance) && empty($insurance))) {
            unset($this->Insurance);
        } else {
            $this->Insurance = $insurance;
        }
        
        return $this;
    }
    /**
     * Get Declared value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getDeclared(): ?bool
    {
        return $this->Declared ?? null;
    }
    /**
     * Set Declared value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $declared
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setDeclared(?bool $declared = null): self
    {
        // validation for constraint: boolean
        if (!is_null($declared) && !is_bool($declared)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($declared, true), gettype($declared)), __LINE__);
        }
        if (is_null($declared) || (is_array($declared) && empty($declared))) {
            unset($this->Declared);
        } else {
            $this->Declared = $declared;
        }
        
        return $this;
    }
    /**
     * Get PersonallyInHand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getPersonallyInHand(): ?bool
    {
        return $this->PersonallyInHand ?? null;
    }
    /**
     * Set PersonallyInHand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $personallyInHand
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setPersonallyInHand(?bool $personallyInHand = null): self
    {
        // validation for constraint: boolean
        if (!is_null($personallyInHand) && !is_bool($personallyInHand)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($personallyInHand, true), gettype($personallyInHand)), __LINE__);
        }
        if (is_null($personallyInHand) || (is_array($personallyInHand) && empty($personallyInHand))) {
            unset($this->PersonallyInHand);
        } else {
            $this->PersonallyInHand = $personallyInHand;
        }
        
        return $this;
    }
    /**
     * Get LUW value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getLUW(): ?bool
    {
        return $this->LUW ?? null;
    }
    /**
     * Set LUW value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $lUW
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setLUW(?bool $lUW = null): self
    {
        // validation for constraint: boolean
        if (!is_null($lUW) && !is_bool($lUW)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lUW, true), gettype($lUW)), __LINE__);
        }
        if (is_null($lUW) || (is_array($lUW) && empty($lUW))) {
            unset($this->LUW);
        } else {
            $this->LUW = $lUW;
        }
        
        return $this;
    }
    /**
     * Get WithSignature value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getWithSignature(): ?bool
    {
        return $this->WithSignature ?? null;
    }
    /**
     * Set WithSignature value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $withSignature
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setWithSignature(?bool $withSignature = null): self
    {
        // validation for constraint: boolean
        if (!is_null($withSignature) && !is_bool($withSignature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($withSignature, true), gettype($withSignature)), __LINE__);
        }
        if (is_null($withSignature) || (is_array($withSignature) && empty($withSignature))) {
            unset($this->WithSignature);
        } else {
            $this->WithSignature = $withSignature;
        }
        
        return $this;
    }
    /**
     * Get TypeOfOrder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTypeOfOrder(): ?string
    {
        return $this->TypeOfOrder ?? null;
    }
    /**
     * Set TypeOfOrder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $typeOfOrder
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setTypeOfOrder(?string $typeOfOrder = null): self
    {
        // validation for constraint: string
        if (!is_null($typeOfOrder) && !is_string($typeOfOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeOfOrder, true), gettype($typeOfOrder)), __LINE__);
        }
        if (is_null($typeOfOrder) || (is_array($typeOfOrder) && empty($typeOfOrder))) {
            unset($this->TypeOfOrder);
        } else {
            $this->TypeOfOrder = $typeOfOrder;
        }
        
        return $this;
    }
    /**
     * Get Distribution value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getDistribution(): ?bool
    {
        return $this->Distribution ?? null;
    }
    /**
     * Set Distribution value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $distribution
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setDistribution(?bool $distribution = null): self
    {
        // validation for constraint: boolean
        if (!is_null($distribution) && !is_bool($distribution)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($distribution, true), gettype($distribution)), __LINE__);
        }
        if (is_null($distribution) || (is_array($distribution) && empty($distribution))) {
            unset($this->Distribution);
        } else {
            $this->Distribution = $distribution;
        }
        
        return $this;
    }
    /**
     * Get Notifications value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Oihso\CSESDK\StructType\Notifications[]
     */
    public function getNotifications(): ?array
    {
        return $this->Notifications ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setNotifications method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotifications method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotificationsForArrayConstraintFromSetNotifications(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderNotificationsItem) {
            // validation for constraint: itemType
            if (!$orderNotificationsItem instanceof \Oihso\CSESDK\StructType\Notifications) {
                $invalidValues[] = is_object($orderNotificationsItem) ? get_class($orderNotificationsItem) : sprintf('%s(%s)', gettype($orderNotificationsItem), var_export($orderNotificationsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Notifications property can only contain items of type \Oihso\CSESDK\StructType\Notifications, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Notifications value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Oihso\CSESDK\StructType\Notifications[] $notifications
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setNotifications(?array $notifications = null): self
    {
        // validation for constraint: array
        if ('' !== ($notificationsArrayErrorMessage = self::validateNotificationsForArrayConstraintFromSetNotifications($notifications))) {
            throw new InvalidArgumentException($notificationsArrayErrorMessage, __LINE__);
        }
        if (is_null($notifications) || (is_array($notifications) && empty($notifications))) {
            unset($this->Notifications);
        } else {
            $this->Notifications = $notifications;
        }
        
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws InvalidArgumentException
     * @param \Oihso\CSESDK\StructType\Notifications $item
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function addToNotifications(\Oihso\CSESDK\StructType\Notifications $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Oihso\CSESDK\StructType\Notifications) {
            throw new InvalidArgumentException(sprintf('The Notifications property can only contain items of type \Oihso\CSESDK\StructType\Notifications, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Notifications[] = $item;
        
        return $this;
    }
    /**
     * Get CallCourer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getCallCourer(): ?bool
    {
        return $this->CallCourer ?? null;
    }
    /**
     * Set CallCourer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $callCourer
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setCallCourer(?bool $callCourer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($callCourer) && !is_bool($callCourer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($callCourer, true), gettype($callCourer)), __LINE__);
        }
        if (is_null($callCourer) || (is_array($callCourer) && empty($callCourer))) {
            unset($this->CallCourer);
        } else {
            $this->CallCourer = $callCourer;
        }
        
        return $this;
    }
    /**
     * Get TypeOfParentForWaybill value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTypeOfParentForWaybill(): ?string
    {
        return $this->TypeOfParentForWaybill ?? null;
    }
    /**
     * Set TypeOfParentForWaybill value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $typeOfParentForWaybill
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setTypeOfParentForWaybill(?string $typeOfParentForWaybill = null): self
    {
        // validation for constraint: string
        if (!is_null($typeOfParentForWaybill) && !is_string($typeOfParentForWaybill)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeOfParentForWaybill, true), gettype($typeOfParentForWaybill)), __LINE__);
        }
        if (is_null($typeOfParentForWaybill) || (is_array($typeOfParentForWaybill) && empty($typeOfParentForWaybill))) {
            unset($this->TypeOfParentForWaybill);
        } else {
            $this->TypeOfParentForWaybill = $typeOfParentForWaybill;
        }
        
        return $this;
    }
    /**
     * Get ParentOrderForWaybill value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParentOrderForWaybill(): ?string
    {
        return $this->ParentOrderForWaybill ?? null;
    }
    /**
     * Set ParentOrderForWaybill value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $parentOrderForWaybill
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setParentOrderForWaybill(?string $parentOrderForWaybill = null): self
    {
        // validation for constraint: string
        if (!is_null($parentOrderForWaybill) && !is_string($parentOrderForWaybill)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentOrderForWaybill, true), gettype($parentOrderForWaybill)), __LINE__);
        }
        if (is_null($parentOrderForWaybill) || (is_array($parentOrderForWaybill) && empty($parentOrderForWaybill))) {
            unset($this->ParentOrderForWaybill);
        } else {
            $this->ParentOrderForWaybill = $parentOrderForWaybill;
        }
        
        return $this;
    }
    /**
     * Get ClientNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getClientNumber(): ?string
    {
        return $this->ClientNumber ?? null;
    }
    /**
     * Set ClientNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $clientNumber
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setClientNumber(?string $clientNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($clientNumber) && !is_string($clientNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientNumber, true), gettype($clientNumber)), __LINE__);
        }
        if (is_null($clientNumber) || (is_array($clientNumber) && empty($clientNumber))) {
            unset($this->ClientNumber);
        } else {
            $this->ClientNumber = $clientNumber;
        }
        
        return $this;
    }
    /**
     * Get ArrayOfDocumentsPhoto value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Oihso\CSESDK\StructType\DocumentsPhoto[]
     */
    public function getArrayOfDocumentsPhoto(): ?array
    {
        return $this->ArrayOfDocumentsPhoto ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setArrayOfDocumentsPhoto method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArrayOfDocumentsPhoto method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArrayOfDocumentsPhotoForArrayConstraintFromSetArrayOfDocumentsPhoto(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderArrayOfDocumentsPhotoItem) {
            // validation for constraint: itemType
            if (!$orderArrayOfDocumentsPhotoItem instanceof \Oihso\CSESDK\StructType\DocumentsPhoto) {
                $invalidValues[] = is_object($orderArrayOfDocumentsPhotoItem) ? get_class($orderArrayOfDocumentsPhotoItem) : sprintf('%s(%s)', gettype($orderArrayOfDocumentsPhotoItem), var_export($orderArrayOfDocumentsPhotoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ArrayOfDocumentsPhoto property can only contain items of type \Oihso\CSESDK\StructType\DocumentsPhoto, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ArrayOfDocumentsPhoto value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Oihso\CSESDK\StructType\DocumentsPhoto[] $arrayOfDocumentsPhoto
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setArrayOfDocumentsPhoto(?array $arrayOfDocumentsPhoto = null): self
    {
        // validation for constraint: array
        if ('' !== ($arrayOfDocumentsPhotoArrayErrorMessage = self::validateArrayOfDocumentsPhotoForArrayConstraintFromSetArrayOfDocumentsPhoto($arrayOfDocumentsPhoto))) {
            throw new InvalidArgumentException($arrayOfDocumentsPhotoArrayErrorMessage, __LINE__);
        }
        if (is_null($arrayOfDocumentsPhoto) || (is_array($arrayOfDocumentsPhoto) && empty($arrayOfDocumentsPhoto))) {
            unset($this->ArrayOfDocumentsPhoto);
        } else {
            $this->ArrayOfDocumentsPhoto = $arrayOfDocumentsPhoto;
        }
        
        return $this;
    }
    /**
     * Add item to ArrayOfDocumentsPhoto value
     * @throws InvalidArgumentException
     * @param \Oihso\CSESDK\StructType\DocumentsPhoto $item
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function addToArrayOfDocumentsPhoto(\Oihso\CSESDK\StructType\DocumentsPhoto $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Oihso\CSESDK\StructType\DocumentsPhoto) {
            throw new InvalidArgumentException(sprintf('The ArrayOfDocumentsPhoto property can only contain items of type \Oihso\CSESDK\StructType\DocumentsPhoto, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ArrayOfDocumentsPhoto[] = $item;
        
        return $this;
    }
    /**
     * Get Repository value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRepository(): ?string
    {
        return $this->Repository ?? null;
    }
    /**
     * Set Repository value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $repository
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setRepository(?string $repository = null): self
    {
        // validation for constraint: string
        if (!is_null($repository) && !is_string($repository)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($repository, true), gettype($repository)), __LINE__);
        }
        if (is_null($repository) || (is_array($repository) && empty($repository))) {
            unset($this->Repository);
        } else {
            $this->Repository = $repository;
        }
        
        return $this;
    }
    /**
     * Get ClientCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Oihso\CSESDK\StructType\ListOfCorrespondences[]
     */
    public function getClientCodes(): ?array
    {
        return $this->ClientCodes ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClientCodes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClientCodes method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClientCodesForArrayConstraintFromSetClientCodes(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderClientCodesItem) {
            // validation for constraint: itemType
            if (!$orderClientCodesItem instanceof \Oihso\CSESDK\StructType\ListOfCorrespondences) {
                $invalidValues[] = is_object($orderClientCodesItem) ? get_class($orderClientCodesItem) : sprintf('%s(%s)', gettype($orderClientCodesItem), var_export($orderClientCodesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClientCodes property can only contain items of type \Oihso\CSESDK\StructType\ListOfCorrespondences, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClientCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Oihso\CSESDK\StructType\ListOfCorrespondences[] $clientCodes
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setClientCodes(?array $clientCodes = null): self
    {
        // validation for constraint: array
        if ('' !== ($clientCodesArrayErrorMessage = self::validateClientCodesForArrayConstraintFromSetClientCodes($clientCodes))) {
            throw new InvalidArgumentException($clientCodesArrayErrorMessage, __LINE__);
        }
        if (is_null($clientCodes) || (is_array($clientCodes) && empty($clientCodes))) {
            unset($this->ClientCodes);
        } else {
            $this->ClientCodes = $clientCodes;
        }
        
        return $this;
    }
    /**
     * Add item to ClientCodes value
     * @throws InvalidArgumentException
     * @param \Oihso\CSESDK\StructType\ListOfCorrespondences $item
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function addToClientCodes(\Oihso\CSESDK\StructType\ListOfCorrespondences $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Oihso\CSESDK\StructType\ListOfCorrespondences) {
            throw new InvalidArgumentException(sprintf('The ClientCodes property can only contain items of type \Oihso\CSESDK\StructType\ListOfCorrespondences, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ClientCodes[] = $item;
        
        return $this;
    }
    /**
     * Get DeliveryDateOf value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryDateOf(): ?string
    {
        return $this->DeliveryDateOf ?? null;
    }
    /**
     * Set DeliveryDateOf value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryDateOf
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setDeliveryDateOf(?string $deliveryDateOf = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryDateOf) && !is_string($deliveryDateOf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDateOf, true), gettype($deliveryDateOf)), __LINE__);
        }
        if (is_null($deliveryDateOf) || (is_array($deliveryDateOf) && empty($deliveryDateOf))) {
            unset($this->DeliveryDateOf);
        } else {
            $this->DeliveryDateOf = $deliveryDateOf;
        }
        
        return $this;
    }
    /**
     * Get Services value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Oihso\CSESDK\StructType\ListOfCorrespondences[]
     */
    public function getServices(): ?array
    {
        return $this->Services ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setServices method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServices method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServicesForArrayConstraintFromSetServices(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderServicesItem) {
            // validation for constraint: itemType
            if (!$orderServicesItem instanceof \Oihso\CSESDK\StructType\ListOfCorrespondences) {
                $invalidValues[] = is_object($orderServicesItem) ? get_class($orderServicesItem) : sprintf('%s(%s)', gettype($orderServicesItem), var_export($orderServicesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Services property can only contain items of type \Oihso\CSESDK\StructType\ListOfCorrespondences, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Services value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Oihso\CSESDK\StructType\ListOfCorrespondences[] $services
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setServices(?array $services = null): self
    {
        // validation for constraint: array
        if ('' !== ($servicesArrayErrorMessage = self::validateServicesForArrayConstraintFromSetServices($services))) {
            throw new InvalidArgumentException($servicesArrayErrorMessage, __LINE__);
        }
        if (is_null($services) || (is_array($services) && empty($services))) {
            unset($this->Services);
        } else {
            $this->Services = $services;
        }
        
        return $this;
    }
    /**
     * Add item to Services value
     * @throws InvalidArgumentException
     * @param \Oihso\CSESDK\StructType\ListOfCorrespondences $item
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function addToServices(\Oihso\CSESDK\StructType\ListOfCorrespondences $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Oihso\CSESDK\StructType\ListOfCorrespondences) {
            throw new InvalidArgumentException(sprintf('The Services property can only contain items of type \Oihso\CSESDK\StructType\ListOfCorrespondences, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Services[] = $item;
        
        return $this;
    }
    /**
     * Get AdditionalServices value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Oihso\CSESDK\StructType\ListOfCorrespondences[]
     */
    public function getAdditionalServices(): ?array
    {
        return $this->AdditionalServices ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAdditionalServices method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalServices method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalServicesForArrayConstraintFromSetAdditionalServices(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderAdditionalServicesItem) {
            // validation for constraint: itemType
            if (!$orderAdditionalServicesItem instanceof \Oihso\CSESDK\StructType\ListOfCorrespondences) {
                $invalidValues[] = is_object($orderAdditionalServicesItem) ? get_class($orderAdditionalServicesItem) : sprintf('%s(%s)', gettype($orderAdditionalServicesItem), var_export($orderAdditionalServicesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdditionalServices property can only contain items of type \Oihso\CSESDK\StructType\ListOfCorrespondences, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdditionalServices value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Oihso\CSESDK\StructType\ListOfCorrespondences[] $additionalServices
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function setAdditionalServices(?array $additionalServices = null): self
    {
        // validation for constraint: array
        if ('' !== ($additionalServicesArrayErrorMessage = self::validateAdditionalServicesForArrayConstraintFromSetAdditionalServices($additionalServices))) {
            throw new InvalidArgumentException($additionalServicesArrayErrorMessage, __LINE__);
        }
        if (is_null($additionalServices) || (is_array($additionalServices) && empty($additionalServices))) {
            unset($this->AdditionalServices);
        } else {
            $this->AdditionalServices = $additionalServices;
        }
        
        return $this;
    }
    /**
     * Add item to AdditionalServices value
     * @throws InvalidArgumentException
     * @param \Oihso\CSESDK\StructType\ListOfCorrespondences $item
     * @return \Oihso\CSESDK\StructType\Order
     */
    public function addToAdditionalServices(\Oihso\CSESDK\StructType\ListOfCorrespondences $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Oihso\CSESDK\StructType\ListOfCorrespondences) {
            throw new InvalidArgumentException(sprintf('The AdditionalServices property can only contain items of type \Oihso\CSESDK\StructType\ListOfCorrespondences, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AdditionalServices[] = $item;
        
        return $this;
    }
}
