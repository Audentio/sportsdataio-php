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
class PlayerGameProjectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\PlayerGameProjection';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\PlayerGameProjection';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\PlayerGameProjection();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GameKey', $data)) {
            $object->setGameKey($data['GameKey']);
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('GameDate', $data)) {
            $object->setGameDate($data['GameDate']);
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
        if (\array_key_exists('Number', $data)) {
            $object->setNumber($data['Number']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Position', $data)) {
            $object->setPosition($data['Position']);
        }
        if (\array_key_exists('PositionCategory', $data)) {
            $object->setPositionCategory($data['PositionCategory']);
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
        if (\array_key_exists('ReceivingTargets', $data)) {
            $object->setReceivingTargets($data['ReceivingTargets']);
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
        if (\array_key_exists('FumblesLost', $data)) {
            $object->setFumblesLost($data['FumblesLost']);
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
        if (\array_key_exists('TacklesForLoss', $data)) {
            $object->setTacklesForLoss($data['TacklesForLoss']);
        }
        if (\array_key_exists('Sacks', $data)) {
            $object->setSacks($data['Sacks']);
        }
        if (\array_key_exists('SackYards', $data)) {
            $object->setSackYards($data['SackYards']);
        }
        if (\array_key_exists('QuarterbackHits', $data)) {
            $object->setQuarterbackHits($data['QuarterbackHits']);
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
        if (\array_key_exists('FantasyPosition', $data)) {
            $object->setFantasyPosition($data['FantasyPosition']);
        }
        if (\array_key_exists('FieldGoalPercentage', $data)) {
            $object->setFieldGoalPercentage($data['FieldGoalPercentage']);
        }
        if (\array_key_exists('PlayerGameID', $data)) {
            $object->setPlayerGameID($data['PlayerGameID']);
        }
        if (\array_key_exists('FumblesOwnRecoveries', $data)) {
            $object->setFumblesOwnRecoveries($data['FumblesOwnRecoveries']);
        }
        if (\array_key_exists('FumblesOutOfBounds', $data)) {
            $object->setFumblesOutOfBounds($data['FumblesOutOfBounds']);
        }
        if (\array_key_exists('KickReturnFairCatches', $data)) {
            $object->setKickReturnFairCatches($data['KickReturnFairCatches']);
        }
        if (\array_key_exists('PuntReturnFairCatches', $data)) {
            $object->setPuntReturnFairCatches($data['PuntReturnFairCatches']);
        }
        if (\array_key_exists('PuntTouchbacks', $data)) {
            $object->setPuntTouchbacks($data['PuntTouchbacks']);
        }
        if (\array_key_exists('PuntInside20', $data)) {
            $object->setPuntInside20($data['PuntInside20']);
        }
        if (\array_key_exists('PuntNetAverage', $data)) {
            $object->setPuntNetAverage($data['PuntNetAverage']);
        }
        if (\array_key_exists('ExtraPointsAttempted', $data)) {
            $object->setExtraPointsAttempted($data['ExtraPointsAttempted']);
        }
        if (\array_key_exists('BlockedKickReturnTouchdowns', $data)) {
            $object->setBlockedKickReturnTouchdowns($data['BlockedKickReturnTouchdowns']);
        }
        if (\array_key_exists('FieldGoalReturnTouchdowns', $data)) {
            $object->setFieldGoalReturnTouchdowns($data['FieldGoalReturnTouchdowns']);
        }
        if (\array_key_exists('Safeties', $data)) {
            $object->setSafeties($data['Safeties']);
        }
        if (\array_key_exists('FieldGoalsHadBlocked', $data)) {
            $object->setFieldGoalsHadBlocked($data['FieldGoalsHadBlocked']);
        }
        if (\array_key_exists('PuntsHadBlocked', $data)) {
            $object->setPuntsHadBlocked($data['PuntsHadBlocked']);
        }
        if (\array_key_exists('ExtraPointsHadBlocked', $data)) {
            $object->setExtraPointsHadBlocked($data['ExtraPointsHadBlocked']);
        }
        if (\array_key_exists('PuntLong', $data)) {
            $object->setPuntLong($data['PuntLong']);
        }
        if (\array_key_exists('BlockedKickReturnYards', $data)) {
            $object->setBlockedKickReturnYards($data['BlockedKickReturnYards']);
        }
        if (\array_key_exists('FieldGoalReturnYards', $data)) {
            $object->setFieldGoalReturnYards($data['FieldGoalReturnYards']);
        }
        if (\array_key_exists('PuntNetYards', $data)) {
            $object->setPuntNetYards($data['PuntNetYards']);
        }
        if (\array_key_exists('SpecialTeamsFumblesForced', $data)) {
            $object->setSpecialTeamsFumblesForced($data['SpecialTeamsFumblesForced']);
        }
        if (\array_key_exists('SpecialTeamsFumblesRecovered', $data)) {
            $object->setSpecialTeamsFumblesRecovered($data['SpecialTeamsFumblesRecovered']);
        }
        if (\array_key_exists('MiscFumblesForced', $data)) {
            $object->setMiscFumblesForced($data['MiscFumblesForced']);
        }
        if (\array_key_exists('MiscFumblesRecovered', $data)) {
            $object->setMiscFumblesRecovered($data['MiscFumblesRecovered']);
        }
        if (\array_key_exists('ShortName', $data)) {
            $object->setShortName($data['ShortName']);
        }
        if (\array_key_exists('PlayingSurface', $data)) {
            $object->setPlayingSurface($data['PlayingSurface']);
        }
        if (\array_key_exists('IsGameOver', $data)) {
            $object->setIsGameOver($data['IsGameOver']);
        }
        if (\array_key_exists('SafetiesAllowed', $data)) {
            $object->setSafetiesAllowed($data['SafetiesAllowed']);
        }
        if (\array_key_exists('Stadium', $data)) {
            $object->setStadium($data['Stadium']);
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
        if (\array_key_exists('FanDuelSalary', $data)) {
            $object->setFanDuelSalary($data['FanDuelSalary']);
        }
        if (\array_key_exists('DraftKingsSalary', $data)) {
            $object->setDraftKingsSalary($data['DraftKingsSalary']);
        }
        if (\array_key_exists('FantasyDataSalary', $data)) {
            $object->setFantasyDataSalary($data['FantasyDataSalary']);
        }
        if (\array_key_exists('OffensiveSnapsPlayed', $data)) {
            $object->setOffensiveSnapsPlayed($data['OffensiveSnapsPlayed']);
        }
        if (\array_key_exists('DefensiveSnapsPlayed', $data)) {
            $object->setDefensiveSnapsPlayed($data['DefensiveSnapsPlayed']);
        }
        if (\array_key_exists('SpecialTeamsSnapsPlayed', $data)) {
            $object->setSpecialTeamsSnapsPlayed($data['SpecialTeamsSnapsPlayed']);
        }
        if (\array_key_exists('OffensiveTeamSnaps', $data)) {
            $object->setOffensiveTeamSnaps($data['OffensiveTeamSnaps']);
        }
        if (\array_key_exists('DefensiveTeamSnaps', $data)) {
            $object->setDefensiveTeamSnaps($data['DefensiveTeamSnaps']);
        }
        if (\array_key_exists('SpecialTeamsTeamSnaps', $data)) {
            $object->setSpecialTeamsTeamSnaps($data['SpecialTeamsTeamSnaps']);
        }
        if (\array_key_exists('VictivSalary', $data)) {
            $object->setVictivSalary($data['VictivSalary']);
        }
        if (\array_key_exists('TwoPointConversionReturns', $data)) {
            $object->setTwoPointConversionReturns($data['TwoPointConversionReturns']);
        }
        if (\array_key_exists('FantasyPointsFanDuel', $data)) {
            $object->setFantasyPointsFanDuel($data['FantasyPointsFanDuel']);
        }
        if (\array_key_exists('FieldGoalsMade0to19', $data)) {
            $object->setFieldGoalsMade0to19($data['FieldGoalsMade0to19']);
        }
        if (\array_key_exists('FieldGoalsMade20to29', $data)) {
            $object->setFieldGoalsMade20to29($data['FieldGoalsMade20to29']);
        }
        if (\array_key_exists('FieldGoalsMade30to39', $data)) {
            $object->setFieldGoalsMade30to39($data['FieldGoalsMade30to39']);
        }
        if (\array_key_exists('FieldGoalsMade40to49', $data)) {
            $object->setFieldGoalsMade40to49($data['FieldGoalsMade40to49']);
        }
        if (\array_key_exists('FieldGoalsMade50Plus', $data)) {
            $object->setFieldGoalsMade50Plus($data['FieldGoalsMade50Plus']);
        }
        if (\array_key_exists('FantasyPointsDraftKings', $data)) {
            $object->setFantasyPointsDraftKings($data['FantasyPointsDraftKings']);
        }
        if (\array_key_exists('YahooSalary', $data)) {
            $object->setYahooSalary($data['YahooSalary']);
        }
        if (\array_key_exists('FantasyPointsYahoo', $data)) {
            $object->setFantasyPointsYahoo($data['FantasyPointsYahoo']);
        }
        if (\array_key_exists('InjuryStatus', $data)) {
            $object->setInjuryStatus($data['InjuryStatus']);
        }
        if (\array_key_exists('InjuryBodyPart', $data)) {
            $object->setInjuryBodyPart($data['InjuryBodyPart']);
        }
        if (\array_key_exists('InjuryStartDate', $data)) {
            $object->setInjuryStartDate($data['InjuryStartDate']);
        }
        if (\array_key_exists('InjuryNotes', $data)) {
            $object->setInjuryNotes($data['InjuryNotes']);
        }
        if (\array_key_exists('FanDuelPosition', $data)) {
            $object->setFanDuelPosition($data['FanDuelPosition']);
        }
        if (\array_key_exists('DraftKingsPosition', $data)) {
            $object->setDraftKingsPosition($data['DraftKingsPosition']);
        }
        if (\array_key_exists('YahooPosition', $data)) {
            $object->setYahooPosition($data['YahooPosition']);
        }
        if (\array_key_exists('OpponentRank', $data)) {
            $object->setOpponentRank($data['OpponentRank']);
        }
        if (\array_key_exists('OpponentPositionRank', $data)) {
            $object->setOpponentPositionRank($data['OpponentPositionRank']);
        }
        if (\array_key_exists('InjuryPractice', $data)) {
            $object->setInjuryPractice($data['InjuryPractice']);
        }
        if (\array_key_exists('InjuryPracticeDescription', $data)) {
            $object->setInjuryPracticeDescription($data['InjuryPracticeDescription']);
        }
        if (\array_key_exists('DeclaredInactive', $data)) {
            $object->setDeclaredInactive($data['DeclaredInactive']);
        }
        if (\array_key_exists('FantasyDraftSalary', $data)) {
            $object->setFantasyDraftSalary($data['FantasyDraftSalary']);
        }
        if (\array_key_exists('FantasyDraftPosition', $data)) {
            $object->setFantasyDraftPosition($data['FantasyDraftPosition']);
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
        if (\array_key_exists('FantasyPointsFantasyDraft', $data)) {
            $object->setFantasyPointsFantasyDraft($data['FantasyPointsFantasyDraft']);
        }
        if (\array_key_exists('ScoringDetails', $data)) {
            $values = array();
            foreach ($data['ScoringDetails'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\NFL\\Model\\ScoringDetail', 'json', $context);
            }
            $object->setScoringDetails($values);
        }
        if (\array_key_exists('OffensiveFumbleRecoveryTouchdowns', $data)) {
            $object->setOffensiveFumbleRecoveryTouchdowns($data['OffensiveFumbleRecoveryTouchdowns']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGameKey()) {
            $data['GameKey'] = $object->getGameKey();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getGameDate()) {
            $data['GameDate'] = $object->getGameDate();
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
        if (null !== $object->getPlayerGameID()) {
            $data['PlayerGameID'] = $object->getPlayerGameID();
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
        if (null !== $object->getPlayingSurface()) {
            $data['PlayingSurface'] = $object->getPlayingSurface();
        }
        if (null !== $object->getIsGameOver()) {
            $data['IsGameOver'] = $object->getIsGameOver();
        }
        if (null !== $object->getSafetiesAllowed()) {
            $data['SafetiesAllowed'] = $object->getSafetiesAllowed();
        }
        if (null !== $object->getStadium()) {
            $data['Stadium'] = $object->getStadium();
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
        if (null !== $object->getFanDuelSalary()) {
            $data['FanDuelSalary'] = $object->getFanDuelSalary();
        }
        if (null !== $object->getDraftKingsSalary()) {
            $data['DraftKingsSalary'] = $object->getDraftKingsSalary();
        }
        if (null !== $object->getFantasyDataSalary()) {
            $data['FantasyDataSalary'] = $object->getFantasyDataSalary();
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
        if (null !== $object->getVictivSalary()) {
            $data['VictivSalary'] = $object->getVictivSalary();
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
        if (null !== $object->getYahooSalary()) {
            $data['YahooSalary'] = $object->getYahooSalary();
        }
        if (null !== $object->getFantasyPointsYahoo()) {
            $data['FantasyPointsYahoo'] = $object->getFantasyPointsYahoo();
        }
        if (null !== $object->getInjuryStatus()) {
            $data['InjuryStatus'] = $object->getInjuryStatus();
        }
        if (null !== $object->getInjuryBodyPart()) {
            $data['InjuryBodyPart'] = $object->getInjuryBodyPart();
        }
        if (null !== $object->getInjuryStartDate()) {
            $data['InjuryStartDate'] = $object->getInjuryStartDate();
        }
        if (null !== $object->getInjuryNotes()) {
            $data['InjuryNotes'] = $object->getInjuryNotes();
        }
        if (null !== $object->getFanDuelPosition()) {
            $data['FanDuelPosition'] = $object->getFanDuelPosition();
        }
        if (null !== $object->getDraftKingsPosition()) {
            $data['DraftKingsPosition'] = $object->getDraftKingsPosition();
        }
        if (null !== $object->getYahooPosition()) {
            $data['YahooPosition'] = $object->getYahooPosition();
        }
        if (null !== $object->getOpponentRank()) {
            $data['OpponentRank'] = $object->getOpponentRank();
        }
        if (null !== $object->getOpponentPositionRank()) {
            $data['OpponentPositionRank'] = $object->getOpponentPositionRank();
        }
        if (null !== $object->getInjuryPractice()) {
            $data['InjuryPractice'] = $object->getInjuryPractice();
        }
        if (null !== $object->getInjuryPracticeDescription()) {
            $data['InjuryPracticeDescription'] = $object->getInjuryPracticeDescription();
        }
        if (null !== $object->getDeclaredInactive()) {
            $data['DeclaredInactive'] = $object->getDeclaredInactive();
        }
        if (null !== $object->getFantasyDraftSalary()) {
            $data['FantasyDraftSalary'] = $object->getFantasyDraftSalary();
        }
        if (null !== $object->getFantasyDraftPosition()) {
            $data['FantasyDraftPosition'] = $object->getFantasyDraftPosition();
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
        if (null !== $object->getOffensiveFumbleRecoveryTouchdowns()) {
            $data['OffensiveFumbleRecoveryTouchdowns'] = $object->getOffensiveFumbleRecoveryTouchdowns();
        }
        return $data;
    }
}