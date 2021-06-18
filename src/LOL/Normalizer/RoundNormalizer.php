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
class RoundNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\LOL\\Model\\Round';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\LOL\\Model\\Round';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\LOL\Model\Round();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('RoundId', $data)) {
            $object->setRoundId($data['RoundId']);
        }
        if (\array_key_exists('SeasonId', $data)) {
            $object->setSeasonId($data['SeasonId']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
            $object->setType($data['Type']);
        }
        elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
            $object->setType(null);
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
        if (\array_key_exists('CurrentWeek', $data) && $data['CurrentWeek'] !== null) {
            $object->setCurrentWeek($data['CurrentWeek']);
        }
        elseif (\array_key_exists('CurrentWeek', $data) && $data['CurrentWeek'] === null) {
            $object->setCurrentWeek(null);
        }
        if (\array_key_exists('CurrentRound', $data)) {
            $object->setCurrentRound($data['CurrentRound']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRoundId()) {
            $data['RoundId'] = $object->getRoundId();
        }
        if (null !== $object->getSeasonId()) {
            $data['SeasonId'] = $object->getSeasonId();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getType()) {
            $data['Type'] = $object->getType();
        }
        if (null !== $object->getStartDate()) {
            $data['StartDate'] = $object->getStartDate();
        }
        if (null !== $object->getEndDate()) {
            $data['EndDate'] = $object->getEndDate();
        }
        if (null !== $object->getCurrentWeek()) {
            $data['CurrentWeek'] = $object->getCurrentWeek();
        }
        if (null !== $object->getCurrentRound()) {
            $data['CurrentRound'] = $object->getCurrentRound();
        }
        return $data;
    }
}