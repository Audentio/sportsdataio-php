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
class PlayerSeasonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Golf\\Model\\PlayerSeason';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Golf\\Model\\PlayerSeason';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Golf\Model\PlayerSeason();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerSeasonID', $data)) {
            $object->setPlayerSeasonID($data['PlayerSeasonID']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('WorldGolfRank', $data)) {
            $object->setWorldGolfRank($data['WorldGolfRank']);
        }
        if (\array_key_exists('WorldGolfRankLastWeek', $data)) {
            $object->setWorldGolfRankLastWeek($data['WorldGolfRankLastWeek']);
        }
        if (\array_key_exists('Events', $data)) {
            $object->setEvents($data['Events']);
        }
        if (\array_key_exists('AveragePoints', $data)) {
            $object->setAveragePoints($data['AveragePoints']);
        }
        if (\array_key_exists('TotalPoints', $data)) {
            $object->setTotalPoints($data['TotalPoints']);
        }
        if (\array_key_exists('PointsLost', $data)) {
            $object->setPointsLost($data['PointsLost']);
        }
        if (\array_key_exists('PointsGained', $data)) {
            $object->setPointsGained($data['PointsGained']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayerSeasonID()) {
            $data['PlayerSeasonID'] = $object->getPlayerSeasonID();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getWorldGolfRank()) {
            $data['WorldGolfRank'] = $object->getWorldGolfRank();
        }
        if (null !== $object->getWorldGolfRankLastWeek()) {
            $data['WorldGolfRankLastWeek'] = $object->getWorldGolfRankLastWeek();
        }
        if (null !== $object->getEvents()) {
            $data['Events'] = $object->getEvents();
        }
        if (null !== $object->getAveragePoints()) {
            $data['AveragePoints'] = $object->getAveragePoints();
        }
        if (null !== $object->getTotalPoints()) {
            $data['TotalPoints'] = $object->getTotalPoints();
        }
        if (null !== $object->getPointsLost()) {
            $data['PointsLost'] = $object->getPointsLost();
        }
        if (null !== $object->getPointsGained()) {
            $data['PointsGained'] = $object->getPointsGained();
        }
        return $data;
    }
}