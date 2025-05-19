<?php

declare(strict_types=1);

namespace CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Measurement StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Measurement extends AbstractStructBase
{
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
     * The Length
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var float|null
     */
    protected ?float $Length = null;
    /**
     * The Height
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var float|null
     */
    protected ?float $Height = null;
    /**
     * The Width
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var float|null
     */
    protected ?float $Width = null;
    /**
     * The Weight
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var float|null
     */
    protected ?float $Weight = null;
    /**
     * Constructor method for Measurement
     * @uses Measurement::setNumber()
     * @uses Measurement::setLogin()
     * @uses Measurement::setPassword()
     * @uses Measurement::setLength()
     * @uses Measurement::setHeight()
     * @uses Measurement::setWidth()
     * @uses Measurement::setWeight()
     * @param string $number
     * @param string $login
     * @param string $password
     * @param float $length
     * @param float $height
     * @param float $width
     * @param float $weight
     */
    public function __construct(?string $number = null, ?string $login = null, ?string $password = null, ?float $length = null, ?float $height = null, ?float $width = null, ?float $weight = null)
    {
        $this
            ->setNumber($number)
            ->setLogin($login)
            ->setPassword($password)
            ->setLength($length)
            ->setHeight($height)
            ->setWidth($width)
            ->setWeight($weight);
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
     * @return \StructType\Measurement
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
     * @return \StructType\Measurement
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
     * @return \StructType\Measurement
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
     * Get Length value
     * @return float|null
     */
    public function getLength(): ?float
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param float $length
     * @return \StructType\Measurement
     */
    public function setLength(?float $length = null): self
    {
        // validation for constraint: float
        if (!is_null($length) && !(is_float($length) || is_numeric($length))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        $this->Length = $length;
        
        return $this;
    }
    /**
     * Get Height value
     * @return float|null
     */
    public function getHeight(): ?float
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param float $height
     * @return \StructType\Measurement
     */
    public function setHeight(?float $height = null): self
    {
        // validation for constraint: float
        if (!is_null($height) && !(is_float($height) || is_numeric($height))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->Height = $height;
        
        return $this;
    }
    /**
     * Get Width value
     * @return float|null
     */
    public function getWidth(): ?float
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param float $width
     * @return \StructType\Measurement
     */
    public function setWidth(?float $width = null): self
    {
        // validation for constraint: float
        if (!is_null($width) && !(is_float($width) || is_numeric($width))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->Width = $width;
        
        return $this;
    }
    /**
     * Get Weight value
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param float $weight
     * @return \StructType\Measurement
     */
    public function setWeight(?float $weight = null): self
    {
        // validation for constraint: float
        if (!is_null($weight) && !(is_float($weight) || is_numeric($weight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->Weight = $weight;
        
        return $this;
    }
}
