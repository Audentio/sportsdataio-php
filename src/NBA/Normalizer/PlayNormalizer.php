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
        if (\array_key_exists('QuarterName', $data) && $data['QuarterName'] !== null) {
            $object->setQuarterName($data['QuarterName']);
        }
        elseif (\array_key_exists('QuarterName', $data) && $data['QuarterName'] === null) {
            $object->setQuarterName(null);
        }
        if (\array_key_exists('Sequence', $data)) {
            $object->setSequence($data['Sequence']);
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
        if (\array_key_exists('PotentialPoints', $data) && $data['PotentialPoints'] !== null) {
            $object->setPotentialPoints($data['PotentialPoints']);
        }
        elseif (\array_key_exists('PotentialPoints', $data) && $data['PotentialPoints'] === null) {
            $object->setPotentialPoints(null);
        }
        if (\array_key_exists('Points', $data) && $data['Points'] !== null) {
            $object->setPoints($data['Points']);
        }
        elseif (\array_key_exists('Points', $data) && $data['Points'] === null) {
            $object->setPoints(null);
        }
        if (\array_key_exists('ShotMade', $data) && $data['ShotMade'] !== null) {
            $object->setShotMade($data['ShotMade']);
        }
        elseif (\array_key_exists('ShotMade', $data) && $data['ShotMade'] === null) {
            $object->setShotMade(null);
        }
        if (\array_key_exists('Category', $data) && $data['Category'] !== null) {
            $object->setCategory($data['Category']);
        }
        elseif (\array_key_exists('Category', $data) && $data['Category'] === null) {
            $object->setCategory(null);
        }
        if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
            $object->setType($data['Type']);
        }
        elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('TeamID', $data) && $data['TeamID'] !== null) {
            $object->setTeamID($data['TeamID']);
        }
        elseif (\array_key_exists('TeamID', $data) && $data['TeamID'] === null) {
            $object->setTeamID(null);
        }
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('OpponentID', $data) && $data['OpponentID'] !== null) {
            $object->setOpponentID($data['OpponentID']);
        }
        elseif (\array_key_exists('OpponentID', $data) && $data['OpponentID'] === null) {
            $object->setOpponentID(null);
        }
        if (\array_key_exists('Opponent', $data) && $data['Opponent'] !== null) {
            $object->setOpponent($data['Opponent']);
        }
        elseif (\array_key_exists('Opponent', $data) && $data['Opponent'] === null) {
            $object->setOpponent(null);
        }
        if (\array_key_exists('ReceivingTeamID', $data) && $data['ReceivingTeamID'] !== null) {
            $object->setReceivingTeamID($data['ReceivingTeamID']);
        }
        elseif (\array_key_exists('ReceivingTeamID', $data) && $data['ReceivingTeamID'] === null) {
            $object->setReceivingTeamID(null);
        }
        if (\array_key_exists('ReceivingTeam', $data) && $data['ReceivingTeam'] !== null) {
            $object->setReceivingTeam($data['ReceivingTeam']);
        }
        elseif (\array_key_exists('ReceivingTeam', $data) && $data['ReceivingTeam'] === null) {
            $object->setReceivingTeam(null);
        }
        if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
            $object->setDescription($data['Description']);
        }
        elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('PlayerID', $data) && $data['PlayerID'] !== null) {
            $object->setPlayerID($data['PlayerID']);
        }
        elseif (\array_key_exists('PlayerID', $data) && $data['PlayerID'] === null) {
            $object->setPlayerID(null);
        }
        if (\array_key_exists('AssistedByPlayerID', $data) && $data['AssistedByPlayerID'] !== null) {
            $object->setAssistedByPlayerID($data['AssistedByPlayerID']);
        }
        elseif (\array_key_exists('AssistedByPlayerID', $data) && $data['AssistedByPlayerID'] === null) {
            $object->setAssistedByPlayerID(null);
        }
        if (\array_key_exists('BlockedByPlayerID', $data) && $data['BlockedByPlayerID'] !== null) {
            $object->setBlockedByPlayerID($data['BlockedByPlayerID']);
        }
        elseif (\array_key_exists('BlockedByPlayerID', $data) && $data['BlockedByPlayerID'] === null) {
            $object->setBlockedByPlayerID(null);
        }
        if (\array_key_exists('FastBreak', $data) && $data['FastBreak'] !== null) {
            $object->setFastBreak($data['FastBreak']);
        }
        elseif (\array_key_exists('FastBreak', $data) && $data['FastBreak'] === null) {
            $object->setFastBreak(null);
        }
        if (\array_key_exists('SideOfBasket', $data) && $data['SideOfBasket'] !== null) {
            $object->setSideOfBasket($data['SideOfBasket']);
        }
        elseif (\array_key_exists('SideOfBasket', $data) && $data['SideOfBasket'] === null) {
            $object->setSideOfBasket(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
            $object->setCreated($data['Created']);
        }
        elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
            $object->setCreated(null);
        }
        if (\array_key_exists('SubstituteInPlayerID', $data) && $data['SubstituteInPlayerID'] !== null) {
            $object->setSubstituteInPlayerID($data['SubstituteInPlayerID']);
        }
        elseif (\array_key_exists('SubstituteInPlayerID', $data) && $data['SubstituteInPlayerID'] === null) {
            $object->setSubstituteInPlayerID(null);
        }
        if (\array_key_exists('SubstituteOutPlayerID', $data) && $data['SubstituteOutPlayerID'] !== null) {
            $object->setSubstituteOutPlayerID($data['SubstituteOutPlayerID']);
        }
        elseif (\array_key_exists('SubstituteOutPlayerID', $data) && $data['SubstituteOutPlayerID'] === null) {
            $object->setSubstituteOutPlayerID(null);
        }
        if (\array_key_exists('AwayPlayerID', $data) && $data['AwayPlayerID'] !== null) {
            $object->setAwayPlayerID($data['AwayPlayerID']);
        }
        elseif (\array_key_exists('AwayPlayerID', $data) && $data['AwayPlayerID'] === null) {
            $object->setAwayPlayerID(null);
        }
        if (\array_key_exists('HomePlayerID', $data) && $data['HomePlayerID'] !== null) {
            $object->setHomePlayerID($data['HomePlayerID']);
        }
        elseif (\array_key_exists('HomePlayerID', $data) && $data['HomePlayerID'] === null) {
            $object->setHomePlayerID(null);
        }
        if (\array_key_exists('ReceivingPlayerID', $data) && $data['ReceivingPlayerID'] !== null) {
            $object->setReceivingPlayerID($data['ReceivingPlayerID']);
        }
        elseif (\array_key_exists('ReceivingPlayerID', $data) && $data['ReceivingPlayerID'] === null) {
            $object->setReceivingPlayerID(null);
        }
        if (\array_key_exists('BaselineOffsetPercentage', $data) && $data['BaselineOffsetPercentage'] !== null) {
            $object->setBaselineOffsetPercentage($data['BaselineOffsetPercentage']);
        }
        elseif (\array_key_exists('BaselineOffsetPercentage', $data) && $data['BaselineOffsetPercentage'] === null) {
            $object->setBaselineOffsetPercentage(null);
        }
        if (\array_key_exists('SidelineOffsetPercentage', $data) && $data['SidelineOffsetPercentage'] !== null) {
            $object->setSidelineOffsetPercentage($data['SidelineOffsetPercentage']);
        }
        elseif (\array_key_exists('SidelineOffsetPercentage', $data) && $data['SidelineOffsetPercentage'] === null) {
            $object->setSidelineOffsetPercentage(null);
        }
        if (\array_key_exists('Coordinates', $data) && $data['Coordinates'] !== null) {
            $object->setCoordinates($data['Coordinates']);
        }
        elseif (\array_key_exists('Coordinates', $data) && $data['Coordinates'] === null) {
            $object->setCoordinates(null);
        }
        if (\array_key_exists('StolenByPlayerID', $data) && $data['StolenByPlayerID'] !== null) {
            $object->setStolenByPlayerID($data['StolenByPlayerID']);
        }
        elseif (\array_key_exists('StolenByPlayerID', $data) && $data['StolenByPlayerID'] === null) {
            $object->setStolenByPlayerID(null);
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