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
        if (\array_key_exists('Channel', $data)) {
            $object->setChannel($data['Channel']);
        }
        if (\array_key_exists('PointSpread', $data)) {
            $object->setPointSpread($data['PointSpread']);
        }
        if (\array_key_exists('OverUnder', $data)) {
            $object->setOverUnder($data['OverUnder']);
        }
        if (\array_key_exists('Quarter', $data)) {
            $object->setQuarter($data['Quarter']);
        }
        if (\array_key_exists('TimeRemaining', $data)) {
            $object->setTimeRemaining($data['TimeRemaining']);
        }
        if (\array_key_exists('Possession', $data)) {
            $object->setPossession($data['Possession']);
        }
        if (\array_key_exists('Down', $data)) {
            $object->setDown($data['Down']);
        }
        if (\array_key_exists('Distance', $data)) {
            $object->setDistance($data['Distance']);
        }
        if (\array_key_exists('YardLine', $data)) {
            $object->setYardLine($data['YardLine']);
        }
        if (\array_key_exists('YardLineTerritory', $data)) {
            $object->setYardLineTerritory($data['YardLineTerritory']);
        }
        if (\array_key_exists('RedZone', $data)) {
            $object->setRedZone($data['RedZone']);
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
        if (\array_key_exists('DownAndDistance', $data)) {
            $object->setDownAndDistance($data['DownAndDistance']);
        }
        if (\array_key_exists('QuarterDescription', $data)) {
            $object->setQuarterDescription($data['QuarterDescription']);
        }
        if (\array_key_exists('StadiumID', $data)) {
            $object->setStadiumID($data['StadiumID']);
        }
        if (\array_key_exists('LastUpdated', $data)) {
            $object->setLastUpdated($data['LastUpdated']);
        }
        if (\array_key_exists('GeoLat', $data)) {
            $object->setGeoLat($data['GeoLat']);
        }
        if (\array_key_exists('GeoLong', $data)) {
            $object->setGeoLong($data['GeoLong']);
        }
        if (\array_key_exists('ForecastTempLow', $data)) {
            $object->setForecastTempLow($data['ForecastTempLow']);
        }
        if (\array_key_exists('ForecastTempHigh', $data)) {
            $object->setForecastTempHigh($data['ForecastTempHigh']);
        }
        if (\array_key_exists('ForecastDescription', $data)) {
            $object->setForecastDescription($data['ForecastDescription']);
        }
        if (\array_key_exists('ForecastWindChill', $data)) {
            $object->setForecastWindChill($data['ForecastWindChill']);
        }
        if (\array_key_exists('ForecastWindSpeed', $data)) {
            $object->setForecastWindSpeed($data['ForecastWindSpeed']);
        }
        if (\array_key_exists('AwayTeamMoneyLine', $data)) {
            $object->setAwayTeamMoneyLine($data['AwayTeamMoneyLine']);
        }
        if (\array_key_exists('HomeTeamMoneyLine', $data)) {
            $object->setHomeTeamMoneyLine($data['HomeTeamMoneyLine']);
        }
        if (\array_key_exists('Canceled', $data)) {
            $object->setCanceled($data['Canceled']);
        }
        if (\array_key_exists('Closed', $data)) {
            $object->setClosed($data['Closed']);
        }
        if (\array_key_exists('LastPlay', $data)) {
            $object->setLastPlay($data['LastPlay']);
        }
        if (\array_key_exists('Day', $data)) {
            $object->setDay($data['Day']);
        }
        if (\array_key_exists('DateTime', $data)) {
            $object->setDateTime($data['DateTime']);
        }
        if (\array_key_exists('AwayTeamID', $data)) {
            $object->setAwayTeamID($data['AwayTeamID']);
        }
        if (\array_key_exists('HomeTeamID', $data)) {
            $object->setHomeTeamID($data['HomeTeamID']);
        }
        if (\array_key_exists('GlobalGameID', $data)) {
            $object->setGlobalGameID($data['GlobalGameID']);
        }
        if (\array_key_exists('GlobalAwayTeamID', $data)) {
            $object->setGlobalAwayTeamID($data['GlobalAwayTeamID']);
        }
        if (\array_key_exists('GlobalHomeTeamID', $data)) {
            $object->setGlobalHomeTeamID($data['GlobalHomeTeamID']);
        }
        if (\array_key_exists('PointSpreadAwayTeamMoneyLine', $data)) {
            $object->setPointSpreadAwayTeamMoneyLine($data['PointSpreadAwayTeamMoneyLine']);
        }
        if (\array_key_exists('PointSpreadHomeTeamMoneyLine', $data)) {
            $object->setPointSpreadHomeTeamMoneyLine($data['PointSpreadHomeTeamMoneyLine']);
        }
        if (\array_key_exists('ScoreID', $data)) {
            $object->setScoreID($data['ScoreID']);
        }
        if (\array_key_exists('StadiumDetails', $data)) {
            $object->setStadiumDetails($this->denormalizer->denormalize($data['StadiumDetails'], 'Sportsdata\\API\\NFL\\Model\\Stadium', 'json', $context));
        }
        if (\array_key_exists('Status', $data)) {
            $object->setStatus($data['Status']);
        }
        if (\array_key_exists('GameEndDateTime', $data)) {
            $object->setGameEndDateTime($data['GameEndDateTime']);
        }
        if (\array_key_exists('HomeRotationNumber', $data)) {
            $object->setHomeRotationNumber($data['HomeRotationNumber']);
        }
        if (\array_key_exists('AwayRotationNumber', $data)) {
            $object->setAwayRotationNumber($data['AwayRotationNumber']);
        }
        if (\array_key_exists('NeutralVenue', $data)) {
            $object->setNeutralVenue($data['NeutralVenue']);
        }
        if (\array_key_exists('RefereeID', $data)) {
            $object->setRefereeID($data['RefereeID']);
        }
        if (\array_key_exists('OverPayout', $data)) {
            $object->setOverPayout($data['OverPayout']);
        }
        if (\array_key_exists('UnderPayout', $data)) {
            $object->setUnderPayout($data['UnderPayout']);
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