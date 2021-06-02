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
        if (\array_key_exists('Key', $data)) {
            $object->setKey($data['Key']);
        }
        if (\array_key_exists('City', $data)) {
            $object->setCity($data['City']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('League', $data)) {
            $object->setLeague($data['League']);
        }
        if (\array_key_exists('Division', $data)) {
            $object->setDivision($data['Division']);
        }
        if (\array_key_exists('Wins', $data)) {
            $object->setWins($data['Wins']);
        }
        if (\array_key_exists('Losses', $data)) {
            $object->setLosses($data['Losses']);
        }
        if (\array_key_exists('Percentage', $data)) {
            $object->setPercentage($data['Percentage']);
        }
        if (\array_key_exists('DivisionWins', $data)) {
            $object->setDivisionWins($data['DivisionWins']);
        }
        if (\array_key_exists('DivisionLosses', $data)) {
            $object->setDivisionLosses($data['DivisionLosses']);
        }
        if (\array_key_exists('GamesBehind', $data)) {
            $object->setGamesBehind($data['GamesBehind']);
        }
        if (\array_key_exists('LastTenGamesWins', $data)) {
            $object->setLastTenGamesWins($data['LastTenGamesWins']);
        }
        if (\array_key_exists('LastTenGamesLosses', $data)) {
            $object->setLastTenGamesLosses($data['LastTenGamesLosses']);
        }
        if (\array_key_exists('Streak', $data)) {
            $object->setStreak($data['Streak']);
        }
        if (\array_key_exists('LeagueRank', $data)) {
            $object->setLeagueRank($data['LeagueRank']);
        }
        if (\array_key_exists('DivisionRank', $data)) {
            $object->setDivisionRank($data['DivisionRank']);
        }
        if (\array_key_exists('WildCardRank', $data)) {
            $object->setWildCardRank($data['WildCardRank']);
        }
        if (\array_key_exists('WildCardGamesBehind', $data)) {
            $object->setWildCardGamesBehind($data['WildCardGamesBehind']);
        }
        if (\array_key_exists('HomeWins', $data)) {
            $object->setHomeWins($data['HomeWins']);
        }
        if (\array_key_exists('HomeLosses', $data)) {
            $object->setHomeLosses($data['HomeLosses']);
        }
        if (\array_key_exists('AwayWins', $data)) {
            $object->setAwayWins($data['AwayWins']);
        }
        if (\array_key_exists('AwayLosses', $data)) {
            $object->setAwayLosses($data['AwayLosses']);
        }
        if (\array_key_exists('DayWins', $data)) {
            $object->setDayWins($data['DayWins']);
        }
        if (\array_key_exists('DayLosses', $data)) {
            $object->setDayLosses($data['DayLosses']);
        }
        if (\array_key_exists('NightWins', $data)) {
            $object->setNightWins($data['NightWins']);
        }
        if (\array_key_exists('NightLosses', $data)) {
            $object->setNightLosses($data['NightLosses']);
        }
        if (\array_key_exists('RunsScored', $data)) {
            $object->setRunsScored($data['RunsScored']);
        }
        if (\array_key_exists('RunsAgainst', $data)) {
            $object->setRunsAgainst($data['RunsAgainst']);
        }
        if (\array_key_exists('GlobalTeamID', $data)) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
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