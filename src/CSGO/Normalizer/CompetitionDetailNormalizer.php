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
class CompetitionDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\CSGO\\Model\\CompetitionDetail';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CSGO\\Model\\CompetitionDetail';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CSGO\Model\CompetitionDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CurrentSeason', $data)) {
            $object->setCurrentSeason($this->denormalizer->denormalize($data['CurrentSeason'], 'Sportsdata\\API\\CSGO\\Model\\Season', 'json', $context));
        }
        if (\array_key_exists('Teams', $data)) {
            $values = array();
            foreach ($data['Teams'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\CSGO\\Model\\TeamDetail', 'json', $context);
            }
            $object->setTeams($values);
        }
        if (\array_key_exists('Games', $data)) {
            $values_1 = array();
            foreach ($data['Games'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\CSGO\\Model\\Game', 'json', $context);
            }
            $object->setGames($values_1);
        }
        if (\array_key_exists('CompetitionId', $data)) {
            $object->setCompetitionId($data['CompetitionId']);
        }
        if (\array_key_exists('AreaId', $data)) {
            $object->setAreaId($data['AreaId']);
        }
        if (\array_key_exists('AreaName', $data)) {
            $object->setAreaName($data['AreaName']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Gender', $data)) {
            $object->setGender($data['Gender']);
        }
        if (\array_key_exists('Type', $data)) {
            $object->setType($data['Type']);
        }
        if (\array_key_exists('Format', $data)) {
            $object->setFormat($data['Format']);
        }
        if (\array_key_exists('Seasons', $data)) {
            $values_2 = array();
            foreach ($data['Seasons'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Sportsdata\\API\\CSGO\\Model\\Season', 'json', $context);
            }
            $object->setSeasons($values_2);
        }
        if (\array_key_exists('PlayerStatsCoverage', $data)) {
            $object->setPlayerStatsCoverage($data['PlayerStatsCoverage']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCurrentSeason()) {
            $data['CurrentSeason'] = $this->normalizer->normalize($object->getCurrentSeason(), 'json', $context);
        }
        if (null !== $object->getTeams()) {
            $values = array();
            foreach ($object->getTeams() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Teams'] = $values;
        }
        if (null !== $object->getGames()) {
            $values_1 = array();
            foreach ($object->getGames() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Games'] = $values_1;
        }
        if (null !== $object->getCompetitionId()) {
            $data['CompetitionId'] = $object->getCompetitionId();
        }
        if (null !== $object->getAreaId()) {
            $data['AreaId'] = $object->getAreaId();
        }
        if (null !== $object->getAreaName()) {
            $data['AreaName'] = $object->getAreaName();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getGender()) {
            $data['Gender'] = $object->getGender();
        }
        if (null !== $object->getType()) {
            $data['Type'] = $object->getType();
        }
        if (null !== $object->getFormat()) {
            $data['Format'] = $object->getFormat();
        }
        if (null !== $object->getSeasons()) {
            $values_2 = array();
            foreach ($object->getSeasons() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['Seasons'] = $values_2;
        }
        if (null !== $object->getPlayerStatsCoverage()) {
            $data['PlayerStatsCoverage'] = $object->getPlayerStatsCoverage();
        }
        return $data;
    }
}