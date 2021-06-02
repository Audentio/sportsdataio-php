<?php

namespace Sportsdata\API\Soccer\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\Soccer\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GoalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Soccer\\Model\\Goal';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Soccer\\Model\\Goal';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Soccer\Model\Goal();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GoalId', $data)) {
            $object->setGoalId($data['GoalId']);
        }
        if (\array_key_exists('GameId', $data)) {
            $object->setGameId($data['GameId']);
        }
        if (\array_key_exists('TeamId', $data)) {
            $object->setTeamId($data['TeamId']);
        }
        if (\array_key_exists('PlayerId', $data)) {
            $object->setPlayerId($data['PlayerId']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Type', $data)) {
            $object->setType($data['Type']);
        }
        if (\array_key_exists('AssistedByPlayerId1', $data)) {
            $object->setAssistedByPlayerId1($data['AssistedByPlayerId1']);
        }
        if (\array_key_exists('AssistedByPlayerName1', $data)) {
            $object->setAssistedByPlayerName1($data['AssistedByPlayerName1']);
        }
        if (\array_key_exists('AssistedByPlayerId2', $data)) {
            $object->setAssistedByPlayerId2($data['AssistedByPlayerId2']);
        }
        if (\array_key_exists('AssistedByPlayerName2', $data)) {
            $object->setAssistedByPlayerName2($data['AssistedByPlayerName2']);
        }
        if (\array_key_exists('GameMinute', $data)) {
            $object->setGameMinute($data['GameMinute']);
        }
        if (\array_key_exists('GameMinuteExtra', $data)) {
            $object->setGameMinuteExtra($data['GameMinuteExtra']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGoalId()) {
            $data['GoalId'] = $object->getGoalId();
        }
        if (null !== $object->getGameId()) {
            $data['GameId'] = $object->getGameId();
        }
        if (null !== $object->getTeamId()) {
            $data['TeamId'] = $object->getTeamId();
        }
        if (null !== $object->getPlayerId()) {
            $data['PlayerId'] = $object->getPlayerId();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getType()) {
            $data['Type'] = $object->getType();
        }
        if (null !== $object->getAssistedByPlayerId1()) {
            $data['AssistedByPlayerId1'] = $object->getAssistedByPlayerId1();
        }
        if (null !== $object->getAssistedByPlayerName1()) {
            $data['AssistedByPlayerName1'] = $object->getAssistedByPlayerName1();
        }
        if (null !== $object->getAssistedByPlayerId2()) {
            $data['AssistedByPlayerId2'] = $object->getAssistedByPlayerId2();
        }
        if (null !== $object->getAssistedByPlayerName2()) {
            $data['AssistedByPlayerName2'] = $object->getAssistedByPlayerName2();
        }
        if (null !== $object->getGameMinute()) {
            $data['GameMinute'] = $object->getGameMinute();
        }
        if (null !== $object->getGameMinuteExtra()) {
            $data['GameMinuteExtra'] = $object->getGameMinuteExtra();
        }
        return $data;
    }
}