<?php

namespace Sportsdata\API\LOL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\LOL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AreaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\LOL\\Model\\Area';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\LOL\\Model\\Area';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\LOL\Model\Area();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AreaId', $data)) {
            $object->setAreaId($data['AreaId']);
        }
        if (\array_key_exists('CountryCode', $data) && $data['CountryCode'] !== null) {
            $object->setCountryCode($data['CountryCode']);
        }
        elseif (\array_key_exists('CountryCode', $data) && $data['CountryCode'] === null) {
            $object->setCountryCode(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAreaId()) {
            $data['AreaId'] = $object->getAreaId();
        }
        if (null !== $object->getCountryCode()) {
            $data['CountryCode'] = $object->getCountryCode();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        return $data;
    }
}