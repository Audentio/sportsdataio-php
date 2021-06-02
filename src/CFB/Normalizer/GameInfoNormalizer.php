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
class GameInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\CFB\\Model\\GameInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CFB\\Model\\GameInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CFB\Model\GameInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GameId', $data)) {
            $object->setGameId($data['GameId']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('Week', $data)) {
            $object->setWeek($data['Week']);
        }
        if (\array_key_exists('Day', $data)) {
            $object->setDay($data['Day']);
        }
        if (\array_key_exists('DateTime', $data)) {
            $object->setDateTime($data['DateTime']);
        }
        if (\array_key_exists('Status', $data)) {
            $object->setStatus($data['Status']);
        }
        if (\array_key_exists('AwayTeamId', $data)) {
            $object->setAwayTeamId($data['AwayTeamId']);
        }
        if (\array_key_exists('HomeTeamId', $data)) {
            $object->setHomeTeamId($data['HomeTeamId']);
        }
        if (\array_key_exists('AwayTeamName', $data)) {
            $object->setAwayTeamName($data['AwayTeamName']);
        }
        if (\array_key_exists('HomeTeamName', $data)) {
            $object->setHomeTeamName($data['HomeTeamName']);
        }
        if (\array_key_exists('GlobalGameId', $data)) {
            $object->setGlobalGameId($data['GlobalGameId']);
        }
        if (\array_key_exists('GlobalAwayTeamId', $data)) {
            $object->setGlobalAwayTeamId($data['GlobalAwayTeamId']);
        }
        if (\array_key_exists('GlobalHomeTeamId', $data)) {
            $object->setGlobalHomeTeamId($data['GlobalHomeTeamId']);
        }
        if (\array_key_exists('PregameOdds', $data)) {
            $values = array();
            foreach ($data['PregameOdds'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\CFB\\Model\\GameOdd', 'json', $context);
            }
            $object->setPregameOdds($values);
        }
        if (\array_key_exists('LiveOdds', $data)) {
            $values_1 = array();
            foreach ($data['LiveOdds'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\CFB\\Model\\GameOdd', 'json', $context);
            }
            $object->setLiveOdds($values_1);
        }
        if (\array_key_exists('HomeTeamScore', $data)) {
            $object->setHomeTeamScore($data['HomeTeamScore']);
        }
        if (\array_key_exists('AwayTeamScore', $data)) {
            $object->setAwayTeamScore($data['AwayTeamScore']);
        }
        if (\array_key_exists('TotalScore', $data)) {
            $object->setTotalScore($data['TotalScore']);
        }
        if (\array_key_exists('HomeRotationNumber', $data)) {
            $object->setHomeRotationNumber($data['HomeRotationNumber']);
        }
        if (\array_key_exists('AwayRotationNumber', $data)) {
            $object->setAwayRotationNumber($data['AwayRotationNumber']);
        }
        if (\array_key_exists('AlternateMarketPregameOdds', $data)) {
            $values_2 = array();
            foreach ($data['AlternateMarketPregameOdds'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Sportsdata\\API\\CFB\\Model\\GameOdd', 'json', $context);
            }
            $object->setAlternateMarketPregameOdds($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGameId()) {
            $data['GameId'] = $object->getGameId();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getWeek()) {
            $data['Week'] = $object->getWeek();
        }
        if (null !== $object->getDay()) {
            $data['Day'] = $object->getDay();
        }
        if (null !== $object->getDateTime()) {
            $data['DateTime'] = $object->getDateTime();
        }
        if (null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus();
        }
        if (null !== $object->getAwayTeamId()) {
            $data['AwayTeamId'] = $object->getAwayTeamId();
        }
        if (null !== $object->getHomeTeamId()) {
            $data['HomeTeamId'] = $object->getHomeTeamId();
        }
        if (null !== $object->getAwayTeamName()) {
            $data['AwayTeamName'] = $object->getAwayTeamName();
        }
        if (null !== $object->getHomeTeamName()) {
            $data['HomeTeamName'] = $object->getHomeTeamName();
        }
        if (null !== $object->getGlobalGameId()) {
            $data['GlobalGameId'] = $object->getGlobalGameId();
        }
        if (null !== $object->getGlobalAwayTeamId()) {
            $data['GlobalAwayTeamId'] = $object->getGlobalAwayTeamId();
        }
        if (null !== $object->getGlobalHomeTeamId()) {
            $data['GlobalHomeTeamId'] = $object->getGlobalHomeTeamId();
        }
        if (null !== $object->getPregameOdds()) {
            $values = array();
            foreach ($object->getPregameOdds() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['PregameOdds'] = $values;
        }
        if (null !== $object->getLiveOdds()) {
            $values_1 = array();
            foreach ($object->getLiveOdds() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['LiveOdds'] = $values_1;
        }
        if (null !== $object->getHomeTeamScore()) {
            $data['HomeTeamScore'] = $object->getHomeTeamScore();
        }
        if (null !== $object->getAwayTeamScore()) {
            $data['AwayTeamScore'] = $object->getAwayTeamScore();
        }
        if (null !== $object->getTotalScore()) {
            $data['TotalScore'] = $object->getTotalScore();
        }
        if (null !== $object->getHomeRotationNumber()) {
            $data['HomeRotationNumber'] = $object->getHomeRotationNumber();
        }
        if (null !== $object->getAwayRotationNumber()) {
            $data['AwayRotationNumber'] = $object->getAwayRotationNumber();
        }
        if (null !== $object->getAlternateMarketPregameOdds()) {
            $values_2 = array();
            foreach ($object->getAlternateMarketPregameOdds() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['AlternateMarketPregameOdds'] = $values_2;
        }
        return $data;
    }
}