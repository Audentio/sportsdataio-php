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
        if (\array_key_exists('Status', $data) && $data['Status'] !== null) {
            $object->setStatus($data['Status']);
        }
        elseif (\array_key_exists('Status', $data) && $data['Status'] === null) {
            $object->setStatus(null);
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
        if (\array_key_exists('AwayTeamID', $data)) {
            $object->setAwayTeamID($data['AwayTeamID']);
        }
        if (\array_key_exists('HomeTeamID', $data)) {
            $object->setHomeTeamID($data['HomeTeamID']);
        }
        if (\array_key_exists('RescheduledGameID', $data) && $data['RescheduledGameID'] !== null) {
            $object->setRescheduledGameID($data['RescheduledGameID']);
        }
        elseif (\array_key_exists('RescheduledGameID', $data) && $data['RescheduledGameID'] === null) {
            $object->setRescheduledGameID(null);
        }
        if (\array_key_exists('StadiumID', $data) && $data['StadiumID'] !== null) {
            $object->setStadiumID($data['StadiumID']);
        }
        elseif (\array_key_exists('StadiumID', $data) && $data['StadiumID'] === null) {
            $object->setStadiumID(null);
        }
        if (\array_key_exists('Channel', $data) && $data['Channel'] !== null) {
            $object->setChannel($data['Channel']);
        }
        elseif (\array_key_exists('Channel', $data) && $data['Channel'] === null) {
            $object->setChannel(null);
        }
        if (\array_key_exists('Inning', $data) && $data['Inning'] !== null) {
            $object->setInning($data['Inning']);
        }
        elseif (\array_key_exists('Inning', $data) && $data['Inning'] === null) {
            $object->setInning(null);
        }
        if (\array_key_exists('InningHalf', $data) && $data['InningHalf'] !== null) {
            $object->setInningHalf($data['InningHalf']);
        }
        elseif (\array_key_exists('InningHalf', $data) && $data['InningHalf'] === null) {
            $object->setInningHalf(null);
        }
        if (\array_key_exists('AwayTeamRuns', $data) && $data['AwayTeamRuns'] !== null) {
            $object->setAwayTeamRuns($data['AwayTeamRuns']);
        }
        elseif (\array_key_exists('AwayTeamRuns', $data) && $data['AwayTeamRuns'] === null) {
            $object->setAwayTeamRuns(null);
        }
        if (\array_key_exists('HomeTeamRuns', $data) && $data['HomeTeamRuns'] !== null) {
            $object->setHomeTeamRuns($data['HomeTeamRuns']);
        }
        elseif (\array_key_exists('HomeTeamRuns', $data) && $data['HomeTeamRuns'] === null) {
            $object->setHomeTeamRuns(null);
        }
        if (\array_key_exists('AwayTeamHits', $data) && $data['AwayTeamHits'] !== null) {
            $object->setAwayTeamHits($data['AwayTeamHits']);
        }
        elseif (\array_key_exists('AwayTeamHits', $data) && $data['AwayTeamHits'] === null) {
            $object->setAwayTeamHits(null);
        }
        if (\array_key_exists('HomeTeamHits', $data) && $data['HomeTeamHits'] !== null) {
            $object->setHomeTeamHits($data['HomeTeamHits']);
        }
        elseif (\array_key_exists('HomeTeamHits', $data) && $data['HomeTeamHits'] === null) {
            $object->setHomeTeamHits(null);
        }
        if (\array_key_exists('AwayTeamErrors', $data) && $data['AwayTeamErrors'] !== null) {
            $object->setAwayTeamErrors($data['AwayTeamErrors']);
        }
        elseif (\array_key_exists('AwayTeamErrors', $data) && $data['AwayTeamErrors'] === null) {
            $object->setAwayTeamErrors(null);
        }
        if (\array_key_exists('HomeTeamErrors', $data) && $data['HomeTeamErrors'] !== null) {
            $object->setHomeTeamErrors($data['HomeTeamErrors']);
        }
        elseif (\array_key_exists('HomeTeamErrors', $data) && $data['HomeTeamErrors'] === null) {
            $object->setHomeTeamErrors(null);
        }
        if (\array_key_exists('WinningPitcherID', $data) && $data['WinningPitcherID'] !== null) {
            $object->setWinningPitcherID($data['WinningPitcherID']);
        }
        elseif (\array_key_exists('WinningPitcherID', $data) && $data['WinningPitcherID'] === null) {
            $object->setWinningPitcherID(null);
        }
        if (\array_key_exists('LosingPitcherID', $data) && $data['LosingPitcherID'] !== null) {
            $object->setLosingPitcherID($data['LosingPitcherID']);
        }
        elseif (\array_key_exists('LosingPitcherID', $data) && $data['LosingPitcherID'] === null) {
            $object->setLosingPitcherID(null);
        }
        if (\array_key_exists('SavingPitcherID', $data) && $data['SavingPitcherID'] !== null) {
            $object->setSavingPitcherID($data['SavingPitcherID']);
        }
        elseif (\array_key_exists('SavingPitcherID', $data) && $data['SavingPitcherID'] === null) {
            $object->setSavingPitcherID(null);
        }
        if (\array_key_exists('Attendance', $data) && $data['Attendance'] !== null) {
            $object->setAttendance($data['Attendance']);
        }
        elseif (\array_key_exists('Attendance', $data) && $data['Attendance'] === null) {
            $object->setAttendance(null);
        }
        if (\array_key_exists('AwayTeamProbablePitcherID', $data) && $data['AwayTeamProbablePitcherID'] !== null) {
            $object->setAwayTeamProbablePitcherID($data['AwayTeamProbablePitcherID']);
        }
        elseif (\array_key_exists('AwayTeamProbablePitcherID', $data) && $data['AwayTeamProbablePitcherID'] === null) {
            $object->setAwayTeamProbablePitcherID(null);
        }
        if (\array_key_exists('HomeTeamProbablePitcherID', $data) && $data['HomeTeamProbablePitcherID'] !== null) {
            $object->setHomeTeamProbablePitcherID($data['HomeTeamProbablePitcherID']);
        }
        elseif (\array_key_exists('HomeTeamProbablePitcherID', $data) && $data['HomeTeamProbablePitcherID'] === null) {
            $object->setHomeTeamProbablePitcherID(null);
        }
        if (\array_key_exists('Outs', $data) && $data['Outs'] !== null) {
            $object->setOuts($data['Outs']);
        }
        elseif (\array_key_exists('Outs', $data) && $data['Outs'] === null) {
            $object->setOuts(null);
        }
        if (\array_key_exists('Balls', $data) && $data['Balls'] !== null) {
            $object->setBalls($data['Balls']);
        }
        elseif (\array_key_exists('Balls', $data) && $data['Balls'] === null) {
            $object->setBalls(null);
        }
        if (\array_key_exists('Strikes', $data) && $data['Strikes'] !== null) {
            $object->setStrikes($data['Strikes']);
        }
        elseif (\array_key_exists('Strikes', $data) && $data['Strikes'] === null) {
            $object->setStrikes(null);
        }
        if (\array_key_exists('CurrentPitcherID', $data) && $data['CurrentPitcherID'] !== null) {
            $object->setCurrentPitcherID($data['CurrentPitcherID']);
        }
        elseif (\array_key_exists('CurrentPitcherID', $data) && $data['CurrentPitcherID'] === null) {
            $object->setCurrentPitcherID(null);
        }
        if (\array_key_exists('CurrentHitterID', $data) && $data['CurrentHitterID'] !== null) {
            $object->setCurrentHitterID($data['CurrentHitterID']);
        }
        elseif (\array_key_exists('CurrentHitterID', $data) && $data['CurrentHitterID'] === null) {
            $object->setCurrentHitterID(null);
        }
        if (\array_key_exists('AwayTeamStartingPitcherID', $data) && $data['AwayTeamStartingPitcherID'] !== null) {
            $object->setAwayTeamStartingPitcherID($data['AwayTeamStartingPitcherID']);
        }
        elseif (\array_key_exists('AwayTeamStartingPitcherID', $data) && $data['AwayTeamStartingPitcherID'] === null) {
            $object->setAwayTeamStartingPitcherID(null);
        }
        if (\array_key_exists('HomeTeamStartingPitcherID', $data) && $data['HomeTeamStartingPitcherID'] !== null) {
            $object->setHomeTeamStartingPitcherID($data['HomeTeamStartingPitcherID']);
        }
        elseif (\array_key_exists('HomeTeamStartingPitcherID', $data) && $data['HomeTeamStartingPitcherID'] === null) {
            $object->setHomeTeamStartingPitcherID(null);
        }
        if (\array_key_exists('CurrentPitchingTeamID', $data) && $data['CurrentPitchingTeamID'] !== null) {
            $object->setCurrentPitchingTeamID($data['CurrentPitchingTeamID']);
        }
        elseif (\array_key_exists('CurrentPitchingTeamID', $data) && $data['CurrentPitchingTeamID'] === null) {
            $object->setCurrentPitchingTeamID(null);
        }
        if (\array_key_exists('CurrentHittingTeamID', $data) && $data['CurrentHittingTeamID'] !== null) {
            $object->setCurrentHittingTeamID($data['CurrentHittingTeamID']);
        }
        elseif (\array_key_exists('CurrentHittingTeamID', $data) && $data['CurrentHittingTeamID'] === null) {
            $object->setCurrentHittingTeamID(null);
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
        if (\array_key_exists('ForecastWindDirection', $data) && $data['ForecastWindDirection'] !== null) {
            $object->setForecastWindDirection($data['ForecastWindDirection']);
        }
        elseif (\array_key_exists('ForecastWindDirection', $data) && $data['ForecastWindDirection'] === null) {
            $object->setForecastWindDirection(null);
        }
        if (\array_key_exists('RescheduledFromGameID', $data) && $data['RescheduledFromGameID'] !== null) {
            $object->setRescheduledFromGameID($data['RescheduledFromGameID']);
        }
        elseif (\array_key_exists('RescheduledFromGameID', $data) && $data['RescheduledFromGameID'] === null) {
            $object->setRescheduledFromGameID(null);
        }
        if (\array_key_exists('RunnerOnFirst', $data) && $data['RunnerOnFirst'] !== null) {
            $object->setRunnerOnFirst($data['RunnerOnFirst']);
        }
        elseif (\array_key_exists('RunnerOnFirst', $data) && $data['RunnerOnFirst'] === null) {
            $object->setRunnerOnFirst(null);
        }
        if (\array_key_exists('RunnerOnSecond', $data) && $data['RunnerOnSecond'] !== null) {
            $object->setRunnerOnSecond($data['RunnerOnSecond']);
        }
        elseif (\array_key_exists('RunnerOnSecond', $data) && $data['RunnerOnSecond'] === null) {
            $object->setRunnerOnSecond(null);
        }
        if (\array_key_exists('RunnerOnThird', $data) && $data['RunnerOnThird'] !== null) {
            $object->setRunnerOnThird($data['RunnerOnThird']);
        }
        elseif (\array_key_exists('RunnerOnThird', $data) && $data['RunnerOnThird'] === null) {
            $object->setRunnerOnThird(null);
        }
        if (\array_key_exists('AwayTeamStartingPitcher', $data) && $data['AwayTeamStartingPitcher'] !== null) {
            $object->setAwayTeamStartingPitcher($data['AwayTeamStartingPitcher']);
        }
        elseif (\array_key_exists('AwayTeamStartingPitcher', $data) && $data['AwayTeamStartingPitcher'] === null) {
            $object->setAwayTeamStartingPitcher(null);
        }
        if (\array_key_exists('HomeTeamStartingPitcher', $data) && $data['HomeTeamStartingPitcher'] !== null) {
            $object->setHomeTeamStartingPitcher($data['HomeTeamStartingPitcher']);
        }
        elseif (\array_key_exists('HomeTeamStartingPitcher', $data) && $data['HomeTeamStartingPitcher'] === null) {
            $object->setHomeTeamStartingPitcher(null);
        }
        if (\array_key_exists('CurrentPitcher', $data) && $data['CurrentPitcher'] !== null) {
            $object->setCurrentPitcher($data['CurrentPitcher']);
        }
        elseif (\array_key_exists('CurrentPitcher', $data) && $data['CurrentPitcher'] === null) {
            $object->setCurrentPitcher(null);
        }
        if (\array_key_exists('CurrentHitter', $data) && $data['CurrentHitter'] !== null) {
            $object->setCurrentHitter($data['CurrentHitter']);
        }
        elseif (\array_key_exists('CurrentHitter', $data) && $data['CurrentHitter'] === null) {
            $object->setCurrentHitter(null);
        }
        if (\array_key_exists('WinningPitcher', $data) && $data['WinningPitcher'] !== null) {
            $object->setWinningPitcher($data['WinningPitcher']);
        }
        elseif (\array_key_exists('WinningPitcher', $data) && $data['WinningPitcher'] === null) {
            $object->setWinningPitcher(null);
        }
        if (\array_key_exists('LosingPitcher', $data) && $data['LosingPitcher'] !== null) {
            $object->setLosingPitcher($data['LosingPitcher']);
        }
        elseif (\array_key_exists('LosingPitcher', $data) && $data['LosingPitcher'] === null) {
            $object->setLosingPitcher(null);
        }
        if (\array_key_exists('SavingPitcher', $data) && $data['SavingPitcher'] !== null) {
            $object->setSavingPitcher($data['SavingPitcher']);
        }
        elseif (\array_key_exists('SavingPitcher', $data) && $data['SavingPitcher'] === null) {
            $object->setSavingPitcher(null);
        }
        if (\array_key_exists('DueUpHitterID1', $data) && $data['DueUpHitterID1'] !== null) {
            $object->setDueUpHitterID1($data['DueUpHitterID1']);
        }
        elseif (\array_key_exists('DueUpHitterID1', $data) && $data['DueUpHitterID1'] === null) {
            $object->setDueUpHitterID1(null);
        }
        if (\array_key_exists('DueUpHitterID2', $data) && $data['DueUpHitterID2'] !== null) {
            $object->setDueUpHitterID2($data['DueUpHitterID2']);
        }
        elseif (\array_key_exists('DueUpHitterID2', $data) && $data['DueUpHitterID2'] === null) {
            $object->setDueUpHitterID2(null);
        }
        if (\array_key_exists('DueUpHitterID3', $data) && $data['DueUpHitterID3'] !== null) {
            $object->setDueUpHitterID3($data['DueUpHitterID3']);
        }
        elseif (\array_key_exists('DueUpHitterID3', $data) && $data['DueUpHitterID3'] === null) {
            $object->setDueUpHitterID3(null);
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
        if (\array_key_exists('LastPlay', $data) && $data['LastPlay'] !== null) {
            $object->setLastPlay($data['LastPlay']);
        }
        elseif (\array_key_exists('LastPlay', $data) && $data['LastPlay'] === null) {
            $object->setLastPlay(null);
        }
        if (\array_key_exists('IsClosed', $data)) {
            $object->setIsClosed($data['IsClosed']);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('Innings', $data)) {
            $values = array();
            foreach ($data['Innings'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\MLB\\Model\\Inning', 'json', $context);
            }
            $object->setInnings($values);
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
        if (\array_key_exists('InningDescription', $data) && $data['InningDescription'] !== null) {
            $object->setInningDescription($data['InningDescription']);
        }
        elseif (\array_key_exists('InningDescription', $data) && $data['InningDescription'] === null) {
            $object->setInningDescription(null);
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