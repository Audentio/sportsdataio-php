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
class TeamGameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\MLB\\Model\\TeamGame';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\MLB\\Model\\TeamGame';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\MLB\Model\TeamGame();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('StatID', $data)) {
            $object->setStatID($data['StatID']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
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
        if (\array_key_exists('GlobalTeamID', $data)) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        if (\array_key_exists('GameID', $data)) {
            $object->setGameID($data['GameID']);
        }
        if (\array_key_exists('OpponentID', $data)) {
            $object->setOpponentID($data['OpponentID']);
        }
        if (\array_key_exists('Opponent', $data)) {
            $object->setOpponent($data['Opponent']);
        }
        if (\array_key_exists('Day', $data)) {
            $object->setDay($data['Day']);
        }
        if (\array_key_exists('DateTime', $data)) {
            $object->setDateTime($data['DateTime']);
        }
        if (\array_key_exists('HomeOrAway', $data)) {
            $object->setHomeOrAway($data['HomeOrAway']);
        }
        if (\array_key_exists('IsGameOver', $data)) {
            $object->setIsGameOver($data['IsGameOver']);
        }
        if (\array_key_exists('GlobalGameID', $data)) {
            $object->setGlobalGameID($data['GlobalGameID']);
        }
        if (\array_key_exists('GlobalOpponentID', $data)) {
            $object->setGlobalOpponentID($data['GlobalOpponentID']);
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
        if (\array_key_exists('AtBats', $data)) {
            $object->setAtBats($data['AtBats']);
        }
        if (\array_key_exists('Runs', $data)) {
            $object->setRuns($data['Runs']);
        }
        if (\array_key_exists('Hits', $data)) {
            $object->setHits($data['Hits']);
        }
        if (\array_key_exists('Singles', $data)) {
            $object->setSingles($data['Singles']);
        }
        if (\array_key_exists('Doubles', $data)) {
            $object->setDoubles($data['Doubles']);
        }
        if (\array_key_exists('Triples', $data)) {
            $object->setTriples($data['Triples']);
        }
        if (\array_key_exists('HomeRuns', $data)) {
            $object->setHomeRuns($data['HomeRuns']);
        }
        if (\array_key_exists('RunsBattedIn', $data)) {
            $object->setRunsBattedIn($data['RunsBattedIn']);
        }
        if (\array_key_exists('BattingAverage', $data)) {
            $object->setBattingAverage($data['BattingAverage']);
        }
        if (\array_key_exists('Outs', $data)) {
            $object->setOuts($data['Outs']);
        }
        if (\array_key_exists('Strikeouts', $data)) {
            $object->setStrikeouts($data['Strikeouts']);
        }
        if (\array_key_exists('Walks', $data)) {
            $object->setWalks($data['Walks']);
        }
        if (\array_key_exists('HitByPitch', $data)) {
            $object->setHitByPitch($data['HitByPitch']);
        }
        if (\array_key_exists('Sacrifices', $data)) {
            $object->setSacrifices($data['Sacrifices']);
        }
        if (\array_key_exists('SacrificeFlies', $data)) {
            $object->setSacrificeFlies($data['SacrificeFlies']);
        }
        if (\array_key_exists('GroundIntoDoublePlay', $data)) {
            $object->setGroundIntoDoublePlay($data['GroundIntoDoublePlay']);
        }
        if (\array_key_exists('StolenBases', $data)) {
            $object->setStolenBases($data['StolenBases']);
        }
        if (\array_key_exists('CaughtStealing', $data)) {
            $object->setCaughtStealing($data['CaughtStealing']);
        }
        if (\array_key_exists('PitchesSeen', $data)) {
            $object->setPitchesSeen($data['PitchesSeen']);
        }
        if (\array_key_exists('OnBasePercentage', $data)) {
            $object->setOnBasePercentage($data['OnBasePercentage']);
        }
        if (\array_key_exists('SluggingPercentage', $data)) {
            $object->setSluggingPercentage($data['SluggingPercentage']);
        }
        if (\array_key_exists('OnBasePlusSlugging', $data)) {
            $object->setOnBasePlusSlugging($data['OnBasePlusSlugging']);
        }
        if (\array_key_exists('Errors', $data)) {
            $object->setErrors($data['Errors']);
        }
        if (\array_key_exists('Wins', $data)) {
            $object->setWins($data['Wins']);
        }
        if (\array_key_exists('Losses', $data)) {
            $object->setLosses($data['Losses']);
        }
        if (\array_key_exists('Saves', $data)) {
            $object->setSaves($data['Saves']);
        }
        if (\array_key_exists('InningsPitchedDecimal', $data)) {
            $object->setInningsPitchedDecimal($data['InningsPitchedDecimal']);
        }
        if (\array_key_exists('TotalOutsPitched', $data)) {
            $object->setTotalOutsPitched($data['TotalOutsPitched']);
        }
        if (\array_key_exists('InningsPitchedFull', $data)) {
            $object->setInningsPitchedFull($data['InningsPitchedFull']);
        }
        if (\array_key_exists('InningsPitchedOuts', $data)) {
            $object->setInningsPitchedOuts($data['InningsPitchedOuts']);
        }
        if (\array_key_exists('EarnedRunAverage', $data)) {
            $object->setEarnedRunAverage($data['EarnedRunAverage']);
        }
        if (\array_key_exists('PitchingHits', $data)) {
            $object->setPitchingHits($data['PitchingHits']);
        }
        if (\array_key_exists('PitchingRuns', $data)) {
            $object->setPitchingRuns($data['PitchingRuns']);
        }
        if (\array_key_exists('PitchingEarnedRuns', $data)) {
            $object->setPitchingEarnedRuns($data['PitchingEarnedRuns']);
        }
        if (\array_key_exists('PitchingWalks', $data)) {
            $object->setPitchingWalks($data['PitchingWalks']);
        }
        if (\array_key_exists('PitchingStrikeouts', $data)) {
            $object->setPitchingStrikeouts($data['PitchingStrikeouts']);
        }
        if (\array_key_exists('PitchingHomeRuns', $data)) {
            $object->setPitchingHomeRuns($data['PitchingHomeRuns']);
        }
        if (\array_key_exists('PitchesThrown', $data)) {
            $object->setPitchesThrown($data['PitchesThrown']);
        }
        if (\array_key_exists('PitchesThrownStrikes', $data)) {
            $object->setPitchesThrownStrikes($data['PitchesThrownStrikes']);
        }
        if (\array_key_exists('WalksHitsPerInningsPitched', $data)) {
            $object->setWalksHitsPerInningsPitched($data['WalksHitsPerInningsPitched']);
        }
        if (\array_key_exists('PitchingBattingAverageAgainst', $data)) {
            $object->setPitchingBattingAverageAgainst($data['PitchingBattingAverageAgainst']);
        }
        if (\array_key_exists('GrandSlams', $data)) {
            $object->setGrandSlams($data['GrandSlams']);
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
        if (\array_key_exists('PlateAppearances', $data)) {
            $object->setPlateAppearances($data['PlateAppearances']);
        }
        if (\array_key_exists('TotalBases', $data)) {
            $object->setTotalBases($data['TotalBases']);
        }
        if (\array_key_exists('FlyOuts', $data)) {
            $object->setFlyOuts($data['FlyOuts']);
        }
        if (\array_key_exists('GroundOuts', $data)) {
            $object->setGroundOuts($data['GroundOuts']);
        }
        if (\array_key_exists('LineOuts', $data)) {
            $object->setLineOuts($data['LineOuts']);
        }
        if (\array_key_exists('PopOuts', $data)) {
            $object->setPopOuts($data['PopOuts']);
        }
        if (\array_key_exists('IntentionalWalks', $data)) {
            $object->setIntentionalWalks($data['IntentionalWalks']);
        }
        if (\array_key_exists('ReachedOnError', $data)) {
            $object->setReachedOnError($data['ReachedOnError']);
        }
        if (\array_key_exists('BallsInPlay', $data)) {
            $object->setBallsInPlay($data['BallsInPlay']);
        }
        if (\array_key_exists('BattingAverageOnBallsInPlay', $data)) {
            $object->setBattingAverageOnBallsInPlay($data['BattingAverageOnBallsInPlay']);
        }
        if (\array_key_exists('WeightedOnBasePercentage', $data)) {
            $object->setWeightedOnBasePercentage($data['WeightedOnBasePercentage']);
        }
        if (\array_key_exists('PitchingSingles', $data)) {
            $object->setPitchingSingles($data['PitchingSingles']);
        }
        if (\array_key_exists('PitchingDoubles', $data)) {
            $object->setPitchingDoubles($data['PitchingDoubles']);
        }
        if (\array_key_exists('PitchingTriples', $data)) {
            $object->setPitchingTriples($data['PitchingTriples']);
        }
        if (\array_key_exists('PitchingGrandSlams', $data)) {
            $object->setPitchingGrandSlams($data['PitchingGrandSlams']);
        }
        if (\array_key_exists('PitchingHitByPitch', $data)) {
            $object->setPitchingHitByPitch($data['PitchingHitByPitch']);
        }
        if (\array_key_exists('PitchingSacrifices', $data)) {
            $object->setPitchingSacrifices($data['PitchingSacrifices']);
        }
        if (\array_key_exists('PitchingSacrificeFlies', $data)) {
            $object->setPitchingSacrificeFlies($data['PitchingSacrificeFlies']);
        }
        if (\array_key_exists('PitchingGroundIntoDoublePlay', $data)) {
            $object->setPitchingGroundIntoDoublePlay($data['PitchingGroundIntoDoublePlay']);
        }
        if (\array_key_exists('PitchingCompleteGames', $data)) {
            $object->setPitchingCompleteGames($data['PitchingCompleteGames']);
        }
        if (\array_key_exists('PitchingShutOuts', $data)) {
            $object->setPitchingShutOuts($data['PitchingShutOuts']);
        }
        if (\array_key_exists('PitchingNoHitters', $data)) {
            $object->setPitchingNoHitters($data['PitchingNoHitters']);
        }
        if (\array_key_exists('PitchingPerfectGames', $data)) {
            $object->setPitchingPerfectGames($data['PitchingPerfectGames']);
        }
        if (\array_key_exists('PitchingPlateAppearances', $data)) {
            $object->setPitchingPlateAppearances($data['PitchingPlateAppearances']);
        }
        if (\array_key_exists('PitchingTotalBases', $data)) {
            $object->setPitchingTotalBases($data['PitchingTotalBases']);
        }
        if (\array_key_exists('PitchingFlyOuts', $data)) {
            $object->setPitchingFlyOuts($data['PitchingFlyOuts']);
        }
        if (\array_key_exists('PitchingGroundOuts', $data)) {
            $object->setPitchingGroundOuts($data['PitchingGroundOuts']);
        }
        if (\array_key_exists('PitchingLineOuts', $data)) {
            $object->setPitchingLineOuts($data['PitchingLineOuts']);
        }
        if (\array_key_exists('PitchingPopOuts', $data)) {
            $object->setPitchingPopOuts($data['PitchingPopOuts']);
        }
        if (\array_key_exists('PitchingIntentionalWalks', $data)) {
            $object->setPitchingIntentionalWalks($data['PitchingIntentionalWalks']);
        }
        if (\array_key_exists('PitchingReachedOnError', $data)) {
            $object->setPitchingReachedOnError($data['PitchingReachedOnError']);
        }
        if (\array_key_exists('PitchingCatchersInterference', $data)) {
            $object->setPitchingCatchersInterference($data['PitchingCatchersInterference']);
        }
        if (\array_key_exists('PitchingBallsInPlay', $data)) {
            $object->setPitchingBallsInPlay($data['PitchingBallsInPlay']);
        }
        if (\array_key_exists('PitchingOnBasePercentage', $data)) {
            $object->setPitchingOnBasePercentage($data['PitchingOnBasePercentage']);
        }
        if (\array_key_exists('PitchingSluggingPercentage', $data)) {
            $object->setPitchingSluggingPercentage($data['PitchingSluggingPercentage']);
        }
        if (\array_key_exists('PitchingOnBasePlusSlugging', $data)) {
            $object->setPitchingOnBasePlusSlugging($data['PitchingOnBasePlusSlugging']);
        }
        if (\array_key_exists('PitchingStrikeoutsPerNineInnings', $data)) {
            $object->setPitchingStrikeoutsPerNineInnings($data['PitchingStrikeoutsPerNineInnings']);
        }
        if (\array_key_exists('PitchingWalksPerNineInnings', $data)) {
            $object->setPitchingWalksPerNineInnings($data['PitchingWalksPerNineInnings']);
        }
        if (\array_key_exists('PitchingBattingAverageOnBallsInPlay', $data)) {
            $object->setPitchingBattingAverageOnBallsInPlay($data['PitchingBattingAverageOnBallsInPlay']);
        }
        if (\array_key_exists('PitchingWeightedOnBasePercentage', $data)) {
            $object->setPitchingWeightedOnBasePercentage($data['PitchingWeightedOnBasePercentage']);
        }
        if (\array_key_exists('DoublePlays', $data)) {
            $object->setDoublePlays($data['DoublePlays']);
        }
        if (\array_key_exists('PitchingDoublePlays', $data)) {
            $object->setPitchingDoublePlays($data['PitchingDoublePlays']);
        }
        if (\array_key_exists('BattingOrderConfirmed', $data)) {
            $object->setBattingOrderConfirmed($data['BattingOrderConfirmed']);
        }
        if (\array_key_exists('IsolatedPower', $data)) {
            $object->setIsolatedPower($data['IsolatedPower']);
        }
        if (\array_key_exists('FieldingIndependentPitching', $data)) {
            $object->setFieldingIndependentPitching($data['FieldingIndependentPitching']);
        }
        if (\array_key_exists('PitchingQualityStarts', $data)) {
            $object->setPitchingQualityStarts($data['PitchingQualityStarts']);
        }
        if (\array_key_exists('PitchingInningStarted', $data)) {
            $object->setPitchingInningStarted($data['PitchingInningStarted']);
        }
        if (\array_key_exists('LeftOnBase', $data)) {
            $object->setLeftOnBase($data['LeftOnBase']);
        }
        if (\array_key_exists('PitchingHolds', $data)) {
            $object->setPitchingHolds($data['PitchingHolds']);
        }
        if (\array_key_exists('PitchingBlownSaves', $data)) {
            $object->setPitchingBlownSaves($data['PitchingBlownSaves']);
        }
        if (\array_key_exists('SubstituteBattingOrder', $data)) {
            $object->setSubstituteBattingOrder($data['SubstituteBattingOrder']);
        }
        if (\array_key_exists('SubstituteBattingOrderSequence', $data)) {
            $object->setSubstituteBattingOrderSequence($data['SubstituteBattingOrderSequence']);
        }
        if (\array_key_exists('FantasyPointsFantasyDraft', $data)) {
            $object->setFantasyPointsFantasyDraft($data['FantasyPointsFantasyDraft']);
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
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
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