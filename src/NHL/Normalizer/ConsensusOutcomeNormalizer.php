<?php

namespace Sportsdata\API\NHL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\NHL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ConsensusOutcomeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NHL\\Model\\ConsensusOutcome';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NHL\\Model\\ConsensusOutcome';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NHL\Model\ConsensusOutcome();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('NumberOfSportsbooks', $data)) {
            $object->setNumberOfSportsbooks($data['NumberOfSportsbooks']);
        }
        if (\array_key_exists('BettingOutcomeID', $data)) {
            $object->setBettingOutcomeID($data['BettingOutcomeID']);
        }
        if (\array_key_exists('BettingMarketID', $data)) {
            $object->setBettingMarketID($data['BettingMarketID']);
        }
        if (\array_key_exists('SportsBook', $data)) {
            $object->setSportsBook($this->denormalizer->denormalize($data['SportsBook'], 'Sportsdata\\API\\NHL\\Model\\Sportsbook', 'json', $context));
        }
        if (\array_key_exists('BettingOutcomeTypeID', $data)) {
            $object->setBettingOutcomeTypeID($data['BettingOutcomeTypeID']);
        }
        if (\array_key_exists('BettingOutcomeType', $data)) {
            $object->setBettingOutcomeType($data['BettingOutcomeType']);
        }
        if (\array_key_exists('PayoutAmerican', $data)) {
            $object->setPayoutAmerican($data['PayoutAmerican']);
        }
        if (\array_key_exists('PayoutDecimal', $data)) {
            $object->setPayoutDecimal($data['PayoutDecimal']);
        }
        if (\array_key_exists('Value', $data)) {
            $object->setValue($data['Value']);
        }
        if (\array_key_exists('Participant', $data)) {
            $object->setParticipant($data['Participant']);
        }
        if (\array_key_exists('IsAvailable', $data)) {
            $object->setIsAvailable($data['IsAvailable']);
        }
        if (\array_key_exists('IsAlternate', $data)) {
            $object->setIsAlternate($data['IsAlternate']);
        }
        if (\array_key_exists('Created', $data)) {
            $object->setCreated($data['Created']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('Unlisted', $data)) {
            $object->setUnlisted($data['Unlisted']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('GlobalTeamID', $data)) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        if (\array_key_exists('SportsbookUrl', $data)) {
            $object->setSportsbookUrl($data['SportsbookUrl']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNumberOfSportsbooks()) {
            $data['NumberOfSportsbooks'] = $object->getNumberOfSportsbooks();
        }
        if (null !== $object->getBettingOutcomeID()) {
            $data['BettingOutcomeID'] = $object->getBettingOutcomeID();
        }
        if (null !== $object->getBettingMarketID()) {
            $data['BettingMarketID'] = $object->getBettingMarketID();
        }
        if (null !== $object->getSportsBook()) {
            $data['SportsBook'] = $this->normalizer->normalize($object->getSportsBook(), 'json', $context);
        }
        if (null !== $object->getBettingOutcomeTypeID()) {
            $data['BettingOutcomeTypeID'] = $object->getBettingOutcomeTypeID();
        }
        if (null !== $object->getBettingOutcomeType()) {
            $data['BettingOutcomeType'] = $object->getBettingOutcomeType();
        }
        if (null !== $object->getPayoutAmerican()) {
            $data['PayoutAmerican'] = $object->getPayoutAmerican();
        }
        if (null !== $object->getPayoutDecimal()) {
            $data['PayoutDecimal'] = $object->getPayoutDecimal();
        }
        if (null !== $object->getValue()) {
            $data['Value'] = $object->getValue();
        }
        if (null !== $object->getParticipant()) {
            $data['Participant'] = $object->getParticipant();
        }
        if (null !== $object->getIsAvailable()) {
            $data['IsAvailable'] = $object->getIsAvailable();
        }
        if (null !== $object->getIsAlternate()) {
            $data['IsAlternate'] = $object->getIsAlternate();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getUnlisted()) {
            $data['Unlisted'] = $object->getUnlisted();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        if (null !== $object->getSportsbookUrl()) {
            $data['SportsbookUrl'] = $object->getSportsbookUrl();
        }
        return $data;
    }
}