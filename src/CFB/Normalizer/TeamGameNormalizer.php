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
        if (\array_key_exists('Score', $data) && $data['Score'] !== null) {
            $object->setScore($data['Score']);
        }
        elseif (\array_key_exists('Score', $data) && $data['Score'] === null) {
            $object->setScore(null);
        }
        if (\array_key_exists('OpponentScore', $data) && $data['OpponentScore'] !== null) {
            $object->setOpponentScore($data['OpponentScore']);
        }
        elseif (\array_key_exists('OpponentScore', $data) && $data['OpponentScore'] === null) {
            $object->setOpponentScore(null);
        }
        if (\array_key_exists('FirstDowns', $data) && $data['FirstDowns'] !== null) {
            $object->setFirstDowns($data['FirstDowns']);
        }
        elseif (\array_key_exists('FirstDowns', $data) && $data['FirstDowns'] === null) {
            $object->setFirstDowns(null);
        }
        if (\array_key_exists('ThirdDownConversions', $data) && $data['ThirdDownConversions'] !== null) {
            $object->setThirdDownConversions($data['ThirdDownConversions']);
        }
        elseif (\array_key_exists('ThirdDownConversions', $data) && $data['ThirdDownConversions'] === null) {
            $object->setThirdDownConversions(null);
        }
        if (\array_key_exists('ThirdDownAttempts', $data) && $data['ThirdDownAttempts'] !== null) {
            $object->setThirdDownAttempts($data['ThirdDownAttempts']);
        }
        elseif (\array_key_exists('ThirdDownAttempts', $data) && $data['ThirdDownAttempts'] === null) {
            $object->setThirdDownAttempts(null);
        }
        if (\array_key_exists('FourthDownConversions', $data) && $data['FourthDownConversions'] !== null) {
            $object->setFourthDownConversions($data['FourthDownConversions']);
        }
        elseif (\array_key_exists('FourthDownConversions', $data) && $data['FourthDownConversions'] === null) {
            $object->setFourthDownConversions(null);
        }
        if (\array_key_exists('FourthDownAttempts', $data) && $data['FourthDownAttempts'] !== null) {
            $object->setFourthDownAttempts($data['FourthDownAttempts']);
        }
        elseif (\array_key_exists('FourthDownAttempts', $data) && $data['FourthDownAttempts'] === null) {
            $object->setFourthDownAttempts(null);
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
        if (\array_key_exists('TimeOfPossessionMinutes', $data) && $data['TimeOfPossessionMinutes'] !== null) {
            $object->setTimeOfPossessionMinutes($data['TimeOfPossessionMinutes']);
        }
        elseif (\array_key_exists('TimeOfPossessionMinutes', $data) && $data['TimeOfPossessionMinutes'] === null) {
            $object->setTimeOfPossessionMinutes(null);
        }
        if (\array_key_exists('TimeOfPossessionSeconds', $data) && $data['TimeOfPossessionSeconds'] !== null) {
            $object->setTimeOfPossessionSeconds($data['TimeOfPossessionSeconds']);
        }
        elseif (\array_key_exists('TimeOfPossessionSeconds', $data) && $data['TimeOfPossessionSeconds'] === null) {
            $object->setTimeOfPossessionSeconds(null);
        }
        if (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] !== null) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        elseif (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] === null) {
            $object->setGlobalTeamID(null);
        }
        if (\array_key_exists('Week', $data) && $data['Week'] !== null) {
            $object->setWeek($data['Week']);
        }
        elseif (\array_key_exists('Week', $data) && $data['Week'] === null) {
            $object->setWeek(null);
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
        if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
            $object->setCreated($data['Created']);
        }
        elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
            $object->setCreated(null);
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
        if (\array_key_exists('PassingCompletionPercentage', $data) && $data['PassingCompletionPercentage'] !== null) {
            $object->setPassingCompletionPercentage($data['PassingCompletionPercentage']);
        }
        elseif (\array_key_exists('PassingCompletionPercentage', $data) && $data['PassingCompletionPercentage'] === null) {
            $object->setPassingCompletionPercentage(null);
        }
        if (\array_key_exists('PassingYardsPerAttempt', $data) && $data['PassingYardsPerAttempt'] !== null) {
            $object->setPassingYardsPerAttempt($data['PassingYardsPerAttempt']);
        }
        elseif (\array_key_exists('PassingYardsPerAttempt', $data) && $data['PassingYardsPerAttempt'] === null) {
            $object->setPassingYardsPerAttempt(null);
        }
        if (\array_key_exists('PassingYardsPerCompletion', $data) && $data['PassingYardsPerCompletion'] !== null) {
            $object->setPassingYardsPerCompletion($data['PassingYardsPerCompletion']);
        }
        elseif (\array_key_exists('PassingYardsPerCompletion', $data) && $data['PassingYardsPerCompletion'] === null) {
            $object->setPassingYardsPerCompletion(null);
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
        if (\array_key_exists('PassingRating', $data) && $data['PassingRating'] !== null) {
            $object->setPassingRating($data['PassingRating']);
        }
        elseif (\array_key_exists('PassingRating', $data) && $data['PassingRating'] === null) {
            $object->setPassingRating(null);
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
        if (\array_key_exists('RushingYardsPerAttempt', $data) && $data['RushingYardsPerAttempt'] !== null) {
            $object->setRushingYardsPerAttempt($data['RushingYardsPerAttempt']);
        }
        elseif (\array_key_exists('RushingYardsPerAttempt', $data) && $data['RushingYardsPerAttempt'] === null) {
            $object->setRushingYardsPerAttempt(null);
        }
        if (\array_key_exists('RushingTouchdowns', $data) && $data['RushingTouchdowns'] !== null) {
            $object->setRushingTouchdowns($data['RushingTouchdowns']);
        }
        elseif (\array_key_exists('RushingTouchdowns', $data) && $data['RushingTouchdowns'] === null) {
            $object->setRushingTouchdowns(null);
        }
        if (\array_key_exists('RushingLong', $data) && $data['RushingLong'] !== null) {
            $object->setRushingLong($data['RushingLong']);
        }
        elseif (\array_key_exists('RushingLong', $data) && $data['RushingLong'] === null) {
            $object->setRushingLong(null);
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
        if (\array_key_exists('ReceivingYardsPerReception', $data) && $data['ReceivingYardsPerReception'] !== null) {
            $object->setReceivingYardsPerReception($data['ReceivingYardsPerReception']);
        }
        elseif (\array_key_exists('ReceivingYardsPerReception', $data) && $data['ReceivingYardsPerReception'] === null) {
            $object->setReceivingYardsPerReception(null);
        }
        if (\array_key_exists('ReceivingTouchdowns', $data) && $data['ReceivingTouchdowns'] !== null) {
            $object->setReceivingTouchdowns($data['ReceivingTouchdowns']);
        }
        elseif (\array_key_exists('ReceivingTouchdowns', $data) && $data['ReceivingTouchdowns'] === null) {
            $object->setReceivingTouchdowns(null);
        }
        if (\array_key_exists('ReceivingLong', $data) && $data['ReceivingLong'] !== null) {
            $object->setReceivingLong($data['ReceivingLong']);
        }
        elseif (\array_key_exists('ReceivingLong', $data) && $data['ReceivingLong'] === null) {
            $object->setReceivingLong(null);
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
        if (\array_key_exists('PuntReturnYardsPerAttempt', $data) && $data['PuntReturnYardsPerAttempt'] !== null) {
            $object->setPuntReturnYardsPerAttempt($data['PuntReturnYardsPerAttempt']);
        }
        elseif (\array_key_exists('PuntReturnYardsPerAttempt', $data) && $data['PuntReturnYardsPerAttempt'] === null) {
            $object->setPuntReturnYardsPerAttempt(null);
        }
        if (\array_key_exists('PuntReturnTouchdowns', $data) && $data['PuntReturnTouchdowns'] !== null) {
            $object->setPuntReturnTouchdowns($data['PuntReturnTouchdowns']);
        }
        elseif (\array_key_exists('PuntReturnTouchdowns', $data) && $data['PuntReturnTouchdowns'] === null) {
            $object->setPuntReturnTouchdowns(null);
        }
        if (\array_key_exists('PuntReturnLong', $data) && $data['PuntReturnLong'] !== null) {
            $object->setPuntReturnLong($data['PuntReturnLong']);
        }
        elseif (\array_key_exists('PuntReturnLong', $data) && $data['PuntReturnLong'] === null) {
            $object->setPuntReturnLong(null);
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
        if (\array_key_exists('KickReturnYardsPerAttempt', $data) && $data['KickReturnYardsPerAttempt'] !== null) {
            $object->setKickReturnYardsPerAttempt($data['KickReturnYardsPerAttempt']);
        }
        elseif (\array_key_exists('KickReturnYardsPerAttempt', $data) && $data['KickReturnYardsPerAttempt'] === null) {
            $object->setKickReturnYardsPerAttempt(null);
        }
        if (\array_key_exists('KickReturnTouchdowns', $data) && $data['KickReturnTouchdowns'] !== null) {
            $object->setKickReturnTouchdowns($data['KickReturnTouchdowns']);
        }
        elseif (\array_key_exists('KickReturnTouchdowns', $data) && $data['KickReturnTouchdowns'] === null) {
            $object->setKickReturnTouchdowns(null);
        }
        if (\array_key_exists('KickReturnLong', $data) && $data['KickReturnLong'] !== null) {
            $object->setKickReturnLong($data['KickReturnLong']);
        }
        elseif (\array_key_exists('KickReturnLong', $data) && $data['KickReturnLong'] === null) {
            $object->setKickReturnLong(null);
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
        if (\array_key_exists('PuntAverage', $data) && $data['PuntAverage'] !== null) {
            $object->setPuntAverage($data['PuntAverage']);
        }
        elseif (\array_key_exists('PuntAverage', $data) && $data['PuntAverage'] === null) {
            $object->setPuntAverage(null);
        }
        if (\array_key_exists('PuntLong', $data) && $data['PuntLong'] !== null) {
            $object->setPuntLong($data['PuntLong']);
        }
        elseif (\array_key_exists('PuntLong', $data) && $data['PuntLong'] === null) {
            $object->setPuntLong(null);
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
        if (\array_key_exists('FieldGoalPercentage', $data) && $data['FieldGoalPercentage'] !== null) {
            $object->setFieldGoalPercentage($data['FieldGoalPercentage']);
        }
        elseif (\array_key_exists('FieldGoalPercentage', $data) && $data['FieldGoalPercentage'] === null) {
            $object->setFieldGoalPercentage(null);
        }
        if (\array_key_exists('FieldGoalsLongestMade', $data) && $data['FieldGoalsLongestMade'] !== null) {
            $object->setFieldGoalsLongestMade($data['FieldGoalsLongestMade']);
        }
        elseif (\array_key_exists('FieldGoalsLongestMade', $data) && $data['FieldGoalsLongestMade'] === null) {
            $object->setFieldGoalsLongestMade(null);
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
        if (\array_key_exists('PassesDefended', $data) && $data['PassesDefended'] !== null) {
            $object->setPassesDefended($data['PassesDefended']);
        }
        elseif (\array_key_exists('PassesDefended', $data) && $data['PassesDefended'] === null) {
            $object->setPassesDefended(null);
        }
        if (\array_key_exists('FumblesRecovered', $data) && $data['FumblesRecovered'] !== null) {
            $object->setFumblesRecovered($data['FumblesRecovered']);
        }
        elseif (\array_key_exists('FumblesRecovered', $data) && $data['FumblesRecovered'] === null) {
            $object->setFumblesRecovered(null);
        }
        if (\array_key_exists('FumbleReturnTouchdowns', $data) && $data['FumbleReturnTouchdowns'] !== null) {
            $object->setFumbleReturnTouchdowns($data['FumbleReturnTouchdowns']);
        }
        elseif (\array_key_exists('FumbleReturnTouchdowns', $data) && $data['FumbleReturnTouchdowns'] === null) {
            $object->setFumbleReturnTouchdowns(null);
        }
        if (\array_key_exists('QuarterbackHurries', $data) && $data['QuarterbackHurries'] !== null) {
            $object->setQuarterbackHurries($data['QuarterbackHurries']);
        }
        elseif (\array_key_exists('QuarterbackHurries', $data) && $data['QuarterbackHurries'] === null) {
            $object->setQuarterbackHurries(null);
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