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
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Team', $data)) {
            $object->setTeam($data['Team']);
        }
        if (\array_key_exists('Opponent', $data)) {
            $object->setOpponent($data['Opponent']);
        }
        if (\array_key_exists('HomeOrAway', $data)) {
            $object->setHomeOrAway($data['HomeOrAway']);
        }
        if (\array_key_exists('Direction', $data)) {
            $object->setDirection($data['Direction']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('Created', $data)) {
            $object->setCreated($data['Created']);
        }
        if (\array_key_exists('PassingAttempts', $data)) {
            $object->setPassingAttempts($data['PassingAttempts']);
        }
        if (\array_key_exists('PassingCompletions', $data)) {
            $object->setPassingCompletions($data['PassingCompletions']);
        }
        if (\array_key_exists('PassingYards', $data)) {
            $object->setPassingYards($data['PassingYards']);
        }
        if (\array_key_exists('PassingTouchdowns', $data)) {
            $object->setPassingTouchdowns($data['PassingTouchdowns']);
        }
        if (\array_key_exists('PassingInterceptions', $data)) {
            $object->setPassingInterceptions($data['PassingInterceptions']);
        }
        if (\array_key_exists('PassingSacks', $data)) {
            $object->setPassingSacks($data['PassingSacks']);
        }
        if (\array_key_exists('PassingSackYards', $data)) {
            $object->setPassingSackYards($data['PassingSackYards']);
        }
        if (\array_key_exists('RushingAttempts', $data)) {
            $object->setRushingAttempts($data['RushingAttempts']);
        }
        if (\array_key_exists('RushingYards', $data)) {
            $object->setRushingYards($data['RushingYards']);
        }
        if (\array_key_exists('RushingTouchdowns', $data)) {
            $object->setRushingTouchdowns($data['RushingTouchdowns']);
        }
        if (\array_key_exists('ReceivingTargets', $data)) {
            $object->setReceivingTargets($data['ReceivingTargets']);
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
        if (\array_key_exists('Fumbles', $data)) {
            $object->setFumbles($data['Fumbles']);
        }
        if (\array_key_exists('FumblesLost', $data)) {
            $object->setFumblesLost($data['FumblesLost']);
        }
        if (\array_key_exists('TwoPointConversionAttempts', $data)) {
            $object->setTwoPointConversionAttempts($data['TwoPointConversionAttempts']);
        }
        if (\array_key_exists('TwoPointConversionPasses', $data)) {
            $object->setTwoPointConversionPasses($data['TwoPointConversionPasses']);
        }
        if (\array_key_exists('TwoPointConversionRuns', $data)) {
            $object->setTwoPointConversionRuns($data['TwoPointConversionRuns']);
        }
        if (\array_key_exists('TwoPointConversionReceptions', $data)) {
            $object->setTwoPointConversionReceptions($data['TwoPointConversionReceptions']);
        }
        if (\array_key_exists('TwoPointConversionReturns', $data)) {
            $object->setTwoPointConversionReturns($data['TwoPointConversionReturns']);
        }
        if (\array_key_exists('SoloTackles', $data)) {
            $object->setSoloTackles($data['SoloTackles']);
        }
        if (\array_key_exists('AssistedTackles', $data)) {
            $object->setAssistedTackles($data['AssistedTackles']);
        }
        if (\array_key_exists('TacklesForLoss', $data)) {
            $object->setTacklesForLoss($data['TacklesForLoss']);
        }
        if (\array_key_exists('Sacks', $data)) {
            $object->setSacks($data['Sacks']);
        }
        if (\array_key_exists('SackYards', $data)) {
            $object->setSackYards($data['SackYards']);
        }
        if (\array_key_exists('PassesDefended', $data)) {
            $object->setPassesDefended($data['PassesDefended']);
        }
        if (\array_key_exists('Safeties', $data)) {
            $object->setSafeties($data['Safeties']);
        }
        if (\array_key_exists('FumblesForced', $data)) {
            $object->setFumblesForced($data['FumblesForced']);
        }
        if (\array_key_exists('FumblesRecovered', $data)) {
            $object->setFumblesRecovered($data['FumblesRecovered']);
        }
        if (\array_key_exists('FumbleReturnYards', $data)) {
            $object->setFumbleReturnYards($data['FumbleReturnYards']);
        }
        if (\array_key_exists('FumbleReturnTouchdowns', $data)) {
            $object->setFumbleReturnTouchdowns($data['FumbleReturnTouchdowns']);
        }
        if (\array_key_exists('Interceptions', $data)) {
            $object->setInterceptions($data['Interceptions']);
        }
        if (\array_key_exists('InterceptionReturnYards', $data)) {
            $object->setInterceptionReturnYards($data['InterceptionReturnYards']);
        }
        if (\array_key_exists('InterceptionReturnTouchdowns', $data)) {
            $object->setInterceptionReturnTouchdowns($data['InterceptionReturnTouchdowns']);
        }
        if (\array_key_exists('PuntReturns', $data)) {
            $object->setPuntReturns($data['PuntReturns']);
        }
        if (\array_key_exists('PuntReturnYards', $data)) {
            $object->setPuntReturnYards($data['PuntReturnYards']);
        }
        if (\array_key_exists('PuntReturnTouchdowns', $data)) {
            $object->setPuntReturnTouchdowns($data['PuntReturnTouchdowns']);
        }
        if (\array_key_exists('KickReturns', $data)) {
            $object->setKickReturns($data['KickReturns']);
        }
        if (\array_key_exists('KickReturnYards', $data)) {
            $object->setKickReturnYards($data['KickReturnYards']);
        }
        if (\array_key_exists('KickReturnTouchdowns', $data)) {
            $object->setKickReturnTouchdowns($data['KickReturnTouchdowns']);
        }
        if (\array_key_exists('BlockedKicks', $data)) {
            $object->setBlockedKicks($data['BlockedKicks']);
        }
        if (\array_key_exists('BlockedKickReturns', $data)) {
            $object->setBlockedKickReturns($data['BlockedKickReturns']);
        }
        if (\array_key_exists('BlockedKickReturnYards', $data)) {
            $object->setBlockedKickReturnYards($data['BlockedKickReturnYards']);
        }
        if (\array_key_exists('BlockedKickReturnTouchdowns', $data)) {
            $object->setBlockedKickReturnTouchdowns($data['BlockedKickReturnTouchdowns']);
        }
        if (\array_key_exists('FieldGoalReturns', $data)) {
            $object->setFieldGoalReturns($data['FieldGoalReturns']);
        }
        if (\array_key_exists('FieldGoalReturnYards', $data)) {
            $object->setFieldGoalReturnYards($data['FieldGoalReturnYards']);
        }
        if (\array_key_exists('FieldGoalReturnTouchdowns', $data)) {
            $object->setFieldGoalReturnTouchdowns($data['FieldGoalReturnTouchdowns']);
        }
        if (\array_key_exists('Kickoffs', $data)) {
            $object->setKickoffs($data['Kickoffs']);
        }
        if (\array_key_exists('KickoffYards', $data)) {
            $object->setKickoffYards($data['KickoffYards']);
        }
        if (\array_key_exists('KickoffTouchbacks', $data)) {
            $object->setKickoffTouchbacks($data['KickoffTouchbacks']);
        }
        if (\array_key_exists('Punts', $data)) {
            $object->setPunts($data['Punts']);
        }
        if (\array_key_exists('PuntYards', $data)) {
            $object->setPuntYards($data['PuntYards']);
        }
        if (\array_key_exists('PuntTouchbacks', $data)) {
            $object->setPuntTouchbacks($data['PuntTouchbacks']);
        }
        if (\array_key_exists('PuntsHadBlocked', $data)) {
            $object->setPuntsHadBlocked($data['PuntsHadBlocked']);
        }
        if (\array_key_exists('FieldGoalsAttempted', $data)) {
            $object->setFieldGoalsAttempted($data['FieldGoalsAttempted']);
        }
        if (\array_key_exists('FieldGoalsMade', $data)) {
            $object->setFieldGoalsMade($data['FieldGoalsMade']);
        }
        if (\array_key_exists('FieldGoalsYards', $data)) {
            $object->setFieldGoalsYards($data['FieldGoalsYards']);
        }
        if (\array_key_exists('FieldGoalsHadBlocked', $data)) {
            $object->setFieldGoalsHadBlocked($data['FieldGoalsHadBlocked']);
        }
        if (\array_key_exists('ExtraPointsAttempted', $data)) {
            $object->setExtraPointsAttempted($data['ExtraPointsAttempted']);
        }
        if (\array_key_exists('ExtraPointsMade', $data)) {
            $object->setExtraPointsMade($data['ExtraPointsMade']);
        }
        if (\array_key_exists('ExtraPointsHadBlocked', $data)) {
            $object->setExtraPointsHadBlocked($data['ExtraPointsHadBlocked']);
        }
        if (\array_key_exists('Penalties', $data)) {
            $object->setPenalties($data['Penalties']);
        }
        if (\array_key_exists('PenaltyYards', $data)) {
            $object->setPenaltyYards($data['PenaltyYards']);
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