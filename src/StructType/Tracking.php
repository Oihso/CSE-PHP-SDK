<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Tracking StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Tracking extends AbstractStructBase
{
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
     * The documents
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Element|null
     */
    protected ?\StructType\Element $documents = null;
    /**
     * The parameters
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Element|null
     */
    protected ?\StructType\Element $parameters = null;
    /**
     * Constructor method for Tracking
     * @uses Tracking::setLogin()
     * @uses Tracking::setPassword()
     * @uses Tracking::setDocuments()
     * @uses Tracking::setParameters()
     * @param string $login
     * @param string $password
     * @param \StructType\Element $documents
     * @param \StructType\Element $parameters
     */
    public function __construct(?string $login = null, ?string $password = null, ?\StructType\Element $documents = null, ?\StructType\Element $parameters = null)
    {
        $this
            ->setLogin($login)
            ->setPassword($password)
            ->setDocuments($documents)
            ->setParameters($parameters);
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
     * @return \StructType\Tracking
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
     * @return \StructType\Tracking
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
     * Get documents value
     * @return \StructType\Element|null
     */
    public function getDocuments(): ?\StructType\Element
    {
        return $this->documents;
    }
    /**
     * Set documents value
     * @param \StructType\Element $documents
     * @return \StructType\Tracking
     */
    public function setDocuments(?\StructType\Element $documents = null): self
    {
        $this->documents = $documents;
        
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
     * @return \StructType\Tracking
     */
    public function setParameters(?\StructType\Element $parameters = null): self
    {
        $this->parameters = $parameters;
        
        return $this;
    }
}
