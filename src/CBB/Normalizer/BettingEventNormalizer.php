<?php

namespace Sportsdata\API\CBB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CBB\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\CBB\\Model\\BettingEvent';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CBB\\Model\\BettingEvent';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CBB\Model\BettingEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('BettingEventID', $data)) {
            $object->setBettingEventID($data['BettingEventID']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('BettingEventTypeID', $data)) {
            $object->setBettingEventTypeID($data['BettingEventTypeID']);
        }
        if (\array_key_exists('BettingEventType', $data)) {
            $object->setBettingEventType($data['BettingEventType']);
        }
        if (\array_key_exists('StartDate', $data)) {
            $object->setStartDate($data['StartDate']);
        }
        if (\array_key_exists('Created', $data)) {
            $object->setCreated($data['Created']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('GameID', $data)) {
            $object->setGameID($data['GameID']);
        }
        if (\array_key_exists('GlobalGameID', $data)) {
            $object->setGlobalGameID($data['GlobalGameID']);
        }
        if (\array_key_exists('GameStatus', $data)) {
            $object->setGameStatus($data['GameStatus']);
        }
        if (\array_key_exists('AwayTeam', $data)) {
            $object->setAwayTeam($data['AwayTeam']);
        }
        if (\array_key_exists('HomeTeam', $data)) {
            $object->setHomeTeam($data['HomeTeam']);
        }
        if (\array_key_exists('AwayTeamID', $data)) {
            $object->setAwayTeamID($data['AwayTeamID']);
        }
        if (\array_key_exists('HomeTeamID', $data)) {
            $object->setHomeTeamID($data['HomeTeamID']);
        }
        if (\array_key_exists('GlobalAwayTeamID', $data)) {
            $object->setGlobalAwayTeamID($data['GlobalAwayTeamID']);
        }
        if (\array_key_exists('GlobalHomeTeamID', $data)) {
            $object->setGlobalHomeTeamID($data['GlobalHomeTeamID']);
        }
        if (\array_key_exists('AwayTeamScore', $data)) {
            $object->setAwayTeamScore($data['AwayTeamScore']);
        }
        if (\array_key_exists('HomeTeamScore', $data)) {
            $object->setHomeTeamScore($data['HomeTeamScore']);
        }
        if (\array_key_exists('TotalScore', $data)) {
            $object->setTotalScore($data['TotalScore']);
        }
        if (\array_key_exists('AwayRotationNumber', $data)) {
            $object->setAwayRotationNumber($data['AwayRotationNumber']);
        }
        if (\array_key_exists('HomeRotationNumber', $data)) {
            $object->setHomeRotationNumber($data['HomeRotationNumber']);
        }
        if (\array_key_exists('BettingMarkets', $data)) {
            $values = array();
            foreach ($data['BettingMarkets'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\CBB\\Model\\BettingMarket', 'json', $context);
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