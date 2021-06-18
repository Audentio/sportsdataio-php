<?php

namespace Sportsdata\API\LOL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\LOL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DfsSlateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\LOL\\Model\\DfsSlate';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\LOL\\Model\\DfsSlate';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\LOL\Model\DfsSlate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('SlateID', $data)) {
            $object->setSlateID($data['SlateID']);
        }
        if (\array_key_exists('Operator', $data) && $data['Operator'] !== null) {
            $object->setOperator($data['Operator']);
        }
        elseif (\array_key_exists('Operator', $data) && $data['Operator'] === null) {
            $object->setOperator(null);
        }
        if (\array_key_exists('OperatorSlateID', $data) && $data['OperatorSlateID'] !== null) {
            $object->setOperatorSlateID($data['OperatorSlateID']);
        }
        elseif (\array_key_exists('OperatorSlateID', $data) && $data['OperatorSlateID'] === null) {
            $object->setOperatorSlateID(null);
        }
        if (\array_key_exists('OperatorName', $data) && $data['OperatorName'] !== null) {
            $object->setOperatorName($data['OperatorName']);
        }
        elseif (\array_key_exists('OperatorName', $data) && $data['OperatorName'] === null) {
            $object->setOperatorName(null);
        }
        if (\array_key_exists('OperatorDay', $data) && $data['OperatorDay'] !== null) {
            $object->setOperatorDay($data['OperatorDay']);
        }
        elseif (\array_key_exists('OperatorDay', $data) && $data['OperatorDay'] === null) {
            $object->setOperatorDay(null);
        }
        if (\array_key_exists('OperatorStartTime', $data) && $data['OperatorStartTime'] !== null) {
            $object->setOperatorStartTime($data['OperatorStartTime']);
        }
        elseif (\array_key_exists('OperatorStartTime', $data) && $data['OperatorStartTime'] === null) {
            $object->setOperatorStartTime(null);
        }
        if (\array_key_exists('NumberOfGames', $data) && $data['NumberOfGames'] !== null) {
            $object->setNumberOfGames($data['NumberOfGames']);
        }
        elseif (\array_key_exists('NumberOfGames', $data) && $data['NumberOfGames'] === null) {
            $object->setNumberOfGames(null);
        }
        if (\array_key_exists('IsMultiDaySlate', $data) && $data['IsMultiDaySlate'] !== null) {
            $object->setIsMultiDaySlate($data['IsMultiDaySlate']);
        }
        elseif (\array_key_exists('IsMultiDaySlate', $data) && $data['IsMultiDaySlate'] === null) {
            $object->setIsMultiDaySlate(null);
        }
        if (\array_key_exists('RemovedByOperator', $data) && $data['RemovedByOperator'] !== null) {
            $object->setRemovedByOperator($data['RemovedByOperator']);
        }
        elseif (\array_key_exists('RemovedByOperator', $data) && $data['RemovedByOperator'] === null) {
            $object->setRemovedByOperator(null);
        }
        if (\array_key_exists('OperatorGameType', $data) && $data['OperatorGameType'] !== null) {
            $object->setOperatorGameType($data['OperatorGameType']);
        }
        elseif (\array_key_exists('OperatorGameType', $data) && $data['OperatorGameType'] === null) {
            $object->setOperatorGameType(null);
        }
        if (\array_key_exists('DfsSlateGames', $data)) {
            $values = array();
            foreach ($data['DfsSlateGames'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\LOL\\Model\\DfsSlateGame', 'json', $context);
            }
            $object->setDfsSlateGames($values);
        }
        if (\array_key_exists('DfsSlatePlayers', $data)) {
            $values_1 = array();
            foreach ($data['DfsSlatePlayers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\LOL\\Model\\DfsSlatePlayer', 'json', $context);
            }
            $object->setDfsSlatePlayers($values_1);
        }
        if (\array_key_exists('SlateRosterSlots', $data)) {
            $values_2 = array();
            foreach ($data['SlateRosterSlots'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSlateRosterSlots($values_2);
        }
        if (\array_key_exists('SalaryCap', $data) && $data['SalaryCap'] !== null) {
            $object->setSalaryCap($data['SalaryCap']);
        }
        elseif (\array_key_exists('SalaryCap', $data) && $data['SalaryCap'] === null) {
            $object->setSalaryCap(null);
        }
        if (\array_key_exists('VideoGameId', $data) && $data['VideoGameId'] !== null) {
            $object->setVideoGameId($data['VideoGameId']);
        }
        elseif (\array_key_exists('VideoGameId', $data) && $data['VideoGameId'] === null) {
            $object->setVideoGameId(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSlateID()) {
            $data['SlateID'] = $object->getSlateID();
        }
        if (null !== $object->getOperator()) {
            $data['Operator'] = $object->getOperator();
        }
        if (null !== $object->getOperatorSlateID()) {
            $data['OperatorSlateID'] = $object->getOperatorSlateID();
        }
        if (null !== $object->getOperatorName()) {
            $data['OperatorName'] = $object->getOperatorName();
        }
        if (null !== $object->getOperatorDay()) {
            $data['OperatorDay'] = $object->getOperatorDay();
        }
        if (null !== $object->getOperatorStartTime()) {
            $data['OperatorStartTime'] = $object->getOperatorStartTime();
        }
        if (null !== $object->getNumberOfGames()) {
            $data['NumberOfGames'] = $object->getNumberOfGames();
        }
        if (null !== $object->getIsMultiDaySlate()) {
            $data['IsMultiDaySlate'] = $object->getIsMultiDaySlate();
        }
        if (null !== $object->getRemovedByOperator()) {
            $data['RemovedByOperator'] = $object->getRemovedByOperator();
        }
        if (null !== $object->getOperatorGameType()) {
            $data['OperatorGameType'] = $object->getOperatorGameType();
        }
        if (null !== $object->getDfsSlateGames()) {
            $values = array();
            foreach ($object->getDfsSlateGames() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['DfsSlateGames'] = $values;
        }
        if (null !== $object->getDfsSlatePlayers()) {
            $values_1 = array();
            foreach ($object->getDfsSlatePlayers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['DfsSlatePlayers'] = $values_1;
        }
        if (null !== $object->getSlateRosterSlots()) {
            $values_2 = array();
            foreach ($object->getSlateRosterSlots() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['SlateRosterSlots'] = $values_2;
        }
        if (null !== $object->getSalaryCap()) {
            $data['SalaryCap'] = $object->getSalaryCap();
        }
        if (null !== $object->getVideoGameId()) {
            $data['VideoGameId'] = $object->getVideoGameId();
        }
        return $data;
    }
}