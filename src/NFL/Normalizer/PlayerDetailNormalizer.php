<?php

namespace Sportsdata\API\NFL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\NFL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PlayerDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\PlayerDetail';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\PlayerDetail';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\PlayerDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerSeason', $data)) {
            $object->setPlayerSeason($this->denormalizer->denormalize($data['PlayerSeason'], 'Sportsdata\\API\\NFL\\Model\\PlayerSeason', 'json', $context));
        }
        if (\array_key_exists('LatestNews', $data)) {
            $values = array();
            foreach ($data['LatestNews'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\NFL\\Model\\News', 'json', $context);
            }
            $object->setLatestNews($values);
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('Team', $data)) {
            $object->setTeam($data['Team']);
        }
        if (\array_key_exists('Number', $data)) {
            $object->setNumber($data['Number']);
        }
        if (\array_key_exists('FirstName', $data)) {
            $object->setFirstName($data['FirstName']);
        }
        if (\array_key_exists('LastName', $data)) {
            $object->setLastName($data['LastName']);
        }
        if (\array_key_exists('Position', $data)) {
            $object->setPosition($data['Position']);
        }
        if (\array_key_exists('Status', $data)) {
            $object->setStatus($data['Status']);
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
        if (\array_key_exists('College', $data)) {
            $object->setCollege($data['College']);
        }
        if (\array_key_exists('Experience', $data)) {
            $object->setExperience($data['Experience']);
        }
        if (\array_key_exists('FantasyPosition', $data)) {
            $object->setFantasyPosition($data['FantasyPosition']);
        }
        if (\array_key_exists('Active', $data)) {
            $object->setActive($data['Active']);
        }
        if (\array_key_exists('PositionCategory', $data)) {
            $object->setPositionCategory($data['PositionCategory']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Age', $data)) {
            $object->setAge($data['Age']);
        }
        if (\array_key_exists('ExperienceString', $data)) {
            $object->setExperienceString($data['ExperienceString']);
        }
        if (\array_key_exists('BirthDateString', $data)) {
            $object->setBirthDateString($data['BirthDateString']);
        }
        if (\array_key_exists('PhotoUrl', $data)) {
            $object->setPhotoUrl($data['PhotoUrl']);
        }
        if (\array_key_exists('ByeWeek', $data)) {
            $object->setByeWeek($data['ByeWeek']);
        }
        if (\array_key_exists('UpcomingGameOpponent', $data)) {
            $object->setUpcomingGameOpponent($data['UpcomingGameOpponent']);
        }
        if (\array_key_exists('UpcomingGameWeek', $data)) {
            $object->setUpcomingGameWeek($data['UpcomingGameWeek']);
        }
        if (\array_key_exists('ShortName', $data)) {
            $object->setShortName($data['ShortName']);
        }
        if (\array_key_exists('AverageDraftPosition', $data)) {
            $object->setAverageDraftPosition($data['AverageDraftPosition']);
        }
        if (\array_key_exists('DepthPositionCategory', $data)) {
            $object->setDepthPositionCategory($data['DepthPositionCategory']);
        }
        if (\array_key_exists('DepthPosition', $data)) {
            $object->setDepthPosition($data['DepthPosition']);
        }
        if (\array_key_exists('DepthOrder', $data)) {
            $object->setDepthOrder($data['DepthOrder']);
        }
        if (\array_key_exists('DepthDisplayOrder', $data)) {
            $object->setDepthDisplayOrder($data['DepthDisplayOrder']);
        }
        if (\array_key_exists('CurrentTeam', $data)) {
            $object->setCurrentTeam($data['CurrentTeam']);
        }
        if (\array_key_exists('CollegeDraftTeam', $data)) {
            $object->setCollegeDraftTeam($data['CollegeDraftTeam']);
        }
        if (\array_key_exists('CollegeDraftYear', $data)) {
            $object->setCollegeDraftYear($data['CollegeDraftYear']);
        }
        if (\array_key_exists('CollegeDraftRound', $data)) {
            $object->setCollegeDraftRound($data['CollegeDraftRound']);
        }
        if (\array_key_exists('CollegeDraftPick', $data)) {
            $object->setCollegeDraftPick($data['CollegeDraftPick']);
        }
        if (\array_key_exists('IsUndraftedFreeAgent', $data)) {
            $object->setIsUndraftedFreeAgent($data['IsUndraftedFreeAgent']);
        }
        if (\array_key_exists('HeightFeet', $data)) {
            $object->setHeightFeet($data['HeightFeet']);
        }
        if (\array_key_exists('HeightInches', $data)) {
            $object->setHeightInches($data['HeightInches']);
        }
        if (\array_key_exists('UpcomingOpponentRank', $data)) {
            $object->setUpcomingOpponentRank($data['UpcomingOpponentRank']);
        }
        if (\array_key_exists('UpcomingOpponentPositionRank', $data)) {
            $object->setUpcomingOpponentPositionRank($data['UpcomingOpponentPositionRank']);
        }
        if (\array_key_exists('CurrentStatus', $data)) {
            $object->setCurrentStatus($data['CurrentStatus']);
        }
        if (\array_key_exists('UpcomingSalary', $data)) {
            $object->setUpcomingSalary($data['UpcomingSalary']);
        }
        if (\array_key_exists('FantasyAlarmPlayerID', $data)) {
            $object->setFantasyAlarmPlayerID($data['FantasyAlarmPlayerID']);
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
        if (\array_key_exists('StatsPlayerID', $data)) {
            $object->setStatsPlayerID($data['StatsPlayerID']);
        }
        if (\array_key_exists('SportsDirectPlayerID', $data)) {
            $object->setSportsDirectPlayerID($data['SportsDirectPlayerID']);
        }
        if (\array_key_exists('XmlTeamPlayerID', $data)) {
            $object->setXmlTeamPlayerID($data['XmlTeamPlayerID']);
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
        if (\array_key_exists('FanDuelName', $data)) {
            $object->setFanDuelName($data['FanDuelName']);
        }
        if (\array_key_exists('DraftKingsName', $data)) {
            $object->setDraftKingsName($data['DraftKingsName']);
        }
        if (\array_key_exists('YahooName', $data)) {
            $object->setYahooName($data['YahooName']);
        }
        if (\array_key_exists('FantasyPositionDepthOrder', $data)) {
            $object->setFantasyPositionDepthOrder($data['FantasyPositionDepthOrder']);
        }
        if (\array_key_exists('InjuryPractice', $data)) {
            $object->setInjuryPractice($data['InjuryPractice']);
        }
        if (\array_key_exists('InjuryPracticeDescription', $data)) {
            $object->setInjuryPracticeDescription($data['InjuryPracticeDescription']);
        }
        if (\array_key_exists('DeclaredInactive', $data)) {
            $object->setDeclaredInactive($data['DeclaredInactive']);
        }
        if (\array_key_exists('UpcomingFanDuelSalary', $data)) {
            $object->setUpcomingFanDuelSalary($data['UpcomingFanDuelSalary']);
        }
        if (\array_key_exists('UpcomingDraftKingsSalary', $data)) {
            $object->setUpcomingDraftKingsSalary($data['UpcomingDraftKingsSalary']);
        }
        if (\array_key_exists('UpcomingYahooSalary', $data)) {
            $object->setUpcomingYahooSalary($data['UpcomingYahooSalary']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('GlobalTeamID', $data)) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        if (\array_key_exists('FantasyDraftPlayerID', $data)) {
            $object->setFantasyDraftPlayerID($data['FantasyDraftPlayerID']);
        }
        if (\array_key_exists('FantasyDraftName', $data)) {
            $object->setFantasyDraftName($data['FantasyDraftName']);
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
        if (null !== $object->getPlayerSeason()) {
            $data['PlayerSeason'] = $this->normalizer->normalize($object->getPlayerSeason(), 'json', $context);
        }
        if (null !== $object->getLatestNews()) {
            $values = array();
            foreach ($object->getLatestNews() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['LatestNews'] = $values;
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getNumber()) {
            $data['Number'] = $object->getNumber();
        }
        if (null !== $object->getFirstName()) {
            $data['FirstName'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['LastName'] = $object->getLastName();
        }
        if (null !== $object->getPosition()) {
            $data['Position'] = $object->getPosition();
        }
        if (null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus();
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
        if (null !== $object->getCollege()) {
            $data['College'] = $object->getCollege();
        }
        if (null !== $object->getExperience()) {
            $data['Experience'] = $object->getExperience();
        }
        if (null !== $object->getFantasyPosition()) {
            $data['FantasyPosition'] = $object->getFantasyPosition();
        }
        if (null !== $object->getActive()) {
            $data['Active'] = $object->getActive();
        }
        if (null !== $object->getPositionCategory()) {
            $data['PositionCategory'] = $object->getPositionCategory();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getAge()) {
            $data['Age'] = $object->getAge();
        }
        if (null !== $object->getExperienceString()) {
            $data['ExperienceString'] = $object->getExperienceString();
        }
        if (null !== $object->getBirthDateString()) {
            $data['BirthDateString'] = $object->getBirthDateString();
        }
        if (null !== $object->getPhotoUrl()) {
            $data['PhotoUrl'] = $object->getPhotoUrl();
        }
        if (null !== $object->getByeWeek()) {
            $data['ByeWeek'] = $object->getByeWeek();
        }
        if (null !== $object->getUpcomingGameOpponent()) {
            $data['UpcomingGameOpponent'] = $object->getUpcomingGameOpponent();
        }
        if (null !== $object->getUpcomingGameWeek()) {
            $data['UpcomingGameWeek'] = $object->getUpcomingGameWeek();
        }
        if (null !== $object->getShortName()) {
            $data['ShortName'] = $object->getShortName();
        }
        if (null !== $object->getAverageDraftPosition()) {
            $data['AverageDraftPosition'] = $object->getAverageDraftPosition();
        }
        if (null !== $object->getDepthPositionCategory()) {
            $data['DepthPositionCategory'] = $object->getDepthPositionCategory();
        }
        if (null !== $object->getDepthPosition()) {
            $data['DepthPosition'] = $object->getDepthPosition();
        }
        if (null !== $object->getDepthOrder()) {
            $data['DepthOrder'] = $object->getDepthOrder();
        }
        if (null !== $object->getDepthDisplayOrder()) {
            $data['DepthDisplayOrder'] = $object->getDepthDisplayOrder();
        }
        if (null !== $object->getCurrentTeam()) {
            $data['CurrentTeam'] = $object->getCurrentTeam();
        }
        if (null !== $object->getCollegeDraftTeam()) {
            $data['CollegeDraftTeam'] = $object->getCollegeDraftTeam();
        }
        if (null !== $object->getCollegeDraftYear()) {
            $data['CollegeDraftYear'] = $object->getCollegeDraftYear();
        }
        if (null !== $object->getCollegeDraftRound()) {
            $data['CollegeDraftRound'] = $object->getCollegeDraftRound();
        }
        if (null !== $object->getCollegeDraftPick()) {
            $data['CollegeDraftPick'] = $object->getCollegeDraftPick();
        }
        if (null !== $object->getIsUndraftedFreeAgent()) {
            $data['IsUndraftedFreeAgent'] = $object->getIsUndraftedFreeAgent();
        }
        if (null !== $object->getHeightFeet()) {
            $data['HeightFeet'] = $object->getHeightFeet();
        }
        if (null !== $object->getHeightInches()) {
            $data['HeightInches'] = $object->getHeightInches();
        }
        if (null !== $object->getUpcomingOpponentRank()) {
            $data['UpcomingOpponentRank'] = $object->getUpcomingOpponentRank();
        }
        if (null !== $object->getUpcomingOpponentPositionRank()) {
            $data['UpcomingOpponentPositionRank'] = $object->getUpcomingOpponentPositionRank();
        }
        if (null !== $object->getCurrentStatus()) {
            $data['CurrentStatus'] = $object->getCurrentStatus();
        }
        if (null !== $object->getUpcomingSalary()) {
            $data['UpcomingSalary'] = $object->getUpcomingSalary();
        }
        if (null !== $object->getFantasyAlarmPlayerID()) {
            $data['FantasyAlarmPlayerID'] = $object->getFantasyAlarmPlayerID();
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
        if (null !== $object->getStatsPlayerID()) {
            $data['StatsPlayerID'] = $object->getStatsPlayerID();
        }
        if (null !== $object->getSportsDirectPlayerID()) {
            $data['SportsDirectPlayerID'] = $object->getSportsDirectPlayerID();
        }
        if (null !== $object->getXmlTeamPlayerID()) {
            $data['XmlTeamPlayerID'] = $object->getXmlTeamPlayerID();
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
        if (null !== $object->getFanDuelName()) {
            $data['FanDuelName'] = $object->getFanDuelName();
        }
        if (null !== $object->getDraftKingsName()) {
            $data['DraftKingsName'] = $object->getDraftKingsName();
        }
        if (null !== $object->getYahooName()) {
            $data['YahooName'] = $object->getYahooName();
        }
        if (null !== $object->getFantasyPositionDepthOrder()) {
            $data['FantasyPositionDepthOrder'] = $object->getFantasyPositionDepthOrder();
        }
        if (null !== $object->getInjuryPractice()) {
            $data['InjuryPractice'] = $object->getInjuryPractice();
        }
        if (null !== $object->getInjuryPracticeDescription()) {
            $data['InjuryPracticeDescription'] = $object->getInjuryPracticeDescription();
        }
        if (null !== $object->getDeclaredInactive()) {
            $data['DeclaredInactive'] = $object->getDeclaredInactive();
        }
        if (null !== $object->getUpcomingFanDuelSalary()) {
            $data['UpcomingFanDuelSalary'] = $object->getUpcomingFanDuelSalary();
        }
        if (null !== $object->getUpcomingDraftKingsSalary()) {
            $data['UpcomingDraftKingsSalary'] = $object->getUpcomingDraftKingsSalary();
        }
        if (null !== $object->getUpcomingYahooSalary()) {
            $data['UpcomingYahooSalary'] = $object->getUpcomingYahooSalary();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        if (null !== $object->getFantasyDraftPlayerID()) {
            $data['FantasyDraftPlayerID'] = $object->getFantasyDraftPlayerID();
        }
        if (null !== $object->getFantasyDraftName()) {
            $data['FantasyDraftName'] = $object->getFantasyDraftName();
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