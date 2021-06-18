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
class FantasyDefenseSeasonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\FantasyDefenseSeason';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\FantasyDefenseSeason';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\FantasyDefenseSeason();
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
        if (\array_key_exists('FantasyPointsAllowed', $data) && $data['FantasyPointsAllowed'] !== null) {
            $object->setFantasyPointsAllowed($data['FantasyPointsAllowed']);
        }
        elseif (\array_key_exists('FantasyPointsAllowed', $data) && $data['FantasyPointsAllowed'] === null) {
            $object->setFantasyPointsAllowed(null);
        }
        if (\array_key_exists('QuarterbackFantasyPointsAllowed', $data) && $data['QuarterbackFantasyPointsAllowed'] !== null) {
            $object->setQuarterbackFantasyPointsAllowed($data['QuarterbackFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('QuarterbackFantasyPointsAllowed', $data) && $data['QuarterbackFantasyPointsAllowed'] === null) {
            $object->setQuarterbackFantasyPointsAllowed(null);
        }
        if (\array_key_exists('RunningbackFantasyPointsAllowed', $data) && $data['RunningbackFantasyPointsAllowed'] !== null) {
            $object->setRunningbackFantasyPointsAllowed($data['RunningbackFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('RunningbackFantasyPointsAllowed', $data) && $data['RunningbackFantasyPointsAllowed'] === null) {
            $object->setRunningbackFantasyPointsAllowed(null);
        }
        if (\array_key_exists('WideReceiverFantasyPointsAllowed', $data) && $data['WideReceiverFantasyPointsAllowed'] !== null) {
            $object->setWideReceiverFantasyPointsAllowed($data['WideReceiverFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('WideReceiverFantasyPointsAllowed', $data) && $data['WideReceiverFantasyPointsAllowed'] === null) {
            $object->setWideReceiverFantasyPointsAllowed(null);
        }
        if (\array_key_exists('TightEndFantasyPointsAllowed', $data) && $data['TightEndFantasyPointsAllowed'] !== null) {
            $object->setTightEndFantasyPointsAllowed($data['TightEndFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('TightEndFantasyPointsAllowed', $data) && $data['TightEndFantasyPointsAllowed'] === null) {
            $object->setTightEndFantasyPointsAllowed(null);
        }
        if (\array_key_exists('KickerFantasyPointsAllowed', $data) && $data['KickerFantasyPointsAllowed'] !== null) {
            $object->setKickerFantasyPointsAllowed($data['KickerFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('KickerFantasyPointsAllowed', $data) && $data['KickerFantasyPointsAllowed'] === null) {
            $object->setKickerFantasyPointsAllowed(null);
        }
        if (\array_key_exists('Games', $data) && $data['Games'] !== null) {
            $object->setGames($data['Games']);
        }
        elseif (\array_key_exists('Games', $data) && $data['Games'] === null) {
            $object->setGames(null);
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
        if (\array_key_exists('DefensiveTouchdowns', $data) && $data['DefensiveTouchdowns'] !== null) {
            $object->setDefensiveTouchdowns($data['DefensiveTouchdowns']);
        }
        elseif (\array_key_exists('DefensiveTouchdowns', $data) && $data['DefensiveTouchdowns'] === null) {
            $object->setDefensiveTouchdowns(null);
        }
        if (\array_key_exists('SpecialTeamsTouchdowns', $data) && $data['SpecialTeamsTouchdowns'] !== null) {
            $object->setSpecialTeamsTouchdowns($data['SpecialTeamsTouchdowns']);
        }
        elseif (\array_key_exists('SpecialTeamsTouchdowns', $data) && $data['SpecialTeamsTouchdowns'] === null) {
            $object->setSpecialTeamsTouchdowns(null);
        }
        if (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] !== null) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        elseif (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] === null) {
            $object->setFantasyPoints(null);
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
        if (\array_key_exists('PointsAllowedByDefenseSpecialTeams', $data) && $data['PointsAllowedByDefenseSpecialTeams'] !== null) {
            $object->setPointsAllowedByDefenseSpecialTeams($data['PointsAllowedByDefenseSpecialTeams']);
        }
        elseif (\array_key_exists('PointsAllowedByDefenseSpecialTeams', $data) && $data['PointsAllowedByDefenseSpecialTeams'] === null) {
            $object->setPointsAllowedByDefenseSpecialTeams(null);
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
        if (\array_key_exists('FantasyPointsDraftKings', $data) && $data['FantasyPointsDraftKings'] !== null) {
            $object->setFantasyPointsDraftKings($data['FantasyPointsDraftKings']);
        }
        elseif (\array_key_exists('FantasyPointsDraftKings', $data) && $data['FantasyPointsDraftKings'] === null) {
            $object->setFantasyPointsDraftKings(null);
        }
        if (\array_key_exists('OffensiveYardsAllowed', $data) && $data['OffensiveYardsAllowed'] !== null) {
            $object->setOffensiveYardsAllowed($data['OffensiveYardsAllowed']);
        }
        elseif (\array_key_exists('OffensiveYardsAllowed', $data) && $data['OffensiveYardsAllowed'] === null) {
            $object->setOffensiveYardsAllowed(null);
        }
        if (\array_key_exists('PlayerID', $data) && $data['PlayerID'] !== null) {
            $object->setPlayerID($data['PlayerID']);
        }
        elseif (\array_key_exists('PlayerID', $data) && $data['PlayerID'] === null) {
            $object->setPlayerID(null);
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
        if (\array_key_exists('FanDuelFantasyPointsAllowed', $data) && $data['FanDuelFantasyPointsAllowed'] !== null) {
            $object->setFanDuelFantasyPointsAllowed($data['FanDuelFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('FanDuelFantasyPointsAllowed', $data) && $data['FanDuelFantasyPointsAllowed'] === null) {
            $object->setFanDuelFantasyPointsAllowed(null);
        }
        if (\array_key_exists('FanDuelQuarterbackFantasyPointsAllowed', $data) && $data['FanDuelQuarterbackFantasyPointsAllowed'] !== null) {
            $object->setFanDuelQuarterbackFantasyPointsAllowed($data['FanDuelQuarterbackFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('FanDuelQuarterbackFantasyPointsAllowed', $data) && $data['FanDuelQuarterbackFantasyPointsAllowed'] === null) {
            $object->setFanDuelQuarterbackFantasyPointsAllowed(null);
        }
        if (\array_key_exists('FanDuelRunningbackFantasyPointsAllowed', $data) && $data['FanDuelRunningbackFantasyPointsAllowed'] !== null) {
            $object->setFanDuelRunningbackFantasyPointsAllowed($data['FanDuelRunningbackFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('FanDuelRunningbackFantasyPointsAllowed', $data) && $data['FanDuelRunningbackFantasyPointsAllowed'] === null) {
            $object->setFanDuelRunningbackFantasyPointsAllowed(null);
        }
        if (\array_key_exists('FanDuelWideReceiverFantasyPointsAllowed', $data) && $data['FanDuelWideReceiverFantasyPointsAllowed'] !== null) {
            $object->setFanDuelWideReceiverFantasyPointsAllowed($data['FanDuelWideReceiverFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('FanDuelWideReceiverFantasyPointsAllowed', $data) && $data['FanDuelWideReceiverFantasyPointsAllowed'] === null) {
            $object->setFanDuelWideReceiverFantasyPointsAllowed(null);
        }
        if (\array_key_exists('FanDuelTightEndFantasyPointsAllowed', $data) && $data['FanDuelTightEndFantasyPointsAllowed'] !== null) {
            $object->setFanDuelTightEndFantasyPointsAllowed($data['FanDuelTightEndFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('FanDuelTightEndFantasyPointsAllowed', $data) && $data['FanDuelTightEndFantasyPointsAllowed'] === null) {
            $object->setFanDuelTightEndFantasyPointsAllowed(null);
        }
        if (\array_key_exists('FanDuelKickerFantasyPointsAllowed', $data) && $data['FanDuelKickerFantasyPointsAllowed'] !== null) {
            $object->setFanDuelKickerFantasyPointsAllowed($data['FanDuelKickerFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('FanDuelKickerFantasyPointsAllowed', $data) && $data['FanDuelKickerFantasyPointsAllowed'] === null) {
            $object->setFanDuelKickerFantasyPointsAllowed(null);
        }
        if (\array_key_exists('DraftKingsFantasyPointsAllowed', $data) && $data['DraftKingsFantasyPointsAllowed'] !== null) {
            $object->setDraftKingsFantasyPointsAllowed($data['DraftKingsFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('DraftKingsFantasyPointsAllowed', $data) && $data['DraftKingsFantasyPointsAllowed'] === null) {
            $object->setDraftKingsFantasyPointsAllowed(null);
        }
        if (\array_key_exists('DraftKingsQuarterbackFantasyPointsAllowed', $data) && $data['DraftKingsQuarterbackFantasyPointsAllowed'] !== null) {
            $object->setDraftKingsQuarterbackFantasyPointsAllowed($data['DraftKingsQuarterbackFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('DraftKingsQuarterbackFantasyPointsAllowed', $data) && $data['DraftKingsQuarterbackFantasyPointsAllowed'] === null) {
            $object->setDraftKingsQuarterbackFantasyPointsAllowed(null);
        }
        if (\array_key_exists('DraftKingsRunningbackFantasyPointsAllowed', $data) && $data['DraftKingsRunningbackFantasyPointsAllowed'] !== null) {
            $object->setDraftKingsRunningbackFantasyPointsAllowed($data['DraftKingsRunningbackFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('DraftKingsRunningbackFantasyPointsAllowed', $data) && $data['DraftKingsRunningbackFantasyPointsAllowed'] === null) {
            $object->setDraftKingsRunningbackFantasyPointsAllowed(null);
        }
        if (\array_key_exists('DraftKingsWideReceiverFantasyPointsAllowed', $data) && $data['DraftKingsWideReceiverFantasyPointsAllowed'] !== null) {
            $object->setDraftKingsWideReceiverFantasyPointsAllowed($data['DraftKingsWideReceiverFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('DraftKingsWideReceiverFantasyPointsAllowed', $data) && $data['DraftKingsWideReceiverFantasyPointsAllowed'] === null) {
            $object->setDraftKingsWideReceiverFantasyPointsAllowed(null);
        }
        if (\array_key_exists('DraftKingsTightEndFantasyPointsAllowed', $data) && $data['DraftKingsTightEndFantasyPointsAllowed'] !== null) {
            $object->setDraftKingsTightEndFantasyPointsAllowed($data['DraftKingsTightEndFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('DraftKingsTightEndFantasyPointsAllowed', $data) && $data['DraftKingsTightEndFantasyPointsAllowed'] === null) {
            $object->setDraftKingsTightEndFantasyPointsAllowed(null);
        }
        if (\array_key_exists('DraftKingsKickerFantasyPointsAllowed', $data) && $data['DraftKingsKickerFantasyPointsAllowed'] !== null) {
            $object->setDraftKingsKickerFantasyPointsAllowed($data['DraftKingsKickerFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('DraftKingsKickerFantasyPointsAllowed', $data) && $data['DraftKingsKickerFantasyPointsAllowed'] === null) {
            $object->setDraftKingsKickerFantasyPointsAllowed(null);
        }
        if (\array_key_exists('YahooFantasyPointsAllowed', $data) && $data['YahooFantasyPointsAllowed'] !== null) {
            $object->setYahooFantasyPointsAllowed($data['YahooFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('YahooFantasyPointsAllowed', $data) && $data['YahooFantasyPointsAllowed'] === null) {
            $object->setYahooFantasyPointsAllowed(null);
        }
        if (\array_key_exists('YahooQuarterbackFantasyPointsAllowed', $data) && $data['YahooQuarterbackFantasyPointsAllowed'] !== null) {
            $object->setYahooQuarterbackFantasyPointsAllowed($data['YahooQuarterbackFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('YahooQuarterbackFantasyPointsAllowed', $data) && $data['YahooQuarterbackFantasyPointsAllowed'] === null) {
            $object->setYahooQuarterbackFantasyPointsAllowed(null);
        }
        if (\array_key_exists('YahooRunningbackFantasyPointsAllowed', $data) && $data['YahooRunningbackFantasyPointsAllowed'] !== null) {
            $object->setYahooRunningbackFantasyPointsAllowed($data['YahooRunningbackFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('YahooRunningbackFantasyPointsAllowed', $data) && $data['YahooRunningbackFantasyPointsAllowed'] === null) {
            $object->setYahooRunningbackFantasyPointsAllowed(null);
        }
        if (\array_key_exists('YahooWideReceiverFantasyPointsAllowed', $data) && $data['YahooWideReceiverFantasyPointsAllowed'] !== null) {
            $object->setYahooWideReceiverFantasyPointsAllowed($data['YahooWideReceiverFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('YahooWideReceiverFantasyPointsAllowed', $data) && $data['YahooWideReceiverFantasyPointsAllowed'] === null) {
            $object->setYahooWideReceiverFantasyPointsAllowed(null);
        }
        if (\array_key_exists('YahooTightEndFantasyPointsAllowed', $data) && $data['YahooTightEndFantasyPointsAllowed'] !== null) {
            $object->setYahooTightEndFantasyPointsAllowed($data['YahooTightEndFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('YahooTightEndFantasyPointsAllowed', $data) && $data['YahooTightEndFantasyPointsAllowed'] === null) {
            $object->setYahooTightEndFantasyPointsAllowed(null);
        }
        if (\array_key_exists('YahooKickerFantasyPointsAllowed', $data) && $data['YahooKickerFantasyPointsAllowed'] !== null) {
            $object->setYahooKickerFantasyPointsAllowed($data['YahooKickerFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('YahooKickerFantasyPointsAllowed', $data) && $data['YahooKickerFantasyPointsAllowed'] === null) {
            $object->setYahooKickerFantasyPointsAllowed(null);
        }
        if (\array_key_exists('FantasyPointsFantasyDraft', $data) && $data['FantasyPointsFantasyDraft'] !== null) {
            $object->setFantasyPointsFantasyDraft($data['FantasyPointsFantasyDraft']);
        }
        elseif (\array_key_exists('FantasyPointsFantasyDraft', $data) && $data['FantasyPointsFantasyDraft'] === null) {
            $object->setFantasyPointsFantasyDraft(null);
        }
        if (\array_key_exists('FantasyDraftFantasyPointsAllowed', $data) && $data['FantasyDraftFantasyPointsAllowed'] !== null) {
            $object->setFantasyDraftFantasyPointsAllowed($data['FantasyDraftFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('FantasyDraftFantasyPointsAllowed', $data) && $data['FantasyDraftFantasyPointsAllowed'] === null) {
            $object->setFantasyDraftFantasyPointsAllowed(null);
        }
        if (\array_key_exists('FantasyDraftQuarterbackFantasyPointsAllowed', $data) && $data['FantasyDraftQuarterbackFantasyPointsAllowed'] !== null) {
            $object->setFantasyDraftQuarterbackFantasyPointsAllowed($data['FantasyDraftQuarterbackFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('FantasyDraftQuarterbackFantasyPointsAllowed', $data) && $data['FantasyDraftQuarterbackFantasyPointsAllowed'] === null) {
            $object->setFantasyDraftQuarterbackFantasyPointsAllowed(null);
        }
        if (\array_key_exists('FantasyDraftRunningbackFantasyPointsAllowed', $data) && $data['FantasyDraftRunningbackFantasyPointsAllowed'] !== null) {
            $object->setFantasyDraftRunningbackFantasyPointsAllowed($data['FantasyDraftRunningbackFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('FantasyDraftRunningbackFantasyPointsAllowed', $data) && $data['FantasyDraftRunningbackFantasyPointsAllowed'] === null) {
            $object->setFantasyDraftRunningbackFantasyPointsAllowed(null);
        }
        if (\array_key_exists('FantasyDraftWideReceiverFantasyPointsAllowed', $data) && $data['FantasyDraftWideReceiverFantasyPointsAllowed'] !== null) {
            $object->setFantasyDraftWideReceiverFantasyPointsAllowed($data['FantasyDraftWideReceiverFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('FantasyDraftWideReceiverFantasyPointsAllowed', $data) && $data['FantasyDraftWideReceiverFantasyPointsAllowed'] === null) {
            $object->setFantasyDraftWideReceiverFantasyPointsAllowed(null);
        }
        if (\array_key_exists('FantasyDraftTightEndFantasyPointsAllowed', $data) && $data['FantasyDraftTightEndFantasyPointsAllowed'] !== null) {
            $object->setFantasyDraftTightEndFantasyPointsAllowed($data['FantasyDraftTightEndFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('FantasyDraftTightEndFantasyPointsAllowed', $data) && $data['FantasyDraftTightEndFantasyPointsAllowed'] === null) {
            $object->setFantasyDraftTightEndFantasyPointsAllowed(null);
        }
        if (\array_key_exists('FantasyDraftKickerFantasyPointsAllowed', $data) && $data['FantasyDraftKickerFantasyPointsAllowed'] !== null) {
            $object->setFantasyDraftKickerFantasyPointsAllowed($data['FantasyDraftKickerFantasyPointsAllowed']);
        }
        elseif (\array_key_exists('FantasyDraftKickerFantasyPointsAllowed', $data) && $data['FantasyDraftKickerFantasyPointsAllowed'] === null) {
            $object->setFantasyDraftKickerFantasyPointsAllowed(null);
        }
        if (\array_key_exists('ScoringDetails', $data)) {
            $values = array();
            foreach ($data['ScoringDetails'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\NFL\\Model\\ScoringDetail', 'json', $context);
            }
            $object->setScoringDetails($values);
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
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
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
        if (null !== $object->getGames()) {
            $data['Games'] = $object->getGames();
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
        if (null !== $object->getFantasyPoints()) {
            $data['FantasyPoints'] = $object->getFantasyPoints();
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
        if (null !== $object->getFantasyPointsDraftKings()) {
            $data['FantasyPointsDraftKings'] = $object->getFantasyPointsDraftKings();
        }
        if (null !== $object->getOffensiveYardsAllowed()) {
            $data['OffensiveYardsAllowed'] = $object->getOffensiveYardsAllowed();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
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
        if (null !== $object->getAverageDraftPositionDynasty()) {
            $data['AverageDraftPositionDynasty'] = $object->getAverageDraftPositionDynasty();
        }
        if (null !== $object->getAverageDraftPosition2QB()) {
            $data['AverageDraftPosition2QB'] = $object->getAverageDraftPosition2QB();
        }
        return $data;
    }
}