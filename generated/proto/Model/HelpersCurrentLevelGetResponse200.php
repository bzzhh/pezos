<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersCurrentLevelGetResponse200 extends \ArrayObject
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
     * The level of the block relative to genesis. This is also the Shell's notion of level.
     *
     * @var int
     */
    protected $level;
    /**
     * The level of the block relative to the successor of the genesis block. More precisely, it is the position of the block relative to the block that starts the "Alpha family" of protocols, which includes all protocols except Genesis (that is, from 001 onwards).
     *
     * @var int
     */
    protected $levelPosition;
    /**
     * The current cycle's number. Note that cycles are a protocol-specific notion. As a result, the cycle number starts at 0 with the first block of the Alpha family of protocols.
     *
     * @var int
     */
    protected $cycle;
    /**
     * The current level of the block relative to the first block of the current cycle.
     *
     * @var int
     */
    protected $cyclePosition;
    /**
     * Tells whether the baker of this block has to commit a seed nonce hash.
     *
     * @var bool
     */
    protected $expectedCommitment;

    /**
     * The level of the block relative to genesis. This is also the Shell's notion of level.
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * The level of the block relative to genesis. This is also the Shell's notion of level.
     */
    public function setLevel(int $level): self
    {
        $this->initialized['level'] = true;
        $this->level = $level;

        return $this;
    }

    /**
     * The level of the block relative to the successor of the genesis block. More precisely, it is the position of the block relative to the block that starts the "Alpha family" of protocols, which includes all protocols except Genesis (that is, from 001 onwards).
     */
    public function getLevelPosition(): int
    {
        return $this->levelPosition;
    }

    /**
     * The level of the block relative to the successor of the genesis block. More precisely, it is the position of the block relative to the block that starts the "Alpha family" of protocols, which includes all protocols except Genesis (that is, from 001 onwards).
     */
    public function setLevelPosition(int $levelPosition): self
    {
        $this->initialized['levelPosition'] = true;
        $this->levelPosition = $levelPosition;

        return $this;
    }

    /**
     * The current cycle's number. Note that cycles are a protocol-specific notion. As a result, the cycle number starts at 0 with the first block of the Alpha family of protocols.
     */
    public function getCycle(): int
    {
        return $this->cycle;
    }

    /**
     * The current cycle's number. Note that cycles are a protocol-specific notion. As a result, the cycle number starts at 0 with the first block of the Alpha family of protocols.
     */
    public function setCycle(int $cycle): self
    {
        $this->initialized['cycle'] = true;
        $this->cycle = $cycle;

        return $this;
    }

    /**
     * The current level of the block relative to the first block of the current cycle.
     */
    public function getCyclePosition(): int
    {
        return $this->cyclePosition;
    }

    /**
     * The current level of the block relative to the first block of the current cycle.
     */
    public function setCyclePosition(int $cyclePosition): self
    {
        $this->initialized['cyclePosition'] = true;
        $this->cyclePosition = $cyclePosition;

        return $this;
    }

    /**
     * Tells whether the baker of this block has to commit a seed nonce hash.
     */
    public function getExpectedCommitment(): bool
    {
        return $this->expectedCommitment;
    }

    /**
     * Tells whether the baker of this block has to commit a seed nonce hash.
     */
    public function setExpectedCommitment(bool $expectedCommitment): self
    {
        $this->initialized['expectedCommitment'] = true;
        $this->expectedCommitment = $expectedCommitment;

        return $this;
    }
}
