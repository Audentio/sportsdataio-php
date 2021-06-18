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
class TeamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\Team';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\Team';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\Team();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Key', $data) && $data['Key'] !== null) {
            $object->setKey($data['Key']);
        }
        elseif (\array_key_exists('Key', $data) && $data['Key'] === null) {
            $object->setKey(null);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('City', $data) && $data['City'] !== null) {
            $object->setCity($data['City']);
        }
        elseif (\array_key_exists('City', $data) && $data['City'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Conference', $data) && $data['Conference'] !== null) {
            $object->setConference($data['Conference']);
        }
        elseif (\array_key_exists('Conference', $data) && $data['Conference'] === null) {
            $object->setConference(null);
        }
        if (\array_key_exists('Division', $data) && $data['Division'] !== null) {
            $object->setDivision($data['Division']);
        }
        elseif (\array_key_exists('Division', $data) && $data['Division'] === null) {
            $object->setDivision(null);
        }
        if (\array_key_exists('FullName', $data) && $data['FullName'] !== null) {
            $object->setFullName($data['FullName']);
        }
        elseif (\array_key_exists('FullName', $data) && $data['FullName'] === null) {
            $object->setFullName(null);
        }
        if (\array_key_exists('StadiumID', $data) && $data['StadiumID'] !== null) {
            $object->setStadiumID($data['StadiumID']);
        }
        elseif (\array_key_exists('StadiumID', $data) && $data['StadiumID'] === null) {
            $object->setStadiumID(null);
        }
        if (\array_key_exists('ByeWeek', $data) && $data['ByeWeek'] !== null) {
            $object->setByeWeek($data['ByeWeek']);
        }
        elseif (\array_key_exists('ByeWeek', $data) && $data['ByeWeek'] === null) {
            $object->setByeWeek(null);
        }
        if (\array_key_exists('AverageDraftPosition', $data) && $data['AverageDraftPosition'] !== null) {
            $object->setAverageDraftPosition($data['AverageDraftPosition']);
        }
        elseif (\array_key_exists('AverageDraftPosition', $data) && $data['AverageDraftPosition'] === null) {
            $object->setAverageDraftPosition(null);
        }
        if (\array_key_exists('AverageDraftPositionPPR', $data) && $data['AverageDraftPositionPPR'] !== null) {
            $object->setAverageDraftPositionPPR($data['AverageDraftPositionPPR']);
        }
        elseif (\array_key_exists('AverageDraftPositionPPR', $data) && $data['AverageDraftPositionPPR'] === null) {
            $object->setAverageDraftPositionPPR(null);
        }
        if (\array_key_exists('HeadCoach', $data) && $data['HeadCoach'] !== null) {
            $object->setHeadCoach($data['HeadCoach']);
        }
        elseif (\array_key_exists('HeadCoach', $data) && $data['HeadCoach'] === null) {
            $object->setHeadCoach(null);
        }
        if (\array_key_exists('OffensiveCoordinator', $data) && $data['OffensiveCoordinator'] !== null) {
            $object->setOffensiveCoordinator($data['OffensiveCoordinator']);
        }
        elseif (\array_key_exists('OffensiveCoordinator', $data) && $data['OffensiveCoordinator'] === null) {
            $object->setOffensiveCoordinator(null);
        }
        if (\array_key_exists('DefensiveCoordinator', $data) && $data['DefensiveCoordinator'] !== null) {
            $object->setDefensiveCoordinator($data['DefensiveCoordinator']);
        }
        elseif (\array_key_exists('DefensiveCoordinator', $data) && $data['DefensiveCoordinator'] === null) {
            $object->setDefensiveCoordinator(null);
        }
        if (\array_key_exists('SpecialTeamsCoach', $data) && $data['SpecialTeamsCoach'] !== null) {
            $object->setSpecialTeamsCoach($data['SpecialTeamsCoach']);
        }
        elseif (\array_key_exists('SpecialTeamsCoach', $data) && $data['SpecialTeamsCoach'] === null) {
            $object->setSpecialTeamsCoach(null);
        }
        if (\array_key_exists('OffensiveScheme', $data) && $data['OffensiveScheme'] !== null) {
            $object->setOffensiveScheme($data['OffensiveScheme']);
        }
        elseif (\array_key_exists('OffensiveScheme', $data) && $data['OffensiveScheme'] === null) {
            $object->setOffensiveScheme(null);
        }
        if (\array_key_exists('DefensiveScheme', $data) && $data['DefensiveScheme'] !== null) {
            $object->setDefensiveScheme($data['DefensiveScheme']);
        }
        elseif (\array_key_exists('DefensiveScheme', $data) && $data['DefensiveScheme'] === null) {
            $object->setDefensiveScheme(null);
        }
        if (\array_key_exists('UpcomingSalary', $data) && $data['UpcomingSalary'] !== null) {
            $object->setUpcomingSalary($data['UpcomingSalary']);
        }
        elseif (\array_key_exists('UpcomingSalary', $data) && $data['UpcomingSalary'] === null) {
            $object->setUpcomingSalary(null);
        }
        if (\array_key_exists('UpcomingOpponent', $data) && $data['UpcomingOpponent'] !== null) {
            $object->setUpcomingOpponent($data['UpcomingOpponent']);
        }
        elseif (\array_key_exists('UpcomingOpponent', $data) && $data['UpcomingOpponent'] === null) {
            $object->setUpcomingOpponent(null);
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
        if (\array_key_exists('PrimaryColor', $data) && $data['PrimaryColor'] !== null) {
            $object->setPrimaryColor($data['PrimaryColor']);
        }
        elseif (\array_key_exists('PrimaryColor', $data) && $data['PrimaryColor'] === null) {
            $object->setPrimaryColor(null);
        }
        if (\array_key_exists('SecondaryColor', $data) && $data['SecondaryColor'] !== null) {
            $object->setSecondaryColor($data['SecondaryColor']);
        }
        elseif (\array_key_exists('SecondaryColor', $data) && $data['SecondaryColor'] === null) {
            $object->setSecondaryColor(null);
        }
        if (\array_key_exists('TertiaryColor', $data) && $data['TertiaryColor'] !== null) {
            $object->setTertiaryColor($data['TertiaryColor']);
        }
        elseif (\array_key_exists('TertiaryColor', $data) && $data['TertiaryColor'] === null) {
            $object->setTertiaryColor(null);
        }
        if (\array_key_exists('QuaternaryColor', $data) && $data['QuaternaryColor'] !== null) {
            $object->setQuaternaryColor($data['QuaternaryColor']);
        }
        elseif (\array_key_exists('QuaternaryColor', $data) && $data['QuaternaryColor'] === null) {
            $object->setQuaternaryColor(null);
        }
        if (\array_key_exists('WikipediaLogoUrl', $data) && $data['WikipediaLogoUrl'] !== null) {
            $object->setWikipediaLogoUrl($data['WikipediaLogoUrl']);
        }
        elseif (\array_key_exists('WikipediaLogoUrl', $data) && $data['WikipediaLogoUrl'] === null) {
            $object->setWikipediaLogoUrl(null);
        }
        if (\array_key_exists('WikipediaWordMarkUrl', $data) && $data['WikipediaWordMarkUrl'] !== null) {
            $object->setWikipediaWordMarkUrl($data['WikipediaWordMarkUrl']);
        }
        elseif (\array_key_exists('WikipediaWordMarkUrl', $data) && $data['WikipediaWordMarkUrl'] === null) {
            $object->setWikipediaWordMarkUrl(null);
        }
        if (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] !== null) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        elseif (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] === null) {
            $object->setGlobalTeamID(null);
        }
        if (\array_key_exists('DraftKingsName', $data) && $data['DraftKingsName'] !== null) {
            $object->setDraftKingsName($data['DraftKingsName']);
        }
        elseif (\array_key_exists('DraftKingsName', $data) && $data['DraftKingsName'] === null) {
            $object->setDraftKingsName(null);
        }
        if (\array_key_exists('DraftKingsPlayerID', $data) && $data['DraftKingsPlayerID'] !== null) {
            $object->setDraftKingsPlayerID($data['DraftKingsPlayerID']);
        }
        elseif (\array_key_exists('DraftKingsPlayerID', $data) && $data['DraftKingsPlayerID'] === null) {
            $object->setDraftKingsPlayerID(null);
        }
        if (\array_key_exists('FanDuelName', $data) && $data['FanDuelName'] !== null) {
            $object->setFanDuelName($data['FanDuelName']);
        }
        elseif (\array_key_exists('FanDuelName', $data) && $data['FanDuelName'] === null) {
            $object->setFanDuelName(null);
        }
        if (\array_key_exists('FanDuelPlayerID', $data) && $data['FanDuelPlayerID'] !== null) {
            $object->setFanDuelPlayerID($data['FanDuelPlayerID']);
        }
        elseif (\array_key_exists('FanDuelPlayerID', $data) && $data['FanDuelPlayerID'] === null) {
            $object->setFanDuelPlayerID(null);
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
        if (\array_key_exists('YahooName', $data) && $data['YahooName'] !== null) {
            $object->setYahooName($data['YahooName']);
        }
        elseif (\array_key_exists('YahooName', $data) && $data['YahooName'] === null) {
            $object->setYahooName(null);
        }
        if (\array_key_exists('YahooPlayerID', $data) && $data['YahooPlayerID'] !== null) {
            $object->setYahooPlayerID($data['YahooPlayerID']);
        }
        elseif (\array_key_exists('YahooPlayerID', $data) && $data['YahooPlayerID'] === null) {
            $object->setYahooPlayerID(null);
        }
        if (\array_key_exists('StadiumDetails', $data)) {
            $object->setStadiumDetails($this->denormalizer->denormalize($data['StadiumDetails'], 'Sportsdata\\API\\NFL\\Model\\Stadium', 'json', $context));
        }
        if (\array_key_exists('AverageDraftPosition2QB', $data) && $data['AverageDraftPosition2QB'] !== null) {
            $object->setAverageDraftPosition2QB($data['AverageDraftPosition2QB']);
        }
        elseif (\array_key_exists('AverageDraftPosition2QB', $data) && $data['AverageDraftPosition2QB'] === null) {
            $object->setAverageDraftPosition2QB(null);
        }
        if (\array_key_exists('AverageDraftPositionDynasty', $data) && $data['AverageDraftPositionDynasty'] !== null) {
            $object->setAverageDraftPositionDynasty($data['AverageDraftPositionDynasty']);
        }
        elseif (\array_key_exists('AverageDraftPositionDynasty', $data) && $data['AverageDraftPositionDynasty'] === null) {
            $object->setAverageDraftPositionDynasty(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getKey()) {
            $data['Key'] = $object->getKey();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getCity()) {
            $data['City'] = $object->getCity();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getConference()) {
            $data['Conference'] = $object->getConference();
        }
        if (null !== $object->getDivision()) {
            $data['Division'] = $object->getDivision();
        }
        if (null !== $object->getFullName()) {
            $data['FullName'] = $object->getFullName();
        }
        if (null !== $object->getStadiumID()) {
            $data['StadiumID'] = $object->getStadiumID();
        }
        if (null !== $object->getByeWeek()) {
            $data['ByeWeek'] = $object->getByeWeek();
        }
        if (null !== $object->getAverageDraftPosition()) {
            $data['AverageDraftPosition'] = $object->getAverageDraftPosition();
        }
        if (null !== $object->getAverageDraftPositionPPR()) {
            $data['AverageDraftPositionPPR'] = $object->getAverageDraftPositionPPR();
        }
        if (null !== $object->getHeadCoach()) {
            $data['HeadCoach'] = $object->getHeadCoach();
        }
        if (null !== $object->getOffensiveCoordinator()) {
            $data['OffensiveCoordinator'] = $object->getOffensiveCoordinator();
        }
        if (null !== $object->getDefensiveCoordinator()) {
            $data['DefensiveCoordinator'] = $object->getDefensiveCoordinator();
        }
        if (null !== $object->getSpecialTeamsCoach()) {
            $data['SpecialTeamsCoach'] = $object->getSpecialTeamsCoach();
        }
        if (null !== $object->getOffensiveScheme()) {
            $data['OffensiveScheme'] = $object->getOffensiveScheme();
        }
        if (null !== $object->getDefensiveScheme()) {
            $data['DefensiveScheme'] = $object->getDefensiveScheme();
        }
        if (null !== $object->getUpcomingSalary()) {
            $data['UpcomingSalary'] = $object->getUpcomingSalary();
        }
        if (null !== $object->getUpcomingOpponent()) {
            $data['UpcomingOpponent'] = $object->getUpcomingOpponent();
        }
        if (null !== $object->getUpcomingOpponentRank()) {
            $data['UpcomingOpponentRank'] = $object->getUpcomingOpponentRank();
        }
        if (null !== $object->getUpcomingOpponentPositionRank()) {
            $data['UpcomingOpponentPositionRank'] = $object->getUpcomingOpponentPositionRank();
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
        if (null !== $object->getPrimaryColor()) {
            $data['PrimaryColor'] = $object->getPrimaryColor();
        }
        if (null !== $object->getSecondaryColor()) {
            $data['SecondaryColor'] = $object->getSecondaryColor();
        }
        if (null !== $object->getTertiaryColor()) {
            $data['TertiaryColor'] = $object->getTertiaryColor();
        }
        if (null !== $object->getQuaternaryColor()) {
            $data['QuaternaryColor'] = $object->getQuaternaryColor();
        }
        if (null !== $object->getWikipediaLogoUrl()) {
            $data['WikipediaLogoUrl'] = $object->getWikipediaLogoUrl();
        }
        if (null !== $object->getWikipediaWordMarkUrl()) {
            $data['WikipediaWordMarkUrl'] = $object->getWikipediaWordMarkUrl();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        if (null !== $object->getDraftKingsName()) {
            $data['DraftKingsName'] = $object->getDraftKingsName();
        }
        if (null !== $object->getDraftKingsPlayerID()) {
            $data['DraftKingsPlayerID'] = $object->getDraftKingsPlayerID();
        }
        if (null !== $object->getFanDuelName()) {
            $data['FanDuelName'] = $object->getFanDuelName();
        }
        if (null !== $object->getFanDuelPlayerID()) {
            $data['FanDuelPlayerID'] = $object->getFanDuelPlayerID();
        }
        if (null !== $object->getFantasyDraftName()) {
            $data['FantasyDraftName'] = $object->getFantasyDraftName();
        }
        if (null !== $object->getFantasyDraftPlayerID()) {
            $data['FantasyDraftPlayerID'] = $object->getFantasyDraftPlayerID();
        }
        if (null !== $object->getYahooName()) {
            $data['YahooName'] = $object->getYahooName();
        }
        if (null !== $object->getYahooPlayerID()) {
            $data['YahooPlayerID'] = $object->getYahooPlayerID();
        }
        if (null !== $object->getStadiumDetails()) {
            $data['StadiumDetails'] = $this->normalizer->normalize($object->getStadiumDetails(), 'json', $context);
        }
        if (null !== $object->getAverageDraftPosition2QB()) {
            $data['AverageDraftPosition2QB'] = $object->getAverageDraftPosition2QB();
        }
        if (null !== $object->getAverageDraftPositionDynasty()) {
            $data['AverageDraftPositionDynasty'] = $object->getAverageDraftPositionDynasty();
        }
        return $data;
    }
}