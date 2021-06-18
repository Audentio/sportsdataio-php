<?php

namespace Sportsdata\API\Golf\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\Golf\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DfsSlatePlayerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Golf\\Model\\DfsSlatePlayer';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Golf\\Model\\DfsSlatePlayer';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Golf\Model\DfsSlatePlayer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('SlatePlayerID', $data)) {
            $object->setSlatePlayerID($data['SlatePlayerID']);
        }
        if (\array_key_exists('SlateID', $data)) {
            $object->setSlateID($data['SlateID']);
        }
        if (\array_key_exists('SlateTournamentID', $data) && $data['SlateTournamentID'] !== null) {
            $object->setSlateTournamentID($data['SlateTournamentID']);
        }
        elseif (\array_key_exists('SlateTournamentID', $data) && $data['SlateTournamentID'] === null) {
            $object->setSlateTournamentID(null);
        }
        if (\array_key_exists('PlayerID', $data) && $data['PlayerID'] !== null) {
            $object->setPlayerID($data['PlayerID']);
        }
        elseif (\array_key_exists('PlayerID', $data) && $data['PlayerID'] === null) {
            $object->setPlayerID(null);
        }
        if (\array_key_exists('PlayerTournamentProjectionID', $data) && $data['PlayerTournamentProjectionID'] !== null) {
            $object->setPlayerTournamentProjectionID($data['PlayerTournamentProjectionID']);
        }
        elseif (\array_key_exists('PlayerTournamentProjectionID', $data) && $data['PlayerTournamentProjectionID'] === null) {
            $object->setPlayerTournamentProjectionID(null);
        }
        if (\array_key_exists('OperatorPlayerID', $data) && $data['OperatorPlayerID'] !== null) {
            $object->setOperatorPlayerID($data['OperatorPlayerID']);
        }
        elseif (\array_key_exists('OperatorPlayerID', $data) && $data['OperatorPlayerID'] === null) {
            $object->setOperatorPlayerID(null);
        }
        if (\array_key_exists('OperatorSlatePlayerID', $data) && $data['OperatorSlatePlayerID'] !== null) {
            $object->setOperatorSlatePlayerID($data['OperatorSlatePlayerID']);
        }
        elseif (\array_key_exists('OperatorSlatePlayerID', $data) && $data['OperatorSlatePlayerID'] === null) {
            $object->setOperatorSlatePlayerID(null);
        }
        if (\array_key_exists('OperatorPlayerName', $data) && $data['OperatorPlayerName'] !== null) {
            $object->setOperatorPlayerName($data['OperatorPlayerName']);
        }
        elseif (\array_key_exists('OperatorPlayerName', $data) && $data['OperatorPlayerName'] === null) {
            $object->setOperatorPlayerName(null);
        }
        if (\array_key_exists('OperatorPosition', $data) && $data['OperatorPosition'] !== null) {
            $object->setOperatorPosition($data['OperatorPosition']);
        }
        elseif (\array_key_exists('OperatorPosition', $data) && $data['OperatorPosition'] === null) {
            $object->setOperatorPosition(null);
        }
        if (\array_key_exists('OperatorSalary', $data) && $data['OperatorSalary'] !== null) {
            $object->setOperatorSalary($data['OperatorSalary']);
        }
        elseif (\array_key_exists('OperatorSalary', $data) && $data['OperatorSalary'] === null) {
            $object->setOperatorSalary(null);
        }
        if (\array_key_exists('OperatorRosterSlots', $data)) {
            $values = array();
            foreach ($data['OperatorRosterSlots'] as $value) {
                $values[] = $value;
            }
            $object->setOperatorRosterSlots($values);
        }
        if (\array_key_exists('RemovedByOperator', $data) && $data['RemovedByOperator'] !== null) {
            $object->setRemovedByOperator($data['RemovedByOperator']);
        }
        elseif (\array_key_exists('RemovedByOperator', $data) && $data['RemovedByOperator'] === null) {
            $object->setRemovedByOperator(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSlatePlayerID()) {
            $data['SlatePlayerID'] = $object->getSlatePlayerID();
        }
        if (null !== $object->getSlateID()) {
            $data['SlateID'] = $object->getSlateID();
        }
        if (null !== $object->getSlateTournamentID()) {
            $data['SlateTournamentID'] = $object->getSlateTournamentID();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getPlayerTournamentProjectionID()) {
            $data['PlayerTournamentProjectionID'] = $object->getPlayerTournamentProjectionID();
        }
        if (null !== $object->getOperatorPlayerID()) {
            $data['OperatorPlayerID'] = $object->getOperatorPlayerID();
        }
        if (null !== $object->getOperatorSlatePlayerID()) {
            $data['OperatorSlatePlayerID'] = $object->getOperatorSlatePlayerID();
        }
        if (null !== $object->getOperatorPlayerName()) {
            $data['OperatorPlayerName'] = $object->getOperatorPlayerName();
        }
        if (null !== $object->getOperatorPosition()) {
            $data['OperatorPosition'] = $object->getOperatorPosition();
        }
        if (null !== $object->getOperatorSalary()) {
            $data['OperatorSalary'] = $object->getOperatorSalary();
        }
        if (null !== $object->getOperatorRosterSlots()) {
            $values = array();
            foreach ($object->getOperatorRosterSlots() as $value) {
                $values[] = $value;
            }
            $data['OperatorRosterSlots'] = $values;
        }
        if (null !== $object->getRemovedByOperator()) {
            $data['RemovedByOperator'] = $object->getRemovedByOperator();
        }
        return $data;
    }
}