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
class GameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\Game';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\Game';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\Game();
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
        if (\array_key_exists('AwayTeam', $data)) {
            $object->setAwayTeam($data['AwayTeam']);
        }
        if (\array_key_exists('HomeTeam', $data)) {
            $object->setHomeTeam($data['HomeTeam']);
        }
        if (\array_key_exists('AwayScore', $data)) {
            $object->setAwayScore($data['AwayScore']);
        }
        if (\array_key_exists('HomeScore', $data)) {
            $object->setHomeScore($data['HomeScore']);
        }
        if (\array_key_exists('TotalScore', $data)) {
            $object->setTotalScore($data['TotalScore']);
        }
        if (\array_key_exists('OverUnder', $data)) {
            $object->setOverUnder($data['OverUnder']);
        }
        if (\array_key_exists('PointSpread', $data)) {
            $object->setPointSpread($data['PointSpread']);
        }
        if (\array_key_exists('AwayScoreQuarter1', $data)) {
            $object->setAwayScoreQuarter1($data['AwayScoreQuarter1']);
        }
        if (\array_key_exists('AwayScoreQuarter2', $data)) {
            $object->setAwayScoreQuarter2($data['AwayScoreQuarter2']);
        }
        if (\array_key_exists('AwayScoreQuarter3', $data)) {
            $object->setAwayScoreQuarter3($data['AwayScoreQuarter3']);
        }
        if (\array_key_exists('AwayScoreQuarter4', $data)) {
            $object->setAwayScoreQuarter4($data['AwayScoreQuarter4']);
        }
        if (\array_key_exists('AwayScoreOvertime', $data)) {
            $object->setAwayScoreOvertime($data['AwayScoreOvertime']);
        }
        if (\array_key_exists('HomeScoreQuarter1', $data)) {
            $object->setHomeScoreQuarter1($data['HomeScoreQuarter1']);
        }
        if (\array_key_exists('HomeScoreQuarter2', $data)) {
            $object->setHomeScoreQuarter2($data['HomeScoreQuarter2']);
        }
        if (\array_key_exists('HomeScoreQuarter3', $data)) {
            $object->setHomeScoreQuarter3($data['HomeScoreQuarter3']);
        }
        if (\array_key_exists('HomeScoreQuarter4', $data)) {
            $object->setHomeScoreQuarter4($data['HomeScoreQuarter4']);
        }
        if (\array_key_exists('HomeScoreOvertime', $data)) {
            $object->setHomeScoreOvertime($data['HomeScoreOvertime']);
        }
        if (\array_key_exists('AwayTimeOfPossession', $data)) {
            $object->setAwayTimeOfPossession($data['AwayTimeOfPossession']);
        }
        if (\array_key_exists('HomeTimeOfPossession', $data)) {
            $object->setHomeTimeOfPossession($data['HomeTimeOfPossession']);
        }
        if (\array_key_exists('AwayFirstDowns', $data)) {
            $object->setAwayFirstDowns($data['AwayFirstDowns']);
        }
        if (\array_key_exists('HomeFirstDowns', $data)) {
            $object->setHomeFirstDowns($data['HomeFirstDowns']);
        }
        if (\array_key_exists('AwayFirstDownsByRushing', $data)) {
            $object->setAwayFirstDownsByRushing($data['AwayFirstDownsByRushing']);
        }
        if (\array_key_exists('HomeFirstDownsByRushing', $data)) {
            $object->setHomeFirstDownsByRushing($data['HomeFirstDownsByRushing']);
        }
        if (\array_key_exists('AwayFirstDownsByPassing', $data)) {
            $object->setAwayFirstDownsByPassing($data['AwayFirstDownsByPassing']);
        }
        if (\array_key_exists('HomeFirstDownsByPassing', $data)) {
            $object->setHomeFirstDownsByPassing($data['HomeFirstDownsByPassing']);
        }
        if (\array_key_exists('AwayFirstDownsByPenalty', $data)) {
            $object->setAwayFirstDownsByPenalty($data['AwayFirstDownsByPenalty']);
        }
        if (\array_key_exists('HomeFirstDownsByPenalty', $data)) {
            $object->setHomeFirstDownsByPenalty($data['HomeFirstDownsByPenalty']);
        }
        if (\array_key_exists('AwayOffensivePlays', $data)) {
            $object->setAwayOffensivePlays($data['AwayOffensivePlays']);
        }
        if (\array_key_exists('HomeOffensivePlays', $data)) {
            $object->setHomeOffensivePlays($data['HomeOffensivePlays']);
        }
        if (\array_key_exists('AwayOffensiveYards', $data)) {
            $object->setAwayOffensiveYards($data['AwayOffensiveYards']);
        }
        if (\array_key_exists('HomeOffensiveYards', $data)) {
            $object->setHomeOffensiveYards($data['HomeOffensiveYards']);
        }
        if (\array_key_exists('AwayOffensiveYardsPerPlay', $data)) {
            $object->setAwayOffensiveYardsPerPlay($data['AwayOffensiveYardsPerPlay']);
        }
        if (\array_key_exists('HomeOffensiveYardsPerPlay', $data)) {
            $object->setHomeOffensiveYardsPerPlay($data['HomeOffensiveYardsPerPlay']);
        }
        if (\array_key_exists('AwayTouchdowns', $data)) {
            $object->setAwayTouchdowns($data['AwayTouchdowns']);
        }
        if (\array_key_exists('HomeTouchdowns', $data)) {
            $object->setHomeTouchdowns($data['HomeTouchdowns']);
        }
        if (\array_key_exists('AwayRushingAttempts', $data)) {
            $object->setAwayRushingAttempts($data['AwayRushingAttempts']);
        }
        if (\array_key_exists('HomeRushingAttempts', $data)) {
            $object->setHomeRushingAttempts($data['HomeRushingAttempts']);
        }
        if (\array_key_exists('AwayRushingYards', $data)) {
            $object->setAwayRushingYards($data['AwayRushingYards']);
        }
        if (\array_key_exists('HomeRushingYards', $data)) {
            $object->setHomeRushingYards($data['HomeRushingYards']);
        }
        if (\array_key_exists('AwayRushingYardsPerAttempt', $data)) {
            $object->setAwayRushingYardsPerAttempt($data['AwayRushingYardsPerAttempt']);
        }
        if (\array_key_exists('HomeRushingYardsPerAttempt', $data)) {
            $object->setHomeRushingYardsPerAttempt($data['HomeRushingYardsPerAttempt']);
        }
        if (\array_key_exists('AwayRushingTouchdowns', $data)) {
            $object->setAwayRushingTouchdowns($data['AwayRushingTouchdowns']);
        }
        if (\array_key_exists('HomeRushingTouchdowns', $data)) {
            $object->setHomeRushingTouchdowns($data['HomeRushingTouchdowns']);
        }
        if (\array_key_exists('AwayPassingAttempts', $data)) {
            $object->setAwayPassingAttempts($data['AwayPassingAttempts']);
        }
        if (\array_key_exists('HomePassingAttempts', $data)) {
            $object->setHomePassingAttempts($data['HomePassingAttempts']);
        }
        if (\array_key_exists('AwayPassingCompletions', $data)) {
            $object->setAwayPassingCompletions($data['AwayPassingCompletions']);
        }
        if (\array_key_exists('HomePassingCompletions', $data)) {
            $object->setHomePassingCompletions($data['HomePassingCompletions']);
        }
        if (\array_key_exists('AwayPassingYards', $data)) {
            $object->setAwayPassingYards($data['AwayPassingYards']);
        }
        if (\array_key_exists('HomePassingYards', $data)) {
            $object->setHomePassingYards($data['HomePassingYards']);
        }
        if (\array_key_exists('AwayPassingTouchdowns', $data)) {
            $object->setAwayPassingTouchdowns($data['AwayPassingTouchdowns']);
        }
        if (\array_key_exists('HomePassingTouchdowns', $data)) {
            $object->setHomePassingTouchdowns($data['HomePassingTouchdowns']);
        }
        if (\array_key_exists('AwayPassingInterceptions', $data)) {
            $object->setAwayPassingInterceptions($data['AwayPassingInterceptions']);
        }
        if (\array_key_exists('HomePassingInterceptions', $data)) {
            $object->setHomePassingInterceptions($data['HomePassingInterceptions']);
        }
        if (\array_key_exists('AwayPassingYardsPerAttempt', $data)) {
            $object->setAwayPassingYardsPerAttempt($data['AwayPassingYardsPerAttempt']);
        }
        if (\array_key_exists('HomePassingYardsPerAttempt', $data)) {
            $object->setHomePassingYardsPerAttempt($data['HomePassingYardsPerAttempt']);
        }
        if (\array_key_exists('AwayPassingYardsPerCompletion', $data)) {
            $object->setAwayPassingYardsPerCompletion($data['AwayPassingYardsPerCompletion']);
        }
        if (\array_key_exists('HomePassingYardsPerCompletion', $data)) {
            $object->setHomePassingYardsPerCompletion($data['HomePassingYardsPerCompletion']);
        }
        if (\array_key_exists('AwayCompletionPercentage', $data)) {
            $object->setAwayCompletionPercentage($data['AwayCompletionPercentage']);
        }
        if (\array_key_exists('HomeCompletionPercentage', $data)) {
            $object->setHomeCompletionPercentage($data['HomeCompletionPercentage']);
        }
        if (\array_key_exists('AwayPasserRating', $data)) {
            $object->setAwayPasserRating($data['AwayPasserRating']);
        }
        if (\array_key_exists('HomePasserRating', $data)) {
            $object->setHomePasserRating($data['HomePasserRating']);
        }
        if (\array_key_exists('AwayThirdDownAttempts', $data)) {
            $object->setAwayThirdDownAttempts($data['AwayThirdDownAttempts']);
        }
        if (\array_key_exists('HomeThirdDownAttempts', $data)) {
            $object->setHomeThirdDownAttempts($data['HomeThirdDownAttempts']);
        }
        if (\array_key_exists('AwayThirdDownConversions', $data)) {
            $object->setAwayThirdDownConversions($data['AwayThirdDownConversions']);
        }
        if (\array_key_exists('HomeThirdDownConversions', $data)) {
            $object->setHomeThirdDownConversions($data['HomeThirdDownConversions']);
        }
        if (\array_key_exists('AwayThirdDownPercentage', $data)) {
            $object->setAwayThirdDownPercentage($data['AwayThirdDownPercentage']);
        }
        if (\array_key_exists('HomeThirdDownPercentage', $data)) {
            $object->setHomeThirdDownPercentage($data['HomeThirdDownPercentage']);
        }
        if (\array_key_exists('AwayFourthDownAttempts', $data)) {
            $object->setAwayFourthDownAttempts($data['AwayFourthDownAttempts']);
        }
        if (\array_key_exists('HomeFourthDownAttempts', $data)) {
            $object->setHomeFourthDownAttempts($data['HomeFourthDownAttempts']);
        }
        if (\array_key_exists('AwayFourthDownConversions', $data)) {
            $object->setAwayFourthDownConversions($data['AwayFourthDownConversions']);
        }
        if (\array_key_exists('HomeFourthDownConversions', $data)) {
            $object->setHomeFourthDownConversions($data['HomeFourthDownConversions']);
        }
        if (\array_key_exists('AwayFourthDownPercentage', $data)) {
            $object->setAwayFourthDownPercentage($data['AwayFourthDownPercentage']);
        }
        if (\array_key_exists('HomeFourthDownPercentage', $data)) {
            $object->setHomeFourthDownPercentage($data['HomeFourthDownPercentage']);
        }
        if (\array_key_exists('AwayRedZoneAttempts', $data)) {
            $object->setAwayRedZoneAttempts($data['AwayRedZoneAttempts']);
        }
        if (\array_key_exists('HomeRedZoneAttempts', $data)) {
            $object->setHomeRedZoneAttempts($data['HomeRedZoneAttempts']);
        }
        if (\array_key_exists('AwayRedZoneConversions', $data)) {
            $object->setAwayRedZoneConversions($data['AwayRedZoneConversions']);
        }
        if (\array_key_exists('HomeRedZoneConversions', $data)) {
            $object->setHomeRedZoneConversions($data['HomeRedZoneConversions']);
        }
        if (\array_key_exists('AwayGoalToGoAttempts', $data)) {
            $object->setAwayGoalToGoAttempts($data['AwayGoalToGoAttempts']);
        }
        if (\array_key_exists('HomeGoalToGoAttempts', $data)) {
            $object->setHomeGoalToGoAttempts($data['HomeGoalToGoAttempts']);
        }
        if (\array_key_exists('AwayGoalToGoConversions', $data)) {
            $object->setAwayGoalToGoConversions($data['AwayGoalToGoConversions']);
        }
        if (\array_key_exists('HomeGoalToGoConversions', $data)) {
            $object->setHomeGoalToGoConversions($data['HomeGoalToGoConversions']);
        }
        if (\array_key_exists('AwayReturnYards', $data)) {
            $object->setAwayReturnYards($data['AwayReturnYards']);
        }
        if (\array_key_exists('HomeReturnYards', $data)) {
            $object->setHomeReturnYards($data['HomeReturnYards']);
        }
        if (\array_key_exists('AwayPenalties', $data)) {
            $object->setAwayPenalties($data['AwayPenalties']);
        }
        if (\array_key_exists('HomePenalties', $data)) {
            $object->setHomePenalties($data['HomePenalties']);
        }
        if (\array_key_exists('AwayPenaltyYards', $data)) {
            $object->setAwayPenaltyYards($data['AwayPenaltyYards']);
        }
        if (\array_key_exists('HomePenaltyYards', $data)) {
            $object->setHomePenaltyYards($data['HomePenaltyYards']);
        }
        if (\array_key_exists('AwayFumbles', $data)) {
            $object->setAwayFumbles($data['AwayFumbles']);
        }
        if (\array_key_exists('HomeFumbles', $data)) {
            $object->setHomeFumbles($data['HomeFumbles']);
        }
        if (\array_key_exists('AwayFumblesLost', $data)) {
            $object->setAwayFumblesLost($data['AwayFumblesLost']);
        }
        if (\array_key_exists('HomeFumblesLost', $data)) {
            $object->setHomeFumblesLost($data['HomeFumblesLost']);
        }
        if (\array_key_exists('AwayTimesSacked', $data)) {
            $object->setAwayTimesSacked($data['AwayTimesSacked']);
        }
        if (\array_key_exists('HomeTimesSacked', $data)) {
            $object->setHomeTimesSacked($data['HomeTimesSacked']);
        }
        if (\array_key_exists('AwayTimesSackedYards', $data)) {
            $object->setAwayTimesSackedYards($data['AwayTimesSackedYards']);
        }
        if (\array_key_exists('HomeTimesSackedYards', $data)) {
            $object->setHomeTimesSackedYards($data['HomeTimesSackedYards']);
        }
        if (\array_key_exists('AwaySafeties', $data)) {
            $object->setAwaySafeties($data['AwaySafeties']);
        }
        if (\array_key_exists('HomeSafeties', $data)) {
            $object->setHomeSafeties($data['HomeSafeties']);
        }
        if (\array_key_exists('AwayPunts', $data)) {
            $object->setAwayPunts($data['AwayPunts']);
        }
        if (\array_key_exists('HomePunts', $data)) {
            $object->setHomePunts($data['HomePunts']);
        }
        if (\array_key_exists('AwayPuntYards', $data)) {
            $object->setAwayPuntYards($data['AwayPuntYards']);
        }
        if (\array_key_exists('HomePuntYards', $data)) {
            $object->setHomePuntYards($data['HomePuntYards']);
        }
        if (\array_key_exists('AwayPuntAverage', $data)) {
            $object->setAwayPuntAverage($data['AwayPuntAverage']);
        }
        if (\array_key_exists('HomePuntAverage', $data)) {
            $object->setHomePuntAverage($data['HomePuntAverage']);
        }
        if (\array_key_exists('AwayGiveaways', $data)) {
            $object->setAwayGiveaways($data['AwayGiveaways']);
        }
        if (\array_key_exists('HomeGiveaways', $data)) {
            $object->setHomeGiveaways($data['HomeGiveaways']);
        }
        if (\array_key_exists('AwayTakeaways', $data)) {
            $object->setAwayTakeaways($data['AwayTakeaways']);
        }
        if (\array_key_exists('HomeTakeaways', $data)) {
            $object->setHomeTakeaways($data['HomeTakeaways']);
        }
        if (\array_key_exists('AwayTurnoverDifferential', $data)) {
            $object->setAwayTurnoverDifferential($data['AwayTurnoverDifferential']);
        }
        if (\array_key_exists('HomeTurnoverDifferential', $data)) {
            $object->setHomeTurnoverDifferential($data['HomeTurnoverDifferential']);
        }
        if (\array_key_exists('AwayKickoffs', $data)) {
            $object->setAwayKickoffs($data['AwayKickoffs']);
        }
        if (\array_key_exists('HomeKickoffs', $data)) {
            $object->setHomeKickoffs($data['HomeKickoffs']);
        }
        if (\array_key_exists('AwayKickoffsInEndZone', $data)) {
            $object->setAwayKickoffsInEndZone($data['AwayKickoffsInEndZone']);
        }
        if (\array_key_exists('HomeKickoffsInEndZone', $data)) {
            $object->setHomeKickoffsInEndZone($data['HomeKickoffsInEndZone']);
        }
        if (\array_key_exists('AwayKickoffTouchbacks', $data)) {
            $object->setAwayKickoffTouchbacks($data['AwayKickoffTouchbacks']);
        }
        if (\array_key_exists('HomeKickoffTouchbacks', $data)) {
            $object->setHomeKickoffTouchbacks($data['HomeKickoffTouchbacks']);
        }
        if (\array_key_exists('AwayPuntsHadBlocked', $data)) {
            $object->setAwayPuntsHadBlocked($data['AwayPuntsHadBlocked']);
        }
        if (\array_key_exists('HomePuntsHadBlocked', $data)) {
            $object->setHomePuntsHadBlocked($data['HomePuntsHadBlocked']);
        }
        if (\array_key_exists('AwayPuntNetAverage', $data)) {
            $object->setAwayPuntNetAverage($data['AwayPuntNetAverage']);
        }
        if (\array_key_exists('HomePuntNetAverage', $data)) {
            $object->setHomePuntNetAverage($data['HomePuntNetAverage']);
        }
        if (\array_key_exists('AwayExtraPointKickingAttempts', $data)) {
            $object->setAwayExtraPointKickingAttempts($data['AwayExtraPointKickingAttempts']);
        }
        if (\array_key_exists('HomeExtraPointKickingAttempts', $data)) {
            $object->setHomeExtraPointKickingAttempts($data['HomeExtraPointKickingAttempts']);
        }
        if (\array_key_exists('AwayExtraPointKickingConversions', $data)) {
            $object->setAwayExtraPointKickingConversions($data['AwayExtraPointKickingConversions']);
        }
        if (\array_key_exists('HomeExtraPointKickingConversions', $data)) {
            $object->setHomeExtraPointKickingConversions($data['HomeExtraPointKickingConversions']);
        }
        if (\array_key_exists('AwayExtraPointsHadBlocked', $data)) {
            $object->setAwayExtraPointsHadBlocked($data['AwayExtraPointsHadBlocked']);
        }
        if (\array_key_exists('HomeExtraPointsHadBlocked', $data)) {
            $object->setHomeExtraPointsHadBlocked($data['HomeExtraPointsHadBlocked']);
        }
        if (\array_key_exists('AwayExtraPointPassingAttempts', $data)) {
            $object->setAwayExtraPointPassingAttempts($data['AwayExtraPointPassingAttempts']);
        }
        if (\array_key_exists('HomeExtraPointPassingAttempts', $data)) {
            $object->setHomeExtraPointPassingAttempts($data['HomeExtraPointPassingAttempts']);
        }
        if (\array_key_exists('AwayExtraPointPassingConversions', $data)) {
            $object->setAwayExtraPointPassingConversions($data['AwayExtraPointPassingConversions']);
        }
        if (\array_key_exists('HomeExtraPointPassingConversions', $data)) {
            $object->setHomeExtraPointPassingConversions($data['HomeExtraPointPassingConversions']);
        }
        if (\array_key_exists('AwayExtraPointRushingAttempts', $data)) {
            $object->setAwayExtraPointRushingAttempts($data['AwayExtraPointRushingAttempts']);
        }
        if (\array_key_exists('HomeExtraPointRushingAttempts', $data)) {
            $object->setHomeExtraPointRushingAttempts($data['HomeExtraPointRushingAttempts']);
        }
        if (\array_key_exists('AwayExtraPointRushingConversions', $data)) {
            $object->setAwayExtraPointRushingConversions($data['AwayExtraPointRushingConversions']);
        }
        if (\array_key_exists('HomeExtraPointRushingConversions', $data)) {
            $object->setHomeExtraPointRushingConversions($data['HomeExtraPointRushingConversions']);
        }
        if (\array_key_exists('AwayFieldGoalAttempts', $data)) {
            $object->setAwayFieldGoalAttempts($data['AwayFieldGoalAttempts']);
        }
        if (\array_key_exists('HomeFieldGoalAttempts', $data)) {
            $object->setHomeFieldGoalAttempts($data['HomeFieldGoalAttempts']);
        }
        if (\array_key_exists('AwayFieldGoalsMade', $data)) {
            $object->setAwayFieldGoalsMade($data['AwayFieldGoalsMade']);
        }
        if (\array_key_exists('HomeFieldGoalsMade', $data)) {
            $object->setHomeFieldGoalsMade($data['HomeFieldGoalsMade']);
        }
        if (\array_key_exists('AwayFieldGoalsHadBlocked', $data)) {
            $object->setAwayFieldGoalsHadBlocked($data['AwayFieldGoalsHadBlocked']);
        }
        if (\array_key_exists('HomeFieldGoalsHadBlocked', $data)) {
            $object->setHomeFieldGoalsHadBlocked($data['HomeFieldGoalsHadBlocked']);
        }
        if (\array_key_exists('AwayPuntReturns', $data)) {
            $object->setAwayPuntReturns($data['AwayPuntReturns']);
        }
        if (\array_key_exists('HomePuntReturns', $data)) {
            $object->setHomePuntReturns($data['HomePuntReturns']);
        }
        if (\array_key_exists('AwayPuntReturnYards', $data)) {
            $object->setAwayPuntReturnYards($data['AwayPuntReturnYards']);
        }
        if (\array_key_exists('HomePuntReturnYards', $data)) {
            $object->setHomePuntReturnYards($data['HomePuntReturnYards']);
        }
        if (\array_key_exists('AwayKickReturns', $data)) {
            $object->setAwayKickReturns($data['AwayKickReturns']);
        }
        if (\array_key_exists('HomeKickReturns', $data)) {
            $object->setHomeKickReturns($data['HomeKickReturns']);
        }
        if (\array_key_exists('AwayKickReturnYards', $data)) {
            $object->setAwayKickReturnYards($data['AwayKickReturnYards']);
        }
        if (\array_key_exists('HomeKickReturnYards', $data)) {
            $object->setHomeKickReturnYards($data['HomeKickReturnYards']);
        }
        if (\array_key_exists('AwayInterceptionReturns', $data)) {
            $object->setAwayInterceptionReturns($data['AwayInterceptionReturns']);
        }
        if (\array_key_exists('HomeInterceptionReturns', $data)) {
            $object->setHomeInterceptionReturns($data['HomeInterceptionReturns']);
        }
        if (\array_key_exists('AwayInterceptionReturnYards', $data)) {
            $object->setAwayInterceptionReturnYards($data['AwayInterceptionReturnYards']);
        }
        if (\array_key_exists('HomeInterceptionReturnYards', $data)) {
            $object->setHomeInterceptionReturnYards($data['HomeInterceptionReturnYards']);
        }
        if (\array_key_exists('AwaySoloTackles', $data)) {
            $object->setAwaySoloTackles($data['AwaySoloTackles']);
        }
        if (\array_key_exists('AwayAssistedTackles', $data)) {
            $object->setAwayAssistedTackles($data['AwayAssistedTackles']);
        }
        if (\array_key_exists('AwayQuarterbackHits', $data)) {
            $object->setAwayQuarterbackHits($data['AwayQuarterbackHits']);
        }
        if (\array_key_exists('AwayTacklesForLoss', $data)) {
            $object->setAwayTacklesForLoss($data['AwayTacklesForLoss']);
        }
        if (\array_key_exists('AwaySacks', $data)) {
            $object->setAwaySacks($data['AwaySacks']);
        }
        if (\array_key_exists('AwaySackYards', $data)) {
            $object->setAwaySackYards($data['AwaySackYards']);
        }
        if (\array_key_exists('AwayPassesDefended', $data)) {
            $object->setAwayPassesDefended($data['AwayPassesDefended']);
        }
        if (\array_key_exists('AwayFumblesForced', $data)) {
            $object->setAwayFumblesForced($data['AwayFumblesForced']);
        }
        if (\array_key_exists('AwayFumblesRecovered', $data)) {
            $object->setAwayFumblesRecovered($data['AwayFumblesRecovered']);
        }
        if (\array_key_exists('AwayFumbleReturnYards', $data)) {
            $object->setAwayFumbleReturnYards($data['AwayFumbleReturnYards']);
        }
        if (\array_key_exists('AwayFumbleReturnTouchdowns', $data)) {
            $object->setAwayFumbleReturnTouchdowns($data['AwayFumbleReturnTouchdowns']);
        }
        if (\array_key_exists('AwayInterceptionReturnTouchdowns', $data)) {
            $object->setAwayInterceptionReturnTouchdowns($data['AwayInterceptionReturnTouchdowns']);
        }
        if (\array_key_exists('AwayBlockedKicks', $data)) {
            $object->setAwayBlockedKicks($data['AwayBlockedKicks']);
        }
        if (\array_key_exists('AwayPuntReturnTouchdowns', $data)) {
            $object->setAwayPuntReturnTouchdowns($data['AwayPuntReturnTouchdowns']);
        }
        if (\array_key_exists('AwayPuntReturnLong', $data)) {
            $object->setAwayPuntReturnLong($data['AwayPuntReturnLong']);
        }
        if (\array_key_exists('AwayKickReturnTouchdowns', $data)) {
            $object->setAwayKickReturnTouchdowns($data['AwayKickReturnTouchdowns']);
        }
        if (\array_key_exists('AwayKickReturnLong', $data)) {
            $object->setAwayKickReturnLong($data['AwayKickReturnLong']);
        }
        if (\array_key_exists('AwayBlockedKickReturnYards', $data)) {
            $object->setAwayBlockedKickReturnYards($data['AwayBlockedKickReturnYards']);
        }
        if (\array_key_exists('AwayBlockedKickReturnTouchdowns', $data)) {
            $object->setAwayBlockedKickReturnTouchdowns($data['AwayBlockedKickReturnTouchdowns']);
        }
        if (\array_key_exists('AwayFieldGoalReturnYards', $data)) {
            $object->setAwayFieldGoalReturnYards($data['AwayFieldGoalReturnYards']);
        }
        if (\array_key_exists('AwayFieldGoalReturnTouchdowns', $data)) {
            $object->setAwayFieldGoalReturnTouchdowns($data['AwayFieldGoalReturnTouchdowns']);
        }
        if (\array_key_exists('AwayPuntNetYards', $data)) {
            $object->setAwayPuntNetYards($data['AwayPuntNetYards']);
        }
        if (\array_key_exists('HomeSoloTackles', $data)) {
            $object->setHomeSoloTackles($data['HomeSoloTackles']);
        }
        if (\array_key_exists('HomeAssistedTackles', $data)) {
            $object->setHomeAssistedTackles($data['HomeAssistedTackles']);
        }
        if (\array_key_exists('HomeQuarterbackHits', $data)) {
            $object->setHomeQuarterbackHits($data['HomeQuarterbackHits']);
        }
        if (\array_key_exists('HomeTacklesForLoss', $data)) {
            $object->setHomeTacklesForLoss($data['HomeTacklesForLoss']);
        }
        if (\array_key_exists('HomeSacks', $data)) {
            $object->setHomeSacks($data['HomeSacks']);
        }
        if (\array_key_exists('HomeSackYards', $data)) {
            $object->setHomeSackYards($data['HomeSackYards']);
        }
        if (\array_key_exists('HomePassesDefended', $data)) {
            $object->setHomePassesDefended($data['HomePassesDefended']);
        }
        if (\array_key_exists('HomeFumblesForced', $data)) {
            $object->setHomeFumblesForced($data['HomeFumblesForced']);
        }
        if (\array_key_exists('HomeFumblesRecovered', $data)) {
            $object->setHomeFumblesRecovered($data['HomeFumblesRecovered']);
        }
        if (\array_key_exists('HomeFumbleReturnYards', $data)) {
            $object->setHomeFumbleReturnYards($data['HomeFumbleReturnYards']);
        }
        if (\array_key_exists('HomeFumbleReturnTouchdowns', $data)) {
            $object->setHomeFumbleReturnTouchdowns($data['HomeFumbleReturnTouchdowns']);
        }
        if (\array_key_exists('HomeInterceptionReturnTouchdowns', $data)) {
            $object->setHomeInterceptionReturnTouchdowns($data['HomeInterceptionReturnTouchdowns']);
        }
        if (\array_key_exists('HomeBlockedKicks', $data)) {
            $object->setHomeBlockedKicks($data['HomeBlockedKicks']);
        }
        if (\array_key_exists('HomePuntReturnTouchdowns', $data)) {
            $object->setHomePuntReturnTouchdowns($data['HomePuntReturnTouchdowns']);
        }
        if (\array_key_exists('HomePuntReturnLong', $data)) {
            $object->setHomePuntReturnLong($data['HomePuntReturnLong']);
        }
        if (\array_key_exists('HomeKickReturnTouchdowns', $data)) {
            $object->setHomeKickReturnTouchdowns($data['HomeKickReturnTouchdowns']);
        }
        if (\array_key_exists('HomeKickReturnLong', $data)) {
            $object->setHomeKickReturnLong($data['HomeKickReturnLong']);
        }
        if (\array_key_exists('HomeBlockedKickReturnYards', $data)) {
            $object->setHomeBlockedKickReturnYards($data['HomeBlockedKickReturnYards']);
        }
        if (\array_key_exists('HomeBlockedKickReturnTouchdowns', $data)) {
            $object->setHomeBlockedKickReturnTouchdowns($data['HomeBlockedKickReturnTouchdowns']);
        }
        if (\array_key_exists('HomeFieldGoalReturnYards', $data)) {
            $object->setHomeFieldGoalReturnYards($data['HomeFieldGoalReturnYards']);
        }
        if (\array_key_exists('HomeFieldGoalReturnTouchdowns', $data)) {
            $object->setHomeFieldGoalReturnTouchdowns($data['HomeFieldGoalReturnTouchdowns']);
        }
        if (\array_key_exists('HomePuntNetYards', $data)) {
            $object->setHomePuntNetYards($data['HomePuntNetYards']);
        }
        if (\array_key_exists('IsGameOver', $data)) {
            $object->setIsGameOver($data['IsGameOver']);
        }
        if (\array_key_exists('GameID', $data)) {
            $object->setGameID($data['GameID']);
        }
        if (\array_key_exists('StadiumID', $data)) {
            $object->setStadiumID($data['StadiumID']);
        }
        if (\array_key_exists('AwayTwoPointConversionReturns', $data)) {
            $object->setAwayTwoPointConversionReturns($data['AwayTwoPointConversionReturns']);
        }
        if (\array_key_exists('HomeTwoPointConversionReturns', $data)) {
            $object->setHomeTwoPointConversionReturns($data['HomeTwoPointConversionReturns']);
        }
        if (\array_key_exists('ScoreID', $data)) {
            $object->setScoreID($data['ScoreID']);
        }
        if (\array_key_exists('StadiumDetails', $data)) {
            $object->setStadiumDetails($this->denormalizer->denormalize($data['StadiumDetails'], 'Sportsdata\\API\\NFL\\Model\\Stadium', 'json', $context));
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
        if (null !== $object->getAwayTeam()) {
            $data['AwayTeam'] = $object->getAwayTeam();
        }
        if (null !== $object->getHomeTeam()) {
            $data['HomeTeam'] = $object->getHomeTeam();
        }
        if (null !== $object->getAwayScore()) {
            $data['AwayScore'] = $object->getAwayScore();
        }
        if (null !== $object->getHomeScore()) {
            $data['HomeScore'] = $object->getHomeScore();
        }
        if (null !== $object->getTotalScore()) {
            $data['TotalScore'] = $object->getTotalScore();
        }
        if (null !== $object->getOverUnder()) {
            $data['OverUnder'] = $object->getOverUnder();
        }
        if (null !== $object->getPointSpread()) {
            $data['PointSpread'] = $object->getPointSpread();
        }
        if (null !== $object->getAwayScoreQuarter1()) {
            $data['AwayScoreQuarter1'] = $object->getAwayScoreQuarter1();
        }
        if (null !== $object->getAwayScoreQuarter2()) {
            $data['AwayScoreQuarter2'] = $object->getAwayScoreQuarter2();
        }
        if (null !== $object->getAwayScoreQuarter3()) {
            $data['AwayScoreQuarter3'] = $object->getAwayScoreQuarter3();
        }
        if (null !== $object->getAwayScoreQuarter4()) {
            $data['AwayScoreQuarter4'] = $object->getAwayScoreQuarter4();
        }
        if (null !== $object->getAwayScoreOvertime()) {
            $data['AwayScoreOvertime'] = $object->getAwayScoreOvertime();
        }
        if (null !== $object->getHomeScoreQuarter1()) {
            $data['HomeScoreQuarter1'] = $object->getHomeScoreQuarter1();
        }
        if (null !== $object->getHomeScoreQuarter2()) {
            $data['HomeScoreQuarter2'] = $object->getHomeScoreQuarter2();
        }
        if (null !== $object->getHomeScoreQuarter3()) {
            $data['HomeScoreQuarter3'] = $object->getHomeScoreQuarter3();
        }
        if (null !== $object->getHomeScoreQuarter4()) {
            $data['HomeScoreQuarter4'] = $object->getHomeScoreQuarter4();
        }
        if (null !== $object->getHomeScoreOvertime()) {
            $data['HomeScoreOvertime'] = $object->getHomeScoreOvertime();
        }
        if (null !== $object->getAwayTimeOfPossession()) {
            $data['AwayTimeOfPossession'] = $object->getAwayTimeOfPossession();
        }
        if (null !== $object->getHomeTimeOfPossession()) {
            $data['HomeTimeOfPossession'] = $object->getHomeTimeOfPossession();
        }
        if (null !== $object->getAwayFirstDowns()) {
            $data['AwayFirstDowns'] = $object->getAwayFirstDowns();
        }
        if (null !== $object->getHomeFirstDowns()) {
            $data['HomeFirstDowns'] = $object->getHomeFirstDowns();
        }
        if (null !== $object->getAwayFirstDownsByRushing()) {
            $data['AwayFirstDownsByRushing'] = $object->getAwayFirstDownsByRushing();
        }
        if (null !== $object->getHomeFirstDownsByRushing()) {
            $data['HomeFirstDownsByRushing'] = $object->getHomeFirstDownsByRushing();
        }
        if (null !== $object->getAwayFirstDownsByPassing()) {
            $data['AwayFirstDownsByPassing'] = $object->getAwayFirstDownsByPassing();
        }
        if (null !== $object->getHomeFirstDownsByPassing()) {
            $data['HomeFirstDownsByPassing'] = $object->getHomeFirstDownsByPassing();
        }
        if (null !== $object->getAwayFirstDownsByPenalty()) {
            $data['AwayFirstDownsByPenalty'] = $object->getAwayFirstDownsByPenalty();
        }
        if (null !== $object->getHomeFirstDownsByPenalty()) {
            $data['HomeFirstDownsByPenalty'] = $object->getHomeFirstDownsByPenalty();
        }
        if (null !== $object->getAwayOffensivePlays()) {
            $data['AwayOffensivePlays'] = $object->getAwayOffensivePlays();
        }
        if (null !== $object->getHomeOffensivePlays()) {
            $data['HomeOffensivePlays'] = $object->getHomeOffensivePlays();
        }
        if (null !== $object->getAwayOffensiveYards()) {
            $data['AwayOffensiveYards'] = $object->getAwayOffensiveYards();
        }
        if (null !== $object->getHomeOffensiveYards()) {
            $data['HomeOffensiveYards'] = $object->getHomeOffensiveYards();
        }
        if (null !== $object->getAwayOffensiveYardsPerPlay()) {
            $data['AwayOffensiveYardsPerPlay'] = $object->getAwayOffensiveYardsPerPlay();
        }
        if (null !== $object->getHomeOffensiveYardsPerPlay()) {
            $data['HomeOffensiveYardsPerPlay'] = $object->getHomeOffensiveYardsPerPlay();
        }
        if (null !== $object->getAwayTouchdowns()) {
            $data['AwayTouchdowns'] = $object->getAwayTouchdowns();
        }
        if (null !== $object->getHomeTouchdowns()) {
            $data['HomeTouchdowns'] = $object->getHomeTouchdowns();
        }
        if (null !== $object->getAwayRushingAttempts()) {
            $data['AwayRushingAttempts'] = $object->getAwayRushingAttempts();
        }
        if (null !== $object->getHomeRushingAttempts()) {
            $data['HomeRushingAttempts'] = $object->getHomeRushingAttempts();
        }
        if (null !== $object->getAwayRushingYards()) {
            $data['AwayRushingYards'] = $object->getAwayRushingYards();
        }
        if (null !== $object->getHomeRushingYards()) {
            $data['HomeRushingYards'] = $object->getHomeRushingYards();
        }
        if (null !== $object->getAwayRushingYardsPerAttempt()) {
            $data['AwayRushingYardsPerAttempt'] = $object->getAwayRushingYardsPerAttempt();
        }
        if (null !== $object->getHomeRushingYardsPerAttempt()) {
            $data['HomeRushingYardsPerAttempt'] = $object->getHomeRushingYardsPerAttempt();
        }
        if (null !== $object->getAwayRushingTouchdowns()) {
            $data['AwayRushingTouchdowns'] = $object->getAwayRushingTouchdowns();
        }
        if (null !== $object->getHomeRushingTouchdowns()) {
            $data['HomeRushingTouchdowns'] = $object->getHomeRushingTouchdowns();
        }
        if (null !== $object->getAwayPassingAttempts()) {
            $data['AwayPassingAttempts'] = $object->getAwayPassingAttempts();
        }
        if (null !== $object->getHomePassingAttempts()) {
            $data['HomePassingAttempts'] = $object->getHomePassingAttempts();
        }
        if (null !== $object->getAwayPassingCompletions()) {
            $data['AwayPassingCompletions'] = $object->getAwayPassingCompletions();
        }
        if (null !== $object->getHomePassingCompletions()) {
            $data['HomePassingCompletions'] = $object->getHomePassingCompletions();
        }
        if (null !== $object->getAwayPassingYards()) {
            $data['AwayPassingYards'] = $object->getAwayPassingYards();
        }
        if (null !== $object->getHomePassingYards()) {
            $data['HomePassingYards'] = $object->getHomePassingYards();
        }
        if (null !== $object->getAwayPassingTouchdowns()) {
            $data['AwayPassingTouchdowns'] = $object->getAwayPassingTouchdowns();
        }
        if (null !== $object->getHomePassingTouchdowns()) {
            $data['HomePassingTouchdowns'] = $object->getHomePassingTouchdowns();
        }
        if (null !== $object->getAwayPassingInterceptions()) {
            $data['AwayPassingInterceptions'] = $object->getAwayPassingInterceptions();
        }
        if (null !== $object->getHomePassingInterceptions()) {
            $data['HomePassingInterceptions'] = $object->getHomePassingInterceptions();
        }
        if (null !== $object->getAwayPassingYardsPerAttempt()) {
            $data['AwayPassingYardsPerAttempt'] = $object->getAwayPassingYardsPerAttempt();
        }
        if (null !== $object->getHomePassingYardsPerAttempt()) {
            $data['HomePassingYardsPerAttempt'] = $object->getHomePassingYardsPerAttempt();
        }
        if (null !== $object->getAwayPassingYardsPerCompletion()) {
            $data['AwayPassingYardsPerCompletion'] = $object->getAwayPassingYardsPerCompletion();
        }
        if (null !== $object->getHomePassingYardsPerCompletion()) {
            $data['HomePassingYardsPerCompletion'] = $object->getHomePassingYardsPerCompletion();
        }
        if (null !== $object->getAwayCompletionPercentage()) {
            $data['AwayCompletionPercentage'] = $object->getAwayCompletionPercentage();
        }
        if (null !== $object->getHomeCompletionPercentage()) {
            $data['HomeCompletionPercentage'] = $object->getHomeCompletionPercentage();
        }
        if (null !== $object->getAwayPasserRating()) {
            $data['AwayPasserRating'] = $object->getAwayPasserRating();
        }
        if (null !== $object->getHomePasserRating()) {
            $data['HomePasserRating'] = $object->getHomePasserRating();
        }
        if (null !== $object->getAwayThirdDownAttempts()) {
            $data['AwayThirdDownAttempts'] = $object->getAwayThirdDownAttempts();
        }
        if (null !== $object->getHomeThirdDownAttempts()) {
            $data['HomeThirdDownAttempts'] = $object->getHomeThirdDownAttempts();
        }
        if (null !== $object->getAwayThirdDownConversions()) {
            $data['AwayThirdDownConversions'] = $object->getAwayThirdDownConversions();
        }
        if (null !== $object->getHomeThirdDownConversions()) {
            $data['HomeThirdDownConversions'] = $object->getHomeThirdDownConversions();
        }
        if (null !== $object->getAwayThirdDownPercentage()) {
            $data['AwayThirdDownPercentage'] = $object->getAwayThirdDownPercentage();
        }
        if (null !== $object->getHomeThirdDownPercentage()) {
            $data['HomeThirdDownPercentage'] = $object->getHomeThirdDownPercentage();
        }
        if (null !== $object->getAwayFourthDownAttempts()) {
            $data['AwayFourthDownAttempts'] = $object->getAwayFourthDownAttempts();
        }
        if (null !== $object->getHomeFourthDownAttempts()) {
            $data['HomeFourthDownAttempts'] = $object->getHomeFourthDownAttempts();
        }
        if (null !== $object->getAwayFourthDownConversions()) {
            $data['AwayFourthDownConversions'] = $object->getAwayFourthDownConversions();
        }
        if (null !== $object->getHomeFourthDownConversions()) {
            $data['HomeFourthDownConversions'] = $object->getHomeFourthDownConversions();
        }
        if (null !== $object->getAwayFourthDownPercentage()) {
            $data['AwayFourthDownPercentage'] = $object->getAwayFourthDownPercentage();
        }
        if (null !== $object->getHomeFourthDownPercentage()) {
            $data['HomeFourthDownPercentage'] = $object->getHomeFourthDownPercentage();
        }
        if (null !== $object->getAwayRedZoneAttempts()) {
            $data['AwayRedZoneAttempts'] = $object->getAwayRedZoneAttempts();
        }
        if (null !== $object->getHomeRedZoneAttempts()) {
            $data['HomeRedZoneAttempts'] = $object->getHomeRedZoneAttempts();
        }
        if (null !== $object->getAwayRedZoneConversions()) {
            $data['AwayRedZoneConversions'] = $object->getAwayRedZoneConversions();
        }
        if (null !== $object->getHomeRedZoneConversions()) {
            $data['HomeRedZoneConversions'] = $object->getHomeRedZoneConversions();
        }
        if (null !== $object->getAwayGoalToGoAttempts()) {
            $data['AwayGoalToGoAttempts'] = $object->getAwayGoalToGoAttempts();
        }
        if (null !== $object->getHomeGoalToGoAttempts()) {
            $data['HomeGoalToGoAttempts'] = $object->getHomeGoalToGoAttempts();
        }
        if (null !== $object->getAwayGoalToGoConversions()) {
            $data['AwayGoalToGoConversions'] = $object->getAwayGoalToGoConversions();
        }
        if (null !== $object->getHomeGoalToGoConversions()) {
            $data['HomeGoalToGoConversions'] = $object->getHomeGoalToGoConversions();
        }
        if (null !== $object->getAwayReturnYards()) {
            $data['AwayReturnYards'] = $object->getAwayReturnYards();
        }
        if (null !== $object->getHomeReturnYards()) {
            $data['HomeReturnYards'] = $object->getHomeReturnYards();
        }
        if (null !== $object->getAwayPenalties()) {
            $data['AwayPenalties'] = $object->getAwayPenalties();
        }
        if (null !== $object->getHomePenalties()) {
            $data['HomePenalties'] = $object->getHomePenalties();
        }
        if (null !== $object->getAwayPenaltyYards()) {
            $data['AwayPenaltyYards'] = $object->getAwayPenaltyYards();
        }
        if (null !== $object->getHomePenaltyYards()) {
            $data['HomePenaltyYards'] = $object->getHomePenaltyYards();
        }
        if (null !== $object->getAwayFumbles()) {
            $data['AwayFumbles'] = $object->getAwayFumbles();
        }
        if (null !== $object->getHomeFumbles()) {
            $data['HomeFumbles'] = $object->getHomeFumbles();
        }
        if (null !== $object->getAwayFumblesLost()) {
            $data['AwayFumblesLost'] = $object->getAwayFumblesLost();
        }
        if (null !== $object->getHomeFumblesLost()) {
            $data['HomeFumblesLost'] = $object->getHomeFumblesLost();
        }
        if (null !== $object->getAwayTimesSacked()) {
            $data['AwayTimesSacked'] = $object->getAwayTimesSacked();
        }
        if (null !== $object->getHomeTimesSacked()) {
            $data['HomeTimesSacked'] = $object->getHomeTimesSacked();
        }
        if (null !== $object->getAwayTimesSackedYards()) {
            $data['AwayTimesSackedYards'] = $object->getAwayTimesSackedYards();
        }
        if (null !== $object->getHomeTimesSackedYards()) {
            $data['HomeTimesSackedYards'] = $object->getHomeTimesSackedYards();
        }
        if (null !== $object->getAwaySafeties()) {
            $data['AwaySafeties'] = $object->getAwaySafeties();
        }
        if (null !== $object->getHomeSafeties()) {
            $data['HomeSafeties'] = $object->getHomeSafeties();
        }
        if (null !== $object->getAwayPunts()) {
            $data['AwayPunts'] = $object->getAwayPunts();
        }
        if (null !== $object->getHomePunts()) {
            $data['HomePunts'] = $object->getHomePunts();
        }
        if (null !== $object->getAwayPuntYards()) {
            $data['AwayPuntYards'] = $object->getAwayPuntYards();
        }
        if (null !== $object->getHomePuntYards()) {
            $data['HomePuntYards'] = $object->getHomePuntYards();
        }
        if (null !== $object->getAwayPuntAverage()) {
            $data['AwayPuntAverage'] = $object->getAwayPuntAverage();
        }
        if (null !== $object->getHomePuntAverage()) {
            $data['HomePuntAverage'] = $object->getHomePuntAverage();
        }
        if (null !== $object->getAwayGiveaways()) {
            $data['AwayGiveaways'] = $object->getAwayGiveaways();
        }
        if (null !== $object->getHomeGiveaways()) {
            $data['HomeGiveaways'] = $object->getHomeGiveaways();
        }
        if (null !== $object->getAwayTakeaways()) {
            $data['AwayTakeaways'] = $object->getAwayTakeaways();
        }
        if (null !== $object->getHomeTakeaways()) {
            $data['HomeTakeaways'] = $object->getHomeTakeaways();
        }
        if (null !== $object->getAwayTurnoverDifferential()) {
            $data['AwayTurnoverDifferential'] = $object->getAwayTurnoverDifferential();
        }
        if (null !== $object->getHomeTurnoverDifferential()) {
            $data['HomeTurnoverDifferential'] = $object->getHomeTurnoverDifferential();
        }
        if (null !== $object->getAwayKickoffs()) {
            $data['AwayKickoffs'] = $object->getAwayKickoffs();
        }
        if (null !== $object->getHomeKickoffs()) {
            $data['HomeKickoffs'] = $object->getHomeKickoffs();
        }
        if (null !== $object->getAwayKickoffsInEndZone()) {
            $data['AwayKickoffsInEndZone'] = $object->getAwayKickoffsInEndZone();
        }
        if (null !== $object->getHomeKickoffsInEndZone()) {
            $data['HomeKickoffsInEndZone'] = $object->getHomeKickoffsInEndZone();
        }
        if (null !== $object->getAwayKickoffTouchbacks()) {
            $data['AwayKickoffTouchbacks'] = $object->getAwayKickoffTouchbacks();
        }
        if (null !== $object->getHomeKickoffTouchbacks()) {
            $data['HomeKickoffTouchbacks'] = $object->getHomeKickoffTouchbacks();
        }
        if (null !== $object->getAwayPuntsHadBlocked()) {
            $data['AwayPuntsHadBlocked'] = $object->getAwayPuntsHadBlocked();
        }
        if (null !== $object->getHomePuntsHadBlocked()) {
            $data['HomePuntsHadBlocked'] = $object->getHomePuntsHadBlocked();
        }
        if (null !== $object->getAwayPuntNetAverage()) {
            $data['AwayPuntNetAverage'] = $object->getAwayPuntNetAverage();
        }
        if (null !== $object->getHomePuntNetAverage()) {
            $data['HomePuntNetAverage'] = $object->getHomePuntNetAverage();
        }
        if (null !== $object->getAwayExtraPointKickingAttempts()) {
            $data['AwayExtraPointKickingAttempts'] = $object->getAwayExtraPointKickingAttempts();
        }
        if (null !== $object->getHomeExtraPointKickingAttempts()) {
            $data['HomeExtraPointKickingAttempts'] = $object->getHomeExtraPointKickingAttempts();
        }
        if (null !== $object->getAwayExtraPointKickingConversions()) {
            $data['AwayExtraPointKickingConversions'] = $object->getAwayExtraPointKickingConversions();
        }
        if (null !== $object->getHomeExtraPointKickingConversions()) {
            $data['HomeExtraPointKickingConversions'] = $object->getHomeExtraPointKickingConversions();
        }
        if (null !== $object->getAwayExtraPointsHadBlocked()) {
            $data['AwayExtraPointsHadBlocked'] = $object->getAwayExtraPointsHadBlocked();
        }
        if (null !== $object->getHomeExtraPointsHadBlocked()) {
            $data['HomeExtraPointsHadBlocked'] = $object->getHomeExtraPointsHadBlocked();
        }
        if (null !== $object->getAwayExtraPointPassingAttempts()) {
            $data['AwayExtraPointPassingAttempts'] = $object->getAwayExtraPointPassingAttempts();
        }
        if (null !== $object->getHomeExtraPointPassingAttempts()) {
            $data['HomeExtraPointPassingAttempts'] = $object->getHomeExtraPointPassingAttempts();
        }
        if (null !== $object->getAwayExtraPointPassingConversions()) {
            $data['AwayExtraPointPassingConversions'] = $object->getAwayExtraPointPassingConversions();
        }
        if (null !== $object->getHomeExtraPointPassingConversions()) {
            $data['HomeExtraPointPassingConversions'] = $object->getHomeExtraPointPassingConversions();
        }
        if (null !== $object->getAwayExtraPointRushingAttempts()) {
            $data['AwayExtraPointRushingAttempts'] = $object->getAwayExtraPointRushingAttempts();
        }
        if (null !== $object->getHomeExtraPointRushingAttempts()) {
            $data['HomeExtraPointRushingAttempts'] = $object->getHomeExtraPointRushingAttempts();
        }
        if (null !== $object->getAwayExtraPointRushingConversions()) {
            $data['AwayExtraPointRushingConversions'] = $object->getAwayExtraPointRushingConversions();
        }
        if (null !== $object->getHomeExtraPointRushingConversions()) {
            $data['HomeExtraPointRushingConversions'] = $object->getHomeExtraPointRushingConversions();
        }
        if (null !== $object->getAwayFieldGoalAttempts()) {
            $data['AwayFieldGoalAttempts'] = $object->getAwayFieldGoalAttempts();
        }
        if (null !== $object->getHomeFieldGoalAttempts()) {
            $data['HomeFieldGoalAttempts'] = $object->getHomeFieldGoalAttempts();
        }
        if (null !== $object->getAwayFieldGoalsMade()) {
            $data['AwayFieldGoalsMade'] = $object->getAwayFieldGoalsMade();
        }
        if (null !== $object->getHomeFieldGoalsMade()) {
            $data['HomeFieldGoalsMade'] = $object->getHomeFieldGoalsMade();
        }
        if (null !== $object->getAwayFieldGoalsHadBlocked()) {
            $data['AwayFieldGoalsHadBlocked'] = $object->getAwayFieldGoalsHadBlocked();
        }
        if (null !== $object->getHomeFieldGoalsHadBlocked()) {
            $data['HomeFieldGoalsHadBlocked'] = $object->getHomeFieldGoalsHadBlocked();
        }
        if (null !== $object->getAwayPuntReturns()) {
            $data['AwayPuntReturns'] = $object->getAwayPuntReturns();
        }
        if (null !== $object->getHomePuntReturns()) {
            $data['HomePuntReturns'] = $object->getHomePuntReturns();
        }
        if (null !== $object->getAwayPuntReturnYards()) {
            $data['AwayPuntReturnYards'] = $object->getAwayPuntReturnYards();
        }
        if (null !== $object->getHomePuntReturnYards()) {
            $data['HomePuntReturnYards'] = $object->getHomePuntReturnYards();
        }
        if (null !== $object->getAwayKickReturns()) {
            $data['AwayKickReturns'] = $object->getAwayKickReturns();
        }
        if (null !== $object->getHomeKickReturns()) {
            $data['HomeKickReturns'] = $object->getHomeKickReturns();
        }
        if (null !== $object->getAwayKickReturnYards()) {
            $data['AwayKickReturnYards'] = $object->getAwayKickReturnYards();
        }
        if (null !== $object->getHomeKickReturnYards()) {
            $data['HomeKickReturnYards'] = $object->getHomeKickReturnYards();
        }
        if (null !== $object->getAwayInterceptionReturns()) {
            $data['AwayInterceptionReturns'] = $object->getAwayInterceptionReturns();
        }
        if (null !== $object->getHomeInterceptionReturns()) {
            $data['HomeInterceptionReturns'] = $object->getHomeInterceptionReturns();
        }
        if (null !== $object->getAwayInterceptionReturnYards()) {
            $data['AwayInterceptionReturnYards'] = $object->getAwayInterceptionReturnYards();
        }
        if (null !== $object->getHomeInterceptionReturnYards()) {
            $data['HomeInterceptionReturnYards'] = $object->getHomeInterceptionReturnYards();
        }
        if (null !== $object->getAwaySoloTackles()) {
            $data['AwaySoloTackles'] = $object->getAwaySoloTackles();
        }
        if (null !== $object->getAwayAssistedTackles()) {
            $data['AwayAssistedTackles'] = $object->getAwayAssistedTackles();
        }
        if (null !== $object->getAwayQuarterbackHits()) {
            $data['AwayQuarterbackHits'] = $object->getAwayQuarterbackHits();
        }
        if (null !== $object->getAwayTacklesForLoss()) {
            $data['AwayTacklesForLoss'] = $object->getAwayTacklesForLoss();
        }
        if (null !== $object->getAwaySacks()) {
            $data['AwaySacks'] = $object->getAwaySacks();
        }
        if (null !== $object->getAwaySackYards()) {
            $data['AwaySackYards'] = $object->getAwaySackYards();
        }
        if (null !== $object->getAwayPassesDefended()) {
            $data['AwayPassesDefended'] = $object->getAwayPassesDefended();
        }
        if (null !== $object->getAwayFumblesForced()) {
            $data['AwayFumblesForced'] = $object->getAwayFumblesForced();
        }
        if (null !== $object->getAwayFumblesRecovered()) {
            $data['AwayFumblesRecovered'] = $object->getAwayFumblesRecovered();
        }
        if (null !== $object->getAwayFumbleReturnYards()) {
            $data['AwayFumbleReturnYards'] = $object->getAwayFumbleReturnYards();
        }
        if (null !== $object->getAwayFumbleReturnTouchdowns()) {
            $data['AwayFumbleReturnTouchdowns'] = $object->getAwayFumbleReturnTouchdowns();
        }
        if (null !== $object->getAwayInterceptionReturnTouchdowns()) {
            $data['AwayInterceptionReturnTouchdowns'] = $object->getAwayInterceptionReturnTouchdowns();
        }
        if (null !== $object->getAwayBlockedKicks()) {
            $data['AwayBlockedKicks'] = $object->getAwayBlockedKicks();
        }
        if (null !== $object->getAwayPuntReturnTouchdowns()) {
            $data['AwayPuntReturnTouchdowns'] = $object->getAwayPuntReturnTouchdowns();
        }
        if (null !== $object->getAwayPuntReturnLong()) {
            $data['AwayPuntReturnLong'] = $object->getAwayPuntReturnLong();
        }
        if (null !== $object->getAwayKickReturnTouchdowns()) {
            $data['AwayKickReturnTouchdowns'] = $object->getAwayKickReturnTouchdowns();
        }
        if (null !== $object->getAwayKickReturnLong()) {
            $data['AwayKickReturnLong'] = $object->getAwayKickReturnLong();
        }
        if (null !== $object->getAwayBlockedKickReturnYards()) {
            $data['AwayBlockedKickReturnYards'] = $object->getAwayBlockedKickReturnYards();
        }
        if (null !== $object->getAwayBlockedKickReturnTouchdowns()) {
            $data['AwayBlockedKickReturnTouchdowns'] = $object->getAwayBlockedKickReturnTouchdowns();
        }
        if (null !== $object->getAwayFieldGoalReturnYards()) {
            $data['AwayFieldGoalReturnYards'] = $object->getAwayFieldGoalReturnYards();
        }
        if (null !== $object->getAwayFieldGoalReturnTouchdowns()) {
            $data['AwayFieldGoalReturnTouchdowns'] = $object->getAwayFieldGoalReturnTouchdowns();
        }
        if (null !== $object->getAwayPuntNetYards()) {
            $data['AwayPuntNetYards'] = $object->getAwayPuntNetYards();
        }
        if (null !== $object->getHomeSoloTackles()) {
            $data['HomeSoloTackles'] = $object->getHomeSoloTackles();
        }
        if (null !== $object->getHomeAssistedTackles()) {
            $data['HomeAssistedTackles'] = $object->getHomeAssistedTackles();
        }
        if (null !== $object->getHomeQuarterbackHits()) {
            $data['HomeQuarterbackHits'] = $object->getHomeQuarterbackHits();
        }
        if (null !== $object->getHomeTacklesForLoss()) {
            $data['HomeTacklesForLoss'] = $object->getHomeTacklesForLoss();
        }
        if (null !== $object->getHomeSacks()) {
            $data['HomeSacks'] = $object->getHomeSacks();
        }
        if (null !== $object->getHomeSackYards()) {
            $data['HomeSackYards'] = $object->getHomeSackYards();
        }
        if (null !== $object->getHomePassesDefended()) {
            $data['HomePassesDefended'] = $object->getHomePassesDefended();
        }
        if (null !== $object->getHomeFumblesForced()) {
            $data['HomeFumblesForced'] = $object->getHomeFumblesForced();
        }
        if (null !== $object->getHomeFumblesRecovered()) {
            $data['HomeFumblesRecovered'] = $object->getHomeFumblesRecovered();
        }
        if (null !== $object->getHomeFumbleReturnYards()) {
            $data['HomeFumbleReturnYards'] = $object->getHomeFumbleReturnYards();
        }
        if (null !== $object->getHomeFumbleReturnTouchdowns()) {
            $data['HomeFumbleReturnTouchdowns'] = $object->getHomeFumbleReturnTouchdowns();
        }
        if (null !== $object->getHomeInterceptionReturnTouchdowns()) {
            $data['HomeInterceptionReturnTouchdowns'] = $object->getHomeInterceptionReturnTouchdowns();
        }
        if (null !== $object->getHomeBlockedKicks()) {
            $data['HomeBlockedKicks'] = $object->getHomeBlockedKicks();
        }
        if (null !== $object->getHomePuntReturnTouchdowns()) {
            $data['HomePuntReturnTouchdowns'] = $object->getHomePuntReturnTouchdowns();
        }
        if (null !== $object->getHomePuntReturnLong()) {
            $data['HomePuntReturnLong'] = $object->getHomePuntReturnLong();
        }
        if (null !== $object->getHomeKickReturnTouchdowns()) {
            $data['HomeKickReturnTouchdowns'] = $object->getHomeKickReturnTouchdowns();
        }
        if (null !== $object->getHomeKickReturnLong()) {
            $data['HomeKickReturnLong'] = $object->getHomeKickReturnLong();
        }
        if (null !== $object->getHomeBlockedKickReturnYards()) {
            $data['HomeBlockedKickReturnYards'] = $object->getHomeBlockedKickReturnYards();
        }
        if (null !== $object->getHomeBlockedKickReturnTouchdowns()) {
            $data['HomeBlockedKickReturnTouchdowns'] = $object->getHomeBlockedKickReturnTouchdowns();
        }
        if (null !== $object->getHomeFieldGoalReturnYards()) {
            $data['HomeFieldGoalReturnYards'] = $object->getHomeFieldGoalReturnYards();
        }
        if (null !== $object->getHomeFieldGoalReturnTouchdowns()) {
            $data['HomeFieldGoalReturnTouchdowns'] = $object->getHomeFieldGoalReturnTouchdowns();
        }
        if (null !== $object->getHomePuntNetYards()) {
            $data['HomePuntNetYards'] = $object->getHomePuntNetYards();
        }
        if (null !== $object->getIsGameOver()) {
            $data['IsGameOver'] = $object->getIsGameOver();
        }
        if (null !== $object->getGameID()) {
            $data['GameID'] = $object->getGameID();
        }
        if (null !== $object->getStadiumID()) {
            $data['StadiumID'] = $object->getStadiumID();
        }
        if (null !== $object->getAwayTwoPointConversionReturns()) {
            $data['AwayTwoPointConversionReturns'] = $object->getAwayTwoPointConversionReturns();
        }
        if (null !== $object->getHomeTwoPointConversionReturns()) {
            $data['HomeTwoPointConversionReturns'] = $object->getHomeTwoPointConversionReturns();
        }
        if (null !== $object->getScoreID()) {
            $data['ScoreID'] = $object->getScoreID();
        }
        if (null !== $object->getStadiumDetails()) {
            $data['StadiumDetails'] = $this->normalizer->normalize($object->getStadiumDetails(), 'json', $context);
        }
        return $data;
    }
}