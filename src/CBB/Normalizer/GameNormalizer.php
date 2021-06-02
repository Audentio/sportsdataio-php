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
        if (\array_key_exists('AwayTeamScore', $data)) {
            $object->setAwayTeamScore($data['AwayTeamScore']);
        }
        if (\array_key_exists('HomeTeamScore', $data)) {
            $object->setHomeTeamScore($data['HomeTeamScore']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('Period', $data)) {
            $object->setPeriod($data['Period']);
        }
        if (\array_key_exists('TimeRemainingMinutes', $data)) {
            $object->setTimeRemainingMinutes($data['TimeRemainingMinutes']);
        }
        if (\array_key_exists('TimeRemainingSeconds', $data)) {
            $object->setTimeRemainingSeconds($data['TimeRemainingSeconds']);
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
        if (\array_key_exists('GlobalGameID', $data)) {
            $object->setGlobalGameID($data['GlobalGameID']);
        }
        if (\array_key_exists('GlobalAwayTeamID', $data)) {
            $object->setGlobalAwayTeamID($data['GlobalAwayTeamID']);
        }
        if (\array_key_exists('GlobalHomeTeamID', $data)) {
            $object->setGlobalHomeTeamID($data['GlobalHomeTeamID']);
        }
        if (\array_key_exists('TournamentID', $data)) {
            $object->setTournamentID($data['TournamentID']);
        }
        if (\array_key_exists('Bracket', $data)) {
            $object->setBracket($data['Bracket']);
        }
        if (\array_key_exists('Round', $data)) {
            $object->setRound($data['Round']);
        }
        if (\array_key_exists('AwayTeamSeed', $data)) {
            $object->setAwayTeamSeed($data['AwayTeamSeed']);
        }
        if (\array_key_exists('HomeTeamSeed', $data)) {
            $object->setHomeTeamSeed($data['HomeTeamSeed']);
        }
        if (\array_key_exists('AwayTeamPreviousGameID', $data)) {
            $object->setAwayTeamPreviousGameID($data['AwayTeamPreviousGameID']);
        }
        if (\array_key_exists('HomeTeamPreviousGameID', $data)) {
            $object->setHomeTeamPreviousGameID($data['HomeTeamPreviousGameID']);
        }
        if (\array_key_exists('AwayTeamPreviousGlobalGameID', $data)) {
            $object->setAwayTeamPreviousGlobalGameID($data['AwayTeamPreviousGlobalGameID']);
        }
        if (\array_key_exists('HomeTeamPreviousGlobalGameID', $data)) {
            $object->setHomeTeamPreviousGlobalGameID($data['HomeTeamPreviousGlobalGameID']);
        }
        if (\array_key_exists('TournamentDisplayOrder', $data)) {
            $object->setTournamentDisplayOrder($data['TournamentDisplayOrder']);
        }
        if (\array_key_exists('TournamentDisplayOrderForHomeTeam', $data)) {
            $object->setTournamentDisplayOrderForHomeTeam($data['TournamentDisplayOrderForHomeTeam']);
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
        if (\array_key_exists('GameEndDateTime', $data)) {
            $object->setGameEndDateTime($data['GameEndDateTime']);
        }
        if (\array_key_exists('Stadium', $data)) {
            $object->setStadium($this->denormalizer->denormalize($data['Stadium'], 'Sportsdata\\API\\CBB\\Model\\Stadium', 'json', $context));
        }
        if (\array_key_exists('HomeRotationNumber', $data)) {
            $object->setHomeRotationNumber($data['HomeRotationNumber']);
        }
        if (\array_key_exists('AwayRotationNumber', $data)) {
            $object->setAwayRotationNumber($data['AwayRotationNumber']);
        }
        if (\array_key_exists('TopTeamPreviousGameId', $data)) {
            $object->setTopTeamPreviousGameId($data['TopTeamPreviousGameId']);
        }
        if (\array_key_exists('BottomTeamPreviousGameId', $data)) {
            $object->setBottomTeamPreviousGameId($data['BottomTeamPreviousGameId']);
        }
        if (\array_key_exists('Channel', $data)) {
            $object->setChannel($data['Channel']);
        }
        if (\array_key_exists('NeutralVenue', $data)) {
            $object->setNeutralVenue($data['NeutralVenue']);
        }
        if (\array_key_exists('AwayPointSpreadPayout', $data)) {
            $object->setAwayPointSpreadPayout($data['AwayPointSpreadPayout']);
        }
        if (\array_key_exists('HomePointSpreadPayout', $data)) {
            $object->setHomePointSpreadPayout($data['HomePointSpreadPayout']);
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