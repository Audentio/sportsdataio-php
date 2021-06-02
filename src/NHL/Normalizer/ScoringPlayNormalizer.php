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
        if (\array_key_exists('Sequence', $data)) {
            $object->setSequence($data['Sequence']);
        }
        if (\array_key_exists('TimeRemainingMinutes', $data)) {
            $object->setTimeRemainingMinutes($data['TimeRemainingMinutes']);
        }
        if (\array_key_exists('TimeRemainingSeconds', $data)) {
            $object->setTimeRemainingSeconds($data['TimeRemainingSeconds']);
        }
        if (\array_key_exists('ScoredByTeamID', $data)) {
            $object->setScoredByTeamID($data['ScoredByTeamID']);
        }
        if (\array_key_exists('AllowedByTeamID', $data)) {
            $object->setAllowedByTeamID($data['AllowedByTeamID']);
        }
        if (\array_key_exists('ScoredByPlayerID', $data)) {
            $object->setScoredByPlayerID($data['ScoredByPlayerID']);
        }
        if (\array_key_exists('AssistedByPlayerID1', $data)) {
            $object->setAssistedByPlayerID1($data['AssistedByPlayerID1']);
        }
        if (\array_key_exists('AssistedByPlayerID2', $data)) {
            $object->setAssistedByPlayerID2($data['AssistedByPlayerID2']);
        }
        if (\array_key_exists('PowerPlay', $data)) {
            $object->setPowerPlay($data['PowerPlay']);
        }
        if (\array_key_exists('ShortHanded', $data)) {
            $object->setShortHanded($data['ShortHanded']);
        }
        if (\array_key_exists('EmptyNet', $data)) {
            $object->setEmptyNet($data['EmptyNet']);
        }
        if (\array_key_exists('AwayTeamScore', $data)) {
            $object->setAwayTeamScore($data['AwayTeamScore']);
        }
        if (\array_key_exists('HomeTeamScore', $data)) {
            $object->setHomeTeamScore($data['HomeTeamScore']);
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