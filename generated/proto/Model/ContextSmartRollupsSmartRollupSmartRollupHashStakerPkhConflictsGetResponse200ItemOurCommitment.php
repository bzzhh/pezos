<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class ContextSmartRollupsSmartRollupSmartRollupHashStakerPkhConflictsGetResponse200ItemOurCommitment extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    protected $compressedState;
    /**
     * @var int
     */
    protected $inboxLevel;

    protected $predecessor;
    /**
     * Decimal representation of 64 bit integers.
     *
     * @var string
     */
    protected $numberOfTicks;

    public function getCompressedState()
    {
        return $this->compressedState;
    }

    public function setCompressedState($compressedState): self
    {
        $this->initialized['compressedState'] = true;
        $this->compressedState = $compressedState;

        return $this;
    }

    public function getInboxLevel(): int
    {
        return $this->inboxLevel;
    }

    public function setInboxLevel(int $inboxLevel): self
    {
        $this->initialized['inboxLevel'] = true;
        $this->inboxLevel = $inboxLevel;

        return $this;
    }

    public function getPredecessor()
    {
        return $this->predecessor;
    }

    public function setPredecessor($predecessor): self
    {
        $this->initialized['predecessor'] = true;
        $this->predecessor = $predecessor;

        return $this;
    }

    /**
     * Decimal representation of 64 bit integers.
     */
    public function getNumberOfTicks(): string
    {
        return $this->numberOfTicks;
    }

    /**
     * Decimal representation of 64 bit integers.
     */
    public function setNumberOfTicks(string $numberOfTicks): self
    {
        $this->initialized['numberOfTicks'] = true;
        $this->numberOfTicks = $numberOfTicks;

        return $this;
    }
}
