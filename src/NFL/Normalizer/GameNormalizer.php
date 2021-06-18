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
        if (\array_key_exists('GameKey', $data) && $data['GameKey'] !== null) {
            $object->setGameKey($data['GameKey']);
        }
        elseif (\array_key_exists('GameKey', $data) && $data['GameKey'] === null) {
            $object->setGameKey(null);
        }
        if (\array_key_exists('Date', $data) && $data['Date'] !== null) {
            $object->setDate($data['Date']);
        }
        elseif (\array_key_exists('Date', $data) && $data['Date'] === null) {
            $object->setDate(null);
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
        if (\array_key_exists('Stadium', $data) && $data['Stadium'] !== null) {
            $object->setStadium($data['Stadium']);
        }
        elseif (\array_key_exists('Stadium', $data) && $data['Stadium'] === null) {
            $object->setStadium(null);
        }
        if (\array_key_exists('PlayingSurface', $data) && $data['PlayingSurface'] !== null) {
            $object->setPlayingSurface($data['PlayingSurface']);
        }
        elseif (\array_key_exists('PlayingSurface', $data) && $data['PlayingSurface'] === null) {
            $object->setPlayingSurface(null);
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
        if (\array_key_exists('AwayTeam', $data) && $data['AwayTeam'] !== null) {
            $object->setAwayTeam($data['AwayTeam']);
        }
        elseif (\array_key_exists('AwayTeam', $data) && $data['AwayTeam'] === null) {
            $object->setAwayTeam(null);
        }
        if (\array_key_exists('HomeTeam', $data) && $data['HomeTeam'] !== null) {
            $object->setHomeTeam($data['HomeTeam']);
        }
        elseif (\array_key_exists('HomeTeam', $data) && $data['HomeTeam'] === null) {
            $object->setHomeTeam(null);
        }
        if (\array_key_exists('AwayScore', $data)) {
            $object->setAwayScore($data['AwayScore']);
        }
        if (\array_key_exists('HomeScore', $data)) {
            $object->setHomeScore($data['HomeScore']);
        }
        if (\array_key_exists('TotalScore', $data) && $data['TotalScore'] !== null) {
            $object->setTotalScore($data['TotalScore']);
        }
        elseif (\array_key_exists('TotalScore', $data) && $data['TotalScore'] === null) {
            $object->setTotalScore(null);
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
        if (\array_key_exists('AwayScoreQuarter1', $data) && $data['AwayScoreQuarter1'] !== null) {
            $object->setAwayScoreQuarter1($data['AwayScoreQuarter1']);
        }
        elseif (\array_key_exists('AwayScoreQuarter1', $data) && $data['AwayScoreQuarter1'] === null) {
            $object->setAwayScoreQuarter1(null);
        }
        if (\array_key_exists('AwayScoreQuarter2', $data) && $data['AwayScoreQuarter2'] !== null) {
            $object->setAwayScoreQuarter2($data['AwayScoreQuarter2']);
        }
        elseif (\array_key_exists('AwayScoreQuarter2', $data) && $data['AwayScoreQuarter2'] === null) {
            $object->setAwayScoreQuarter2(null);
        }
        if (\array_key_exists('AwayScoreQuarter3', $data) && $data['AwayScoreQuarter3'] !== null) {
            $object->setAwayScoreQuarter3($data['AwayScoreQuarter3']);
        }
        elseif (\array_key_exists('AwayScoreQuarter3', $data) && $data['AwayScoreQuarter3'] === null) {
            $object->setAwayScoreQuarter3(null);
        }
        if (\array_key_exists('AwayScoreQuarter4', $data) && $data['AwayScoreQuarter4'] !== null) {
            $object->setAwayScoreQuarter4($data['AwayScoreQuarter4']);
        }
        elseif (\array_key_exists('AwayScoreQuarter4', $data) && $data['AwayScoreQuarter4'] === null) {
            $object->setAwayScoreQuarter4(null);
        }
        if (\array_key_exists('AwayScoreOvertime', $data) && $data['AwayScoreOvertime'] !== null) {
            $object->setAwayScoreOvertime($data['AwayScoreOvertime']);
        }
        elseif (\array_key_exists('AwayScoreOvertime', $data) && $data['AwayScoreOvertime'] === null) {
            $object->setAwayScoreOvertime(null);
        }
        if (\array_key_exists('HomeScoreQuarter1', $data) && $data['HomeScoreQuarter1'] !== null) {
            $object->setHomeScoreQuarter1($data['HomeScoreQuarter1']);
        }
        elseif (\array_key_exists('HomeScoreQuarter1', $data) && $data['HomeScoreQuarter1'] === null) {
            $object->setHomeScoreQuarter1(null);
        }
        if (\array_key_exists('HomeScoreQuarter2', $data) && $data['HomeScoreQuarter2'] !== null) {
            $object->setHomeScoreQuarter2($data['HomeScoreQuarter2']);
        }
        elseif (\array_key_exists('HomeScoreQuarter2', $data) && $data['HomeScoreQuarter2'] === null) {
            $object->setHomeScoreQuarter2(null);
        }
        if (\array_key_exists('HomeScoreQuarter3', $data) && $data['HomeScoreQuarter3'] !== null) {
            $object->setHomeScoreQuarter3($data['HomeScoreQuarter3']);
        }
        elseif (\array_key_exists('HomeScoreQuarter3', $data) && $data['HomeScoreQuarter3'] === null) {
            $object->setHomeScoreQuarter3(null);
        }
        if (\array_key_exists('HomeScoreQuarter4', $data) && $data['HomeScoreQuarter4'] !== null) {
            $object->setHomeScoreQuarter4($data['HomeScoreQuarter4']);
        }
        elseif (\array_key_exists('HomeScoreQuarter4', $data) && $data['HomeScoreQuarter4'] === null) {
            $object->setHomeScoreQuarter4(null);
        }
        if (\array_key_exists('HomeScoreOvertime', $data) && $data['HomeScoreOvertime'] !== null) {
            $object->setHomeScoreOvertime($data['HomeScoreOvertime']);
        }
        elseif (\array_key_exists('HomeScoreOvertime', $data) && $data['HomeScoreOvertime'] === null) {
            $object->setHomeScoreOvertime(null);
        }
        if (\array_key_exists('AwayTimeOfPossession', $data) && $data['AwayTimeOfPossession'] !== null) {
            $object->setAwayTimeOfPossession($data['AwayTimeOfPossession']);
        }
        elseif (\array_key_exists('AwayTimeOfPossession', $data) && $data['AwayTimeOfPossession'] === null) {
            $object->setAwayTimeOfPossession(null);
        }
        if (\array_key_exists('HomeTimeOfPossession', $data) && $data['HomeTimeOfPossession'] !== null) {
            $object->setHomeTimeOfPossession($data['HomeTimeOfPossession']);
        }
        elseif (\array_key_exists('HomeTimeOfPossession', $data) && $data['HomeTimeOfPossession'] === null) {
            $object->setHomeTimeOfPossession(null);
        }
        if (\array_key_exists('AwayFirstDowns', $data) && $data['AwayFirstDowns'] !== null) {
            $object->setAwayFirstDowns($data['AwayFirstDowns']);
        }
        elseif (\array_key_exists('AwayFirstDowns', $data) && $data['AwayFirstDowns'] === null) {
            $object->setAwayFirstDowns(null);
        }
        if (\array_key_exists('HomeFirstDowns', $data) && $data['HomeFirstDowns'] !== null) {
            $object->setHomeFirstDowns($data['HomeFirstDowns']);
        }
        elseif (\array_key_exists('HomeFirstDowns', $data) && $data['HomeFirstDowns'] === null) {
            $object->setHomeFirstDowns(null);
        }
        if (\array_key_exists('AwayFirstDownsByRushing', $data) && $data['AwayFirstDownsByRushing'] !== null) {
            $object->setAwayFirstDownsByRushing($data['AwayFirstDownsByRushing']);
        }
        elseif (\array_key_exists('AwayFirstDownsByRushing', $data) && $data['AwayFirstDownsByRushing'] === null) {
            $object->setAwayFirstDownsByRushing(null);
        }
        if (\array_key_exists('HomeFirstDownsByRushing', $data) && $data['HomeFirstDownsByRushing'] !== null) {
            $object->setHomeFirstDownsByRushing($data['HomeFirstDownsByRushing']);
        }
        elseif (\array_key_exists('HomeFirstDownsByRushing', $data) && $data['HomeFirstDownsByRushing'] === null) {
            $object->setHomeFirstDownsByRushing(null);
        }
        if (\array_key_exists('AwayFirstDownsByPassing', $data) && $data['AwayFirstDownsByPassing'] !== null) {
            $object->setAwayFirstDownsByPassing($data['AwayFirstDownsByPassing']);
        }
        elseif (\array_key_exists('AwayFirstDownsByPassing', $data) && $data['AwayFirstDownsByPassing'] === null) {
            $object->setAwayFirstDownsByPassing(null);
        }
        if (\array_key_exists('HomeFirstDownsByPassing', $data) && $data['HomeFirstDownsByPassing'] !== null) {
            $object->setHomeFirstDownsByPassing($data['HomeFirstDownsByPassing']);
        }
        elseif (\array_key_exists('HomeFirstDownsByPassing', $data) && $data['HomeFirstDownsByPassing'] === null) {
            $object->setHomeFirstDownsByPassing(null);
        }
        if (\array_key_exists('AwayFirstDownsByPenalty', $data) && $data['AwayFirstDownsByPenalty'] !== null) {
            $object->setAwayFirstDownsByPenalty($data['AwayFirstDownsByPenalty']);
        }
        elseif (\array_key_exists('AwayFirstDownsByPenalty', $data) && $data['AwayFirstDownsByPenalty'] === null) {
            $object->setAwayFirstDownsByPenalty(null);
        }
        if (\array_key_exists('HomeFirstDownsByPenalty', $data) && $data['HomeFirstDownsByPenalty'] !== null) {
            $object->setHomeFirstDownsByPenalty($data['HomeFirstDownsByPenalty']);
        }
        elseif (\array_key_exists('HomeFirstDownsByPenalty', $data) && $data['HomeFirstDownsByPenalty'] === null) {
            $object->setHomeFirstDownsByPenalty(null);
        }
        if (\array_key_exists('AwayOffensivePlays', $data) && $data['AwayOffensivePlays'] !== null) {
            $object->setAwayOffensivePlays($data['AwayOffensivePlays']);
        }
        elseif (\array_key_exists('AwayOffensivePlays', $data) && $data['AwayOffensivePlays'] === null) {
            $object->setAwayOffensivePlays(null);
        }
        if (\array_key_exists('HomeOffensivePlays', $data) && $data['HomeOffensivePlays'] !== null) {
            $object->setHomeOffensivePlays($data['HomeOffensivePlays']);
        }
        elseif (\array_key_exists('HomeOffensivePlays', $data) && $data['HomeOffensivePlays'] === null) {
            $object->setHomeOffensivePlays(null);
        }
        if (\array_key_exists('AwayOffensiveYards', $data) && $data['AwayOffensiveYards'] !== null) {
            $object->setAwayOffensiveYards($data['AwayOffensiveYards']);
        }
        elseif (\array_key_exists('AwayOffensiveYards', $data) && $data['AwayOffensiveYards'] === null) {
            $object->setAwayOffensiveYards(null);
        }
        if (\array_key_exists('HomeOffensiveYards', $data) && $data['HomeOffensiveYards'] !== null) {
            $object->setHomeOffensiveYards($data['HomeOffensiveYards']);
        }
        elseif (\array_key_exists('HomeOffensiveYards', $data) && $data['HomeOffensiveYards'] === null) {
            $object->setHomeOffensiveYards(null);
        }
        if (\array_key_exists('AwayOffensiveYardsPerPlay', $data) && $data['AwayOffensiveYardsPerPlay'] !== null) {
            $object->setAwayOffensiveYardsPerPlay($data['AwayOffensiveYardsPerPlay']);
        }
        elseif (\array_key_exists('AwayOffensiveYardsPerPlay', $data) && $data['AwayOffensiveYardsPerPlay'] === null) {
            $object->setAwayOffensiveYardsPerPlay(null);
        }
        if (\array_key_exists('HomeOffensiveYardsPerPlay', $data) && $data['HomeOffensiveYardsPerPlay'] !== null) {
            $object->setHomeOffensiveYardsPerPlay($data['HomeOffensiveYardsPerPlay']);
        }
        elseif (\array_key_exists('HomeOffensiveYardsPerPlay', $data) && $data['HomeOffensiveYardsPerPlay'] === null) {
            $object->setHomeOffensiveYardsPerPlay(null);
        }
        if (\array_key_exists('AwayTouchdowns', $data) && $data['AwayTouchdowns'] !== null) {
            $object->setAwayTouchdowns($data['AwayTouchdowns']);
        }
        elseif (\array_key_exists('AwayTouchdowns', $data) && $data['AwayTouchdowns'] === null) {
            $object->setAwayTouchdowns(null);
        }
        if (\array_key_exists('HomeTouchdowns', $data) && $data['HomeTouchdowns'] !== null) {
            $object->setHomeTouchdowns($data['HomeTouchdowns']);
        }
        elseif (\array_key_exists('HomeTouchdowns', $data) && $data['HomeTouchdowns'] === null) {
            $object->setHomeTouchdowns(null);
        }
        if (\array_key_exists('AwayRushingAttempts', $data) && $data['AwayRushingAttempts'] !== null) {
            $object->setAwayRushingAttempts($data['AwayRushingAttempts']);
        }
        elseif (\array_key_exists('AwayRushingAttempts', $data) && $data['AwayRushingAttempts'] === null) {
            $object->setAwayRushingAttempts(null);
        }
        if (\array_key_exists('HomeRushingAttempts', $data) && $data['HomeRushingAttempts'] !== null) {
            $object->setHomeRushingAttempts($data['HomeRushingAttempts']);
        }
        elseif (\array_key_exists('HomeRushingAttempts', $data) && $data['HomeRushingAttempts'] === null) {
            $object->setHomeRushingAttempts(null);
        }
        if (\array_key_exists('AwayRushingYards', $data) && $data['AwayRushingYards'] !== null) {
            $object->setAwayRushingYards($data['AwayRushingYards']);
        }
        elseif (\array_key_exists('AwayRushingYards', $data) && $data['AwayRushingYards'] === null) {
            $object->setAwayRushingYards(null);
        }
        if (\array_key_exists('HomeRushingYards', $data) && $data['HomeRushingYards'] !== null) {
            $object->setHomeRushingYards($data['HomeRushingYards']);
        }
        elseif (\array_key_exists('HomeRushingYards', $data) && $data['HomeRushingYards'] === null) {
            $object->setHomeRushingYards(null);
        }
        if (\array_key_exists('AwayRushingYardsPerAttempt', $data) && $data['AwayRushingYardsPerAttempt'] !== null) {
            $object->setAwayRushingYardsPerAttempt($data['AwayRushingYardsPerAttempt']);
        }
        elseif (\array_key_exists('AwayRushingYardsPerAttempt', $data) && $data['AwayRushingYardsPerAttempt'] === null) {
            $object->setAwayRushingYardsPerAttempt(null);
        }
        if (\array_key_exists('HomeRushingYardsPerAttempt', $data) && $data['HomeRushingYardsPerAttempt'] !== null) {
            $object->setHomeRushingYardsPerAttempt($data['HomeRushingYardsPerAttempt']);
        }
        elseif (\array_key_exists('HomeRushingYardsPerAttempt', $data) && $data['HomeRushingYardsPerAttempt'] === null) {
            $object->setHomeRushingYardsPerAttempt(null);
        }
        if (\array_key_exists('AwayRushingTouchdowns', $data) && $data['AwayRushingTouchdowns'] !== null) {
            $object->setAwayRushingTouchdowns($data['AwayRushingTouchdowns']);
        }
        elseif (\array_key_exists('AwayRushingTouchdowns', $data) && $data['AwayRushingTouchdowns'] === null) {
            $object->setAwayRushingTouchdowns(null);
        }
        if (\array_key_exists('HomeRushingTouchdowns', $data) && $data['HomeRushingTouchdowns'] !== null) {
            $object->setHomeRushingTouchdowns($data['HomeRushingTouchdowns']);
        }
        elseif (\array_key_exists('HomeRushingTouchdowns', $data) && $data['HomeRushingTouchdowns'] === null) {
            $object->setHomeRushingTouchdowns(null);
        }
        if (\array_key_exists('AwayPassingAttempts', $data) && $data['AwayPassingAttempts'] !== null) {
            $object->setAwayPassingAttempts($data['AwayPassingAttempts']);
        }
        elseif (\array_key_exists('AwayPassingAttempts', $data) && $data['AwayPassingAttempts'] === null) {
            $object->setAwayPassingAttempts(null);
        }
        if (\array_key_exists('HomePassingAttempts', $data) && $data['HomePassingAttempts'] !== null) {
            $object->setHomePassingAttempts($data['HomePassingAttempts']);
        }
        elseif (\array_key_exists('HomePassingAttempts', $data) && $data['HomePassingAttempts'] === null) {
            $object->setHomePassingAttempts(null);
        }
        if (\array_key_exists('AwayPassingCompletions', $data) && $data['AwayPassingCompletions'] !== null) {
            $object->setAwayPassingCompletions($data['AwayPassingCompletions']);
        }
        elseif (\array_key_exists('AwayPassingCompletions', $data) && $data['AwayPassingCompletions'] === null) {
            $object->setAwayPassingCompletions(null);
        }
        if (\array_key_exists('HomePassingCompletions', $data) && $data['HomePassingCompletions'] !== null) {
            $object->setHomePassingCompletions($data['HomePassingCompletions']);
        }
        elseif (\array_key_exists('HomePassingCompletions', $data) && $data['HomePassingCompletions'] === null) {
            $object->setHomePassingCompletions(null);
        }
        if (\array_key_exists('AwayPassingYards', $data) && $data['AwayPassingYards'] !== null) {
            $object->setAwayPassingYards($data['AwayPassingYards']);
        }
        elseif (\array_key_exists('AwayPassingYards', $data) && $data['AwayPassingYards'] === null) {
            $object->setAwayPassingYards(null);
        }
        if (\array_key_exists('HomePassingYards', $data) && $data['HomePassingYards'] !== null) {
            $object->setHomePassingYards($data['HomePassingYards']);
        }
        elseif (\array_key_exists('HomePassingYards', $data) && $data['HomePassingYards'] === null) {
            $object->setHomePassingYards(null);
        }
        if (\array_key_exists('AwayPassingTouchdowns', $data) && $data['AwayPassingTouchdowns'] !== null) {
            $object->setAwayPassingTouchdowns($data['AwayPassingTouchdowns']);
        }
        elseif (\array_key_exists('AwayPassingTouchdowns', $data) && $data['AwayPassingTouchdowns'] === null) {
            $object->setAwayPassingTouchdowns(null);
        }
        if (\array_key_exists('HomePassingTouchdowns', $data) && $data['HomePassingTouchdowns'] !== null) {
            $object->setHomePassingTouchdowns($data['HomePassingTouchdowns']);
        }
        elseif (\array_key_exists('HomePassingTouchdowns', $data) && $data['HomePassingTouchdowns'] === null) {
            $object->setHomePassingTouchdowns(null);
        }
        if (\array_key_exists('AwayPassingInterceptions', $data) && $data['AwayPassingInterceptions'] !== null) {
            $object->setAwayPassingInterceptions($data['AwayPassingInterceptions']);
        }
        elseif (\array_key_exists('AwayPassingInterceptions', $data) && $data['AwayPassingInterceptions'] === null) {
            $object->setAwayPassingInterceptions(null);
        }
        if (\array_key_exists('HomePassingInterceptions', $data) && $data['HomePassingInterceptions'] !== null) {
            $object->setHomePassingInterceptions($data['HomePassingInterceptions']);
        }
        elseif (\array_key_exists('HomePassingInterceptions', $data) && $data['HomePassingInterceptions'] === null) {
            $object->setHomePassingInterceptions(null);
        }
        if (\array_key_exists('AwayPassingYardsPerAttempt', $data) && $data['AwayPassingYardsPerAttempt'] !== null) {
            $object->setAwayPassingYardsPerAttempt($data['AwayPassingYardsPerAttempt']);
        }
        elseif (\array_key_exists('AwayPassingYardsPerAttempt', $data) && $data['AwayPassingYardsPerAttempt'] === null) {
            $object->setAwayPassingYardsPerAttempt(null);
        }
        if (\array_key_exists('HomePassingYardsPerAttempt', $data) && $data['HomePassingYardsPerAttempt'] !== null) {
            $object->setHomePassingYardsPerAttempt($data['HomePassingYardsPerAttempt']);
        }
        elseif (\array_key_exists('HomePassingYardsPerAttempt', $data) && $data['HomePassingYardsPerAttempt'] === null) {
            $object->setHomePassingYardsPerAttempt(null);
        }
        if (\array_key_exists('AwayPassingYardsPerCompletion', $data) && $data['AwayPassingYardsPerCompletion'] !== null) {
            $object->setAwayPassingYardsPerCompletion($data['AwayPassingYardsPerCompletion']);
        }
        elseif (\array_key_exists('AwayPassingYardsPerCompletion', $data) && $data['AwayPassingYardsPerCompletion'] === null) {
            $object->setAwayPassingYardsPerCompletion(null);
        }
        if (\array_key_exists('HomePassingYardsPerCompletion', $data) && $data['HomePassingYardsPerCompletion'] !== null) {
            $object->setHomePassingYardsPerCompletion($data['HomePassingYardsPerCompletion']);
        }
        elseif (\array_key_exists('HomePassingYardsPerCompletion', $data) && $data['HomePassingYardsPerCompletion'] === null) {
            $object->setHomePassingYardsPerCompletion(null);
        }
        if (\array_key_exists('AwayCompletionPercentage', $data) && $data['AwayCompletionPercentage'] !== null) {
            $object->setAwayCompletionPercentage($data['AwayCompletionPercentage']);
        }
        elseif (\array_key_exists('AwayCompletionPercentage', $data) && $data['AwayCompletionPercentage'] === null) {
            $object->setAwayCompletionPercentage(null);
        }
        if (\array_key_exists('HomeCompletionPercentage', $data) && $data['HomeCompletionPercentage'] !== null) {
            $object->setHomeCompletionPercentage($data['HomeCompletionPercentage']);
        }
        elseif (\array_key_exists('HomeCompletionPercentage', $data) && $data['HomeCompletionPercentage'] === null) {
            $object->setHomeCompletionPercentage(null);
        }
        if (\array_key_exists('AwayPasserRating', $data) && $data['AwayPasserRating'] !== null) {
            $object->setAwayPasserRating($data['AwayPasserRating']);
        }
        elseif (\array_key_exists('AwayPasserRating', $data) && $data['AwayPasserRating'] === null) {
            $object->setAwayPasserRating(null);
        }
        if (\array_key_exists('HomePasserRating', $data) && $data['HomePasserRating'] !== null) {
            $object->setHomePasserRating($data['HomePasserRating']);
        }
        elseif (\array_key_exists('HomePasserRating', $data) && $data['HomePasserRating'] === null) {
            $object->setHomePasserRating(null);
        }
        if (\array_key_exists('AwayThirdDownAttempts', $data) && $data['AwayThirdDownAttempts'] !== null) {
            $object->setAwayThirdDownAttempts($data['AwayThirdDownAttempts']);
        }
        elseif (\array_key_exists('AwayThirdDownAttempts', $data) && $data['AwayThirdDownAttempts'] === null) {
            $object->setAwayThirdDownAttempts(null);
        }
        if (\array_key_exists('HomeThirdDownAttempts', $data) && $data['HomeThirdDownAttempts'] !== null) {
            $object->setHomeThirdDownAttempts($data['HomeThirdDownAttempts']);
        }
        elseif (\array_key_exists('HomeThirdDownAttempts', $data) && $data['HomeThirdDownAttempts'] === null) {
            $object->setHomeThirdDownAttempts(null);
        }
        if (\array_key_exists('AwayThirdDownConversions', $data) && $data['AwayThirdDownConversions'] !== null) {
            $object->setAwayThirdDownConversions($data['AwayThirdDownConversions']);
        }
        elseif (\array_key_exists('AwayThirdDownConversions', $data) && $data['AwayThirdDownConversions'] === null) {
            $object->setAwayThirdDownConversions(null);
        }
        if (\array_key_exists('HomeThirdDownConversions', $data) && $data['HomeThirdDownConversions'] !== null) {
            $object->setHomeThirdDownConversions($data['HomeThirdDownConversions']);
        }
        elseif (\array_key_exists('HomeThirdDownConversions', $data) && $data['HomeThirdDownConversions'] === null) {
            $object->setHomeThirdDownConversions(null);
        }
        if (\array_key_exists('AwayThirdDownPercentage', $data) && $data['AwayThirdDownPercentage'] !== null) {
            $object->setAwayThirdDownPercentage($data['AwayThirdDownPercentage']);
        }
        elseif (\array_key_exists('AwayThirdDownPercentage', $data) && $data['AwayThirdDownPercentage'] === null) {
            $object->setAwayThirdDownPercentage(null);
        }
        if (\array_key_exists('HomeThirdDownPercentage', $data) && $data['HomeThirdDownPercentage'] !== null) {
            $object->setHomeThirdDownPercentage($data['HomeThirdDownPercentage']);
        }
        elseif (\array_key_exists('HomeThirdDownPercentage', $data) && $data['HomeThirdDownPercentage'] === null) {
            $object->setHomeThirdDownPercentage(null);
        }
        if (\array_key_exists('AwayFourthDownAttempts', $data) && $data['AwayFourthDownAttempts'] !== null) {
            $object->setAwayFourthDownAttempts($data['AwayFourthDownAttempts']);
        }
        elseif (\array_key_exists('AwayFourthDownAttempts', $data) && $data['AwayFourthDownAttempts'] === null) {
            $object->setAwayFourthDownAttempts(null);
        }
        if (\array_key_exists('HomeFourthDownAttempts', $data) && $data['HomeFourthDownAttempts'] !== null) {
            $object->setHomeFourthDownAttempts($data['HomeFourthDownAttempts']);
        }
        elseif (\array_key_exists('HomeFourthDownAttempts', $data) && $data['HomeFourthDownAttempts'] === null) {
            $object->setHomeFourthDownAttempts(null);
        }
        if (\array_key_exists('AwayFourthDownConversions', $data) && $data['AwayFourthDownConversions'] !== null) {
            $object->setAwayFourthDownConversions($data['AwayFourthDownConversions']);
        }
        elseif (\array_key_exists('AwayFourthDownConversions', $data) && $data['AwayFourthDownConversions'] === null) {
            $object->setAwayFourthDownConversions(null);
        }
        if (\array_key_exists('HomeFourthDownConversions', $data) && $data['HomeFourthDownConversions'] !== null) {
            $object->setHomeFourthDownConversions($data['HomeFourthDownConversions']);
        }
        elseif (\array_key_exists('HomeFourthDownConversions', $data) && $data['HomeFourthDownConversions'] === null) {
            $object->setHomeFourthDownConversions(null);
        }
        if (\array_key_exists('AwayFourthDownPercentage', $data) && $data['AwayFourthDownPercentage'] !== null) {
            $object->setAwayFourthDownPercentage($data['AwayFourthDownPercentage']);
        }
        elseif (\array_key_exists('AwayFourthDownPercentage', $data) && $data['AwayFourthDownPercentage'] === null) {
            $object->setAwayFourthDownPercentage(null);
        }
        if (\array_key_exists('HomeFourthDownPercentage', $data) && $data['HomeFourthDownPercentage'] !== null) {
            $object->setHomeFourthDownPercentage($data['HomeFourthDownPercentage']);
        }
        elseif (\array_key_exists('HomeFourthDownPercentage', $data) && $data['HomeFourthDownPercentage'] === null) {
            $object->setHomeFourthDownPercentage(null);
        }
        if (\array_key_exists('AwayRedZoneAttempts', $data) && $data['AwayRedZoneAttempts'] !== null) {
            $object->setAwayRedZoneAttempts($data['AwayRedZoneAttempts']);
        }
        elseif (\array_key_exists('AwayRedZoneAttempts', $data) && $data['AwayRedZoneAttempts'] === null) {
            $object->setAwayRedZoneAttempts(null);
        }
        if (\array_key_exists('HomeRedZoneAttempts', $data) && $data['HomeRedZoneAttempts'] !== null) {
            $object->setHomeRedZoneAttempts($data['HomeRedZoneAttempts']);
        }
        elseif (\array_key_exists('HomeRedZoneAttempts', $data) && $data['HomeRedZoneAttempts'] === null) {
            $object->setHomeRedZoneAttempts(null);
        }
        if (\array_key_exists('AwayRedZoneConversions', $data) && $data['AwayRedZoneConversions'] !== null) {
            $object->setAwayRedZoneConversions($data['AwayRedZoneConversions']);
        }
        elseif (\array_key_exists('AwayRedZoneConversions', $data) && $data['AwayRedZoneConversions'] === null) {
            $object->setAwayRedZoneConversions(null);
        }
        if (\array_key_exists('HomeRedZoneConversions', $data) && $data['HomeRedZoneConversions'] !== null) {
            $object->setHomeRedZoneConversions($data['HomeRedZoneConversions']);
        }
        elseif (\array_key_exists('HomeRedZoneConversions', $data) && $data['HomeRedZoneConversions'] === null) {
            $object->setHomeRedZoneConversions(null);
        }
        if (\array_key_exists('AwayGoalToGoAttempts', $data) && $data['AwayGoalToGoAttempts'] !== null) {
            $object->setAwayGoalToGoAttempts($data['AwayGoalToGoAttempts']);
        }
        elseif (\array_key_exists('AwayGoalToGoAttempts', $data) && $data['AwayGoalToGoAttempts'] === null) {
            $object->setAwayGoalToGoAttempts(null);
        }
        if (\array_key_exists('HomeGoalToGoAttempts', $data) && $data['HomeGoalToGoAttempts'] !== null) {
            $object->setHomeGoalToGoAttempts($data['HomeGoalToGoAttempts']);
        }
        elseif (\array_key_exists('HomeGoalToGoAttempts', $data) && $data['HomeGoalToGoAttempts'] === null) {
            $object->setHomeGoalToGoAttempts(null);
        }
        if (\array_key_exists('AwayGoalToGoConversions', $data) && $data['AwayGoalToGoConversions'] !== null) {
            $object->setAwayGoalToGoConversions($data['AwayGoalToGoConversions']);
        }
        elseif (\array_key_exists('AwayGoalToGoConversions', $data) && $data['AwayGoalToGoConversions'] === null) {
            $object->setAwayGoalToGoConversions(null);
        }
        if (\array_key_exists('HomeGoalToGoConversions', $data) && $data['HomeGoalToGoConversions'] !== null) {
            $object->setHomeGoalToGoConversions($data['HomeGoalToGoConversions']);
        }
        elseif (\array_key_exists('HomeGoalToGoConversions', $data) && $data['HomeGoalToGoConversions'] === null) {
            $object->setHomeGoalToGoConversions(null);
        }
        if (\array_key_exists('AwayReturnYards', $data) && $data['AwayReturnYards'] !== null) {
            $object->setAwayReturnYards($data['AwayReturnYards']);
        }
        elseif (\array_key_exists('AwayReturnYards', $data) && $data['AwayReturnYards'] === null) {
            $object->setAwayReturnYards(null);
        }
        if (\array_key_exists('HomeReturnYards', $data) && $data['HomeReturnYards'] !== null) {
            $object->setHomeReturnYards($data['HomeReturnYards']);
        }
        elseif (\array_key_exists('HomeReturnYards', $data) && $data['HomeReturnYards'] === null) {
            $object->setHomeReturnYards(null);
        }
        if (\array_key_exists('AwayPenalties', $data) && $data['AwayPenalties'] !== null) {
            $object->setAwayPenalties($data['AwayPenalties']);
        }
        elseif (\array_key_exists('AwayPenalties', $data) && $data['AwayPenalties'] === null) {
            $object->setAwayPenalties(null);
        }
        if (\array_key_exists('HomePenalties', $data) && $data['HomePenalties'] !== null) {
            $object->setHomePenalties($data['HomePenalties']);
        }
        elseif (\array_key_exists('HomePenalties', $data) && $data['HomePenalties'] === null) {
            $object->setHomePenalties(null);
        }
        if (\array_key_exists('AwayPenaltyYards', $data) && $data['AwayPenaltyYards'] !== null) {
            $object->setAwayPenaltyYards($data['AwayPenaltyYards']);
        }
        elseif (\array_key_exists('AwayPenaltyYards', $data) && $data['AwayPenaltyYards'] === null) {
            $object->setAwayPenaltyYards(null);
        }
        if (\array_key_exists('HomePenaltyYards', $data) && $data['HomePenaltyYards'] !== null) {
            $object->setHomePenaltyYards($data['HomePenaltyYards']);
        }
        elseif (\array_key_exists('HomePenaltyYards', $data) && $data['HomePenaltyYards'] === null) {
            $object->setHomePenaltyYards(null);
        }
        if (\array_key_exists('AwayFumbles', $data) && $data['AwayFumbles'] !== null) {
            $object->setAwayFumbles($data['AwayFumbles']);
        }
        elseif (\array_key_exists('AwayFumbles', $data) && $data['AwayFumbles'] === null) {
            $object->setAwayFumbles(null);
        }
        if (\array_key_exists('HomeFumbles', $data) && $data['HomeFumbles'] !== null) {
            $object->setHomeFumbles($data['HomeFumbles']);
        }
        elseif (\array_key_exists('HomeFumbles', $data) && $data['HomeFumbles'] === null) {
            $object->setHomeFumbles(null);
        }
        if (\array_key_exists('AwayFumblesLost', $data) && $data['AwayFumblesLost'] !== null) {
            $object->setAwayFumblesLost($data['AwayFumblesLost']);
        }
        elseif (\array_key_exists('AwayFumblesLost', $data) && $data['AwayFumblesLost'] === null) {
            $object->setAwayFumblesLost(null);
        }
        if (\array_key_exists('HomeFumblesLost', $data) && $data['HomeFumblesLost'] !== null) {
            $object->setHomeFumblesLost($data['HomeFumblesLost']);
        }
        elseif (\array_key_exists('HomeFumblesLost', $data) && $data['HomeFumblesLost'] === null) {
            $object->setHomeFumblesLost(null);
        }
        if (\array_key_exists('AwayTimesSacked', $data) && $data['AwayTimesSacked'] !== null) {
            $object->setAwayTimesSacked($data['AwayTimesSacked']);
        }
        elseif (\array_key_exists('AwayTimesSacked', $data) && $data['AwayTimesSacked'] === null) {
            $object->setAwayTimesSacked(null);
        }
        if (\array_key_exists('HomeTimesSacked', $data) && $data['HomeTimesSacked'] !== null) {
            $object->setHomeTimesSacked($data['HomeTimesSacked']);
        }
        elseif (\array_key_exists('HomeTimesSacked', $data) && $data['HomeTimesSacked'] === null) {
            $object->setHomeTimesSacked(null);
        }
        if (\array_key_exists('AwayTimesSackedYards', $data) && $data['AwayTimesSackedYards'] !== null) {
            $object->setAwayTimesSackedYards($data['AwayTimesSackedYards']);
        }
        elseif (\array_key_exists('AwayTimesSackedYards', $data) && $data['AwayTimesSackedYards'] === null) {
            $object->setAwayTimesSackedYards(null);
        }
        if (\array_key_exists('HomeTimesSackedYards', $data) && $data['HomeTimesSackedYards'] !== null) {
            $object->setHomeTimesSackedYards($data['HomeTimesSackedYards']);
        }
        elseif (\array_key_exists('HomeTimesSackedYards', $data) && $data['HomeTimesSackedYards'] === null) {
            $object->setHomeTimesSackedYards(null);
        }
        if (\array_key_exists('AwaySafeties', $data) && $data['AwaySafeties'] !== null) {
            $object->setAwaySafeties($data['AwaySafeties']);
        }
        elseif (\array_key_exists('AwaySafeties', $data) && $data['AwaySafeties'] === null) {
            $object->setAwaySafeties(null);
        }
        if (\array_key_exists('HomeSafeties', $data) && $data['HomeSafeties'] !== null) {
            $object->setHomeSafeties($data['HomeSafeties']);
        }
        elseif (\array_key_exists('HomeSafeties', $data) && $data['HomeSafeties'] === null) {
            $object->setHomeSafeties(null);
        }
        if (\array_key_exists('AwayPunts', $data) && $data['AwayPunts'] !== null) {
            $object->setAwayPunts($data['AwayPunts']);
        }
        elseif (\array_key_exists('AwayPunts', $data) && $data['AwayPunts'] === null) {
            $object->setAwayPunts(null);
        }
        if (\array_key_exists('HomePunts', $data) && $data['HomePunts'] !== null) {
            $object->setHomePunts($data['HomePunts']);
        }
        elseif (\array_key_exists('HomePunts', $data) && $data['HomePunts'] === null) {
            $object->setHomePunts(null);
        }
        if (\array_key_exists('AwayPuntYards', $data) && $data['AwayPuntYards'] !== null) {
            $object->setAwayPuntYards($data['AwayPuntYards']);
        }
        elseif (\array_key_exists('AwayPuntYards', $data) && $data['AwayPuntYards'] === null) {
            $object->setAwayPuntYards(null);
        }
        if (\array_key_exists('HomePuntYards', $data) && $data['HomePuntYards'] !== null) {
            $object->setHomePuntYards($data['HomePuntYards']);
        }
        elseif (\array_key_exists('HomePuntYards', $data) && $data['HomePuntYards'] === null) {
            $object->setHomePuntYards(null);
        }
        if (\array_key_exists('AwayPuntAverage', $data) && $data['AwayPuntAverage'] !== null) {
            $object->setAwayPuntAverage($data['AwayPuntAverage']);
        }
        elseif (\array_key_exists('AwayPuntAverage', $data) && $data['AwayPuntAverage'] === null) {
            $object->setAwayPuntAverage(null);
        }
        if (\array_key_exists('HomePuntAverage', $data) && $data['HomePuntAverage'] !== null) {
            $object->setHomePuntAverage($data['HomePuntAverage']);
        }
        elseif (\array_key_exists('HomePuntAverage', $data) && $data['HomePuntAverage'] === null) {
            $object->setHomePuntAverage(null);
        }
        if (\array_key_exists('AwayGiveaways', $data) && $data['AwayGiveaways'] !== null) {
            $object->setAwayGiveaways($data['AwayGiveaways']);
        }
        elseif (\array_key_exists('AwayGiveaways', $data) && $data['AwayGiveaways'] === null) {
            $object->setAwayGiveaways(null);
        }
        if (\array_key_exists('HomeGiveaways', $data) && $data['HomeGiveaways'] !== null) {
            $object->setHomeGiveaways($data['HomeGiveaways']);
        }
        elseif (\array_key_exists('HomeGiveaways', $data) && $data['HomeGiveaways'] === null) {
            $object->setHomeGiveaways(null);
        }
        if (\array_key_exists('AwayTakeaways', $data) && $data['AwayTakeaways'] !== null) {
            $object->setAwayTakeaways($data['AwayTakeaways']);
        }
        elseif (\array_key_exists('AwayTakeaways', $data) && $data['AwayTakeaways'] === null) {
            $object->setAwayTakeaways(null);
        }
        if (\array_key_exists('HomeTakeaways', $data) && $data['HomeTakeaways'] !== null) {
            $object->setHomeTakeaways($data['HomeTakeaways']);
        }
        elseif (\array_key_exists('HomeTakeaways', $data) && $data['HomeTakeaways'] === null) {
            $object->setHomeTakeaways(null);
        }
        if (\array_key_exists('AwayTurnoverDifferential', $data) && $data['AwayTurnoverDifferential'] !== null) {
            $object->setAwayTurnoverDifferential($data['AwayTurnoverDifferential']);
        }
        elseif (\array_key_exists('AwayTurnoverDifferential', $data) && $data['AwayTurnoverDifferential'] === null) {
            $object->setAwayTurnoverDifferential(null);
        }
        if (\array_key_exists('HomeTurnoverDifferential', $data) && $data['HomeTurnoverDifferential'] !== null) {
            $object->setHomeTurnoverDifferential($data['HomeTurnoverDifferential']);
        }
        elseif (\array_key_exists('HomeTurnoverDifferential', $data) && $data['HomeTurnoverDifferential'] === null) {
            $object->setHomeTurnoverDifferential(null);
        }
        if (\array_key_exists('AwayKickoffs', $data) && $data['AwayKickoffs'] !== null) {
            $object->setAwayKickoffs($data['AwayKickoffs']);
        }
        elseif (\array_key_exists('AwayKickoffs', $data) && $data['AwayKickoffs'] === null) {
            $object->setAwayKickoffs(null);
        }
        if (\array_key_exists('HomeKickoffs', $data) && $data['HomeKickoffs'] !== null) {
            $object->setHomeKickoffs($data['HomeKickoffs']);
        }
        elseif (\array_key_exists('HomeKickoffs', $data) && $data['HomeKickoffs'] === null) {
            $object->setHomeKickoffs(null);
        }
        if (\array_key_exists('AwayKickoffsInEndZone', $data) && $data['AwayKickoffsInEndZone'] !== null) {
            $object->setAwayKickoffsInEndZone($data['AwayKickoffsInEndZone']);
        }
        elseif (\array_key_exists('AwayKickoffsInEndZone', $data) && $data['AwayKickoffsInEndZone'] === null) {
            $object->setAwayKickoffsInEndZone(null);
        }
        if (\array_key_exists('HomeKickoffsInEndZone', $data) && $data['HomeKickoffsInEndZone'] !== null) {
            $object->setHomeKickoffsInEndZone($data['HomeKickoffsInEndZone']);
        }
        elseif (\array_key_exists('HomeKickoffsInEndZone', $data) && $data['HomeKickoffsInEndZone'] === null) {
            $object->setHomeKickoffsInEndZone(null);
        }
        if (\array_key_exists('AwayKickoffTouchbacks', $data) && $data['AwayKickoffTouchbacks'] !== null) {
            $object->setAwayKickoffTouchbacks($data['AwayKickoffTouchbacks']);
        }
        elseif (\array_key_exists('AwayKickoffTouchbacks', $data) && $data['AwayKickoffTouchbacks'] === null) {
            $object->setAwayKickoffTouchbacks(null);
        }
        if (\array_key_exists('HomeKickoffTouchbacks', $data) && $data['HomeKickoffTouchbacks'] !== null) {
            $object->setHomeKickoffTouchbacks($data['HomeKickoffTouchbacks']);
        }
        elseif (\array_key_exists('HomeKickoffTouchbacks', $data) && $data['HomeKickoffTouchbacks'] === null) {
            $object->setHomeKickoffTouchbacks(null);
        }
        if (\array_key_exists('AwayPuntsHadBlocked', $data) && $data['AwayPuntsHadBlocked'] !== null) {
            $object->setAwayPuntsHadBlocked($data['AwayPuntsHadBlocked']);
        }
        elseif (\array_key_exists('AwayPuntsHadBlocked', $data) && $data['AwayPuntsHadBlocked'] === null) {
            $object->setAwayPuntsHadBlocked(null);
        }
        if (\array_key_exists('HomePuntsHadBlocked', $data) && $data['HomePuntsHadBlocked'] !== null) {
            $object->setHomePuntsHadBlocked($data['HomePuntsHadBlocked']);
        }
        elseif (\array_key_exists('HomePuntsHadBlocked', $data) && $data['HomePuntsHadBlocked'] === null) {
            $object->setHomePuntsHadBlocked(null);
        }
        if (\array_key_exists('AwayPuntNetAverage', $data) && $data['AwayPuntNetAverage'] !== null) {
            $object->setAwayPuntNetAverage($data['AwayPuntNetAverage']);
        }
        elseif (\array_key_exists('AwayPuntNetAverage', $data) && $data['AwayPuntNetAverage'] === null) {
            $object->setAwayPuntNetAverage(null);
        }
        if (\array_key_exists('HomePuntNetAverage', $data) && $data['HomePuntNetAverage'] !== null) {
            $object->setHomePuntNetAverage($data['HomePuntNetAverage']);
        }
        elseif (\array_key_exists('HomePuntNetAverage', $data) && $data['HomePuntNetAverage'] === null) {
            $object->setHomePuntNetAverage(null);
        }
        if (\array_key_exists('AwayExtraPointKickingAttempts', $data) && $data['AwayExtraPointKickingAttempts'] !== null) {
            $object->setAwayExtraPointKickingAttempts($data['AwayExtraPointKickingAttempts']);
        }
        elseif (\array_key_exists('AwayExtraPointKickingAttempts', $data) && $data['AwayExtraPointKickingAttempts'] === null) {
            $object->setAwayExtraPointKickingAttempts(null);
        }
        if (\array_key_exists('HomeExtraPointKickingAttempts', $data) && $data['HomeExtraPointKickingAttempts'] !== null) {
            $object->setHomeExtraPointKickingAttempts($data['HomeExtraPointKickingAttempts']);
        }
        elseif (\array_key_exists('HomeExtraPointKickingAttempts', $data) && $data['HomeExtraPointKickingAttempts'] === null) {
            $object->setHomeExtraPointKickingAttempts(null);
        }
        if (\array_key_exists('AwayExtraPointKickingConversions', $data) && $data['AwayExtraPointKickingConversions'] !== null) {
            $object->setAwayExtraPointKickingConversions($data['AwayExtraPointKickingConversions']);
        }
        elseif (\array_key_exists('AwayExtraPointKickingConversions', $data) && $data['AwayExtraPointKickingConversions'] === null) {
            $object->setAwayExtraPointKickingConversions(null);
        }
        if (\array_key_exists('HomeExtraPointKickingConversions', $data) && $data['HomeExtraPointKickingConversions'] !== null) {
            $object->setHomeExtraPointKickingConversions($data['HomeExtraPointKickingConversions']);
        }
        elseif (\array_key_exists('HomeExtraPointKickingConversions', $data) && $data['HomeExtraPointKickingConversions'] === null) {
            $object->setHomeExtraPointKickingConversions(null);
        }
        if (\array_key_exists('AwayExtraPointsHadBlocked', $data) && $data['AwayExtraPointsHadBlocked'] !== null) {
            $object->setAwayExtraPointsHadBlocked($data['AwayExtraPointsHadBlocked']);
        }
        elseif (\array_key_exists('AwayExtraPointsHadBlocked', $data) && $data['AwayExtraPointsHadBlocked'] === null) {
            $object->setAwayExtraPointsHadBlocked(null);
        }
        if (\array_key_exists('HomeExtraPointsHadBlocked', $data) && $data['HomeExtraPointsHadBlocked'] !== null) {
            $object->setHomeExtraPointsHadBlocked($data['HomeExtraPointsHadBlocked']);
        }
        elseif (\array_key_exists('HomeExtraPointsHadBlocked', $data) && $data['HomeExtraPointsHadBlocked'] === null) {
            $object->setHomeExtraPointsHadBlocked(null);
        }
        if (\array_key_exists('AwayExtraPointPassingAttempts', $data) && $data['AwayExtraPointPassingAttempts'] !== null) {
            $object->setAwayExtraPointPassingAttempts($data['AwayExtraPointPassingAttempts']);
        }
        elseif (\array_key_exists('AwayExtraPointPassingAttempts', $data) && $data['AwayExtraPointPassingAttempts'] === null) {
            $object->setAwayExtraPointPassingAttempts(null);
        }
        if (\array_key_exists('HomeExtraPointPassingAttempts', $data) && $data['HomeExtraPointPassingAttempts'] !== null) {
            $object->setHomeExtraPointPassingAttempts($data['HomeExtraPointPassingAttempts']);
        }
        elseif (\array_key_exists('HomeExtraPointPassingAttempts', $data) && $data['HomeExtraPointPassingAttempts'] === null) {
            $object->setHomeExtraPointPassingAttempts(null);
        }
        if (\array_key_exists('AwayExtraPointPassingConversions', $data) && $data['AwayExtraPointPassingConversions'] !== null) {
            $object->setAwayExtraPointPassingConversions($data['AwayExtraPointPassingConversions']);
        }
        elseif (\array_key_exists('AwayExtraPointPassingConversions', $data) && $data['AwayExtraPointPassingConversions'] === null) {
            $object->setAwayExtraPointPassingConversions(null);
        }
        if (\array_key_exists('HomeExtraPointPassingConversions', $data) && $data['HomeExtraPointPassingConversions'] !== null) {
            $object->setHomeExtraPointPassingConversions($data['HomeExtraPointPassingConversions']);
        }
        elseif (\array_key_exists('HomeExtraPointPassingConversions', $data) && $data['HomeExtraPointPassingConversions'] === null) {
            $object->setHomeExtraPointPassingConversions(null);
        }
        if (\array_key_exists('AwayExtraPointRushingAttempts', $data) && $data['AwayExtraPointRushingAttempts'] !== null) {
            $object->setAwayExtraPointRushingAttempts($data['AwayExtraPointRushingAttempts']);
        }
        elseif (\array_key_exists('AwayExtraPointRushingAttempts', $data) && $data['AwayExtraPointRushingAttempts'] === null) {
            $object->setAwayExtraPointRushingAttempts(null);
        }
        if (\array_key_exists('HomeExtraPointRushingAttempts', $data) && $data['HomeExtraPointRushingAttempts'] !== null) {
            $object->setHomeExtraPointRushingAttempts($data['HomeExtraPointRushingAttempts']);
        }
        elseif (\array_key_exists('HomeExtraPointRushingAttempts', $data) && $data['HomeExtraPointRushingAttempts'] === null) {
            $object->setHomeExtraPointRushingAttempts(null);
        }
        if (\array_key_exists('AwayExtraPointRushingConversions', $data) && $data['AwayExtraPointRushingConversions'] !== null) {
            $object->setAwayExtraPointRushingConversions($data['AwayExtraPointRushingConversions']);
        }
        elseif (\array_key_exists('AwayExtraPointRushingConversions', $data) && $data['AwayExtraPointRushingConversions'] === null) {
            $object->setAwayExtraPointRushingConversions(null);
        }
        if (\array_key_exists('HomeExtraPointRushingConversions', $data) && $data['HomeExtraPointRushingConversions'] !== null) {
            $object->setHomeExtraPointRushingConversions($data['HomeExtraPointRushingConversions']);
        }
        elseif (\array_key_exists('HomeExtraPointRushingConversions', $data) && $data['HomeExtraPointRushingConversions'] === null) {
            $object->setHomeExtraPointRushingConversions(null);
        }
        if (\array_key_exists('AwayFieldGoalAttempts', $data) && $data['AwayFieldGoalAttempts'] !== null) {
            $object->setAwayFieldGoalAttempts($data['AwayFieldGoalAttempts']);
        }
        elseif (\array_key_exists('AwayFieldGoalAttempts', $data) && $data['AwayFieldGoalAttempts'] === null) {
            $object->setAwayFieldGoalAttempts(null);
        }
        if (\array_key_exists('HomeFieldGoalAttempts', $data) && $data['HomeFieldGoalAttempts'] !== null) {
            $object->setHomeFieldGoalAttempts($data['HomeFieldGoalAttempts']);
        }
        elseif (\array_key_exists('HomeFieldGoalAttempts', $data) && $data['HomeFieldGoalAttempts'] === null) {
            $object->setHomeFieldGoalAttempts(null);
        }
        if (\array_key_exists('AwayFieldGoalsMade', $data) && $data['AwayFieldGoalsMade'] !== null) {
            $object->setAwayFieldGoalsMade($data['AwayFieldGoalsMade']);
        }
        elseif (\array_key_exists('AwayFieldGoalsMade', $data) && $data['AwayFieldGoalsMade'] === null) {
            $object->setAwayFieldGoalsMade(null);
        }
        if (\array_key_exists('HomeFieldGoalsMade', $data) && $data['HomeFieldGoalsMade'] !== null) {
            $object->setHomeFieldGoalsMade($data['HomeFieldGoalsMade']);
        }
        elseif (\array_key_exists('HomeFieldGoalsMade', $data) && $data['HomeFieldGoalsMade'] === null) {
            $object->setHomeFieldGoalsMade(null);
        }
        if (\array_key_exists('AwayFieldGoalsHadBlocked', $data) && $data['AwayFieldGoalsHadBlocked'] !== null) {
            $object->setAwayFieldGoalsHadBlocked($data['AwayFieldGoalsHadBlocked']);
        }
        elseif (\array_key_exists('AwayFieldGoalsHadBlocked', $data) && $data['AwayFieldGoalsHadBlocked'] === null) {
            $object->setAwayFieldGoalsHadBlocked(null);
        }
        if (\array_key_exists('HomeFieldGoalsHadBlocked', $data) && $data['HomeFieldGoalsHadBlocked'] !== null) {
            $object->setHomeFieldGoalsHadBlocked($data['HomeFieldGoalsHadBlocked']);
        }
        elseif (\array_key_exists('HomeFieldGoalsHadBlocked', $data) && $data['HomeFieldGoalsHadBlocked'] === null) {
            $object->setHomeFieldGoalsHadBlocked(null);
        }
        if (\array_key_exists('AwayPuntReturns', $data) && $data['AwayPuntReturns'] !== null) {
            $object->setAwayPuntReturns($data['AwayPuntReturns']);
        }
        elseif (\array_key_exists('AwayPuntReturns', $data) && $data['AwayPuntReturns'] === null) {
            $object->setAwayPuntReturns(null);
        }
        if (\array_key_exists('HomePuntReturns', $data) && $data['HomePuntReturns'] !== null) {
            $object->setHomePuntReturns($data['HomePuntReturns']);
        }
        elseif (\array_key_exists('HomePuntReturns', $data) && $data['HomePuntReturns'] === null) {
            $object->setHomePuntReturns(null);
        }
        if (\array_key_exists('AwayPuntReturnYards', $data) && $data['AwayPuntReturnYards'] !== null) {
            $object->setAwayPuntReturnYards($data['AwayPuntReturnYards']);
        }
        elseif (\array_key_exists('AwayPuntReturnYards', $data) && $data['AwayPuntReturnYards'] === null) {
            $object->setAwayPuntReturnYards(null);
        }
        if (\array_key_exists('HomePuntReturnYards', $data) && $data['HomePuntReturnYards'] !== null) {
            $object->setHomePuntReturnYards($data['HomePuntReturnYards']);
        }
        elseif (\array_key_exists('HomePuntReturnYards', $data) && $data['HomePuntReturnYards'] === null) {
            $object->setHomePuntReturnYards(null);
        }
        if (\array_key_exists('AwayKickReturns', $data) && $data['AwayKickReturns'] !== null) {
            $object->setAwayKickReturns($data['AwayKickReturns']);
        }
        elseif (\array_key_exists('AwayKickReturns', $data) && $data['AwayKickReturns'] === null) {
            $object->setAwayKickReturns(null);
        }
        if (\array_key_exists('HomeKickReturns', $data) && $data['HomeKickReturns'] !== null) {
            $object->setHomeKickReturns($data['HomeKickReturns']);
        }
        elseif (\array_key_exists('HomeKickReturns', $data) && $data['HomeKickReturns'] === null) {
            $object->setHomeKickReturns(null);
        }
        if (\array_key_exists('AwayKickReturnYards', $data) && $data['AwayKickReturnYards'] !== null) {
            $object->setAwayKickReturnYards($data['AwayKickReturnYards']);
        }
        elseif (\array_key_exists('AwayKickReturnYards', $data) && $data['AwayKickReturnYards'] === null) {
            $object->setAwayKickReturnYards(null);
        }
        if (\array_key_exists('HomeKickReturnYards', $data) && $data['HomeKickReturnYards'] !== null) {
            $object->setHomeKickReturnYards($data['HomeKickReturnYards']);
        }
        elseif (\array_key_exists('HomeKickReturnYards', $data) && $data['HomeKickReturnYards'] === null) {
            $object->setHomeKickReturnYards(null);
        }
        if (\array_key_exists('AwayInterceptionReturns', $data) && $data['AwayInterceptionReturns'] !== null) {
            $object->setAwayInterceptionReturns($data['AwayInterceptionReturns']);
        }
        elseif (\array_key_exists('AwayInterceptionReturns', $data) && $data['AwayInterceptionReturns'] === null) {
            $object->setAwayInterceptionReturns(null);
        }
        if (\array_key_exists('HomeInterceptionReturns', $data) && $data['HomeInterceptionReturns'] !== null) {
            $object->setHomeInterceptionReturns($data['HomeInterceptionReturns']);
        }
        elseif (\array_key_exists('HomeInterceptionReturns', $data) && $data['HomeInterceptionReturns'] === null) {
            $object->setHomeInterceptionReturns(null);
        }
        if (\array_key_exists('AwayInterceptionReturnYards', $data) && $data['AwayInterceptionReturnYards'] !== null) {
            $object->setAwayInterceptionReturnYards($data['AwayInterceptionReturnYards']);
        }
        elseif (\array_key_exists('AwayInterceptionReturnYards', $data) && $data['AwayInterceptionReturnYards'] === null) {
            $object->setAwayInterceptionReturnYards(null);
        }
        if (\array_key_exists('HomeInterceptionReturnYards', $data) && $data['HomeInterceptionReturnYards'] !== null) {
            $object->setHomeInterceptionReturnYards($data['HomeInterceptionReturnYards']);
        }
        elseif (\array_key_exists('HomeInterceptionReturnYards', $data) && $data['HomeInterceptionReturnYards'] === null) {
            $object->setHomeInterceptionReturnYards(null);
        }
        if (\array_key_exists('AwaySoloTackles', $data) && $data['AwaySoloTackles'] !== null) {
            $object->setAwaySoloTackles($data['AwaySoloTackles']);
        }
        elseif (\array_key_exists('AwaySoloTackles', $data) && $data['AwaySoloTackles'] === null) {
            $object->setAwaySoloTackles(null);
        }
        if (\array_key_exists('AwayAssistedTackles', $data) && $data['AwayAssistedTackles'] !== null) {
            $object->setAwayAssistedTackles($data['AwayAssistedTackles']);
        }
        elseif (\array_key_exists('AwayAssistedTackles', $data) && $data['AwayAssistedTackles'] === null) {
            $object->setAwayAssistedTackles(null);
        }
        if (\array_key_exists('AwayQuarterbackHits', $data) && $data['AwayQuarterbackHits'] !== null) {
            $object->setAwayQuarterbackHits($data['AwayQuarterbackHits']);
        }
        elseif (\array_key_exists('AwayQuarterbackHits', $data) && $data['AwayQuarterbackHits'] === null) {
            $object->setAwayQuarterbackHits(null);
        }
        if (\array_key_exists('AwayTacklesForLoss', $data) && $data['AwayTacklesForLoss'] !== null) {
            $object->setAwayTacklesForLoss($data['AwayTacklesForLoss']);
        }
        elseif (\array_key_exists('AwayTacklesForLoss', $data) && $data['AwayTacklesForLoss'] === null) {
            $object->setAwayTacklesForLoss(null);
        }
        if (\array_key_exists('AwaySacks', $data) && $data['AwaySacks'] !== null) {
            $object->setAwaySacks($data['AwaySacks']);
        }
        elseif (\array_key_exists('AwaySacks', $data) && $data['AwaySacks'] === null) {
            $object->setAwaySacks(null);
        }
        if (\array_key_exists('AwaySackYards', $data) && $data['AwaySackYards'] !== null) {
            $object->setAwaySackYards($data['AwaySackYards']);
        }
        elseif (\array_key_exists('AwaySackYards', $data) && $data['AwaySackYards'] === null) {
            $object->setAwaySackYards(null);
        }
        if (\array_key_exists('AwayPassesDefended', $data) && $data['AwayPassesDefended'] !== null) {
            $object->setAwayPassesDefended($data['AwayPassesDefended']);
        }
        elseif (\array_key_exists('AwayPassesDefended', $data) && $data['AwayPassesDefended'] === null) {
            $object->setAwayPassesDefended(null);
        }
        if (\array_key_exists('AwayFumblesForced', $data) && $data['AwayFumblesForced'] !== null) {
            $object->setAwayFumblesForced($data['AwayFumblesForced']);
        }
        elseif (\array_key_exists('AwayFumblesForced', $data) && $data['AwayFumblesForced'] === null) {
            $object->setAwayFumblesForced(null);
        }
        if (\array_key_exists('AwayFumblesRecovered', $data) && $data['AwayFumblesRecovered'] !== null) {
            $object->setAwayFumblesRecovered($data['AwayFumblesRecovered']);
        }
        elseif (\array_key_exists('AwayFumblesRecovered', $data) && $data['AwayFumblesRecovered'] === null) {
            $object->setAwayFumblesRecovered(null);
        }
        if (\array_key_exists('AwayFumbleReturnYards', $data) && $data['AwayFumbleReturnYards'] !== null) {
            $object->setAwayFumbleReturnYards($data['AwayFumbleReturnYards']);
        }
        elseif (\array_key_exists('AwayFumbleReturnYards', $data) && $data['AwayFumbleReturnYards'] === null) {
            $object->setAwayFumbleReturnYards(null);
        }
        if (\array_key_exists('AwayFumbleReturnTouchdowns', $data) && $data['AwayFumbleReturnTouchdowns'] !== null) {
            $object->setAwayFumbleReturnTouchdowns($data['AwayFumbleReturnTouchdowns']);
        }
        elseif (\array_key_exists('AwayFumbleReturnTouchdowns', $data) && $data['AwayFumbleReturnTouchdowns'] === null) {
            $object->setAwayFumbleReturnTouchdowns(null);
        }
        if (\array_key_exists('AwayInterceptionReturnTouchdowns', $data) && $data['AwayInterceptionReturnTouchdowns'] !== null) {
            $object->setAwayInterceptionReturnTouchdowns($data['AwayInterceptionReturnTouchdowns']);
        }
        elseif (\array_key_exists('AwayInterceptionReturnTouchdowns', $data) && $data['AwayInterceptionReturnTouchdowns'] === null) {
            $object->setAwayInterceptionReturnTouchdowns(null);
        }
        if (\array_key_exists('AwayBlockedKicks', $data) && $data['AwayBlockedKicks'] !== null) {
            $object->setAwayBlockedKicks($data['AwayBlockedKicks']);
        }
        elseif (\array_key_exists('AwayBlockedKicks', $data) && $data['AwayBlockedKicks'] === null) {
            $object->setAwayBlockedKicks(null);
        }
        if (\array_key_exists('AwayPuntReturnTouchdowns', $data) && $data['AwayPuntReturnTouchdowns'] !== null) {
            $object->setAwayPuntReturnTouchdowns($data['AwayPuntReturnTouchdowns']);
        }
        elseif (\array_key_exists('AwayPuntReturnTouchdowns', $data) && $data['AwayPuntReturnTouchdowns'] === null) {
            $object->setAwayPuntReturnTouchdowns(null);
        }
        if (\array_key_exists('AwayPuntReturnLong', $data) && $data['AwayPuntReturnLong'] !== null) {
            $object->setAwayPuntReturnLong($data['AwayPuntReturnLong']);
        }
        elseif (\array_key_exists('AwayPuntReturnLong', $data) && $data['AwayPuntReturnLong'] === null) {
            $object->setAwayPuntReturnLong(null);
        }
        if (\array_key_exists('AwayKickReturnTouchdowns', $data) && $data['AwayKickReturnTouchdowns'] !== null) {
            $object->setAwayKickReturnTouchdowns($data['AwayKickReturnTouchdowns']);
        }
        elseif (\array_key_exists('AwayKickReturnTouchdowns', $data) && $data['AwayKickReturnTouchdowns'] === null) {
            $object->setAwayKickReturnTouchdowns(null);
        }
        if (\array_key_exists('AwayKickReturnLong', $data) && $data['AwayKickReturnLong'] !== null) {
            $object->setAwayKickReturnLong($data['AwayKickReturnLong']);
        }
        elseif (\array_key_exists('AwayKickReturnLong', $data) && $data['AwayKickReturnLong'] === null) {
            $object->setAwayKickReturnLong(null);
        }
        if (\array_key_exists('AwayBlockedKickReturnYards', $data) && $data['AwayBlockedKickReturnYards'] !== null) {
            $object->setAwayBlockedKickReturnYards($data['AwayBlockedKickReturnYards']);
        }
        elseif (\array_key_exists('AwayBlockedKickReturnYards', $data) && $data['AwayBlockedKickReturnYards'] === null) {
            $object->setAwayBlockedKickReturnYards(null);
        }
        if (\array_key_exists('AwayBlockedKickReturnTouchdowns', $data) && $data['AwayBlockedKickReturnTouchdowns'] !== null) {
            $object->setAwayBlockedKickReturnTouchdowns($data['AwayBlockedKickReturnTouchdowns']);
        }
        elseif (\array_key_exists('AwayBlockedKickReturnTouchdowns', $data) && $data['AwayBlockedKickReturnTouchdowns'] === null) {
            $object->setAwayBlockedKickReturnTouchdowns(null);
        }
        if (\array_key_exists('AwayFieldGoalReturnYards', $data) && $data['AwayFieldGoalReturnYards'] !== null) {
            $object->setAwayFieldGoalReturnYards($data['AwayFieldGoalReturnYards']);
        }
        elseif (\array_key_exists('AwayFieldGoalReturnYards', $data) && $data['AwayFieldGoalReturnYards'] === null) {
            $object->setAwayFieldGoalReturnYards(null);
        }
        if (\array_key_exists('AwayFieldGoalReturnTouchdowns', $data) && $data['AwayFieldGoalReturnTouchdowns'] !== null) {
            $object->setAwayFieldGoalReturnTouchdowns($data['AwayFieldGoalReturnTouchdowns']);
        }
        elseif (\array_key_exists('AwayFieldGoalReturnTouchdowns', $data) && $data['AwayFieldGoalReturnTouchdowns'] === null) {
            $object->setAwayFieldGoalReturnTouchdowns(null);
        }
        if (\array_key_exists('AwayPuntNetYards', $data) && $data['AwayPuntNetYards'] !== null) {
            $object->setAwayPuntNetYards($data['AwayPuntNetYards']);
        }
        elseif (\array_key_exists('AwayPuntNetYards', $data) && $data['AwayPuntNetYards'] === null) {
            $object->setAwayPuntNetYards(null);
        }
        if (\array_key_exists('HomeSoloTackles', $data) && $data['HomeSoloTackles'] !== null) {
            $object->setHomeSoloTackles($data['HomeSoloTackles']);
        }
        elseif (\array_key_exists('HomeSoloTackles', $data) && $data['HomeSoloTackles'] === null) {
            $object->setHomeSoloTackles(null);
        }
        if (\array_key_exists('HomeAssistedTackles', $data) && $data['HomeAssistedTackles'] !== null) {
            $object->setHomeAssistedTackles($data['HomeAssistedTackles']);
        }
        elseif (\array_key_exists('HomeAssistedTackles', $data) && $data['HomeAssistedTackles'] === null) {
            $object->setHomeAssistedTackles(null);
        }
        if (\array_key_exists('HomeQuarterbackHits', $data) && $data['HomeQuarterbackHits'] !== null) {
            $object->setHomeQuarterbackHits($data['HomeQuarterbackHits']);
        }
        elseif (\array_key_exists('HomeQuarterbackHits', $data) && $data['HomeQuarterbackHits'] === null) {
            $object->setHomeQuarterbackHits(null);
        }
        if (\array_key_exists('HomeTacklesForLoss', $data) && $data['HomeTacklesForLoss'] !== null) {
            $object->setHomeTacklesForLoss($data['HomeTacklesForLoss']);
        }
        elseif (\array_key_exists('HomeTacklesForLoss', $data) && $data['HomeTacklesForLoss'] === null) {
            $object->setHomeTacklesForLoss(null);
        }
        if (\array_key_exists('HomeSacks', $data) && $data['HomeSacks'] !== null) {
            $object->setHomeSacks($data['HomeSacks']);
        }
        elseif (\array_key_exists('HomeSacks', $data) && $data['HomeSacks'] === null) {
            $object->setHomeSacks(null);
        }
        if (\array_key_exists('HomeSackYards', $data) && $data['HomeSackYards'] !== null) {
            $object->setHomeSackYards($data['HomeSackYards']);
        }
        elseif (\array_key_exists('HomeSackYards', $data) && $data['HomeSackYards'] === null) {
            $object->setHomeSackYards(null);
        }
        if (\array_key_exists('HomePassesDefended', $data) && $data['HomePassesDefended'] !== null) {
            $object->setHomePassesDefended($data['HomePassesDefended']);
        }
        elseif (\array_key_exists('HomePassesDefended', $data) && $data['HomePassesDefended'] === null) {
            $object->setHomePassesDefended(null);
        }
        if (\array_key_exists('HomeFumblesForced', $data) && $data['HomeFumblesForced'] !== null) {
            $object->setHomeFumblesForced($data['HomeFumblesForced']);
        }
        elseif (\array_key_exists('HomeFumblesForced', $data) && $data['HomeFumblesForced'] === null) {
            $object->setHomeFumblesForced(null);
        }
        if (\array_key_exists('HomeFumblesRecovered', $data) && $data['HomeFumblesRecovered'] !== null) {
            $object->setHomeFumblesRecovered($data['HomeFumblesRecovered']);
        }
        elseif (\array_key_exists('HomeFumblesRecovered', $data) && $data['HomeFumblesRecovered'] === null) {
            $object->setHomeFumblesRecovered(null);
        }
        if (\array_key_exists('HomeFumbleReturnYards', $data) && $data['HomeFumbleReturnYards'] !== null) {
            $object->setHomeFumbleReturnYards($data['HomeFumbleReturnYards']);
        }
        elseif (\array_key_exists('HomeFumbleReturnYards', $data) && $data['HomeFumbleReturnYards'] === null) {
            $object->setHomeFumbleReturnYards(null);
        }
        if (\array_key_exists('HomeFumbleReturnTouchdowns', $data) && $data['HomeFumbleReturnTouchdowns'] !== null) {
            $object->setHomeFumbleReturnTouchdowns($data['HomeFumbleReturnTouchdowns']);
        }
        elseif (\array_key_exists('HomeFumbleReturnTouchdowns', $data) && $data['HomeFumbleReturnTouchdowns'] === null) {
            $object->setHomeFumbleReturnTouchdowns(null);
        }
        if (\array_key_exists('HomeInterceptionReturnTouchdowns', $data) && $data['HomeInterceptionReturnTouchdowns'] !== null) {
            $object->setHomeInterceptionReturnTouchdowns($data['HomeInterceptionReturnTouchdowns']);
        }
        elseif (\array_key_exists('HomeInterceptionReturnTouchdowns', $data) && $data['HomeInterceptionReturnTouchdowns'] === null) {
            $object->setHomeInterceptionReturnTouchdowns(null);
        }
        if (\array_key_exists('HomeBlockedKicks', $data) && $data['HomeBlockedKicks'] !== null) {
            $object->setHomeBlockedKicks($data['HomeBlockedKicks']);
        }
        elseif (\array_key_exists('HomeBlockedKicks', $data) && $data['HomeBlockedKicks'] === null) {
            $object->setHomeBlockedKicks(null);
        }
        if (\array_key_exists('HomePuntReturnTouchdowns', $data) && $data['HomePuntReturnTouchdowns'] !== null) {
            $object->setHomePuntReturnTouchdowns($data['HomePuntReturnTouchdowns']);
        }
        elseif (\array_key_exists('HomePuntReturnTouchdowns', $data) && $data['HomePuntReturnTouchdowns'] === null) {
            $object->setHomePuntReturnTouchdowns(null);
        }
        if (\array_key_exists('HomePuntReturnLong', $data) && $data['HomePuntReturnLong'] !== null) {
            $object->setHomePuntReturnLong($data['HomePuntReturnLong']);
        }
        elseif (\array_key_exists('HomePuntReturnLong', $data) && $data['HomePuntReturnLong'] === null) {
            $object->setHomePuntReturnLong(null);
        }
        if (\array_key_exists('HomeKickReturnTouchdowns', $data) && $data['HomeKickReturnTouchdowns'] !== null) {
            $object->setHomeKickReturnTouchdowns($data['HomeKickReturnTouchdowns']);
        }
        elseif (\array_key_exists('HomeKickReturnTouchdowns', $data) && $data['HomeKickReturnTouchdowns'] === null) {
            $object->setHomeKickReturnTouchdowns(null);
        }
        if (\array_key_exists('HomeKickReturnLong', $data) && $data['HomeKickReturnLong'] !== null) {
            $object->setHomeKickReturnLong($data['HomeKickReturnLong']);
        }
        elseif (\array_key_exists('HomeKickReturnLong', $data) && $data['HomeKickReturnLong'] === null) {
            $object->setHomeKickReturnLong(null);
        }
        if (\array_key_exists('HomeBlockedKickReturnYards', $data) && $data['HomeBlockedKickReturnYards'] !== null) {
            $object->setHomeBlockedKickReturnYards($data['HomeBlockedKickReturnYards']);
        }
        elseif (\array_key_exists('HomeBlockedKickReturnYards', $data) && $data['HomeBlockedKickReturnYards'] === null) {
            $object->setHomeBlockedKickReturnYards(null);
        }
        if (\array_key_exists('HomeBlockedKickReturnTouchdowns', $data) && $data['HomeBlockedKickReturnTouchdowns'] !== null) {
            $object->setHomeBlockedKickReturnTouchdowns($data['HomeBlockedKickReturnTouchdowns']);
        }
        elseif (\array_key_exists('HomeBlockedKickReturnTouchdowns', $data) && $data['HomeBlockedKickReturnTouchdowns'] === null) {
            $object->setHomeBlockedKickReturnTouchdowns(null);
        }
        if (\array_key_exists('HomeFieldGoalReturnYards', $data) && $data['HomeFieldGoalReturnYards'] !== null) {
            $object->setHomeFieldGoalReturnYards($data['HomeFieldGoalReturnYards']);
        }
        elseif (\array_key_exists('HomeFieldGoalReturnYards', $data) && $data['HomeFieldGoalReturnYards'] === null) {
            $object->setHomeFieldGoalReturnYards(null);
        }
        if (\array_key_exists('HomeFieldGoalReturnTouchdowns', $data) && $data['HomeFieldGoalReturnTouchdowns'] !== null) {
            $object->setHomeFieldGoalReturnTouchdowns($data['HomeFieldGoalReturnTouchdowns']);
        }
        elseif (\array_key_exists('HomeFieldGoalReturnTouchdowns', $data) && $data['HomeFieldGoalReturnTouchdowns'] === null) {
            $object->setHomeFieldGoalReturnTouchdowns(null);
        }
        if (\array_key_exists('HomePuntNetYards', $data) && $data['HomePuntNetYards'] !== null) {
            $object->setHomePuntNetYards($data['HomePuntNetYards']);
        }
        elseif (\array_key_exists('HomePuntNetYards', $data) && $data['HomePuntNetYards'] === null) {
            $object->setHomePuntNetYards(null);
        }
        if (\array_key_exists('IsGameOver', $data) && $data['IsGameOver'] !== null) {
            $object->setIsGameOver($data['IsGameOver']);
        }
        elseif (\array_key_exists('IsGameOver', $data) && $data['IsGameOver'] === null) {
            $object->setIsGameOver(null);
        }
        if (\array_key_exists('GameID', $data)) {
            $object->setGameID($data['GameID']);
        }
        if (\array_key_exists('StadiumID', $data) && $data['StadiumID'] !== null) {
            $object->setStadiumID($data['StadiumID']);
        }
        elseif (\array_key_exists('StadiumID', $data) && $data['StadiumID'] === null) {
            $object->setStadiumID(null);
        }
        if (\array_key_exists('AwayTwoPointConversionReturns', $data) && $data['AwayTwoPointConversionReturns'] !== null) {
            $object->setAwayTwoPointConversionReturns($data['AwayTwoPointConversionReturns']);
        }
        elseif (\array_key_exists('AwayTwoPointConversionReturns', $data) && $data['AwayTwoPointConversionReturns'] === null) {
            $object->setAwayTwoPointConversionReturns(null);
        }
        if (\array_key_exists('HomeTwoPointConversionReturns', $data) && $data['HomeTwoPointConversionReturns'] !== null) {
            $object->setHomeTwoPointConversionReturns($data['HomeTwoPointConversionReturns']);
        }
        elseif (\array_key_exists('HomeTwoPointConversionReturns', $data) && $data['HomeTwoPointConversionReturns'] === null) {
            $object->setHomeTwoPointConversionReturns(null);
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