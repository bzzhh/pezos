<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class ConfigGetResponse200P2pLimits extends \ArrayObject
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
     * Delay acceptable when initiating a connection to a new peer, in seconds.
     */
    protected $connectionTimeout;
    /**
     * Delay granted to a peer to perform authentication, in seconds.
     */
    protected $authenticationTimeout;
    /**
     * Strict minimum number of connections (triggers an urgent maintenance).
     *
     * @var int
     */
    protected $minConnections;
    /**
     * Targeted number of connections to reach when bootstrapping / maintaining.
     *
     * @var int
     */
    protected $expectedConnections;
    /**
     * Maximum number of connections (exceeding peers are disconnected).
     *
     * @var int
     */
    protected $maxConnections;
    /**
     * Number above which pending incoming connections are immediately rejected.
     *
     * @var int
     */
    protected $backlog;
    /**
     * Number above which pending incoming connections are immediately rejected.
     *
     * @var int
     */
    protected $maxIncomingConnections;
    /**
     * Max download speeds in KiB/s.
     *
     * @var int
     */
    protected $maxDownloadSpeed;
    /**
     * Max upload speeds in KiB/s.
     *
     * @var int
     */
    protected $maxUploadSpeed;
    /**
     * @var mixed|null
     */
    protected $swapLinger;
    /**
     * @var int
     */
    protected $binaryChunksSize;
    /**
     * Size of the buffer passed to read(2).
     *
     * @var int
     */
    protected $readBufferSize;
    /**
     * @var int
     */
    protected $readQueueSize;
    /**
     * @var int
     */
    protected $writeQueueSize;
    /**
     * @var int
     */
    protected $incomingAppMessageQueueSize;
    /**
     * @var int
     */
    protected $incomingMessageQueueSize;
    /**
     * @var int
     */
    protected $outgoingMessageQueueSize;
    /**
     * The max and target size for the known address table.
     *
     * @var mixed[]
     */
    protected $maxKnownPoints;
    /**
     * The max and target size for the known peers table.
     *
     * @var mixed[]
     */
    protected $maxKnownPeerIds;
    /**
     * The number of peer_ids kept in the peer_id greylist.
     *
     * @var int
     */
    protected $peerGreylistSize;
    /**
     * The size of the IP address greylist (in kilobytes).
     *
     * @var int
     */
    protected $ipGreylistSizeInKilobytes;
    /**
     * The time an IP address is kept in the greylist.
     */
    protected $ipGreylistCleanupDelay;
    /**
     * GC delay for the greylists tables, in seconds.
     */
    protected $greylistTimeout;
    /**
     * How long to wait at most, in seconds, before running a maintenance loop. If null -- decoding to None -- is provided then the maintenance is disabled.
     *
     * @var mixed|null
     */
    protected $maintenanceIdleTime;

    /**
     * Delay acceptable when initiating a connection to a new peer, in seconds.
     */
    public function getConnectionTimeout()
    {
        return $this->connectionTimeout;
    }

    /**
     * Delay acceptable when initiating a connection to a new peer, in seconds.
     */
    public function setConnectionTimeout($connectionTimeout): self
    {
        $this->initialized['connectionTimeout'] = true;
        $this->connectionTimeout = $connectionTimeout;

        return $this;
    }

    /**
     * Delay granted to a peer to perform authentication, in seconds.
     */
    public function getAuthenticationTimeout()
    {
        return $this->authenticationTimeout;
    }

    /**
     * Delay granted to a peer to perform authentication, in seconds.
     */
    public function setAuthenticationTimeout($authenticationTimeout): self
    {
        $this->initialized['authenticationTimeout'] = true;
        $this->authenticationTimeout = $authenticationTimeout;

        return $this;
    }

    /**
     * Strict minimum number of connections (triggers an urgent maintenance).
     */
    public function getMinConnections(): int
    {
        return $this->minConnections;
    }

    /**
     * Strict minimum number of connections (triggers an urgent maintenance).
     */
    public function setMinConnections(int $minConnections): self
    {
        $this->initialized['minConnections'] = true;
        $this->minConnections = $minConnections;

        return $this;
    }

    /**
     * Targeted number of connections to reach when bootstrapping / maintaining.
     */
    public function getExpectedConnections(): int
    {
        return $this->expectedConnections;
    }

    /**
     * Targeted number of connections to reach when bootstrapping / maintaining.
     */
    public function setExpectedConnections(int $expectedConnections): self
    {
        $this->initialized['expectedConnections'] = true;
        $this->expectedConnections = $expectedConnections;

        return $this;
    }

    /**
     * Maximum number of connections (exceeding peers are disconnected).
     */
    public function getMaxConnections(): int
    {
        return $this->maxConnections;
    }

    /**
     * Maximum number of connections (exceeding peers are disconnected).
     */
    public function setMaxConnections(int $maxConnections): self
    {
        $this->initialized['maxConnections'] = true;
        $this->maxConnections = $maxConnections;

        return $this;
    }

    /**
     * Number above which pending incoming connections are immediately rejected.
     */
    public function getBacklog(): int
    {
        return $this->backlog;
    }

    /**
     * Number above which pending incoming connections are immediately rejected.
     */
    public function setBacklog(int $backlog): self
    {
        $this->initialized['backlog'] = true;
        $this->backlog = $backlog;

        return $this;
    }

    /**
     * Number above which pending incoming connections are immediately rejected.
     */
    public function getMaxIncomingConnections(): int
    {
        return $this->maxIncomingConnections;
    }

    /**
     * Number above which pending incoming connections are immediately rejected.
     */
    public function setMaxIncomingConnections(int $maxIncomingConnections): self
    {
        $this->initialized['maxIncomingConnections'] = true;
        $this->maxIncomingConnections = $maxIncomingConnections;

        return $this;
    }

    /**
     * Max download speeds in KiB/s.
     */
    public function getMaxDownloadSpeed(): int
    {
        return $this->maxDownloadSpeed;
    }

    /**
     * Max download speeds in KiB/s.
     */
    public function setMaxDownloadSpeed(int $maxDownloadSpeed): self
    {
        $this->initialized['maxDownloadSpeed'] = true;
        $this->maxDownloadSpeed = $maxDownloadSpeed;

        return $this;
    }

    /**
     * Max upload speeds in KiB/s.
     */
    public function getMaxUploadSpeed(): int
    {
        return $this->maxUploadSpeed;
    }

    /**
     * Max upload speeds in KiB/s.
     */
    public function setMaxUploadSpeed(int $maxUploadSpeed): self
    {
        $this->initialized['maxUploadSpeed'] = true;
        $this->maxUploadSpeed = $maxUploadSpeed;

        return $this;
    }

    public function getSwapLinger()
    {
        return $this->swapLinger;
    }

    public function setSwapLinger($swapLinger): self
    {
        $this->initialized['swapLinger'] = true;
        $this->swapLinger = $swapLinger;

        return $this;
    }

    public function getBinaryChunksSize(): int
    {
        return $this->binaryChunksSize;
    }

    public function setBinaryChunksSize(int $binaryChunksSize): self
    {
        $this->initialized['binaryChunksSize'] = true;
        $this->binaryChunksSize = $binaryChunksSize;

        return $this;
    }

    /**
     * Size of the buffer passed to read(2).
     */
    public function getReadBufferSize(): int
    {
        return $this->readBufferSize;
    }

    /**
     * Size of the buffer passed to read(2).
     */
    public function setReadBufferSize(int $readBufferSize): self
    {
        $this->initialized['readBufferSize'] = true;
        $this->readBufferSize = $readBufferSize;

        return $this;
    }

    public function getReadQueueSize(): int
    {
        return $this->readQueueSize;
    }

    public function setReadQueueSize(int $readQueueSize): self
    {
        $this->initialized['readQueueSize'] = true;
        $this->readQueueSize = $readQueueSize;

        return $this;
    }

    public function getWriteQueueSize(): int
    {
        return $this->writeQueueSize;
    }

    public function setWriteQueueSize(int $writeQueueSize): self
    {
        $this->initialized['writeQueueSize'] = true;
        $this->writeQueueSize = $writeQueueSize;

        return $this;
    }

    public function getIncomingAppMessageQueueSize(): int
    {
        return $this->incomingAppMessageQueueSize;
    }

    public function setIncomingAppMessageQueueSize(int $incomingAppMessageQueueSize): self
    {
        $this->initialized['incomingAppMessageQueueSize'] = true;
        $this->incomingAppMessageQueueSize = $incomingAppMessageQueueSize;

        return $this;
    }

    public function getIncomingMessageQueueSize(): int
    {
        return $this->incomingMessageQueueSize;
    }

    public function setIncomingMessageQueueSize(int $incomingMessageQueueSize): self
    {
        $this->initialized['incomingMessageQueueSize'] = true;
        $this->incomingMessageQueueSize = $incomingMessageQueueSize;

        return $this;
    }

    public function getOutgoingMessageQueueSize(): int
    {
        return $this->outgoingMessageQueueSize;
    }

    public function setOutgoingMessageQueueSize(int $outgoingMessageQueueSize): self
    {
        $this->initialized['outgoingMessageQueueSize'] = true;
        $this->outgoingMessageQueueSize = $outgoingMessageQueueSize;

        return $this;
    }

    /**
     * The max and target size for the known address table.
     *
     * @return mixed[]
     */
    public function getMaxKnownPoints(): array
    {
        return $this->maxKnownPoints;
    }

    /**
     * The max and target size for the known address table.
     *
     * @param mixed[] $maxKnownPoints
     */
    public function setMaxKnownPoints(array $maxKnownPoints): self
    {
        $this->initialized['maxKnownPoints'] = true;
        $this->maxKnownPoints = $maxKnownPoints;

        return $this;
    }

    /**
     * The max and target size for the known peers table.
     *
     * @return mixed[]
     */
    public function getMaxKnownPeerIds(): array
    {
        return $this->maxKnownPeerIds;
    }

    /**
     * The max and target size for the known peers table.
     *
     * @param mixed[] $maxKnownPeerIds
     */
    public function setMaxKnownPeerIds(array $maxKnownPeerIds): self
    {
        $this->initialized['maxKnownPeerIds'] = true;
        $this->maxKnownPeerIds = $maxKnownPeerIds;

        return $this;
    }

    /**
     * The number of peer_ids kept in the peer_id greylist.
     */
    public function getPeerGreylistSize(): int
    {
        return $this->peerGreylistSize;
    }

    /**
     * The number of peer_ids kept in the peer_id greylist.
     */
    public function setPeerGreylistSize(int $peerGreylistSize): self
    {
        $this->initialized['peerGreylistSize'] = true;
        $this->peerGreylistSize = $peerGreylistSize;

        return $this;
    }

    /**
     * The size of the IP address greylist (in kilobytes).
     */
    public function getIpGreylistSizeInKilobytes(): int
    {
        return $this->ipGreylistSizeInKilobytes;
    }

    /**
     * The size of the IP address greylist (in kilobytes).
     */
    public function setIpGreylistSizeInKilobytes(int $ipGreylistSizeInKilobytes): self
    {
        $this->initialized['ipGreylistSizeInKilobytes'] = true;
        $this->ipGreylistSizeInKilobytes = $ipGreylistSizeInKilobytes;

        return $this;
    }

    /**
     * The time an IP address is kept in the greylist.
     */
    public function getIpGreylistCleanupDelay()
    {
        return $this->ipGreylistCleanupDelay;
    }

    /**
     * The time an IP address is kept in the greylist.
     */
    public function setIpGreylistCleanupDelay($ipGreylistCleanupDelay): self
    {
        $this->initialized['ipGreylistCleanupDelay'] = true;
        $this->ipGreylistCleanupDelay = $ipGreylistCleanupDelay;

        return $this;
    }

    /**
     * GC delay for the greylists tables, in seconds.
     */
    public function getGreylistTimeout()
    {
        return $this->greylistTimeout;
    }

    /**
     * GC delay for the greylists tables, in seconds.
     */
    public function setGreylistTimeout($greylistTimeout): self
    {
        $this->initialized['greylistTimeout'] = true;
        $this->greylistTimeout = $greylistTimeout;

        return $this;
    }

    /**
     * How long to wait at most, in seconds, before running a maintenance loop. If null -- decoding to None -- is provided then the maintenance is disabled.
     */
    public function getMaintenanceIdleTime()
    {
        return $this->maintenanceIdleTime;
    }

    /**
     * How long to wait at most, in seconds, before running a maintenance loop. If null -- decoding to None -- is provided then the maintenance is disabled.
     */
    public function setMaintenanceIdleTime($maintenanceIdleTime): self
    {
        $this->initialized['maintenanceIdleTime'] = true;
        $this->maintenanceIdleTime = $maintenanceIdleTime;

        return $this;
    }
}
