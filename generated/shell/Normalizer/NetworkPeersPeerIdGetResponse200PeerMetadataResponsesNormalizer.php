<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Normalizer;

use Bzzhh\Pezos\Generated\Shell\Runtime\Normalizer\CheckArray;
use Bzzhh\Pezos\Generated\Shell\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class NetworkPeersPeerIdGetResponse200PeerMetadataResponsesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataResponses';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataResponses';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Shell\Model\NetworkPeersPeerIdGetResponse200PeerMetadataResponses();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sent', $data)) {
            $object->setSent($data['sent']);
            unset($data['sent']);
        }
        if (\array_key_exists('failed', $data)) {
            $object->setFailed($data['failed']);
            unset($data['failed']);
        }
        if (\array_key_exists('received', $data)) {
            $object->setReceived($data['received']);
            unset($data['received']);
        }
        if (\array_key_exists('unexpected', $data)) {
            $object->setUnexpected($data['unexpected']);
            unset($data['unexpected']);
        }
        if (\array_key_exists('outdated', $data)) {
            $object->setOutdated($data['outdated']);
            unset($data['outdated']);
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
        $data['sent'] = $object->getSent();
        $data['failed'] = $object->getFailed();
        $data['received'] = $object->getReceived();
        $data['unexpected'] = $object->getUnexpected();
        $data['outdated'] = $object->getOutdated();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
