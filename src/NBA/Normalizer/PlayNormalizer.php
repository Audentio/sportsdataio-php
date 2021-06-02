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
class PlayNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NBA\\Model\\Play';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NBA\\Model\\Play';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NBA\Model\Play();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayID', $data)) {
            $object->setPlayID($data['PlayID']);
        }
        if (\array_key_exists('QuarterID', $data)) {
            $object->setQuarterID($data['QuarterID']);
        }
        if (\array_key_exists('QuarterName', $data)) {
            $object->setQuarterName($data['QuarterName']);
        }
        if (\array_key_exists('Sequence', $data)) {
            $object->setSequence($data['Sequence']);
        }
        if (\array_key_exists('TimeRemainingMinutes', $data)) {
            $object->setTimeRemainingMinutes($data['TimeRemainingMinutes']);
        }
        if (\array_key_exists('TimeRemainingSeconds', $data)) {
            $object->setTimeRemainingSeconds($data['TimeRemainingSeconds']);
        }
        if (\array_key_exists('AwayTeamScore', $data)) {
            $object->setAwayTeamScore($data['AwayTeamScore']);
        }
        if (\array_key_exists('HomeTeamScore', $data)) {
            $object->setHomeTeamScore($data['HomeTeamScore']);
        }
        if (\array_key_exists('PotentialPoints', $data)) {
            $object->setPotentialPoints($data['PotentialPoints']);
        }
        if (\array_key_exists('Points', $data)) {
            $object->setPoints($data['Points']);
        }
        if (\array_key_exists('ShotMade', $data)) {
            $object->setShotMade($data['ShotMade']);
        }
        if (\array_key_exists('Category', $data)) {
            $object->setCategory($data['Category']);
        }
        if (\array_key_exists('Type', $data)) {
            $object->setType($data['Type']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('Team', $data)) {
            $object->setTeam($data['Team']);
        }
        if (\array_key_exists('OpponentID', $data)) {
            $object->setOpponentID($data['OpponentID']);
        }
        if (\array_key_exists('Opponent', $data)) {
            $object->setOpponent($data['Opponent']);
        }
        if (\array_key_exists('ReceivingTeamID', $data)) {
            $object->setReceivingTeamID($data['ReceivingTeamID']);
        }
        if (\array_key_exists('ReceivingTeam', $data)) {
            $object->setReceivingTeam($data['ReceivingTeam']);
        }
        if (\array_key_exists('Description', $data)) {
            $object->setDescription($data['Description']);
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('AssistedByPlayerID', $data)) {
            $object->setAssistedByPlayerID($data['AssistedByPlayerID']);
        }
        if (\array_key_exists('BlockedByPlayerID', $data)) {
            $object->setBlockedByPlayerID($data['BlockedByPlayerID']);
        }
        if (\array_key_exists('FastBreak', $data)) {
            $object->setFastBreak($data['FastBreak']);
        }
        if (\array_key_exists('SideOfBasket', $data)) {
            $object->setSideOfBasket($data['SideOfBasket']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('Created', $data)) {
            $object->setCreated($data['Created']);
        }
        if (\array_key_exists('SubstituteInPlayerID', $data)) {
            $object->setSubstituteInPlayerID($data['SubstituteInPlayerID']);
        }
        if (\array_key_exists('SubstituteOutPlayerID', $data)) {
            $object->setSubstituteOutPlayerID($data['SubstituteOutPlayerID']);
        }
        if (\array_key_exists('AwayPlayerID', $data)) {
            $object->setAwayPlayerID($data['AwayPlayerID']);
        }
        if (\array_key_exists('HomePlayerID', $data)) {
            $object->setHomePlayerID($data['HomePlayerID']);
        }
        if (\array_key_exists('ReceivingPlayerID', $data)) {
            $object->setReceivingPlayerID($data['ReceivingPlayerID']);
        }
        if (\array_key_exists('BaselineOffsetPercentage', $data)) {
            $object->setBaselineOffsetPercentage($data['BaselineOffsetPercentage']);
        }
        if (\array_key_exists('SidelineOffsetPercentage', $data)) {
            $object->setSidelineOffsetPercentage($data['SidelineOffsetPercentage']);
        }
        if (\array_key_exists('Coordinates', $data)) {
            $object->setCoordinates($data['Coordinates']);
        }
        if (\array_key_exists('StolenByPlayerID', $data)) {
            $object->setStolenByPlayerID($data['StolenByPlayerID']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayID()) {
            $data['PlayID'] = $object->getPlayID();
        }
        if (null !== $object->getQuarterID()) {
            $data['QuarterID'] = $object->getQuarterID();
        }
        if (null !== $object->getQuarterName()) {
            $data['QuarterName'] = $object->getQuarterName();
        }
        if (null !== $object->getSequence()) {
            $data['Sequence'] = $object->getSequence();
        }
        if (null !== $object->getTimeRemainingMinutes()) {
            $data['TimeRemainingMinutes'] = $object->getTimeRemainingMinutes();
        }
        if (null !== $object->getTimeRemainingSeconds()) {
            $data['TimeRemainingSeconds'] = $object->getTimeRemainingSeconds();
        }
        if (null !== $object->getAwayTeamScore()) {
            $data['AwayTeamScore'] = $object->getAwayTeamScore();
        }
        if (null !== $object->getHomeTeamScore()) {
            $data['HomeTeamScore'] = $object->getHomeTeamScore();
        }
        if (null !== $object->getPotentialPoints()) {
            $data['PotentialPoints'] = $object->getPotentialPoints();
        }
        if (null !== $object->getPoints()) {
            $data['Points'] = $object->getPoints();
        }
        if (null !== $object->getShotMade()) {
            $data['ShotMade'] = $object->getShotMade();
        }
        if (null !== $object->getCategory()) {
            $data['Category'] = $object->getCategory();
        }
        if (null !== $object->getType()) {
            $data['Type'] = $object->getType();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getOpponentID()) {
            $data['OpponentID'] = $object->getOpponentID();
        }
        if (null !== $object->getOpponent()) {
            $data['Opponent'] = $object->getOpponent();
        }
        if (null !== $object->getReceivingTeamID()) {
            $data['ReceivingTeamID'] = $object->getReceivingTeamID();
        }
        if (null !== $object->getReceivingTeam()) {
            $data['ReceivingTeam'] = $object->getReceivingTeam();
        }
        if (null !== $object->getDescription()) {
            $data['Description'] = $object->getDescription();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getAssistedByPlayerID()) {
            $data['AssistedByPlayerID'] = $object->getAssistedByPlayerID();
        }
        if (null !== $object->getBlockedByPlayerID()) {
            $data['BlockedByPlayerID'] = $object->getBlockedByPlayerID();
        }
        if (null !== $object->getFastBreak()) {
            $data['FastBreak'] = $object->getFastBreak();
        }
        if (null !== $object->getSideOfBasket()) {
            $data['SideOfBasket'] = $object->getSideOfBasket();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if (null !== $object->getSubstituteInPlayerID()) {
            $data['SubstituteInPlayerID'] = $object->getSubstituteInPlayerID();
        }
        if (null !== $object->getSubstituteOutPlayerID()) {
            $data['SubstituteOutPlayerID'] = $object->getSubstituteOutPlayerID();
        }
        if (null !== $object->getAwayPlayerID()) {
            $data['AwayPlayerID'] = $object->getAwayPlayerID();
        }
        if (null !== $object->getHomePlayerID()) {
            $data['HomePlayerID'] = $object->getHomePlayerID();
        }
        if (null !== $object->getReceivingPlayerID()) {
            $data['ReceivingPlayerID'] = $object->getReceivingPlayerID();
        }
        if (null !== $object->getBaselineOffsetPercentage()) {
            $data['BaselineOffsetPercentage'] = $object->getBaselineOffsetPercentage();
        }
        if (null !== $object->getSidelineOffsetPercentage()) {
            $data['SidelineOffsetPercentage'] = $object->getSidelineOffsetPercentage();
        }
        if (null !== $object->getCoordinates()) {
            $data['Coordinates'] = $object->getCoordinates();
        }
        if (null !== $object->getStolenByPlayerID()) {
            $data['StolenByPlayerID'] = $object->getStolenByPlayerID();
        }
        return $data;
    }
}