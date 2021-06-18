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
class StandingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\Standing';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\Standing';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\Standing();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('Conference', $data) && $data['Conference'] !== null) {
            $object->setConference($data['Conference']);
        }
        elseif (\array_key_exists('Conference', $data) && $data['Conference'] === null) {
            $object->setConference(null);
        }
        if (\array_key_exists('Division', $data) && $data['Division'] !== null) {
            $object->setDivision($data['Division']);
        }
        elseif (\array_key_exists('Division', $data) && $data['Division'] === null) {
            $object->setDivision(null);
        }
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Wins', $data)) {
            $object->setWins($data['Wins']);
        }
        if (\array_key_exists('Losses', $data)) {
            $object->setLosses($data['Losses']);
        }
        if (\array_key_exists('Ties', $data)) {
            $object->setTies($data['Ties']);
        }
        if (\array_key_exists('Percentage', $data)) {
            $object->setPercentage($data['Percentage']);
        }
        if (\array_key_exists('PointsFor', $data)) {
            $object->setPointsFor($data['PointsFor']);
        }
        if (\array_key_exists('PointsAgainst', $data)) {
            $object->setPointsAgainst($data['PointsAgainst']);
        }
        if (\array_key_exists('NetPoints', $data)) {
            $object->setNetPoints($data['NetPoints']);
        }
        if (\array_key_exists('Touchdowns', $data) && $data['Touchdowns'] !== null) {
            $object->setTouchdowns($data['Touchdowns']);
        }
        elseif (\array_key_exists('Touchdowns', $data) && $data['Touchdowns'] === null) {
            $object->setTouchdowns(null);
        }
        if (\array_key_exists('DivisionWins', $data)) {
            $object->setDivisionWins($data['DivisionWins']);
        }
        if (\array_key_exists('DivisionLosses', $data)) {
            $object->setDivisionLosses($data['DivisionLosses']);
        }
        if (\array_key_exists('ConferenceWins', $data)) {
            $object->setConferenceWins($data['ConferenceWins']);
        }
        if (\array_key_exists('ConferenceLosses', $data)) {
            $object->setConferenceLosses($data['ConferenceLosses']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('DivisionTies', $data)) {
            $object->setDivisionTies($data['DivisionTies']);
        }
        if (\array_key_exists('ConferenceTies', $data)) {
            $object->setConferenceTies($data['ConferenceTies']);
        }
        if (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] !== null) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        elseif (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] === null) {
            $object->setGlobalTeamID(null);
        }
        if (\array_key_exists('DivisionRank', $data)) {
            $object->setDivisionRank($data['DivisionRank']);
        }
        if (\array_key_exists('ConferenceRank', $data)) {
            $object->setConferenceRank($data['ConferenceRank']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getConference()) {
            $data['Conference'] = $object->getConference();
        }
        if (null !== $object->getDivision()) {
            $data['Division'] = $object->getDivision();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getWins()) {
            $data['Wins'] = $object->getWins();
        }
        if (null !== $object->getLosses()) {
            $data['Losses'] = $object->getLosses();
        }
        if (null !== $object->getTies()) {
            $data['Ties'] = $object->getTies();
        }
        if (null !== $object->getPercentage()) {
            $data['Percentage'] = $object->getPercentage();
        }
        if (null !== $object->getPointsFor()) {
            $data['PointsFor'] = $object->getPointsFor();
        }
        if (null !== $object->getPointsAgainst()) {
            $data['PointsAgainst'] = $object->getPointsAgainst();
        }
        if (null !== $object->getNetPoints()) {
            $data['NetPoints'] = $object->getNetPoints();
        }
        if (null !== $object->getTouchdowns()) {
            $data['Touchdowns'] = $object->getTouchdowns();
        }
        if (null !== $object->getDivisionWins()) {
            $data['DivisionWins'] = $object->getDivisionWins();
        }
        if (null !== $object->getDivisionLosses()) {
            $data['DivisionLosses'] = $object->getDivisionLosses();
        }
        if (null !== $object->getConferenceWins()) {
            $data['ConferenceWins'] = $object->getConferenceWins();
        }
        if (null !== $object->getConferenceLosses()) {
            $data['ConferenceLosses'] = $object->getConferenceLosses();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getDivisionTies()) {
            $data['DivisionTies'] = $object->getDivisionTies();
        }
        if (null !== $object->getConferenceTies()) {
            $data['ConferenceTies'] = $object->getConferenceTies();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        if (null !== $object->getDivisionRank()) {
            $data['DivisionRank'] = $object->getDivisionRank();
        }
        if (null !== $object->getConferenceRank()) {
            $data['ConferenceRank'] = $object->getConferenceRank();
        }
        return $data;
    }
}