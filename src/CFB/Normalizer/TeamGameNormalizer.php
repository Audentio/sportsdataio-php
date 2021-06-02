<?php

namespace Sportsdata\API\CFB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CFB\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\CFB\\Model\\TeamGame';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CFB\\Model\\TeamGame';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CFB\Model\TeamGame();
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
        if (\array_key_exists('Score', $data)) {
            $object->setScore($data['Score']);
        }
        if (\array_key_exists('OpponentScore', $data)) {
            $object->setOpponentScore($data['OpponentScore']);
        }
        if (\array_key_exists('FirstDowns', $data)) {
            $object->setFirstDowns($data['FirstDowns']);
        }
        if (\array_key_exists('ThirdDownConversions', $data)) {
            $object->setThirdDownConversions($data['ThirdDownConversions']);
        }
        if (\array_key_exists('ThirdDownAttempts', $data)) {
            $object->setThirdDownAttempts($data['ThirdDownAttempts']);
        }
        if (\array_key_exists('FourthDownConversions', $data)) {
            $object->setFourthDownConversions($data['FourthDownConversions']);
        }
        if (\array_key_exists('FourthDownAttempts', $data)) {
            $object->setFourthDownAttempts($data['FourthDownAttempts']);
        }
        if (\array_key_exists('Penalties', $data)) {
            $object->setPenalties($data['Penalties']);
        }
        if (\array_key_exists('PenaltyYards', $data)) {
            $object->setPenaltyYards($data['PenaltyYards']);
        }
        if (\array_key_exists('TimeOfPossessionMinutes', $data)) {
            $object->setTimeOfPossessionMinutes($data['TimeOfPossessionMinutes']);
        }
        if (\array_key_exists('TimeOfPossessionSeconds', $data)) {
            $object->setTimeOfPossessionSeconds($data['TimeOfPossessionSeconds']);
        }
        if (\array_key_exists('GlobalTeamID', $data)) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        if (\array_key_exists('Week', $data)) {
            $object->setWeek($data['Week']);
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
        if (\array_key_exists('Created', $data)) {
            $object->setCreated($data['Created']);
        }
        if (\array_key_exists('Games', $data)) {
            $object->setGames($data['Games']);
        }
        if (\array_key_exists('FantasyPoints', $data)) {
            $object->setFantasyPoints($data['FantasyPoints']);
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
        if (\array_key_exists('PassingCompletionPercentage', $data)) {
            $object->setPassingCompletionPercentage($data['PassingCompletionPercentage']);
        }
        if (\array_key_exists('PassingYardsPerAttempt', $data)) {
            $object->setPassingYardsPerAttempt($data['PassingYardsPerAttempt']);
        }
        if (\array_key_exists('PassingYardsPerCompletion', $data)) {
            $object->setPassingYardsPerCompletion($data['PassingYardsPerCompletion']);
        }
        if (\array_key_exists('PassingTouchdowns', $data)) {
            $object->setPassingTouchdowns($data['PassingTouchdowns']);
        }
        if (\array_key_exists('PassingInterceptions', $data)) {
            $object->setPassingInterceptions($data['PassingInterceptions']);
        }
        if (\array_key_exists('PassingRating', $data)) {
            $object->setPassingRating($data['PassingRating']);
        }
        if (\array_key_exists('RushingAttempts', $data)) {
            $object->setRushingAttempts($data['RushingAttempts']);
        }
        if (\array_key_exists('RushingYards', $data)) {
            $object->setRushingYards($data['RushingYards']);
        }
        if (\array_key_exists('RushingYardsPerAttempt', $data)) {
            $object->setRushingYardsPerAttempt($data['RushingYardsPerAttempt']);
        }
        if (\array_key_exists('RushingTouchdowns', $data)) {
            $object->setRushingTouchdowns($data['RushingTouchdowns']);
        }
        if (\array_key_exists('RushingLong', $data)) {
            $object->setRushingLong($data['RushingLong']);
        }
        if (\array_key_exists('Receptions', $data)) {
            $object->setReceptions($data['Receptions']);
        }
        if (\array_key_exists('ReceivingYards', $data)) {
            $object->setReceivingYards($data['ReceivingYards']);
        }
        if (\array_key_exists('ReceivingYardsPerReception', $data)) {
            $object->setReceivingYardsPerReception($data['ReceivingYardsPerReception']);
        }
        if (\array_key_exists('ReceivingTouchdowns', $data)) {
            $object->setReceivingTouchdowns($data['ReceivingTouchdowns']);
        }
        if (\array_key_exists('ReceivingLong', $data)) {
            $object->setReceivingLong($data['ReceivingLong']);
        }
        if (\array_key_exists('PuntReturns', $data)) {
            $object->setPuntReturns($data['PuntReturns']);
        }
        if (\array_key_exists('PuntReturnYards', $data)) {
            $object->setPuntReturnYards($data['PuntReturnYards']);
        }
        if (\array_key_exists('PuntReturnYardsPerAttempt', $data)) {
            $object->setPuntReturnYardsPerAttempt($data['PuntReturnYardsPerAttempt']);
        }
        if (\array_key_exists('PuntReturnTouchdowns', $data)) {
            $object->setPuntReturnTouchdowns($data['PuntReturnTouchdowns']);
        }
        if (\array_key_exists('PuntReturnLong', $data)) {
            $object->setPuntReturnLong($data['PuntReturnLong']);
        }
        if (\array_key_exists('KickReturns', $data)) {
            $object->setKickReturns($data['KickReturns']);
        }
        if (\array_key_exists('KickReturnYards', $data)) {
            $object->setKickReturnYards($data['KickReturnYards']);
        }
        if (\array_key_exists('KickReturnYardsPerAttempt', $data)) {
            $object->setKickReturnYardsPerAttempt($data['KickReturnYardsPerAttempt']);
        }
        if (\array_key_exists('KickReturnTouchdowns', $data)) {
            $object->setKickReturnTouchdowns($data['KickReturnTouchdowns']);
        }
        if (\array_key_exists('KickReturnLong', $data)) {
            $object->setKickReturnLong($data['KickReturnLong']);
        }
        if (\array_key_exists('Punts', $data)) {
            $object->setPunts($data['Punts']);
        }
        if (\array_key_exists('PuntYards', $data)) {
            $object->setPuntYards($data['PuntYards']);
        }
        if (\array_key_exists('PuntAverage', $data)) {
            $object->setPuntAverage($data['PuntAverage']);
        }
        if (\array_key_exists('PuntLong', $data)) {
            $object->setPuntLong($data['PuntLong']);
        }
        if (\array_key_exists('FieldGoalsAttempted', $data)) {
            $object->setFieldGoalsAttempted($data['FieldGoalsAttempted']);
        }
        if (\array_key_exists('FieldGoalsMade', $data)) {
            $object->setFieldGoalsMade($data['FieldGoalsMade']);
        }
        if (\array_key_exists('FieldGoalPercentage', $data)) {
            $object->setFieldGoalPercentage($data['FieldGoalPercentage']);
        }
        if (\array_key_exists('FieldGoalsLongestMade', $data)) {
            $object->setFieldGoalsLongestMade($data['FieldGoalsLongestMade']);
        }
        if (\array_key_exists('ExtraPointsAttempted', $data)) {
            $object->setExtraPointsAttempted($data['ExtraPointsAttempted']);
        }
        if (\array_key_exists('ExtraPointsMade', $data)) {
            $object->setExtraPointsMade($data['ExtraPointsMade']);
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
        if (\array_key_exists('PassesDefended', $data)) {
            $object->setPassesDefended($data['PassesDefended']);
        }
        if (\array_key_exists('FumblesRecovered', $data)) {
            $object->setFumblesRecovered($data['FumblesRecovered']);
        }
        if (\array_key_exists('FumbleReturnTouchdowns', $data)) {
            $object->setFumbleReturnTouchdowns($data['FumbleReturnTouchdowns']);
        }
        if (\array_key_exists('QuarterbackHurries', $data)) {
            $object->setQuarterbackHurries($data['QuarterbackHurries']);
        }
        if (\array_key_exists('Fumbles', $data)) {
            $object->setFumbles($data['Fumbles']);
        }
        if (\array_key_exists('FumblesLost', $data)) {
            $object->setFumblesLost($data['FumblesLost']);
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
        if (null !== $object->getScore()) {
            $data['Score'] = $object->getScore();
        }
        if (null !== $object->getOpponentScore()) {
            $data['OpponentScore'] = $object->getOpponentScore();
        }
        if (null !== $object->getFirstDowns()) {
            $data['FirstDowns'] = $object->getFirstDowns();
        }
        if (null !== $object->getThirdDownConversions()) {
            $data['ThirdDownConversions'] = $object->getThirdDownConversions();
        }
        if (null !== $object->getThirdDownAttempts()) {
            $data['ThirdDownAttempts'] = $object->getThirdDownAttempts();
        }
        if (null !== $object->getFourthDownConversions()) {
            $data['FourthDownConversions'] = $object->getFourthDownConversions();
        }
        if (null !== $object->getFourthDownAttempts()) {
            $data['FourthDownAttempts'] = $object->getFourthDownAttempts();
        }
        if (null !== $object->getPenalties()) {
            $data['Penalties'] = $object->getPenalties();
        }
        if (null !== $object->getPenaltyYards()) {
            $data['PenaltyYards'] = $object->getPenaltyYards();
        }
        if (null !== $object->getTimeOfPossessionMinutes()) {
            $data['TimeOfPossessionMinutes'] = $object->getTimeOfPossessionMinutes();
        }
        if (null !== $object->getTimeOfPossessionSeconds()) {
            $data['TimeOfPossessionSeconds'] = $object->getTimeOfPossessionSeconds();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        if (null !== $object->getWeek()) {
            $data['Week'] = $object->getWeek();
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
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if (null !== $object->getGames()) {
            $data['Games'] = $object->getGames();
        }
        if (null !== $object->getFantasyPoints()) {
            $data['FantasyPoints'] = $object->getFantasyPoints();
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
        if (null !== $object->getPassingCompletionPercentage()) {
            $data['PassingCompletionPercentage'] = $object->getPassingCompletionPercentage();
        }
        if (null !== $object->getPassingYardsPerAttempt()) {
            $data['PassingYardsPerAttempt'] = $object->getPassingYardsPerAttempt();
        }
        if (null !== $object->getPassingYardsPerCompletion()) {
            $data['PassingYardsPerCompletion'] = $object->getPassingYardsPerCompletion();
        }
        if (null !== $object->getPassingTouchdowns()) {
            $data['PassingTouchdowns'] = $object->getPassingTouchdowns();
        }
        if (null !== $object->getPassingInterceptions()) {
            $data['PassingInterceptions'] = $object->getPassingInterceptions();
        }
        if (null !== $object->getPassingRating()) {
            $data['PassingRating'] = $object->getPassingRating();
        }
        if (null !== $object->getRushingAttempts()) {
            $data['RushingAttempts'] = $object->getRushingAttempts();
        }
        if (null !== $object->getRushingYards()) {
            $data['RushingYards'] = $object->getRushingYards();
        }
        if (null !== $object->getRushingYardsPerAttempt()) {
            $data['RushingYardsPerAttempt'] = $object->getRushingYardsPerAttempt();
        }
        if (null !== $object->getRushingTouchdowns()) {
            $data['RushingTouchdowns'] = $object->getRushingTouchdowns();
        }
        if (null !== $object->getRushingLong()) {
            $data['RushingLong'] = $object->getRushingLong();
        }
        if (null !== $object->getReceptions()) {
            $data['Receptions'] = $object->getReceptions();
        }
        if (null !== $object->getReceivingYards()) {
            $data['ReceivingYards'] = $object->getReceivingYards();
        }
        if (null !== $object->getReceivingYardsPerReception()) {
            $data['ReceivingYardsPerReception'] = $object->getReceivingYardsPerReception();
        }
        if (null !== $object->getReceivingTouchdowns()) {
            $data['ReceivingTouchdowns'] = $object->getReceivingTouchdowns();
        }
        if (null !== $object->getReceivingLong()) {
            $data['ReceivingLong'] = $object->getReceivingLong();
        }
        if (null !== $object->getPuntReturns()) {
            $data['PuntReturns'] = $object->getPuntReturns();
        }
        if (null !== $object->getPuntReturnYards()) {
            $data['PuntReturnYards'] = $object->getPuntReturnYards();
        }
        if (null !== $object->getPuntReturnYardsPerAttempt()) {
            $data['PuntReturnYardsPerAttempt'] = $object->getPuntReturnYardsPerAttempt();
        }
        if (null !== $object->getPuntReturnTouchdowns()) {
            $data['PuntReturnTouchdowns'] = $object->getPuntReturnTouchdowns();
        }
        if (null !== $object->getPuntReturnLong()) {
            $data['PuntReturnLong'] = $object->getPuntReturnLong();
        }
        if (null !== $object->getKickReturns()) {
            $data['KickReturns'] = $object->getKickReturns();
        }
        if (null !== $object->getKickReturnYards()) {
            $data['KickReturnYards'] = $object->getKickReturnYards();
        }
        if (null !== $object->getKickReturnYardsPerAttempt()) {
            $data['KickReturnYardsPerAttempt'] = $object->getKickReturnYardsPerAttempt();
        }
        if (null !== $object->getKickReturnTouchdowns()) {
            $data['KickReturnTouchdowns'] = $object->getKickReturnTouchdowns();
        }
        if (null !== $object->getKickReturnLong()) {
            $data['KickReturnLong'] = $object->getKickReturnLong();
        }
        if (null !== $object->getPunts()) {
            $data['Punts'] = $object->getPunts();
        }
        if (null !== $object->getPuntYards()) {
            $data['PuntYards'] = $object->getPuntYards();
        }
        if (null !== $object->getPuntAverage()) {
            $data['PuntAverage'] = $object->getPuntAverage();
        }
        if (null !== $object->getPuntLong()) {
            $data['PuntLong'] = $object->getPuntLong();
        }
        if (null !== $object->getFieldGoalsAttempted()) {
            $data['FieldGoalsAttempted'] = $object->getFieldGoalsAttempted();
        }
        if (null !== $object->getFieldGoalsMade()) {
            $data['FieldGoalsMade'] = $object->getFieldGoalsMade();
        }
        if (null !== $object->getFieldGoalPercentage()) {
            $data['FieldGoalPercentage'] = $object->getFieldGoalPercentage();
        }
        if (null !== $object->getFieldGoalsLongestMade()) {
            $data['FieldGoalsLongestMade'] = $object->getFieldGoalsLongestMade();
        }
        if (null !== $object->getExtraPointsAttempted()) {
            $data['ExtraPointsAttempted'] = $object->getExtraPointsAttempted();
        }
        if (null !== $object->getExtraPointsMade()) {
            $data['ExtraPointsMade'] = $object->getExtraPointsMade();
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
        if (null !== $object->getPassesDefended()) {
            $data['PassesDefended'] = $object->getPassesDefended();
        }
        if (null !== $object->getFumblesRecovered()) {
            $data['FumblesRecovered'] = $object->getFumblesRecovered();
        }
        if (null !== $object->getFumbleReturnTouchdowns()) {
            $data['FumbleReturnTouchdowns'] = $object->getFumbleReturnTouchdowns();
        }
        if (null !== $object->getQuarterbackHurries()) {
            $data['QuarterbackHurries'] = $object->getQuarterbackHurries();
        }
        if (null !== $object->getFumbles()) {
            $data['Fumbles'] = $object->getFumbles();
        }
        if (null !== $object->getFumblesLost()) {
            $data['FumblesLost'] = $object->getFumblesLost();
        }
        return $data;
    }
}