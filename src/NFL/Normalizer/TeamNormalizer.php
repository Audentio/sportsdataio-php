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
        if (\array_key_exists('Key', $data)) {
            $object->setKey($data['Key']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('City', $data)) {
            $object->setCity($data['City']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Conference', $data)) {
            $object->setConference($data['Conference']);
        }
        if (\array_key_exists('Division', $data)) {
            $object->setDivision($data['Division']);
        }
        if (\array_key_exists('FullName', $data)) {
            $object->setFullName($data['FullName']);
        }
        if (\array_key_exists('StadiumID', $data)) {
            $object->setStadiumID($data['StadiumID']);
        }
        if (\array_key_exists('ByeWeek', $data)) {
            $object->setByeWeek($data['ByeWeek']);
        }
        if (\array_key_exists('AverageDraftPosition', $data)) {
            $object->setAverageDraftPosition($data['AverageDraftPosition']);
        }
        if (\array_key_exists('AverageDraftPositionPPR', $data)) {
            $object->setAverageDraftPositionPPR($data['AverageDraftPositionPPR']);
        }
        if (\array_key_exists('HeadCoach', $data)) {
            $object->setHeadCoach($data['HeadCoach']);
        }
        if (\array_key_exists('OffensiveCoordinator', $data)) {
            $object->setOffensiveCoordinator($data['OffensiveCoordinator']);
        }
        if (\array_key_exists('DefensiveCoordinator', $data)) {
            $object->setDefensiveCoordinator($data['DefensiveCoordinator']);
        }
        if (\array_key_exists('SpecialTeamsCoach', $data)) {
            $object->setSpecialTeamsCoach($data['SpecialTeamsCoach']);
        }
        if (\array_key_exists('OffensiveScheme', $data)) {
            $object->setOffensiveScheme($data['OffensiveScheme']);
        }
        if (\array_key_exists('DefensiveScheme', $data)) {
            $object->setDefensiveScheme($data['DefensiveScheme']);
        }
        if (\array_key_exists('UpcomingSalary', $data)) {
            $object->setUpcomingSalary($data['UpcomingSalary']);
        }
        if (\array_key_exists('UpcomingOpponent', $data)) {
            $object->setUpcomingOpponent($data['UpcomingOpponent']);
        }
        if (\array_key_exists('UpcomingOpponentRank', $data)) {
            $object->setUpcomingOpponentRank($data['UpcomingOpponentRank']);
        }
        if (\array_key_exists('UpcomingOpponentPositionRank', $data)) {
            $object->setUpcomingOpponentPositionRank($data['UpcomingOpponentPositionRank']);
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
        if (\array_key_exists('PrimaryColor', $data)) {
            $object->setPrimaryColor($data['PrimaryColor']);
        }
        if (\array_key_exists('SecondaryColor', $data)) {
            $object->setSecondaryColor($data['SecondaryColor']);
        }
        if (\array_key_exists('TertiaryColor', $data)) {
            $object->setTertiaryColor($data['TertiaryColor']);
        }
        if (\array_key_exists('QuaternaryColor', $data)) {
            $object->setQuaternaryColor($data['QuaternaryColor']);
        }
        if (\array_key_exists('WikipediaLogoUrl', $data)) {
            $object->setWikipediaLogoUrl($data['WikipediaLogoUrl']);
        }
        if (\array_key_exists('WikipediaWordMarkUrl', $data)) {
            $object->setWikipediaWordMarkUrl($data['WikipediaWordMarkUrl']);
        }
        if (\array_key_exists('GlobalTeamID', $data)) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        if (\array_key_exists('DraftKingsName', $data)) {
            $object->setDraftKingsName($data['DraftKingsName']);
        }
        if (\array_key_exists('DraftKingsPlayerID', $data)) {
            $object->setDraftKingsPlayerID($data['DraftKingsPlayerID']);
        }
        if (\array_key_exists('FanDuelName', $data)) {
            $object->setFanDuelName($data['FanDuelName']);
        }
        if (\array_key_exists('FanDuelPlayerID', $data)) {
            $object->setFanDuelPlayerID($data['FanDuelPlayerID']);
        }
        if (\array_key_exists('FantasyDraftName', $data)) {
            $object->setFantasyDraftName($data['FantasyDraftName']);
        }
        if (\array_key_exists('FantasyDraftPlayerID', $data)) {
            $object->setFantasyDraftPlayerID($data['FantasyDraftPlayerID']);
        }
        if (\array_key_exists('YahooName', $data)) {
            $object->setYahooName($data['YahooName']);
        }
        if (\array_key_exists('YahooPlayerID', $data)) {
            $object->setYahooPlayerID($data['YahooPlayerID']);
        }
        if (\array_key_exists('StadiumDetails', $data)) {
            $object->setStadiumDetails($this->denormalizer->denormalize($data['StadiumDetails'], 'Sportsdata\\API\\NFL\\Model\\Stadium', 'json', $context));
        }
        if (\array_key_exists('AverageDraftPosition2QB', $data)) {
            $object->setAverageDraftPosition2QB($data['AverageDraftPosition2QB']);
        }
        if (\array_key_exists('AverageDraftPositionDynasty', $data)) {
            $object->setAverageDraftPositionDynasty($data['AverageDraftPositionDynasty']);
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