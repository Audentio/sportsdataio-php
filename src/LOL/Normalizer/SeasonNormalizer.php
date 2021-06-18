<?php

namespace Sportsdata\API\LOL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\LOL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SeasonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\LOL\\Model\\Season';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\LOL\\Model\\Season';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\LOL\Model\Season();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('SeasonId', $data)) {
            $object->setSeasonId($data['SeasonId']);
        }
        if (\array_key_exists('CompetitionId', $data)) {
            $object->setCompetitionId($data['CompetitionId']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('CompetitionName', $data) && $data['CompetitionName'] !== null) {
            $object->setCompetitionName($data['CompetitionName']);
        }
        elseif (\array_key_exists('CompetitionName', $data) && $data['CompetitionName'] === null) {
            $object->setCompetitionName(null);
        }
        if (\array_key_exists('StartDate', $data) && $data['StartDate'] !== null) {
            $object->setStartDate($data['StartDate']);
        }
        elseif (\array_key_exists('StartDate', $data) && $data['StartDate'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('EndDate', $data) && $data['EndDate'] !== null) {
            $object->setEndDate($data['EndDate']);
        }
        elseif (\array_key_exists('EndDate', $data) && $data['EndDate'] === null) {
            $object->setEndDate(null);
        }
        if (\array_key_exists('CurrentSeason', $data)) {
            $object->setCurrentSeason($data['CurrentSeason']);
        }
        if (\array_key_exists('Rounds', $data)) {
            $values = array();
            foreach ($data['Rounds'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\LOL\\Model\\Round', 'json', $context);
            }
            $object->setRounds($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSeasonId()) {
            $data['SeasonId'] = $object->getSeasonId();
        }
        if (null !== $object->getCompetitionId()) {
            $data['CompetitionId'] = $object->getCompetitionId();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getCompetitionName()) {
            $data['CompetitionName'] = $object->getCompetitionName();
        }
        if (null !== $object->getStartDate()) {
            $data['StartDate'] = $object->getStartDate();
        }
        if (null !== $object->getEndDate()) {
            $data['EndDate'] = $object->getEndDate();
        }
        if (null !== $object->getCurrentSeason()) {
            $data['CurrentSeason'] = $object->getCurrentSeason();
        }
        if (null !== $object->getRounds()) {
            $values = array();
            foreach ($object->getRounds() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Rounds'] = $values;
        }
        return $data;
    }
}