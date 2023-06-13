<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Normalizer;

use Bzzhh\Pezos\Generated\Proto\Runtime\Normalizer\CheckArray;
use Bzzhh\Pezos\Generated\Proto\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ContextConstantsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextConstantsGetResponse200';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextConstantsGetResponse200';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Proto\Model\ContextConstantsGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('proof_of_work_nonce_size', $data)) {
            $object->setProofOfWorkNonceSize($data['proof_of_work_nonce_size']);
            unset($data['proof_of_work_nonce_size']);
        }
        if (\array_key_exists('nonce_length', $data)) {
            $object->setNonceLength($data['nonce_length']);
            unset($data['nonce_length']);
        }
        if (\array_key_exists('max_anon_ops_per_block', $data)) {
            $object->setMaxAnonOpsPerBlock($data['max_anon_ops_per_block']);
            unset($data['max_anon_ops_per_block']);
        }
        if (\array_key_exists('max_operation_data_length', $data)) {
            $object->setMaxOperationDataLength($data['max_operation_data_length']);
            unset($data['max_operation_data_length']);
        }
        if (\array_key_exists('max_proposals_per_delegate', $data)) {
            $object->setMaxProposalsPerDelegate($data['max_proposals_per_delegate']);
            unset($data['max_proposals_per_delegate']);
        }
        if (\array_key_exists('max_micheline_node_count', $data)) {
            $object->setMaxMichelineNodeCount($data['max_micheline_node_count']);
            unset($data['max_micheline_node_count']);
        }
        if (\array_key_exists('max_micheline_bytes_limit', $data)) {
            $object->setMaxMichelineBytesLimit($data['max_micheline_bytes_limit']);
            unset($data['max_micheline_bytes_limit']);
        }
        if (\array_key_exists('max_allowed_global_constants_depth', $data)) {
            $object->setMaxAllowedGlobalConstantsDepth($data['max_allowed_global_constants_depth']);
            unset($data['max_allowed_global_constants_depth']);
        }
        if (\array_key_exists('cache_layout_size', $data)) {
            $object->setCacheLayoutSize($data['cache_layout_size']);
            unset($data['cache_layout_size']);
        }
        if (\array_key_exists('michelson_maximum_type_size', $data)) {
            $object->setMichelsonMaximumTypeSize($data['michelson_maximum_type_size']);
            unset($data['michelson_maximum_type_size']);
        }
        if (\array_key_exists('smart_rollup_max_wrapped_proof_binary_size', $data)) {
            $object->setSmartRollupMaxWrappedProofBinarySize($data['smart_rollup_max_wrapped_proof_binary_size']);
            unset($data['smart_rollup_max_wrapped_proof_binary_size']);
        }
        if (\array_key_exists('smart_rollup_message_size_limit', $data)) {
            $object->setSmartRollupMessageSizeLimit($data['smart_rollup_message_size_limit']);
            unset($data['smart_rollup_message_size_limit']);
        }
        if (\array_key_exists('smart_rollup_max_number_of_messages_per_level', $data)) {
            $object->setSmartRollupMaxNumberOfMessagesPerLevel($data['smart_rollup_max_number_of_messages_per_level']);
            unset($data['smart_rollup_max_number_of_messages_per_level']);
        }
        if (\array_key_exists('preserved_cycles', $data)) {
            $object->setPreservedCycles($data['preserved_cycles']);
            unset($data['preserved_cycles']);
        }
        if (\array_key_exists('blocks_per_cycle', $data)) {
            $object->setBlocksPerCycle($data['blocks_per_cycle']);
            unset($data['blocks_per_cycle']);
        }
        if (\array_key_exists('blocks_per_commitment', $data)) {
            $object->setBlocksPerCommitment($data['blocks_per_commitment']);
            unset($data['blocks_per_commitment']);
        }
        if (\array_key_exists('nonce_revelation_threshold', $data)) {
            $object->setNonceRevelationThreshold($data['nonce_revelation_threshold']);
            unset($data['nonce_revelation_threshold']);
        }
        if (\array_key_exists('blocks_per_stake_snapshot', $data)) {
            $object->setBlocksPerStakeSnapshot($data['blocks_per_stake_snapshot']);
            unset($data['blocks_per_stake_snapshot']);
        }
        if (\array_key_exists('cycles_per_voting_period', $data)) {
            $object->setCyclesPerVotingPeriod($data['cycles_per_voting_period']);
            unset($data['cycles_per_voting_period']);
        }
        if (\array_key_exists('hard_gas_limit_per_operation', $data)) {
            $object->setHardGasLimitPerOperation($data['hard_gas_limit_per_operation']);
            unset($data['hard_gas_limit_per_operation']);
        }
        if (\array_key_exists('hard_gas_limit_per_block', $data)) {
            $object->setHardGasLimitPerBlock($data['hard_gas_limit_per_block']);
            unset($data['hard_gas_limit_per_block']);
        }
        if (\array_key_exists('proof_of_work_threshold', $data)) {
            $object->setProofOfWorkThreshold($data['proof_of_work_threshold']);
            unset($data['proof_of_work_threshold']);
        }
        if (\array_key_exists('minimal_stake', $data)) {
            $object->setMinimalStake($data['minimal_stake']);
            unset($data['minimal_stake']);
        }
        if (\array_key_exists('vdf_difficulty', $data)) {
            $object->setVdfDifficulty($data['vdf_difficulty']);
            unset($data['vdf_difficulty']);
        }
        if (\array_key_exists('seed_nonce_revelation_tip', $data)) {
            $object->setSeedNonceRevelationTip($data['seed_nonce_revelation_tip']);
            unset($data['seed_nonce_revelation_tip']);
        }
        if (\array_key_exists('origination_size', $data)) {
            $object->setOriginationSize($data['origination_size']);
            unset($data['origination_size']);
        }
        if (\array_key_exists('baking_reward_fixed_portion', $data)) {
            $object->setBakingRewardFixedPortion($data['baking_reward_fixed_portion']);
            unset($data['baking_reward_fixed_portion']);
        }
        if (\array_key_exists('baking_reward_bonus_per_slot', $data)) {
            $object->setBakingRewardBonusPerSlot($data['baking_reward_bonus_per_slot']);
            unset($data['baking_reward_bonus_per_slot']);
        }
        if (\array_key_exists('endorsing_reward_per_slot', $data)) {
            $object->setEndorsingRewardPerSlot($data['endorsing_reward_per_slot']);
            unset($data['endorsing_reward_per_slot']);
        }
        if (\array_key_exists('cost_per_byte', $data)) {
            $object->setCostPerByte($data['cost_per_byte']);
            unset($data['cost_per_byte']);
        }
        if (\array_key_exists('hard_storage_limit_per_operation', $data)) {
            $object->setHardStorageLimitPerOperation($data['hard_storage_limit_per_operation']);
            unset($data['hard_storage_limit_per_operation']);
        }
        if (\array_key_exists('quorum_min', $data)) {
            $object->setQuorumMin($data['quorum_min']);
            unset($data['quorum_min']);
        }
        if (\array_key_exists('quorum_max', $data)) {
            $object->setQuorumMax($data['quorum_max']);
            unset($data['quorum_max']);
        }
        if (\array_key_exists('min_proposal_quorum', $data)) {
            $object->setMinProposalQuorum($data['min_proposal_quorum']);
            unset($data['min_proposal_quorum']);
        }
        if (\array_key_exists('liquidity_baking_subsidy', $data)) {
            $object->setLiquidityBakingSubsidy($data['liquidity_baking_subsidy']);
            unset($data['liquidity_baking_subsidy']);
        }
        if (\array_key_exists('liquidity_baking_toggle_ema_threshold', $data)) {
            $object->setLiquidityBakingToggleEmaThreshold($data['liquidity_baking_toggle_ema_threshold']);
            unset($data['liquidity_baking_toggle_ema_threshold']);
        }
        if (\array_key_exists('max_operations_time_to_live', $data)) {
            $object->setMaxOperationsTimeToLive($data['max_operations_time_to_live']);
            unset($data['max_operations_time_to_live']);
        }
        if (\array_key_exists('minimal_block_delay', $data)) {
            $object->setMinimalBlockDelay($data['minimal_block_delay']);
            unset($data['minimal_block_delay']);
        }
        if (\array_key_exists('delay_increment_per_round', $data)) {
            $object->setDelayIncrementPerRound($data['delay_increment_per_round']);
            unset($data['delay_increment_per_round']);
        }
        if (\array_key_exists('consensus_committee_size', $data)) {
            $object->setConsensusCommitteeSize($data['consensus_committee_size']);
            unset($data['consensus_committee_size']);
        }
        if (\array_key_exists('consensus_threshold', $data)) {
            $object->setConsensusThreshold($data['consensus_threshold']);
            unset($data['consensus_threshold']);
        }
        if (\array_key_exists('minimal_participation_ratio', $data)) {
            $object->setMinimalParticipationRatio($this->denormalizer->denormalize($data['minimal_participation_ratio'], 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextConstantsGetResponse200MinimalParticipationRatio', 'json', $context));
            unset($data['minimal_participation_ratio']);
        }
        if (\array_key_exists('max_slashing_period', $data)) {
            $object->setMaxSlashingPeriod($data['max_slashing_period']);
            unset($data['max_slashing_period']);
        }
        if (\array_key_exists('frozen_deposits_percentage', $data)) {
            $object->setFrozenDepositsPercentage($data['frozen_deposits_percentage']);
            unset($data['frozen_deposits_percentage']);
        }
        if (\array_key_exists('double_baking_punishment', $data)) {
            $object->setDoubleBakingPunishment($data['double_baking_punishment']);
            unset($data['double_baking_punishment']);
        }
        if (\array_key_exists('ratio_of_frozen_deposits_slashed_per_double_endorsement', $data)) {
            $object->setRatioOfFrozenDepositsSlashedPerDoubleEndorsement($this->denormalizer->denormalize($data['ratio_of_frozen_deposits_slashed_per_double_endorsement'], 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextConstantsGetResponse200RatioOfFrozenDepositsSlashedPerDoubleEndorsement', 'json', $context));
            unset($data['ratio_of_frozen_deposits_slashed_per_double_endorsement']);
        }
        if (\array_key_exists('testnet_dictator', $data)) {
            $object->setTestnetDictator($data['testnet_dictator']);
            unset($data['testnet_dictator']);
        }
        if (\array_key_exists('initial_seed', $data)) {
            $object->setInitialSeed($data['initial_seed']);
            unset($data['initial_seed']);
        }
        if (\array_key_exists('cache_script_size', $data)) {
            $object->setCacheScriptSize($data['cache_script_size']);
            unset($data['cache_script_size']);
        }
        if (\array_key_exists('cache_stake_distribution_cycles', $data)) {
            $object->setCacheStakeDistributionCycles($data['cache_stake_distribution_cycles']);
            unset($data['cache_stake_distribution_cycles']);
        }
        if (\array_key_exists('cache_sampler_state_cycles', $data)) {
            $object->setCacheSamplerStateCycles($data['cache_sampler_state_cycles']);
            unset($data['cache_sampler_state_cycles']);
        }
        if (\array_key_exists('tx_rollup_enable', $data)) {
            $object->setTxRollupEnable($data['tx_rollup_enable']);
            unset($data['tx_rollup_enable']);
        }
        if (\array_key_exists('tx_rollup_origination_size', $data)) {
            $object->setTxRollupOriginationSize($data['tx_rollup_origination_size']);
            unset($data['tx_rollup_origination_size']);
        }
        if (\array_key_exists('tx_rollup_hard_size_limit_per_inbox', $data)) {
            $object->setTxRollupHardSizeLimitPerInbox($data['tx_rollup_hard_size_limit_per_inbox']);
            unset($data['tx_rollup_hard_size_limit_per_inbox']);
        }
        if (\array_key_exists('tx_rollup_hard_size_limit_per_message', $data)) {
            $object->setTxRollupHardSizeLimitPerMessage($data['tx_rollup_hard_size_limit_per_message']);
            unset($data['tx_rollup_hard_size_limit_per_message']);
        }
        if (\array_key_exists('tx_rollup_max_withdrawals_per_batch', $data)) {
            $object->setTxRollupMaxWithdrawalsPerBatch($data['tx_rollup_max_withdrawals_per_batch']);
            unset($data['tx_rollup_max_withdrawals_per_batch']);
        }
        if (\array_key_exists('tx_rollup_commitment_bond', $data)) {
            $object->setTxRollupCommitmentBond($data['tx_rollup_commitment_bond']);
            unset($data['tx_rollup_commitment_bond']);
        }
        if (\array_key_exists('tx_rollup_finality_period', $data)) {
            $object->setTxRollupFinalityPeriod($data['tx_rollup_finality_period']);
            unset($data['tx_rollup_finality_period']);
        }
        if (\array_key_exists('tx_rollup_withdraw_period', $data)) {
            $object->setTxRollupWithdrawPeriod($data['tx_rollup_withdraw_period']);
            unset($data['tx_rollup_withdraw_period']);
        }
        if (\array_key_exists('tx_rollup_max_inboxes_count', $data)) {
            $object->setTxRollupMaxInboxesCount($data['tx_rollup_max_inboxes_count']);
            unset($data['tx_rollup_max_inboxes_count']);
        }
        if (\array_key_exists('tx_rollup_max_messages_per_inbox', $data)) {
            $object->setTxRollupMaxMessagesPerInbox($data['tx_rollup_max_messages_per_inbox']);
            unset($data['tx_rollup_max_messages_per_inbox']);
        }
        if (\array_key_exists('tx_rollup_max_commitments_count', $data)) {
            $object->setTxRollupMaxCommitmentsCount($data['tx_rollup_max_commitments_count']);
            unset($data['tx_rollup_max_commitments_count']);
        }
        if (\array_key_exists('tx_rollup_cost_per_byte_ema_factor', $data)) {
            $object->setTxRollupCostPerByteEmaFactor($data['tx_rollup_cost_per_byte_ema_factor']);
            unset($data['tx_rollup_cost_per_byte_ema_factor']);
        }
        if (\array_key_exists('tx_rollup_max_ticket_payload_size', $data)) {
            $object->setTxRollupMaxTicketPayloadSize($data['tx_rollup_max_ticket_payload_size']);
            unset($data['tx_rollup_max_ticket_payload_size']);
        }
        if (\array_key_exists('tx_rollup_rejection_max_proof_size', $data)) {
            $object->setTxRollupRejectionMaxProofSize($data['tx_rollup_rejection_max_proof_size']);
            unset($data['tx_rollup_rejection_max_proof_size']);
        }
        if (\array_key_exists('tx_rollup_sunset_level', $data)) {
            $object->setTxRollupSunsetLevel($data['tx_rollup_sunset_level']);
            unset($data['tx_rollup_sunset_level']);
        }
        if (\array_key_exists('dal_parametric', $data)) {
            $object->setDalParametric($this->denormalizer->denormalize($data['dal_parametric'], 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextConstantsGetResponse200DalParametric', 'json', $context));
            unset($data['dal_parametric']);
        }
        if (\array_key_exists('smart_rollup_enable', $data)) {
            $object->setSmartRollupEnable($data['smart_rollup_enable']);
            unset($data['smart_rollup_enable']);
        }
        if (\array_key_exists('smart_rollup_arith_pvm_enable', $data)) {
            $object->setSmartRollupArithPvmEnable($data['smart_rollup_arith_pvm_enable']);
            unset($data['smart_rollup_arith_pvm_enable']);
        }
        if (\array_key_exists('smart_rollup_origination_size', $data)) {
            $object->setSmartRollupOriginationSize($data['smart_rollup_origination_size']);
            unset($data['smart_rollup_origination_size']);
        }
        if (\array_key_exists('smart_rollup_challenge_window_in_blocks', $data)) {
            $object->setSmartRollupChallengeWindowInBlocks($data['smart_rollup_challenge_window_in_blocks']);
            unset($data['smart_rollup_challenge_window_in_blocks']);
        }
        if (\array_key_exists('smart_rollup_stake_amount', $data)) {
            $object->setSmartRollupStakeAmount($data['smart_rollup_stake_amount']);
            unset($data['smart_rollup_stake_amount']);
        }
        if (\array_key_exists('smart_rollup_commitment_period_in_blocks', $data)) {
            $object->setSmartRollupCommitmentPeriodInBlocks($data['smart_rollup_commitment_period_in_blocks']);
            unset($data['smart_rollup_commitment_period_in_blocks']);
        }
        if (\array_key_exists('smart_rollup_max_lookahead_in_blocks', $data)) {
            $object->setSmartRollupMaxLookaheadInBlocks($data['smart_rollup_max_lookahead_in_blocks']);
            unset($data['smart_rollup_max_lookahead_in_blocks']);
        }
        if (\array_key_exists('smart_rollup_max_active_outbox_levels', $data)) {
            $object->setSmartRollupMaxActiveOutboxLevels($data['smart_rollup_max_active_outbox_levels']);
            unset($data['smart_rollup_max_active_outbox_levels']);
        }
        if (\array_key_exists('smart_rollup_max_outbox_messages_per_level', $data)) {
            $object->setSmartRollupMaxOutboxMessagesPerLevel($data['smart_rollup_max_outbox_messages_per_level']);
            unset($data['smart_rollup_max_outbox_messages_per_level']);
        }
        if (\array_key_exists('smart_rollup_number_of_sections_in_dissection', $data)) {
            $object->setSmartRollupNumberOfSectionsInDissection($data['smart_rollup_number_of_sections_in_dissection']);
            unset($data['smart_rollup_number_of_sections_in_dissection']);
        }
        if (\array_key_exists('smart_rollup_timeout_period_in_blocks', $data)) {
            $object->setSmartRollupTimeoutPeriodInBlocks($data['smart_rollup_timeout_period_in_blocks']);
            unset($data['smart_rollup_timeout_period_in_blocks']);
        }
        if (\array_key_exists('smart_rollup_max_number_of_cemented_commitments', $data)) {
            $object->setSmartRollupMaxNumberOfCementedCommitments($data['smart_rollup_max_number_of_cemented_commitments']);
            unset($data['smart_rollup_max_number_of_cemented_commitments']);
        }
        if (\array_key_exists('smart_rollup_max_number_of_parallel_games', $data)) {
            $object->setSmartRollupMaxNumberOfParallelGames($data['smart_rollup_max_number_of_parallel_games']);
            unset($data['smart_rollup_max_number_of_parallel_games']);
        }
        if (\array_key_exists('zk_rollup_enable', $data)) {
            $object->setZkRollupEnable($data['zk_rollup_enable']);
            unset($data['zk_rollup_enable']);
        }
        if (\array_key_exists('zk_rollup_origination_size', $data)) {
            $object->setZkRollupOriginationSize($data['zk_rollup_origination_size']);
            unset($data['zk_rollup_origination_size']);
        }
        if (\array_key_exists('zk_rollup_min_pending_to_process', $data)) {
            $object->setZkRollupMinPendingToProcess($data['zk_rollup_min_pending_to_process']);
            unset($data['zk_rollup_min_pending_to_process']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['proof_of_work_nonce_size'] = $object->getProofOfWorkNonceSize();
        $data['nonce_length'] = $object->getNonceLength();
        $data['max_anon_ops_per_block'] = $object->getMaxAnonOpsPerBlock();
        $data['max_operation_data_length'] = $object->getMaxOperationDataLength();
        $data['max_proposals_per_delegate'] = $object->getMaxProposalsPerDelegate();
        $data['max_micheline_node_count'] = $object->getMaxMichelineNodeCount();
        $data['max_micheline_bytes_limit'] = $object->getMaxMichelineBytesLimit();
        $data['max_allowed_global_constants_depth'] = $object->getMaxAllowedGlobalConstantsDepth();
        $data['cache_layout_size'] = $object->getCacheLayoutSize();
        $data['michelson_maximum_type_size'] = $object->getMichelsonMaximumTypeSize();
        $data['smart_rollup_max_wrapped_proof_binary_size'] = $object->getSmartRollupMaxWrappedProofBinarySize();
        $data['smart_rollup_message_size_limit'] = $object->getSmartRollupMessageSizeLimit();
        $data['smart_rollup_max_number_of_messages_per_level'] = $object->getSmartRollupMaxNumberOfMessagesPerLevel();
        $data['preserved_cycles'] = $object->getPreservedCycles();
        $data['blocks_per_cycle'] = $object->getBlocksPerCycle();
        $data['blocks_per_commitment'] = $object->getBlocksPerCommitment();
        $data['nonce_revelation_threshold'] = $object->getNonceRevelationThreshold();
        $data['blocks_per_stake_snapshot'] = $object->getBlocksPerStakeSnapshot();
        $data['cycles_per_voting_period'] = $object->getCyclesPerVotingPeriod();
        $data['hard_gas_limit_per_operation'] = $object->getHardGasLimitPerOperation();
        $data['hard_gas_limit_per_block'] = $object->getHardGasLimitPerBlock();
        $data['proof_of_work_threshold'] = $object->getProofOfWorkThreshold();
        $data['minimal_stake'] = $object->getMinimalStake();
        $data['vdf_difficulty'] = $object->getVdfDifficulty();
        $data['seed_nonce_revelation_tip'] = $object->getSeedNonceRevelationTip();
        $data['origination_size'] = $object->getOriginationSize();
        $data['baking_reward_fixed_portion'] = $object->getBakingRewardFixedPortion();
        $data['baking_reward_bonus_per_slot'] = $object->getBakingRewardBonusPerSlot();
        $data['endorsing_reward_per_slot'] = $object->getEndorsingRewardPerSlot();
        $data['cost_per_byte'] = $object->getCostPerByte();
        $data['hard_storage_limit_per_operation'] = $object->getHardStorageLimitPerOperation();
        $data['quorum_min'] = $object->getQuorumMin();
        $data['quorum_max'] = $object->getQuorumMax();
        $data['min_proposal_quorum'] = $object->getMinProposalQuorum();
        $data['liquidity_baking_subsidy'] = $object->getLiquidityBakingSubsidy();
        $data['liquidity_baking_toggle_ema_threshold'] = $object->getLiquidityBakingToggleEmaThreshold();
        $data['max_operations_time_to_live'] = $object->getMaxOperationsTimeToLive();
        $data['minimal_block_delay'] = $object->getMinimalBlockDelay();
        $data['delay_increment_per_round'] = $object->getDelayIncrementPerRound();
        $data['consensus_committee_size'] = $object->getConsensusCommitteeSize();
        $data['consensus_threshold'] = $object->getConsensusThreshold();
        $data['minimal_participation_ratio'] = $this->normalizer->normalize($object->getMinimalParticipationRatio(), 'json', $context);
        $data['max_slashing_period'] = $object->getMaxSlashingPeriod();
        $data['frozen_deposits_percentage'] = $object->getFrozenDepositsPercentage();
        $data['double_baking_punishment'] = $object->getDoubleBakingPunishment();
        $data['ratio_of_frozen_deposits_slashed_per_double_endorsement'] = $this->normalizer->normalize($object->getRatioOfFrozenDepositsSlashedPerDoubleEndorsement(), 'json', $context);
        if ($object->isInitialized('testnetDictator') && null !== $object->getTestnetDictator()) {
            $data['testnet_dictator'] = $object->getTestnetDictator();
        }
        if ($object->isInitialized('initialSeed') && null !== $object->getInitialSeed()) {
            $data['initial_seed'] = $object->getInitialSeed();
        }
        $data['cache_script_size'] = $object->getCacheScriptSize();
        $data['cache_stake_distribution_cycles'] = $object->getCacheStakeDistributionCycles();
        $data['cache_sampler_state_cycles'] = $object->getCacheSamplerStateCycles();
        $data['tx_rollup_enable'] = $object->getTxRollupEnable();
        $data['tx_rollup_origination_size'] = $object->getTxRollupOriginationSize();
        $data['tx_rollup_hard_size_limit_per_inbox'] = $object->getTxRollupHardSizeLimitPerInbox();
        $data['tx_rollup_hard_size_limit_per_message'] = $object->getTxRollupHardSizeLimitPerMessage();
        $data['tx_rollup_max_withdrawals_per_batch'] = $object->getTxRollupMaxWithdrawalsPerBatch();
        $data['tx_rollup_commitment_bond'] = $object->getTxRollupCommitmentBond();
        $data['tx_rollup_finality_period'] = $object->getTxRollupFinalityPeriod();
        $data['tx_rollup_withdraw_period'] = $object->getTxRollupWithdrawPeriod();
        $data['tx_rollup_max_inboxes_count'] = $object->getTxRollupMaxInboxesCount();
        $data['tx_rollup_max_messages_per_inbox'] = $object->getTxRollupMaxMessagesPerInbox();
        $data['tx_rollup_max_commitments_count'] = $object->getTxRollupMaxCommitmentsCount();
        $data['tx_rollup_cost_per_byte_ema_factor'] = $object->getTxRollupCostPerByteEmaFactor();
        $data['tx_rollup_max_ticket_payload_size'] = $object->getTxRollupMaxTicketPayloadSize();
        $data['tx_rollup_rejection_max_proof_size'] = $object->getTxRollupRejectionMaxProofSize();
        $data['tx_rollup_sunset_level'] = $object->getTxRollupSunsetLevel();
        $data['dal_parametric'] = $this->normalizer->normalize($object->getDalParametric(), 'json', $context);
        $data['smart_rollup_enable'] = $object->getSmartRollupEnable();
        $data['smart_rollup_arith_pvm_enable'] = $object->getSmartRollupArithPvmEnable();
        $data['smart_rollup_origination_size'] = $object->getSmartRollupOriginationSize();
        $data['smart_rollup_challenge_window_in_blocks'] = $object->getSmartRollupChallengeWindowInBlocks();
        $data['smart_rollup_stake_amount'] = $object->getSmartRollupStakeAmount();
        $data['smart_rollup_commitment_period_in_blocks'] = $object->getSmartRollupCommitmentPeriodInBlocks();
        $data['smart_rollup_max_lookahead_in_blocks'] = $object->getSmartRollupMaxLookaheadInBlocks();
        $data['smart_rollup_max_active_outbox_levels'] = $object->getSmartRollupMaxActiveOutboxLevels();
        $data['smart_rollup_max_outbox_messages_per_level'] = $object->getSmartRollupMaxOutboxMessagesPerLevel();
        $data['smart_rollup_number_of_sections_in_dissection'] = $object->getSmartRollupNumberOfSectionsInDissection();
        $data['smart_rollup_timeout_period_in_blocks'] = $object->getSmartRollupTimeoutPeriodInBlocks();
        $data['smart_rollup_max_number_of_cemented_commitments'] = $object->getSmartRollupMaxNumberOfCementedCommitments();
        $data['smart_rollup_max_number_of_parallel_games'] = $object->getSmartRollupMaxNumberOfParallelGames();
        $data['zk_rollup_enable'] = $object->getZkRollupEnable();
        $data['zk_rollup_origination_size'] = $object->getZkRollupOriginationSize();
        $data['zk_rollup_min_pending_to_process'] = $object->getZkRollupMinPendingToProcess();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
