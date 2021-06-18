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
        if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
            $object->setType($data['Type']);
        }
        elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('TeamId', $data)) {
            $object->setTeamId($data['TeamId']);
        }
        if (\array_key_exists('PlayerId', $data)) {
            $object->setPlayerId($data['PlayerId']);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Position', $data) && $data['Position'] !== null) {
            $object->setPosition($data['Position']);
        }
        elseif (\array_key_exists('Position', $data) && $data['Position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('ReplacedPlayerId', $data) && $data['ReplacedPlayerId'] !== null) {
            $object->setReplacedPlayerId($data['ReplacedPlayerId']);
        }
        elseif (\array_key_exists('ReplacedPlayerId', $data) && $data['ReplacedPlayerId'] === null) {
            $object->setReplacedPlayerId(null);
        }
        if (\array_key_exists('ReplacedPlayerName', $data) && $data['ReplacedPlayerName'] !== null) {
            $object->setReplacedPlayerName($data['ReplacedPlayerName']);
        }
        elseif (\array_key_exists('ReplacedPlayerName', $data) && $data['ReplacedPlayerName'] === null) {
            $object->setReplacedPlayerName(null);
        }
        if (\array_key_exists('GameMinute', $data) && $data['GameMinute'] !== null) {
            $object->setGameMinute($data['GameMinute']);
        }
        elseif (\array_key_exists('GameMinute', $data) && $data['GameMinute'] === null) {
            $object->setGameMinute(null);
        }
        if (\array_key_exists('GameMinuteExtra', $data) && $data['GameMinuteExtra'] !== null) {
            $object->setGameMinuteExtra($data['GameMinuteExtra']);
        }
        elseif (\array_key_exists('GameMinuteExtra', $data) && $data['GameMinuteExtra'] === null) {
            $object->setGameMinuteExtra(null);
        }
        if (\array_key_exists('PitchPositionHorizontal', $data) && $data['PitchPositionHorizontal'] !== null) {
            $object->setPitchPositionHorizontal($data['PitchPositionHorizontal']);
        }
        elseif (\array_key_exists('PitchPositionHorizontal', $data) && $data['PitchPositionHorizontal'] === null) {
            $object->setPitchPositionHorizontal(null);
        }
        if (\array_key_exists('PitchPositionVertical', $data) && $data['PitchPositionVertical'] !== null) {
            $object->setPitchPositionVertical($data['PitchPositionVertical']);
        }
        elseif (\array_key_exists('PitchPositionVertical', $data) && $data['PitchPositionVertical'] === null) {
            $object->setPitchPositionVertical(null);
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