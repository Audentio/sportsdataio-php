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
        if (\array_key_exists('SportsDataID', $data)) {
            $object->setSportsDataID($data['SportsDataID']);
        }
        if (\array_key_exists('Status', $data)) {
            $object->setStatus($data['Status']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('Team', $data)) {
            $object->setTeam($data['Team']);
        }
        if (\array_key_exists('Jersey', $data)) {
            $object->setJersey($data['Jersey']);
        }
        if (\array_key_exists('PositionCategory', $data)) {
            $object->setPositionCategory($data['PositionCategory']);
        }
        if (\array_key_exists('Position', $data)) {
            $object->setPosition($data['Position']);
        }
        if (\array_key_exists('MLBAMID', $data)) {
            $object->setMLBAMID($data['MLBAMID']);
        }
        if (\array_key_exists('FirstName', $data)) {
            $object->setFirstName($data['FirstName']);
        }
        if (\array_key_exists('LastName', $data)) {
            $object->setLastName($data['LastName']);
        }
        if (\array_key_exists('BatHand', $data)) {
            $object->setBatHand($data['BatHand']);
        }
        if (\array_key_exists('ThrowHand', $data)) {
            $object->setThrowHand($data['ThrowHand']);
        }
        if (\array_key_exists('Height', $data)) {
            $object->setHeight($data['Height']);
        }
        if (\array_key_exists('Weight', $data)) {
            $object->setWeight($data['Weight']);
        }
        if (\array_key_exists('BirthDate', $data)) {
            $object->setBirthDate($data['BirthDate']);
        }
        if (\array_key_exists('BirthCity', $data)) {
            $object->setBirthCity($data['BirthCity']);
        }
        if (\array_key_exists('BirthState', $data)) {
            $object->setBirthState($data['BirthState']);
        }
        if (\array_key_exists('BirthCountry', $data)) {
            $object->setBirthCountry($data['BirthCountry']);
        }
        if (\array_key_exists('HighSchool', $data)) {
            $object->setHighSchool($data['HighSchool']);
        }
        if (\array_key_exists('College', $data)) {
            $object->setCollege($data['College']);
        }
        if (\array_key_exists('ProDebut', $data)) {
            $object->setProDebut($data['ProDebut']);
        }
        if (\array_key_exists('Salary', $data)) {
            $object->setSalary($data['Salary']);
        }
        if (\array_key_exists('PhotoUrl', $data)) {
            $object->setPhotoUrl($data['PhotoUrl']);
        }
        if (\array_key_exists('SportRadarPlayerID', $data)) {
            $object->setSportRadarPlayerID($data['SportRadarPlayerID']);
        }
        if (\array_key_exists('RotoworldPlayerID', $data)) {
            $object->setRotoworldPlayerID($data['RotoworldPlayerID']);
        }
        if (\array_key_exists('RotoWirePlayerID', $data)) {
            $object->setRotoWirePlayerID($data['RotoWirePlayerID']);
        }
        if (\array_key_exists('FantasyAlarmPlayerID', $data)) {
            $object->setFantasyAlarmPlayerID($data['FantasyAlarmPlayerID']);
        }
        if (\array_key_exists('StatsPlayerID', $data)) {
            $object->setStatsPlayerID($data['StatsPlayerID']);
        }
        if (\array_key_exists('SportsDirectPlayerID', $data)) {
            $object->setSportsDirectPlayerID($data['SportsDirectPlayerID']);
        }
        if (\array_key_exists('XmlTeamPlayerID', $data)) {
            $object->setXmlTeamPlayerID($data['XmlTeamPlayerID']);
        }
        if (\array_key_exists('InjuryStatus', $data)) {
            $object->setInjuryStatus($data['InjuryStatus']);
        }
        if (\array_key_exists('InjuryBodyPart', $data)) {
            $object->setInjuryBodyPart($data['InjuryBodyPart']);
        }
        if (\array_key_exists('InjuryStartDate', $data)) {
            $object->setInjuryStartDate($data['InjuryStartDate']);
        }
        if (\array_key_exists('InjuryNotes', $data)) {
            $object->setInjuryNotes($data['InjuryNotes']);
        }
        if (\array_key_exists('FanDuelPlayerID', $data)) {
            $object->setFanDuelPlayerID($data['FanDuelPlayerID']);
        }
        if (\array_key_exists('DraftKingsPlayerID', $data)) {
            $object->setDraftKingsPlayerID($data['DraftKingsPlayerID']);
        }
        if (\array_key_exists('YahooPlayerID', $data)) {
            $object->setYahooPlayerID($data['YahooPlayerID']);
        }
        if (\array_key_exists('UpcomingGameID', $data)) {
            $object->setUpcomingGameID($data['UpcomingGameID']);
        }
        if (\array_key_exists('FanDuelName', $data)) {
            $object->setFanDuelName($data['FanDuelName']);
        }
        if (\array_key_exists('DraftKingsName', $data)) {
            $object->setDraftKingsName($data['DraftKingsName']);
        }
        if (\array_key_exists('YahooName', $data)) {
            $object->setYahooName($data['YahooName']);
        }
        if (\array_key_exists('GlobalTeamID', $data)) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        if (\array_key_exists('FantasyDraftName', $data)) {
            $object->setFantasyDraftName($data['FantasyDraftName']);
        }
        if (\array_key_exists('FantasyDraftPlayerID', $data)) {
            $object->setFantasyDraftPlayerID($data['FantasyDraftPlayerID']);
        }
        if (\array_key_exists('Experience', $data)) {
            $object->setExperience($data['Experience']);
        }
        if (\array_key_exists('UsaTodayPlayerID', $data)) {
            $object->setUsaTodayPlayerID($data['UsaTodayPlayerID']);
        }
        if (\array_key_exists('UsaTodayHeadshotUrl', $data)) {
            $object->setUsaTodayHeadshotUrl($data['UsaTodayHeadshotUrl']);
        }
        if (\array_key_exists('UsaTodayHeadshotNoBackgroundUrl', $data)) {
            $object->setUsaTodayHeadshotNoBackgroundUrl($data['UsaTodayHeadshotNoBackgroundUrl']);
        }
        if (\array_key_exists('UsaTodayHeadshotUpdated', $data)) {
            $object->setUsaTodayHeadshotUpdated($data['UsaTodayHeadshotUpdated']);
        }
        if (\array_key_exists('UsaTodayHeadshotNoBackgroundUpdated', $data)) {
            $object->setUsaTodayHeadshotNoBackgroundUpdated($data['UsaTodayHeadshotNoBackgroundUpdated']);
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