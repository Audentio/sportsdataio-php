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
class BettingOutcomeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NHL\\Model\\BettingOutcome';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NHL\\Model\\BettingOutcome';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NHL\Model\BettingOutcome();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('BettingOutcomeID', $data) && $data['BettingOutcomeID'] !== null) {
            $object->setBettingOutcomeID($data['BettingOutcomeID']);
        }
        elseif (\array_key_exists('BettingOutcomeID', $data) && $data['BettingOutcomeID'] === null) {
            $object->setBettingOutcomeID(null);
        }
        if (\array_key_exists('BettingMarketID', $data) && $data['BettingMarketID'] !== null) {
            $object->setBettingMarketID($data['BettingMarketID']);
        }
        elseif (\array_key_exists('BettingMarketID', $data) && $data['BettingMarketID'] === null) {
            $object->setBettingMarketID(null);
        }
        if (\array_key_exists('SportsBook', $data)) {
            $object->setSportsBook($this->denormalizer->denormalize($data['SportsBook'], 'Sportsdata\\API\\NHL\\Model\\Sportsbook', 'json', $context));
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
        if (\array_key_exists('PayoutAmerican', $data) && $data['PayoutAmerican'] !== null) {
            $object->setPayoutAmerican($data['PayoutAmerican']);
        }
        elseif (\array_key_exists('PayoutAmerican', $data) && $data['PayoutAmerican'] === null) {
            $object->setPayoutAmerican(null);
        }
        if (\array_key_exists('PayoutDecimal', $data) && $data['PayoutDecimal'] !== null) {
            $object->setPayoutDecimal($data['PayoutDecimal']);
        }
        elseif (\array_key_exists('PayoutDecimal', $data) && $data['PayoutDecimal'] === null) {
            $object->setPayoutDecimal(null);
        }
        if (\array_key_exists('Value', $data) && $data['Value'] !== null) {
            $object->setValue($data['Value']);
        }
        elseif (\array_key_exists('Value', $data) && $data['Value'] === null) {
            $object->setValue(null);
        }
        if (\array_key_exists('Participant', $data) && $data['Participant'] !== null) {
            $object->setParticipant($data['Participant']);
        }
        elseif (\array_key_exists('Participant', $data) && $data['Participant'] === null) {
            $object->setParticipant(null);
        }
        if (\array_key_exists('IsAvailable', $data) && $data['IsAvailable'] !== null) {
            $object->setIsAvailable($data['IsAvailable']);
        }
        elseif (\array_key_exists('IsAvailable', $data) && $data['IsAvailable'] === null) {
            $object->setIsAvailable(null);
        }
        if (\array_key_exists('IsAlternate', $data) && $data['IsAlternate'] !== null) {
            $object->setIsAlternate($data['IsAlternate']);
        }
        elseif (\array_key_exists('IsAlternate', $data) && $data['IsAlternate'] === null) {
            $object->setIsAlternate(null);
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
        if (\array_key_exists('Unlisted', $data) && $data['Unlisted'] !== null) {
            $object->setUnlisted($data['Unlisted']);
        }
        elseif (\array_key_exists('Unlisted', $data) && $data['Unlisted'] === null) {
            $object->setUnlisted(null);
        }
        if (\array_key_exists('TeamID', $data) && $data['TeamID'] !== null) {
            $object->setTeamID($data['TeamID']);
        }
        elseif (\array_key_exists('TeamID', $data) && $data['TeamID'] === null) {
            $object->setTeamID(null);
        }
        if (\array_key_exists('PlayerID', $data) && $data['PlayerID'] !== null) {
            $object->setPlayerID($data['PlayerID']);
        }
        elseif (\array_key_exists('PlayerID', $data) && $data['PlayerID'] === null) {
            $object->setPlayerID(null);
        }
        if (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] !== null) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        elseif (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] === null) {
            $object->setGlobalTeamID(null);
        }
        if (\array_key_exists('SportsbookUrl', $data) && $data['SportsbookUrl'] !== null) {
            $object->setSportsbookUrl($data['SportsbookUrl']);
        }
        elseif (\array_key_exists('SportsbookUrl', $data) && $data['SportsbookUrl'] === null) {
            $object->setSportsbookUrl(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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