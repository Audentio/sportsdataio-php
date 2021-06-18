<?php

namespace Sportsdata\API\CBB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CBB\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\CBB\\Model\\Game';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CBB\\Model\\Game';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CBB\Model\Game();
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
        if (\array_key_exists('AwayTeamScore', $data) && $data['AwayTeamScore'] !== null) {
            $object->setAwayTeamScore($data['AwayTeamScore']);
        }
        elseif (\array_key_exists('AwayTeamScore', $data) && $data['AwayTeamScore'] === null) {
            $object->setAwayTeamScore(null);
        }
        if (\array_key_exists('HomeTeamScore', $data) && $data['HomeTeamScore'] !== null) {
            $object->setHomeTeamScore($data['HomeTeamScore']);
        }
        elseif (\array_key_exists('HomeTeamScore', $data) && $data['HomeTeamScore'] === null) {
            $object->setHomeTeamScore(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('Period', $data) && $data['Period'] !== null) {
            $object->setPeriod($data['Period']);
        }
        elseif (\array_key_exists('Period', $data) && $data['Period'] === null) {
            $object->setPeriod(null);
        }
        if (\array_key_exists('TimeRemainingMinutes', $data) && $data['TimeRemainingMinutes'] !== null) {
            $object->setTimeRemainingMinutes($data['TimeRemainingMinutes']);
        }
        elseif (\array_key_exists('TimeRemainingMinutes', $data) && $data['TimeRemainingMinutes'] === null) {
            $object->setTimeRemainingMinutes(null);
        }
        if (\array_key_exists('TimeRemainingSeconds', $data) && $data['TimeRemainingSeconds'] !== null) {
            $object->setTimeRemainingSeconds($data['TimeRemainingSeconds']);
        }
        elseif (\array_key_exists('TimeRemainingSeconds', $data) && $data['TimeRemainingSeconds'] === null) {
            $object->setTimeRemainingSeconds(null);
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
        if (\array_key_exists('GlobalGameID', $data)) {
            $object->setGlobalGameID($data['GlobalGameID']);
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
        if (\array_key_exists('TournamentID', $data) && $data['TournamentID'] !== null) {
            $object->setTournamentID($data['TournamentID']);
        }
        elseif (\array_key_exists('TournamentID', $data) && $data['TournamentID'] === null) {
            $object->setTournamentID(null);
        }
        if (\array_key_exists('Bracket', $data) && $data['Bracket'] !== null) {
            $object->setBracket($data['Bracket']);
        }
        elseif (\array_key_exists('Bracket', $data) && $data['Bracket'] === null) {
            $object->setBracket(null);
        }
        if (\array_key_exists('Round', $data) && $data['Round'] !== null) {
            $object->setRound($data['Round']);
        }
        elseif (\array_key_exists('Round', $data) && $data['Round'] === null) {
            $object->setRound(null);
        }
        if (\array_key_exists('AwayTeamSeed', $data) && $data['AwayTeamSeed'] !== null) {
            $object->setAwayTeamSeed($data['AwayTeamSeed']);
        }
        elseif (\array_key_exists('AwayTeamSeed', $data) && $data['AwayTeamSeed'] === null) {
            $object->setAwayTeamSeed(null);
        }
        if (\array_key_exists('HomeTeamSeed', $data) && $data['HomeTeamSeed'] !== null) {
            $object->setHomeTeamSeed($data['HomeTeamSeed']);
        }
        elseif (\array_key_exists('HomeTeamSeed', $data) && $data['HomeTeamSeed'] === null) {
            $object->setHomeTeamSeed(null);
        }
        if (\array_key_exists('AwayTeamPreviousGameID', $data) && $data['AwayTeamPreviousGameID'] !== null) {
            $object->setAwayTeamPreviousGameID($data['AwayTeamPreviousGameID']);
        }
        elseif (\array_key_exists('AwayTeamPreviousGameID', $data) && $data['AwayTeamPreviousGameID'] === null) {
            $object->setAwayTeamPreviousGameID(null);
        }
        if (\array_key_exists('HomeTeamPreviousGameID', $data) && $data['HomeTeamPreviousGameID'] !== null) {
            $object->setHomeTeamPreviousGameID($data['HomeTeamPreviousGameID']);
        }
        elseif (\array_key_exists('HomeTeamPreviousGameID', $data) && $data['HomeTeamPreviousGameID'] === null) {
            $object->setHomeTeamPreviousGameID(null);
        }
        if (\array_key_exists('AwayTeamPreviousGlobalGameID', $data) && $data['AwayTeamPreviousGlobalGameID'] !== null) {
            $object->setAwayTeamPreviousGlobalGameID($data['AwayTeamPreviousGlobalGameID']);
        }
        elseif (\array_key_exists('AwayTeamPreviousGlobalGameID', $data) && $data['AwayTeamPreviousGlobalGameID'] === null) {
            $object->setAwayTeamPreviousGlobalGameID(null);
        }
        if (\array_key_exists('HomeTeamPreviousGlobalGameID', $data) && $data['HomeTeamPreviousGlobalGameID'] !== null) {
            $object->setHomeTeamPreviousGlobalGameID($data['HomeTeamPreviousGlobalGameID']);
        }
        elseif (\array_key_exists('HomeTeamPreviousGlobalGameID', $data) && $data['HomeTeamPreviousGlobalGameID'] === null) {
            $object->setHomeTeamPreviousGlobalGameID(null);
        }
        if (\array_key_exists('TournamentDisplayOrder', $data) && $data['TournamentDisplayOrder'] !== null) {
            $object->setTournamentDisplayOrder($data['TournamentDisplayOrder']);
        }
        elseif (\array_key_exists('TournamentDisplayOrder', $data) && $data['TournamentDisplayOrder'] === null) {
            $object->setTournamentDisplayOrder(null);
        }
        if (\array_key_exists('TournamentDisplayOrderForHomeTeam', $data) && $data['TournamentDisplayOrderForHomeTeam'] !== null) {
            $object->setTournamentDisplayOrderForHomeTeam($data['TournamentDisplayOrderForHomeTeam']);
        }
        elseif (\array_key_exists('TournamentDisplayOrderForHomeTeam', $data) && $data['TournamentDisplayOrderForHomeTeam'] === null) {
            $object->setTournamentDisplayOrderForHomeTeam(null);
        }
        if (\array_key_exists('Periods', $data)) {
            $values = array();
            foreach ($data['Periods'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\CBB\\Model\\Period', 'json', $context);
            }
            $object->setPeriods($values);
        }
        if (\array_key_exists('IsClosed', $data)) {
            $object->setIsClosed($data['IsClosed']);
        }
        if (\array_key_exists('GameEndDateTime', $data) && $data['GameEndDateTime'] !== null) {
            $object->setGameEndDateTime($data['GameEndDateTime']);
        }
        elseif (\array_key_exists('GameEndDateTime', $data) && $data['GameEndDateTime'] === null) {
            $object->setGameEndDateTime(null);
        }
        if (\array_key_exists('Stadium', $data)) {
            $object->setStadium($this->denormalizer->denormalize($data['Stadium'], 'Sportsdata\\API\\CBB\\Model\\Stadium', 'json', $context));
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
        if (\array_key_exists('TopTeamPreviousGameId', $data) && $data['TopTeamPreviousGameId'] !== null) {
            $object->setTopTeamPreviousGameId($data['TopTeamPreviousGameId']);
        }
        elseif (\array_key_exists('TopTeamPreviousGameId', $data) && $data['TopTeamPreviousGameId'] === null) {
            $object->setTopTeamPreviousGameId(null);
        }
        if (\array_key_exists('BottomTeamPreviousGameId', $data) && $data['BottomTeamPreviousGameId'] !== null) {
            $object->setBottomTeamPreviousGameId($data['BottomTeamPreviousGameId']);
        }
        elseif (\array_key_exists('BottomTeamPreviousGameId', $data) && $data['BottomTeamPreviousGameId'] === null) {
            $object->setBottomTeamPreviousGameId(null);
        }
        if (\array_key_exists('Channel', $data) && $data['Channel'] !== null) {
            $object->setChannel($data['Channel']);
        }
        elseif (\array_key_exists('Channel', $data) && $data['Channel'] === null) {
            $object->setChannel(null);
        }
        if (\array_key_exists('NeutralVenue', $data) && $data['NeutralVenue'] !== null) {
            $object->setNeutralVenue($data['NeutralVenue']);
        }
        elseif (\array_key_exists('NeutralVenue', $data) && $data['NeutralVenue'] === null) {
            $object->setNeutralVenue(null);
        }
        if (\array_key_exists('AwayPointSpreadPayout', $data) && $data['AwayPointSpreadPayout'] !== null) {
            $object->setAwayPointSpreadPayout($data['AwayPointSpreadPayout']);
        }
        elseif (\array_key_exists('AwayPointSpreadPayout', $data) && $data['AwayPointSpreadPayout'] === null) {
            $object->setAwayPointSpreadPayout(null);
        }
        if (\array_key_exists('HomePointSpreadPayout', $data) && $data['HomePointSpreadPayout'] !== null) {
            $object->setHomePointSpreadPayout($data['HomePointSpreadPayout']);
        }
        elseif (\array_key_exists('HomePointSpreadPayout', $data) && $data['HomePointSpreadPayout'] === null) {
            $object->setHomePointSpreadPayout(null);
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
        if (null !== $object->getAwayTeamScore()) {
            $data['AwayTeamScore'] = $object->getAwayTeamScore();
        }
        if (null !== $object->getHomeTeamScore()) {
            $data['HomeTeamScore'] = $object->getHomeTeamScore();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getPeriod()) {
            $data['Period'] = $object->getPeriod();
        }
        if (null !== $object->getTimeRemainingMinutes()) {
            $data['TimeRemainingMinutes'] = $object->getTimeRemainingMinutes();
        }
        if (null !== $object->getTimeRemainingSeconds()) {
            $data['TimeRemainingSeconds'] = $object->getTimeRemainingSeconds();
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
        if (null !== $object->getGlobalGameID()) {
            $data['GlobalGameID'] = $object->getGlobalGameID();
        }
        if (null !== $object->getGlobalAwayTeamID()) {
            $data['GlobalAwayTeamID'] = $object->getGlobalAwayTeamID();
        }
        if (null !== $object->getGlobalHomeTeamID()) {
            $data['GlobalHomeTeamID'] = $object->getGlobalHomeTeamID();
        }
        if (null !== $object->getTournamentID()) {
            $data['TournamentID'] = $object->getTournamentID();
        }
        if (null !== $object->getBracket()) {
            $data['Bracket'] = $object->getBracket();
        }
        if (null !== $object->getRound()) {
            $data['Round'] = $object->getRound();
        }
        if (null !== $object->getAwayTeamSeed()) {
            $data['AwayTeamSeed'] = $object->getAwayTeamSeed();
        }
        if (null !== $object->getHomeTeamSeed()) {
            $data['HomeTeamSeed'] = $object->getHomeTeamSeed();
        }
        if (null !== $object->getAwayTeamPreviousGameID()) {
            $data['AwayTeamPreviousGameID'] = $object->getAwayTeamPreviousGameID();
        }
        if (null !== $object->getHomeTeamPreviousGameID()) {
            $data['HomeTeamPreviousGameID'] = $object->getHomeTeamPreviousGameID();
        }
        if (null !== $object->getAwayTeamPreviousGlobalGameID()) {
            $data['AwayTeamPreviousGlobalGameID'] = $object->getAwayTeamPreviousGlobalGameID();
        }
        if (null !== $object->getHomeTeamPreviousGlobalGameID()) {
            $data['HomeTeamPreviousGlobalGameID'] = $object->getHomeTeamPreviousGlobalGameID();
        }
        if (null !== $object->getTournamentDisplayOrder()) {
            $data['TournamentDisplayOrder'] = $object->getTournamentDisplayOrder();
        }
        if (null !== $object->getTournamentDisplayOrderForHomeTeam()) {
            $data['TournamentDisplayOrderForHomeTeam'] = $object->getTournamentDisplayOrderForHomeTeam();
        }
        if (null !== $object->getPeriods()) {
            $values = array();
            foreach ($object->getPeriods() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Periods'] = $values;
        }
        if (null !== $object->getIsClosed()) {
            $data['IsClosed'] = $object->getIsClosed();
        }
        if (null !== $object->getGameEndDateTime()) {
            $data['GameEndDateTime'] = $object->getGameEndDateTime();
        }
        if (null !== $object->getStadium()) {
            $data['Stadium'] = $this->normalizer->normalize($object->getStadium(), 'json', $context);
        }
        if (null !== $object->getHomeRotationNumber()) {
            $data['HomeRotationNumber'] = $object->getHomeRotationNumber();
        }
        if (null !== $object->getAwayRotationNumber()) {
            $data['AwayRotationNumber'] = $object->getAwayRotationNumber();
        }
        if (null !== $object->getTopTeamPreviousGameId()) {
            $data['TopTeamPreviousGameId'] = $object->getTopTeamPreviousGameId();
        }
        if (null !== $object->getBottomTeamPreviousGameId()) {
            $data['BottomTeamPreviousGameId'] = $object->getBottomTeamPreviousGameId();
        }
        if (null !== $object->getChannel()) {
            $data['Channel'] = $object->getChannel();
        }
        if (null !== $object->getNeutralVenue()) {
            $data['NeutralVenue'] = $object->getNeutralVenue();
        }
        if (null !== $object->getAwayPointSpreadPayout()) {
            $data['AwayPointSpreadPayout'] = $object->getAwayPointSpreadPayout();
        }
        if (null !== $object->getHomePointSpreadPayout()) {
            $data['HomePointSpreadPayout'] = $object->getHomePointSpreadPayout();
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