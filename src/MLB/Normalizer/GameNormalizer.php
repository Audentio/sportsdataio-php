<?php

namespace Sportsdata\API\MLB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\MLB\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\MLB\\Model\\Game';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\MLB\\Model\\Game';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\MLB\Model\Game();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GameID', $data)) {
            $object->setGameID($data['GameID']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('Status', $data)) {
            $object->setStatus($data['Status']);
        }
        if (\array_key_exists('Day', $data)) {
            $object->setDay($data['Day']);
        }
        if (\array_key_exists('DateTime', $data)) {
            $object->setDateTime($data['DateTime']);
        }
        if (\array_key_exists('AwayTeam', $data)) {
            $object->setAwayTeam($data['AwayTeam']);
        }
        if (\array_key_exists('HomeTeam', $data)) {
            $object->setHomeTeam($data['HomeTeam']);
        }
        if (\array_key_exists('AwayTeamID', $data)) {
            $object->setAwayTeamID($data['AwayTeamID']);
        }
        if (\array_key_exists('HomeTeamID', $data)) {
            $object->setHomeTeamID($data['HomeTeamID']);
        }
        if (\array_key_exists('RescheduledGameID', $data)) {
            $object->setRescheduledGameID($data['RescheduledGameID']);
        }
        if (\array_key_exists('StadiumID', $data)) {
            $object->setStadiumID($data['StadiumID']);
        }
        if (\array_key_exists('Channel', $data)) {
            $object->setChannel($data['Channel']);
        }
        if (\array_key_exists('Inning', $data)) {
            $object->setInning($data['Inning']);
        }
        if (\array_key_exists('InningHalf', $data)) {
            $object->setInningHalf($data['InningHalf']);
        }
        if (\array_key_exists('AwayTeamRuns', $data)) {
            $object->setAwayTeamRuns($data['AwayTeamRuns']);
        }
        if (\array_key_exists('HomeTeamRuns', $data)) {
            $object->setHomeTeamRuns($data['HomeTeamRuns']);
        }
        if (\array_key_exists('AwayTeamHits', $data)) {
            $object->setAwayTeamHits($data['AwayTeamHits']);
        }
        if (\array_key_exists('HomeTeamHits', $data)) {
            $object->setHomeTeamHits($data['HomeTeamHits']);
        }
        if (\array_key_exists('AwayTeamErrors', $data)) {
            $object->setAwayTeamErrors($data['AwayTeamErrors']);
        }
        if (\array_key_exists('HomeTeamErrors', $data)) {
            $object->setHomeTeamErrors($data['HomeTeamErrors']);
        }
        if (\array_key_exists('WinningPitcherID', $data)) {
            $object->setWinningPitcherID($data['WinningPitcherID']);
        }
        if (\array_key_exists('LosingPitcherID', $data)) {
            $object->setLosingPitcherID($data['LosingPitcherID']);
        }
        if (\array_key_exists('SavingPitcherID', $data)) {
            $object->setSavingPitcherID($data['SavingPitcherID']);
        }
        if (\array_key_exists('Attendance', $data)) {
            $object->setAttendance($data['Attendance']);
        }
        if (\array_key_exists('AwayTeamProbablePitcherID', $data)) {
            $object->setAwayTeamProbablePitcherID($data['AwayTeamProbablePitcherID']);
        }
        if (\array_key_exists('HomeTeamProbablePitcherID', $data)) {
            $object->setHomeTeamProbablePitcherID($data['HomeTeamProbablePitcherID']);
        }
        if (\array_key_exists('Outs', $data)) {
            $object->setOuts($data['Outs']);
        }
        if (\array_key_exists('Balls', $data)) {
            $object->setBalls($data['Balls']);
        }
        if (\array_key_exists('Strikes', $data)) {
            $object->setStrikes($data['Strikes']);
        }
        if (\array_key_exists('CurrentPitcherID', $data)) {
            $object->setCurrentPitcherID($data['CurrentPitcherID']);
        }
        if (\array_key_exists('CurrentHitterID', $data)) {
            $object->setCurrentHitterID($data['CurrentHitterID']);
        }
        if (\array_key_exists('AwayTeamStartingPitcherID', $data)) {
            $object->setAwayTeamStartingPitcherID($data['AwayTeamStartingPitcherID']);
        }
        if (\array_key_exists('HomeTeamStartingPitcherID', $data)) {
            $object->setHomeTeamStartingPitcherID($data['HomeTeamStartingPitcherID']);
        }
        if (\array_key_exists('CurrentPitchingTeamID', $data)) {
            $object->setCurrentPitchingTeamID($data['CurrentPitchingTeamID']);
        }
        if (\array_key_exists('CurrentHittingTeamID', $data)) {
            $object->setCurrentHittingTeamID($data['CurrentHittingTeamID']);
        }
        if (\array_key_exists('PointSpread', $data)) {
            $object->setPointSpread($data['PointSpread']);
        }
        if (\array_key_exists('OverUnder', $data)) {
            $object->setOverUnder($data['OverUnder']);
        }
        if (\array_key_exists('AwayTeamMoneyLine', $data)) {
            $object->setAwayTeamMoneyLine($data['AwayTeamMoneyLine']);
        }
        if (\array_key_exists('HomeTeamMoneyLine', $data)) {
            $object->setHomeTeamMoneyLine($data['HomeTeamMoneyLine']);
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
        if (\array_key_exists('ForecastWindDirection', $data)) {
            $object->setForecastWindDirection($data['ForecastWindDirection']);
        }
        if (\array_key_exists('RescheduledFromGameID', $data)) {
            $object->setRescheduledFromGameID($data['RescheduledFromGameID']);
        }
        if (\array_key_exists('RunnerOnFirst', $data)) {
            $object->setRunnerOnFirst($data['RunnerOnFirst']);
        }
        if (\array_key_exists('RunnerOnSecond', $data)) {
            $object->setRunnerOnSecond($data['RunnerOnSecond']);
        }
        if (\array_key_exists('RunnerOnThird', $data)) {
            $object->setRunnerOnThird($data['RunnerOnThird']);
        }
        if (\array_key_exists('AwayTeamStartingPitcher', $data)) {
            $object->setAwayTeamStartingPitcher($data['AwayTeamStartingPitcher']);
        }
        if (\array_key_exists('HomeTeamStartingPitcher', $data)) {
            $object->setHomeTeamStartingPitcher($data['HomeTeamStartingPitcher']);
        }
        if (\array_key_exists('CurrentPitcher', $data)) {
            $object->setCurrentPitcher($data['CurrentPitcher']);
        }
        if (\array_key_exists('CurrentHitter', $data)) {
            $object->setCurrentHitter($data['CurrentHitter']);
        }
        if (\array_key_exists('WinningPitcher', $data)) {
            $object->setWinningPitcher($data['WinningPitcher']);
        }
        if (\array_key_exists('LosingPitcher', $data)) {
            $object->setLosingPitcher($data['LosingPitcher']);
        }
        if (\array_key_exists('SavingPitcher', $data)) {
            $object->setSavingPitcher($data['SavingPitcher']);
        }
        if (\array_key_exists('DueUpHitterID1', $data)) {
            $object->setDueUpHitterID1($data['DueUpHitterID1']);
        }
        if (\array_key_exists('DueUpHitterID2', $data)) {
            $object->setDueUpHitterID2($data['DueUpHitterID2']);
        }
        if (\array_key_exists('DueUpHitterID3', $data)) {
            $object->setDueUpHitterID3($data['DueUpHitterID3']);
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
        if (\array_key_exists('LastPlay', $data)) {
            $object->setLastPlay($data['LastPlay']);
        }
        if (\array_key_exists('IsClosed', $data)) {
            $object->setIsClosed($data['IsClosed']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('Innings', $data)) {
            $values = array();
            foreach ($data['Innings'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\MLB\\Model\\Inning', 'json', $context);
            }
            $object->setInnings($values);
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
        if (\array_key_exists('InningDescription', $data)) {
            $object->setInningDescription($data['InningDescription']);
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
        if (null !== $object->getGameID()) {
            $data['GameID'] = $object->getGameID();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus();
        }
        if (null !== $object->getDay()) {
            $data['Day'] = $object->getDay();
        }
        if (null !== $object->getDateTime()) {
            $data['DateTime'] = $object->getDateTime();
        }
        if (null !== $object->getAwayTeam()) {
            $data['AwayTeam'] = $object->getAwayTeam();
        }
        if (null !== $object->getHomeTeam()) {
            $data['HomeTeam'] = $object->getHomeTeam();
        }
        if (null !== $object->getAwayTeamID()) {
            $data['AwayTeamID'] = $object->getAwayTeamID();
        }
        if (null !== $object->getHomeTeamID()) {
            $data['HomeTeamID'] = $object->getHomeTeamID();
        }
        if (null !== $object->getRescheduledGameID()) {
            $data['RescheduledGameID'] = $object->getRescheduledGameID();
        }
        if (null !== $object->getStadiumID()) {
            $data['StadiumID'] = $object->getStadiumID();
        }
        if (null !== $object->getChannel()) {
            $data['Channel'] = $object->getChannel();
        }
        if (null !== $object->getInning()) {
            $data['Inning'] = $object->getInning();
        }
        if (null !== $object->getInningHalf()) {
            $data['InningHalf'] = $object->getInningHalf();
        }
        if (null !== $object->getAwayTeamRuns()) {
            $data['AwayTeamRuns'] = $object->getAwayTeamRuns();
        }
        if (null !== $object->getHomeTeamRuns()) {
            $data['HomeTeamRuns'] = $object->getHomeTeamRuns();
        }
        if (null !== $object->getAwayTeamHits()) {
            $data['AwayTeamHits'] = $object->getAwayTeamHits();
        }
        if (null !== $object->getHomeTeamHits()) {
            $data['HomeTeamHits'] = $object->getHomeTeamHits();
        }
        if (null !== $object->getAwayTeamErrors()) {
            $data['AwayTeamErrors'] = $object->getAwayTeamErrors();
        }
        if (null !== $object->getHomeTeamErrors()) {
            $data['HomeTeamErrors'] = $object->getHomeTeamErrors();
        }
        if (null !== $object->getWinningPitcherID()) {
            $data['WinningPitcherID'] = $object->getWinningPitcherID();
        }
        if (null !== $object->getLosingPitcherID()) {
            $data['LosingPitcherID'] = $object->getLosingPitcherID();
        }
        if (null !== $object->getSavingPitcherID()) {
            $data['SavingPitcherID'] = $object->getSavingPitcherID();
        }
        if (null !== $object->getAttendance()) {
            $data['Attendance'] = $object->getAttendance();
        }
        if (null !== $object->getAwayTeamProbablePitcherID()) {
            $data['AwayTeamProbablePitcherID'] = $object->getAwayTeamProbablePitcherID();
        }
        if (null !== $object->getHomeTeamProbablePitcherID()) {
            $data['HomeTeamProbablePitcherID'] = $object->getHomeTeamProbablePitcherID();
        }
        if (null !== $object->getOuts()) {
            $data['Outs'] = $object->getOuts();
        }
        if (null !== $object->getBalls()) {
            $data['Balls'] = $object->getBalls();
        }
        if (null !== $object->getStrikes()) {
            $data['Strikes'] = $object->getStrikes();
        }
        if (null !== $object->getCurrentPitcherID()) {
            $data['CurrentPitcherID'] = $object->getCurrentPitcherID();
        }
        if (null !== $object->getCurrentHitterID()) {
            $data['CurrentHitterID'] = $object->getCurrentHitterID();
        }
        if (null !== $object->getAwayTeamStartingPitcherID()) {
            $data['AwayTeamStartingPitcherID'] = $object->getAwayTeamStartingPitcherID();
        }
        if (null !== $object->getHomeTeamStartingPitcherID()) {
            $data['HomeTeamStartingPitcherID'] = $object->getHomeTeamStartingPitcherID();
        }
        if (null !== $object->getCurrentPitchingTeamID()) {
            $data['CurrentPitchingTeamID'] = $object->getCurrentPitchingTeamID();
        }
        if (null !== $object->getCurrentHittingTeamID()) {
            $data['CurrentHittingTeamID'] = $object->getCurrentHittingTeamID();
        }
        if (null !== $object->getPointSpread()) {
            $data['PointSpread'] = $object->getPointSpread();
        }
        if (null !== $object->getOverUnder()) {
            $data['OverUnder'] = $object->getOverUnder();
        }
        if (null !== $object->getAwayTeamMoneyLine()) {
            $data['AwayTeamMoneyLine'] = $object->getAwayTeamMoneyLine();
        }
        if (null !== $object->getHomeTeamMoneyLine()) {
            $data['HomeTeamMoneyLine'] = $object->getHomeTeamMoneyLine();
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
        if (null !== $object->getForecastWindDirection()) {
            $data['ForecastWindDirection'] = $object->getForecastWindDirection();
        }
        if (null !== $object->getRescheduledFromGameID()) {
            $data['RescheduledFromGameID'] = $object->getRescheduledFromGameID();
        }
        if (null !== $object->getRunnerOnFirst()) {
            $data['RunnerOnFirst'] = $object->getRunnerOnFirst();
        }
        if (null !== $object->getRunnerOnSecond()) {
            $data['RunnerOnSecond'] = $object->getRunnerOnSecond();
        }
        if (null !== $object->getRunnerOnThird()) {
            $data['RunnerOnThird'] = $object->getRunnerOnThird();
        }
        if (null !== $object->getAwayTeamStartingPitcher()) {
            $data['AwayTeamStartingPitcher'] = $object->getAwayTeamStartingPitcher();
        }
        if (null !== $object->getHomeTeamStartingPitcher()) {
            $data['HomeTeamStartingPitcher'] = $object->getHomeTeamStartingPitcher();
        }
        if (null !== $object->getCurrentPitcher()) {
            $data['CurrentPitcher'] = $object->getCurrentPitcher();
        }
        if (null !== $object->getCurrentHitter()) {
            $data['CurrentHitter'] = $object->getCurrentHitter();
        }
        if (null !== $object->getWinningPitcher()) {
            $data['WinningPitcher'] = $object->getWinningPitcher();
        }
        if (null !== $object->getLosingPitcher()) {
            $data['LosingPitcher'] = $object->getLosingPitcher();
        }
        if (null !== $object->getSavingPitcher()) {
            $data['SavingPitcher'] = $object->getSavingPitcher();
        }
        if (null !== $object->getDueUpHitterID1()) {
            $data['DueUpHitterID1'] = $object->getDueUpHitterID1();
        }
        if (null !== $object->getDueUpHitterID2()) {
            $data['DueUpHitterID2'] = $object->getDueUpHitterID2();
        }
        if (null !== $object->getDueUpHitterID3()) {
            $data['DueUpHitterID3'] = $object->getDueUpHitterID3();
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
        if (null !== $object->getLastPlay()) {
            $data['LastPlay'] = $object->getLastPlay();
        }
        if (null !== $object->getIsClosed()) {
            $data['IsClosed'] = $object->getIsClosed();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getInnings()) {
            $values = array();
            foreach ($object->getInnings() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Innings'] = $values;
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
        if (null !== $object->getInningDescription()) {
            $data['InningDescription'] = $object->getInningDescription();
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