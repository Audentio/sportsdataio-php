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
class StandingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NBA\\Model\\Standing';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NBA\\Model\\Standing';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NBA\Model\Standing();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('Key', $data) && $data['Key'] !== null) {
            $object->setKey($data['Key']);
        }
        elseif (\array_key_exists('Key', $data) && $data['Key'] === null) {
            $object->setKey(null);
        }
        if (\array_key_exists('City', $data) && $data['City'] !== null) {
            $object->setCity($data['City']);
        }
        elseif (\array_key_exists('City', $data) && $data['City'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
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
        if (\array_key_exists('Wins', $data) && $data['Wins'] !== null) {
            $object->setWins($data['Wins']);
        }
        elseif (\array_key_exists('Wins', $data) && $data['Wins'] === null) {
            $object->setWins(null);
        }
        if (\array_key_exists('Losses', $data) && $data['Losses'] !== null) {
            $object->setLosses($data['Losses']);
        }
        elseif (\array_key_exists('Losses', $data) && $data['Losses'] === null) {
            $object->setLosses(null);
        }
        if (\array_key_exists('Percentage', $data) && $data['Percentage'] !== null) {
            $object->setPercentage($data['Percentage']);
        }
        elseif (\array_key_exists('Percentage', $data) && $data['Percentage'] === null) {
            $object->setPercentage(null);
        }
        if (\array_key_exists('ConferenceWins', $data) && $data['ConferenceWins'] !== null) {
            $object->setConferenceWins($data['ConferenceWins']);
        }
        elseif (\array_key_exists('ConferenceWins', $data) && $data['ConferenceWins'] === null) {
            $object->setConferenceWins(null);
        }
        if (\array_key_exists('ConferenceLosses', $data) && $data['ConferenceLosses'] !== null) {
            $object->setConferenceLosses($data['ConferenceLosses']);
        }
        elseif (\array_key_exists('ConferenceLosses', $data) && $data['ConferenceLosses'] === null) {
            $object->setConferenceLosses(null);
        }
        if (\array_key_exists('DivisionWins', $data) && $data['DivisionWins'] !== null) {
            $object->setDivisionWins($data['DivisionWins']);
        }
        elseif (\array_key_exists('DivisionWins', $data) && $data['DivisionWins'] === null) {
            $object->setDivisionWins(null);
        }
        if (\array_key_exists('DivisionLosses', $data) && $data['DivisionLosses'] !== null) {
            $object->setDivisionLosses($data['DivisionLosses']);
        }
        elseif (\array_key_exists('DivisionLosses', $data) && $data['DivisionLosses'] === null) {
            $object->setDivisionLosses(null);
        }
        if (\array_key_exists('HomeWins', $data) && $data['HomeWins'] !== null) {
            $object->setHomeWins($data['HomeWins']);
        }
        elseif (\array_key_exists('HomeWins', $data) && $data['HomeWins'] === null) {
            $object->setHomeWins(null);
        }
        if (\array_key_exists('HomeLosses', $data) && $data['HomeLosses'] !== null) {
            $object->setHomeLosses($data['HomeLosses']);
        }
        elseif (\array_key_exists('HomeLosses', $data) && $data['HomeLosses'] === null) {
            $object->setHomeLosses(null);
        }
        if (\array_key_exists('AwayWins', $data) && $data['AwayWins'] !== null) {
            $object->setAwayWins($data['AwayWins']);
        }
        elseif (\array_key_exists('AwayWins', $data) && $data['AwayWins'] === null) {
            $object->setAwayWins(null);
        }
        if (\array_key_exists('AwayLosses', $data) && $data['AwayLosses'] !== null) {
            $object->setAwayLosses($data['AwayLosses']);
        }
        elseif (\array_key_exists('AwayLosses', $data) && $data['AwayLosses'] === null) {
            $object->setAwayLosses(null);
        }
        if (\array_key_exists('LastTenWins', $data) && $data['LastTenWins'] !== null) {
            $object->setLastTenWins($data['LastTenWins']);
        }
        elseif (\array_key_exists('LastTenWins', $data) && $data['LastTenWins'] === null) {
            $object->setLastTenWins(null);
        }
        if (\array_key_exists('LastTenLosses', $data) && $data['LastTenLosses'] !== null) {
            $object->setLastTenLosses($data['LastTenLosses']);
        }
        elseif (\array_key_exists('LastTenLosses', $data) && $data['LastTenLosses'] === null) {
            $object->setLastTenLosses(null);
        }
        if (\array_key_exists('PointsPerGameFor', $data) && $data['PointsPerGameFor'] !== null) {
            $object->setPointsPerGameFor($data['PointsPerGameFor']);
        }
        elseif (\array_key_exists('PointsPerGameFor', $data) && $data['PointsPerGameFor'] === null) {
            $object->setPointsPerGameFor(null);
        }
        if (\array_key_exists('PointsPerGameAgainst', $data) && $data['PointsPerGameAgainst'] !== null) {
            $object->setPointsPerGameAgainst($data['PointsPerGameAgainst']);
        }
        elseif (\array_key_exists('PointsPerGameAgainst', $data) && $data['PointsPerGameAgainst'] === null) {
            $object->setPointsPerGameAgainst(null);
        }
        if (\array_key_exists('Streak', $data) && $data['Streak'] !== null) {
            $object->setStreak($data['Streak']);
        }
        elseif (\array_key_exists('Streak', $data) && $data['Streak'] === null) {
            $object->setStreak(null);
        }
        if (\array_key_exists('GamesBack', $data) && $data['GamesBack'] !== null) {
            $object->setGamesBack($data['GamesBack']);
        }
        elseif (\array_key_exists('GamesBack', $data) && $data['GamesBack'] === null) {
            $object->setGamesBack(null);
        }
        if (\array_key_exists('StreakDescription', $data) && $data['StreakDescription'] !== null) {
            $object->setStreakDescription($data['StreakDescription']);
        }
        elseif (\array_key_exists('StreakDescription', $data) && $data['StreakDescription'] === null) {
            $object->setStreakDescription(null);
        }
        if (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] !== null) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        elseif (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] === null) {
            $object->setGlobalTeamID(null);
        }
        if (\array_key_exists('ConferenceRank', $data) && $data['ConferenceRank'] !== null) {
            $object->setConferenceRank($data['ConferenceRank']);
        }
        elseif (\array_key_exists('ConferenceRank', $data) && $data['ConferenceRank'] === null) {
            $object->setConferenceRank(null);
        }
        if (\array_key_exists('DivisionRank', $data) && $data['DivisionRank'] !== null) {
            $object->setDivisionRank($data['DivisionRank']);
        }
        elseif (\array_key_exists('DivisionRank', $data) && $data['DivisionRank'] === null) {
            $object->setDivisionRank(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getKey()) {
            $data['Key'] = $object->getKey();
        }
        if (null !== $object->getCity()) {
            $data['City'] = $object->getCity();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getConference()) {
            $data['Conference'] = $object->getConference();
        }
        if (null !== $object->getDivision()) {
            $data['Division'] = $object->getDivision();
        }
        if (null !== $object->getWins()) {
            $data['Wins'] = $object->getWins();
        }
        if (null !== $object->getLosses()) {
            $data['Losses'] = $object->getLosses();
        }
        if (null !== $object->getPercentage()) {
            $data['Percentage'] = $object->getPercentage();
        }
        if (null !== $object->getConferenceWins()) {
            $data['ConferenceWins'] = $object->getConferenceWins();
        }
        if (null !== $object->getConferenceLosses()) {
            $data['ConferenceLosses'] = $object->getConferenceLosses();
        }
        if (null !== $object->getDivisionWins()) {
            $data['DivisionWins'] = $object->getDivisionWins();
        }
        if (null !== $object->getDivisionLosses()) {
            $data['DivisionLosses'] = $object->getDivisionLosses();
        }
        if (null !== $object->getHomeWins()) {
            $data['HomeWins'] = $object->getHomeWins();
        }
        if (null !== $object->getHomeLosses()) {
            $data['HomeLosses'] = $object->getHomeLosses();
        }
        if (null !== $object->getAwayWins()) {
            $data['AwayWins'] = $object->getAwayWins();
        }
        if (null !== $object->getAwayLosses()) {
            $data['AwayLosses'] = $object->getAwayLosses();
        }
        if (null !== $object->getLastTenWins()) {
            $data['LastTenWins'] = $object->getLastTenWins();
        }
        if (null !== $object->getLastTenLosses()) {
            $data['LastTenLosses'] = $object->getLastTenLosses();
        }
        if (null !== $object->getPointsPerGameFor()) {
            $data['PointsPerGameFor'] = $object->getPointsPerGameFor();
        }
        if (null !== $object->getPointsPerGameAgainst()) {
            $data['PointsPerGameAgainst'] = $object->getPointsPerGameAgainst();
        }
        if (null !== $object->getStreak()) {
            $data['Streak'] = $object->getStreak();
        }
        if (null !== $object->getGamesBack()) {
            $data['GamesBack'] = $object->getGamesBack();
        }
        if (null !== $object->getStreakDescription()) {
            $data['StreakDescription'] = $object->getStreakDescription();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        if (null !== $object->getConferenceRank()) {
            $data['ConferenceRank'] = $object->getConferenceRank();
        }
        if (null !== $object->getDivisionRank()) {
            $data['DivisionRank'] = $object->getDivisionRank();
        }
        return $data;
    }
}