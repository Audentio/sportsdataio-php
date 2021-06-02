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
class LineupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Soccer\\Model\\Lineup';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Soccer\\Model\\Lineup';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Soccer\Model\Lineup();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('LineupId', $data)) {
            $object->setLineupId($data['LineupId']);
        }
        if (\array_key_exists('GameId', $data)) {
            $object->setGameId($data['GameId']);
        }
        if (\array_key_exists('Type', $data)) {
            $object->setType($data['Type']);
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
        if (\array_key_exists('Position', $data)) {
            $object->setPosition($data['Position']);
        }
        if (\array_key_exists('ReplacedPlayerId', $data)) {
            $object->setReplacedPlayerId($data['ReplacedPlayerId']);
        }
        if (\array_key_exists('ReplacedPlayerName', $data)) {
            $object->setReplacedPlayerName($data['ReplacedPlayerName']);
        }
        if (\array_key_exists('GameMinute', $data)) {
            $object->setGameMinute($data['GameMinute']);
        }
        if (\array_key_exists('GameMinuteExtra', $data)) {
            $object->setGameMinuteExtra($data['GameMinuteExtra']);
        }
        if (\array_key_exists('PitchPositionHorizontal', $data)) {
            $object->setPitchPositionHorizontal($data['PitchPositionHorizontal']);
        }
        if (\array_key_exists('PitchPositionVertical', $data)) {
            $object->setPitchPositionVertical($data['PitchPositionVertical']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLineupId()) {
            $data['LineupId'] = $object->getLineupId();
        }
        if (null !== $object->getGameId()) {
            $data['GameId'] = $object->getGameId();
        }
        if (null !== $object->getType()) {
            $data['Type'] = $object->getType();
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
        if (null !== $object->getPosition()) {
            $data['Position'] = $object->getPosition();
        }
        if (null !== $object->getReplacedPlayerId()) {
            $data['ReplacedPlayerId'] = $object->getReplacedPlayerId();
        }
        if (null !== $object->getReplacedPlayerName()) {
            $data['ReplacedPlayerName'] = $object->getReplacedPlayerName();
        }
        if (null !== $object->getGameMinute()) {
            $data['GameMinute'] = $object->getGameMinute();
        }
        if (null !== $object->getGameMinuteExtra()) {
            $data['GameMinuteExtra'] = $object->getGameMinuteExtra();
        }
        if (null !== $object->getPitchPositionHorizontal()) {
            $data['PitchPositionHorizontal'] = $object->getPitchPositionHorizontal();
        }
        if (null !== $object->getPitchPositionVertical()) {
            $data['PitchPositionVertical'] = $object->getPitchPositionVertical();
        }
        return $data;
    }
}