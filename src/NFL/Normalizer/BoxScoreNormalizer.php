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
class BoxScoreNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\BoxScore';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\BoxScore';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\BoxScore();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Score', $data)) {
            $object->setScore($this->denormalizer->denormalize($data['Score'], 'Sportsdata\\API\\NFL\\Model\\Score', 'json', $context));
        }
        if (\array_key_exists('Game', $data)) {
            $object->setGame($this->denormalizer->denormalize($data['Game'], 'Sportsdata\\API\\NFL\\Model\\Game', 'json', $context));
        }
        if (\array_key_exists('ScoringPlays', $data)) {
            $values = array();
            foreach ($data['ScoringPlays'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\NFL\\Model\\ScoringPlay', 'json', $context);
            }
            $object->setScoringPlays($values);
        }
        if (\array_key_exists('ScoringDetails', $data)) {
            $values_1 = array();
            foreach ($data['ScoringDetails'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\NFL\\Model\\ScoringDetail', 'json', $context);
            }
            $object->setScoringDetails($values_1);
        }
        if (\array_key_exists('AwayFantasyDefense', $data)) {
            $object->setAwayFantasyDefense($this->denormalizer->denormalize($data['AwayFantasyDefense'], 'Sportsdata\\API\\NFL\\Model\\FantasyDefenseGame', 'json', $context));
        }
        if (\array_key_exists('HomeFantasyDefense', $data)) {
            $object->setHomeFantasyDefense($this->denormalizer->denormalize($data['HomeFantasyDefense'], 'Sportsdata\\API\\NFL\\Model\\FantasyDefenseGame', 'json', $context));
        }
        if (\array_key_exists('AwayPassing', $data)) {
            $values_2 = array();
            foreach ($data['AwayPassing'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Sportsdata\\API\\NFL\\Model\\PlayerPassing', 'json', $context);
            }
            $object->setAwayPassing($values_2);
        }
        if (\array_key_exists('AwayRushing', $data)) {
            $values_3 = array();
            foreach ($data['AwayRushing'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Sportsdata\\API\\NFL\\Model\\PlayerRushing', 'json', $context);
            }
            $object->setAwayRushing($values_3);
        }
        if (\array_key_exists('AwayReceiving', $data)) {
            $values_4 = array();
            foreach ($data['AwayReceiving'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Sportsdata\\API\\NFL\\Model\\PlayerReceiving', 'json', $context);
            }
            $object->setAwayReceiving($values_4);
        }
        if (\array_key_exists('AwayKicking', $data)) {
            $values_5 = array();
            foreach ($data['AwayKicking'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Sportsdata\\API\\NFL\\Model\\PlayerKicking', 'json', $context);
            }
            $object->setAwayKicking($values_5);
        }
        if (\array_key_exists('AwayPunting', $data)) {
            $values_6 = array();
            foreach ($data['AwayPunting'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Sportsdata\\API\\NFL\\Model\\PlayerPunting', 'json', $context);
            }
            $object->setAwayPunting($values_6);
        }
        if (\array_key_exists('AwayKickPuntReturns', $data)) {
            $values_7 = array();
            foreach ($data['AwayKickPuntReturns'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Sportsdata\\API\\NFL\\Model\\PlayerKickPuntReturns', 'json', $context);
            }
            $object->setAwayKickPuntReturns($values_7);
        }
        if (\array_key_exists('AwayDefense', $data)) {
            $values_8 = array();
            foreach ($data['AwayDefense'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Sportsdata\\API\\NFL\\Model\\PlayerDefense', 'json', $context);
            }
            $object->setAwayDefense($values_8);
        }
        if (\array_key_exists('HomePassing', $data)) {
            $values_9 = array();
            foreach ($data['HomePassing'] as $value_9) {
                $values_9[] = $this->denormalizer->denormalize($value_9, 'Sportsdata\\API\\NFL\\Model\\PlayerPassing', 'json', $context);
            }
            $object->setHomePassing($values_9);
        }
        if (\array_key_exists('HomeRushing', $data)) {
            $values_10 = array();
            foreach ($data['HomeRushing'] as $value_10) {
                $values_10[] = $this->denormalizer->denormalize($value_10, 'Sportsdata\\API\\NFL\\Model\\PlayerRushing', 'json', $context);
            }
            $object->setHomeRushing($values_10);
        }
        if (\array_key_exists('HomeReceiving', $data)) {
            $values_11 = array();
            foreach ($data['HomeReceiving'] as $value_11) {
                $values_11[] = $this->denormalizer->denormalize($value_11, 'Sportsdata\\API\\NFL\\Model\\PlayerReceiving', 'json', $context);
            }
            $object->setHomeReceiving($values_11);
        }
        if (\array_key_exists('HomeKicking', $data)) {
            $values_12 = array();
            foreach ($data['HomeKicking'] as $value_12) {
                $values_12[] = $this->denormalizer->denormalize($value_12, 'Sportsdata\\API\\NFL\\Model\\PlayerKicking', 'json', $context);
            }
            $object->setHomeKicking($values_12);
        }
        if (\array_key_exists('HomePunting', $data)) {
            $values_13 = array();
            foreach ($data['HomePunting'] as $value_13) {
                $values_13[] = $this->denormalizer->denormalize($value_13, 'Sportsdata\\API\\NFL\\Model\\PlayerPunting', 'json', $context);
            }
            $object->setHomePunting($values_13);
        }
        if (\array_key_exists('HomeKickPuntReturns', $data)) {
            $values_14 = array();
            foreach ($data['HomeKickPuntReturns'] as $value_14) {
                $values_14[] = $this->denormalizer->denormalize($value_14, 'Sportsdata\\API\\NFL\\Model\\PlayerKickPuntReturns', 'json', $context);
            }
            $object->setHomeKickPuntReturns($values_14);
        }
        if (\array_key_exists('HomeDefense', $data)) {
            $values_15 = array();
            foreach ($data['HomeDefense'] as $value_15) {
                $values_15[] = $this->denormalizer->denormalize($value_15, 'Sportsdata\\API\\NFL\\Model\\PlayerDefense', 'json', $context);
            }
            $object->setHomeDefense($values_15);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getScore()) {
            $data['Score'] = $this->normalizer->normalize($object->getScore(), 'json', $context);
        }
        if (null !== $object->getGame()) {
            $data['Game'] = $this->normalizer->normalize($object->getGame(), 'json', $context);
        }
        if (null !== $object->getScoringPlays()) {
            $values = array();
            foreach ($object->getScoringPlays() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['ScoringPlays'] = $values;
        }
        if (null !== $object->getScoringDetails()) {
            $values_1 = array();
            foreach ($object->getScoringDetails() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['ScoringDetails'] = $values_1;
        }
        if (null !== $object->getAwayFantasyDefense()) {
            $data['AwayFantasyDefense'] = $this->normalizer->normalize($object->getAwayFantasyDefense(), 'json', $context);
        }
        if (null !== $object->getHomeFantasyDefense()) {
            $data['HomeFantasyDefense'] = $this->normalizer->normalize($object->getHomeFantasyDefense(), 'json', $context);
        }
        if (null !== $object->getAwayPassing()) {
            $values_2 = array();
            foreach ($object->getAwayPassing() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['AwayPassing'] = $values_2;
        }
        if (null !== $object->getAwayRushing()) {
            $values_3 = array();
            foreach ($object->getAwayRushing() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['AwayRushing'] = $values_3;
        }
        if (null !== $object->getAwayReceiving()) {
            $values_4 = array();
            foreach ($object->getAwayReceiving() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['AwayReceiving'] = $values_4;
        }
        if (null !== $object->getAwayKicking()) {
            $values_5 = array();
            foreach ($object->getAwayKicking() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['AwayKicking'] = $values_5;
        }
        if (null !== $object->getAwayPunting()) {
            $values_6 = array();
            foreach ($object->getAwayPunting() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['AwayPunting'] = $values_6;
        }
        if (null !== $object->getAwayKickPuntReturns()) {
            $values_7 = array();
            foreach ($object->getAwayKickPuntReturns() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['AwayKickPuntReturns'] = $values_7;
        }
        if (null !== $object->getAwayDefense()) {
            $values_8 = array();
            foreach ($object->getAwayDefense() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data['AwayDefense'] = $values_8;
        }
        if (null !== $object->getHomePassing()) {
            $values_9 = array();
            foreach ($object->getHomePassing() as $value_9) {
                $values_9[] = $this->normalizer->normalize($value_9, 'json', $context);
            }
            $data['HomePassing'] = $values_9;
        }
        if (null !== $object->getHomeRushing()) {
            $values_10 = array();
            foreach ($object->getHomeRushing() as $value_10) {
                $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
            }
            $data['HomeRushing'] = $values_10;
        }
        if (null !== $object->getHomeReceiving()) {
            $values_11 = array();
            foreach ($object->getHomeReceiving() as $value_11) {
                $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
            }
            $data['HomeReceiving'] = $values_11;
        }
        if (null !== $object->getHomeKicking()) {
            $values_12 = array();
            foreach ($object->getHomeKicking() as $value_12) {
                $values_12[] = $this->normalizer->normalize($value_12, 'json', $context);
            }
            $data['HomeKicking'] = $values_12;
        }
        if (null !== $object->getHomePunting()) {
            $values_13 = array();
            foreach ($object->getHomePunting() as $value_13) {
                $values_13[] = $this->normalizer->normalize($value_13, 'json', $context);
            }
            $data['HomePunting'] = $values_13;
        }
        if (null !== $object->getHomeKickPuntReturns()) {
            $values_14 = array();
            foreach ($object->getHomeKickPuntReturns() as $value_14) {
                $values_14[] = $this->normalizer->normalize($value_14, 'json', $context);
            }
            $data['HomeKickPuntReturns'] = $values_14;
        }
        if (null !== $object->getHomeDefense()) {
            $values_15 = array();
            foreach ($object->getHomeDefense() as $value_15) {
                $values_15[] = $this->normalizer->normalize($value_15, 'json', $context);
            }
            $data['HomeDefense'] = $values_15;
        }
        return $data;
    }
}