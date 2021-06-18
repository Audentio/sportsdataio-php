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
class PlayerGameProjectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\MLB\\Model\\PlayerGameProjection';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\MLB\\Model\\PlayerGameProjection';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\MLB\Model\PlayerGameProjection();
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
        if (\array_key_exists('PlayerID', $data) && $data['PlayerID'] !== null) {
            $object->setPlayerID($data['PlayerID']);
        }
        elseif (\array_key_exists('PlayerID', $data) && $data['PlayerID'] === null) {
            $object->setPlayerID(null);
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
        if (\array_key_exists('Position', $data) && $data['Position'] !== null) {
            $object->setPosition($data['Position']);
        }
        elseif (\array_key_exists('Position', $data) && $data['Position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('PositionCategory', $data) && $data['PositionCategory'] !== null) {
            $object->setPositionCategory($data['PositionCategory']);
        }
        elseif (\array_key_exists('PositionCategory', $data) && $data['PositionCategory'] === null) {
            $object->setPositionCategory(null);
        }
        if (\array_key_exists('Started', $data) && $data['Started'] !== null) {
            $object->setStarted($data['Started']);
        }
        elseif (\array_key_exists('Started', $data) && $data['Started'] === null) {
            $object->setStarted(null);
        }
        if (\array_key_exists('BattingOrder', $data) && $data['BattingOrder'] !== null) {
            $object->setBattingOrder($data['BattingOrder']);
        }
        elseif (\array_key_exists('BattingOrder', $data) && $data['BattingOrder'] === null) {
            $object->setBattingOrder(null);
        }
        if (\array_key_exists('FanDuelSalary', $data) && $data['FanDuelSalary'] !== null) {
            $object->setFanDuelSalary($data['FanDuelSalary']);
        }
        elseif (\array_key_exists('FanDuelSalary', $data) && $data['FanDuelSalary'] === null) {
            $object->setFanDuelSalary(null);
        }
        if (\array_key_exists('DraftKingsSalary', $data) && $data['DraftKingsSalary'] !== null) {
            $object->setDraftKingsSalary($data['DraftKingsSalary']);
        }
        elseif (\array_key_exists('DraftKingsSalary', $data) && $data['DraftKingsSalary'] === null) {
            $object->setDraftKingsSalary(null);
        }
        if (\array_key_exists('FantasyDataSalary', $data) && $data['FantasyDataSalary'] !== null) {
            $object->setFantasyDataSalary($data['FantasyDataSalary']);
        }
        elseif (\array_key_exists('FantasyDataSalary', $data) && $data['FantasyDataSalary'] === null) {
            $object->setFantasyDataSalary(null);
        }
        if (\array_key_exists('YahooSalary', $data) && $data['YahooSalary'] !== null) {
            $object->setYahooSalary($data['YahooSalary']);
        }
        elseif (\array_key_exists('YahooSalary', $data) && $data['YahooSalary'] === null) {
            $object->setYahooSalary(null);
        }
        if (\array_key_exists('InjuryStatus', $data) && $data['InjuryStatus'] !== null) {
            $object->setInjuryStatus($data['InjuryStatus']);
        }
        elseif (\array_key_exists('InjuryStatus', $data) && $data['InjuryStatus'] === null) {
            $object->setInjuryStatus(null);
        }
        if (\array_key_exists('InjuryBodyPart', $data) && $data['InjuryBodyPart'] !== null) {
            $object->setInjuryBodyPart($data['InjuryBodyPart']);
        }
        elseif (\array_key_exists('InjuryBodyPart', $data) && $data['InjuryBodyPart'] === null) {
            $object->setInjuryBodyPart(null);
        }
        if (\array_key_exists('InjuryStartDate', $data) && $data['InjuryStartDate'] !== null) {
            $object->setInjuryStartDate($data['InjuryStartDate']);
        }
        elseif (\array_key_exists('InjuryStartDate', $data) && $data['InjuryStartDate'] === null) {
            $object->setInjuryStartDate(null);
        }
        if (\array_key_exists('InjuryNotes', $data) && $data['InjuryNotes'] !== null) {
            $object->setInjuryNotes($data['InjuryNotes']);
        }
        elseif (\array_key_exists('InjuryNotes', $data) && $data['InjuryNotes'] === null) {
            $object->setInjuryNotes(null);
        }
        if (\array_key_exists('FanDuelPosition', $data) && $data['FanDuelPosition'] !== null) {
            $object->setFanDuelPosition($data['FanDuelPosition']);
        }
        elseif (\array_key_exists('FanDuelPosition', $data) && $data['FanDuelPosition'] === null) {
            $object->setFanDuelPosition(null);
        }
        if (\array_key_exists('DraftKingsPosition', $data) && $data['DraftKingsPosition'] !== null) {
            $object->setDraftKingsPosition($data['DraftKingsPosition']);
        }
        elseif (\array_key_exists('DraftKingsPosition', $data) && $data['DraftKingsPosition'] === null) {
            $object->setDraftKingsPosition(null);
        }
        if (\array_key_exists('YahooPosition', $data) && $data['YahooPosition'] !== null) {
            $object->setYahooPosition($data['YahooPosition']);
        }
        elseif (\array_key_exists('YahooPosition', $data) && $data['YahooPosition'] === null) {
            $object->setYahooPosition(null);
        }
        if (\array_key_exists('OpponentRank', $data) && $data['OpponentRank'] !== null) {
            $object->setOpponentRank($data['OpponentRank']);
        }
        elseif (\array_key_exists('OpponentRank', $data) && $data['OpponentRank'] === null) {
            $object->setOpponentRank(null);
        }
        if (\array_key_exists('OpponentPositionRank', $data) && $data['OpponentPositionRank'] !== null) {
            $object->setOpponentPositionRank($data['OpponentPositionRank']);
        }
        elseif (\array_key_exists('OpponentPositionRank', $data) && $data['OpponentPositionRank'] === null) {
            $object->setOpponentPositionRank(null);
        }
        if (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] !== null) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        elseif (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] === null) {
            $object->setGlobalTeamID(null);
        }
        if (\array_key_exists('FantasyDraftSalary', $data) && $data['FantasyDraftSalary'] !== null) {
            $object->setFantasyDraftSalary($data['FantasyDraftSalary']);
        }
        elseif (\array_key_exists('FantasyDraftSalary', $data) && $data['FantasyDraftSalary'] === null) {
            $object->setFantasyDraftSalary(null);
        }
        if (\array_key_exists('FantasyDraftPosition', $data) && $data['FantasyDraftPosition'] !== null) {
            $object->setFantasyDraftPosition($data['FantasyDraftPosition']);
        }
        elseif (\array_key_exists('FantasyDraftPosition', $data) && $data['FantasyDraftPosition'] === null) {
            $object->setFantasyDraftPosition(null);
        }
        if (\array_key_exists('GameID', $data) && $data['GameID'] !== null) {
            $object->setGameID($data['GameID']);
        }
        elseif (\array_key_exists('GameID', $data) && $data['GameID'] === null) {
            $object->setGameID(null);
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
        if (\array_key_exists('Day', $data) && $data['Day'] !== null) {
            $object->setDay($data['Day']);
        }
        elseif (\array_key_exists('Day', $data) && $data['Day'] === null) {
            $object->setDay(null);
        }
        if (\array_key_exists('DateTime', $data) && $data['DateTime'] !== null) {
            $object->setDateTime($data['DateTime']);
        }
        elseif (\array_key_exists('DateTime', $data) && $data['DateTime'] === null) {
            $object->setDateTime(null);
        }
        if (\array_key_exists('HomeOrAway', $data) && $data['HomeOrAway'] !== null) {
            $object->setHomeOrAway($data['HomeOrAway']);
        }
        elseif (\array_key_exists('HomeOrAway', $data) && $data['HomeOrAway'] === null) {
            $object->setHomeOrAway(null);
        }
        if (\array_key_exists('IsGameOver', $data)) {
            $object->setIsGameOver($data['IsGameOver']);
        }
        if (\array_key_exists('GlobalGameID', $data) && $data['GlobalGameID'] !== null) {
            $object->setGlobalGameID($data['GlobalGameID']);
        }
        elseif (\array_key_exists('GlobalGameID', $data) && $data['GlobalGameID'] === null) {
            $object->setGlobalGameID(null);
        }
        if (\array_key_exists('GlobalOpponentID', $data) && $data['GlobalOpponentID'] !== null) {
            $object->setGlobalOpponentID($data['GlobalOpponentID']);
        }
        elseif (\array_key_exists('GlobalOpponentID', $data) && $data['GlobalOpponentID'] === null) {
            $object->setGlobalOpponentID(null);
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
        if (\array_key_exists('AtBats', $data) && $data['AtBats'] !== null) {
            $object->setAtBats($data['AtBats']);
        }
        elseif (\array_key_exists('AtBats', $data) && $data['AtBats'] === null) {
            $object->setAtBats(null);
        }
        if (\array_key_exists('Runs', $data) && $data['Runs'] !== null) {
            $object->setRuns($data['Runs']);
        }
        elseif (\array_key_exists('Runs', $data) && $data['Runs'] === null) {
            $object->setRuns(null);
        }
        if (\array_key_exists('Hits', $data) && $data['Hits'] !== null) {
            $object->setHits($data['Hits']);
        }
        elseif (\array_key_exists('Hits', $data) && $data['Hits'] === null) {
            $object->setHits(null);
        }
        if (\array_key_exists('Singles', $data) && $data['Singles'] !== null) {
            $object->setSingles($data['Singles']);
        }
        elseif (\array_key_exists('Singles', $data) && $data['Singles'] === null) {
            $object->setSingles(null);
        }
        if (\array_key_exists('Doubles', $data) && $data['Doubles'] !== null) {
            $object->setDoubles($data['Doubles']);
        }
        elseif (\array_key_exists('Doubles', $data) && $data['Doubles'] === null) {
            $object->setDoubles(null);
        }
        if (\array_key_exists('Triples', $data) && $data['Triples'] !== null) {
            $object->setTriples($data['Triples']);
        }
        elseif (\array_key_exists('Triples', $data) && $data['Triples'] === null) {
            $object->setTriples(null);
        }
        if (\array_key_exists('HomeRuns', $data) && $data['HomeRuns'] !== null) {
            $object->setHomeRuns($data['HomeRuns']);
        }
        elseif (\array_key_exists('HomeRuns', $data) && $data['HomeRuns'] === null) {
            $object->setHomeRuns(null);
        }
        if (\array_key_exists('RunsBattedIn', $data) && $data['RunsBattedIn'] !== null) {
            $object->setRunsBattedIn($data['RunsBattedIn']);
        }
        elseif (\array_key_exists('RunsBattedIn', $data) && $data['RunsBattedIn'] === null) {
            $object->setRunsBattedIn(null);
        }
        if (\array_key_exists('BattingAverage', $data) && $data['BattingAverage'] !== null) {
            $object->setBattingAverage($data['BattingAverage']);
        }
        elseif (\array_key_exists('BattingAverage', $data) && $data['BattingAverage'] === null) {
            $object->setBattingAverage(null);
        }
        if (\array_key_exists('Outs', $data) && $data['Outs'] !== null) {
            $object->setOuts($data['Outs']);
        }
        elseif (\array_key_exists('Outs', $data) && $data['Outs'] === null) {
            $object->setOuts(null);
        }
        if (\array_key_exists('Strikeouts', $data) && $data['Strikeouts'] !== null) {
            $object->setStrikeouts($data['Strikeouts']);
        }
        elseif (\array_key_exists('Strikeouts', $data) && $data['Strikeouts'] === null) {
            $object->setStrikeouts(null);
        }
        if (\array_key_exists('Walks', $data) && $data['Walks'] !== null) {
            $object->setWalks($data['Walks']);
        }
        elseif (\array_key_exists('Walks', $data) && $data['Walks'] === null) {
            $object->setWalks(null);
        }
        if (\array_key_exists('HitByPitch', $data) && $data['HitByPitch'] !== null) {
            $object->setHitByPitch($data['HitByPitch']);
        }
        elseif (\array_key_exists('HitByPitch', $data) && $data['HitByPitch'] === null) {
            $object->setHitByPitch(null);
        }
        if (\array_key_exists('Sacrifices', $data) && $data['Sacrifices'] !== null) {
            $object->setSacrifices($data['Sacrifices']);
        }
        elseif (\array_key_exists('Sacrifices', $data) && $data['Sacrifices'] === null) {
            $object->setSacrifices(null);
        }
        if (\array_key_exists('SacrificeFlies', $data) && $data['SacrificeFlies'] !== null) {
            $object->setSacrificeFlies($data['SacrificeFlies']);
        }
        elseif (\array_key_exists('SacrificeFlies', $data) && $data['SacrificeFlies'] === null) {
            $object->setSacrificeFlies(null);
        }
        if (\array_key_exists('GroundIntoDoublePlay', $data) && $data['GroundIntoDoublePlay'] !== null) {
            $object->setGroundIntoDoublePlay($data['GroundIntoDoublePlay']);
        }
        elseif (\array_key_exists('GroundIntoDoublePlay', $data) && $data['GroundIntoDoublePlay'] === null) {
            $object->setGroundIntoDoublePlay(null);
        }
        if (\array_key_exists('StolenBases', $data) && $data['StolenBases'] !== null) {
            $object->setStolenBases($data['StolenBases']);
        }
        elseif (\array_key_exists('StolenBases', $data) && $data['StolenBases'] === null) {
            $object->setStolenBases(null);
        }
        if (\array_key_exists('CaughtStealing', $data) && $data['CaughtStealing'] !== null) {
            $object->setCaughtStealing($data['CaughtStealing']);
        }
        elseif (\array_key_exists('CaughtStealing', $data) && $data['CaughtStealing'] === null) {
            $object->setCaughtStealing(null);
        }
        if (\array_key_exists('PitchesSeen', $data) && $data['PitchesSeen'] !== null) {
            $object->setPitchesSeen($data['PitchesSeen']);
        }
        elseif (\array_key_exists('PitchesSeen', $data) && $data['PitchesSeen'] === null) {
            $object->setPitchesSeen(null);
        }
        if (\array_key_exists('OnBasePercentage', $data) && $data['OnBasePercentage'] !== null) {
            $object->setOnBasePercentage($data['OnBasePercentage']);
        }
        elseif (\array_key_exists('OnBasePercentage', $data) && $data['OnBasePercentage'] === null) {
            $object->setOnBasePercentage(null);
        }
        if (\array_key_exists('SluggingPercentage', $data) && $data['SluggingPercentage'] !== null) {
            $object->setSluggingPercentage($data['SluggingPercentage']);
        }
        elseif (\array_key_exists('SluggingPercentage', $data) && $data['SluggingPercentage'] === null) {
            $object->setSluggingPercentage(null);
        }
        if (\array_key_exists('OnBasePlusSlugging', $data) && $data['OnBasePlusSlugging'] !== null) {
            $object->setOnBasePlusSlugging($data['OnBasePlusSlugging']);
        }
        elseif (\array_key_exists('OnBasePlusSlugging', $data) && $data['OnBasePlusSlugging'] === null) {
            $object->setOnBasePlusSlugging(null);
        }
        if (\array_key_exists('Errors', $data) && $data['Errors'] !== null) {
            $object->setErrors($data['Errors']);
        }
        elseif (\array_key_exists('Errors', $data) && $data['Errors'] === null) {
            $object->setErrors(null);
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
        if (\array_key_exists('Saves', $data) && $data['Saves'] !== null) {
            $object->setSaves($data['Saves']);
        }
        elseif (\array_key_exists('Saves', $data) && $data['Saves'] === null) {
            $object->setSaves(null);
        }
        if (\array_key_exists('InningsPitchedDecimal', $data) && $data['InningsPitchedDecimal'] !== null) {
            $object->setInningsPitchedDecimal($data['InningsPitchedDecimal']);
        }
        elseif (\array_key_exists('InningsPitchedDecimal', $data) && $data['InningsPitchedDecimal'] === null) {
            $object->setInningsPitchedDecimal(null);
        }
        if (\array_key_exists('TotalOutsPitched', $data) && $data['TotalOutsPitched'] !== null) {
            $object->setTotalOutsPitched($data['TotalOutsPitched']);
        }
        elseif (\array_key_exists('TotalOutsPitched', $data) && $data['TotalOutsPitched'] === null) {
            $object->setTotalOutsPitched(null);
        }
        if (\array_key_exists('InningsPitchedFull', $data) && $data['InningsPitchedFull'] !== null) {
            $object->setInningsPitchedFull($data['InningsPitchedFull']);
        }
        elseif (\array_key_exists('InningsPitchedFull', $data) && $data['InningsPitchedFull'] === null) {
            $object->setInningsPitchedFull(null);
        }
        if (\array_key_exists('InningsPitchedOuts', $data) && $data['InningsPitchedOuts'] !== null) {
            $object->setInningsPitchedOuts($data['InningsPitchedOuts']);
        }
        elseif (\array_key_exists('InningsPitchedOuts', $data) && $data['InningsPitchedOuts'] === null) {
            $object->setInningsPitchedOuts(null);
        }
        if (\array_key_exists('EarnedRunAverage', $data) && $data['EarnedRunAverage'] !== null) {
            $object->setEarnedRunAverage($data['EarnedRunAverage']);
        }
        elseif (\array_key_exists('EarnedRunAverage', $data) && $data['EarnedRunAverage'] === null) {
            $object->setEarnedRunAverage(null);
        }
        if (\array_key_exists('PitchingHits', $data) && $data['PitchingHits'] !== null) {
            $object->setPitchingHits($data['PitchingHits']);
        }
        elseif (\array_key_exists('PitchingHits', $data) && $data['PitchingHits'] === null) {
            $object->setPitchingHits(null);
        }
        if (\array_key_exists('PitchingRuns', $data) && $data['PitchingRuns'] !== null) {
            $object->setPitchingRuns($data['PitchingRuns']);
        }
        elseif (\array_key_exists('PitchingRuns', $data) && $data['PitchingRuns'] === null) {
            $object->setPitchingRuns(null);
        }
        if (\array_key_exists('PitchingEarnedRuns', $data) && $data['PitchingEarnedRuns'] !== null) {
            $object->setPitchingEarnedRuns($data['PitchingEarnedRuns']);
        }
        elseif (\array_key_exists('PitchingEarnedRuns', $data) && $data['PitchingEarnedRuns'] === null) {
            $object->setPitchingEarnedRuns(null);
        }
        if (\array_key_exists('PitchingWalks', $data) && $data['PitchingWalks'] !== null) {
            $object->setPitchingWalks($data['PitchingWalks']);
        }
        elseif (\array_key_exists('PitchingWalks', $data) && $data['PitchingWalks'] === null) {
            $object->setPitchingWalks(null);
        }
        if (\array_key_exists('PitchingStrikeouts', $data) && $data['PitchingStrikeouts'] !== null) {
            $object->setPitchingStrikeouts($data['PitchingStrikeouts']);
        }
        elseif (\array_key_exists('PitchingStrikeouts', $data) && $data['PitchingStrikeouts'] === null) {
            $object->setPitchingStrikeouts(null);
        }
        if (\array_key_exists('PitchingHomeRuns', $data) && $data['PitchingHomeRuns'] !== null) {
            $object->setPitchingHomeRuns($data['PitchingHomeRuns']);
        }
        elseif (\array_key_exists('PitchingHomeRuns', $data) && $data['PitchingHomeRuns'] === null) {
            $object->setPitchingHomeRuns(null);
        }
        if (\array_key_exists('PitchesThrown', $data) && $data['PitchesThrown'] !== null) {
            $object->setPitchesThrown($data['PitchesThrown']);
        }
        elseif (\array_key_exists('PitchesThrown', $data) && $data['PitchesThrown'] === null) {
            $object->setPitchesThrown(null);
        }
        if (\array_key_exists('PitchesThrownStrikes', $data) && $data['PitchesThrownStrikes'] !== null) {
            $object->setPitchesThrownStrikes($data['PitchesThrownStrikes']);
        }
        elseif (\array_key_exists('PitchesThrownStrikes', $data) && $data['PitchesThrownStrikes'] === null) {
            $object->setPitchesThrownStrikes(null);
        }
        if (\array_key_exists('WalksHitsPerInningsPitched', $data) && $data['WalksHitsPerInningsPitched'] !== null) {
            $object->setWalksHitsPerInningsPitched($data['WalksHitsPerInningsPitched']);
        }
        elseif (\array_key_exists('WalksHitsPerInningsPitched', $data) && $data['WalksHitsPerInningsPitched'] === null) {
            $object->setWalksHitsPerInningsPitched(null);
        }
        if (\array_key_exists('PitchingBattingAverageAgainst', $data) && $data['PitchingBattingAverageAgainst'] !== null) {
            $object->setPitchingBattingAverageAgainst($data['PitchingBattingAverageAgainst']);
        }
        elseif (\array_key_exists('PitchingBattingAverageAgainst', $data) && $data['PitchingBattingAverageAgainst'] === null) {
            $object->setPitchingBattingAverageAgainst(null);
        }
        if (\array_key_exists('GrandSlams', $data) && $data['GrandSlams'] !== null) {
            $object->setGrandSlams($data['GrandSlams']);
        }
        elseif (\array_key_exists('GrandSlams', $data) && $data['GrandSlams'] === null) {
            $object->setGrandSlams(null);
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
        if (\array_key_exists('PlateAppearances', $data) && $data['PlateAppearances'] !== null) {
            $object->setPlateAppearances($data['PlateAppearances']);
        }
        elseif (\array_key_exists('PlateAppearances', $data) && $data['PlateAppearances'] === null) {
            $object->setPlateAppearances(null);
        }
        if (\array_key_exists('TotalBases', $data) && $data['TotalBases'] !== null) {
            $object->setTotalBases($data['TotalBases']);
        }
        elseif (\array_key_exists('TotalBases', $data) && $data['TotalBases'] === null) {
            $object->setTotalBases(null);
        }
        if (\array_key_exists('FlyOuts', $data) && $data['FlyOuts'] !== null) {
            $object->setFlyOuts($data['FlyOuts']);
        }
        elseif (\array_key_exists('FlyOuts', $data) && $data['FlyOuts'] === null) {
            $object->setFlyOuts(null);
        }
        if (\array_key_exists('GroundOuts', $data) && $data['GroundOuts'] !== null) {
            $object->setGroundOuts($data['GroundOuts']);
        }
        elseif (\array_key_exists('GroundOuts', $data) && $data['GroundOuts'] === null) {
            $object->setGroundOuts(null);
        }
        if (\array_key_exists('LineOuts', $data) && $data['LineOuts'] !== null) {
            $object->setLineOuts($data['LineOuts']);
        }
        elseif (\array_key_exists('LineOuts', $data) && $data['LineOuts'] === null) {
            $object->setLineOuts(null);
        }
        if (\array_key_exists('PopOuts', $data) && $data['PopOuts'] !== null) {
            $object->setPopOuts($data['PopOuts']);
        }
        elseif (\array_key_exists('PopOuts', $data) && $data['PopOuts'] === null) {
            $object->setPopOuts(null);
        }
        if (\array_key_exists('IntentionalWalks', $data) && $data['IntentionalWalks'] !== null) {
            $object->setIntentionalWalks($data['IntentionalWalks']);
        }
        elseif (\array_key_exists('IntentionalWalks', $data) && $data['IntentionalWalks'] === null) {
            $object->setIntentionalWalks(null);
        }
        if (\array_key_exists('ReachedOnError', $data) && $data['ReachedOnError'] !== null) {
            $object->setReachedOnError($data['ReachedOnError']);
        }
        elseif (\array_key_exists('ReachedOnError', $data) && $data['ReachedOnError'] === null) {
            $object->setReachedOnError(null);
        }
        if (\array_key_exists('BallsInPlay', $data) && $data['BallsInPlay'] !== null) {
            $object->setBallsInPlay($data['BallsInPlay']);
        }
        elseif (\array_key_exists('BallsInPlay', $data) && $data['BallsInPlay'] === null) {
            $object->setBallsInPlay(null);
        }
        if (\array_key_exists('BattingAverageOnBallsInPlay', $data) && $data['BattingAverageOnBallsInPlay'] !== null) {
            $object->setBattingAverageOnBallsInPlay($data['BattingAverageOnBallsInPlay']);
        }
        elseif (\array_key_exists('BattingAverageOnBallsInPlay', $data) && $data['BattingAverageOnBallsInPlay'] === null) {
            $object->setBattingAverageOnBallsInPlay(null);
        }
        if (\array_key_exists('WeightedOnBasePercentage', $data) && $data['WeightedOnBasePercentage'] !== null) {
            $object->setWeightedOnBasePercentage($data['WeightedOnBasePercentage']);
        }
        elseif (\array_key_exists('WeightedOnBasePercentage', $data) && $data['WeightedOnBasePercentage'] === null) {
            $object->setWeightedOnBasePercentage(null);
        }
        if (\array_key_exists('PitchingSingles', $data) && $data['PitchingSingles'] !== null) {
            $object->setPitchingSingles($data['PitchingSingles']);
        }
        elseif (\array_key_exists('PitchingSingles', $data) && $data['PitchingSingles'] === null) {
            $object->setPitchingSingles(null);
        }
        if (\array_key_exists('PitchingDoubles', $data) && $data['PitchingDoubles'] !== null) {
            $object->setPitchingDoubles($data['PitchingDoubles']);
        }
        elseif (\array_key_exists('PitchingDoubles', $data) && $data['PitchingDoubles'] === null) {
            $object->setPitchingDoubles(null);
        }
        if (\array_key_exists('PitchingTriples', $data) && $data['PitchingTriples'] !== null) {
            $object->setPitchingTriples($data['PitchingTriples']);
        }
        elseif (\array_key_exists('PitchingTriples', $data) && $data['PitchingTriples'] === null) {
            $object->setPitchingTriples(null);
        }
        if (\array_key_exists('PitchingGrandSlams', $data) && $data['PitchingGrandSlams'] !== null) {
            $object->setPitchingGrandSlams($data['PitchingGrandSlams']);
        }
        elseif (\array_key_exists('PitchingGrandSlams', $data) && $data['PitchingGrandSlams'] === null) {
            $object->setPitchingGrandSlams(null);
        }
        if (\array_key_exists('PitchingHitByPitch', $data) && $data['PitchingHitByPitch'] !== null) {
            $object->setPitchingHitByPitch($data['PitchingHitByPitch']);
        }
        elseif (\array_key_exists('PitchingHitByPitch', $data) && $data['PitchingHitByPitch'] === null) {
            $object->setPitchingHitByPitch(null);
        }
        if (\array_key_exists('PitchingSacrifices', $data) && $data['PitchingSacrifices'] !== null) {
            $object->setPitchingSacrifices($data['PitchingSacrifices']);
        }
        elseif (\array_key_exists('PitchingSacrifices', $data) && $data['PitchingSacrifices'] === null) {
            $object->setPitchingSacrifices(null);
        }
        if (\array_key_exists('PitchingSacrificeFlies', $data) && $data['PitchingSacrificeFlies'] !== null) {
            $object->setPitchingSacrificeFlies($data['PitchingSacrificeFlies']);
        }
        elseif (\array_key_exists('PitchingSacrificeFlies', $data) && $data['PitchingSacrificeFlies'] === null) {
            $object->setPitchingSacrificeFlies(null);
        }
        if (\array_key_exists('PitchingGroundIntoDoublePlay', $data) && $data['PitchingGroundIntoDoublePlay'] !== null) {
            $object->setPitchingGroundIntoDoublePlay($data['PitchingGroundIntoDoublePlay']);
        }
        elseif (\array_key_exists('PitchingGroundIntoDoublePlay', $data) && $data['PitchingGroundIntoDoublePlay'] === null) {
            $object->setPitchingGroundIntoDoublePlay(null);
        }
        if (\array_key_exists('PitchingCompleteGames', $data) && $data['PitchingCompleteGames'] !== null) {
            $object->setPitchingCompleteGames($data['PitchingCompleteGames']);
        }
        elseif (\array_key_exists('PitchingCompleteGames', $data) && $data['PitchingCompleteGames'] === null) {
            $object->setPitchingCompleteGames(null);
        }
        if (\array_key_exists('PitchingShutOuts', $data) && $data['PitchingShutOuts'] !== null) {
            $object->setPitchingShutOuts($data['PitchingShutOuts']);
        }
        elseif (\array_key_exists('PitchingShutOuts', $data) && $data['PitchingShutOuts'] === null) {
            $object->setPitchingShutOuts(null);
        }
        if (\array_key_exists('PitchingNoHitters', $data) && $data['PitchingNoHitters'] !== null) {
            $object->setPitchingNoHitters($data['PitchingNoHitters']);
        }
        elseif (\array_key_exists('PitchingNoHitters', $data) && $data['PitchingNoHitters'] === null) {
            $object->setPitchingNoHitters(null);
        }
        if (\array_key_exists('PitchingPerfectGames', $data) && $data['PitchingPerfectGames'] !== null) {
            $object->setPitchingPerfectGames($data['PitchingPerfectGames']);
        }
        elseif (\array_key_exists('PitchingPerfectGames', $data) && $data['PitchingPerfectGames'] === null) {
            $object->setPitchingPerfectGames(null);
        }
        if (\array_key_exists('PitchingPlateAppearances', $data) && $data['PitchingPlateAppearances'] !== null) {
            $object->setPitchingPlateAppearances($data['PitchingPlateAppearances']);
        }
        elseif (\array_key_exists('PitchingPlateAppearances', $data) && $data['PitchingPlateAppearances'] === null) {
            $object->setPitchingPlateAppearances(null);
        }
        if (\array_key_exists('PitchingTotalBases', $data) && $data['PitchingTotalBases'] !== null) {
            $object->setPitchingTotalBases($data['PitchingTotalBases']);
        }
        elseif (\array_key_exists('PitchingTotalBases', $data) && $data['PitchingTotalBases'] === null) {
            $object->setPitchingTotalBases(null);
        }
        if (\array_key_exists('PitchingFlyOuts', $data) && $data['PitchingFlyOuts'] !== null) {
            $object->setPitchingFlyOuts($data['PitchingFlyOuts']);
        }
        elseif (\array_key_exists('PitchingFlyOuts', $data) && $data['PitchingFlyOuts'] === null) {
            $object->setPitchingFlyOuts(null);
        }
        if (\array_key_exists('PitchingGroundOuts', $data) && $data['PitchingGroundOuts'] !== null) {
            $object->setPitchingGroundOuts($data['PitchingGroundOuts']);
        }
        elseif (\array_key_exists('PitchingGroundOuts', $data) && $data['PitchingGroundOuts'] === null) {
            $object->setPitchingGroundOuts(null);
        }
        if (\array_key_exists('PitchingLineOuts', $data) && $data['PitchingLineOuts'] !== null) {
            $object->setPitchingLineOuts($data['PitchingLineOuts']);
        }
        elseif (\array_key_exists('PitchingLineOuts', $data) && $data['PitchingLineOuts'] === null) {
            $object->setPitchingLineOuts(null);
        }
        if (\array_key_exists('PitchingPopOuts', $data) && $data['PitchingPopOuts'] !== null) {
            $object->setPitchingPopOuts($data['PitchingPopOuts']);
        }
        elseif (\array_key_exists('PitchingPopOuts', $data) && $data['PitchingPopOuts'] === null) {
            $object->setPitchingPopOuts(null);
        }
        if (\array_key_exists('PitchingIntentionalWalks', $data) && $data['PitchingIntentionalWalks'] !== null) {
            $object->setPitchingIntentionalWalks($data['PitchingIntentionalWalks']);
        }
        elseif (\array_key_exists('PitchingIntentionalWalks', $data) && $data['PitchingIntentionalWalks'] === null) {
            $object->setPitchingIntentionalWalks(null);
        }
        if (\array_key_exists('PitchingReachedOnError', $data) && $data['PitchingReachedOnError'] !== null) {
            $object->setPitchingReachedOnError($data['PitchingReachedOnError']);
        }
        elseif (\array_key_exists('PitchingReachedOnError', $data) && $data['PitchingReachedOnError'] === null) {
            $object->setPitchingReachedOnError(null);
        }
        if (\array_key_exists('PitchingCatchersInterference', $data) && $data['PitchingCatchersInterference'] !== null) {
            $object->setPitchingCatchersInterference($data['PitchingCatchersInterference']);
        }
        elseif (\array_key_exists('PitchingCatchersInterference', $data) && $data['PitchingCatchersInterference'] === null) {
            $object->setPitchingCatchersInterference(null);
        }
        if (\array_key_exists('PitchingBallsInPlay', $data) && $data['PitchingBallsInPlay'] !== null) {
            $object->setPitchingBallsInPlay($data['PitchingBallsInPlay']);
        }
        elseif (\array_key_exists('PitchingBallsInPlay', $data) && $data['PitchingBallsInPlay'] === null) {
            $object->setPitchingBallsInPlay(null);
        }
        if (\array_key_exists('PitchingOnBasePercentage', $data) && $data['PitchingOnBasePercentage'] !== null) {
            $object->setPitchingOnBasePercentage($data['PitchingOnBasePercentage']);
        }
        elseif (\array_key_exists('PitchingOnBasePercentage', $data) && $data['PitchingOnBasePercentage'] === null) {
            $object->setPitchingOnBasePercentage(null);
        }
        if (\array_key_exists('PitchingSluggingPercentage', $data) && $data['PitchingSluggingPercentage'] !== null) {
            $object->setPitchingSluggingPercentage($data['PitchingSluggingPercentage']);
        }
        elseif (\array_key_exists('PitchingSluggingPercentage', $data) && $data['PitchingSluggingPercentage'] === null) {
            $object->setPitchingSluggingPercentage(null);
        }
        if (\array_key_exists('PitchingOnBasePlusSlugging', $data) && $data['PitchingOnBasePlusSlugging'] !== null) {
            $object->setPitchingOnBasePlusSlugging($data['PitchingOnBasePlusSlugging']);
        }
        elseif (\array_key_exists('PitchingOnBasePlusSlugging', $data) && $data['PitchingOnBasePlusSlugging'] === null) {
            $object->setPitchingOnBasePlusSlugging(null);
        }
        if (\array_key_exists('PitchingStrikeoutsPerNineInnings', $data) && $data['PitchingStrikeoutsPerNineInnings'] !== null) {
            $object->setPitchingStrikeoutsPerNineInnings($data['PitchingStrikeoutsPerNineInnings']);
        }
        elseif (\array_key_exists('PitchingStrikeoutsPerNineInnings', $data) && $data['PitchingStrikeoutsPerNineInnings'] === null) {
            $object->setPitchingStrikeoutsPerNineInnings(null);
        }
        if (\array_key_exists('PitchingWalksPerNineInnings', $data) && $data['PitchingWalksPerNineInnings'] !== null) {
            $object->setPitchingWalksPerNineInnings($data['PitchingWalksPerNineInnings']);
        }
        elseif (\array_key_exists('PitchingWalksPerNineInnings', $data) && $data['PitchingWalksPerNineInnings'] === null) {
            $object->setPitchingWalksPerNineInnings(null);
        }
        if (\array_key_exists('PitchingBattingAverageOnBallsInPlay', $data) && $data['PitchingBattingAverageOnBallsInPlay'] !== null) {
            $object->setPitchingBattingAverageOnBallsInPlay($data['PitchingBattingAverageOnBallsInPlay']);
        }
        elseif (\array_key_exists('PitchingBattingAverageOnBallsInPlay', $data) && $data['PitchingBattingAverageOnBallsInPlay'] === null) {
            $object->setPitchingBattingAverageOnBallsInPlay(null);
        }
        if (\array_key_exists('PitchingWeightedOnBasePercentage', $data) && $data['PitchingWeightedOnBasePercentage'] !== null) {
            $object->setPitchingWeightedOnBasePercentage($data['PitchingWeightedOnBasePercentage']);
        }
        elseif (\array_key_exists('PitchingWeightedOnBasePercentage', $data) && $data['PitchingWeightedOnBasePercentage'] === null) {
            $object->setPitchingWeightedOnBasePercentage(null);
        }
        if (\array_key_exists('DoublePlays', $data) && $data['DoublePlays'] !== null) {
            $object->setDoublePlays($data['DoublePlays']);
        }
        elseif (\array_key_exists('DoublePlays', $data) && $data['DoublePlays'] === null) {
            $object->setDoublePlays(null);
        }
        if (\array_key_exists('PitchingDoublePlays', $data) && $data['PitchingDoublePlays'] !== null) {
            $object->setPitchingDoublePlays($data['PitchingDoublePlays']);
        }
        elseif (\array_key_exists('PitchingDoublePlays', $data) && $data['PitchingDoublePlays'] === null) {
            $object->setPitchingDoublePlays(null);
        }
        if (\array_key_exists('BattingOrderConfirmed', $data) && $data['BattingOrderConfirmed'] !== null) {
            $object->setBattingOrderConfirmed($data['BattingOrderConfirmed']);
        }
        elseif (\array_key_exists('BattingOrderConfirmed', $data) && $data['BattingOrderConfirmed'] === null) {
            $object->setBattingOrderConfirmed(null);
        }
        if (\array_key_exists('IsolatedPower', $data) && $data['IsolatedPower'] !== null) {
            $object->setIsolatedPower($data['IsolatedPower']);
        }
        elseif (\array_key_exists('IsolatedPower', $data) && $data['IsolatedPower'] === null) {
            $object->setIsolatedPower(null);
        }
        if (\array_key_exists('FieldingIndependentPitching', $data) && $data['FieldingIndependentPitching'] !== null) {
            $object->setFieldingIndependentPitching($data['FieldingIndependentPitching']);
        }
        elseif (\array_key_exists('FieldingIndependentPitching', $data) && $data['FieldingIndependentPitching'] === null) {
            $object->setFieldingIndependentPitching(null);
        }
        if (\array_key_exists('PitchingQualityStarts', $data) && $data['PitchingQualityStarts'] !== null) {
            $object->setPitchingQualityStarts($data['PitchingQualityStarts']);
        }
        elseif (\array_key_exists('PitchingQualityStarts', $data) && $data['PitchingQualityStarts'] === null) {
            $object->setPitchingQualityStarts(null);
        }
        if (\array_key_exists('PitchingInningStarted', $data) && $data['PitchingInningStarted'] !== null) {
            $object->setPitchingInningStarted($data['PitchingInningStarted']);
        }
        elseif (\array_key_exists('PitchingInningStarted', $data) && $data['PitchingInningStarted'] === null) {
            $object->setPitchingInningStarted(null);
        }
        if (\array_key_exists('LeftOnBase', $data) && $data['LeftOnBase'] !== null) {
            $object->setLeftOnBase($data['LeftOnBase']);
        }
        elseif (\array_key_exists('LeftOnBase', $data) && $data['LeftOnBase'] === null) {
            $object->setLeftOnBase(null);
        }
        if (\array_key_exists('PitchingHolds', $data) && $data['PitchingHolds'] !== null) {
            $object->setPitchingHolds($data['PitchingHolds']);
        }
        elseif (\array_key_exists('PitchingHolds', $data) && $data['PitchingHolds'] === null) {
            $object->setPitchingHolds(null);
        }
        if (\array_key_exists('PitchingBlownSaves', $data) && $data['PitchingBlownSaves'] !== null) {
            $object->setPitchingBlownSaves($data['PitchingBlownSaves']);
        }
        elseif (\array_key_exists('PitchingBlownSaves', $data) && $data['PitchingBlownSaves'] === null) {
            $object->setPitchingBlownSaves(null);
        }
        if (\array_key_exists('SubstituteBattingOrder', $data) && $data['SubstituteBattingOrder'] !== null) {
            $object->setSubstituteBattingOrder($data['SubstituteBattingOrder']);
        }
        elseif (\array_key_exists('SubstituteBattingOrder', $data) && $data['SubstituteBattingOrder'] === null) {
            $object->setSubstituteBattingOrder(null);
        }
        if (\array_key_exists('SubstituteBattingOrderSequence', $data) && $data['SubstituteBattingOrderSequence'] !== null) {
            $object->setSubstituteBattingOrderSequence($data['SubstituteBattingOrderSequence']);
        }
        elseif (\array_key_exists('SubstituteBattingOrderSequence', $data) && $data['SubstituteBattingOrderSequence'] === null) {
            $object->setSubstituteBattingOrderSequence(null);
        }
        if (\array_key_exists('FantasyPointsFantasyDraft', $data) && $data['FantasyPointsFantasyDraft'] !== null) {
            $object->setFantasyPointsFantasyDraft($data['FantasyPointsFantasyDraft']);
        }
        elseif (\array_key_exists('FantasyPointsFantasyDraft', $data) && $data['FantasyPointsFantasyDraft'] === null) {
            $object->setFantasyPointsFantasyDraft(null);
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
        if (null !== $object->getPositionCategory()) {
            $data['PositionCategory'] = $object->getPositionCategory();
        }
        if (null !== $object->getStarted()) {
            $data['Started'] = $object->getStarted();
        }
        if (null !== $object->getBattingOrder()) {
            $data['BattingOrder'] = $object->getBattingOrder();
        }
        if (null !== $object->getFanDuelSalary()) {
            $data['FanDuelSalary'] = $object->getFanDuelSalary();
        }
        if (null !== $object->getDraftKingsSalary()) {
            $data['DraftKingsSalary'] = $object->getDraftKingsSalary();
        }
        if (null !== $object->getFantasyDataSalary()) {
            $data['FantasyDataSalary'] = $object->getFantasyDataSalary();
        }
        if (null !== $object->getYahooSalary()) {
            $data['YahooSalary'] = $object->getYahooSalary();
        }
        if (null !== $object->getInjuryStatus()) {
            $data['InjuryStatus'] = $object->getInjuryStatus();
        }
        if (null !== $object->getInjuryBodyPart()) {
            $data['InjuryBodyPart'] = $object->getInjuryBodyPart();
        }
        if (null !== $object->getInjuryStartDate()) {
            $data['InjuryStartDate'] = $object->getInjuryStartDate();
        }
        if (null !== $object->getInjuryNotes()) {
            $data['InjuryNotes'] = $object->getInjuryNotes();
        }
        if (null !== $object->getFanDuelPosition()) {
            $data['FanDuelPosition'] = $object->getFanDuelPosition();
        }
        if (null !== $object->getDraftKingsPosition()) {
            $data['DraftKingsPosition'] = $object->getDraftKingsPosition();
        }
        if (null !== $object->getYahooPosition()) {
            $data['YahooPosition'] = $object->getYahooPosition();
        }
        if (null !== $object->getOpponentRank()) {
            $data['OpponentRank'] = $object->getOpponentRank();
        }
        if (null !== $object->getOpponentPositionRank()) {
            $data['OpponentPositionRank'] = $object->getOpponentPositionRank();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        if (null !== $object->getFantasyDraftSalary()) {
            $data['FantasyDraftSalary'] = $object->getFantasyDraftSalary();
        }
        if (null !== $object->getFantasyDraftPosition()) {
            $data['FantasyDraftPosition'] = $object->getFantasyDraftPosition();
        }
        if (null !== $object->getGameID()) {
            $data['GameID'] = $object->getGameID();
        }
        if (null !== $object->getOpponentID()) {
            $data['OpponentID'] = $object->getOpponentID();
        }
        if (null !== $object->getOpponent()) {
            $data['Opponent'] = $object->getOpponent();
        }
        if (null !== $object->getDay()) {
            $data['Day'] = $object->getDay();
        }
        if (null !== $object->getDateTime()) {
            $data['DateTime'] = $object->getDateTime();
        }
        if (null !== $object->getHomeOrAway()) {
            $data['HomeOrAway'] = $object->getHomeOrAway();
        }
        if (null !== $object->getIsGameOver()) {
            $data['IsGameOver'] = $object->getIsGameOver();
        }
        if (null !== $object->getGlobalGameID()) {
            $data['GlobalGameID'] = $object->getGlobalGameID();
        }
        if (null !== $object->getGlobalOpponentID()) {
            $data['GlobalOpponentID'] = $object->getGlobalOpponentID();
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
        if (null !== $object->getAtBats()) {
            $data['AtBats'] = $object->getAtBats();
        }
        if (null !== $object->getRuns()) {
            $data['Runs'] = $object->getRuns();
        }
        if (null !== $object->getHits()) {
            $data['Hits'] = $object->getHits();
        }
        if (null !== $object->getSingles()) {
            $data['Singles'] = $object->getSingles();
        }
        if (null !== $object->getDoubles()) {
            $data['Doubles'] = $object->getDoubles();
        }
        if (null !== $object->getTriples()) {
            $data['Triples'] = $object->getTriples();
        }
        if (null !== $object->getHomeRuns()) {
            $data['HomeRuns'] = $object->getHomeRuns();
        }
        if (null !== $object->getRunsBattedIn()) {
            $data['RunsBattedIn'] = $object->getRunsBattedIn();
        }
        if (null !== $object->getBattingAverage()) {
            $data['BattingAverage'] = $object->getBattingAverage();
        }
        if (null !== $object->getOuts()) {
            $data['Outs'] = $object->getOuts();
        }
        if (null !== $object->getStrikeouts()) {
            $data['Strikeouts'] = $object->getStrikeouts();
        }
        if (null !== $object->getWalks()) {
            $data['Walks'] = $object->getWalks();
        }
        if (null !== $object->getHitByPitch()) {
            $data['HitByPitch'] = $object->getHitByPitch();
        }
        if (null !== $object->getSacrifices()) {
            $data['Sacrifices'] = $object->getSacrifices();
        }
        if (null !== $object->getSacrificeFlies()) {
            $data['SacrificeFlies'] = $object->getSacrificeFlies();
        }
        if (null !== $object->getGroundIntoDoublePlay()) {
            $data['GroundIntoDoublePlay'] = $object->getGroundIntoDoublePlay();
        }
        if (null !== $object->getStolenBases()) {
            $data['StolenBases'] = $object->getStolenBases();
        }
        if (null !== $object->getCaughtStealing()) {
            $data['CaughtStealing'] = $object->getCaughtStealing();
        }
        if (null !== $object->getPitchesSeen()) {
            $data['PitchesSeen'] = $object->getPitchesSeen();
        }
        if (null !== $object->getOnBasePercentage()) {
            $data['OnBasePercentage'] = $object->getOnBasePercentage();
        }
        if (null !== $object->getSluggingPercentage()) {
            $data['SluggingPercentage'] = $object->getSluggingPercentage();
        }
        if (null !== $object->getOnBasePlusSlugging()) {
            $data['OnBasePlusSlugging'] = $object->getOnBasePlusSlugging();
        }
        if (null !== $object->getErrors()) {
            $data['Errors'] = $object->getErrors();
        }
        if (null !== $object->getWins()) {
            $data['Wins'] = $object->getWins();
        }
        if (null !== $object->getLosses()) {
            $data['Losses'] = $object->getLosses();
        }
        if (null !== $object->getSaves()) {
            $data['Saves'] = $object->getSaves();
        }
        if (null !== $object->getInningsPitchedDecimal()) {
            $data['InningsPitchedDecimal'] = $object->getInningsPitchedDecimal();
        }
        if (null !== $object->getTotalOutsPitched()) {
            $data['TotalOutsPitched'] = $object->getTotalOutsPitched();
        }
        if (null !== $object->getInningsPitchedFull()) {
            $data['InningsPitchedFull'] = $object->getInningsPitchedFull();
        }
        if (null !== $object->getInningsPitchedOuts()) {
            $data['InningsPitchedOuts'] = $object->getInningsPitchedOuts();
        }
        if (null !== $object->getEarnedRunAverage()) {
            $data['EarnedRunAverage'] = $object->getEarnedRunAverage();
        }
        if (null !== $object->getPitchingHits()) {
            $data['PitchingHits'] = $object->getPitchingHits();
        }
        if (null !== $object->getPitchingRuns()) {
            $data['PitchingRuns'] = $object->getPitchingRuns();
        }
        if (null !== $object->getPitchingEarnedRuns()) {
            $data['PitchingEarnedRuns'] = $object->getPitchingEarnedRuns();
        }
        if (null !== $object->getPitchingWalks()) {
            $data['PitchingWalks'] = $object->getPitchingWalks();
        }
        if (null !== $object->getPitchingStrikeouts()) {
            $data['PitchingStrikeouts'] = $object->getPitchingStrikeouts();
        }
        if (null !== $object->getPitchingHomeRuns()) {
            $data['PitchingHomeRuns'] = $object->getPitchingHomeRuns();
        }
        if (null !== $object->getPitchesThrown()) {
            $data['PitchesThrown'] = $object->getPitchesThrown();
        }
        if (null !== $object->getPitchesThrownStrikes()) {
            $data['PitchesThrownStrikes'] = $object->getPitchesThrownStrikes();
        }
        if (null !== $object->getWalksHitsPerInningsPitched()) {
            $data['WalksHitsPerInningsPitched'] = $object->getWalksHitsPerInningsPitched();
        }
        if (null !== $object->getPitchingBattingAverageAgainst()) {
            $data['PitchingBattingAverageAgainst'] = $object->getPitchingBattingAverageAgainst();
        }
        if (null !== $object->getGrandSlams()) {
            $data['GrandSlams'] = $object->getGrandSlams();
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
        if (null !== $object->getPlateAppearances()) {
            $data['PlateAppearances'] = $object->getPlateAppearances();
        }
        if (null !== $object->getTotalBases()) {
            $data['TotalBases'] = $object->getTotalBases();
        }
        if (null !== $object->getFlyOuts()) {
            $data['FlyOuts'] = $object->getFlyOuts();
        }
        if (null !== $object->getGroundOuts()) {
            $data['GroundOuts'] = $object->getGroundOuts();
        }
        if (null !== $object->getLineOuts()) {
            $data['LineOuts'] = $object->getLineOuts();
        }
        if (null !== $object->getPopOuts()) {
            $data['PopOuts'] = $object->getPopOuts();
        }
        if (null !== $object->getIntentionalWalks()) {
            $data['IntentionalWalks'] = $object->getIntentionalWalks();
        }
        if (null !== $object->getReachedOnError()) {
            $data['ReachedOnError'] = $object->getReachedOnError();
        }
        if (null !== $object->getBallsInPlay()) {
            $data['BallsInPlay'] = $object->getBallsInPlay();
        }
        if (null !== $object->getBattingAverageOnBallsInPlay()) {
            $data['BattingAverageOnBallsInPlay'] = $object->getBattingAverageOnBallsInPlay();
        }
        if (null !== $object->getWeightedOnBasePercentage()) {
            $data['WeightedOnBasePercentage'] = $object->getWeightedOnBasePercentage();
        }
        if (null !== $object->getPitchingSingles()) {
            $data['PitchingSingles'] = $object->getPitchingSingles();
        }
        if (null !== $object->getPitchingDoubles()) {
            $data['PitchingDoubles'] = $object->getPitchingDoubles();
        }
        if (null !== $object->getPitchingTriples()) {
            $data['PitchingTriples'] = $object->getPitchingTriples();
        }
        if (null !== $object->getPitchingGrandSlams()) {
            $data['PitchingGrandSlams'] = $object->getPitchingGrandSlams();
        }
        if (null !== $object->getPitchingHitByPitch()) {
            $data['PitchingHitByPitch'] = $object->getPitchingHitByPitch();
        }
        if (null !== $object->getPitchingSacrifices()) {
            $data['PitchingSacrifices'] = $object->getPitchingSacrifices();
        }
        if (null !== $object->getPitchingSacrificeFlies()) {
            $data['PitchingSacrificeFlies'] = $object->getPitchingSacrificeFlies();
        }
        if (null !== $object->getPitchingGroundIntoDoublePlay()) {
            $data['PitchingGroundIntoDoublePlay'] = $object->getPitchingGroundIntoDoublePlay();
        }
        if (null !== $object->getPitchingCompleteGames()) {
            $data['PitchingCompleteGames'] = $object->getPitchingCompleteGames();
        }
        if (null !== $object->getPitchingShutOuts()) {
            $data['PitchingShutOuts'] = $object->getPitchingShutOuts();
        }
        if (null !== $object->getPitchingNoHitters()) {
            $data['PitchingNoHitters'] = $object->getPitchingNoHitters();
        }
        if (null !== $object->getPitchingPerfectGames()) {
            $data['PitchingPerfectGames'] = $object->getPitchingPerfectGames();
        }
        if (null !== $object->getPitchingPlateAppearances()) {
            $data['PitchingPlateAppearances'] = $object->getPitchingPlateAppearances();
        }
        if (null !== $object->getPitchingTotalBases()) {
            $data['PitchingTotalBases'] = $object->getPitchingTotalBases();
        }
        if (null !== $object->getPitchingFlyOuts()) {
            $data['PitchingFlyOuts'] = $object->getPitchingFlyOuts();
        }
        if (null !== $object->getPitchingGroundOuts()) {
            $data['PitchingGroundOuts'] = $object->getPitchingGroundOuts();
        }
        if (null !== $object->getPitchingLineOuts()) {
            $data['PitchingLineOuts'] = $object->getPitchingLineOuts();
        }
        if (null !== $object->getPitchingPopOuts()) {
            $data['PitchingPopOuts'] = $object->getPitchingPopOuts();
        }
        if (null !== $object->getPitchingIntentionalWalks()) {
            $data['PitchingIntentionalWalks'] = $object->getPitchingIntentionalWalks();
        }
        if (null !== $object->getPitchingReachedOnError()) {
            $data['PitchingReachedOnError'] = $object->getPitchingReachedOnError();
        }
        if (null !== $object->getPitchingCatchersInterference()) {
            $data['PitchingCatchersInterference'] = $object->getPitchingCatchersInterference();
        }
        if (null !== $object->getPitchingBallsInPlay()) {
            $data['PitchingBallsInPlay'] = $object->getPitchingBallsInPlay();
        }
        if (null !== $object->getPitchingOnBasePercentage()) {
            $data['PitchingOnBasePercentage'] = $object->getPitchingOnBasePercentage();
        }
        if (null !== $object->getPitchingSluggingPercentage()) {
            $data['PitchingSluggingPercentage'] = $object->getPitchingSluggingPercentage();
        }
        if (null !== $object->getPitchingOnBasePlusSlugging()) {
            $data['PitchingOnBasePlusSlugging'] = $object->getPitchingOnBasePlusSlugging();
        }
        if (null !== $object->getPitchingStrikeoutsPerNineInnings()) {
            $data['PitchingStrikeoutsPerNineInnings'] = $object->getPitchingStrikeoutsPerNineInnings();
        }
        if (null !== $object->getPitchingWalksPerNineInnings()) {
            $data['PitchingWalksPerNineInnings'] = $object->getPitchingWalksPerNineInnings();
        }
        if (null !== $object->getPitchingBattingAverageOnBallsInPlay()) {
            $data['PitchingBattingAverageOnBallsInPlay'] = $object->getPitchingBattingAverageOnBallsInPlay();
        }
        if (null !== $object->getPitchingWeightedOnBasePercentage()) {
            $data['PitchingWeightedOnBasePercentage'] = $object->getPitchingWeightedOnBasePercentage();
        }
        if (null !== $object->getDoublePlays()) {
            $data['DoublePlays'] = $object->getDoublePlays();
        }
        if (null !== $object->getPitchingDoublePlays()) {
            $data['PitchingDoublePlays'] = $object->getPitchingDoublePlays();
        }
        if (null !== $object->getBattingOrderConfirmed()) {
            $data['BattingOrderConfirmed'] = $object->getBattingOrderConfirmed();
        }
        if (null !== $object->getIsolatedPower()) {
            $data['IsolatedPower'] = $object->getIsolatedPower();
        }
        if (null !== $object->getFieldingIndependentPitching()) {
            $data['FieldingIndependentPitching'] = $object->getFieldingIndependentPitching();
        }
        if (null !== $object->getPitchingQualityStarts()) {
            $data['PitchingQualityStarts'] = $object->getPitchingQualityStarts();
        }
        if (null !== $object->getPitchingInningStarted()) {
            $data['PitchingInningStarted'] = $object->getPitchingInningStarted();
        }
        if (null !== $object->getLeftOnBase()) {
            $data['LeftOnBase'] = $object->getLeftOnBase();
        }
        if (null !== $object->getPitchingHolds()) {
            $data['PitchingHolds'] = $object->getPitchingHolds();
        }
        if (null !== $object->getPitchingBlownSaves()) {
            $data['PitchingBlownSaves'] = $object->getPitchingBlownSaves();
        }
        if (null !== $object->getSubstituteBattingOrder()) {
            $data['SubstituteBattingOrder'] = $object->getSubstituteBattingOrder();
        }
        if (null !== $object->getSubstituteBattingOrderSequence()) {
            $data['SubstituteBattingOrderSequence'] = $object->getSubstituteBattingOrderSequence();
        }
        if (null !== $object->getFantasyPointsFantasyDraft()) {
            $data['FantasyPointsFantasyDraft'] = $object->getFantasyPointsFantasyDraft();
        }
        return $data;
    }
}