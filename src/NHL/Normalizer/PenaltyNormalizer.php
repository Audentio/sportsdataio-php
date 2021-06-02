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
        if (\array_key_exists('Sequence', $data)) {
            $object->setSequence($data['Sequence']);
        }
        if (\array_key_exists('TimeRemainingMinutes', $data)) {
            $object->setTimeRemainingMinutes($data['TimeRemainingMinutes']);
        }
        if (\array_key_exists('TimeRemainingSeconds', $data)) {
            $object->setTimeRemainingSeconds($data['TimeRemainingSeconds']);
        }
        if (\array_key_exists('Description', $data)) {
            $object->setDescription($data['Description']);
        }
        if (\array_key_exists('PenaltyMinutes', $data)) {
            $object->setPenaltyMinutes($data['PenaltyMinutes']);
        }
        if (\array_key_exists('PenalizedTeamID', $data)) {
            $object->setPenalizedTeamID($data['PenalizedTeamID']);
        }
        if (\array_key_exists('PenalizedPlayerID', $data)) {
            $object->setPenalizedPlayerID($data['PenalizedPlayerID']);
        }
        if (\array_key_exists('DrawnByTeamID', $data)) {
            $object->setDrawnByTeamID($data['DrawnByTeamID']);
        }
        if (\array_key_exists('DrawnByPlayerID', $data)) {
            $object->setDrawnByPlayerID($data['DrawnByPlayerID']);
        }
        if (\array_key_exists('IsBenchPenalty', $data)) {
            $object->setIsBenchPenalty($data['IsBenchPenalty']);
        }
        if (\array_key_exists('BenchPenaltyServedByPlayerID', $data)) {
            $object->setBenchPenaltyServedByPlayerID($data['BenchPenaltyServedByPlayerID']);
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