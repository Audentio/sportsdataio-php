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
class AdvancedPlayerSeasonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\AdvancedPlayerSeason';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\AdvancedPlayerSeason';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\AdvancedPlayerSeason();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('Team', $data)) {
            $object->setTeam($data['Team']);
        }
        if (\array_key_exists('Position', $data)) {
            $object->setPosition($data['Position']);
        }
        if (\array_key_exists('FantasyPosition', $data)) {
            $object->setFantasyPosition($data['FantasyPosition']);
        }
        if (\array_key_exists('PositionGroup', $data)) {
            $object->setPositionGroup($data['PositionGroup']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('Games', $data)) {
            $object->setGames($data['Games']);
        }
        if (\array_key_exists('Snaps', $data)) {
            $object->setSnaps($data['Snaps']);
        }
        if (\array_key_exists('SnapShare', $data)) {
            $object->setSnapShare($data['SnapShare']);
        }
        if (\array_key_exists('SnapShareRank', $data)) {
            $object->setSnapShareRank($data['SnapShareRank']);
        }
        if (\array_key_exists('SlotRate', $data)) {
            $object->setSlotRate($data['SlotRate']);
        }
        if (\array_key_exists('SlotRateRank', $data)) {
            $object->setSlotRateRank($data['SlotRateRank']);
        }
        if (\array_key_exists('TargetSeparation', $data)) {
            $object->setTargetSeparation($data['TargetSeparation']);
        }
        if (\array_key_exists('TargetSeparationRank', $data)) {
            $object->setTargetSeparationRank($data['TargetSeparationRank']);
        }
        if (\array_key_exists('BurnRate', $data)) {
            $object->setBurnRate($data['BurnRate']);
        }
        if (\array_key_exists('AirYards', $data)) {
            $object->setAirYards($data['AirYards']);
        }
        if (\array_key_exists('AirYardsPerGame', $data)) {
            $object->setAirYardsPerGame($data['AirYardsPerGame']);
        }
        if (\array_key_exists('AirYardsRank', $data)) {
            $object->setAirYardsRank($data['AirYardsRank']);
        }
        if (\array_key_exists('Carries', $data)) {
            $object->setCarries($data['Carries']);
        }
        if (\array_key_exists('CarriesInside10', $data)) {
            $object->setCarriesInside10($data['CarriesInside10']);
        }
        if (\array_key_exists('CarriesInside10PerGame', $data)) {
            $object->setCarriesInside10PerGame($data['CarriesInside10PerGame']);
        }
        if (\array_key_exists('CarriesInside5', $data)) {
            $object->setCarriesInside5($data['CarriesInside5']);
        }
        if (\array_key_exists('CarriesInside5PerGame', $data)) {
            $object->setCarriesInside5PerGame($data['CarriesInside5PerGame']);
        }
        if (\array_key_exists('CarriesPerGame', $data)) {
            $object->setCarriesPerGame($data['CarriesPerGame']);
        }
        if (\array_key_exists('CarriesPerGameRank', $data)) {
            $object->setCarriesPerGameRank($data['CarriesPerGameRank']);
        }
        if (\array_key_exists('CarriesRank', $data)) {
            $object->setCarriesRank($data['CarriesRank']);
        }
        if (\array_key_exists('GameScript', $data)) {
            $object->setGameScript($data['GameScript']);
        }
        if (\array_key_exists('GameScriptRank', $data)) {
            $object->setGameScriptRank($data['GameScriptRank']);
        }
        if (\array_key_exists('GoalLineCarries', $data)) {
            $object->setGoalLineCarries($data['GoalLineCarries']);
        }
        if (\array_key_exists('GoalLineCarriesPerGame', $data)) {
            $object->setGoalLineCarriesPerGame($data['GoalLineCarriesPerGame']);
        }
        if (\array_key_exists('GoalLineCarriesPerGameRank', $data)) {
            $object->setGoalLineCarriesPerGameRank($data['GoalLineCarriesPerGameRank']);
        }
        if (\array_key_exists('GoalLineCarriesRank', $data)) {
            $object->setGoalLineCarriesRank($data['GoalLineCarriesRank']);
        }
        if (\array_key_exists('ProductionPremium', $data)) {
            $object->setProductionPremium($data['ProductionPremium']);
        }
        if (\array_key_exists('ProductionPremiumRank', $data)) {
            $object->setProductionPremiumRank($data['ProductionPremiumRank']);
        }
        if (\array_key_exists('RedZoneCarries', $data)) {
            $object->setRedZoneCarries($data['RedZoneCarries']);
        }
        if (\array_key_exists('RedZoneCarriesPerGame', $data)) {
            $object->setRedZoneCarriesPerGame($data['RedZoneCarriesPerGame']);
        }
        if (\array_key_exists('RedZoneCarriesPerGameRank', $data)) {
            $object->setRedZoneCarriesPerGameRank($data['RedZoneCarriesPerGameRank']);
        }
        if (\array_key_exists('RedZoneCarriesRank', $data)) {
            $object->setRedZoneCarriesRank($data['RedZoneCarriesRank']);
        }
        if (\array_key_exists('RushingTouchdowns', $data)) {
            $object->setRushingTouchdowns($data['RushingTouchdowns']);
        }
        if (\array_key_exists('RushingTouchdownsRank', $data)) {
            $object->setRushingTouchdownsRank($data['RushingTouchdownsRank']);
        }
        if (\array_key_exists('RushingYards', $data)) {
            $object->setRushingYards($data['RushingYards']);
        }
        if (\array_key_exists('RushingYardsRank', $data)) {
            $object->setRushingYardsRank($data['RushingYardsRank']);
        }
        if (\array_key_exists('RushYardsPerGame', $data)) {
            $object->setRushYardsPerGame($data['RushYardsPerGame']);
        }
        if (\array_key_exists('RedZoneSnaps', $data)) {
            $object->setRedZoneSnaps($data['RedZoneSnaps']);
        }
        if (\array_key_exists('RunSnaps', $data)) {
            $object->setRunSnaps($data['RunSnaps']);
        }
        if (\array_key_exists('PassSnaps', $data)) {
            $object->setPassSnaps($data['PassSnaps']);
        }
        if (\array_key_exists('SnapweightedGameScript', $data)) {
            $object->setSnapweightedGameScript($data['SnapweightedGameScript']);
        }
        if (\array_key_exists('SnapweightedGameScriptRank', $data)) {
            $object->setSnapweightedGameScriptRank($data['SnapweightedGameScriptRank']);
        }
        if (\array_key_exists('TeamPassPlays', $data)) {
            $object->setTeamPassPlays($data['TeamPassPlays']);
        }
        if (\array_key_exists('TeamPassPlaysRank', $data)) {
            $object->setTeamPassPlaysRank($data['TeamPassPlaysRank']);
        }
        if (\array_key_exists('TouchdownRate', $data)) {
            $object->setTouchdownRate($data['TouchdownRate']);
        }
        if (\array_key_exists('WeeklyVolatility', $data)) {
            $object->setWeeklyVolatility($data['WeeklyVolatility']);
        }
        if (\array_key_exists('WeeklyVolatilityRank', $data)) {
            $object->setWeeklyVolatilityRank($data['WeeklyVolatilityRank']);
        }
        if (\array_key_exists('VOS', $data)) {
            $object->setVOS($data['VOS']);
        }
        if (\array_key_exists('VOSRank', $data)) {
            $object->setVOSRank($data['VOSRank']);
        }
        if (\array_key_exists('YardsPerTarget', $data)) {
            $object->setYardsPerTarget($data['YardsPerTarget']);
        }
        if (\array_key_exists('YardsPerTargetRank', $data)) {
            $object->setYardsPerTargetRank($data['YardsPerTargetRank']);
        }
        if (\array_key_exists('YardsPerReception', $data)) {
            $object->setYardsPerReception($data['YardsPerReception']);
        }
        if (\array_key_exists('YardsAfterCatch', $data)) {
            $object->setYardsAfterCatch($data['YardsAfterCatch']);
        }
        if (\array_key_exists('YardsAfterCatchPerGame', $data)) {
            $object->setYardsAfterCatchPerGame($data['YardsAfterCatchPerGame']);
        }
        if (\array_key_exists('YardsAfterCatchPerReception', $data)) {
            $object->setYardsAfterCatchPerReception($data['YardsAfterCatchPerReception']);
        }
        if (\array_key_exists('YardsAfterCatchPerTarget', $data)) {
            $object->setYardsAfterCatchPerTarget($data['YardsAfterCatchPerTarget']);
        }
        if (\array_key_exists('YardsAfterCatchRank', $data)) {
            $object->setYardsAfterCatchRank($data['YardsAfterCatchRank']);
        }
        if (\array_key_exists('TotalTouchdowns', $data)) {
            $object->setTotalTouchdowns($data['TotalTouchdowns']);
        }
        if (\array_key_exists('TotalTouchdownsRank', $data)) {
            $object->setTotalTouchdownsRank($data['TotalTouchdownsRank']);
        }
        if (\array_key_exists('TotalTouches', $data)) {
            $object->setTotalTouches($data['TotalTouches']);
        }
        if (\array_key_exists('TotalYards', $data)) {
            $object->setTotalYards($data['TotalYards']);
        }
        if (\array_key_exists('TotalYardsPerGame', $data)) {
            $object->setTotalYardsPerGame($data['TotalYardsPerGame']);
        }
        if (\array_key_exists('Targets', $data)) {
            $object->setTargets($data['Targets']);
        }
        if (\array_key_exists('TargetShare', $data)) {
            $object->setTargetShare($data['TargetShare']);
        }
        if (\array_key_exists('TargetShareRank', $data)) {
            $object->setTargetShareRank($data['TargetShareRank']);
        }
        if (\array_key_exists('TargetsInside10', $data)) {
            $object->setTargetsInside10($data['TargetsInside10']);
        }
        if (\array_key_exists('TargetsInside10PerGame', $data)) {
            $object->setTargetsInside10PerGame($data['TargetsInside10PerGame']);
        }
        if (\array_key_exists('TargetsInside5', $data)) {
            $object->setTargetsInside5($data['TargetsInside5']);
        }
        if (\array_key_exists('TargetsInside5PerGame', $data)) {
            $object->setTargetsInside5PerGame($data['TargetsInside5PerGame']);
        }
        if (\array_key_exists('TargetsPerGame', $data)) {
            $object->setTargetsPerGame($data['TargetsPerGame']);
        }
        if (\array_key_exists('TargetsPerGameRank', $data)) {
            $object->setTargetsPerGameRank($data['TargetsPerGameRank']);
        }
        if (\array_key_exists('TargetsRank', $data)) {
            $object->setTargetsRank($data['TargetsRank']);
        }
        if (\array_key_exists('SlotSnaps', $data)) {
            $object->setSlotSnaps($data['SlotSnaps']);
        }
        if (\array_key_exists('SlotYPR', $data)) {
            $object->setSlotYPR($data['SlotYPR']);
        }
        if (\array_key_exists('SlotYPRRank', $data)) {
            $object->setSlotYPRRank($data['SlotYPRRank']);
        }
        if (\array_key_exists('SlotYPT', $data)) {
            $object->setSlotYPT($data['SlotYPT']);
        }
        if (\array_key_exists('SlotYPTRank', $data)) {
            $object->setSlotYPTRank($data['SlotYPTRank']);
        }
        if (\array_key_exists('RedZoneSnapShare', $data)) {
            $object->setRedZoneSnapShare($data['RedZoneSnapShare']);
        }
        if (\array_key_exists('RedZoneSnapShareRank', $data)) {
            $object->setRedZoneSnapShareRank($data['RedZoneSnapShareRank']);
        }
        if (\array_key_exists('RouteParticipation', $data)) {
            $object->setRouteParticipation($data['RouteParticipation']);
        }
        if (\array_key_exists('RouteParticipationRank', $data)) {
            $object->setRouteParticipationRank($data['RouteParticipationRank']);
        }
        if (\array_key_exists('PassRoutes', $data)) {
            $object->setPassRoutes($data['PassRoutes']);
        }
        if (\array_key_exists('PassRoutesPerGame', $data)) {
            $object->setPassRoutesPerGame($data['PassRoutesPerGame']);
        }
        if (\array_key_exists('PassRoutesPerGameRank', $data)) {
            $object->setPassRoutesPerGameRank($data['PassRoutesPerGameRank']);
        }
        if (\array_key_exists('RedZoneReceptions', $data)) {
            $object->setRedZoneReceptions($data['RedZoneReceptions']);
        }
        if (\array_key_exists('RedZoneReceptionsRank', $data)) {
            $object->setRedZoneReceptionsRank($data['RedZoneReceptionsRank']);
        }
        if (\array_key_exists('RedZoneTargets', $data)) {
            $object->setRedZoneTargets($data['RedZoneTargets']);
        }
        if (\array_key_exists('RedZoneTargetShare', $data)) {
            $object->setRedZoneTargetShare($data['RedZoneTargetShare']);
        }
        if (\array_key_exists('RedZoneTargetShareRank', $data)) {
            $object->setRedZoneTargetShareRank($data['RedZoneTargetShareRank']);
        }
        if (\array_key_exists('RedZoneTargetsRank', $data)) {
            $object->setRedZoneTargetsRank($data['RedZoneTargetsRank']);
        }
        if (\array_key_exists('RedZoneTouches', $data)) {
            $object->setRedZoneTouches($data['RedZoneTouches']);
        }
        if (\array_key_exists('RedZoneTouchesPerGame', $data)) {
            $object->setRedZoneTouchesPerGame($data['RedZoneTouchesPerGame']);
        }
        if (\array_key_exists('QBRatingWhenTargeted', $data)) {
            $object->setQBRatingWhenTargeted($data['QBRatingWhenTargeted']);
        }
        if (\array_key_exists('QBRatingWhenTargetedRank', $data)) {
            $object->setQBRatingWhenTargetedRank($data['QBRatingWhenTargetedRank']);
        }
        if (\array_key_exists('ReceivingTDs', $data)) {
            $object->setReceivingTDs($data['ReceivingTDs']);
        }
        if (\array_key_exists('ReceivingYards', $data)) {
            $object->setReceivingYards($data['ReceivingYards']);
        }
        if (\array_key_exists('ReceivingYardsPerGame', $data)) {
            $object->setReceivingYardsPerGame($data['ReceivingYardsPerGame']);
        }
        if (\array_key_exists('ReceivingYardsPerGameRank', $data)) {
            $object->setReceivingYardsPerGameRank($data['ReceivingYardsPerGameRank']);
        }
        if (\array_key_exists('ReceivingYardsRank', $data)) {
            $object->setReceivingYardsRank($data['ReceivingYardsRank']);
        }
        if (\array_key_exists('Receptions', $data)) {
            $object->setReceptions($data['Receptions']);
        }
        if (\array_key_exists('ReceptionsPerGame', $data)) {
            $object->setReceptionsPerGame($data['ReceptionsPerGame']);
        }
        if (\array_key_exists('ReceptionsPerGameRank', $data)) {
            $object->setReceptionsPerGameRank($data['ReceptionsPerGameRank']);
        }
        if (\array_key_exists('ReceptionsRank', $data)) {
            $object->setReceptionsRank($data['ReceptionsRank']);
        }
        if (\array_key_exists('RedZoneCatchRate', $data)) {
            $object->setRedZoneCatchRate($data['RedZoneCatchRate']);
        }
        if (\array_key_exists('RedZoneCatchRateRank', $data)) {
            $object->setRedZoneCatchRateRank($data['RedZoneCatchRateRank']);
        }
        if (\array_key_exists('CatchableTargetRate', $data)) {
            $object->setCatchableTargetRate($data['CatchableTargetRate']);
        }
        if (\array_key_exists('CatchableTargetRateRank', $data)) {
            $object->setCatchableTargetRateRank($data['CatchableTargetRateRank']);
        }
        if (\array_key_exists('CatchableTargets', $data)) {
            $object->setCatchableTargets($data['CatchableTargets']);
        }
        if (\array_key_exists('CatchRate', $data)) {
            $object->setCatchRate($data['CatchRate']);
        }
        if (\array_key_exists('CatchRateRank', $data)) {
            $object->setCatchRateRank($data['CatchRateRank']);
        }
        if (\array_key_exists('DominatorRating', $data)) {
            $object->setDominatorRating($data['DominatorRating']);
        }
        if (\array_key_exists('DominatorRatingRank', $data)) {
            $object->setDominatorRatingRank($data['DominatorRatingRank']);
        }
        if (\array_key_exists('Drops', $data)) {
            $object->setDrops($data['Drops']);
        }
        if (\array_key_exists('DropsPerGame', $data)) {
            $object->setDropsPerGame($data['DropsPerGame']);
        }
        if (\array_key_exists('DropsPerGameRank', $data)) {
            $object->setDropsPerGameRank($data['DropsPerGameRank']);
        }
        if (\array_key_exists('DropRate', $data)) {
            $object->setDropRate($data['DropRate']);
        }
        if (\array_key_exists('DropRateRank', $data)) {
            $object->setDropRateRank($data['DropRateRank']);
        }
        if (\array_key_exists('DropsRank', $data)) {
            $object->setDropsRank($data['DropsRank']);
        }
        if (\array_key_exists('EndzoneTargets', $data)) {
            $object->setEndzoneTargets($data['EndzoneTargets']);
        }
        if (\array_key_exists('EndzoneTargetShare', $data)) {
            $object->setEndzoneTargetShare($data['EndzoneTargetShare']);
        }
        if (\array_key_exists('EndzoneTargetShareRank', $data)) {
            $object->setEndzoneTargetShareRank($data['EndzoneTargetShareRank']);
        }
        if (\array_key_exists('AccuracyRating', $data)) {
            $object->setAccuracyRating($data['AccuracyRating']);
        }
        if (\array_key_exists('AccuracyRatingRank', $data)) {
            $object->setAccuracyRatingRank($data['AccuracyRatingRank']);
        }
        if (\array_key_exists('AdjustedAttempts', $data)) {
            $object->setAdjustedAttempts($data['AdjustedAttempts']);
        }
        if (\array_key_exists('AdjustedYardsPerAttempt', $data)) {
            $object->setAdjustedYardsPerAttempt($data['AdjustedYardsPerAttempt']);
        }
        if (\array_key_exists('AdjustedYardsPerAttemptRank', $data)) {
            $object->setAdjustedYardsPerAttemptRank($data['AdjustedYardsPerAttemptRank']);
        }
        if (\array_key_exists('AirYardsPerAttempt', $data)) {
            $object->setAirYardsPerAttempt($data['AirYardsPerAttempt']);
        }
        if (\array_key_exists('AirYardsPerAttemptRank', $data)) {
            $object->setAirYardsPerAttemptRank($data['AirYardsPerAttemptRank']);
        }
        if (\array_key_exists('AttemptsInside10', $data)) {
            $object->setAttemptsInside10($data['AttemptsInside10']);
        }
        if (\array_key_exists('AttemptsInside10PerGame', $data)) {
            $object->setAttemptsInside10PerGame($data['AttemptsInside10PerGame']);
        }
        if (\array_key_exists('AttemptsInside5', $data)) {
            $object->setAttemptsInside5($data['AttemptsInside5']);
        }
        if (\array_key_exists('AttemptsInside5PerGame', $data)) {
            $object->setAttemptsInside5PerGame($data['AttemptsInside5PerGame']);
        }
        if (\array_key_exists('AttemptsPerGame', $data)) {
            $object->setAttemptsPerGame($data['AttemptsPerGame']);
        }
        if (\array_key_exists('CatchablePasses', $data)) {
            $object->setCatchablePasses($data['CatchablePasses']);
        }
        if (\array_key_exists('CatchablePassesPerGame', $data)) {
            $object->setCatchablePassesPerGame($data['CatchablePassesPerGame']);
        }
        if (\array_key_exists('CatchablePassesRank', $data)) {
            $object->setCatchablePassesRank($data['CatchablePassesRank']);
        }
        if (\array_key_exists('CompletionPercentage', $data)) {
            $object->setCompletionPercentage($data['CompletionPercentage']);
        }
        if (\array_key_exists('CompletionPercentageRank', $data)) {
            $object->setCompletionPercentageRank($data['CompletionPercentageRank']);
        }
        if (\array_key_exists('Completions', $data)) {
            $object->setCompletions($data['Completions']);
        }
        if (\array_key_exists('DangerPlays', $data)) {
            $object->setDangerPlays($data['DangerPlays']);
        }
        if (\array_key_exists('DangerPlaysPerGame', $data)) {
            $object->setDangerPlaysPerGame($data['DangerPlaysPerGame']);
        }
        if (\array_key_exists('DangerPlaysRank', $data)) {
            $object->setDangerPlaysRank($data['DangerPlaysRank']);
        }
        if (\array_key_exists('DeepBallAttempts', $data)) {
            $object->setDeepBallAttempts($data['DeepBallAttempts']);
        }
        if (\array_key_exists('DeepBallAttemptsPerGame', $data)) {
            $object->setDeepBallAttemptsPerGame($data['DeepBallAttemptsPerGame']);
        }
        if (\array_key_exists('DeepBallAttemptsPerGameRank', $data)) {
            $object->setDeepBallAttemptsPerGameRank($data['DeepBallAttemptsPerGameRank']);
        }
        if (\array_key_exists('DeepBallAttemptsRank', $data)) {
            $object->setDeepBallAttemptsRank($data['DeepBallAttemptsRank']);
        }
        if (\array_key_exists('DeepBallCompletionPercentage', $data)) {
            $object->setDeepBallCompletionPercentage($data['DeepBallCompletionPercentage']);
        }
        if (\array_key_exists('DeepBallCompletionPercentageRank', $data)) {
            $object->setDeepBallCompletionPercentageRank($data['DeepBallCompletionPercentageRank']);
        }
        if (\array_key_exists('DeepBallCompletions', $data)) {
            $object->setDeepBallCompletions($data['DeepBallCompletions']);
        }
        if (\array_key_exists('DeepBallCompletionsRank', $data)) {
            $object->setDeepBallCompletionsRank($data['DeepBallCompletionsRank']);
        }
        if (\array_key_exists('DroppedPasses', $data)) {
            $object->setDroppedPasses($data['DroppedPasses']);
        }
        if (\array_key_exists('DroppedPassesRank', $data)) {
            $object->setDroppedPassesRank($data['DroppedPassesRank']);
        }
        if (\array_key_exists('DroppedPassesPerGame', $data)) {
            $object->setDroppedPassesPerGame($data['DroppedPassesPerGame']);
        }
        if (\array_key_exists('DropsPerAttempt', $data)) {
            $object->setDropsPerAttempt($data['DropsPerAttempt']);
        }
        if (\array_key_exists('DropsPerAttemptRank', $data)) {
            $object->setDropsPerAttemptRank($data['DropsPerAttemptRank']);
        }
        if (\array_key_exists('DropBacks', $data)) {
            $object->setDropBacks($data['DropBacks']);
        }
        if (\array_key_exists('InterceptablePasses', $data)) {
            $object->setInterceptablePasses($data['InterceptablePasses']);
        }
        if (\array_key_exists('InterceptablePassesPerGame', $data)) {
            $object->setInterceptablePassesPerGame($data['InterceptablePassesPerGame']);
        }
        if (\array_key_exists('InterceptablePassesRank', $data)) {
            $object->setInterceptablePassesRank($data['InterceptablePassesRank']);
        }
        if (\array_key_exists('MoneyThrows', $data)) {
            $object->setMoneyThrows($data['MoneyThrows']);
        }
        if (\array_key_exists('MoneyThrowsPerGame', $data)) {
            $object->setMoneyThrowsPerGame($data['MoneyThrowsPerGame']);
        }
        if (\array_key_exists('MoneyThrowsRank', $data)) {
            $object->setMoneyThrowsRank($data['MoneyThrowsRank']);
        }
        if (\array_key_exists('PassAttempts', $data)) {
            $object->setPassAttempts($data['PassAttempts']);
        }
        if (\array_key_exists('PassAttemptsRank', $data)) {
            $object->setPassAttemptsRank($data['PassAttemptsRank']);
        }
        if (\array_key_exists('PassAttemptDistance', $data)) {
            $object->setPassAttemptDistance($data['PassAttemptDistance']);
        }
        if (\array_key_exists('PassAttemptDistanceRank', $data)) {
            $object->setPassAttemptDistanceRank($data['PassAttemptDistanceRank']);
        }
        if (\array_key_exists('PassAttemptDistancePerAttempt', $data)) {
            $object->setPassAttemptDistancePerAttempt($data['PassAttemptDistancePerAttempt']);
        }
        if (\array_key_exists('PassAttemptDistancePerAttemptRank', $data)) {
            $object->setPassAttemptDistancePerAttemptRank($data['PassAttemptDistancePerAttemptRank']);
        }
        if (\array_key_exists('PassingAttempts', $data)) {
            $object->setPassingAttempts($data['PassingAttempts']);
        }
        if (\array_key_exists('PassingTouchdowns', $data)) {
            $object->setPassingTouchdowns($data['PassingTouchdowns']);
        }
        if (\array_key_exists('PassingTouchdownsRank', $data)) {
            $object->setPassingTouchdownsRank($data['PassingTouchdownsRank']);
        }
        if (\array_key_exists('PassingYards', $data)) {
            $object->setPassingYards($data['PassingYards']);
        }
        if (\array_key_exists('PassingYardsPerAttempt', $data)) {
            $object->setPassingYardsPerAttempt($data['PassingYardsPerAttempt']);
        }
        if (\array_key_exists('PassingYardsPerAttemptRank', $data)) {
            $object->setPassingYardsPerAttemptRank($data['PassingYardsPerAttemptRank']);
        }
        if (\array_key_exists('PassingYardsPerGame', $data)) {
            $object->setPassingYardsPerGame($data['PassingYardsPerGame']);
        }
        if (\array_key_exists('PassingYardsPerGameRank', $data)) {
            $object->setPassingYardsPerGameRank($data['PassingYardsPerGameRank']);
        }
        if (\array_key_exists('PassingYardsRank', $data)) {
            $object->setPassingYardsRank($data['PassingYardsRank']);
        }
        if (\array_key_exists('PlayactionPassAttempts', $data)) {
            $object->setPlayactionPassAttempts($data['PlayactionPassAttempts']);
        }
        if (\array_key_exists('PlayactionPassAttemptsPerGame', $data)) {
            $object->setPlayactionPassAttemptsPerGame($data['PlayactionPassAttemptsPerGame']);
        }
        if (\array_key_exists('PlayactionPassAttemptsRank', $data)) {
            $object->setPlayactionPassAttemptsRank($data['PlayactionPassAttemptsRank']);
        }
        if (\array_key_exists('PlayactionPassCompletionPercentage', $data)) {
            $object->setPlayactionPassCompletionPercentage($data['PlayactionPassCompletionPercentage']);
        }
        if (\array_key_exists('PlayactionPassCompletionPercentageRank', $data)) {
            $object->setPlayactionPassCompletionPercentageRank($data['PlayactionPassCompletionPercentageRank']);
        }
        if (\array_key_exists('ProtectionRate', $data)) {
            $object->setProtectionRate($data['ProtectionRate']);
        }
        if (\array_key_exists('ProtectionRateRank', $data)) {
            $object->setProtectionRateRank($data['ProtectionRateRank']);
        }
        if (\array_key_exists('RedZoneAttempts', $data)) {
            $object->setRedZoneAttempts($data['RedZoneAttempts']);
        }
        if (\array_key_exists('RedZoneAttemptsPerGame', $data)) {
            $object->setRedZoneAttemptsPerGame($data['RedZoneAttemptsPerGame']);
        }
        if (\array_key_exists('RedZoneAttemptsRank', $data)) {
            $object->setRedZoneAttemptsRank($data['RedZoneAttemptsRank']);
        }
        if (\array_key_exists('RedZoneCompletionPercentage', $data)) {
            $object->setRedZoneCompletionPercentage($data['RedZoneCompletionPercentage']);
        }
        if (\array_key_exists('RedZoneCompletionPercentageRank', $data)) {
            $object->setRedZoneCompletionPercentageRank($data['RedZoneCompletionPercentageRank']);
        }
        if (\array_key_exists('RedZoneTDtoINTRatio', $data)) {
            $object->setRedZoneTDtoINTRatio($data['RedZoneTDtoINTRatio']);
        }
        if (\array_key_exists('RushingTDs', $data)) {
            $object->setRushingTDs($data['RushingTDs']);
        }
        if (\array_key_exists('RushingYardsPerGameRank', $data)) {
            $object->setRushingYardsPerGameRank($data['RushingYardsPerGameRank']);
        }
        if (\array_key_exists('ShotgunCompletionPercentage', $data)) {
            $object->setShotgunCompletionPercentage($data['ShotgunCompletionPercentage']);
        }
        if (\array_key_exists('ShotgunSnaps', $data)) {
            $object->setShotgunSnaps($data['ShotgunSnaps']);
        }
        if (\array_key_exists('UnderCenterCompletionPercentage', $data)) {
            $object->setUnderCenterCompletionPercentage($data['UnderCenterCompletionPercentage']);
        }
        if (\array_key_exists('UnderCenterSnaps', $data)) {
            $object->setUnderCenterSnaps($data['UnderCenterSnaps']);
        }
        if (\array_key_exists('ReceiverContestedCatchRate', $data)) {
            $object->setReceiverContestedCatchRate($data['ReceiverContestedCatchRate']);
        }
        if (\array_key_exists('ReceiverContestedCatchRateRank', $data)) {
            $object->setReceiverContestedCatchRateRank($data['ReceiverContestedCatchRateRank']);
        }
        if (\array_key_exists('ReceiverTargetSeparation', $data)) {
            $object->setReceiverTargetSeparation($data['ReceiverTargetSeparation']);
        }
        if (\array_key_exists('ReceiverTargetSeparationRank', $data)) {
            $object->setReceiverTargetSeparationRank($data['ReceiverTargetSeparationRank']);
        }
        if (\array_key_exists('ReceiverYardsAfterTheCatch', $data)) {
            $object->setReceiverYardsAfterTheCatch($data['ReceiverYardsAfterTheCatch']);
        }
        if (\array_key_exists('ReceiverYardsAfterTheCatchRank', $data)) {
            $object->setReceiverYardsAfterTheCatchRank($data['ReceiverYardsAfterTheCatchRank']);
        }
        if (\array_key_exists('ReceiverYardsAfterTheCatchPerTarget', $data)) {
            $object->setReceiverYardsAfterTheCatchPerTarget($data['ReceiverYardsAfterTheCatchPerTarget']);
        }
        if (\array_key_exists('SupportingCastEfficiency', $data)) {
            $object->setSupportingCastEfficiency($data['SupportingCastEfficiency']);
        }
        if (\array_key_exists('SupportingCastEfficiencyRank', $data)) {
            $object->setSupportingCastEfficiencyRank($data['SupportingCastEfficiencyRank']);
        }
        if (\array_key_exists('TotalQBR', $data)) {
            $object->setTotalQBR($data['TotalQBR']);
        }
        if (\array_key_exists('TotalQBRRank', $data)) {
            $object->setTotalQBRRank($data['TotalQBRRank']);
        }
        if (\array_key_exists('TrueCompletionPercentage', $data)) {
            $object->setTrueCompletionPercentage($data['TrueCompletionPercentage']);
        }
        if (\array_key_exists('TrueCompletionPercentageRank', $data)) {
            $object->setTrueCompletionPercentageRank($data['TrueCompletionPercentageRank']);
        }
        if (\array_key_exists('TruePasserRating', $data)) {
            $object->setTruePasserRating($data['TruePasserRating']);
        }
        if (\array_key_exists('TruePasserRatingRank', $data)) {
            $object->setTruePasserRatingRank($data['TruePasserRatingRank']);
        }
        if (\array_key_exists('UncatchablePasses', $data)) {
            $object->setUncatchablePasses($data['UncatchablePasses']);
        }
        if (\array_key_exists('UncatchablePassesPerGame', $data)) {
            $object->setUncatchablePassesPerGame($data['UncatchablePassesPerGame']);
        }
        if (\array_key_exists('UncatchablePassesRank', $data)) {
            $object->setUncatchablePassesRank($data['UncatchablePassesRank']);
        }
        if (\array_key_exists('UnderPressureAttempts', $data)) {
            $object->setUnderPressureAttempts($data['UnderPressureAttempts']);
        }
        if (\array_key_exists('UnderPressureAttemptsRank', $data)) {
            $object->setUnderPressureAttemptsRank($data['UnderPressureAttemptsRank']);
        }
        if (\array_key_exists('UnderPressureAttemptsPerGame', $data)) {
            $object->setUnderPressureAttemptsPerGame($data['UnderPressureAttemptsPerGame']);
        }
        if (\array_key_exists('PressuredCompletionPercentage', $data)) {
            $object->setPressuredCompletionPercentage($data['PressuredCompletionPercentage']);
        }
        if (\array_key_exists('PressuredCompletionPercentageRank', $data)) {
            $object->setPressuredCompletionPercentageRank($data['PressuredCompletionPercentageRank']);
        }
        if (\array_key_exists('AverageDefendersInTheBox', $data)) {
            $object->setAverageDefendersInTheBox($data['AverageDefendersInTheBox']);
        }
        if (\array_key_exists('AverageDefendersInTheBoxRank', $data)) {
            $object->setAverageDefendersInTheBoxRank($data['AverageDefendersInTheBoxRank']);
        }
        if (\array_key_exists('BaseFrontCarryRate', $data)) {
            $object->setBaseFrontCarryRate($data['BaseFrontCarryRate']);
        }
        if (\array_key_exists('BaseFrontCarryRateRank', $data)) {
            $object->setBaseFrontCarryRateRank($data['BaseFrontCarryRateRank']);
        }
        if (\array_key_exists('BaseFrontYardsPerCarry', $data)) {
            $object->setBaseFrontYardsPerCarry($data['BaseFrontYardsPerCarry']);
        }
        if (\array_key_exists('BaseFrontYardsPerCarryRank', $data)) {
            $object->setBaseFrontYardsPerCarryRank($data['BaseFrontYardsPerCarryRank']);
        }
        if (\array_key_exists('BreakawayRunRate', $data)) {
            $object->setBreakawayRunRate($data['BreakawayRunRate']);
        }
        if (\array_key_exists('BreakawayRunRateRank', $data)) {
            $object->setBreakawayRunRateRank($data['BreakawayRunRateRank']);
        }
        if (\array_key_exists('BreakawayRuns', $data)) {
            $object->setBreakawayRuns($data['BreakawayRuns']);
        }
        if (\array_key_exists('BreakawayRunsPerGame', $data)) {
            $object->setBreakawayRunsPerGame($data['BreakawayRunsPerGame']);
        }
        if (\array_key_exists('BreakawayRunsPerGameRank', $data)) {
            $object->setBreakawayRunsPerGameRank($data['BreakawayRunsPerGameRank']);
        }
        if (\array_key_exists('BreakawayRunsRank', $data)) {
            $object->setBreakawayRunsRank($data['BreakawayRunsRank']);
        }
        if (\array_key_exists('EvadedTackles', $data)) {
            $object->setEvadedTackles($data['EvadedTackles']);
        }
        if (\array_key_exists('EvadedTacklesPerGame', $data)) {
            $object->setEvadedTacklesPerGame($data['EvadedTacklesPerGame']);
        }
        if (\array_key_exists('EvadedTacklesPerGameRank', $data)) {
            $object->setEvadedTacklesPerGameRank($data['EvadedTacklesPerGameRank']);
        }
        if (\array_key_exists('EvadedTacklesRank', $data)) {
            $object->setEvadedTacklesRank($data['EvadedTacklesRank']);
        }
        if (\array_key_exists('JukeRate', $data)) {
            $object->setJukeRate($data['JukeRate']);
        }
        if (\array_key_exists('JukeRateRank', $data)) {
            $object->setJukeRateRank($data['JukeRateRank']);
        }
        if (\array_key_exists('LightFrontCarryRate', $data)) {
            $object->setLightFrontCarryRate($data['LightFrontCarryRate']);
        }
        if (\array_key_exists('LightFrontCarryRateRank', $data)) {
            $object->setLightFrontCarryRateRank($data['LightFrontCarryRateRank']);
        }
        if (\array_key_exists('LightFrontYardsPerCarry', $data)) {
            $object->setLightFrontYardsPerCarry($data['LightFrontYardsPerCarry']);
        }
        if (\array_key_exists('LightFrontYardsPerCarryRank', $data)) {
            $object->setLightFrontYardsPerCarryRank($data['LightFrontYardsPerCarryRank']);
        }
        if (\array_key_exists('Opportunities', $data)) {
            $object->setOpportunities($data['Opportunities']);
        }
        if (\array_key_exists('OpportunityShare', $data)) {
            $object->setOpportunityShare($data['OpportunityShare']);
        }
        if (\array_key_exists('OpportunityShareRank', $data)) {
            $object->setOpportunityShareRank($data['OpportunityShareRank']);
        }
        if (\array_key_exists('RedZoneOpportunities', $data)) {
            $object->setRedZoneOpportunities($data['RedZoneOpportunities']);
        }
        if (\array_key_exists('RedZoneTouchesPerGameRank', $data)) {
            $object->setRedZoneTouchesPerGameRank($data['RedZoneTouchesPerGameRank']);
        }
        if (\array_key_exists('RedZoneTouchesRank', $data)) {
            $object->setRedZoneTouchesRank($data['RedZoneTouchesRank']);
        }
        if (\array_key_exists('RunBlockingEfficiency', $data)) {
            $object->setRunBlockingEfficiency($data['RunBlockingEfficiency']);
        }
        if (\array_key_exists('RunBlockingEfficiencyRank', $data)) {
            $object->setRunBlockingEfficiencyRank($data['RunBlockingEfficiencyRank']);
        }
        if (\array_key_exists('RushYardsPerGameRank', $data)) {
            $object->setRushYardsPerGameRank($data['RushYardsPerGameRank']);
        }
        if (\array_key_exists('ShotgunCarryRate', $data)) {
            $object->setShotgunCarryRate($data['ShotgunCarryRate']);
        }
        if (\array_key_exists('ShotgunCarryRateRank', $data)) {
            $object->setShotgunCarryRateRank($data['ShotgunCarryRateRank']);
        }
        if (\array_key_exists('ShotgunYardsPerCarry', $data)) {
            $object->setShotgunYardsPerCarry($data['ShotgunYardsPerCarry']);
        }
        if (\array_key_exists('ShotgunYardsPerCarryRank', $data)) {
            $object->setShotgunYardsPerCarryRank($data['ShotgunYardsPerCarryRank']);
        }
        if (\array_key_exists('RedZoneOpportunityShare', $data)) {
            $object->setRedZoneOpportunityShare($data['RedZoneOpportunityShare']);
        }
        if (\array_key_exists('RedZoneOpportunityShareRank', $data)) {
            $object->setRedZoneOpportunityShareRank($data['RedZoneOpportunityShareRank']);
        }
        if (\array_key_exists('RedZoneTDConversionRate', $data)) {
            $object->setRedZoneTDConversionRate($data['RedZoneTDConversionRate']);
        }
        if (\array_key_exists('RedZoneTDConversionRateRank', $data)) {
            $object->setRedZoneTDConversionRateRank($data['RedZoneTDConversionRateRank']);
        }
        if (\array_key_exists('StackedFrontCarryRate', $data)) {
            $object->setStackedFrontCarryRate($data['StackedFrontCarryRate']);
        }
        if (\array_key_exists('StackedFrontCarryRateRank', $data)) {
            $object->setStackedFrontCarryRateRank($data['StackedFrontCarryRateRank']);
        }
        if (\array_key_exists('StackedFrontYardsPerCarry', $data)) {
            $object->setStackedFrontYardsPerCarry($data['StackedFrontYardsPerCarry']);
        }
        if (\array_key_exists('StackedFrontYardsPerCarryRank', $data)) {
            $object->setStackedFrontYardsPerCarryRank($data['StackedFrontYardsPerCarryRank']);
        }
        if (\array_key_exists('StuffedRuns', $data)) {
            $object->setStuffedRuns($data['StuffedRuns']);
        }
        if (\array_key_exists('StuffedRunsRank', $data)) {
            $object->setStuffedRunsRank($data['StuffedRunsRank']);
        }
        if (\array_key_exists('StuffedRunRate', $data)) {
            $object->setStuffedRunRate($data['StuffedRunRate']);
        }
        if (\array_key_exists('StuffedRunRateRank', $data)) {
            $object->setStuffedRunRateRank($data['StuffedRunRateRank']);
        }
        if (\array_key_exists('TeamRunPlays', $data)) {
            $object->setTeamRunPlays($data['TeamRunPlays']);
        }
        if (\array_key_exists('TeamRunPlaysRank', $data)) {
            $object->setTeamRunPlaysRank($data['TeamRunPlaysRank']);
        }
        if (\array_key_exists('TotalYardsPerGameRank', $data)) {
            $object->setTotalYardsPerGameRank($data['TotalYardsPerGameRank']);
        }
        if (\array_key_exists('TotalYardsRank', $data)) {
            $object->setTotalYardsRank($data['TotalYardsRank']);
        }
        if (\array_key_exists('TrueYardsPerCarry', $data)) {
            $object->setTrueYardsPerCarry($data['TrueYardsPerCarry']);
        }
        if (\array_key_exists('TrueYardsPerCarryRank', $data)) {
            $object->setTrueYardsPerCarryRank($data['TrueYardsPerCarryRank']);
        }
        if (\array_key_exists('UnderCenterCarryRate', $data)) {
            $object->setUnderCenterCarryRate($data['UnderCenterCarryRate']);
        }
        if (\array_key_exists('UnderCenterCarryRateRank', $data)) {
            $object->setUnderCenterCarryRateRank($data['UnderCenterCarryRateRank']);
        }
        if (\array_key_exists('UnderCenterYardsPerCarry', $data)) {
            $object->setUnderCenterYardsPerCarry($data['UnderCenterYardsPerCarry']);
        }
        if (\array_key_exists('UnderCenterYardsPerCarryRank', $data)) {
            $object->setUnderCenterYardsPerCarryRank($data['UnderCenterYardsPerCarryRank']);
        }
        if (\array_key_exists('WeightedOpportunities', $data)) {
            $object->setWeightedOpportunities($data['WeightedOpportunities']);
        }
        if (\array_key_exists('WeightedOpportunitiesRank', $data)) {
            $object->setWeightedOpportunitiesRank($data['WeightedOpportunitiesRank']);
        }
        if (\array_key_exists('WeightedOpportunitiesPerGame', $data)) {
            $object->setWeightedOpportunitiesPerGame($data['WeightedOpportunitiesPerGame']);
        }
        if (\array_key_exists('WeightedOpportunitiesPerGameRank', $data)) {
            $object->setWeightedOpportunitiesPerGameRank($data['WeightedOpportunitiesPerGameRank']);
        }
        if (\array_key_exists('YardsCreated', $data)) {
            $object->setYardsCreated($data['YardsCreated']);
        }
        if (\array_key_exists('YardsCreatedPerGame', $data)) {
            $object->setYardsCreatedPerGame($data['YardsCreatedPerGame']);
        }
        if (\array_key_exists('YardsCreatedPerGameRank', $data)) {
            $object->setYardsCreatedPerGameRank($data['YardsCreatedPerGameRank']);
        }
        if (\array_key_exists('YardsCreatedPerCarry', $data)) {
            $object->setYardsCreatedPerCarry($data['YardsCreatedPerCarry']);
        }
        if (\array_key_exists('YardsCreatedPerCarryRank', $data)) {
            $object->setYardsCreatedPerCarryRank($data['YardsCreatedPerCarryRank']);
        }
        if (\array_key_exists('YardsCreatedRank', $data)) {
            $object->setYardsCreatedRank($data['YardsCreatedRank']);
        }
        if (\array_key_exists('YardsPerCarry', $data)) {
            $object->setYardsPerCarry($data['YardsPerCarry']);
        }
        if (\array_key_exists('YardsPerCarryRank', $data)) {
            $object->setYardsPerCarryRank($data['YardsPerCarryRank']);
        }
        if (\array_key_exists('YardsPerOpportunity', $data)) {
            $object->setYardsPerOpportunity($data['YardsPerOpportunity']);
        }
        if (\array_key_exists('YardsPerRouteRun', $data)) {
            $object->setYardsPerRouteRun($data['YardsPerRouteRun']);
        }
        if (\array_key_exists('YardsPerRouteRunRank', $data)) {
            $object->setYardsPerRouteRunRank($data['YardsPerRouteRunRank']);
        }
        if (\array_key_exists('YardsPerTouch', $data)) {
            $object->setYardsPerTouch($data['YardsPerTouch']);
        }
        if (\array_key_exists('YardsPerTouchRank', $data)) {
            $object->setYardsPerTouchRank($data['YardsPerTouchRank']);
        }
        if (\array_key_exists('AirYardsPerReception', $data)) {
            $object->setAirYardsPerReception($data['AirYardsPerReception']);
        }
        if (\array_key_exists('AirYardsPerTarget', $data)) {
            $object->setAirYardsPerTarget($data['AirYardsPerTarget']);
        }
        if (\array_key_exists('Cushion', $data)) {
            $object->setCushion($data['Cushion']);
        }
        if (\array_key_exists('CushionRank', $data)) {
            $object->setCushionRank($data['CushionRank']);
        }
        if (\array_key_exists('AverageTargetDistance', $data)) {
            $object->setAverageTargetDistance($data['AverageTargetDistance']);
        }
        if (\array_key_exists('AverageTargetDistanceRank', $data)) {
            $object->setAverageTargetDistanceRank($data['AverageTargetDistanceRank']);
        }
        if (\array_key_exists('Burns', $data)) {
            $object->setBurns($data['Burns']);
        }
        if (\array_key_exists('CatchableTargetsPerGame', $data)) {
            $object->setCatchableTargetsPerGame($data['CatchableTargetsPerGame']);
        }
        if (\array_key_exists('CatchableTargetsRank', $data)) {
            $object->setCatchableTargetsRank($data['CatchableTargetsRank']);
        }
        if (\array_key_exists('ContestedCatchConversionRate', $data)) {
            $object->setContestedCatchConversionRate($data['ContestedCatchConversionRate']);
        }
        if (\array_key_exists('ContestedCatchConversionRateRank', $data)) {
            $object->setContestedCatchConversionRateRank($data['ContestedCatchConversionRateRank']);
        }
        if (\array_key_exists('ContestedCatches', $data)) {
            $object->setContestedCatches($data['ContestedCatches']);
        }
        if (\array_key_exists('ContestedTargets', $data)) {
            $object->setContestedTargets($data['ContestedTargets']);
        }
        if (\array_key_exists('HogRate', $data)) {
            $object->setHogRate($data['HogRate']);
        }
        if (\array_key_exists('HogRateRank', $data)) {
            $object->setHogRateRank($data['HogRateRank']);
        }
        if (\array_key_exists('PassSnapsRank', $data)) {
            $object->setPassSnapsRank($data['PassSnapsRank']);
        }
        if (\array_key_exists('RunSnapsRank', $data)) {
            $object->setRunSnapsRank($data['RunSnapsRank']);
        }
        if (\array_key_exists('SlotCatchRate', $data)) {
            $object->setSlotCatchRate($data['SlotCatchRate']);
        }
        if (\array_key_exists('SlotCatchRateRank', $data)) {
            $object->setSlotCatchRateRank($data['SlotCatchRateRank']);
        }
        if (\array_key_exists('SlotSnapsRank', $data)) {
            $object->setSlotSnapsRank($data['SlotSnapsRank']);
        }
        if (\array_key_exists('SnapweighedGameScript', $data)) {
            $object->setSnapweighedGameScript($data['SnapweighedGameScript']);
        }
        if (\array_key_exists('SnapweighedGameScriptRank', $data)) {
            $object->setSnapweighedGameScriptRank($data['SnapweighedGameScriptRank']);
        }
        if (\array_key_exists('TargetPremium', $data)) {
            $object->setTargetPremium($data['TargetPremium']);
        }
        if (\array_key_exists('TargetPremiumRank', $data)) {
            $object->setTargetPremiumRank($data['TargetPremiumRank']);
        }
        if (\array_key_exists('TargetQualityRating', $data)) {
            $object->setTargetQualityRating($data['TargetQualityRating']);
        }
        if (\array_key_exists('TargetQualityRatingRank', $data)) {
            $object->setTargetQualityRatingRank($data['TargetQualityRatingRank']);
        }
        if (\array_key_exists('TargetAccuracy', $data)) {
            $object->setTargetAccuracy($data['TargetAccuracy']);
        }
        if (\array_key_exists('TargetAccuracyRank', $data)) {
            $object->setTargetAccuracyRank($data['TargetAccuracyRank']);
        }
        if (\array_key_exists('TargetDistance', $data)) {
            $object->setTargetDistance($data['TargetDistance']);
        }
        if (\array_key_exists('TargetDistancePerGame', $data)) {
            $object->setTargetDistancePerGame($data['TargetDistancePerGame']);
        }
        if (\array_key_exists('TargetDistanceRank', $data)) {
            $object->setTargetDistanceRank($data['TargetDistanceRank']);
        }
        if (\array_key_exists('TrueCatchRate', $data)) {
            $object->setTrueCatchRate($data['TrueCatchRate']);
        }
        if (\array_key_exists('TrueCatchRateRank', $data)) {
            $object->setTrueCatchRateRank($data['TrueCatchRateRank']);
        }
        if (\array_key_exists('UncatchableTargets', $data)) {
            $object->setUncatchableTargets($data['UncatchableTargets']);
        }
        if (\array_key_exists('UncatchableTargetsGame', $data)) {
            $object->setUncatchableTargetsGame($data['UncatchableTargetsGame']);
        }
        if (\array_key_exists('YardsPerReceptionRank', $data)) {
            $object->setYardsPerReceptionRank($data['YardsPerReceptionRank']);
        }
        if (\array_key_exists('YardsPerPassRoute', $data)) {
            $object->setYardsPerPassRoute($data['YardsPerPassRoute']);
        }
        if (\array_key_exists('YardsPerPassRouteRank', $data)) {
            $object->setYardsPerPassRouteRank($data['YardsPerPassRouteRank']);
        }
        if (\array_key_exists('TeamDefensiveSnaps', $data)) {
            $object->setTeamDefensiveSnaps($data['TeamDefensiveSnaps']);
        }
        if (\array_key_exists('SoloTackles', $data)) {
            $object->setSoloTackles($data['SoloTackles']);
        }
        if (\array_key_exists('SoloTacklesRank', $data)) {
            $object->setSoloTacklesRank($data['SoloTacklesRank']);
        }
        if (\array_key_exists('SoloTacklesPerGame', $data)) {
            $object->setSoloTacklesPerGame($data['SoloTacklesPerGame']);
        }
        if (\array_key_exists('AssistedTackles', $data)) {
            $object->setAssistedTackles($data['AssistedTackles']);
        }
        if (\array_key_exists('AssistedTacklesRank', $data)) {
            $object->setAssistedTacklesRank($data['AssistedTacklesRank']);
        }
        if (\array_key_exists('AssistedTacklesPerGame', $data)) {
            $object->setAssistedTacklesPerGame($data['AssistedTacklesPerGame']);
        }
        if (\array_key_exists('TotalTackles', $data)) {
            $object->setTotalTackles($data['TotalTackles']);
        }
        if (\array_key_exists('TotalTacklesRank', $data)) {
            $object->setTotalTacklesRank($data['TotalTacklesRank']);
        }
        if (\array_key_exists('TotalTacklesPerGame', $data)) {
            $object->setTotalTacklesPerGame($data['TotalTacklesPerGame']);
        }
        if (\array_key_exists('Sacks', $data)) {
            $object->setSacks($data['Sacks']);
        }
        if (\array_key_exists('SacksRank', $data)) {
            $object->setSacksRank($data['SacksRank']);
        }
        if (\array_key_exists('SackYards', $data)) {
            $object->setSackYards($data['SackYards']);
        }
        if (\array_key_exists('ForcedFumbles', $data)) {
            $object->setForcedFumbles($data['ForcedFumbles']);
        }
        if (\array_key_exists('ForcedFumblesRank', $data)) {
            $object->setForcedFumblesRank($data['ForcedFumblesRank']);
        }
        if (\array_key_exists('FumbleRecoveries', $data)) {
            $object->setFumbleRecoveries($data['FumbleRecoveries']);
        }
        if (\array_key_exists('FumbleRecoveriesRank', $data)) {
            $object->setFumbleRecoveriesRank($data['FumbleRecoveriesRank']);
        }
        if (\array_key_exists('BattedPasses', $data)) {
            $object->setBattedPasses($data['BattedPasses']);
        }
        if (\array_key_exists('BattedPassesRank', $data)) {
            $object->setBattedPassesRank($data['BattedPassesRank']);
        }
        if (\array_key_exists('TacklesForLoss', $data)) {
            $object->setTacklesForLoss($data['TacklesForLoss']);
        }
        if (\array_key_exists('TacklesForLossRank', $data)) {
            $object->setTacklesForLossRank($data['TacklesForLossRank']);
        }
        if (\array_key_exists('RunStuffs', $data)) {
            $object->setRunStuffs($data['RunStuffs']);
        }
        if (\array_key_exists('RunStuffsRank', $data)) {
            $object->setRunStuffsRank($data['RunStuffsRank']);
        }
        if (\array_key_exists('PassBreakups', $data)) {
            $object->setPassBreakups($data['PassBreakups']);
        }
        if (\array_key_exists('PassBreakupsRank', $data)) {
            $object->setPassBreakupsRank($data['PassBreakupsRank']);
        }
        if (\array_key_exists('PassBreakupsPerGame', $data)) {
            $object->setPassBreakupsPerGame($data['PassBreakupsPerGame']);
        }
        if (\array_key_exists('PassBreakupsPerGameRank', $data)) {
            $object->setPassBreakupsPerGameRank($data['PassBreakupsPerGameRank']);
        }
        if (\array_key_exists('PassBreakupsPerTarget', $data)) {
            $object->setPassBreakupsPerTarget($data['PassBreakupsPerTarget']);
        }
        if (\array_key_exists('PassBreakupsPerTargetRank', $data)) {
            $object->setPassBreakupsPerTargetRank($data['PassBreakupsPerTargetRank']);
        }
        if (\array_key_exists('Interceptions', $data)) {
            $object->setInterceptions($data['Interceptions']);
        }
        if (\array_key_exists('InterceptionsRank', $data)) {
            $object->setInterceptionsRank($data['InterceptionsRank']);
        }
        if (\array_key_exists('TargetsAllowed', $data)) {
            $object->setTargetsAllowed($data['TargetsAllowed']);
        }
        if (\array_key_exists('TargetsAllowedRank', $data)) {
            $object->setTargetsAllowedRank($data['TargetsAllowedRank']);
        }
        if (\array_key_exists('ReceptionsAllowed', $data)) {
            $object->setReceptionsAllowed($data['ReceptionsAllowed']);
        }
        if (\array_key_exists('ReceptionsAllowedRank', $data)) {
            $object->setReceptionsAllowedRank($data['ReceptionsAllowedRank']);
        }
        if (\array_key_exists('YardsAllowed', $data)) {
            $object->setYardsAllowed($data['YardsAllowed']);
        }
        if (\array_key_exists('YardsAllowedRank', $data)) {
            $object->setYardsAllowedRank($data['YardsAllowedRank']);
        }
        if (\array_key_exists('YardsAllowedPerGame', $data)) {
            $object->setYardsAllowedPerGame($data['YardsAllowedPerGame']);
        }
        if (\array_key_exists('YardsAllowedPerGameRank', $data)) {
            $object->setYardsAllowedPerGameRank($data['YardsAllowedPerGameRank']);
        }
        if (\array_key_exists('YardsPerReceptionAllowed', $data)) {
            $object->setYardsPerReceptionAllowed($data['YardsPerReceptionAllowed']);
        }
        if (\array_key_exists('YardsPerReceptionAllowedRank', $data)) {
            $object->setYardsPerReceptionAllowedRank($data['YardsPerReceptionAllowedRank']);
        }
        if (\array_key_exists('CatchRateAllowed', $data)) {
            $object->setCatchRateAllowed($data['CatchRateAllowed']);
        }
        if (\array_key_exists('CatchRateAllowedRank', $data)) {
            $object->setCatchRateAllowedRank($data['CatchRateAllowedRank']);
        }
        if (\array_key_exists('PasserRatingAllowed', $data)) {
            $object->setPasserRatingAllowed($data['PasserRatingAllowed']);
        }
        if (\array_key_exists('PasserRatingAllowedRank', $data)) {
            $object->setPasserRatingAllowedRank($data['PasserRatingAllowedRank']);
        }
        if (\array_key_exists('TouchdownsAllowed', $data)) {
            $object->setTouchdownsAllowed($data['TouchdownsAllowed']);
        }
        if (\array_key_exists('TouchdownsAllowedRank', $data)) {
            $object->setTouchdownsAllowedRank($data['TouchdownsAllowedRank']);
        }
        if (\array_key_exists('InterceptionsPerTarget', $data)) {
            $object->setInterceptionsPerTarget($data['InterceptionsPerTarget']);
        }
        if (\array_key_exists('InterceptionsPerTargetRank', $data)) {
            $object->setInterceptionsPerTargetRank($data['InterceptionsPerTargetRank']);
        }
        if (\array_key_exists('CoverageRating', $data)) {
            $object->setCoverageRating($data['CoverageRating']);
        }
        if (\array_key_exists('CoverageRatingRank', $data)) {
            $object->setCoverageRatingRank($data['CoverageRatingRank']);
        }
        if (\array_key_exists('RunPlayStops', $data)) {
            $object->setRunPlayStops($data['RunPlayStops']);
        }
        if (\array_key_exists('RunPlayStopsRank', $data)) {
            $object->setRunPlayStopsRank($data['RunPlayStopsRank']);
        }
        if (\array_key_exists('TargetsAllowedPerGame', $data)) {
            $object->setTargetsAllowedPerGame($data['TargetsAllowedPerGame']);
        }
        if (\array_key_exists('TargetsAllowedPerGameRank', $data)) {
            $object->setTargetsAllowedPerGameRank($data['TargetsAllowedPerGameRank']);
        }
        if (\array_key_exists('ReceptionsAllowedPerGame', $data)) {
            $object->setReceptionsAllowedPerGame($data['ReceptionsAllowedPerGame']);
        }
        if (\array_key_exists('ReceptionsAllowedPerGameRank', $data)) {
            $object->setReceptionsAllowedPerGameRank($data['ReceptionsAllowedPerGameRank']);
        }
        if (\array_key_exists('TargetRate', $data)) {
            $object->setTargetRate($data['TargetRate']);
        }
        if (\array_key_exists('TargetRateRank', $data)) {
            $object->setTargetRateRank($data['TargetRateRank']);
        }
        if (\array_key_exists('BurnRateRank', $data)) {
            $object->setBurnRateRank($data['BurnRateRank']);
        }
        if (\array_key_exists('AverageCushion', $data)) {
            $object->setAverageCushion($data['AverageCushion']);
        }
        if (\array_key_exists('AverageCushionRank', $data)) {
            $object->setAverageCushionRank($data['AverageCushionRank']);
        }
        if (\array_key_exists('YardsPerTargetAllowed', $data)) {
            $object->setYardsPerTargetAllowed($data['YardsPerTargetAllowed']);
        }
        if (\array_key_exists('YardsPerTargetAllowedRank', $data)) {
            $object->setYardsPerTargetAllowedRank($data['YardsPerTargetAllowedRank']);
        }
        if (\array_key_exists('RoutesDefended', $data)) {
            $object->setRoutesDefended($data['RoutesDefended']);
        }
        if (\array_key_exists('RoutesDefendedRank', $data)) {
            $object->setRoutesDefendedRank($data['RoutesDefendedRank']);
        }
        if (\array_key_exists('RoutesDefendedPerGame', $data)) {
            $object->setRoutesDefendedPerGame($data['RoutesDefendedPerGame']);
        }
        if (\array_key_exists('RoutesDefendedPerGameRank', $data)) {
            $object->setRoutesDefendedPerGameRank($data['RoutesDefendedPerGameRank']);
        }
        if (\array_key_exists('FantasyPoints', $data)) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        if (\array_key_exists('FantasyPointsPerAttempt', $data)) {
            $object->setFantasyPointsPerAttempt($data['FantasyPointsPerAttempt']);
        }
        if (\array_key_exists('FantasyPointsPerAttemptRank', $data)) {
            $object->setFantasyPointsPerAttemptRank($data['FantasyPointsPerAttemptRank']);
        }
        if (\array_key_exists('FantasyPointsPerDropBack', $data)) {
            $object->setFantasyPointsPerDropBack($data['FantasyPointsPerDropBack']);
        }
        if (\array_key_exists('FantasyPointsPerDropBackRank', $data)) {
            $object->setFantasyPointsPerDropBackRank($data['FantasyPointsPerDropBackRank']);
        }
        if (\array_key_exists('FantasyPointsPerGame', $data)) {
            $object->setFantasyPointsPerGame($data['FantasyPointsPerGame']);
        }
        if (\array_key_exists('FantasyPointsPerGameDifferential', $data)) {
            $object->setFantasyPointsPerGameDifferential($data['FantasyPointsPerGameDifferential']);
        }
        if (\array_key_exists('FantasyPointsPerGameRank', $data)) {
            $object->setFantasyPointsPerGameRank($data['FantasyPointsPerGameRank']);
        }
        if (\array_key_exists('FantasyPointsPerOpportunity', $data)) {
            $object->setFantasyPointsPerOpportunity($data['FantasyPointsPerOpportunity']);
        }
        if (\array_key_exists('FantasyPointsPerOpportunityRank', $data)) {
            $object->setFantasyPointsPerOpportunityRank($data['FantasyPointsPerOpportunityRank']);
        }
        if (\array_key_exists('FantasyPointsPerSnap', $data)) {
            $object->setFantasyPointsPerSnap($data['FantasyPointsPerSnap']);
        }
        if (\array_key_exists('FantasyPointsPerSnapRank', $data)) {
            $object->setFantasyPointsPerSnapRank($data['FantasyPointsPerSnapRank']);
        }
        if (\array_key_exists('FantasyPointsPerPassRoute', $data)) {
            $object->setFantasyPointsPerPassRoute($data['FantasyPointsPerPassRoute']);
        }
        if (\array_key_exists('FantasyPointsPerPassRouteRank', $data)) {
            $object->setFantasyPointsPerPassRouteRank($data['FantasyPointsPerPassRouteRank']);
        }
        if (\array_key_exists('FantasyPointsPerTarget', $data)) {
            $object->setFantasyPointsPerTarget($data['FantasyPointsPerTarget']);
        }
        if (\array_key_exists('FantasyPointsPerTargetRank', $data)) {
            $object->setFantasyPointsPerTargetRank($data['FantasyPointsPerTargetRank']);
        }
        if (\array_key_exists('SlotFantasyPoints', $data)) {
            $object->setSlotFantasyPoints($data['SlotFantasyPoints']);
        }
        if (\array_key_exists('SlotFantasyPointsRank', $data)) {
            $object->setSlotFantasyPointsRank($data['SlotFantasyPointsRank']);
        }
        if (\array_key_exists('SlotFantasyPointsPerGame', $data)) {
            $object->setSlotFantasyPointsPerGame($data['SlotFantasyPointsPerGame']);
        }
        if (\array_key_exists('SlotFantasyPointsPerGameRank', $data)) {
            $object->setSlotFantasyPointsPerGameRank($data['SlotFantasyPointsPerGameRank']);
        }
        if (\array_key_exists('SlotFantasyPointsPerTarget', $data)) {
            $object->setSlotFantasyPointsPerTarget($data['SlotFantasyPointsPerTarget']);
        }
        if (\array_key_exists('SlotFantasyPointsPerTargetRank', $data)) {
            $object->setSlotFantasyPointsPerTargetRank($data['SlotFantasyPointsPerTargetRank']);
        }
        if (\array_key_exists('FantasyPointsAllowed', $data)) {
            $object->setFantasyPointsAllowed($data['FantasyPointsAllowed']);
        }
        if (\array_key_exists('FantasyPointsAllowedPerTarget', $data)) {
            $object->setFantasyPointsAllowedPerTarget($data['FantasyPointsAllowedPerTarget']);
        }
        if (\array_key_exists('FantasyPointsAllowedPerTargetRank', $data)) {
            $object->setFantasyPointsAllowedPerTargetRank($data['FantasyPointsAllowedPerTargetRank']);
        }
        if (\array_key_exists('FantasyPointsAllowedPerGame', $data)) {
            $object->setFantasyPointsAllowedPerGame($data['FantasyPointsAllowedPerGame']);
        }
        if (\array_key_exists('FantasyPointsAllowedPerGameRank', $data)) {
            $object->setFantasyPointsAllowedPerGameRank($data['FantasyPointsAllowedPerGameRank']);
        }
        if (\array_key_exists('FantasyPointsAllowedPerSnap', $data)) {
            $object->setFantasyPointsAllowedPerSnap($data['FantasyPointsAllowedPerSnap']);
        }
        if (\array_key_exists('FantasyPointsAllowedPerSnapRank', $data)) {
            $object->setFantasyPointsAllowedPerSnapRank($data['FantasyPointsAllowedPerSnapRank']);
        }
        if (\array_key_exists('FantasyPointsAllowedPerCoverSnap', $data)) {
            $object->setFantasyPointsAllowedPerCoverSnap($data['FantasyPointsAllowedPerCoverSnap']);
        }
        if (\array_key_exists('FantasyPointsAllowedPerCoverSnapRank', $data)) {
            $object->setFantasyPointsAllowedPerCoverSnapRank($data['FantasyPointsAllowedPerCoverSnapRank']);
        }
        if (\array_key_exists('ExpectedFantasyPoints', $data)) {
            $object->setExpectedFantasyPoints($data['ExpectedFantasyPoints']);
        }
        if (\array_key_exists('ExpectedFantasyPointsRank', $data)) {
            $object->setExpectedFantasyPointsRank($data['ExpectedFantasyPointsRank']);
        }
        if (\array_key_exists('ExpectedFantasyPointsPerGame', $data)) {
            $object->setExpectedFantasyPointsPerGame($data['ExpectedFantasyPointsPerGame']);
        }
        if (\array_key_exists('ExpectedFantasyPointsPerGameRank', $data)) {
            $object->setExpectedFantasyPointsPerGameRank($data['ExpectedFantasyPointsPerGameRank']);
        }
        if (\array_key_exists('NormalizedFantasyPointsPerGame', $data)) {
            $object->setNormalizedFantasyPointsPerGame($data['NormalizedFantasyPointsPerGame']);
        }
        if (\array_key_exists('NormalizedFantasyPointsPerGameRank', $data)) {
            $object->setNormalizedFantasyPointsPerGameRank($data['NormalizedFantasyPointsPerGameRank']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getPosition()) {
            $data['Position'] = $object->getPosition();
        }
        if (null !== $object->getFantasyPosition()) {
            $data['FantasyPosition'] = $object->getFantasyPosition();
        }
        if (null !== $object->getPositionGroup()) {
            $data['PositionGroup'] = $object->getPositionGroup();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getGames()) {
            $data['Games'] = $object->getGames();
        }
        if (null !== $object->getSnaps()) {
            $data['Snaps'] = $object->getSnaps();
        }
        if (null !== $object->getSnapShare()) {
            $data['SnapShare'] = $object->getSnapShare();
        }
        if (null !== $object->getSnapShareRank()) {
            $data['SnapShareRank'] = $object->getSnapShareRank();
        }
        if (null !== $object->getSlotRate()) {
            $data['SlotRate'] = $object->getSlotRate();
        }
        if (null !== $object->getSlotRateRank()) {
            $data['SlotRateRank'] = $object->getSlotRateRank();
        }
        if (null !== $object->getTargetSeparation()) {
            $data['TargetSeparation'] = $object->getTargetSeparation();
        }
        if (null !== $object->getTargetSeparationRank()) {
            $data['TargetSeparationRank'] = $object->getTargetSeparationRank();
        }
        if (null !== $object->getBurnRate()) {
            $data['BurnRate'] = $object->getBurnRate();
        }
        if (null !== $object->getAirYards()) {
            $data['AirYards'] = $object->getAirYards();
        }
        if (null !== $object->getAirYardsPerGame()) {
            $data['AirYardsPerGame'] = $object->getAirYardsPerGame();
        }
        if (null !== $object->getAirYardsRank()) {
            $data['AirYardsRank'] = $object->getAirYardsRank();
        }
        if (null !== $object->getCarries()) {
            $data['Carries'] = $object->getCarries();
        }
        if (null !== $object->getCarriesInside10()) {
            $data['CarriesInside10'] = $object->getCarriesInside10();
        }
        if (null !== $object->getCarriesInside10PerGame()) {
            $data['CarriesInside10PerGame'] = $object->getCarriesInside10PerGame();
        }
        if (null !== $object->getCarriesInside5()) {
            $data['CarriesInside5'] = $object->getCarriesInside5();
        }
        if (null !== $object->getCarriesInside5PerGame()) {
            $data['CarriesInside5PerGame'] = $object->getCarriesInside5PerGame();
        }
        if (null !== $object->getCarriesPerGame()) {
            $data['CarriesPerGame'] = $object->getCarriesPerGame();
        }
        if (null !== $object->getCarriesPerGameRank()) {
            $data['CarriesPerGameRank'] = $object->getCarriesPerGameRank();
        }
        if (null !== $object->getCarriesRank()) {
            $data['CarriesRank'] = $object->getCarriesRank();
        }
        if (null !== $object->getGameScript()) {
            $data['GameScript'] = $object->getGameScript();
        }
        if (null !== $object->getGameScriptRank()) {
            $data['GameScriptRank'] = $object->getGameScriptRank();
        }
        if (null !== $object->getGoalLineCarries()) {
            $data['GoalLineCarries'] = $object->getGoalLineCarries();
        }
        if (null !== $object->getGoalLineCarriesPerGame()) {
            $data['GoalLineCarriesPerGame'] = $object->getGoalLineCarriesPerGame();
        }
        if (null !== $object->getGoalLineCarriesPerGameRank()) {
            $data['GoalLineCarriesPerGameRank'] = $object->getGoalLineCarriesPerGameRank();
        }
        if (null !== $object->getGoalLineCarriesRank()) {
            $data['GoalLineCarriesRank'] = $object->getGoalLineCarriesRank();
        }
        if (null !== $object->getProductionPremium()) {
            $data['ProductionPremium'] = $object->getProductionPremium();
        }
        if (null !== $object->getProductionPremiumRank()) {
            $data['ProductionPremiumRank'] = $object->getProductionPremiumRank();
        }
        if (null !== $object->getRedZoneCarries()) {
            $data['RedZoneCarries'] = $object->getRedZoneCarries();
        }
        if (null !== $object->getRedZoneCarriesPerGame()) {
            $data['RedZoneCarriesPerGame'] = $object->getRedZoneCarriesPerGame();
        }
        if (null !== $object->getRedZoneCarriesPerGameRank()) {
            $data['RedZoneCarriesPerGameRank'] = $object->getRedZoneCarriesPerGameRank();
        }
        if (null !== $object->getRedZoneCarriesRank()) {
            $data['RedZoneCarriesRank'] = $object->getRedZoneCarriesRank();
        }
        if (null !== $object->getRushingTouchdowns()) {
            $data['RushingTouchdowns'] = $object->getRushingTouchdowns();
        }
        if (null !== $object->getRushingTouchdownsRank()) {
            $data['RushingTouchdownsRank'] = $object->getRushingTouchdownsRank();
        }
        if (null !== $object->getRushingYards()) {
            $data['RushingYards'] = $object->getRushingYards();
        }
        if (null !== $object->getRushingYardsRank()) {
            $data['RushingYardsRank'] = $object->getRushingYardsRank();
        }
        if (null !== $object->getRushYardsPerGame()) {
            $data['RushYardsPerGame'] = $object->getRushYardsPerGame();
        }
        if (null !== $object->getRedZoneSnaps()) {
            $data['RedZoneSnaps'] = $object->getRedZoneSnaps();
        }
        if (null !== $object->getRunSnaps()) {
            $data['RunSnaps'] = $object->getRunSnaps();
        }
        if (null !== $object->getPassSnaps()) {
            $data['PassSnaps'] = $object->getPassSnaps();
        }
        if (null !== $object->getSnapweightedGameScript()) {
            $data['SnapweightedGameScript'] = $object->getSnapweightedGameScript();
        }
        if (null !== $object->getSnapweightedGameScriptRank()) {
            $data['SnapweightedGameScriptRank'] = $object->getSnapweightedGameScriptRank();
        }
        if (null !== $object->getTeamPassPlays()) {
            $data['TeamPassPlays'] = $object->getTeamPassPlays();
        }
        if (null !== $object->getTeamPassPlaysRank()) {
            $data['TeamPassPlaysRank'] = $object->getTeamPassPlaysRank();
        }
        if (null !== $object->getTouchdownRate()) {
            $data['TouchdownRate'] = $object->getTouchdownRate();
        }
        if (null !== $object->getWeeklyVolatility()) {
            $data['WeeklyVolatility'] = $object->getWeeklyVolatility();
        }
        if (null !== $object->getWeeklyVolatilityRank()) {
            $data['WeeklyVolatilityRank'] = $object->getWeeklyVolatilityRank();
        }
        if (null !== $object->getVOS()) {
            $data['VOS'] = $object->getVOS();
        }
        if (null !== $object->getVOSRank()) {
            $data['VOSRank'] = $object->getVOSRank();
        }
        if (null !== $object->getYardsPerTarget()) {
            $data['YardsPerTarget'] = $object->getYardsPerTarget();
        }
        if (null !== $object->getYardsPerTargetRank()) {
            $data['YardsPerTargetRank'] = $object->getYardsPerTargetRank();
        }
        if (null !== $object->getYardsPerReception()) {
            $data['YardsPerReception'] = $object->getYardsPerReception();
        }
        if (null !== $object->getYardsAfterCatch()) {
            $data['YardsAfterCatch'] = $object->getYardsAfterCatch();
        }
        if (null !== $object->getYardsAfterCatchPerGame()) {
            $data['YardsAfterCatchPerGame'] = $object->getYardsAfterCatchPerGame();
        }
        if (null !== $object->getYardsAfterCatchPerReception()) {
            $data['YardsAfterCatchPerReception'] = $object->getYardsAfterCatchPerReception();
        }
        if (null !== $object->getYardsAfterCatchPerTarget()) {
            $data['YardsAfterCatchPerTarget'] = $object->getYardsAfterCatchPerTarget();
        }
        if (null !== $object->getYardsAfterCatchRank()) {
            $data['YardsAfterCatchRank'] = $object->getYardsAfterCatchRank();
        }
        if (null !== $object->getTotalTouchdowns()) {
            $data['TotalTouchdowns'] = $object->getTotalTouchdowns();
        }
        if (null !== $object->getTotalTouchdownsRank()) {
            $data['TotalTouchdownsRank'] = $object->getTotalTouchdownsRank();
        }
        if (null !== $object->getTotalTouches()) {
            $data['TotalTouches'] = $object->getTotalTouches();
        }
        if (null !== $object->getTotalYards()) {
            $data['TotalYards'] = $object->getTotalYards();
        }
        if (null !== $object->getTotalYardsPerGame()) {
            $data['TotalYardsPerGame'] = $object->getTotalYardsPerGame();
        }
        if (null !== $object->getTargets()) {
            $data['Targets'] = $object->getTargets();
        }
        if (null !== $object->getTargetShare()) {
            $data['TargetShare'] = $object->getTargetShare();
        }
        if (null !== $object->getTargetShareRank()) {
            $data['TargetShareRank'] = $object->getTargetShareRank();
        }
        if (null !== $object->getTargetsInside10()) {
            $data['TargetsInside10'] = $object->getTargetsInside10();
        }
        if (null !== $object->getTargetsInside10PerGame()) {
            $data['TargetsInside10PerGame'] = $object->getTargetsInside10PerGame();
        }
        if (null !== $object->getTargetsInside5()) {
            $data['TargetsInside5'] = $object->getTargetsInside5();
        }
        if (null !== $object->getTargetsInside5PerGame()) {
            $data['TargetsInside5PerGame'] = $object->getTargetsInside5PerGame();
        }
        if (null !== $object->getTargetsPerGame()) {
            $data['TargetsPerGame'] = $object->getTargetsPerGame();
        }
        if (null !== $object->getTargetsPerGameRank()) {
            $data['TargetsPerGameRank'] = $object->getTargetsPerGameRank();
        }
        if (null !== $object->getTargetsRank()) {
            $data['TargetsRank'] = $object->getTargetsRank();
        }
        if (null !== $object->getSlotSnaps()) {
            $data['SlotSnaps'] = $object->getSlotSnaps();
        }
        if (null !== $object->getSlotYPR()) {
            $data['SlotYPR'] = $object->getSlotYPR();
        }
        if (null !== $object->getSlotYPRRank()) {
            $data['SlotYPRRank'] = $object->getSlotYPRRank();
        }
        if (null !== $object->getSlotYPT()) {
            $data['SlotYPT'] = $object->getSlotYPT();
        }
        if (null !== $object->getSlotYPTRank()) {
            $data['SlotYPTRank'] = $object->getSlotYPTRank();
        }
        if (null !== $object->getRedZoneSnapShare()) {
            $data['RedZoneSnapShare'] = $object->getRedZoneSnapShare();
        }
        if (null !== $object->getRedZoneSnapShareRank()) {
            $data['RedZoneSnapShareRank'] = $object->getRedZoneSnapShareRank();
        }
        if (null !== $object->getRouteParticipation()) {
            $data['RouteParticipation'] = $object->getRouteParticipation();
        }
        if (null !== $object->getRouteParticipationRank()) {
            $data['RouteParticipationRank'] = $object->getRouteParticipationRank();
        }
        if (null !== $object->getPassRoutes()) {
            $data['PassRoutes'] = $object->getPassRoutes();
        }
        if (null !== $object->getPassRoutesPerGame()) {
            $data['PassRoutesPerGame'] = $object->getPassRoutesPerGame();
        }
        if (null !== $object->getPassRoutesPerGameRank()) {
            $data['PassRoutesPerGameRank'] = $object->getPassRoutesPerGameRank();
        }
        if (null !== $object->getRedZoneReceptions()) {
            $data['RedZoneReceptions'] = $object->getRedZoneReceptions();
        }
        if (null !== $object->getRedZoneReceptionsRank()) {
            $data['RedZoneReceptionsRank'] = $object->getRedZoneReceptionsRank();
        }
        if (null !== $object->getRedZoneTargets()) {
            $data['RedZoneTargets'] = $object->getRedZoneTargets();
        }
        if (null !== $object->getRedZoneTargetShare()) {
            $data['RedZoneTargetShare'] = $object->getRedZoneTargetShare();
        }
        if (null !== $object->getRedZoneTargetShareRank()) {
            $data['RedZoneTargetShareRank'] = $object->getRedZoneTargetShareRank();
        }
        if (null !== $object->getRedZoneTargetsRank()) {
            $data['RedZoneTargetsRank'] = $object->getRedZoneTargetsRank();
        }
        if (null !== $object->getRedZoneTouches()) {
            $data['RedZoneTouches'] = $object->getRedZoneTouches();
        }
        if (null !== $object->getRedZoneTouchesPerGame()) {
            $data['RedZoneTouchesPerGame'] = $object->getRedZoneTouchesPerGame();
        }
        if (null !== $object->getQBRatingWhenTargeted()) {
            $data['QBRatingWhenTargeted'] = $object->getQBRatingWhenTargeted();
        }
        if (null !== $object->getQBRatingWhenTargetedRank()) {
            $data['QBRatingWhenTargetedRank'] = $object->getQBRatingWhenTargetedRank();
        }
        if (null !== $object->getReceivingTDs()) {
            $data['ReceivingTDs'] = $object->getReceivingTDs();
        }
        if (null !== $object->getReceivingYards()) {
            $data['ReceivingYards'] = $object->getReceivingYards();
        }
        if (null !== $object->getReceivingYardsPerGame()) {
            $data['ReceivingYardsPerGame'] = $object->getReceivingYardsPerGame();
        }
        if (null !== $object->getReceivingYardsPerGameRank()) {
            $data['ReceivingYardsPerGameRank'] = $object->getReceivingYardsPerGameRank();
        }
        if (null !== $object->getReceivingYardsRank()) {
            $data['ReceivingYardsRank'] = $object->getReceivingYardsRank();
        }
        if (null !== $object->getReceptions()) {
            $data['Receptions'] = $object->getReceptions();
        }
        if (null !== $object->getReceptionsPerGame()) {
            $data['ReceptionsPerGame'] = $object->getReceptionsPerGame();
        }
        if (null !== $object->getReceptionsPerGameRank()) {
            $data['ReceptionsPerGameRank'] = $object->getReceptionsPerGameRank();
        }
        if (null !== $object->getReceptionsRank()) {
            $data['ReceptionsRank'] = $object->getReceptionsRank();
        }
        if (null !== $object->getRedZoneCatchRate()) {
            $data['RedZoneCatchRate'] = $object->getRedZoneCatchRate();
        }
        if (null !== $object->getRedZoneCatchRateRank()) {
            $data['RedZoneCatchRateRank'] = $object->getRedZoneCatchRateRank();
        }
        if (null !== $object->getCatchableTargetRate()) {
            $data['CatchableTargetRate'] = $object->getCatchableTargetRate();
        }
        if (null !== $object->getCatchableTargetRateRank()) {
            $data['CatchableTargetRateRank'] = $object->getCatchableTargetRateRank();
        }
        if (null !== $object->getCatchableTargets()) {
            $data['CatchableTargets'] = $object->getCatchableTargets();
        }
        if (null !== $object->getCatchRate()) {
            $data['CatchRate'] = $object->getCatchRate();
        }
        if (null !== $object->getCatchRateRank()) {
            $data['CatchRateRank'] = $object->getCatchRateRank();
        }
        if (null !== $object->getDominatorRating()) {
            $data['DominatorRating'] = $object->getDominatorRating();
        }
        if (null !== $object->getDominatorRatingRank()) {
            $data['DominatorRatingRank'] = $object->getDominatorRatingRank();
        }
        if (null !== $object->getDrops()) {
            $data['Drops'] = $object->getDrops();
        }
        if (null !== $object->getDropsPerGame()) {
            $data['DropsPerGame'] = $object->getDropsPerGame();
        }
        if (null !== $object->getDropsPerGameRank()) {
            $data['DropsPerGameRank'] = $object->getDropsPerGameRank();
        }
        if (null !== $object->getDropRate()) {
            $data['DropRate'] = $object->getDropRate();
        }
        if (null !== $object->getDropRateRank()) {
            $data['DropRateRank'] = $object->getDropRateRank();
        }
        if (null !== $object->getDropsRank()) {
            $data['DropsRank'] = $object->getDropsRank();
        }
        if (null !== $object->getEndzoneTargets()) {
            $data['EndzoneTargets'] = $object->getEndzoneTargets();
        }
        if (null !== $object->getEndzoneTargetShare()) {
            $data['EndzoneTargetShare'] = $object->getEndzoneTargetShare();
        }
        if (null !== $object->getEndzoneTargetShareRank()) {
            $data['EndzoneTargetShareRank'] = $object->getEndzoneTargetShareRank();
        }
        if (null !== $object->getAccuracyRating()) {
            $data['AccuracyRating'] = $object->getAccuracyRating();
        }
        if (null !== $object->getAccuracyRatingRank()) {
            $data['AccuracyRatingRank'] = $object->getAccuracyRatingRank();
        }
        if (null !== $object->getAdjustedAttempts()) {
            $data['AdjustedAttempts'] = $object->getAdjustedAttempts();
        }
        if (null !== $object->getAdjustedYardsPerAttempt()) {
            $data['AdjustedYardsPerAttempt'] = $object->getAdjustedYardsPerAttempt();
        }
        if (null !== $object->getAdjustedYardsPerAttemptRank()) {
            $data['AdjustedYardsPerAttemptRank'] = $object->getAdjustedYardsPerAttemptRank();
        }
        if (null !== $object->getAirYardsPerAttempt()) {
            $data['AirYardsPerAttempt'] = $object->getAirYardsPerAttempt();
        }
        if (null !== $object->getAirYardsPerAttemptRank()) {
            $data['AirYardsPerAttemptRank'] = $object->getAirYardsPerAttemptRank();
        }
        if (null !== $object->getAttemptsInside10()) {
            $data['AttemptsInside10'] = $object->getAttemptsInside10();
        }
        if (null !== $object->getAttemptsInside10PerGame()) {
            $data['AttemptsInside10PerGame'] = $object->getAttemptsInside10PerGame();
        }
        if (null !== $object->getAttemptsInside5()) {
            $data['AttemptsInside5'] = $object->getAttemptsInside5();
        }
        if (null !== $object->getAttemptsInside5PerGame()) {
            $data['AttemptsInside5PerGame'] = $object->getAttemptsInside5PerGame();
        }
        if (null !== $object->getAttemptsPerGame()) {
            $data['AttemptsPerGame'] = $object->getAttemptsPerGame();
        }
        if (null !== $object->getCatchablePasses()) {
            $data['CatchablePasses'] = $object->getCatchablePasses();
        }
        if (null !== $object->getCatchablePassesPerGame()) {
            $data['CatchablePassesPerGame'] = $object->getCatchablePassesPerGame();
        }
        if (null !== $object->getCatchablePassesRank()) {
            $data['CatchablePassesRank'] = $object->getCatchablePassesRank();
        }
        if (null !== $object->getCompletionPercentage()) {
            $data['CompletionPercentage'] = $object->getCompletionPercentage();
        }
        if (null !== $object->getCompletionPercentageRank()) {
            $data['CompletionPercentageRank'] = $object->getCompletionPercentageRank();
        }
        if (null !== $object->getCompletions()) {
            $data['Completions'] = $object->getCompletions();
        }
        if (null !== $object->getDangerPlays()) {
            $data['DangerPlays'] = $object->getDangerPlays();
        }
        if (null !== $object->getDangerPlaysPerGame()) {
            $data['DangerPlaysPerGame'] = $object->getDangerPlaysPerGame();
        }
        if (null !== $object->getDangerPlaysRank()) {
            $data['DangerPlaysRank'] = $object->getDangerPlaysRank();
        }
        if (null !== $object->getDeepBallAttempts()) {
            $data['DeepBallAttempts'] = $object->getDeepBallAttempts();
        }
        if (null !== $object->getDeepBallAttemptsPerGame()) {
            $data['DeepBallAttemptsPerGame'] = $object->getDeepBallAttemptsPerGame();
        }
        if (null !== $object->getDeepBallAttemptsPerGameRank()) {
            $data['DeepBallAttemptsPerGameRank'] = $object->getDeepBallAttemptsPerGameRank();
        }
        if (null !== $object->getDeepBallAttemptsRank()) {
            $data['DeepBallAttemptsRank'] = $object->getDeepBallAttemptsRank();
        }
        if (null !== $object->getDeepBallCompletionPercentage()) {
            $data['DeepBallCompletionPercentage'] = $object->getDeepBallCompletionPercentage();
        }
        if (null !== $object->getDeepBallCompletionPercentageRank()) {
            $data['DeepBallCompletionPercentageRank'] = $object->getDeepBallCompletionPercentageRank();
        }
        if (null !== $object->getDeepBallCompletions()) {
            $data['DeepBallCompletions'] = $object->getDeepBallCompletions();
        }
        if (null !== $object->getDeepBallCompletionsRank()) {
            $data['DeepBallCompletionsRank'] = $object->getDeepBallCompletionsRank();
        }
        if (null !== $object->getDroppedPasses()) {
            $data['DroppedPasses'] = $object->getDroppedPasses();
        }
        if (null !== $object->getDroppedPassesRank()) {
            $data['DroppedPassesRank'] = $object->getDroppedPassesRank();
        }
        if (null !== $object->getDroppedPassesPerGame()) {
            $data['DroppedPassesPerGame'] = $object->getDroppedPassesPerGame();
        }
        if (null !== $object->getDropsPerAttempt()) {
            $data['DropsPerAttempt'] = $object->getDropsPerAttempt();
        }
        if (null !== $object->getDropsPerAttemptRank()) {
            $data['DropsPerAttemptRank'] = $object->getDropsPerAttemptRank();
        }
        if (null !== $object->getDropBacks()) {
            $data['DropBacks'] = $object->getDropBacks();
        }
        if (null !== $object->getInterceptablePasses()) {
            $data['InterceptablePasses'] = $object->getInterceptablePasses();
        }
        if (null !== $object->getInterceptablePassesPerGame()) {
            $data['InterceptablePassesPerGame'] = $object->getInterceptablePassesPerGame();
        }
        if (null !== $object->getInterceptablePassesRank()) {
            $data['InterceptablePassesRank'] = $object->getInterceptablePassesRank();
        }
        if (null !== $object->getMoneyThrows()) {
            $data['MoneyThrows'] = $object->getMoneyThrows();
        }
        if (null !== $object->getMoneyThrowsPerGame()) {
            $data['MoneyThrowsPerGame'] = $object->getMoneyThrowsPerGame();
        }
        if (null !== $object->getMoneyThrowsRank()) {
            $data['MoneyThrowsRank'] = $object->getMoneyThrowsRank();
        }
        if (null !== $object->getPassAttempts()) {
            $data['PassAttempts'] = $object->getPassAttempts();
        }
        if (null !== $object->getPassAttemptsRank()) {
            $data['PassAttemptsRank'] = $object->getPassAttemptsRank();
        }
        if (null !== $object->getPassAttemptDistance()) {
            $data['PassAttemptDistance'] = $object->getPassAttemptDistance();
        }
        if (null !== $object->getPassAttemptDistanceRank()) {
            $data['PassAttemptDistanceRank'] = $object->getPassAttemptDistanceRank();
        }
        if (null !== $object->getPassAttemptDistancePerAttempt()) {
            $data['PassAttemptDistancePerAttempt'] = $object->getPassAttemptDistancePerAttempt();
        }
        if (null !== $object->getPassAttemptDistancePerAttemptRank()) {
            $data['PassAttemptDistancePerAttemptRank'] = $object->getPassAttemptDistancePerAttemptRank();
        }
        if (null !== $object->getPassingAttempts()) {
            $data['PassingAttempts'] = $object->getPassingAttempts();
        }
        if (null !== $object->getPassingTouchdowns()) {
            $data['PassingTouchdowns'] = $object->getPassingTouchdowns();
        }
        if (null !== $object->getPassingTouchdownsRank()) {
            $data['PassingTouchdownsRank'] = $object->getPassingTouchdownsRank();
        }
        if (null !== $object->getPassingYards()) {
            $data['PassingYards'] = $object->getPassingYards();
        }
        if (null !== $object->getPassingYardsPerAttempt()) {
            $data['PassingYardsPerAttempt'] = $object->getPassingYardsPerAttempt();
        }
        if (null !== $object->getPassingYardsPerAttemptRank()) {
            $data['PassingYardsPerAttemptRank'] = $object->getPassingYardsPerAttemptRank();
        }
        if (null !== $object->getPassingYardsPerGame()) {
            $data['PassingYardsPerGame'] = $object->getPassingYardsPerGame();
        }
        if (null !== $object->getPassingYardsPerGameRank()) {
            $data['PassingYardsPerGameRank'] = $object->getPassingYardsPerGameRank();
        }
        if (null !== $object->getPassingYardsRank()) {
            $data['PassingYardsRank'] = $object->getPassingYardsRank();
        }
        if (null !== $object->getPlayactionPassAttempts()) {
            $data['PlayactionPassAttempts'] = $object->getPlayactionPassAttempts();
        }
        if (null !== $object->getPlayactionPassAttemptsPerGame()) {
            $data['PlayactionPassAttemptsPerGame'] = $object->getPlayactionPassAttemptsPerGame();
        }
        if (null !== $object->getPlayactionPassAttemptsRank()) {
            $data['PlayactionPassAttemptsRank'] = $object->getPlayactionPassAttemptsRank();
        }
        if (null !== $object->getPlayactionPassCompletionPercentage()) {
            $data['PlayactionPassCompletionPercentage'] = $object->getPlayactionPassCompletionPercentage();
        }
        if (null !== $object->getPlayactionPassCompletionPercentageRank()) {
            $data['PlayactionPassCompletionPercentageRank'] = $object->getPlayactionPassCompletionPercentageRank();
        }
        if (null !== $object->getProtectionRate()) {
            $data['ProtectionRate'] = $object->getProtectionRate();
        }
        if (null !== $object->getProtectionRateRank()) {
            $data['ProtectionRateRank'] = $object->getProtectionRateRank();
        }
        if (null !== $object->getRedZoneAttempts()) {
            $data['RedZoneAttempts'] = $object->getRedZoneAttempts();
        }
        if (null !== $object->getRedZoneAttemptsPerGame()) {
            $data['RedZoneAttemptsPerGame'] = $object->getRedZoneAttemptsPerGame();
        }
        if (null !== $object->getRedZoneAttemptsRank()) {
            $data['RedZoneAttemptsRank'] = $object->getRedZoneAttemptsRank();
        }
        if (null !== $object->getRedZoneCompletionPercentage()) {
            $data['RedZoneCompletionPercentage'] = $object->getRedZoneCompletionPercentage();
        }
        if (null !== $object->getRedZoneCompletionPercentageRank()) {
            $data['RedZoneCompletionPercentageRank'] = $object->getRedZoneCompletionPercentageRank();
        }
        if (null !== $object->getRedZoneTDtoINTRatio()) {
            $data['RedZoneTDtoINTRatio'] = $object->getRedZoneTDtoINTRatio();
        }
        if (null !== $object->getRushingTDs()) {
            $data['RushingTDs'] = $object->getRushingTDs();
        }
        if (null !== $object->getRushingYardsPerGameRank()) {
            $data['RushingYardsPerGameRank'] = $object->getRushingYardsPerGameRank();
        }
        if (null !== $object->getShotgunCompletionPercentage()) {
            $data['ShotgunCompletionPercentage'] = $object->getShotgunCompletionPercentage();
        }
        if (null !== $object->getShotgunSnaps()) {
            $data['ShotgunSnaps'] = $object->getShotgunSnaps();
        }
        if (null !== $object->getUnderCenterCompletionPercentage()) {
            $data['UnderCenterCompletionPercentage'] = $object->getUnderCenterCompletionPercentage();
        }
        if (null !== $object->getUnderCenterSnaps()) {
            $data['UnderCenterSnaps'] = $object->getUnderCenterSnaps();
        }
        if (null !== $object->getReceiverContestedCatchRate()) {
            $data['ReceiverContestedCatchRate'] = $object->getReceiverContestedCatchRate();
        }
        if (null !== $object->getReceiverContestedCatchRateRank()) {
            $data['ReceiverContestedCatchRateRank'] = $object->getReceiverContestedCatchRateRank();
        }
        if (null !== $object->getReceiverTargetSeparation()) {
            $data['ReceiverTargetSeparation'] = $object->getReceiverTargetSeparation();
        }
        if (null !== $object->getReceiverTargetSeparationRank()) {
            $data['ReceiverTargetSeparationRank'] = $object->getReceiverTargetSeparationRank();
        }
        if (null !== $object->getReceiverYardsAfterTheCatch()) {
            $data['ReceiverYardsAfterTheCatch'] = $object->getReceiverYardsAfterTheCatch();
        }
        if (null !== $object->getReceiverYardsAfterTheCatchRank()) {
            $data['ReceiverYardsAfterTheCatchRank'] = $object->getReceiverYardsAfterTheCatchRank();
        }
        if (null !== $object->getReceiverYardsAfterTheCatchPerTarget()) {
            $data['ReceiverYardsAfterTheCatchPerTarget'] = $object->getReceiverYardsAfterTheCatchPerTarget();
        }
        if (null !== $object->getSupportingCastEfficiency()) {
            $data['SupportingCastEfficiency'] = $object->getSupportingCastEfficiency();
        }
        if (null !== $object->getSupportingCastEfficiencyRank()) {
            $data['SupportingCastEfficiencyRank'] = $object->getSupportingCastEfficiencyRank();
        }
        if (null !== $object->getTotalQBR()) {
            $data['TotalQBR'] = $object->getTotalQBR();
        }
        if (null !== $object->getTotalQBRRank()) {
            $data['TotalQBRRank'] = $object->getTotalQBRRank();
        }
        if (null !== $object->getTrueCompletionPercentage()) {
            $data['TrueCompletionPercentage'] = $object->getTrueCompletionPercentage();
        }
        if (null !== $object->getTrueCompletionPercentageRank()) {
            $data['TrueCompletionPercentageRank'] = $object->getTrueCompletionPercentageRank();
        }
        if (null !== $object->getTruePasserRating()) {
            $data['TruePasserRating'] = $object->getTruePasserRating();
        }
        if (null !== $object->getTruePasserRatingRank()) {
            $data['TruePasserRatingRank'] = $object->getTruePasserRatingRank();
        }
        if (null !== $object->getUncatchablePasses()) {
            $data['UncatchablePasses'] = $object->getUncatchablePasses();
        }
        if (null !== $object->getUncatchablePassesPerGame()) {
            $data['UncatchablePassesPerGame'] = $object->getUncatchablePassesPerGame();
        }
        if (null !== $object->getUncatchablePassesRank()) {
            $data['UncatchablePassesRank'] = $object->getUncatchablePassesRank();
        }
        if (null !== $object->getUnderPressureAttempts()) {
            $data['UnderPressureAttempts'] = $object->getUnderPressureAttempts();
        }
        if (null !== $object->getUnderPressureAttemptsRank()) {
            $data['UnderPressureAttemptsRank'] = $object->getUnderPressureAttemptsRank();
        }
        if (null !== $object->getUnderPressureAttemptsPerGame()) {
            $data['UnderPressureAttemptsPerGame'] = $object->getUnderPressureAttemptsPerGame();
        }
        if (null !== $object->getPressuredCompletionPercentage()) {
            $data['PressuredCompletionPercentage'] = $object->getPressuredCompletionPercentage();
        }
        if (null !== $object->getPressuredCompletionPercentageRank()) {
            $data['PressuredCompletionPercentageRank'] = $object->getPressuredCompletionPercentageRank();
        }
        if (null !== $object->getAverageDefendersInTheBox()) {
            $data['AverageDefendersInTheBox'] = $object->getAverageDefendersInTheBox();
        }
        if (null !== $object->getAverageDefendersInTheBoxRank()) {
            $data['AverageDefendersInTheBoxRank'] = $object->getAverageDefendersInTheBoxRank();
        }
        if (null !== $object->getBaseFrontCarryRate()) {
            $data['BaseFrontCarryRate'] = $object->getBaseFrontCarryRate();
        }
        if (null !== $object->getBaseFrontCarryRateRank()) {
            $data['BaseFrontCarryRateRank'] = $object->getBaseFrontCarryRateRank();
        }
        if (null !== $object->getBaseFrontYardsPerCarry()) {
            $data['BaseFrontYardsPerCarry'] = $object->getBaseFrontYardsPerCarry();
        }
        if (null !== $object->getBaseFrontYardsPerCarryRank()) {
            $data['BaseFrontYardsPerCarryRank'] = $object->getBaseFrontYardsPerCarryRank();
        }
        if (null !== $object->getBreakawayRunRate()) {
            $data['BreakawayRunRate'] = $object->getBreakawayRunRate();
        }
        if (null !== $object->getBreakawayRunRateRank()) {
            $data['BreakawayRunRateRank'] = $object->getBreakawayRunRateRank();
        }
        if (null !== $object->getBreakawayRuns()) {
            $data['BreakawayRuns'] = $object->getBreakawayRuns();
        }
        if (null !== $object->getBreakawayRunsPerGame()) {
            $data['BreakawayRunsPerGame'] = $object->getBreakawayRunsPerGame();
        }
        if (null !== $object->getBreakawayRunsPerGameRank()) {
            $data['BreakawayRunsPerGameRank'] = $object->getBreakawayRunsPerGameRank();
        }
        if (null !== $object->getBreakawayRunsRank()) {
            $data['BreakawayRunsRank'] = $object->getBreakawayRunsRank();
        }
        if (null !== $object->getEvadedTackles()) {
            $data['EvadedTackles'] = $object->getEvadedTackles();
        }
        if (null !== $object->getEvadedTacklesPerGame()) {
            $data['EvadedTacklesPerGame'] = $object->getEvadedTacklesPerGame();
        }
        if (null !== $object->getEvadedTacklesPerGameRank()) {
            $data['EvadedTacklesPerGameRank'] = $object->getEvadedTacklesPerGameRank();
        }
        if (null !== $object->getEvadedTacklesRank()) {
            $data['EvadedTacklesRank'] = $object->getEvadedTacklesRank();
        }
        if (null !== $object->getJukeRate()) {
            $data['JukeRate'] = $object->getJukeRate();
        }
        if (null !== $object->getJukeRateRank()) {
            $data['JukeRateRank'] = $object->getJukeRateRank();
        }
        if (null !== $object->getLightFrontCarryRate()) {
            $data['LightFrontCarryRate'] = $object->getLightFrontCarryRate();
        }
        if (null !== $object->getLightFrontCarryRateRank()) {
            $data['LightFrontCarryRateRank'] = $object->getLightFrontCarryRateRank();
        }
        if (null !== $object->getLightFrontYardsPerCarry()) {
            $data['LightFrontYardsPerCarry'] = $object->getLightFrontYardsPerCarry();
        }
        if (null !== $object->getLightFrontYardsPerCarryRank()) {
            $data['LightFrontYardsPerCarryRank'] = $object->getLightFrontYardsPerCarryRank();
        }
        if (null !== $object->getOpportunities()) {
            $data['Opportunities'] = $object->getOpportunities();
        }
        if (null !== $object->getOpportunityShare()) {
            $data['OpportunityShare'] = $object->getOpportunityShare();
        }
        if (null !== $object->getOpportunityShareRank()) {
            $data['OpportunityShareRank'] = $object->getOpportunityShareRank();
        }
        if (null !== $object->getRedZoneOpportunities()) {
            $data['RedZoneOpportunities'] = $object->getRedZoneOpportunities();
        }
        if (null !== $object->getRedZoneTouchesPerGameRank()) {
            $data['RedZoneTouchesPerGameRank'] = $object->getRedZoneTouchesPerGameRank();
        }
        if (null !== $object->getRedZoneTouchesRank()) {
            $data['RedZoneTouchesRank'] = $object->getRedZoneTouchesRank();
        }
        if (null !== $object->getRunBlockingEfficiency()) {
            $data['RunBlockingEfficiency'] = $object->getRunBlockingEfficiency();
        }
        if (null !== $object->getRunBlockingEfficiencyRank()) {
            $data['RunBlockingEfficiencyRank'] = $object->getRunBlockingEfficiencyRank();
        }
        if (null !== $object->getRushYardsPerGameRank()) {
            $data['RushYardsPerGameRank'] = $object->getRushYardsPerGameRank();
        }
        if (null !== $object->getShotgunCarryRate()) {
            $data['ShotgunCarryRate'] = $object->getShotgunCarryRate();
        }
        if (null !== $object->getShotgunCarryRateRank()) {
            $data['ShotgunCarryRateRank'] = $object->getShotgunCarryRateRank();
        }
        if (null !== $object->getShotgunYardsPerCarry()) {
            $data['ShotgunYardsPerCarry'] = $object->getShotgunYardsPerCarry();
        }
        if (null !== $object->getShotgunYardsPerCarryRank()) {
            $data['ShotgunYardsPerCarryRank'] = $object->getShotgunYardsPerCarryRank();
        }
        if (null !== $object->getRedZoneOpportunityShare()) {
            $data['RedZoneOpportunityShare'] = $object->getRedZoneOpportunityShare();
        }
        if (null !== $object->getRedZoneOpportunityShareRank()) {
            $data['RedZoneOpportunityShareRank'] = $object->getRedZoneOpportunityShareRank();
        }
        if (null !== $object->getRedZoneTDConversionRate()) {
            $data['RedZoneTDConversionRate'] = $object->getRedZoneTDConversionRate();
        }
        if (null !== $object->getRedZoneTDConversionRateRank()) {
            $data['RedZoneTDConversionRateRank'] = $object->getRedZoneTDConversionRateRank();
        }
        if (null !== $object->getStackedFrontCarryRate()) {
            $data['StackedFrontCarryRate'] = $object->getStackedFrontCarryRate();
        }
        if (null !== $object->getStackedFrontCarryRateRank()) {
            $data['StackedFrontCarryRateRank'] = $object->getStackedFrontCarryRateRank();
        }
        if (null !== $object->getStackedFrontYardsPerCarry()) {
            $data['StackedFrontYardsPerCarry'] = $object->getStackedFrontYardsPerCarry();
        }
        if (null !== $object->getStackedFrontYardsPerCarryRank()) {
            $data['StackedFrontYardsPerCarryRank'] = $object->getStackedFrontYardsPerCarryRank();
        }
        if (null !== $object->getStuffedRuns()) {
            $data['StuffedRuns'] = $object->getStuffedRuns();
        }
        if (null !== $object->getStuffedRunsRank()) {
            $data['StuffedRunsRank'] = $object->getStuffedRunsRank();
        }
        if (null !== $object->getStuffedRunRate()) {
            $data['StuffedRunRate'] = $object->getStuffedRunRate();
        }
        if (null !== $object->getStuffedRunRateRank()) {
            $data['StuffedRunRateRank'] = $object->getStuffedRunRateRank();
        }
        if (null !== $object->getTeamRunPlays()) {
            $data['TeamRunPlays'] = $object->getTeamRunPlays();
        }
        if (null !== $object->getTeamRunPlaysRank()) {
            $data['TeamRunPlaysRank'] = $object->getTeamRunPlaysRank();
        }
        if (null !== $object->getTotalYardsPerGameRank()) {
            $data['TotalYardsPerGameRank'] = $object->getTotalYardsPerGameRank();
        }
        if (null !== $object->getTotalYardsRank()) {
            $data['TotalYardsRank'] = $object->getTotalYardsRank();
        }
        if (null !== $object->getTrueYardsPerCarry()) {
            $data['TrueYardsPerCarry'] = $object->getTrueYardsPerCarry();
        }
        if (null !== $object->getTrueYardsPerCarryRank()) {
            $data['TrueYardsPerCarryRank'] = $object->getTrueYardsPerCarryRank();
        }
        if (null !== $object->getUnderCenterCarryRate()) {
            $data['UnderCenterCarryRate'] = $object->getUnderCenterCarryRate();
        }
        if (null !== $object->getUnderCenterCarryRateRank()) {
            $data['UnderCenterCarryRateRank'] = $object->getUnderCenterCarryRateRank();
        }
        if (null !== $object->getUnderCenterYardsPerCarry()) {
            $data['UnderCenterYardsPerCarry'] = $object->getUnderCenterYardsPerCarry();
        }
        if (null !== $object->getUnderCenterYardsPerCarryRank()) {
            $data['UnderCenterYardsPerCarryRank'] = $object->getUnderCenterYardsPerCarryRank();
        }
        if (null !== $object->getWeightedOpportunities()) {
            $data['WeightedOpportunities'] = $object->getWeightedOpportunities();
        }
        if (null !== $object->getWeightedOpportunitiesRank()) {
            $data['WeightedOpportunitiesRank'] = $object->getWeightedOpportunitiesRank();
        }
        if (null !== $object->getWeightedOpportunitiesPerGame()) {
            $data['WeightedOpportunitiesPerGame'] = $object->getWeightedOpportunitiesPerGame();
        }
        if (null !== $object->getWeightedOpportunitiesPerGameRank()) {
            $data['WeightedOpportunitiesPerGameRank'] = $object->getWeightedOpportunitiesPerGameRank();
        }
        if (null !== $object->getYardsCreated()) {
            $data['YardsCreated'] = $object->getYardsCreated();
        }
        if (null !== $object->getYardsCreatedPerGame()) {
            $data['YardsCreatedPerGame'] = $object->getYardsCreatedPerGame();
        }
        if (null !== $object->getYardsCreatedPerGameRank()) {
            $data['YardsCreatedPerGameRank'] = $object->getYardsCreatedPerGameRank();
        }
        if (null !== $object->getYardsCreatedPerCarry()) {
            $data['YardsCreatedPerCarry'] = $object->getYardsCreatedPerCarry();
        }
        if (null !== $object->getYardsCreatedPerCarryRank()) {
            $data['YardsCreatedPerCarryRank'] = $object->getYardsCreatedPerCarryRank();
        }
        if (null !== $object->getYardsCreatedRank()) {
            $data['YardsCreatedRank'] = $object->getYardsCreatedRank();
        }
        if (null !== $object->getYardsPerCarry()) {
            $data['YardsPerCarry'] = $object->getYardsPerCarry();
        }
        if (null !== $object->getYardsPerCarryRank()) {
            $data['YardsPerCarryRank'] = $object->getYardsPerCarryRank();
        }
        if (null !== $object->getYardsPerOpportunity()) {
            $data['YardsPerOpportunity'] = $object->getYardsPerOpportunity();
        }
        if (null !== $object->getYardsPerRouteRun()) {
            $data['YardsPerRouteRun'] = $object->getYardsPerRouteRun();
        }
        if (null !== $object->getYardsPerRouteRunRank()) {
            $data['YardsPerRouteRunRank'] = $object->getYardsPerRouteRunRank();
        }
        if (null !== $object->getYardsPerTouch()) {
            $data['YardsPerTouch'] = $object->getYardsPerTouch();
        }
        if (null !== $object->getYardsPerTouchRank()) {
            $data['YardsPerTouchRank'] = $object->getYardsPerTouchRank();
        }
        if (null !== $object->getAirYardsPerReception()) {
            $data['AirYardsPerReception'] = $object->getAirYardsPerReception();
        }
        if (null !== $object->getAirYardsPerTarget()) {
            $data['AirYardsPerTarget'] = $object->getAirYardsPerTarget();
        }
        if (null !== $object->getCushion()) {
            $data['Cushion'] = $object->getCushion();
        }
        if (null !== $object->getCushionRank()) {
            $data['CushionRank'] = $object->getCushionRank();
        }
        if (null !== $object->getAverageTargetDistance()) {
            $data['AverageTargetDistance'] = $object->getAverageTargetDistance();
        }
        if (null !== $object->getAverageTargetDistanceRank()) {
            $data['AverageTargetDistanceRank'] = $object->getAverageTargetDistanceRank();
        }
        if (null !== $object->getBurns()) {
            $data['Burns'] = $object->getBurns();
        }
        if (null !== $object->getCatchableTargetsPerGame()) {
            $data['CatchableTargetsPerGame'] = $object->getCatchableTargetsPerGame();
        }
        if (null !== $object->getCatchableTargetsRank()) {
            $data['CatchableTargetsRank'] = $object->getCatchableTargetsRank();
        }
        if (null !== $object->getContestedCatchConversionRate()) {
            $data['ContestedCatchConversionRate'] = $object->getContestedCatchConversionRate();
        }
        if (null !== $object->getContestedCatchConversionRateRank()) {
            $data['ContestedCatchConversionRateRank'] = $object->getContestedCatchConversionRateRank();
        }
        if (null !== $object->getContestedCatches()) {
            $data['ContestedCatches'] = $object->getContestedCatches();
        }
        if (null !== $object->getContestedTargets()) {
            $data['ContestedTargets'] = $object->getContestedTargets();
        }
        if (null !== $object->getHogRate()) {
            $data['HogRate'] = $object->getHogRate();
        }
        if (null !== $object->getHogRateRank()) {
            $data['HogRateRank'] = $object->getHogRateRank();
        }
        if (null !== $object->getPassSnapsRank()) {
            $data['PassSnapsRank'] = $object->getPassSnapsRank();
        }
        if (null !== $object->getRunSnapsRank()) {
            $data['RunSnapsRank'] = $object->getRunSnapsRank();
        }
        if (null !== $object->getSlotCatchRate()) {
            $data['SlotCatchRate'] = $object->getSlotCatchRate();
        }
        if (null !== $object->getSlotCatchRateRank()) {
            $data['SlotCatchRateRank'] = $object->getSlotCatchRateRank();
        }
        if (null !== $object->getSlotSnapsRank()) {
            $data['SlotSnapsRank'] = $object->getSlotSnapsRank();
        }
        if (null !== $object->getSnapweighedGameScript()) {
            $data['SnapweighedGameScript'] = $object->getSnapweighedGameScript();
        }
        if (null !== $object->getSnapweighedGameScriptRank()) {
            $data['SnapweighedGameScriptRank'] = $object->getSnapweighedGameScriptRank();
        }
        if (null !== $object->getTargetPremium()) {
            $data['TargetPremium'] = $object->getTargetPremium();
        }
        if (null !== $object->getTargetPremiumRank()) {
            $data['TargetPremiumRank'] = $object->getTargetPremiumRank();
        }
        if (null !== $object->getTargetQualityRating()) {
            $data['TargetQualityRating'] = $object->getTargetQualityRating();
        }
        if (null !== $object->getTargetQualityRatingRank()) {
            $data['TargetQualityRatingRank'] = $object->getTargetQualityRatingRank();
        }
        if (null !== $object->getTargetAccuracy()) {
            $data['TargetAccuracy'] = $object->getTargetAccuracy();
        }
        if (null !== $object->getTargetAccuracyRank()) {
            $data['TargetAccuracyRank'] = $object->getTargetAccuracyRank();
        }
        if (null !== $object->getTargetDistance()) {
            $data['TargetDistance'] = $object->getTargetDistance();
        }
        if (null !== $object->getTargetDistancePerGame()) {
            $data['TargetDistancePerGame'] = $object->getTargetDistancePerGame();
        }
        if (null !== $object->getTargetDistanceRank()) {
            $data['TargetDistanceRank'] = $object->getTargetDistanceRank();
        }
        if (null !== $object->getTrueCatchRate()) {
            $data['TrueCatchRate'] = $object->getTrueCatchRate();
        }
        if (null !== $object->getTrueCatchRateRank()) {
            $data['TrueCatchRateRank'] = $object->getTrueCatchRateRank();
        }
        if (null !== $object->getUncatchableTargets()) {
            $data['UncatchableTargets'] = $object->getUncatchableTargets();
        }
        if (null !== $object->getUncatchableTargetsGame()) {
            $data['UncatchableTargetsGame'] = $object->getUncatchableTargetsGame();
        }
        if (null !== $object->getYardsPerReceptionRank()) {
            $data['YardsPerReceptionRank'] = $object->getYardsPerReceptionRank();
        }
        if (null !== $object->getYardsPerPassRoute()) {
            $data['YardsPerPassRoute'] = $object->getYardsPerPassRoute();
        }
        if (null !== $object->getYardsPerPassRouteRank()) {
            $data['YardsPerPassRouteRank'] = $object->getYardsPerPassRouteRank();
        }
        if (null !== $object->getTeamDefensiveSnaps()) {
            $data['TeamDefensiveSnaps'] = $object->getTeamDefensiveSnaps();
        }
        if (null !== $object->getSoloTackles()) {
            $data['SoloTackles'] = $object->getSoloTackles();
        }
        if (null !== $object->getSoloTacklesRank()) {
            $data['SoloTacklesRank'] = $object->getSoloTacklesRank();
        }
        if (null !== $object->getSoloTacklesPerGame()) {
            $data['SoloTacklesPerGame'] = $object->getSoloTacklesPerGame();
        }
        if (null !== $object->getAssistedTackles()) {
            $data['AssistedTackles'] = $object->getAssistedTackles();
        }
        if (null !== $object->getAssistedTacklesRank()) {
            $data['AssistedTacklesRank'] = $object->getAssistedTacklesRank();
        }
        if (null !== $object->getAssistedTacklesPerGame()) {
            $data['AssistedTacklesPerGame'] = $object->getAssistedTacklesPerGame();
        }
        if (null !== $object->getTotalTackles()) {
            $data['TotalTackles'] = $object->getTotalTackles();
        }
        if (null !== $object->getTotalTacklesRank()) {
            $data['TotalTacklesRank'] = $object->getTotalTacklesRank();
        }
        if (null !== $object->getTotalTacklesPerGame()) {
            $data['TotalTacklesPerGame'] = $object->getTotalTacklesPerGame();
        }
        if (null !== $object->getSacks()) {
            $data['Sacks'] = $object->getSacks();
        }
        if (null !== $object->getSacksRank()) {
            $data['SacksRank'] = $object->getSacksRank();
        }
        if (null !== $object->getSackYards()) {
            $data['SackYards'] = $object->getSackYards();
        }
        if (null !== $object->getForcedFumbles()) {
            $data['ForcedFumbles'] = $object->getForcedFumbles();
        }
        if (null !== $object->getForcedFumblesRank()) {
            $data['ForcedFumblesRank'] = $object->getForcedFumblesRank();
        }
        if (null !== $object->getFumbleRecoveries()) {
            $data['FumbleRecoveries'] = $object->getFumbleRecoveries();
        }
        if (null !== $object->getFumbleRecoveriesRank()) {
            $data['FumbleRecoveriesRank'] = $object->getFumbleRecoveriesRank();
        }
        if (null !== $object->getBattedPasses()) {
            $data['BattedPasses'] = $object->getBattedPasses();
        }
        if (null !== $object->getBattedPassesRank()) {
            $data['BattedPassesRank'] = $object->getBattedPassesRank();
        }
        if (null !== $object->getTacklesForLoss()) {
            $data['TacklesForLoss'] = $object->getTacklesForLoss();
        }
        if (null !== $object->getTacklesForLossRank()) {
            $data['TacklesForLossRank'] = $object->getTacklesForLossRank();
        }
        if (null !== $object->getRunStuffs()) {
            $data['RunStuffs'] = $object->getRunStuffs();
        }
        if (null !== $object->getRunStuffsRank()) {
            $data['RunStuffsRank'] = $object->getRunStuffsRank();
        }
        if (null !== $object->getPassBreakups()) {
            $data['PassBreakups'] = $object->getPassBreakups();
        }
        if (null !== $object->getPassBreakupsRank()) {
            $data['PassBreakupsRank'] = $object->getPassBreakupsRank();
        }
        if (null !== $object->getPassBreakupsPerGame()) {
            $data['PassBreakupsPerGame'] = $object->getPassBreakupsPerGame();
        }
        if (null !== $object->getPassBreakupsPerGameRank()) {
            $data['PassBreakupsPerGameRank'] = $object->getPassBreakupsPerGameRank();
        }
        if (null !== $object->getPassBreakupsPerTarget()) {
            $data['PassBreakupsPerTarget'] = $object->getPassBreakupsPerTarget();
        }
        if (null !== $object->getPassBreakupsPerTargetRank()) {
            $data['PassBreakupsPerTargetRank'] = $object->getPassBreakupsPerTargetRank();
        }
        if (null !== $object->getInterceptions()) {
            $data['Interceptions'] = $object->getInterceptions();
        }
        if (null !== $object->getInterceptionsRank()) {
            $data['InterceptionsRank'] = $object->getInterceptionsRank();
        }
        if (null !== $object->getTargetsAllowed()) {
            $data['TargetsAllowed'] = $object->getTargetsAllowed();
        }
        if (null !== $object->getTargetsAllowedRank()) {
            $data['TargetsAllowedRank'] = $object->getTargetsAllowedRank();
        }
        if (null !== $object->getReceptionsAllowed()) {
            $data['ReceptionsAllowed'] = $object->getReceptionsAllowed();
        }
        if (null !== $object->getReceptionsAllowedRank()) {
            $data['ReceptionsAllowedRank'] = $object->getReceptionsAllowedRank();
        }
        if (null !== $object->getYardsAllowed()) {
            $data['YardsAllowed'] = $object->getYardsAllowed();
        }
        if (null !== $object->getYardsAllowedRank()) {
            $data['YardsAllowedRank'] = $object->getYardsAllowedRank();
        }
        if (null !== $object->getYardsAllowedPerGame()) {
            $data['YardsAllowedPerGame'] = $object->getYardsAllowedPerGame();
        }
        if (null !== $object->getYardsAllowedPerGameRank()) {
            $data['YardsAllowedPerGameRank'] = $object->getYardsAllowedPerGameRank();
        }
        if (null !== $object->getYardsPerReceptionAllowed()) {
            $data['YardsPerReceptionAllowed'] = $object->getYardsPerReceptionAllowed();
        }
        if (null !== $object->getYardsPerReceptionAllowedRank()) {
            $data['YardsPerReceptionAllowedRank'] = $object->getYardsPerReceptionAllowedRank();
        }
        if (null !== $object->getCatchRateAllowed()) {
            $data['CatchRateAllowed'] = $object->getCatchRateAllowed();
        }
        if (null !== $object->getCatchRateAllowedRank()) {
            $data['CatchRateAllowedRank'] = $object->getCatchRateAllowedRank();
        }
        if (null !== $object->getPasserRatingAllowed()) {
            $data['PasserRatingAllowed'] = $object->getPasserRatingAllowed();
        }
        if (null !== $object->getPasserRatingAllowedRank()) {
            $data['PasserRatingAllowedRank'] = $object->getPasserRatingAllowedRank();
        }
        if (null !== $object->getTouchdownsAllowed()) {
            $data['TouchdownsAllowed'] = $object->getTouchdownsAllowed();
        }
        if (null !== $object->getTouchdownsAllowedRank()) {
            $data['TouchdownsAllowedRank'] = $object->getTouchdownsAllowedRank();
        }
        if (null !== $object->getInterceptionsPerTarget()) {
            $data['InterceptionsPerTarget'] = $object->getInterceptionsPerTarget();
        }
        if (null !== $object->getInterceptionsPerTargetRank()) {
            $data['InterceptionsPerTargetRank'] = $object->getInterceptionsPerTargetRank();
        }
        if (null !== $object->getCoverageRating()) {
            $data['CoverageRating'] = $object->getCoverageRating();
        }
        if (null !== $object->getCoverageRatingRank()) {
            $data['CoverageRatingRank'] = $object->getCoverageRatingRank();
        }
        if (null !== $object->getRunPlayStops()) {
            $data['RunPlayStops'] = $object->getRunPlayStops();
        }
        if (null !== $object->getRunPlayStopsRank()) {
            $data['RunPlayStopsRank'] = $object->getRunPlayStopsRank();
        }
        if (null !== $object->getTargetsAllowedPerGame()) {
            $data['TargetsAllowedPerGame'] = $object->getTargetsAllowedPerGame();
        }
        if (null !== $object->getTargetsAllowedPerGameRank()) {
            $data['TargetsAllowedPerGameRank'] = $object->getTargetsAllowedPerGameRank();
        }
        if (null !== $object->getReceptionsAllowedPerGame()) {
            $data['ReceptionsAllowedPerGame'] = $object->getReceptionsAllowedPerGame();
        }
        if (null !== $object->getReceptionsAllowedPerGameRank()) {
            $data['ReceptionsAllowedPerGameRank'] = $object->getReceptionsAllowedPerGameRank();
        }
        if (null !== $object->getTargetRate()) {
            $data['TargetRate'] = $object->getTargetRate();
        }
        if (null !== $object->getTargetRateRank()) {
            $data['TargetRateRank'] = $object->getTargetRateRank();
        }
        if (null !== $object->getBurnRateRank()) {
            $data['BurnRateRank'] = $object->getBurnRateRank();
        }
        if (null !== $object->getAverageCushion()) {
            $data['AverageCushion'] = $object->getAverageCushion();
        }
        if (null !== $object->getAverageCushionRank()) {
            $data['AverageCushionRank'] = $object->getAverageCushionRank();
        }
        if (null !== $object->getYardsPerTargetAllowed()) {
            $data['YardsPerTargetAllowed'] = $object->getYardsPerTargetAllowed();
        }
        if (null !== $object->getYardsPerTargetAllowedRank()) {
            $data['YardsPerTargetAllowedRank'] = $object->getYardsPerTargetAllowedRank();
        }
        if (null !== $object->getRoutesDefended()) {
            $data['RoutesDefended'] = $object->getRoutesDefended();
        }
        if (null !== $object->getRoutesDefendedRank()) {
            $data['RoutesDefendedRank'] = $object->getRoutesDefendedRank();
        }
        if (null !== $object->getRoutesDefendedPerGame()) {
            $data['RoutesDefendedPerGame'] = $object->getRoutesDefendedPerGame();
        }
        if (null !== $object->getRoutesDefendedPerGameRank()) {
            $data['RoutesDefendedPerGameRank'] = $object->getRoutesDefendedPerGameRank();
        }
        if (null !== $object->getFantasyPoints()) {
            $data['FantasyPoints'] = $object->getFantasyPoints();
        }
        if (null !== $object->getFantasyPointsPerAttempt()) {
            $data['FantasyPointsPerAttempt'] = $object->getFantasyPointsPerAttempt();
        }
        if (null !== $object->getFantasyPointsPerAttemptRank()) {
            $data['FantasyPointsPerAttemptRank'] = $object->getFantasyPointsPerAttemptRank();
        }
        if (null !== $object->getFantasyPointsPerDropBack()) {
            $data['FantasyPointsPerDropBack'] = $object->getFantasyPointsPerDropBack();
        }
        if (null !== $object->getFantasyPointsPerDropBackRank()) {
            $data['FantasyPointsPerDropBackRank'] = $object->getFantasyPointsPerDropBackRank();
        }
        if (null !== $object->getFantasyPointsPerGame()) {
            $data['FantasyPointsPerGame'] = $object->getFantasyPointsPerGame();
        }
        if (null !== $object->getFantasyPointsPerGameDifferential()) {
            $data['FantasyPointsPerGameDifferential'] = $object->getFantasyPointsPerGameDifferential();
        }
        if (null !== $object->getFantasyPointsPerGameRank()) {
            $data['FantasyPointsPerGameRank'] = $object->getFantasyPointsPerGameRank();
        }
        if (null !== $object->getFantasyPointsPerOpportunity()) {
            $data['FantasyPointsPerOpportunity'] = $object->getFantasyPointsPerOpportunity();
        }
        if (null !== $object->getFantasyPointsPerOpportunityRank()) {
            $data['FantasyPointsPerOpportunityRank'] = $object->getFantasyPointsPerOpportunityRank();
        }
        if (null !== $object->getFantasyPointsPerSnap()) {
            $data['FantasyPointsPerSnap'] = $object->getFantasyPointsPerSnap();
        }
        if (null !== $object->getFantasyPointsPerSnapRank()) {
            $data['FantasyPointsPerSnapRank'] = $object->getFantasyPointsPerSnapRank();
        }
        if (null !== $object->getFantasyPointsPerPassRoute()) {
            $data['FantasyPointsPerPassRoute'] = $object->getFantasyPointsPerPassRoute();
        }
        if (null !== $object->getFantasyPointsPerPassRouteRank()) {
            $data['FantasyPointsPerPassRouteRank'] = $object->getFantasyPointsPerPassRouteRank();
        }
        if (null !== $object->getFantasyPointsPerTarget()) {
            $data['FantasyPointsPerTarget'] = $object->getFantasyPointsPerTarget();
        }
        if (null !== $object->getFantasyPointsPerTargetRank()) {
            $data['FantasyPointsPerTargetRank'] = $object->getFantasyPointsPerTargetRank();
        }
        if (null !== $object->getSlotFantasyPoints()) {
            $data['SlotFantasyPoints'] = $object->getSlotFantasyPoints();
        }
        if (null !== $object->getSlotFantasyPointsRank()) {
            $data['SlotFantasyPointsRank'] = $object->getSlotFantasyPointsRank();
        }
        if (null !== $object->getSlotFantasyPointsPerGame()) {
            $data['SlotFantasyPointsPerGame'] = $object->getSlotFantasyPointsPerGame();
        }
        if (null !== $object->getSlotFantasyPointsPerGameRank()) {
            $data['SlotFantasyPointsPerGameRank'] = $object->getSlotFantasyPointsPerGameRank();
        }
        if (null !== $object->getSlotFantasyPointsPerTarget()) {
            $data['SlotFantasyPointsPerTarget'] = $object->getSlotFantasyPointsPerTarget();
        }
        if (null !== $object->getSlotFantasyPointsPerTargetRank()) {
            $data['SlotFantasyPointsPerTargetRank'] = $object->getSlotFantasyPointsPerTargetRank();
        }
        if (null !== $object->getFantasyPointsAllowed()) {
            $data['FantasyPointsAllowed'] = $object->getFantasyPointsAllowed();
        }
        if (null !== $object->getFantasyPointsAllowedPerTarget()) {
            $data['FantasyPointsAllowedPerTarget'] = $object->getFantasyPointsAllowedPerTarget();
        }
        if (null !== $object->getFantasyPointsAllowedPerTargetRank()) {
            $data['FantasyPointsAllowedPerTargetRank'] = $object->getFantasyPointsAllowedPerTargetRank();
        }
        if (null !== $object->getFantasyPointsAllowedPerGame()) {
            $data['FantasyPointsAllowedPerGame'] = $object->getFantasyPointsAllowedPerGame();
        }
        if (null !== $object->getFantasyPointsAllowedPerGameRank()) {
            $data['FantasyPointsAllowedPerGameRank'] = $object->getFantasyPointsAllowedPerGameRank();
        }
        if (null !== $object->getFantasyPointsAllowedPerSnap()) {
            $data['FantasyPointsAllowedPerSnap'] = $object->getFantasyPointsAllowedPerSnap();
        }
        if (null !== $object->getFantasyPointsAllowedPerSnapRank()) {
            $data['FantasyPointsAllowedPerSnapRank'] = $object->getFantasyPointsAllowedPerSnapRank();
        }
        if (null !== $object->getFantasyPointsAllowedPerCoverSnap()) {
            $data['FantasyPointsAllowedPerCoverSnap'] = $object->getFantasyPointsAllowedPerCoverSnap();
        }
        if (null !== $object->getFantasyPointsAllowedPerCoverSnapRank()) {
            $data['FantasyPointsAllowedPerCoverSnapRank'] = $object->getFantasyPointsAllowedPerCoverSnapRank();
        }
        if (null !== $object->getExpectedFantasyPoints()) {
            $data['ExpectedFantasyPoints'] = $object->getExpectedFantasyPoints();
        }
        if (null !== $object->getExpectedFantasyPointsRank()) {
            $data['ExpectedFantasyPointsRank'] = $object->getExpectedFantasyPointsRank();
        }
        if (null !== $object->getExpectedFantasyPointsPerGame()) {
            $data['ExpectedFantasyPointsPerGame'] = $object->getExpectedFantasyPointsPerGame();
        }
        if (null !== $object->getExpectedFantasyPointsPerGameRank()) {
            $data['ExpectedFantasyPointsPerGameRank'] = $object->getExpectedFantasyPointsPerGameRank();
        }
        if (null !== $object->getNormalizedFantasyPointsPerGame()) {
            $data['NormalizedFantasyPointsPerGame'] = $object->getNormalizedFantasyPointsPerGame();
        }
        if (null !== $object->getNormalizedFantasyPointsPerGameRank()) {
            $data['NormalizedFantasyPointsPerGameRank'] = $object->getNormalizedFantasyPointsPerGameRank();
        }
        return $data;
    }
}