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
class BoxScoreV3Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\BoxScoreV3';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\BoxScoreV3';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\BoxScoreV3();
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
        if (\array_key_exists('TeamGames', $data)) {
            $values_1 = array();
            foreach ($data['TeamGames'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\NFL\\Model\\TeamGame', 'json', $context);
            }
            $object->setTeamGames($values_1);
        }
        if (\array_key_exists('PlayerGames', $data)) {
            $values_2 = array();
            foreach ($data['PlayerGames'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Sportsdata\\API\\NFL\\Model\\PlayerGame', 'json', $context);
            }
            $object->setPlayerGames($values_2);
        }
        if (\array_key_exists('FantasyDefenseGames', $data)) {
            $values_3 = array();
            foreach ($data['FantasyDefenseGames'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Sportsdata\\API\\NFL\\Model\\FantasyDefenseGame', 'json', $context);
            }
            $object->setFantasyDefenseGames($values_3);
        }
        if (\array_key_exists('ScoringPlays', $data)) {
            $values_4 = array();
            foreach ($data['ScoringPlays'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Sportsdata\\API\\NFL\\Model\\ScoringPlay', 'json', $context);
            }
            $object->setScoringPlays($values_4);
        }
        if (\array_key_exists('ScoringDetails', $data)) {
            $values_5 = array();
            foreach ($data['ScoringDetails'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Sportsdata\\API\\NFL\\Model\\ScoringDetail', 'json', $context);
            }
            $object->setScoringDetails($values_5);
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
        if (null !== $object->getTeamGames()) {
            $values_1 = array();
            foreach ($object->getTeamGames() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['TeamGames'] = $values_1;
        }
        if (null !== $object->getPlayerGames()) {
            $values_2 = array();
            foreach ($object->getPlayerGames() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['PlayerGames'] = $values_2;
        }
        if (null !== $object->getFantasyDefenseGames()) {
            $values_3 = array();
            foreach ($object->getFantasyDefenseGames() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['FantasyDefenseGames'] = $values_3;
        }
        if (null !== $object->getScoringPlays()) {
            $values_4 = array();
            foreach ($object->getScoringPlays() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['ScoringPlays'] = $values_4;
        }
        if (null !== $object->getScoringDetails()) {
            $values_5 = array();
            foreach ($object->getScoringDetails() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['ScoringDetails'] = $values_5;
        }
        return $data;
    }
}