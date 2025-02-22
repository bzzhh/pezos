<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Shell\Model;

class WorkersPrevalidatorsGetResponse200Item extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    protected $chainId;
    protected $status;
    /**
     * @var WorkersPrevalidatorsGetResponse200ItemInformation
     */
    protected $information;
    /**
     * @var int
     */
    protected $pipelines;

    public function getChainId()
    {
        return $this->chainId;
    }

    public function setChainId($chainId): self
    {
        $this->initialized['chainId'] = true;
        $this->chainId = $chainId;

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    public function getInformation(): WorkersPrevalidatorsGetResponse200ItemInformation
    {
        return $this->information;
    }

    public function setInformation(WorkersPrevalidatorsGetResponse200ItemInformation $information): self
    {
        $this->initialized['information'] = true;
        $this->information = $information;

        return $this;
    }

    public function getPipelines(): int
    {
        return $this->pipelines;
    }

    public function setPipelines(int $pipelines): self
    {
        $this->initialized['pipelines'] = true;
        $this->pipelines = $pipelines;

        return $this;
    }
}
