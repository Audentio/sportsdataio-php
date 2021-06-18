<?php

namespace Sportsdata\API\Soccer\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\Soccer\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\Soccer\\Model\\PlayerGameProjection';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Soccer\\Model\\PlayerGameProjection';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Soccer\Model\PlayerGameProjection();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('StatId', $data)) {
            $object->setStatId($data['StatId']);
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('RoundId', $data) && $data['RoundId'] !== null) {
            $object->setRoundId($data['RoundId']);
        }
        elseif (\array_key_exists('RoundId', $data) && $data['RoundId'] === null) {
            $object->setRoundId(null);
        }
        if (\array_key_exists('TeamId', $data) && $data['TeamId'] !== null) {
            $object->setTeamId($data['TeamId']);
        }
        elseif (\array_key_exists('TeamId', $data) && $data['TeamId'] === null) {
            $object->setTeamId(null);
        }
        if (\array_key_exists('PlayerId', $data) && $data['PlayerId'] !== null) {
            $object->setPlayerId($data['PlayerId']);
        }
        elseif (\array_key_exists('PlayerId', $data) && $data['PlayerId'] === null) {
            $object->setPlayerId(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('ShortName', $data) && $data['ShortName'] !== null) {
            $object->setShortName($data['ShortName']);
        }
        elseif (\array_key_exists('ShortName', $data) && $data['ShortName'] === null) {
            $object->setShortName(null);
        }
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('PositionCategory', $data) && $data['PositionCategory'] !== null) {
            $object->setPositionCategory($data['PositionCategory']);
        }
        elseif (\array_key_exists('PositionCategory', $data) && $data['PositionCategory'] === null) {
            $object->setPositionCategory(null);
        }
        if (\array_key_exists('Position', $data) && $data['Position'] !== null) {
            $object->setPosition($data['Position']);
        }
        elseif (\array_key_exists('Position', $data) && $data['Position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('Jersey', $data) && $data['Jersey'] !== null) {
            $object->setJersey($data['Jersey']);
        }
        elseif (\array_key_exists('Jersey', $data) && $data['Jersey'] === null) {
            $object->setJersey(null);
        }
        if (\array_key_exists('Started', $data) && $data['Started'] !== null) {
            $object->setStarted($data['Started']);
        }
        elseif (\array_key_exists('Started', $data) && $data['Started'] === null) {
            $object->setStarted(null);
        }
        if (\array_key_exists('Captain', $data) && $data['Captain'] !== null) {
            $object->setCaptain($data['Captain']);
        }
        elseif (\array_key_exists('Captain', $data) && $data['Captain'] === null) {
            $object->setCaptain(null);
        }
        if (\array_key_exists('Suspension', $data) && $data['Suspension'] !== null) {
            $object->setSuspension($data['Suspension']);
        }
        elseif (\array_key_exists('Suspension', $data) && $data['Suspension'] === null) {
            $object->setSuspension(null);
        }
        if (\array_key_exists('SuspensionReason', $data) && $data['SuspensionReason'] !== null) {
            $object->setSuspensionReason($data['SuspensionReason']);
        }
        elseif (\array_key_exists('SuspensionReason', $data) && $data['SuspensionReason'] === null) {
            $object->setSuspensionReason(null);
        }
        if (\array_key_exists('FanDuelSalary', $data) && $data['FanDuelSalary'] !== null) {
            $object->setFanDuelSalary($data['FanDuelSalary']);
        }
        elseif (\array_key_exists('FanDuelSalary', $data) && $data['FanDuelSalary'] === null) {
            $object->setFanDuelSalary(null);
        }
        if (\array_key_exists('DraftKingsSalary', $data) && $data['DraftKingsSalary'] !== null) {
            $object->setDraftKingsSalary($data['DraftKingsSalary']);
        }
        elseif (\array_key_exists('DraftKingsSalary', $data) && $data['DraftKingsSalary'] === null) {
            $object->setDraftKingsSalary(null);
        }
        if (\array_key_exists('YahooSalary', $data) && $data['YahooSalary'] !== null) {
            $object->setYahooSalary($data['YahooSalary']);
        }
        elseif (\array_key_exists('YahooSalary', $data) && $data['YahooSalary'] === null) {
            $object->setYahooSalary(null);
        }
        if (\array_key_exists('MondogoalSalary', $data) && $data['MondogoalSalary'] !== null) {
            $object->setMondogoalSalary($data['MondogoalSalary']);
        }
        elseif (\array_key_exists('MondogoalSalary', $data) && $data['MondogoalSalary'] === null) {
            $object->setMondogoalSalary(null);
        }
        if (\array_key_exists('FanDuelPosition', $data) && $data['FanDuelPosition'] !== null) {
            $object->setFanDuelPosition($data['FanDuelPosition']);
        }
        elseif (\array_key_exists('FanDuelPosition', $data) && $data['FanDuelPosition'] === null) {
            $object->setFanDuelPosition(null);
        }
        if (\array_key_exists('DraftKingsPosition', $data) && $data['DraftKingsPosition'] !== null) {
            $object->setDraftKingsPosition($data['DraftKingsPosition']);
        }
        elseif (\array_key_exists('DraftKingsPosition', $data) && $data['DraftKingsPosition'] === null) {
            $object->setDraftKingsPosition(null);
        }
        if (\array_key_exists('YahooPosition', $data) && $data['YahooPosition'] !== null) {
            $object->setYahooPosition($data['YahooPosition']);
        }
        elseif (\array_key_exists('YahooPosition', $data) && $data['YahooPosition'] === null) {
            $object->setYahooPosition(null);
        }
        if (\array_key_exists('MondogoalPosition', $data) && $data['MondogoalPosition'] !== null) {
            $object->setMondogoalPosition($data['MondogoalPosition']);
        }
        elseif (\array_key_exists('MondogoalPosition', $data) && $data['MondogoalPosition'] === null) {
            $object->setMondogoalPosition(null);
        }
        if (\array_key_exists('InjuryStatus', $data) && $data['InjuryStatus'] !== null) {
            $object->setInjuryStatus($data['InjuryStatus']);
        }
        elseif (\array_key_exists('InjuryStatus', $data) && $data['InjuryStatus'] === null) {
            $object->setInjuryStatus(null);
        }
        if (\array_key_exists('InjuryBodyPart', $data) && $data['InjuryBodyPart'] !== null) {
            $object->setInjuryBodyPart($data['InjuryBodyPart']);
        }
        elseif (\array_key_exists('InjuryBodyPart', $data) && $data['InjuryBodyPart'] === null) {
            $object->setInjuryBodyPart(null);
        }
        if (\array_key_exists('InjuryNotes', $data) && $data['InjuryNotes'] !== null) {
            $object->setInjuryNotes($data['InjuryNotes']);
        }
        elseif (\array_key_exists('InjuryNotes', $data) && $data['InjuryNotes'] === null) {
            $object->setInjuryNotes(null);
        }
        if (\array_key_exists('InjuryStartDate', $data) && $data['InjuryStartDate'] !== null) {
            $object->setInjuryStartDate($data['InjuryStartDate']);
        }
        elseif (\array_key_exists('InjuryStartDate', $data) && $data['InjuryStartDate'] === null) {
            $object->setInjuryStartDate(null);
        }
        if (\array_key_exists('GlobalTeamId', $data) && $data['GlobalTeamId'] !== null) {
            $object->setGlobalTeamId($data['GlobalTeamId']);
        }
        elseif (\array_key_exists('GlobalTeamId', $data) && $data['GlobalTeamId'] === null) {
            $object->setGlobalTeamId(null);
        }
        if (\array_key_exists('GameId', $data) && $data['GameId'] !== null) {
            $object->setGameId($data['GameId']);
        }
        elseif (\array_key_exists('GameId', $data) && $data['GameId'] === null) {
            $object->setGameId(null);
        }
        if (\array_key_exists('OpponentId', $data) && $data['OpponentId'] !== null) {
            $object->setOpponentId($data['OpponentId']);
        }
        elseif (\array_key_exists('OpponentId', $data) && $data['OpponentId'] === null) {
            $object->setOpponentId(null);
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
        if (\array_key_exists('GlobalGameId', $data) && $data['GlobalGameId'] !== null) {
            $object->setGlobalGameId($data['GlobalGameId']);
        }
        elseif (\array_key_exists('GlobalGameId', $data) && $data['GlobalGameId'] === null) {
            $object->setGlobalGameId(null);
        }
        if (\array_key_exists('GlobalOpponentId', $data) && $data['GlobalOpponentId'] !== null) {
            $object->setGlobalOpponentId($data['GlobalOpponentId']);
        }
        elseif (\array_key_exists('GlobalOpponentId', $data) && $data['GlobalOpponentId'] === null) {
            $object->setGlobalOpponentId(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('UpdatedUtc', $data) && $data['UpdatedUtc'] !== null) {
            $object->setUpdatedUtc($data['UpdatedUtc']);
        }
        elseif (\array_key_exists('UpdatedUtc', $data) && $data['UpdatedUtc'] === null) {
            $object->setUpdatedUtc(null);
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
        if (\array_key_exists('FantasyPointsFanDuel', $data) && $data['FantasyPointsFanDuel'] !== null) {
            $object->setFantasyPointsFanDuel($data['FantasyPointsFanDuel']);
        }
        elseif (\array_key_exists('FantasyPointsFanDuel', $data) && $data['FantasyPointsFanDuel'] === null) {
            $object->setFantasyPointsFanDuel(null);
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
        if (\array_key_exists('FantasyPointsMondogoal', $data) && $data['FantasyPointsMondogoal'] !== null) {
            $object->setFantasyPointsMondogoal($data['FantasyPointsMondogoal']);
        }
        elseif (\array_key_exists('FantasyPointsMondogoal', $data) && $data['FantasyPointsMondogoal'] === null) {
            $object->setFantasyPointsMondogoal(null);
        }
        if (\array_key_exists('Minutes', $data) && $data['Minutes'] !== null) {
            $object->setMinutes($data['Minutes']);
        }
        elseif (\array_key_exists('Minutes', $data) && $data['Minutes'] === null) {
            $object->setMinutes(null);
        }
        if (\array_key_exists('Goals', $data) && $data['Goals'] !== null) {
            $object->setGoals($data['Goals']);
        }
        elseif (\array_key_exists('Goals', $data) && $data['Goals'] === null) {
            $object->setGoals(null);
        }
        if (\array_key_exists('Assists', $data) && $data['Assists'] !== null) {
            $object->setAssists($data['Assists']);
        }
        elseif (\array_key_exists('Assists', $data) && $data['Assists'] === null) {
            $object->setAssists(null);
        }
        if (\array_key_exists('Shots', $data) && $data['Shots'] !== null) {
            $object->setShots($data['Shots']);
        }
        elseif (\array_key_exists('Shots', $data) && $data['Shots'] === null) {
            $object->setShots(null);
        }
        if (\array_key_exists('ShotsOnGoal', $data) && $data['ShotsOnGoal'] !== null) {
            $object->setShotsOnGoal($data['ShotsOnGoal']);
        }
        elseif (\array_key_exists('ShotsOnGoal', $data) && $data['ShotsOnGoal'] === null) {
            $object->setShotsOnGoal(null);
        }
        if (\array_key_exists('YellowCards', $data) && $data['YellowCards'] !== null) {
            $object->setYellowCards($data['YellowCards']);
        }
        elseif (\array_key_exists('YellowCards', $data) && $data['YellowCards'] === null) {
            $object->setYellowCards(null);
        }
        if (\array_key_exists('RedCards', $data) && $data['RedCards'] !== null) {
            $object->setRedCards($data['RedCards']);
        }
        elseif (\array_key_exists('RedCards', $data) && $data['RedCards'] === null) {
            $object->setRedCards(null);
        }
        if (\array_key_exists('YellowRedCards', $data) && $data['YellowRedCards'] !== null) {
            $object->setYellowRedCards($data['YellowRedCards']);
        }
        elseif (\array_key_exists('YellowRedCards', $data) && $data['YellowRedCards'] === null) {
            $object->setYellowRedCards(null);
        }
        if (\array_key_exists('Crosses', $data) && $data['Crosses'] !== null) {
            $object->setCrosses($data['Crosses']);
        }
        elseif (\array_key_exists('Crosses', $data) && $data['Crosses'] === null) {
            $object->setCrosses(null);
        }
        if (\array_key_exists('TacklesWon', $data) && $data['TacklesWon'] !== null) {
            $object->setTacklesWon($data['TacklesWon']);
        }
        elseif (\array_key_exists('TacklesWon', $data) && $data['TacklesWon'] === null) {
            $object->setTacklesWon(null);
        }
        if (\array_key_exists('Interceptions', $data) && $data['Interceptions'] !== null) {
            $object->setInterceptions($data['Interceptions']);
        }
        elseif (\array_key_exists('Interceptions', $data) && $data['Interceptions'] === null) {
            $object->setInterceptions(null);
        }
        if (\array_key_exists('OwnGoals', $data) && $data['OwnGoals'] !== null) {
            $object->setOwnGoals($data['OwnGoals']);
        }
        elseif (\array_key_exists('OwnGoals', $data) && $data['OwnGoals'] === null) {
            $object->setOwnGoals(null);
        }
        if (\array_key_exists('Fouls', $data) && $data['Fouls'] !== null) {
            $object->setFouls($data['Fouls']);
        }
        elseif (\array_key_exists('Fouls', $data) && $data['Fouls'] === null) {
            $object->setFouls(null);
        }
        if (\array_key_exists('Fouled', $data) && $data['Fouled'] !== null) {
            $object->setFouled($data['Fouled']);
        }
        elseif (\array_key_exists('Fouled', $data) && $data['Fouled'] === null) {
            $object->setFouled(null);
        }
        if (\array_key_exists('Offsides', $data) && $data['Offsides'] !== null) {
            $object->setOffsides($data['Offsides']);
        }
        elseif (\array_key_exists('Offsides', $data) && $data['Offsides'] === null) {
            $object->setOffsides(null);
        }
        if (\array_key_exists('Passes', $data) && $data['Passes'] !== null) {
            $object->setPasses($data['Passes']);
        }
        elseif (\array_key_exists('Passes', $data) && $data['Passes'] === null) {
            $object->setPasses(null);
        }
        if (\array_key_exists('PassesCompleted', $data) && $data['PassesCompleted'] !== null) {
            $object->setPassesCompleted($data['PassesCompleted']);
        }
        elseif (\array_key_exists('PassesCompleted', $data) && $data['PassesCompleted'] === null) {
            $object->setPassesCompleted(null);
        }
        if (\array_key_exists('LastManTackle', $data) && $data['LastManTackle'] !== null) {
            $object->setLastManTackle($data['LastManTackle']);
        }
        elseif (\array_key_exists('LastManTackle', $data) && $data['LastManTackle'] === null) {
            $object->setLastManTackle(null);
        }
        if (\array_key_exists('CornersWon', $data) && $data['CornersWon'] !== null) {
            $object->setCornersWon($data['CornersWon']);
        }
        elseif (\array_key_exists('CornersWon', $data) && $data['CornersWon'] === null) {
            $object->setCornersWon(null);
        }
        if (\array_key_exists('BlockedShots', $data) && $data['BlockedShots'] !== null) {
            $object->setBlockedShots($data['BlockedShots']);
        }
        elseif (\array_key_exists('BlockedShots', $data) && $data['BlockedShots'] === null) {
            $object->setBlockedShots(null);
        }
        if (\array_key_exists('Touches', $data) && $data['Touches'] !== null) {
            $object->setTouches($data['Touches']);
        }
        elseif (\array_key_exists('Touches', $data) && $data['Touches'] === null) {
            $object->setTouches(null);
        }
        if (\array_key_exists('DefenderCleanSheets', $data) && $data['DefenderCleanSheets'] !== null) {
            $object->setDefenderCleanSheets($data['DefenderCleanSheets']);
        }
        elseif (\array_key_exists('DefenderCleanSheets', $data) && $data['DefenderCleanSheets'] === null) {
            $object->setDefenderCleanSheets(null);
        }
        if (\array_key_exists('GoalkeeperSaves', $data) && $data['GoalkeeperSaves'] !== null) {
            $object->setGoalkeeperSaves($data['GoalkeeperSaves']);
        }
        elseif (\array_key_exists('GoalkeeperSaves', $data) && $data['GoalkeeperSaves'] === null) {
            $object->setGoalkeeperSaves(null);
        }
        if (\array_key_exists('GoalkeeperGoalsAgainst', $data) && $data['GoalkeeperGoalsAgainst'] !== null) {
            $object->setGoalkeeperGoalsAgainst($data['GoalkeeperGoalsAgainst']);
        }
        elseif (\array_key_exists('GoalkeeperGoalsAgainst', $data) && $data['GoalkeeperGoalsAgainst'] === null) {
            $object->setGoalkeeperGoalsAgainst(null);
        }
        if (\array_key_exists('GoalkeeperSingleGoalAgainst', $data) && $data['GoalkeeperSingleGoalAgainst'] !== null) {
            $object->setGoalkeeperSingleGoalAgainst($data['GoalkeeperSingleGoalAgainst']);
        }
        elseif (\array_key_exists('GoalkeeperSingleGoalAgainst', $data) && $data['GoalkeeperSingleGoalAgainst'] === null) {
            $object->setGoalkeeperSingleGoalAgainst(null);
        }
        if (\array_key_exists('GoalkeeperCleanSheets', $data) && $data['GoalkeeperCleanSheets'] !== null) {
            $object->setGoalkeeperCleanSheets($data['GoalkeeperCleanSheets']);
        }
        elseif (\array_key_exists('GoalkeeperCleanSheets', $data) && $data['GoalkeeperCleanSheets'] === null) {
            $object->setGoalkeeperCleanSheets(null);
        }
        if (\array_key_exists('GoalkeeperWins', $data) && $data['GoalkeeperWins'] !== null) {
            $object->setGoalkeeperWins($data['GoalkeeperWins']);
        }
        elseif (\array_key_exists('GoalkeeperWins', $data) && $data['GoalkeeperWins'] === null) {
            $object->setGoalkeeperWins(null);
        }
        if (\array_key_exists('PenaltyKickGoals', $data) && $data['PenaltyKickGoals'] !== null) {
            $object->setPenaltyKickGoals($data['PenaltyKickGoals']);
        }
        elseif (\array_key_exists('PenaltyKickGoals', $data) && $data['PenaltyKickGoals'] === null) {
            $object->setPenaltyKickGoals(null);
        }
        if (\array_key_exists('PenaltyKickMisses', $data) && $data['PenaltyKickMisses'] !== null) {
            $object->setPenaltyKickMisses($data['PenaltyKickMisses']);
        }
        elseif (\array_key_exists('PenaltyKickMisses', $data) && $data['PenaltyKickMisses'] === null) {
            $object->setPenaltyKickMisses(null);
        }
        if (\array_key_exists('PenaltyKickSaves', $data) && $data['PenaltyKickSaves'] !== null) {
            $object->setPenaltyKickSaves($data['PenaltyKickSaves']);
        }
        elseif (\array_key_exists('PenaltyKickSaves', $data) && $data['PenaltyKickSaves'] === null) {
            $object->setPenaltyKickSaves(null);
        }
        if (\array_key_exists('PenaltiesWon', $data) && $data['PenaltiesWon'] !== null) {
            $object->setPenaltiesWon($data['PenaltiesWon']);
        }
        elseif (\array_key_exists('PenaltiesWon', $data) && $data['PenaltiesWon'] === null) {
            $object->setPenaltiesWon(null);
        }
        if (\array_key_exists('PenaltiesConceded', $data) && $data['PenaltiesConceded'] !== null) {
            $object->setPenaltiesConceded($data['PenaltiesConceded']);
        }
        elseif (\array_key_exists('PenaltiesConceded', $data) && $data['PenaltiesConceded'] === null) {
            $object->setPenaltiesConceded(null);
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
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getStatId()) {
            $data['StatId'] = $object->getStatId();
        }
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getRoundId()) {
            $data['RoundId'] = $object->getRoundId();
        }
        if (null !== $object->getTeamId()) {
            $data['TeamId'] = $object->getTeamId();
        }
        if (null !== $object->getPlayerId()) {
            $data['PlayerId'] = $object->getPlayerId();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getShortName()) {
            $data['ShortName'] = $object->getShortName();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getPositionCategory()) {
            $data['PositionCategory'] = $object->getPositionCategory();
        }
        if (null !== $object->getPosition()) {
            $data['Position'] = $object->getPosition();
        }
        if (null !== $object->getJersey()) {
            $data['Jersey'] = $object->getJersey();
        }
        if (null !== $object->getStarted()) {
            $data['Started'] = $object->getStarted();
        }
        if (null !== $object->getCaptain()) {
            $data['Captain'] = $object->getCaptain();
        }
        if (null !== $object->getSuspension()) {
            $data['Suspension'] = $object->getSuspension();
        }
        if (null !== $object->getSuspensionReason()) {
            $data['SuspensionReason'] = $object->getSuspensionReason();
        }
        if (null !== $object->getFanDuelSalary()) {
            $data['FanDuelSalary'] = $object->getFanDuelSalary();
        }
        if (null !== $object->getDraftKingsSalary()) {
            $data['DraftKingsSalary'] = $object->getDraftKingsSalary();
        }
        if (null !== $object->getYahooSalary()) {
            $data['YahooSalary'] = $object->getYahooSalary();
        }
        if (null !== $object->getMondogoalSalary()) {
            $data['MondogoalSalary'] = $object->getMondogoalSalary();
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
        if (null !== $object->getMondogoalPosition()) {
            $data['MondogoalPosition'] = $object->getMondogoalPosition();
        }
        if (null !== $object->getInjuryStatus()) {
            $data['InjuryStatus'] = $object->getInjuryStatus();
        }
        if (null !== $object->getInjuryBodyPart()) {
            $data['InjuryBodyPart'] = $object->getInjuryBodyPart();
        }
        if (null !== $object->getInjuryNotes()) {
            $data['InjuryNotes'] = $object->getInjuryNotes();
        }
        if (null !== $object->getInjuryStartDate()) {
            $data['InjuryStartDate'] = $object->getInjuryStartDate();
        }
        if (null !== $object->getGlobalTeamId()) {
            $data['GlobalTeamId'] = $object->getGlobalTeamId();
        }
        if (null !== $object->getGameId()) {
            $data['GameId'] = $object->getGameId();
        }
        if (null !== $object->getOpponentId()) {
            $data['OpponentId'] = $object->getOpponentId();
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
        if (null !== $object->getGlobalGameId()) {
            $data['GlobalGameId'] = $object->getGlobalGameId();
        }
        if (null !== $object->getGlobalOpponentId()) {
            $data['GlobalOpponentId'] = $object->getGlobalOpponentId();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getUpdatedUtc()) {
            $data['UpdatedUtc'] = $object->getUpdatedUtc();
        }
        if (null !== $object->getGames()) {
            $data['Games'] = $object->getGames();
        }
        if (null !== $object->getFantasyPoints()) {
            $data['FantasyPoints'] = $object->getFantasyPoints();
        }
        if (null !== $object->getFantasyPointsFanDuel()) {
            $data['FantasyPointsFanDuel'] = $object->getFantasyPointsFanDuel();
        }
        if (null !== $object->getFantasyPointsDraftKings()) {
            $data['FantasyPointsDraftKings'] = $object->getFantasyPointsDraftKings();
        }
        if (null !== $object->getFantasyPointsYahoo()) {
            $data['FantasyPointsYahoo'] = $object->getFantasyPointsYahoo();
        }
        if (null !== $object->getFantasyPointsMondogoal()) {
            $data['FantasyPointsMondogoal'] = $object->getFantasyPointsMondogoal();
        }
        if (null !== $object->getMinutes()) {
            $data['Minutes'] = $object->getMinutes();
        }
        if (null !== $object->getGoals()) {
            $data['Goals'] = $object->getGoals();
        }
        if (null !== $object->getAssists()) {
            $data['Assists'] = $object->getAssists();
        }
        if (null !== $object->getShots()) {
            $data['Shots'] = $object->getShots();
        }
        if (null !== $object->getShotsOnGoal()) {
            $data['ShotsOnGoal'] = $object->getShotsOnGoal();
        }
        if (null !== $object->getYellowCards()) {
            $data['YellowCards'] = $object->getYellowCards();
        }
        if (null !== $object->getRedCards()) {
            $data['RedCards'] = $object->getRedCards();
        }
        if (null !== $object->getYellowRedCards()) {
            $data['YellowRedCards'] = $object->getYellowRedCards();
        }
        if (null !== $object->getCrosses()) {
            $data['Crosses'] = $object->getCrosses();
        }
        if (null !== $object->getTacklesWon()) {
            $data['TacklesWon'] = $object->getTacklesWon();
        }
        if (null !== $object->getInterceptions()) {
            $data['Interceptions'] = $object->getInterceptions();
        }
        if (null !== $object->getOwnGoals()) {
            $data['OwnGoals'] = $object->getOwnGoals();
        }
        if (null !== $object->getFouls()) {
            $data['Fouls'] = $object->getFouls();
        }
        if (null !== $object->getFouled()) {
            $data['Fouled'] = $object->getFouled();
        }
        if (null !== $object->getOffsides()) {
            $data['Offsides'] = $object->getOffsides();
        }
        if (null !== $object->getPasses()) {
            $data['Passes'] = $object->getPasses();
        }
        if (null !== $object->getPassesCompleted()) {
            $data['PassesCompleted'] = $object->getPassesCompleted();
        }
        if (null !== $object->getLastManTackle()) {
            $data['LastManTackle'] = $object->getLastManTackle();
        }
        if (null !== $object->getCornersWon()) {
            $data['CornersWon'] = $object->getCornersWon();
        }
        if (null !== $object->getBlockedShots()) {
            $data['BlockedShots'] = $object->getBlockedShots();
        }
        if (null !== $object->getTouches()) {
            $data['Touches'] = $object->getTouches();
        }
        if (null !== $object->getDefenderCleanSheets()) {
            $data['DefenderCleanSheets'] = $object->getDefenderCleanSheets();
        }
        if (null !== $object->getGoalkeeperSaves()) {
            $data['GoalkeeperSaves'] = $object->getGoalkeeperSaves();
        }
        if (null !== $object->getGoalkeeperGoalsAgainst()) {
            $data['GoalkeeperGoalsAgainst'] = $object->getGoalkeeperGoalsAgainst();
        }
        if (null !== $object->getGoalkeeperSingleGoalAgainst()) {
            $data['GoalkeeperSingleGoalAgainst'] = $object->getGoalkeeperSingleGoalAgainst();
        }
        if (null !== $object->getGoalkeeperCleanSheets()) {
            $data['GoalkeeperCleanSheets'] = $object->getGoalkeeperCleanSheets();
        }
        if (null !== $object->getGoalkeeperWins()) {
            $data['GoalkeeperWins'] = $object->getGoalkeeperWins();
        }
        if (null !== $object->getPenaltyKickGoals()) {
            $data['PenaltyKickGoals'] = $object->getPenaltyKickGoals();
        }
        if (null !== $object->getPenaltyKickMisses()) {
            $data['PenaltyKickMisses'] = $object->getPenaltyKickMisses();
        }
        if (null !== $object->getPenaltyKickSaves()) {
            $data['PenaltyKickSaves'] = $object->getPenaltyKickSaves();
        }
        if (null !== $object->getPenaltiesWon()) {
            $data['PenaltiesWon'] = $object->getPenaltiesWon();
        }
        if (null !== $object->getPenaltiesConceded()) {
            $data['PenaltiesConceded'] = $object->getPenaltiesConceded();
        }
        if (null !== $object->getScore()) {
            $data['Score'] = $object->getScore();
        }
        if (null !== $object->getOpponentScore()) {
            $data['OpponentScore'] = $object->getOpponentScore();
        }
        return $data;
    }
}