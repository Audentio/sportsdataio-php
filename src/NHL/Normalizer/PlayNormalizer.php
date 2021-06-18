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
class PlayNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NHL\\Model\\Play';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NHL\\Model\\Play';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NHL\Model\Play();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayID', $data)) {
            $object->setPlayID($data['PlayID']);
        }
        if (\array_key_exists('PeriodID', $data)) {
            $object->setPeriodID($data['PeriodID']);
        }
        if (\array_key_exists('PeriodName', $data) && $data['PeriodName'] !== null) {
            $object->setPeriodName($data['PeriodName']);
        }
        elseif (\array_key_exists('PeriodName', $data) && $data['PeriodName'] === null) {
            $object->setPeriodName(null);
        }
        if (\array_key_exists('Sequence', $data)) {
            $object->setSequence($data['Sequence']);
        }
        if (\array_key_exists('ClockMinutes', $data) && $data['ClockMinutes'] !== null) {
            $object->setClockMinutes($data['ClockMinutes']);
        }
        elseif (\array_key_exists('ClockMinutes', $data) && $data['ClockMinutes'] === null) {
            $object->setClockMinutes(null);
        }
        if (\array_key_exists('ClockSeconds', $data) && $data['ClockSeconds'] !== null) {
            $object->setClockSeconds($data['ClockSeconds']);
        }
        elseif (\array_key_exists('ClockSeconds', $data) && $data['ClockSeconds'] === null) {
            $object->setClockSeconds(null);
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
        if (\array_key_exists('FirstAssistedByPlayerID', $data) && $data['FirstAssistedByPlayerID'] !== null) {
            $object->setFirstAssistedByPlayerID($data['FirstAssistedByPlayerID']);
        }
        elseif (\array_key_exists('FirstAssistedByPlayerID', $data) && $data['FirstAssistedByPlayerID'] === null) {
            $object->setFirstAssistedByPlayerID(null);
        }
        if (\array_key_exists('SecondAssistedByPlayerID', $data) && $data['SecondAssistedByPlayerID'] !== null) {
            $object->setSecondAssistedByPlayerID($data['SecondAssistedByPlayerID']);
        }
        elseif (\array_key_exists('SecondAssistedByPlayerID', $data) && $data['SecondAssistedByPlayerID'] === null) {
            $object->setSecondAssistedByPlayerID(null);
        }
        if (\array_key_exists('PowerPlayTeamID', $data) && $data['PowerPlayTeamID'] !== null) {
            $object->setPowerPlayTeamID($data['PowerPlayTeamID']);
        }
        elseif (\array_key_exists('PowerPlayTeamID', $data) && $data['PowerPlayTeamID'] === null) {
            $object->setPowerPlayTeamID(null);
        }
        if (\array_key_exists('PowerPlayTeam', $data) && $data['PowerPlayTeam'] !== null) {
            $object->setPowerPlayTeam($data['PowerPlayTeam']);
        }
        elseif (\array_key_exists('PowerPlayTeam', $data) && $data['PowerPlayTeam'] === null) {
            $object->setPowerPlayTeam(null);
        }
        if (\array_key_exists('OpposingPlayerID', $data) && $data['OpposingPlayerID'] !== null) {
            $object->setOpposingPlayerID($data['OpposingPlayerID']);
        }
        elseif (\array_key_exists('OpposingPlayerID', $data) && $data['OpposingPlayerID'] === null) {
            $object->setOpposingPlayerID(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayID()) {
            $data['PlayID'] = $object->getPlayID();
        }
        if (null !== $object->getPeriodID()) {
            $data['PeriodID'] = $object->getPeriodID();
        }
        if (null !== $object->getPeriodName()) {
            $data['PeriodName'] = $object->getPeriodName();
        }
        if (null !== $object->getSequence()) {
            $data['Sequence'] = $object->getSequence();
        }
        if (null !== $object->getClockMinutes()) {
            $data['ClockMinutes'] = $object->getClockMinutes();
        }
        if (null !== $object->getClockSeconds()) {
            $data['ClockSeconds'] = $object->getClockSeconds();
        }
        if (null !== $object->getAwayTeamScore()) {
            $data['AwayTeamScore'] = $object->getAwayTeamScore();
        }
        if (null !== $object->getHomeTeamScore()) {
            $data['HomeTeamScore'] = $object->getHomeTeamScore();
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
        if (null !== $object->getCategory()) {
            $data['Category'] = $object->getCategory();
        }
        if (null !== $object->getType()) {
            $data['Type'] = $object->getType();
        }
        if (null !== $object->getDescription()) {
            $data['Description'] = $object->getDescription();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if (null !== $object->getFirstAssistedByPlayerID()) {
            $data['FirstAssistedByPlayerID'] = $object->getFirstAssistedByPlayerID();
        }
        if (null !== $object->getSecondAssistedByPlayerID()) {
            $data['SecondAssistedByPlayerID'] = $object->getSecondAssistedByPlayerID();
        }
        if (null !== $object->getPowerPlayTeamID()) {
            $data['PowerPlayTeamID'] = $object->getPowerPlayTeamID();
        }
        if (null !== $object->getPowerPlayTeam()) {
            $data['PowerPlayTeam'] = $object->getPowerPlayTeam();
        }
        if (null !== $object->getOpposingPlayerID()) {
            $data['OpposingPlayerID'] = $object->getOpposingPlayerID();
        }
        return $data;
    }
}