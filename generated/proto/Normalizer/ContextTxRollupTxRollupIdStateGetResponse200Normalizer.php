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

class ContextTxRollupTxRollupIdStateGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextTxRollupTxRollupIdStateGetResponse200';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextTxRollupTxRollupIdStateGetResponse200';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Proto\Model\ContextTxRollupTxRollupIdStateGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('last_removed_commitment_hashes', $data) && $data['last_removed_commitment_hashes'] !== null) {
            $object->setLastRemovedCommitmentHashes($data['last_removed_commitment_hashes']);
            unset($data['last_removed_commitment_hashes']);
        } elseif (\array_key_exists('last_removed_commitment_hashes', $data) && $data['last_removed_commitment_hashes'] === null) {
            $object->setLastRemovedCommitmentHashes(null);
        }
        if (\array_key_exists('finalized_commitments', $data)) {
            $object->setFinalizedCommitments($data['finalized_commitments']);
            unset($data['finalized_commitments']);
        }
        if (\array_key_exists('unfinalized_commitments', $data)) {
            $object->setUnfinalizedCommitments($data['unfinalized_commitments']);
            unset($data['unfinalized_commitments']);
        }
        if (\array_key_exists('uncommitted_inboxes', $data)) {
            $object->setUncommittedInboxes($data['uncommitted_inboxes']);
            unset($data['uncommitted_inboxes']);
        }
        if (\array_key_exists('commitment_newest_hash', $data) && $data['commitment_newest_hash'] !== null) {
            $object->setCommitmentNewestHash($data['commitment_newest_hash']);
            unset($data['commitment_newest_hash']);
        } elseif (\array_key_exists('commitment_newest_hash', $data) && $data['commitment_newest_hash'] === null) {
            $object->setCommitmentNewestHash(null);
        }
        if (\array_key_exists('tezos_head_level', $data) && $data['tezos_head_level'] !== null) {
            $object->setTezosHeadLevel($data['tezos_head_level']);
            unset($data['tezos_head_level']);
        } elseif (\array_key_exists('tezos_head_level', $data) && $data['tezos_head_level'] === null) {
            $object->setTezosHeadLevel(null);
        }
        if (\array_key_exists('burn_per_byte', $data)) {
            $object->setBurnPerByte($data['burn_per_byte']);
            unset($data['burn_per_byte']);
        }
        if (\array_key_exists('allocated_storage', $data)) {
            $object->setAllocatedStorage($data['allocated_storage']);
            unset($data['allocated_storage']);
        }
        if (\array_key_exists('occupied_storage', $data)) {
            $object->setOccupiedStorage($data['occupied_storage']);
            unset($data['occupied_storage']);
        }
        if (\array_key_exists('inbox_ema', $data)) {
            $object->setInboxEma($data['inbox_ema']);
            unset($data['inbox_ema']);
        }
        if (\array_key_exists('commitments_watermark', $data) && $data['commitments_watermark'] !== null) {
            $object->setCommitmentsWatermark($data['commitments_watermark']);
            unset($data['commitments_watermark']);
        } elseif (\array_key_exists('commitments_watermark', $data) && $data['commitments_watermark'] === null) {
            $object->setCommitmentsWatermark(null);
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
        $data['last_removed_commitment_hashes'] = $object->getLastRemovedCommitmentHashes();
        $data['finalized_commitments'] = $object->getFinalizedCommitments();
        $data['unfinalized_commitments'] = $object->getUnfinalizedCommitments();
        $data['uncommitted_inboxes'] = $object->getUncommittedInboxes();
        $data['commitment_newest_hash'] = $object->getCommitmentNewestHash();
        $data['tezos_head_level'] = $object->getTezosHeadLevel();
        $data['burn_per_byte'] = $object->getBurnPerByte();
        $data['allocated_storage'] = $object->getAllocatedStorage();
        $data['occupied_storage'] = $object->getOccupiedStorage();
        $data['inbox_ema'] = $object->getInboxEma();
        $data['commitments_watermark'] = $object->getCommitmentsWatermark();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
