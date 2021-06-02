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
class PlayerSeasonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\CBB\\Model\\PlayerSeason';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CBB\\Model\\PlayerSeason';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CBB\Model\PlayerSeason();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('StatID', $data)) {
            $object->setStatID($data['StatID']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Team', $data)) {
            $object->setTeam($data['Team']);
        }
        if (\array_key_exists('Position', $data)) {
            $object->setPosition($data['Position']);
        }
        if (\array_key_exists('GlobalTeamID', $data)) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('Games', $data)) {
            $object->setGames($data['Games']);
        }
        if (\array_key_exists('FantasyPoints', $data)) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        if (\array_key_exists('Minutes', $data)) {
            $object->setMinutes($data['Minutes']);
        }
        if (\array_key_exists('FieldGoalsMade', $data)) {
            $object->setFieldGoalsMade($data['FieldGoalsMade']);
        }
        if (\array_key_exists('FieldGoalsAttempted', $data)) {
            $object->setFieldGoalsAttempted($data['FieldGoalsAttempted']);
        }
        if (\array_key_exists('FieldGoalsPercentage', $data)) {
            $object->setFieldGoalsPercentage($data['FieldGoalsPercentage']);
        }
        if (\array_key_exists('EffectiveFieldGoalsPercentage', $data)) {
            $object->setEffectiveFieldGoalsPercentage($data['EffectiveFieldGoalsPercentage']);
        }
        if (\array_key_exists('TwoPointersMade', $data)) {
            $object->setTwoPointersMade($data['TwoPointersMade']);
        }
        if (\array_key_exists('TwoPointersAttempted', $data)) {
            $object->setTwoPointersAttempted($data['TwoPointersAttempted']);
        }
        if (\array_key_exists('TwoPointersPercentage', $data)) {
            $object->setTwoPointersPercentage($data['TwoPointersPercentage']);
        }
        if (\array_key_exists('ThreePointersMade', $data)) {
            $object->setThreePointersMade($data['ThreePointersMade']);
        }
        if (\array_key_exists('ThreePointersAttempted', $data)) {
            $object->setThreePointersAttempted($data['ThreePointersAttempted']);
        }
        if (\array_key_exists('ThreePointersPercentage', $data)) {
            $object->setThreePointersPercentage($data['ThreePointersPercentage']);
        }
        if (\array_key_exists('FreeThrowsMade', $data)) {
            $object->setFreeThrowsMade($data['FreeThrowsMade']);
        }
        if (\array_key_exists('FreeThrowsAttempted', $data)) {
            $object->setFreeThrowsAttempted($data['FreeThrowsAttempted']);
        }
        if (\array_key_exists('FreeThrowsPercentage', $data)) {
            $object->setFreeThrowsPercentage($data['FreeThrowsPercentage']);
        }
        if (\array_key_exists('OffensiveRebounds', $data)) {
            $object->setOffensiveRebounds($data['OffensiveRebounds']);
        }
        if (\array_key_exists('DefensiveRebounds', $data)) {
            $object->setDefensiveRebounds($data['DefensiveRebounds']);
        }
        if (\array_key_exists('Rebounds', $data)) {
            $object->setRebounds($data['Rebounds']);
        }
        if (\array_key_exists('OffensiveReboundsPercentage', $data)) {
            $object->setOffensiveReboundsPercentage($data['OffensiveReboundsPercentage']);
        }
        if (\array_key_exists('DefensiveReboundsPercentage', $data)) {
            $object->setDefensiveReboundsPercentage($data['DefensiveReboundsPercentage']);
        }
        if (\array_key_exists('TotalReboundsPercentage', $data)) {
            $object->setTotalReboundsPercentage($data['TotalReboundsPercentage']);
        }
        if (\array_key_exists('Assists', $data)) {
            $object->setAssists($data['Assists']);
        }
        if (\array_key_exists('Steals', $data)) {
            $object->setSteals($data['Steals']);
        }
        if (\array_key_exists('BlockedShots', $data)) {
            $object->setBlockedShots($data['BlockedShots']);
        }
        if (\array_key_exists('Turnovers', $data)) {
            $object->setTurnovers($data['Turnovers']);
        }
        if (\array_key_exists('PersonalFouls', $data)) {
            $object->setPersonalFouls($data['PersonalFouls']);
        }
        if (\array_key_exists('Points', $data)) {
            $object->setPoints($data['Points']);
        }
        if (\array_key_exists('TrueShootingAttempts', $data)) {
            $object->setTrueShootingAttempts($data['TrueShootingAttempts']);
        }
        if (\array_key_exists('TrueShootingPercentage', $data)) {
            $object->setTrueShootingPercentage($data['TrueShootingPercentage']);
        }
        if (\array_key_exists('PlayerEfficiencyRating', $data)) {
            $object->setPlayerEfficiencyRating($data['PlayerEfficiencyRating']);
        }
        if (\array_key_exists('AssistsPercentage', $data)) {
            $object->setAssistsPercentage($data['AssistsPercentage']);
        }
        if (\array_key_exists('StealsPercentage', $data)) {
            $object->setStealsPercentage($data['StealsPercentage']);
        }
        if (\array_key_exists('BlocksPercentage', $data)) {
            $object->setBlocksPercentage($data['BlocksPercentage']);
        }
        if (\array_key_exists('TurnOversPercentage', $data)) {
            $object->setTurnOversPercentage($data['TurnOversPercentage']);
        }
        if (\array_key_exists('UsageRatePercentage', $data)) {
            $object->setUsageRatePercentage($data['UsageRatePercentage']);
        }
        if (\array_key_exists('FantasyPointsFanDuel', $data)) {
            $object->setFantasyPointsFanDuel($data['FantasyPointsFanDuel']);
        }
        if (\array_key_exists('FantasyPointsDraftKings', $data)) {
            $object->setFantasyPointsDraftKings($data['FantasyPointsDraftKings']);
        }
        if (\array_key_exists('FantasyPointsYahoo', $data)) {
            $object->setFantasyPointsYahoo($data['FantasyPointsYahoo']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getStatID()) {
            $data['StatID'] = $object->getStatID();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getPosition()) {
            $data['Position'] = $object->getPosition();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getGames()) {
            $data['Games'] = $object->getGames();
        }
        if (null !== $object->getFantasyPoints()) {
            $data['FantasyPoints'] = $object->getFantasyPoints();
        }
        if (null !== $object->getMinutes()) {
            $data['Minutes'] = $object->getMinutes();
        }
        if (null !== $object->getFieldGoalsMade()) {
            $data['FieldGoalsMade'] = $object->getFieldGoalsMade();
        }
        if (null !== $object->getFieldGoalsAttempted()) {
            $data['FieldGoalsAttempted'] = $object->getFieldGoalsAttempted();
        }
        if (null !== $object->getFieldGoalsPercentage()) {
            $data['FieldGoalsPercentage'] = $object->getFieldGoalsPercentage();
        }
        if (null !== $object->getEffectiveFieldGoalsPercentage()) {
            $data['EffectiveFieldGoalsPercentage'] = $object->getEffectiveFieldGoalsPercentage();
        }
        if (null !== $object->getTwoPointersMade()) {
            $data['TwoPointersMade'] = $object->getTwoPointersMade();
        }
        if (null !== $object->getTwoPointersAttempted()) {
            $data['TwoPointersAttempted'] = $object->getTwoPointersAttempted();
        }
        if (null !== $object->getTwoPointersPercentage()) {
            $data['TwoPointersPercentage'] = $object->getTwoPointersPercentage();
        }
        if (null !== $object->getThreePointersMade()) {
            $data['ThreePointersMade'] = $object->getThreePointersMade();
        }
        if (null !== $object->getThreePointersAttempted()) {
            $data['ThreePointersAttempted'] = $object->getThreePointersAttempted();
        }
        if (null !== $object->getThreePointersPercentage()) {
            $data['ThreePointersPercentage'] = $object->getThreePointersPercentage();
        }
        if (null !== $object->getFreeThrowsMade()) {
            $data['FreeThrowsMade'] = $object->getFreeThrowsMade();
        }
        if (null !== $object->getFreeThrowsAttempted()) {
            $data['FreeThrowsAttempted'] = $object->getFreeThrowsAttempted();
        }
        if (null !== $object->getFreeThrowsPercentage()) {
            $data['FreeThrowsPercentage'] = $object->getFreeThrowsPercentage();
        }
        if (null !== $object->getOffensiveRebounds()) {
            $data['OffensiveRebounds'] = $object->getOffensiveRebounds();
        }
        if (null !== $object->getDefensiveRebounds()) {
            $data['DefensiveRebounds'] = $object->getDefensiveRebounds();
        }
        if (null !== $object->getRebounds()) {
            $data['Rebounds'] = $object->getRebounds();
        }
        if (null !== $object->getOffensiveReboundsPercentage()) {
            $data['OffensiveReboundsPercentage'] = $object->getOffensiveReboundsPercentage();
        }
        if (null !== $object->getDefensiveReboundsPercentage()) {
            $data['DefensiveReboundsPercentage'] = $object->getDefensiveReboundsPercentage();
        }
        if (null !== $object->getTotalReboundsPercentage()) {
            $data['TotalReboundsPercentage'] = $object->getTotalReboundsPercentage();
        }
        if (null !== $object->getAssists()) {
            $data['Assists'] = $object->getAssists();
        }
        if (null !== $object->getSteals()) {
            $data['Steals'] = $object->getSteals();
        }
        if (null !== $object->getBlockedShots()) {
            $data['BlockedShots'] = $object->getBlockedShots();
        }
        if (null !== $object->getTurnovers()) {
            $data['Turnovers'] = $object->getTurnovers();
        }
        if (null !== $object->getPersonalFouls()) {
            $data['PersonalFouls'] = $object->getPersonalFouls();
        }
        if (null !== $object->getPoints()) {
            $data['Points'] = $object->getPoints();
        }
        if (null !== $object->getTrueShootingAttempts()) {
            $data['TrueShootingAttempts'] = $object->getTrueShootingAttempts();
        }
        if (null !== $object->getTrueShootingPercentage()) {
            $data['TrueShootingPercentage'] = $object->getTrueShootingPercentage();
        }
        if (null !== $object->getPlayerEfficiencyRating()) {
            $data['PlayerEfficiencyRating'] = $object->getPlayerEfficiencyRating();
        }
        if (null !== $object->getAssistsPercentage()) {
            $data['AssistsPercentage'] = $object->getAssistsPercentage();
        }
        if (null !== $object->getStealsPercentage()) {
            $data['StealsPercentage'] = $object->getStealsPercentage();
        }
        if (null !== $object->getBlocksPercentage()) {
            $data['BlocksPercentage'] = $object->getBlocksPercentage();
        }
        if (null !== $object->getTurnOversPercentage()) {
            $data['TurnOversPercentage'] = $object->getTurnOversPercentage();
        }
        if (null !== $object->getUsageRatePercentage()) {
            $data['UsageRatePercentage'] = $object->getUsageRatePercentage();
        }
        if (null !== $object->getFantasyPointsFanDuel()) {
            $data['FantasyPointsFanDuel'] = $object->getFantasyPointsFanDuel();
        }
        if (null !== $object->getFantasyPointsDraftKings()) {
            $data['FantasyPointsDraftKings'] = $object->getFantasyPointsDraftKings();
        }
        if (null !== $object->getFantasyPointsYahoo()) {
            $data['FantasyPointsYahoo'] = $object->getFantasyPointsYahoo();
        }
        return $data;
    }
}