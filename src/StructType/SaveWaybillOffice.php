<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveWaybillOffice StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveWaybillOffice extends AbstractStructBase
{
    /**
     * The OrderData
     * @var \Oihso\CSESDK\StructType\Order|null
     */
    protected ?\Oihso\CSESDK\StructType\Order $OrderData = null;
    /**
     * The Language
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Language = null;
    /**
     * The Login
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Login = null;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Password = null;
    /**
     * The Company
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Company = null;
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Number = null;
    /**
     * The ClientNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $ClientNumber = null;
    /**
     * The Office
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Office = null;
    /**
     * Constructor method for SaveWaybillOffice
     * @uses SaveWaybillOffice::setOrderData()
     * @uses SaveWaybillOffice::setLanguage()
     * @uses SaveWaybillOffice::setLogin()
     * @uses SaveWaybillOffice::setPassword()
     * @uses SaveWaybillOffice::setCompany()
     * @uses SaveWaybillOffice::setNumber()
     * @uses SaveWaybillOffice::setClientNumber()
     * @uses SaveWaybillOffice::setOffice()
     * @param \Oihso\CSESDK\StructType\Order $orderData
     * @param string $language
     * @param string $login
     * @param string $password
     * @param string $company
     * @param string $number
     * @param string $clientNumber
     * @param string $office
     */
    public function __construct(?\Oihso\CSESDK\StructType\Order $orderData = null, ?string $language = null, ?string $login = null, ?string $password = null, ?string $company = null, ?string $number = null, ?string $clientNumber = null, ?string $office = null)
    {
        $this
            ->setOrderData($orderData)
            ->setLanguage($language)
            ->setLogin($login)
            ->setPassword($password)
            ->setCompany($company)
            ->setNumber($number)
            ->setClientNumber($clientNumber)
            ->setOffice($office);
    }
    /**
     * Get OrderData value
     * @return \Oihso\CSESDK\StructType\Order|null
     */
    public function getOrderData(): ?\Oihso\CSESDK\StructType\Order
    {
        return $this->OrderData;
    }
    /**
     * Set OrderData value
     * @param \Oihso\CSESDK\StructType\Order $orderData
     * @return \Oihso\CSESDK\StructType\SaveWaybillOffice
     */
    public function setOrderData(?\Oihso\CSESDK\StructType\Order $orderData = null): self
    {
        $this->OrderData = $orderData;
        
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \Oihso\CSESDK\StructType\SaveWaybillOffice
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->Language = $language;
        
        return $this;
    }
    /**
     * Get Login value
     * @return string|null
     */
    public function getLogin(): ?string
    {
        return $this->Login;
    }
    /**
     * Set Login value
     * @param string $login
     * @return \Oihso\CSESDK\StructType\SaveWaybillOffice
     */
    public function setLogin(?string $login = null): self
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($login, true), gettype($login)), __LINE__);
        }
        $this->Login = $login;
        
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \Oihso\CSESDK\StructType\SaveWaybillOffice
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->Password = $password;
        
        return $this;
    }
    /**
     * Get Company value
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->Company;
    }
    /**
     * Set Company value
     * @param string $company
     * @return \Oihso\CSESDK\StructType\SaveWaybillOffice
     */
    public function setCompany(?string $company = null): self
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company, true), gettype($company)), __LINE__);
        }
        $this->Company = $company;
        
        return $this;
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Oihso\CSESDK\StructType\SaveWaybillOffice
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get ClientNumber value
     * @return string|null
     */
    public function getClientNumber(): ?string
    {
        return $this->ClientNumber;
    }
    /**
     * Set ClientNumber value
     * @param string $clientNumber
     * @return \Oihso\CSESDK\StructType\SaveWaybillOffice
     */
    public function setClientNumber(?string $clientNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($clientNumber) && !is_string($clientNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientNumber, true), gettype($clientNumber)), __LINE__);
        }
        $this->ClientNumber = $clientNumber;
        
        return $this;
    }
    /**
     * Get Office value
     * @return string|null
     */
    public function getOffice(): ?string
    {
        return $this->Office;
    }
    /**
     * Set Office value
     * @param string $office
     * @return \Oihso\CSESDK\StructType\SaveWaybillOffice
     */
    public function setOffice(?string $office = null): self
    {
        // validation for constraint: string
        if (!is_null($office) && !is_string($office)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($office, true), gettype($office)), __LINE__);
        }
        $this->Office = $office;
        
        return $this;
    }
}
