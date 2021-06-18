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
class DailyFantasyPlayerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\DailyFantasyPlayer';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\DailyFantasyPlayer';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\DailyFantasyPlayer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('Date', $data) && $data['Date'] !== null) {
            $object->setDate($data['Date']);
        }
        elseif (\array_key_exists('Date', $data) && $data['Date'] === null) {
            $object->setDate(null);
        }
        if (\array_key_exists('ShortName', $data) && $data['ShortName'] !== null) {
            $object->setShortName($data['ShortName']);
        }
        elseif (\array_key_exists('ShortName', $data) && $data['ShortName'] === null) {
            $object->setShortName(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('Opponent', $data) && $data['Opponent'] !== null) {
            $object->setOpponent($data['Opponent']);
        }
        elseif (\array_key_exists('Opponent', $data) && $data['Opponent'] === null) {
            $object->setOpponent(null);
        }
        if (\array_key_exists('HomeOrAway', $data) && $data['HomeOrAway'] !== null) {
            $object->setHomeOrAway($data['HomeOrAway']);
        }
        elseif (\array_key_exists('HomeOrAway', $data) && $data['HomeOrAway'] === null) {
            $object->setHomeOrAway(null);
        }
        if (\array_key_exists('Position', $data) && $data['Position'] !== null) {
            $object->setPosition($data['Position']);
        }
        elseif (\array_key_exists('Position', $data) && $data['Position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('Salary', $data)) {
            $object->setSalary($data['Salary']);
        }
        if (\array_key_exists('LastGameFantasyPoints', $data) && $data['LastGameFantasyPoints'] !== null) {
            $object->setLastGameFantasyPoints($data['LastGameFantasyPoints']);
        }
        elseif (\array_key_exists('LastGameFantasyPoints', $data) && $data['LastGameFantasyPoints'] === null) {
            $object->setLastGameFantasyPoints(null);
        }
        if (\array_key_exists('ProjectedFantasyPoints', $data) && $data['ProjectedFantasyPoints'] !== null) {
            $object->setProjectedFantasyPoints($data['ProjectedFantasyPoints']);
        }
        elseif (\array_key_exists('ProjectedFantasyPoints', $data) && $data['ProjectedFantasyPoints'] === null) {
            $object->setProjectedFantasyPoints(null);
        }
        if (\array_key_exists('OpponentRank', $data) && $data['OpponentRank'] !== null) {
            $object->setOpponentRank($data['OpponentRank']);
        }
        elseif (\array_key_exists('OpponentRank', $data) && $data['OpponentRank'] === null) {
            $object->setOpponentRank(null);
        }
        if (\array_key_exists('OpponentPositionRank', $data) && $data['OpponentPositionRank'] !== null) {
            $object->setOpponentPositionRank($data['OpponentPositionRank']);
        }
        elseif (\array_key_exists('OpponentPositionRank', $data) && $data['OpponentPositionRank'] === null) {
            $object->setOpponentPositionRank(null);
        }
        if (\array_key_exists('Status', $data) && $data['Status'] !== null) {
            $object->setStatus($data['Status']);
        }
        elseif (\array_key_exists('Status', $data) && $data['Status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('StatusCode', $data) && $data['StatusCode'] !== null) {
            $object->setStatusCode($data['StatusCode']);
        }
        elseif (\array_key_exists('StatusCode', $data) && $data['StatusCode'] === null) {
            $object->setStatusCode(null);
        }
        if (\array_key_exists('StatusColor', $data) && $data['StatusColor'] !== null) {
            $object->setStatusColor($data['StatusColor']);
        }
        elseif (\array_key_exists('StatusColor', $data) && $data['StatusColor'] === null) {
            $object->setStatusColor(null);
        }
        if (\array_key_exists('FanDuelSalary', $data) && $data['FanDuelSalary'] !== null) {
            $object->setFanDuelSalary($data['FanDuelSalary']);
        }
        elseif (\array_key_exists('FanDuelSalary', $data) && $data['FanDuelSalary'] === null) {
            $object->setFanDuelSalary(null);
        }
        if (\array_key_exists('DraftKingsSalary', $data) && $data['DraftKingsSalary'] !== null) {
            $object->setDraftKingsSalary($data['DraftKingsSalary']);
        }
        elseif (\array_key_exists('DraftKingsSalary', $data) && $data['DraftKingsSalary'] === null) {
            $object->setDraftKingsSalary(null);
        }
        if (\array_key_exists('YahooSalary', $data) && $data['YahooSalary'] !== null) {
            $object->setYahooSalary($data['YahooSalary']);
        }
        elseif (\array_key_exists('YahooSalary', $data) && $data['YahooSalary'] === null) {
            $object->setYahooSalary(null);
        }
        if (\array_key_exists('FantasyDataSalary', $data) && $data['FantasyDataSalary'] !== null) {
            $object->setFantasyDataSalary($data['FantasyDataSalary']);
        }
        elseif (\array_key_exists('FantasyDataSalary', $data) && $data['FantasyDataSalary'] === null) {
            $object->setFantasyDataSalary(null);
        }
        if (\array_key_exists('FantasyDraftSalary', $data) && $data['FantasyDraftSalary'] !== null) {
            $object->setFantasyDraftSalary($data['FantasyDraftSalary']);
        }
        elseif (\array_key_exists('FantasyDraftSalary', $data) && $data['FantasyDraftSalary'] === null) {
            $object->setFantasyDraftSalary(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getDate()) {
            $data['Date'] = $object->getDate();
        }
        if (null !== $object->getShortName()) {
            $data['ShortName'] = $object->getShortName();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getOpponent()) {
            $data['Opponent'] = $object->getOpponent();
        }
        if (null !== $object->getHomeOrAway()) {
            $data['HomeOrAway'] = $object->getHomeOrAway();
        }
        if (null !== $object->getPosition()) {
            $data['Position'] = $object->getPosition();
        }
        if (null !== $object->getSalary()) {
            $data['Salary'] = $object->getSalary();
        }
        if (null !== $object->getLastGameFantasyPoints()) {
            $data['LastGameFantasyPoints'] = $object->getLastGameFantasyPoints();
        }
        if (null !== $object->getProjectedFantasyPoints()) {
            $data['ProjectedFantasyPoints'] = $object->getProjectedFantasyPoints();
        }
        if (null !== $object->getOpponentRank()) {
            $data['OpponentRank'] = $object->getOpponentRank();
        }
        if (null !== $object->getOpponentPositionRank()) {
            $data['OpponentPositionRank'] = $object->getOpponentPositionRank();
        }
        if (null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus();
        }
        if (null !== $object->getStatusCode()) {
            $data['StatusCode'] = $object->getStatusCode();
        }
        if (null !== $object->getStatusColor()) {
            $data['StatusColor'] = $object->getStatusColor();
        }
        if (null !== $object->getFanDuelSalary()) {
            $data['FanDuelSalary'] = $object->getFanDuelSalary();
        }
        if (null !== $object->getDraftKingsSalary()) {
            $data['DraftKingsSalary'] = $object->getDraftKingsSalary();
        }
        if (null !== $object->getYahooSalary()) {
            $data['YahooSalary'] = $object->getYahooSalary();
        }
        if (null !== $object->getFantasyDataSalary()) {
            $data['FantasyDataSalary'] = $object->getFantasyDataSalary();
        }
        if (null !== $object->getFantasyDraftSalary()) {
            $data['FantasyDraftSalary'] = $object->getFantasyDraftSalary();
        }
        return $data;
    }
}