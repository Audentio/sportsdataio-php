<?php

namespace Sportsdata\API\Nascar\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\Nascar\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class RaceResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Nascar\\Model\\RaceResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Nascar\\Model\\RaceResult';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Nascar\Model\RaceResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Race', $data)) {
            $object->setRace($this->denormalizer->denormalize($data['Race'], 'Sportsdata\\API\\Nascar\\Model\\Race', 'json', $context));
        }
        if (\array_key_exists('DriverRaces', $data)) {
            $values = array();
            foreach ($data['DriverRaces'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\Nascar\\Model\\DriverRace', 'json', $context);
            }
            $object->setDriverRaces($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRace()) {
            $data['Race'] = $this->normalizer->normalize($object->getRace(), 'json', $context);
        }
        if (null !== $object->getDriverRaces()) {
            $values = array();
            foreach ($object->getDriverRaces() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['DriverRaces'] = $values;
        }
        return $data;
    }
}