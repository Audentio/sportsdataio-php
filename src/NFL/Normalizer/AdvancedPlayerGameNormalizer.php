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
        if (\array_key_exists('Week', $data)) {
            $object->setWeek($data['Week']);
        }
        if (\array_key_exists('Opponent', $data)) {
            $object->setOpponent($data['Opponent']);
        }
        if (\array_key_exists('OpponentID', $data)) {
            $object->setOpponentID($data['OpponentID']);
        }
        if (\array_key_exists('Snaps', $data)) {
            $object->setSnaps($data['Snaps']);
        }
        if (\array_key_exists('SnapShare', $data)) {
            $object->setSnapShare($data['SnapShare']);
        }
        if (\array_key_exists('PassingAttempts', $data)) {
            $object->setPassingAttempts($data['PassingAttempts']);
        }
        if (\array_key_exists('Completions', $data)) {
            $object->setCompletions($data['Completions']);
        }
        if (\array_key_exists('CompletionPercentage', $data)) {
            $object->setCompletionPercentage($data['CompletionPercentage']);
        }
        if (\array_key_exists('PassingYards', $data)) {
            $object->setPassingYards($data['PassingYards']);
        }
        if (\array_key_exists('PassingYardsPerAttempt', $data)) {
            $object->setPassingYardsPerAttempt($data['PassingYardsPerAttempt']);
        }
        if (\array_key_exists('PassingTouchdowns', $data)) {
            $object->setPassingTouchdowns($data['PassingTouchdowns']);
        }
        if (\array_key_exists('PassingTDs', $data)) {
            $object->setPassingTDs($data['PassingTDs']);
        }
        if (\array_key_exists('Interceptions', $data)) {
            $object->setInterceptions($data['Interceptions']);
        }
        if (\array_key_exists('RedZoneAttempts', $data)) {
            $object->setRedZoneAttempts($data['RedZoneAttempts']);
        }
        if (\array_key_exists('RedZoneCompletionPercentage', $data)) {
            $object->setRedZoneCompletionPercentage($data['RedZoneCompletionPercentage']);
        }
        if (\array_key_exists('DeepBallAttempts', $data)) {
            $object->setDeepBallAttempts($data['DeepBallAttempts']);
        }
        if (\array_key_exists('DeepBallCompletions', $data)) {
            $object->setDeepBallCompletions($data['DeepBallCompletions']);
        }
        if (\array_key_exists('Carries', $data)) {
            $object->setCarries($data['Carries']);
        }
        if (\array_key_exists('RushingYards', $data)) {
            $object->setRushingYards($data['RushingYards']);
        }
        if (\array_key_exists('RushingTouchdowns', $data)) {
            $object->setRushingTouchdowns($data['RushingTouchdowns']);
        }
        if (\array_key_exists('Targets', $data)) {
            $object->setTargets($data['Targets']);
        }
        if (\array_key_exists('Receptions', $data)) {
            $object->setReceptions($data['Receptions']);
        }
        if (\array_key_exists('ReceivingYards', $data)) {
            $object->setReceivingYards($data['ReceivingYards']);
        }
        if (\array_key_exists('ReceivingTouchdowns', $data)) {
            $object->setReceivingTouchdowns($data['ReceivingTouchdowns']);
        }
        if (\array_key_exists('TotalYards', $data)) {
            $object->setTotalYards($data['TotalYards']);
        }
        if (\array_key_exists('TotalTouches', $data)) {
            $object->setTotalTouches($data['TotalTouches']);
        }
        if (\array_key_exists('YardsPerTouch', $data)) {
            $object->setYardsPerTouch($data['YardsPerTouch']);
        }
        if (\array_key_exists('Opportunities', $data)) {
            $object->setOpportunities($data['Opportunities']);
        }
        if (\array_key_exists('OpportunityShare', $data)) {
            $object->setOpportunityShare($data['OpportunityShare']);
        }
        if (\array_key_exists('TotalTouchdowns', $data)) {
            $object->setTotalTouchdowns($data['TotalTouchdowns']);
        }
        if (\array_key_exists('EvadedTackles', $data)) {
            $object->setEvadedTackles($data['EvadedTackles']);
        }
        if (\array_key_exists('JukeRate', $data)) {
            $object->setJukeRate($data['JukeRate']);
        }
        if (\array_key_exists('CatchRate', $data)) {
            $object->setCatchRate($data['CatchRate']);
        }
        if (\array_key_exists('TargetShare', $data)) {
            $object->setTargetShare($data['TargetShare']);
        }
        if (\array_key_exists('HogRate', $data)) {
            $object->setHogRate($data['HogRate']);
        }
        if (\array_key_exists('ContestedTargets', $data)) {
            $object->setContestedTargets($data['ContestedTargets']);
        }
        if (\array_key_exists('ContestedCatches', $data)) {
            $object->setContestedCatches($data['ContestedCatches']);
        }
        if (\array_key_exists('RedZoneCarries', $data)) {
            $object->setRedZoneCarries($data['RedZoneCarries']);
        }
        if (\array_key_exists('RedZoneTargets', $data)) {
            $object->setRedZoneTargets($data['RedZoneTargets']);
        }
        if (\array_key_exists('RedZoneOpportunities', $data)) {
            $object->setRedZoneOpportunities($data['RedZoneOpportunities']);
        }
        if (\array_key_exists('RedZoneTouches', $data)) {
            $object->setRedZoneTouches($data['RedZoneTouches']);
        }
        if (\array_key_exists('RedZoneReceptions', $data)) {
            $object->setRedZoneReceptions($data['RedZoneReceptions']);
        }
        if (\array_key_exists('RedZoneCatchRate', $data)) {
            $object->setRedZoneCatchRate($data['RedZoneCatchRate']);
        }
        if (\array_key_exists('YardsPerCarry', $data)) {
            $object->setYardsPerCarry($data['YardsPerCarry']);
        }
        if (\array_key_exists('YardsPerTarget', $data)) {
            $object->setYardsPerTarget($data['YardsPerTarget']);
        }
        if (\array_key_exists('YardsPerOpportunity', $data)) {
            $object->setYardsPerOpportunity($data['YardsPerOpportunity']);
        }
        if (\array_key_exists('YardsPerReception', $data)) {
            $object->setYardsPerReception($data['YardsPerReception']);
        }
        if (\array_key_exists('EndZoneTargets', $data)) {
            $object->setEndZoneTargets($data['EndZoneTargets']);
        }
        if (\array_key_exists('RoutesRun', $data)) {
            $object->setRoutesRun($data['RoutesRun']);
        }
        if (\array_key_exists('Burns', $data)) {
            $object->setBurns($data['Burns']);
        }
        if (\array_key_exists('Hurries', $data)) {
            $object->setHurries($data['Hurries']);
        }
        if (\array_key_exists('YardsCreated', $data)) {
            $object->setYardsCreated($data['YardsCreated']);
        }
        if (\array_key_exists('PassAttemptsInside5', $data)) {
            $object->setPassAttemptsInside5($data['PassAttemptsInside5']);
        }
        if (\array_key_exists('PassAttemptsInside10', $data)) {
            $object->setPassAttemptsInside10($data['PassAttemptsInside10']);
        }
        if (\array_key_exists('CarriesInside5', $data)) {
            $object->setCarriesInside5($data['CarriesInside5']);
        }
        if (\array_key_exists('CarriesInside10', $data)) {
            $object->setCarriesInside10($data['CarriesInside10']);
        }
        if (\array_key_exists('TargetsInside5', $data)) {
            $object->setTargetsInside5($data['TargetsInside5']);
        }
        if (\array_key_exists('TargetsInside10', $data)) {
            $object->setTargetsInside10($data['TargetsInside10']);
        }
        if (\array_key_exists('PrimaryCorner', $data)) {
            $object->setPrimaryCorner($data['PrimaryCorner']);
        }
        if (\array_key_exists('RoutesDefended', $data)) {
            $object->setRoutesDefended($data['RoutesDefended']);
        }
        if (\array_key_exists('TargetsAllowed', $data)) {
            $object->setTargetsAllowed($data['TargetsAllowed']);
        }
        if (\array_key_exists('ReceptionsAllowed', $data)) {
            $object->setReceptionsAllowed($data['ReceptionsAllowed']);
        }
        if (\array_key_exists('YardsAllowed', $data)) {
            $object->setYardsAllowed($data['YardsAllowed']);
        }
        if (\array_key_exists('BurnsCB', $data)) {
            $object->setBurnsCB($data['BurnsCB']);
        }
        if (\array_key_exists('PassBreakups', $data)) {
            $object->setPassBreakups($data['PassBreakups']);
        }
        if (\array_key_exists('InterceptionsCB', $data)) {
            $object->setInterceptionsCB($data['InterceptionsCB']);
        }
        if (\array_key_exists('WRMatchup', $data)) {
            $object->setWRMatchup($data['WRMatchup']);
        }
        if (\array_key_exists('FantasyPoints', $data)) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        if (\array_key_exists('FantasyPointsRank', $data)) {
            $object->setFantasyPointsRank($data['FantasyPointsRank']);
        }
        if (\array_key_exists('FantasyPointsPerAttempt', $data)) {
            $object->setFantasyPointsPerAttempt($data['FantasyPointsPerAttempt']);
        }
        if (\array_key_exists('FantasyPointsPerTarget', $data)) {
            $object->setFantasyPointsPerTarget($data['FantasyPointsPerTarget']);
        }
        if (\array_key_exists('FantasyPointsPerOpportunity', $data)) {
            $object->setFantasyPointsPerOpportunity($data['FantasyPointsPerOpportunity']);
        }
        if (\array_key_exists('FantasyPointsAllowed', $data)) {
            $object->setFantasyPointsAllowed($data['FantasyPointsAllowed']);
        }
        if (\array_key_exists('FantasyPointsAllowedWeekRank', $data)) {
            $object->setFantasyPointsAllowedWeekRank($data['FantasyPointsAllowedWeekRank']);
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