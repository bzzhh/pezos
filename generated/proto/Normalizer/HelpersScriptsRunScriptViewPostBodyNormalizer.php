<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Pezos\Generated\Proto\Runtime\Normalizer\CheckArray;
use Pezos\Generated\Proto\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class HelpersScriptsRunScriptViewPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Proto\Model\HelpersScriptsRunScriptViewPostBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\HelpersScriptsRunScriptViewPostBody::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Proto\Model\HelpersScriptsRunScriptViewPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contract', $data)) {
                $object->setContract($data['contract']);
                unset($data['contract']);
            }
            if (\array_key_exists('view', $data)) {
                $object->setView($data['view']);
                unset($data['view']);
            }
            if (\array_key_exists('input', $data)) {
                $object->setInput($data['input']);
                unset($data['input']);
            }
            if (\array_key_exists('unlimited_gas', $data)) {
                $object->setUnlimitedGas($data['unlimited_gas']);
                unset($data['unlimited_gas']);
            }
            if (\array_key_exists('chain_id', $data)) {
                $object->setChainId($data['chain_id']);
                unset($data['chain_id']);
            }
            if (\array_key_exists('source', $data)) {
                $object->setSource($data['source']);
                unset($data['source']);
            }
            if (\array_key_exists('payer', $data)) {
                $object->setPayer($data['payer']);
                unset($data['payer']);
            }
            if (\array_key_exists('gas', $data)) {
                $object->setGas($data['gas']);
                unset($data['gas']);
            }
            if (\array_key_exists('unparsing_mode', $data)) {
                $object->setUnparsingMode($data['unparsing_mode']);
                unset($data['unparsing_mode']);
            }
            if (\array_key_exists('now', $data)) {
                $object->setNow($data['now']);
                unset($data['now']);
            }
            if (\array_key_exists('level', $data)) {
                $object->setLevel($data['level']);
                unset($data['level']);
            }
            if (\array_key_exists('other_contracts', $data)) {
                $values = [];
                foreach ($data['other_contracts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Pezos\Generated\Proto\Model\HelpersScriptsRunScriptViewPostBodyOtherContractsItem::class, 'json', $context);
                }
                $object->setOtherContracts($values);
                unset($data['other_contracts']);
            }
            if (\array_key_exists('extra_big_maps', $data)) {
                $values_1 = [];
                foreach ($data['extra_big_maps'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Pezos\Generated\Proto\Model\HelpersScriptsRunScriptViewPostBodyExtraBigMapsItem::class, 'json', $context);
                }
                $object->setExtraBigMaps($values_1);
                unset($data['extra_big_maps']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['contract'] = $object->getContract();
            $data['view'] = $object->getView();
            $data['input'] = $object->getInput();
            if ($object->isInitialized('unlimitedGas') && null !== $object->getUnlimitedGas()) {
                $data['unlimited_gas'] = $object->getUnlimitedGas();
            }
            $data['chain_id'] = $object->getChainId();
            if ($object->isInitialized('source') && null !== $object->getSource()) {
                $data['source'] = $object->getSource();
            }
            if ($object->isInitialized('payer') && null !== $object->getPayer()) {
                $data['payer'] = $object->getPayer();
            }
            if ($object->isInitialized('gas') && null !== $object->getGas()) {
                $data['gas'] = $object->getGas();
            }
            $data['unparsing_mode'] = $object->getUnparsingMode();
            if ($object->isInitialized('now') && null !== $object->getNow()) {
                $data['now'] = $object->getNow();
            }
            if ($object->isInitialized('level') && null !== $object->getLevel()) {
                $data['level'] = $object->getLevel();
            }
            if ($object->isInitialized('otherContracts') && null !== $object->getOtherContracts()) {
                $values = [];
                foreach ($object->getOtherContracts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['other_contracts'] = $values;
            }
            if ($object->isInitialized('extraBigMaps') && null !== $object->getExtraBigMaps()) {
                $values_1 = [];
                foreach ($object->getExtraBigMaps() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['extra_big_maps'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Proto\Model\HelpersScriptsRunScriptViewPostBody::class => false];
        }
    }
} else {
    class HelpersScriptsRunScriptViewPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Proto\Model\HelpersScriptsRunScriptViewPostBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\HelpersScriptsRunScriptViewPostBody::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Proto\Model\HelpersScriptsRunScriptViewPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contract', $data)) {
                $object->setContract($data['contract']);
                unset($data['contract']);
            }
            if (\array_key_exists('view', $data)) {
                $object->setView($data['view']);
                unset($data['view']);
            }
            if (\array_key_exists('input', $data)) {
                $object->setInput($data['input']);
                unset($data['input']);
            }
            if (\array_key_exists('unlimited_gas', $data)) {
                $object->setUnlimitedGas($data['unlimited_gas']);
                unset($data['unlimited_gas']);
            }
            if (\array_key_exists('chain_id', $data)) {
                $object->setChainId($data['chain_id']);
                unset($data['chain_id']);
            }
            if (\array_key_exists('source', $data)) {
                $object->setSource($data['source']);
                unset($data['source']);
            }
            if (\array_key_exists('payer', $data)) {
                $object->setPayer($data['payer']);
                unset($data['payer']);
            }
            if (\array_key_exists('gas', $data)) {
                $object->setGas($data['gas']);
                unset($data['gas']);
            }
            if (\array_key_exists('unparsing_mode', $data)) {
                $object->setUnparsingMode($data['unparsing_mode']);
                unset($data['unparsing_mode']);
            }
            if (\array_key_exists('now', $data)) {
                $object->setNow($data['now']);
                unset($data['now']);
            }
            if (\array_key_exists('level', $data)) {
                $object->setLevel($data['level']);
                unset($data['level']);
            }
            if (\array_key_exists('other_contracts', $data)) {
                $values = [];
                foreach ($data['other_contracts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Pezos\Generated\Proto\Model\HelpersScriptsRunScriptViewPostBodyOtherContractsItem::class, 'json', $context);
                }
                $object->setOtherContracts($values);
                unset($data['other_contracts']);
            }
            if (\array_key_exists('extra_big_maps', $data)) {
                $values_1 = [];
                foreach ($data['extra_big_maps'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Pezos\Generated\Proto\Model\HelpersScriptsRunScriptViewPostBodyExtraBigMapsItem::class, 'json', $context);
                }
                $object->setExtraBigMaps($values_1);
                unset($data['extra_big_maps']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            $data['contract'] = $object->getContract();
            $data['view'] = $object->getView();
            $data['input'] = $object->getInput();
            if ($object->isInitialized('unlimitedGas') && null !== $object->getUnlimitedGas()) {
                $data['unlimited_gas'] = $object->getUnlimitedGas();
            }
            $data['chain_id'] = $object->getChainId();
            if ($object->isInitialized('source') && null !== $object->getSource()) {
                $data['source'] = $object->getSource();
            }
            if ($object->isInitialized('payer') && null !== $object->getPayer()) {
                $data['payer'] = $object->getPayer();
            }
            if ($object->isInitialized('gas') && null !== $object->getGas()) {
                $data['gas'] = $object->getGas();
            }
            $data['unparsing_mode'] = $object->getUnparsingMode();
            if ($object->isInitialized('now') && null !== $object->getNow()) {
                $data['now'] = $object->getNow();
            }
            if ($object->isInitialized('level') && null !== $object->getLevel()) {
                $data['level'] = $object->getLevel();
            }
            if ($object->isInitialized('otherContracts') && null !== $object->getOtherContracts()) {
                $values = [];
                foreach ($object->getOtherContracts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['other_contracts'] = $values;
            }
            if ($object->isInitialized('extraBigMaps') && null !== $object->getExtraBigMaps()) {
                $values_1 = [];
                foreach ($object->getExtraBigMaps() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['extra_big_maps'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Proto\Model\HelpersScriptsRunScriptViewPostBody::class => false];
        }
    }
}
