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
class TeamSeasonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\TeamSeason';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\TeamSeason';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\TeamSeason();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('Score', $data)) {
            $object->setScore($data['Score']);
        }
        if (\array_key_exists('OpponentScore', $data)) {
            $object->setOpponentScore($data['OpponentScore']);
        }
        if (\array_key_exists('TotalScore', $data)) {
            $object->setTotalScore($data['TotalScore']);
        }
        if (\array_key_exists('Temperature', $data) && $data['Temperature'] !== null) {
            $object->setTemperature($data['Temperature']);
        }
        elseif (\array_key_exists('Temperature', $data) && $data['Temperature'] === null) {
            $object->setTemperature(null);
        }
        if (\array_key_exists('Humidity', $data) && $data['Humidity'] !== null) {
            $object->setHumidity($data['Humidity']);
        }
        elseif (\array_key_exists('Humidity', $data) && $data['Humidity'] === null) {
            $object->setHumidity(null);
        }
        if (\array_key_exists('WindSpeed', $data) && $data['WindSpeed'] !== null) {
            $object->setWindSpeed($data['WindSpeed']);
        }
        elseif (\array_key_exists('WindSpeed', $data) && $data['WindSpeed'] === null) {
            $object->setWindSpeed(null);
        }
        if (\array_key_exists('OverUnder', $data) && $data['OverUnder'] !== null) {
            $object->setOverUnder($data['OverUnder']);
        }
        elseif (\array_key_exists('OverUnder', $data) && $data['OverUnder'] === null) {
            $object->setOverUnder(null);
        }
        if (\array_key_exists('PointSpread', $data) && $data['PointSpread'] !== null) {
            $object->setPointSpread($data['PointSpread']);
        }
        elseif (\array_key_exists('PointSpread', $data) && $data['PointSpread'] === null) {
            $object->setPointSpread(null);
        }
        if (\array_key_exists('ScoreQuarter1', $data) && $data['ScoreQuarter1'] !== null) {
            $object->setScoreQuarter1($data['ScoreQuarter1']);
        }
        elseif (\array_key_exists('ScoreQuarter1', $data) && $data['ScoreQuarter1'] === null) {
            $object->setScoreQuarter1(null);
        }
        if (\array_key_exists('ScoreQuarter2', $data) && $data['ScoreQuarter2'] !== null) {
            $object->setScoreQuarter2($data['ScoreQuarter2']);
        }
        elseif (\array_key_exists('ScoreQuarter2', $data) && $data['ScoreQuarter2'] === null) {
            $object->setScoreQuarter2(null);
        }
        if (\array_key_exists('ScoreQuarter3', $data) && $data['ScoreQuarter3'] !== null) {
            $object->setScoreQuarter3($data['ScoreQuarter3']);
        }
        elseif (\array_key_exists('ScoreQuarter3', $data) && $data['ScoreQuarter3'] === null) {
            $object->setScoreQuarter3(null);
        }
        if (\array_key_exists('ScoreQuarter4', $data) && $data['ScoreQuarter4'] !== null) {
            $object->setScoreQuarter4($data['ScoreQuarter4']);
        }
        elseif (\array_key_exists('ScoreQuarter4', $data) && $data['ScoreQuarter4'] === null) {
            $object->setScoreQuarter4(null);
        }
        if (\array_key_exists('ScoreOvertime', $data)) {
            $object->setScoreOvertime($data['ScoreOvertime']);
        }
        if (\array_key_exists('TimeOfPossession', $data) && $data['TimeOfPossession'] !== null) {
            $object->setTimeOfPossession($data['TimeOfPossession']);
        }
        elseif (\array_key_exists('TimeOfPossession', $data) && $data['TimeOfPossession'] === null) {
            $object->setTimeOfPossession(null);
        }
        if (\array_key_exists('FirstDowns', $data) && $data['FirstDowns'] !== null) {
            $object->setFirstDowns($data['FirstDowns']);
        }
        elseif (\array_key_exists('FirstDowns', $data) && $data['FirstDowns'] === null) {
            $object->setFirstDowns(null);
        }
        if (\array_key_exists('FirstDownsByRushing', $data) && $data['FirstDownsByRushing'] !== null) {
            $object->setFirstDownsByRushing($data['FirstDownsByRushing']);
        }
        elseif (\array_key_exists('FirstDownsByRushing', $data) && $data['FirstDownsByRushing'] === null) {
            $object->setFirstDownsByRushing(null);
        }
        if (\array_key_exists('FirstDownsByPassing', $data) && $data['FirstDownsByPassing'] !== null) {
            $object->setFirstDownsByPassing($data['FirstDownsByPassing']);
        }
        elseif (\array_key_exists('FirstDownsByPassing', $data) && $data['FirstDownsByPassing'] === null) {
            $object->setFirstDownsByPassing(null);
        }
        if (\array_key_exists('FirstDownsByPenalty', $data) && $data['FirstDownsByPenalty'] !== null) {
            $object->setFirstDownsByPenalty($data['FirstDownsByPenalty']);
        }
        elseif (\array_key_exists('FirstDownsByPenalty', $data) && $data['FirstDownsByPenalty'] === null) {
            $object->setFirstDownsByPenalty(null);
        }
        if (\array_key_exists('OffensivePlays', $data)) {
            $object->setOffensivePlays($data['OffensivePlays']);
        }
        if (\array_key_exists('OffensiveYards', $data)) {
            $object->setOffensiveYards($data['OffensiveYards']);
        }
        if (\array_key_exists('OffensiveYardsPerPlay', $data)) {
            $object->setOffensiveYardsPerPlay($data['OffensiveYardsPerPlay']);
        }
        if (\array_key_exists('Touchdowns', $data) && $data['Touchdowns'] !== null) {
            $object->setTouchdowns($data['Touchdowns']);
        }
        elseif (\array_key_exists('Touchdowns', $data) && $data['Touchdowns'] === null) {
            $object->setTouchdowns(null);
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
        if (\array_key_exists('RushingYardsPerAttempt', $data)) {
            $object->setRushingYardsPerAttempt($data['RushingYardsPerAttempt']);
        }
        if (\array_key_exists('RushingTouchdowns', $data) && $data['RushingTouchdowns'] !== null) {
            $object->setRushingTouchdowns($data['RushingTouchdowns']);
        }
        elseif (\array_key_exists('RushingTouchdowns', $data) && $data['RushingTouchdowns'] === null) {
            $object->setRushingTouchdowns(null);
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
        if (\array_key_exists('PassingYardsPerAttempt', $data)) {
            $object->setPassingYardsPerAttempt($data['PassingYardsPerAttempt']);
        }
        if (\array_key_exists('PassingYardsPerCompletion', $data)) {
            $object->setPassingYardsPerCompletion($data['PassingYardsPerCompletion']);
        }
        if (\array_key_exists('CompletionPercentage', $data)) {
            $object->setCompletionPercentage($data['CompletionPercentage']);
        }
        if (\array_key_exists('PasserRating', $data) && $data['PasserRating'] !== null) {
            $object->setPasserRating($data['PasserRating']);
        }
        elseif (\array_key_exists('PasserRating', $data) && $data['PasserRating'] === null) {
            $object->setPasserRating(null);
        }
        if (\array_key_exists('ThirdDownAttempts', $data) && $data['ThirdDownAttempts'] !== null) {
            $object->setThirdDownAttempts($data['ThirdDownAttempts']);
        }
        elseif (\array_key_exists('ThirdDownAttempts', $data) && $data['ThirdDownAttempts'] === null) {
            $object->setThirdDownAttempts(null);
        }
        if (\array_key_exists('ThirdDownConversions', $data) && $data['ThirdDownConversions'] !== null) {
            $object->setThirdDownConversions($data['ThirdDownConversions']);
        }
        elseif (\array_key_exists('ThirdDownConversions', $data) && $data['ThirdDownConversions'] === null) {
            $object->setThirdDownConversions(null);
        }
        if (\array_key_exists('ThirdDownPercentage', $data) && $data['ThirdDownPercentage'] !== null) {
            $object->setThirdDownPercentage($data['ThirdDownPercentage']);
        }
        elseif (\array_key_exists('ThirdDownPercentage', $data) && $data['ThirdDownPercentage'] === null) {
            $object->setThirdDownPercentage(null);
        }
        if (\array_key_exists('FourthDownAttempts', $data) && $data['FourthDownAttempts'] !== null) {
            $object->setFourthDownAttempts($data['FourthDownAttempts']);
        }
        elseif (\array_key_exists('FourthDownAttempts', $data) && $data['FourthDownAttempts'] === null) {
            $object->setFourthDownAttempts(null);
        }
        if (\array_key_exists('FourthDownConversions', $data) && $data['FourthDownConversions'] !== null) {
            $object->setFourthDownConversions($data['FourthDownConversions']);
        }
        elseif (\array_key_exists('FourthDownConversions', $data) && $data['FourthDownConversions'] === null) {
            $object->setFourthDownConversions(null);
        }
        if (\array_key_exists('FourthDownPercentage', $data) && $data['FourthDownPercentage'] !== null) {
            $object->setFourthDownPercentage($data['FourthDownPercentage']);
        }
        elseif (\array_key_exists('FourthDownPercentage', $data) && $data['FourthDownPercentage'] === null) {
            $object->setFourthDownPercentage(null);
        }
        if (\array_key_exists('RedZoneAttempts', $data) && $data['RedZoneAttempts'] !== null) {
            $object->setRedZoneAttempts($data['RedZoneAttempts']);
        }
        elseif (\array_key_exists('RedZoneAttempts', $data) && $data['RedZoneAttempts'] === null) {
            $object->setRedZoneAttempts(null);
        }
        if (\array_key_exists('RedZoneConversions', $data) && $data['RedZoneConversions'] !== null) {
            $object->setRedZoneConversions($data['RedZoneConversions']);
        }
        elseif (\array_key_exists('RedZoneConversions', $data) && $data['RedZoneConversions'] === null) {
            $object->setRedZoneConversions(null);
        }
        if (\array_key_exists('GoalToGoAttempts', $data) && $data['GoalToGoAttempts'] !== null) {
            $object->setGoalToGoAttempts($data['GoalToGoAttempts']);
        }
        elseif (\array_key_exists('GoalToGoAttempts', $data) && $data['GoalToGoAttempts'] === null) {
            $object->setGoalToGoAttempts(null);
        }
        if (\array_key_exists('GoalToGoConversions', $data) && $data['GoalToGoConversions'] !== null) {
            $object->setGoalToGoConversions($data['GoalToGoConversions']);
        }
        elseif (\array_key_exists('GoalToGoConversions', $data) && $data['GoalToGoConversions'] === null) {
            $object->setGoalToGoConversions(null);
        }
        if (\array_key_exists('ReturnYards', $data) && $data['ReturnYards'] !== null) {
            $object->setReturnYards($data['ReturnYards']);
        }
        elseif (\array_key_exists('ReturnYards', $data) && $data['ReturnYards'] === null) {
            $object->setReturnYards(null);
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
        if (\array_key_exists('TimesSacked', $data) && $data['TimesSacked'] !== null) {
            $object->setTimesSacked($data['TimesSacked']);
        }
        elseif (\array_key_exists('TimesSacked', $data) && $data['TimesSacked'] === null) {
            $object->setTimesSacked(null);
        }
        if (\array_key_exists('TimesSackedYards', $data) && $data['TimesSackedYards'] !== null) {
            $object->setTimesSackedYards($data['TimesSackedYards']);
        }
        elseif (\array_key_exists('TimesSackedYards', $data) && $data['TimesSackedYards'] === null) {
            $object->setTimesSackedYards(null);
        }
        if (\array_key_exists('QuarterbackHits', $data) && $data['QuarterbackHits'] !== null) {
            $object->setQuarterbackHits($data['QuarterbackHits']);
        }
        elseif (\array_key_exists('QuarterbackHits', $data) && $data['QuarterbackHits'] === null) {
            $object->setQuarterbackHits(null);
        }
        if (\array_key_exists('TacklesForLoss', $data) && $data['TacklesForLoss'] !== null) {
            $object->setTacklesForLoss($data['TacklesForLoss']);
        }
        elseif (\array_key_exists('TacklesForLoss', $data) && $data['TacklesForLoss'] === null) {
            $object->setTacklesForLoss(null);
        }
        if (\array_key_exists('Safeties', $data) && $data['Safeties'] !== null) {
            $object->setSafeties($data['Safeties']);
        }
        elseif (\array_key_exists('Safeties', $data) && $data['Safeties'] === null) {
            $object->setSafeties(null);
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
        if (\array_key_exists('PuntAverage', $data)) {
            $object->setPuntAverage($data['PuntAverage']);
        }
        if (\array_key_exists('Giveaways', $data)) {
            $object->setGiveaways($data['Giveaways']);
        }
        if (\array_key_exists('Takeaways', $data)) {
            $object->setTakeaways($data['Takeaways']);
        }
        if (\array_key_exists('TurnoverDifferential', $data)) {
            $object->setTurnoverDifferential($data['TurnoverDifferential']);
        }
        if (\array_key_exists('OpponentScoreQuarter1', $data) && $data['OpponentScoreQuarter1'] !== null) {
            $object->setOpponentScoreQuarter1($data['OpponentScoreQuarter1']);
        }
        elseif (\array_key_exists('OpponentScoreQuarter1', $data) && $data['OpponentScoreQuarter1'] === null) {
            $object->setOpponentScoreQuarter1(null);
        }
        if (\array_key_exists('OpponentScoreQuarter2', $data) && $data['OpponentScoreQuarter2'] !== null) {
            $object->setOpponentScoreQuarter2($data['OpponentScoreQuarter2']);
        }
        elseif (\array_key_exists('OpponentScoreQuarter2', $data) && $data['OpponentScoreQuarter2'] === null) {
            $object->setOpponentScoreQuarter2(null);
        }
        if (\array_key_exists('OpponentScoreQuarter3', $data) && $data['OpponentScoreQuarter3'] !== null) {
            $object->setOpponentScoreQuarter3($data['OpponentScoreQuarter3']);
        }
        elseif (\array_key_exists('OpponentScoreQuarter3', $data) && $data['OpponentScoreQuarter3'] === null) {
            $object->setOpponentScoreQuarter3(null);
        }
        if (\array_key_exists('OpponentScoreQuarter4', $data) && $data['OpponentScoreQuarter4'] !== null) {
            $object->setOpponentScoreQuarter4($data['OpponentScoreQuarter4']);
        }
        elseif (\array_key_exists('OpponentScoreQuarter4', $data) && $data['OpponentScoreQuarter4'] === null) {
            $object->setOpponentScoreQuarter4(null);
        }
        if (\array_key_exists('OpponentScoreOvertime', $data)) {
            $object->setOpponentScoreOvertime($data['OpponentScoreOvertime']);
        }
        if (\array_key_exists('OpponentTimeOfPossession', $data) && $data['OpponentTimeOfPossession'] !== null) {
            $object->setOpponentTimeOfPossession($data['OpponentTimeOfPossession']);
        }
        elseif (\array_key_exists('OpponentTimeOfPossession', $data) && $data['OpponentTimeOfPossession'] === null) {
            $object->setOpponentTimeOfPossession(null);
        }
        if (\array_key_exists('OpponentFirstDowns', $data) && $data['OpponentFirstDowns'] !== null) {
            $object->setOpponentFirstDowns($data['OpponentFirstDowns']);
        }
        elseif (\array_key_exists('OpponentFirstDowns', $data) && $data['OpponentFirstDowns'] === null) {
            $object->setOpponentFirstDowns(null);
        }
        if (\array_key_exists('OpponentFirstDownsByRushing', $data) && $data['OpponentFirstDownsByRushing'] !== null) {
            $object->setOpponentFirstDownsByRushing($data['OpponentFirstDownsByRushing']);
        }
        elseif (\array_key_exists('OpponentFirstDownsByRushing', $data) && $data['OpponentFirstDownsByRushing'] === null) {
            $object->setOpponentFirstDownsByRushing(null);
        }
        if (\array_key_exists('OpponentFirstDownsByPassing', $data) && $data['OpponentFirstDownsByPassing'] !== null) {
            $object->setOpponentFirstDownsByPassing($data['OpponentFirstDownsByPassing']);
        }
        elseif (\array_key_exists('OpponentFirstDownsByPassing', $data) && $data['OpponentFirstDownsByPassing'] === null) {
            $object->setOpponentFirstDownsByPassing(null);
        }
        if (\array_key_exists('OpponentFirstDownsByPenalty', $data) && $data['OpponentFirstDownsByPenalty'] !== null) {
            $object->setOpponentFirstDownsByPenalty($data['OpponentFirstDownsByPenalty']);
        }
        elseif (\array_key_exists('OpponentFirstDownsByPenalty', $data) && $data['OpponentFirstDownsByPenalty'] === null) {
            $object->setOpponentFirstDownsByPenalty(null);
        }
        if (\array_key_exists('OpponentOffensivePlays', $data)) {
            $object->setOpponentOffensivePlays($data['OpponentOffensivePlays']);
        }
        if (\array_key_exists('OpponentOffensiveYards', $data)) {
            $object->setOpponentOffensiveYards($data['OpponentOffensiveYards']);
        }
        if (\array_key_exists('OpponentOffensiveYardsPerPlay', $data)) {
            $object->setOpponentOffensiveYardsPerPlay($data['OpponentOffensiveYardsPerPlay']);
        }
        if (\array_key_exists('OpponentTouchdowns', $data) && $data['OpponentTouchdowns'] !== null) {
            $object->setOpponentTouchdowns($data['OpponentTouchdowns']);
        }
        elseif (\array_key_exists('OpponentTouchdowns', $data) && $data['OpponentTouchdowns'] === null) {
            $object->setOpponentTouchdowns(null);
        }
        if (\array_key_exists('OpponentRushingAttempts', $data) && $data['OpponentRushingAttempts'] !== null) {
            $object->setOpponentRushingAttempts($data['OpponentRushingAttempts']);
        }
        elseif (\array_key_exists('OpponentRushingAttempts', $data) && $data['OpponentRushingAttempts'] === null) {
            $object->setOpponentRushingAttempts(null);
        }
        if (\array_key_exists('OpponentRushingYards', $data) && $data['OpponentRushingYards'] !== null) {
            $object->setOpponentRushingYards($data['OpponentRushingYards']);
        }
        elseif (\array_key_exists('OpponentRushingYards', $data) && $data['OpponentRushingYards'] === null) {
            $object->setOpponentRushingYards(null);
        }
        if (\array_key_exists('OpponentRushingYardsPerAttempt', $data)) {
            $object->setOpponentRushingYardsPerAttempt($data['OpponentRushingYardsPerAttempt']);
        }
        if (\array_key_exists('OpponentRushingTouchdowns', $data) && $data['OpponentRushingTouchdowns'] !== null) {
            $object->setOpponentRushingTouchdowns($data['OpponentRushingTouchdowns']);
        }
        elseif (\array_key_exists('OpponentRushingTouchdowns', $data) && $data['OpponentRushingTouchdowns'] === null) {
            $object->setOpponentRushingTouchdowns(null);
        }
        if (\array_key_exists('OpponentPassingAttempts', $data) && $data['OpponentPassingAttempts'] !== null) {
            $object->setOpponentPassingAttempts($data['OpponentPassingAttempts']);
        }
        elseif (\array_key_exists('OpponentPassingAttempts', $data) && $data['OpponentPassingAttempts'] === null) {
            $object->setOpponentPassingAttempts(null);
        }
        if (\array_key_exists('OpponentPassingCompletions', $data) && $data['OpponentPassingCompletions'] !== null) {
            $object->setOpponentPassingCompletions($data['OpponentPassingCompletions']);
        }
        elseif (\array_key_exists('OpponentPassingCompletions', $data) && $data['OpponentPassingCompletions'] === null) {
            $object->setOpponentPassingCompletions(null);
        }
        if (\array_key_exists('OpponentPassingYards', $data) && $data['OpponentPassingYards'] !== null) {
            $object->setOpponentPassingYards($data['OpponentPassingYards']);
        }
        elseif (\array_key_exists('OpponentPassingYards', $data) && $data['OpponentPassingYards'] === null) {
            $object->setOpponentPassingYards(null);
        }
        if (\array_key_exists('OpponentPassingTouchdowns', $data) && $data['OpponentPassingTouchdowns'] !== null) {
            $object->setOpponentPassingTouchdowns($data['OpponentPassingTouchdowns']);
        }
        elseif (\array_key_exists('OpponentPassingTouchdowns', $data) && $data['OpponentPassingTouchdowns'] === null) {
            $object->setOpponentPassingTouchdowns(null);
        }
        if (\array_key_exists('OpponentPassingInterceptions', $data) && $data['OpponentPassingInterceptions'] !== null) {
            $object->setOpponentPassingInterceptions($data['OpponentPassingInterceptions']);
        }
        elseif (\array_key_exists('OpponentPassingInterceptions', $data) && $data['OpponentPassingInterceptions'] === null) {
            $object->setOpponentPassingInterceptions(null);
        }
        if (\array_key_exists('OpponentPassingYardsPerAttempt', $data)) {
            $object->setOpponentPassingYardsPerAttempt($data['OpponentPassingYardsPerAttempt']);
        }
        if (\array_key_exists('OpponentPassingYardsPerCompletion', $data)) {
            $object->setOpponentPassingYardsPerCompletion($data['OpponentPassingYardsPerCompletion']);
        }
        if (\array_key_exists('OpponentCompletionPercentage', $data)) {
            $object->setOpponentCompletionPercentage($data['OpponentCompletionPercentage']);
        }
        if (\array_key_exists('OpponentPasserRating', $data) && $data['OpponentPasserRating'] !== null) {
            $object->setOpponentPasserRating($data['OpponentPasserRating']);
        }
        elseif (\array_key_exists('OpponentPasserRating', $data) && $data['OpponentPasserRating'] === null) {
            $object->setOpponentPasserRating(null);
        }
        if (\array_key_exists('OpponentThirdDownAttempts', $data) && $data['OpponentThirdDownAttempts'] !== null) {
            $object->setOpponentThirdDownAttempts($data['OpponentThirdDownAttempts']);
        }
        elseif (\array_key_exists('OpponentThirdDownAttempts', $data) && $data['OpponentThirdDownAttempts'] === null) {
            $object->setOpponentThirdDownAttempts(null);
        }
        if (\array_key_exists('OpponentThirdDownConversions', $data) && $data['OpponentThirdDownConversions'] !== null) {
            $object->setOpponentThirdDownConversions($data['OpponentThirdDownConversions']);
        }
        elseif (\array_key_exists('OpponentThirdDownConversions', $data) && $data['OpponentThirdDownConversions'] === null) {
            $object->setOpponentThirdDownConversions(null);
        }
        if (\array_key_exists('OpponentThirdDownPercentage', $data) && $data['OpponentThirdDownPercentage'] !== null) {
            $object->setOpponentThirdDownPercentage($data['OpponentThirdDownPercentage']);
        }
        elseif (\array_key_exists('OpponentThirdDownPercentage', $data) && $data['OpponentThirdDownPercentage'] === null) {
            $object->setOpponentThirdDownPercentage(null);
        }
        if (\array_key_exists('OpponentFourthDownAttempts', $data) && $data['OpponentFourthDownAttempts'] !== null) {
            $object->setOpponentFourthDownAttempts($data['OpponentFourthDownAttempts']);
        }
        elseif (\array_key_exists('OpponentFourthDownAttempts', $data) && $data['OpponentFourthDownAttempts'] === null) {
            $object->setOpponentFourthDownAttempts(null);
        }
        if (\array_key_exists('OpponentFourthDownConversions', $data) && $data['OpponentFourthDownConversions'] !== null) {
            $object->setOpponentFourthDownConversions($data['OpponentFourthDownConversions']);
        }
        elseif (\array_key_exists('OpponentFourthDownConversions', $data) && $data['OpponentFourthDownConversions'] === null) {
            $object->setOpponentFourthDownConversions(null);
        }
        if (\array_key_exists('OpponentFourthDownPercentage', $data) && $data['OpponentFourthDownPercentage'] !== null) {
            $object->setOpponentFourthDownPercentage($data['OpponentFourthDownPercentage']);
        }
        elseif (\array_key_exists('OpponentFourthDownPercentage', $data) && $data['OpponentFourthDownPercentage'] === null) {
            $object->setOpponentFourthDownPercentage(null);
        }
        if (\array_key_exists('OpponentRedZoneAttempts', $data) && $data['OpponentRedZoneAttempts'] !== null) {
            $object->setOpponentRedZoneAttempts($data['OpponentRedZoneAttempts']);
        }
        elseif (\array_key_exists('OpponentRedZoneAttempts', $data) && $data['OpponentRedZoneAttempts'] === null) {
            $object->setOpponentRedZoneAttempts(null);
        }
        if (\array_key_exists('OpponentRedZoneConversions', $data) && $data['OpponentRedZoneConversions'] !== null) {
            $object->setOpponentRedZoneConversions($data['OpponentRedZoneConversions']);
        }
        elseif (\array_key_exists('OpponentRedZoneConversions', $data) && $data['OpponentRedZoneConversions'] === null) {
            $object->setOpponentRedZoneConversions(null);
        }
        if (\array_key_exists('OpponentGoalToGoAttempts', $data) && $data['OpponentGoalToGoAttempts'] !== null) {
            $object->setOpponentGoalToGoAttempts($data['OpponentGoalToGoAttempts']);
        }
        elseif (\array_key_exists('OpponentGoalToGoAttempts', $data) && $data['OpponentGoalToGoAttempts'] === null) {
            $object->setOpponentGoalToGoAttempts(null);
        }
        if (\array_key_exists('OpponentGoalToGoConversions', $data) && $data['OpponentGoalToGoConversions'] !== null) {
            $object->setOpponentGoalToGoConversions($data['OpponentGoalToGoConversions']);
        }
        elseif (\array_key_exists('OpponentGoalToGoConversions', $data) && $data['OpponentGoalToGoConversions'] === null) {
            $object->setOpponentGoalToGoConversions(null);
        }
        if (\array_key_exists('OpponentReturnYards', $data) && $data['OpponentReturnYards'] !== null) {
            $object->setOpponentReturnYards($data['OpponentReturnYards']);
        }
        elseif (\array_key_exists('OpponentReturnYards', $data) && $data['OpponentReturnYards'] === null) {
            $object->setOpponentReturnYards(null);
        }
        if (\array_key_exists('OpponentPenalties', $data) && $data['OpponentPenalties'] !== null) {
            $object->setOpponentPenalties($data['OpponentPenalties']);
        }
        elseif (\array_key_exists('OpponentPenalties', $data) && $data['OpponentPenalties'] === null) {
            $object->setOpponentPenalties(null);
        }
        if (\array_key_exists('OpponentPenaltyYards', $data) && $data['OpponentPenaltyYards'] !== null) {
            $object->setOpponentPenaltyYards($data['OpponentPenaltyYards']);
        }
        elseif (\array_key_exists('OpponentPenaltyYards', $data) && $data['OpponentPenaltyYards'] === null) {
            $object->setOpponentPenaltyYards(null);
        }
        if (\array_key_exists('OpponentFumbles', $data) && $data['OpponentFumbles'] !== null) {
            $object->setOpponentFumbles($data['OpponentFumbles']);
        }
        elseif (\array_key_exists('OpponentFumbles', $data) && $data['OpponentFumbles'] === null) {
            $object->setOpponentFumbles(null);
        }
        if (\array_key_exists('OpponentFumblesLost', $data) && $data['OpponentFumblesLost'] !== null) {
            $object->setOpponentFumblesLost($data['OpponentFumblesLost']);
        }
        elseif (\array_key_exists('OpponentFumblesLost', $data) && $data['OpponentFumblesLost'] === null) {
            $object->setOpponentFumblesLost(null);
        }
        if (\array_key_exists('OpponentTimesSacked', $data) && $data['OpponentTimesSacked'] !== null) {
            $object->setOpponentTimesSacked($data['OpponentTimesSacked']);
        }
        elseif (\array_key_exists('OpponentTimesSacked', $data) && $data['OpponentTimesSacked'] === null) {
            $object->setOpponentTimesSacked(null);
        }
        if (\array_key_exists('OpponentTimesSackedYards', $data) && $data['OpponentTimesSackedYards'] !== null) {
            $object->setOpponentTimesSackedYards($data['OpponentTimesSackedYards']);
        }
        elseif (\array_key_exists('OpponentTimesSackedYards', $data) && $data['OpponentTimesSackedYards'] === null) {
            $object->setOpponentTimesSackedYards(null);
        }
        if (\array_key_exists('OpponentQuarterbackHits', $data) && $data['OpponentQuarterbackHits'] !== null) {
            $object->setOpponentQuarterbackHits($data['OpponentQuarterbackHits']);
        }
        elseif (\array_key_exists('OpponentQuarterbackHits', $data) && $data['OpponentQuarterbackHits'] === null) {
            $object->setOpponentQuarterbackHits(null);
        }
        if (\array_key_exists('OpponentTacklesForLoss', $data) && $data['OpponentTacklesForLoss'] !== null) {
            $object->setOpponentTacklesForLoss($data['OpponentTacklesForLoss']);
        }
        elseif (\array_key_exists('OpponentTacklesForLoss', $data) && $data['OpponentTacklesForLoss'] === null) {
            $object->setOpponentTacklesForLoss(null);
        }
        if (\array_key_exists('OpponentSafeties', $data) && $data['OpponentSafeties'] !== null) {
            $object->setOpponentSafeties($data['OpponentSafeties']);
        }
        elseif (\array_key_exists('OpponentSafeties', $data) && $data['OpponentSafeties'] === null) {
            $object->setOpponentSafeties(null);
        }
        if (\array_key_exists('OpponentPunts', $data) && $data['OpponentPunts'] !== null) {
            $object->setOpponentPunts($data['OpponentPunts']);
        }
        elseif (\array_key_exists('OpponentPunts', $data) && $data['OpponentPunts'] === null) {
            $object->setOpponentPunts(null);
        }
        if (\array_key_exists('OpponentPuntYards', $data) && $data['OpponentPuntYards'] !== null) {
            $object->setOpponentPuntYards($data['OpponentPuntYards']);
        }
        elseif (\array_key_exists('OpponentPuntYards', $data) && $data['OpponentPuntYards'] === null) {
            $object->setOpponentPuntYards(null);
        }
        if (\array_key_exists('OpponentPuntAverage', $data)) {
            $object->setOpponentPuntAverage($data['OpponentPuntAverage']);
        }
        if (\array_key_exists('OpponentGiveaways', $data)) {
            $object->setOpponentGiveaways($data['OpponentGiveaways']);
        }
        if (\array_key_exists('OpponentTakeaways', $data)) {
            $object->setOpponentTakeaways($data['OpponentTakeaways']);
        }
        if (\array_key_exists('OpponentTurnoverDifferential', $data)) {
            $object->setOpponentTurnoverDifferential($data['OpponentTurnoverDifferential']);
        }
        if (\array_key_exists('RedZonePercentage', $data) && $data['RedZonePercentage'] !== null) {
            $object->setRedZonePercentage($data['RedZonePercentage']);
        }
        elseif (\array_key_exists('RedZonePercentage', $data) && $data['RedZonePercentage'] === null) {
            $object->setRedZonePercentage(null);
        }
        if (\array_key_exists('GoalToGoPercentage', $data) && $data['GoalToGoPercentage'] !== null) {
            $object->setGoalToGoPercentage($data['GoalToGoPercentage']);
        }
        elseif (\array_key_exists('GoalToGoPercentage', $data) && $data['GoalToGoPercentage'] === null) {
            $object->setGoalToGoPercentage(null);
        }
        if (\array_key_exists('QuarterbackHitsDifferential', $data) && $data['QuarterbackHitsDifferential'] !== null) {
            $object->setQuarterbackHitsDifferential($data['QuarterbackHitsDifferential']);
        }
        elseif (\array_key_exists('QuarterbackHitsDifferential', $data) && $data['QuarterbackHitsDifferential'] === null) {
            $object->setQuarterbackHitsDifferential(null);
        }
        if (\array_key_exists('TacklesForLossDifferential', $data) && $data['TacklesForLossDifferential'] !== null) {
            $object->setTacklesForLossDifferential($data['TacklesForLossDifferential']);
        }
        elseif (\array_key_exists('TacklesForLossDifferential', $data) && $data['TacklesForLossDifferential'] === null) {
            $object->setTacklesForLossDifferential(null);
        }
        if (\array_key_exists('QuarterbackSacksDifferential', $data)) {
            $object->setQuarterbackSacksDifferential($data['QuarterbackSacksDifferential']);
        }
        if (\array_key_exists('TacklesForLossPercentage', $data) && $data['TacklesForLossPercentage'] !== null) {
            $object->setTacklesForLossPercentage($data['TacklesForLossPercentage']);
        }
        elseif (\array_key_exists('TacklesForLossPercentage', $data) && $data['TacklesForLossPercentage'] === null) {
            $object->setTacklesForLossPercentage(null);
        }
        if (\array_key_exists('QuarterbackHitsPercentage', $data) && $data['QuarterbackHitsPercentage'] !== null) {
            $object->setQuarterbackHitsPercentage($data['QuarterbackHitsPercentage']);
        }
        elseif (\array_key_exists('QuarterbackHitsPercentage', $data) && $data['QuarterbackHitsPercentage'] === null) {
            $object->setQuarterbackHitsPercentage(null);
        }
        if (\array_key_exists('TimesSackedPercentage', $data)) {
            $object->setTimesSackedPercentage($data['TimesSackedPercentage']);
        }
        if (\array_key_exists('OpponentRedZonePercentage', $data) && $data['OpponentRedZonePercentage'] !== null) {
            $object->setOpponentRedZonePercentage($data['OpponentRedZonePercentage']);
        }
        elseif (\array_key_exists('OpponentRedZonePercentage', $data) && $data['OpponentRedZonePercentage'] === null) {
            $object->setOpponentRedZonePercentage(null);
        }
        if (\array_key_exists('OpponentGoalToGoPercentage', $data) && $data['OpponentGoalToGoPercentage'] !== null) {
            $object->setOpponentGoalToGoPercentage($data['OpponentGoalToGoPercentage']);
        }
        elseif (\array_key_exists('OpponentGoalToGoPercentage', $data) && $data['OpponentGoalToGoPercentage'] === null) {
            $object->setOpponentGoalToGoPercentage(null);
        }
        if (\array_key_exists('OpponentQuarterbackHitsDifferential', $data) && $data['OpponentQuarterbackHitsDifferential'] !== null) {
            $object->setOpponentQuarterbackHitsDifferential($data['OpponentQuarterbackHitsDifferential']);
        }
        elseif (\array_key_exists('OpponentQuarterbackHitsDifferential', $data) && $data['OpponentQuarterbackHitsDifferential'] === null) {
            $object->setOpponentQuarterbackHitsDifferential(null);
        }
        if (\array_key_exists('OpponentTacklesForLossDifferential', $data) && $data['OpponentTacklesForLossDifferential'] !== null) {
            $object->setOpponentTacklesForLossDifferential($data['OpponentTacklesForLossDifferential']);
        }
        elseif (\array_key_exists('OpponentTacklesForLossDifferential', $data) && $data['OpponentTacklesForLossDifferential'] === null) {
            $object->setOpponentTacklesForLossDifferential(null);
        }
        if (\array_key_exists('OpponentQuarterbackSacksDifferential', $data) && $data['OpponentQuarterbackSacksDifferential'] !== null) {
            $object->setOpponentQuarterbackSacksDifferential($data['OpponentQuarterbackSacksDifferential']);
        }
        elseif (\array_key_exists('OpponentQuarterbackSacksDifferential', $data) && $data['OpponentQuarterbackSacksDifferential'] === null) {
            $object->setOpponentQuarterbackSacksDifferential(null);
        }
        if (\array_key_exists('OpponentTacklesForLossPercentage', $data) && $data['OpponentTacklesForLossPercentage'] !== null) {
            $object->setOpponentTacklesForLossPercentage($data['OpponentTacklesForLossPercentage']);
        }
        elseif (\array_key_exists('OpponentTacklesForLossPercentage', $data) && $data['OpponentTacklesForLossPercentage'] === null) {
            $object->setOpponentTacklesForLossPercentage(null);
        }
        if (\array_key_exists('OpponentQuarterbackHitsPercentage', $data) && $data['OpponentQuarterbackHitsPercentage'] !== null) {
            $object->setOpponentQuarterbackHitsPercentage($data['OpponentQuarterbackHitsPercentage']);
        }
        elseif (\array_key_exists('OpponentQuarterbackHitsPercentage', $data) && $data['OpponentQuarterbackHitsPercentage'] === null) {
            $object->setOpponentQuarterbackHitsPercentage(null);
        }
        if (\array_key_exists('OpponentTimesSackedPercentage', $data)) {
            $object->setOpponentTimesSackedPercentage($data['OpponentTimesSackedPercentage']);
        }
        if (\array_key_exists('Kickoffs', $data) && $data['Kickoffs'] !== null) {
            $object->setKickoffs($data['Kickoffs']);
        }
        elseif (\array_key_exists('Kickoffs', $data) && $data['Kickoffs'] === null) {
            $object->setKickoffs(null);
        }
        if (\array_key_exists('KickoffsInEndZone', $data) && $data['KickoffsInEndZone'] !== null) {
            $object->setKickoffsInEndZone($data['KickoffsInEndZone']);
        }
        elseif (\array_key_exists('KickoffsInEndZone', $data) && $data['KickoffsInEndZone'] === null) {
            $object->setKickoffsInEndZone(null);
        }
        if (\array_key_exists('KickoffTouchbacks', $data) && $data['KickoffTouchbacks'] !== null) {
            $object->setKickoffTouchbacks($data['KickoffTouchbacks']);
        }
        elseif (\array_key_exists('KickoffTouchbacks', $data) && $data['KickoffTouchbacks'] === null) {
            $object->setKickoffTouchbacks(null);
        }
        if (\array_key_exists('PuntsHadBlocked', $data) && $data['PuntsHadBlocked'] !== null) {
            $object->setPuntsHadBlocked($data['PuntsHadBlocked']);
        }
        elseif (\array_key_exists('PuntsHadBlocked', $data) && $data['PuntsHadBlocked'] === null) {
            $object->setPuntsHadBlocked(null);
        }
        if (\array_key_exists('PuntNetAverage', $data) && $data['PuntNetAverage'] !== null) {
            $object->setPuntNetAverage($data['PuntNetAverage']);
        }
        elseif (\array_key_exists('PuntNetAverage', $data) && $data['PuntNetAverage'] === null) {
            $object->setPuntNetAverage(null);
        }
        if (\array_key_exists('ExtraPointKickingAttempts', $data) && $data['ExtraPointKickingAttempts'] !== null) {
            $object->setExtraPointKickingAttempts($data['ExtraPointKickingAttempts']);
        }
        elseif (\array_key_exists('ExtraPointKickingAttempts', $data) && $data['ExtraPointKickingAttempts'] === null) {
            $object->setExtraPointKickingAttempts(null);
        }
        if (\array_key_exists('ExtraPointKickingConversions', $data) && $data['ExtraPointKickingConversions'] !== null) {
            $object->setExtraPointKickingConversions($data['ExtraPointKickingConversions']);
        }
        elseif (\array_key_exists('ExtraPointKickingConversions', $data) && $data['ExtraPointKickingConversions'] === null) {
            $object->setExtraPointKickingConversions(null);
        }
        if (\array_key_exists('ExtraPointsHadBlocked', $data) && $data['ExtraPointsHadBlocked'] !== null) {
            $object->setExtraPointsHadBlocked($data['ExtraPointsHadBlocked']);
        }
        elseif (\array_key_exists('ExtraPointsHadBlocked', $data) && $data['ExtraPointsHadBlocked'] === null) {
            $object->setExtraPointsHadBlocked(null);
        }
        if (\array_key_exists('ExtraPointPassingAttempts', $data) && $data['ExtraPointPassingAttempts'] !== null) {
            $object->setExtraPointPassingAttempts($data['ExtraPointPassingAttempts']);
        }
        elseif (\array_key_exists('ExtraPointPassingAttempts', $data) && $data['ExtraPointPassingAttempts'] === null) {
            $object->setExtraPointPassingAttempts(null);
        }
        if (\array_key_exists('ExtraPointPassingConversions', $data) && $data['ExtraPointPassingConversions'] !== null) {
            $object->setExtraPointPassingConversions($data['ExtraPointPassingConversions']);
        }
        elseif (\array_key_exists('ExtraPointPassingConversions', $data) && $data['ExtraPointPassingConversions'] === null) {
            $object->setExtraPointPassingConversions(null);
        }
        if (\array_key_exists('ExtraPointRushingAttempts', $data) && $data['ExtraPointRushingAttempts'] !== null) {
            $object->setExtraPointRushingAttempts($data['ExtraPointRushingAttempts']);
        }
        elseif (\array_key_exists('ExtraPointRushingAttempts', $data) && $data['ExtraPointRushingAttempts'] === null) {
            $object->setExtraPointRushingAttempts(null);
        }
        if (\array_key_exists('ExtraPointRushingConversions', $data) && $data['ExtraPointRushingConversions'] !== null) {
            $object->setExtraPointRushingConversions($data['ExtraPointRushingConversions']);
        }
        elseif (\array_key_exists('ExtraPointRushingConversions', $data) && $data['ExtraPointRushingConversions'] === null) {
            $object->setExtraPointRushingConversions(null);
        }
        if (\array_key_exists('FieldGoalAttempts', $data) && $data['FieldGoalAttempts'] !== null) {
            $object->setFieldGoalAttempts($data['FieldGoalAttempts']);
        }
        elseif (\array_key_exists('FieldGoalAttempts', $data) && $data['FieldGoalAttempts'] === null) {
            $object->setFieldGoalAttempts(null);
        }
        if (\array_key_exists('FieldGoalsMade', $data) && $data['FieldGoalsMade'] !== null) {
            $object->setFieldGoalsMade($data['FieldGoalsMade']);
        }
        elseif (\array_key_exists('FieldGoalsMade', $data) && $data['FieldGoalsMade'] === null) {
            $object->setFieldGoalsMade(null);
        }
        if (\array_key_exists('FieldGoalsHadBlocked', $data) && $data['FieldGoalsHadBlocked'] !== null) {
            $object->setFieldGoalsHadBlocked($data['FieldGoalsHadBlocked']);
        }
        elseif (\array_key_exists('FieldGoalsHadBlocked', $data) && $data['FieldGoalsHadBlocked'] === null) {
            $object->setFieldGoalsHadBlocked(null);
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
        if (\array_key_exists('InterceptionReturns', $data) && $data['InterceptionReturns'] !== null) {
            $object->setInterceptionReturns($data['InterceptionReturns']);
        }
        elseif (\array_key_exists('InterceptionReturns', $data) && $data['InterceptionReturns'] === null) {
            $object->setInterceptionReturns(null);
        }
        if (\array_key_exists('InterceptionReturnYards', $data) && $data['InterceptionReturnYards'] !== null) {
            $object->setInterceptionReturnYards($data['InterceptionReturnYards']);
        }
        elseif (\array_key_exists('InterceptionReturnYards', $data) && $data['InterceptionReturnYards'] === null) {
            $object->setInterceptionReturnYards(null);
        }
        if (\array_key_exists('OpponentKickoffs', $data) && $data['OpponentKickoffs'] !== null) {
            $object->setOpponentKickoffs($data['OpponentKickoffs']);
        }
        elseif (\array_key_exists('OpponentKickoffs', $data) && $data['OpponentKickoffs'] === null) {
            $object->setOpponentKickoffs(null);
        }
        if (\array_key_exists('OpponentKickoffsInEndZone', $data) && $data['OpponentKickoffsInEndZone'] !== null) {
            $object->setOpponentKickoffsInEndZone($data['OpponentKickoffsInEndZone']);
        }
        elseif (\array_key_exists('OpponentKickoffsInEndZone', $data) && $data['OpponentKickoffsInEndZone'] === null) {
            $object->setOpponentKickoffsInEndZone(null);
        }
        if (\array_key_exists('OpponentKickoffTouchbacks', $data) && $data['OpponentKickoffTouchbacks'] !== null) {
            $object->setOpponentKickoffTouchbacks($data['OpponentKickoffTouchbacks']);
        }
        elseif (\array_key_exists('OpponentKickoffTouchbacks', $data) && $data['OpponentKickoffTouchbacks'] === null) {
            $object->setOpponentKickoffTouchbacks(null);
        }
        if (\array_key_exists('OpponentPuntsHadBlocked', $data) && $data['OpponentPuntsHadBlocked'] !== null) {
            $object->setOpponentPuntsHadBlocked($data['OpponentPuntsHadBlocked']);
        }
        elseif (\array_key_exists('OpponentPuntsHadBlocked', $data) && $data['OpponentPuntsHadBlocked'] === null) {
            $object->setOpponentPuntsHadBlocked(null);
        }
        if (\array_key_exists('OpponentPuntNetAverage', $data) && $data['OpponentPuntNetAverage'] !== null) {
            $object->setOpponentPuntNetAverage($data['OpponentPuntNetAverage']);
        }
        elseif (\array_key_exists('OpponentPuntNetAverage', $data) && $data['OpponentPuntNetAverage'] === null) {
            $object->setOpponentPuntNetAverage(null);
        }
        if (\array_key_exists('OpponentExtraPointKickingAttempts', $data) && $data['OpponentExtraPointKickingAttempts'] !== null) {
            $object->setOpponentExtraPointKickingAttempts($data['OpponentExtraPointKickingAttempts']);
        }
        elseif (\array_key_exists('OpponentExtraPointKickingAttempts', $data) && $data['OpponentExtraPointKickingAttempts'] === null) {
            $object->setOpponentExtraPointKickingAttempts(null);
        }
        if (\array_key_exists('OpponentExtraPointKickingConversions', $data) && $data['OpponentExtraPointKickingConversions'] !== null) {
            $object->setOpponentExtraPointKickingConversions($data['OpponentExtraPointKickingConversions']);
        }
        elseif (\array_key_exists('OpponentExtraPointKickingConversions', $data) && $data['OpponentExtraPointKickingConversions'] === null) {
            $object->setOpponentExtraPointKickingConversions(null);
        }
        if (\array_key_exists('OpponentExtraPointsHadBlocked', $data) && $data['OpponentExtraPointsHadBlocked'] !== null) {
            $object->setOpponentExtraPointsHadBlocked($data['OpponentExtraPointsHadBlocked']);
        }
        elseif (\array_key_exists('OpponentExtraPointsHadBlocked', $data) && $data['OpponentExtraPointsHadBlocked'] === null) {
            $object->setOpponentExtraPointsHadBlocked(null);
        }
        if (\array_key_exists('OpponentExtraPointPassingAttempts', $data) && $data['OpponentExtraPointPassingAttempts'] !== null) {
            $object->setOpponentExtraPointPassingAttempts($data['OpponentExtraPointPassingAttempts']);
        }
        elseif (\array_key_exists('OpponentExtraPointPassingAttempts', $data) && $data['OpponentExtraPointPassingAttempts'] === null) {
            $object->setOpponentExtraPointPassingAttempts(null);
        }
        if (\array_key_exists('OpponentExtraPointPassingConversions', $data) && $data['OpponentExtraPointPassingConversions'] !== null) {
            $object->setOpponentExtraPointPassingConversions($data['OpponentExtraPointPassingConversions']);
        }
        elseif (\array_key_exists('OpponentExtraPointPassingConversions', $data) && $data['OpponentExtraPointPassingConversions'] === null) {
            $object->setOpponentExtraPointPassingConversions(null);
        }
        if (\array_key_exists('OpponentExtraPointRushingAttempts', $data) && $data['OpponentExtraPointRushingAttempts'] !== null) {
            $object->setOpponentExtraPointRushingAttempts($data['OpponentExtraPointRushingAttempts']);
        }
        elseif (\array_key_exists('OpponentExtraPointRushingAttempts', $data) && $data['OpponentExtraPointRushingAttempts'] === null) {
            $object->setOpponentExtraPointRushingAttempts(null);
        }
        if (\array_key_exists('OpponentExtraPointRushingConversions', $data) && $data['OpponentExtraPointRushingConversions'] !== null) {
            $object->setOpponentExtraPointRushingConversions($data['OpponentExtraPointRushingConversions']);
        }
        elseif (\array_key_exists('OpponentExtraPointRushingConversions', $data) && $data['OpponentExtraPointRushingConversions'] === null) {
            $object->setOpponentExtraPointRushingConversions(null);
        }
        if (\array_key_exists('OpponentFieldGoalAttempts', $data) && $data['OpponentFieldGoalAttempts'] !== null) {
            $object->setOpponentFieldGoalAttempts($data['OpponentFieldGoalAttempts']);
        }
        elseif (\array_key_exists('OpponentFieldGoalAttempts', $data) && $data['OpponentFieldGoalAttempts'] === null) {
            $object->setOpponentFieldGoalAttempts(null);
        }
        if (\array_key_exists('OpponentFieldGoalsMade', $data) && $data['OpponentFieldGoalsMade'] !== null) {
            $object->setOpponentFieldGoalsMade($data['OpponentFieldGoalsMade']);
        }
        elseif (\array_key_exists('OpponentFieldGoalsMade', $data) && $data['OpponentFieldGoalsMade'] === null) {
            $object->setOpponentFieldGoalsMade(null);
        }
        if (\array_key_exists('OpponentFieldGoalsHadBlocked', $data) && $data['OpponentFieldGoalsHadBlocked'] !== null) {
            $object->setOpponentFieldGoalsHadBlocked($data['OpponentFieldGoalsHadBlocked']);
        }
        elseif (\array_key_exists('OpponentFieldGoalsHadBlocked', $data) && $data['OpponentFieldGoalsHadBlocked'] === null) {
            $object->setOpponentFieldGoalsHadBlocked(null);
        }
        if (\array_key_exists('OpponentPuntReturns', $data) && $data['OpponentPuntReturns'] !== null) {
            $object->setOpponentPuntReturns($data['OpponentPuntReturns']);
        }
        elseif (\array_key_exists('OpponentPuntReturns', $data) && $data['OpponentPuntReturns'] === null) {
            $object->setOpponentPuntReturns(null);
        }
        if (\array_key_exists('OpponentPuntReturnYards', $data) && $data['OpponentPuntReturnYards'] !== null) {
            $object->setOpponentPuntReturnYards($data['OpponentPuntReturnYards']);
        }
        elseif (\array_key_exists('OpponentPuntReturnYards', $data) && $data['OpponentPuntReturnYards'] === null) {
            $object->setOpponentPuntReturnYards(null);
        }
        if (\array_key_exists('OpponentKickReturns', $data) && $data['OpponentKickReturns'] !== null) {
            $object->setOpponentKickReturns($data['OpponentKickReturns']);
        }
        elseif (\array_key_exists('OpponentKickReturns', $data) && $data['OpponentKickReturns'] === null) {
            $object->setOpponentKickReturns(null);
        }
        if (\array_key_exists('OpponentKickReturnYards', $data) && $data['OpponentKickReturnYards'] !== null) {
            $object->setOpponentKickReturnYards($data['OpponentKickReturnYards']);
        }
        elseif (\array_key_exists('OpponentKickReturnYards', $data) && $data['OpponentKickReturnYards'] === null) {
            $object->setOpponentKickReturnYards(null);
        }
        if (\array_key_exists('OpponentInterceptionReturns', $data) && $data['OpponentInterceptionReturns'] !== null) {
            $object->setOpponentInterceptionReturns($data['OpponentInterceptionReturns']);
        }
        elseif (\array_key_exists('OpponentInterceptionReturns', $data) && $data['OpponentInterceptionReturns'] === null) {
            $object->setOpponentInterceptionReturns(null);
        }
        if (\array_key_exists('OpponentInterceptionReturnYards', $data) && $data['OpponentInterceptionReturnYards'] !== null) {
            $object->setOpponentInterceptionReturnYards($data['OpponentInterceptionReturnYards']);
        }
        elseif (\array_key_exists('OpponentInterceptionReturnYards', $data) && $data['OpponentInterceptionReturnYards'] === null) {
            $object->setOpponentInterceptionReturnYards(null);
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
        if (\array_key_exists('InterceptionReturnTouchdowns', $data) && $data['InterceptionReturnTouchdowns'] !== null) {
            $object->setInterceptionReturnTouchdowns($data['InterceptionReturnTouchdowns']);
        }
        elseif (\array_key_exists('InterceptionReturnTouchdowns', $data) && $data['InterceptionReturnTouchdowns'] === null) {
            $object->setInterceptionReturnTouchdowns(null);
        }
        if (\array_key_exists('BlockedKicks', $data) && $data['BlockedKicks'] !== null) {
            $object->setBlockedKicks($data['BlockedKicks']);
        }
        elseif (\array_key_exists('BlockedKicks', $data) && $data['BlockedKicks'] === null) {
            $object->setBlockedKicks(null);
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
        if (\array_key_exists('PuntNetYards', $data) && $data['PuntNetYards'] !== null) {
            $object->setPuntNetYards($data['PuntNetYards']);
        }
        elseif (\array_key_exists('PuntNetYards', $data) && $data['PuntNetYards'] === null) {
            $object->setPuntNetYards(null);
        }
        if (\array_key_exists('OpponentSoloTackles', $data) && $data['OpponentSoloTackles'] !== null) {
            $object->setOpponentSoloTackles($data['OpponentSoloTackles']);
        }
        elseif (\array_key_exists('OpponentSoloTackles', $data) && $data['OpponentSoloTackles'] === null) {
            $object->setOpponentSoloTackles(null);
        }
        if (\array_key_exists('OpponentAssistedTackles', $data) && $data['OpponentAssistedTackles'] !== null) {
            $object->setOpponentAssistedTackles($data['OpponentAssistedTackles']);
        }
        elseif (\array_key_exists('OpponentAssistedTackles', $data) && $data['OpponentAssistedTackles'] === null) {
            $object->setOpponentAssistedTackles(null);
        }
        if (\array_key_exists('OpponentSacks', $data) && $data['OpponentSacks'] !== null) {
            $object->setOpponentSacks($data['OpponentSacks']);
        }
        elseif (\array_key_exists('OpponentSacks', $data) && $data['OpponentSacks'] === null) {
            $object->setOpponentSacks(null);
        }
        if (\array_key_exists('OpponentSackYards', $data) && $data['OpponentSackYards'] !== null) {
            $object->setOpponentSackYards($data['OpponentSackYards']);
        }
        elseif (\array_key_exists('OpponentSackYards', $data) && $data['OpponentSackYards'] === null) {
            $object->setOpponentSackYards(null);
        }
        if (\array_key_exists('OpponentPassesDefended', $data) && $data['OpponentPassesDefended'] !== null) {
            $object->setOpponentPassesDefended($data['OpponentPassesDefended']);
        }
        elseif (\array_key_exists('OpponentPassesDefended', $data) && $data['OpponentPassesDefended'] === null) {
            $object->setOpponentPassesDefended(null);
        }
        if (\array_key_exists('OpponentFumblesForced', $data) && $data['OpponentFumblesForced'] !== null) {
            $object->setOpponentFumblesForced($data['OpponentFumblesForced']);
        }
        elseif (\array_key_exists('OpponentFumblesForced', $data) && $data['OpponentFumblesForced'] === null) {
            $object->setOpponentFumblesForced(null);
        }
        if (\array_key_exists('OpponentFumblesRecovered', $data) && $data['OpponentFumblesRecovered'] !== null) {
            $object->setOpponentFumblesRecovered($data['OpponentFumblesRecovered']);
        }
        elseif (\array_key_exists('OpponentFumblesRecovered', $data) && $data['OpponentFumblesRecovered'] === null) {
            $object->setOpponentFumblesRecovered(null);
        }
        if (\array_key_exists('OpponentFumbleReturnYards', $data) && $data['OpponentFumbleReturnYards'] !== null) {
            $object->setOpponentFumbleReturnYards($data['OpponentFumbleReturnYards']);
        }
        elseif (\array_key_exists('OpponentFumbleReturnYards', $data) && $data['OpponentFumbleReturnYards'] === null) {
            $object->setOpponentFumbleReturnYards(null);
        }
        if (\array_key_exists('OpponentFumbleReturnTouchdowns', $data) && $data['OpponentFumbleReturnTouchdowns'] !== null) {
            $object->setOpponentFumbleReturnTouchdowns($data['OpponentFumbleReturnTouchdowns']);
        }
        elseif (\array_key_exists('OpponentFumbleReturnTouchdowns', $data) && $data['OpponentFumbleReturnTouchdowns'] === null) {
            $object->setOpponentFumbleReturnTouchdowns(null);
        }
        if (\array_key_exists('OpponentInterceptionReturnTouchdowns', $data) && $data['OpponentInterceptionReturnTouchdowns'] !== null) {
            $object->setOpponentInterceptionReturnTouchdowns($data['OpponentInterceptionReturnTouchdowns']);
        }
        elseif (\array_key_exists('OpponentInterceptionReturnTouchdowns', $data) && $data['OpponentInterceptionReturnTouchdowns'] === null) {
            $object->setOpponentInterceptionReturnTouchdowns(null);
        }
        if (\array_key_exists('OpponentBlockedKicks', $data) && $data['OpponentBlockedKicks'] !== null) {
            $object->setOpponentBlockedKicks($data['OpponentBlockedKicks']);
        }
        elseif (\array_key_exists('OpponentBlockedKicks', $data) && $data['OpponentBlockedKicks'] === null) {
            $object->setOpponentBlockedKicks(null);
        }
        if (\array_key_exists('OpponentPuntReturnTouchdowns', $data) && $data['OpponentPuntReturnTouchdowns'] !== null) {
            $object->setOpponentPuntReturnTouchdowns($data['OpponentPuntReturnTouchdowns']);
        }
        elseif (\array_key_exists('OpponentPuntReturnTouchdowns', $data) && $data['OpponentPuntReturnTouchdowns'] === null) {
            $object->setOpponentPuntReturnTouchdowns(null);
        }
        if (\array_key_exists('OpponentPuntReturnLong', $data) && $data['OpponentPuntReturnLong'] !== null) {
            $object->setOpponentPuntReturnLong($data['OpponentPuntReturnLong']);
        }
        elseif (\array_key_exists('OpponentPuntReturnLong', $data) && $data['OpponentPuntReturnLong'] === null) {
            $object->setOpponentPuntReturnLong(null);
        }
        if (\array_key_exists('OpponentKickReturnTouchdowns', $data) && $data['OpponentKickReturnTouchdowns'] !== null) {
            $object->setOpponentKickReturnTouchdowns($data['OpponentKickReturnTouchdowns']);
        }
        elseif (\array_key_exists('OpponentKickReturnTouchdowns', $data) && $data['OpponentKickReturnTouchdowns'] === null) {
            $object->setOpponentKickReturnTouchdowns(null);
        }
        if (\array_key_exists('OpponentKickReturnLong', $data) && $data['OpponentKickReturnLong'] !== null) {
            $object->setOpponentKickReturnLong($data['OpponentKickReturnLong']);
        }
        elseif (\array_key_exists('OpponentKickReturnLong', $data) && $data['OpponentKickReturnLong'] === null) {
            $object->setOpponentKickReturnLong(null);
        }
        if (\array_key_exists('OpponentBlockedKickReturnYards', $data) && $data['OpponentBlockedKickReturnYards'] !== null) {
            $object->setOpponentBlockedKickReturnYards($data['OpponentBlockedKickReturnYards']);
        }
        elseif (\array_key_exists('OpponentBlockedKickReturnYards', $data) && $data['OpponentBlockedKickReturnYards'] === null) {
            $object->setOpponentBlockedKickReturnYards(null);
        }
        if (\array_key_exists('OpponentBlockedKickReturnTouchdowns', $data) && $data['OpponentBlockedKickReturnTouchdowns'] !== null) {
            $object->setOpponentBlockedKickReturnTouchdowns($data['OpponentBlockedKickReturnTouchdowns']);
        }
        elseif (\array_key_exists('OpponentBlockedKickReturnTouchdowns', $data) && $data['OpponentBlockedKickReturnTouchdowns'] === null) {
            $object->setOpponentBlockedKickReturnTouchdowns(null);
        }
        if (\array_key_exists('OpponentFieldGoalReturnYards', $data) && $data['OpponentFieldGoalReturnYards'] !== null) {
            $object->setOpponentFieldGoalReturnYards($data['OpponentFieldGoalReturnYards']);
        }
        elseif (\array_key_exists('OpponentFieldGoalReturnYards', $data) && $data['OpponentFieldGoalReturnYards'] === null) {
            $object->setOpponentFieldGoalReturnYards(null);
        }
        if (\array_key_exists('OpponentFieldGoalReturnTouchdowns', $data) && $data['OpponentFieldGoalReturnTouchdowns'] !== null) {
            $object->setOpponentFieldGoalReturnTouchdowns($data['OpponentFieldGoalReturnTouchdowns']);
        }
        elseif (\array_key_exists('OpponentFieldGoalReturnTouchdowns', $data) && $data['OpponentFieldGoalReturnTouchdowns'] === null) {
            $object->setOpponentFieldGoalReturnTouchdowns(null);
        }
        if (\array_key_exists('OpponentPuntNetYards', $data) && $data['OpponentPuntNetYards'] !== null) {
            $object->setOpponentPuntNetYards($data['OpponentPuntNetYards']);
        }
        elseif (\array_key_exists('OpponentPuntNetYards', $data) && $data['OpponentPuntNetYards'] === null) {
            $object->setOpponentPuntNetYards(null);
        }
        if (\array_key_exists('TeamName', $data) && $data['TeamName'] !== null) {
            $object->setTeamName($data['TeamName']);
        }
        elseif (\array_key_exists('TeamName', $data) && $data['TeamName'] === null) {
            $object->setTeamName(null);
        }
        if (\array_key_exists('Games', $data) && $data['Games'] !== null) {
            $object->setGames($data['Games']);
        }
        elseif (\array_key_exists('Games', $data) && $data['Games'] === null) {
            $object->setGames(null);
        }
        if (\array_key_exists('PassingDropbacks', $data) && $data['PassingDropbacks'] !== null) {
            $object->setPassingDropbacks($data['PassingDropbacks']);
        }
        elseif (\array_key_exists('PassingDropbacks', $data) && $data['PassingDropbacks'] === null) {
            $object->setPassingDropbacks(null);
        }
        if (\array_key_exists('OpponentPassingDropbacks', $data) && $data['OpponentPassingDropbacks'] !== null) {
            $object->setOpponentPassingDropbacks($data['OpponentPassingDropbacks']);
        }
        elseif (\array_key_exists('OpponentPassingDropbacks', $data) && $data['OpponentPassingDropbacks'] === null) {
            $object->setOpponentPassingDropbacks(null);
        }
        if (\array_key_exists('TeamSeasonID', $data)) {
            $object->setTeamSeasonID($data['TeamSeasonID']);
        }
        if (\array_key_exists('PointDifferential', $data) && $data['PointDifferential'] !== null) {
            $object->setPointDifferential($data['PointDifferential']);
        }
        elseif (\array_key_exists('PointDifferential', $data) && $data['PointDifferential'] === null) {
            $object->setPointDifferential(null);
        }
        if (\array_key_exists('PassingInterceptionPercentage', $data) && $data['PassingInterceptionPercentage'] !== null) {
            $object->setPassingInterceptionPercentage($data['PassingInterceptionPercentage']);
        }
        elseif (\array_key_exists('PassingInterceptionPercentage', $data) && $data['PassingInterceptionPercentage'] === null) {
            $object->setPassingInterceptionPercentage(null);
        }
        if (\array_key_exists('PuntReturnAverage', $data) && $data['PuntReturnAverage'] !== null) {
            $object->setPuntReturnAverage($data['PuntReturnAverage']);
        }
        elseif (\array_key_exists('PuntReturnAverage', $data) && $data['PuntReturnAverage'] === null) {
            $object->setPuntReturnAverage(null);
        }
        if (\array_key_exists('KickReturnAverage', $data) && $data['KickReturnAverage'] !== null) {
            $object->setKickReturnAverage($data['KickReturnAverage']);
        }
        elseif (\array_key_exists('KickReturnAverage', $data) && $data['KickReturnAverage'] === null) {
            $object->setKickReturnAverage(null);
        }
        if (\array_key_exists('ExtraPointPercentage', $data) && $data['ExtraPointPercentage'] !== null) {
            $object->setExtraPointPercentage($data['ExtraPointPercentage']);
        }
        elseif (\array_key_exists('ExtraPointPercentage', $data) && $data['ExtraPointPercentage'] === null) {
            $object->setExtraPointPercentage(null);
        }
        if (\array_key_exists('FieldGoalPercentage', $data) && $data['FieldGoalPercentage'] !== null) {
            $object->setFieldGoalPercentage($data['FieldGoalPercentage']);
        }
        elseif (\array_key_exists('FieldGoalPercentage', $data) && $data['FieldGoalPercentage'] === null) {
            $object->setFieldGoalPercentage(null);
        }
        if (\array_key_exists('OpponentPassingInterceptionPercentage', $data) && $data['OpponentPassingInterceptionPercentage'] !== null) {
            $object->setOpponentPassingInterceptionPercentage($data['OpponentPassingInterceptionPercentage']);
        }
        elseif (\array_key_exists('OpponentPassingInterceptionPercentage', $data) && $data['OpponentPassingInterceptionPercentage'] === null) {
            $object->setOpponentPassingInterceptionPercentage(null);
        }
        if (\array_key_exists('OpponentPuntReturnAverage', $data) && $data['OpponentPuntReturnAverage'] !== null) {
            $object->setOpponentPuntReturnAverage($data['OpponentPuntReturnAverage']);
        }
        elseif (\array_key_exists('OpponentPuntReturnAverage', $data) && $data['OpponentPuntReturnAverage'] === null) {
            $object->setOpponentPuntReturnAverage(null);
        }
        if (\array_key_exists('OpponentKickReturnAverage', $data) && $data['OpponentKickReturnAverage'] !== null) {
            $object->setOpponentKickReturnAverage($data['OpponentKickReturnAverage']);
        }
        elseif (\array_key_exists('OpponentKickReturnAverage', $data) && $data['OpponentKickReturnAverage'] === null) {
            $object->setOpponentKickReturnAverage(null);
        }
        if (\array_key_exists('OpponentExtraPointPercentage', $data) && $data['OpponentExtraPointPercentage'] !== null) {
            $object->setOpponentExtraPointPercentage($data['OpponentExtraPointPercentage']);
        }
        elseif (\array_key_exists('OpponentExtraPointPercentage', $data) && $data['OpponentExtraPointPercentage'] === null) {
            $object->setOpponentExtraPointPercentage(null);
        }
        if (\array_key_exists('OpponentFieldGoalPercentage', $data) && $data['OpponentFieldGoalPercentage'] !== null) {
            $object->setOpponentFieldGoalPercentage($data['OpponentFieldGoalPercentage']);
        }
        elseif (\array_key_exists('OpponentFieldGoalPercentage', $data) && $data['OpponentFieldGoalPercentage'] === null) {
            $object->setOpponentFieldGoalPercentage(null);
        }
        if (\array_key_exists('PenaltyYardDifferential', $data) && $data['PenaltyYardDifferential'] !== null) {
            $object->setPenaltyYardDifferential($data['PenaltyYardDifferential']);
        }
        elseif (\array_key_exists('PenaltyYardDifferential', $data) && $data['PenaltyYardDifferential'] === null) {
            $object->setPenaltyYardDifferential(null);
        }
        if (\array_key_exists('PuntReturnYardDifferential', $data) && $data['PuntReturnYardDifferential'] !== null) {
            $object->setPuntReturnYardDifferential($data['PuntReturnYardDifferential']);
        }
        elseif (\array_key_exists('PuntReturnYardDifferential', $data) && $data['PuntReturnYardDifferential'] === null) {
            $object->setPuntReturnYardDifferential(null);
        }
        if (\array_key_exists('KickReturnYardDifferential', $data) && $data['KickReturnYardDifferential'] !== null) {
            $object->setKickReturnYardDifferential($data['KickReturnYardDifferential']);
        }
        elseif (\array_key_exists('KickReturnYardDifferential', $data) && $data['KickReturnYardDifferential'] === null) {
            $object->setKickReturnYardDifferential(null);
        }
        if (\array_key_exists('TwoPointConversionReturns', $data) && $data['TwoPointConversionReturns'] !== null) {
            $object->setTwoPointConversionReturns($data['TwoPointConversionReturns']);
        }
        elseif (\array_key_exists('TwoPointConversionReturns', $data) && $data['TwoPointConversionReturns'] === null) {
            $object->setTwoPointConversionReturns(null);
        }
        if (\array_key_exists('OpponentTwoPointConversionReturns', $data) && $data['OpponentTwoPointConversionReturns'] !== null) {
            $object->setOpponentTwoPointConversionReturns($data['OpponentTwoPointConversionReturns']);
        }
        elseif (\array_key_exists('OpponentTwoPointConversionReturns', $data) && $data['OpponentTwoPointConversionReturns'] === null) {
            $object->setOpponentTwoPointConversionReturns(null);
        }
        if (\array_key_exists('TeamID', $data) && $data['TeamID'] !== null) {
            $object->setTeamID($data['TeamID']);
        }
        elseif (\array_key_exists('TeamID', $data) && $data['TeamID'] === null) {
            $object->setTeamID(null);
        }
        if (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] !== null) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        elseif (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] === null) {
            $object->setGlobalTeamID(null);
        }
        if (\array_key_exists('TeamStatID', $data)) {
            $object->setTeamStatID($data['TeamStatID']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
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
        if (null !== $object->getTotalScore()) {
            $data['TotalScore'] = $object->getTotalScore();
        }
        if (null !== $object->getTemperature()) {
            $data['Temperature'] = $object->getTemperature();
        }
        if (null !== $object->getHumidity()) {
            $data['Humidity'] = $object->getHumidity();
        }
        if (null !== $object->getWindSpeed()) {
            $data['WindSpeed'] = $object->getWindSpeed();
        }
        if (null !== $object->getOverUnder()) {
            $data['OverUnder'] = $object->getOverUnder();
        }
        if (null !== $object->getPointSpread()) {
            $data['PointSpread'] = $object->getPointSpread();
        }
        if (null !== $object->getScoreQuarter1()) {
            $data['ScoreQuarter1'] = $object->getScoreQuarter1();
        }
        if (null !== $object->getScoreQuarter2()) {
            $data['ScoreQuarter2'] = $object->getScoreQuarter2();
        }
        if (null !== $object->getScoreQuarter3()) {
            $data['ScoreQuarter3'] = $object->getScoreQuarter3();
        }
        if (null !== $object->getScoreQuarter4()) {
            $data['ScoreQuarter4'] = $object->getScoreQuarter4();
        }
        if (null !== $object->getScoreOvertime()) {
            $data['ScoreOvertime'] = $object->getScoreOvertime();
        }
        if (null !== $object->getTimeOfPossession()) {
            $data['TimeOfPossession'] = $object->getTimeOfPossession();
        }
        if (null !== $object->getFirstDowns()) {
            $data['FirstDowns'] = $object->getFirstDowns();
        }
        if (null !== $object->getFirstDownsByRushing()) {
            $data['FirstDownsByRushing'] = $object->getFirstDownsByRushing();
        }
        if (null !== $object->getFirstDownsByPassing()) {
            $data['FirstDownsByPassing'] = $object->getFirstDownsByPassing();
        }
        if (null !== $object->getFirstDownsByPenalty()) {
            $data['FirstDownsByPenalty'] = $object->getFirstDownsByPenalty();
        }
        if (null !== $object->getOffensivePlays()) {
            $data['OffensivePlays'] = $object->getOffensivePlays();
        }
        if (null !== $object->getOffensiveYards()) {
            $data['OffensiveYards'] = $object->getOffensiveYards();
        }
        if (null !== $object->getOffensiveYardsPerPlay()) {
            $data['OffensiveYardsPerPlay'] = $object->getOffensiveYardsPerPlay();
        }
        if (null !== $object->getTouchdowns()) {
            $data['Touchdowns'] = $object->getTouchdowns();
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
        if (null !== $object->getPassingYardsPerAttempt()) {
            $data['PassingYardsPerAttempt'] = $object->getPassingYardsPerAttempt();
        }
        if (null !== $object->getPassingYardsPerCompletion()) {
            $data['PassingYardsPerCompletion'] = $object->getPassingYardsPerCompletion();
        }
        if (null !== $object->getCompletionPercentage()) {
            $data['CompletionPercentage'] = $object->getCompletionPercentage();
        }
        if (null !== $object->getPasserRating()) {
            $data['PasserRating'] = $object->getPasserRating();
        }
        if (null !== $object->getThirdDownAttempts()) {
            $data['ThirdDownAttempts'] = $object->getThirdDownAttempts();
        }
        if (null !== $object->getThirdDownConversions()) {
            $data['ThirdDownConversions'] = $object->getThirdDownConversions();
        }
        if (null !== $object->getThirdDownPercentage()) {
            $data['ThirdDownPercentage'] = $object->getThirdDownPercentage();
        }
        if (null !== $object->getFourthDownAttempts()) {
            $data['FourthDownAttempts'] = $object->getFourthDownAttempts();
        }
        if (null !== $object->getFourthDownConversions()) {
            $data['FourthDownConversions'] = $object->getFourthDownConversions();
        }
        if (null !== $object->getFourthDownPercentage()) {
            $data['FourthDownPercentage'] = $object->getFourthDownPercentage();
        }
        if (null !== $object->getRedZoneAttempts()) {
            $data['RedZoneAttempts'] = $object->getRedZoneAttempts();
        }
        if (null !== $object->getRedZoneConversions()) {
            $data['RedZoneConversions'] = $object->getRedZoneConversions();
        }
        if (null !== $object->getGoalToGoAttempts()) {
            $data['GoalToGoAttempts'] = $object->getGoalToGoAttempts();
        }
        if (null !== $object->getGoalToGoConversions()) {
            $data['GoalToGoConversions'] = $object->getGoalToGoConversions();
        }
        if (null !== $object->getReturnYards()) {
            $data['ReturnYards'] = $object->getReturnYards();
        }
        if (null !== $object->getPenalties()) {
            $data['Penalties'] = $object->getPenalties();
        }
        if (null !== $object->getPenaltyYards()) {
            $data['PenaltyYards'] = $object->getPenaltyYards();
        }
        if (null !== $object->getFumbles()) {
            $data['Fumbles'] = $object->getFumbles();
        }
        if (null !== $object->getFumblesLost()) {
            $data['FumblesLost'] = $object->getFumblesLost();
        }
        if (null !== $object->getTimesSacked()) {
            $data['TimesSacked'] = $object->getTimesSacked();
        }
        if (null !== $object->getTimesSackedYards()) {
            $data['TimesSackedYards'] = $object->getTimesSackedYards();
        }
        if (null !== $object->getQuarterbackHits()) {
            $data['QuarterbackHits'] = $object->getQuarterbackHits();
        }
        if (null !== $object->getTacklesForLoss()) {
            $data['TacklesForLoss'] = $object->getTacklesForLoss();
        }
        if (null !== $object->getSafeties()) {
            $data['Safeties'] = $object->getSafeties();
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
        if (null !== $object->getGiveaways()) {
            $data['Giveaways'] = $object->getGiveaways();
        }
        if (null !== $object->getTakeaways()) {
            $data['Takeaways'] = $object->getTakeaways();
        }
        if (null !== $object->getTurnoverDifferential()) {
            $data['TurnoverDifferential'] = $object->getTurnoverDifferential();
        }
        if (null !== $object->getOpponentScoreQuarter1()) {
            $data['OpponentScoreQuarter1'] = $object->getOpponentScoreQuarter1();
        }
        if (null !== $object->getOpponentScoreQuarter2()) {
            $data['OpponentScoreQuarter2'] = $object->getOpponentScoreQuarter2();
        }
        if (null !== $object->getOpponentScoreQuarter3()) {
            $data['OpponentScoreQuarter3'] = $object->getOpponentScoreQuarter3();
        }
        if (null !== $object->getOpponentScoreQuarter4()) {
            $data['OpponentScoreQuarter4'] = $object->getOpponentScoreQuarter4();
        }
        if (null !== $object->getOpponentScoreOvertime()) {
            $data['OpponentScoreOvertime'] = $object->getOpponentScoreOvertime();
        }
        if (null !== $object->getOpponentTimeOfPossession()) {
            $data['OpponentTimeOfPossession'] = $object->getOpponentTimeOfPossession();
        }
        if (null !== $object->getOpponentFirstDowns()) {
            $data['OpponentFirstDowns'] = $object->getOpponentFirstDowns();
        }
        if (null !== $object->getOpponentFirstDownsByRushing()) {
            $data['OpponentFirstDownsByRushing'] = $object->getOpponentFirstDownsByRushing();
        }
        if (null !== $object->getOpponentFirstDownsByPassing()) {
            $data['OpponentFirstDownsByPassing'] = $object->getOpponentFirstDownsByPassing();
        }
        if (null !== $object->getOpponentFirstDownsByPenalty()) {
            $data['OpponentFirstDownsByPenalty'] = $object->getOpponentFirstDownsByPenalty();
        }
        if (null !== $object->getOpponentOffensivePlays()) {
            $data['OpponentOffensivePlays'] = $object->getOpponentOffensivePlays();
        }
        if (null !== $object->getOpponentOffensiveYards()) {
            $data['OpponentOffensiveYards'] = $object->getOpponentOffensiveYards();
        }
        if (null !== $object->getOpponentOffensiveYardsPerPlay()) {
            $data['OpponentOffensiveYardsPerPlay'] = $object->getOpponentOffensiveYardsPerPlay();
        }
        if (null !== $object->getOpponentTouchdowns()) {
            $data['OpponentTouchdowns'] = $object->getOpponentTouchdowns();
        }
        if (null !== $object->getOpponentRushingAttempts()) {
            $data['OpponentRushingAttempts'] = $object->getOpponentRushingAttempts();
        }
        if (null !== $object->getOpponentRushingYards()) {
            $data['OpponentRushingYards'] = $object->getOpponentRushingYards();
        }
        if (null !== $object->getOpponentRushingYardsPerAttempt()) {
            $data['OpponentRushingYardsPerAttempt'] = $object->getOpponentRushingYardsPerAttempt();
        }
        if (null !== $object->getOpponentRushingTouchdowns()) {
            $data['OpponentRushingTouchdowns'] = $object->getOpponentRushingTouchdowns();
        }
        if (null !== $object->getOpponentPassingAttempts()) {
            $data['OpponentPassingAttempts'] = $object->getOpponentPassingAttempts();
        }
        if (null !== $object->getOpponentPassingCompletions()) {
            $data['OpponentPassingCompletions'] = $object->getOpponentPassingCompletions();
        }
        if (null !== $object->getOpponentPassingYards()) {
            $data['OpponentPassingYards'] = $object->getOpponentPassingYards();
        }
        if (null !== $object->getOpponentPassingTouchdowns()) {
            $data['OpponentPassingTouchdowns'] = $object->getOpponentPassingTouchdowns();
        }
        if (null !== $object->getOpponentPassingInterceptions()) {
            $data['OpponentPassingInterceptions'] = $object->getOpponentPassingInterceptions();
        }
        if (null !== $object->getOpponentPassingYardsPerAttempt()) {
            $data['OpponentPassingYardsPerAttempt'] = $object->getOpponentPassingYardsPerAttempt();
        }
        if (null !== $object->getOpponentPassingYardsPerCompletion()) {
            $data['OpponentPassingYardsPerCompletion'] = $object->getOpponentPassingYardsPerCompletion();
        }
        if (null !== $object->getOpponentCompletionPercentage()) {
            $data['OpponentCompletionPercentage'] = $object->getOpponentCompletionPercentage();
        }
        if (null !== $object->getOpponentPasserRating()) {
            $data['OpponentPasserRating'] = $object->getOpponentPasserRating();
        }
        if (null !== $object->getOpponentThirdDownAttempts()) {
            $data['OpponentThirdDownAttempts'] = $object->getOpponentThirdDownAttempts();
        }
        if (null !== $object->getOpponentThirdDownConversions()) {
            $data['OpponentThirdDownConversions'] = $object->getOpponentThirdDownConversions();
        }
        if (null !== $object->getOpponentThirdDownPercentage()) {
            $data['OpponentThirdDownPercentage'] = $object->getOpponentThirdDownPercentage();
        }
        if (null !== $object->getOpponentFourthDownAttempts()) {
            $data['OpponentFourthDownAttempts'] = $object->getOpponentFourthDownAttempts();
        }
        if (null !== $object->getOpponentFourthDownConversions()) {
            $data['OpponentFourthDownConversions'] = $object->getOpponentFourthDownConversions();
        }
        if (null !== $object->getOpponentFourthDownPercentage()) {
            $data['OpponentFourthDownPercentage'] = $object->getOpponentFourthDownPercentage();
        }
        if (null !== $object->getOpponentRedZoneAttempts()) {
            $data['OpponentRedZoneAttempts'] = $object->getOpponentRedZoneAttempts();
        }
        if (null !== $object->getOpponentRedZoneConversions()) {
            $data['OpponentRedZoneConversions'] = $object->getOpponentRedZoneConversions();
        }
        if (null !== $object->getOpponentGoalToGoAttempts()) {
            $data['OpponentGoalToGoAttempts'] = $object->getOpponentGoalToGoAttempts();
        }
        if (null !== $object->getOpponentGoalToGoConversions()) {
            $data['OpponentGoalToGoConversions'] = $object->getOpponentGoalToGoConversions();
        }
        if (null !== $object->getOpponentReturnYards()) {
            $data['OpponentReturnYards'] = $object->getOpponentReturnYards();
        }
        if (null !== $object->getOpponentPenalties()) {
            $data['OpponentPenalties'] = $object->getOpponentPenalties();
        }
        if (null !== $object->getOpponentPenaltyYards()) {
            $data['OpponentPenaltyYards'] = $object->getOpponentPenaltyYards();
        }
        if (null !== $object->getOpponentFumbles()) {
            $data['OpponentFumbles'] = $object->getOpponentFumbles();
        }
        if (null !== $object->getOpponentFumblesLost()) {
            $data['OpponentFumblesLost'] = $object->getOpponentFumblesLost();
        }
        if (null !== $object->getOpponentTimesSacked()) {
            $data['OpponentTimesSacked'] = $object->getOpponentTimesSacked();
        }
        if (null !== $object->getOpponentTimesSackedYards()) {
            $data['OpponentTimesSackedYards'] = $object->getOpponentTimesSackedYards();
        }
        if (null !== $object->getOpponentQuarterbackHits()) {
            $data['OpponentQuarterbackHits'] = $object->getOpponentQuarterbackHits();
        }
        if (null !== $object->getOpponentTacklesForLoss()) {
            $data['OpponentTacklesForLoss'] = $object->getOpponentTacklesForLoss();
        }
        if (null !== $object->getOpponentSafeties()) {
            $data['OpponentSafeties'] = $object->getOpponentSafeties();
        }
        if (null !== $object->getOpponentPunts()) {
            $data['OpponentPunts'] = $object->getOpponentPunts();
        }
        if (null !== $object->getOpponentPuntYards()) {
            $data['OpponentPuntYards'] = $object->getOpponentPuntYards();
        }
        if (null !== $object->getOpponentPuntAverage()) {
            $data['OpponentPuntAverage'] = $object->getOpponentPuntAverage();
        }
        if (null !== $object->getOpponentGiveaways()) {
            $data['OpponentGiveaways'] = $object->getOpponentGiveaways();
        }
        if (null !== $object->getOpponentTakeaways()) {
            $data['OpponentTakeaways'] = $object->getOpponentTakeaways();
        }
        if (null !== $object->getOpponentTurnoverDifferential()) {
            $data['OpponentTurnoverDifferential'] = $object->getOpponentTurnoverDifferential();
        }
        if (null !== $object->getRedZonePercentage()) {
            $data['RedZonePercentage'] = $object->getRedZonePercentage();
        }
        if (null !== $object->getGoalToGoPercentage()) {
            $data['GoalToGoPercentage'] = $object->getGoalToGoPercentage();
        }
        if (null !== $object->getQuarterbackHitsDifferential()) {
            $data['QuarterbackHitsDifferential'] = $object->getQuarterbackHitsDifferential();
        }
        if (null !== $object->getTacklesForLossDifferential()) {
            $data['TacklesForLossDifferential'] = $object->getTacklesForLossDifferential();
        }
        if (null !== $object->getQuarterbackSacksDifferential()) {
            $data['QuarterbackSacksDifferential'] = $object->getQuarterbackSacksDifferential();
        }
        if (null !== $object->getTacklesForLossPercentage()) {
            $data['TacklesForLossPercentage'] = $object->getTacklesForLossPercentage();
        }
        if (null !== $object->getQuarterbackHitsPercentage()) {
            $data['QuarterbackHitsPercentage'] = $object->getQuarterbackHitsPercentage();
        }
        if (null !== $object->getTimesSackedPercentage()) {
            $data['TimesSackedPercentage'] = $object->getTimesSackedPercentage();
        }
        if (null !== $object->getOpponentRedZonePercentage()) {
            $data['OpponentRedZonePercentage'] = $object->getOpponentRedZonePercentage();
        }
        if (null !== $object->getOpponentGoalToGoPercentage()) {
            $data['OpponentGoalToGoPercentage'] = $object->getOpponentGoalToGoPercentage();
        }
        if (null !== $object->getOpponentQuarterbackHitsDifferential()) {
            $data['OpponentQuarterbackHitsDifferential'] = $object->getOpponentQuarterbackHitsDifferential();
        }
        if (null !== $object->getOpponentTacklesForLossDifferential()) {
            $data['OpponentTacklesForLossDifferential'] = $object->getOpponentTacklesForLossDifferential();
        }
        if (null !== $object->getOpponentQuarterbackSacksDifferential()) {
            $data['OpponentQuarterbackSacksDifferential'] = $object->getOpponentQuarterbackSacksDifferential();
        }
        if (null !== $object->getOpponentTacklesForLossPercentage()) {
            $data['OpponentTacklesForLossPercentage'] = $object->getOpponentTacklesForLossPercentage();
        }
        if (null !== $object->getOpponentQuarterbackHitsPercentage()) {
            $data['OpponentQuarterbackHitsPercentage'] = $object->getOpponentQuarterbackHitsPercentage();
        }
        if (null !== $object->getOpponentTimesSackedPercentage()) {
            $data['OpponentTimesSackedPercentage'] = $object->getOpponentTimesSackedPercentage();
        }
        if (null !== $object->getKickoffs()) {
            $data['Kickoffs'] = $object->getKickoffs();
        }
        if (null !== $object->getKickoffsInEndZone()) {
            $data['KickoffsInEndZone'] = $object->getKickoffsInEndZone();
        }
        if (null !== $object->getKickoffTouchbacks()) {
            $data['KickoffTouchbacks'] = $object->getKickoffTouchbacks();
        }
        if (null !== $object->getPuntsHadBlocked()) {
            $data['PuntsHadBlocked'] = $object->getPuntsHadBlocked();
        }
        if (null !== $object->getPuntNetAverage()) {
            $data['PuntNetAverage'] = $object->getPuntNetAverage();
        }
        if (null !== $object->getExtraPointKickingAttempts()) {
            $data['ExtraPointKickingAttempts'] = $object->getExtraPointKickingAttempts();
        }
        if (null !== $object->getExtraPointKickingConversions()) {
            $data['ExtraPointKickingConversions'] = $object->getExtraPointKickingConversions();
        }
        if (null !== $object->getExtraPointsHadBlocked()) {
            $data['ExtraPointsHadBlocked'] = $object->getExtraPointsHadBlocked();
        }
        if (null !== $object->getExtraPointPassingAttempts()) {
            $data['ExtraPointPassingAttempts'] = $object->getExtraPointPassingAttempts();
        }
        if (null !== $object->getExtraPointPassingConversions()) {
            $data['ExtraPointPassingConversions'] = $object->getExtraPointPassingConversions();
        }
        if (null !== $object->getExtraPointRushingAttempts()) {
            $data['ExtraPointRushingAttempts'] = $object->getExtraPointRushingAttempts();
        }
        if (null !== $object->getExtraPointRushingConversions()) {
            $data['ExtraPointRushingConversions'] = $object->getExtraPointRushingConversions();
        }
        if (null !== $object->getFieldGoalAttempts()) {
            $data['FieldGoalAttempts'] = $object->getFieldGoalAttempts();
        }
        if (null !== $object->getFieldGoalsMade()) {
            $data['FieldGoalsMade'] = $object->getFieldGoalsMade();
        }
        if (null !== $object->getFieldGoalsHadBlocked()) {
            $data['FieldGoalsHadBlocked'] = $object->getFieldGoalsHadBlocked();
        }
        if (null !== $object->getPuntReturns()) {
            $data['PuntReturns'] = $object->getPuntReturns();
        }
        if (null !== $object->getPuntReturnYards()) {
            $data['PuntReturnYards'] = $object->getPuntReturnYards();
        }
        if (null !== $object->getKickReturns()) {
            $data['KickReturns'] = $object->getKickReturns();
        }
        if (null !== $object->getKickReturnYards()) {
            $data['KickReturnYards'] = $object->getKickReturnYards();
        }
        if (null !== $object->getInterceptionReturns()) {
            $data['InterceptionReturns'] = $object->getInterceptionReturns();
        }
        if (null !== $object->getInterceptionReturnYards()) {
            $data['InterceptionReturnYards'] = $object->getInterceptionReturnYards();
        }
        if (null !== $object->getOpponentKickoffs()) {
            $data['OpponentKickoffs'] = $object->getOpponentKickoffs();
        }
        if (null !== $object->getOpponentKickoffsInEndZone()) {
            $data['OpponentKickoffsInEndZone'] = $object->getOpponentKickoffsInEndZone();
        }
        if (null !== $object->getOpponentKickoffTouchbacks()) {
            $data['OpponentKickoffTouchbacks'] = $object->getOpponentKickoffTouchbacks();
        }
        if (null !== $object->getOpponentPuntsHadBlocked()) {
            $data['OpponentPuntsHadBlocked'] = $object->getOpponentPuntsHadBlocked();
        }
        if (null !== $object->getOpponentPuntNetAverage()) {
            $data['OpponentPuntNetAverage'] = $object->getOpponentPuntNetAverage();
        }
        if (null !== $object->getOpponentExtraPointKickingAttempts()) {
            $data['OpponentExtraPointKickingAttempts'] = $object->getOpponentExtraPointKickingAttempts();
        }
        if (null !== $object->getOpponentExtraPointKickingConversions()) {
            $data['OpponentExtraPointKickingConversions'] = $object->getOpponentExtraPointKickingConversions();
        }
        if (null !== $object->getOpponentExtraPointsHadBlocked()) {
            $data['OpponentExtraPointsHadBlocked'] = $object->getOpponentExtraPointsHadBlocked();
        }
        if (null !== $object->getOpponentExtraPointPassingAttempts()) {
            $data['OpponentExtraPointPassingAttempts'] = $object->getOpponentExtraPointPassingAttempts();
        }
        if (null !== $object->getOpponentExtraPointPassingConversions()) {
            $data['OpponentExtraPointPassingConversions'] = $object->getOpponentExtraPointPassingConversions();
        }
        if (null !== $object->getOpponentExtraPointRushingAttempts()) {
            $data['OpponentExtraPointRushingAttempts'] = $object->getOpponentExtraPointRushingAttempts();
        }
        if (null !== $object->getOpponentExtraPointRushingConversions()) {
            $data['OpponentExtraPointRushingConversions'] = $object->getOpponentExtraPointRushingConversions();
        }
        if (null !== $object->getOpponentFieldGoalAttempts()) {
            $data['OpponentFieldGoalAttempts'] = $object->getOpponentFieldGoalAttempts();
        }
        if (null !== $object->getOpponentFieldGoalsMade()) {
            $data['OpponentFieldGoalsMade'] = $object->getOpponentFieldGoalsMade();
        }
        if (null !== $object->getOpponentFieldGoalsHadBlocked()) {
            $data['OpponentFieldGoalsHadBlocked'] = $object->getOpponentFieldGoalsHadBlocked();
        }
        if (null !== $object->getOpponentPuntReturns()) {
            $data['OpponentPuntReturns'] = $object->getOpponentPuntReturns();
        }
        if (null !== $object->getOpponentPuntReturnYards()) {
            $data['OpponentPuntReturnYards'] = $object->getOpponentPuntReturnYards();
        }
        if (null !== $object->getOpponentKickReturns()) {
            $data['OpponentKickReturns'] = $object->getOpponentKickReturns();
        }
        if (null !== $object->getOpponentKickReturnYards()) {
            $data['OpponentKickReturnYards'] = $object->getOpponentKickReturnYards();
        }
        if (null !== $object->getOpponentInterceptionReturns()) {
            $data['OpponentInterceptionReturns'] = $object->getOpponentInterceptionReturns();
        }
        if (null !== $object->getOpponentInterceptionReturnYards()) {
            $data['OpponentInterceptionReturnYards'] = $object->getOpponentInterceptionReturnYards();
        }
        if (null !== $object->getSoloTackles()) {
            $data['SoloTackles'] = $object->getSoloTackles();
        }
        if (null !== $object->getAssistedTackles()) {
            $data['AssistedTackles'] = $object->getAssistedTackles();
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
        if (null !== $object->getInterceptionReturnTouchdowns()) {
            $data['InterceptionReturnTouchdowns'] = $object->getInterceptionReturnTouchdowns();
        }
        if (null !== $object->getBlockedKicks()) {
            $data['BlockedKicks'] = $object->getBlockedKicks();
        }
        if (null !== $object->getPuntReturnTouchdowns()) {
            $data['PuntReturnTouchdowns'] = $object->getPuntReturnTouchdowns();
        }
        if (null !== $object->getPuntReturnLong()) {
            $data['PuntReturnLong'] = $object->getPuntReturnLong();
        }
        if (null !== $object->getKickReturnTouchdowns()) {
            $data['KickReturnTouchdowns'] = $object->getKickReturnTouchdowns();
        }
        if (null !== $object->getKickReturnLong()) {
            $data['KickReturnLong'] = $object->getKickReturnLong();
        }
        if (null !== $object->getBlockedKickReturnYards()) {
            $data['BlockedKickReturnYards'] = $object->getBlockedKickReturnYards();
        }
        if (null !== $object->getBlockedKickReturnTouchdowns()) {
            $data['BlockedKickReturnTouchdowns'] = $object->getBlockedKickReturnTouchdowns();
        }
        if (null !== $object->getFieldGoalReturnYards()) {
            $data['FieldGoalReturnYards'] = $object->getFieldGoalReturnYards();
        }
        if (null !== $object->getFieldGoalReturnTouchdowns()) {
            $data['FieldGoalReturnTouchdowns'] = $object->getFieldGoalReturnTouchdowns();
        }
        if (null !== $object->getPuntNetYards()) {
            $data['PuntNetYards'] = $object->getPuntNetYards();
        }
        if (null !== $object->getOpponentSoloTackles()) {
            $data['OpponentSoloTackles'] = $object->getOpponentSoloTackles();
        }
        if (null !== $object->getOpponentAssistedTackles()) {
            $data['OpponentAssistedTackles'] = $object->getOpponentAssistedTackles();
        }
        if (null !== $object->getOpponentSacks()) {
            $data['OpponentSacks'] = $object->getOpponentSacks();
        }
        if (null !== $object->getOpponentSackYards()) {
            $data['OpponentSackYards'] = $object->getOpponentSackYards();
        }
        if (null !== $object->getOpponentPassesDefended()) {
            $data['OpponentPassesDefended'] = $object->getOpponentPassesDefended();
        }
        if (null !== $object->getOpponentFumblesForced()) {
            $data['OpponentFumblesForced'] = $object->getOpponentFumblesForced();
        }
        if (null !== $object->getOpponentFumblesRecovered()) {
            $data['OpponentFumblesRecovered'] = $object->getOpponentFumblesRecovered();
        }
        if (null !== $object->getOpponentFumbleReturnYards()) {
            $data['OpponentFumbleReturnYards'] = $object->getOpponentFumbleReturnYards();
        }
        if (null !== $object->getOpponentFumbleReturnTouchdowns()) {
            $data['OpponentFumbleReturnTouchdowns'] = $object->getOpponentFumbleReturnTouchdowns();
        }
        if (null !== $object->getOpponentInterceptionReturnTouchdowns()) {
            $data['OpponentInterceptionReturnTouchdowns'] = $object->getOpponentInterceptionReturnTouchdowns();
        }
        if (null !== $object->getOpponentBlockedKicks()) {
            $data['OpponentBlockedKicks'] = $object->getOpponentBlockedKicks();
        }
        if (null !== $object->getOpponentPuntReturnTouchdowns()) {
            $data['OpponentPuntReturnTouchdowns'] = $object->getOpponentPuntReturnTouchdowns();
        }
        if (null !== $object->getOpponentPuntReturnLong()) {
            $data['OpponentPuntReturnLong'] = $object->getOpponentPuntReturnLong();
        }
        if (null !== $object->getOpponentKickReturnTouchdowns()) {
            $data['OpponentKickReturnTouchdowns'] = $object->getOpponentKickReturnTouchdowns();
        }
        if (null !== $object->getOpponentKickReturnLong()) {
            $data['OpponentKickReturnLong'] = $object->getOpponentKickReturnLong();
        }
        if (null !== $object->getOpponentBlockedKickReturnYards()) {
            $data['OpponentBlockedKickReturnYards'] = $object->getOpponentBlockedKickReturnYards();
        }
        if (null !== $object->getOpponentBlockedKickReturnTouchdowns()) {
            $data['OpponentBlockedKickReturnTouchdowns'] = $object->getOpponentBlockedKickReturnTouchdowns();
        }
        if (null !== $object->getOpponentFieldGoalReturnYards()) {
            $data['OpponentFieldGoalReturnYards'] = $object->getOpponentFieldGoalReturnYards();
        }
        if (null !== $object->getOpponentFieldGoalReturnTouchdowns()) {
            $data['OpponentFieldGoalReturnTouchdowns'] = $object->getOpponentFieldGoalReturnTouchdowns();
        }
        if (null !== $object->getOpponentPuntNetYards()) {
            $data['OpponentPuntNetYards'] = $object->getOpponentPuntNetYards();
        }
        if (null !== $object->getTeamName()) {
            $data['TeamName'] = $object->getTeamName();
        }
        if (null !== $object->getGames()) {
            $data['Games'] = $object->getGames();
        }
        if (null !== $object->getPassingDropbacks()) {
            $data['PassingDropbacks'] = $object->getPassingDropbacks();
        }
        if (null !== $object->getOpponentPassingDropbacks()) {
            $data['OpponentPassingDropbacks'] = $object->getOpponentPassingDropbacks();
        }
        if (null !== $object->getTeamSeasonID()) {
            $data['TeamSeasonID'] = $object->getTeamSeasonID();
        }
        if (null !== $object->getPointDifferential()) {
            $data['PointDifferential'] = $object->getPointDifferential();
        }
        if (null !== $object->getPassingInterceptionPercentage()) {
            $data['PassingInterceptionPercentage'] = $object->getPassingInterceptionPercentage();
        }
        if (null !== $object->getPuntReturnAverage()) {
            $data['PuntReturnAverage'] = $object->getPuntReturnAverage();
        }
        if (null !== $object->getKickReturnAverage()) {
            $data['KickReturnAverage'] = $object->getKickReturnAverage();
        }
        if (null !== $object->getExtraPointPercentage()) {
            $data['ExtraPointPercentage'] = $object->getExtraPointPercentage();
        }
        if (null !== $object->getFieldGoalPercentage()) {
            $data['FieldGoalPercentage'] = $object->getFieldGoalPercentage();
        }
        if (null !== $object->getOpponentPassingInterceptionPercentage()) {
            $data['OpponentPassingInterceptionPercentage'] = $object->getOpponentPassingInterceptionPercentage();
        }
        if (null !== $object->getOpponentPuntReturnAverage()) {
            $data['OpponentPuntReturnAverage'] = $object->getOpponentPuntReturnAverage();
        }
        if (null !== $object->getOpponentKickReturnAverage()) {
            $data['OpponentKickReturnAverage'] = $object->getOpponentKickReturnAverage();
        }
        if (null !== $object->getOpponentExtraPointPercentage()) {
            $data['OpponentExtraPointPercentage'] = $object->getOpponentExtraPointPercentage();
        }
        if (null !== $object->getOpponentFieldGoalPercentage()) {
            $data['OpponentFieldGoalPercentage'] = $object->getOpponentFieldGoalPercentage();
        }
        if (null !== $object->getPenaltyYardDifferential()) {
            $data['PenaltyYardDifferential'] = $object->getPenaltyYardDifferential();
        }
        if (null !== $object->getPuntReturnYardDifferential()) {
            $data['PuntReturnYardDifferential'] = $object->getPuntReturnYardDifferential();
        }
        if (null !== $object->getKickReturnYardDifferential()) {
            $data['KickReturnYardDifferential'] = $object->getKickReturnYardDifferential();
        }
        if (null !== $object->getTwoPointConversionReturns()) {
            $data['TwoPointConversionReturns'] = $object->getTwoPointConversionReturns();
        }
        if (null !== $object->getOpponentTwoPointConversionReturns()) {
            $data['OpponentTwoPointConversionReturns'] = $object->getOpponentTwoPointConversionReturns();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        if (null !== $object->getTeamStatID()) {
            $data['TeamStatID'] = $object->getTeamStatID();
        }
        return $data;
    }
}