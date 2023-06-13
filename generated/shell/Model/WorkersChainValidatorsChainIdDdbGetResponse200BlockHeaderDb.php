<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class WorkersChainValidatorsChainIdDdbGetResponse200BlockHeaderDb extends \ArrayObject
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
     * @var int
     */
    protected $tableLength;
    /**
     * @var int
     */
    protected $schedulerLength;

    public function getTableLength(): int
    {
        return $this->tableLength;
    }

    public function setTableLength(int $tableLength): self
    {
        $this->initialized['tableLength'] = true;
        $this->tableLength = $tableLength;

        return $this;
    }

    public function getSchedulerLength(): int
    {
        return $this->schedulerLength;
    }

    public function setSchedulerLength(int $schedulerLength): self
    {
        $this->initialized['schedulerLength'] = true;
        $this->schedulerLength = $schedulerLength;

        return $this;
    }
}
