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
class PenaltyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NHL\\Model\\Penalty';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NHL\\Model\\Penalty';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NHL\Model\Penalty();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PenaltyID', $data)) {
            $object->setPenaltyID($data['PenaltyID']);
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
        if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
            $object->setDescription($data['Description']);
        }
        elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('PenaltyMinutes', $data) && $data['PenaltyMinutes'] !== null) {
            $object->setPenaltyMinutes($data['PenaltyMinutes']);
        }
        elseif (\array_key_exists('PenaltyMinutes', $data) && $data['PenaltyMinutes'] === null) {
            $object->setPenaltyMinutes(null);
        }
        if (\array_key_exists('PenalizedTeamID', $data) && $data['PenalizedTeamID'] !== null) {
            $object->setPenalizedTeamID($data['PenalizedTeamID']);
        }
        elseif (\array_key_exists('PenalizedTeamID', $data) && $data['PenalizedTeamID'] === null) {
            $object->setPenalizedTeamID(null);
        }
        if (\array_key_exists('PenalizedPlayerID', $data) && $data['PenalizedPlayerID'] !== null) {
            $object->setPenalizedPlayerID($data['PenalizedPlayerID']);
        }
        elseif (\array_key_exists('PenalizedPlayerID', $data) && $data['PenalizedPlayerID'] === null) {
            $object->setPenalizedPlayerID(null);
        }
        if (\array_key_exists('DrawnByTeamID', $data) && $data['DrawnByTeamID'] !== null) {
            $object->setDrawnByTeamID($data['DrawnByTeamID']);
        }
        elseif (\array_key_exists('DrawnByTeamID', $data) && $data['DrawnByTeamID'] === null) {
            $object->setDrawnByTeamID(null);
        }
        if (\array_key_exists('DrawnByPlayerID', $data) && $data['DrawnByPlayerID'] !== null) {
            $object->setDrawnByPlayerID($data['DrawnByPlayerID']);
        }
        elseif (\array_key_exists('DrawnByPlayerID', $data) && $data['DrawnByPlayerID'] === null) {
            $object->setDrawnByPlayerID(null);
        }
        if (\array_key_exists('IsBenchPenalty', $data) && $data['IsBenchPenalty'] !== null) {
            $object->setIsBenchPenalty($data['IsBenchPenalty']);
        }
        elseif (\array_key_exists('IsBenchPenalty', $data) && $data['IsBenchPenalty'] === null) {
            $object->setIsBenchPenalty(null);
        }
        if (\array_key_exists('BenchPenaltyServedByPlayerID', $data) && $data['BenchPenaltyServedByPlayerID'] !== null) {
            $object->setBenchPenaltyServedByPlayerID($data['BenchPenaltyServedByPlayerID']);
        }
        elseif (\array_key_exists('BenchPenaltyServedByPlayerID', $data) && $data['BenchPenaltyServedByPlayerID'] === null) {
            $object->setBenchPenaltyServedByPlayerID(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPenaltyID()) {
            $data['PenaltyID'] = $object->getPenaltyID();
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
        if (null !== $object->getDescription()) {
            $data['Description'] = $object->getDescription();
        }
        if (null !== $object->getPenaltyMinutes()) {
            $data['PenaltyMinutes'] = $object->getPenaltyMinutes();
        }
        if (null !== $object->getPenalizedTeamID()) {
            $data['PenalizedTeamID'] = $object->getPenalizedTeamID();
        }
        if (null !== $object->getPenalizedPlayerID()) {
            $data['PenalizedPlayerID'] = $object->getPenalizedPlayerID();
        }
        if (null !== $object->getDrawnByTeamID()) {
            $data['DrawnByTeamID'] = $object->getDrawnByTeamID();
        }
        if (null !== $object->getDrawnByPlayerID()) {
            $data['DrawnByPlayerID'] = $object->getDrawnByPlayerID();
        }
        if (null !== $object->getIsBenchPenalty()) {
            $data['IsBenchPenalty'] = $object->getIsBenchPenalty();
        }
        if (null !== $object->getBenchPenaltyServedByPlayerID()) {
            $data['BenchPenaltyServedByPlayerID'] = $object->getBenchPenaltyServedByPlayerID();
        }
        return $data;
    }
}