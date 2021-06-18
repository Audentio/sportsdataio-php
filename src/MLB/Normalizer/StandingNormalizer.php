<?php

namespace Sportsdata\API\MLB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\MLB\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\MLB\\Model\\Standing';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\MLB\\Model\\Standing';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\MLB\Model\Standing();
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
        if (\array_key_exists('League', $data) && $data['League'] !== null) {
            $object->setLeague($data['League']);
        }
        elseif (\array_key_exists('League', $data) && $data['League'] === null) {
            $object->setLeague(null);
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
        if (\array_key_exists('GamesBehind', $data) && $data['GamesBehind'] !== null) {
            $object->setGamesBehind($data['GamesBehind']);
        }
        elseif (\array_key_exists('GamesBehind', $data) && $data['GamesBehind'] === null) {
            $object->setGamesBehind(null);
        }
        if (\array_key_exists('LastTenGamesWins', $data) && $data['LastTenGamesWins'] !== null) {
            $object->setLastTenGamesWins($data['LastTenGamesWins']);
        }
        elseif (\array_key_exists('LastTenGamesWins', $data) && $data['LastTenGamesWins'] === null) {
            $object->setLastTenGamesWins(null);
        }
        if (\array_key_exists('LastTenGamesLosses', $data) && $data['LastTenGamesLosses'] !== null) {
            $object->setLastTenGamesLosses($data['LastTenGamesLosses']);
        }
        elseif (\array_key_exists('LastTenGamesLosses', $data) && $data['LastTenGamesLosses'] === null) {
            $object->setLastTenGamesLosses(null);
        }
        if (\array_key_exists('Streak', $data) && $data['Streak'] !== null) {
            $object->setStreak($data['Streak']);
        }
        elseif (\array_key_exists('Streak', $data) && $data['Streak'] === null) {
            $object->setStreak(null);
        }
        if (\array_key_exists('LeagueRank', $data) && $data['LeagueRank'] !== null) {
            $object->setLeagueRank($data['LeagueRank']);
        }
        elseif (\array_key_exists('LeagueRank', $data) && $data['LeagueRank'] === null) {
            $object->setLeagueRank(null);
        }
        if (\array_key_exists('DivisionRank', $data) && $data['DivisionRank'] !== null) {
            $object->setDivisionRank($data['DivisionRank']);
        }
        elseif (\array_key_exists('DivisionRank', $data) && $data['DivisionRank'] === null) {
            $object->setDivisionRank(null);
        }
        if (\array_key_exists('WildCardRank', $data) && $data['WildCardRank'] !== null) {
            $object->setWildCardRank($data['WildCardRank']);
        }
        elseif (\array_key_exists('WildCardRank', $data) && $data['WildCardRank'] === null) {
            $object->setWildCardRank(null);
        }
        if (\array_key_exists('WildCardGamesBehind', $data) && $data['WildCardGamesBehind'] !== null) {
            $object->setWildCardGamesBehind($data['WildCardGamesBehind']);
        }
        elseif (\array_key_exists('WildCardGamesBehind', $data) && $data['WildCardGamesBehind'] === null) {
            $object->setWildCardGamesBehind(null);
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
        if (\array_key_exists('DayWins', $data) && $data['DayWins'] !== null) {
            $object->setDayWins($data['DayWins']);
        }
        elseif (\array_key_exists('DayWins', $data) && $data['DayWins'] === null) {
            $object->setDayWins(null);
        }
        if (\array_key_exists('DayLosses', $data) && $data['DayLosses'] !== null) {
            $object->setDayLosses($data['DayLosses']);
        }
        elseif (\array_key_exists('DayLosses', $data) && $data['DayLosses'] === null) {
            $object->setDayLosses(null);
        }
        if (\array_key_exists('NightWins', $data) && $data['NightWins'] !== null) {
            $object->setNightWins($data['NightWins']);
        }
        elseif (\array_key_exists('NightWins', $data) && $data['NightWins'] === null) {
            $object->setNightWins(null);
        }
        if (\array_key_exists('NightLosses', $data) && $data['NightLosses'] !== null) {
            $object->setNightLosses($data['NightLosses']);
        }
        elseif (\array_key_exists('NightLosses', $data) && $data['NightLosses'] === null) {
            $object->setNightLosses(null);
        }
        if (\array_key_exists('RunsScored', $data) && $data['RunsScored'] !== null) {
            $object->setRunsScored($data['RunsScored']);
        }
        elseif (\array_key_exists('RunsScored', $data) && $data['RunsScored'] === null) {
            $object->setRunsScored(null);
        }
        if (\array_key_exists('RunsAgainst', $data) && $data['RunsAgainst'] !== null) {
            $object->setRunsAgainst($data['RunsAgainst']);
        }
        elseif (\array_key_exists('RunsAgainst', $data) && $data['RunsAgainst'] === null) {
            $object->setRunsAgainst(null);
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
        if (null !== $object->getLeague()) {
            $data['League'] = $object->getLeague();
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
        if (null !== $object->getDivisionWins()) {
            $data['DivisionWins'] = $object->getDivisionWins();
        }
        if (null !== $object->getDivisionLosses()) {
            $data['DivisionLosses'] = $object->getDivisionLosses();
        }
        if (null !== $object->getGamesBehind()) {
            $data['GamesBehind'] = $object->getGamesBehind();
        }
        if (null !== $object->getLastTenGamesWins()) {
            $data['LastTenGamesWins'] = $object->getLastTenGamesWins();
        }
        if (null !== $object->getLastTenGamesLosses()) {
            $data['LastTenGamesLosses'] = $object->getLastTenGamesLosses();
        }
        if (null !== $object->getStreak()) {
            $data['Streak'] = $object->getStreak();
        }
        if (null !== $object->getLeagueRank()) {
            $data['LeagueRank'] = $object->getLeagueRank();
        }
        if (null !== $object->getDivisionRank()) {
            $data['DivisionRank'] = $object->getDivisionRank();
        }
        if (null !== $object->getWildCardRank()) {
            $data['WildCardRank'] = $object->getWildCardRank();
        }
        if (null !== $object->getWildCardGamesBehind()) {
            $data['WildCardGamesBehind'] = $object->getWildCardGamesBehind();
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
        if (null !== $object->getDayWins()) {
            $data['DayWins'] = $object->getDayWins();
        }
        if (null !== $object->getDayLosses()) {
            $data['DayLosses'] = $object->getDayLosses();
        }
        if (null !== $object->getNightWins()) {
            $data['NightWins'] = $object->getNightWins();
        }
        if (null !== $object->getNightLosses()) {
            $data['NightLosses'] = $object->getNightLosses();
        }
        if (null !== $object->getRunsScored()) {
            $data['RunsScored'] = $object->getRunsScored();
        }
        if (null !== $object->getRunsAgainst()) {
            $data['RunsAgainst'] = $object->getRunsAgainst();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        return $data;
    }
}