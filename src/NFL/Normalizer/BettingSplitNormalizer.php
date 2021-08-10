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
class BettingSplitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\BettingSplit';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\BettingSplit';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\BettingSplit();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('BettingMarketSplitID', $data)) {
            $object->setBettingMarketSplitID($data['BettingMarketSplitID']);
        }
        if (\array_key_exists('BettingMarketID', $data)) {
            $object->setBettingMarketID($data['BettingMarketID']);
        }
        if (\array_key_exists('BettingOutcomeTypeID', $data) && $data['BettingOutcomeTypeID'] !== null) {
            $object->setBettingOutcomeTypeID($data['BettingOutcomeTypeID']);
        }
        elseif (\array_key_exists('BettingOutcomeTypeID', $data) && $data['BettingOutcomeTypeID'] === null) {
            $object->setBettingOutcomeTypeID(null);
        }
        if (\array_key_exists('BettingOutcomeType', $data) && $data['BettingOutcomeType'] !== null) {
            $object->setBettingOutcomeType($data['BettingOutcomeType']);
        }
        elseif (\array_key_exists('BettingOutcomeType', $data) && $data['BettingOutcomeType'] === null) {
            $object->setBettingOutcomeType(null);
        }
        if (\array_key_exists('BetPercentage', $data) && $data['BetPercentage'] !== null) {
            $object->setBetPercentage($data['BetPercentage']);
        }
        elseif (\array_key_exists('BetPercentage', $data) && $data['BetPercentage'] === null) {
            $object->setBetPercentage(null);
        }
        if (\array_key_exists('MoneyPercentage', $data) && $data['MoneyPercentage'] !== null) {
            $object->setMoneyPercentage($data['MoneyPercentage']);
        }
        elseif (\array_key_exists('MoneyPercentage', $data) && $data['MoneyPercentage'] === null) {
            $object->setMoneyPercentage(null);
        }
        if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
            $object->setCreated($data['Created']);
        }
        elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
            $object->setCreated(null);
        }
        if (\array_key_exists('LastSeen', $data) && $data['LastSeen'] !== null) {
            $object->setLastSeen($data['LastSeen']);
        }
        elseif (\array_key_exists('LastSeen', $data) && $data['LastSeen'] === null) {
            $object->setLastSeen(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBettingMarketSplitID()) {
            $data['BettingMarketSplitID'] = $object->getBettingMarketSplitID();
        }
        if (null !== $object->getBettingMarketID()) {
            $data['BettingMarketID'] = $object->getBettingMarketID();
        }
        if (null !== $object->getBettingOutcomeTypeID()) {
            $data['BettingOutcomeTypeID'] = $object->getBettingOutcomeTypeID();
        }
        if (null !== $object->getBettingOutcomeType()) {
            $data['BettingOutcomeType'] = $object->getBettingOutcomeType();
        }
        if (null !== $object->getBetPercentage()) {
            $data['BetPercentage'] = $object->getBetPercentage();
        }
        if (null !== $object->getMoneyPercentage()) {
            $data['MoneyPercentage'] = $object->getMoneyPercentage();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if (null !== $object->getLastSeen()) {
            $data['LastSeen'] = $object->getLastSeen();
        }
        return $data;
    }
}