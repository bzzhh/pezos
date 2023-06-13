<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class NetworkConnectionsPeerIdGetResponse200RemoteMetadata extends \ArrayObject
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
     * @var bool
     */
    protected $disableMempool;
    /**
     * @var bool
     */
    protected $privateNode;

    public function getDisableMempool(): bool
    {
        return $this->disableMempool;
    }

    public function setDisableMempool(bool $disableMempool): self
    {
        $this->initialized['disableMempool'] = true;
        $this->disableMempool = $disableMempool;

        return $this;
    }

    public function getPrivateNode(): bool
    {
        return $this->privateNode;
    }

    public function setPrivateNode(bool $privateNode): self
    {
        $this->initialized['privateNode'] = true;
        $this->privateNode = $privateNode;

        return $this;
    }
}
