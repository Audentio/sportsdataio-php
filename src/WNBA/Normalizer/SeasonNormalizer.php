<?php

namespace Sportsdata\API\WNBA\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\WNBA\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\WNBA\\Model\\Season';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\WNBA\\Model\\Season';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\WNBA\Model\Season();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Year', $data)) {
            $object->setYear($data['Year']);
        }
        if (\array_key_exists('PreseasonStartDate', $data) && $data['PreseasonStartDate'] !== null) {
            $object->setPreseasonStartDate($data['PreseasonStartDate']);
        }
        elseif (\array_key_exists('PreseasonStartDate', $data) && $data['PreseasonStartDate'] === null) {
            $object->setPreseasonStartDate(null);
        }
        if (\array_key_exists('RegularSeasonStartDate', $data) && $data['RegularSeasonStartDate'] !== null) {
            $object->setRegularSeasonStartDate($data['RegularSeasonStartDate']);
        }
        elseif (\array_key_exists('RegularSeasonStartDate', $data) && $data['RegularSeasonStartDate'] === null) {
            $object->setRegularSeasonStartDate(null);
        }
        if (\array_key_exists('PostSeasonStartDate', $data) && $data['PostSeasonStartDate'] !== null) {
            $object->setPostSeasonStartDate($data['PostSeasonStartDate']);
        }
        elseif (\array_key_exists('PostSeasonStartDate', $data) && $data['PostSeasonStartDate'] === null) {
            $object->setPostSeasonStartDate(null);
        }
        if (\array_key_exists('CurrentSeasonType', $data) && $data['CurrentSeasonType'] !== null) {
            $object->setCurrentSeasonType($data['CurrentSeasonType']);
        }
        elseif (\array_key_exists('CurrentSeasonType', $data) && $data['CurrentSeasonType'] === null) {
            $object->setCurrentSeasonType(null);
        }
        if (\array_key_exists('ApiSeason', $data) && $data['ApiSeason'] !== null) {
            $object->setApiSeason($data['ApiSeason']);
        }
        elseif (\array_key_exists('ApiSeason', $data) && $data['ApiSeason'] === null) {
            $object->setApiSeason(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getYear()) {
            $data['Year'] = $object->getYear();
        }
        if (null !== $object->getPreseasonStartDate()) {
            $data['PreseasonStartDate'] = $object->getPreseasonStartDate();
        }
        if (null !== $object->getRegularSeasonStartDate()) {
            $data['RegularSeasonStartDate'] = $object->getRegularSeasonStartDate();
        }
        if (null !== $object->getPostSeasonStartDate()) {
            $data['PostSeasonStartDate'] = $object->getPostSeasonStartDate();
        }
        if (null !== $object->getCurrentSeasonType()) {
            $data['CurrentSeasonType'] = $object->getCurrentSeasonType();
        }
        if (null !== $object->getApiSeason()) {
            $data['ApiSeason'] = $object->getApiSeason();
        }
        return $data;
    }
}