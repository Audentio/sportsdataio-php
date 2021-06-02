<?php

namespace Sportsdata\API\CBB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CBB\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\CBB\\Model\\Season';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CBB\\Model\\Season';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CBB\Model\Season();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('StartYear', $data)) {
            $object->setStartYear($data['StartYear']);
        }
        if (\array_key_exists('EndYear', $data)) {
            $object->setEndYear($data['EndYear']);
        }
        if (\array_key_exists('Description', $data)) {
            $object->setDescription($data['Description']);
        }
        if (\array_key_exists('RegularSeasonStartDate', $data)) {
            $object->setRegularSeasonStartDate($data['RegularSeasonStartDate']);
        }
        if (\array_key_exists('PostSeasonStartDate', $data)) {
            $object->setPostSeasonStartDate($data['PostSeasonStartDate']);
        }
        if (\array_key_exists('ApiSeason', $data)) {
            $object->setApiSeason($data['ApiSeason']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getStartYear()) {
            $data['StartYear'] = $object->getStartYear();
        }
        if (null !== $object->getEndYear()) {
            $data['EndYear'] = $object->getEndYear();
        }
        if (null !== $object->getDescription()) {
            $data['Description'] = $object->getDescription();
        }
        if (null !== $object->getRegularSeasonStartDate()) {
            $data['RegularSeasonStartDate'] = $object->getRegularSeasonStartDate();
        }
        if (null !== $object->getPostSeasonStartDate()) {
            $data['PostSeasonStartDate'] = $object->getPostSeasonStartDate();
        }
        if (null !== $object->getApiSeason()) {
            $data['ApiSeason'] = $object->getApiSeason();
        }
        return $data;
    }
}