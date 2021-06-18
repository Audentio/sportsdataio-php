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
        if (\array_key_exists('Week', $data) && $data['Week'] !== null) {
            $object->setWeek($data['Week']);
        }
        elseif (\array_key_exists('Week', $data) && $data['Week'] === null) {
            $object->setWeek(null);
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
        if (\array_key_exists('AwayTeamName', $data) && $data['AwayTeamName'] !== null) {
            $object->setAwayTeamName($data['AwayTeamName']);
        }
        elseif (\array_key_exists('AwayTeamName', $data) && $data['AwayTeamName'] === null) {
            $object->setAwayTeamName(null);
        }
        if (\array_key_exists('HomeTeamName', $data) && $data['HomeTeamName'] !== null) {
            $object->setHomeTeamName($data['HomeTeamName']);
        }
        elseif (\array_key_exists('HomeTeamName', $data) && $data['HomeTeamName'] === null) {
            $object->setHomeTeamName(null);
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
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
            $object->setCreated($data['Created']);
        }
        elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
            $object->setCreated(null);
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
        if (\array_key_exists('StadiumID', $data) && $data['StadiumID'] !== null) {
            $object->setStadiumID($data['StadiumID']);
        }
        elseif (\array_key_exists('StadiumID', $data) && $data['StadiumID'] === null) {
            $object->setStadiumID(null);
        }
        if (\array_key_exists('Stadium', $data)) {
            $object->setStadium($this->denormalizer->denormalize($data['Stadium'], 'Sportsdata\\API\\CFB\\Model\\Stadium', 'json', $context));
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
        if (\array_key_exists('Possession', $data) && $data['Possession'] !== null) {
            $object->setPossession($data['Possession']);
        }
        elseif (\array_key_exists('Possession', $data) && $data['Possession'] === null) {
            $object->setPossession(null);
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
        if (\array_key_exists('GameEndDateTime', $data) && $data['GameEndDateTime'] !== null) {
            $object->setGameEndDateTime($data['GameEndDateTime']);
        }
        elseif (\array_key_exists('GameEndDateTime', $data) && $data['GameEndDateTime'] === null) {
            $object->setGameEndDateTime(null);
        }
        if (\array_key_exists('Title', $data) && $data['Title'] !== null) {
            $object->setTitle($data['Title']);
        }
        elseif (\array_key_exists('Title', $data) && $data['Title'] === null) {
            $object->setTitle(null);
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