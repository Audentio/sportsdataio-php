<?php

namespace Sportsdata\API\CWBB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CWBB\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\CWBB\\Model\\Game';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CWBB\\Model\\Game';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CWBB\Model\Game();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GameID', $data)) {
            $object->setGameID($data['GameID']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('Status', $data) && $data['Status'] !== null) {
            $object->setStatus($data['Status']);
        }
        elseif (\array_key_exists('Status', $data) && $data['Status'] === null) {
            $object->setStatus(null);
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
        if (\array_key_exists('AwayTeam', $data) && $data['AwayTeam'] !== null) {
            $object->setAwayTeam($data['AwayTeam']);
        }
        elseif (\array_key_exists('AwayTeam', $data) && $data['AwayTeam'] === null) {
            $object->setAwayTeam(null);
        }
        if (\array_key_exists('HomeTeam', $data) && $data['HomeTeam'] !== null) {
            $object->setHomeTeam($data['HomeTeam']);
        }
        elseif (\array_key_exists('HomeTeam', $data) && $data['HomeTeam'] === null) {
            $object->setHomeTeam(null);
        }
        if (\array_key_exists('AwayTeamID', $data) && $data['AwayTeamID'] !== null) {
            $object->setAwayTeamID($data['AwayTeamID']);
        }
        elseif (\array_key_exists('AwayTeamID', $data) && $data['AwayTeamID'] === null) {
            $object->setAwayTeamID(null);
        }
        if (\array_key_exists('HomeTeamID', $data) && $data['HomeTeamID'] !== null) {
            $object->setHomeTeamID($data['HomeTeamID']);
        }
        elseif (\array_key_exists('HomeTeamID', $data) && $data['HomeTeamID'] === null) {
            $object->setHomeTeamID(null);
        }
        if (\array_key_exists('AwayTeamScore', $data) && $data['AwayTeamScore'] !== null) {
            $object->setAwayTeamScore($data['AwayTeamScore']);
        }
        elseif (\array_key_exists('AwayTeamScore', $data) && $data['AwayTeamScore'] === null) {
            $object->setAwayTeamScore(null);
        }
        if (\array_key_exists('HomeTeamScore', $data) && $data['HomeTeamScore'] !== null) {
            $object->setHomeTeamScore($data['HomeTeamScore']);
        }
        elseif (\array_key_exists('HomeTeamScore', $data) && $data['HomeTeamScore'] === null) {
            $object->setHomeTeamScore(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('Period', $data) && $data['Period'] !== null) {
            $object->setPeriod($data['Period']);
        }
        elseif (\array_key_exists('Period', $data) && $data['Period'] === null) {
            $object->setPeriod(null);
        }
        if (\array_key_exists('TimeRemainingMinutes', $data) && $data['TimeRemainingMinutes'] !== null) {
            $object->setTimeRemainingMinutes($data['TimeRemainingMinutes']);
        }
        elseif (\array_key_exists('TimeRemainingMinutes', $data) && $data['TimeRemainingMinutes'] === null) {
            $object->setTimeRemainingMinutes(null);
        }
        if (\array_key_exists('TimeRemainingSeconds', $data) && $data['TimeRemainingSeconds'] !== null) {
            $object->setTimeRemainingSeconds($data['TimeRemainingSeconds']);
        }
        elseif (\array_key_exists('TimeRemainingSeconds', $data) && $data['TimeRemainingSeconds'] === null) {
            $object->setTimeRemainingSeconds(null);
        }
        if (\array_key_exists('GlobalGameID', $data)) {
            $object->setGlobalGameID($data['GlobalGameID']);
        }
        if (\array_key_exists('GlobalAwayTeamID', $data) && $data['GlobalAwayTeamID'] !== null) {
            $object->setGlobalAwayTeamID($data['GlobalAwayTeamID']);
        }
        elseif (\array_key_exists('GlobalAwayTeamID', $data) && $data['GlobalAwayTeamID'] === null) {
            $object->setGlobalAwayTeamID(null);
        }
        if (\array_key_exists('GlobalHomeTeamID', $data) && $data['GlobalHomeTeamID'] !== null) {
            $object->setGlobalHomeTeamID($data['GlobalHomeTeamID']);
        }
        elseif (\array_key_exists('GlobalHomeTeamID', $data) && $data['GlobalHomeTeamID'] === null) {
            $object->setGlobalHomeTeamID(null);
        }
        if (\array_key_exists('Periods', $data)) {
            $values = array();
            foreach ($data['Periods'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\CWBB\\Model\\Period', 'json', $context);
            }
            $object->setPeriods($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGameID()) {
            $data['GameID'] = $object->getGameID();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus();
        }
        if (null !== $object->getDay()) {
            $data['Day'] = $object->getDay();
        }
        if (null !== $object->getDateTime()) {
            $data['DateTime'] = $object->getDateTime();
        }
        if (null !== $object->getAwayTeam()) {
            $data['AwayTeam'] = $object->getAwayTeam();
        }
        if (null !== $object->getHomeTeam()) {
            $data['HomeTeam'] = $object->getHomeTeam();
        }
        if (null !== $object->getAwayTeamID()) {
            $data['AwayTeamID'] = $object->getAwayTeamID();
        }
        if (null !== $object->getHomeTeamID()) {
            $data['HomeTeamID'] = $object->getHomeTeamID();
        }
        if (null !== $object->getAwayTeamScore()) {
            $data['AwayTeamScore'] = $object->getAwayTeamScore();
        }
        if (null !== $object->getHomeTeamScore()) {
            $data['HomeTeamScore'] = $object->getHomeTeamScore();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getPeriod()) {
            $data['Period'] = $object->getPeriod();
        }
        if (null !== $object->getTimeRemainingMinutes()) {
            $data['TimeRemainingMinutes'] = $object->getTimeRemainingMinutes();
        }
        if (null !== $object->getTimeRemainingSeconds()) {
            $data['TimeRemainingSeconds'] = $object->getTimeRemainingSeconds();
        }
        if (null !== $object->getGlobalGameID()) {
            $data['GlobalGameID'] = $object->getGlobalGameID();
        }
        if (null !== $object->getGlobalAwayTeamID()) {
            $data['GlobalAwayTeamID'] = $object->getGlobalAwayTeamID();
        }
        if (null !== $object->getGlobalHomeTeamID()) {
            $data['GlobalHomeTeamID'] = $object->getGlobalHomeTeamID();
        }
        if (null !== $object->getPeriods()) {
            $values = array();
            foreach ($object->getPeriods() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Periods'] = $values;
        }
        return $data;
    }
}