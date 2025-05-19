<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintDocument StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintDocument extends AbstractStructBase
{
    /**
     * The Type
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The PrintFormName
     * @var string|null
     */
    protected ?string $PrintFormName = null;
    /**
     * The Number
     * @var string|null
     */
    protected ?string $Number = null;
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
     * The Parametrs
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\Element|null
     */
    protected ?\Oihso\CSESDK\StructType\Element $Parametrs = null;
    /**
     * Constructor method for PrintDocument
     * @uses PrintDocument::setType()
     * @uses PrintDocument::setPrintFormName()
     * @uses PrintDocument::setNumber()
     * @uses PrintDocument::setLogin()
     * @uses PrintDocument::setPassword()
     * @uses PrintDocument::setParametrs()
     * @param string $type
     * @param string $printFormName
     * @param string $number
     * @param string $login
     * @param string $password
     * @param \Oihso\CSESDK\StructType\Element $parametrs
     */
    public function __construct(?string $type = null, ?string $printFormName = null, ?string $number = null, ?string $login = null, ?string $password = null, ?\Oihso\CSESDK\StructType\Element $parametrs = null)
    {
        $this
            ->setType($type)
            ->setPrintFormName($printFormName)
            ->setNumber($number)
            ->setLogin($login)
            ->setPassword($password)
            ->setParametrs($parametrs);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Oihso\CSESDK\StructType\PrintDocument
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get PrintFormName value
     * @return string|null
     */
    public function getPrintFormName(): ?string
    {
        return $this->PrintFormName;
    }
    /**
     * Set PrintFormName value
     * @param string $printFormName
     * @return \Oihso\CSESDK\StructType\PrintDocument
     */
    public function setPrintFormName(?string $printFormName = null): self
    {
        // validation for constraint: string
        if (!is_null($printFormName) && !is_string($printFormName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printFormName, true), gettype($printFormName)), __LINE__);
        }
        $this->PrintFormName = $printFormName;
        
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
     * @return \Oihso\CSESDK\StructType\PrintDocument
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
     * @return \Oihso\CSESDK\StructType\PrintDocument
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
     * @return \Oihso\CSESDK\StructType\PrintDocument
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
     * Get Parametrs value
     * @return \Oihso\CSESDK\StructType\Element|null
     */
    public function getParametrs(): ?\Oihso\CSESDK\StructType\Element
    {
        return $this->Parametrs;
    }
    /**
     * Set Parametrs value
     * @param \Oihso\CSESDK\StructType\Element $parametrs
     * @return \Oihso\CSESDK\StructType\PrintDocument
     */
    public function setParametrs(?\Oihso\CSESDK\StructType\Element $parametrs = null): self
    {
        $this->Parametrs = $parametrs;
        
        return $this;
    }
}
