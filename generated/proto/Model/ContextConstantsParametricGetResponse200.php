<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class ContextConstantsParametricGetResponse200 extends \ArrayObject
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
     * @var int
     */
    protected $preservedCycles;
    /**
     * @var int
     */
    protected $blocksPerCycle;
    /**
     * @var int
     */
    protected $blocksPerCommitment;
    /**
     * @var int
     */
    protected $nonceRevelationThreshold;
    /**
     * @var int
     */
    protected $blocksPerStakeSnapshot;
    /**
     * @var int
     */
    protected $cyclesPerVotingPeriod;
    /**
     * Decimal representation of a big number.
     *
     * @var string
     */
    protected $hardGasLimitPerOperation;
    /**
     * Decimal representation of a big number.
     *
     * @var string
     */
    protected $hardGasLimitPerBlock;
    /**
     * Decimal representation of 64 bit integers.
     *
     * @var string
     */
    protected $proofOfWorkThreshold;
    /**
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $minimalStake;
    /**
     * Decimal representation of 64 bit integers.
     *
     * @var string
     */
    protected $vdfDifficulty;
    /**
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $seedNonceRevelationTip;
    /**
     * @var int
     */
    protected $originationSize;
    /**
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $bakingRewardFixedPortion;
    /**
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $bakingRewardBonusPerSlot;
    /**
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $endorsingRewardPerSlot;
    /**
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $costPerByte;
    /**
     * Decimal representation of a big number.
     *
     * @var string
     */
    protected $hardStorageLimitPerOperation;
    /**
     * @var int
     */
    protected $quorumMin;
    /**
     * @var int
     */
    protected $quorumMax;
    /**
     * @var int
     */
    protected $minProposalQuorum;
    /**
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $liquidityBakingSubsidy;
    /**
     * @var int
     */
    protected $liquidityBakingToggleEmaThreshold;
    /**
     * @var int
     */
    protected $maxOperationsTimeToLive;
    /**
     * Decimal representation of 64 bit integers.
     *
     * @var string
     */
    protected $minimalBlockDelay;
    /**
     * Decimal representation of 64 bit integers.
     *
     * @var string
     */
    protected $delayIncrementPerRound;
    /**
     * @var int
     */
    protected $consensusCommitteeSize;
    /**
     * @var int
     */
    protected $consensusThreshold;
    /**
     * @var ContextConstantsParametricGetResponse200MinimalParticipationRatio
     */
    protected $minimalParticipationRatio;
    /**
     * @var int
     */
    protected $maxSlashingPeriod;
    /**
     * @var int
     */
    protected $frozenDepositsPercentage;
    /**
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $doubleBakingPunishment;
    /**
     * @var ContextConstantsParametricGetResponse200RatioOfFrozenDepositsSlashedPerDoubleEndorsement
     */
    protected $ratioOfFrozenDepositsSlashedPerDoubleEndorsement;

    protected $testnetDictator;

    protected $initialSeed;
    /**
     * @var int
     */
    protected $cacheScriptSize;
    /**
     * @var int
     */
    protected $cacheStakeDistributionCycles;
    /**
     * @var int
     */
    protected $cacheSamplerStateCycles;
    /**
     * @var bool
     */
    protected $txRollupEnable;
    /**
     * @var int
     */
    protected $txRollupOriginationSize;
    /**
     * @var int
     */
    protected $txRollupHardSizeLimitPerInbox;
    /**
     * @var int
     */
    protected $txRollupHardSizeLimitPerMessage;
    /**
     * @var int
     */
    protected $txRollupMaxWithdrawalsPerBatch;
    /**
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $txRollupCommitmentBond;
    /**
     * @var int
     */
    protected $txRollupFinalityPeriod;
    /**
     * @var int
     */
    protected $txRollupWithdrawPeriod;
    /**
     * @var int
     */
    protected $txRollupMaxInboxesCount;
    /**
     * @var int
     */
    protected $txRollupMaxMessagesPerInbox;
    /**
     * @var int
     */
    protected $txRollupMaxCommitmentsCount;
    /**
     * @var int
     */
    protected $txRollupCostPerByteEmaFactor;
    /**
     * @var int
     */
    protected $txRollupMaxTicketPayloadSize;
    /**
     * @var int
     */
    protected $txRollupRejectionMaxProofSize;
    /**
     * @var int
     */
    protected $txRollupSunsetLevel;
    /**
     * @var ContextConstantsParametricGetResponse200DalParametric
     */
    protected $dalParametric;
    /**
     * @var bool
     */
    protected $smartRollupEnable;
    /**
     * @var bool
     */
    protected $smartRollupArithPvmEnable;
    /**
     * @var int
     */
    protected $smartRollupOriginationSize;
    /**
     * @var int
     */
    protected $smartRollupChallengeWindowInBlocks;
    /**
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $smartRollupStakeAmount;
    /**
     * @var int
     */
    protected $smartRollupCommitmentPeriodInBlocks;
    /**
     * @var int
     */
    protected $smartRollupMaxLookaheadInBlocks;
    /**
     * @var int
     */
    protected $smartRollupMaxActiveOutboxLevels;
    /**
     * @var int
     */
    protected $smartRollupMaxOutboxMessagesPerLevel;
    /**
     * @var int
     */
    protected $smartRollupNumberOfSectionsInDissection;
    /**
     * @var int
     */
    protected $smartRollupTimeoutPeriodInBlocks;
    /**
     * @var int
     */
    protected $smartRollupMaxNumberOfCementedCommitments;
    /**
     * @var int
     */
    protected $smartRollupMaxNumberOfParallelGames;
    /**
     * @var bool
     */
    protected $zkRollupEnable;
    /**
     * @var int
     */
    protected $zkRollupOriginationSize;
    /**
     * @var int
     */
    protected $zkRollupMinPendingToProcess;

    public function getPreservedCycles(): int
    {
        return $this->preservedCycles;
    }

    public function setPreservedCycles(int $preservedCycles): self
    {
        $this->initialized['preservedCycles'] = true;
        $this->preservedCycles = $preservedCycles;

        return $this;
    }

    public function getBlocksPerCycle(): int
    {
        return $this->blocksPerCycle;
    }

    public function setBlocksPerCycle(int $blocksPerCycle): self
    {
        $this->initialized['blocksPerCycle'] = true;
        $this->blocksPerCycle = $blocksPerCycle;

        return $this;
    }

    public function getBlocksPerCommitment(): int
    {
        return $this->blocksPerCommitment;
    }

    public function setBlocksPerCommitment(int $blocksPerCommitment): self
    {
        $this->initialized['blocksPerCommitment'] = true;
        $this->blocksPerCommitment = $blocksPerCommitment;

        return $this;
    }

    public function getNonceRevelationThreshold(): int
    {
        return $this->nonceRevelationThreshold;
    }

    public function setNonceRevelationThreshold(int $nonceRevelationThreshold): self
    {
        $this->initialized['nonceRevelationThreshold'] = true;
        $this->nonceRevelationThreshold = $nonceRevelationThreshold;

        return $this;
    }

    public function getBlocksPerStakeSnapshot(): int
    {
        return $this->blocksPerStakeSnapshot;
    }

    public function setBlocksPerStakeSnapshot(int $blocksPerStakeSnapshot): self
    {
        $this->initialized['blocksPerStakeSnapshot'] = true;
        $this->blocksPerStakeSnapshot = $blocksPerStakeSnapshot;

        return $this;
    }

    public function getCyclesPerVotingPeriod(): int
    {
        return $this->cyclesPerVotingPeriod;
    }

    public function setCyclesPerVotingPeriod(int $cyclesPerVotingPeriod): self
    {
        $this->initialized['cyclesPerVotingPeriod'] = true;
        $this->cyclesPerVotingPeriod = $cyclesPerVotingPeriod;

        return $this;
    }

    /**
     * Decimal representation of a big number.
     */
    public function getHardGasLimitPerOperation(): string
    {
        return $this->hardGasLimitPerOperation;
    }

    /**
     * Decimal representation of a big number.
     */
    public function setHardGasLimitPerOperation(string $hardGasLimitPerOperation): self
    {
        $this->initialized['hardGasLimitPerOperation'] = true;
        $this->hardGasLimitPerOperation = $hardGasLimitPerOperation;

        return $this;
    }

    /**
     * Decimal representation of a big number.
     */
    public function getHardGasLimitPerBlock(): string
    {
        return $this->hardGasLimitPerBlock;
    }

    /**
     * Decimal representation of a big number.
     */
    public function setHardGasLimitPerBlock(string $hardGasLimitPerBlock): self
    {
        $this->initialized['hardGasLimitPerBlock'] = true;
        $this->hardGasLimitPerBlock = $hardGasLimitPerBlock;

        return $this;
    }

    /**
     * Decimal representation of 64 bit integers.
     */
    public function getProofOfWorkThreshold(): string
    {
        return $this->proofOfWorkThreshold;
    }

    /**
     * Decimal representation of 64 bit integers.
     */
    public function setProofOfWorkThreshold(string $proofOfWorkThreshold): self
    {
        $this->initialized['proofOfWorkThreshold'] = true;
        $this->proofOfWorkThreshold = $proofOfWorkThreshold;

        return $this;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function getMinimalStake(): string
    {
        return $this->minimalStake;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setMinimalStake(string $minimalStake): self
    {
        $this->initialized['minimalStake'] = true;
        $this->minimalStake = $minimalStake;

        return $this;
    }

    /**
     * Decimal representation of 64 bit integers.
     */
    public function getVdfDifficulty(): string
    {
        return $this->vdfDifficulty;
    }

    /**
     * Decimal representation of 64 bit integers.
     */
    public function setVdfDifficulty(string $vdfDifficulty): self
    {
        $this->initialized['vdfDifficulty'] = true;
        $this->vdfDifficulty = $vdfDifficulty;

        return $this;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function getSeedNonceRevelationTip(): string
    {
        return $this->seedNonceRevelationTip;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setSeedNonceRevelationTip(string $seedNonceRevelationTip): self
    {
        $this->initialized['seedNonceRevelationTip'] = true;
        $this->seedNonceRevelationTip = $seedNonceRevelationTip;

        return $this;
    }

    public function getOriginationSize(): int
    {
        return $this->originationSize;
    }

    public function setOriginationSize(int $originationSize): self
    {
        $this->initialized['originationSize'] = true;
        $this->originationSize = $originationSize;

        return $this;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function getBakingRewardFixedPortion(): string
    {
        return $this->bakingRewardFixedPortion;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setBakingRewardFixedPortion(string $bakingRewardFixedPortion): self
    {
        $this->initialized['bakingRewardFixedPortion'] = true;
        $this->bakingRewardFixedPortion = $bakingRewardFixedPortion;

        return $this;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function getBakingRewardBonusPerSlot(): string
    {
        return $this->bakingRewardBonusPerSlot;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setBakingRewardBonusPerSlot(string $bakingRewardBonusPerSlot): self
    {
        $this->initialized['bakingRewardBonusPerSlot'] = true;
        $this->bakingRewardBonusPerSlot = $bakingRewardBonusPerSlot;

        return $this;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function getEndorsingRewardPerSlot(): string
    {
        return $this->endorsingRewardPerSlot;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setEndorsingRewardPerSlot(string $endorsingRewardPerSlot): self
    {
        $this->initialized['endorsingRewardPerSlot'] = true;
        $this->endorsingRewardPerSlot = $endorsingRewardPerSlot;

        return $this;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function getCostPerByte(): string
    {
        return $this->costPerByte;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setCostPerByte(string $costPerByte): self
    {
        $this->initialized['costPerByte'] = true;
        $this->costPerByte = $costPerByte;

        return $this;
    }

    /**
     * Decimal representation of a big number.
     */
    public function getHardStorageLimitPerOperation(): string
    {
        return $this->hardStorageLimitPerOperation;
    }

    /**
     * Decimal representation of a big number.
     */
    public function setHardStorageLimitPerOperation(string $hardStorageLimitPerOperation): self
    {
        $this->initialized['hardStorageLimitPerOperation'] = true;
        $this->hardStorageLimitPerOperation = $hardStorageLimitPerOperation;

        return $this;
    }

    public function getQuorumMin(): int
    {
        return $this->quorumMin;
    }

    public function setQuorumMin(int $quorumMin): self
    {
        $this->initialized['quorumMin'] = true;
        $this->quorumMin = $quorumMin;

        return $this;
    }

    public function getQuorumMax(): int
    {
        return $this->quorumMax;
    }

    public function setQuorumMax(int $quorumMax): self
    {
        $this->initialized['quorumMax'] = true;
        $this->quorumMax = $quorumMax;

        return $this;
    }

    public function getMinProposalQuorum(): int
    {
        return $this->minProposalQuorum;
    }

    public function setMinProposalQuorum(int $minProposalQuorum): self
    {
        $this->initialized['minProposalQuorum'] = true;
        $this->minProposalQuorum = $minProposalQuorum;

        return $this;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function getLiquidityBakingSubsidy(): string
    {
        return $this->liquidityBakingSubsidy;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setLiquidityBakingSubsidy(string $liquidityBakingSubsidy): self
    {
        $this->initialized['liquidityBakingSubsidy'] = true;
        $this->liquidityBakingSubsidy = $liquidityBakingSubsidy;

        return $this;
    }

    public function getLiquidityBakingToggleEmaThreshold(): int
    {
        return $this->liquidityBakingToggleEmaThreshold;
    }

    public function setLiquidityBakingToggleEmaThreshold(int $liquidityBakingToggleEmaThreshold): self
    {
        $this->initialized['liquidityBakingToggleEmaThreshold'] = true;
        $this->liquidityBakingToggleEmaThreshold = $liquidityBakingToggleEmaThreshold;

        return $this;
    }

    public function getMaxOperationsTimeToLive(): int
    {
        return $this->maxOperationsTimeToLive;
    }

    public function setMaxOperationsTimeToLive(int $maxOperationsTimeToLive): self
    {
        $this->initialized['maxOperationsTimeToLive'] = true;
        $this->maxOperationsTimeToLive = $maxOperationsTimeToLive;

        return $this;
    }

    /**
     * Decimal representation of 64 bit integers.
     */
    public function getMinimalBlockDelay(): string
    {
        return $this->minimalBlockDelay;
    }

    /**
     * Decimal representation of 64 bit integers.
     */
    public function setMinimalBlockDelay(string $minimalBlockDelay): self
    {
        $this->initialized['minimalBlockDelay'] = true;
        $this->minimalBlockDelay = $minimalBlockDelay;

        return $this;
    }

    /**
     * Decimal representation of 64 bit integers.
     */
    public function getDelayIncrementPerRound(): string
    {
        return $this->delayIncrementPerRound;
    }

    /**
     * Decimal representation of 64 bit integers.
     */
    public function setDelayIncrementPerRound(string $delayIncrementPerRound): self
    {
        $this->initialized['delayIncrementPerRound'] = true;
        $this->delayIncrementPerRound = $delayIncrementPerRound;

        return $this;
    }

    public function getConsensusCommitteeSize(): int
    {
        return $this->consensusCommitteeSize;
    }

    public function setConsensusCommitteeSize(int $consensusCommitteeSize): self
    {
        $this->initialized['consensusCommitteeSize'] = true;
        $this->consensusCommitteeSize = $consensusCommitteeSize;

        return $this;
    }

    public function getConsensusThreshold(): int
    {
        return $this->consensusThreshold;
    }

    public function setConsensusThreshold(int $consensusThreshold): self
    {
        $this->initialized['consensusThreshold'] = true;
        $this->consensusThreshold = $consensusThreshold;

        return $this;
    }

    public function getMinimalParticipationRatio(): ContextConstantsParametricGetResponse200MinimalParticipationRatio
    {
        return $this->minimalParticipationRatio;
    }

    public function setMinimalParticipationRatio(ContextConstantsParametricGetResponse200MinimalParticipationRatio $minimalParticipationRatio): self
    {
        $this->initialized['minimalParticipationRatio'] = true;
        $this->minimalParticipationRatio = $minimalParticipationRatio;

        return $this;
    }

    public function getMaxSlashingPeriod(): int
    {
        return $this->maxSlashingPeriod;
    }

    public function setMaxSlashingPeriod(int $maxSlashingPeriod): self
    {
        $this->initialized['maxSlashingPeriod'] = true;
        $this->maxSlashingPeriod = $maxSlashingPeriod;

        return $this;
    }

    public function getFrozenDepositsPercentage(): int
    {
        return $this->frozenDepositsPercentage;
    }

    public function setFrozenDepositsPercentage(int $frozenDepositsPercentage): self
    {
        $this->initialized['frozenDepositsPercentage'] = true;
        $this->frozenDepositsPercentage = $frozenDepositsPercentage;

        return $this;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function getDoubleBakingPunishment(): string
    {
        return $this->doubleBakingPunishment;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setDoubleBakingPunishment(string $doubleBakingPunishment): self
    {
        $this->initialized['doubleBakingPunishment'] = true;
        $this->doubleBakingPunishment = $doubleBakingPunishment;

        return $this;
    }

    public function getRatioOfFrozenDepositsSlashedPerDoubleEndorsement(): ContextConstantsParametricGetResponse200RatioOfFrozenDepositsSlashedPerDoubleEndorsement
    {
        return $this->ratioOfFrozenDepositsSlashedPerDoubleEndorsement;
    }

    public function setRatioOfFrozenDepositsSlashedPerDoubleEndorsement(ContextConstantsParametricGetResponse200RatioOfFrozenDepositsSlashedPerDoubleEndorsement $ratioOfFrozenDepositsSlashedPerDoubleEndorsement): self
    {
        $this->initialized['ratioOfFrozenDepositsSlashedPerDoubleEndorsement'] = true;
        $this->ratioOfFrozenDepositsSlashedPerDoubleEndorsement = $ratioOfFrozenDepositsSlashedPerDoubleEndorsement;

        return $this;
    }

    public function getTestnetDictator()
    {
        return $this->testnetDictator;
    }

    public function setTestnetDictator($testnetDictator): self
    {
        $this->initialized['testnetDictator'] = true;
        $this->testnetDictator = $testnetDictator;

        return $this;
    }

    public function getInitialSeed()
    {
        return $this->initialSeed;
    }

    public function setInitialSeed($initialSeed): self
    {
        $this->initialized['initialSeed'] = true;
        $this->initialSeed = $initialSeed;

        return $this;
    }

    public function getCacheScriptSize(): int
    {
        return $this->cacheScriptSize;
    }

    public function setCacheScriptSize(int $cacheScriptSize): self
    {
        $this->initialized['cacheScriptSize'] = true;
        $this->cacheScriptSize = $cacheScriptSize;

        return $this;
    }

    public function getCacheStakeDistributionCycles(): int
    {
        return $this->cacheStakeDistributionCycles;
    }

    public function setCacheStakeDistributionCycles(int $cacheStakeDistributionCycles): self
    {
        $this->initialized['cacheStakeDistributionCycles'] = true;
        $this->cacheStakeDistributionCycles = $cacheStakeDistributionCycles;

        return $this;
    }

    public function getCacheSamplerStateCycles(): int
    {
        return $this->cacheSamplerStateCycles;
    }

    public function setCacheSamplerStateCycles(int $cacheSamplerStateCycles): self
    {
        $this->initialized['cacheSamplerStateCycles'] = true;
        $this->cacheSamplerStateCycles = $cacheSamplerStateCycles;

        return $this;
    }

    public function getTxRollupEnable(): bool
    {
        return $this->txRollupEnable;
    }

    public function setTxRollupEnable(bool $txRollupEnable): self
    {
        $this->initialized['txRollupEnable'] = true;
        $this->txRollupEnable = $txRollupEnable;

        return $this;
    }

    public function getTxRollupOriginationSize(): int
    {
        return $this->txRollupOriginationSize;
    }

    public function setTxRollupOriginationSize(int $txRollupOriginationSize): self
    {
        $this->initialized['txRollupOriginationSize'] = true;
        $this->txRollupOriginationSize = $txRollupOriginationSize;

        return $this;
    }

    public function getTxRollupHardSizeLimitPerInbox(): int
    {
        return $this->txRollupHardSizeLimitPerInbox;
    }

    public function setTxRollupHardSizeLimitPerInbox(int $txRollupHardSizeLimitPerInbox): self
    {
        $this->initialized['txRollupHardSizeLimitPerInbox'] = true;
        $this->txRollupHardSizeLimitPerInbox = $txRollupHardSizeLimitPerInbox;

        return $this;
    }

    public function getTxRollupHardSizeLimitPerMessage(): int
    {
        return $this->txRollupHardSizeLimitPerMessage;
    }

    public function setTxRollupHardSizeLimitPerMessage(int $txRollupHardSizeLimitPerMessage): self
    {
        $this->initialized['txRollupHardSizeLimitPerMessage'] = true;
        $this->txRollupHardSizeLimitPerMessage = $txRollupHardSizeLimitPerMessage;

        return $this;
    }

    public function getTxRollupMaxWithdrawalsPerBatch(): int
    {
        return $this->txRollupMaxWithdrawalsPerBatch;
    }

    public function setTxRollupMaxWithdrawalsPerBatch(int $txRollupMaxWithdrawalsPerBatch): self
    {
        $this->initialized['txRollupMaxWithdrawalsPerBatch'] = true;
        $this->txRollupMaxWithdrawalsPerBatch = $txRollupMaxWithdrawalsPerBatch;

        return $this;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function getTxRollupCommitmentBond(): string
    {
        return $this->txRollupCommitmentBond;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setTxRollupCommitmentBond(string $txRollupCommitmentBond): self
    {
        $this->initialized['txRollupCommitmentBond'] = true;
        $this->txRollupCommitmentBond = $txRollupCommitmentBond;

        return $this;
    }

    public function getTxRollupFinalityPeriod(): int
    {
        return $this->txRollupFinalityPeriod;
    }

    public function setTxRollupFinalityPeriod(int $txRollupFinalityPeriod): self
    {
        $this->initialized['txRollupFinalityPeriod'] = true;
        $this->txRollupFinalityPeriod = $txRollupFinalityPeriod;

        return $this;
    }

    public function getTxRollupWithdrawPeriod(): int
    {
        return $this->txRollupWithdrawPeriod;
    }

    public function setTxRollupWithdrawPeriod(int $txRollupWithdrawPeriod): self
    {
        $this->initialized['txRollupWithdrawPeriod'] = true;
        $this->txRollupWithdrawPeriod = $txRollupWithdrawPeriod;

        return $this;
    }

    public function getTxRollupMaxInboxesCount(): int
    {
        return $this->txRollupMaxInboxesCount;
    }

    public function setTxRollupMaxInboxesCount(int $txRollupMaxInboxesCount): self
    {
        $this->initialized['txRollupMaxInboxesCount'] = true;
        $this->txRollupMaxInboxesCount = $txRollupMaxInboxesCount;

        return $this;
    }

    public function getTxRollupMaxMessagesPerInbox(): int
    {
        return $this->txRollupMaxMessagesPerInbox;
    }

    public function setTxRollupMaxMessagesPerInbox(int $txRollupMaxMessagesPerInbox): self
    {
        $this->initialized['txRollupMaxMessagesPerInbox'] = true;
        $this->txRollupMaxMessagesPerInbox = $txRollupMaxMessagesPerInbox;

        return $this;
    }

    public function getTxRollupMaxCommitmentsCount(): int
    {
        return $this->txRollupMaxCommitmentsCount;
    }

    public function setTxRollupMaxCommitmentsCount(int $txRollupMaxCommitmentsCount): self
    {
        $this->initialized['txRollupMaxCommitmentsCount'] = true;
        $this->txRollupMaxCommitmentsCount = $txRollupMaxCommitmentsCount;

        return $this;
    }

    public function getTxRollupCostPerByteEmaFactor(): int
    {
        return $this->txRollupCostPerByteEmaFactor;
    }

    public function setTxRollupCostPerByteEmaFactor(int $txRollupCostPerByteEmaFactor): self
    {
        $this->initialized['txRollupCostPerByteEmaFactor'] = true;
        $this->txRollupCostPerByteEmaFactor = $txRollupCostPerByteEmaFactor;

        return $this;
    }

    public function getTxRollupMaxTicketPayloadSize(): int
    {
        return $this->txRollupMaxTicketPayloadSize;
    }

    public function setTxRollupMaxTicketPayloadSize(int $txRollupMaxTicketPayloadSize): self
    {
        $this->initialized['txRollupMaxTicketPayloadSize'] = true;
        $this->txRollupMaxTicketPayloadSize = $txRollupMaxTicketPayloadSize;

        return $this;
    }

    public function getTxRollupRejectionMaxProofSize(): int
    {
        return $this->txRollupRejectionMaxProofSize;
    }

    public function setTxRollupRejectionMaxProofSize(int $txRollupRejectionMaxProofSize): self
    {
        $this->initialized['txRollupRejectionMaxProofSize'] = true;
        $this->txRollupRejectionMaxProofSize = $txRollupRejectionMaxProofSize;

        return $this;
    }

    public function getTxRollupSunsetLevel(): int
    {
        return $this->txRollupSunsetLevel;
    }

    public function setTxRollupSunsetLevel(int $txRollupSunsetLevel): self
    {
        $this->initialized['txRollupSunsetLevel'] = true;
        $this->txRollupSunsetLevel = $txRollupSunsetLevel;

        return $this;
    }

    public function getDalParametric(): ContextConstantsParametricGetResponse200DalParametric
    {
        return $this->dalParametric;
    }

    public function setDalParametric(ContextConstantsParametricGetResponse200DalParametric $dalParametric): self
    {
        $this->initialized['dalParametric'] = true;
        $this->dalParametric = $dalParametric;

        return $this;
    }

    public function getSmartRollupEnable(): bool
    {
        return $this->smartRollupEnable;
    }

    public function setSmartRollupEnable(bool $smartRollupEnable): self
    {
        $this->initialized['smartRollupEnable'] = true;
        $this->smartRollupEnable = $smartRollupEnable;

        return $this;
    }

    public function getSmartRollupArithPvmEnable(): bool
    {
        return $this->smartRollupArithPvmEnable;
    }

    public function setSmartRollupArithPvmEnable(bool $smartRollupArithPvmEnable): self
    {
        $this->initialized['smartRollupArithPvmEnable'] = true;
        $this->smartRollupArithPvmEnable = $smartRollupArithPvmEnable;

        return $this;
    }

    public function getSmartRollupOriginationSize(): int
    {
        return $this->smartRollupOriginationSize;
    }

    public function setSmartRollupOriginationSize(int $smartRollupOriginationSize): self
    {
        $this->initialized['smartRollupOriginationSize'] = true;
        $this->smartRollupOriginationSize = $smartRollupOriginationSize;

        return $this;
    }

    public function getSmartRollupChallengeWindowInBlocks(): int
    {
        return $this->smartRollupChallengeWindowInBlocks;
    }

    public function setSmartRollupChallengeWindowInBlocks(int $smartRollupChallengeWindowInBlocks): self
    {
        $this->initialized['smartRollupChallengeWindowInBlocks'] = true;
        $this->smartRollupChallengeWindowInBlocks = $smartRollupChallengeWindowInBlocks;

        return $this;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function getSmartRollupStakeAmount(): string
    {
        return $this->smartRollupStakeAmount;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setSmartRollupStakeAmount(string $smartRollupStakeAmount): self
    {
        $this->initialized['smartRollupStakeAmount'] = true;
        $this->smartRollupStakeAmount = $smartRollupStakeAmount;

        return $this;
    }

    public function getSmartRollupCommitmentPeriodInBlocks(): int
    {
        return $this->smartRollupCommitmentPeriodInBlocks;
    }

    public function setSmartRollupCommitmentPeriodInBlocks(int $smartRollupCommitmentPeriodInBlocks): self
    {
        $this->initialized['smartRollupCommitmentPeriodInBlocks'] = true;
        $this->smartRollupCommitmentPeriodInBlocks = $smartRollupCommitmentPeriodInBlocks;

        return $this;
    }

    public function getSmartRollupMaxLookaheadInBlocks(): int
    {
        return $this->smartRollupMaxLookaheadInBlocks;
    }

    public function setSmartRollupMaxLookaheadInBlocks(int $smartRollupMaxLookaheadInBlocks): self
    {
        $this->initialized['smartRollupMaxLookaheadInBlocks'] = true;
        $this->smartRollupMaxLookaheadInBlocks = $smartRollupMaxLookaheadInBlocks;

        return $this;
    }

    public function getSmartRollupMaxActiveOutboxLevels(): int
    {
        return $this->smartRollupMaxActiveOutboxLevels;
    }

    public function setSmartRollupMaxActiveOutboxLevels(int $smartRollupMaxActiveOutboxLevels): self
    {
        $this->initialized['smartRollupMaxActiveOutboxLevels'] = true;
        $this->smartRollupMaxActiveOutboxLevels = $smartRollupMaxActiveOutboxLevels;

        return $this;
    }

    public function getSmartRollupMaxOutboxMessagesPerLevel(): int
    {
        return $this->smartRollupMaxOutboxMessagesPerLevel;
    }

    public function setSmartRollupMaxOutboxMessagesPerLevel(int $smartRollupMaxOutboxMessagesPerLevel): self
    {
        $this->initialized['smartRollupMaxOutboxMessagesPerLevel'] = true;
        $this->smartRollupMaxOutboxMessagesPerLevel = $smartRollupMaxOutboxMessagesPerLevel;

        return $this;
    }

    public function getSmartRollupNumberOfSectionsInDissection(): int
    {
        return $this->smartRollupNumberOfSectionsInDissection;
    }

    public function setSmartRollupNumberOfSectionsInDissection(int $smartRollupNumberOfSectionsInDissection): self
    {
        $this->initialized['smartRollupNumberOfSectionsInDissection'] = true;
        $this->smartRollupNumberOfSectionsInDissection = $smartRollupNumberOfSectionsInDissection;

        return $this;
    }

    public function getSmartRollupTimeoutPeriodInBlocks(): int
    {
        return $this->smartRollupTimeoutPeriodInBlocks;
    }

    public function setSmartRollupTimeoutPeriodInBlocks(int $smartRollupTimeoutPeriodInBlocks): self
    {
        $this->initialized['smartRollupTimeoutPeriodInBlocks'] = true;
        $this->smartRollupTimeoutPeriodInBlocks = $smartRollupTimeoutPeriodInBlocks;

        return $this;
    }

    public function getSmartRollupMaxNumberOfCementedCommitments(): int
    {
        return $this->smartRollupMaxNumberOfCementedCommitments;
    }

    public function setSmartRollupMaxNumberOfCementedCommitments(int $smartRollupMaxNumberOfCementedCommitments): self
    {
        $this->initialized['smartRollupMaxNumberOfCementedCommitments'] = true;
        $this->smartRollupMaxNumberOfCementedCommitments = $smartRollupMaxNumberOfCementedCommitments;

        return $this;
    }

    public function getSmartRollupMaxNumberOfParallelGames(): int
    {
        return $this->smartRollupMaxNumberOfParallelGames;
    }

    public function setSmartRollupMaxNumberOfParallelGames(int $smartRollupMaxNumberOfParallelGames): self
    {
        $this->initialized['smartRollupMaxNumberOfParallelGames'] = true;
        $this->smartRollupMaxNumberOfParallelGames = $smartRollupMaxNumberOfParallelGames;

        return $this;
    }

    public function getZkRollupEnable(): bool
    {
        return $this->zkRollupEnable;
    }

    public function setZkRollupEnable(bool $zkRollupEnable): self
    {
        $this->initialized['zkRollupEnable'] = true;
        $this->zkRollupEnable = $zkRollupEnable;

        return $this;
    }

    public function getZkRollupOriginationSize(): int
    {
        return $this->zkRollupOriginationSize;
    }

    public function setZkRollupOriginationSize(int $zkRollupOriginationSize): self
    {
        $this->initialized['zkRollupOriginationSize'] = true;
        $this->zkRollupOriginationSize = $zkRollupOriginationSize;

        return $this;
    }

    public function getZkRollupMinPendingToProcess(): int
    {
        return $this->zkRollupMinPendingToProcess;
    }

    public function setZkRollupMinPendingToProcess(int $zkRollupMinPendingToProcess): self
    {
        $this->initialized['zkRollupMinPendingToProcess'] = true;
        $this->zkRollupMinPendingToProcess = $zkRollupMinPendingToProcess;

        return $this;
    }
}
