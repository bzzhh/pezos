<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersForgeTxRollupInboxMerkleTreeHashPostBody extends \ArrayObject
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
    protected $messageHashes;

    /**
     * @return mixed[]
     */
    public function getMessageHashes(): array
    {
        return $this->messageHashes;
    }

    /**
     * @param mixed[] $messageHashes
     */
    public function setMessageHashes(array $messageHashes): self
    {
        $this->initialized['messageHashes'] = true;
        $this->messageHashes = $messageHashes;

        return $this;
    }
}
