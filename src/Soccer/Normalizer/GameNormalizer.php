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
        if (\array_key_exists('Group', $data) && $data['Group'] !== null) {
            $object->setGroup($data['Group']);
        }
        elseif (\array_key_exists('Group', $data) && $data['Group'] === null) {
            $object->setGroup(null);
        }
        if (\array_key_exists('AwayTeamId', $data) && $data['AwayTeamId'] !== null) {
            $object->setAwayTeamId($data['AwayTeamId']);
        }
        elseif (\array_key_exists('AwayTeamId', $data) && $data['AwayTeamId'] === null) {
            $object->setAwayTeamId(null);
        }
        if (\array_key_exists('HomeTeamId', $data) && $data['HomeTeamId'] !== null) {
            $object->setHomeTeamId($data['HomeTeamId']);
        }
        elseif (\array_key_exists('HomeTeamId', $data) && $data['HomeTeamId'] === null) {
            $object->setHomeTeamId(null);
        }
        if (\array_key_exists('VenueId', $data) && $data['VenueId'] !== null) {
            $object->setVenueId($data['VenueId']);
        }
        elseif (\array_key_exists('VenueId', $data) && $data['VenueId'] === null) {
            $object->setVenueId(null);
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
        if (\array_key_exists('Status', $data) && $data['Status'] !== null) {
            $object->setStatus($data['Status']);
        }
        elseif (\array_key_exists('Status', $data) && $data['Status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('Week', $data) && $data['Week'] !== null) {
            $object->setWeek($data['Week']);
        }
        elseif (\array_key_exists('Week', $data) && $data['Week'] === null) {
            $object->setWeek(null);
        }
        if (\array_key_exists('Period', $data) && $data['Period'] !== null) {
            $object->setPeriod($data['Period']);
        }
        elseif (\array_key_exists('Period', $data) && $data['Period'] === null) {
            $object->setPeriod(null);
        }
        if (\array_key_exists('Clock', $data) && $data['Clock'] !== null) {
            $object->setClock($data['Clock']);
        }
        elseif (\array_key_exists('Clock', $data) && $data['Clock'] === null) {
            $object->setClock(null);
        }
        if (\array_key_exists('Winner', $data) && $data['Winner'] !== null) {
            $object->setWinner($data['Winner']);
        }
        elseif (\array_key_exists('Winner', $data) && $data['Winner'] === null) {
            $object->setWinner(null);
        }
        if (\array_key_exists('VenueType', $data) && $data['VenueType'] !== null) {
            $object->setVenueType($data['VenueType']);
        }
        elseif (\array_key_exists('VenueType', $data) && $data['VenueType'] === null) {
            $object->setVenueType(null);
        }
        if (\array_key_exists('AwayTeamKey', $data) && $data['AwayTeamKey'] !== null) {
            $object->setAwayTeamKey($data['AwayTeamKey']);
        }
        elseif (\array_key_exists('AwayTeamKey', $data) && $data['AwayTeamKey'] === null) {
            $object->setAwayTeamKey(null);
        }
        if (\array_key_exists('AwayTeamName', $data) && $data['AwayTeamName'] !== null) {
            $object->setAwayTeamName($data['AwayTeamName']);
        }
        elseif (\array_key_exists('AwayTeamName', $data) && $data['AwayTeamName'] === null) {
            $object->setAwayTeamName(null);
        }
        if (\array_key_exists('AwayTeamCountryCode', $data) && $data['AwayTeamCountryCode'] !== null) {
            $object->setAwayTeamCountryCode($data['AwayTeamCountryCode']);
        }
        elseif (\array_key_exists('AwayTeamCountryCode', $data) && $data['AwayTeamCountryCode'] === null) {
            $object->setAwayTeamCountryCode(null);
        }
        if (\array_key_exists('AwayTeamScore', $data) && $data['AwayTeamScore'] !== null) {
            $object->setAwayTeamScore($data['AwayTeamScore']);
        }
        elseif (\array_key_exists('AwayTeamScore', $data) && $data['AwayTeamScore'] === null) {
            $object->setAwayTeamScore(null);
        }
        if (\array_key_exists('AwayTeamScorePeriod1', $data) && $data['AwayTeamScorePeriod1'] !== null) {
            $object->setAwayTeamScorePeriod1($data['AwayTeamScorePeriod1']);
        }
        elseif (\array_key_exists('AwayTeamScorePeriod1', $data) && $data['AwayTeamScorePeriod1'] === null) {
            $object->setAwayTeamScorePeriod1(null);
        }
        if (\array_key_exists('AwayTeamScorePeriod2', $data) && $data['AwayTeamScorePeriod2'] !== null) {
            $object->setAwayTeamScorePeriod2($data['AwayTeamScorePeriod2']);
        }
        elseif (\array_key_exists('AwayTeamScorePeriod2', $data) && $data['AwayTeamScorePeriod2'] === null) {
            $object->setAwayTeamScorePeriod2(null);
        }
        if (\array_key_exists('AwayTeamScoreExtraTime', $data) && $data['AwayTeamScoreExtraTime'] !== null) {
            $object->setAwayTeamScoreExtraTime($data['AwayTeamScoreExtraTime']);
        }
        elseif (\array_key_exists('AwayTeamScoreExtraTime', $data) && $data['AwayTeamScoreExtraTime'] === null) {
            $object->setAwayTeamScoreExtraTime(null);
        }
        if (\array_key_exists('AwayTeamScorePenalty', $data) && $data['AwayTeamScorePenalty'] !== null) {
            $object->setAwayTeamScorePenalty($data['AwayTeamScorePenalty']);
        }
        elseif (\array_key_exists('AwayTeamScorePenalty', $data) && $data['AwayTeamScorePenalty'] === null) {
            $object->setAwayTeamScorePenalty(null);
        }
        if (\array_key_exists('HomeTeamKey', $data) && $data['HomeTeamKey'] !== null) {
            $object->setHomeTeamKey($data['HomeTeamKey']);
        }
        elseif (\array_key_exists('HomeTeamKey', $data) && $data['HomeTeamKey'] === null) {
            $object->setHomeTeamKey(null);
        }
        if (\array_key_exists('HomeTeamName', $data) && $data['HomeTeamName'] !== null) {
            $object->setHomeTeamName($data['HomeTeamName']);
        }
        elseif (\array_key_exists('HomeTeamName', $data) && $data['HomeTeamName'] === null) {
            $object->setHomeTeamName(null);
        }
        if (\array_key_exists('HomeTeamCountryCode', $data) && $data['HomeTeamCountryCode'] !== null) {
            $object->setHomeTeamCountryCode($data['HomeTeamCountryCode']);
        }
        elseif (\array_key_exists('HomeTeamCountryCode', $data) && $data['HomeTeamCountryCode'] === null) {
            $object->setHomeTeamCountryCode(null);
        }
        if (\array_key_exists('HomeTeamScore', $data) && $data['HomeTeamScore'] !== null) {
            $object->setHomeTeamScore($data['HomeTeamScore']);
        }
        elseif (\array_key_exists('HomeTeamScore', $data) && $data['HomeTeamScore'] === null) {
            $object->setHomeTeamScore(null);
        }
        if (\array_key_exists('HomeTeamScorePeriod1', $data) && $data['HomeTeamScorePeriod1'] !== null) {
            $object->setHomeTeamScorePeriod1($data['HomeTeamScorePeriod1']);
        }
        elseif (\array_key_exists('HomeTeamScorePeriod1', $data) && $data['HomeTeamScorePeriod1'] === null) {
            $object->setHomeTeamScorePeriod1(null);
        }
        if (\array_key_exists('HomeTeamScorePeriod2', $data) && $data['HomeTeamScorePeriod2'] !== null) {
            $object->setHomeTeamScorePeriod2($data['HomeTeamScorePeriod2']);
        }
        elseif (\array_key_exists('HomeTeamScorePeriod2', $data) && $data['HomeTeamScorePeriod2'] === null) {
            $object->setHomeTeamScorePeriod2(null);
        }
        if (\array_key_exists('HomeTeamScoreExtraTime', $data) && $data['HomeTeamScoreExtraTime'] !== null) {
            $object->setHomeTeamScoreExtraTime($data['HomeTeamScoreExtraTime']);
        }
        elseif (\array_key_exists('HomeTeamScoreExtraTime', $data) && $data['HomeTeamScoreExtraTime'] === null) {
            $object->setHomeTeamScoreExtraTime(null);
        }
        if (\array_key_exists('HomeTeamScorePenalty', $data) && $data['HomeTeamScorePenalty'] !== null) {
            $object->setHomeTeamScorePenalty($data['HomeTeamScorePenalty']);
        }
        elseif (\array_key_exists('HomeTeamScorePenalty', $data) && $data['HomeTeamScorePenalty'] === null) {
            $object->setHomeTeamScorePenalty(null);
        }
        if (\array_key_exists('HomeTeamMoneyLine', $data) && $data['HomeTeamMoneyLine'] !== null) {
            $object->setHomeTeamMoneyLine($data['HomeTeamMoneyLine']);
        }
        elseif (\array_key_exists('HomeTeamMoneyLine', $data) && $data['HomeTeamMoneyLine'] === null) {
            $object->setHomeTeamMoneyLine(null);
        }
        if (\array_key_exists('AwayTeamMoneyLine', $data) && $data['AwayTeamMoneyLine'] !== null) {
            $object->setAwayTeamMoneyLine($data['AwayTeamMoneyLine']);
        }
        elseif (\array_key_exists('AwayTeamMoneyLine', $data) && $data['AwayTeamMoneyLine'] === null) {
            $object->setAwayTeamMoneyLine(null);
        }
        if (\array_key_exists('DrawMoneyLine', $data) && $data['DrawMoneyLine'] !== null) {
            $object->setDrawMoneyLine($data['DrawMoneyLine']);
        }
        elseif (\array_key_exists('DrawMoneyLine', $data) && $data['DrawMoneyLine'] === null) {
            $object->setDrawMoneyLine(null);
        }
        if (\array_key_exists('PointSpread', $data) && $data['PointSpread'] !== null) {
            $object->setPointSpread($data['PointSpread']);
        }
        elseif (\array_key_exists('PointSpread', $data) && $data['PointSpread'] === null) {
            $object->setPointSpread(null);
        }
        if (\array_key_exists('HomeTeamPointSpreadPayout', $data) && $data['HomeTeamPointSpreadPayout'] !== null) {
            $object->setHomeTeamPointSpreadPayout($data['HomeTeamPointSpreadPayout']);
        }
        elseif (\array_key_exists('HomeTeamPointSpreadPayout', $data) && $data['HomeTeamPointSpreadPayout'] === null) {
            $object->setHomeTeamPointSpreadPayout(null);
        }
        if (\array_key_exists('AwayTeamPointSpreadPayout', $data) && $data['AwayTeamPointSpreadPayout'] !== null) {
            $object->setAwayTeamPointSpreadPayout($data['AwayTeamPointSpreadPayout']);
        }
        elseif (\array_key_exists('AwayTeamPointSpreadPayout', $data) && $data['AwayTeamPointSpreadPayout'] === null) {
            $object->setAwayTeamPointSpreadPayout(null);
        }
        if (\array_key_exists('OverUnder', $data) && $data['OverUnder'] !== null) {
            $object->setOverUnder($data['OverUnder']);
        }
        elseif (\array_key_exists('OverUnder', $data) && $data['OverUnder'] === null) {
            $object->setOverUnder(null);
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
        if (\array_key_exists('Attendance', $data) && $data['Attendance'] !== null) {
            $object->setAttendance($data['Attendance']);
        }
        elseif (\array_key_exists('Attendance', $data) && $data['Attendance'] === null) {
            $object->setAttendance(null);
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
        if (\array_key_exists('GlobalGameId', $data)) {
            $object->setGlobalGameId($data['GlobalGameId']);
        }
        if (\array_key_exists('GlobalAwayTeamId', $data) && $data['GlobalAwayTeamId'] !== null) {
            $object->setGlobalAwayTeamId($data['GlobalAwayTeamId']);
        }
        elseif (\array_key_exists('GlobalAwayTeamId', $data) && $data['GlobalAwayTeamId'] === null) {
            $object->setGlobalAwayTeamId(null);
        }
        if (\array_key_exists('GlobalHomeTeamId', $data) && $data['GlobalHomeTeamId'] !== null) {
            $object->setGlobalHomeTeamId($data['GlobalHomeTeamId']);
        }
        elseif (\array_key_exists('GlobalHomeTeamId', $data) && $data['GlobalHomeTeamId'] === null) {
            $object->setGlobalHomeTeamId(null);
        }
        if (\array_key_exists('ClockExtra', $data) && $data['ClockExtra'] !== null) {
            $object->setClockExtra($data['ClockExtra']);
        }
        elseif (\array_key_exists('ClockExtra', $data) && $data['ClockExtra'] === null) {
            $object->setClockExtra(null);
        }
        if (\array_key_exists('ClockDisplay', $data) && $data['ClockDisplay'] !== null) {
            $object->setClockDisplay($data['ClockDisplay']);
        }
        elseif (\array_key_exists('ClockDisplay', $data) && $data['ClockDisplay'] === null) {
            $object->setClockDisplay(null);
        }
        if (\array_key_exists('IsClosed', $data) && $data['IsClosed'] !== null) {
            $object->setIsClosed($data['IsClosed']);
        }
        elseif (\array_key_exists('IsClosed', $data) && $data['IsClosed'] === null) {
            $object->setIsClosed(null);
        }
        if (\array_key_exists('HomeTeamFormation', $data) && $data['HomeTeamFormation'] !== null) {
            $object->setHomeTeamFormation($data['HomeTeamFormation']);
        }
        elseif (\array_key_exists('HomeTeamFormation', $data) && $data['HomeTeamFormation'] === null) {
            $object->setHomeTeamFormation(null);
        }
        if (\array_key_exists('AwayTeamFormation', $data) && $data['AwayTeamFormation'] !== null) {
            $object->setAwayTeamFormation($data['AwayTeamFormation']);
        }
        elseif (\array_key_exists('AwayTeamFormation', $data) && $data['AwayTeamFormation'] === null) {
            $object->setAwayTeamFormation(null);
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