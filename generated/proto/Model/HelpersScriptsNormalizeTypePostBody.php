<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class HelpersScriptsNormalizeTypePostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    protected $type;

    public function getType()
    {
        return $this->type;
    }

    public function setType($type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
