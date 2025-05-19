<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Report StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Report extends AbstractStructBase
{
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
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
     * @var \StructType\Element|null
     */
    protected ?\StructType\Element $parameters = null;
    /**
     * Constructor method for Report
     * @uses Report::setName()
     * @uses Report::setLogin()
     * @uses Report::setPassword()
     * @uses Report::setParameters()
     * @param string $name
     * @param string $login
     * @param string $password
     * @param \StructType\Element $parameters
     */
    public function __construct(?string $name = null, ?string $login = null, ?string $password = null, ?\StructType\Element $parameters = null)
    {
        $this
            ->setName($name)
            ->setLogin($login)
            ->setPassword($password)
            ->setParameters($parameters);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\Report
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
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
     * @return \StructType\Report
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
     * @return \StructType\Report
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
     * @return \StructType\Element|null
     */
    public function getParameters(): ?\StructType\Element
    {
        return $this->parameters;
    }
    /**
     * Set parameters value
     * @param \StructType\Element $parameters
     * @return \StructType\Report
     */
    public function setParameters(?\StructType\Element $parameters = null): self
    {
        $this->parameters = $parameters;
        
        return $this;
    }
}
