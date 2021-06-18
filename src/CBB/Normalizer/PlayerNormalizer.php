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
class PlayerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\CBB\\Model\\Player';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CBB\\Model\\Player';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CBB\Model\Player();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('FirstName', $data) && $data['FirstName'] !== null) {
            $object->setFirstName($data['FirstName']);
        }
        elseif (\array_key_exists('FirstName', $data) && $data['FirstName'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('LastName', $data) && $data['LastName'] !== null) {
            $object->setLastName($data['LastName']);
        }
        elseif (\array_key_exists('LastName', $data) && $data['LastName'] === null) {
            $object->setLastName(null);
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
        if (\array_key_exists('Jersey', $data) && $data['Jersey'] !== null) {
            $object->setJersey($data['Jersey']);
        }
        elseif (\array_key_exists('Jersey', $data) && $data['Jersey'] === null) {
            $object->setJersey(null);
        }
        if (\array_key_exists('Position', $data) && $data['Position'] !== null) {
            $object->setPosition($data['Position']);
        }
        elseif (\array_key_exists('Position', $data) && $data['Position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('Class', $data) && $data['Class'] !== null) {
            $object->setClass($data['Class']);
        }
        elseif (\array_key_exists('Class', $data) && $data['Class'] === null) {
            $object->setClass(null);
        }
        if (\array_key_exists('Height', $data) && $data['Height'] !== null) {
            $object->setHeight($data['Height']);
        }
        elseif (\array_key_exists('Height', $data) && $data['Height'] === null) {
            $object->setHeight(null);
        }
        if (\array_key_exists('Weight', $data) && $data['Weight'] !== null) {
            $object->setWeight($data['Weight']);
        }
        elseif (\array_key_exists('Weight', $data) && $data['Weight'] === null) {
            $object->setWeight(null);
        }
        if (\array_key_exists('BirthCity', $data) && $data['BirthCity'] !== null) {
            $object->setBirthCity($data['BirthCity']);
        }
        elseif (\array_key_exists('BirthCity', $data) && $data['BirthCity'] === null) {
            $object->setBirthCity(null);
        }
        if (\array_key_exists('BirthState', $data) && $data['BirthState'] !== null) {
            $object->setBirthState($data['BirthState']);
        }
        elseif (\array_key_exists('BirthState', $data) && $data['BirthState'] === null) {
            $object->setBirthState(null);
        }
        if (\array_key_exists('HighSchool', $data) && $data['HighSchool'] !== null) {
            $object->setHighSchool($data['HighSchool']);
        }
        elseif (\array_key_exists('HighSchool', $data) && $data['HighSchool'] === null) {
            $object->setHighSchool(null);
        }
        if (\array_key_exists('SportRadarPlayerID', $data) && $data['SportRadarPlayerID'] !== null) {
            $object->setSportRadarPlayerID($data['SportRadarPlayerID']);
        }
        elseif (\array_key_exists('SportRadarPlayerID', $data) && $data['SportRadarPlayerID'] === null) {
            $object->setSportRadarPlayerID(null);
        }
        if (\array_key_exists('RotoworldPlayerID', $data) && $data['RotoworldPlayerID'] !== null) {
            $object->setRotoworldPlayerID($data['RotoworldPlayerID']);
        }
        elseif (\array_key_exists('RotoworldPlayerID', $data) && $data['RotoworldPlayerID'] === null) {
            $object->setRotoworldPlayerID(null);
        }
        if (\array_key_exists('RotoWirePlayerID', $data) && $data['RotoWirePlayerID'] !== null) {
            $object->setRotoWirePlayerID($data['RotoWirePlayerID']);
        }
        elseif (\array_key_exists('RotoWirePlayerID', $data) && $data['RotoWirePlayerID'] === null) {
            $object->setRotoWirePlayerID(null);
        }
        if (\array_key_exists('FantasyAlarmPlayerID', $data) && $data['FantasyAlarmPlayerID'] !== null) {
            $object->setFantasyAlarmPlayerID($data['FantasyAlarmPlayerID']);
        }
        elseif (\array_key_exists('FantasyAlarmPlayerID', $data) && $data['FantasyAlarmPlayerID'] === null) {
            $object->setFantasyAlarmPlayerID(null);
        }
        if (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] !== null) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        elseif (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] === null) {
            $object->setGlobalTeamID(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getFirstName()) {
            $data['FirstName'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['LastName'] = $object->getLastName();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getJersey()) {
            $data['Jersey'] = $object->getJersey();
        }
        if (null !== $object->getPosition()) {
            $data['Position'] = $object->getPosition();
        }
        if (null !== $object->getClass()) {
            $data['Class'] = $object->getClass();
        }
        if (null !== $object->getHeight()) {
            $data['Height'] = $object->getHeight();
        }
        if (null !== $object->getWeight()) {
            $data['Weight'] = $object->getWeight();
        }
        if (null !== $object->getBirthCity()) {
            $data['BirthCity'] = $object->getBirthCity();
        }
        if (null !== $object->getBirthState()) {
            $data['BirthState'] = $object->getBirthState();
        }
        if (null !== $object->getHighSchool()) {
            $data['HighSchool'] = $object->getHighSchool();
        }
        if (null !== $object->getSportRadarPlayerID()) {
            $data['SportRadarPlayerID'] = $object->getSportRadarPlayerID();
        }
        if (null !== $object->getRotoworldPlayerID()) {
            $data['RotoworldPlayerID'] = $object->getRotoworldPlayerID();
        }
        if (null !== $object->getRotoWirePlayerID()) {
            $data['RotoWirePlayerID'] = $object->getRotoWirePlayerID();
        }
        if (null !== $object->getFantasyAlarmPlayerID()) {
            $data['FantasyAlarmPlayerID'] = $object->getFantasyAlarmPlayerID();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        return $data;
    }
}