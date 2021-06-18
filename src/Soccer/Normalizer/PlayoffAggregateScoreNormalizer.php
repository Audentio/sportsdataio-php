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
class PlayoffAggregateScoreNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Soccer\\Model\\PlayoffAggregateScore';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Soccer\\Model\\PlayoffAggregateScore';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Soccer\Model\PlayoffAggregateScore();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TeamA_Id', $data)) {
            $object->setTeamAId($data['TeamA_Id']);
        }
        if (\array_key_exists('TeamA_AggregateScore', $data)) {
            $object->setTeamAAggregateScore($data['TeamA_AggregateScore']);
        }
        if (\array_key_exists('TeamB_Id', $data)) {
            $object->setTeamBId($data['TeamB_Id']);
        }
        if (\array_key_exists('TeamB_AggregateScore', $data)) {
            $object->setTeamBAggregateScore($data['TeamB_AggregateScore']);
        }
        if (\array_key_exists('WinningTeamId', $data)) {
            $object->setWinningTeamId($data['WinningTeamId']);
        }
        if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
            $object->setCreated($data['Created']);
        }
        elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
            $object->setCreated(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTeamAId()) {
            $data['TeamA_Id'] = $object->getTeamAId();
        }
        if (null !== $object->getTeamAAggregateScore()) {
            $data['TeamA_AggregateScore'] = $object->getTeamAAggregateScore();
        }
        if (null !== $object->getTeamBId()) {
            $data['TeamB_Id'] = $object->getTeamBId();
        }
        if (null !== $object->getTeamBAggregateScore()) {
            $data['TeamB_AggregateScore'] = $object->getTeamBAggregateScore();
        }
        if (null !== $object->getWinningTeamId()) {
            $data['WinningTeamId'] = $object->getWinningTeamId();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        return $data;
    }
}