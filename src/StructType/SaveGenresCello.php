<?php

declare(strict_types=1);

namespace CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveGenresCello StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveGenresCello extends AbstractStructBase
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
     * The data
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Element|null
     */
    protected ?\StructType\Element $data = null;
    /**
     * The parameters
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Element|null
     */
    protected ?\StructType\Element $parameters = null;
    /**
     * The log
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $log = null;
    /**
     * Constructor method for SaveGenresCello
     * @uses SaveGenresCello::setLogin()
     * @uses SaveGenresCello::setPassword()
     * @uses SaveGenresCello::setData()
     * @uses SaveGenresCello::setParameters()
     * @uses SaveGenresCello::setLog()
     * @param string $login
     * @param string $password
     * @param \StructType\Element $data
     * @param \StructType\Element $parameters
     * @param string $log
     */
    public function __construct(?string $login = null, ?string $password = null, ?\StructType\Element $data = null, ?\StructType\Element $parameters = null, ?string $log = null)
    {
        $this
            ->setLogin($login)
            ->setPassword($password)
            ->setData($data)
            ->setParameters($parameters)
            ->setLog($log);
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
     * @return \StructType\SaveGenresCello
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
     * @return \StructType\SaveGenresCello
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
     * Get data value
     * @return \StructType\Element|null
     */
    public function getData(): ?\StructType\Element
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param \StructType\Element $data
     * @return \StructType\SaveGenresCello
     */
    public function setData(?\StructType\Element $data = null): self
    {
        $this->data = $data;
        
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
     * @return \StructType\SaveGenresCello
     */
    public function setParameters(?\StructType\Element $parameters = null): self
    {
        $this->parameters = $parameters;
        
        return $this;
    }
    /**
     * Get log value
     * @return string|null
     */
    public function getLog(): ?string
    {
        return $this->log;
    }
    /**
     * Set log value
     * @param string $log
     * @return \StructType\SaveGenresCello
     */
    public function setLog(?string $log = null): self
    {
        // validation for constraint: string
        if (!is_null($log) && !is_string($log)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($log, true), gettype($log)), __LINE__);
        }
        $this->log = $log;
        
        return $this;
    }
}
