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
class PlayerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\MLB\\Model\\Player';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\MLB\\Model\\Player';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\MLB\Model\Player();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('SportsDataID', $data) && $data['SportsDataID'] !== null) {
            $object->setSportsDataID($data['SportsDataID']);
        }
        elseif (\array_key_exists('SportsDataID', $data) && $data['SportsDataID'] === null) {
            $object->setSportsDataID(null);
        }
        if (\array_key_exists('Status', $data) && $data['Status'] !== null) {
            $object->setStatus($data['Status']);
        }
        elseif (\array_key_exists('Status', $data) && $data['Status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('TeamID', $data) && $data['TeamID'] !== null) {
            $object->setTeamID($data['TeamID']);
        }
        elseif (\array_key_exists('TeamID', $data) && $data['TeamID'] === null) {
            $object->setTeamID(null);
        }
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('Jersey', $data) && $data['Jersey'] !== null) {
            $object->setJersey($data['Jersey']);
        }
        elseif (\array_key_exists('Jersey', $data) && $data['Jersey'] === null) {
            $object->setJersey(null);
        }
        if (\array_key_exists('PositionCategory', $data) && $data['PositionCategory'] !== null) {
            $object->setPositionCategory($data['PositionCategory']);
        }
        elseif (\array_key_exists('PositionCategory', $data) && $data['PositionCategory'] === null) {
            $object->setPositionCategory(null);
        }
        if (\array_key_exists('Position', $data) && $data['Position'] !== null) {
            $object->setPosition($data['Position']);
        }
        elseif (\array_key_exists('Position', $data) && $data['Position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('MLBAMID', $data) && $data['MLBAMID'] !== null) {
            $object->setMLBAMID($data['MLBAMID']);
        }
        elseif (\array_key_exists('MLBAMID', $data) && $data['MLBAMID'] === null) {
            $object->setMLBAMID(null);
        }
        if (\array_key_exists('FirstName', $data) && $data['FirstName'] !== null) {
            $object->setFirstName($data['FirstName']);
        }
        elseif (\array_key_exists('FirstName', $data) && $data['FirstName'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('LastName', $data) && $data['LastName'] !== null) {
            $object->setLastName($data['LastName']);
        }
        elseif (\array_key_exists('LastName', $data) && $data['LastName'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('BatHand', $data) && $data['BatHand'] !== null) {
            $object->setBatHand($data['BatHand']);
        }
        elseif (\array_key_exists('BatHand', $data) && $data['BatHand'] === null) {
            $object->setBatHand(null);
        }
        if (\array_key_exists('ThrowHand', $data) && $data['ThrowHand'] !== null) {
            $object->setThrowHand($data['ThrowHand']);
        }
        elseif (\array_key_exists('ThrowHand', $data) && $data['ThrowHand'] === null) {
            $object->setThrowHand(null);
        }
        if (\array_key_exists('Height', $data) && $data['Height'] !== null) {
            $object->setHeight($data['Height']);
        }
        elseif (\array_key_exists('Height', $data) && $data['Height'] === null) {
            $object->setHeight(null);
        }
        if (\array_key_exists('Weight', $data) && $data['Weight'] !== null) {
            $object->setWeight($data['Weight']);
        }
        elseif (\array_key_exists('Weight', $data) && $data['Weight'] === null) {
            $object->setWeight(null);
        }
        if (\array_key_exists('BirthDate', $data) && $data['BirthDate'] !== null) {
            $object->setBirthDate($data['BirthDate']);
        }
        elseif (\array_key_exists('BirthDate', $data) && $data['BirthDate'] === null) {
            $object->setBirthDate(null);
        }
        if (\array_key_exists('BirthCity', $data) && $data['BirthCity'] !== null) {
            $object->setBirthCity($data['BirthCity']);
        }
        elseif (\array_key_exists('BirthCity', $data) && $data['BirthCity'] === null) {
            $object->setBirthCity(null);
        }
        if (\array_key_exists('BirthState', $data) && $data['BirthState'] !== null) {
            $object->setBirthState($data['BirthState']);
        }
        elseif (\array_key_exists('BirthState', $data) && $data['BirthState'] === null) {
            $object->setBirthState(null);
        }
        if (\array_key_exists('BirthCountry', $data) && $data['BirthCountry'] !== null) {
            $object->setBirthCountry($data['BirthCountry']);
        }
        elseif (\array_key_exists('BirthCountry', $data) && $data['BirthCountry'] === null) {
            $object->setBirthCountry(null);
        }
        if (\array_key_exists('HighSchool', $data) && $data['HighSchool'] !== null) {
            $object->setHighSchool($data['HighSchool']);
        }
        elseif (\array_key_exists('HighSchool', $data) && $data['HighSchool'] === null) {
            $object->setHighSchool(null);
        }
        if (\array_key_exists('College', $data) && $data['College'] !== null) {
            $object->setCollege($data['College']);
        }
        elseif (\array_key_exists('College', $data) && $data['College'] === null) {
            $object->setCollege(null);
        }
        if (\array_key_exists('ProDebut', $data) && $data['ProDebut'] !== null) {
            $object->setProDebut($data['ProDebut']);
        }
        elseif (\array_key_exists('ProDebut', $data) && $data['ProDebut'] === null) {
            $object->setProDebut(null);
        }
        if (\array_key_exists('Salary', $data) && $data['Salary'] !== null) {
            $object->setSalary($data['Salary']);
        }
        elseif (\array_key_exists('Salary', $data) && $data['Salary'] === null) {
            $object->setSalary(null);
        }
        if (\array_key_exists('PhotoUrl', $data) && $data['PhotoUrl'] !== null) {
            $object->setPhotoUrl($data['PhotoUrl']);
        }
        elseif (\array_key_exists('PhotoUrl', $data) && $data['PhotoUrl'] === null) {
            $object->setPhotoUrl(null);
        }
        if (\array_key_exists('SportRadarPlayerID', $data) && $data['SportRadarPlayerID'] !== null) {
            $object->setSportRadarPlayerID($data['SportRadarPlayerID']);
        }
        elseif (\array_key_exists('SportRadarPlayerID', $data) && $data['SportRadarPlayerID'] === null) {
            $object->setSportRadarPlayerID(null);
        }
        if (\array_key_exists('RotoworldPlayerID', $data) && $data['RotoworldPlayerID'] !== null) {
            $object->setRotoworldPlayerID($data['RotoworldPlayerID']);
        }
        elseif (\array_key_exists('RotoworldPlayerID', $data) && $data['RotoworldPlayerID'] === null) {
            $object->setRotoworldPlayerID(null);
        }
        if (\array_key_exists('RotoWirePlayerID', $data) && $data['RotoWirePlayerID'] !== null) {
            $object->setRotoWirePlayerID($data['RotoWirePlayerID']);
        }
        elseif (\array_key_exists('RotoWirePlayerID', $data) && $data['RotoWirePlayerID'] === null) {
            $object->setRotoWirePlayerID(null);
        }
        if (\array_key_exists('FantasyAlarmPlayerID', $data) && $data['FantasyAlarmPlayerID'] !== null) {
            $object->setFantasyAlarmPlayerID($data['FantasyAlarmPlayerID']);
        }
        elseif (\array_key_exists('FantasyAlarmPlayerID', $data) && $data['FantasyAlarmPlayerID'] === null) {
            $object->setFantasyAlarmPlayerID(null);
        }
        if (\array_key_exists('StatsPlayerID', $data) && $data['StatsPlayerID'] !== null) {
            $object->setStatsPlayerID($data['StatsPlayerID']);
        }
        elseif (\array_key_exists('StatsPlayerID', $data) && $data['StatsPlayerID'] === null) {
            $object->setStatsPlayerID(null);
        }
        if (\array_key_exists('SportsDirectPlayerID', $data) && $data['SportsDirectPlayerID'] !== null) {
            $object->setSportsDirectPlayerID($data['SportsDirectPlayerID']);
        }
        elseif (\array_key_exists('SportsDirectPlayerID', $data) && $data['SportsDirectPlayerID'] === null) {
            $object->setSportsDirectPlayerID(null);
        }
        if (\array_key_exists('XmlTeamPlayerID', $data) && $data['XmlTeamPlayerID'] !== null) {
            $object->setXmlTeamPlayerID($data['XmlTeamPlayerID']);
        }
        elseif (\array_key_exists('XmlTeamPlayerID', $data) && $data['XmlTeamPlayerID'] === null) {
            $object->setXmlTeamPlayerID(null);
        }
        if (\array_key_exists('InjuryStatus', $data) && $data['InjuryStatus'] !== null) {
            $object->setInjuryStatus($data['InjuryStatus']);
        }
        elseif (\array_key_exists('InjuryStatus', $data) && $data['InjuryStatus'] === null) {
            $object->setInjuryStatus(null);
        }
        if (\array_key_exists('InjuryBodyPart', $data) && $data['InjuryBodyPart'] !== null) {
            $object->setInjuryBodyPart($data['InjuryBodyPart']);
        }
        elseif (\array_key_exists('InjuryBodyPart', $data) && $data['InjuryBodyPart'] === null) {
            $object->setInjuryBodyPart(null);
        }
        if (\array_key_exists('InjuryStartDate', $data) && $data['InjuryStartDate'] !== null) {
            $object->setInjuryStartDate($data['InjuryStartDate']);
        }
        elseif (\array_key_exists('InjuryStartDate', $data) && $data['InjuryStartDate'] === null) {
            $object->setInjuryStartDate(null);
        }
        if (\array_key_exists('InjuryNotes', $data) && $data['InjuryNotes'] !== null) {
            $object->setInjuryNotes($data['InjuryNotes']);
        }
        elseif (\array_key_exists('InjuryNotes', $data) && $data['InjuryNotes'] === null) {
            $object->setInjuryNotes(null);
        }
        if (\array_key_exists('FanDuelPlayerID', $data) && $data['FanDuelPlayerID'] !== null) {
            $object->setFanDuelPlayerID($data['FanDuelPlayerID']);
        }
        elseif (\array_key_exists('FanDuelPlayerID', $data) && $data['FanDuelPlayerID'] === null) {
            $object->setFanDuelPlayerID(null);
        }
        if (\array_key_exists('DraftKingsPlayerID', $data) && $data['DraftKingsPlayerID'] !== null) {
            $object->setDraftKingsPlayerID($data['DraftKingsPlayerID']);
        }
        elseif (\array_key_exists('DraftKingsPlayerID', $data) && $data['DraftKingsPlayerID'] === null) {
            $object->setDraftKingsPlayerID(null);
        }
        if (\array_key_exists('YahooPlayerID', $data) && $data['YahooPlayerID'] !== null) {
            $object->setYahooPlayerID($data['YahooPlayerID']);
        }
        elseif (\array_key_exists('YahooPlayerID', $data) && $data['YahooPlayerID'] === null) {
            $object->setYahooPlayerID(null);
        }
        if (\array_key_exists('UpcomingGameID', $data) && $data['UpcomingGameID'] !== null) {
            $object->setUpcomingGameID($data['UpcomingGameID']);
        }
        elseif (\array_key_exists('UpcomingGameID', $data) && $data['UpcomingGameID'] === null) {
            $object->setUpcomingGameID(null);
        }
        if (\array_key_exists('FanDuelName', $data) && $data['FanDuelName'] !== null) {
            $object->setFanDuelName($data['FanDuelName']);
        }
        elseif (\array_key_exists('FanDuelName', $data) && $data['FanDuelName'] === null) {
            $object->setFanDuelName(null);
        }
        if (\array_key_exists('DraftKingsName', $data) && $data['DraftKingsName'] !== null) {
            $object->setDraftKingsName($data['DraftKingsName']);
        }
        elseif (\array_key_exists('DraftKingsName', $data) && $data['DraftKingsName'] === null) {
            $object->setDraftKingsName(null);
        }
        if (\array_key_exists('YahooName', $data) && $data['YahooName'] !== null) {
            $object->setYahooName($data['YahooName']);
        }
        elseif (\array_key_exists('YahooName', $data) && $data['YahooName'] === null) {
            $object->setYahooName(null);
        }
        if (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] !== null) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        elseif (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] === null) {
            $object->setGlobalTeamID(null);
        }
        if (\array_key_exists('FantasyDraftName', $data) && $data['FantasyDraftName'] !== null) {
            $object->setFantasyDraftName($data['FantasyDraftName']);
        }
        elseif (\array_key_exists('FantasyDraftName', $data) && $data['FantasyDraftName'] === null) {
            $object->setFantasyDraftName(null);
        }
        if (\array_key_exists('FantasyDraftPlayerID', $data) && $data['FantasyDraftPlayerID'] !== null) {
            $object->setFantasyDraftPlayerID($data['FantasyDraftPlayerID']);
        }
        elseif (\array_key_exists('FantasyDraftPlayerID', $data) && $data['FantasyDraftPlayerID'] === null) {
            $object->setFantasyDraftPlayerID(null);
        }
        if (\array_key_exists('Experience', $data) && $data['Experience'] !== null) {
            $object->setExperience($data['Experience']);
        }
        elseif (\array_key_exists('Experience', $data) && $data['Experience'] === null) {
            $object->setExperience(null);
        }
        if (\array_key_exists('UsaTodayPlayerID', $data) && $data['UsaTodayPlayerID'] !== null) {
            $object->setUsaTodayPlayerID($data['UsaTodayPlayerID']);
        }
        elseif (\array_key_exists('UsaTodayPlayerID', $data) && $data['UsaTodayPlayerID'] === null) {
            $object->setUsaTodayPlayerID(null);
        }
        if (\array_key_exists('UsaTodayHeadshotUrl', $data) && $data['UsaTodayHeadshotUrl'] !== null) {
            $object->setUsaTodayHeadshotUrl($data['UsaTodayHeadshotUrl']);
        }
        elseif (\array_key_exists('UsaTodayHeadshotUrl', $data) && $data['UsaTodayHeadshotUrl'] === null) {
            $object->setUsaTodayHeadshotUrl(null);
        }
        if (\array_key_exists('UsaTodayHeadshotNoBackgroundUrl', $data) && $data['UsaTodayHeadshotNoBackgroundUrl'] !== null) {
            $object->setUsaTodayHeadshotNoBackgroundUrl($data['UsaTodayHeadshotNoBackgroundUrl']);
        }
        elseif (\array_key_exists('UsaTodayHeadshotNoBackgroundUrl', $data) && $data['UsaTodayHeadshotNoBackgroundUrl'] === null) {
            $object->setUsaTodayHeadshotNoBackgroundUrl(null);
        }
        if (\array_key_exists('UsaTodayHeadshotUpdated', $data) && $data['UsaTodayHeadshotUpdated'] !== null) {
            $object->setUsaTodayHeadshotUpdated($data['UsaTodayHeadshotUpdated']);
        }
        elseif (\array_key_exists('UsaTodayHeadshotUpdated', $data) && $data['UsaTodayHeadshotUpdated'] === null) {
            $object->setUsaTodayHeadshotUpdated(null);
        }
        if (\array_key_exists('UsaTodayHeadshotNoBackgroundUpdated', $data) && $data['UsaTodayHeadshotNoBackgroundUpdated'] !== null) {
            $object->setUsaTodayHeadshotNoBackgroundUpdated($data['UsaTodayHeadshotNoBackgroundUpdated']);
        }
        elseif (\array_key_exists('UsaTodayHeadshotNoBackgroundUpdated', $data) && $data['UsaTodayHeadshotNoBackgroundUpdated'] === null) {
            $object->setUsaTodayHeadshotNoBackgroundUpdated(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getSportsDataID()) {
            $data['SportsDataID'] = $object->getSportsDataID();
        }
        if (null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getJersey()) {
            $data['Jersey'] = $object->getJersey();
        }
        if (null !== $object->getPositionCategory()) {
            $data['PositionCategory'] = $object->getPositionCategory();
        }
        if (null !== $object->getPosition()) {
            $data['Position'] = $object->getPosition();
        }
        if (null !== $object->getMLBAMID()) {
            $data['MLBAMID'] = $object->getMLBAMID();
        }
        if (null !== $object->getFirstName()) {
            $data['FirstName'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['LastName'] = $object->getLastName();
        }
        if (null !== $object->getBatHand()) {
            $data['BatHand'] = $object->getBatHand();
        }
        if (null !== $object->getThrowHand()) {
            $data['ThrowHand'] = $object->getThrowHand();
        }
        if (null !== $object->getHeight()) {
            $data['Height'] = $object->getHeight();
        }
        if (null !== $object->getWeight()) {
            $data['Weight'] = $object->getWeight();
        }
        if (null !== $object->getBirthDate()) {
            $data['BirthDate'] = $object->getBirthDate();
        }
        if (null !== $object->getBirthCity()) {
            $data['BirthCity'] = $object->getBirthCity();
        }
        if (null !== $object->getBirthState()) {
            $data['BirthState'] = $object->getBirthState();
        }
        if (null !== $object->getBirthCountry()) {
            $data['BirthCountry'] = $object->getBirthCountry();
        }
        if (null !== $object->getHighSchool()) {
            $data['HighSchool'] = $object->getHighSchool();
        }
        if (null !== $object->getCollege()) {
            $data['College'] = $object->getCollege();
        }
        if (null !== $object->getProDebut()) {
            $data['ProDebut'] = $object->getProDebut();
        }
        if (null !== $object->getSalary()) {
            $data['Salary'] = $object->getSalary();
        }
        if (null !== $object->getPhotoUrl()) {
            $data['PhotoUrl'] = $object->getPhotoUrl();
        }
        if (null !== $object->getSportRadarPlayerID()) {
            $data['SportRadarPlayerID'] = $object->getSportRadarPlayerID();
        }
        if (null !== $object->getRotoworldPlayerID()) {
            $data['RotoworldPlayerID'] = $object->getRotoworldPlayerID();
        }
        if (null !== $object->getRotoWirePlayerID()) {
            $data['RotoWirePlayerID'] = $object->getRotoWirePlayerID();
        }
        if (null !== $object->getFantasyAlarmPlayerID()) {
            $data['FantasyAlarmPlayerID'] = $object->getFantasyAlarmPlayerID();
        }
        if (null !== $object->getStatsPlayerID()) {
            $data['StatsPlayerID'] = $object->getStatsPlayerID();
        }
        if (null !== $object->getSportsDirectPlayerID()) {
            $data['SportsDirectPlayerID'] = $object->getSportsDirectPlayerID();
        }
        if (null !== $object->getXmlTeamPlayerID()) {
            $data['XmlTeamPlayerID'] = $object->getXmlTeamPlayerID();
        }
        if (null !== $object->getInjuryStatus()) {
            $data['InjuryStatus'] = $object->getInjuryStatus();
        }
        if (null !== $object->getInjuryBodyPart()) {
            $data['InjuryBodyPart'] = $object->getInjuryBodyPart();
        }
        if (null !== $object->getInjuryStartDate()) {
            $data['InjuryStartDate'] = $object->getInjuryStartDate();
        }
        if (null !== $object->getInjuryNotes()) {
            $data['InjuryNotes'] = $object->getInjuryNotes();
        }
        if (null !== $object->getFanDuelPlayerID()) {
            $data['FanDuelPlayerID'] = $object->getFanDuelPlayerID();
        }
        if (null !== $object->getDraftKingsPlayerID()) {
            $data['DraftKingsPlayerID'] = $object->getDraftKingsPlayerID();
        }
        if (null !== $object->getYahooPlayerID()) {
            $data['YahooPlayerID'] = $object->getYahooPlayerID();
        }
        if (null !== $object->getUpcomingGameID()) {
            $data['UpcomingGameID'] = $object->getUpcomingGameID();
        }
        if (null !== $object->getFanDuelName()) {
            $data['FanDuelName'] = $object->getFanDuelName();
        }
        if (null !== $object->getDraftKingsName()) {
            $data['DraftKingsName'] = $object->getDraftKingsName();
        }
        if (null !== $object->getYahooName()) {
            $data['YahooName'] = $object->getYahooName();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        if (null !== $object->getFantasyDraftName()) {
            $data['FantasyDraftName'] = $object->getFantasyDraftName();
        }
        if (null !== $object->getFantasyDraftPlayerID()) {
            $data['FantasyDraftPlayerID'] = $object->getFantasyDraftPlayerID();
        }
        if (null !== $object->getExperience()) {
            $data['Experience'] = $object->getExperience();
        }
        if (null !== $object->getUsaTodayPlayerID()) {
            $data['UsaTodayPlayerID'] = $object->getUsaTodayPlayerID();
        }
        if (null !== $object->getUsaTodayHeadshotUrl()) {
            $data['UsaTodayHeadshotUrl'] = $object->getUsaTodayHeadshotUrl();
        }
        if (null !== $object->getUsaTodayHeadshotNoBackgroundUrl()) {
            $data['UsaTodayHeadshotNoBackgroundUrl'] = $object->getUsaTodayHeadshotNoBackgroundUrl();
        }
        if (null !== $object->getUsaTodayHeadshotUpdated()) {
            $data['UsaTodayHeadshotUpdated'] = $object->getUsaTodayHeadshotUpdated();
        }
        if (null !== $object->getUsaTodayHeadshotNoBackgroundUpdated()) {
            $data['UsaTodayHeadshotNoBackgroundUpdated'] = $object->getUsaTodayHeadshotNoBackgroundUpdated();
        }
        return $data;
    }
}