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
class AdvancedPlayerGameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\AdvancedPlayerGame';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\AdvancedPlayerGame';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\AdvancedPlayerGame();
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
        if (\array_key_exists('Week', $data)) {
            $object->setWeek($data['Week']);
        }
        if (\array_key_exists('Opponent', $data) && $data['Opponent'] !== null) {
            $object->setOpponent($data['Opponent']);
        }
        elseif (\array_key_exists('Opponent', $data) && $data['Opponent'] === null) {
            $object->setOpponent(null);
        }
        if (\array_key_exists('OpponentID', $data) && $data['OpponentID'] !== null) {
            $object->setOpponentID($data['OpponentID']);
        }
        elseif (\array_key_exists('OpponentID', $data) && $data['OpponentID'] === null) {
            $object->setOpponentID(null);
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
        if (\array_key_exists('PassingAttempts', $data) && $data['PassingAttempts'] !== null) {
            $object->setPassingAttempts($data['PassingAttempts']);
        }
        elseif (\array_key_exists('PassingAttempts', $data) && $data['PassingAttempts'] === null) {
            $object->setPassingAttempts(null);
        }
        if (\array_key_exists('Completions', $data) && $data['Completions'] !== null) {
            $object->setCompletions($data['Completions']);
        }
        elseif (\array_key_exists('Completions', $data) && $data['Completions'] === null) {
            $object->setCompletions(null);
        }
        if (\array_key_exists('CompletionPercentage', $data) && $data['CompletionPercentage'] !== null) {
            $object->setCompletionPercentage($data['CompletionPercentage']);
        }
        elseif (\array_key_exists('CompletionPercentage', $data) && $data['CompletionPercentage'] === null) {
            $object->setCompletionPercentage(null);
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
        if (\array_key_exists('PassingTouchdowns', $data) && $data['PassingTouchdowns'] !== null) {
            $object->setPassingTouchdowns($data['PassingTouchdowns']);
        }
        elseif (\array_key_exists('PassingTouchdowns', $data) && $data['PassingTouchdowns'] === null) {
            $object->setPassingTouchdowns(null);
        }
        if (\array_key_exists('PassingTDs', $data) && $data['PassingTDs'] !== null) {
            $object->setPassingTDs($data['PassingTDs']);
        }
        elseif (\array_key_exists('PassingTDs', $data) && $data['PassingTDs'] === null) {
            $object->setPassingTDs(null);
        }
        if (\array_key_exists('Interceptions', $data) && $data['Interceptions'] !== null) {
            $object->setInterceptions($data['Interceptions']);
        }
        elseif (\array_key_exists('Interceptions', $data) && $data['Interceptions'] === null) {
            $object->setInterceptions(null);
        }
        if (\array_key_exists('RedZoneAttempts', $data) && $data['RedZoneAttempts'] !== null) {
            $object->setRedZoneAttempts($data['RedZoneAttempts']);
        }
        elseif (\array_key_exists('RedZoneAttempts', $data) && $data['RedZoneAttempts'] === null) {
            $object->setRedZoneAttempts(null);
        }
        if (\array_key_exists('RedZoneCompletionPercentage', $data) && $data['RedZoneCompletionPercentage'] !== null) {
            $object->setRedZoneCompletionPercentage($data['RedZoneCompletionPercentage']);
        }
        elseif (\array_key_exists('RedZoneCompletionPercentage', $data) && $data['RedZoneCompletionPercentage'] === null) {
            $object->setRedZoneCompletionPercentage(null);
        }
        if (\array_key_exists('DeepBallAttempts', $data) && $data['DeepBallAttempts'] !== null) {
            $object->setDeepBallAttempts($data['DeepBallAttempts']);
        }
        elseif (\array_key_exists('DeepBallAttempts', $data) && $data['DeepBallAttempts'] === null) {
            $object->setDeepBallAttempts(null);
        }
        if (\array_key_exists('DeepBallCompletions', $data) && $data['DeepBallCompletions'] !== null) {
            $object->setDeepBallCompletions($data['DeepBallCompletions']);
        }
        elseif (\array_key_exists('DeepBallCompletions', $data) && $data['DeepBallCompletions'] === null) {
            $object->setDeepBallCompletions(null);
        }
        if (\array_key_exists('Carries', $data) && $data['Carries'] !== null) {
            $object->setCarries($data['Carries']);
        }
        elseif (\array_key_exists('Carries', $data) && $data['Carries'] === null) {
            $object->setCarries(null);
        }
        if (\array_key_exists('RushingYards', $data) && $data['RushingYards'] !== null) {
            $object->setRushingYards($data['RushingYards']);
        }
        elseif (\array_key_exists('RushingYards', $data) && $data['RushingYards'] === null) {
            $object->setRushingYards(null);
        }
        if (\array_key_exists('RushingTouchdowns', $data) && $data['RushingTouchdowns'] !== null) {
            $object->setRushingTouchdowns($data['RushingTouchdowns']);
        }
        elseif (\array_key_exists('RushingTouchdowns', $data) && $data['RushingTouchdowns'] === null) {
            $object->setRushingTouchdowns(null);
        }
        if (\array_key_exists('Targets', $data) && $data['Targets'] !== null) {
            $object->setTargets($data['Targets']);
        }
        elseif (\array_key_exists('Targets', $data) && $data['Targets'] === null) {
            $object->setTargets(null);
        }
        if (\array_key_exists('Receptions', $data) && $data['Receptions'] !== null) {
            $object->setReceptions($data['Receptions']);
        }
        elseif (\array_key_exists('Receptions', $data) && $data['Receptions'] === null) {
            $object->setReceptions(null);
        }
        if (\array_key_exists('ReceivingYards', $data) && $data['ReceivingYards'] !== null) {
            $object->setReceivingYards($data['ReceivingYards']);
        }
        elseif (\array_key_exists('ReceivingYards', $data) && $data['ReceivingYards'] === null) {
            $object->setReceivingYards(null);
        }
        if (\array_key_exists('ReceivingTouchdowns', $data) && $data['ReceivingTouchdowns'] !== null) {
            $object->setReceivingTouchdowns($data['ReceivingTouchdowns']);
        }
        elseif (\array_key_exists('ReceivingTouchdowns', $data) && $data['ReceivingTouchdowns'] === null) {
            $object->setReceivingTouchdowns(null);
        }
        if (\array_key_exists('TotalYards', $data) && $data['TotalYards'] !== null) {
            $object->setTotalYards($data['TotalYards']);
        }
        elseif (\array_key_exists('TotalYards', $data) && $data['TotalYards'] === null) {
            $object->setTotalYards(null);
        }
        if (\array_key_exists('TotalTouches', $data) && $data['TotalTouches'] !== null) {
            $object->setTotalTouches($data['TotalTouches']);
        }
        elseif (\array_key_exists('TotalTouches', $data) && $data['TotalTouches'] === null) {
            $object->setTotalTouches(null);
        }
        if (\array_key_exists('YardsPerTouch', $data) && $data['YardsPerTouch'] !== null) {
            $object->setYardsPerTouch($data['YardsPerTouch']);
        }
        elseif (\array_key_exists('YardsPerTouch', $data) && $data['YardsPerTouch'] === null) {
            $object->setYardsPerTouch(null);
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
        if (\array_key_exists('TotalTouchdowns', $data) && $data['TotalTouchdowns'] !== null) {
            $object->setTotalTouchdowns($data['TotalTouchdowns']);
        }
        elseif (\array_key_exists('TotalTouchdowns', $data) && $data['TotalTouchdowns'] === null) {
            $object->setTotalTouchdowns(null);
        }
        if (\array_key_exists('EvadedTackles', $data) && $data['EvadedTackles'] !== null) {
            $object->setEvadedTackles($data['EvadedTackles']);
        }
        elseif (\array_key_exists('EvadedTackles', $data) && $data['EvadedTackles'] === null) {
            $object->setEvadedTackles(null);
        }
        if (\array_key_exists('JukeRate', $data) && $data['JukeRate'] !== null) {
            $object->setJukeRate($data['JukeRate']);
        }
        elseif (\array_key_exists('JukeRate', $data) && $data['JukeRate'] === null) {
            $object->setJukeRate(null);
        }
        if (\array_key_exists('CatchRate', $data) && $data['CatchRate'] !== null) {
            $object->setCatchRate($data['CatchRate']);
        }
        elseif (\array_key_exists('CatchRate', $data) && $data['CatchRate'] === null) {
            $object->setCatchRate(null);
        }
        if (\array_key_exists('TargetShare', $data) && $data['TargetShare'] !== null) {
            $object->setTargetShare($data['TargetShare']);
        }
        elseif (\array_key_exists('TargetShare', $data) && $data['TargetShare'] === null) {
            $object->setTargetShare(null);
        }
        if (\array_key_exists('HogRate', $data) && $data['HogRate'] !== null) {
            $object->setHogRate($data['HogRate']);
        }
        elseif (\array_key_exists('HogRate', $data) && $data['HogRate'] === null) {
            $object->setHogRate(null);
        }
        if (\array_key_exists('ContestedTargets', $data) && $data['ContestedTargets'] !== null) {
            $object->setContestedTargets($data['ContestedTargets']);
        }
        elseif (\array_key_exists('ContestedTargets', $data) && $data['ContestedTargets'] === null) {
            $object->setContestedTargets(null);
        }
        if (\array_key_exists('ContestedCatches', $data) && $data['ContestedCatches'] !== null) {
            $object->setContestedCatches($data['ContestedCatches']);
        }
        elseif (\array_key_exists('ContestedCatches', $data) && $data['ContestedCatches'] === null) {
            $object->setContestedCatches(null);
        }
        if (\array_key_exists('RedZoneCarries', $data) && $data['RedZoneCarries'] !== null) {
            $object->setRedZoneCarries($data['RedZoneCarries']);
        }
        elseif (\array_key_exists('RedZoneCarries', $data) && $data['RedZoneCarries'] === null) {
            $object->setRedZoneCarries(null);
        }
        if (\array_key_exists('RedZoneTargets', $data) && $data['RedZoneTargets'] !== null) {
            $object->setRedZoneTargets($data['RedZoneTargets']);
        }
        elseif (\array_key_exists('RedZoneTargets', $data) && $data['RedZoneTargets'] === null) {
            $object->setRedZoneTargets(null);
        }
        if (\array_key_exists('RedZoneOpportunities', $data) && $data['RedZoneOpportunities'] !== null) {
            $object->setRedZoneOpportunities($data['RedZoneOpportunities']);
        }
        elseif (\array_key_exists('RedZoneOpportunities', $data) && $data['RedZoneOpportunities'] === null) {
            $object->setRedZoneOpportunities(null);
        }
        if (\array_key_exists('RedZoneTouches', $data) && $data['RedZoneTouches'] !== null) {
            $object->setRedZoneTouches($data['RedZoneTouches']);
        }
        elseif (\array_key_exists('RedZoneTouches', $data) && $data['RedZoneTouches'] === null) {
            $object->setRedZoneTouches(null);
        }
        if (\array_key_exists('RedZoneReceptions', $data) && $data['RedZoneReceptions'] !== null) {
            $object->setRedZoneReceptions($data['RedZoneReceptions']);
        }
        elseif (\array_key_exists('RedZoneReceptions', $data) && $data['RedZoneReceptions'] === null) {
            $object->setRedZoneReceptions(null);
        }
        if (\array_key_exists('RedZoneCatchRate', $data) && $data['RedZoneCatchRate'] !== null) {
            $object->setRedZoneCatchRate($data['RedZoneCatchRate']);
        }
        elseif (\array_key_exists('RedZoneCatchRate', $data) && $data['RedZoneCatchRate'] === null) {
            $object->setRedZoneCatchRate(null);
        }
        if (\array_key_exists('YardsPerCarry', $data) && $data['YardsPerCarry'] !== null) {
            $object->setYardsPerCarry($data['YardsPerCarry']);
        }
        elseif (\array_key_exists('YardsPerCarry', $data) && $data['YardsPerCarry'] === null) {
            $object->setYardsPerCarry(null);
        }
        if (\array_key_exists('YardsPerTarget', $data) && $data['YardsPerTarget'] !== null) {
            $object->setYardsPerTarget($data['YardsPerTarget']);
        }
        elseif (\array_key_exists('YardsPerTarget', $data) && $data['YardsPerTarget'] === null) {
            $object->setYardsPerTarget(null);
        }
        if (\array_key_exists('YardsPerOpportunity', $data) && $data['YardsPerOpportunity'] !== null) {
            $object->setYardsPerOpportunity($data['YardsPerOpportunity']);
        }
        elseif (\array_key_exists('YardsPerOpportunity', $data) && $data['YardsPerOpportunity'] === null) {
            $object->setYardsPerOpportunity(null);
        }
        if (\array_key_exists('YardsPerReception', $data) && $data['YardsPerReception'] !== null) {
            $object->setYardsPerReception($data['YardsPerReception']);
        }
        elseif (\array_key_exists('YardsPerReception', $data) && $data['YardsPerReception'] === null) {
            $object->setYardsPerReception(null);
        }
        if (\array_key_exists('EndZoneTargets', $data) && $data['EndZoneTargets'] !== null) {
            $object->setEndZoneTargets($data['EndZoneTargets']);
        }
        elseif (\array_key_exists('EndZoneTargets', $data) && $data['EndZoneTargets'] === null) {
            $object->setEndZoneTargets(null);
        }
        if (\array_key_exists('RoutesRun', $data) && $data['RoutesRun'] !== null) {
            $object->setRoutesRun($data['RoutesRun']);
        }
        elseif (\array_key_exists('RoutesRun', $data) && $data['RoutesRun'] === null) {
            $object->setRoutesRun(null);
        }
        if (\array_key_exists('Burns', $data) && $data['Burns'] !== null) {
            $object->setBurns($data['Burns']);
        }
        elseif (\array_key_exists('Burns', $data) && $data['Burns'] === null) {
            $object->setBurns(null);
        }
        if (\array_key_exists('Hurries', $data) && $data['Hurries'] !== null) {
            $object->setHurries($data['Hurries']);
        }
        elseif (\array_key_exists('Hurries', $data) && $data['Hurries'] === null) {
            $object->setHurries(null);
        }
        if (\array_key_exists('YardsCreated', $data) && $data['YardsCreated'] !== null) {
            $object->setYardsCreated($data['YardsCreated']);
        }
        elseif (\array_key_exists('YardsCreated', $data) && $data['YardsCreated'] === null) {
            $object->setYardsCreated(null);
        }
        if (\array_key_exists('PassAttemptsInside5', $data) && $data['PassAttemptsInside5'] !== null) {
            $object->setPassAttemptsInside5($data['PassAttemptsInside5']);
        }
        elseif (\array_key_exists('PassAttemptsInside5', $data) && $data['PassAttemptsInside5'] === null) {
            $object->setPassAttemptsInside5(null);
        }
        if (\array_key_exists('PassAttemptsInside10', $data) && $data['PassAttemptsInside10'] !== null) {
            $object->setPassAttemptsInside10($data['PassAttemptsInside10']);
        }
        elseif (\array_key_exists('PassAttemptsInside10', $data) && $data['PassAttemptsInside10'] === null) {
            $object->setPassAttemptsInside10(null);
        }
        if (\array_key_exists('CarriesInside5', $data) && $data['CarriesInside5'] !== null) {
            $object->setCarriesInside5($data['CarriesInside5']);
        }
        elseif (\array_key_exists('CarriesInside5', $data) && $data['CarriesInside5'] === null) {
            $object->setCarriesInside5(null);
        }
        if (\array_key_exists('CarriesInside10', $data) && $data['CarriesInside10'] !== null) {
            $object->setCarriesInside10($data['CarriesInside10']);
        }
        elseif (\array_key_exists('CarriesInside10', $data) && $data['CarriesInside10'] === null) {
            $object->setCarriesInside10(null);
        }
        if (\array_key_exists('TargetsInside5', $data) && $data['TargetsInside5'] !== null) {
            $object->setTargetsInside5($data['TargetsInside5']);
        }
        elseif (\array_key_exists('TargetsInside5', $data) && $data['TargetsInside5'] === null) {
            $object->setTargetsInside5(null);
        }
        if (\array_key_exists('TargetsInside10', $data) && $data['TargetsInside10'] !== null) {
            $object->setTargetsInside10($data['TargetsInside10']);
        }
        elseif (\array_key_exists('TargetsInside10', $data) && $data['TargetsInside10'] === null) {
            $object->setTargetsInside10(null);
        }
        if (\array_key_exists('PrimaryCorner', $data) && $data['PrimaryCorner'] !== null) {
            $object->setPrimaryCorner($data['PrimaryCorner']);
        }
        elseif (\array_key_exists('PrimaryCorner', $data) && $data['PrimaryCorner'] === null) {
            $object->setPrimaryCorner(null);
        }
        if (\array_key_exists('RoutesDefended', $data) && $data['RoutesDefended'] !== null) {
            $object->setRoutesDefended($data['RoutesDefended']);
        }
        elseif (\array_key_exists('RoutesDefended', $data) && $data['RoutesDefended'] === null) {
            $object->setRoutesDefended(null);
        }
        if (\array_key_exists('TargetsAllowed', $data) && $data['TargetsAllowed'] !== null) {
            $object->setTargetsAllowed($data['TargetsAllowed']);
        }
        elseif (\array_key_exists('TargetsAllowed', $data) && $data['TargetsAllowed'] === null) {
            $object->setTargetsAllowed(null);
        }
        if (\array_key_exists('ReceptionsAllowed', $data) && $data['ReceptionsAllowed'] !== null) {
            $object->setReceptionsAllowed($data['ReceptionsAllowed']);
        }
        elseif (\array_key_exists('ReceptionsAllowed', $data) && $data['ReceptionsAllowed'] === null) {
            $object->setReceptionsAllowed(null);
        }
        if (\array_key_exists('YardsAllowed', $data) && $data['YardsAllowed'] !== null) {
            $object->setYardsAllowed($data['YardsAllowed']);
        }
        elseif (\array_key_exists('YardsAllowed', $data) && $data['YardsAllowed'] === null) {
            $object->setYardsAllowed(null);
        }
        if (\array_key_exists('BurnsCB', $data) && $data['BurnsCB'] !== null) {
            $object->setBurnsCB($data['BurnsCB']);
        }
        elseif (\array_key_exists('BurnsCB', $data) && $data['BurnsCB'] === null) {
            $object->setBurnsCB(null);
        }
        if (\array_key_exists('PassBreakups', $data) && $data['PassBreakups'] !== null) {
            $object->setPassBreakups($data['PassBreakups']);
        }
        elseif (\array_key_exists('PassBreakups', $data) && $data['PassBreakups'] === null) {
            $object->setPassBreakups(null);
        }
        if (\array_key_exists('InterceptionsCB', $data) && $data['InterceptionsCB'] !== null) {
            $object->setInterceptionsCB($data['InterceptionsCB']);
        }
        elseif (\array_key_exists('InterceptionsCB', $data) && $data['InterceptionsCB'] === null) {
            $object->setInterceptionsCB(null);
        }
        if (\array_key_exists('WRMatchup', $data) && $data['WRMatchup'] !== null) {
            $object->setWRMatchup($data['WRMatchup']);
        }
        elseif (\array_key_exists('WRMatchup', $data) && $data['WRMatchup'] === null) {
            $object->setWRMatchup(null);
        }
        if (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] !== null) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        elseif (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] === null) {
            $object->setFantasyPoints(null);
        }
        if (\array_key_exists('FantasyPointsRank', $data) && $data['FantasyPointsRank'] !== null) {
            $object->setFantasyPointsRank($data['FantasyPointsRank']);
        }
        elseif (\array_key_exists('FantasyPointsRank', $data) && $data['FantasyPointsRank'] === null) {
            $object->setFantasyPointsRank(null);
        }
        if (\array_key_exists('FantasyPointsPerAttempt', $data) && $data['FantasyPointsPerAttempt'] !== null) {
            $object->setFantasyPointsPerAttempt($data['FantasyPointsPerAttempt']);
        }
        elseif (\array_key_exists('FantasyPointsPerAttempt', $data) && $data['FantasyPointsPerAttempt'] === null) {
            $object->setFantasyPointsPerAttempt(null);
        }
        if (\array_key_exists('FantasyPointsPerTarget', $data) && $data['FantasyPointsPerTarget'] !== null) {
            $object->setFantasyPointsPerTarget($data['FantasyPointsPerTarget']);
        }
        elseif (\array_key_exists('FantasyPointsPerTarget', $data) && $data['FantasyPointsPerTarget'] === null) {
            $object->setFantasyPointsPerTarget(null);
        }
        if (\array_key_exists('FantasyPointsPerOpportunity', $data) && $data['FantasyPointsPerOpportunity'] !== null) {
            $object->setFantasyPointsPerOpportunity($data['FantasyPointsPerOpportunity']);
        }
        elseif (\array_key_exists('FantasyPointsPerOpportunity', $data) && $data['FantasyPointsPerOpportunity'] === null) {
            $object->setFantasyPointsPerOpportunity(null);
        }
        if (\array_key_exists('FantasyPointsAllowed', $data) && $data['FantasyPointsAllowed'] !== null) {
            $object->setFantasyPointsAllowed($data['FantasyPointsAllowed']);
        }
        elseif (\array_key_exists('FantasyPointsAllowed', $data) && $data['FantasyPointsAllowed'] === null) {
            $object->setFantasyPointsAllowed(null);
        }
        if (\array_key_exists('FantasyPointsAllowedWeekRank', $data) && $data['FantasyPointsAllowedWeekRank'] !== null) {
            $object->setFantasyPointsAllowedWeekRank($data['FantasyPointsAllowedWeekRank']);
        }
        elseif (\array_key_exists('FantasyPointsAllowedWeekRank', $data) && $data['FantasyPointsAllowedWeekRank'] === null) {
            $object->setFantasyPointsAllowedWeekRank(null);
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
        if (null !== $object->getWeek()) {
            $data['Week'] = $object->getWeek();
        }
        if (null !== $object->getOpponent()) {
            $data['Opponent'] = $object->getOpponent();
        }
        if (null !== $object->getOpponentID()) {
            $data['OpponentID'] = $object->getOpponentID();
        }
        if (null !== $object->getSnaps()) {
            $data['Snaps'] = $object->getSnaps();
        }
        if (null !== $object->getSnapShare()) {
            $data['SnapShare'] = $object->getSnapShare();
        }
        if (null !== $object->getPassingAttempts()) {
            $data['PassingAttempts'] = $object->getPassingAttempts();
        }
        if (null !== $object->getCompletions()) {
            $data['Completions'] = $object->getCompletions();
        }
        if (null !== $object->getCompletionPercentage()) {
            $data['CompletionPercentage'] = $object->getCompletionPercentage();
        }
        if (null !== $object->getPassingYards()) {
            $data['PassingYards'] = $object->getPassingYards();
        }
        if (null !== $object->getPassingYardsPerAttempt()) {
            $data['PassingYardsPerAttempt'] = $object->getPassingYardsPerAttempt();
        }
        if (null !== $object->getPassingTouchdowns()) {
            $data['PassingTouchdowns'] = $object->getPassingTouchdowns();
        }
        if (null !== $object->getPassingTDs()) {
            $data['PassingTDs'] = $object->getPassingTDs();
        }
        if (null !== $object->getInterceptions()) {
            $data['Interceptions'] = $object->getInterceptions();
        }
        if (null !== $object->getRedZoneAttempts()) {
            $data['RedZoneAttempts'] = $object->getRedZoneAttempts();
        }
        if (null !== $object->getRedZoneCompletionPercentage()) {
            $data['RedZoneCompletionPercentage'] = $object->getRedZoneCompletionPercentage();
        }
        if (null !== $object->getDeepBallAttempts()) {
            $data['DeepBallAttempts'] = $object->getDeepBallAttempts();
        }
        if (null !== $object->getDeepBallCompletions()) {
            $data['DeepBallCompletions'] = $object->getDeepBallCompletions();
        }
        if (null !== $object->getCarries()) {
            $data['Carries'] = $object->getCarries();
        }
        if (null !== $object->getRushingYards()) {
            $data['RushingYards'] = $object->getRushingYards();
        }
        if (null !== $object->getRushingTouchdowns()) {
            $data['RushingTouchdowns'] = $object->getRushingTouchdowns();
        }
        if (null !== $object->getTargets()) {
            $data['Targets'] = $object->getTargets();
        }
        if (null !== $object->getReceptions()) {
            $data['Receptions'] = $object->getReceptions();
        }
        if (null !== $object->getReceivingYards()) {
            $data['ReceivingYards'] = $object->getReceivingYards();
        }
        if (null !== $object->getReceivingTouchdowns()) {
            $data['ReceivingTouchdowns'] = $object->getReceivingTouchdowns();
        }
        if (null !== $object->getTotalYards()) {
            $data['TotalYards'] = $object->getTotalYards();
        }
        if (null !== $object->getTotalTouches()) {
            $data['TotalTouches'] = $object->getTotalTouches();
        }
        if (null !== $object->getYardsPerTouch()) {
            $data['YardsPerTouch'] = $object->getYardsPerTouch();
        }
        if (null !== $object->getOpportunities()) {
            $data['Opportunities'] = $object->getOpportunities();
        }
        if (null !== $object->getOpportunityShare()) {
            $data['OpportunityShare'] = $object->getOpportunityShare();
        }
        if (null !== $object->getTotalTouchdowns()) {
            $data['TotalTouchdowns'] = $object->getTotalTouchdowns();
        }
        if (null !== $object->getEvadedTackles()) {
            $data['EvadedTackles'] = $object->getEvadedTackles();
        }
        if (null !== $object->getJukeRate()) {
            $data['JukeRate'] = $object->getJukeRate();
        }
        if (null !== $object->getCatchRate()) {
            $data['CatchRate'] = $object->getCatchRate();
        }
        if (null !== $object->getTargetShare()) {
            $data['TargetShare'] = $object->getTargetShare();
        }
        if (null !== $object->getHogRate()) {
            $data['HogRate'] = $object->getHogRate();
        }
        if (null !== $object->getContestedTargets()) {
            $data['ContestedTargets'] = $object->getContestedTargets();
        }
        if (null !== $object->getContestedCatches()) {
            $data['ContestedCatches'] = $object->getContestedCatches();
        }
        if (null !== $object->getRedZoneCarries()) {
            $data['RedZoneCarries'] = $object->getRedZoneCarries();
        }
        if (null !== $object->getRedZoneTargets()) {
            $data['RedZoneTargets'] = $object->getRedZoneTargets();
        }
        if (null !== $object->getRedZoneOpportunities()) {
            $data['RedZoneOpportunities'] = $object->getRedZoneOpportunities();
        }
        if (null !== $object->getRedZoneTouches()) {
            $data['RedZoneTouches'] = $object->getRedZoneTouches();
        }
        if (null !== $object->getRedZoneReceptions()) {
            $data['RedZoneReceptions'] = $object->getRedZoneReceptions();
        }
        if (null !== $object->getRedZoneCatchRate()) {
            $data['RedZoneCatchRate'] = $object->getRedZoneCatchRate();
        }
        if (null !== $object->getYardsPerCarry()) {
            $data['YardsPerCarry'] = $object->getYardsPerCarry();
        }
        if (null !== $object->getYardsPerTarget()) {
            $data['YardsPerTarget'] = $object->getYardsPerTarget();
        }
        if (null !== $object->getYardsPerOpportunity()) {
            $data['YardsPerOpportunity'] = $object->getYardsPerOpportunity();
        }
        if (null !== $object->getYardsPerReception()) {
            $data['YardsPerReception'] = $object->getYardsPerReception();
        }
        if (null !== $object->getEndZoneTargets()) {
            $data['EndZoneTargets'] = $object->getEndZoneTargets();
        }
        if (null !== $object->getRoutesRun()) {
            $data['RoutesRun'] = $object->getRoutesRun();
        }
        if (null !== $object->getBurns()) {
            $data['Burns'] = $object->getBurns();
        }
        if (null !== $object->getHurries()) {
            $data['Hurries'] = $object->getHurries();
        }
        if (null !== $object->getYardsCreated()) {
            $data['YardsCreated'] = $object->getYardsCreated();
        }
        if (null !== $object->getPassAttemptsInside5()) {
            $data['PassAttemptsInside5'] = $object->getPassAttemptsInside5();
        }
        if (null !== $object->getPassAttemptsInside10()) {
            $data['PassAttemptsInside10'] = $object->getPassAttemptsInside10();
        }
        if (null !== $object->getCarriesInside5()) {
            $data['CarriesInside5'] = $object->getCarriesInside5();
        }
        if (null !== $object->getCarriesInside10()) {
            $data['CarriesInside10'] = $object->getCarriesInside10();
        }
        if (null !== $object->getTargetsInside5()) {
            $data['TargetsInside5'] = $object->getTargetsInside5();
        }
        if (null !== $object->getTargetsInside10()) {
            $data['TargetsInside10'] = $object->getTargetsInside10();
        }
        if (null !== $object->getPrimaryCorner()) {
            $data['PrimaryCorner'] = $object->getPrimaryCorner();
        }
        if (null !== $object->getRoutesDefended()) {
            $data['RoutesDefended'] = $object->getRoutesDefended();
        }
        if (null !== $object->getTargetsAllowed()) {
            $data['TargetsAllowed'] = $object->getTargetsAllowed();
        }
        if (null !== $object->getReceptionsAllowed()) {
            $data['ReceptionsAllowed'] = $object->getReceptionsAllowed();
        }
        if (null !== $object->getYardsAllowed()) {
            $data['YardsAllowed'] = $object->getYardsAllowed();
        }
        if (null !== $object->getBurnsCB()) {
            $data['BurnsCB'] = $object->getBurnsCB();
        }
        if (null !== $object->getPassBreakups()) {
            $data['PassBreakups'] = $object->getPassBreakups();
        }
        if (null !== $object->getInterceptionsCB()) {
            $data['InterceptionsCB'] = $object->getInterceptionsCB();
        }
        if (null !== $object->getWRMatchup()) {
            $data['WRMatchup'] = $object->getWRMatchup();
        }
        if (null !== $object->getFantasyPoints()) {
            $data['FantasyPoints'] = $object->getFantasyPoints();
        }
        if (null !== $object->getFantasyPointsRank()) {
            $data['FantasyPointsRank'] = $object->getFantasyPointsRank();
        }
        if (null !== $object->getFantasyPointsPerAttempt()) {
            $data['FantasyPointsPerAttempt'] = $object->getFantasyPointsPerAttempt();
        }
        if (null !== $object->getFantasyPointsPerTarget()) {
            $data['FantasyPointsPerTarget'] = $object->getFantasyPointsPerTarget();
        }
        if (null !== $object->getFantasyPointsPerOpportunity()) {
            $data['FantasyPointsPerOpportunity'] = $object->getFantasyPointsPerOpportunity();
        }
        if (null !== $object->getFantasyPointsAllowed()) {
            $data['FantasyPointsAllowed'] = $object->getFantasyPointsAllowed();
        }
        if (null !== $object->getFantasyPointsAllowedWeekRank()) {
            $data['FantasyPointsAllowedWeekRank'] = $object->getFantasyPointsAllowedWeekRank();
        }
        return $data;
    }
}