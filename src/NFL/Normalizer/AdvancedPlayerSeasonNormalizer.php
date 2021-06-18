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
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
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
        if (\array_key_exists('Position', $data) && $data['Position'] !== null) {
            $object->setPosition($data['Position']);
        }
        elseif (\array_key_exists('Position', $data) && $data['Position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('FantasyPosition', $data) && $data['FantasyPosition'] !== null) {
            $object->setFantasyPosition($data['FantasyPosition']);
        }
        elseif (\array_key_exists('FantasyPosition', $data) && $data['FantasyPosition'] === null) {
            $object->setFantasyPosition(null);
        }
        if (\array_key_exists('PositionGroup', $data) && $data['PositionGroup'] !== null) {
            $object->setPositionGroup($data['PositionGroup']);
        }
        elseif (\array_key_exists('PositionGroup', $data) && $data['PositionGroup'] === null) {
            $object->setPositionGroup(null);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('Games', $data) && $data['Games'] !== null) {
            $object->setGames($data['Games']);
        }
        elseif (\array_key_exists('Games', $data) && $data['Games'] === null) {
            $object->setGames(null);
        }
        if (\array_key_exists('Snaps', $data) && $data['Snaps'] !== null) {
            $object->setSnaps($data['Snaps']);
        }
        elseif (\array_key_exists('Snaps', $data) && $data['Snaps'] === null) {
            $object->setSnaps(null);
        }
        if (\array_key_exists('SnapShare', $data) && $data['SnapShare'] !== null) {
            $object->setSnapShare($data['SnapShare']);
        }
        elseif (\array_key_exists('SnapShare', $data) && $data['SnapShare'] === null) {
            $object->setSnapShare(null);
        }
        if (\array_key_exists('SnapShareRank', $data) && $data['SnapShareRank'] !== null) {
            $object->setSnapShareRank($data['SnapShareRank']);
        }
        elseif (\array_key_exists('SnapShareRank', $data) && $data['SnapShareRank'] === null) {
            $object->setSnapShareRank(null);
        }
        if (\array_key_exists('SlotRate', $data) && $data['SlotRate'] !== null) {
            $object->setSlotRate($data['SlotRate']);
        }
        elseif (\array_key_exists('SlotRate', $data) && $data['SlotRate'] === null) {
            $object->setSlotRate(null);
        }
        if (\array_key_exists('SlotRateRank', $data) && $data['SlotRateRank'] !== null) {
            $object->setSlotRateRank($data['SlotRateRank']);
        }
        elseif (\array_key_exists('SlotRateRank', $data) && $data['SlotRateRank'] === null) {
            $object->setSlotRateRank(null);
        }
        if (\array_key_exists('TargetSeparation', $data) && $data['TargetSeparation'] !== null) {
            $object->setTargetSeparation($data['TargetSeparation']);
        }
        elseif (\array_key_exists('TargetSeparation', $data) && $data['TargetSeparation'] === null) {
            $object->setTargetSeparation(null);
        }
        if (\array_key_exists('TargetSeparationRank', $data) && $data['TargetSeparationRank'] !== null) {
            $object->setTargetSeparationRank($data['TargetSeparationRank']);
        }
        elseif (\array_key_exists('TargetSeparationRank', $data) && $data['TargetSeparationRank'] === null) {
            $object->setTargetSeparationRank(null);
        }
        if (\array_key_exists('BurnRate', $data) && $data['BurnRate'] !== null) {
            $object->setBurnRate($data['BurnRate']);
        }
        elseif (\array_key_exists('BurnRate', $data) && $data['BurnRate'] === null) {
            $object->setBurnRate(null);
        }
        if (\array_key_exists('AirYards', $data) && $data['AirYards'] !== null) {
            $object->setAirYards($data['AirYards']);
        }
        elseif (\array_key_exists('AirYards', $data) && $data['AirYards'] === null) {
            $object->setAirYards(null);
        }
        if (\array_key_exists('AirYardsPerGame', $data) && $data['AirYardsPerGame'] !== null) {
            $object->setAirYardsPerGame($data['AirYardsPerGame']);
        }
        elseif (\array_key_exists('AirYardsPerGame', $data) && $data['AirYardsPerGame'] === null) {
            $object->setAirYardsPerGame(null);
        }
        if (\array_key_exists('AirYardsRank', $data) && $data['AirYardsRank'] !== null) {
            $object->setAirYardsRank($data['AirYardsRank']);
        }
        elseif (\array_key_exists('AirYardsRank', $data) && $data['AirYardsRank'] === null) {
            $object->setAirYardsRank(null);
        }
        if (\array_key_exists('Carries', $data) && $data['Carries'] !== null) {
            $object->setCarries($data['Carries']);
        }
        elseif (\array_key_exists('Carries', $data) && $data['Carries'] === null) {
            $object->setCarries(null);
        }
        if (\array_key_exists('CarriesInside10', $data) && $data['CarriesInside10'] !== null) {
            $object->setCarriesInside10($data['CarriesInside10']);
        }
        elseif (\array_key_exists('CarriesInside10', $data) && $data['CarriesInside10'] === null) {
            $object->setCarriesInside10(null);
        }
        if (\array_key_exists('CarriesInside10PerGame', $data) && $data['CarriesInside10PerGame'] !== null) {
            $object->setCarriesInside10PerGame($data['CarriesInside10PerGame']);
        }
        elseif (\array_key_exists('CarriesInside10PerGame', $data) && $data['CarriesInside10PerGame'] === null) {
            $object->setCarriesInside10PerGame(null);
        }
        if (\array_key_exists('CarriesInside5', $data) && $data['CarriesInside5'] !== null) {
            $object->setCarriesInside5($data['CarriesInside5']);
        }
        elseif (\array_key_exists('CarriesInside5', $data) && $data['CarriesInside5'] === null) {
            $object->setCarriesInside5(null);
        }
        if (\array_key_exists('CarriesInside5PerGame', $data) && $data['CarriesInside5PerGame'] !== null) {
            $object->setCarriesInside5PerGame($data['CarriesInside5PerGame']);
        }
        elseif (\array_key_exists('CarriesInside5PerGame', $data) && $data['CarriesInside5PerGame'] === null) {
            $object->setCarriesInside5PerGame(null);
        }
        if (\array_key_exists('CarriesPerGame', $data) && $data['CarriesPerGame'] !== null) {
            $object->setCarriesPerGame($data['CarriesPerGame']);
        }
        elseif (\array_key_exists('CarriesPerGame', $data) && $data['CarriesPerGame'] === null) {
            $object->setCarriesPerGame(null);
        }
        if (\array_key_exists('CarriesPerGameRank', $data) && $data['CarriesPerGameRank'] !== null) {
            $object->setCarriesPerGameRank($data['CarriesPerGameRank']);
        }
        elseif (\array_key_exists('CarriesPerGameRank', $data) && $data['CarriesPerGameRank'] === null) {
            $object->setCarriesPerGameRank(null);
        }
        if (\array_key_exists('CarriesRank', $data) && $data['CarriesRank'] !== null) {
            $object->setCarriesRank($data['CarriesRank']);
        }
        elseif (\array_key_exists('CarriesRank', $data) && $data['CarriesRank'] === null) {
            $object->setCarriesRank(null);
        }
        if (\array_key_exists('GameScript', $data) && $data['GameScript'] !== null) {
            $object->setGameScript($data['GameScript']);
        }
        elseif (\array_key_exists('GameScript', $data) && $data['GameScript'] === null) {
            $object->setGameScript(null);
        }
        if (\array_key_exists('GameScriptRank', $data) && $data['GameScriptRank'] !== null) {
            $object->setGameScriptRank($data['GameScriptRank']);
        }
        elseif (\array_key_exists('GameScriptRank', $data) && $data['GameScriptRank'] === null) {
            $object->setGameScriptRank(null);
        }
        if (\array_key_exists('GoalLineCarries', $data) && $data['GoalLineCarries'] !== null) {
            $object->setGoalLineCarries($data['GoalLineCarries']);
        }
        elseif (\array_key_exists('GoalLineCarries', $data) && $data['GoalLineCarries'] === null) {
            $object->setGoalLineCarries(null);
        }
        if (\array_key_exists('GoalLineCarriesPerGame', $data) && $data['GoalLineCarriesPerGame'] !== null) {
            $object->setGoalLineCarriesPerGame($data['GoalLineCarriesPerGame']);
        }
        elseif (\array_key_exists('GoalLineCarriesPerGame', $data) && $data['GoalLineCarriesPerGame'] === null) {
            $object->setGoalLineCarriesPerGame(null);
        }
        if (\array_key_exists('GoalLineCarriesPerGameRank', $data) && $data['GoalLineCarriesPerGameRank'] !== null) {
            $object->setGoalLineCarriesPerGameRank($data['GoalLineCarriesPerGameRank']);
        }
        elseif (\array_key_exists('GoalLineCarriesPerGameRank', $data) && $data['GoalLineCarriesPerGameRank'] === null) {
            $object->setGoalLineCarriesPerGameRank(null);
        }
        if (\array_key_exists('GoalLineCarriesRank', $data) && $data['GoalLineCarriesRank'] !== null) {
            $object->setGoalLineCarriesRank($data['GoalLineCarriesRank']);
        }
        elseif (\array_key_exists('GoalLineCarriesRank', $data) && $data['GoalLineCarriesRank'] === null) {
            $object->setGoalLineCarriesRank(null);
        }
        if (\array_key_exists('ProductionPremium', $data) && $data['ProductionPremium'] !== null) {
            $object->setProductionPremium($data['ProductionPremium']);
        }
        elseif (\array_key_exists('ProductionPremium', $data) && $data['ProductionPremium'] === null) {
            $object->setProductionPremium(null);
        }
        if (\array_key_exists('ProductionPremiumRank', $data) && $data['ProductionPremiumRank'] !== null) {
            $object->setProductionPremiumRank($data['ProductionPremiumRank']);
        }
        elseif (\array_key_exists('ProductionPremiumRank', $data) && $data['ProductionPremiumRank'] === null) {
            $object->setProductionPremiumRank(null);
        }
        if (\array_key_exists('RedZoneCarries', $data) && $data['RedZoneCarries'] !== null) {
            $object->setRedZoneCarries($data['RedZoneCarries']);
        }
        elseif (\array_key_exists('RedZoneCarries', $data) && $data['RedZoneCarries'] === null) {
            $object->setRedZoneCarries(null);
        }
        if (\array_key_exists('RedZoneCarriesPerGame', $data) && $data['RedZoneCarriesPerGame'] !== null) {
            $object->setRedZoneCarriesPerGame($data['RedZoneCarriesPerGame']);
        }
        elseif (\array_key_exists('RedZoneCarriesPerGame', $data) && $data['RedZoneCarriesPerGame'] === null) {
            $object->setRedZoneCarriesPerGame(null);
        }
        if (\array_key_exists('RedZoneCarriesPerGameRank', $data) && $data['RedZoneCarriesPerGameRank'] !== null) {
            $object->setRedZoneCarriesPerGameRank($data['RedZoneCarriesPerGameRank']);
        }
        elseif (\array_key_exists('RedZoneCarriesPerGameRank', $data) && $data['RedZoneCarriesPerGameRank'] === null) {
            $object->setRedZoneCarriesPerGameRank(null);
        }
        if (\array_key_exists('RedZoneCarriesRank', $data) && $data['RedZoneCarriesRank'] !== null) {
            $object->setRedZoneCarriesRank($data['RedZoneCarriesRank']);
        }
        elseif (\array_key_exists('RedZoneCarriesRank', $data) && $data['RedZoneCarriesRank'] === null) {
            $object->setRedZoneCarriesRank(null);
        }
        if (\array_key_exists('RushingTouchdowns', $data) && $data['RushingTouchdowns'] !== null) {
            $object->setRushingTouchdowns($data['RushingTouchdowns']);
        }
        elseif (\array_key_exists('RushingTouchdowns', $data) && $data['RushingTouchdowns'] === null) {
            $object->setRushingTouchdowns(null);
        }
        if (\array_key_exists('RushingTouchdownsRank', $data) && $data['RushingTouchdownsRank'] !== null) {
            $object->setRushingTouchdownsRank($data['RushingTouchdownsRank']);
        }
        elseif (\array_key_exists('RushingTouchdownsRank', $data) && $data['RushingTouchdownsRank'] === null) {
            $object->setRushingTouchdownsRank(null);
        }
        if (\array_key_exists('RushingYards', $data) && $data['RushingYards'] !== null) {
            $object->setRushingYards($data['RushingYards']);
        }
        elseif (\array_key_exists('RushingYards', $data) && $data['RushingYards'] === null) {
            $object->setRushingYards(null);
        }
        if (\array_key_exists('RushingYardsRank', $data) && $data['RushingYardsRank'] !== null) {
            $object->setRushingYardsRank($data['RushingYardsRank']);
        }
        elseif (\array_key_exists('RushingYardsRank', $data) && $data['RushingYardsRank'] === null) {
            $object->setRushingYardsRank(null);
        }
        if (\array_key_exists('RushYardsPerGame', $data) && $data['RushYardsPerGame'] !== null) {
            $object->setRushYardsPerGame($data['RushYardsPerGame']);
        }
        elseif (\array_key_exists('RushYardsPerGame', $data) && $data['RushYardsPerGame'] === null) {
            $object->setRushYardsPerGame(null);
        }
        if (\array_key_exists('RedZoneSnaps', $data) && $data['RedZoneSnaps'] !== null) {
            $object->setRedZoneSnaps($data['RedZoneSnaps']);
        }
        elseif (\array_key_exists('RedZoneSnaps', $data) && $data['RedZoneSnaps'] === null) {
            $object->setRedZoneSnaps(null);
        }
        if (\array_key_exists('RunSnaps', $data) && $data['RunSnaps'] !== null) {
            $object->setRunSnaps($data['RunSnaps']);
        }
        elseif (\array_key_exists('RunSnaps', $data) && $data['RunSnaps'] === null) {
            $object->setRunSnaps(null);
        }
        if (\array_key_exists('PassSnaps', $data) && $data['PassSnaps'] !== null) {
            $object->setPassSnaps($data['PassSnaps']);
        }
        elseif (\array_key_exists('PassSnaps', $data) && $data['PassSnaps'] === null) {
            $object->setPassSnaps(null);
        }
        if (\array_key_exists('SnapweightedGameScript', $data) && $data['SnapweightedGameScript'] !== null) {
            $object->setSnapweightedGameScript($data['SnapweightedGameScript']);
        }
        elseif (\array_key_exists('SnapweightedGameScript', $data) && $data['SnapweightedGameScript'] === null) {
            $object->setSnapweightedGameScript(null);
        }
        if (\array_key_exists('SnapweightedGameScriptRank', $data) && $data['SnapweightedGameScriptRank'] !== null) {
            $object->setSnapweightedGameScriptRank($data['SnapweightedGameScriptRank']);
        }
        elseif (\array_key_exists('SnapweightedGameScriptRank', $data) && $data['SnapweightedGameScriptRank'] === null) {
            $object->setSnapweightedGameScriptRank(null);
        }
        if (\array_key_exists('TeamPassPlays', $data) && $data['TeamPassPlays'] !== null) {
            $object->setTeamPassPlays($data['TeamPassPlays']);
        }
        elseif (\array_key_exists('TeamPassPlays', $data) && $data['TeamPassPlays'] === null) {
            $object->setTeamPassPlays(null);
        }
        if (\array_key_exists('TeamPassPlaysRank', $data) && $data['TeamPassPlaysRank'] !== null) {
            $object->setTeamPassPlaysRank($data['TeamPassPlaysRank']);
        }
        elseif (\array_key_exists('TeamPassPlaysRank', $data) && $data['TeamPassPlaysRank'] === null) {
            $object->setTeamPassPlaysRank(null);
        }
        if (\array_key_exists('TouchdownRate', $data) && $data['TouchdownRate'] !== null) {
            $object->setTouchdownRate($data['TouchdownRate']);
        }
        elseif (\array_key_exists('TouchdownRate', $data) && $data['TouchdownRate'] === null) {
            $object->setTouchdownRate(null);
        }
        if (\array_key_exists('WeeklyVolatility', $data) && $data['WeeklyVolatility'] !== null) {
            $object->setWeeklyVolatility($data['WeeklyVolatility']);
        }
        elseif (\array_key_exists('WeeklyVolatility', $data) && $data['WeeklyVolatility'] === null) {
            $object->setWeeklyVolatility(null);
        }
        if (\array_key_exists('WeeklyVolatilityRank', $data) && $data['WeeklyVolatilityRank'] !== null) {
            $object->setWeeklyVolatilityRank($data['WeeklyVolatilityRank']);
        }
        elseif (\array_key_exists('WeeklyVolatilityRank', $data) && $data['WeeklyVolatilityRank'] === null) {
            $object->setWeeklyVolatilityRank(null);
        }
        if (\array_key_exists('VOS', $data) && $data['VOS'] !== null) {
            $object->setVOS($data['VOS']);
        }
        elseif (\array_key_exists('VOS', $data) && $data['VOS'] === null) {
            $object->setVOS(null);
        }
        if (\array_key_exists('VOSRank', $data) && $data['VOSRank'] !== null) {
            $object->setVOSRank($data['VOSRank']);
        }
        elseif (\array_key_exists('VOSRank', $data) && $data['VOSRank'] === null) {
            $object->setVOSRank(null);
        }
        if (\array_key_exists('YardsPerTarget', $data) && $data['YardsPerTarget'] !== null) {
            $object->setYardsPerTarget($data['YardsPerTarget']);
        }
        elseif (\array_key_exists('YardsPerTarget', $data) && $data['YardsPerTarget'] === null) {
            $object->setYardsPerTarget(null);
        }
        if (\array_key_exists('YardsPerTargetRank', $data) && $data['YardsPerTargetRank'] !== null) {
            $object->setYardsPerTargetRank($data['YardsPerTargetRank']);
        }
        elseif (\array_key_exists('YardsPerTargetRank', $data) && $data['YardsPerTargetRank'] === null) {
            $object->setYardsPerTargetRank(null);
        }
        if (\array_key_exists('YardsPerReception', $data) && $data['YardsPerReception'] !== null) {
            $object->setYardsPerReception($data['YardsPerReception']);
        }
        elseif (\array_key_exists('YardsPerReception', $data) && $data['YardsPerReception'] === null) {
            $object->setYardsPerReception(null);
        }
        if (\array_key_exists('YardsAfterCatch', $data) && $data['YardsAfterCatch'] !== null) {
            $object->setYardsAfterCatch($data['YardsAfterCatch']);
        }
        elseif (\array_key_exists('YardsAfterCatch', $data) && $data['YardsAfterCatch'] === null) {
            $object->setYardsAfterCatch(null);
        }
        if (\array_key_exists('YardsAfterCatchPerGame', $data) && $data['YardsAfterCatchPerGame'] !== null) {
            $object->setYardsAfterCatchPerGame($data['YardsAfterCatchPerGame']);
        }
        elseif (\array_key_exists('YardsAfterCatchPerGame', $data) && $data['YardsAfterCatchPerGame'] === null) {
            $object->setYardsAfterCatchPerGame(null);
        }
        if (\array_key_exists('YardsAfterCatchPerReception', $data) && $data['YardsAfterCatchPerReception'] !== null) {
            $object->setYardsAfterCatchPerReception($data['YardsAfterCatchPerReception']);
        }
        elseif (\array_key_exists('YardsAfterCatchPerReception', $data) && $data['YardsAfterCatchPerReception'] === null) {
            $object->setYardsAfterCatchPerReception(null);
        }
        if (\array_key_exists('YardsAfterCatchPerTarget', $data) && $data['YardsAfterCatchPerTarget'] !== null) {
            $object->setYardsAfterCatchPerTarget($data['YardsAfterCatchPerTarget']);
        }
        elseif (\array_key_exists('YardsAfterCatchPerTarget', $data) && $data['YardsAfterCatchPerTarget'] === null) {
            $object->setYardsAfterCatchPerTarget(null);
        }
        if (\array_key_exists('YardsAfterCatchRank', $data) && $data['YardsAfterCatchRank'] !== null) {
            $object->setYardsAfterCatchRank($data['YardsAfterCatchRank']);
        }
        elseif (\array_key_exists('YardsAfterCatchRank', $data) && $data['YardsAfterCatchRank'] === null) {
            $object->setYardsAfterCatchRank(null);
        }
        if (\array_key_exists('TotalTouchdowns', $data) && $data['TotalTouchdowns'] !== null) {
            $object->setTotalTouchdowns($data['TotalTouchdowns']);
        }
        elseif (\array_key_exists('TotalTouchdowns', $data) && $data['TotalTouchdowns'] === null) {
            $object->setTotalTouchdowns(null);
        }
        if (\array_key_exists('TotalTouchdownsRank', $data) && $data['TotalTouchdownsRank'] !== null) {
            $object->setTotalTouchdownsRank($data['TotalTouchdownsRank']);
        }
        elseif (\array_key_exists('TotalTouchdownsRank', $data) && $data['TotalTouchdownsRank'] === null) {
            $object->setTotalTouchdownsRank(null);
        }
        if (\array_key_exists('TotalTouches', $data) && $data['TotalTouches'] !== null) {
            $object->setTotalTouches($data['TotalTouches']);
        }
        elseif (\array_key_exists('TotalTouches', $data) && $data['TotalTouches'] === null) {
            $object->setTotalTouches(null);
        }
        if (\array_key_exists('TotalYards', $data) && $data['TotalYards'] !== null) {
            $object->setTotalYards($data['TotalYards']);
        }
        elseif (\array_key_exists('TotalYards', $data) && $data['TotalYards'] === null) {
            $object->setTotalYards(null);
        }
        if (\array_key_exists('TotalYardsPerGame', $data) && $data['TotalYardsPerGame'] !== null) {
            $object->setTotalYardsPerGame($data['TotalYardsPerGame']);
        }
        elseif (\array_key_exists('TotalYardsPerGame', $data) && $data['TotalYardsPerGame'] === null) {
            $object->setTotalYardsPerGame(null);
        }
        if (\array_key_exists('Targets', $data) && $data['Targets'] !== null) {
            $object->setTargets($data['Targets']);
        }
        elseif (\array_key_exists('Targets', $data) && $data['Targets'] === null) {
            $object->setTargets(null);
        }
        if (\array_key_exists('TargetShare', $data) && $data['TargetShare'] !== null) {
            $object->setTargetShare($data['TargetShare']);
        }
        elseif (\array_key_exists('TargetShare', $data) && $data['TargetShare'] === null) {
            $object->setTargetShare(null);
        }
        if (\array_key_exists('TargetShareRank', $data) && $data['TargetShareRank'] !== null) {
            $object->setTargetShareRank($data['TargetShareRank']);
        }
        elseif (\array_key_exists('TargetShareRank', $data) && $data['TargetShareRank'] === null) {
            $object->setTargetShareRank(null);
        }
        if (\array_key_exists('TargetsInside10', $data) && $data['TargetsInside10'] !== null) {
            $object->setTargetsInside10($data['TargetsInside10']);
        }
        elseif (\array_key_exists('TargetsInside10', $data) && $data['TargetsInside10'] === null) {
            $object->setTargetsInside10(null);
        }
        if (\array_key_exists('TargetsInside10PerGame', $data) && $data['TargetsInside10PerGame'] !== null) {
            $object->setTargetsInside10PerGame($data['TargetsInside10PerGame']);
        }
        elseif (\array_key_exists('TargetsInside10PerGame', $data) && $data['TargetsInside10PerGame'] === null) {
            $object->setTargetsInside10PerGame(null);
        }
        if (\array_key_exists('TargetsInside5', $data) && $data['TargetsInside5'] !== null) {
            $object->setTargetsInside5($data['TargetsInside5']);
        }
        elseif (\array_key_exists('TargetsInside5', $data) && $data['TargetsInside5'] === null) {
            $object->setTargetsInside5(null);
        }
        if (\array_key_exists('TargetsInside5PerGame', $data) && $data['TargetsInside5PerGame'] !== null) {
            $object->setTargetsInside5PerGame($data['TargetsInside5PerGame']);
        }
        elseif (\array_key_exists('TargetsInside5PerGame', $data) && $data['TargetsInside5PerGame'] === null) {
            $object->setTargetsInside5PerGame(null);
        }
        if (\array_key_exists('TargetsPerGame', $data) && $data['TargetsPerGame'] !== null) {
            $object->setTargetsPerGame($data['TargetsPerGame']);
        }
        elseif (\array_key_exists('TargetsPerGame', $data) && $data['TargetsPerGame'] === null) {
            $object->setTargetsPerGame(null);
        }
        if (\array_key_exists('TargetsPerGameRank', $data) && $data['TargetsPerGameRank'] !== null) {
            $object->setTargetsPerGameRank($data['TargetsPerGameRank']);
        }
        elseif (\array_key_exists('TargetsPerGameRank', $data) && $data['TargetsPerGameRank'] === null) {
            $object->setTargetsPerGameRank(null);
        }
        if (\array_key_exists('TargetsRank', $data) && $data['TargetsRank'] !== null) {
            $object->setTargetsRank($data['TargetsRank']);
        }
        elseif (\array_key_exists('TargetsRank', $data) && $data['TargetsRank'] === null) {
            $object->setTargetsRank(null);
        }
        if (\array_key_exists('SlotSnaps', $data) && $data['SlotSnaps'] !== null) {
            $object->setSlotSnaps($data['SlotSnaps']);
        }
        elseif (\array_key_exists('SlotSnaps', $data) && $data['SlotSnaps'] === null) {
            $object->setSlotSnaps(null);
        }
        if (\array_key_exists('SlotYPR', $data) && $data['SlotYPR'] !== null) {
            $object->setSlotYPR($data['SlotYPR']);
        }
        elseif (\array_key_exists('SlotYPR', $data) && $data['SlotYPR'] === null) {
            $object->setSlotYPR(null);
        }
        if (\array_key_exists('SlotYPRRank', $data) && $data['SlotYPRRank'] !== null) {
            $object->setSlotYPRRank($data['SlotYPRRank']);
        }
        elseif (\array_key_exists('SlotYPRRank', $data) && $data['SlotYPRRank'] === null) {
            $object->setSlotYPRRank(null);
        }
        if (\array_key_exists('SlotYPT', $data) && $data['SlotYPT'] !== null) {
            $object->setSlotYPT($data['SlotYPT']);
        }
        elseif (\array_key_exists('SlotYPT', $data) && $data['SlotYPT'] === null) {
            $object->setSlotYPT(null);
        }
        if (\array_key_exists('SlotYPTRank', $data) && $data['SlotYPTRank'] !== null) {
            $object->setSlotYPTRank($data['SlotYPTRank']);
        }
        elseif (\array_key_exists('SlotYPTRank', $data) && $data['SlotYPTRank'] === null) {
            $object->setSlotYPTRank(null);
        }
        if (\array_key_exists('RedZoneSnapShare', $data) && $data['RedZoneSnapShare'] !== null) {
            $object->setRedZoneSnapShare($data['RedZoneSnapShare']);
        }
        elseif (\array_key_exists('RedZoneSnapShare', $data) && $data['RedZoneSnapShare'] === null) {
            $object->setRedZoneSnapShare(null);
        }
        if (\array_key_exists('RedZoneSnapShareRank', $data) && $data['RedZoneSnapShareRank'] !== null) {
            $object->setRedZoneSnapShareRank($data['RedZoneSnapShareRank']);
        }
        elseif (\array_key_exists('RedZoneSnapShareRank', $data) && $data['RedZoneSnapShareRank'] === null) {
            $object->setRedZoneSnapShareRank(null);
        }
        if (\array_key_exists('RouteParticipation', $data) && $data['RouteParticipation'] !== null) {
            $object->setRouteParticipation($data['RouteParticipation']);
        }
        elseif (\array_key_exists('RouteParticipation', $data) && $data['RouteParticipation'] === null) {
            $object->setRouteParticipation(null);
        }
        if (\array_key_exists('RouteParticipationRank', $data) && $data['RouteParticipationRank'] !== null) {
            $object->setRouteParticipationRank($data['RouteParticipationRank']);
        }
        elseif (\array_key_exists('RouteParticipationRank', $data) && $data['RouteParticipationRank'] === null) {
            $object->setRouteParticipationRank(null);
        }
        if (\array_key_exists('PassRoutes', $data) && $data['PassRoutes'] !== null) {
            $object->setPassRoutes($data['PassRoutes']);
        }
        elseif (\array_key_exists('PassRoutes', $data) && $data['PassRoutes'] === null) {
            $object->setPassRoutes(null);
        }
        if (\array_key_exists('PassRoutesPerGame', $data) && $data['PassRoutesPerGame'] !== null) {
            $object->setPassRoutesPerGame($data['PassRoutesPerGame']);
        }
        elseif (\array_key_exists('PassRoutesPerGame', $data) && $data['PassRoutesPerGame'] === null) {
            $object->setPassRoutesPerGame(null);
        }
        if (\array_key_exists('PassRoutesPerGameRank', $data) && $data['PassRoutesPerGameRank'] !== null) {
            $object->setPassRoutesPerGameRank($data['PassRoutesPerGameRank']);
        }
        elseif (\array_key_exists('PassRoutesPerGameRank', $data) && $data['PassRoutesPerGameRank'] === null) {
            $object->setPassRoutesPerGameRank(null);
        }
        if (\array_key_exists('RedZoneReceptions', $data) && $data['RedZoneReceptions'] !== null) {
            $object->setRedZoneReceptions($data['RedZoneReceptions']);
        }
        elseif (\array_key_exists('RedZoneReceptions', $data) && $data['RedZoneReceptions'] === null) {
            $object->setRedZoneReceptions(null);
        }
        if (\array_key_exists('RedZoneReceptionsRank', $data) && $data['RedZoneReceptionsRank'] !== null) {
            $object->setRedZoneReceptionsRank($data['RedZoneReceptionsRank']);
        }
        elseif (\array_key_exists('RedZoneReceptionsRank', $data) && $data['RedZoneReceptionsRank'] === null) {
            $object->setRedZoneReceptionsRank(null);
        }
        if (\array_key_exists('RedZoneTargets', $data) && $data['RedZoneTargets'] !== null) {
            $object->setRedZoneTargets($data['RedZoneTargets']);
        }
        elseif (\array_key_exists('RedZoneTargets', $data) && $data['RedZoneTargets'] === null) {
            $object->setRedZoneTargets(null);
        }
        if (\array_key_exists('RedZoneTargetShare', $data) && $data['RedZoneTargetShare'] !== null) {
            $object->setRedZoneTargetShare($data['RedZoneTargetShare']);
        }
        elseif (\array_key_exists('RedZoneTargetShare', $data) && $data['RedZoneTargetShare'] === null) {
            $object->setRedZoneTargetShare(null);
        }
        if (\array_key_exists('RedZoneTargetShareRank', $data) && $data['RedZoneTargetShareRank'] !== null) {
            $object->setRedZoneTargetShareRank($data['RedZoneTargetShareRank']);
        }
        elseif (\array_key_exists('RedZoneTargetShareRank', $data) && $data['RedZoneTargetShareRank'] === null) {
            $object->setRedZoneTargetShareRank(null);
        }
        if (\array_key_exists('RedZoneTargetsRank', $data) && $data['RedZoneTargetsRank'] !== null) {
            $object->setRedZoneTargetsRank($data['RedZoneTargetsRank']);
        }
        elseif (\array_key_exists('RedZoneTargetsRank', $data) && $data['RedZoneTargetsRank'] === null) {
            $object->setRedZoneTargetsRank(null);
        }
        if (\array_key_exists('RedZoneTouches', $data) && $data['RedZoneTouches'] !== null) {
            $object->setRedZoneTouches($data['RedZoneTouches']);
        }
        elseif (\array_key_exists('RedZoneTouches', $data) && $data['RedZoneTouches'] === null) {
            $object->setRedZoneTouches(null);
        }
        if (\array_key_exists('RedZoneTouchesPerGame', $data) && $data['RedZoneTouchesPerGame'] !== null) {
            $object->setRedZoneTouchesPerGame($data['RedZoneTouchesPerGame']);
        }
        elseif (\array_key_exists('RedZoneTouchesPerGame', $data) && $data['RedZoneTouchesPerGame'] === null) {
            $object->setRedZoneTouchesPerGame(null);
        }
        if (\array_key_exists('QBRatingWhenTargeted', $data) && $data['QBRatingWhenTargeted'] !== null) {
            $object->setQBRatingWhenTargeted($data['QBRatingWhenTargeted']);
        }
        elseif (\array_key_exists('QBRatingWhenTargeted', $data) && $data['QBRatingWhenTargeted'] === null) {
            $object->setQBRatingWhenTargeted(null);
        }
        if (\array_key_exists('QBRatingWhenTargetedRank', $data) && $data['QBRatingWhenTargetedRank'] !== null) {
            $object->setQBRatingWhenTargetedRank($data['QBRatingWhenTargetedRank']);
        }
        elseif (\array_key_exists('QBRatingWhenTargetedRank', $data) && $data['QBRatingWhenTargetedRank'] === null) {
            $object->setQBRatingWhenTargetedRank(null);
        }
        if (\array_key_exists('ReceivingTDs', $data) && $data['ReceivingTDs'] !== null) {
            $object->setReceivingTDs($data['ReceivingTDs']);
        }
        elseif (\array_key_exists('ReceivingTDs', $data) && $data['ReceivingTDs'] === null) {
            $object->setReceivingTDs(null);
        }
        if (\array_key_exists('ReceivingYards', $data) && $data['ReceivingYards'] !== null) {
            $object->setReceivingYards($data['ReceivingYards']);
        }
        elseif (\array_key_exists('ReceivingYards', $data) && $data['ReceivingYards'] === null) {
            $object->setReceivingYards(null);
        }
        if (\array_key_exists('ReceivingYardsPerGame', $data) && $data['ReceivingYardsPerGame'] !== null) {
            $object->setReceivingYardsPerGame($data['ReceivingYardsPerGame']);
        }
        elseif (\array_key_exists('ReceivingYardsPerGame', $data) && $data['ReceivingYardsPerGame'] === null) {
            $object->setReceivingYardsPerGame(null);
        }
        if (\array_key_exists('ReceivingYardsPerGameRank', $data) && $data['ReceivingYardsPerGameRank'] !== null) {
            $object->setReceivingYardsPerGameRank($data['ReceivingYardsPerGameRank']);
        }
        elseif (\array_key_exists('ReceivingYardsPerGameRank', $data) && $data['ReceivingYardsPerGameRank'] === null) {
            $object->setReceivingYardsPerGameRank(null);
        }
        if (\array_key_exists('ReceivingYardsRank', $data) && $data['ReceivingYardsRank'] !== null) {
            $object->setReceivingYardsRank($data['ReceivingYardsRank']);
        }
        elseif (\array_key_exists('ReceivingYardsRank', $data) && $data['ReceivingYardsRank'] === null) {
            $object->setReceivingYardsRank(null);
        }
        if (\array_key_exists('Receptions', $data) && $data['Receptions'] !== null) {
            $object->setReceptions($data['Receptions']);
        }
        elseif (\array_key_exists('Receptions', $data) && $data['Receptions'] === null) {
            $object->setReceptions(null);
        }
        if (\array_key_exists('ReceptionsPerGame', $data) && $data['ReceptionsPerGame'] !== null) {
            $object->setReceptionsPerGame($data['ReceptionsPerGame']);
        }
        elseif (\array_key_exists('ReceptionsPerGame', $data) && $data['ReceptionsPerGame'] === null) {
            $object->setReceptionsPerGame(null);
        }
        if (\array_key_exists('ReceptionsPerGameRank', $data) && $data['ReceptionsPerGameRank'] !== null) {
            $object->setReceptionsPerGameRank($data['ReceptionsPerGameRank']);
        }
        elseif (\array_key_exists('ReceptionsPerGameRank', $data) && $data['ReceptionsPerGameRank'] === null) {
            $object->setReceptionsPerGameRank(null);
        }
        if (\array_key_exists('ReceptionsRank', $data) && $data['ReceptionsRank'] !== null) {
            $object->setReceptionsRank($data['ReceptionsRank']);
        }
        elseif (\array_key_exists('ReceptionsRank', $data) && $data['ReceptionsRank'] === null) {
            $object->setReceptionsRank(null);
        }
        if (\array_key_exists('RedZoneCatchRate', $data) && $data['RedZoneCatchRate'] !== null) {
            $object->setRedZoneCatchRate($data['RedZoneCatchRate']);
        }
        elseif (\array_key_exists('RedZoneCatchRate', $data) && $data['RedZoneCatchRate'] === null) {
            $object->setRedZoneCatchRate(null);
        }
        if (\array_key_exists('RedZoneCatchRateRank', $data) && $data['RedZoneCatchRateRank'] !== null) {
            $object->setRedZoneCatchRateRank($data['RedZoneCatchRateRank']);
        }
        elseif (\array_key_exists('RedZoneCatchRateRank', $data) && $data['RedZoneCatchRateRank'] === null) {
            $object->setRedZoneCatchRateRank(null);
        }
        if (\array_key_exists('CatchableTargetRate', $data) && $data['CatchableTargetRate'] !== null) {
            $object->setCatchableTargetRate($data['CatchableTargetRate']);
        }
        elseif (\array_key_exists('CatchableTargetRate', $data) && $data['CatchableTargetRate'] === null) {
            $object->setCatchableTargetRate(null);
        }
        if (\array_key_exists('CatchableTargetRateRank', $data) && $data['CatchableTargetRateRank'] !== null) {
            $object->setCatchableTargetRateRank($data['CatchableTargetRateRank']);
        }
        elseif (\array_key_exists('CatchableTargetRateRank', $data) && $data['CatchableTargetRateRank'] === null) {
            $object->setCatchableTargetRateRank(null);
        }
        if (\array_key_exists('CatchableTargets', $data) && $data['CatchableTargets'] !== null) {
            $object->setCatchableTargets($data['CatchableTargets']);
        }
        elseif (\array_key_exists('CatchableTargets', $data) && $data['CatchableTargets'] === null) {
            $object->setCatchableTargets(null);
        }
        if (\array_key_exists('CatchRate', $data) && $data['CatchRate'] !== null) {
            $object->setCatchRate($data['CatchRate']);
        }
        elseif (\array_key_exists('CatchRate', $data) && $data['CatchRate'] === null) {
            $object->setCatchRate(null);
        }
        if (\array_key_exists('CatchRateRank', $data) && $data['CatchRateRank'] !== null) {
            $object->setCatchRateRank($data['CatchRateRank']);
        }
        elseif (\array_key_exists('CatchRateRank', $data) && $data['CatchRateRank'] === null) {
            $object->setCatchRateRank(null);
        }
        if (\array_key_exists('DominatorRating', $data) && $data['DominatorRating'] !== null) {
            $object->setDominatorRating($data['DominatorRating']);
        }
        elseif (\array_key_exists('DominatorRating', $data) && $data['DominatorRating'] === null) {
            $object->setDominatorRating(null);
        }
        if (\array_key_exists('DominatorRatingRank', $data) && $data['DominatorRatingRank'] !== null) {
            $object->setDominatorRatingRank($data['DominatorRatingRank']);
        }
        elseif (\array_key_exists('DominatorRatingRank', $data) && $data['DominatorRatingRank'] === null) {
            $object->setDominatorRatingRank(null);
        }
        if (\array_key_exists('Drops', $data) && $data['Drops'] !== null) {
            $object->setDrops($data['Drops']);
        }
        elseif (\array_key_exists('Drops', $data) && $data['Drops'] === null) {
            $object->setDrops(null);
        }
        if (\array_key_exists('DropsPerGame', $data) && $data['DropsPerGame'] !== null) {
            $object->setDropsPerGame($data['DropsPerGame']);
        }
        elseif (\array_key_exists('DropsPerGame', $data) && $data['DropsPerGame'] === null) {
            $object->setDropsPerGame(null);
        }
        if (\array_key_exists('DropsPerGameRank', $data) && $data['DropsPerGameRank'] !== null) {
            $object->setDropsPerGameRank($data['DropsPerGameRank']);
        }
        elseif (\array_key_exists('DropsPerGameRank', $data) && $data['DropsPerGameRank'] === null) {
            $object->setDropsPerGameRank(null);
        }
        if (\array_key_exists('DropRate', $data) && $data['DropRate'] !== null) {
            $object->setDropRate($data['DropRate']);
        }
        elseif (\array_key_exists('DropRate', $data) && $data['DropRate'] === null) {
            $object->setDropRate(null);
        }
        if (\array_key_exists('DropRateRank', $data) && $data['DropRateRank'] !== null) {
            $object->setDropRateRank($data['DropRateRank']);
        }
        elseif (\array_key_exists('DropRateRank', $data) && $data['DropRateRank'] === null) {
            $object->setDropRateRank(null);
        }
        if (\array_key_exists('DropsRank', $data) && $data['DropsRank'] !== null) {
            $object->setDropsRank($data['DropsRank']);
        }
        elseif (\array_key_exists('DropsRank', $data) && $data['DropsRank'] === null) {
            $object->setDropsRank(null);
        }
        if (\array_key_exists('EndzoneTargets', $data) && $data['EndzoneTargets'] !== null) {
            $object->setEndzoneTargets($data['EndzoneTargets']);
        }
        elseif (\array_key_exists('EndzoneTargets', $data) && $data['EndzoneTargets'] === null) {
            $object->setEndzoneTargets(null);
        }
        if (\array_key_exists('EndzoneTargetShare', $data) && $data['EndzoneTargetShare'] !== null) {
            $object->setEndzoneTargetShare($data['EndzoneTargetShare']);
        }
        elseif (\array_key_exists('EndzoneTargetShare', $data) && $data['EndzoneTargetShare'] === null) {
            $object->setEndzoneTargetShare(null);
        }
        if (\array_key_exists('EndzoneTargetShareRank', $data) && $data['EndzoneTargetShareRank'] !== null) {
            $object->setEndzoneTargetShareRank($data['EndzoneTargetShareRank']);
        }
        elseif (\array_key_exists('EndzoneTargetShareRank', $data) && $data['EndzoneTargetShareRank'] === null) {
            $object->setEndzoneTargetShareRank(null);
        }
        if (\array_key_exists('AccuracyRating', $data) && $data['AccuracyRating'] !== null) {
            $object->setAccuracyRating($data['AccuracyRating']);
        }
        elseif (\array_key_exists('AccuracyRating', $data) && $data['AccuracyRating'] === null) {
            $object->setAccuracyRating(null);
        }
        if (\array_key_exists('AccuracyRatingRank', $data) && $data['AccuracyRatingRank'] !== null) {
            $object->setAccuracyRatingRank($data['AccuracyRatingRank']);
        }
        elseif (\array_key_exists('AccuracyRatingRank', $data) && $data['AccuracyRatingRank'] === null) {
            $object->setAccuracyRatingRank(null);
        }
        if (\array_key_exists('AdjustedAttempts', $data) && $data['AdjustedAttempts'] !== null) {
            $object->setAdjustedAttempts($data['AdjustedAttempts']);
        }
        elseif (\array_key_exists('AdjustedAttempts', $data) && $data['AdjustedAttempts'] === null) {
            $object->setAdjustedAttempts(null);
        }
        if (\array_key_exists('AdjustedYardsPerAttempt', $data) && $data['AdjustedYardsPerAttempt'] !== null) {
            $object->setAdjustedYardsPerAttempt($data['AdjustedYardsPerAttempt']);
        }
        elseif (\array_key_exists('AdjustedYardsPerAttempt', $data) && $data['AdjustedYardsPerAttempt'] === null) {
            $object->setAdjustedYardsPerAttempt(null);
        }
        if (\array_key_exists('AdjustedYardsPerAttemptRank', $data) && $data['AdjustedYardsPerAttemptRank'] !== null) {
            $object->setAdjustedYardsPerAttemptRank($data['AdjustedYardsPerAttemptRank']);
        }
        elseif (\array_key_exists('AdjustedYardsPerAttemptRank', $data) && $data['AdjustedYardsPerAttemptRank'] === null) {
            $object->setAdjustedYardsPerAttemptRank(null);
        }
        if (\array_key_exists('AirYardsPerAttempt', $data) && $data['AirYardsPerAttempt'] !== null) {
            $object->setAirYardsPerAttempt($data['AirYardsPerAttempt']);
        }
        elseif (\array_key_exists('AirYardsPerAttempt', $data) && $data['AirYardsPerAttempt'] === null) {
            $object->setAirYardsPerAttempt(null);
        }
        if (\array_key_exists('AirYardsPerAttemptRank', $data) && $data['AirYardsPerAttemptRank'] !== null) {
            $object->setAirYardsPerAttemptRank($data['AirYardsPerAttemptRank']);
        }
        elseif (\array_key_exists('AirYardsPerAttemptRank', $data) && $data['AirYardsPerAttemptRank'] === null) {
            $object->setAirYardsPerAttemptRank(null);
        }
        if (\array_key_exists('AttemptsInside10', $data) && $data['AttemptsInside10'] !== null) {
            $object->setAttemptsInside10($data['AttemptsInside10']);
        }
        elseif (\array_key_exists('AttemptsInside10', $data) && $data['AttemptsInside10'] === null) {
            $object->setAttemptsInside10(null);
        }
        if (\array_key_exists('AttemptsInside10PerGame', $data) && $data['AttemptsInside10PerGame'] !== null) {
            $object->setAttemptsInside10PerGame($data['AttemptsInside10PerGame']);
        }
        elseif (\array_key_exists('AttemptsInside10PerGame', $data) && $data['AttemptsInside10PerGame'] === null) {
            $object->setAttemptsInside10PerGame(null);
        }
        if (\array_key_exists('AttemptsInside5', $data) && $data['AttemptsInside5'] !== null) {
            $object->setAttemptsInside5($data['AttemptsInside5']);
        }
        elseif (\array_key_exists('AttemptsInside5', $data) && $data['AttemptsInside5'] === null) {
            $object->setAttemptsInside5(null);
        }
        if (\array_key_exists('AttemptsInside5PerGame', $data) && $data['AttemptsInside5PerGame'] !== null) {
            $object->setAttemptsInside5PerGame($data['AttemptsInside5PerGame']);
        }
        elseif (\array_key_exists('AttemptsInside5PerGame', $data) && $data['AttemptsInside5PerGame'] === null) {
            $object->setAttemptsInside5PerGame(null);
        }
        if (\array_key_exists('AttemptsPerGame', $data) && $data['AttemptsPerGame'] !== null) {
            $object->setAttemptsPerGame($data['AttemptsPerGame']);
        }
        elseif (\array_key_exists('AttemptsPerGame', $data) && $data['AttemptsPerGame'] === null) {
            $object->setAttemptsPerGame(null);
        }
        if (\array_key_exists('CatchablePasses', $data) && $data['CatchablePasses'] !== null) {
            $object->setCatchablePasses($data['CatchablePasses']);
        }
        elseif (\array_key_exists('CatchablePasses', $data) && $data['CatchablePasses'] === null) {
            $object->setCatchablePasses(null);
        }
        if (\array_key_exists('CatchablePassesPerGame', $data) && $data['CatchablePassesPerGame'] !== null) {
            $object->setCatchablePassesPerGame($data['CatchablePassesPerGame']);
        }
        elseif (\array_key_exists('CatchablePassesPerGame', $data) && $data['CatchablePassesPerGame'] === null) {
            $object->setCatchablePassesPerGame(null);
        }
        if (\array_key_exists('CatchablePassesRank', $data) && $data['CatchablePassesRank'] !== null) {
            $object->setCatchablePassesRank($data['CatchablePassesRank']);
        }
        elseif (\array_key_exists('CatchablePassesRank', $data) && $data['CatchablePassesRank'] === null) {
            $object->setCatchablePassesRank(null);
        }
        if (\array_key_exists('CompletionPercentage', $data) && $data['CompletionPercentage'] !== null) {
            $object->setCompletionPercentage($data['CompletionPercentage']);
        }
        elseif (\array_key_exists('CompletionPercentage', $data) && $data['CompletionPercentage'] === null) {
            $object->setCompletionPercentage(null);
        }
        if (\array_key_exists('CompletionPercentageRank', $data) && $data['CompletionPercentageRank'] !== null) {
            $object->setCompletionPercentageRank($data['CompletionPercentageRank']);
        }
        elseif (\array_key_exists('CompletionPercentageRank', $data) && $data['CompletionPercentageRank'] === null) {
            $object->setCompletionPercentageRank(null);
        }
        if (\array_key_exists('Completions', $data) && $data['Completions'] !== null) {
            $object->setCompletions($data['Completions']);
        }
        elseif (\array_key_exists('Completions', $data) && $data['Completions'] === null) {
            $object->setCompletions(null);
        }
        if (\array_key_exists('DangerPlays', $data) && $data['DangerPlays'] !== null) {
            $object->setDangerPlays($data['DangerPlays']);
        }
        elseif (\array_key_exists('DangerPlays', $data) && $data['DangerPlays'] === null) {
            $object->setDangerPlays(null);
        }
        if (\array_key_exists('DangerPlaysPerGame', $data) && $data['DangerPlaysPerGame'] !== null) {
            $object->setDangerPlaysPerGame($data['DangerPlaysPerGame']);
        }
        elseif (\array_key_exists('DangerPlaysPerGame', $data) && $data['DangerPlaysPerGame'] === null) {
            $object->setDangerPlaysPerGame(null);
        }
        if (\array_key_exists('DangerPlaysRank', $data) && $data['DangerPlaysRank'] !== null) {
            $object->setDangerPlaysRank($data['DangerPlaysRank']);
        }
        elseif (\array_key_exists('DangerPlaysRank', $data) && $data['DangerPlaysRank'] === null) {
            $object->setDangerPlaysRank(null);
        }
        if (\array_key_exists('DeepBallAttempts', $data) && $data['DeepBallAttempts'] !== null) {
            $object->setDeepBallAttempts($data['DeepBallAttempts']);
        }
        elseif (\array_key_exists('DeepBallAttempts', $data) && $data['DeepBallAttempts'] === null) {
            $object->setDeepBallAttempts(null);
        }
        if (\array_key_exists('DeepBallAttemptsPerGame', $data) && $data['DeepBallAttemptsPerGame'] !== null) {
            $object->setDeepBallAttemptsPerGame($data['DeepBallAttemptsPerGame']);
        }
        elseif (\array_key_exists('DeepBallAttemptsPerGame', $data) && $data['DeepBallAttemptsPerGame'] === null) {
            $object->setDeepBallAttemptsPerGame(null);
        }
        if (\array_key_exists('DeepBallAttemptsPerGameRank', $data) && $data['DeepBallAttemptsPerGameRank'] !== null) {
            $object->setDeepBallAttemptsPerGameRank($data['DeepBallAttemptsPerGameRank']);
        }
        elseif (\array_key_exists('DeepBallAttemptsPerGameRank', $data) && $data['DeepBallAttemptsPerGameRank'] === null) {
            $object->setDeepBallAttemptsPerGameRank(null);
        }
        if (\array_key_exists('DeepBallAttemptsRank', $data) && $data['DeepBallAttemptsRank'] !== null) {
            $object->setDeepBallAttemptsRank($data['DeepBallAttemptsRank']);
        }
        elseif (\array_key_exists('DeepBallAttemptsRank', $data) && $data['DeepBallAttemptsRank'] === null) {
            $object->setDeepBallAttemptsRank(null);
        }
        if (\array_key_exists('DeepBallCompletionPercentage', $data) && $data['DeepBallCompletionPercentage'] !== null) {
            $object->setDeepBallCompletionPercentage($data['DeepBallCompletionPercentage']);
        }
        elseif (\array_key_exists('DeepBallCompletionPercentage', $data) && $data['DeepBallCompletionPercentage'] === null) {
            $object->setDeepBallCompletionPercentage(null);
        }
        if (\array_key_exists('DeepBallCompletionPercentageRank', $data) && $data['DeepBallCompletionPercentageRank'] !== null) {
            $object->setDeepBallCompletionPercentageRank($data['DeepBallCompletionPercentageRank']);
        }
        elseif (\array_key_exists('DeepBallCompletionPercentageRank', $data) && $data['DeepBallCompletionPercentageRank'] === null) {
            $object->setDeepBallCompletionPercentageRank(null);
        }
        if (\array_key_exists('DeepBallCompletions', $data) && $data['DeepBallCompletions'] !== null) {
            $object->setDeepBallCompletions($data['DeepBallCompletions']);
        }
        elseif (\array_key_exists('DeepBallCompletions', $data) && $data['DeepBallCompletions'] === null) {
            $object->setDeepBallCompletions(null);
        }
        if (\array_key_exists('DeepBallCompletionsRank', $data) && $data['DeepBallCompletionsRank'] !== null) {
            $object->setDeepBallCompletionsRank($data['DeepBallCompletionsRank']);
        }
        elseif (\array_key_exists('DeepBallCompletionsRank', $data) && $data['DeepBallCompletionsRank'] === null) {
            $object->setDeepBallCompletionsRank(null);
        }
        if (\array_key_exists('DroppedPasses', $data) && $data['DroppedPasses'] !== null) {
            $object->setDroppedPasses($data['DroppedPasses']);
        }
        elseif (\array_key_exists('DroppedPasses', $data) && $data['DroppedPasses'] === null) {
            $object->setDroppedPasses(null);
        }
        if (\array_key_exists('DroppedPassesRank', $data) && $data['DroppedPassesRank'] !== null) {
            $object->setDroppedPassesRank($data['DroppedPassesRank']);
        }
        elseif (\array_key_exists('DroppedPassesRank', $data) && $data['DroppedPassesRank'] === null) {
            $object->setDroppedPassesRank(null);
        }
        if (\array_key_exists('DroppedPassesPerGame', $data) && $data['DroppedPassesPerGame'] !== null) {
            $object->setDroppedPassesPerGame($data['DroppedPassesPerGame']);
        }
        elseif (\array_key_exists('DroppedPassesPerGame', $data) && $data['DroppedPassesPerGame'] === null) {
            $object->setDroppedPassesPerGame(null);
        }
        if (\array_key_exists('DropsPerAttempt', $data) && $data['DropsPerAttempt'] !== null) {
            $object->setDropsPerAttempt($data['DropsPerAttempt']);
        }
        elseif (\array_key_exists('DropsPerAttempt', $data) && $data['DropsPerAttempt'] === null) {
            $object->setDropsPerAttempt(null);
        }
        if (\array_key_exists('DropsPerAttemptRank', $data) && $data['DropsPerAttemptRank'] !== null) {
            $object->setDropsPerAttemptRank($data['DropsPerAttemptRank']);
        }
        elseif (\array_key_exists('DropsPerAttemptRank', $data) && $data['DropsPerAttemptRank'] === null) {
            $object->setDropsPerAttemptRank(null);
        }
        if (\array_key_exists('DropBacks', $data) && $data['DropBacks'] !== null) {
            $object->setDropBacks($data['DropBacks']);
        }
        elseif (\array_key_exists('DropBacks', $data) && $data['DropBacks'] === null) {
            $object->setDropBacks(null);
        }
        if (\array_key_exists('InterceptablePasses', $data) && $data['InterceptablePasses'] !== null) {
            $object->setInterceptablePasses($data['InterceptablePasses']);
        }
        elseif (\array_key_exists('InterceptablePasses', $data) && $data['InterceptablePasses'] === null) {
            $object->setInterceptablePasses(null);
        }
        if (\array_key_exists('InterceptablePassesPerGame', $data) && $data['InterceptablePassesPerGame'] !== null) {
            $object->setInterceptablePassesPerGame($data['InterceptablePassesPerGame']);
        }
        elseif (\array_key_exists('InterceptablePassesPerGame', $data) && $data['InterceptablePassesPerGame'] === null) {
            $object->setInterceptablePassesPerGame(null);
        }
        if (\array_key_exists('InterceptablePassesRank', $data) && $data['InterceptablePassesRank'] !== null) {
            $object->setInterceptablePassesRank($data['InterceptablePassesRank']);
        }
        elseif (\array_key_exists('InterceptablePassesRank', $data) && $data['InterceptablePassesRank'] === null) {
            $object->setInterceptablePassesRank(null);
        }
        if (\array_key_exists('MoneyThrows', $data) && $data['MoneyThrows'] !== null) {
            $object->setMoneyThrows($data['MoneyThrows']);
        }
        elseif (\array_key_exists('MoneyThrows', $data) && $data['MoneyThrows'] === null) {
            $object->setMoneyThrows(null);
        }
        if (\array_key_exists('MoneyThrowsPerGame', $data) && $data['MoneyThrowsPerGame'] !== null) {
            $object->setMoneyThrowsPerGame($data['MoneyThrowsPerGame']);
        }
        elseif (\array_key_exists('MoneyThrowsPerGame', $data) && $data['MoneyThrowsPerGame'] === null) {
            $object->setMoneyThrowsPerGame(null);
        }
        if (\array_key_exists('MoneyThrowsRank', $data) && $data['MoneyThrowsRank'] !== null) {
            $object->setMoneyThrowsRank($data['MoneyThrowsRank']);
        }
        elseif (\array_key_exists('MoneyThrowsRank', $data) && $data['MoneyThrowsRank'] === null) {
            $object->setMoneyThrowsRank(null);
        }
        if (\array_key_exists('PassAttempts', $data) && $data['PassAttempts'] !== null) {
            $object->setPassAttempts($data['PassAttempts']);
        }
        elseif (\array_key_exists('PassAttempts', $data) && $data['PassAttempts'] === null) {
            $object->setPassAttempts(null);
        }
        if (\array_key_exists('PassAttemptsRank', $data) && $data['PassAttemptsRank'] !== null) {
            $object->setPassAttemptsRank($data['PassAttemptsRank']);
        }
        elseif (\array_key_exists('PassAttemptsRank', $data) && $data['PassAttemptsRank'] === null) {
            $object->setPassAttemptsRank(null);
        }
        if (\array_key_exists('PassAttemptDistance', $data) && $data['PassAttemptDistance'] !== null) {
            $object->setPassAttemptDistance($data['PassAttemptDistance']);
        }
        elseif (\array_key_exists('PassAttemptDistance', $data) && $data['PassAttemptDistance'] === null) {
            $object->setPassAttemptDistance(null);
        }
        if (\array_key_exists('PassAttemptDistanceRank', $data) && $data['PassAttemptDistanceRank'] !== null) {
            $object->setPassAttemptDistanceRank($data['PassAttemptDistanceRank']);
        }
        elseif (\array_key_exists('PassAttemptDistanceRank', $data) && $data['PassAttemptDistanceRank'] === null) {
            $object->setPassAttemptDistanceRank(null);
        }
        if (\array_key_exists('PassAttemptDistancePerAttempt', $data) && $data['PassAttemptDistancePerAttempt'] !== null) {
            $object->setPassAttemptDistancePerAttempt($data['PassAttemptDistancePerAttempt']);
        }
        elseif (\array_key_exists('PassAttemptDistancePerAttempt', $data) && $data['PassAttemptDistancePerAttempt'] === null) {
            $object->setPassAttemptDistancePerAttempt(null);
        }
        if (\array_key_exists('PassAttemptDistancePerAttemptRank', $data) && $data['PassAttemptDistancePerAttemptRank'] !== null) {
            $object->setPassAttemptDistancePerAttemptRank($data['PassAttemptDistancePerAttemptRank']);
        }
        elseif (\array_key_exists('PassAttemptDistancePerAttemptRank', $data) && $data['PassAttemptDistancePerAttemptRank'] === null) {
            $object->setPassAttemptDistancePerAttemptRank(null);
        }
        if (\array_key_exists('PassingAttempts', $data) && $data['PassingAttempts'] !== null) {
            $object->setPassingAttempts($data['PassingAttempts']);
        }
        elseif (\array_key_exists('PassingAttempts', $data) && $data['PassingAttempts'] === null) {
            $object->setPassingAttempts(null);
        }
        if (\array_key_exists('PassingTouchdowns', $data) && $data['PassingTouchdowns'] !== null) {
            $object->setPassingTouchdowns($data['PassingTouchdowns']);
        }
        elseif (\array_key_exists('PassingTouchdowns', $data) && $data['PassingTouchdowns'] === null) {
            $object->setPassingTouchdowns(null);
        }
        if (\array_key_exists('PassingTouchdownsRank', $data) && $data['PassingTouchdownsRank'] !== null) {
            $object->setPassingTouchdownsRank($data['PassingTouchdownsRank']);
        }
        elseif (\array_key_exists('PassingTouchdownsRank', $data) && $data['PassingTouchdownsRank'] === null) {
            $object->setPassingTouchdownsRank(null);
        }
        if (\array_key_exists('PassingYards', $data) && $data['PassingYards'] !== null) {
            $object->setPassingYards($data['PassingYards']);
        }
        elseif (\array_key_exists('PassingYards', $data) && $data['PassingYards'] === null) {
            $object->setPassingYards(null);
        }
        if (\array_key_exists('PassingYardsPerAttempt', $data) && $data['PassingYardsPerAttempt'] !== null) {
            $object->setPassingYardsPerAttempt($data['PassingYardsPerAttempt']);
        }
        elseif (\array_key_exists('PassingYardsPerAttempt', $data) && $data['PassingYardsPerAttempt'] === null) {
            $object->setPassingYardsPerAttempt(null);
        }
        if (\array_key_exists('PassingYardsPerAttemptRank', $data) && $data['PassingYardsPerAttemptRank'] !== null) {
            $object->setPassingYardsPerAttemptRank($data['PassingYardsPerAttemptRank']);
        }
        elseif (\array_key_exists('PassingYardsPerAttemptRank', $data) && $data['PassingYardsPerAttemptRank'] === null) {
            $object->setPassingYardsPerAttemptRank(null);
        }
        if (\array_key_exists('PassingYardsPerGame', $data) && $data['PassingYardsPerGame'] !== null) {
            $object->setPassingYardsPerGame($data['PassingYardsPerGame']);
        }
        elseif (\array_key_exists('PassingYardsPerGame', $data) && $data['PassingYardsPerGame'] === null) {
            $object->setPassingYardsPerGame(null);
        }
        if (\array_key_exists('PassingYardsPerGameRank', $data) && $data['PassingYardsPerGameRank'] !== null) {
            $object->setPassingYardsPerGameRank($data['PassingYardsPerGameRank']);
        }
        elseif (\array_key_exists('PassingYardsPerGameRank', $data) && $data['PassingYardsPerGameRank'] === null) {
            $object->setPassingYardsPerGameRank(null);
        }
        if (\array_key_exists('PassingYardsRank', $data) && $data['PassingYardsRank'] !== null) {
            $object->setPassingYardsRank($data['PassingYardsRank']);
        }
        elseif (\array_key_exists('PassingYardsRank', $data) && $data['PassingYardsRank'] === null) {
            $object->setPassingYardsRank(null);
        }
        if (\array_key_exists('PlayactionPassAttempts', $data) && $data['PlayactionPassAttempts'] !== null) {
            $object->setPlayactionPassAttempts($data['PlayactionPassAttempts']);
        }
        elseif (\array_key_exists('PlayactionPassAttempts', $data) && $data['PlayactionPassAttempts'] === null) {
            $object->setPlayactionPassAttempts(null);
        }
        if (\array_key_exists('PlayactionPassAttemptsPerGame', $data) && $data['PlayactionPassAttemptsPerGame'] !== null) {
            $object->setPlayactionPassAttemptsPerGame($data['PlayactionPassAttemptsPerGame']);
        }
        elseif (\array_key_exists('PlayactionPassAttemptsPerGame', $data) && $data['PlayactionPassAttemptsPerGame'] === null) {
            $object->setPlayactionPassAttemptsPerGame(null);
        }
        if (\array_key_exists('PlayactionPassAttemptsRank', $data) && $data['PlayactionPassAttemptsRank'] !== null) {
            $object->setPlayactionPassAttemptsRank($data['PlayactionPassAttemptsRank']);
        }
        elseif (\array_key_exists('PlayactionPassAttemptsRank', $data) && $data['PlayactionPassAttemptsRank'] === null) {
            $object->setPlayactionPassAttemptsRank(null);
        }
        if (\array_key_exists('PlayactionPassCompletionPercentage', $data) && $data['PlayactionPassCompletionPercentage'] !== null) {
            $object->setPlayactionPassCompletionPercentage($data['PlayactionPassCompletionPercentage']);
        }
        elseif (\array_key_exists('PlayactionPassCompletionPercentage', $data) && $data['PlayactionPassCompletionPercentage'] === null) {
            $object->setPlayactionPassCompletionPercentage(null);
        }
        if (\array_key_exists('PlayactionPassCompletionPercentageRank', $data) && $data['PlayactionPassCompletionPercentageRank'] !== null) {
            $object->setPlayactionPassCompletionPercentageRank($data['PlayactionPassCompletionPercentageRank']);
        }
        elseif (\array_key_exists('PlayactionPassCompletionPercentageRank', $data) && $data['PlayactionPassCompletionPercentageRank'] === null) {
            $object->setPlayactionPassCompletionPercentageRank(null);
        }
        if (\array_key_exists('ProtectionRate', $data) && $data['ProtectionRate'] !== null) {
            $object->setProtectionRate($data['ProtectionRate']);
        }
        elseif (\array_key_exists('ProtectionRate', $data) && $data['ProtectionRate'] === null) {
            $object->setProtectionRate(null);
        }
        if (\array_key_exists('ProtectionRateRank', $data) && $data['ProtectionRateRank'] !== null) {
            $object->setProtectionRateRank($data['ProtectionRateRank']);
        }
        elseif (\array_key_exists('ProtectionRateRank', $data) && $data['ProtectionRateRank'] === null) {
            $object->setProtectionRateRank(null);
        }
        if (\array_key_exists('RedZoneAttempts', $data) && $data['RedZoneAttempts'] !== null) {
            $object->setRedZoneAttempts($data['RedZoneAttempts']);
        }
        elseif (\array_key_exists('RedZoneAttempts', $data) && $data['RedZoneAttempts'] === null) {
            $object->setRedZoneAttempts(null);
        }
        if (\array_key_exists('RedZoneAttemptsPerGame', $data) && $data['RedZoneAttemptsPerGame'] !== null) {
            $object->setRedZoneAttemptsPerGame($data['RedZoneAttemptsPerGame']);
        }
        elseif (\array_key_exists('RedZoneAttemptsPerGame', $data) && $data['RedZoneAttemptsPerGame'] === null) {
            $object->setRedZoneAttemptsPerGame(null);
        }
        if (\array_key_exists('RedZoneAttemptsRank', $data) && $data['RedZoneAttemptsRank'] !== null) {
            $object->setRedZoneAttemptsRank($data['RedZoneAttemptsRank']);
        }
        elseif (\array_key_exists('RedZoneAttemptsRank', $data) && $data['RedZoneAttemptsRank'] === null) {
            $object->setRedZoneAttemptsRank(null);
        }
        if (\array_key_exists('RedZoneCompletionPercentage', $data) && $data['RedZoneCompletionPercentage'] !== null) {
            $object->setRedZoneCompletionPercentage($data['RedZoneCompletionPercentage']);
        }
        elseif (\array_key_exists('RedZoneCompletionPercentage', $data) && $data['RedZoneCompletionPercentage'] === null) {
            $object->setRedZoneCompletionPercentage(null);
        }
        if (\array_key_exists('RedZoneCompletionPercentageRank', $data) && $data['RedZoneCompletionPercentageRank'] !== null) {
            $object->setRedZoneCompletionPercentageRank($data['RedZoneCompletionPercentageRank']);
        }
        elseif (\array_key_exists('RedZoneCompletionPercentageRank', $data) && $data['RedZoneCompletionPercentageRank'] === null) {
            $object->setRedZoneCompletionPercentageRank(null);
        }
        if (\array_key_exists('RedZoneTDtoINTRatio', $data) && $data['RedZoneTDtoINTRatio'] !== null) {
            $object->setRedZoneTDtoINTRatio($data['RedZoneTDtoINTRatio']);
        }
        elseif (\array_key_exists('RedZoneTDtoINTRatio', $data) && $data['RedZoneTDtoINTRatio'] === null) {
            $object->setRedZoneTDtoINTRatio(null);
        }
        if (\array_key_exists('RushingTDs', $data) && $data['RushingTDs'] !== null) {
            $object->setRushingTDs($data['RushingTDs']);
        }
        elseif (\array_key_exists('RushingTDs', $data) && $data['RushingTDs'] === null) {
            $object->setRushingTDs(null);
        }
        if (\array_key_exists('RushingYardsPerGameRank', $data) && $data['RushingYardsPerGameRank'] !== null) {
            $object->setRushingYardsPerGameRank($data['RushingYardsPerGameRank']);
        }
        elseif (\array_key_exists('RushingYardsPerGameRank', $data) && $data['RushingYardsPerGameRank'] === null) {
            $object->setRushingYardsPerGameRank(null);
        }
        if (\array_key_exists('ShotgunCompletionPercentage', $data) && $data['ShotgunCompletionPercentage'] !== null) {
            $object->setShotgunCompletionPercentage($data['ShotgunCompletionPercentage']);
        }
        elseif (\array_key_exists('ShotgunCompletionPercentage', $data) && $data['ShotgunCompletionPercentage'] === null) {
            $object->setShotgunCompletionPercentage(null);
        }
        if (\array_key_exists('ShotgunSnaps', $data) && $data['ShotgunSnaps'] !== null) {
            $object->setShotgunSnaps($data['ShotgunSnaps']);
        }
        elseif (\array_key_exists('ShotgunSnaps', $data) && $data['ShotgunSnaps'] === null) {
            $object->setShotgunSnaps(null);
        }
        if (\array_key_exists('UnderCenterCompletionPercentage', $data) && $data['UnderCenterCompletionPercentage'] !== null) {
            $object->setUnderCenterCompletionPercentage($data['UnderCenterCompletionPercentage']);
        }
        elseif (\array_key_exists('UnderCenterCompletionPercentage', $data) && $data['UnderCenterCompletionPercentage'] === null) {
            $object->setUnderCenterCompletionPercentage(null);
        }
        if (\array_key_exists('UnderCenterSnaps', $data) && $data['UnderCenterSnaps'] !== null) {
            $object->setUnderCenterSnaps($data['UnderCenterSnaps']);
        }
        elseif (\array_key_exists('UnderCenterSnaps', $data) && $data['UnderCenterSnaps'] === null) {
            $object->setUnderCenterSnaps(null);
        }
        if (\array_key_exists('ReceiverContestedCatchRate', $data) && $data['ReceiverContestedCatchRate'] !== null) {
            $object->setReceiverContestedCatchRate($data['ReceiverContestedCatchRate']);
        }
        elseif (\array_key_exists('ReceiverContestedCatchRate', $data) && $data['ReceiverContestedCatchRate'] === null) {
            $object->setReceiverContestedCatchRate(null);
        }
        if (\array_key_exists('ReceiverContestedCatchRateRank', $data) && $data['ReceiverContestedCatchRateRank'] !== null) {
            $object->setReceiverContestedCatchRateRank($data['ReceiverContestedCatchRateRank']);
        }
        elseif (\array_key_exists('ReceiverContestedCatchRateRank', $data) && $data['ReceiverContestedCatchRateRank'] === null) {
            $object->setReceiverContestedCatchRateRank(null);
        }
        if (\array_key_exists('ReceiverTargetSeparation', $data) && $data['ReceiverTargetSeparation'] !== null) {
            $object->setReceiverTargetSeparation($data['ReceiverTargetSeparation']);
        }
        elseif (\array_key_exists('ReceiverTargetSeparation', $data) && $data['ReceiverTargetSeparation'] === null) {
            $object->setReceiverTargetSeparation(null);
        }
        if (\array_key_exists('ReceiverTargetSeparationRank', $data) && $data['ReceiverTargetSeparationRank'] !== null) {
            $object->setReceiverTargetSeparationRank($data['ReceiverTargetSeparationRank']);
        }
        elseif (\array_key_exists('ReceiverTargetSeparationRank', $data) && $data['ReceiverTargetSeparationRank'] === null) {
            $object->setReceiverTargetSeparationRank(null);
        }
        if (\array_key_exists('ReceiverYardsAfterTheCatch', $data) && $data['ReceiverYardsAfterTheCatch'] !== null) {
            $object->setReceiverYardsAfterTheCatch($data['ReceiverYardsAfterTheCatch']);
        }
        elseif (\array_key_exists('ReceiverYardsAfterTheCatch', $data) && $data['ReceiverYardsAfterTheCatch'] === null) {
            $object->setReceiverYardsAfterTheCatch(null);
        }
        if (\array_key_exists('ReceiverYardsAfterTheCatchRank', $data) && $data['ReceiverYardsAfterTheCatchRank'] !== null) {
            $object->setReceiverYardsAfterTheCatchRank($data['ReceiverYardsAfterTheCatchRank']);
        }
        elseif (\array_key_exists('ReceiverYardsAfterTheCatchRank', $data) && $data['ReceiverYardsAfterTheCatchRank'] === null) {
            $object->setReceiverYardsAfterTheCatchRank(null);
        }
        if (\array_key_exists('ReceiverYardsAfterTheCatchPerTarget', $data) && $data['ReceiverYardsAfterTheCatchPerTarget'] !== null) {
            $object->setReceiverYardsAfterTheCatchPerTarget($data['ReceiverYardsAfterTheCatchPerTarget']);
        }
        elseif (\array_key_exists('ReceiverYardsAfterTheCatchPerTarget', $data) && $data['ReceiverYardsAfterTheCatchPerTarget'] === null) {
            $object->setReceiverYardsAfterTheCatchPerTarget(null);
        }
        if (\array_key_exists('SupportingCastEfficiency', $data) && $data['SupportingCastEfficiency'] !== null) {
            $object->setSupportingCastEfficiency($data['SupportingCastEfficiency']);
        }
        elseif (\array_key_exists('SupportingCastEfficiency', $data) && $data['SupportingCastEfficiency'] === null) {
            $object->setSupportingCastEfficiency(null);
        }
        if (\array_key_exists('SupportingCastEfficiencyRank', $data) && $data['SupportingCastEfficiencyRank'] !== null) {
            $object->setSupportingCastEfficiencyRank($data['SupportingCastEfficiencyRank']);
        }
        elseif (\array_key_exists('SupportingCastEfficiencyRank', $data) && $data['SupportingCastEfficiencyRank'] === null) {
            $object->setSupportingCastEfficiencyRank(null);
        }
        if (\array_key_exists('TotalQBR', $data) && $data['TotalQBR'] !== null) {
            $object->setTotalQBR($data['TotalQBR']);
        }
        elseif (\array_key_exists('TotalQBR', $data) && $data['TotalQBR'] === null) {
            $object->setTotalQBR(null);
        }
        if (\array_key_exists('TotalQBRRank', $data) && $data['TotalQBRRank'] !== null) {
            $object->setTotalQBRRank($data['TotalQBRRank']);
        }
        elseif (\array_key_exists('TotalQBRRank', $data) && $data['TotalQBRRank'] === null) {
            $object->setTotalQBRRank(null);
        }
        if (\array_key_exists('TrueCompletionPercentage', $data) && $data['TrueCompletionPercentage'] !== null) {
            $object->setTrueCompletionPercentage($data['TrueCompletionPercentage']);
        }
        elseif (\array_key_exists('TrueCompletionPercentage', $data) && $data['TrueCompletionPercentage'] === null) {
            $object->setTrueCompletionPercentage(null);
        }
        if (\array_key_exists('TrueCompletionPercentageRank', $data) && $data['TrueCompletionPercentageRank'] !== null) {
            $object->setTrueCompletionPercentageRank($data['TrueCompletionPercentageRank']);
        }
        elseif (\array_key_exists('TrueCompletionPercentageRank', $data) && $data['TrueCompletionPercentageRank'] === null) {
            $object->setTrueCompletionPercentageRank(null);
        }
        if (\array_key_exists('TruePasserRating', $data) && $data['TruePasserRating'] !== null) {
            $object->setTruePasserRating($data['TruePasserRating']);
        }
        elseif (\array_key_exists('TruePasserRating', $data) && $data['TruePasserRating'] === null) {
            $object->setTruePasserRating(null);
        }
        if (\array_key_exists('TruePasserRatingRank', $data) && $data['TruePasserRatingRank'] !== null) {
            $object->setTruePasserRatingRank($data['TruePasserRatingRank']);
        }
        elseif (\array_key_exists('TruePasserRatingRank', $data) && $data['TruePasserRatingRank'] === null) {
            $object->setTruePasserRatingRank(null);
        }
        if (\array_key_exists('UncatchablePasses', $data) && $data['UncatchablePasses'] !== null) {
            $object->setUncatchablePasses($data['UncatchablePasses']);
        }
        elseif (\array_key_exists('UncatchablePasses', $data) && $data['UncatchablePasses'] === null) {
            $object->setUncatchablePasses(null);
        }
        if (\array_key_exists('UncatchablePassesPerGame', $data) && $data['UncatchablePassesPerGame'] !== null) {
            $object->setUncatchablePassesPerGame($data['UncatchablePassesPerGame']);
        }
        elseif (\array_key_exists('UncatchablePassesPerGame', $data) && $data['UncatchablePassesPerGame'] === null) {
            $object->setUncatchablePassesPerGame(null);
        }
        if (\array_key_exists('UncatchablePassesRank', $data) && $data['UncatchablePassesRank'] !== null) {
            $object->setUncatchablePassesRank($data['UncatchablePassesRank']);
        }
        elseif (\array_key_exists('UncatchablePassesRank', $data) && $data['UncatchablePassesRank'] === null) {
            $object->setUncatchablePassesRank(null);
        }
        if (\array_key_exists('UnderPressureAttempts', $data) && $data['UnderPressureAttempts'] !== null) {
            $object->setUnderPressureAttempts($data['UnderPressureAttempts']);
        }
        elseif (\array_key_exists('UnderPressureAttempts', $data) && $data['UnderPressureAttempts'] === null) {
            $object->setUnderPressureAttempts(null);
        }
        if (\array_key_exists('UnderPressureAttemptsRank', $data) && $data['UnderPressureAttemptsRank'] !== null) {
            $object->setUnderPressureAttemptsRank($data['UnderPressureAttemptsRank']);
        }
        elseif (\array_key_exists('UnderPressureAttemptsRank', $data) && $data['UnderPressureAttemptsRank'] === null) {
            $object->setUnderPressureAttemptsRank(null);
        }
        if (\array_key_exists('UnderPressureAttemptsPerGame', $data) && $data['UnderPressureAttemptsPerGame'] !== null) {
            $object->setUnderPressureAttemptsPerGame($data['UnderPressureAttemptsPerGame']);
        }
        elseif (\array_key_exists('UnderPressureAttemptsPerGame', $data) && $data['UnderPressureAttemptsPerGame'] === null) {
            $object->setUnderPressureAttemptsPerGame(null);
        }
        if (\array_key_exists('PressuredCompletionPercentage', $data) && $data['PressuredCompletionPercentage'] !== null) {
            $object->setPressuredCompletionPercentage($data['PressuredCompletionPercentage']);
        }
        elseif (\array_key_exists('PressuredCompletionPercentage', $data) && $data['PressuredCompletionPercentage'] === null) {
            $object->setPressuredCompletionPercentage(null);
        }
        if (\array_key_exists('PressuredCompletionPercentageRank', $data) && $data['PressuredCompletionPercentageRank'] !== null) {
            $object->setPressuredCompletionPercentageRank($data['PressuredCompletionPercentageRank']);
        }
        elseif (\array_key_exists('PressuredCompletionPercentageRank', $data) && $data['PressuredCompletionPercentageRank'] === null) {
            $object->setPressuredCompletionPercentageRank(null);
        }
        if (\array_key_exists('AverageDefendersInTheBox', $data) && $data['AverageDefendersInTheBox'] !== null) {
            $object->setAverageDefendersInTheBox($data['AverageDefendersInTheBox']);
        }
        elseif (\array_key_exists('AverageDefendersInTheBox', $data) && $data['AverageDefendersInTheBox'] === null) {
            $object->setAverageDefendersInTheBox(null);
        }
        if (\array_key_exists('AverageDefendersInTheBoxRank', $data) && $data['AverageDefendersInTheBoxRank'] !== null) {
            $object->setAverageDefendersInTheBoxRank($data['AverageDefendersInTheBoxRank']);
        }
        elseif (\array_key_exists('AverageDefendersInTheBoxRank', $data) && $data['AverageDefendersInTheBoxRank'] === null) {
            $object->setAverageDefendersInTheBoxRank(null);
        }
        if (\array_key_exists('BaseFrontCarryRate', $data) && $data['BaseFrontCarryRate'] !== null) {
            $object->setBaseFrontCarryRate($data['BaseFrontCarryRate']);
        }
        elseif (\array_key_exists('BaseFrontCarryRate', $data) && $data['BaseFrontCarryRate'] === null) {
            $object->setBaseFrontCarryRate(null);
        }
        if (\array_key_exists('BaseFrontCarryRateRank', $data) && $data['BaseFrontCarryRateRank'] !== null) {
            $object->setBaseFrontCarryRateRank($data['BaseFrontCarryRateRank']);
        }
        elseif (\array_key_exists('BaseFrontCarryRateRank', $data) && $data['BaseFrontCarryRateRank'] === null) {
            $object->setBaseFrontCarryRateRank(null);
        }
        if (\array_key_exists('BaseFrontYardsPerCarry', $data) && $data['BaseFrontYardsPerCarry'] !== null) {
            $object->setBaseFrontYardsPerCarry($data['BaseFrontYardsPerCarry']);
        }
        elseif (\array_key_exists('BaseFrontYardsPerCarry', $data) && $data['BaseFrontYardsPerCarry'] === null) {
            $object->setBaseFrontYardsPerCarry(null);
        }
        if (\array_key_exists('BaseFrontYardsPerCarryRank', $data) && $data['BaseFrontYardsPerCarryRank'] !== null) {
            $object->setBaseFrontYardsPerCarryRank($data['BaseFrontYardsPerCarryRank']);
        }
        elseif (\array_key_exists('BaseFrontYardsPerCarryRank', $data) && $data['BaseFrontYardsPerCarryRank'] === null) {
            $object->setBaseFrontYardsPerCarryRank(null);
        }
        if (\array_key_exists('BreakawayRunRate', $data) && $data['BreakawayRunRate'] !== null) {
            $object->setBreakawayRunRate($data['BreakawayRunRate']);
        }
        elseif (\array_key_exists('BreakawayRunRate', $data) && $data['BreakawayRunRate'] === null) {
            $object->setBreakawayRunRate(null);
        }
        if (\array_key_exists('BreakawayRunRateRank', $data) && $data['BreakawayRunRateRank'] !== null) {
            $object->setBreakawayRunRateRank($data['BreakawayRunRateRank']);
        }
        elseif (\array_key_exists('BreakawayRunRateRank', $data) && $data['BreakawayRunRateRank'] === null) {
            $object->setBreakawayRunRateRank(null);
        }
        if (\array_key_exists('BreakawayRuns', $data) && $data['BreakawayRuns'] !== null) {
            $object->setBreakawayRuns($data['BreakawayRuns']);
        }
        elseif (\array_key_exists('BreakawayRuns', $data) && $data['BreakawayRuns'] === null) {
            $object->setBreakawayRuns(null);
        }
        if (\array_key_exists('BreakawayRunsPerGame', $data) && $data['BreakawayRunsPerGame'] !== null) {
            $object->setBreakawayRunsPerGame($data['BreakawayRunsPerGame']);
        }
        elseif (\array_key_exists('BreakawayRunsPerGame', $data) && $data['BreakawayRunsPerGame'] === null) {
            $object->setBreakawayRunsPerGame(null);
        }
        if (\array_key_exists('BreakawayRunsPerGameRank', $data) && $data['BreakawayRunsPerGameRank'] !== null) {
            $object->setBreakawayRunsPerGameRank($data['BreakawayRunsPerGameRank']);
        }
        elseif (\array_key_exists('BreakawayRunsPerGameRank', $data) && $data['BreakawayRunsPerGameRank'] === null) {
            $object->setBreakawayRunsPerGameRank(null);
        }
        if (\array_key_exists('BreakawayRunsRank', $data) && $data['BreakawayRunsRank'] !== null) {
            $object->setBreakawayRunsRank($data['BreakawayRunsRank']);
        }
        elseif (\array_key_exists('BreakawayRunsRank', $data) && $data['BreakawayRunsRank'] === null) {
            $object->setBreakawayRunsRank(null);
        }
        if (\array_key_exists('EvadedTackles', $data) && $data['EvadedTackles'] !== null) {
            $object->setEvadedTackles($data['EvadedTackles']);
        }
        elseif (\array_key_exists('EvadedTackles', $data) && $data['EvadedTackles'] === null) {
            $object->setEvadedTackles(null);
        }
        if (\array_key_exists('EvadedTacklesPerGame', $data) && $data['EvadedTacklesPerGame'] !== null) {
            $object->setEvadedTacklesPerGame($data['EvadedTacklesPerGame']);
        }
        elseif (\array_key_exists('EvadedTacklesPerGame', $data) && $data['EvadedTacklesPerGame'] === null) {
            $object->setEvadedTacklesPerGame(null);
        }
        if (\array_key_exists('EvadedTacklesPerGameRank', $data) && $data['EvadedTacklesPerGameRank'] !== null) {
            $object->setEvadedTacklesPerGameRank($data['EvadedTacklesPerGameRank']);
        }
        elseif (\array_key_exists('EvadedTacklesPerGameRank', $data) && $data['EvadedTacklesPerGameRank'] === null) {
            $object->setEvadedTacklesPerGameRank(null);
        }
        if (\array_key_exists('EvadedTacklesRank', $data) && $data['EvadedTacklesRank'] !== null) {
            $object->setEvadedTacklesRank($data['EvadedTacklesRank']);
        }
        elseif (\array_key_exists('EvadedTacklesRank', $data) && $data['EvadedTacklesRank'] === null) {
            $object->setEvadedTacklesRank(null);
        }
        if (\array_key_exists('JukeRate', $data) && $data['JukeRate'] !== null) {
            $object->setJukeRate($data['JukeRate']);
        }
        elseif (\array_key_exists('JukeRate', $data) && $data['JukeRate'] === null) {
            $object->setJukeRate(null);
        }
        if (\array_key_exists('JukeRateRank', $data) && $data['JukeRateRank'] !== null) {
            $object->setJukeRateRank($data['JukeRateRank']);
        }
        elseif (\array_key_exists('JukeRateRank', $data) && $data['JukeRateRank'] === null) {
            $object->setJukeRateRank(null);
        }
        if (\array_key_exists('LightFrontCarryRate', $data) && $data['LightFrontCarryRate'] !== null) {
            $object->setLightFrontCarryRate($data['LightFrontCarryRate']);
        }
        elseif (\array_key_exists('LightFrontCarryRate', $data) && $data['LightFrontCarryRate'] === null) {
            $object->setLightFrontCarryRate(null);
        }
        if (\array_key_exists('LightFrontCarryRateRank', $data) && $data['LightFrontCarryRateRank'] !== null) {
            $object->setLightFrontCarryRateRank($data['LightFrontCarryRateRank']);
        }
        elseif (\array_key_exists('LightFrontCarryRateRank', $data) && $data['LightFrontCarryRateRank'] === null) {
            $object->setLightFrontCarryRateRank(null);
        }
        if (\array_key_exists('LightFrontYardsPerCarry', $data) && $data['LightFrontYardsPerCarry'] !== null) {
            $object->setLightFrontYardsPerCarry($data['LightFrontYardsPerCarry']);
        }
        elseif (\array_key_exists('LightFrontYardsPerCarry', $data) && $data['LightFrontYardsPerCarry'] === null) {
            $object->setLightFrontYardsPerCarry(null);
        }
        if (\array_key_exists('LightFrontYardsPerCarryRank', $data) && $data['LightFrontYardsPerCarryRank'] !== null) {
            $object->setLightFrontYardsPerCarryRank($data['LightFrontYardsPerCarryRank']);
        }
        elseif (\array_key_exists('LightFrontYardsPerCarryRank', $data) && $data['LightFrontYardsPerCarryRank'] === null) {
            $object->setLightFrontYardsPerCarryRank(null);
        }
        if (\array_key_exists('Opportunities', $data) && $data['Opportunities'] !== null) {
            $object->setOpportunities($data['Opportunities']);
        }
        elseif (\array_key_exists('Opportunities', $data) && $data['Opportunities'] === null) {
            $object->setOpportunities(null);
        }
        if (\array_key_exists('OpportunityShare', $data) && $data['OpportunityShare'] !== null) {
            $object->setOpportunityShare($data['OpportunityShare']);
        }
        elseif (\array_key_exists('OpportunityShare', $data) && $data['OpportunityShare'] === null) {
            $object->setOpportunityShare(null);
        }
        if (\array_key_exists('OpportunityShareRank', $data) && $data['OpportunityShareRank'] !== null) {
            $object->setOpportunityShareRank($data['OpportunityShareRank']);
        }
        elseif (\array_key_exists('OpportunityShareRank', $data) && $data['OpportunityShareRank'] === null) {
            $object->setOpportunityShareRank(null);
        }
        if (\array_key_exists('RedZoneOpportunities', $data) && $data['RedZoneOpportunities'] !== null) {
            $object->setRedZoneOpportunities($data['RedZoneOpportunities']);
        }
        elseif (\array_key_exists('RedZoneOpportunities', $data) && $data['RedZoneOpportunities'] === null) {
            $object->setRedZoneOpportunities(null);
        }
        if (\array_key_exists('RedZoneTouchesPerGameRank', $data) && $data['RedZoneTouchesPerGameRank'] !== null) {
            $object->setRedZoneTouchesPerGameRank($data['RedZoneTouchesPerGameRank']);
        }
        elseif (\array_key_exists('RedZoneTouchesPerGameRank', $data) && $data['RedZoneTouchesPerGameRank'] === null) {
            $object->setRedZoneTouchesPerGameRank(null);
        }
        if (\array_key_exists('RedZoneTouchesRank', $data) && $data['RedZoneTouchesRank'] !== null) {
            $object->setRedZoneTouchesRank($data['RedZoneTouchesRank']);
        }
        elseif (\array_key_exists('RedZoneTouchesRank', $data) && $data['RedZoneTouchesRank'] === null) {
            $object->setRedZoneTouchesRank(null);
        }
        if (\array_key_exists('RunBlockingEfficiency', $data) && $data['RunBlockingEfficiency'] !== null) {
            $object->setRunBlockingEfficiency($data['RunBlockingEfficiency']);
        }
        elseif (\array_key_exists('RunBlockingEfficiency', $data) && $data['RunBlockingEfficiency'] === null) {
            $object->setRunBlockingEfficiency(null);
        }
        if (\array_key_exists('RunBlockingEfficiencyRank', $data) && $data['RunBlockingEfficiencyRank'] !== null) {
            $object->setRunBlockingEfficiencyRank($data['RunBlockingEfficiencyRank']);
        }
        elseif (\array_key_exists('RunBlockingEfficiencyRank', $data) && $data['RunBlockingEfficiencyRank'] === null) {
            $object->setRunBlockingEfficiencyRank(null);
        }
        if (\array_key_exists('RushYardsPerGameRank', $data) && $data['RushYardsPerGameRank'] !== null) {
            $object->setRushYardsPerGameRank($data['RushYardsPerGameRank']);
        }
        elseif (\array_key_exists('RushYardsPerGameRank', $data) && $data['RushYardsPerGameRank'] === null) {
            $object->setRushYardsPerGameRank(null);
        }
        if (\array_key_exists('ShotgunCarryRate', $data) && $data['ShotgunCarryRate'] !== null) {
            $object->setShotgunCarryRate($data['ShotgunCarryRate']);
        }
        elseif (\array_key_exists('ShotgunCarryRate', $data) && $data['ShotgunCarryRate'] === null) {
            $object->setShotgunCarryRate(null);
        }
        if (\array_key_exists('ShotgunCarryRateRank', $data) && $data['ShotgunCarryRateRank'] !== null) {
            $object->setShotgunCarryRateRank($data['ShotgunCarryRateRank']);
        }
        elseif (\array_key_exists('ShotgunCarryRateRank', $data) && $data['ShotgunCarryRateRank'] === null) {
            $object->setShotgunCarryRateRank(null);
        }
        if (\array_key_exists('ShotgunYardsPerCarry', $data) && $data['ShotgunYardsPerCarry'] !== null) {
            $object->setShotgunYardsPerCarry($data['ShotgunYardsPerCarry']);
        }
        elseif (\array_key_exists('ShotgunYardsPerCarry', $data) && $data['ShotgunYardsPerCarry'] === null) {
            $object->setShotgunYardsPerCarry(null);
        }
        if (\array_key_exists('ShotgunYardsPerCarryRank', $data) && $data['ShotgunYardsPerCarryRank'] !== null) {
            $object->setShotgunYardsPerCarryRank($data['ShotgunYardsPerCarryRank']);
        }
        elseif (\array_key_exists('ShotgunYardsPerCarryRank', $data) && $data['ShotgunYardsPerCarryRank'] === null) {
            $object->setShotgunYardsPerCarryRank(null);
        }
        if (\array_key_exists('RedZoneOpportunityShare', $data) && $data['RedZoneOpportunityShare'] !== null) {
            $object->setRedZoneOpportunityShare($data['RedZoneOpportunityShare']);
        }
        elseif (\array_key_exists('RedZoneOpportunityShare', $data) && $data['RedZoneOpportunityShare'] === null) {
            $object->setRedZoneOpportunityShare(null);
        }
        if (\array_key_exists('RedZoneOpportunityShareRank', $data) && $data['RedZoneOpportunityShareRank'] !== null) {
            $object->setRedZoneOpportunityShareRank($data['RedZoneOpportunityShareRank']);
        }
        elseif (\array_key_exists('RedZoneOpportunityShareRank', $data) && $data['RedZoneOpportunityShareRank'] === null) {
            $object->setRedZoneOpportunityShareRank(null);
        }
        if (\array_key_exists('RedZoneTDConversionRate', $data) && $data['RedZoneTDConversionRate'] !== null) {
            $object->setRedZoneTDConversionRate($data['RedZoneTDConversionRate']);
        }
        elseif (\array_key_exists('RedZoneTDConversionRate', $data) && $data['RedZoneTDConversionRate'] === null) {
            $object->setRedZoneTDConversionRate(null);
        }
        if (\array_key_exists('RedZoneTDConversionRateRank', $data) && $data['RedZoneTDConversionRateRank'] !== null) {
            $object->setRedZoneTDConversionRateRank($data['RedZoneTDConversionRateRank']);
        }
        elseif (\array_key_exists('RedZoneTDConversionRateRank', $data) && $data['RedZoneTDConversionRateRank'] === null) {
            $object->setRedZoneTDConversionRateRank(null);
        }
        if (\array_key_exists('StackedFrontCarryRate', $data) && $data['StackedFrontCarryRate'] !== null) {
            $object->setStackedFrontCarryRate($data['StackedFrontCarryRate']);
        }
        elseif (\array_key_exists('StackedFrontCarryRate', $data) && $data['StackedFrontCarryRate'] === null) {
            $object->setStackedFrontCarryRate(null);
        }
        if (\array_key_exists('StackedFrontCarryRateRank', $data) && $data['StackedFrontCarryRateRank'] !== null) {
            $object->setStackedFrontCarryRateRank($data['StackedFrontCarryRateRank']);
        }
        elseif (\array_key_exists('StackedFrontCarryRateRank', $data) && $data['StackedFrontCarryRateRank'] === null) {
            $object->setStackedFrontCarryRateRank(null);
        }
        if (\array_key_exists('StackedFrontYardsPerCarry', $data) && $data['StackedFrontYardsPerCarry'] !== null) {
            $object->setStackedFrontYardsPerCarry($data['StackedFrontYardsPerCarry']);
        }
        elseif (\array_key_exists('StackedFrontYardsPerCarry', $data) && $data['StackedFrontYardsPerCarry'] === null) {
            $object->setStackedFrontYardsPerCarry(null);
        }
        if (\array_key_exists('StackedFrontYardsPerCarryRank', $data) && $data['StackedFrontYardsPerCarryRank'] !== null) {
            $object->setStackedFrontYardsPerCarryRank($data['StackedFrontYardsPerCarryRank']);
        }
        elseif (\array_key_exists('StackedFrontYardsPerCarryRank', $data) && $data['StackedFrontYardsPerCarryRank'] === null) {
            $object->setStackedFrontYardsPerCarryRank(null);
        }
        if (\array_key_exists('StuffedRuns', $data) && $data['StuffedRuns'] !== null) {
            $object->setStuffedRuns($data['StuffedRuns']);
        }
        elseif (\array_key_exists('StuffedRuns', $data) && $data['StuffedRuns'] === null) {
            $object->setStuffedRuns(null);
        }
        if (\array_key_exists('StuffedRunsRank', $data) && $data['StuffedRunsRank'] !== null) {
            $object->setStuffedRunsRank($data['StuffedRunsRank']);
        }
        elseif (\array_key_exists('StuffedRunsRank', $data) && $data['StuffedRunsRank'] === null) {
            $object->setStuffedRunsRank(null);
        }
        if (\array_key_exists('StuffedRunRate', $data) && $data['StuffedRunRate'] !== null) {
            $object->setStuffedRunRate($data['StuffedRunRate']);
        }
        elseif (\array_key_exists('StuffedRunRate', $data) && $data['StuffedRunRate'] === null) {
            $object->setStuffedRunRate(null);
        }
        if (\array_key_exists('StuffedRunRateRank', $data) && $data['StuffedRunRateRank'] !== null) {
            $object->setStuffedRunRateRank($data['StuffedRunRateRank']);
        }
        elseif (\array_key_exists('StuffedRunRateRank', $data) && $data['StuffedRunRateRank'] === null) {
            $object->setStuffedRunRateRank(null);
        }
        if (\array_key_exists('TeamRunPlays', $data) && $data['TeamRunPlays'] !== null) {
            $object->setTeamRunPlays($data['TeamRunPlays']);
        }
        elseif (\array_key_exists('TeamRunPlays', $data) && $data['TeamRunPlays'] === null) {
            $object->setTeamRunPlays(null);
        }
        if (\array_key_exists('TeamRunPlaysRank', $data) && $data['TeamRunPlaysRank'] !== null) {
            $object->setTeamRunPlaysRank($data['TeamRunPlaysRank']);
        }
        elseif (\array_key_exists('TeamRunPlaysRank', $data) && $data['TeamRunPlaysRank'] === null) {
            $object->setTeamRunPlaysRank(null);
        }
        if (\array_key_exists('TotalYardsPerGameRank', $data) && $data['TotalYardsPerGameRank'] !== null) {
            $object->setTotalYardsPerGameRank($data['TotalYardsPerGameRank']);
        }
        elseif (\array_key_exists('TotalYardsPerGameRank', $data) && $data['TotalYardsPerGameRank'] === null) {
            $object->setTotalYardsPerGameRank(null);
        }
        if (\array_key_exists('TotalYardsRank', $data) && $data['TotalYardsRank'] !== null) {
            $object->setTotalYardsRank($data['TotalYardsRank']);
        }
        elseif (\array_key_exists('TotalYardsRank', $data) && $data['TotalYardsRank'] === null) {
            $object->setTotalYardsRank(null);
        }
        if (\array_key_exists('TrueYardsPerCarry', $data) && $data['TrueYardsPerCarry'] !== null) {
            $object->setTrueYardsPerCarry($data['TrueYardsPerCarry']);
        }
        elseif (\array_key_exists('TrueYardsPerCarry', $data) && $data['TrueYardsPerCarry'] === null) {
            $object->setTrueYardsPerCarry(null);
        }
        if (\array_key_exists('TrueYardsPerCarryRank', $data) && $data['TrueYardsPerCarryRank'] !== null) {
            $object->setTrueYardsPerCarryRank($data['TrueYardsPerCarryRank']);
        }
        elseif (\array_key_exists('TrueYardsPerCarryRank', $data) && $data['TrueYardsPerCarryRank'] === null) {
            $object->setTrueYardsPerCarryRank(null);
        }
        if (\array_key_exists('UnderCenterCarryRate', $data) && $data['UnderCenterCarryRate'] !== null) {
            $object->setUnderCenterCarryRate($data['UnderCenterCarryRate']);
        }
        elseif (\array_key_exists('UnderCenterCarryRate', $data) && $data['UnderCenterCarryRate'] === null) {
            $object->setUnderCenterCarryRate(null);
        }
        if (\array_key_exists('UnderCenterCarryRateRank', $data) && $data['UnderCenterCarryRateRank'] !== null) {
            $object->setUnderCenterCarryRateRank($data['UnderCenterCarryRateRank']);
        }
        elseif (\array_key_exists('UnderCenterCarryRateRank', $data) && $data['UnderCenterCarryRateRank'] === null) {
            $object->setUnderCenterCarryRateRank(null);
        }
        if (\array_key_exists('UnderCenterYardsPerCarry', $data) && $data['UnderCenterYardsPerCarry'] !== null) {
            $object->setUnderCenterYardsPerCarry($data['UnderCenterYardsPerCarry']);
        }
        elseif (\array_key_exists('UnderCenterYardsPerCarry', $data) && $data['UnderCenterYardsPerCarry'] === null) {
            $object->setUnderCenterYardsPerCarry(null);
        }
        if (\array_key_exists('UnderCenterYardsPerCarryRank', $data) && $data['UnderCenterYardsPerCarryRank'] !== null) {
            $object->setUnderCenterYardsPerCarryRank($data['UnderCenterYardsPerCarryRank']);
        }
        elseif (\array_key_exists('UnderCenterYardsPerCarryRank', $data) && $data['UnderCenterYardsPerCarryRank'] === null) {
            $object->setUnderCenterYardsPerCarryRank(null);
        }
        if (\array_key_exists('WeightedOpportunities', $data) && $data['WeightedOpportunities'] !== null) {
            $object->setWeightedOpportunities($data['WeightedOpportunities']);
        }
        elseif (\array_key_exists('WeightedOpportunities', $data) && $data['WeightedOpportunities'] === null) {
            $object->setWeightedOpportunities(null);
        }
        if (\array_key_exists('WeightedOpportunitiesRank', $data) && $data['WeightedOpportunitiesRank'] !== null) {
            $object->setWeightedOpportunitiesRank($data['WeightedOpportunitiesRank']);
        }
        elseif (\array_key_exists('WeightedOpportunitiesRank', $data) && $data['WeightedOpportunitiesRank'] === null) {
            $object->setWeightedOpportunitiesRank(null);
        }
        if (\array_key_exists('WeightedOpportunitiesPerGame', $data) && $data['WeightedOpportunitiesPerGame'] !== null) {
            $object->setWeightedOpportunitiesPerGame($data['WeightedOpportunitiesPerGame']);
        }
        elseif (\array_key_exists('WeightedOpportunitiesPerGame', $data) && $data['WeightedOpportunitiesPerGame'] === null) {
            $object->setWeightedOpportunitiesPerGame(null);
        }
        if (\array_key_exists('WeightedOpportunitiesPerGameRank', $data) && $data['WeightedOpportunitiesPerGameRank'] !== null) {
            $object->setWeightedOpportunitiesPerGameRank($data['WeightedOpportunitiesPerGameRank']);
        }
        elseif (\array_key_exists('WeightedOpportunitiesPerGameRank', $data) && $data['WeightedOpportunitiesPerGameRank'] === null) {
            $object->setWeightedOpportunitiesPerGameRank(null);
        }
        if (\array_key_exists('YardsCreated', $data) && $data['YardsCreated'] !== null) {
            $object->setYardsCreated($data['YardsCreated']);
        }
        elseif (\array_key_exists('YardsCreated', $data) && $data['YardsCreated'] === null) {
            $object->setYardsCreated(null);
        }
        if (\array_key_exists('YardsCreatedPerGame', $data) && $data['YardsCreatedPerGame'] !== null) {
            $object->setYardsCreatedPerGame($data['YardsCreatedPerGame']);
        }
        elseif (\array_key_exists('YardsCreatedPerGame', $data) && $data['YardsCreatedPerGame'] === null) {
            $object->setYardsCreatedPerGame(null);
        }
        if (\array_key_exists('YardsCreatedPerGameRank', $data) && $data['YardsCreatedPerGameRank'] !== null) {
            $object->setYardsCreatedPerGameRank($data['YardsCreatedPerGameRank']);
        }
        elseif (\array_key_exists('YardsCreatedPerGameRank', $data) && $data['YardsCreatedPerGameRank'] === null) {
            $object->setYardsCreatedPerGameRank(null);
        }
        if (\array_key_exists('YardsCreatedPerCarry', $data) && $data['YardsCreatedPerCarry'] !== null) {
            $object->setYardsCreatedPerCarry($data['YardsCreatedPerCarry']);
        }
        elseif (\array_key_exists('YardsCreatedPerCarry', $data) && $data['YardsCreatedPerCarry'] === null) {
            $object->setYardsCreatedPerCarry(null);
        }
        if (\array_key_exists('YardsCreatedPerCarryRank', $data) && $data['YardsCreatedPerCarryRank'] !== null) {
            $object->setYardsCreatedPerCarryRank($data['YardsCreatedPerCarryRank']);
        }
        elseif (\array_key_exists('YardsCreatedPerCarryRank', $data) && $data['YardsCreatedPerCarryRank'] === null) {
            $object->setYardsCreatedPerCarryRank(null);
        }
        if (\array_key_exists('YardsCreatedRank', $data) && $data['YardsCreatedRank'] !== null) {
            $object->setYardsCreatedRank($data['YardsCreatedRank']);
        }
        elseif (\array_key_exists('YardsCreatedRank', $data) && $data['YardsCreatedRank'] === null) {
            $object->setYardsCreatedRank(null);
        }
        if (\array_key_exists('YardsPerCarry', $data) && $data['YardsPerCarry'] !== null) {
            $object->setYardsPerCarry($data['YardsPerCarry']);
        }
        elseif (\array_key_exists('YardsPerCarry', $data) && $data['YardsPerCarry'] === null) {
            $object->setYardsPerCarry(null);
        }
        if (\array_key_exists('YardsPerCarryRank', $data) && $data['YardsPerCarryRank'] !== null) {
            $object->setYardsPerCarryRank($data['YardsPerCarryRank']);
        }
        elseif (\array_key_exists('YardsPerCarryRank', $data) && $data['YardsPerCarryRank'] === null) {
            $object->setYardsPerCarryRank(null);
        }
        if (\array_key_exists('YardsPerOpportunity', $data) && $data['YardsPerOpportunity'] !== null) {
            $object->setYardsPerOpportunity($data['YardsPerOpportunity']);
        }
        elseif (\array_key_exists('YardsPerOpportunity', $data) && $data['YardsPerOpportunity'] === null) {
            $object->setYardsPerOpportunity(null);
        }
        if (\array_key_exists('YardsPerRouteRun', $data) && $data['YardsPerRouteRun'] !== null) {
            $object->setYardsPerRouteRun($data['YardsPerRouteRun']);
        }
        elseif (\array_key_exists('YardsPerRouteRun', $data) && $data['YardsPerRouteRun'] === null) {
            $object->setYardsPerRouteRun(null);
        }
        if (\array_key_exists('YardsPerRouteRunRank', $data) && $data['YardsPerRouteRunRank'] !== null) {
            $object->setYardsPerRouteRunRank($data['YardsPerRouteRunRank']);
        }
        elseif (\array_key_exists('YardsPerRouteRunRank', $data) && $data['YardsPerRouteRunRank'] === null) {
            $object->setYardsPerRouteRunRank(null);
        }
        if (\array_key_exists('YardsPerTouch', $data) && $data['YardsPerTouch'] !== null) {
            $object->setYardsPerTouch($data['YardsPerTouch']);
        }
        elseif (\array_key_exists('YardsPerTouch', $data) && $data['YardsPerTouch'] === null) {
            $object->setYardsPerTouch(null);
        }
        if (\array_key_exists('YardsPerTouchRank', $data) && $data['YardsPerTouchRank'] !== null) {
            $object->setYardsPerTouchRank($data['YardsPerTouchRank']);
        }
        elseif (\array_key_exists('YardsPerTouchRank', $data) && $data['YardsPerTouchRank'] === null) {
            $object->setYardsPerTouchRank(null);
        }
        if (\array_key_exists('AirYardsPerReception', $data) && $data['AirYardsPerReception'] !== null) {
            $object->setAirYardsPerReception($data['AirYardsPerReception']);
        }
        elseif (\array_key_exists('AirYardsPerReception', $data) && $data['AirYardsPerReception'] === null) {
            $object->setAirYardsPerReception(null);
        }
        if (\array_key_exists('AirYardsPerTarget', $data) && $data['AirYardsPerTarget'] !== null) {
            $object->setAirYardsPerTarget($data['AirYardsPerTarget']);
        }
        elseif (\array_key_exists('AirYardsPerTarget', $data) && $data['AirYardsPerTarget'] === null) {
            $object->setAirYardsPerTarget(null);
        }
        if (\array_key_exists('Cushion', $data) && $data['Cushion'] !== null) {
            $object->setCushion($data['Cushion']);
        }
        elseif (\array_key_exists('Cushion', $data) && $data['Cushion'] === null) {
            $object->setCushion(null);
        }
        if (\array_key_exists('CushionRank', $data) && $data['CushionRank'] !== null) {
            $object->setCushionRank($data['CushionRank']);
        }
        elseif (\array_key_exists('CushionRank', $data) && $data['CushionRank'] === null) {
            $object->setCushionRank(null);
        }
        if (\array_key_exists('AverageTargetDistance', $data) && $data['AverageTargetDistance'] !== null) {
            $object->setAverageTargetDistance($data['AverageTargetDistance']);
        }
        elseif (\array_key_exists('AverageTargetDistance', $data) && $data['AverageTargetDistance'] === null) {
            $object->setAverageTargetDistance(null);
        }
        if (\array_key_exists('AverageTargetDistanceRank', $data) && $data['AverageTargetDistanceRank'] !== null) {
            $object->setAverageTargetDistanceRank($data['AverageTargetDistanceRank']);
        }
        elseif (\array_key_exists('AverageTargetDistanceRank', $data) && $data['AverageTargetDistanceRank'] === null) {
            $object->setAverageTargetDistanceRank(null);
        }
        if (\array_key_exists('Burns', $data) && $data['Burns'] !== null) {
            $object->setBurns($data['Burns']);
        }
        elseif (\array_key_exists('Burns', $data) && $data['Burns'] === null) {
            $object->setBurns(null);
        }
        if (\array_key_exists('CatchableTargetsPerGame', $data) && $data['CatchableTargetsPerGame'] !== null) {
            $object->setCatchableTargetsPerGame($data['CatchableTargetsPerGame']);
        }
        elseif (\array_key_exists('CatchableTargetsPerGame', $data) && $data['CatchableTargetsPerGame'] === null) {
            $object->setCatchableTargetsPerGame(null);
        }
        if (\array_key_exists('CatchableTargetsRank', $data) && $data['CatchableTargetsRank'] !== null) {
            $object->setCatchableTargetsRank($data['CatchableTargetsRank']);
        }
        elseif (\array_key_exists('CatchableTargetsRank', $data) && $data['CatchableTargetsRank'] === null) {
            $object->setCatchableTargetsRank(null);
        }
        if (\array_key_exists('ContestedCatchConversionRate', $data) && $data['ContestedCatchConversionRate'] !== null) {
            $object->setContestedCatchConversionRate($data['ContestedCatchConversionRate']);
        }
        elseif (\array_key_exists('ContestedCatchConversionRate', $data) && $data['ContestedCatchConversionRate'] === null) {
            $object->setContestedCatchConversionRate(null);
        }
        if (\array_key_exists('ContestedCatchConversionRateRank', $data) && $data['ContestedCatchConversionRateRank'] !== null) {
            $object->setContestedCatchConversionRateRank($data['ContestedCatchConversionRateRank']);
        }
        elseif (\array_key_exists('ContestedCatchConversionRateRank', $data) && $data['ContestedCatchConversionRateRank'] === null) {
            $object->setContestedCatchConversionRateRank(null);
        }
        if (\array_key_exists('ContestedCatches', $data) && $data['ContestedCatches'] !== null) {
            $object->setContestedCatches($data['ContestedCatches']);
        }
        elseif (\array_key_exists('ContestedCatches', $data) && $data['ContestedCatches'] === null) {
            $object->setContestedCatches(null);
        }
        if (\array_key_exists('ContestedTargets', $data) && $data['ContestedTargets'] !== null) {
            $object->setContestedTargets($data['ContestedTargets']);
        }
        elseif (\array_key_exists('ContestedTargets', $data) && $data['ContestedTargets'] === null) {
            $object->setContestedTargets(null);
        }
        if (\array_key_exists('HogRate', $data) && $data['HogRate'] !== null) {
            $object->setHogRate($data['HogRate']);
        }
        elseif (\array_key_exists('HogRate', $data) && $data['HogRate'] === null) {
            $object->setHogRate(null);
        }
        if (\array_key_exists('HogRateRank', $data) && $data['HogRateRank'] !== null) {
            $object->setHogRateRank($data['HogRateRank']);
        }
        elseif (\array_key_exists('HogRateRank', $data) && $data['HogRateRank'] === null) {
            $object->setHogRateRank(null);
        }
        if (\array_key_exists('PassSnapsRank', $data) && $data['PassSnapsRank'] !== null) {
            $object->setPassSnapsRank($data['PassSnapsRank']);
        }
        elseif (\array_key_exists('PassSnapsRank', $data) && $data['PassSnapsRank'] === null) {
            $object->setPassSnapsRank(null);
        }
        if (\array_key_exists('RunSnapsRank', $data) && $data['RunSnapsRank'] !== null) {
            $object->setRunSnapsRank($data['RunSnapsRank']);
        }
        elseif (\array_key_exists('RunSnapsRank', $data) && $data['RunSnapsRank'] === null) {
            $object->setRunSnapsRank(null);
        }
        if (\array_key_exists('SlotCatchRate', $data) && $data['SlotCatchRate'] !== null) {
            $object->setSlotCatchRate($data['SlotCatchRate']);
        }
        elseif (\array_key_exists('SlotCatchRate', $data) && $data['SlotCatchRate'] === null) {
            $object->setSlotCatchRate(null);
        }
        if (\array_key_exists('SlotCatchRateRank', $data) && $data['SlotCatchRateRank'] !== null) {
            $object->setSlotCatchRateRank($data['SlotCatchRateRank']);
        }
        elseif (\array_key_exists('SlotCatchRateRank', $data) && $data['SlotCatchRateRank'] === null) {
            $object->setSlotCatchRateRank(null);
        }
        if (\array_key_exists('SlotSnapsRank', $data) && $data['SlotSnapsRank'] !== null) {
            $object->setSlotSnapsRank($data['SlotSnapsRank']);
        }
        elseif (\array_key_exists('SlotSnapsRank', $data) && $data['SlotSnapsRank'] === null) {
            $object->setSlotSnapsRank(null);
        }
        if (\array_key_exists('SnapweighedGameScript', $data) && $data['SnapweighedGameScript'] !== null) {
            $object->setSnapweighedGameScript($data['SnapweighedGameScript']);
        }
        elseif (\array_key_exists('SnapweighedGameScript', $data) && $data['SnapweighedGameScript'] === null) {
            $object->setSnapweighedGameScript(null);
        }
        if (\array_key_exists('SnapweighedGameScriptRank', $data) && $data['SnapweighedGameScriptRank'] !== null) {
            $object->setSnapweighedGameScriptRank($data['SnapweighedGameScriptRank']);
        }
        elseif (\array_key_exists('SnapweighedGameScriptRank', $data) && $data['SnapweighedGameScriptRank'] === null) {
            $object->setSnapweighedGameScriptRank(null);
        }
        if (\array_key_exists('TargetPremium', $data) && $data['TargetPremium'] !== null) {
            $object->setTargetPremium($data['TargetPremium']);
        }
        elseif (\array_key_exists('TargetPremium', $data) && $data['TargetPremium'] === null) {
            $object->setTargetPremium(null);
        }
        if (\array_key_exists('TargetPremiumRank', $data) && $data['TargetPremiumRank'] !== null) {
            $object->setTargetPremiumRank($data['TargetPremiumRank']);
        }
        elseif (\array_key_exists('TargetPremiumRank', $data) && $data['TargetPremiumRank'] === null) {
            $object->setTargetPremiumRank(null);
        }
        if (\array_key_exists('TargetQualityRating', $data) && $data['TargetQualityRating'] !== null) {
            $object->setTargetQualityRating($data['TargetQualityRating']);
        }
        elseif (\array_key_exists('TargetQualityRating', $data) && $data['TargetQualityRating'] === null) {
            $object->setTargetQualityRating(null);
        }
        if (\array_key_exists('TargetQualityRatingRank', $data) && $data['TargetQualityRatingRank'] !== null) {
            $object->setTargetQualityRatingRank($data['TargetQualityRatingRank']);
        }
        elseif (\array_key_exists('TargetQualityRatingRank', $data) && $data['TargetQualityRatingRank'] === null) {
            $object->setTargetQualityRatingRank(null);
        }
        if (\array_key_exists('TargetAccuracy', $data) && $data['TargetAccuracy'] !== null) {
            $object->setTargetAccuracy($data['TargetAccuracy']);
        }
        elseif (\array_key_exists('TargetAccuracy', $data) && $data['TargetAccuracy'] === null) {
            $object->setTargetAccuracy(null);
        }
        if (\array_key_exists('TargetAccuracyRank', $data) && $data['TargetAccuracyRank'] !== null) {
            $object->setTargetAccuracyRank($data['TargetAccuracyRank']);
        }
        elseif (\array_key_exists('TargetAccuracyRank', $data) && $data['TargetAccuracyRank'] === null) {
            $object->setTargetAccuracyRank(null);
        }
        if (\array_key_exists('TargetDistance', $data) && $data['TargetDistance'] !== null) {
            $object->setTargetDistance($data['TargetDistance']);
        }
        elseif (\array_key_exists('TargetDistance', $data) && $data['TargetDistance'] === null) {
            $object->setTargetDistance(null);
        }
        if (\array_key_exists('TargetDistancePerGame', $data) && $data['TargetDistancePerGame'] !== null) {
            $object->setTargetDistancePerGame($data['TargetDistancePerGame']);
        }
        elseif (\array_key_exists('TargetDistancePerGame', $data) && $data['TargetDistancePerGame'] === null) {
            $object->setTargetDistancePerGame(null);
        }
        if (\array_key_exists('TargetDistanceRank', $data) && $data['TargetDistanceRank'] !== null) {
            $object->setTargetDistanceRank($data['TargetDistanceRank']);
        }
        elseif (\array_key_exists('TargetDistanceRank', $data) && $data['TargetDistanceRank'] === null) {
            $object->setTargetDistanceRank(null);
        }
        if (\array_key_exists('TrueCatchRate', $data) && $data['TrueCatchRate'] !== null) {
            $object->setTrueCatchRate($data['TrueCatchRate']);
        }
        elseif (\array_key_exists('TrueCatchRate', $data) && $data['TrueCatchRate'] === null) {
            $object->setTrueCatchRate(null);
        }
        if (\array_key_exists('TrueCatchRateRank', $data) && $data['TrueCatchRateRank'] !== null) {
            $object->setTrueCatchRateRank($data['TrueCatchRateRank']);
        }
        elseif (\array_key_exists('TrueCatchRateRank', $data) && $data['TrueCatchRateRank'] === null) {
            $object->setTrueCatchRateRank(null);
        }
        if (\array_key_exists('UncatchableTargets', $data) && $data['UncatchableTargets'] !== null) {
            $object->setUncatchableTargets($data['UncatchableTargets']);
        }
        elseif (\array_key_exists('UncatchableTargets', $data) && $data['UncatchableTargets'] === null) {
            $object->setUncatchableTargets(null);
        }
        if (\array_key_exists('UncatchableTargetsGame', $data) && $data['UncatchableTargetsGame'] !== null) {
            $object->setUncatchableTargetsGame($data['UncatchableTargetsGame']);
        }
        elseif (\array_key_exists('UncatchableTargetsGame', $data) && $data['UncatchableTargetsGame'] === null) {
            $object->setUncatchableTargetsGame(null);
        }
        if (\array_key_exists('YardsPerReceptionRank', $data) && $data['YardsPerReceptionRank'] !== null) {
            $object->setYardsPerReceptionRank($data['YardsPerReceptionRank']);
        }
        elseif (\array_key_exists('YardsPerReceptionRank', $data) && $data['YardsPerReceptionRank'] === null) {
            $object->setYardsPerReceptionRank(null);
        }
        if (\array_key_exists('YardsPerPassRoute', $data) && $data['YardsPerPassRoute'] !== null) {
            $object->setYardsPerPassRoute($data['YardsPerPassRoute']);
        }
        elseif (\array_key_exists('YardsPerPassRoute', $data) && $data['YardsPerPassRoute'] === null) {
            $object->setYardsPerPassRoute(null);
        }
        if (\array_key_exists('YardsPerPassRouteRank', $data) && $data['YardsPerPassRouteRank'] !== null) {
            $object->setYardsPerPassRouteRank($data['YardsPerPassRouteRank']);
        }
        elseif (\array_key_exists('YardsPerPassRouteRank', $data) && $data['YardsPerPassRouteRank'] === null) {
            $object->setYardsPerPassRouteRank(null);
        }
        if (\array_key_exists('TeamDefensiveSnaps', $data) && $data['TeamDefensiveSnaps'] !== null) {
            $object->setTeamDefensiveSnaps($data['TeamDefensiveSnaps']);
        }
        elseif (\array_key_exists('TeamDefensiveSnaps', $data) && $data['TeamDefensiveSnaps'] === null) {
            $object->setTeamDefensiveSnaps(null);
        }
        if (\array_key_exists('SoloTackles', $data) && $data['SoloTackles'] !== null) {
            $object->setSoloTackles($data['SoloTackles']);
        }
        elseif (\array_key_exists('SoloTackles', $data) && $data['SoloTackles'] === null) {
            $object->setSoloTackles(null);
        }
        if (\array_key_exists('SoloTacklesRank', $data) && $data['SoloTacklesRank'] !== null) {
            $object->setSoloTacklesRank($data['SoloTacklesRank']);
        }
        elseif (\array_key_exists('SoloTacklesRank', $data) && $data['SoloTacklesRank'] === null) {
            $object->setSoloTacklesRank(null);
        }
        if (\array_key_exists('SoloTacklesPerGame', $data) && $data['SoloTacklesPerGame'] !== null) {
            $object->setSoloTacklesPerGame($data['SoloTacklesPerGame']);
        }
        elseif (\array_key_exists('SoloTacklesPerGame', $data) && $data['SoloTacklesPerGame'] === null) {
            $object->setSoloTacklesPerGame(null);
        }
        if (\array_key_exists('AssistedTackles', $data) && $data['AssistedTackles'] !== null) {
            $object->setAssistedTackles($data['AssistedTackles']);
        }
        elseif (\array_key_exists('AssistedTackles', $data) && $data['AssistedTackles'] === null) {
            $object->setAssistedTackles(null);
        }
        if (\array_key_exists('AssistedTacklesRank', $data) && $data['AssistedTacklesRank'] !== null) {
            $object->setAssistedTacklesRank($data['AssistedTacklesRank']);
        }
        elseif (\array_key_exists('AssistedTacklesRank', $data) && $data['AssistedTacklesRank'] === null) {
            $object->setAssistedTacklesRank(null);
        }
        if (\array_key_exists('AssistedTacklesPerGame', $data) && $data['AssistedTacklesPerGame'] !== null) {
            $object->setAssistedTacklesPerGame($data['AssistedTacklesPerGame']);
        }
        elseif (\array_key_exists('AssistedTacklesPerGame', $data) && $data['AssistedTacklesPerGame'] === null) {
            $object->setAssistedTacklesPerGame(null);
        }
        if (\array_key_exists('TotalTackles', $data) && $data['TotalTackles'] !== null) {
            $object->setTotalTackles($data['TotalTackles']);
        }
        elseif (\array_key_exists('TotalTackles', $data) && $data['TotalTackles'] === null) {
            $object->setTotalTackles(null);
        }
        if (\array_key_exists('TotalTacklesRank', $data) && $data['TotalTacklesRank'] !== null) {
            $object->setTotalTacklesRank($data['TotalTacklesRank']);
        }
        elseif (\array_key_exists('TotalTacklesRank', $data) && $data['TotalTacklesRank'] === null) {
            $object->setTotalTacklesRank(null);
        }
        if (\array_key_exists('TotalTacklesPerGame', $data) && $data['TotalTacklesPerGame'] !== null) {
            $object->setTotalTacklesPerGame($data['TotalTacklesPerGame']);
        }
        elseif (\array_key_exists('TotalTacklesPerGame', $data) && $data['TotalTacklesPerGame'] === null) {
            $object->setTotalTacklesPerGame(null);
        }
        if (\array_key_exists('Sacks', $data) && $data['Sacks'] !== null) {
            $object->setSacks($data['Sacks']);
        }
        elseif (\array_key_exists('Sacks', $data) && $data['Sacks'] === null) {
            $object->setSacks(null);
        }
        if (\array_key_exists('SacksRank', $data) && $data['SacksRank'] !== null) {
            $object->setSacksRank($data['SacksRank']);
        }
        elseif (\array_key_exists('SacksRank', $data) && $data['SacksRank'] === null) {
            $object->setSacksRank(null);
        }
        if (\array_key_exists('SackYards', $data) && $data['SackYards'] !== null) {
            $object->setSackYards($data['SackYards']);
        }
        elseif (\array_key_exists('SackYards', $data) && $data['SackYards'] === null) {
            $object->setSackYards(null);
        }
        if (\array_key_exists('ForcedFumbles', $data) && $data['ForcedFumbles'] !== null) {
            $object->setForcedFumbles($data['ForcedFumbles']);
        }
        elseif (\array_key_exists('ForcedFumbles', $data) && $data['ForcedFumbles'] === null) {
            $object->setForcedFumbles(null);
        }
        if (\array_key_exists('ForcedFumblesRank', $data) && $data['ForcedFumblesRank'] !== null) {
            $object->setForcedFumblesRank($data['ForcedFumblesRank']);
        }
        elseif (\array_key_exists('ForcedFumblesRank', $data) && $data['ForcedFumblesRank'] === null) {
            $object->setForcedFumblesRank(null);
        }
        if (\array_key_exists('FumbleRecoveries', $data) && $data['FumbleRecoveries'] !== null) {
            $object->setFumbleRecoveries($data['FumbleRecoveries']);
        }
        elseif (\array_key_exists('FumbleRecoveries', $data) && $data['FumbleRecoveries'] === null) {
            $object->setFumbleRecoveries(null);
        }
        if (\array_key_exists('FumbleRecoveriesRank', $data) && $data['FumbleRecoveriesRank'] !== null) {
            $object->setFumbleRecoveriesRank($data['FumbleRecoveriesRank']);
        }
        elseif (\array_key_exists('FumbleRecoveriesRank', $data) && $data['FumbleRecoveriesRank'] === null) {
            $object->setFumbleRecoveriesRank(null);
        }
        if (\array_key_exists('BattedPasses', $data) && $data['BattedPasses'] !== null) {
            $object->setBattedPasses($data['BattedPasses']);
        }
        elseif (\array_key_exists('BattedPasses', $data) && $data['BattedPasses'] === null) {
            $object->setBattedPasses(null);
        }
        if (\array_key_exists('BattedPassesRank', $data) && $data['BattedPassesRank'] !== null) {
            $object->setBattedPassesRank($data['BattedPassesRank']);
        }
        elseif (\array_key_exists('BattedPassesRank', $data) && $data['BattedPassesRank'] === null) {
            $object->setBattedPassesRank(null);
        }
        if (\array_key_exists('TacklesForLoss', $data) && $data['TacklesForLoss'] !== null) {
            $object->setTacklesForLoss($data['TacklesForLoss']);
        }
        elseif (\array_key_exists('TacklesForLoss', $data) && $data['TacklesForLoss'] === null) {
            $object->setTacklesForLoss(null);
        }
        if (\array_key_exists('TacklesForLossRank', $data) && $data['TacklesForLossRank'] !== null) {
            $object->setTacklesForLossRank($data['TacklesForLossRank']);
        }
        elseif (\array_key_exists('TacklesForLossRank', $data) && $data['TacklesForLossRank'] === null) {
            $object->setTacklesForLossRank(null);
        }
        if (\array_key_exists('RunStuffs', $data) && $data['RunStuffs'] !== null) {
            $object->setRunStuffs($data['RunStuffs']);
        }
        elseif (\array_key_exists('RunStuffs', $data) && $data['RunStuffs'] === null) {
            $object->setRunStuffs(null);
        }
        if (\array_key_exists('RunStuffsRank', $data) && $data['RunStuffsRank'] !== null) {
            $object->setRunStuffsRank($data['RunStuffsRank']);
        }
        elseif (\array_key_exists('RunStuffsRank', $data) && $data['RunStuffsRank'] === null) {
            $object->setRunStuffsRank(null);
        }
        if (\array_key_exists('PassBreakups', $data) && $data['PassBreakups'] !== null) {
            $object->setPassBreakups($data['PassBreakups']);
        }
        elseif (\array_key_exists('PassBreakups', $data) && $data['PassBreakups'] === null) {
            $object->setPassBreakups(null);
        }
        if (\array_key_exists('PassBreakupsRank', $data) && $data['PassBreakupsRank'] !== null) {
            $object->setPassBreakupsRank($data['PassBreakupsRank']);
        }
        elseif (\array_key_exists('PassBreakupsRank', $data) && $data['PassBreakupsRank'] === null) {
            $object->setPassBreakupsRank(null);
        }
        if (\array_key_exists('PassBreakupsPerGame', $data) && $data['PassBreakupsPerGame'] !== null) {
            $object->setPassBreakupsPerGame($data['PassBreakupsPerGame']);
        }
        elseif (\array_key_exists('PassBreakupsPerGame', $data) && $data['PassBreakupsPerGame'] === null) {
            $object->setPassBreakupsPerGame(null);
        }
        if (\array_key_exists('PassBreakupsPerGameRank', $data) && $data['PassBreakupsPerGameRank'] !== null) {
            $object->setPassBreakupsPerGameRank($data['PassBreakupsPerGameRank']);
        }
        elseif (\array_key_exists('PassBreakupsPerGameRank', $data) && $data['PassBreakupsPerGameRank'] === null) {
            $object->setPassBreakupsPerGameRank(null);
        }
        if (\array_key_exists('PassBreakupsPerTarget', $data) && $data['PassBreakupsPerTarget'] !== null) {
            $object->setPassBreakupsPerTarget($data['PassBreakupsPerTarget']);
        }
        elseif (\array_key_exists('PassBreakupsPerTarget', $data) && $data['PassBreakupsPerTarget'] === null) {
            $object->setPassBreakupsPerTarget(null);
        }
        if (\array_key_exists('PassBreakupsPerTargetRank', $data) && $data['PassBreakupsPerTargetRank'] !== null) {
            $object->setPassBreakupsPerTargetRank($data['PassBreakupsPerTargetRank']);
        }
        elseif (\array_key_exists('PassBreakupsPerTargetRank', $data) && $data['PassBreakupsPerTargetRank'] === null) {
            $object->setPassBreakupsPerTargetRank(null);
        }
        if (\array_key_exists('Interceptions', $data) && $data['Interceptions'] !== null) {
            $object->setInterceptions($data['Interceptions']);
        }
        elseif (\array_key_exists('Interceptions', $data) && $data['Interceptions'] === null) {
            $object->setInterceptions(null);
        }
        if (\array_key_exists('InterceptionsRank', $data) && $data['InterceptionsRank'] !== null) {
            $object->setInterceptionsRank($data['InterceptionsRank']);
        }
        elseif (\array_key_exists('InterceptionsRank', $data) && $data['InterceptionsRank'] === null) {
            $object->setInterceptionsRank(null);
        }
        if (\array_key_exists('TargetsAllowed', $data) && $data['TargetsAllowed'] !== null) {
            $object->setTargetsAllowed($data['TargetsAllowed']);
        }
        elseif (\array_key_exists('TargetsAllowed', $data) && $data['TargetsAllowed'] === null) {
            $object->setTargetsAllowed(null);
        }
        if (\array_key_exists('TargetsAllowedRank', $data) && $data['TargetsAllowedRank'] !== null) {
            $object->setTargetsAllowedRank($data['TargetsAllowedRank']);
        }
        elseif (\array_key_exists('TargetsAllowedRank', $data) && $data['TargetsAllowedRank'] === null) {
            $object->setTargetsAllowedRank(null);
        }
        if (\array_key_exists('ReceptionsAllowed', $data) && $data['ReceptionsAllowed'] !== null) {
            $object->setReceptionsAllowed($data['ReceptionsAllowed']);
        }
        elseif (\array_key_exists('ReceptionsAllowed', $data) && $data['ReceptionsAllowed'] === null) {
            $object->setReceptionsAllowed(null);
        }
        if (\array_key_exists('ReceptionsAllowedRank', $data) && $data['ReceptionsAllowedRank'] !== null) {
            $object->setReceptionsAllowedRank($data['ReceptionsAllowedRank']);
        }
        elseif (\array_key_exists('ReceptionsAllowedRank', $data) && $data['ReceptionsAllowedRank'] === null) {
            $object->setReceptionsAllowedRank(null);
        }
        if (\array_key_exists('YardsAllowed', $data) && $data['YardsAllowed'] !== null) {
            $object->setYardsAllowed($data['YardsAllowed']);
        }
        elseif (\array_key_exists('YardsAllowed', $data) && $data['YardsAllowed'] === null) {
            $object->setYardsAllowed(null);
        }
        if (\array_key_exists('YardsAllowedRank', $data) && $data['YardsAllowedRank'] !== null) {
            $object->setYardsAllowedRank($data['YardsAllowedRank']);
        }
        elseif (\array_key_exists('YardsAllowedRank', $data) && $data['YardsAllowedRank'] === null) {
            $object->setYardsAllowedRank(null);
        }
        if (\array_key_exists('YardsAllowedPerGame', $data) && $data['YardsAllowedPerGame'] !== null) {
            $object->setYardsAllowedPerGame($data['YardsAllowedPerGame']);
        }
        elseif (\array_key_exists('YardsAllowedPerGame', $data) && $data['YardsAllowedPerGame'] === null) {
            $object->setYardsAllowedPerGame(null);
        }
        if (\array_key_exists('YardsAllowedPerGameRank', $data) && $data['YardsAllowedPerGameRank'] !== null) {
            $object->setYardsAllowedPerGameRank($data['YardsAllowedPerGameRank']);
        }
        elseif (\array_key_exists('YardsAllowedPerGameRank', $data) && $data['YardsAllowedPerGameRank'] === null) {
            $object->setYardsAllowedPerGameRank(null);
        }
        if (\array_key_exists('YardsPerReceptionAllowed', $data) && $data['YardsPerReceptionAllowed'] !== null) {
            $object->setYardsPerReceptionAllowed($data['YardsPerReceptionAllowed']);
        }
        elseif (\array_key_exists('YardsPerReceptionAllowed', $data) && $data['YardsPerReceptionAllowed'] === null) {
            $object->setYardsPerReceptionAllowed(null);
        }
        if (\array_key_exists('YardsPerReceptionAllowedRank', $data) && $data['YardsPerReceptionAllowedRank'] !== null) {
            $object->setYardsPerReceptionAllowedRank($data['YardsPerReceptionAllowedRank']);
        }
        elseif (\array_key_exists('YardsPerReceptionAllowedRank', $data) && $data['YardsPerReceptionAllowedRank'] === null) {
            $object->setYardsPerReceptionAllowedRank(null);
        }
        if (\array_key_exists('CatchRateAllowed', $data) && $data['CatchRateAllowed'] !== null) {
            $object->setCatchRateAllowed($data['CatchRateAllowed']);
        }
        elseif (\array_key_exists('CatchRateAllowed', $data) && $data['CatchRateAllowed'] === null) {
            $object->setCatchRateAllowed(null);
        }
        if (\array_key_exists('CatchRateAllowedRank', $data) && $data['CatchRateAllowedRank'] !== null) {
            $object->setCatchRateAllowedRank($data['CatchRateAllowedRank']);
        }
        elseif (\array_key_exists('CatchRateAllowedRank', $data) && $data['CatchRateAllowedRank'] === null) {
            $object->setCatchRateAllowedRank(null);
        }
        if (\array_key_exists('PasserRatingAllowed', $data) && $data['PasserRatingAllowed'] !== null) {
            $object->setPasserRatingAllowed($data['PasserRatingAllowed']);
        }
        elseif (\array_key_exists('PasserRatingAllowed', $data) && $data['PasserRatingAllowed'] === null) {
            $object->setPasserRatingAllowed(null);
        }
        if (\array_key_exists('PasserRatingAllowedRank', $data) && $data['PasserRatingAllowedRank'] !== null) {
            $object->setPasserRatingAllowedRank($data['PasserRatingAllowedRank']);
        }
        elseif (\array_key_exists('PasserRatingAllowedRank', $data) && $data['PasserRatingAllowedRank'] === null) {
            $object->setPasserRatingAllowedRank(null);
        }
        if (\array_key_exists('TouchdownsAllowed', $data) && $data['TouchdownsAllowed'] !== null) {
            $object->setTouchdownsAllowed($data['TouchdownsAllowed']);
        }
        elseif (\array_key_exists('TouchdownsAllowed', $data) && $data['TouchdownsAllowed'] === null) {
            $object->setTouchdownsAllowed(null);
        }
        if (\array_key_exists('TouchdownsAllowedRank', $data) && $data['TouchdownsAllowedRank'] !== null) {
            $object->setTouchdownsAllowedRank($data['TouchdownsAllowedRank']);
        }
        elseif (\array_key_exists('TouchdownsAllowedRank', $data) && $data['TouchdownsAllowedRank'] === null) {
            $object->setTouchdownsAllowedRank(null);
        }
        if (\array_key_exists('InterceptionsPerTarget', $data) && $data['InterceptionsPerTarget'] !== null) {
            $object->setInterceptionsPerTarget($data['InterceptionsPerTarget']);
        }
        elseif (\array_key_exists('InterceptionsPerTarget', $data) && $data['InterceptionsPerTarget'] === null) {
            $object->setInterceptionsPerTarget(null);
        }
        if (\array_key_exists('InterceptionsPerTargetRank', $data) && $data['InterceptionsPerTargetRank'] !== null) {
            $object->setInterceptionsPerTargetRank($data['InterceptionsPerTargetRank']);
        }
        elseif (\array_key_exists('InterceptionsPerTargetRank', $data) && $data['InterceptionsPerTargetRank'] === null) {
            $object->setInterceptionsPerTargetRank(null);
        }
        if (\array_key_exists('CoverageRating', $data) && $data['CoverageRating'] !== null) {
            $object->setCoverageRating($data['CoverageRating']);
        }
        elseif (\array_key_exists('CoverageRating', $data) && $data['CoverageRating'] === null) {
            $object->setCoverageRating(null);
        }
        if (\array_key_exists('CoverageRatingRank', $data) && $data['CoverageRatingRank'] !== null) {
            $object->setCoverageRatingRank($data['CoverageRatingRank']);
        }
        elseif (\array_key_exists('CoverageRatingRank', $data) && $data['CoverageRatingRank'] === null) {
            $object->setCoverageRatingRank(null);
        }
        if (\array_key_exists('RunPlayStops', $data) && $data['RunPlayStops'] !== null) {
            $object->setRunPlayStops($data['RunPlayStops']);
        }
        elseif (\array_key_exists('RunPlayStops', $data) && $data['RunPlayStops'] === null) {
            $object->setRunPlayStops(null);
        }
        if (\array_key_exists('RunPlayStopsRank', $data) && $data['RunPlayStopsRank'] !== null) {
            $object->setRunPlayStopsRank($data['RunPlayStopsRank']);
        }
        elseif (\array_key_exists('RunPlayStopsRank', $data) && $data['RunPlayStopsRank'] === null) {
            $object->setRunPlayStopsRank(null);
        }
        if (\array_key_exists('TargetsAllowedPerGame', $data) && $data['TargetsAllowedPerGame'] !== null) {
            $object->setTargetsAllowedPerGame($data['TargetsAllowedPerGame']);
        }
        elseif (\array_key_exists('TargetsAllowedPerGame', $data) && $data['TargetsAllowedPerGame'] === null) {
            $object->setTargetsAllowedPerGame(null);
        }
        if (\array_key_exists('TargetsAllowedPerGameRank', $data) && $data['TargetsAllowedPerGameRank'] !== null) {
            $object->setTargetsAllowedPerGameRank($data['TargetsAllowedPerGameRank']);
        }
        elseif (\array_key_exists('TargetsAllowedPerGameRank', $data) && $data['TargetsAllowedPerGameRank'] === null) {
            $object->setTargetsAllowedPerGameRank(null);
        }
        if (\array_key_exists('ReceptionsAllowedPerGame', $data) && $data['ReceptionsAllowedPerGame'] !== null) {
            $object->setReceptionsAllowedPerGame($data['ReceptionsAllowedPerGame']);
        }
        elseif (\array_key_exists('ReceptionsAllowedPerGame', $data) && $data['ReceptionsAllowedPerGame'] === null) {
            $object->setReceptionsAllowedPerGame(null);
        }
        if (\array_key_exists('ReceptionsAllowedPerGameRank', $data) && $data['ReceptionsAllowedPerGameRank'] !== null) {
            $object->setReceptionsAllowedPerGameRank($data['ReceptionsAllowedPerGameRank']);
        }
        elseif (\array_key_exists('ReceptionsAllowedPerGameRank', $data) && $data['ReceptionsAllowedPerGameRank'] === null) {
            $object->setReceptionsAllowedPerGameRank(null);
        }
        if (\array_key_exists('TargetRate', $data) && $data['TargetRate'] !== null) {
            $object->setTargetRate($data['TargetRate']);
        }
        elseif (\array_key_exists('TargetRate', $data) && $data['TargetRate'] === null) {
            $object->setTargetRate(null);
        }
        if (\array_key_exists('TargetRateRank', $data) && $data['TargetRateRank'] !== null) {
            $object->setTargetRateRank($data['TargetRateRank']);
        }
        elseif (\array_key_exists('TargetRateRank', $data) && $data['TargetRateRank'] === null) {
            $object->setTargetRateRank(null);
        }
        if (\array_key_exists('BurnRateRank', $data) && $data['BurnRateRank'] !== null) {
            $object->setBurnRateRank($data['BurnRateRank']);
        }
        elseif (\array_key_exists('BurnRateRank', $data) && $data['BurnRateRank'] === null) {
            $object->setBurnRateRank(null);
        }
        if (\array_key_exists('AverageCushion', $data) && $data['AverageCushion'] !== null) {
            $object->setAverageCushion($data['AverageCushion']);
        }
        elseif (\array_key_exists('AverageCushion', $data) && $data['AverageCushion'] === null) {
            $object->setAverageCushion(null);
        }
        if (\array_key_exists('AverageCushionRank', $data) && $data['AverageCushionRank'] !== null) {
            $object->setAverageCushionRank($data['AverageCushionRank']);
        }
        elseif (\array_key_exists('AverageCushionRank', $data) && $data['AverageCushionRank'] === null) {
            $object->setAverageCushionRank(null);
        }
        if (\array_key_exists('YardsPerTargetAllowed', $data) && $data['YardsPerTargetAllowed'] !== null) {
            $object->setYardsPerTargetAllowed($data['YardsPerTargetAllowed']);
        }
        elseif (\array_key_exists('YardsPerTargetAllowed', $data) && $data['YardsPerTargetAllowed'] === null) {
            $object->setYardsPerTargetAllowed(null);
        }
        if (\array_key_exists('YardsPerTargetAllowedRank', $data) && $data['YardsPerTargetAllowedRank'] !== null) {
            $object->setYardsPerTargetAllowedRank($data['YardsPerTargetAllowedRank']);
        }
        elseif (\array_key_exists('YardsPerTargetAllowedRank', $data) && $data['YardsPerTargetAllowedRank'] === null) {
            $object->setYardsPerTargetAllowedRank(null);
        }
        if (\array_key_exists('RoutesDefended', $data) && $data['RoutesDefended'] !== null) {
            $object->setRoutesDefended($data['RoutesDefended']);
        }
        elseif (\array_key_exists('RoutesDefended', $data) && $data['RoutesDefended'] === null) {
            $object->setRoutesDefended(null);
        }
        if (\array_key_exists('RoutesDefendedRank', $data) && $data['RoutesDefendedRank'] !== null) {
            $object->setRoutesDefendedRank($data['RoutesDefendedRank']);
        }
        elseif (\array_key_exists('RoutesDefendedRank', $data) && $data['RoutesDefendedRank'] === null) {
            $object->setRoutesDefendedRank(null);
        }
        if (\array_key_exists('RoutesDefendedPerGame', $data) && $data['RoutesDefendedPerGame'] !== null) {
            $object->setRoutesDefendedPerGame($data['RoutesDefendedPerGame']);
        }
        elseif (\array_key_exists('RoutesDefendedPerGame', $data) && $data['RoutesDefendedPerGame'] === null) {
            $object->setRoutesDefendedPerGame(null);
        }
        if (\array_key_exists('RoutesDefendedPerGameRank', $data) && $data['RoutesDefendedPerGameRank'] !== null) {
            $object->setRoutesDefendedPerGameRank($data['RoutesDefendedPerGameRank']);
        }
        elseif (\array_key_exists('RoutesDefendedPerGameRank', $data) && $data['RoutesDefendedPerGameRank'] === null) {
            $object->setRoutesDefendedPerGameRank(null);
        }
        if (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] !== null) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        elseif (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] === null) {
            $object->setFantasyPoints(null);
        }
        if (\array_key_exists('FantasyPointsPerAttempt', $data) && $data['FantasyPointsPerAttempt'] !== null) {
            $object->setFantasyPointsPerAttempt($data['FantasyPointsPerAttempt']);
        }
        elseif (\array_key_exists('FantasyPointsPerAttempt', $data) && $data['FantasyPointsPerAttempt'] === null) {
            $object->setFantasyPointsPerAttempt(null);
        }
        if (\array_key_exists('FantasyPointsPerAttemptRank', $data) && $data['FantasyPointsPerAttemptRank'] !== null) {
            $object->setFantasyPointsPerAttemptRank($data['FantasyPointsPerAttemptRank']);
        }
        elseif (\array_key_exists('FantasyPointsPerAttemptRank', $data) && $data['FantasyPointsPerAttemptRank'] === null) {
            $object->setFantasyPointsPerAttemptRank(null);
        }
        if (\array_key_exists('FantasyPointsPerDropBack', $data) && $data['FantasyPointsPerDropBack'] !== null) {
            $object->setFantasyPointsPerDropBack($data['FantasyPointsPerDropBack']);
        }
        elseif (\array_key_exists('FantasyPointsPerDropBack', $data) && $data['FantasyPointsPerDropBack'] === null) {
            $object->setFantasyPointsPerDropBack(null);
        }
        if (\array_key_exists('FantasyPointsPerDropBackRank', $data) && $data['FantasyPointsPerDropBackRank'] !== null) {
            $object->setFantasyPointsPerDropBackRank($data['FantasyPointsPerDropBackRank']);
        }
        elseif (\array_key_exists('FantasyPointsPerDropBackRank', $data) && $data['FantasyPointsPerDropBackRank'] === null) {
            $object->setFantasyPointsPerDropBackRank(null);
        }
        if (\array_key_exists('FantasyPointsPerGame', $data) && $data['FantasyPointsPerGame'] !== null) {
            $object->setFantasyPointsPerGame($data['FantasyPointsPerGame']);
        }
        elseif (\array_key_exists('FantasyPointsPerGame', $data) && $data['FantasyPointsPerGame'] === null) {
            $object->setFantasyPointsPerGame(null);
        }
        if (\array_key_exists('FantasyPointsPerGameDifferential', $data) && $data['FantasyPointsPerGameDifferential'] !== null) {
            $object->setFantasyPointsPerGameDifferential($data['FantasyPointsPerGameDifferential']);
        }
        elseif (\array_key_exists('FantasyPointsPerGameDifferential', $data) && $data['FantasyPointsPerGameDifferential'] === null) {
            $object->setFantasyPointsPerGameDifferential(null);
        }
        if (\array_key_exists('FantasyPointsPerGameRank', $data) && $data['FantasyPointsPerGameRank'] !== null) {
            $object->setFantasyPointsPerGameRank($data['FantasyPointsPerGameRank']);
        }
        elseif (\array_key_exists('FantasyPointsPerGameRank', $data) && $data['FantasyPointsPerGameRank'] === null) {
            $object->setFantasyPointsPerGameRank(null);
        }
        if (\array_key_exists('FantasyPointsPerOpportunity', $data) && $data['FantasyPointsPerOpportunity'] !== null) {
            $object->setFantasyPointsPerOpportunity($data['FantasyPointsPerOpportunity']);
        }
        elseif (\array_key_exists('FantasyPointsPerOpportunity', $data) && $data['FantasyPointsPerOpportunity'] === null) {
            $object->setFantasyPointsPerOpportunity(null);
        }
        if (\array_key_exists('FantasyPointsPerOpportunityRank', $data) && $data['FantasyPointsPerOpportunityRank'] !== null) {
            $object->setFantasyPointsPerOpportunityRank($data['FantasyPointsPerOpportunityRank']);
        }
        elseif (\array_key_exists('FantasyPointsPerOpportunityRank', $data) && $data['FantasyPointsPerOpportunityRank'] === null) {
            $object->setFantasyPointsPerOpportunityRank(null);
        }
        if (\array_key_exists('FantasyPointsPerSnap', $data) && $data['FantasyPointsPerSnap'] !== null) {
            $object->setFantasyPointsPerSnap($data['FantasyPointsPerSnap']);
        }
        elseif (\array_key_exists('FantasyPointsPerSnap', $data) && $data['FantasyPointsPerSnap'] === null) {
            $object->setFantasyPointsPerSnap(null);
        }
        if (\array_key_exists('FantasyPointsPerSnapRank', $data) && $data['FantasyPointsPerSnapRank'] !== null) {
            $object->setFantasyPointsPerSnapRank($data['FantasyPointsPerSnapRank']);
        }
        elseif (\array_key_exists('FantasyPointsPerSnapRank', $data) && $data['FantasyPointsPerSnapRank'] === null) {
            $object->setFantasyPointsPerSnapRank(null);
        }
        if (\array_key_exists('FantasyPointsPerPassRoute', $data) && $data['FantasyPointsPerPassRoute'] !== null) {
            $object->setFantasyPointsPerPassRoute($data['FantasyPointsPerPassRoute']);
        }
        elseif (\array_key_exists('FantasyPointsPerPassRoute', $data) && $data['FantasyPointsPerPassRoute'] === null) {
            $object->setFantasyPointsPerPassRoute(null);
        }
        if (\array_key_exists('FantasyPointsPerPassRouteRank', $data) && $data['FantasyPointsPerPassRouteRank'] !== null) {
            $object->setFantasyPointsPerPassRouteRank($data['FantasyPointsPerPassRouteRank']);
        }
        elseif (\array_key_exists('FantasyPointsPerPassRouteRank', $data) && $data['FantasyPointsPerPassRouteRank'] === null) {
            $object->setFantasyPointsPerPassRouteRank(null);
        }
        if (\array_key_exists('FantasyPointsPerTarget', $data) && $data['FantasyPointsPerTarget'] !== null) {
            $object->setFantasyPointsPerTarget($data['FantasyPointsPerTarget']);
        }
        elseif (\array_key_exists('FantasyPointsPerTarget', $data) && $data['FantasyPointsPerTarget'] === null) {
            $object->setFantasyPointsPerTarget(null);
        }
        if (\array_key_exists('FantasyPointsPerTargetRank', $data) && $data['FantasyPointsPerTargetRank'] !== null) {
            $object->setFantasyPointsPerTargetRank($data['FantasyPointsPerTargetRank']);
        }
        elseif (\array_key_exists('FantasyPointsPerTargetRank', $data) && $data['FantasyPointsPerTargetRank'] === null) {
            $object->setFantasyPointsPerTargetRank(null);
        }
        if (\array_key_exists('SlotFantasyPoints', $data) && $data['SlotFantasyPoints'] !== null) {
            $object->setSlotFantasyPoints($data['SlotFantasyPoints']);
        }
        elseif (\array_key_exists('SlotFantasyPoints', $data) && $data['SlotFantasyPoints'] === null) {
            $object->setSlotFantasyPoints(null);
        }
        if (\array_key_exists('SlotFantasyPointsRank', $data) && $data['SlotFantasyPointsRank'] !== null) {
            $object->setSlotFantasyPointsRank($data['SlotFantasyPointsRank']);
        }
        elseif (\array_key_exists('SlotFantasyPointsRank', $data) && $data['SlotFantasyPointsRank'] === null) {
            $object->setSlotFantasyPointsRank(null);
        }
        if (\array_key_exists('SlotFantasyPointsPerGame', $data) && $data['SlotFantasyPointsPerGame'] !== null) {
            $object->setSlotFantasyPointsPerGame($data['SlotFantasyPointsPerGame']);
        }
        elseif (\array_key_exists('SlotFantasyPointsPerGame', $data) && $data['SlotFantasyPointsPerGame'] === null) {
            $object->setSlotFantasyPointsPerGame(null);
        }
        if (\array_key_exists('SlotFantasyPointsPerGameRank', $data) && $data['SlotFantasyPointsPerGameRank'] !== null) {
            $object->setSlotFantasyPointsPerGameRank($data['SlotFantasyPointsPerGameRank']);
        }
        elseif (\array_key_exists('SlotFantasyPointsPerGameRank', $data) && $data['SlotFantasyPointsPerGameRank'] === null) {
            $object->setSlotFantasyPointsPerGameRank(null);
        }
        if (\array_key_exists('SlotFantasyPointsPerTarget', $data) && $data['SlotFantasyPointsPerTarget'] !== null) {
            $object->setSlotFantasyPointsPerTarget($data['SlotFantasyPointsPerTarget']);
        }
        elseif (\array_key_exists('SlotFantasyPointsPerTarget', $data) && $data['SlotFantasyPointsPerTarget'] === null) {
            $object->setSlotFantasyPointsPerTarget(null);
        }
        if (\array_key_exists('SlotFantasyPointsPerTargetRank', $data) && $data['SlotFantasyPointsPerTargetRank'] !== null) {
            $object->setSlotFantasyPointsPerTargetRank($data['SlotFantasyPointsPerTargetRank']);
        }
        elseif (\array_key_exists('SlotFantasyPointsPerTargetRank', $data) && $data['SlotFantasyPointsPerTargetRank'] === null) {
            $object->setSlotFantasyPointsPerTargetRank(null);
        }
        if (\array_key_exists('FantasyPointsAllowed', $data) && $data['FantasyPointsAllowed'] !== null) {
            $object->setFantasyPointsAllowed($data['FantasyPointsAllowed']);
        }
        elseif (\array_key_exists('FantasyPointsAllowed', $data) && $data['FantasyPointsAllowed'] === null) {
            $object->setFantasyPointsAllowed(null);
        }
        if (\array_key_exists('FantasyPointsAllowedPerTarget', $data) && $data['FantasyPointsAllowedPerTarget'] !== null) {
            $object->setFantasyPointsAllowedPerTarget($data['FantasyPointsAllowedPerTarget']);
        }
        elseif (\array_key_exists('FantasyPointsAllowedPerTarget', $data) && $data['FantasyPointsAllowedPerTarget'] === null) {
            $object->setFantasyPointsAllowedPerTarget(null);
        }
        if (\array_key_exists('FantasyPointsAllowedPerTargetRank', $data) && $data['FantasyPointsAllowedPerTargetRank'] !== null) {
            $object->setFantasyPointsAllowedPerTargetRank($data['FantasyPointsAllowedPerTargetRank']);
        }
        elseif (\array_key_exists('FantasyPointsAllowedPerTargetRank', $data) && $data['FantasyPointsAllowedPerTargetRank'] === null) {
            $object->setFantasyPointsAllowedPerTargetRank(null);
        }
        if (\array_key_exists('FantasyPointsAllowedPerGame', $data) && $data['FantasyPointsAllowedPerGame'] !== null) {
            $object->setFantasyPointsAllowedPerGame($data['FantasyPointsAllowedPerGame']);
        }
        elseif (\array_key_exists('FantasyPointsAllowedPerGame', $data) && $data['FantasyPointsAllowedPerGame'] === null) {
            $object->setFantasyPointsAllowedPerGame(null);
        }
        if (\array_key_exists('FantasyPointsAllowedPerGameRank', $data) && $data['FantasyPointsAllowedPerGameRank'] !== null) {
            $object->setFantasyPointsAllowedPerGameRank($data['FantasyPointsAllowedPerGameRank']);
        }
        elseif (\array_key_exists('FantasyPointsAllowedPerGameRank', $data) && $data['FantasyPointsAllowedPerGameRank'] === null) {
            $object->setFantasyPointsAllowedPerGameRank(null);
        }
        if (\array_key_exists('FantasyPointsAllowedPerSnap', $data) && $data['FantasyPointsAllowedPerSnap'] !== null) {
            $object->setFantasyPointsAllowedPerSnap($data['FantasyPointsAllowedPerSnap']);
        }
        elseif (\array_key_exists('FantasyPointsAllowedPerSnap', $data) && $data['FantasyPointsAllowedPerSnap'] === null) {
            $object->setFantasyPointsAllowedPerSnap(null);
        }
        if (\array_key_exists('FantasyPointsAllowedPerSnapRank', $data) && $data['FantasyPointsAllowedPerSnapRank'] !== null) {
            $object->setFantasyPointsAllowedPerSnapRank($data['FantasyPointsAllowedPerSnapRank']);
        }
        elseif (\array_key_exists('FantasyPointsAllowedPerSnapRank', $data) && $data['FantasyPointsAllowedPerSnapRank'] === null) {
            $object->setFantasyPointsAllowedPerSnapRank(null);
        }
        if (\array_key_exists('FantasyPointsAllowedPerCoverSnap', $data) && $data['FantasyPointsAllowedPerCoverSnap'] !== null) {
            $object->setFantasyPointsAllowedPerCoverSnap($data['FantasyPointsAllowedPerCoverSnap']);
        }
        elseif (\array_key_exists('FantasyPointsAllowedPerCoverSnap', $data) && $data['FantasyPointsAllowedPerCoverSnap'] === null) {
            $object->setFantasyPointsAllowedPerCoverSnap(null);
        }
        if (\array_key_exists('FantasyPointsAllowedPerCoverSnapRank', $data) && $data['FantasyPointsAllowedPerCoverSnapRank'] !== null) {
            $object->setFantasyPointsAllowedPerCoverSnapRank($data['FantasyPointsAllowedPerCoverSnapRank']);
        }
        elseif (\array_key_exists('FantasyPointsAllowedPerCoverSnapRank', $data) && $data['FantasyPointsAllowedPerCoverSnapRank'] === null) {
            $object->setFantasyPointsAllowedPerCoverSnapRank(null);
        }
        if (\array_key_exists('ExpectedFantasyPoints', $data) && $data['ExpectedFantasyPoints'] !== null) {
            $object->setExpectedFantasyPoints($data['ExpectedFantasyPoints']);
        }
        elseif (\array_key_exists('ExpectedFantasyPoints', $data) && $data['ExpectedFantasyPoints'] === null) {
            $object->setExpectedFantasyPoints(null);
        }
        if (\array_key_exists('ExpectedFantasyPointsRank', $data) && $data['ExpectedFantasyPointsRank'] !== null) {
            $object->setExpectedFantasyPointsRank($data['ExpectedFantasyPointsRank']);
        }
        elseif (\array_key_exists('ExpectedFantasyPointsRank', $data) && $data['ExpectedFantasyPointsRank'] === null) {
            $object->setExpectedFantasyPointsRank(null);
        }
        if (\array_key_exists('ExpectedFantasyPointsPerGame', $data) && $data['ExpectedFantasyPointsPerGame'] !== null) {
            $object->setExpectedFantasyPointsPerGame($data['ExpectedFantasyPointsPerGame']);
        }
        elseif (\array_key_exists('ExpectedFantasyPointsPerGame', $data) && $data['ExpectedFantasyPointsPerGame'] === null) {
            $object->setExpectedFantasyPointsPerGame(null);
        }
        if (\array_key_exists('ExpectedFantasyPointsPerGameRank', $data) && $data['ExpectedFantasyPointsPerGameRank'] !== null) {
            $object->setExpectedFantasyPointsPerGameRank($data['ExpectedFantasyPointsPerGameRank']);
        }
        elseif (\array_key_exists('ExpectedFantasyPointsPerGameRank', $data) && $data['ExpectedFantasyPointsPerGameRank'] === null) {
            $object->setExpectedFantasyPointsPerGameRank(null);
        }
        if (\array_key_exists('NormalizedFantasyPointsPerGame', $data) && $data['NormalizedFantasyPointsPerGame'] !== null) {
            $object->setNormalizedFantasyPointsPerGame($data['NormalizedFantasyPointsPerGame']);
        }
        elseif (\array_key_exists('NormalizedFantasyPointsPerGame', $data) && $data['NormalizedFantasyPointsPerGame'] === null) {
            $object->setNormalizedFantasyPointsPerGame(null);
        }
        if (\array_key_exists('NormalizedFantasyPointsPerGameRank', $data) && $data['NormalizedFantasyPointsPerGameRank'] !== null) {
            $object->setNormalizedFantasyPointsPerGameRank($data['NormalizedFantasyPointsPerGameRank']);
        }
        elseif (\array_key_exists('NormalizedFantasyPointsPerGameRank', $data) && $data['NormalizedFantasyPointsPerGameRank'] === null) {
            $object->setNormalizedFantasyPointsPerGameRank(null);
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