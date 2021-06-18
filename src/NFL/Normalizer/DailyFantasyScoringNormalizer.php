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
class DailyFantasyScoringNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\DailyFantasyScoring';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\DailyFantasyScoring';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\DailyFantasyScoring();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] !== null) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        elseif (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] === null) {
            $object->setFantasyPoints(null);
        }
        if (\array_key_exists('FantasyPointsPPR', $data) && $data['FantasyPointsPPR'] !== null) {
            $object->setFantasyPointsPPR($data['FantasyPointsPPR']);
        }
        elseif (\array_key_exists('FantasyPointsPPR', $data) && $data['FantasyPointsPPR'] === null) {
            $object->setFantasyPointsPPR(null);
        }
        if (\array_key_exists('FantasyPointsFanDuel', $data) && $data['FantasyPointsFanDuel'] !== null) {
            $object->setFantasyPointsFanDuel($data['FantasyPointsFanDuel']);
        }
        elseif (\array_key_exists('FantasyPointsFanDuel', $data) && $data['FantasyPointsFanDuel'] === null) {
            $object->setFantasyPointsFanDuel(null);
        }
        if (\array_key_exists('FantasyPointsDraftKings', $data) && $data['FantasyPointsDraftKings'] !== null) {
            $object->setFantasyPointsDraftKings($data['FantasyPointsDraftKings']);
        }
        elseif (\array_key_exists('FantasyPointsDraftKings', $data) && $data['FantasyPointsDraftKings'] === null) {
            $object->setFantasyPointsDraftKings(null);
        }
        if (\array_key_exists('FantasyPointsYahoo', $data) && $data['FantasyPointsYahoo'] !== null) {
            $object->setFantasyPointsYahoo($data['FantasyPointsYahoo']);
        }
        elseif (\array_key_exists('FantasyPointsYahoo', $data) && $data['FantasyPointsYahoo'] === null) {
            $object->setFantasyPointsYahoo(null);
        }
        if (\array_key_exists('HasStarted', $data)) {
            $object->setHasStarted($data['HasStarted']);
        }
        if (\array_key_exists('IsInProgress', $data)) {
            $object->setIsInProgress($data['IsInProgress']);
        }
        if (\array_key_exists('IsOver', $data)) {
            $object->setIsOver($data['IsOver']);
        }
        if (\array_key_exists('Date', $data) && $data['Date'] !== null) {
            $object->setDate($data['Date']);
        }
        elseif (\array_key_exists('Date', $data) && $data['Date'] === null) {
            $object->setDate(null);
        }
        if (\array_key_exists('FantasyPointsFantasyDraft', $data) && $data['FantasyPointsFantasyDraft'] !== null) {
            $object->setFantasyPointsFantasyDraft($data['FantasyPointsFantasyDraft']);
        }
        elseif (\array_key_exists('FantasyPointsFantasyDraft', $data) && $data['FantasyPointsFantasyDraft'] === null) {
            $object->setFantasyPointsFantasyDraft(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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
        if (null !== $object->getFantasyPoints()) {
            $data['FantasyPoints'] = $object->getFantasyPoints();
        }
        if (null !== $object->getFantasyPointsPPR()) {
            $data['FantasyPointsPPR'] = $object->getFantasyPointsPPR();
        }
        if (null !== $object->getFantasyPointsFanDuel()) {
            $data['FantasyPointsFanDuel'] = $object->getFantasyPointsFanDuel();
        }
        if (null !== $object->getFantasyPointsDraftKings()) {
            $data['FantasyPointsDraftKings'] = $object->getFantasyPointsDraftKings();
        }
        if (null !== $object->getFantasyPointsYahoo()) {
            $data['FantasyPointsYahoo'] = $object->getFantasyPointsYahoo();
        }
        if (null !== $object->getHasStarted()) {
            $data['HasStarted'] = $object->getHasStarted();
        }
        if (null !== $object->getIsInProgress()) {
            $data['IsInProgress'] = $object->getIsInProgress();
        }
        if (null !== $object->getIsOver()) {
            $data['IsOver'] = $object->getIsOver();
        }
        if (null !== $object->getDate()) {
            $data['Date'] = $object->getDate();
        }
        if (null !== $object->getFantasyPointsFantasyDraft()) {
            $data['FantasyPointsFantasyDraft'] = $object->getFantasyPointsFantasyDraft();
        }
        return $data;
    }
}