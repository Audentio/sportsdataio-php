<?php

namespace Sportsdata\API\CFB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CFB\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\CFB\\Model\\ScoringPlay';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CFB\\Model\\ScoringPlay';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CFB\Model\ScoringPlay();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ScoringPlayID', $data)) {
            $object->setScoringPlayID($data['ScoringPlayID']);
        }
        if (\array_key_exists('GameID', $data)) {
            $object->setGameID($data['GameID']);
        }
        if (\array_key_exists('Period', $data) && $data['Period'] !== null) {
            $object->setPeriod($data['Period']);
        }
        elseif (\array_key_exists('Period', $data) && $data['Period'] === null) {
            $object->setPeriod(null);
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
        if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
            $object->setDescription($data['Description']);
        }
        elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('DriveSummary', $data) && $data['DriveSummary'] !== null) {
            $object->setDriveSummary($data['DriveSummary']);
        }
        elseif (\array_key_exists('DriveSummary', $data) && $data['DriveSummary'] === null) {
            $object->setDriveSummary(null);
        }
        if (\array_key_exists('HomeTeamScore', $data) && $data['HomeTeamScore'] !== null) {
            $object->setHomeTeamScore($data['HomeTeamScore']);
        }
        elseif (\array_key_exists('HomeTeamScore', $data) && $data['HomeTeamScore'] === null) {
            $object->setHomeTeamScore(null);
        }
        if (\array_key_exists('AwayTeamScore', $data) && $data['AwayTeamScore'] !== null) {
            $object->setAwayTeamScore($data['AwayTeamScore']);
        }
        elseif (\array_key_exists('AwayTeamScore', $data) && $data['AwayTeamScore'] === null) {
            $object->setAwayTeamScore(null);
        }
        if (\array_key_exists('ScoringTeamID', $data) && $data['ScoringTeamID'] !== null) {
            $object->setScoringTeamID($data['ScoringTeamID']);
        }
        elseif (\array_key_exists('ScoringTeamID', $data) && $data['ScoringTeamID'] === null) {
            $object->setScoringTeamID(null);
        }
        if (\array_key_exists('ScoringType', $data) && $data['ScoringType'] !== null) {
            $object->setScoringType($data['ScoringType']);
        }
        elseif (\array_key_exists('ScoringType', $data) && $data['ScoringType'] === null) {
            $object->setScoringType(null);
        }
        if (\array_key_exists('Sequence', $data)) {
            $object->setSequence($data['Sequence']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getScoringPlayID()) {
            $data['ScoringPlayID'] = $object->getScoringPlayID();
        }
        if (null !== $object->getGameID()) {
            $data['GameID'] = $object->getGameID();
        }
        if (null !== $object->getPeriod()) {
            $data['Period'] = $object->getPeriod();
        }
        if (null !== $object->getTimeRemainingMinutes()) {
            $data['TimeRemainingMinutes'] = $object->getTimeRemainingMinutes();
        }
        if (null !== $object->getTimeRemainingSeconds()) {
            $data['TimeRemainingSeconds'] = $object->getTimeRemainingSeconds();
        }
        if (null !== $object->getDescription()) {
            $data['Description'] = $object->getDescription();
        }
        if (null !== $object->getDriveSummary()) {
            $data['DriveSummary'] = $object->getDriveSummary();
        }
        if (null !== $object->getHomeTeamScore()) {
            $data['HomeTeamScore'] = $object->getHomeTeamScore();
        }
        if (null !== $object->getAwayTeamScore()) {
            $data['AwayTeamScore'] = $object->getAwayTeamScore();
        }
        if (null !== $object->getScoringTeamID()) {
            $data['ScoringTeamID'] = $object->getScoringTeamID();
        }
        if (null !== $object->getScoringType()) {
            $data['ScoringType'] = $object->getScoringType();
        }
        if (null !== $object->getSequence()) {
            $data['Sequence'] = $object->getSequence();
        }
        return $data;
    }
}