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
class OpponentSeasonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NBA\\Model\\OpponentSeason';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NBA\\Model\\OpponentSeason';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NBA\Model\OpponentSeason();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('StatID', $data)) {
            $object->setStatID($data['StatID']);
        }
        if (\array_key_exists('TeamID', $data) && $data['TeamID'] !== null) {
            $object->setTeamID($data['TeamID']);
        }
        elseif (\array_key_exists('TeamID', $data) && $data['TeamID'] === null) {
            $object->setTeamID(null);
        }
        if (\array_key_exists('SeasonType', $data) && $data['SeasonType'] !== null) {
            $object->setSeasonType($data['SeasonType']);
        }
        elseif (\array_key_exists('SeasonType', $data) && $data['SeasonType'] === null) {
            $object->setSeasonType(null);
        }
        if (\array_key_exists('Season', $data) && $data['Season'] !== null) {
            $object->setSeason($data['Season']);
        }
        elseif (\array_key_exists('Season', $data) && $data['Season'] === null) {
            $object->setSeason(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
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
        if (\array_key_exists('OpponentPosition', $data) && $data['OpponentPosition'] !== null) {
            $object->setOpponentPosition($data['OpponentPosition']);
        }
        elseif (\array_key_exists('OpponentPosition', $data) && $data['OpponentPosition'] === null) {
            $object->setOpponentPosition(null);
        }
        if (\array_key_exists('Possessions', $data) && $data['Possessions'] !== null) {
            $object->setPossessions($data['Possessions']);
        }
        elseif (\array_key_exists('Possessions', $data) && $data['Possessions'] === null) {
            $object->setPossessions(null);
        }
        if (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] !== null) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        elseif (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] === null) {
            $object->setGlobalTeamID(null);
        }
        if (\array_key_exists('OpponentStat', $data)) {
            $object->setOpponentStat($this->denormalizer->denormalize($data['OpponentStat'], 'Sportsdata\\API\\NBA\\Model\\OpponentSeason', 'json', $context));
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('Games', $data) && $data['Games'] !== null) {
            $object->setGames($data['Games']);
        }
        elseif (\array_key_exists('Games', $data) && $data['Games'] === null) {
            $object->setGames(null);
        }
        if (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] !== null) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        elseif (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] === null) {
            $object->setFantasyPoints(null);
        }
        if (\array_key_exists('Minutes', $data) && $data['Minutes'] !== null) {
            $object->setMinutes($data['Minutes']);
        }
        elseif (\array_key_exists('Minutes', $data) && $data['Minutes'] === null) {
            $object->setMinutes(null);
        }
        if (\array_key_exists('Seconds', $data) && $data['Seconds'] !== null) {
            $object->setSeconds($data['Seconds']);
        }
        elseif (\array_key_exists('Seconds', $data) && $data['Seconds'] === null) {
            $object->setSeconds(null);
        }
        if (\array_key_exists('FieldGoalsMade', $data) && $data['FieldGoalsMade'] !== null) {
            $object->setFieldGoalsMade($data['FieldGoalsMade']);
        }
        elseif (\array_key_exists('FieldGoalsMade', $data) && $data['FieldGoalsMade'] === null) {
            $object->setFieldGoalsMade(null);
        }
        if (\array_key_exists('FieldGoalsAttempted', $data) && $data['FieldGoalsAttempted'] !== null) {
            $object->setFieldGoalsAttempted($data['FieldGoalsAttempted']);
        }
        elseif (\array_key_exists('FieldGoalsAttempted', $data) && $data['FieldGoalsAttempted'] === null) {
            $object->setFieldGoalsAttempted(null);
        }
        if (\array_key_exists('FieldGoalsPercentage', $data) && $data['FieldGoalsPercentage'] !== null) {
            $object->setFieldGoalsPercentage($data['FieldGoalsPercentage']);
        }
        elseif (\array_key_exists('FieldGoalsPercentage', $data) && $data['FieldGoalsPercentage'] === null) {
            $object->setFieldGoalsPercentage(null);
        }
        if (\array_key_exists('EffectiveFieldGoalsPercentage', $data) && $data['EffectiveFieldGoalsPercentage'] !== null) {
            $object->setEffectiveFieldGoalsPercentage($data['EffectiveFieldGoalsPercentage']);
        }
        elseif (\array_key_exists('EffectiveFieldGoalsPercentage', $data) && $data['EffectiveFieldGoalsPercentage'] === null) {
            $object->setEffectiveFieldGoalsPercentage(null);
        }
        if (\array_key_exists('TwoPointersMade', $data) && $data['TwoPointersMade'] !== null) {
            $object->setTwoPointersMade($data['TwoPointersMade']);
        }
        elseif (\array_key_exists('TwoPointersMade', $data) && $data['TwoPointersMade'] === null) {
            $object->setTwoPointersMade(null);
        }
        if (\array_key_exists('TwoPointersAttempted', $data) && $data['TwoPointersAttempted'] !== null) {
            $object->setTwoPointersAttempted($data['TwoPointersAttempted']);
        }
        elseif (\array_key_exists('TwoPointersAttempted', $data) && $data['TwoPointersAttempted'] === null) {
            $object->setTwoPointersAttempted(null);
        }
        if (\array_key_exists('TwoPointersPercentage', $data) && $data['TwoPointersPercentage'] !== null) {
            $object->setTwoPointersPercentage($data['TwoPointersPercentage']);
        }
        elseif (\array_key_exists('TwoPointersPercentage', $data) && $data['TwoPointersPercentage'] === null) {
            $object->setTwoPointersPercentage(null);
        }
        if (\array_key_exists('ThreePointersMade', $data) && $data['ThreePointersMade'] !== null) {
            $object->setThreePointersMade($data['ThreePointersMade']);
        }
        elseif (\array_key_exists('ThreePointersMade', $data) && $data['ThreePointersMade'] === null) {
            $object->setThreePointersMade(null);
        }
        if (\array_key_exists('ThreePointersAttempted', $data) && $data['ThreePointersAttempted'] !== null) {
            $object->setThreePointersAttempted($data['ThreePointersAttempted']);
        }
        elseif (\array_key_exists('ThreePointersAttempted', $data) && $data['ThreePointersAttempted'] === null) {
            $object->setThreePointersAttempted(null);
        }
        if (\array_key_exists('ThreePointersPercentage', $data) && $data['ThreePointersPercentage'] !== null) {
            $object->setThreePointersPercentage($data['ThreePointersPercentage']);
        }
        elseif (\array_key_exists('ThreePointersPercentage', $data) && $data['ThreePointersPercentage'] === null) {
            $object->setThreePointersPercentage(null);
        }
        if (\array_key_exists('FreeThrowsMade', $data) && $data['FreeThrowsMade'] !== null) {
            $object->setFreeThrowsMade($data['FreeThrowsMade']);
        }
        elseif (\array_key_exists('FreeThrowsMade', $data) && $data['FreeThrowsMade'] === null) {
            $object->setFreeThrowsMade(null);
        }
        if (\array_key_exists('FreeThrowsAttempted', $data) && $data['FreeThrowsAttempted'] !== null) {
            $object->setFreeThrowsAttempted($data['FreeThrowsAttempted']);
        }
        elseif (\array_key_exists('FreeThrowsAttempted', $data) && $data['FreeThrowsAttempted'] === null) {
            $object->setFreeThrowsAttempted(null);
        }
        if (\array_key_exists('FreeThrowsPercentage', $data) && $data['FreeThrowsPercentage'] !== null) {
            $object->setFreeThrowsPercentage($data['FreeThrowsPercentage']);
        }
        elseif (\array_key_exists('FreeThrowsPercentage', $data) && $data['FreeThrowsPercentage'] === null) {
            $object->setFreeThrowsPercentage(null);
        }
        if (\array_key_exists('OffensiveRebounds', $data) && $data['OffensiveRebounds'] !== null) {
            $object->setOffensiveRebounds($data['OffensiveRebounds']);
        }
        elseif (\array_key_exists('OffensiveRebounds', $data) && $data['OffensiveRebounds'] === null) {
            $object->setOffensiveRebounds(null);
        }
        if (\array_key_exists('DefensiveRebounds', $data) && $data['DefensiveRebounds'] !== null) {
            $object->setDefensiveRebounds($data['DefensiveRebounds']);
        }
        elseif (\array_key_exists('DefensiveRebounds', $data) && $data['DefensiveRebounds'] === null) {
            $object->setDefensiveRebounds(null);
        }
        if (\array_key_exists('Rebounds', $data) && $data['Rebounds'] !== null) {
            $object->setRebounds($data['Rebounds']);
        }
        elseif (\array_key_exists('Rebounds', $data) && $data['Rebounds'] === null) {
            $object->setRebounds(null);
        }
        if (\array_key_exists('OffensiveReboundsPercentage', $data) && $data['OffensiveReboundsPercentage'] !== null) {
            $object->setOffensiveReboundsPercentage($data['OffensiveReboundsPercentage']);
        }
        elseif (\array_key_exists('OffensiveReboundsPercentage', $data) && $data['OffensiveReboundsPercentage'] === null) {
            $object->setOffensiveReboundsPercentage(null);
        }
        if (\array_key_exists('DefensiveReboundsPercentage', $data) && $data['DefensiveReboundsPercentage'] !== null) {
            $object->setDefensiveReboundsPercentage($data['DefensiveReboundsPercentage']);
        }
        elseif (\array_key_exists('DefensiveReboundsPercentage', $data) && $data['DefensiveReboundsPercentage'] === null) {
            $object->setDefensiveReboundsPercentage(null);
        }
        if (\array_key_exists('TotalReboundsPercentage', $data) && $data['TotalReboundsPercentage'] !== null) {
            $object->setTotalReboundsPercentage($data['TotalReboundsPercentage']);
        }
        elseif (\array_key_exists('TotalReboundsPercentage', $data) && $data['TotalReboundsPercentage'] === null) {
            $object->setTotalReboundsPercentage(null);
        }
        if (\array_key_exists('Assists', $data) && $data['Assists'] !== null) {
            $object->setAssists($data['Assists']);
        }
        elseif (\array_key_exists('Assists', $data) && $data['Assists'] === null) {
            $object->setAssists(null);
        }
        if (\array_key_exists('Steals', $data) && $data['Steals'] !== null) {
            $object->setSteals($data['Steals']);
        }
        elseif (\array_key_exists('Steals', $data) && $data['Steals'] === null) {
            $object->setSteals(null);
        }
        if (\array_key_exists('BlockedShots', $data) && $data['BlockedShots'] !== null) {
            $object->setBlockedShots($data['BlockedShots']);
        }
        elseif (\array_key_exists('BlockedShots', $data) && $data['BlockedShots'] === null) {
            $object->setBlockedShots(null);
        }
        if (\array_key_exists('Turnovers', $data) && $data['Turnovers'] !== null) {
            $object->setTurnovers($data['Turnovers']);
        }
        elseif (\array_key_exists('Turnovers', $data) && $data['Turnovers'] === null) {
            $object->setTurnovers(null);
        }
        if (\array_key_exists('PersonalFouls', $data) && $data['PersonalFouls'] !== null) {
            $object->setPersonalFouls($data['PersonalFouls']);
        }
        elseif (\array_key_exists('PersonalFouls', $data) && $data['PersonalFouls'] === null) {
            $object->setPersonalFouls(null);
        }
        if (\array_key_exists('Points', $data) && $data['Points'] !== null) {
            $object->setPoints($data['Points']);
        }
        elseif (\array_key_exists('Points', $data) && $data['Points'] === null) {
            $object->setPoints(null);
        }
        if (\array_key_exists('TrueShootingAttempts', $data) && $data['TrueShootingAttempts'] !== null) {
            $object->setTrueShootingAttempts($data['TrueShootingAttempts']);
        }
        elseif (\array_key_exists('TrueShootingAttempts', $data) && $data['TrueShootingAttempts'] === null) {
            $object->setTrueShootingAttempts(null);
        }
        if (\array_key_exists('TrueShootingPercentage', $data) && $data['TrueShootingPercentage'] !== null) {
            $object->setTrueShootingPercentage($data['TrueShootingPercentage']);
        }
        elseif (\array_key_exists('TrueShootingPercentage', $data) && $data['TrueShootingPercentage'] === null) {
            $object->setTrueShootingPercentage(null);
        }
        if (\array_key_exists('PlayerEfficiencyRating', $data) && $data['PlayerEfficiencyRating'] !== null) {
            $object->setPlayerEfficiencyRating($data['PlayerEfficiencyRating']);
        }
        elseif (\array_key_exists('PlayerEfficiencyRating', $data) && $data['PlayerEfficiencyRating'] === null) {
            $object->setPlayerEfficiencyRating(null);
        }
        if (\array_key_exists('AssistsPercentage', $data) && $data['AssistsPercentage'] !== null) {
            $object->setAssistsPercentage($data['AssistsPercentage']);
        }
        elseif (\array_key_exists('AssistsPercentage', $data) && $data['AssistsPercentage'] === null) {
            $object->setAssistsPercentage(null);
        }
        if (\array_key_exists('StealsPercentage', $data) && $data['StealsPercentage'] !== null) {
            $object->setStealsPercentage($data['StealsPercentage']);
        }
        elseif (\array_key_exists('StealsPercentage', $data) && $data['StealsPercentage'] === null) {
            $object->setStealsPercentage(null);
        }
        if (\array_key_exists('BlocksPercentage', $data) && $data['BlocksPercentage'] !== null) {
            $object->setBlocksPercentage($data['BlocksPercentage']);
        }
        elseif (\array_key_exists('BlocksPercentage', $data) && $data['BlocksPercentage'] === null) {
            $object->setBlocksPercentage(null);
        }
        if (\array_key_exists('TurnOversPercentage', $data) && $data['TurnOversPercentage'] !== null) {
            $object->setTurnOversPercentage($data['TurnOversPercentage']);
        }
        elseif (\array_key_exists('TurnOversPercentage', $data) && $data['TurnOversPercentage'] === null) {
            $object->setTurnOversPercentage(null);
        }
        if (\array_key_exists('UsageRatePercentage', $data) && $data['UsageRatePercentage'] !== null) {
            $object->setUsageRatePercentage($data['UsageRatePercentage']);
        }
        elseif (\array_key_exists('UsageRatePercentage', $data) && $data['UsageRatePercentage'] === null) {
            $object->setUsageRatePercentage(null);
        }
        if (\array_key_exists('FantasyPointsFanDuel', $data) && $data['FantasyPointsFanDuel'] !== null) {
            $object->setFantasyPointsFanDuel($data['FantasyPointsFanDuel']);
        }
        elseif (\array_key_exists('FantasyPointsFanDuel', $data) && $data['FantasyPointsFanDuel'] === null) {
            $object->setFantasyPointsFanDuel(null);
        }
        if (\array_key_exists('FantasyPointsDraftKings', $data) && $data['FantasyPointsDraftKings'] !== null) {
            $object->setFantasyPointsDraftKings($data['FantasyPointsDraftKings']);
        }
        elseif (\array_key_exists('FantasyPointsDraftKings', $data) && $data['FantasyPointsDraftKings'] === null) {
            $object->setFantasyPointsDraftKings(null);
        }
        if (\array_key_exists('FantasyPointsYahoo', $data) && $data['FantasyPointsYahoo'] !== null) {
            $object->setFantasyPointsYahoo($data['FantasyPointsYahoo']);
        }
        elseif (\array_key_exists('FantasyPointsYahoo', $data) && $data['FantasyPointsYahoo'] === null) {
            $object->setFantasyPointsYahoo(null);
        }
        if (\array_key_exists('PlusMinus', $data) && $data['PlusMinus'] !== null) {
            $object->setPlusMinus($data['PlusMinus']);
        }
        elseif (\array_key_exists('PlusMinus', $data) && $data['PlusMinus'] === null) {
            $object->setPlusMinus(null);
        }
        if (\array_key_exists('DoubleDoubles', $data) && $data['DoubleDoubles'] !== null) {
            $object->setDoubleDoubles($data['DoubleDoubles']);
        }
        elseif (\array_key_exists('DoubleDoubles', $data) && $data['DoubleDoubles'] === null) {
            $object->setDoubleDoubles(null);
        }
        if (\array_key_exists('TripleDoubles', $data) && $data['TripleDoubles'] !== null) {
            $object->setTripleDoubles($data['TripleDoubles']);
        }
        elseif (\array_key_exists('TripleDoubles', $data) && $data['TripleDoubles'] === null) {
            $object->setTripleDoubles(null);
        }
        if (\array_key_exists('FantasyPointsFantasyDraft', $data) && $data['FantasyPointsFantasyDraft'] !== null) {
            $object->setFantasyPointsFantasyDraft($data['FantasyPointsFantasyDraft']);
        }
        elseif (\array_key_exists('FantasyPointsFantasyDraft', $data) && $data['FantasyPointsFantasyDraft'] === null) {
            $object->setFantasyPointsFantasyDraft(null);
        }
        if (\array_key_exists('IsClosed', $data)) {
            $object->setIsClosed($data['IsClosed']);
        }
        if (\array_key_exists('LineupConfirmed', $data) && $data['LineupConfirmed'] !== null) {
            $object->setLineupConfirmed($data['LineupConfirmed']);
        }
        elseif (\array_key_exists('LineupConfirmed', $data) && $data['LineupConfirmed'] === null) {
            $object->setLineupConfirmed(null);
        }
        if (\array_key_exists('LineupStatus', $data) && $data['LineupStatus'] !== null) {
            $object->setLineupStatus($data['LineupStatus']);
        }
        elseif (\array_key_exists('LineupStatus', $data) && $data['LineupStatus'] === null) {
            $object->setLineupStatus(null);
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
        if (null !== $object->getWins()) {
            $data['Wins'] = $object->getWins();
        }
        if (null !== $object->getLosses()) {
            $data['Losses'] = $object->getLosses();
        }
        if (null !== $object->getOpponentPosition()) {
            $data['OpponentPosition'] = $object->getOpponentPosition();
        }
        if (null !== $object->getPossessions()) {
            $data['Possessions'] = $object->getPossessions();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        if (null !== $object->getOpponentStat()) {
            $data['OpponentStat'] = $this->normalizer->normalize($object->getOpponentStat(), 'json', $context);
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
        if (null !== $object->getSeconds()) {
            $data['Seconds'] = $object->getSeconds();
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
        if (null !== $object->getPlusMinus()) {
            $data['PlusMinus'] = $object->getPlusMinus();
        }
        if (null !== $object->getDoubleDoubles()) {
            $data['DoubleDoubles'] = $object->getDoubleDoubles();
        }
        if (null !== $object->getTripleDoubles()) {
            $data['TripleDoubles'] = $object->getTripleDoubles();
        }
        if (null !== $object->getFantasyPointsFantasyDraft()) {
            $data['FantasyPointsFantasyDraft'] = $object->getFantasyPointsFantasyDraft();
        }
        if (null !== $object->getIsClosed()) {
            $data['IsClosed'] = $object->getIsClosed();
        }
        if (null !== $object->getLineupConfirmed()) {
            $data['LineupConfirmed'] = $object->getLineupConfirmed();
        }
        if (null !== $object->getLineupStatus()) {
            $data['LineupStatus'] = $object->getLineupStatus();
        }
        return $data;
    }
}