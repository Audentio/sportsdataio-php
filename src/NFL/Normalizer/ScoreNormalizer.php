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
class ScoreNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\Score';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\Score';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\Score();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GameKey', $data) && $data['GameKey'] !== null) {
            $object->setGameKey($data['GameKey']);
        }
        elseif (\array_key_exists('GameKey', $data) && $data['GameKey'] === null) {
            $object->setGameKey(null);
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
        if (\array_key_exists('Date', $data) && $data['Date'] !== null) {
            $object->setDate($data['Date']);
        }
        elseif (\array_key_exists('Date', $data) && $data['Date'] === null) {
            $object->setDate(null);
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
        if (\array_key_exists('AwayScore', $data) && $data['AwayScore'] !== null) {
            $object->setAwayScore($data['AwayScore']);
        }
        elseif (\array_key_exists('AwayScore', $data) && $data['AwayScore'] === null) {
            $object->setAwayScore(null);
        }
        if (\array_key_exists('HomeScore', $data) && $data['HomeScore'] !== null) {
            $object->setHomeScore($data['HomeScore']);
        }
        elseif (\array_key_exists('HomeScore', $data) && $data['HomeScore'] === null) {
            $object->setHomeScore(null);
        }
        if (\array_key_exists('Channel', $data) && $data['Channel'] !== null) {
            $object->setChannel($data['Channel']);
        }
        elseif (\array_key_exists('Channel', $data) && $data['Channel'] === null) {
            $object->setChannel(null);
        }
        if (\array_key_exists('PointSpread', $data) && $data['PointSpread'] !== null) {
            $object->setPointSpread($data['PointSpread']);
        }
        elseif (\array_key_exists('PointSpread', $data) && $data['PointSpread'] === null) {
            $object->setPointSpread(null);
        }
        if (\array_key_exists('OverUnder', $data) && $data['OverUnder'] !== null) {
            $object->setOverUnder($data['OverUnder']);
        }
        elseif (\array_key_exists('OverUnder', $data) && $data['OverUnder'] === null) {
            $object->setOverUnder(null);
        }
        if (\array_key_exists('Quarter', $data) && $data['Quarter'] !== null) {
            $object->setQuarter($data['Quarter']);
        }
        elseif (\array_key_exists('Quarter', $data) && $data['Quarter'] === null) {
            $object->setQuarter(null);
        }
        if (\array_key_exists('TimeRemaining', $data) && $data['TimeRemaining'] !== null) {
            $object->setTimeRemaining($data['TimeRemaining']);
        }
        elseif (\array_key_exists('TimeRemaining', $data) && $data['TimeRemaining'] === null) {
            $object->setTimeRemaining(null);
        }
        if (\array_key_exists('Possession', $data) && $data['Possession'] !== null) {
            $object->setPossession($data['Possession']);
        }
        elseif (\array_key_exists('Possession', $data) && $data['Possession'] === null) {
            $object->setPossession(null);
        }
        if (\array_key_exists('Down', $data) && $data['Down'] !== null) {
            $object->setDown($data['Down']);
        }
        elseif (\array_key_exists('Down', $data) && $data['Down'] === null) {
            $object->setDown(null);
        }
        if (\array_key_exists('Distance', $data) && $data['Distance'] !== null) {
            $object->setDistance($data['Distance']);
        }
        elseif (\array_key_exists('Distance', $data) && $data['Distance'] === null) {
            $object->setDistance(null);
        }
        if (\array_key_exists('YardLine', $data) && $data['YardLine'] !== null) {
            $object->setYardLine($data['YardLine']);
        }
        elseif (\array_key_exists('YardLine', $data) && $data['YardLine'] === null) {
            $object->setYardLine(null);
        }
        if (\array_key_exists('YardLineTerritory', $data) && $data['YardLineTerritory'] !== null) {
            $object->setYardLineTerritory($data['YardLineTerritory']);
        }
        elseif (\array_key_exists('YardLineTerritory', $data) && $data['YardLineTerritory'] === null) {
            $object->setYardLineTerritory(null);
        }
        if (\array_key_exists('RedZone', $data) && $data['RedZone'] !== null) {
            $object->setRedZone($data['RedZone']);
        }
        elseif (\array_key_exists('RedZone', $data) && $data['RedZone'] === null) {
            $object->setRedZone(null);
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
        if (\array_key_exists('HasStarted', $data)) {
            $object->setHasStarted($data['HasStarted']);
        }
        if (\array_key_exists('IsInProgress', $data)) {
            $object->setIsInProgress($data['IsInProgress']);
        }
        if (\array_key_exists('IsOver', $data)) {
            $object->setIsOver($data['IsOver']);
        }
        if (\array_key_exists('Has1stQuarterStarted', $data)) {
            $object->setHas1stQuarterStarted($data['Has1stQuarterStarted']);
        }
        if (\array_key_exists('Has2ndQuarterStarted', $data)) {
            $object->setHas2ndQuarterStarted($data['Has2ndQuarterStarted']);
        }
        if (\array_key_exists('Has3rdQuarterStarted', $data)) {
            $object->setHas3rdQuarterStarted($data['Has3rdQuarterStarted']);
        }
        if (\array_key_exists('Has4thQuarterStarted', $data)) {
            $object->setHas4thQuarterStarted($data['Has4thQuarterStarted']);
        }
        if (\array_key_exists('IsOvertime', $data)) {
            $object->setIsOvertime($data['IsOvertime']);
        }
        if (\array_key_exists('DownAndDistance', $data) && $data['DownAndDistance'] !== null) {
            $object->setDownAndDistance($data['DownAndDistance']);
        }
        elseif (\array_key_exists('DownAndDistance', $data) && $data['DownAndDistance'] === null) {
            $object->setDownAndDistance(null);
        }
        if (\array_key_exists('QuarterDescription', $data) && $data['QuarterDescription'] !== null) {
            $object->setQuarterDescription($data['QuarterDescription']);
        }
        elseif (\array_key_exists('QuarterDescription', $data) && $data['QuarterDescription'] === null) {
            $object->setQuarterDescription(null);
        }
        if (\array_key_exists('StadiumID', $data) && $data['StadiumID'] !== null) {
            $object->setStadiumID($data['StadiumID']);
        }
        elseif (\array_key_exists('StadiumID', $data) && $data['StadiumID'] === null) {
            $object->setStadiumID(null);
        }
        if (\array_key_exists('LastUpdated', $data) && $data['LastUpdated'] !== null) {
            $object->setLastUpdated($data['LastUpdated']);
        }
        elseif (\array_key_exists('LastUpdated', $data) && $data['LastUpdated'] === null) {
            $object->setLastUpdated(null);
        }
        if (\array_key_exists('GeoLat', $data) && $data['GeoLat'] !== null) {
            $object->setGeoLat($data['GeoLat']);
        }
        elseif (\array_key_exists('GeoLat', $data) && $data['GeoLat'] === null) {
            $object->setGeoLat(null);
        }
        if (\array_key_exists('GeoLong', $data) && $data['GeoLong'] !== null) {
            $object->setGeoLong($data['GeoLong']);
        }
        elseif (\array_key_exists('GeoLong', $data) && $data['GeoLong'] === null) {
            $object->setGeoLong(null);
        }
        if (\array_key_exists('ForecastTempLow', $data) && $data['ForecastTempLow'] !== null) {
            $object->setForecastTempLow($data['ForecastTempLow']);
        }
        elseif (\array_key_exists('ForecastTempLow', $data) && $data['ForecastTempLow'] === null) {
            $object->setForecastTempLow(null);
        }
        if (\array_key_exists('ForecastTempHigh', $data) && $data['ForecastTempHigh'] !== null) {
            $object->setForecastTempHigh($data['ForecastTempHigh']);
        }
        elseif (\array_key_exists('ForecastTempHigh', $data) && $data['ForecastTempHigh'] === null) {
            $object->setForecastTempHigh(null);
        }
        if (\array_key_exists('ForecastDescription', $data) && $data['ForecastDescription'] !== null) {
            $object->setForecastDescription($data['ForecastDescription']);
        }
        elseif (\array_key_exists('ForecastDescription', $data) && $data['ForecastDescription'] === null) {
            $object->setForecastDescription(null);
        }
        if (\array_key_exists('ForecastWindChill', $data) && $data['ForecastWindChill'] !== null) {
            $object->setForecastWindChill($data['ForecastWindChill']);
        }
        elseif (\array_key_exists('ForecastWindChill', $data) && $data['ForecastWindChill'] === null) {
            $object->setForecastWindChill(null);
        }
        if (\array_key_exists('ForecastWindSpeed', $data) && $data['ForecastWindSpeed'] !== null) {
            $object->setForecastWindSpeed($data['ForecastWindSpeed']);
        }
        elseif (\array_key_exists('ForecastWindSpeed', $data) && $data['ForecastWindSpeed'] === null) {
            $object->setForecastWindSpeed(null);
        }
        if (\array_key_exists('AwayTeamMoneyLine', $data) && $data['AwayTeamMoneyLine'] !== null) {
            $object->setAwayTeamMoneyLine($data['AwayTeamMoneyLine']);
        }
        elseif (\array_key_exists('AwayTeamMoneyLine', $data) && $data['AwayTeamMoneyLine'] === null) {
            $object->setAwayTeamMoneyLine(null);
        }
        if (\array_key_exists('HomeTeamMoneyLine', $data) && $data['HomeTeamMoneyLine'] !== null) {
            $object->setHomeTeamMoneyLine($data['HomeTeamMoneyLine']);
        }
        elseif (\array_key_exists('HomeTeamMoneyLine', $data) && $data['HomeTeamMoneyLine'] === null) {
            $object->setHomeTeamMoneyLine(null);
        }
        if (\array_key_exists('Canceled', $data) && $data['Canceled'] !== null) {
            $object->setCanceled($data['Canceled']);
        }
        elseif (\array_key_exists('Canceled', $data) && $data['Canceled'] === null) {
            $object->setCanceled(null);
        }
        if (\array_key_exists('Closed', $data) && $data['Closed'] !== null) {
            $object->setClosed($data['Closed']);
        }
        elseif (\array_key_exists('Closed', $data) && $data['Closed'] === null) {
            $object->setClosed(null);
        }
        if (\array_key_exists('LastPlay', $data) && $data['LastPlay'] !== null) {
            $object->setLastPlay($data['LastPlay']);
        }
        elseif (\array_key_exists('LastPlay', $data) && $data['LastPlay'] === null) {
            $object->setLastPlay(null);
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
        if (\array_key_exists('AwayTeamID', $data) && $data['AwayTeamID'] !== null) {
            $object->setAwayTeamID($data['AwayTeamID']);
        }
        elseif (\array_key_exists('AwayTeamID', $data) && $data['AwayTeamID'] === null) {
            $object->setAwayTeamID(null);
        }
        if (\array_key_exists('HomeTeamID', $data) && $data['HomeTeamID'] !== null) {
            $object->setHomeTeamID($data['HomeTeamID']);
        }
        elseif (\array_key_exists('HomeTeamID', $data) && $data['HomeTeamID'] === null) {
            $object->setHomeTeamID(null);
        }
        if (\array_key_exists('GlobalGameID', $data) && $data['GlobalGameID'] !== null) {
            $object->setGlobalGameID($data['GlobalGameID']);
        }
        elseif (\array_key_exists('GlobalGameID', $data) && $data['GlobalGameID'] === null) {
            $object->setGlobalGameID(null);
        }
        if (\array_key_exists('GlobalAwayTeamID', $data) && $data['GlobalAwayTeamID'] !== null) {
            $object->setGlobalAwayTeamID($data['GlobalAwayTeamID']);
        }
        elseif (\array_key_exists('GlobalAwayTeamID', $data) && $data['GlobalAwayTeamID'] === null) {
            $object->setGlobalAwayTeamID(null);
        }
        if (\array_key_exists('GlobalHomeTeamID', $data) && $data['GlobalHomeTeamID'] !== null) {
            $object->setGlobalHomeTeamID($data['GlobalHomeTeamID']);
        }
        elseif (\array_key_exists('GlobalHomeTeamID', $data) && $data['GlobalHomeTeamID'] === null) {
            $object->setGlobalHomeTeamID(null);
        }
        if (\array_key_exists('PointSpreadAwayTeamMoneyLine', $data) && $data['PointSpreadAwayTeamMoneyLine'] !== null) {
            $object->setPointSpreadAwayTeamMoneyLine($data['PointSpreadAwayTeamMoneyLine']);
        }
        elseif (\array_key_exists('PointSpreadAwayTeamMoneyLine', $data) && $data['PointSpreadAwayTeamMoneyLine'] === null) {
            $object->setPointSpreadAwayTeamMoneyLine(null);
        }
        if (\array_key_exists('PointSpreadHomeTeamMoneyLine', $data) && $data['PointSpreadHomeTeamMoneyLine'] !== null) {
            $object->setPointSpreadHomeTeamMoneyLine($data['PointSpreadHomeTeamMoneyLine']);
        }
        elseif (\array_key_exists('PointSpreadHomeTeamMoneyLine', $data) && $data['PointSpreadHomeTeamMoneyLine'] === null) {
            $object->setPointSpreadHomeTeamMoneyLine(null);
        }
        if (\array_key_exists('ScoreID', $data)) {
            $object->setScoreID($data['ScoreID']);
        }
        if (\array_key_exists('StadiumDetails', $data)) {
            $object->setStadiumDetails($this->denormalizer->denormalize($data['StadiumDetails'], 'Sportsdata\\API\\NFL\\Model\\Stadium', 'json', $context));
        }
        if (\array_key_exists('Status', $data) && $data['Status'] !== null) {
            $object->setStatus($data['Status']);
        }
        elseif (\array_key_exists('Status', $data) && $data['Status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('GameEndDateTime', $data) && $data['GameEndDateTime'] !== null) {
            $object->setGameEndDateTime($data['GameEndDateTime']);
        }
        elseif (\array_key_exists('GameEndDateTime', $data) && $data['GameEndDateTime'] === null) {
            $object->setGameEndDateTime(null);
        }
        if (\array_key_exists('HomeRotationNumber', $data) && $data['HomeRotationNumber'] !== null) {
            $object->setHomeRotationNumber($data['HomeRotationNumber']);
        }
        elseif (\array_key_exists('HomeRotationNumber', $data) && $data['HomeRotationNumber'] === null) {
            $object->setHomeRotationNumber(null);
        }
        if (\array_key_exists('AwayRotationNumber', $data) && $data['AwayRotationNumber'] !== null) {
            $object->setAwayRotationNumber($data['AwayRotationNumber']);
        }
        elseif (\array_key_exists('AwayRotationNumber', $data) && $data['AwayRotationNumber'] === null) {
            $object->setAwayRotationNumber(null);
        }
        if (\array_key_exists('NeutralVenue', $data) && $data['NeutralVenue'] !== null) {
            $object->setNeutralVenue($data['NeutralVenue']);
        }
        elseif (\array_key_exists('NeutralVenue', $data) && $data['NeutralVenue'] === null) {
            $object->setNeutralVenue(null);
        }
        if (\array_key_exists('RefereeID', $data) && $data['RefereeID'] !== null) {
            $object->setRefereeID($data['RefereeID']);
        }
        elseif (\array_key_exists('RefereeID', $data) && $data['RefereeID'] === null) {
            $object->setRefereeID(null);
        }
        if (\array_key_exists('OverPayout', $data) && $data['OverPayout'] !== null) {
            $object->setOverPayout($data['OverPayout']);
        }
        elseif (\array_key_exists('OverPayout', $data) && $data['OverPayout'] === null) {
            $object->setOverPayout(null);
        }
        if (\array_key_exists('UnderPayout', $data) && $data['UnderPayout'] !== null) {
            $object->setUnderPayout($data['UnderPayout']);
        }
        elseif (\array_key_exists('UnderPayout', $data) && $data['UnderPayout'] === null) {
            $object->setUnderPayout(null);
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
        if (null !== $object->getChannel()) {
            $data['Channel'] = $object->getChannel();
        }
        if (null !== $object->getPointSpread()) {
            $data['PointSpread'] = $object->getPointSpread();
        }
        if (null !== $object->getOverUnder()) {
            $data['OverUnder'] = $object->getOverUnder();
        }
        if (null !== $object->getQuarter()) {
            $data['Quarter'] = $object->getQuarter();
        }
        if (null !== $object->getTimeRemaining()) {
            $data['TimeRemaining'] = $object->getTimeRemaining();
        }
        if (null !== $object->getPossession()) {
            $data['Possession'] = $object->getPossession();
        }
        if (null !== $object->getDown()) {
            $data['Down'] = $object->getDown();
        }
        if (null !== $object->getDistance()) {
            $data['Distance'] = $object->getDistance();
        }
        if (null !== $object->getYardLine()) {
            $data['YardLine'] = $object->getYardLine();
        }
        if (null !== $object->getYardLineTerritory()) {
            $data['YardLineTerritory'] = $object->getYardLineTerritory();
        }
        if (null !== $object->getRedZone()) {
            $data['RedZone'] = $object->getRedZone();
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
        if (null !== $object->getHasStarted()) {
            $data['HasStarted'] = $object->getHasStarted();
        }
        if (null !== $object->getIsInProgress()) {
            $data['IsInProgress'] = $object->getIsInProgress();
        }
        if (null !== $object->getIsOver()) {
            $data['IsOver'] = $object->getIsOver();
        }
        if (null !== $object->getHas1stQuarterStarted()) {
            $data['Has1stQuarterStarted'] = $object->getHas1stQuarterStarted();
        }
        if (null !== $object->getHas2ndQuarterStarted()) {
            $data['Has2ndQuarterStarted'] = $object->getHas2ndQuarterStarted();
        }
        if (null !== $object->getHas3rdQuarterStarted()) {
            $data['Has3rdQuarterStarted'] = $object->getHas3rdQuarterStarted();
        }
        if (null !== $object->getHas4thQuarterStarted()) {
            $data['Has4thQuarterStarted'] = $object->getHas4thQuarterStarted();
        }
        if (null !== $object->getIsOvertime()) {
            $data['IsOvertime'] = $object->getIsOvertime();
        }
        if (null !== $object->getDownAndDistance()) {
            $data['DownAndDistance'] = $object->getDownAndDistance();
        }
        if (null !== $object->getQuarterDescription()) {
            $data['QuarterDescription'] = $object->getQuarterDescription();
        }
        if (null !== $object->getStadiumID()) {
            $data['StadiumID'] = $object->getStadiumID();
        }
        if (null !== $object->getLastUpdated()) {
            $data['LastUpdated'] = $object->getLastUpdated();
        }
        if (null !== $object->getGeoLat()) {
            $data['GeoLat'] = $object->getGeoLat();
        }
        if (null !== $object->getGeoLong()) {
            $data['GeoLong'] = $object->getGeoLong();
        }
        if (null !== $object->getForecastTempLow()) {
            $data['ForecastTempLow'] = $object->getForecastTempLow();
        }
        if (null !== $object->getForecastTempHigh()) {
            $data['ForecastTempHigh'] = $object->getForecastTempHigh();
        }
        if (null !== $object->getForecastDescription()) {
            $data['ForecastDescription'] = $object->getForecastDescription();
        }
        if (null !== $object->getForecastWindChill()) {
            $data['ForecastWindChill'] = $object->getForecastWindChill();
        }
        if (null !== $object->getForecastWindSpeed()) {
            $data['ForecastWindSpeed'] = $object->getForecastWindSpeed();
        }
        if (null !== $object->getAwayTeamMoneyLine()) {
            $data['AwayTeamMoneyLine'] = $object->getAwayTeamMoneyLine();
        }
        if (null !== $object->getHomeTeamMoneyLine()) {
            $data['HomeTeamMoneyLine'] = $object->getHomeTeamMoneyLine();
        }
        if (null !== $object->getCanceled()) {
            $data['Canceled'] = $object->getCanceled();
        }
        if (null !== $object->getClosed()) {
            $data['Closed'] = $object->getClosed();
        }
        if (null !== $object->getLastPlay()) {
            $data['LastPlay'] = $object->getLastPlay();
        }
        if (null !== $object->getDay()) {
            $data['Day'] = $object->getDay();
        }
        if (null !== $object->getDateTime()) {
            $data['DateTime'] = $object->getDateTime();
        }
        if (null !== $object->getAwayTeamID()) {
            $data['AwayTeamID'] = $object->getAwayTeamID();
        }
        if (null !== $object->getHomeTeamID()) {
            $data['HomeTeamID'] = $object->getHomeTeamID();
        }
        if (null !== $object->getGlobalGameID()) {
            $data['GlobalGameID'] = $object->getGlobalGameID();
        }
        if (null !== $object->getGlobalAwayTeamID()) {
            $data['GlobalAwayTeamID'] = $object->getGlobalAwayTeamID();
        }
        if (null !== $object->getGlobalHomeTeamID()) {
            $data['GlobalHomeTeamID'] = $object->getGlobalHomeTeamID();
        }
        if (null !== $object->getPointSpreadAwayTeamMoneyLine()) {
            $data['PointSpreadAwayTeamMoneyLine'] = $object->getPointSpreadAwayTeamMoneyLine();
        }
        if (null !== $object->getPointSpreadHomeTeamMoneyLine()) {
            $data['PointSpreadHomeTeamMoneyLine'] = $object->getPointSpreadHomeTeamMoneyLine();
        }
        if (null !== $object->getScoreID()) {
            $data['ScoreID'] = $object->getScoreID();
        }
        if (null !== $object->getStadiumDetails()) {
            $data['StadiumDetails'] = $this->normalizer->normalize($object->getStadiumDetails(), 'json', $context);
        }
        if (null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus();
        }
        if (null !== $object->getGameEndDateTime()) {
            $data['GameEndDateTime'] = $object->getGameEndDateTime();
        }
        if (null !== $object->getHomeRotationNumber()) {
            $data['HomeRotationNumber'] = $object->getHomeRotationNumber();
        }
        if (null !== $object->getAwayRotationNumber()) {
            $data['AwayRotationNumber'] = $object->getAwayRotationNumber();
        }
        if (null !== $object->getNeutralVenue()) {
            $data['NeutralVenue'] = $object->getNeutralVenue();
        }
        if (null !== $object->getRefereeID()) {
            $data['RefereeID'] = $object->getRefereeID();
        }
        if (null !== $object->getOverPayout()) {
            $data['OverPayout'] = $object->getOverPayout();
        }
        if (null !== $object->getUnderPayout()) {
            $data['UnderPayout'] = $object->getUnderPayout();
        }
        return $data;
    }
}