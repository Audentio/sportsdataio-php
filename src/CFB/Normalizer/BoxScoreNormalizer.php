<?php

namespace Sportsdata\API\CFB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CFB\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BoxScoreNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\CFB\\Model\\BoxScore';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CFB\\Model\\BoxScore';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CFB\Model\BoxScore();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Game', $data)) {
            $object->setGame($this->denormalizer->denormalize($data['Game'], 'Sportsdata\\API\\CFB\\Model\\Game', 'json', $context));
        }
        if (\array_key_exists('Periods', $data)) {
            $values = array();
            foreach ($data['Periods'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\CFB\\Model\\Period', 'json', $context);
            }
            $object->setPeriods($values);
        }
        if (\array_key_exists('PlayerGames', $data)) {
            $values_1 = array();
            foreach ($data['PlayerGames'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\CFB\\Model\\PlayerGame', 'json', $context);
            }
            $object->setPlayerGames($values_1);
        }
        if (\array_key_exists('TeamGames', $data)) {
            $values_2 = array();
            foreach ($data['TeamGames'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Sportsdata\\API\\CFB\\Model\\TeamGame', 'json', $context);
            }
            $object->setTeamGames($values_2);
        }
        if (\array_key_exists('ScoringPlays', $data)) {
            $values_3 = array();
            foreach ($data['ScoringPlays'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Sportsdata\\API\\CFB\\Model\\ScoringPlay', 'json', $context);
            }
            $object->setScoringPlays($values_3);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGame()) {
            $data['Game'] = $this->normalizer->normalize($object->getGame(), 'json', $context);
        }
        if (null !== $object->getPeriods()) {
            $values = array();
            foreach ($object->getPeriods() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Periods'] = $values;
        }
        if (null !== $object->getPlayerGames()) {
            $values_1 = array();
            foreach ($object->getPlayerGames() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['PlayerGames'] = $values_1;
        }
        if (null !== $object->getTeamGames()) {
            $values_2 = array();
            foreach ($object->getTeamGames() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['TeamGames'] = $values_2;
        }
        if (null !== $object->getScoringPlays()) {
            $values_3 = array();
            foreach ($object->getScoringPlays() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['ScoringPlays'] = $values_3;
        }
        return $data;
    }
}