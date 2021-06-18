<?php

namespace Sportsdata\API\NBA\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\NBA\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\NBA\\Model\\GameInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NBA\\Model\\GameInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NBA\Model\GameInfo();
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
        if (\array_key_exists('Day', $data) && $data['Day'] !== null) {
            $object->setDay($data['Day']);
        }
        elseif (\array_key_exists('Day', $data) && $data['Day'] === null) {
            $object->setDay(null);
        }
        if (\array_key_exists('DateTime', $data) && $data['DateTime'] !== null) {
            $object->setDateTime($data['DateTime']);
        }
        elseif (\array_key_exists('DateTime', $data) && $data['DateTime'] === null) {
            $object->setDateTime(null);
        }
        if (\array_key_exists('Status', $data) && $data['Status'] !== null) {
            $object->setStatus($data['Status']);
        }
        elseif (\array_key_exists('Status', $data) && $data['Status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('AwayTeamId', $data) && $data['AwayTeamId'] !== null) {
            $object->setAwayTeamId($data['AwayTeamId']);
        }
        elseif (\array_key_exists('AwayTeamId', $data) && $data['AwayTeamId'] === null) {
            $object->setAwayTeamId(null);
        }
        if (\array_key_exists('HomeTeamId', $data) && $data['HomeTeamId'] !== null) {
            $object->setHomeTeamId($data['HomeTeamId']);
        }
        elseif (\array_key_exists('HomeTeamId', $data) && $data['HomeTeamId'] === null) {
            $object->setHomeTeamId(null);
        }
        if (\array_key_exists('AwayTeamName', $data) && $data['AwayTeamName'] !== null) {
            $object->setAwayTeamName($data['AwayTeamName']);
        }
        elseif (\array_key_exists('AwayTeamName', $data) && $data['AwayTeamName'] === null) {
            $object->setAwayTeamName(null);
        }
        if (\array_key_exists('HomeTeamName', $data) && $data['HomeTeamName'] !== null) {
            $object->setHomeTeamName($data['HomeTeamName']);
        }
        elseif (\array_key_exists('HomeTeamName', $data) && $data['HomeTeamName'] === null) {
            $object->setHomeTeamName(null);
        }
        if (\array_key_exists('GlobalGameId', $data)) {
            $object->setGlobalGameId($data['GlobalGameId']);
        }
        if (\array_key_exists('GlobalAwayTeamId', $data) && $data['GlobalAwayTeamId'] !== null) {
            $object->setGlobalAwayTeamId($data['GlobalAwayTeamId']);
        }
        elseif (\array_key_exists('GlobalAwayTeamId', $data) && $data['GlobalAwayTeamId'] === null) {
            $object->setGlobalAwayTeamId(null);
        }
        if (\array_key_exists('GlobalHomeTeamId', $data) && $data['GlobalHomeTeamId'] !== null) {
            $object->setGlobalHomeTeamId($data['GlobalHomeTeamId']);
        }
        elseif (\array_key_exists('GlobalHomeTeamId', $data) && $data['GlobalHomeTeamId'] === null) {
            $object->setGlobalHomeTeamId(null);
        }
        if (\array_key_exists('PregameOdds', $data)) {
            $values = array();
            foreach ($data['PregameOdds'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\NBA\\Model\\GameOdd', 'json', $context);
            }
            $object->setPregameOdds($values);
        }
        if (\array_key_exists('LiveOdds', $data)) {
            $values_1 = array();
            foreach ($data['LiveOdds'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\NBA\\Model\\GameOdd', 'json', $context);
            }
            $object->setLiveOdds($values_1);
        }
        if (\array_key_exists('HomeTeamScore', $data) && $data['HomeTeamScore'] !== null) {
            $object->setHomeTeamScore($data['HomeTeamScore']);
        }
        elseif (\array_key_exists('HomeTeamScore', $data) && $data['HomeTeamScore'] === null) {
            $object->setHomeTeamScore(null);
        }
        if (\array_key_exists('AwayTeamScore', $data) && $data['AwayTeamScore'] !== null) {
            $object->setAwayTeamScore($data['AwayTeamScore']);
        }
        elseif (\array_key_exists('AwayTeamScore', $data) && $data['AwayTeamScore'] === null) {
            $object->setAwayTeamScore(null);
        }
        if (\array_key_exists('TotalScore', $data) && $data['TotalScore'] !== null) {
            $object->setTotalScore($data['TotalScore']);
        }
        elseif (\array_key_exists('TotalScore', $data) && $data['TotalScore'] === null) {
            $object->setTotalScore(null);
        }
        if (\array_key_exists('HomeRotationNumber', $data) && $data['HomeRotationNumber'] !== null) {
            $object->setHomeRotationNumber($data['HomeRotationNumber']);
        }
        elseif (\array_key_exists('HomeRotationNumber', $data) && $data['HomeRotationNumber'] === null) {
            $object->setHomeRotationNumber(null);
        }
        if (\array_key_exists('AwayRotationNumber', $data) && $data['AwayRotationNumber'] !== null) {
            $object->setAwayRotationNumber($data['AwayRotationNumber']);
        }
        elseif (\array_key_exists('AwayRotationNumber', $data) && $data['AwayRotationNumber'] === null) {
            $object->setAwayRotationNumber(null);
        }
        if (\array_key_exists('AlternateMarketPregameOdds', $data)) {
            $values_2 = array();
            foreach ($data['AlternateMarketPregameOdds'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Sportsdata\\API\\NBA\\Model\\GameOdd', 'json', $context);
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