<?php

namespace Sportsdata\API\CSGO\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CSGO\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\CSGO\\Model\\DfsSlatePlayer';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CSGO\\Model\\DfsSlatePlayer';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CSGO\Model\DfsSlatePlayer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('SlatePlayerID', $data)) {
            $object->setSlatePlayerID($data['SlatePlayerID']);
        }
        if (\array_key_exists('SlateID', $data)) {
            $object->setSlateID($data['SlateID']);
        }
        if (\array_key_exists('SlateGameID', $data) && $data['SlateGameID'] !== null) {
            $object->setSlateGameID($data['SlateGameID']);
        }
        elseif (\array_key_exists('SlateGameID', $data) && $data['SlateGameID'] === null) {
            $object->setSlateGameID(null);
        }
        if (\array_key_exists('PlayerID', $data) && $data['PlayerID'] !== null) {
            $object->setPlayerID($data['PlayerID']);
        }
        elseif (\array_key_exists('PlayerID', $data) && $data['PlayerID'] === null) {
            $object->setPlayerID(null);
        }
        if (\array_key_exists('PlayerGameProjectionStatID', $data) && $data['PlayerGameProjectionStatID'] !== null) {
            $object->setPlayerGameProjectionStatID($data['PlayerGameProjectionStatID']);
        }
        elseif (\array_key_exists('PlayerGameProjectionStatID', $data) && $data['PlayerGameProjectionStatID'] === null) {
            $object->setPlayerGameProjectionStatID(null);
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
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('TeamID', $data) && $data['TeamID'] !== null) {
            $object->setTeamID($data['TeamID']);
        }
        elseif (\array_key_exists('TeamID', $data) && $data['TeamID'] === null) {
            $object->setTeamID(null);
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
        if (null !== $object->getSlateGameID()) {
            $data['SlateGameID'] = $object->getSlateGameID();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getPlayerGameProjectionStatID()) {
            $data['PlayerGameProjectionStatID'] = $object->getPlayerGameProjectionStatID();
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
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        return $data;
    }
}