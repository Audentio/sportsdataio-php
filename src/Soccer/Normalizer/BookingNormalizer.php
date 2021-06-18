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
class BookingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Soccer\\Model\\Booking';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Soccer\\Model\\Booking';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Soccer\Model\Booking();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('BookingId', $data)) {
            $object->setBookingId($data['BookingId']);
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
        if (\array_key_exists('PlayerId', $data) && $data['PlayerId'] !== null) {
            $object->setPlayerId($data['PlayerId']);
        }
        elseif (\array_key_exists('PlayerId', $data) && $data['PlayerId'] === null) {
            $object->setPlayerId(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
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
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBookingId()) {
            $data['BookingId'] = $object->getBookingId();
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
        if (null !== $object->getGameMinute()) {
            $data['GameMinute'] = $object->getGameMinute();
        }
        if (null !== $object->getGameMinuteExtra()) {
            $data['GameMinuteExtra'] = $object->getGameMinuteExtra();
        }
        return $data;
    }
}