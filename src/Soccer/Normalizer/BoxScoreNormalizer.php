<?php

namespace Sportsdata\API\Soccer\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\Soccer\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\Soccer\\Model\\BoxScore';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Soccer\\Model\\BoxScore';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Soccer\Model\BoxScore();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Game', $data)) {
            $object->setGame($this->denormalizer->denormalize($data['Game'], 'Sportsdata\\API\\Soccer\\Model\\Game', 'json', $context));
        }
        if (\array_key_exists('AwayTeamCoach', $data)) {
            $object->setAwayTeamCoach($this->denormalizer->denormalize($data['AwayTeamCoach'], 'Sportsdata\\API\\Soccer\\Model\\Coach', 'json', $context));
        }
        if (\array_key_exists('HomeTeamCoach', $data)) {
            $object->setHomeTeamCoach($this->denormalizer->denormalize($data['HomeTeamCoach'], 'Sportsdata\\API\\Soccer\\Model\\Coach', 'json', $context));
        }
        if (\array_key_exists('MainReferee', $data)) {
            $object->setMainReferee($this->denormalizer->denormalize($data['MainReferee'], 'Sportsdata\\API\\Soccer\\Model\\Referee', 'json', $context));
        }
        if (\array_key_exists('AssistantReferee1', $data)) {
            $object->setAssistantReferee1($this->denormalizer->denormalize($data['AssistantReferee1'], 'Sportsdata\\API\\Soccer\\Model\\Referee', 'json', $context));
        }
        if (\array_key_exists('AssistantReferee2', $data)) {
            $object->setAssistantReferee2($this->denormalizer->denormalize($data['AssistantReferee2'], 'Sportsdata\\API\\Soccer\\Model\\Referee', 'json', $context));
        }
        if (\array_key_exists('FourthReferee', $data)) {
            $object->setFourthReferee($this->denormalizer->denormalize($data['FourthReferee'], 'Sportsdata\\API\\Soccer\\Model\\Referee', 'json', $context));
        }
        if (\array_key_exists('AdditionalAssistantReferee1', $data)) {
            $object->setAdditionalAssistantReferee1($this->denormalizer->denormalize($data['AdditionalAssistantReferee1'], 'Sportsdata\\API\\Soccer\\Model\\Referee', 'json', $context));
        }
        if (\array_key_exists('AdditionalAssistantReferee2', $data)) {
            $object->setAdditionalAssistantReferee2($this->denormalizer->denormalize($data['AdditionalAssistantReferee2'], 'Sportsdata\\API\\Soccer\\Model\\Referee', 'json', $context));
        }
        if (\array_key_exists('Lineups', $data)) {
            $values = array();
            foreach ($data['Lineups'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\Soccer\\Model\\Lineup', 'json', $context);
            }
            $object->setLineups($values);
        }
        if (\array_key_exists('Goals', $data)) {
            $values_1 = array();
            foreach ($data['Goals'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\Soccer\\Model\\Goal', 'json', $context);
            }
            $object->setGoals($values_1);
        }
        if (\array_key_exists('Bookings', $data)) {
            $values_2 = array();
            foreach ($data['Bookings'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Sportsdata\\API\\Soccer\\Model\\Booking', 'json', $context);
            }
            $object->setBookings($values_2);
        }
        if (\array_key_exists('PenaltyShootouts', $data)) {
            $values_3 = array();
            foreach ($data['PenaltyShootouts'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Sportsdata\\API\\Soccer\\Model\\PenaltyShootout', 'json', $context);
            }
            $object->setPenaltyShootouts($values_3);
        }
        if (\array_key_exists('TeamGames', $data)) {
            $values_4 = array();
            foreach ($data['TeamGames'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Sportsdata\\API\\Soccer\\Model\\TeamGame', 'json', $context);
            }
            $object->setTeamGames($values_4);
        }
        if (\array_key_exists('PlayerGames', $data)) {
            $values_5 = array();
            foreach ($data['PlayerGames'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Sportsdata\\API\\Soccer\\Model\\PlayerGame', 'json', $context);
            }
            $object->setPlayerGames($values_5);
        }
        if (\array_key_exists('VideoAssistantReferee', $data)) {
            $object->setVideoAssistantReferee($this->denormalizer->denormalize($data['VideoAssistantReferee'], 'Sportsdata\\API\\Soccer\\Model\\Referee', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGame()) {
            $data['Game'] = $this->normalizer->normalize($object->getGame(), 'json', $context);
        }
        if (null !== $object->getAwayTeamCoach()) {
            $data['AwayTeamCoach'] = $this->normalizer->normalize($object->getAwayTeamCoach(), 'json', $context);
        }
        if (null !== $object->getHomeTeamCoach()) {
            $data['HomeTeamCoach'] = $this->normalizer->normalize($object->getHomeTeamCoach(), 'json', $context);
        }
        if (null !== $object->getMainReferee()) {
            $data['MainReferee'] = $this->normalizer->normalize($object->getMainReferee(), 'json', $context);
        }
        if (null !== $object->getAssistantReferee1()) {
            $data['AssistantReferee1'] = $this->normalizer->normalize($object->getAssistantReferee1(), 'json', $context);
        }
        if (null !== $object->getAssistantReferee2()) {
            $data['AssistantReferee2'] = $this->normalizer->normalize($object->getAssistantReferee2(), 'json', $context);
        }
        if (null !== $object->getFourthReferee()) {
            $data['FourthReferee'] = $this->normalizer->normalize($object->getFourthReferee(), 'json', $context);
        }
        if (null !== $object->getAdditionalAssistantReferee1()) {
            $data['AdditionalAssistantReferee1'] = $this->normalizer->normalize($object->getAdditionalAssistantReferee1(), 'json', $context);
        }
        if (null !== $object->getAdditionalAssistantReferee2()) {
            $data['AdditionalAssistantReferee2'] = $this->normalizer->normalize($object->getAdditionalAssistantReferee2(), 'json', $context);
        }
        if (null !== $object->getLineups()) {
            $values = array();
            foreach ($object->getLineups() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Lineups'] = $values;
        }
        if (null !== $object->getGoals()) {
            $values_1 = array();
            foreach ($object->getGoals() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Goals'] = $values_1;
        }
        if (null !== $object->getBookings()) {
            $values_2 = array();
            foreach ($object->getBookings() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['Bookings'] = $values_2;
        }
        if (null !== $object->getPenaltyShootouts()) {
            $values_3 = array();
            foreach ($object->getPenaltyShootouts() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['PenaltyShootouts'] = $values_3;
        }
        if (null !== $object->getTeamGames()) {
            $values_4 = array();
            foreach ($object->getTeamGames() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['TeamGames'] = $values_4;
        }
        if (null !== $object->getPlayerGames()) {
            $values_5 = array();
            foreach ($object->getPlayerGames() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['PlayerGames'] = $values_5;
        }
        if (null !== $object->getVideoAssistantReferee()) {
            $data['VideoAssistantReferee'] = $this->normalizer->normalize($object->getVideoAssistantReferee(), 'json', $context);
        }
        return $data;
    }
}