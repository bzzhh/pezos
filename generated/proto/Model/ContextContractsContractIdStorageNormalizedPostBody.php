<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class ContextContractsContractIdStorageNormalizedPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    protected $unparsingMode;

    public function getUnparsingMode()
    {
        return $this->unparsingMode;
    }

    public function setUnparsingMode($unparsingMode): self
    {
        $this->initialized['unparsingMode'] = true;
        $this->unparsingMode = $unparsingMode;

        return $this;
    }
}
