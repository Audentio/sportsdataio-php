<?php

namespace Sportsdata\API\CBB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CBB\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ConferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\CBB\\Model\\Conference';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CBB\\Model\\Conference';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CBB\Model\Conference();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ConferenceID', $data)) {
            $object->setConferenceID($data['ConferenceID']);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Teams', $data)) {
            $values = array();
            foreach ($data['Teams'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\CBB\\Model\\Team', 'json', $context);
            }
            $object->setTeams($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getConferenceID()) {
            $data['ConferenceID'] = $object->getConferenceID();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getTeams()) {
            $values = array();
            foreach ($object->getTeams() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Teams'] = $values;
        }
        return $data;
    }
}