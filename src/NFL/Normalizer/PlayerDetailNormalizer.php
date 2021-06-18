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
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('Number', $data) && $data['Number'] !== null) {
            $object->setNumber($data['Number']);
        }
        elseif (\array_key_exists('Number', $data) && $data['Number'] === null) {
            $object->setNumber(null);
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
        if (\array_key_exists('Position', $data) && $data['Position'] !== null) {
            $object->setPosition($data['Position']);
        }
        elseif (\array_key_exists('Position', $data) && $data['Position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('Status', $data) && $data['Status'] !== null) {
            $object->setStatus($data['Status']);
        }
        elseif (\array_key_exists('Status', $data) && $data['Status'] === null) {
            $object->setStatus(null);
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
        if (\array_key_exists('College', $data) && $data['College'] !== null) {
            $object->setCollege($data['College']);
        }
        elseif (\array_key_exists('College', $data) && $data['College'] === null) {
            $object->setCollege(null);
        }
        if (\array_key_exists('Experience', $data) && $data['Experience'] !== null) {
            $object->setExperience($data['Experience']);
        }
        elseif (\array_key_exists('Experience', $data) && $data['Experience'] === null) {
            $object->setExperience(null);
        }
        if (\array_key_exists('FantasyPosition', $data) && $data['FantasyPosition'] !== null) {
            $object->setFantasyPosition($data['FantasyPosition']);
        }
        elseif (\array_key_exists('FantasyPosition', $data) && $data['FantasyPosition'] === null) {
            $object->setFantasyPosition(null);
        }
        if (\array_key_exists('Active', $data) && $data['Active'] !== null) {
            $object->setActive($data['Active']);
        }
        elseif (\array_key_exists('Active', $data) && $data['Active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('PositionCategory', $data) && $data['PositionCategory'] !== null) {
            $object->setPositionCategory($data['PositionCategory']);
        }
        elseif (\array_key_exists('PositionCategory', $data) && $data['PositionCategory'] === null) {
            $object->setPositionCategory(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Age', $data) && $data['Age'] !== null) {
            $object->setAge($data['Age']);
        }
        elseif (\array_key_exists('Age', $data) && $data['Age'] === null) {
            $object->setAge(null);
        }
        if (\array_key_exists('ExperienceString', $data) && $data['ExperienceString'] !== null) {
            $object->setExperienceString($data['ExperienceString']);
        }
        elseif (\array_key_exists('ExperienceString', $data) && $data['ExperienceString'] === null) {
            $object->setExperienceString(null);
        }
        if (\array_key_exists('BirthDateString', $data) && $data['BirthDateString'] !== null) {
            $object->setBirthDateString($data['BirthDateString']);
        }
        elseif (\array_key_exists('BirthDateString', $data) && $data['BirthDateString'] === null) {
            $object->setBirthDateString(null);
        }
        if (\array_key_exists('PhotoUrl', $data) && $data['PhotoUrl'] !== null) {
            $object->setPhotoUrl($data['PhotoUrl']);
        }
        elseif (\array_key_exists('PhotoUrl', $data) && $data['PhotoUrl'] === null) {
            $object->setPhotoUrl(null);
        }
        if (\array_key_exists('ByeWeek', $data) && $data['ByeWeek'] !== null) {
            $object->setByeWeek($data['ByeWeek']);
        }
        elseif (\array_key_exists('ByeWeek', $data) && $data['ByeWeek'] === null) {
            $object->setByeWeek(null);
        }
        if (\array_key_exists('UpcomingGameOpponent', $data) && $data['UpcomingGameOpponent'] !== null) {
            $object->setUpcomingGameOpponent($data['UpcomingGameOpponent']);
        }
        elseif (\array_key_exists('UpcomingGameOpponent', $data) && $data['UpcomingGameOpponent'] === null) {
            $object->setUpcomingGameOpponent(null);
        }
        if (\array_key_exists('UpcomingGameWeek', $data)) {
            $object->setUpcomingGameWeek($data['UpcomingGameWeek']);
        }
        if (\array_key_exists('ShortName', $data) && $data['ShortName'] !== null) {
            $object->setShortName($data['ShortName']);
        }
        elseif (\array_key_exists('ShortName', $data) && $data['ShortName'] === null) {
            $object->setShortName(null);
        }
        if (\array_key_exists('AverageDraftPosition', $data) && $data['AverageDraftPosition'] !== null) {
            $object->setAverageDraftPosition($data['AverageDraftPosition']);
        }
        elseif (\array_key_exists('AverageDraftPosition', $data) && $data['AverageDraftPosition'] === null) {
            $object->setAverageDraftPosition(null);
        }
        if (\array_key_exists('DepthPositionCategory', $data) && $data['DepthPositionCategory'] !== null) {
            $object->setDepthPositionCategory($data['DepthPositionCategory']);
        }
        elseif (\array_key_exists('DepthPositionCategory', $data) && $data['DepthPositionCategory'] === null) {
            $object->setDepthPositionCategory(null);
        }
        if (\array_key_exists('DepthPosition', $data) && $data['DepthPosition'] !== null) {
            $object->setDepthPosition($data['DepthPosition']);
        }
        elseif (\array_key_exists('DepthPosition', $data) && $data['DepthPosition'] === null) {
            $object->setDepthPosition(null);
        }
        if (\array_key_exists('DepthOrder', $data) && $data['DepthOrder'] !== null) {
            $object->setDepthOrder($data['DepthOrder']);
        }
        elseif (\array_key_exists('DepthOrder', $data) && $data['DepthOrder'] === null) {
            $object->setDepthOrder(null);
        }
        if (\array_key_exists('DepthDisplayOrder', $data) && $data['DepthDisplayOrder'] !== null) {
            $object->setDepthDisplayOrder($data['DepthDisplayOrder']);
        }
        elseif (\array_key_exists('DepthDisplayOrder', $data) && $data['DepthDisplayOrder'] === null) {
            $object->setDepthDisplayOrder(null);
        }
        if (\array_key_exists('CurrentTeam', $data) && $data['CurrentTeam'] !== null) {
            $object->setCurrentTeam($data['CurrentTeam']);
        }
        elseif (\array_key_exists('CurrentTeam', $data) && $data['CurrentTeam'] === null) {
            $object->setCurrentTeam(null);
        }
        if (\array_key_exists('CollegeDraftTeam', $data) && $data['CollegeDraftTeam'] !== null) {
            $object->setCollegeDraftTeam($data['CollegeDraftTeam']);
        }
        elseif (\array_key_exists('CollegeDraftTeam', $data) && $data['CollegeDraftTeam'] === null) {
            $object->setCollegeDraftTeam(null);
        }
        if (\array_key_exists('CollegeDraftYear', $data) && $data['CollegeDraftYear'] !== null) {
            $object->setCollegeDraftYear($data['CollegeDraftYear']);
        }
        elseif (\array_key_exists('CollegeDraftYear', $data) && $data['CollegeDraftYear'] === null) {
            $object->setCollegeDraftYear(null);
        }
        if (\array_key_exists('CollegeDraftRound', $data) && $data['CollegeDraftRound'] !== null) {
            $object->setCollegeDraftRound($data['CollegeDraftRound']);
        }
        elseif (\array_key_exists('CollegeDraftRound', $data) && $data['CollegeDraftRound'] === null) {
            $object->setCollegeDraftRound(null);
        }
        if (\array_key_exists('CollegeDraftPick', $data) && $data['CollegeDraftPick'] !== null) {
            $object->setCollegeDraftPick($data['CollegeDraftPick']);
        }
        elseif (\array_key_exists('CollegeDraftPick', $data) && $data['CollegeDraftPick'] === null) {
            $object->setCollegeDraftPick(null);
        }
        if (\array_key_exists('IsUndraftedFreeAgent', $data)) {
            $object->setIsUndraftedFreeAgent($data['IsUndraftedFreeAgent']);
        }
        if (\array_key_exists('HeightFeet', $data) && $data['HeightFeet'] !== null) {
            $object->setHeightFeet($data['HeightFeet']);
        }
        elseif (\array_key_exists('HeightFeet', $data) && $data['HeightFeet'] === null) {
            $object->setHeightFeet(null);
        }
        if (\array_key_exists('HeightInches', $data) && $data['HeightInches'] !== null) {
            $object->setHeightInches($data['HeightInches']);
        }
        elseif (\array_key_exists('HeightInches', $data) && $data['HeightInches'] === null) {
            $object->setHeightInches(null);
        }
        if (\array_key_exists('UpcomingOpponentRank', $data) && $data['UpcomingOpponentRank'] !== null) {
            $object->setUpcomingOpponentRank($data['UpcomingOpponentRank']);
        }
        elseif (\array_key_exists('UpcomingOpponentRank', $data) && $data['UpcomingOpponentRank'] === null) {
            $object->setUpcomingOpponentRank(null);
        }
        if (\array_key_exists('UpcomingOpponentPositionRank', $data) && $data['UpcomingOpponentPositionRank'] !== null) {
            $object->setUpcomingOpponentPositionRank($data['UpcomingOpponentPositionRank']);
        }
        elseif (\array_key_exists('UpcomingOpponentPositionRank', $data) && $data['UpcomingOpponentPositionRank'] === null) {
            $object->setUpcomingOpponentPositionRank(null);
        }
        if (\array_key_exists('CurrentStatus', $data) && $data['CurrentStatus'] !== null) {
            $object->setCurrentStatus($data['CurrentStatus']);
        }
        elseif (\array_key_exists('CurrentStatus', $data) && $data['CurrentStatus'] === null) {
            $object->setCurrentStatus(null);
        }
        if (\array_key_exists('UpcomingSalary', $data) && $data['UpcomingSalary'] !== null) {
            $object->setUpcomingSalary($data['UpcomingSalary']);
        }
        elseif (\array_key_exists('UpcomingSalary', $data) && $data['UpcomingSalary'] === null) {
            $object->setUpcomingSalary(null);
        }
        if (\array_key_exists('FantasyAlarmPlayerID', $data) && $data['FantasyAlarmPlayerID'] !== null) {
            $object->setFantasyAlarmPlayerID($data['FantasyAlarmPlayerID']);
        }
        elseif (\array_key_exists('FantasyAlarmPlayerID', $data) && $data['FantasyAlarmPlayerID'] === null) {
            $object->setFantasyAlarmPlayerID(null);
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
        if (\array_key_exists('FantasyPositionDepthOrder', $data) && $data['FantasyPositionDepthOrder'] !== null) {
            $object->setFantasyPositionDepthOrder($data['FantasyPositionDepthOrder']);
        }
        elseif (\array_key_exists('FantasyPositionDepthOrder', $data) && $data['FantasyPositionDepthOrder'] === null) {
            $object->setFantasyPositionDepthOrder(null);
        }
        if (\array_key_exists('InjuryPractice', $data) && $data['InjuryPractice'] !== null) {
            $object->setInjuryPractice($data['InjuryPractice']);
        }
        elseif (\array_key_exists('InjuryPractice', $data) && $data['InjuryPractice'] === null) {
            $object->setInjuryPractice(null);
        }
        if (\array_key_exists('InjuryPracticeDescription', $data) && $data['InjuryPracticeDescription'] !== null) {
            $object->setInjuryPracticeDescription($data['InjuryPracticeDescription']);
        }
        elseif (\array_key_exists('InjuryPracticeDescription', $data) && $data['InjuryPracticeDescription'] === null) {
            $object->setInjuryPracticeDescription(null);
        }
        if (\array_key_exists('DeclaredInactive', $data)) {
            $object->setDeclaredInactive($data['DeclaredInactive']);
        }
        if (\array_key_exists('UpcomingFanDuelSalary', $data) && $data['UpcomingFanDuelSalary'] !== null) {
            $object->setUpcomingFanDuelSalary($data['UpcomingFanDuelSalary']);
        }
        elseif (\array_key_exists('UpcomingFanDuelSalary', $data) && $data['UpcomingFanDuelSalary'] === null) {
            $object->setUpcomingFanDuelSalary(null);
        }
        if (\array_key_exists('UpcomingDraftKingsSalary', $data) && $data['UpcomingDraftKingsSalary'] !== null) {
            $object->setUpcomingDraftKingsSalary($data['UpcomingDraftKingsSalary']);
        }
        elseif (\array_key_exists('UpcomingDraftKingsSalary', $data) && $data['UpcomingDraftKingsSalary'] === null) {
            $object->setUpcomingDraftKingsSalary(null);
        }
        if (\array_key_exists('UpcomingYahooSalary', $data) && $data['UpcomingYahooSalary'] !== null) {
            $object->setUpcomingYahooSalary($data['UpcomingYahooSalary']);
        }
        elseif (\array_key_exists('UpcomingYahooSalary', $data) && $data['UpcomingYahooSalary'] === null) {
            $object->setUpcomingYahooSalary(null);
        }
        if (\array_key_exists('TeamID', $data) && $data['TeamID'] !== null) {
            $object->setTeamID($data['TeamID']);
        }
        elseif (\array_key_exists('TeamID', $data) && $data['TeamID'] === null) {
            $object->setTeamID(null);
        }
        if (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] !== null) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        elseif (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] === null) {
            $object->setGlobalTeamID(null);
        }
        if (\array_key_exists('FantasyDraftPlayerID', $data) && $data['FantasyDraftPlayerID'] !== null) {
            $object->setFantasyDraftPlayerID($data['FantasyDraftPlayerID']);
        }
        elseif (\array_key_exists('FantasyDraftPlayerID', $data) && $data['FantasyDraftPlayerID'] === null) {
            $object->setFantasyDraftPlayerID(null);
        }
        if (\array_key_exists('FantasyDraftName', $data) && $data['FantasyDraftName'] !== null) {
            $object->setFantasyDraftName($data['FantasyDraftName']);
        }
        elseif (\array_key_exists('FantasyDraftName', $data) && $data['FantasyDraftName'] === null) {
            $object->setFantasyDraftName(null);
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