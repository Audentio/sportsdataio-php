<?php

namespace Sportsdata\API\MLB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\MLB\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\MLB\\Model\\BettingMarket';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\MLB\\Model\\BettingMarket';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\MLB\Model\BettingMarket();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('BettingMarketID', $data)) {
            $object->setBettingMarketID($data['BettingMarketID']);
        }
        if (\array_key_exists('BettingEventID', $data)) {
            $object->setBettingEventID($data['BettingEventID']);
        }
        if (\array_key_exists('BettingMarketTypeID', $data)) {
            $object->setBettingMarketTypeID($data['BettingMarketTypeID']);
        }
        if (\array_key_exists('BettingMarketType', $data)) {
            $object->setBettingMarketType($data['BettingMarketType']);
        }
        if (\array_key_exists('BettingBetTypeID', $data)) {
            $object->setBettingBetTypeID($data['BettingBetTypeID']);
        }
        if (\array_key_exists('BettingBetType', $data)) {
            $object->setBettingBetType($data['BettingBetType']);
        }
        if (\array_key_exists('BettingPeriodTypeID', $data)) {
            $object->setBettingPeriodTypeID($data['BettingPeriodTypeID']);
        }
        if (\array_key_exists('BettingPeriodType', $data)) {
            $object->setBettingPeriodType($data['BettingPeriodType']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('TeamKey', $data)) {
            $object->setTeamKey($data['TeamKey']);
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('PlayerName', $data)) {
            $object->setPlayerName($data['PlayerName']);
        }
        if (\array_key_exists('Created', $data)) {
            $object->setCreated($data['Created']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('AvailableSportsbooks', $data)) {
            $values = array();
            foreach ($data['AvailableSportsbooks'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\MLB\\Model\\Sportsbook', 'json', $context);
            }
            $object->setAvailableSportsbooks($values);
        }
        if (\array_key_exists('AnyBetsAvailable', $data)) {
            $object->setAnyBetsAvailable($data['AnyBetsAvailable']);
        }
        if (\array_key_exists('BettingOutcomes', $data)) {
            $values_1 = array();
            foreach ($data['BettingOutcomes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\MLB\\Model\\BettingOutcome', 'json', $context);
            }
            $object->setBettingOutcomes($values_1);
        }
        if (\array_key_exists('ConsensusOutcomes', $data)) {
            $values_2 = array();
            foreach ($data['ConsensusOutcomes'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Sportsdata\\API\\MLB\\Model\\ConsensusOutcome', 'json', $context);
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