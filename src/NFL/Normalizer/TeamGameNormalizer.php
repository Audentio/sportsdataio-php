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
class TeamGameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\TeamGame';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\TeamGame';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\TeamGame();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GameKey', $data)) {
            $object->setGameKey($data['GameKey']);
        }
        if (\array_key_exists('Date', $data)) {
            $object->setDate($data['Date']);
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('Week', $data)) {
            $object->setWeek($data['Week']);
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
        if (\array_key_exists('Score', $data)) {
            $object->setScore($data['Score']);
        }
        if (\array_key_exists('OpponentScore', $data)) {
            $object->setOpponentScore($data['OpponentScore']);
        }
        if (\array_key_exists('TotalScore', $data)) {
            $object->setTotalScore($data['TotalScore']);
        }
        if (\array_key_exists('Stadium', $data)) {
            $object->setStadium($data['Stadium']);
        }
        if (\array_key_exists('PlayingSurface', $data)) {
            $object->setPlayingSurface($data['PlayingSurface']);
        }
        if (\array_key_exists('Temperature', $data)) {
            $object->setTemperature($data['Temperature']);
        }
        if (\array_key_exists('Humidity', $data)) {
            $object->setHumidity($data['Humidity']);
        }
        if (\array_key_exists('WindSpeed', $data)) {
            $object->setWindSpeed($data['WindSpeed']);
        }
        if (\array_key_exists('OverUnder', $data)) {
            $object->setOverUnder($data['OverUnder']);
        }
        if (\array_key_exists('PointSpread', $data)) {
            $object->setPointSpread($data['PointSpread']);
        }
        if (\array_key_exists('ScoreQuarter1', $data)) {
            $object->setScoreQuarter1($data['ScoreQuarter1']);
        }
        if (\array_key_exists('ScoreQuarter2', $data)) {
            $object->setScoreQuarter2($data['ScoreQuarter2']);
        }
        if (\array_key_exists('ScoreQuarter3', $data)) {
            $object->setScoreQuarter3($data['ScoreQuarter3']);
        }
        if (\array_key_exists('ScoreQuarter4', $data)) {
            $object->setScoreQuarter4($data['ScoreQuarter4']);
        }
        if (\array_key_exists('ScoreOvertime', $data)) {
            $object->setScoreOvertime($data['ScoreOvertime']);
        }
        if (\array_key_exists('TimeOfPossessionMinutes', $data)) {
            $object->setTimeOfPossessionMinutes($data['TimeOfPossessionMinutes']);
        }
        if (\array_key_exists('TimeOfPossessionSeconds', $data)) {
            $object->setTimeOfPossessionSeconds($data['TimeOfPossessionSeconds']);
        }
        if (\array_key_exists('TimeOfPossession', $data)) {
            $object->setTimeOfPossession($data['TimeOfPossession']);
        }
        if (\array_key_exists('FirstDowns', $data)) {
            $object->setFirstDowns($data['FirstDowns']);
        }
        if (\array_key_exists('FirstDownsByRushing', $data)) {
            $object->setFirstDownsByRushing($data['FirstDownsByRushing']);
        }
        if (\array_key_exists('FirstDownsByPassing', $data)) {
            $object->setFirstDownsByPassing($data['FirstDownsByPassing']);
        }
        if (\array_key_exists('FirstDownsByPenalty', $data)) {
            $object->setFirstDownsByPenalty($data['FirstDownsByPenalty']);
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
        if (\array_key_exists('Touchdowns', $data)) {
            $object->setTouchdowns($data['Touchdowns']);
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
        if (\array_key_exists('PassingYardsPerAttempt', $data)) {
            $object->setPassingYardsPerAttempt($data['PassingYardsPerAttempt']);
        }
        if (\array_key_exists('PassingYardsPerCompletion', $data)) {
            $object->setPassingYardsPerCompletion($data['PassingYardsPerCompletion']);
        }
        if (\array_key_exists('CompletionPercentage', $data)) {
            $object->setCompletionPercentage($data['CompletionPercentage']);
        }
        if (\array_key_exists('PasserRating', $data)) {
            $object->setPasserRating($data['PasserRating']);
        }
        if (\array_key_exists('ThirdDownAttempts', $data)) {
            $object->setThirdDownAttempts($data['ThirdDownAttempts']);
        }
        if (\array_key_exists('ThirdDownConversions', $data)) {
            $object->setThirdDownConversions($data['ThirdDownConversions']);
        }
        if (\array_key_exists('ThirdDownPercentage', $data)) {
            $object->setThirdDownPercentage($data['ThirdDownPercentage']);
        }
        if (\array_key_exists('FourthDownAttempts', $data)) {
            $object->setFourthDownAttempts($data['FourthDownAttempts']);
        }
        if (\array_key_exists('FourthDownConversions', $data)) {
            $object->setFourthDownConversions($data['FourthDownConversions']);
        }
        if (\array_key_exists('FourthDownPercentage', $data)) {
            $object->setFourthDownPercentage($data['FourthDownPercentage']);
        }
        if (\array_key_exists('RedZoneAttempts', $data)) {
            $object->setRedZoneAttempts($data['RedZoneAttempts']);
        }
        if (\array_key_exists('RedZoneConversions', $data)) {
            $object->setRedZoneConversions($data['RedZoneConversions']);
        }
        if (\array_key_exists('GoalToGoAttempts', $data)) {
            $object->setGoalToGoAttempts($data['GoalToGoAttempts']);
        }
        if (\array_key_exists('GoalToGoConversions', $data)) {
            $object->setGoalToGoConversions($data['GoalToGoConversions']);
        }
        if (\array_key_exists('ReturnYards', $data)) {
            $object->setReturnYards($data['ReturnYards']);
        }
        if (\array_key_exists('Penalties', $data)) {
            $object->setPenalties($data['Penalties']);
        }
        if (\array_key_exists('PenaltyYards', $data)) {
            $object->setPenaltyYards($data['PenaltyYards']);
        }
        if (\array_key_exists('Fumbles', $data)) {
            $object->setFumbles($data['Fumbles']);
        }
        if (\array_key_exists('FumblesLost', $data)) {
            $object->setFumblesLost($data['FumblesLost']);
        }
        if (\array_key_exists('TimesSacked', $data)) {
            $object->setTimesSacked($data['TimesSacked']);
        }
        if (\array_key_exists('TimesSackedYards', $data)) {
            $object->setTimesSackedYards($data['TimesSackedYards']);
        }
        if (\array_key_exists('QuarterbackHits', $data)) {
            $object->setQuarterbackHits($data['QuarterbackHits']);
        }
        if (\array_key_exists('TacklesForLoss', $data)) {
            $object->setTacklesForLoss($data['TacklesForLoss']);
        }
        if (\array_key_exists('Safeties', $data)) {
            $object->setSafeties($data['Safeties']);
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
        if (\array_key_exists('Giveaways', $data)) {
            $object->setGiveaways($data['Giveaways']);
        }
        if (\array_key_exists('Takeaways', $data)) {
            $object->setTakeaways($data['Takeaways']);
        }
        if (\array_key_exists('TurnoverDifferential', $data)) {
            $object->setTurnoverDifferential($data['TurnoverDifferential']);
        }
        if (\array_key_exists('OpponentScoreQuarter1', $data)) {
            $object->setOpponentScoreQuarter1($data['OpponentScoreQuarter1']);
        }
        if (\array_key_exists('OpponentScoreQuarter2', $data)) {
            $object->setOpponentScoreQuarter2($data['OpponentScoreQuarter2']);
        }
        if (\array_key_exists('OpponentScoreQuarter3', $data)) {
            $object->setOpponentScoreQuarter3($data['OpponentScoreQuarter3']);
        }
        if (\array_key_exists('OpponentScoreQuarter4', $data)) {
            $object->setOpponentScoreQuarter4($data['OpponentScoreQuarter4']);
        }
        if (\array_key_exists('OpponentScoreOvertime', $data)) {
            $object->setOpponentScoreOvertime($data['OpponentScoreOvertime']);
        }
        if (\array_key_exists('OpponentTimeOfPossessionMinutes', $data)) {
            $object->setOpponentTimeOfPossessionMinutes($data['OpponentTimeOfPossessionMinutes']);
        }
        if (\array_key_exists('OpponentTimeOfPossessionSeconds', $data)) {
            $object->setOpponentTimeOfPossessionSeconds($data['OpponentTimeOfPossessionSeconds']);
        }
        if (\array_key_exists('OpponentTimeOfPossession', $data)) {
            $object->setOpponentTimeOfPossession($data['OpponentTimeOfPossession']);
        }
        if (\array_key_exists('OpponentFirstDowns', $data)) {
            $object->setOpponentFirstDowns($data['OpponentFirstDowns']);
        }
        if (\array_key_exists('OpponentFirstDownsByRushing', $data)) {
            $object->setOpponentFirstDownsByRushing($data['OpponentFirstDownsByRushing']);
        }
        if (\array_key_exists('OpponentFirstDownsByPassing', $data)) {
            $object->setOpponentFirstDownsByPassing($data['OpponentFirstDownsByPassing']);
        }
        if (\array_key_exists('OpponentFirstDownsByPenalty', $data)) {
            $object->setOpponentFirstDownsByPenalty($data['OpponentFirstDownsByPenalty']);
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
        if (\array_key_exists('OpponentTouchdowns', $data)) {
            $object->setOpponentTouchdowns($data['OpponentTouchdowns']);
        }
        if (\array_key_exists('OpponentRushingAttempts', $data)) {
            $object->setOpponentRushingAttempts($data['OpponentRushingAttempts']);
        }
        if (\array_key_exists('OpponentRushingYards', $data)) {
            $object->setOpponentRushingYards($data['OpponentRushingYards']);
        }
        if (\array_key_exists('OpponentRushingYardsPerAttempt', $data)) {
            $object->setOpponentRushingYardsPerAttempt($data['OpponentRushingYardsPerAttempt']);
        }
        if (\array_key_exists('OpponentRushingTouchdowns', $data)) {
            $object->setOpponentRushingTouchdowns($data['OpponentRushingTouchdowns']);
        }
        if (\array_key_exists('OpponentPassingAttempts', $data)) {
            $object->setOpponentPassingAttempts($data['OpponentPassingAttempts']);
        }
        if (\array_key_exists('OpponentPassingCompletions', $data)) {
            $object->setOpponentPassingCompletions($data['OpponentPassingCompletions']);
        }
        if (\array_key_exists('OpponentPassingYards', $data)) {
            $object->setOpponentPassingYards($data['OpponentPassingYards']);
        }
        if (\array_key_exists('OpponentPassingTouchdowns', $data)) {
            $object->setOpponentPassingTouchdowns($data['OpponentPassingTouchdowns']);
        }
        if (\array_key_exists('OpponentPassingInterceptions', $data)) {
            $object->setOpponentPassingInterceptions($data['OpponentPassingInterceptions']);
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
        if (\array_key_exists('OpponentPasserRating', $data)) {
            $object->setOpponentPasserRating($data['OpponentPasserRating']);
        }
        if (\array_key_exists('OpponentThirdDownAttempts', $data)) {
            $object->setOpponentThirdDownAttempts($data['OpponentThirdDownAttempts']);
        }
        if (\array_key_exists('OpponentThirdDownConversions', $data)) {
            $object->setOpponentThirdDownConversions($data['OpponentThirdDownConversions']);
        }
        if (\array_key_exists('OpponentThirdDownPercentage', $data)) {
            $object->setOpponentThirdDownPercentage($data['OpponentThirdDownPercentage']);
        }
        if (\array_key_exists('OpponentFourthDownAttempts', $data)) {
            $object->setOpponentFourthDownAttempts($data['OpponentFourthDownAttempts']);
        }
        if (\array_key_exists('OpponentFourthDownConversions', $data)) {
            $object->setOpponentFourthDownConversions($data['OpponentFourthDownConversions']);
        }
        if (\array_key_exists('OpponentFourthDownPercentage', $data)) {
            $object->setOpponentFourthDownPercentage($data['OpponentFourthDownPercentage']);
        }
        if (\array_key_exists('OpponentRedZoneAttempts', $data)) {
            $object->setOpponentRedZoneAttempts($data['OpponentRedZoneAttempts']);
        }
        if (\array_key_exists('OpponentRedZoneConversions', $data)) {
            $object->setOpponentRedZoneConversions($data['OpponentRedZoneConversions']);
        }
        if (\array_key_exists('OpponentGoalToGoAttempts', $data)) {
            $object->setOpponentGoalToGoAttempts($data['OpponentGoalToGoAttempts']);
        }
        if (\array_key_exists('OpponentGoalToGoConversions', $data)) {
            $object->setOpponentGoalToGoConversions($data['OpponentGoalToGoConversions']);
        }
        if (\array_key_exists('OpponentReturnYards', $data)) {
            $object->setOpponentReturnYards($data['OpponentReturnYards']);
        }
        if (\array_key_exists('OpponentPenalties', $data)) {
            $object->setOpponentPenalties($data['OpponentPenalties']);
        }
        if (\array_key_exists('OpponentPenaltyYards', $data)) {
            $object->setOpponentPenaltyYards($data['OpponentPenaltyYards']);
        }
        if (\array_key_exists('OpponentFumbles', $data)) {
            $object->setOpponentFumbles($data['OpponentFumbles']);
        }
        if (\array_key_exists('OpponentFumblesLost', $data)) {
            $object->setOpponentFumblesLost($data['OpponentFumblesLost']);
        }
        if (\array_key_exists('OpponentTimesSacked', $data)) {
            $object->setOpponentTimesSacked($data['OpponentTimesSacked']);
        }
        if (\array_key_exists('OpponentTimesSackedYards', $data)) {
            $object->setOpponentTimesSackedYards($data['OpponentTimesSackedYards']);
        }
        if (\array_key_exists('OpponentQuarterbackHits', $data)) {
            $object->setOpponentQuarterbackHits($data['OpponentQuarterbackHits']);
        }
        if (\array_key_exists('OpponentTacklesForLoss', $data)) {
            $object->setOpponentTacklesForLoss($data['OpponentTacklesForLoss']);
        }
        if (\array_key_exists('OpponentSafeties', $data)) {
            $object->setOpponentSafeties($data['OpponentSafeties']);
        }
        if (\array_key_exists('OpponentPunts', $data)) {
            $object->setOpponentPunts($data['OpponentPunts']);
        }
        if (\array_key_exists('OpponentPuntYards', $data)) {
            $object->setOpponentPuntYards($data['OpponentPuntYards']);
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
        if (\array_key_exists('RedZonePercentage', $data)) {
            $object->setRedZonePercentage($data['RedZonePercentage']);
        }
        if (\array_key_exists('GoalToGoPercentage', $data)) {
            $object->setGoalToGoPercentage($data['GoalToGoPercentage']);
        }
        if (\array_key_exists('QuarterbackHitsDifferential', $data)) {
            $object->setQuarterbackHitsDifferential($data['QuarterbackHitsDifferential']);
        }
        if (\array_key_exists('TacklesForLossDifferential', $data)) {
            $object->setTacklesForLossDifferential($data['TacklesForLossDifferential']);
        }
        if (\array_key_exists('QuarterbackSacksDifferential', $data)) {
            $object->setQuarterbackSacksDifferential($data['QuarterbackSacksDifferential']);
        }
        if (\array_key_exists('TacklesForLossPercentage', $data)) {
            $object->setTacklesForLossPercentage($data['TacklesForLossPercentage']);
        }
        if (\array_key_exists('QuarterbackHitsPercentage', $data)) {
            $object->setQuarterbackHitsPercentage($data['QuarterbackHitsPercentage']);
        }
        if (\array_key_exists('TimesSackedPercentage', $data)) {
            $object->setTimesSackedPercentage($data['TimesSackedPercentage']);
        }
        if (\array_key_exists('OpponentRedZonePercentage', $data)) {
            $object->setOpponentRedZonePercentage($data['OpponentRedZonePercentage']);
        }
        if (\array_key_exists('OpponentGoalToGoPercentage', $data)) {
            $object->setOpponentGoalToGoPercentage($data['OpponentGoalToGoPercentage']);
        }
        if (\array_key_exists('OpponentQuarterbackHitsDifferential', $data)) {
            $object->setOpponentQuarterbackHitsDifferential($data['OpponentQuarterbackHitsDifferential']);
        }
        if (\array_key_exists('OpponentTacklesForLossDifferential', $data)) {
            $object->setOpponentTacklesForLossDifferential($data['OpponentTacklesForLossDifferential']);
        }
        if (\array_key_exists('OpponentQuarterbackSacksDifferential', $data)) {
            $object->setOpponentQuarterbackSacksDifferential($data['OpponentQuarterbackSacksDifferential']);
        }
        if (\array_key_exists('OpponentTacklesForLossPercentage', $data)) {
            $object->setOpponentTacklesForLossPercentage($data['OpponentTacklesForLossPercentage']);
        }
        if (\array_key_exists('OpponentQuarterbackHitsPercentage', $data)) {
            $object->setOpponentQuarterbackHitsPercentage($data['OpponentQuarterbackHitsPercentage']);
        }
        if (\array_key_exists('OpponentTimesSackedPercentage', $data)) {
            $object->setOpponentTimesSackedPercentage($data['OpponentTimesSackedPercentage']);
        }
        if (\array_key_exists('Kickoffs', $data)) {
            $object->setKickoffs($data['Kickoffs']);
        }
        if (\array_key_exists('KickoffsInEndZone', $data)) {
            $object->setKickoffsInEndZone($data['KickoffsInEndZone']);
        }
        if (\array_key_exists('KickoffTouchbacks', $data)) {
            $object->setKickoffTouchbacks($data['KickoffTouchbacks']);
        }
        if (\array_key_exists('PuntsHadBlocked', $data)) {
            $object->setPuntsHadBlocked($data['PuntsHadBlocked']);
        }
        if (\array_key_exists('PuntNetAverage', $data)) {
            $object->setPuntNetAverage($data['PuntNetAverage']);
        }
        if (\array_key_exists('ExtraPointKickingAttempts', $data)) {
            $object->setExtraPointKickingAttempts($data['ExtraPointKickingAttempts']);
        }
        if (\array_key_exists('ExtraPointKickingConversions', $data)) {
            $object->setExtraPointKickingConversions($data['ExtraPointKickingConversions']);
        }
        if (\array_key_exists('ExtraPointsHadBlocked', $data)) {
            $object->setExtraPointsHadBlocked($data['ExtraPointsHadBlocked']);
        }
        if (\array_key_exists('ExtraPointPassingAttempts', $data)) {
            $object->setExtraPointPassingAttempts($data['ExtraPointPassingAttempts']);
        }
        if (\array_key_exists('ExtraPointPassingConversions', $data)) {
            $object->setExtraPointPassingConversions($data['ExtraPointPassingConversions']);
        }
        if (\array_key_exists('ExtraPointRushingAttempts', $data)) {
            $object->setExtraPointRushingAttempts($data['ExtraPointRushingAttempts']);
        }
        if (\array_key_exists('ExtraPointRushingConversions', $data)) {
            $object->setExtraPointRushingConversions($data['ExtraPointRushingConversions']);
        }
        if (\array_key_exists('FieldGoalAttempts', $data)) {
            $object->setFieldGoalAttempts($data['FieldGoalAttempts']);
        }
        if (\array_key_exists('FieldGoalsMade', $data)) {
            $object->setFieldGoalsMade($data['FieldGoalsMade']);
        }
        if (\array_key_exists('FieldGoalsHadBlocked', $data)) {
            $object->setFieldGoalsHadBlocked($data['FieldGoalsHadBlocked']);
        }
        if (\array_key_exists('PuntReturns', $data)) {
            $object->setPuntReturns($data['PuntReturns']);
        }
        if (\array_key_exists('PuntReturnYards', $data)) {
            $object->setPuntReturnYards($data['PuntReturnYards']);
        }
        if (\array_key_exists('KickReturns', $data)) {
            $object->setKickReturns($data['KickReturns']);
        }
        if (\array_key_exists('KickReturnYards', $data)) {
            $object->setKickReturnYards($data['KickReturnYards']);
        }
        if (\array_key_exists('InterceptionReturns', $data)) {
            $object->setInterceptionReturns($data['InterceptionReturns']);
        }
        if (\array_key_exists('InterceptionReturnYards', $data)) {
            $object->setInterceptionReturnYards($data['InterceptionReturnYards']);
        }
        if (\array_key_exists('OpponentKickoffs', $data)) {
            $object->setOpponentKickoffs($data['OpponentKickoffs']);
        }
        if (\array_key_exists('OpponentKickoffsInEndZone', $data)) {
            $object->setOpponentKickoffsInEndZone($data['OpponentKickoffsInEndZone']);
        }
        if (\array_key_exists('OpponentKickoffTouchbacks', $data)) {
            $object->setOpponentKickoffTouchbacks($data['OpponentKickoffTouchbacks']);
        }
        if (\array_key_exists('OpponentPuntsHadBlocked', $data)) {
            $object->setOpponentPuntsHadBlocked($data['OpponentPuntsHadBlocked']);
        }
        if (\array_key_exists('OpponentPuntNetAverage', $data)) {
            $object->setOpponentPuntNetAverage($data['OpponentPuntNetAverage']);
        }
        if (\array_key_exists('OpponentExtraPointKickingAttempts', $data)) {
            $object->setOpponentExtraPointKickingAttempts($data['OpponentExtraPointKickingAttempts']);
        }
        if (\array_key_exists('OpponentExtraPointKickingConversions', $data)) {
            $object->setOpponentExtraPointKickingConversions($data['OpponentExtraPointKickingConversions']);
        }
        if (\array_key_exists('OpponentExtraPointsHadBlocked', $data)) {
            $object->setOpponentExtraPointsHadBlocked($data['OpponentExtraPointsHadBlocked']);
        }
        if (\array_key_exists('OpponentExtraPointPassingAttempts', $data)) {
            $object->setOpponentExtraPointPassingAttempts($data['OpponentExtraPointPassingAttempts']);
        }
        if (\array_key_exists('OpponentExtraPointPassingConversions', $data)) {
            $object->setOpponentExtraPointPassingConversions($data['OpponentExtraPointPassingConversions']);
        }
        if (\array_key_exists('OpponentExtraPointRushingAttempts', $data)) {
            $object->setOpponentExtraPointRushingAttempts($data['OpponentExtraPointRushingAttempts']);
        }
        if (\array_key_exists('OpponentExtraPointRushingConversions', $data)) {
            $object->setOpponentExtraPointRushingConversions($data['OpponentExtraPointRushingConversions']);
        }
        if (\array_key_exists('OpponentFieldGoalAttempts', $data)) {
            $object->setOpponentFieldGoalAttempts($data['OpponentFieldGoalAttempts']);
        }
        if (\array_key_exists('OpponentFieldGoalsMade', $data)) {
            $object->setOpponentFieldGoalsMade($data['OpponentFieldGoalsMade']);
        }
        if (\array_key_exists('OpponentFieldGoalsHadBlocked', $data)) {
            $object->setOpponentFieldGoalsHadBlocked($data['OpponentFieldGoalsHadBlocked']);
        }
        if (\array_key_exists('OpponentPuntReturns', $data)) {
            $object->setOpponentPuntReturns($data['OpponentPuntReturns']);
        }
        if (\array_key_exists('OpponentPuntReturnYards', $data)) {
            $object->setOpponentPuntReturnYards($data['OpponentPuntReturnYards']);
        }
        if (\array_key_exists('OpponentKickReturns', $data)) {
            $object->setOpponentKickReturns($data['OpponentKickReturns']);
        }
        if (\array_key_exists('OpponentKickReturnYards', $data)) {
            $object->setOpponentKickReturnYards($data['OpponentKickReturnYards']);
        }
        if (\array_key_exists('OpponentInterceptionReturns', $data)) {
            $object->setOpponentInterceptionReturns($data['OpponentInterceptionReturns']);
        }
        if (\array_key_exists('OpponentInterceptionReturnYards', $data)) {
            $object->setOpponentInterceptionReturnYards($data['OpponentInterceptionReturnYards']);
        }
        if (\array_key_exists('SoloTackles', $data)) {
            $object->setSoloTackles($data['SoloTackles']);
        }
        if (\array_key_exists('AssistedTackles', $data)) {
            $object->setAssistedTackles($data['AssistedTackles']);
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
        if (\array_key_exists('InterceptionReturnTouchdowns', $data)) {
            $object->setInterceptionReturnTouchdowns($data['InterceptionReturnTouchdowns']);
        }
        if (\array_key_exists('BlockedKicks', $data)) {
            $object->setBlockedKicks($data['BlockedKicks']);
        }
        if (\array_key_exists('PuntReturnTouchdowns', $data)) {
            $object->setPuntReturnTouchdowns($data['PuntReturnTouchdowns']);
        }
        if (\array_key_exists('PuntReturnLong', $data)) {
            $object->setPuntReturnLong($data['PuntReturnLong']);
        }
        if (\array_key_exists('KickReturnTouchdowns', $data)) {
            $object->setKickReturnTouchdowns($data['KickReturnTouchdowns']);
        }
        if (\array_key_exists('KickReturnLong', $data)) {
            $object->setKickReturnLong($data['KickReturnLong']);
        }
        if (\array_key_exists('BlockedKickReturnYards', $data)) {
            $object->setBlockedKickReturnYards($data['BlockedKickReturnYards']);
        }
        if (\array_key_exists('BlockedKickReturnTouchdowns', $data)) {
            $object->setBlockedKickReturnTouchdowns($data['BlockedKickReturnTouchdowns']);
        }
        if (\array_key_exists('FieldGoalReturnYards', $data)) {
            $object->setFieldGoalReturnYards($data['FieldGoalReturnYards']);
        }
        if (\array_key_exists('FieldGoalReturnTouchdowns', $data)) {
            $object->setFieldGoalReturnTouchdowns($data['FieldGoalReturnTouchdowns']);
        }
        if (\array_key_exists('PuntNetYards', $data)) {
            $object->setPuntNetYards($data['PuntNetYards']);
        }
        if (\array_key_exists('OpponentSoloTackles', $data)) {
            $object->setOpponentSoloTackles($data['OpponentSoloTackles']);
        }
        if (\array_key_exists('OpponentAssistedTackles', $data)) {
            $object->setOpponentAssistedTackles($data['OpponentAssistedTackles']);
        }
        if (\array_key_exists('OpponentSacks', $data)) {
            $object->setOpponentSacks($data['OpponentSacks']);
        }
        if (\array_key_exists('OpponentSackYards', $data)) {
            $object->setOpponentSackYards($data['OpponentSackYards']);
        }
        if (\array_key_exists('OpponentPassesDefended', $data)) {
            $object->setOpponentPassesDefended($data['OpponentPassesDefended']);
        }
        if (\array_key_exists('OpponentFumblesForced', $data)) {
            $object->setOpponentFumblesForced($data['OpponentFumblesForced']);
        }
        if (\array_key_exists('OpponentFumblesRecovered', $data)) {
            $object->setOpponentFumblesRecovered($data['OpponentFumblesRecovered']);
        }
        if (\array_key_exists('OpponentFumbleReturnYards', $data)) {
            $object->setOpponentFumbleReturnYards($data['OpponentFumbleReturnYards']);
        }
        if (\array_key_exists('OpponentFumbleReturnTouchdowns', $data)) {
            $object->setOpponentFumbleReturnTouchdowns($data['OpponentFumbleReturnTouchdowns']);
        }
        if (\array_key_exists('OpponentInterceptionReturnTouchdowns', $data)) {
            $object->setOpponentInterceptionReturnTouchdowns($data['OpponentInterceptionReturnTouchdowns']);
        }
        if (\array_key_exists('OpponentBlockedKicks', $data)) {
            $object->setOpponentBlockedKicks($data['OpponentBlockedKicks']);
        }
        if (\array_key_exists('OpponentPuntReturnTouchdowns', $data)) {
            $object->setOpponentPuntReturnTouchdowns($data['OpponentPuntReturnTouchdowns']);
        }
        if (\array_key_exists('OpponentPuntReturnLong', $data)) {
            $object->setOpponentPuntReturnLong($data['OpponentPuntReturnLong']);
        }
        if (\array_key_exists('OpponentKickReturnTouchdowns', $data)) {
            $object->setOpponentKickReturnTouchdowns($data['OpponentKickReturnTouchdowns']);
        }
        if (\array_key_exists('OpponentKickReturnLong', $data)) {
            $object->setOpponentKickReturnLong($data['OpponentKickReturnLong']);
        }
        if (\array_key_exists('OpponentBlockedKickReturnYards', $data)) {
            $object->setOpponentBlockedKickReturnYards($data['OpponentBlockedKickReturnYards']);
        }
        if (\array_key_exists('OpponentBlockedKickReturnTouchdowns', $data)) {
            $object->setOpponentBlockedKickReturnTouchdowns($data['OpponentBlockedKickReturnTouchdowns']);
        }
        if (\array_key_exists('OpponentFieldGoalReturnYards', $data)) {
            $object->setOpponentFieldGoalReturnYards($data['OpponentFieldGoalReturnYards']);
        }
        if (\array_key_exists('OpponentFieldGoalReturnTouchdowns', $data)) {
            $object->setOpponentFieldGoalReturnTouchdowns($data['OpponentFieldGoalReturnTouchdowns']);
        }
        if (\array_key_exists('OpponentPuntNetYards', $data)) {
            $object->setOpponentPuntNetYards($data['OpponentPuntNetYards']);
        }
        if (\array_key_exists('IsGameOver', $data)) {
            $object->setIsGameOver($data['IsGameOver']);
        }
        if (\array_key_exists('TeamName', $data)) {
            $object->setTeamName($data['TeamName']);
        }
        if (\array_key_exists('DayOfWeek', $data)) {
            $object->setDayOfWeek($data['DayOfWeek']);
        }
        if (\array_key_exists('PassingDropbacks', $data)) {
            $object->setPassingDropbacks($data['PassingDropbacks']);
        }
        if (\array_key_exists('OpponentPassingDropbacks', $data)) {
            $object->setOpponentPassingDropbacks($data['OpponentPassingDropbacks']);
        }
        if (\array_key_exists('TeamGameID', $data)) {
            $object->setTeamGameID($data['TeamGameID']);
        }
        if (\array_key_exists('PointDifferential', $data)) {
            $object->setPointDifferential($data['PointDifferential']);
        }
        if (\array_key_exists('PassingInterceptionPercentage', $data)) {
            $object->setPassingInterceptionPercentage($data['PassingInterceptionPercentage']);
        }
        if (\array_key_exists('PuntReturnAverage', $data)) {
            $object->setPuntReturnAverage($data['PuntReturnAverage']);
        }
        if (\array_key_exists('KickReturnAverage', $data)) {
            $object->setKickReturnAverage($data['KickReturnAverage']);
        }
        if (\array_key_exists('ExtraPointPercentage', $data)) {
            $object->setExtraPointPercentage($data['ExtraPointPercentage']);
        }
        if (\array_key_exists('FieldGoalPercentage', $data)) {
            $object->setFieldGoalPercentage($data['FieldGoalPercentage']);
        }
        if (\array_key_exists('OpponentPassingInterceptionPercentage', $data)) {
            $object->setOpponentPassingInterceptionPercentage($data['OpponentPassingInterceptionPercentage']);
        }
        if (\array_key_exists('OpponentPuntReturnAverage', $data)) {
            $object->setOpponentPuntReturnAverage($data['OpponentPuntReturnAverage']);
        }
        if (\array_key_exists('OpponentKickReturnAverage', $data)) {
            $object->setOpponentKickReturnAverage($data['OpponentKickReturnAverage']);
        }
        if (\array_key_exists('OpponentExtraPointPercentage', $data)) {
            $object->setOpponentExtraPointPercentage($data['OpponentExtraPointPercentage']);
        }
        if (\array_key_exists('OpponentFieldGoalPercentage', $data)) {
            $object->setOpponentFieldGoalPercentage($data['OpponentFieldGoalPercentage']);
        }
        if (\array_key_exists('PenaltyYardDifferential', $data)) {
            $object->setPenaltyYardDifferential($data['PenaltyYardDifferential']);
        }
        if (\array_key_exists('PuntReturnYardDifferential', $data)) {
            $object->setPuntReturnYardDifferential($data['PuntReturnYardDifferential']);
        }
        if (\array_key_exists('KickReturnYardDifferential', $data)) {
            $object->setKickReturnYardDifferential($data['KickReturnYardDifferential']);
        }
        if (\array_key_exists('TwoPointConversionReturns', $data)) {
            $object->setTwoPointConversionReturns($data['TwoPointConversionReturns']);
        }
        if (\array_key_exists('OpponentTwoPointConversionReturns', $data)) {
            $object->setOpponentTwoPointConversionReturns($data['OpponentTwoPointConversionReturns']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('OpponentID', $data)) {
            $object->setOpponentID($data['OpponentID']);
        }
        if (\array_key_exists('Day', $data)) {
            $object->setDay($data['Day']);
        }
        if (\array_key_exists('DateTime', $data)) {
            $object->setDateTime($data['DateTime']);
        }
        if (\array_key_exists('GlobalGameID', $data)) {
            $object->setGlobalGameID($data['GlobalGameID']);
        }
        if (\array_key_exists('GlobalTeamID', $data)) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        if (\array_key_exists('GlobalOpponentID', $data)) {
            $object->setGlobalOpponentID($data['GlobalOpponentID']);
        }
        if (\array_key_exists('ScoreID', $data)) {
            $object->setScoreID($data['ScoreID']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGameKey()) {
            $data['GameKey'] = $object->getGameKey();
        }
        if (null !== $object->getDate()) {
            $data['Date'] = $object->getDate();
        }
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getWeek()) {
            $data['Week'] = $object->getWeek();
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
        if (null !== $object->getScore()) {
            $data['Score'] = $object->getScore();
        }
        if (null !== $object->getOpponentScore()) {
            $data['OpponentScore'] = $object->getOpponentScore();
        }
        if (null !== $object->getTotalScore()) {
            $data['TotalScore'] = $object->getTotalScore();
        }
        if (null !== $object->getStadium()) {
            $data['Stadium'] = $object->getStadium();
        }
        if (null !== $object->getPlayingSurface()) {
            $data['PlayingSurface'] = $object->getPlayingSurface();
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
        if (null !== $object->getTimeOfPossessionMinutes()) {
            $data['TimeOfPossessionMinutes'] = $object->getTimeOfPossessionMinutes();
        }
        if (null !== $object->getTimeOfPossessionSeconds()) {
            $data['TimeOfPossessionSeconds'] = $object->getTimeOfPossessionSeconds();
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
        if (null !== $object->getOpponentTimeOfPossessionMinutes()) {
            $data['OpponentTimeOfPossessionMinutes'] = $object->getOpponentTimeOfPossessionMinutes();
        }
        if (null !== $object->getOpponentTimeOfPossessionSeconds()) {
            $data['OpponentTimeOfPossessionSeconds'] = $object->getOpponentTimeOfPossessionSeconds();
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
        if (null !== $object->getIsGameOver()) {
            $data['IsGameOver'] = $object->getIsGameOver();
        }
        if (null !== $object->getTeamName()) {
            $data['TeamName'] = $object->getTeamName();
        }
        if (null !== $object->getDayOfWeek()) {
            $data['DayOfWeek'] = $object->getDayOfWeek();
        }
        if (null !== $object->getPassingDropbacks()) {
            $data['PassingDropbacks'] = $object->getPassingDropbacks();
        }
        if (null !== $object->getOpponentPassingDropbacks()) {
            $data['OpponentPassingDropbacks'] = $object->getOpponentPassingDropbacks();
        }
        if (null !== $object->getTeamGameID()) {
            $data['TeamGameID'] = $object->getTeamGameID();
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
        if (null !== $object->getOpponentID()) {
            $data['OpponentID'] = $object->getOpponentID();
        }
        if (null !== $object->getDay()) {
            $data['Day'] = $object->getDay();
        }
        if (null !== $object->getDateTime()) {
            $data['DateTime'] = $object->getDateTime();
        }
        if (null !== $object->getGlobalGameID()) {
            $data['GlobalGameID'] = $object->getGlobalGameID();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        if (null !== $object->getGlobalOpponentID()) {
            $data['GlobalOpponentID'] = $object->getGlobalOpponentID();
        }
        if (null !== $object->getScoreID()) {
            $data['ScoreID'] = $object->getScoreID();
        }
        return $data;
    }
}