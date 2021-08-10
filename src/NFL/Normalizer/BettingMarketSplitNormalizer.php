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
class BettingMarketSplitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\BettingMarketSplit';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\BettingMarketSplit';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\BettingMarketSplit();
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
        if (\array_key_exists('BettingMarketType', $data) && $data['BettingMarketType'] !== null) {
            $object->setBettingMarketType($data['BettingMarketType']);
        }
        elseif (\array_key_exists('BettingMarketType', $data) && $data['BettingMarketType'] === null) {
            $object->setBettingMarketType(null);
        }
        if (\array_key_exists('BettingBetTypeID', $data)) {
            $object->setBettingBetTypeID($data['BettingBetTypeID']);
        }
        if (\array_key_exists('BettingBetType', $data) && $data['BettingBetType'] !== null) {
            $object->setBettingBetType($data['BettingBetType']);
        }
        elseif (\array_key_exists('BettingBetType', $data) && $data['BettingBetType'] === null) {
            $object->setBettingBetType(null);
        }
        if (\array_key_exists('BettingPeriodTypeID', $data)) {
            $object->setBettingPeriodTypeID($data['BettingPeriodTypeID']);
        }
        if (\array_key_exists('BettingPeriodType', $data) && $data['BettingPeriodType'] !== null) {
            $object->setBettingPeriodType($data['BettingPeriodType']);
        }
        elseif (\array_key_exists('BettingPeriodType', $data) && $data['BettingPeriodType'] === null) {
            $object->setBettingPeriodType(null);
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
        if (\array_key_exists('BettingSplits', $data)) {
            $values = array();
            foreach ($data['BettingSplits'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\NFL\\Model\\BettingSplit', 'json', $context);
            }
            $object->setBettingSplits($values);
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
        if (null !== $object->getBettingSplits()) {
            $values = array();
            foreach ($object->getBettingSplits() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['BettingSplits'] = $values;
        }
        return $data;
    }
}