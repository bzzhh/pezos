<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Mempool\Normalizer;

use Bzzhh\Pezos\Generated\Mempool\Runtime\Normalizer\CheckArray;
use Bzzhh\Pezos\Generated\Mempool\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class _016PtMumbaiInlinedEndorsementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Mempool\\Model\\_016PtMumbaiInlinedEndorsement';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Mempool\\Model\\_016PtMumbaiInlinedEndorsement';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Mempool\Model\_016PtMumbaiInlinedEndorsement();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('branch', $data)) {
            $object->setBranch($data['branch']);
            unset($data['branch']);
        }
        if (\array_key_exists('operations', $data)) {
            $object->setOperations($this->denormalizer->denormalize($data['operations'], 'Bzzhh\\Pezos\\Generated\\Mempool\\Model\\_016PtMumbaiInlinedEndorsementMempoolContents', 'json', $context));
            unset($data['operations']);
        }
        if (\array_key_exists('signature', $data)) {
            $object->setSignature($data['signature']);
            unset($data['signature']);
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
        $data['branch'] = $object->getBranch();
        $data['operations'] = $this->normalizer->normalize($object->getOperations(), 'json', $context);
        if ($object->isInitialized('signature') && null !== $object->getSignature()) {
            $data['signature'] = $object->getSignature();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
