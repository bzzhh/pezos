<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Rollup\Model;

class GlobalBlockBlockIdSimulatePostResponse200 extends \ArrayObject
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
     * Hash of the state after execution of the PVM on the input messages.
     */
    protected $stateHash;
    /**
     * Status of the PVM after evaluation.
     */
    protected $status;
    /**
     * Output produced by evaluation of the messages.
     *
     * @var list<GlobalBlockBlockIdSimulatePostResponse200OutputItem>
     */
    protected $output;
    /**
     * Level of the inbox that would contain these messages.
     *
     * @var int
     */
    protected $inboxLevel;
    /**
     * Ticks taken by the PVM for evaluating the messages.
     */
    protected $numTicks;
    /**
     * PVM state values requested after the simulation.
     *
     * @var list<mixed>
     */
    protected $insights;

    /**
     * Hash of the state after execution of the PVM on the input messages.
     */
    public function getStateHash()
    {
        return $this->stateHash;
    }

    /**
     * Hash of the state after execution of the PVM on the input messages.
     */
    public function setStateHash($stateHash): self
    {
        $this->initialized['stateHash'] = true;
        $this->stateHash = $stateHash;

        return $this;
    }

    /**
     * Status of the PVM after evaluation.
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the PVM after evaluation.
     */
    public function setStatus($status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Output produced by evaluation of the messages.
     *
     * @return list<GlobalBlockBlockIdSimulatePostResponse200OutputItem>
     */
    public function getOutput(): array
    {
        return $this->output;
    }

    /**
     * Output produced by evaluation of the messages.
     *
     * @param list<GlobalBlockBlockIdSimulatePostResponse200OutputItem> $output
     */
    public function setOutput(array $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;

        return $this;
    }

    /**
     * Level of the inbox that would contain these messages.
     */
    public function getInboxLevel(): int
    {
        return $this->inboxLevel;
    }

    /**
     * Level of the inbox that would contain these messages.
     */
    public function setInboxLevel(int $inboxLevel): self
    {
        $this->initialized['inboxLevel'] = true;
        $this->inboxLevel = $inboxLevel;

        return $this;
    }

    /**
     * Ticks taken by the PVM for evaluating the messages.
     */
    public function getNumTicks()
    {
        return $this->numTicks;
    }

    /**
     * Ticks taken by the PVM for evaluating the messages.
     */
    public function setNumTicks($numTicks): self
    {
        $this->initialized['numTicks'] = true;
        $this->numTicks = $numTicks;

        return $this;
    }

    /**
     * PVM state values requested after the simulation.
     *
     * @return list<mixed>
     */
    public function getInsights(): array
    {
        return $this->insights;
    }

    /**
     * PVM state values requested after the simulation.
     *
     * @param list<mixed> $insights
     */
    public function setInsights(array $insights): self
    {
        $this->initialized['insights'] = true;
        $this->insights = $insights;

        return $this;
    }
}
