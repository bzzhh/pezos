<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class ProtocolsProtocolHashGetResponse200ComponentsItem extends \ArrayObject
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
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     */
    protected $name;
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     */
    protected $interface;
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     */
    protected $implementation;

    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     */
    public function setName($name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     */
    public function setInterface($interface): self
    {
        $this->initialized['interface'] = true;
        $this->interface = $interface;

        return $this;
    }

    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     */
    public function setImplementation($implementation): self
    {
        $this->initialized['implementation'] = true;
        $this->implementation = $implementation;

        return $this;
    }
}
