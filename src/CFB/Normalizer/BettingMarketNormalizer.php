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
class BettingMarketNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\CFB\\Model\\BettingMarket';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CFB\\Model\\BettingMarket';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CFB\Model\BettingMarket();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('BettingMarketID', $data)) {
            $object->setBettingMarketID($data['BettingMarketID']);
        }
        if (\array_key_exists('BettingEventID', $data)) {
            $object->setBettingEventID($data['BettingEventID']);
        }
        if (\array_key_exists('BettingMarketTypeID', $data) && $data['BettingMarketTypeID'] !== null) {
            $object->setBettingMarketTypeID($data['BettingMarketTypeID']);
        }
        elseif (\array_key_exists('BettingMarketTypeID', $data) && $data['BettingMarketTypeID'] === null) {
            $object->setBettingMarketTypeID(null);
        }
        if (\array_key_exists('BettingMarketType', $data) && $data['BettingMarketType'] !== null) {
            $object->setBettingMarketType($data['BettingMarketType']);
        }
        elseif (\array_key_exists('BettingMarketType', $data) && $data['BettingMarketType'] === null) {
            $object->setBettingMarketType(null);
        }
        if (\array_key_exists('BettingBetTypeID', $data) && $data['BettingBetTypeID'] !== null) {
            $object->setBettingBetTypeID($data['BettingBetTypeID']);
        }
        elseif (\array_key_exists('BettingBetTypeID', $data) && $data['BettingBetTypeID'] === null) {
            $object->setBettingBetTypeID(null);
        }
        if (\array_key_exists('BettingBetType', $data) && $data['BettingBetType'] !== null) {
            $object->setBettingBetType($data['BettingBetType']);
        }
        elseif (\array_key_exists('BettingBetType', $data) && $data['BettingBetType'] === null) {
            $object->setBettingBetType(null);
        }
        if (\array_key_exists('BettingPeriodTypeID', $data) && $data['BettingPeriodTypeID'] !== null) {
            $object->setBettingPeriodTypeID($data['BettingPeriodTypeID']);
        }
        elseif (\array_key_exists('BettingPeriodTypeID', $data) && $data['BettingPeriodTypeID'] === null) {
            $object->setBettingPeriodTypeID(null);
        }
        if (\array_key_exists('BettingPeriodType', $data) && $data['BettingPeriodType'] !== null) {
            $object->setBettingPeriodType($data['BettingPeriodType']);
        }
        elseif (\array_key_exists('BettingPeriodType', $data) && $data['BettingPeriodType'] === null) {
            $object->setBettingPeriodType(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('TeamID', $data) && $data['TeamID'] !== null) {
            $object->setTeamID($data['TeamID']);
        }
        elseif (\array_key_exists('TeamID', $data) && $data['TeamID'] === null) {
            $object->setTeamID(null);
        }
        if (\array_key_exists('TeamKey', $data) && $data['TeamKey'] !== null) {
            $object->setTeamKey($data['TeamKey']);
        }
        elseif (\array_key_exists('TeamKey', $data) && $data['TeamKey'] === null) {
            $object->setTeamKey(null);
        }
        if (\array_key_exists('PlayerID', $data) && $data['PlayerID'] !== null) {
            $object->setPlayerID($data['PlayerID']);
        }
        elseif (\array_key_exists('PlayerID', $data) && $data['PlayerID'] === null) {
            $object->setPlayerID(null);
        }
        if (\array_key_exists('PlayerName', $data) && $data['PlayerName'] !== null) {
            $object->setPlayerName($data['PlayerName']);
        }
        elseif (\array_key_exists('PlayerName', $data) && $data['PlayerName'] === null) {
            $object->setPlayerName(null);
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
        if (\array_key_exists('AvailableSportsbooks', $data)) {
            $values = array();
            foreach ($data['AvailableSportsbooks'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\CFB\\Model\\Sportsbook', 'json', $context);
            }
            $object->setAvailableSportsbooks($values);
        }
        if (\array_key_exists('AnyBetsAvailable', $data) && $data['AnyBetsAvailable'] !== null) {
            $object->setAnyBetsAvailable($data['AnyBetsAvailable']);
        }
        elseif (\array_key_exists('AnyBetsAvailable', $data) && $data['AnyBetsAvailable'] === null) {
            $object->setAnyBetsAvailable(null);
        }
        if (\array_key_exists('BettingOutcomes', $data)) {
            $values_1 = array();
            foreach ($data['BettingOutcomes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\CFB\\Model\\BettingOutcome', 'json', $context);
            }
            $object->setBettingOutcomes($values_1);
        }
        if (\array_key_exists('ConsensusOutcomes', $data)) {
            $values_2 = array();
            foreach ($data['ConsensusOutcomes'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Sportsdata\\API\\CFB\\Model\\ConsensusOutcome', 'json', $context);
            }
            $object->setConsensusOutcomes($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBettingMarketID()) {
            $data['BettingMarketID'] = $object->getBettingMarketID();
        }
        if (null !== $object->getBettingEventID()) {
            $data['BettingEventID'] = $object->getBettingEventID();
        }
        if (null !== $object->getBettingMarketTypeID()) {
            $data['BettingMarketTypeID'] = $object->getBettingMarketTypeID();
        }
        if (null !== $object->getBettingMarketType()) {
            $data['BettingMarketType'] = $object->getBettingMarketType();
        }
        if (null !== $object->getBettingBetTypeID()) {
            $data['BettingBetTypeID'] = $object->getBettingBetTypeID();
        }
        if (null !== $object->getBettingBetType()) {
            $data['BettingBetType'] = $object->getBettingBetType();
        }
        if (null !== $object->getBettingPeriodTypeID()) {
            $data['BettingPeriodTypeID'] = $object->getBettingPeriodTypeID();
        }
        if (null !== $object->getBettingPeriodType()) {
            $data['BettingPeriodType'] = $object->getBettingPeriodType();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getTeamKey()) {
            $data['TeamKey'] = $object->getTeamKey();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getPlayerName()) {
            $data['PlayerName'] = $object->getPlayerName();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getAvailableSportsbooks()) {
            $values = array();
            foreach ($object->getAvailableSportsbooks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['AvailableSportsbooks'] = $values;
        }
        if (null !== $object->getAnyBetsAvailable()) {
            $data['AnyBetsAvailable'] = $object->getAnyBetsAvailable();
        }
        if (null !== $object->getBettingOutcomes()) {
            $values_1 = array();
            foreach ($object->getBettingOutcomes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['BettingOutcomes'] = $values_1;
        }
        if (null !== $object->getConsensusOutcomes()) {
            $values_2 = array();
            foreach ($object->getConsensusOutcomes() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['ConsensusOutcomes'] = $values_2;
        }
        return $data;
    }
}