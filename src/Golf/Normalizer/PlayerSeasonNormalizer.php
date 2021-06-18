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
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('WorldGolfRank', $data) && $data['WorldGolfRank'] !== null) {
            $object->setWorldGolfRank($data['WorldGolfRank']);
        }
        elseif (\array_key_exists('WorldGolfRank', $data) && $data['WorldGolfRank'] === null) {
            $object->setWorldGolfRank(null);
        }
        if (\array_key_exists('WorldGolfRankLastWeek', $data) && $data['WorldGolfRankLastWeek'] !== null) {
            $object->setWorldGolfRankLastWeek($data['WorldGolfRankLastWeek']);
        }
        elseif (\array_key_exists('WorldGolfRankLastWeek', $data) && $data['WorldGolfRankLastWeek'] === null) {
            $object->setWorldGolfRankLastWeek(null);
        }
        if (\array_key_exists('Events', $data) && $data['Events'] !== null) {
            $object->setEvents($data['Events']);
        }
        elseif (\array_key_exists('Events', $data) && $data['Events'] === null) {
            $object->setEvents(null);
        }
        if (\array_key_exists('AveragePoints', $data) && $data['AveragePoints'] !== null) {
            $object->setAveragePoints($data['AveragePoints']);
        }
        elseif (\array_key_exists('AveragePoints', $data) && $data['AveragePoints'] === null) {
            $object->setAveragePoints(null);
        }
        if (\array_key_exists('TotalPoints', $data) && $data['TotalPoints'] !== null) {
            $object->setTotalPoints($data['TotalPoints']);
        }
        elseif (\array_key_exists('TotalPoints', $data) && $data['TotalPoints'] === null) {
            $object->setTotalPoints(null);
        }
        if (\array_key_exists('PointsLost', $data) && $data['PointsLost'] !== null) {
            $object->setPointsLost($data['PointsLost']);
        }
        elseif (\array_key_exists('PointsLost', $data) && $data['PointsLost'] === null) {
            $object->setPointsLost(null);
        }
        if (\array_key_exists('PointsGained', $data) && $data['PointsGained'] !== null) {
            $object->setPointsGained($data['PointsGained']);
        }
        elseif (\array_key_exists('PointsGained', $data) && $data['PointsGained'] === null) {
            $object->setPointsGained(null);
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