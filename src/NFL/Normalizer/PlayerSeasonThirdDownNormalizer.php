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
class PlayerSeasonThirdDownNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\PlayerSeasonThirdDown';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\PlayerSeasonThirdDown';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\PlayerSeasonThirdDown();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerID', $data) && $data['PlayerID'] !== null) {
            $object->setPlayerID($data['PlayerID']);
        }
        elseif (\array_key_exists('PlayerID', $data) && $data['PlayerID'] === null) {
            $object->setPlayerID(null);
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
        if (\array_key_exists('Number', $data)) {
            $object->setNumber($data['Number']);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Position', $data) && $data['Position'] !== null) {
            $object->setPosition($data['Position']);
        }
        elseif (\array_key_exists('Position', $data) && $data['Position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('PositionCategory', $data) && $data['PositionCategory'] !== null) {
            $object->setPositionCategory($data['PositionCategory']);
        }
        elseif (\array_key_exists('PositionCategory', $data) && $data['PositionCategory'] === null) {
            $object->setPositionCategory(null);
        }
        if (\array_key_exists('Activated', $data)) {
            $object->setActivated($data['Activated']);
        }
        if (\array_key_exists('Played', $data)) {
            $object->setPlayed($data['Played']);
        }
        if (\array_key_exists('Started', $data)) {
            $object->setStarted($data['Started']);
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
        if (\array_key_exists('PassingLong', $data)) {
            $object->setPassingLong($data['PassingLong']);
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
        if (\array_key_exists('RushingYardsPerAttempt', $data)) {
            $object->setRushingYardsPerAttempt($data['RushingYardsPerAttempt']);
        }
        if (\array_key_exists('RushingTouchdowns', $data)) {
            $object->setRushingTouchdowns($data['RushingTouchdowns']);
        }
        if (\array_key_exists('RushingLong', $data)) {
            $object->setRushingLong($data['RushingLong']);
        }
        if (\array_key_exists('ReceivingTargets', $data) && $data['ReceivingTargets'] !== null) {
            $object->setReceivingTargets($data['ReceivingTargets']);
        }
        elseif (\array_key_exists('ReceivingTargets', $data) && $data['ReceivingTargets'] === null) {
            $object->setReceivingTargets(null);
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
        if (\array_key_exists('Fumbles', $data)) {
            $object->setFumbles($data['Fumbles']);
        }
        if (\array_key_exists('FumblesLost', $data) && $data['FumblesLost'] !== null) {
            $object->setFumblesLost($data['FumblesLost']);
        }
        elseif (\array_key_exists('FumblesLost', $data) && $data['FumblesLost'] === null) {
            $object->setFumblesLost(null);
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
        if (\array_key_exists('SoloTackles', $data)) {
            $object->setSoloTackles($data['SoloTackles']);
        }
        if (\array_key_exists('AssistedTackles', $data)) {
            $object->setAssistedTackles($data['AssistedTackles']);
        }
        if (\array_key_exists('TacklesForLoss', $data) && $data['TacklesForLoss'] !== null) {
            $object->setTacklesForLoss($data['TacklesForLoss']);
        }
        elseif (\array_key_exists('TacklesForLoss', $data) && $data['TacklesForLoss'] === null) {
            $object->setTacklesForLoss(null);
        }
        if (\array_key_exists('Sacks', $data)) {
            $object->setSacks($data['Sacks']);
        }
        if (\array_key_exists('SackYards', $data)) {
            $object->setSackYards($data['SackYards']);
        }
        if (\array_key_exists('QuarterbackHits', $data) && $data['QuarterbackHits'] !== null) {
            $object->setQuarterbackHits($data['QuarterbackHits']);
        }
        elseif (\array_key_exists('QuarterbackHits', $data) && $data['QuarterbackHits'] === null) {
            $object->setQuarterbackHits(null);
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
        if (\array_key_exists('Interceptions', $data)) {
            $object->setInterceptions($data['Interceptions']);
        }
        if (\array_key_exists('InterceptionReturnYards', $data)) {
            $object->setInterceptionReturnYards($data['InterceptionReturnYards']);
        }
        if (\array_key_exists('InterceptionReturnTouchdowns', $data)) {
            $object->setInterceptionReturnTouchdowns($data['InterceptionReturnTouchdowns']);
        }
        if (\array_key_exists('BlockedKicks', $data)) {
            $object->setBlockedKicks($data['BlockedKicks']);
        }
        if (\array_key_exists('SpecialTeamsSoloTackles', $data)) {
            $object->setSpecialTeamsSoloTackles($data['SpecialTeamsSoloTackles']);
        }
        if (\array_key_exists('SpecialTeamsAssistedTackles', $data)) {
            $object->setSpecialTeamsAssistedTackles($data['SpecialTeamsAssistedTackles']);
        }
        if (\array_key_exists('MiscSoloTackles', $data)) {
            $object->setMiscSoloTackles($data['MiscSoloTackles']);
        }
        if (\array_key_exists('MiscAssistedTackles', $data)) {
            $object->setMiscAssistedTackles($data['MiscAssistedTackles']);
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
        if (\array_key_exists('FieldGoalsAttempted', $data)) {
            $object->setFieldGoalsAttempted($data['FieldGoalsAttempted']);
        }
        if (\array_key_exists('FieldGoalsMade', $data)) {
            $object->setFieldGoalsMade($data['FieldGoalsMade']);
        }
        if (\array_key_exists('FieldGoalsLongestMade', $data)) {
            $object->setFieldGoalsLongestMade($data['FieldGoalsLongestMade']);
        }
        if (\array_key_exists('ExtraPointsMade', $data)) {
            $object->setExtraPointsMade($data['ExtraPointsMade']);
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
        if (\array_key_exists('FantasyPoints', $data)) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        if (\array_key_exists('FantasyPointsPPR', $data)) {
            $object->setFantasyPointsPPR($data['FantasyPointsPPR']);
        }
        if (\array_key_exists('ReceptionPercentage', $data)) {
            $object->setReceptionPercentage($data['ReceptionPercentage']);
        }
        if (\array_key_exists('ReceivingYardsPerTarget', $data)) {
            $object->setReceivingYardsPerTarget($data['ReceivingYardsPerTarget']);
        }
        if (\array_key_exists('Tackles', $data)) {
            $object->setTackles($data['Tackles']);
        }
        if (\array_key_exists('OffensiveTouchdowns', $data)) {
            $object->setOffensiveTouchdowns($data['OffensiveTouchdowns']);
        }
        if (\array_key_exists('DefensiveTouchdowns', $data)) {
            $object->setDefensiveTouchdowns($data['DefensiveTouchdowns']);
        }
        if (\array_key_exists('SpecialTeamsTouchdowns', $data)) {
            $object->setSpecialTeamsTouchdowns($data['SpecialTeamsTouchdowns']);
        }
        if (\array_key_exists('Touchdowns', $data)) {
            $object->setTouchdowns($data['Touchdowns']);
        }
        if (\array_key_exists('FantasyPosition', $data) && $data['FantasyPosition'] !== null) {
            $object->setFantasyPosition($data['FantasyPosition']);
        }
        elseif (\array_key_exists('FantasyPosition', $data) && $data['FantasyPosition'] === null) {
            $object->setFantasyPosition(null);
        }
        if (\array_key_exists('FieldGoalPercentage', $data)) {
            $object->setFieldGoalPercentage($data['FieldGoalPercentage']);
        }
        if (\array_key_exists('PlayerSeasonID', $data)) {
            $object->setPlayerSeasonID($data['PlayerSeasonID']);
        }
        if (\array_key_exists('FumblesOwnRecoveries', $data) && $data['FumblesOwnRecoveries'] !== null) {
            $object->setFumblesOwnRecoveries($data['FumblesOwnRecoveries']);
        }
        elseif (\array_key_exists('FumblesOwnRecoveries', $data) && $data['FumblesOwnRecoveries'] === null) {
            $object->setFumblesOwnRecoveries(null);
        }
        if (\array_key_exists('FumblesOutOfBounds', $data) && $data['FumblesOutOfBounds'] !== null) {
            $object->setFumblesOutOfBounds($data['FumblesOutOfBounds']);
        }
        elseif (\array_key_exists('FumblesOutOfBounds', $data) && $data['FumblesOutOfBounds'] === null) {
            $object->setFumblesOutOfBounds(null);
        }
        if (\array_key_exists('KickReturnFairCatches', $data) && $data['KickReturnFairCatches'] !== null) {
            $object->setKickReturnFairCatches($data['KickReturnFairCatches']);
        }
        elseif (\array_key_exists('KickReturnFairCatches', $data) && $data['KickReturnFairCatches'] === null) {
            $object->setKickReturnFairCatches(null);
        }
        if (\array_key_exists('PuntReturnFairCatches', $data) && $data['PuntReturnFairCatches'] !== null) {
            $object->setPuntReturnFairCatches($data['PuntReturnFairCatches']);
        }
        elseif (\array_key_exists('PuntReturnFairCatches', $data) && $data['PuntReturnFairCatches'] === null) {
            $object->setPuntReturnFairCatches(null);
        }
        if (\array_key_exists('PuntTouchbacks', $data) && $data['PuntTouchbacks'] !== null) {
            $object->setPuntTouchbacks($data['PuntTouchbacks']);
        }
        elseif (\array_key_exists('PuntTouchbacks', $data) && $data['PuntTouchbacks'] === null) {
            $object->setPuntTouchbacks(null);
        }
        if (\array_key_exists('PuntInside20', $data) && $data['PuntInside20'] !== null) {
            $object->setPuntInside20($data['PuntInside20']);
        }
        elseif (\array_key_exists('PuntInside20', $data) && $data['PuntInside20'] === null) {
            $object->setPuntInside20(null);
        }
        if (\array_key_exists('PuntNetAverage', $data) && $data['PuntNetAverage'] !== null) {
            $object->setPuntNetAverage($data['PuntNetAverage']);
        }
        elseif (\array_key_exists('PuntNetAverage', $data) && $data['PuntNetAverage'] === null) {
            $object->setPuntNetAverage(null);
        }
        if (\array_key_exists('ExtraPointsAttempted', $data) && $data['ExtraPointsAttempted'] !== null) {
            $object->setExtraPointsAttempted($data['ExtraPointsAttempted']);
        }
        elseif (\array_key_exists('ExtraPointsAttempted', $data) && $data['ExtraPointsAttempted'] === null) {
            $object->setExtraPointsAttempted(null);
        }
        if (\array_key_exists('BlockedKickReturnTouchdowns', $data) && $data['BlockedKickReturnTouchdowns'] !== null) {
            $object->setBlockedKickReturnTouchdowns($data['BlockedKickReturnTouchdowns']);
        }
        elseif (\array_key_exists('BlockedKickReturnTouchdowns', $data) && $data['BlockedKickReturnTouchdowns'] === null) {
            $object->setBlockedKickReturnTouchdowns(null);
        }
        if (\array_key_exists('FieldGoalReturnTouchdowns', $data) && $data['FieldGoalReturnTouchdowns'] !== null) {
            $object->setFieldGoalReturnTouchdowns($data['FieldGoalReturnTouchdowns']);
        }
        elseif (\array_key_exists('FieldGoalReturnTouchdowns', $data) && $data['FieldGoalReturnTouchdowns'] === null) {
            $object->setFieldGoalReturnTouchdowns(null);
        }
        if (\array_key_exists('Safeties', $data) && $data['Safeties'] !== null) {
            $object->setSafeties($data['Safeties']);
        }
        elseif (\array_key_exists('Safeties', $data) && $data['Safeties'] === null) {
            $object->setSafeties(null);
        }
        if (\array_key_exists('FieldGoalsHadBlocked', $data) && $data['FieldGoalsHadBlocked'] !== null) {
            $object->setFieldGoalsHadBlocked($data['FieldGoalsHadBlocked']);
        }
        elseif (\array_key_exists('FieldGoalsHadBlocked', $data) && $data['FieldGoalsHadBlocked'] === null) {
            $object->setFieldGoalsHadBlocked(null);
        }
        if (\array_key_exists('PuntsHadBlocked', $data) && $data['PuntsHadBlocked'] !== null) {
            $object->setPuntsHadBlocked($data['PuntsHadBlocked']);
        }
        elseif (\array_key_exists('PuntsHadBlocked', $data) && $data['PuntsHadBlocked'] === null) {
            $object->setPuntsHadBlocked(null);
        }
        if (\array_key_exists('ExtraPointsHadBlocked', $data) && $data['ExtraPointsHadBlocked'] !== null) {
            $object->setExtraPointsHadBlocked($data['ExtraPointsHadBlocked']);
        }
        elseif (\array_key_exists('ExtraPointsHadBlocked', $data) && $data['ExtraPointsHadBlocked'] === null) {
            $object->setExtraPointsHadBlocked(null);
        }
        if (\array_key_exists('PuntLong', $data) && $data['PuntLong'] !== null) {
            $object->setPuntLong($data['PuntLong']);
        }
        elseif (\array_key_exists('PuntLong', $data) && $data['PuntLong'] === null) {
            $object->setPuntLong(null);
        }
        if (\array_key_exists('BlockedKickReturnYards', $data) && $data['BlockedKickReturnYards'] !== null) {
            $object->setBlockedKickReturnYards($data['BlockedKickReturnYards']);
        }
        elseif (\array_key_exists('BlockedKickReturnYards', $data) && $data['BlockedKickReturnYards'] === null) {
            $object->setBlockedKickReturnYards(null);
        }
        if (\array_key_exists('FieldGoalReturnYards', $data) && $data['FieldGoalReturnYards'] !== null) {
            $object->setFieldGoalReturnYards($data['FieldGoalReturnYards']);
        }
        elseif (\array_key_exists('FieldGoalReturnYards', $data) && $data['FieldGoalReturnYards'] === null) {
            $object->setFieldGoalReturnYards(null);
        }
        if (\array_key_exists('PuntNetYards', $data) && $data['PuntNetYards'] !== null) {
            $object->setPuntNetYards($data['PuntNetYards']);
        }
        elseif (\array_key_exists('PuntNetYards', $data) && $data['PuntNetYards'] === null) {
            $object->setPuntNetYards(null);
        }
        if (\array_key_exists('SpecialTeamsFumblesForced', $data) && $data['SpecialTeamsFumblesForced'] !== null) {
            $object->setSpecialTeamsFumblesForced($data['SpecialTeamsFumblesForced']);
        }
        elseif (\array_key_exists('SpecialTeamsFumblesForced', $data) && $data['SpecialTeamsFumblesForced'] === null) {
            $object->setSpecialTeamsFumblesForced(null);
        }
        if (\array_key_exists('SpecialTeamsFumblesRecovered', $data) && $data['SpecialTeamsFumblesRecovered'] !== null) {
            $object->setSpecialTeamsFumblesRecovered($data['SpecialTeamsFumblesRecovered']);
        }
        elseif (\array_key_exists('SpecialTeamsFumblesRecovered', $data) && $data['SpecialTeamsFumblesRecovered'] === null) {
            $object->setSpecialTeamsFumblesRecovered(null);
        }
        if (\array_key_exists('MiscFumblesForced', $data) && $data['MiscFumblesForced'] !== null) {
            $object->setMiscFumblesForced($data['MiscFumblesForced']);
        }
        elseif (\array_key_exists('MiscFumblesForced', $data) && $data['MiscFumblesForced'] === null) {
            $object->setMiscFumblesForced(null);
        }
        if (\array_key_exists('MiscFumblesRecovered', $data) && $data['MiscFumblesRecovered'] !== null) {
            $object->setMiscFumblesRecovered($data['MiscFumblesRecovered']);
        }
        elseif (\array_key_exists('MiscFumblesRecovered', $data) && $data['MiscFumblesRecovered'] === null) {
            $object->setMiscFumblesRecovered(null);
        }
        if (\array_key_exists('ShortName', $data) && $data['ShortName'] !== null) {
            $object->setShortName($data['ShortName']);
        }
        elseif (\array_key_exists('ShortName', $data) && $data['ShortName'] === null) {
            $object->setShortName(null);
        }
        if (\array_key_exists('SafetiesAllowed', $data) && $data['SafetiesAllowed'] !== null) {
            $object->setSafetiesAllowed($data['SafetiesAllowed']);
        }
        elseif (\array_key_exists('SafetiesAllowed', $data) && $data['SafetiesAllowed'] === null) {
            $object->setSafetiesAllowed(null);
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
        if (\array_key_exists('OffensiveSnapsPlayed', $data) && $data['OffensiveSnapsPlayed'] !== null) {
            $object->setOffensiveSnapsPlayed($data['OffensiveSnapsPlayed']);
        }
        elseif (\array_key_exists('OffensiveSnapsPlayed', $data) && $data['OffensiveSnapsPlayed'] === null) {
            $object->setOffensiveSnapsPlayed(null);
        }
        if (\array_key_exists('DefensiveSnapsPlayed', $data) && $data['DefensiveSnapsPlayed'] !== null) {
            $object->setDefensiveSnapsPlayed($data['DefensiveSnapsPlayed']);
        }
        elseif (\array_key_exists('DefensiveSnapsPlayed', $data) && $data['DefensiveSnapsPlayed'] === null) {
            $object->setDefensiveSnapsPlayed(null);
        }
        if (\array_key_exists('SpecialTeamsSnapsPlayed', $data) && $data['SpecialTeamsSnapsPlayed'] !== null) {
            $object->setSpecialTeamsSnapsPlayed($data['SpecialTeamsSnapsPlayed']);
        }
        elseif (\array_key_exists('SpecialTeamsSnapsPlayed', $data) && $data['SpecialTeamsSnapsPlayed'] === null) {
            $object->setSpecialTeamsSnapsPlayed(null);
        }
        if (\array_key_exists('OffensiveTeamSnaps', $data) && $data['OffensiveTeamSnaps'] !== null) {
            $object->setOffensiveTeamSnaps($data['OffensiveTeamSnaps']);
        }
        elseif (\array_key_exists('OffensiveTeamSnaps', $data) && $data['OffensiveTeamSnaps'] === null) {
            $object->setOffensiveTeamSnaps(null);
        }
        if (\array_key_exists('DefensiveTeamSnaps', $data) && $data['DefensiveTeamSnaps'] !== null) {
            $object->setDefensiveTeamSnaps($data['DefensiveTeamSnaps']);
        }
        elseif (\array_key_exists('DefensiveTeamSnaps', $data) && $data['DefensiveTeamSnaps'] === null) {
            $object->setDefensiveTeamSnaps(null);
        }
        if (\array_key_exists('SpecialTeamsTeamSnaps', $data) && $data['SpecialTeamsTeamSnaps'] !== null) {
            $object->setSpecialTeamsTeamSnaps($data['SpecialTeamsTeamSnaps']);
        }
        elseif (\array_key_exists('SpecialTeamsTeamSnaps', $data) && $data['SpecialTeamsTeamSnaps'] === null) {
            $object->setSpecialTeamsTeamSnaps(null);
        }
        if (\array_key_exists('AuctionValue', $data) && $data['AuctionValue'] !== null) {
            $object->setAuctionValue($data['AuctionValue']);
        }
        elseif (\array_key_exists('AuctionValue', $data) && $data['AuctionValue'] === null) {
            $object->setAuctionValue(null);
        }
        if (\array_key_exists('AuctionValuePPR', $data) && $data['AuctionValuePPR'] !== null) {
            $object->setAuctionValuePPR($data['AuctionValuePPR']);
        }
        elseif (\array_key_exists('AuctionValuePPR', $data) && $data['AuctionValuePPR'] === null) {
            $object->setAuctionValuePPR(null);
        }
        if (\array_key_exists('TwoPointConversionReturns', $data) && $data['TwoPointConversionReturns'] !== null) {
            $object->setTwoPointConversionReturns($data['TwoPointConversionReturns']);
        }
        elseif (\array_key_exists('TwoPointConversionReturns', $data) && $data['TwoPointConversionReturns'] === null) {
            $object->setTwoPointConversionReturns(null);
        }
        if (\array_key_exists('FantasyPointsFanDuel', $data) && $data['FantasyPointsFanDuel'] !== null) {
            $object->setFantasyPointsFanDuel($data['FantasyPointsFanDuel']);
        }
        elseif (\array_key_exists('FantasyPointsFanDuel', $data) && $data['FantasyPointsFanDuel'] === null) {
            $object->setFantasyPointsFanDuel(null);
        }
        if (\array_key_exists('FieldGoalsMade0to19', $data) && $data['FieldGoalsMade0to19'] !== null) {
            $object->setFieldGoalsMade0to19($data['FieldGoalsMade0to19']);
        }
        elseif (\array_key_exists('FieldGoalsMade0to19', $data) && $data['FieldGoalsMade0to19'] === null) {
            $object->setFieldGoalsMade0to19(null);
        }
        if (\array_key_exists('FieldGoalsMade20to29', $data) && $data['FieldGoalsMade20to29'] !== null) {
            $object->setFieldGoalsMade20to29($data['FieldGoalsMade20to29']);
        }
        elseif (\array_key_exists('FieldGoalsMade20to29', $data) && $data['FieldGoalsMade20to29'] === null) {
            $object->setFieldGoalsMade20to29(null);
        }
        if (\array_key_exists('FieldGoalsMade30to39', $data) && $data['FieldGoalsMade30to39'] !== null) {
            $object->setFieldGoalsMade30to39($data['FieldGoalsMade30to39']);
        }
        elseif (\array_key_exists('FieldGoalsMade30to39', $data) && $data['FieldGoalsMade30to39'] === null) {
            $object->setFieldGoalsMade30to39(null);
        }
        if (\array_key_exists('FieldGoalsMade40to49', $data) && $data['FieldGoalsMade40to49'] !== null) {
            $object->setFieldGoalsMade40to49($data['FieldGoalsMade40to49']);
        }
        elseif (\array_key_exists('FieldGoalsMade40to49', $data) && $data['FieldGoalsMade40to49'] === null) {
            $object->setFieldGoalsMade40to49(null);
        }
        if (\array_key_exists('FieldGoalsMade50Plus', $data) && $data['FieldGoalsMade50Plus'] !== null) {
            $object->setFieldGoalsMade50Plus($data['FieldGoalsMade50Plus']);
        }
        elseif (\array_key_exists('FieldGoalsMade50Plus', $data) && $data['FieldGoalsMade50Plus'] === null) {
            $object->setFieldGoalsMade50Plus(null);
        }
        if (\array_key_exists('FantasyPointsDraftKings', $data) && $data['FantasyPointsDraftKings'] !== null) {
            $object->setFantasyPointsDraftKings($data['FantasyPointsDraftKings']);
        }
        elseif (\array_key_exists('FantasyPointsDraftKings', $data) && $data['FantasyPointsDraftKings'] === null) {
            $object->setFantasyPointsDraftKings(null);
        }
        if (\array_key_exists('FantasyPointsYahoo', $data) && $data['FantasyPointsYahoo'] !== null) {
            $object->setFantasyPointsYahoo($data['FantasyPointsYahoo']);
        }
        elseif (\array_key_exists('FantasyPointsYahoo', $data) && $data['FantasyPointsYahoo'] === null) {
            $object->setFantasyPointsYahoo(null);
        }
        if (\array_key_exists('AverageDraftPosition', $data) && $data['AverageDraftPosition'] !== null) {
            $object->setAverageDraftPosition($data['AverageDraftPosition']);
        }
        elseif (\array_key_exists('AverageDraftPosition', $data) && $data['AverageDraftPosition'] === null) {
            $object->setAverageDraftPosition(null);
        }
        if (\array_key_exists('AverageDraftPositionPPR', $data) && $data['AverageDraftPositionPPR'] !== null) {
            $object->setAverageDraftPositionPPR($data['AverageDraftPositionPPR']);
        }
        elseif (\array_key_exists('AverageDraftPositionPPR', $data) && $data['AverageDraftPositionPPR'] === null) {
            $object->setAverageDraftPositionPPR(null);
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
        if (\array_key_exists('FantasyPointsFantasyDraft', $data) && $data['FantasyPointsFantasyDraft'] !== null) {
            $object->setFantasyPointsFantasyDraft($data['FantasyPointsFantasyDraft']);
        }
        elseif (\array_key_exists('FantasyPointsFantasyDraft', $data) && $data['FantasyPointsFantasyDraft'] === null) {
            $object->setFantasyPointsFantasyDraft(null);
        }
        if (\array_key_exists('ScoringDetails', $data)) {
            $values = array();
            foreach ($data['ScoringDetails'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\NFL\\Model\\ScoringDetail', 'json', $context);
            }
            $object->setScoringDetails($values);
        }
        if (\array_key_exists('AverageDraftPositionRookie', $data) && $data['AverageDraftPositionRookie'] !== null) {
            $object->setAverageDraftPositionRookie($data['AverageDraftPositionRookie']);
        }
        elseif (\array_key_exists('AverageDraftPositionRookie', $data) && $data['AverageDraftPositionRookie'] === null) {
            $object->setAverageDraftPositionRookie(null);
        }
        if (\array_key_exists('AverageDraftPositionDynasty', $data) && $data['AverageDraftPositionDynasty'] !== null) {
            $object->setAverageDraftPositionDynasty($data['AverageDraftPositionDynasty']);
        }
        elseif (\array_key_exists('AverageDraftPositionDynasty', $data) && $data['AverageDraftPositionDynasty'] === null) {
            $object->setAverageDraftPositionDynasty(null);
        }
        if (\array_key_exists('AverageDraftPosition2QB', $data) && $data['AverageDraftPosition2QB'] !== null) {
            $object->setAverageDraftPosition2QB($data['AverageDraftPosition2QB']);
        }
        elseif (\array_key_exists('AverageDraftPosition2QB', $data) && $data['AverageDraftPosition2QB'] === null) {
            $object->setAverageDraftPosition2QB(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getNumber()) {
            $data['Number'] = $object->getNumber();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getPosition()) {
            $data['Position'] = $object->getPosition();
        }
        if (null !== $object->getPositionCategory()) {
            $data['PositionCategory'] = $object->getPositionCategory();
        }
        if (null !== $object->getActivated()) {
            $data['Activated'] = $object->getActivated();
        }
        if (null !== $object->getPlayed()) {
            $data['Played'] = $object->getPlayed();
        }
        if (null !== $object->getStarted()) {
            $data['Started'] = $object->getStarted();
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
        if (null !== $object->getPassingLong()) {
            $data['PassingLong'] = $object->getPassingLong();
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
        if (null !== $object->getRushingYardsPerAttempt()) {
            $data['RushingYardsPerAttempt'] = $object->getRushingYardsPerAttempt();
        }
        if (null !== $object->getRushingTouchdowns()) {
            $data['RushingTouchdowns'] = $object->getRushingTouchdowns();
        }
        if (null !== $object->getRushingLong()) {
            $data['RushingLong'] = $object->getRushingLong();
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
        if (null !== $object->getReceivingYardsPerReception()) {
            $data['ReceivingYardsPerReception'] = $object->getReceivingYardsPerReception();
        }
        if (null !== $object->getReceivingTouchdowns()) {
            $data['ReceivingTouchdowns'] = $object->getReceivingTouchdowns();
        }
        if (null !== $object->getReceivingLong()) {
            $data['ReceivingLong'] = $object->getReceivingLong();
        }
        if (null !== $object->getFumbles()) {
            $data['Fumbles'] = $object->getFumbles();
        }
        if (null !== $object->getFumblesLost()) {
            $data['FumblesLost'] = $object->getFumblesLost();
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
        if (null !== $object->getQuarterbackHits()) {
            $data['QuarterbackHits'] = $object->getQuarterbackHits();
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
        if (null !== $object->getInterceptions()) {
            $data['Interceptions'] = $object->getInterceptions();
        }
        if (null !== $object->getInterceptionReturnYards()) {
            $data['InterceptionReturnYards'] = $object->getInterceptionReturnYards();
        }
        if (null !== $object->getInterceptionReturnTouchdowns()) {
            $data['InterceptionReturnTouchdowns'] = $object->getInterceptionReturnTouchdowns();
        }
        if (null !== $object->getBlockedKicks()) {
            $data['BlockedKicks'] = $object->getBlockedKicks();
        }
        if (null !== $object->getSpecialTeamsSoloTackles()) {
            $data['SpecialTeamsSoloTackles'] = $object->getSpecialTeamsSoloTackles();
        }
        if (null !== $object->getSpecialTeamsAssistedTackles()) {
            $data['SpecialTeamsAssistedTackles'] = $object->getSpecialTeamsAssistedTackles();
        }
        if (null !== $object->getMiscSoloTackles()) {
            $data['MiscSoloTackles'] = $object->getMiscSoloTackles();
        }
        if (null !== $object->getMiscAssistedTackles()) {
            $data['MiscAssistedTackles'] = $object->getMiscAssistedTackles();
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
        if (null !== $object->getFieldGoalsAttempted()) {
            $data['FieldGoalsAttempted'] = $object->getFieldGoalsAttempted();
        }
        if (null !== $object->getFieldGoalsMade()) {
            $data['FieldGoalsMade'] = $object->getFieldGoalsMade();
        }
        if (null !== $object->getFieldGoalsLongestMade()) {
            $data['FieldGoalsLongestMade'] = $object->getFieldGoalsLongestMade();
        }
        if (null !== $object->getExtraPointsMade()) {
            $data['ExtraPointsMade'] = $object->getExtraPointsMade();
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
        if (null !== $object->getFantasyPoints()) {
            $data['FantasyPoints'] = $object->getFantasyPoints();
        }
        if (null !== $object->getFantasyPointsPPR()) {
            $data['FantasyPointsPPR'] = $object->getFantasyPointsPPR();
        }
        if (null !== $object->getReceptionPercentage()) {
            $data['ReceptionPercentage'] = $object->getReceptionPercentage();
        }
        if (null !== $object->getReceivingYardsPerTarget()) {
            $data['ReceivingYardsPerTarget'] = $object->getReceivingYardsPerTarget();
        }
        if (null !== $object->getTackles()) {
            $data['Tackles'] = $object->getTackles();
        }
        if (null !== $object->getOffensiveTouchdowns()) {
            $data['OffensiveTouchdowns'] = $object->getOffensiveTouchdowns();
        }
        if (null !== $object->getDefensiveTouchdowns()) {
            $data['DefensiveTouchdowns'] = $object->getDefensiveTouchdowns();
        }
        if (null !== $object->getSpecialTeamsTouchdowns()) {
            $data['SpecialTeamsTouchdowns'] = $object->getSpecialTeamsTouchdowns();
        }
        if (null !== $object->getTouchdowns()) {
            $data['Touchdowns'] = $object->getTouchdowns();
        }
        if (null !== $object->getFantasyPosition()) {
            $data['FantasyPosition'] = $object->getFantasyPosition();
        }
        if (null !== $object->getFieldGoalPercentage()) {
            $data['FieldGoalPercentage'] = $object->getFieldGoalPercentage();
        }
        if (null !== $object->getPlayerSeasonID()) {
            $data['PlayerSeasonID'] = $object->getPlayerSeasonID();
        }
        if (null !== $object->getFumblesOwnRecoveries()) {
            $data['FumblesOwnRecoveries'] = $object->getFumblesOwnRecoveries();
        }
        if (null !== $object->getFumblesOutOfBounds()) {
            $data['FumblesOutOfBounds'] = $object->getFumblesOutOfBounds();
        }
        if (null !== $object->getKickReturnFairCatches()) {
            $data['KickReturnFairCatches'] = $object->getKickReturnFairCatches();
        }
        if (null !== $object->getPuntReturnFairCatches()) {
            $data['PuntReturnFairCatches'] = $object->getPuntReturnFairCatches();
        }
        if (null !== $object->getPuntTouchbacks()) {
            $data['PuntTouchbacks'] = $object->getPuntTouchbacks();
        }
        if (null !== $object->getPuntInside20()) {
            $data['PuntInside20'] = $object->getPuntInside20();
        }
        if (null !== $object->getPuntNetAverage()) {
            $data['PuntNetAverage'] = $object->getPuntNetAverage();
        }
        if (null !== $object->getExtraPointsAttempted()) {
            $data['ExtraPointsAttempted'] = $object->getExtraPointsAttempted();
        }
        if (null !== $object->getBlockedKickReturnTouchdowns()) {
            $data['BlockedKickReturnTouchdowns'] = $object->getBlockedKickReturnTouchdowns();
        }
        if (null !== $object->getFieldGoalReturnTouchdowns()) {
            $data['FieldGoalReturnTouchdowns'] = $object->getFieldGoalReturnTouchdowns();
        }
        if (null !== $object->getSafeties()) {
            $data['Safeties'] = $object->getSafeties();
        }
        if (null !== $object->getFieldGoalsHadBlocked()) {
            $data['FieldGoalsHadBlocked'] = $object->getFieldGoalsHadBlocked();
        }
        if (null !== $object->getPuntsHadBlocked()) {
            $data['PuntsHadBlocked'] = $object->getPuntsHadBlocked();
        }
        if (null !== $object->getExtraPointsHadBlocked()) {
            $data['ExtraPointsHadBlocked'] = $object->getExtraPointsHadBlocked();
        }
        if (null !== $object->getPuntLong()) {
            $data['PuntLong'] = $object->getPuntLong();
        }
        if (null !== $object->getBlockedKickReturnYards()) {
            $data['BlockedKickReturnYards'] = $object->getBlockedKickReturnYards();
        }
        if (null !== $object->getFieldGoalReturnYards()) {
            $data['FieldGoalReturnYards'] = $object->getFieldGoalReturnYards();
        }
        if (null !== $object->getPuntNetYards()) {
            $data['PuntNetYards'] = $object->getPuntNetYards();
        }
        if (null !== $object->getSpecialTeamsFumblesForced()) {
            $data['SpecialTeamsFumblesForced'] = $object->getSpecialTeamsFumblesForced();
        }
        if (null !== $object->getSpecialTeamsFumblesRecovered()) {
            $data['SpecialTeamsFumblesRecovered'] = $object->getSpecialTeamsFumblesRecovered();
        }
        if (null !== $object->getMiscFumblesForced()) {
            $data['MiscFumblesForced'] = $object->getMiscFumblesForced();
        }
        if (null !== $object->getMiscFumblesRecovered()) {
            $data['MiscFumblesRecovered'] = $object->getMiscFumblesRecovered();
        }
        if (null !== $object->getShortName()) {
            $data['ShortName'] = $object->getShortName();
        }
        if (null !== $object->getSafetiesAllowed()) {
            $data['SafetiesAllowed'] = $object->getSafetiesAllowed();
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
        if (null !== $object->getOffensiveSnapsPlayed()) {
            $data['OffensiveSnapsPlayed'] = $object->getOffensiveSnapsPlayed();
        }
        if (null !== $object->getDefensiveSnapsPlayed()) {
            $data['DefensiveSnapsPlayed'] = $object->getDefensiveSnapsPlayed();
        }
        if (null !== $object->getSpecialTeamsSnapsPlayed()) {
            $data['SpecialTeamsSnapsPlayed'] = $object->getSpecialTeamsSnapsPlayed();
        }
        if (null !== $object->getOffensiveTeamSnaps()) {
            $data['OffensiveTeamSnaps'] = $object->getOffensiveTeamSnaps();
        }
        if (null !== $object->getDefensiveTeamSnaps()) {
            $data['DefensiveTeamSnaps'] = $object->getDefensiveTeamSnaps();
        }
        if (null !== $object->getSpecialTeamsTeamSnaps()) {
            $data['SpecialTeamsTeamSnaps'] = $object->getSpecialTeamsTeamSnaps();
        }
        if (null !== $object->getAuctionValue()) {
            $data['AuctionValue'] = $object->getAuctionValue();
        }
        if (null !== $object->getAuctionValuePPR()) {
            $data['AuctionValuePPR'] = $object->getAuctionValuePPR();
        }
        if (null !== $object->getTwoPointConversionReturns()) {
            $data['TwoPointConversionReturns'] = $object->getTwoPointConversionReturns();
        }
        if (null !== $object->getFantasyPointsFanDuel()) {
            $data['FantasyPointsFanDuel'] = $object->getFantasyPointsFanDuel();
        }
        if (null !== $object->getFieldGoalsMade0to19()) {
            $data['FieldGoalsMade0to19'] = $object->getFieldGoalsMade0to19();
        }
        if (null !== $object->getFieldGoalsMade20to29()) {
            $data['FieldGoalsMade20to29'] = $object->getFieldGoalsMade20to29();
        }
        if (null !== $object->getFieldGoalsMade30to39()) {
            $data['FieldGoalsMade30to39'] = $object->getFieldGoalsMade30to39();
        }
        if (null !== $object->getFieldGoalsMade40to49()) {
            $data['FieldGoalsMade40to49'] = $object->getFieldGoalsMade40to49();
        }
        if (null !== $object->getFieldGoalsMade50Plus()) {
            $data['FieldGoalsMade50Plus'] = $object->getFieldGoalsMade50Plus();
        }
        if (null !== $object->getFantasyPointsDraftKings()) {
            $data['FantasyPointsDraftKings'] = $object->getFantasyPointsDraftKings();
        }
        if (null !== $object->getFantasyPointsYahoo()) {
            $data['FantasyPointsYahoo'] = $object->getFantasyPointsYahoo();
        }
        if (null !== $object->getAverageDraftPosition()) {
            $data['AverageDraftPosition'] = $object->getAverageDraftPosition();
        }
        if (null !== $object->getAverageDraftPositionPPR()) {
            $data['AverageDraftPositionPPR'] = $object->getAverageDraftPositionPPR();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        if (null !== $object->getFantasyPointsFantasyDraft()) {
            $data['FantasyPointsFantasyDraft'] = $object->getFantasyPointsFantasyDraft();
        }
        if (null !== $object->getScoringDetails()) {
            $values = array();
            foreach ($object->getScoringDetails() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['ScoringDetails'] = $values;
        }
        if (null !== $object->getAverageDraftPositionRookie()) {
            $data['AverageDraftPositionRookie'] = $object->getAverageDraftPositionRookie();
        }
        if (null !== $object->getAverageDraftPositionDynasty()) {
            $data['AverageDraftPositionDynasty'] = $object->getAverageDraftPositionDynasty();
        }
        if (null !== $object->getAverageDraftPosition2QB()) {
            $data['AverageDraftPosition2QB'] = $object->getAverageDraftPosition2QB();
        }
        return $data;
    }
}