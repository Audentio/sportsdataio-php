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
class FantasyPlayerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\FantasyPlayer';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\FantasyPlayer';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\FantasyPlayer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('FantasyPlayerKey', $data) && $data['FantasyPlayerKey'] !== null) {
            $object->setFantasyPlayerKey($data['FantasyPlayerKey']);
        }
        elseif (\array_key_exists('FantasyPlayerKey', $data) && $data['FantasyPlayerKey'] === null) {
            $object->setFantasyPlayerKey(null);
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
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
        if (\array_key_exists('Position', $data) && $data['Position'] !== null) {
            $object->setPosition($data['Position']);
        }
        elseif (\array_key_exists('Position', $data) && $data['Position'] === null) {
            $object->setPosition(null);
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
        if (\array_key_exists('ByeWeek', $data) && $data['ByeWeek'] !== null) {
            $object->setByeWeek($data['ByeWeek']);
        }
        elseif (\array_key_exists('ByeWeek', $data) && $data['ByeWeek'] === null) {
            $object->setByeWeek(null);
        }
        if (\array_key_exists('LastSeasonFantasyPoints', $data) && $data['LastSeasonFantasyPoints'] !== null) {
            $object->setLastSeasonFantasyPoints($data['LastSeasonFantasyPoints']);
        }
        elseif (\array_key_exists('LastSeasonFantasyPoints', $data) && $data['LastSeasonFantasyPoints'] === null) {
            $object->setLastSeasonFantasyPoints(null);
        }
        if (\array_key_exists('ProjectedFantasyPoints', $data) && $data['ProjectedFantasyPoints'] !== null) {
            $object->setProjectedFantasyPoints($data['ProjectedFantasyPoints']);
        }
        elseif (\array_key_exists('ProjectedFantasyPoints', $data) && $data['ProjectedFantasyPoints'] === null) {
            $object->setProjectedFantasyPoints(null);
        }
        if (\array_key_exists('AuctionValue', $data) && $data['AuctionValue'] !== null) {
            $object->setAuctionValue($data['AuctionValue']);
        }
        elseif (\array_key_exists('AuctionValue', $data) && $data['AuctionValue'] === null) {
            $object->setAuctionValue(null);
        }
        if (\array_key_exists('AuctionValuePPR', $data) && $data['AuctionValuePPR'] !== null) {
            $object->setAuctionValuePPR($data['AuctionValuePPR']);
        }
        elseif (\array_key_exists('AuctionValuePPR', $data) && $data['AuctionValuePPR'] === null) {
            $object->setAuctionValuePPR(null);
        }
        if (\array_key_exists('AverageDraftPositionIDP', $data) && $data['AverageDraftPositionIDP'] !== null) {
            $object->setAverageDraftPositionIDP($data['AverageDraftPositionIDP']);
        }
        elseif (\array_key_exists('AverageDraftPositionIDP', $data) && $data['AverageDraftPositionIDP'] === null) {
            $object->setAverageDraftPositionIDP(null);
        }
        if (\array_key_exists('AverageDraftPositionRookie', $data) && $data['AverageDraftPositionRookie'] !== null) {
            $object->setAverageDraftPositionRookie($data['AverageDraftPositionRookie']);
        }
        elseif (\array_key_exists('AverageDraftPositionRookie', $data) && $data['AverageDraftPositionRookie'] === null) {
            $object->setAverageDraftPositionRookie(null);
        }
        if (\array_key_exists('AverageDraftPositionDynasty', $data) && $data['AverageDraftPositionDynasty'] !== null) {
            $object->setAverageDraftPositionDynasty($data['AverageDraftPositionDynasty']);
        }
        elseif (\array_key_exists('AverageDraftPositionDynasty', $data) && $data['AverageDraftPositionDynasty'] === null) {
            $object->setAverageDraftPositionDynasty(null);
        }
        if (\array_key_exists('AverageDraftPosition2QB', $data) && $data['AverageDraftPosition2QB'] !== null) {
            $object->setAverageDraftPosition2QB($data['AverageDraftPosition2QB']);
        }
        elseif (\array_key_exists('AverageDraftPosition2QB', $data) && $data['AverageDraftPosition2QB'] === null) {
            $object->setAverageDraftPosition2QB(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFantasyPlayerKey()) {
            $data['FantasyPlayerKey'] = $object->getFantasyPlayerKey();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getPosition()) {
            $data['Position'] = $object->getPosition();
        }
        if (null !== $object->getAverageDraftPosition()) {
            $data['AverageDraftPosition'] = $object->getAverageDraftPosition();
        }
        if (null !== $object->getAverageDraftPositionPPR()) {
            $data['AverageDraftPositionPPR'] = $object->getAverageDraftPositionPPR();
        }
        if (null !== $object->getByeWeek()) {
            $data['ByeWeek'] = $object->getByeWeek();
        }
        if (null !== $object->getLastSeasonFantasyPoints()) {
            $data['LastSeasonFantasyPoints'] = $object->getLastSeasonFantasyPoints();
        }
        if (null !== $object->getProjectedFantasyPoints()) {
            $data['ProjectedFantasyPoints'] = $object->getProjectedFantasyPoints();
        }
        if (null !== $object->getAuctionValue()) {
            $data['AuctionValue'] = $object->getAuctionValue();
        }
        if (null !== $object->getAuctionValuePPR()) {
            $data['AuctionValuePPR'] = $object->getAuctionValuePPR();
        }
        if (null !== $object->getAverageDraftPositionIDP()) {
            $data['AverageDraftPositionIDP'] = $object->getAverageDraftPositionIDP();
        }
        if (null !== $object->getAverageDraftPositionRookie()) {
            $data['AverageDraftPositionRookie'] = $object->getAverageDraftPositionRookie();
        }
        if (null !== $object->getAverageDraftPositionDynasty()) {
            $data['AverageDraftPositionDynasty'] = $object->getAverageDraftPositionDynasty();
        }
        if (null !== $object->getAverageDraftPosition2QB()) {
            $data['AverageDraftPosition2QB'] = $object->getAverageDraftPosition2QB();
        }
        return $data;
    }
}