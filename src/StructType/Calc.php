<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Calc StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Calc extends AbstractStructBase
{
    /**
     * The data
     * @var \Oihso\CSESDK\StructType\Element|null
     */
    protected ?\Oihso\CSESDK\StructType\Element $data = null;
    /**
     * The login
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $login = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The parameters
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\Element|null
     */
    protected ?\Oihso\CSESDK\StructType\Element $parameters = null;
    /**
     * Constructor method for Calc
     * @uses Calc::setData()
     * @uses Calc::setLogin()
     * @uses Calc::setPassword()
     * @uses Calc::setParameters()
     * @param \Oihso\CSESDK\StructType\Element $data
     * @param string $login
     * @param string $password
     * @param \Oihso\CSESDK\StructType\Element $parameters
     */
    public function __construct(?\Oihso\CSESDK\StructType\Element $data = null, ?string $login = null, ?string $password = null, ?\Oihso\CSESDK\StructType\Element $parameters = null)
    {
        $this
            ->setData($data)
            ->setLogin($login)
            ->setPassword($password)
            ->setParameters($parameters);
    }
    /**
     * Get data value
     * @return \Oihso\CSESDK\StructType\Element|null
     */
    public function getData(): ?\Oihso\CSESDK\StructType\Element
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param \Oihso\CSESDK\StructType\Element $data
     * @return \Oihso\CSESDK\StructType\Calc
     */
    public function setData(?\Oihso\CSESDK\StructType\Element $data = null): self
    {
        $this->data = $data;
        
        return $this;
    }
    /**
     * Get login value
     * @return string|null
     */
    public function getLogin(): ?string
    {
        return $this->login;
    }
    /**
     * Set login value
     * @param string $login
     * @return \Oihso\CSESDK\StructType\Calc
     */
    public function setLogin(?string $login = null): self
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($login, true), gettype($login)), __LINE__);
        }
        $this->login = $login;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Oihso\CSESDK\StructType\Calc
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get parameters value
     * @return \Oihso\CSESDK\StructType\Element|null
     */
    public function getParameters(): ?\Oihso\CSESDK\StructType\Element
    {
        return $this->parameters;
    }
    /**
     * Set parameters value
     * @param \Oihso\CSESDK\StructType\Element $parameters
     * @return \Oihso\CSESDK\StructType\Calc
     */
    public function setParameters(?\Oihso\CSESDK\StructType\Element $parameters = null): self
    {
        $this->parameters = $parameters;
        
        return $this;
    }
}
