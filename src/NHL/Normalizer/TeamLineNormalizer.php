<?php

namespace Sportsdata\API\NHL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\NHL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TeamLineNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NHL\\Model\\TeamLine';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NHL\\Model\\TeamLine';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NHL\Model\TeamLine();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('Key', $data)) {
            $object->setKey($data['Key']);
        }
        if (\array_key_exists('FullName', $data)) {
            $object->setFullName($data['FullName']);
        }
        if (\array_key_exists('EvenStrengthLines', $data)) {
            $values = array();
            foreach ($data['EvenStrengthLines'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\NHL\\Model\\PlayerLine', 'json', $context);
            }
            $object->setEvenStrengthLines($values);
        }
        if (\array_key_exists('PowerPlayLines', $data)) {
            $values_1 = array();
            foreach ($data['PowerPlayLines'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\NHL\\Model\\PlayerLine', 'json', $context);
            }
            $object->setPowerPlayLines($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getKey()) {
            $data['Key'] = $object->getKey();
        }
        if (null !== $object->getFullName()) {
            $data['FullName'] = $object->getFullName();
        }
        if (null !== $object->getEvenStrengthLines()) {
            $values = array();
            foreach ($object->getEvenStrengthLines() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['EvenStrengthLines'] = $values;
        }
        if (null !== $object->getPowerPlayLines()) {
            $values_1 = array();
            foreach ($object->getPowerPlayLines() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['PowerPlayLines'] = $values_1;
        }
        return $data;
    }
}