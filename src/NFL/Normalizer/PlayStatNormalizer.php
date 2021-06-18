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
class PlayStatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\PlayStat';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\PlayStat';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\PlayStat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayStatID', $data)) {
            $object->setPlayStatID($data['PlayStatID']);
        }
        if (\array_key_exists('PlayID', $data)) {
            $object->setPlayID($data['PlayID']);
        }
        if (\array_key_exists('Sequence', $data)) {
            $object->setSequence($data['Sequence']);
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
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('Opponent', $data) && $data['Opponent'] !== null) {
            $object->setOpponent($data['Opponent']);
        }
        elseif (\array_key_exists('Opponent', $data) && $data['Opponent'] === null) {
            $object->setOpponent(null);
        }
        if (\array_key_exists('HomeOrAway', $data) && $data['HomeOrAway'] !== null) {
            $object->setHomeOrAway($data['HomeOrAway']);
        }
        elseif (\array_key_exists('HomeOrAway', $data) && $data['HomeOrAway'] === null) {
            $object->setHomeOrAway(null);
        }
        if (\array_key_exists('Direction', $data) && $data['Direction'] !== null) {
            $object->setDirection($data['Direction']);
        }
        elseif (\array_key_exists('Direction', $data) && $data['Direction'] === null) {
            $object->setDirection(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
            $object->setCreated($data['Created']);
        }
        elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
            $object->setCreated(null);
        }
        if (\array_key_exists('PassingAttempts', $data) && $data['PassingAttempts'] !== null) {
            $object->setPassingAttempts($data['PassingAttempts']);
        }
        elseif (\array_key_exists('PassingAttempts', $data) && $data['PassingAttempts'] === null) {
            $object->setPassingAttempts(null);
        }
        if (\array_key_exists('PassingCompletions', $data) && $data['PassingCompletions'] !== null) {
            $object->setPassingCompletions($data['PassingCompletions']);
        }
        elseif (\array_key_exists('PassingCompletions', $data) && $data['PassingCompletions'] === null) {
            $object->setPassingCompletions(null);
        }
        if (\array_key_exists('PassingYards', $data) && $data['PassingYards'] !== null) {
            $object->setPassingYards($data['PassingYards']);
        }
        elseif (\array_key_exists('PassingYards', $data) && $data['PassingYards'] === null) {
            $object->setPassingYards(null);
        }
        if (\array_key_exists('PassingTouchdowns', $data) && $data['PassingTouchdowns'] !== null) {
            $object->setPassingTouchdowns($data['PassingTouchdowns']);
        }
        elseif (\array_key_exists('PassingTouchdowns', $data) && $data['PassingTouchdowns'] === null) {
            $object->setPassingTouchdowns(null);
        }
        if (\array_key_exists('PassingInterceptions', $data) && $data['PassingInterceptions'] !== null) {
            $object->setPassingInterceptions($data['PassingInterceptions']);
        }
        elseif (\array_key_exists('PassingInterceptions', $data) && $data['PassingInterceptions'] === null) {
            $object->setPassingInterceptions(null);
        }
        if (\array_key_exists('PassingSacks', $data) && $data['PassingSacks'] !== null) {
            $object->setPassingSacks($data['PassingSacks']);
        }
        elseif (\array_key_exists('PassingSacks', $data) && $data['PassingSacks'] === null) {
            $object->setPassingSacks(null);
        }
        if (\array_key_exists('PassingSackYards', $data) && $data['PassingSackYards'] !== null) {
            $object->setPassingSackYards($data['PassingSackYards']);
        }
        elseif (\array_key_exists('PassingSackYards', $data) && $data['PassingSackYards'] === null) {
            $object->setPassingSackYards(null);
        }
        if (\array_key_exists('RushingAttempts', $data) && $data['RushingAttempts'] !== null) {
            $object->setRushingAttempts($data['RushingAttempts']);
        }
        elseif (\array_key_exists('RushingAttempts', $data) && $data['RushingAttempts'] === null) {
            $object->setRushingAttempts(null);
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
        if (\array_key_exists('ReceivingTargets', $data) && $data['ReceivingTargets'] !== null) {
            $object->setReceivingTargets($data['ReceivingTargets']);
        }
        elseif (\array_key_exists('ReceivingTargets', $data) && $data['ReceivingTargets'] === null) {
            $object->setReceivingTargets(null);
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
        if (\array_key_exists('Fumbles', $data) && $data['Fumbles'] !== null) {
            $object->setFumbles($data['Fumbles']);
        }
        elseif (\array_key_exists('Fumbles', $data) && $data['Fumbles'] === null) {
            $object->setFumbles(null);
        }
        if (\array_key_exists('FumblesLost', $data) && $data['FumblesLost'] !== null) {
            $object->setFumblesLost($data['FumblesLost']);
        }
        elseif (\array_key_exists('FumblesLost', $data) && $data['FumblesLost'] === null) {
            $object->setFumblesLost(null);
        }
        if (\array_key_exists('TwoPointConversionAttempts', $data) && $data['TwoPointConversionAttempts'] !== null) {
            $object->setTwoPointConversionAttempts($data['TwoPointConversionAttempts']);
        }
        elseif (\array_key_exists('TwoPointConversionAttempts', $data) && $data['TwoPointConversionAttempts'] === null) {
            $object->setTwoPointConversionAttempts(null);
        }
        if (\array_key_exists('TwoPointConversionPasses', $data) && $data['TwoPointConversionPasses'] !== null) {
            $object->setTwoPointConversionPasses($data['TwoPointConversionPasses']);
        }
        elseif (\array_key_exists('TwoPointConversionPasses', $data) && $data['TwoPointConversionPasses'] === null) {
            $object->setTwoPointConversionPasses(null);
        }
        if (\array_key_exists('TwoPointConversionRuns', $data) && $data['TwoPointConversionRuns'] !== null) {
            $object->setTwoPointConversionRuns($data['TwoPointConversionRuns']);
        }
        elseif (\array_key_exists('TwoPointConversionRuns', $data) && $data['TwoPointConversionRuns'] === null) {
            $object->setTwoPointConversionRuns(null);
        }
        if (\array_key_exists('TwoPointConversionReceptions', $data) && $data['TwoPointConversionReceptions'] !== null) {
            $object->setTwoPointConversionReceptions($data['TwoPointConversionReceptions']);
        }
        elseif (\array_key_exists('TwoPointConversionReceptions', $data) && $data['TwoPointConversionReceptions'] === null) {
            $object->setTwoPointConversionReceptions(null);
        }
        if (\array_key_exists('TwoPointConversionReturns', $data) && $data['TwoPointConversionReturns'] !== null) {
            $object->setTwoPointConversionReturns($data['TwoPointConversionReturns']);
        }
        elseif (\array_key_exists('TwoPointConversionReturns', $data) && $data['TwoPointConversionReturns'] === null) {
            $object->setTwoPointConversionReturns(null);
        }
        if (\array_key_exists('SoloTackles', $data) && $data['SoloTackles'] !== null) {
            $object->setSoloTackles($data['SoloTackles']);
        }
        elseif (\array_key_exists('SoloTackles', $data) && $data['SoloTackles'] === null) {
            $object->setSoloTackles(null);
        }
        if (\array_key_exists('AssistedTackles', $data) && $data['AssistedTackles'] !== null) {
            $object->setAssistedTackles($data['AssistedTackles']);
        }
        elseif (\array_key_exists('AssistedTackles', $data) && $data['AssistedTackles'] === null) {
            $object->setAssistedTackles(null);
        }
        if (\array_key_exists('TacklesForLoss', $data) && $data['TacklesForLoss'] !== null) {
            $object->setTacklesForLoss($data['TacklesForLoss']);
        }
        elseif (\array_key_exists('TacklesForLoss', $data) && $data['TacklesForLoss'] === null) {
            $object->setTacklesForLoss(null);
        }
        if (\array_key_exists('Sacks', $data) && $data['Sacks'] !== null) {
            $object->setSacks($data['Sacks']);
        }
        elseif (\array_key_exists('Sacks', $data) && $data['Sacks'] === null) {
            $object->setSacks(null);
        }
        if (\array_key_exists('SackYards', $data) && $data['SackYards'] !== null) {
            $object->setSackYards($data['SackYards']);
        }
        elseif (\array_key_exists('SackYards', $data) && $data['SackYards'] === null) {
            $object->setSackYards(null);
        }
        if (\array_key_exists('PassesDefended', $data) && $data['PassesDefended'] !== null) {
            $object->setPassesDefended($data['PassesDefended']);
        }
        elseif (\array_key_exists('PassesDefended', $data) && $data['PassesDefended'] === null) {
            $object->setPassesDefended(null);
        }
        if (\array_key_exists('Safeties', $data) && $data['Safeties'] !== null) {
            $object->setSafeties($data['Safeties']);
        }
        elseif (\array_key_exists('Safeties', $data) && $data['Safeties'] === null) {
            $object->setSafeties(null);
        }
        if (\array_key_exists('FumblesForced', $data) && $data['FumblesForced'] !== null) {
            $object->setFumblesForced($data['FumblesForced']);
        }
        elseif (\array_key_exists('FumblesForced', $data) && $data['FumblesForced'] === null) {
            $object->setFumblesForced(null);
        }
        if (\array_key_exists('FumblesRecovered', $data) && $data['FumblesRecovered'] !== null) {
            $object->setFumblesRecovered($data['FumblesRecovered']);
        }
        elseif (\array_key_exists('FumblesRecovered', $data) && $data['FumblesRecovered'] === null) {
            $object->setFumblesRecovered(null);
        }
        if (\array_key_exists('FumbleReturnYards', $data) && $data['FumbleReturnYards'] !== null) {
            $object->setFumbleReturnYards($data['FumbleReturnYards']);
        }
        elseif (\array_key_exists('FumbleReturnYards', $data) && $data['FumbleReturnYards'] === null) {
            $object->setFumbleReturnYards(null);
        }
        if (\array_key_exists('FumbleReturnTouchdowns', $data) && $data['FumbleReturnTouchdowns'] !== null) {
            $object->setFumbleReturnTouchdowns($data['FumbleReturnTouchdowns']);
        }
        elseif (\array_key_exists('FumbleReturnTouchdowns', $data) && $data['FumbleReturnTouchdowns'] === null) {
            $object->setFumbleReturnTouchdowns(null);
        }
        if (\array_key_exists('Interceptions', $data) && $data['Interceptions'] !== null) {
            $object->setInterceptions($data['Interceptions']);
        }
        elseif (\array_key_exists('Interceptions', $data) && $data['Interceptions'] === null) {
            $object->setInterceptions(null);
        }
        if (\array_key_exists('InterceptionReturnYards', $data) && $data['InterceptionReturnYards'] !== null) {
            $object->setInterceptionReturnYards($data['InterceptionReturnYards']);
        }
        elseif (\array_key_exists('InterceptionReturnYards', $data) && $data['InterceptionReturnYards'] === null) {
            $object->setInterceptionReturnYards(null);
        }
        if (\array_key_exists('InterceptionReturnTouchdowns', $data) && $data['InterceptionReturnTouchdowns'] !== null) {
            $object->setInterceptionReturnTouchdowns($data['InterceptionReturnTouchdowns']);
        }
        elseif (\array_key_exists('InterceptionReturnTouchdowns', $data) && $data['InterceptionReturnTouchdowns'] === null) {
            $object->setInterceptionReturnTouchdowns(null);
        }
        if (\array_key_exists('PuntReturns', $data) && $data['PuntReturns'] !== null) {
            $object->setPuntReturns($data['PuntReturns']);
        }
        elseif (\array_key_exists('PuntReturns', $data) && $data['PuntReturns'] === null) {
            $object->setPuntReturns(null);
        }
        if (\array_key_exists('PuntReturnYards', $data) && $data['PuntReturnYards'] !== null) {
            $object->setPuntReturnYards($data['PuntReturnYards']);
        }
        elseif (\array_key_exists('PuntReturnYards', $data) && $data['PuntReturnYards'] === null) {
            $object->setPuntReturnYards(null);
        }
        if (\array_key_exists('PuntReturnTouchdowns', $data) && $data['PuntReturnTouchdowns'] !== null) {
            $object->setPuntReturnTouchdowns($data['PuntReturnTouchdowns']);
        }
        elseif (\array_key_exists('PuntReturnTouchdowns', $data) && $data['PuntReturnTouchdowns'] === null) {
            $object->setPuntReturnTouchdowns(null);
        }
        if (\array_key_exists('KickReturns', $data) && $data['KickReturns'] !== null) {
            $object->setKickReturns($data['KickReturns']);
        }
        elseif (\array_key_exists('KickReturns', $data) && $data['KickReturns'] === null) {
            $object->setKickReturns(null);
        }
        if (\array_key_exists('KickReturnYards', $data) && $data['KickReturnYards'] !== null) {
            $object->setKickReturnYards($data['KickReturnYards']);
        }
        elseif (\array_key_exists('KickReturnYards', $data) && $data['KickReturnYards'] === null) {
            $object->setKickReturnYards(null);
        }
        if (\array_key_exists('KickReturnTouchdowns', $data) && $data['KickReturnTouchdowns'] !== null) {
            $object->setKickReturnTouchdowns($data['KickReturnTouchdowns']);
        }
        elseif (\array_key_exists('KickReturnTouchdowns', $data) && $data['KickReturnTouchdowns'] === null) {
            $object->setKickReturnTouchdowns(null);
        }
        if (\array_key_exists('BlockedKicks', $data) && $data['BlockedKicks'] !== null) {
            $object->setBlockedKicks($data['BlockedKicks']);
        }
        elseif (\array_key_exists('BlockedKicks', $data) && $data['BlockedKicks'] === null) {
            $object->setBlockedKicks(null);
        }
        if (\array_key_exists('BlockedKickReturns', $data) && $data['BlockedKickReturns'] !== null) {
            $object->setBlockedKickReturns($data['BlockedKickReturns']);
        }
        elseif (\array_key_exists('BlockedKickReturns', $data) && $data['BlockedKickReturns'] === null) {
            $object->setBlockedKickReturns(null);
        }
        if (\array_key_exists('BlockedKickReturnYards', $data) && $data['BlockedKickReturnYards'] !== null) {
            $object->setBlockedKickReturnYards($data['BlockedKickReturnYards']);
        }
        elseif (\array_key_exists('BlockedKickReturnYards', $data) && $data['BlockedKickReturnYards'] === null) {
            $object->setBlockedKickReturnYards(null);
        }
        if (\array_key_exists('BlockedKickReturnTouchdowns', $data) && $data['BlockedKickReturnTouchdowns'] !== null) {
            $object->setBlockedKickReturnTouchdowns($data['BlockedKickReturnTouchdowns']);
        }
        elseif (\array_key_exists('BlockedKickReturnTouchdowns', $data) && $data['BlockedKickReturnTouchdowns'] === null) {
            $object->setBlockedKickReturnTouchdowns(null);
        }
        if (\array_key_exists('FieldGoalReturns', $data) && $data['FieldGoalReturns'] !== null) {
            $object->setFieldGoalReturns($data['FieldGoalReturns']);
        }
        elseif (\array_key_exists('FieldGoalReturns', $data) && $data['FieldGoalReturns'] === null) {
            $object->setFieldGoalReturns(null);
        }
        if (\array_key_exists('FieldGoalReturnYards', $data) && $data['FieldGoalReturnYards'] !== null) {
            $object->setFieldGoalReturnYards($data['FieldGoalReturnYards']);
        }
        elseif (\array_key_exists('FieldGoalReturnYards', $data) && $data['FieldGoalReturnYards'] === null) {
            $object->setFieldGoalReturnYards(null);
        }
        if (\array_key_exists('FieldGoalReturnTouchdowns', $data) && $data['FieldGoalReturnTouchdowns'] !== null) {
            $object->setFieldGoalReturnTouchdowns($data['FieldGoalReturnTouchdowns']);
        }
        elseif (\array_key_exists('FieldGoalReturnTouchdowns', $data) && $data['FieldGoalReturnTouchdowns'] === null) {
            $object->setFieldGoalReturnTouchdowns(null);
        }
        if (\array_key_exists('Kickoffs', $data) && $data['Kickoffs'] !== null) {
            $object->setKickoffs($data['Kickoffs']);
        }
        elseif (\array_key_exists('Kickoffs', $data) && $data['Kickoffs'] === null) {
            $object->setKickoffs(null);
        }
        if (\array_key_exists('KickoffYards', $data) && $data['KickoffYards'] !== null) {
            $object->setKickoffYards($data['KickoffYards']);
        }
        elseif (\array_key_exists('KickoffYards', $data) && $data['KickoffYards'] === null) {
            $object->setKickoffYards(null);
        }
        if (\array_key_exists('KickoffTouchbacks', $data) && $data['KickoffTouchbacks'] !== null) {
            $object->setKickoffTouchbacks($data['KickoffTouchbacks']);
        }
        elseif (\array_key_exists('KickoffTouchbacks', $data) && $data['KickoffTouchbacks'] === null) {
            $object->setKickoffTouchbacks(null);
        }
        if (\array_key_exists('Punts', $data) && $data['Punts'] !== null) {
            $object->setPunts($data['Punts']);
        }
        elseif (\array_key_exists('Punts', $data) && $data['Punts'] === null) {
            $object->setPunts(null);
        }
        if (\array_key_exists('PuntYards', $data) && $data['PuntYards'] !== null) {
            $object->setPuntYards($data['PuntYards']);
        }
        elseif (\array_key_exists('PuntYards', $data) && $data['PuntYards'] === null) {
            $object->setPuntYards(null);
        }
        if (\array_key_exists('PuntTouchbacks', $data) && $data['PuntTouchbacks'] !== null) {
            $object->setPuntTouchbacks($data['PuntTouchbacks']);
        }
        elseif (\array_key_exists('PuntTouchbacks', $data) && $data['PuntTouchbacks'] === null) {
            $object->setPuntTouchbacks(null);
        }
        if (\array_key_exists('PuntsHadBlocked', $data) && $data['PuntsHadBlocked'] !== null) {
            $object->setPuntsHadBlocked($data['PuntsHadBlocked']);
        }
        elseif (\array_key_exists('PuntsHadBlocked', $data) && $data['PuntsHadBlocked'] === null) {
            $object->setPuntsHadBlocked(null);
        }
        if (\array_key_exists('FieldGoalsAttempted', $data) && $data['FieldGoalsAttempted'] !== null) {
            $object->setFieldGoalsAttempted($data['FieldGoalsAttempted']);
        }
        elseif (\array_key_exists('FieldGoalsAttempted', $data) && $data['FieldGoalsAttempted'] === null) {
            $object->setFieldGoalsAttempted(null);
        }
        if (\array_key_exists('FieldGoalsMade', $data) && $data['FieldGoalsMade'] !== null) {
            $object->setFieldGoalsMade($data['FieldGoalsMade']);
        }
        elseif (\array_key_exists('FieldGoalsMade', $data) && $data['FieldGoalsMade'] === null) {
            $object->setFieldGoalsMade(null);
        }
        if (\array_key_exists('FieldGoalsYards', $data) && $data['FieldGoalsYards'] !== null) {
            $object->setFieldGoalsYards($data['FieldGoalsYards']);
        }
        elseif (\array_key_exists('FieldGoalsYards', $data) && $data['FieldGoalsYards'] === null) {
            $object->setFieldGoalsYards(null);
        }
        if (\array_key_exists('FieldGoalsHadBlocked', $data) && $data['FieldGoalsHadBlocked'] !== null) {
            $object->setFieldGoalsHadBlocked($data['FieldGoalsHadBlocked']);
        }
        elseif (\array_key_exists('FieldGoalsHadBlocked', $data) && $data['FieldGoalsHadBlocked'] === null) {
            $object->setFieldGoalsHadBlocked(null);
        }
        if (\array_key_exists('ExtraPointsAttempted', $data) && $data['ExtraPointsAttempted'] !== null) {
            $object->setExtraPointsAttempted($data['ExtraPointsAttempted']);
        }
        elseif (\array_key_exists('ExtraPointsAttempted', $data) && $data['ExtraPointsAttempted'] === null) {
            $object->setExtraPointsAttempted(null);
        }
        if (\array_key_exists('ExtraPointsMade', $data) && $data['ExtraPointsMade'] !== null) {
            $object->setExtraPointsMade($data['ExtraPointsMade']);
        }
        elseif (\array_key_exists('ExtraPointsMade', $data) && $data['ExtraPointsMade'] === null) {
            $object->setExtraPointsMade(null);
        }
        if (\array_key_exists('ExtraPointsHadBlocked', $data) && $data['ExtraPointsHadBlocked'] !== null) {
            $object->setExtraPointsHadBlocked($data['ExtraPointsHadBlocked']);
        }
        elseif (\array_key_exists('ExtraPointsHadBlocked', $data) && $data['ExtraPointsHadBlocked'] === null) {
            $object->setExtraPointsHadBlocked(null);
        }
        if (\array_key_exists('Penalties', $data) && $data['Penalties'] !== null) {
            $object->setPenalties($data['Penalties']);
        }
        elseif (\array_key_exists('Penalties', $data) && $data['Penalties'] === null) {
            $object->setPenalties(null);
        }
        if (\array_key_exists('PenaltyYards', $data) && $data['PenaltyYards'] !== null) {
            $object->setPenaltyYards($data['PenaltyYards']);
        }
        elseif (\array_key_exists('PenaltyYards', $data) && $data['PenaltyYards'] === null) {
            $object->setPenaltyYards(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayStatID()) {
            $data['PlayStatID'] = $object->getPlayStatID();
        }
        if (null !== $object->getPlayID()) {
            $data['PlayID'] = $object->getPlayID();
        }
        if (null !== $object->getSequence()) {
            $data['Sequence'] = $object->getSequence();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getOpponent()) {
            $data['Opponent'] = $object->getOpponent();
        }
        if (null !== $object->getHomeOrAway()) {
            $data['HomeOrAway'] = $object->getHomeOrAway();
        }
        if (null !== $object->getDirection()) {
            $data['Direction'] = $object->getDirection();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if (null !== $object->getPassingAttempts()) {
            $data['PassingAttempts'] = $object->getPassingAttempts();
        }
        if (null !== $object->getPassingCompletions()) {
            $data['PassingCompletions'] = $object->getPassingCompletions();
        }
        if (null !== $object->getPassingYards()) {
            $data['PassingYards'] = $object->getPassingYards();
        }
        if (null !== $object->getPassingTouchdowns()) {
            $data['PassingTouchdowns'] = $object->getPassingTouchdowns();
        }
        if (null !== $object->getPassingInterceptions()) {
            $data['PassingInterceptions'] = $object->getPassingInterceptions();
        }
        if (null !== $object->getPassingSacks()) {
            $data['PassingSacks'] = $object->getPassingSacks();
        }
        if (null !== $object->getPassingSackYards()) {
            $data['PassingSackYards'] = $object->getPassingSackYards();
        }
        if (null !== $object->getRushingAttempts()) {
            $data['RushingAttempts'] = $object->getRushingAttempts();
        }
        if (null !== $object->getRushingYards()) {
            $data['RushingYards'] = $object->getRushingYards();
        }
        if (null !== $object->getRushingTouchdowns()) {
            $data['RushingTouchdowns'] = $object->getRushingTouchdowns();
        }
        if (null !== $object->getReceivingTargets()) {
            $data['ReceivingTargets'] = $object->getReceivingTargets();
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
        if (null !== $object->getFumbles()) {
            $data['Fumbles'] = $object->getFumbles();
        }
        if (null !== $object->getFumblesLost()) {
            $data['FumblesLost'] = $object->getFumblesLost();
        }
        if (null !== $object->getTwoPointConversionAttempts()) {
            $data['TwoPointConversionAttempts'] = $object->getTwoPointConversionAttempts();
        }
        if (null !== $object->getTwoPointConversionPasses()) {
            $data['TwoPointConversionPasses'] = $object->getTwoPointConversionPasses();
        }
        if (null !== $object->getTwoPointConversionRuns()) {
            $data['TwoPointConversionRuns'] = $object->getTwoPointConversionRuns();
        }
        if (null !== $object->getTwoPointConversionReceptions()) {
            $data['TwoPointConversionReceptions'] = $object->getTwoPointConversionReceptions();
        }
        if (null !== $object->getTwoPointConversionReturns()) {
            $data['TwoPointConversionReturns'] = $object->getTwoPointConversionReturns();
        }
        if (null !== $object->getSoloTackles()) {
            $data['SoloTackles'] = $object->getSoloTackles();
        }
        if (null !== $object->getAssistedTackles()) {
            $data['AssistedTackles'] = $object->getAssistedTackles();
        }
        if (null !== $object->getTacklesForLoss()) {
            $data['TacklesForLoss'] = $object->getTacklesForLoss();
        }
        if (null !== $object->getSacks()) {
            $data['Sacks'] = $object->getSacks();
        }
        if (null !== $object->getSackYards()) {
            $data['SackYards'] = $object->getSackYards();
        }
        if (null !== $object->getPassesDefended()) {
            $data['PassesDefended'] = $object->getPassesDefended();
        }
        if (null !== $object->getSafeties()) {
            $data['Safeties'] = $object->getSafeties();
        }
        if (null !== $object->getFumblesForced()) {
            $data['FumblesForced'] = $object->getFumblesForced();
        }
        if (null !== $object->getFumblesRecovered()) {
            $data['FumblesRecovered'] = $object->getFumblesRecovered();
        }
        if (null !== $object->getFumbleReturnYards()) {
            $data['FumbleReturnYards'] = $object->getFumbleReturnYards();
        }
        if (null !== $object->getFumbleReturnTouchdowns()) {
            $data['FumbleReturnTouchdowns'] = $object->getFumbleReturnTouchdowns();
        }
        if (null !== $object->getInterceptions()) {
            $data['Interceptions'] = $object->getInterceptions();
        }
        if (null !== $object->getInterceptionReturnYards()) {
            $data['InterceptionReturnYards'] = $object->getInterceptionReturnYards();
        }
        if (null !== $object->getInterceptionReturnTouchdowns()) {
            $data['InterceptionReturnTouchdowns'] = $object->getInterceptionReturnTouchdowns();
        }
        if (null !== $object->getPuntReturns()) {
            $data['PuntReturns'] = $object->getPuntReturns();
        }
        if (null !== $object->getPuntReturnYards()) {
            $data['PuntReturnYards'] = $object->getPuntReturnYards();
        }
        if (null !== $object->getPuntReturnTouchdowns()) {
            $data['PuntReturnTouchdowns'] = $object->getPuntReturnTouchdowns();
        }
        if (null !== $object->getKickReturns()) {
            $data['KickReturns'] = $object->getKickReturns();
        }
        if (null !== $object->getKickReturnYards()) {
            $data['KickReturnYards'] = $object->getKickReturnYards();
        }
        if (null !== $object->getKickReturnTouchdowns()) {
            $data['KickReturnTouchdowns'] = $object->getKickReturnTouchdowns();
        }
        if (null !== $object->getBlockedKicks()) {
            $data['BlockedKicks'] = $object->getBlockedKicks();
        }
        if (null !== $object->getBlockedKickReturns()) {
            $data['BlockedKickReturns'] = $object->getBlockedKickReturns();
        }
        if (null !== $object->getBlockedKickReturnYards()) {
            $data['BlockedKickReturnYards'] = $object->getBlockedKickReturnYards();
        }
        if (null !== $object->getBlockedKickReturnTouchdowns()) {
            $data['BlockedKickReturnTouchdowns'] = $object->getBlockedKickReturnTouchdowns();
        }
        if (null !== $object->getFieldGoalReturns()) {
            $data['FieldGoalReturns'] = $object->getFieldGoalReturns();
        }
        if (null !== $object->getFieldGoalReturnYards()) {
            $data['FieldGoalReturnYards'] = $object->getFieldGoalReturnYards();
        }
        if (null !== $object->getFieldGoalReturnTouchdowns()) {
            $data['FieldGoalReturnTouchdowns'] = $object->getFieldGoalReturnTouchdowns();
        }
        if (null !== $object->getKickoffs()) {
            $data['Kickoffs'] = $object->getKickoffs();
        }
        if (null !== $object->getKickoffYards()) {
            $data['KickoffYards'] = $object->getKickoffYards();
        }
        if (null !== $object->getKickoffTouchbacks()) {
            $data['KickoffTouchbacks'] = $object->getKickoffTouchbacks();
        }
        if (null !== $object->getPunts()) {
            $data['Punts'] = $object->getPunts();
        }
        if (null !== $object->getPuntYards()) {
            $data['PuntYards'] = $object->getPuntYards();
        }
        if (null !== $object->getPuntTouchbacks()) {
            $data['PuntTouchbacks'] = $object->getPuntTouchbacks();
        }
        if (null !== $object->getPuntsHadBlocked()) {
            $data['PuntsHadBlocked'] = $object->getPuntsHadBlocked();
        }
        if (null !== $object->getFieldGoalsAttempted()) {
            $data['FieldGoalsAttempted'] = $object->getFieldGoalsAttempted();
        }
        if (null !== $object->getFieldGoalsMade()) {
            $data['FieldGoalsMade'] = $object->getFieldGoalsMade();
        }
        if (null !== $object->getFieldGoalsYards()) {
            $data['FieldGoalsYards'] = $object->getFieldGoalsYards();
        }
        if (null !== $object->getFieldGoalsHadBlocked()) {
            $data['FieldGoalsHadBlocked'] = $object->getFieldGoalsHadBlocked();
        }
        if (null !== $object->getExtraPointsAttempted()) {
            $data['ExtraPointsAttempted'] = $object->getExtraPointsAttempted();
        }
        if (null !== $object->getExtraPointsMade()) {
            $data['ExtraPointsMade'] = $object->getExtraPointsMade();
        }
        if (null !== $object->getExtraPointsHadBlocked()) {
            $data['ExtraPointsHadBlocked'] = $object->getExtraPointsHadBlocked();
        }
        if (null !== $object->getPenalties()) {
            $data['Penalties'] = $object->getPenalties();
        }
        if (null !== $object->getPenaltyYards()) {
            $data['PenaltyYards'] = $object->getPenaltyYards();
        }
        return $data;
    }
}