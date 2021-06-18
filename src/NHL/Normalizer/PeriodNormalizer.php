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
class PeriodNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NHL\\Model\\Period';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NHL\\Model\\Period';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NHL\Model\Period();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PeriodID', $data)) {
            $object->setPeriodID($data['PeriodID']);
        }
        if (\array_key_exists('GameID', $data)) {
            $object->setGameID($data['GameID']);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('AwayScore', $data) && $data['AwayScore'] !== null) {
            $object->setAwayScore($data['AwayScore']);
        }
        elseif (\array_key_exists('AwayScore', $data) && $data['AwayScore'] === null) {
            $object->setAwayScore(null);
        }
        if (\array_key_exists('HomeScore', $data) && $data['HomeScore'] !== null) {
            $object->setHomeScore($data['HomeScore']);
        }
        elseif (\array_key_exists('HomeScore', $data) && $data['HomeScore'] === null) {
            $object->setHomeScore(null);
        }
        if (\array_key_exists('ScoringPlays', $data)) {
            $values = array();
            foreach ($data['ScoringPlays'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\NHL\\Model\\ScoringPlay', 'json', $context);
            }
            $object->setScoringPlays($values);
        }
        if (\array_key_exists('Penalties', $data)) {
            $values_1 = array();
            foreach ($data['Penalties'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\NHL\\Model\\Penalty', 'json', $context);
            }
            $object->setPenalties($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPeriodID()) {
            $data['PeriodID'] = $object->getPeriodID();
        }
        if (null !== $object->getGameID()) {
            $data['GameID'] = $object->getGameID();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getAwayScore()) {
            $data['AwayScore'] = $object->getAwayScore();
        }
        if (null !== $object->getHomeScore()) {
            $data['HomeScore'] = $object->getHomeScore();
        }
        if (null !== $object->getScoringPlays()) {
            $values = array();
            foreach ($object->getScoringPlays() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['ScoringPlays'] = $values;
        }
        if (null !== $object->getPenalties()) {
            $values_1 = array();
            foreach ($object->getPenalties() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Penalties'] = $values_1;
        }
        return $data;
    }
}