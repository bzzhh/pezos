<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class NetworkPointsPointPatchBody extends \ArrayObject
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
     * @var string
     */
    protected $acl;

    protected $peerId;

    public function getAcl(): string
    {
        return $this->acl;
    }

    public function setAcl(string $acl): self
    {
        $this->initialized['acl'] = true;
        $this->acl = $acl;

        return $this;
    }

    public function getPeerId()
    {
        return $this->peerId;
    }

    public function setPeerId($peerId): self
    {
        $this->initialized['peerId'] = true;
        $this->peerId = $peerId;

        return $this;
    }
}
