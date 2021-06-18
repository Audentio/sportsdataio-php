<?php

namespace Sportsdata\API\NHL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\NHL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ScoringPlayNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NHL\\Model\\ScoringPlay';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NHL\\Model\\ScoringPlay';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NHL\Model\ScoringPlay();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ScoringPlayID', $data)) {
            $object->setScoringPlayID($data['ScoringPlayID']);
        }
        if (\array_key_exists('PeriodID', $data)) {
            $object->setPeriodID($data['PeriodID']);
        }
        if (\array_key_exists('Sequence', $data) && $data['Sequence'] !== null) {
            $object->setSequence($data['Sequence']);
        }
        elseif (\array_key_exists('Sequence', $data) && $data['Sequence'] === null) {
            $object->setSequence(null);
        }
        if (\array_key_exists('TimeRemainingMinutes', $data) && $data['TimeRemainingMinutes'] !== null) {
            $object->setTimeRemainingMinutes($data['TimeRemainingMinutes']);
        }
        elseif (\array_key_exists('TimeRemainingMinutes', $data) && $data['TimeRemainingMinutes'] === null) {
            $object->setTimeRemainingMinutes(null);
        }
        if (\array_key_exists('TimeRemainingSeconds', $data) && $data['TimeRemainingSeconds'] !== null) {
            $object->setTimeRemainingSeconds($data['TimeRemainingSeconds']);
        }
        elseif (\array_key_exists('TimeRemainingSeconds', $data) && $data['TimeRemainingSeconds'] === null) {
            $object->setTimeRemainingSeconds(null);
        }
        if (\array_key_exists('ScoredByTeamID', $data) && $data['ScoredByTeamID'] !== null) {
            $object->setScoredByTeamID($data['ScoredByTeamID']);
        }
        elseif (\array_key_exists('ScoredByTeamID', $data) && $data['ScoredByTeamID'] === null) {
            $object->setScoredByTeamID(null);
        }
        if (\array_key_exists('AllowedByTeamID', $data) && $data['AllowedByTeamID'] !== null) {
            $object->setAllowedByTeamID($data['AllowedByTeamID']);
        }
        elseif (\array_key_exists('AllowedByTeamID', $data) && $data['AllowedByTeamID'] === null) {
            $object->setAllowedByTeamID(null);
        }
        if (\array_key_exists('ScoredByPlayerID', $data) && $data['ScoredByPlayerID'] !== null) {
            $object->setScoredByPlayerID($data['ScoredByPlayerID']);
        }
        elseif (\array_key_exists('ScoredByPlayerID', $data) && $data['ScoredByPlayerID'] === null) {
            $object->setScoredByPlayerID(null);
        }
        if (\array_key_exists('AssistedByPlayerID1', $data) && $data['AssistedByPlayerID1'] !== null) {
            $object->setAssistedByPlayerID1($data['AssistedByPlayerID1']);
        }
        elseif (\array_key_exists('AssistedByPlayerID1', $data) && $data['AssistedByPlayerID1'] === null) {
            $object->setAssistedByPlayerID1(null);
        }
        if (\array_key_exists('AssistedByPlayerID2', $data) && $data['AssistedByPlayerID2'] !== null) {
            $object->setAssistedByPlayerID2($data['AssistedByPlayerID2']);
        }
        elseif (\array_key_exists('AssistedByPlayerID2', $data) && $data['AssistedByPlayerID2'] === null) {
            $object->setAssistedByPlayerID2(null);
        }
        if (\array_key_exists('PowerPlay', $data) && $data['PowerPlay'] !== null) {
            $object->setPowerPlay($data['PowerPlay']);
        }
        elseif (\array_key_exists('PowerPlay', $data) && $data['PowerPlay'] === null) {
            $object->setPowerPlay(null);
        }
        if (\array_key_exists('ShortHanded', $data) && $data['ShortHanded'] !== null) {
            $object->setShortHanded($data['ShortHanded']);
        }
        elseif (\array_key_exists('ShortHanded', $data) && $data['ShortHanded'] === null) {
            $object->setShortHanded(null);
        }
        if (\array_key_exists('EmptyNet', $data) && $data['EmptyNet'] !== null) {
            $object->setEmptyNet($data['EmptyNet']);
        }
        elseif (\array_key_exists('EmptyNet', $data) && $data['EmptyNet'] === null) {
            $object->setEmptyNet(null);
        }
        if (\array_key_exists('AwayTeamScore', $data) && $data['AwayTeamScore'] !== null) {
            $object->setAwayTeamScore($data['AwayTeamScore']);
        }
        elseif (\array_key_exists('AwayTeamScore', $data) && $data['AwayTeamScore'] === null) {
            $object->setAwayTeamScore(null);
        }
        if (\array_key_exists('HomeTeamScore', $data) && $data['HomeTeamScore'] !== null) {
            $object->setHomeTeamScore($data['HomeTeamScore']);
        }
        elseif (\array_key_exists('HomeTeamScore', $data) && $data['HomeTeamScore'] === null) {
            $object->setHomeTeamScore(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getScoringPlayID()) {
            $data['ScoringPlayID'] = $object->getScoringPlayID();
        }
        if (null !== $object->getPeriodID()) {
            $data['PeriodID'] = $object->getPeriodID();
        }
        if (null !== $object->getSequence()) {
            $data['Sequence'] = $object->getSequence();
        }
        if (null !== $object->getTimeRemainingMinutes()) {
            $data['TimeRemainingMinutes'] = $object->getTimeRemainingMinutes();
        }
        if (null !== $object->getTimeRemainingSeconds()) {
            $data['TimeRemainingSeconds'] = $object->getTimeRemainingSeconds();
        }
        if (null !== $object->getScoredByTeamID()) {
            $data['ScoredByTeamID'] = $object->getScoredByTeamID();
        }
        if (null !== $object->getAllowedByTeamID()) {
            $data['AllowedByTeamID'] = $object->getAllowedByTeamID();
        }
        if (null !== $object->getScoredByPlayerID()) {
            $data['ScoredByPlayerID'] = $object->getScoredByPlayerID();
        }
        if (null !== $object->getAssistedByPlayerID1()) {
            $data['AssistedByPlayerID1'] = $object->getAssistedByPlayerID1();
        }
        if (null !== $object->getAssistedByPlayerID2()) {
            $data['AssistedByPlayerID2'] = $object->getAssistedByPlayerID2();
        }
        if (null !== $object->getPowerPlay()) {
            $data['PowerPlay'] = $object->getPowerPlay();
        }
        if (null !== $object->getShortHanded()) {
            $data['ShortHanded'] = $object->getShortHanded();
        }
        if (null !== $object->getEmptyNet()) {
            $data['EmptyNet'] = $object->getEmptyNet();
        }
        if (null !== $object->getAwayTeamScore()) {
            $data['AwayTeamScore'] = $object->getAwayTeamScore();
        }
        if (null !== $object->getHomeTeamScore()) {
            $data['HomeTeamScore'] = $object->getHomeTeamScore();
        }
        return $data;
    }
}