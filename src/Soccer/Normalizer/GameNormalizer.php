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
class GameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Soccer\\Model\\Game';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Soccer\\Model\\Game';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Soccer\Model\Game();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GameId', $data)) {
            $object->setGameId($data['GameId']);
        }
        if (\array_key_exists('RoundId', $data)) {
            $object->setRoundId($data['RoundId']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('Group', $data)) {
            $object->setGroup($data['Group']);
        }
        if (\array_key_exists('AwayTeamId', $data)) {
            $object->setAwayTeamId($data['AwayTeamId']);
        }
        if (\array_key_exists('HomeTeamId', $data)) {
            $object->setHomeTeamId($data['HomeTeamId']);
        }
        if (\array_key_exists('VenueId', $data)) {
            $object->setVenueId($data['VenueId']);
        }
        if (\array_key_exists('Day', $data)) {
            $object->setDay($data['Day']);
        }
        if (\array_key_exists('DateTime', $data)) {
            $object->setDateTime($data['DateTime']);
        }
        if (\array_key_exists('Status', $data)) {
            $object->setStatus($data['Status']);
        }
        if (\array_key_exists('Week', $data)) {
            $object->setWeek($data['Week']);
        }
        if (\array_key_exists('Period', $data)) {
            $object->setPeriod($data['Period']);
        }
        if (\array_key_exists('Clock', $data)) {
            $object->setClock($data['Clock']);
        }
        if (\array_key_exists('Winner', $data)) {
            $object->setWinner($data['Winner']);
        }
        if (\array_key_exists('VenueType', $data)) {
            $object->setVenueType($data['VenueType']);
        }
        if (\array_key_exists('AwayTeamKey', $data)) {
            $object->setAwayTeamKey($data['AwayTeamKey']);
        }
        if (\array_key_exists('AwayTeamName', $data)) {
            $object->setAwayTeamName($data['AwayTeamName']);
        }
        if (\array_key_exists('AwayTeamCountryCode', $data)) {
            $object->setAwayTeamCountryCode($data['AwayTeamCountryCode']);
        }
        if (\array_key_exists('AwayTeamScore', $data)) {
            $object->setAwayTeamScore($data['AwayTeamScore']);
        }
        if (\array_key_exists('AwayTeamScorePeriod1', $data)) {
            $object->setAwayTeamScorePeriod1($data['AwayTeamScorePeriod1']);
        }
        if (\array_key_exists('AwayTeamScorePeriod2', $data)) {
            $object->setAwayTeamScorePeriod2($data['AwayTeamScorePeriod2']);
        }
        if (\array_key_exists('AwayTeamScoreExtraTime', $data)) {
            $object->setAwayTeamScoreExtraTime($data['AwayTeamScoreExtraTime']);
        }
        if (\array_key_exists('AwayTeamScorePenalty', $data)) {
            $object->setAwayTeamScorePenalty($data['AwayTeamScorePenalty']);
        }
        if (\array_key_exists('HomeTeamKey', $data)) {
            $object->setHomeTeamKey($data['HomeTeamKey']);
        }
        if (\array_key_exists('HomeTeamName', $data)) {
            $object->setHomeTeamName($data['HomeTeamName']);
        }
        if (\array_key_exists('HomeTeamCountryCode', $data)) {
            $object->setHomeTeamCountryCode($data['HomeTeamCountryCode']);
        }
        if (\array_key_exists('HomeTeamScore', $data)) {
            $object->setHomeTeamScore($data['HomeTeamScore']);
        }
        if (\array_key_exists('HomeTeamScorePeriod1', $data)) {
            $object->setHomeTeamScorePeriod1($data['HomeTeamScorePeriod1']);
        }
        if (\array_key_exists('HomeTeamScorePeriod2', $data)) {
            $object->setHomeTeamScorePeriod2($data['HomeTeamScorePeriod2']);
        }
        if (\array_key_exists('HomeTeamScoreExtraTime', $data)) {
            $object->setHomeTeamScoreExtraTime($data['HomeTeamScoreExtraTime']);
        }
        if (\array_key_exists('HomeTeamScorePenalty', $data)) {
            $object->setHomeTeamScorePenalty($data['HomeTeamScorePenalty']);
        }
        if (\array_key_exists('HomeTeamMoneyLine', $data)) {
            $object->setHomeTeamMoneyLine($data['HomeTeamMoneyLine']);
        }
        if (\array_key_exists('AwayTeamMoneyLine', $data)) {
            $object->setAwayTeamMoneyLine($data['AwayTeamMoneyLine']);
        }
        if (\array_key_exists('DrawMoneyLine', $data)) {
            $object->setDrawMoneyLine($data['DrawMoneyLine']);
        }
        if (\array_key_exists('PointSpread', $data)) {
            $object->setPointSpread($data['PointSpread']);
        }
        if (\array_key_exists('HomeTeamPointSpreadPayout', $data)) {
            $object->setHomeTeamPointSpreadPayout($data['HomeTeamPointSpreadPayout']);
        }
        if (\array_key_exists('AwayTeamPointSpreadPayout', $data)) {
            $object->setAwayTeamPointSpreadPayout($data['AwayTeamPointSpreadPayout']);
        }
        if (\array_key_exists('OverUnder', $data)) {
            $object->setOverUnder($data['OverUnder']);
        }
        if (\array_key_exists('OverPayout', $data)) {
            $object->setOverPayout($data['OverPayout']);
        }
        if (\array_key_exists('UnderPayout', $data)) {
            $object->setUnderPayout($data['UnderPayout']);
        }
        if (\array_key_exists('Attendance', $data)) {
            $object->setAttendance($data['Attendance']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('UpdatedUtc', $data)) {
            $object->setUpdatedUtc($data['UpdatedUtc']);
        }
        if (\array_key_exists('GlobalGameId', $data)) {
            $object->setGlobalGameId($data['GlobalGameId']);
        }
        if (\array_key_exists('GlobalAwayTeamId', $data)) {
            $object->setGlobalAwayTeamId($data['GlobalAwayTeamId']);
        }
        if (\array_key_exists('GlobalHomeTeamId', $data)) {
            $object->setGlobalHomeTeamId($data['GlobalHomeTeamId']);
        }
        if (\array_key_exists('ClockExtra', $data)) {
            $object->setClockExtra($data['ClockExtra']);
        }
        if (\array_key_exists('ClockDisplay', $data)) {
            $object->setClockDisplay($data['ClockDisplay']);
        }
        if (\array_key_exists('IsClosed', $data)) {
            $object->setIsClosed($data['IsClosed']);
        }
        if (\array_key_exists('HomeTeamFormation', $data)) {
            $object->setHomeTeamFormation($data['HomeTeamFormation']);
        }
        if (\array_key_exists('AwayTeamFormation', $data)) {
            $object->setAwayTeamFormation($data['AwayTeamFormation']);
        }
        if (\array_key_exists('PlayoffAggregateScore', $data)) {
            $object->setPlayoffAggregateScore($this->denormalizer->denormalize($data['PlayoffAggregateScore'], 'Sportsdata\\API\\Soccer\\Model\\PlayoffAggregateScore', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGameId()) {
            $data['GameId'] = $object->getGameId();
        }
        if (null !== $object->getRoundId()) {
            $data['RoundId'] = $object->getRoundId();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getGroup()) {
            $data['Group'] = $object->getGroup();
        }
        if (null !== $object->getAwayTeamId()) {
            $data['AwayTeamId'] = $object->getAwayTeamId();
        }
        if (null !== $object->getHomeTeamId()) {
            $data['HomeTeamId'] = $object->getHomeTeamId();
        }
        if (null !== $object->getVenueId()) {
            $data['VenueId'] = $object->getVenueId();
        }
        if (null !== $object->getDay()) {
            $data['Day'] = $object->getDay();
        }
        if (null !== $object->getDateTime()) {
            $data['DateTime'] = $object->getDateTime();
        }
        if (null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus();
        }
        if (null !== $object->getWeek()) {
            $data['Week'] = $object->getWeek();
        }
        if (null !== $object->getPeriod()) {
            $data['Period'] = $object->getPeriod();
        }
        if (null !== $object->getClock()) {
            $data['Clock'] = $object->getClock();
        }
        if (null !== $object->getWinner()) {
            $data['Winner'] = $object->getWinner();
        }
        if (null !== $object->getVenueType()) {
            $data['VenueType'] = $object->getVenueType();
        }
        if (null !== $object->getAwayTeamKey()) {
            $data['AwayTeamKey'] = $object->getAwayTeamKey();
        }
        if (null !== $object->getAwayTeamName()) {
            $data['AwayTeamName'] = $object->getAwayTeamName();
        }
        if (null !== $object->getAwayTeamCountryCode()) {
            $data['AwayTeamCountryCode'] = $object->getAwayTeamCountryCode();
        }
        if (null !== $object->getAwayTeamScore()) {
            $data['AwayTeamScore'] = $object->getAwayTeamScore();
        }
        if (null !== $object->getAwayTeamScorePeriod1()) {
            $data['AwayTeamScorePeriod1'] = $object->getAwayTeamScorePeriod1();
        }
        if (null !== $object->getAwayTeamScorePeriod2()) {
            $data['AwayTeamScorePeriod2'] = $object->getAwayTeamScorePeriod2();
        }
        if (null !== $object->getAwayTeamScoreExtraTime()) {
            $data['AwayTeamScoreExtraTime'] = $object->getAwayTeamScoreExtraTime();
        }
        if (null !== $object->getAwayTeamScorePenalty()) {
            $data['AwayTeamScorePenalty'] = $object->getAwayTeamScorePenalty();
        }
        if (null !== $object->getHomeTeamKey()) {
            $data['HomeTeamKey'] = $object->getHomeTeamKey();
        }
        if (null !== $object->getHomeTeamName()) {
            $data['HomeTeamName'] = $object->getHomeTeamName();
        }
        if (null !== $object->getHomeTeamCountryCode()) {
            $data['HomeTeamCountryCode'] = $object->getHomeTeamCountryCode();
        }
        if (null !== $object->getHomeTeamScore()) {
            $data['HomeTeamScore'] = $object->getHomeTeamScore();
        }
        if (null !== $object->getHomeTeamScorePeriod1()) {
            $data['HomeTeamScorePeriod1'] = $object->getHomeTeamScorePeriod1();
        }
        if (null !== $object->getHomeTeamScorePeriod2()) {
            $data['HomeTeamScorePeriod2'] = $object->getHomeTeamScorePeriod2();
        }
        if (null !== $object->getHomeTeamScoreExtraTime()) {
            $data['HomeTeamScoreExtraTime'] = $object->getHomeTeamScoreExtraTime();
        }
        if (null !== $object->getHomeTeamScorePenalty()) {
            $data['HomeTeamScorePenalty'] = $object->getHomeTeamScorePenalty();
        }
        if (null !== $object->getHomeTeamMoneyLine()) {
            $data['HomeTeamMoneyLine'] = $object->getHomeTeamMoneyLine();
        }
        if (null !== $object->getAwayTeamMoneyLine()) {
            $data['AwayTeamMoneyLine'] = $object->getAwayTeamMoneyLine();
        }
        if (null !== $object->getDrawMoneyLine()) {
            $data['DrawMoneyLine'] = $object->getDrawMoneyLine();
        }
        if (null !== $object->getPointSpread()) {
            $data['PointSpread'] = $object->getPointSpread();
        }
        if (null !== $object->getHomeTeamPointSpreadPayout()) {
            $data['HomeTeamPointSpreadPayout'] = $object->getHomeTeamPointSpreadPayout();
        }
        if (null !== $object->getAwayTeamPointSpreadPayout()) {
            $data['AwayTeamPointSpreadPayout'] = $object->getAwayTeamPointSpreadPayout();
        }
        if (null !== $object->getOverUnder()) {
            $data['OverUnder'] = $object->getOverUnder();
        }
        if (null !== $object->getOverPayout()) {
            $data['OverPayout'] = $object->getOverPayout();
        }
        if (null !== $object->getUnderPayout()) {
            $data['UnderPayout'] = $object->getUnderPayout();
        }
        if (null !== $object->getAttendance()) {
            $data['Attendance'] = $object->getAttendance();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getUpdatedUtc()) {
            $data['UpdatedUtc'] = $object->getUpdatedUtc();
        }
        if (null !== $object->getGlobalGameId()) {
            $data['GlobalGameId'] = $object->getGlobalGameId();
        }
        if (null !== $object->getGlobalAwayTeamId()) {
            $data['GlobalAwayTeamId'] = $object->getGlobalAwayTeamId();
        }
        if (null !== $object->getGlobalHomeTeamId()) {
            $data['GlobalHomeTeamId'] = $object->getGlobalHomeTeamId();
        }
        if (null !== $object->getClockExtra()) {
            $data['ClockExtra'] = $object->getClockExtra();
        }
        if (null !== $object->getClockDisplay()) {
            $data['ClockDisplay'] = $object->getClockDisplay();
        }
        if (null !== $object->getIsClosed()) {
            $data['IsClosed'] = $object->getIsClosed();
        }
        if (null !== $object->getHomeTeamFormation()) {
            $data['HomeTeamFormation'] = $object->getHomeTeamFormation();
        }
        if (null !== $object->getAwayTeamFormation()) {
            $data['AwayTeamFormation'] = $object->getAwayTeamFormation();
        }
        if (null !== $object->getPlayoffAggregateScore()) {
            $data['PlayoffAggregateScore'] = $this->normalizer->normalize($object->getPlayoffAggregateScore(), 'json', $context);
        }
        return $data;
    }
}