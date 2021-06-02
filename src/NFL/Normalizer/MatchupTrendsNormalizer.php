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
class MatchupTrendsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\MatchupTrends';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\MatchupTrends';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\MatchupTrends();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('UpcomingGame', $data)) {
            $object->setUpcomingGame($this->denormalizer->denormalize($data['UpcomingGame'], 'Sportsdata\\API\\NFL\\Model\\Score', 'json', $context));
        }
        if (\array_key_exists('TeamTrends', $data)) {
            $values = array();
            foreach ($data['TeamTrends'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\NFL\\Model\\TeamTrends', 'json', $context);
            }
            $object->setTeamTrends($values);
        }
        if (\array_key_exists('TeamMatchupTrends', $data)) {
            $values_1 = array();
            foreach ($data['TeamMatchupTrends'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\NFL\\Model\\TeamGameTrends', 'json', $context);
            }
            $object->setTeamMatchupTrends($values_1);
        }
        if (\array_key_exists('OpponentMatchupTrends', $data)) {
            $values_2 = array();
            foreach ($data['OpponentMatchupTrends'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Sportsdata\\API\\NFL\\Model\\TeamGameTrends', 'json', $context);
            }
            $object->setOpponentMatchupTrends($values_2);
        }
        if (\array_key_exists('PreviousGames', $data)) {
            $values_3 = array();
            foreach ($data['PreviousGames'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Sportsdata\\API\\NFL\\Model\\Score', 'json', $context);
            }
            $object->setPreviousGames($values_3);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUpcomingGame()) {
            $data['UpcomingGame'] = $this->normalizer->normalize($object->getUpcomingGame(), 'json', $context);
        }
        if (null !== $object->getTeamTrends()) {
            $values = array();
            foreach ($object->getTeamTrends() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['TeamTrends'] = $values;
        }
        if (null !== $object->getTeamMatchupTrends()) {
            $values_1 = array();
            foreach ($object->getTeamMatchupTrends() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['TeamMatchupTrends'] = $values_1;
        }
        if (null !== $object->getOpponentMatchupTrends()) {
            $values_2 = array();
            foreach ($object->getOpponentMatchupTrends() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['OpponentMatchupTrends'] = $values_2;
        }
        if (null !== $object->getPreviousGames()) {
            $values_3 = array();
            foreach ($object->getPreviousGames() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['PreviousGames'] = $values_3;
        }
        return $data;
    }
}