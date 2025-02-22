<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Shell\Model;

class ConfigNetworkUserActivatedProtocolOverridesGetResponse200Item extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    protected $replacedProtocol;
    protected $replacementProtocol;

    public function getReplacedProtocol()
    {
        return $this->replacedProtocol;
    }

    public function setReplacedProtocol($replacedProtocol): self
    {
        $this->initialized['replacedProtocol'] = true;
        $this->replacedProtocol = $replacedProtocol;

        return $this;
    }

    public function getReplacementProtocol()
    {
        return $this->replacementProtocol;
    }

    public function setReplacementProtocol($replacementProtocol): self
    {
        $this->initialized['replacementProtocol'] = true;
        $this->replacementProtocol = $replacementProtocol;

        return $this;
    }
}
