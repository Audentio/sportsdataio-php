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
class FantasyDefenseGameProjectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\FantasyDefenseGameProjection';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\FantasyDefenseGameProjection';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\FantasyDefenseGameProjection();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GameKey', $data)) {
            $object->setGameKey($data['GameKey']);
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
        if (\array_key_exists('Date', $data)) {
            $object->setDate($data['Date']);
        }
        if (\array_key_exists('Team', $data)) {
            $object->setTeam($data['Team']);
        }
        if (\array_key_exists('Opponent', $data)) {
            $object->setOpponent($data['Opponent']);
        }
        if (\array_key_exists('PointsAllowed', $data)) {
            $object->setPointsAllowed($data['PointsAllowed']);
        }
        if (\array_key_exists('TouchdownsScored', $data)) {
            $object->setTouchdownsScored($data['TouchdownsScored']);
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
        if (\array_key_exists('Safeties', $data)) {
            $object->setSafeties($data['Safeties']);
        }
        if (\array_key_exists('PuntReturns', $data)) {
            $object->setPuntReturns($data['PuntReturns']);
        }
        if (\array_key_exists('PuntReturnYards', $data)) {
            $object->setPuntReturnYards($data['PuntReturnYards']);
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
        if (\array_key_exists('KickReturnTouchdowns', $data)) {
            $object->setKickReturnTouchdowns($data['KickReturnTouchdowns']);
        }
        if (\array_key_exists('KickReturnLong', $data)) {
            $object->setKickReturnLong($data['KickReturnLong']);
        }
        if (\array_key_exists('BlockedKickReturnTouchdowns', $data)) {
            $object->setBlockedKickReturnTouchdowns($data['BlockedKickReturnTouchdowns']);
        }
        if (\array_key_exists('FieldGoalReturnTouchdowns', $data)) {
            $object->setFieldGoalReturnTouchdowns($data['FieldGoalReturnTouchdowns']);
        }
        if (\array_key_exists('FantasyPointsAllowed', $data)) {
            $object->setFantasyPointsAllowed($data['FantasyPointsAllowed']);
        }
        if (\array_key_exists('QuarterbackFantasyPointsAllowed', $data)) {
            $object->setQuarterbackFantasyPointsAllowed($data['QuarterbackFantasyPointsAllowed']);
        }
        if (\array_key_exists('RunningbackFantasyPointsAllowed', $data)) {
            $object->setRunningbackFantasyPointsAllowed($data['RunningbackFantasyPointsAllowed']);
        }
        if (\array_key_exists('WideReceiverFantasyPointsAllowed', $data)) {
            $object->setWideReceiverFantasyPointsAllowed($data['WideReceiverFantasyPointsAllowed']);
        }
        if (\array_key_exists('TightEndFantasyPointsAllowed', $data)) {
            $object->setTightEndFantasyPointsAllowed($data['TightEndFantasyPointsAllowed']);
        }
        if (\array_key_exists('KickerFantasyPointsAllowed', $data)) {
            $object->setKickerFantasyPointsAllowed($data['KickerFantasyPointsAllowed']);
        }
        if (\array_key_exists('BlockedKickReturnYards', $data)) {
            $object->setBlockedKickReturnYards($data['BlockedKickReturnYards']);
        }
        if (\array_key_exists('FieldGoalReturnYards', $data)) {
            $object->setFieldGoalReturnYards($data['FieldGoalReturnYards']);
        }
        if (\array_key_exists('QuarterbackHits', $data)) {
            $object->setQuarterbackHits($data['QuarterbackHits']);
        }
        if (\array_key_exists('TacklesForLoss', $data)) {
            $object->setTacklesForLoss($data['TacklesForLoss']);
        }
        if (\array_key_exists('DefensiveTouchdowns', $data)) {
            $object->setDefensiveTouchdowns($data['DefensiveTouchdowns']);
        }
        if (\array_key_exists('SpecialTeamsTouchdowns', $data)) {
            $object->setSpecialTeamsTouchdowns($data['SpecialTeamsTouchdowns']);
        }
        if (\array_key_exists('IsGameOver', $data)) {
            $object->setIsGameOver($data['IsGameOver']);
        }
        if (\array_key_exists('FantasyPoints', $data)) {
            $object->setFantasyPoints($data['FantasyPoints']);
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
        if (\array_key_exists('ThirdDownAttempts', $data)) {
            $object->setThirdDownAttempts($data['ThirdDownAttempts']);
        }
        if (\array_key_exists('ThirdDownConversions', $data)) {
            $object->setThirdDownConversions($data['ThirdDownConversions']);
        }
        if (\array_key_exists('FourthDownAttempts', $data)) {
            $object->setFourthDownAttempts($data['FourthDownAttempts']);
        }
        if (\array_key_exists('FourthDownConversions', $data)) {
            $object->setFourthDownConversions($data['FourthDownConversions']);
        }
        if (\array_key_exists('PointsAllowedByDefenseSpecialTeams', $data)) {
            $object->setPointsAllowedByDefenseSpecialTeams($data['PointsAllowedByDefenseSpecialTeams']);
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
        if (\array_key_exists('VictivSalary', $data)) {
            $object->setVictivSalary($data['VictivSalary']);
        }
        if (\array_key_exists('TwoPointConversionReturns', $data)) {
            $object->setTwoPointConversionReturns($data['TwoPointConversionReturns']);
        }
        if (\array_key_exists('FantasyPointsFanDuel', $data)) {
            $object->setFantasyPointsFanDuel($data['FantasyPointsFanDuel']);
        }
        if (\array_key_exists('FantasyPointsDraftKings', $data)) {
            $object->setFantasyPointsDraftKings($data['FantasyPointsDraftKings']);
        }
        if (\array_key_exists('OffensiveYardsAllowed', $data)) {
            $object->setOffensiveYardsAllowed($data['OffensiveYardsAllowed']);
        }
        if (\array_key_exists('YahooSalary', $data)) {
            $object->setYahooSalary($data['YahooSalary']);
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('FantasyPointsYahoo', $data)) {
            $object->setFantasyPointsYahoo($data['FantasyPointsYahoo']);
        }
        if (\array_key_exists('HomeOrAway', $data)) {
            $object->setHomeOrAway($data['HomeOrAway']);
        }
        if (\array_key_exists('OpponentRank', $data)) {
            $object->setOpponentRank($data['OpponentRank']);
        }
        if (\array_key_exists('OpponentPositionRank', $data)) {
            $object->setOpponentPositionRank($data['OpponentPositionRank']);
        }
        if (\array_key_exists('FantasyDraftSalary', $data)) {
            $object->setFantasyDraftSalary($data['FantasyDraftSalary']);
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
        if (\array_key_exists('DraftKingsPosition', $data)) {
            $object->setDraftKingsPosition($data['DraftKingsPosition']);
        }
        if (\array_key_exists('FanDuelPosition', $data)) {
            $object->setFanDuelPosition($data['FanDuelPosition']);
        }
        if (\array_key_exists('FantasyDraftPosition', $data)) {
            $object->setFantasyDraftPosition($data['FantasyDraftPosition']);
        }
        if (\array_key_exists('YahooPosition', $data)) {
            $object->setYahooPosition($data['YahooPosition']);
        }
        if (\array_key_exists('FantasyDefenseID', $data)) {
            $object->setFantasyDefenseID($data['FantasyDefenseID']);
        }
        if (\array_key_exists('ScoreID', $data)) {
            $object->setScoreID($data['ScoreID']);
        }
        if (\array_key_exists('FanDuelFantasyPointsAllowed', $data)) {
            $object->setFanDuelFantasyPointsAllowed($data['FanDuelFantasyPointsAllowed']);
        }
        if (\array_key_exists('FanDuelQuarterbackFantasyPointsAllowed', $data)) {
            $object->setFanDuelQuarterbackFantasyPointsAllowed($data['FanDuelQuarterbackFantasyPointsAllowed']);
        }
        if (\array_key_exists('FanDuelRunningbackFantasyPointsAllowed', $data)) {
            $object->setFanDuelRunningbackFantasyPointsAllowed($data['FanDuelRunningbackFantasyPointsAllowed']);
        }
        if (\array_key_exists('FanDuelWideReceiverFantasyPointsAllowed', $data)) {
            $object->setFanDuelWideReceiverFantasyPointsAllowed($data['FanDuelWideReceiverFantasyPointsAllowed']);
        }
        if (\array_key_exists('FanDuelTightEndFantasyPointsAllowed', $data)) {
            $object->setFanDuelTightEndFantasyPointsAllowed($data['FanDuelTightEndFantasyPointsAllowed']);
        }
        if (\array_key_exists('FanDuelKickerFantasyPointsAllowed', $data)) {
            $object->setFanDuelKickerFantasyPointsAllowed($data['FanDuelKickerFantasyPointsAllowed']);
        }
        if (\array_key_exists('DraftKingsFantasyPointsAllowed', $data)) {
            $object->setDraftKingsFantasyPointsAllowed($data['DraftKingsFantasyPointsAllowed']);
        }
        if (\array_key_exists('DraftKingsQuarterbackFantasyPointsAllowed', $data)) {
            $object->setDraftKingsQuarterbackFantasyPointsAllowed($data['DraftKingsQuarterbackFantasyPointsAllowed']);
        }
        if (\array_key_exists('DraftKingsRunningbackFantasyPointsAllowed', $data)) {
            $object->setDraftKingsRunningbackFantasyPointsAllowed($data['DraftKingsRunningbackFantasyPointsAllowed']);
        }
        if (\array_key_exists('DraftKingsWideReceiverFantasyPointsAllowed', $data)) {
            $object->setDraftKingsWideReceiverFantasyPointsAllowed($data['DraftKingsWideReceiverFantasyPointsAllowed']);
        }
        if (\array_key_exists('DraftKingsTightEndFantasyPointsAllowed', $data)) {
            $object->setDraftKingsTightEndFantasyPointsAllowed($data['DraftKingsTightEndFantasyPointsAllowed']);
        }
        if (\array_key_exists('DraftKingsKickerFantasyPointsAllowed', $data)) {
            $object->setDraftKingsKickerFantasyPointsAllowed($data['DraftKingsKickerFantasyPointsAllowed']);
        }
        if (\array_key_exists('YahooFantasyPointsAllowed', $data)) {
            $object->setYahooFantasyPointsAllowed($data['YahooFantasyPointsAllowed']);
        }
        if (\array_key_exists('YahooQuarterbackFantasyPointsAllowed', $data)) {
            $object->setYahooQuarterbackFantasyPointsAllowed($data['YahooQuarterbackFantasyPointsAllowed']);
        }
        if (\array_key_exists('YahooRunningbackFantasyPointsAllowed', $data)) {
            $object->setYahooRunningbackFantasyPointsAllowed($data['YahooRunningbackFantasyPointsAllowed']);
        }
        if (\array_key_exists('YahooWideReceiverFantasyPointsAllowed', $data)) {
            $object->setYahooWideReceiverFantasyPointsAllowed($data['YahooWideReceiverFantasyPointsAllowed']);
        }
        if (\array_key_exists('YahooTightEndFantasyPointsAllowed', $data)) {
            $object->setYahooTightEndFantasyPointsAllowed($data['YahooTightEndFantasyPointsAllowed']);
        }
        if (\array_key_exists('YahooKickerFantasyPointsAllowed', $data)) {
            $object->setYahooKickerFantasyPointsAllowed($data['YahooKickerFantasyPointsAllowed']);
        }
        if (\array_key_exists('FantasyPointsFantasyDraft', $data)) {
            $object->setFantasyPointsFantasyDraft($data['FantasyPointsFantasyDraft']);
        }
        if (\array_key_exists('FantasyDraftFantasyPointsAllowed', $data)) {
            $object->setFantasyDraftFantasyPointsAllowed($data['FantasyDraftFantasyPointsAllowed']);
        }
        if (\array_key_exists('FantasyDraftQuarterbackFantasyPointsAllowed', $data)) {
            $object->setFantasyDraftQuarterbackFantasyPointsAllowed($data['FantasyDraftQuarterbackFantasyPointsAllowed']);
        }
        if (\array_key_exists('FantasyDraftRunningbackFantasyPointsAllowed', $data)) {
            $object->setFantasyDraftRunningbackFantasyPointsAllowed($data['FantasyDraftRunningbackFantasyPointsAllowed']);
        }
        if (\array_key_exists('FantasyDraftWideReceiverFantasyPointsAllowed', $data)) {
            $object->setFantasyDraftWideReceiverFantasyPointsAllowed($data['FantasyDraftWideReceiverFantasyPointsAllowed']);
        }
        if (\array_key_exists('FantasyDraftTightEndFantasyPointsAllowed', $data)) {
            $object->setFantasyDraftTightEndFantasyPointsAllowed($data['FantasyDraftTightEndFantasyPointsAllowed']);
        }
        if (\array_key_exists('FantasyDraftKickerFantasyPointsAllowed', $data)) {
            $object->setFantasyDraftKickerFantasyPointsAllowed($data['FantasyDraftKickerFantasyPointsAllowed']);
        }
        if (\array_key_exists('ScoringDetails', $data)) {
            $values = array();
            foreach ($data['ScoringDetails'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\NFL\\Model\\ScoringDetail', 'json', $context);
            }
            $object->setScoringDetails($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGameKey()) {
            $data['GameKey'] = $object->getGameKey();
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
        if (null !== $object->getDate()) {
            $data['Date'] = $object->getDate();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getOpponent()) {
            $data['Opponent'] = $object->getOpponent();
        }
        if (null !== $object->getPointsAllowed()) {
            $data['PointsAllowed'] = $object->getPointsAllowed();
        }
        if (null !== $object->getTouchdownsScored()) {
            $data['TouchdownsScored'] = $object->getTouchdownsScored();
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
        if (null !== $object->getSafeties()) {
            $data['Safeties'] = $object->getSafeties();
        }
        if (null !== $object->getPuntReturns()) {
            $data['PuntReturns'] = $object->getPuntReturns();
        }
        if (null !== $object->getPuntReturnYards()) {
            $data['PuntReturnYards'] = $object->getPuntReturnYards();
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
        if (null !== $object->getKickReturnTouchdowns()) {
            $data['KickReturnTouchdowns'] = $object->getKickReturnTouchdowns();
        }
        if (null !== $object->getKickReturnLong()) {
            $data['KickReturnLong'] = $object->getKickReturnLong();
        }
        if (null !== $object->getBlockedKickReturnTouchdowns()) {
            $data['BlockedKickReturnTouchdowns'] = $object->getBlockedKickReturnTouchdowns();
        }
        if (null !== $object->getFieldGoalReturnTouchdowns()) {
            $data['FieldGoalReturnTouchdowns'] = $object->getFieldGoalReturnTouchdowns();
        }
        if (null !== $object->getFantasyPointsAllowed()) {
            $data['FantasyPointsAllowed'] = $object->getFantasyPointsAllowed();
        }
        if (null !== $object->getQuarterbackFantasyPointsAllowed()) {
            $data['QuarterbackFantasyPointsAllowed'] = $object->getQuarterbackFantasyPointsAllowed();
        }
        if (null !== $object->getRunningbackFantasyPointsAllowed()) {
            $data['RunningbackFantasyPointsAllowed'] = $object->getRunningbackFantasyPointsAllowed();
        }
        if (null !== $object->getWideReceiverFantasyPointsAllowed()) {
            $data['WideReceiverFantasyPointsAllowed'] = $object->getWideReceiverFantasyPointsAllowed();
        }
        if (null !== $object->getTightEndFantasyPointsAllowed()) {
            $data['TightEndFantasyPointsAllowed'] = $object->getTightEndFantasyPointsAllowed();
        }
        if (null !== $object->getKickerFantasyPointsAllowed()) {
            $data['KickerFantasyPointsAllowed'] = $object->getKickerFantasyPointsAllowed();
        }
        if (null !== $object->getBlockedKickReturnYards()) {
            $data['BlockedKickReturnYards'] = $object->getBlockedKickReturnYards();
        }
        if (null !== $object->getFieldGoalReturnYards()) {
            $data['FieldGoalReturnYards'] = $object->getFieldGoalReturnYards();
        }
        if (null !== $object->getQuarterbackHits()) {
            $data['QuarterbackHits'] = $object->getQuarterbackHits();
        }
        if (null !== $object->getTacklesForLoss()) {
            $data['TacklesForLoss'] = $object->getTacklesForLoss();
        }
        if (null !== $object->getDefensiveTouchdowns()) {
            $data['DefensiveTouchdowns'] = $object->getDefensiveTouchdowns();
        }
        if (null !== $object->getSpecialTeamsTouchdowns()) {
            $data['SpecialTeamsTouchdowns'] = $object->getSpecialTeamsTouchdowns();
        }
        if (null !== $object->getIsGameOver()) {
            $data['IsGameOver'] = $object->getIsGameOver();
        }
        if (null !== $object->getFantasyPoints()) {
            $data['FantasyPoints'] = $object->getFantasyPoints();
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
        if (null !== $object->getThirdDownAttempts()) {
            $data['ThirdDownAttempts'] = $object->getThirdDownAttempts();
        }
        if (null !== $object->getThirdDownConversions()) {
            $data['ThirdDownConversions'] = $object->getThirdDownConversions();
        }
        if (null !== $object->getFourthDownAttempts()) {
            $data['FourthDownAttempts'] = $object->getFourthDownAttempts();
        }
        if (null !== $object->getFourthDownConversions()) {
            $data['FourthDownConversions'] = $object->getFourthDownConversions();
        }
        if (null !== $object->getPointsAllowedByDefenseSpecialTeams()) {
            $data['PointsAllowedByDefenseSpecialTeams'] = $object->getPointsAllowedByDefenseSpecialTeams();
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
        if (null !== $object->getVictivSalary()) {
            $data['VictivSalary'] = $object->getVictivSalary();
        }
        if (null !== $object->getTwoPointConversionReturns()) {
            $data['TwoPointConversionReturns'] = $object->getTwoPointConversionReturns();
        }
        if (null !== $object->getFantasyPointsFanDuel()) {
            $data['FantasyPointsFanDuel'] = $object->getFantasyPointsFanDuel();
        }
        if (null !== $object->getFantasyPointsDraftKings()) {
            $data['FantasyPointsDraftKings'] = $object->getFantasyPointsDraftKings();
        }
        if (null !== $object->getOffensiveYardsAllowed()) {
            $data['OffensiveYardsAllowed'] = $object->getOffensiveYardsAllowed();
        }
        if (null !== $object->getYahooSalary()) {
            $data['YahooSalary'] = $object->getYahooSalary();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getFantasyPointsYahoo()) {
            $data['FantasyPointsYahoo'] = $object->getFantasyPointsYahoo();
        }
        if (null !== $object->getHomeOrAway()) {
            $data['HomeOrAway'] = $object->getHomeOrAway();
        }
        if (null !== $object->getOpponentRank()) {
            $data['OpponentRank'] = $object->getOpponentRank();
        }
        if (null !== $object->getOpponentPositionRank()) {
            $data['OpponentPositionRank'] = $object->getOpponentPositionRank();
        }
        if (null !== $object->getFantasyDraftSalary()) {
            $data['FantasyDraftSalary'] = $object->getFantasyDraftSalary();
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
        if (null !== $object->getDraftKingsPosition()) {
            $data['DraftKingsPosition'] = $object->getDraftKingsPosition();
        }
        if (null !== $object->getFanDuelPosition()) {
            $data['FanDuelPosition'] = $object->getFanDuelPosition();
        }
        if (null !== $object->getFantasyDraftPosition()) {
            $data['FantasyDraftPosition'] = $object->getFantasyDraftPosition();
        }
        if (null !== $object->getYahooPosition()) {
            $data['YahooPosition'] = $object->getYahooPosition();
        }
        if (null !== $object->getFantasyDefenseID()) {
            $data['FantasyDefenseID'] = $object->getFantasyDefenseID();
        }
        if (null !== $object->getScoreID()) {
            $data['ScoreID'] = $object->getScoreID();
        }
        if (null !== $object->getFanDuelFantasyPointsAllowed()) {
            $data['FanDuelFantasyPointsAllowed'] = $object->getFanDuelFantasyPointsAllowed();
        }
        if (null !== $object->getFanDuelQuarterbackFantasyPointsAllowed()) {
            $data['FanDuelQuarterbackFantasyPointsAllowed'] = $object->getFanDuelQuarterbackFantasyPointsAllowed();
        }
        if (null !== $object->getFanDuelRunningbackFantasyPointsAllowed()) {
            $data['FanDuelRunningbackFantasyPointsAllowed'] = $object->getFanDuelRunningbackFantasyPointsAllowed();
        }
        if (null !== $object->getFanDuelWideReceiverFantasyPointsAllowed()) {
            $data['FanDuelWideReceiverFantasyPointsAllowed'] = $object->getFanDuelWideReceiverFantasyPointsAllowed();
        }
        if (null !== $object->getFanDuelTightEndFantasyPointsAllowed()) {
            $data['FanDuelTightEndFantasyPointsAllowed'] = $object->getFanDuelTightEndFantasyPointsAllowed();
        }
        if (null !== $object->getFanDuelKickerFantasyPointsAllowed()) {
            $data['FanDuelKickerFantasyPointsAllowed'] = $object->getFanDuelKickerFantasyPointsAllowed();
        }
        if (null !== $object->getDraftKingsFantasyPointsAllowed()) {
            $data['DraftKingsFantasyPointsAllowed'] = $object->getDraftKingsFantasyPointsAllowed();
        }
        if (null !== $object->getDraftKingsQuarterbackFantasyPointsAllowed()) {
            $data['DraftKingsQuarterbackFantasyPointsAllowed'] = $object->getDraftKingsQuarterbackFantasyPointsAllowed();
        }
        if (null !== $object->getDraftKingsRunningbackFantasyPointsAllowed()) {
            $data['DraftKingsRunningbackFantasyPointsAllowed'] = $object->getDraftKingsRunningbackFantasyPointsAllowed();
        }
        if (null !== $object->getDraftKingsWideReceiverFantasyPointsAllowed()) {
            $data['DraftKingsWideReceiverFantasyPointsAllowed'] = $object->getDraftKingsWideReceiverFantasyPointsAllowed();
        }
        if (null !== $object->getDraftKingsTightEndFantasyPointsAllowed()) {
            $data['DraftKingsTightEndFantasyPointsAllowed'] = $object->getDraftKingsTightEndFantasyPointsAllowed();
        }
        if (null !== $object->getDraftKingsKickerFantasyPointsAllowed()) {
            $data['DraftKingsKickerFantasyPointsAllowed'] = $object->getDraftKingsKickerFantasyPointsAllowed();
        }
        if (null !== $object->getYahooFantasyPointsAllowed()) {
            $data['YahooFantasyPointsAllowed'] = $object->getYahooFantasyPointsAllowed();
        }
        if (null !== $object->getYahooQuarterbackFantasyPointsAllowed()) {
            $data['YahooQuarterbackFantasyPointsAllowed'] = $object->getYahooQuarterbackFantasyPointsAllowed();
        }
        if (null !== $object->getYahooRunningbackFantasyPointsAllowed()) {
            $data['YahooRunningbackFantasyPointsAllowed'] = $object->getYahooRunningbackFantasyPointsAllowed();
        }
        if (null !== $object->getYahooWideReceiverFantasyPointsAllowed()) {
            $data['YahooWideReceiverFantasyPointsAllowed'] = $object->getYahooWideReceiverFantasyPointsAllowed();
        }
        if (null !== $object->getYahooTightEndFantasyPointsAllowed()) {
            $data['YahooTightEndFantasyPointsAllowed'] = $object->getYahooTightEndFantasyPointsAllowed();
        }
        if (null !== $object->getYahooKickerFantasyPointsAllowed()) {
            $data['YahooKickerFantasyPointsAllowed'] = $object->getYahooKickerFantasyPointsAllowed();
        }
        if (null !== $object->getFantasyPointsFantasyDraft()) {
            $data['FantasyPointsFantasyDraft'] = $object->getFantasyPointsFantasyDraft();
        }
        if (null !== $object->getFantasyDraftFantasyPointsAllowed()) {
            $data['FantasyDraftFantasyPointsAllowed'] = $object->getFantasyDraftFantasyPointsAllowed();
        }
        if (null !== $object->getFantasyDraftQuarterbackFantasyPointsAllowed()) {
            $data['FantasyDraftQuarterbackFantasyPointsAllowed'] = $object->getFantasyDraftQuarterbackFantasyPointsAllowed();
        }
        if (null !== $object->getFantasyDraftRunningbackFantasyPointsAllowed()) {
            $data['FantasyDraftRunningbackFantasyPointsAllowed'] = $object->getFantasyDraftRunningbackFantasyPointsAllowed();
        }
        if (null !== $object->getFantasyDraftWideReceiverFantasyPointsAllowed()) {
            $data['FantasyDraftWideReceiverFantasyPointsAllowed'] = $object->getFantasyDraftWideReceiverFantasyPointsAllowed();
        }
        if (null !== $object->getFantasyDraftTightEndFantasyPointsAllowed()) {
            $data['FantasyDraftTightEndFantasyPointsAllowed'] = $object->getFantasyDraftTightEndFantasyPointsAllowed();
        }
        if (null !== $object->getFantasyDraftKickerFantasyPointsAllowed()) {
            $data['FantasyDraftKickerFantasyPointsAllowed'] = $object->getFantasyDraftKickerFantasyPointsAllowed();
        }
        if (null !== $object->getScoringDetails()) {
            $values = array();
            foreach ($object->getScoringDetails() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['ScoringDetails'] = $values;
        }
        return $data;
    }
}