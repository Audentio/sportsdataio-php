<?php

namespace Sportsdata\API\CFB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CFB\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\CFB\\Model\\Game';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CFB\\Model\\Game';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CFB\Model\Game();
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
        if (\array_key_exists('Week', $data)) {
            $object->setWeek($data['Week']);
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
        if (\array_key_exists('AwayTeamName', $data)) {
            $object->setAwayTeamName($data['AwayTeamName']);
        }
        if (\array_key_exists('HomeTeamName', $data)) {
            $object->setHomeTeamName($data['HomeTeamName']);
        }
        if (\array_key_exists('AwayTeamScore', $data)) {
            $object->setAwayTeamScore($data['AwayTeamScore']);
        }
        if (\array_key_exists('HomeTeamScore', $data)) {
            $object->setHomeTeamScore($data['HomeTeamScore']);
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
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('Created', $data)) {
            $object->setCreated($data['Created']);
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
        if (\array_key_exists('StadiumID', $data)) {
            $object->setStadiumID($data['StadiumID']);
        }
        if (\array_key_exists('Stadium', $data)) {
            $object->setStadium($this->denormalizer->denormalize($data['Stadium'], 'Sportsdata\\API\\CFB\\Model\\Stadium', 'json', $context));
        }
        if (\array_key_exists('YardLine', $data)) {
            $object->setYardLine($data['YardLine']);
        }
        if (\array_key_exists('YardLineTerritory', $data)) {
            $object->setYardLineTerritory($data['YardLineTerritory']);
        }
        if (\array_key_exists('Down', $data)) {
            $object->setDown($data['Down']);
        }
        if (\array_key_exists('Distance', $data)) {
            $object->setDistance($data['Distance']);
        }
        if (\array_key_exists('Possession', $data)) {
            $object->setPossession($data['Possession']);
        }
        if (\array_key_exists('Periods', $data)) {
            $values = array();
            foreach ($data['Periods'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\CFB\\Model\\Period', 'json', $context);
            }
            $object->setPeriods($values);
        }
        if (\array_key_exists('IsClosed', $data)) {
            $object->setIsClosed($data['IsClosed']);
        }
        if (\array_key_exists('GameEndDateTime', $data)) {
            $object->setGameEndDateTime($data['GameEndDateTime']);
        }
        if (\array_key_exists('Title', $data)) {
            $object->setTitle($data['Title']);
        }
        if (\array_key_exists('HomeRotationNumber', $data)) {
            $object->setHomeRotationNumber($data['HomeRotationNumber']);
        }
        if (\array_key_exists('AwayRotationNumber', $data)) {
            $object->setAwayRotationNumber($data['AwayRotationNumber']);
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
        if (null !== $object->getWeek()) {
            $data['Week'] = $object->getWeek();
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
        if (null !== $object->getAwayTeamName()) {
            $data['AwayTeamName'] = $object->getAwayTeamName();
        }
        if (null !== $object->getHomeTeamName()) {
            $data['HomeTeamName'] = $object->getHomeTeamName();
        }
        if (null !== $object->getAwayTeamScore()) {
            $data['AwayTeamScore'] = $object->getAwayTeamScore();
        }
        if (null !== $object->getHomeTeamScore()) {
            $data['HomeTeamScore'] = $object->getHomeTeamScore();
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
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
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
        if (null !== $object->getStadiumID()) {
            $data['StadiumID'] = $object->getStadiumID();
        }
        if (null !== $object->getStadium()) {
            $data['Stadium'] = $this->normalizer->normalize($object->getStadium(), 'json', $context);
        }
        if (null !== $object->getYardLine()) {
            $data['YardLine'] = $object->getYardLine();
        }
        if (null !== $object->getYardLineTerritory()) {
            $data['YardLineTerritory'] = $object->getYardLineTerritory();
        }
        if (null !== $object->getDown()) {
            $data['Down'] = $object->getDown();
        }
        if (null !== $object->getDistance()) {
            $data['Distance'] = $object->getDistance();
        }
        if (null !== $object->getPossession()) {
            $data['Possession'] = $object->getPossession();
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
        if (null !== $object->getTitle()) {
            $data['Title'] = $object->getTitle();
        }
        if (null !== $object->getHomeRotationNumber()) {
            $data['HomeRotationNumber'] = $object->getHomeRotationNumber();
        }
        if (null !== $object->getAwayRotationNumber()) {
            $data['AwayRotationNumber'] = $object->getAwayRotationNumber();
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