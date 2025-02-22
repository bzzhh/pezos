<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class HelpersLevelsInCurrentCycleGetResponse200 extends \ArrayObject
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
    protected $first;
    /**
     * @var int
     */
    protected $last;

    public function getFirst(): int
    {
        return $this->first;
    }

    public function setFirst(int $first): self
    {
        $this->initialized['first'] = true;
        $this->first = $first;

        return $this;
    }

    public function getLast(): int
    {
        return $this->last;
    }

    public function setLast(int $last): self
    {
        $this->initialized['last'] = true;
        $this->last = $last;

        return $this;
    }
}
