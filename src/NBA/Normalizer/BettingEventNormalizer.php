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
class BettingEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NBA\\Model\\BettingEvent';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NBA\\Model\\BettingEvent';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NBA\Model\BettingEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('BettingEventID', $data)) {
            $object->setBettingEventID($data['BettingEventID']);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Season', $data) && $data['Season'] !== null) {
            $object->setSeason($data['Season']);
        }
        elseif (\array_key_exists('Season', $data) && $data['Season'] === null) {
            $object->setSeason(null);
        }
        if (\array_key_exists('BettingEventTypeID', $data)) {
            $object->setBettingEventTypeID($data['BettingEventTypeID']);
        }
        if (\array_key_exists('BettingEventType', $data) && $data['BettingEventType'] !== null) {
            $object->setBettingEventType($data['BettingEventType']);
        }
        elseif (\array_key_exists('BettingEventType', $data) && $data['BettingEventType'] === null) {
            $object->setBettingEventType(null);
        }
        if (\array_key_exists('StartDate', $data) && $data['StartDate'] !== null) {
            $object->setStartDate($data['StartDate']);
        }
        elseif (\array_key_exists('StartDate', $data) && $data['StartDate'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
            $object->setCreated($data['Created']);
        }
        elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
            $object->setCreated(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('GameID', $data) && $data['GameID'] !== null) {
            $object->setGameID($data['GameID']);
        }
        elseif (\array_key_exists('GameID', $data) && $data['GameID'] === null) {
            $object->setGameID(null);
        }
        if (\array_key_exists('GlobalGameID', $data) && $data['GlobalGameID'] !== null) {
            $object->setGlobalGameID($data['GlobalGameID']);
        }
        elseif (\array_key_exists('GlobalGameID', $data) && $data['GlobalGameID'] === null) {
            $object->setGlobalGameID(null);
        }
        if (\array_key_exists('GameStatus', $data) && $data['GameStatus'] !== null) {
            $object->setGameStatus($data['GameStatus']);
        }
        elseif (\array_key_exists('GameStatus', $data) && $data['GameStatus'] === null) {
            $object->setGameStatus(null);
        }
        if (\array_key_exists('Quarter', $data) && $data['Quarter'] !== null) {
            $object->setQuarter($data['Quarter']);
        }
        elseif (\array_key_exists('Quarter', $data) && $data['Quarter'] === null) {
            $object->setQuarter(null);
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
        if (\array_key_exists('TotalScore', $data) && $data['TotalScore'] !== null) {
            $object->setTotalScore($data['TotalScore']);
        }
        elseif (\array_key_exists('TotalScore', $data) && $data['TotalScore'] === null) {
            $object->setTotalScore(null);
        }
        if (\array_key_exists('AwayRotationNumber', $data) && $data['AwayRotationNumber'] !== null) {
            $object->setAwayRotationNumber($data['AwayRotationNumber']);
        }
        elseif (\array_key_exists('AwayRotationNumber', $data) && $data['AwayRotationNumber'] === null) {
            $object->setAwayRotationNumber(null);
        }
        if (\array_key_exists('HomeRotationNumber', $data) && $data['HomeRotationNumber'] !== null) {
            $object->setHomeRotationNumber($data['HomeRotationNumber']);
        }
        elseif (\array_key_exists('HomeRotationNumber', $data) && $data['HomeRotationNumber'] === null) {
            $object->setHomeRotationNumber(null);
        }
        if (\array_key_exists('BettingMarkets', $data)) {
            $values = array();
            foreach ($data['BettingMarkets'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\NBA\\Model\\BettingMarket', 'json', $context);
            }
            $object->setBettingMarkets($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBettingEventID()) {
            $data['BettingEventID'] = $object->getBettingEventID();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getBettingEventTypeID()) {
            $data['BettingEventTypeID'] = $object->getBettingEventTypeID();
        }
        if (null !== $object->getBettingEventType()) {
            $data['BettingEventType'] = $object->getBettingEventType();
        }
        if (null !== $object->getStartDate()) {
            $data['StartDate'] = $object->getStartDate();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getGameID()) {
            $data['GameID'] = $object->getGameID();
        }
        if (null !== $object->getGlobalGameID()) {
            $data['GlobalGameID'] = $object->getGlobalGameID();
        }
        if (null !== $object->getGameStatus()) {
            $data['GameStatus'] = $object->getGameStatus();
        }
        if (null !== $object->getQuarter()) {
            $data['Quarter'] = $object->getQuarter();
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
        if (null !== $object->getGlobalAwayTeamID()) {
            $data['GlobalAwayTeamID'] = $object->getGlobalAwayTeamID();
        }
        if (null !== $object->getGlobalHomeTeamID()) {
            $data['GlobalHomeTeamID'] = $object->getGlobalHomeTeamID();
        }
        if (null !== $object->getAwayTeamScore()) {
            $data['AwayTeamScore'] = $object->getAwayTeamScore();
        }
        if (null !== $object->getHomeTeamScore()) {
            $data['HomeTeamScore'] = $object->getHomeTeamScore();
        }
        if (null !== $object->getTotalScore()) {
            $data['TotalScore'] = $object->getTotalScore();
        }
        if (null !== $object->getAwayRotationNumber()) {
            $data['AwayRotationNumber'] = $object->getAwayRotationNumber();
        }
        if (null !== $object->getHomeRotationNumber()) {
            $data['HomeRotationNumber'] = $object->getHomeRotationNumber();
        }
        if (null !== $object->getBettingMarkets()) {
            $values = array();
            foreach ($object->getBettingMarkets() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['BettingMarkets'] = $values;
        }
        return $data;
    }
}