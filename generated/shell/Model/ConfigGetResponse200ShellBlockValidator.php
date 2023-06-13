<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class ConfigGetResponse200ShellBlockValidator extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A span of time, as seen by the local computer.
     *
     * @var float
     */
    protected $protocolRequestTimeout;
    /**
     * The operation metadata size limit.
     */
    protected $operationMetadataSizeLimit;

    /**
     * A span of time, as seen by the local computer.
     */
    public function getProtocolRequestTimeout(): float
    {
        return $this->protocolRequestTimeout;
    }

    /**
     * A span of time, as seen by the local computer.
     */
    public function setProtocolRequestTimeout(float $protocolRequestTimeout): self
    {
        $this->initialized['protocolRequestTimeout'] = true;
        $this->protocolRequestTimeout = $protocolRequestTimeout;

        return $this;
    }

    /**
     * The operation metadata size limit.
     */
    public function getOperationMetadataSizeLimit()
    {
        return $this->operationMetadataSizeLimit;
    }

    /**
     * The operation metadata size limit.
     */
    public function setOperationMetadataSizeLimit($operationMetadataSizeLimit): self
    {
        $this->initialized['operationMetadataSizeLimit'] = true;
        $this->operationMetadataSizeLimit = $operationMetadataSizeLimit;

        return $this;
    }
}
