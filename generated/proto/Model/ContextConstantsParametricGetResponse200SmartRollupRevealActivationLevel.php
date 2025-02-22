<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class ContextConstantsParametricGetResponse200SmartRollupRevealActivationLevel extends \ArrayObject
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
     * @var ContextConstantsParametricGetResponse200SmartRollupRevealActivationLevelRawData
     */
    protected $rawData;
    /**
     * @var int
     */
    protected $metadata;
    /**
     * @var int
     */
    protected $dalPage;
    /**
     * @var int
     */
    protected $dalParameters;
    /**
     * @var int
     */
    protected $dalAttestedSlotsValidityLag;

    public function getRawData(): ContextConstantsParametricGetResponse200SmartRollupRevealActivationLevelRawData
    {
        return $this->rawData;
    }

    public function setRawData(ContextConstantsParametricGetResponse200SmartRollupRevealActivationLevelRawData $rawData): self
    {
        $this->initialized['rawData'] = true;
        $this->rawData = $rawData;

        return $this;
    }

    public function getMetadata(): int
    {
        return $this->metadata;
    }

    public function setMetadata(int $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;

        return $this;
    }

    public function getDalPage(): int
    {
        return $this->dalPage;
    }

    public function setDalPage(int $dalPage): self
    {
        $this->initialized['dalPage'] = true;
        $this->dalPage = $dalPage;

        return $this;
    }

    public function getDalParameters(): int
    {
        return $this->dalParameters;
    }

    public function setDalParameters(int $dalParameters): self
    {
        $this->initialized['dalParameters'] = true;
        $this->dalParameters = $dalParameters;

        return $this;
    }

    public function getDalAttestedSlotsValidityLag(): int
    {
        return $this->dalAttestedSlotsValidityLag;
    }

    public function setDalAttestedSlotsValidityLag(int $dalAttestedSlotsValidityLag): self
    {
        $this->initialized['dalAttestedSlotsValidityLag'] = true;
        $this->dalAttestedSlotsValidityLag = $dalAttestedSlotsValidityLag;

        return $this;
    }
}
