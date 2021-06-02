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
        if (\array_key_exists('FantasyPlayerKey', $data)) {
            $object->setFantasyPlayerKey($data['FantasyPlayerKey']);
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Team', $data)) {
            $object->setTeam($data['Team']);
        }
        if (\array_key_exists('Position', $data)) {
            $object->setPosition($data['Position']);
        }
        if (\array_key_exists('AverageDraftPosition', $data)) {
            $object->setAverageDraftPosition($data['AverageDraftPosition']);
        }
        if (\array_key_exists('AverageDraftPositionPPR', $data)) {
            $object->setAverageDraftPositionPPR($data['AverageDraftPositionPPR']);
        }
        if (\array_key_exists('ByeWeek', $data)) {
            $object->setByeWeek($data['ByeWeek']);
        }
        if (\array_key_exists('LastSeasonFantasyPoints', $data)) {
            $object->setLastSeasonFantasyPoints($data['LastSeasonFantasyPoints']);
        }
        if (\array_key_exists('ProjectedFantasyPoints', $data)) {
            $object->setProjectedFantasyPoints($data['ProjectedFantasyPoints']);
        }
        if (\array_key_exists('AuctionValue', $data)) {
            $object->setAuctionValue($data['AuctionValue']);
        }
        if (\array_key_exists('AuctionValuePPR', $data)) {
            $object->setAuctionValuePPR($data['AuctionValuePPR']);
        }
        if (\array_key_exists('AverageDraftPositionIDP', $data)) {
            $object->setAverageDraftPositionIDP($data['AverageDraftPositionIDP']);
        }
        if (\array_key_exists('AverageDraftPositionRookie', $data)) {
            $object->setAverageDraftPositionRookie($data['AverageDraftPositionRookie']);
        }
        if (\array_key_exists('AverageDraftPositionDynasty', $data)) {
            $object->setAverageDraftPositionDynasty($data['AverageDraftPositionDynasty']);
        }
        if (\array_key_exists('AverageDraftPosition2QB', $data)) {
            $object->setAverageDraftPosition2QB($data['AverageDraftPosition2QB']);
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