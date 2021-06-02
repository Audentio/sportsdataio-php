<?php

namespace Sportsdata\API\NFL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\NFL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PlayByPlayNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\PlayByPlay';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\PlayByPlay';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\PlayByPlay();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Score', $data)) {
            $object->setScore($this->denormalizer->denormalize($data['Score'], 'Sportsdata\\API\\NFL\\Model\\Score', 'json', $context));
        }
        if (\array_key_exists('Quarters', $data)) {
            $values = array();
            foreach ($data['Quarters'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\NFL\\Model\\Quarter', 'json', $context);
            }
            $object->setQuarters($values);
        }
        if (\array_key_exists('Plays', $data)) {
            $values_1 = array();
            foreach ($data['Plays'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\NFL\\Model\\Play', 'json', $context);
            }
            $object->setPlays($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getScore()) {
            $data['Score'] = $this->normalizer->normalize($object->getScore(), 'json', $context);
        }
        if (null !== $object->getQuarters()) {
            $values = array();
            foreach ($object->getQuarters() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Quarters'] = $values;
        }
        if (null !== $object->getPlays()) {
            $values_1 = array();
            foreach ($object->getPlays() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Plays'] = $values_1;
        }
        return $data;
    }
}