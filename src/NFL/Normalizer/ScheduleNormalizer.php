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
class ScheduleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\Schedule';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\Schedule';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\Schedule();
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
        if (\array_key_exists('StadiumID', $data) && $data['StadiumID'] !== null) {
            $object->setStadiumID($data['StadiumID']);
        }
        elseif (\array_key_exists('StadiumID', $data) && $data['StadiumID'] === null) {
            $object->setStadiumID(null);
        }
        if (\array_key_exists('Canceled', $data) && $data['Canceled'] !== null) {
            $object->setCanceled($data['Canceled']);
        }
        elseif (\array_key_exists('Canceled', $data) && $data['Canceled'] === null) {
            $object->setCanceled(null);
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
        if (null !== $object->getChannel()) {
            $data['Channel'] = $object->getChannel();
        }
        if (null !== $object->getPointSpread()) {
            $data['PointSpread'] = $object->getPointSpread();
        }
        if (null !== $object->getOverUnder()) {
            $data['OverUnder'] = $object->getOverUnder();
        }
        if (null !== $object->getStadiumID()) {
            $data['StadiumID'] = $object->getStadiumID();
        }
        if (null !== $object->getCanceled()) {
            $data['Canceled'] = $object->getCanceled();
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
        if (null !== $object->getDay()) {
            $data['Day'] = $object->getDay();
        }
        if (null !== $object->getDateTime()) {
            $data['DateTime'] = $object->getDateTime();
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
        if (null !== $object->getScoreID()) {
            $data['ScoreID'] = $object->getScoreID();
        }
        if (null !== $object->getStadiumDetails()) {
            $data['StadiumDetails'] = $this->normalizer->normalize($object->getStadiumDetails(), 'json', $context);
        }
        if (null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus();
        }
        return $data;
    }
}