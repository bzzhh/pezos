<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersForgeTxRollupInboxMerkleTreePathPostResponse200 extends \ArrayObject
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
     * @var mixed[]
     */
    protected $path;

    /**
     * @return mixed[]
     */
    public function getPath(): array
    {
        return $this->path;
    }

    /**
     * @param mixed[] $path
     */
    public function setPath(array $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;

        return $this;
    }
}
