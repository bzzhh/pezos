<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class ContextContractsContractIdScriptGetResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    protected $code;

    protected $storage;

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    public function getStorage()
    {
        return $this->storage;
    }

    public function setStorage($storage): self
    {
        $this->initialized['storage'] = true;
        $this->storage = $storage;

        return $this;
    }
}
