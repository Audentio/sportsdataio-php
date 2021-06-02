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
        if (\array_key_exists('RoundId', $data)) {
            $object->setRoundId($data['RoundId']);
        }
        if (\array_key_exists('TeamId', $data)) {
            $object->setTeamId($data['TeamId']);
        }
        if (\array_key_exists('PlayerId', $data)) {
            $object->setPlayerId($data['PlayerId']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('ShortName', $data)) {
            $object->setShortName($data['ShortName']);
        }
        if (\array_key_exists('Team', $data)) {
            $object->setTeam($data['Team']);
        }
        if (\array_key_exists('PositionCategory', $data)) {
            $object->setPositionCategory($data['PositionCategory']);
        }
        if (\array_key_exists('Position', $data)) {
            $object->setPosition($data['Position']);
        }
        if (\array_key_exists('Jersey', $data)) {
            $object->setJersey($data['Jersey']);
        }
        if (\array_key_exists('Started', $data)) {
            $object->setStarted($data['Started']);
        }
        if (\array_key_exists('Captain', $data)) {
            $object->setCaptain($data['Captain']);
        }
        if (\array_key_exists('Suspension', $data)) {
            $object->setSuspension($data['Suspension']);
        }
        if (\array_key_exists('SuspensionReason', $data)) {
            $object->setSuspensionReason($data['SuspensionReason']);
        }
        if (\array_key_exists('FanDuelSalary', $data)) {
            $object->setFanDuelSalary($data['FanDuelSalary']);
        }
        if (\array_key_exists('DraftKingsSalary', $data)) {
            $object->setDraftKingsSalary($data['DraftKingsSalary']);
        }
        if (\array_key_exists('YahooSalary', $data)) {
            $object->setYahooSalary($data['YahooSalary']);
        }
        if (\array_key_exists('MondogoalSalary', $data)) {
            $object->setMondogoalSalary($data['MondogoalSalary']);
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
        if (\array_key_exists('MondogoalPosition', $data)) {
            $object->setMondogoalPosition($data['MondogoalPosition']);
        }
        if (\array_key_exists('InjuryStatus', $data)) {
            $object->setInjuryStatus($data['InjuryStatus']);
        }
        if (\array_key_exists('InjuryBodyPart', $data)) {
            $object->setInjuryBodyPart($data['InjuryBodyPart']);
        }
        if (\array_key_exists('InjuryNotes', $data)) {
            $object->setInjuryNotes($data['InjuryNotes']);
        }
        if (\array_key_exists('InjuryStartDate', $data)) {
            $object->setInjuryStartDate($data['InjuryStartDate']);
        }
        if (\array_key_exists('GlobalTeamId', $data)) {
            $object->setGlobalTeamId($data['GlobalTeamId']);
        }
        if (\array_key_exists('GameId', $data)) {
            $object->setGameId($data['GameId']);
        }
        if (\array_key_exists('OpponentId', $data)) {
            $object->setOpponentId($data['OpponentId']);
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
        if (\array_key_exists('GlobalGameId', $data)) {
            $object->setGlobalGameId($data['GlobalGameId']);
        }
        if (\array_key_exists('GlobalOpponentId', $data)) {
            $object->setGlobalOpponentId($data['GlobalOpponentId']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('UpdatedUtc', $data)) {
            $object->setUpdatedUtc($data['UpdatedUtc']);
        }
        if (\array_key_exists('Games', $data)) {
            $object->setGames($data['Games']);
        }
        if (\array_key_exists('FantasyPoints', $data)) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        if (\array_key_exists('FantasyPointsFanDuel', $data)) {
            $object->setFantasyPointsFanDuel($data['FantasyPointsFanDuel']);
        }
        if (\array_key_exists('FantasyPointsDraftKings', $data)) {
            $object->setFantasyPointsDraftKings($data['FantasyPointsDraftKings']);
        }
        if (\array_key_exists('FantasyPointsYahoo', $data)) {
            $object->setFantasyPointsYahoo($data['FantasyPointsYahoo']);
        }
        if (\array_key_exists('FantasyPointsMondogoal', $data)) {
            $object->setFantasyPointsMondogoal($data['FantasyPointsMondogoal']);
        }
        if (\array_key_exists('Minutes', $data)) {
            $object->setMinutes($data['Minutes']);
        }
        if (\array_key_exists('Goals', $data)) {
            $object->setGoals($data['Goals']);
        }
        if (\array_key_exists('Assists', $data)) {
            $object->setAssists($data['Assists']);
        }
        if (\array_key_exists('Shots', $data)) {
            $object->setShots($data['Shots']);
        }
        if (\array_key_exists('ShotsOnGoal', $data)) {
            $object->setShotsOnGoal($data['ShotsOnGoal']);
        }
        if (\array_key_exists('YellowCards', $data)) {
            $object->setYellowCards($data['YellowCards']);
        }
        if (\array_key_exists('RedCards', $data)) {
            $object->setRedCards($data['RedCards']);
        }
        if (\array_key_exists('YellowRedCards', $data)) {
            $object->setYellowRedCards($data['YellowRedCards']);
        }
        if (\array_key_exists('Crosses', $data)) {
            $object->setCrosses($data['Crosses']);
        }
        if (\array_key_exists('TacklesWon', $data)) {
            $object->setTacklesWon($data['TacklesWon']);
        }
        if (\array_key_exists('Interceptions', $data)) {
            $object->setInterceptions($data['Interceptions']);
        }
        if (\array_key_exists('OwnGoals', $data)) {
            $object->setOwnGoals($data['OwnGoals']);
        }
        if (\array_key_exists('Fouls', $data)) {
            $object->setFouls($data['Fouls']);
        }
        if (\array_key_exists('Fouled', $data)) {
            $object->setFouled($data['Fouled']);
        }
        if (\array_key_exists('Offsides', $data)) {
            $object->setOffsides($data['Offsides']);
        }
        if (\array_key_exists('Passes', $data)) {
            $object->setPasses($data['Passes']);
        }
        if (\array_key_exists('PassesCompleted', $data)) {
            $object->setPassesCompleted($data['PassesCompleted']);
        }
        if (\array_key_exists('LastManTackle', $data)) {
            $object->setLastManTackle($data['LastManTackle']);
        }
        if (\array_key_exists('CornersWon', $data)) {
            $object->setCornersWon($data['CornersWon']);
        }
        if (\array_key_exists('BlockedShots', $data)) {
            $object->setBlockedShots($data['BlockedShots']);
        }
        if (\array_key_exists('Touches', $data)) {
            $object->setTouches($data['Touches']);
        }
        if (\array_key_exists('DefenderCleanSheets', $data)) {
            $object->setDefenderCleanSheets($data['DefenderCleanSheets']);
        }
        if (\array_key_exists('GoalkeeperSaves', $data)) {
            $object->setGoalkeeperSaves($data['GoalkeeperSaves']);
        }
        if (\array_key_exists('GoalkeeperGoalsAgainst', $data)) {
            $object->setGoalkeeperGoalsAgainst($data['GoalkeeperGoalsAgainst']);
        }
        if (\array_key_exists('GoalkeeperSingleGoalAgainst', $data)) {
            $object->setGoalkeeperSingleGoalAgainst($data['GoalkeeperSingleGoalAgainst']);
        }
        if (\array_key_exists('GoalkeeperCleanSheets', $data)) {
            $object->setGoalkeeperCleanSheets($data['GoalkeeperCleanSheets']);
        }
        if (\array_key_exists('GoalkeeperWins', $data)) {
            $object->setGoalkeeperWins($data['GoalkeeperWins']);
        }
        if (\array_key_exists('PenaltyKickGoals', $data)) {
            $object->setPenaltyKickGoals($data['PenaltyKickGoals']);
        }
        if (\array_key_exists('PenaltyKickMisses', $data)) {
            $object->setPenaltyKickMisses($data['PenaltyKickMisses']);
        }
        if (\array_key_exists('PenaltyKickSaves', $data)) {
            $object->setPenaltyKickSaves($data['PenaltyKickSaves']);
        }
        if (\array_key_exists('PenaltiesWon', $data)) {
            $object->setPenaltiesWon($data['PenaltiesWon']);
        }
        if (\array_key_exists('PenaltiesConceded', $data)) {
            $object->setPenaltiesConceded($data['PenaltiesConceded']);
        }
        if (\array_key_exists('Score', $data)) {
            $object->setScore($data['Score']);
        }
        if (\array_key_exists('OpponentScore', $data)) {
            $object->setOpponentScore($data['OpponentScore']);
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