<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersEndorsingRightsGetResponse200ItemDelegatesItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    protected $delegate;
    /**
     * @var int
     */
    protected $firstSlot;
    /**
     * @var int
     */
    protected $endorsingPower;

    protected $consensusKey;

    public function getDelegate()
    {
        return $this->delegate;
    }

    public function setDelegate($delegate): self
    {
        $this->initialized['delegate'] = true;
        $this->delegate = $delegate;

        return $this;
    }

    public function getFirstSlot(): int
    {
        return $this->firstSlot;
    }

    public function setFirstSlot(int $firstSlot): self
    {
        $this->initialized['firstSlot'] = true;
        $this->firstSlot = $firstSlot;

        return $this;
    }

    public function getEndorsingPower(): int
    {
        return $this->endorsingPower;
    }

    public function setEndorsingPower(int $endorsingPower): self
    {
        $this->initialized['endorsingPower'] = true;
        $this->endorsingPower = $endorsingPower;

        return $this;
    }

    public function getConsensusKey()
    {
        return $this->consensusKey;
    }

    public function setConsensusKey($consensusKey): self
    {
        $this->initialized['consensusKey'] = true;
        $this->consensusKey = $consensusKey;

        return $this;
    }
}
