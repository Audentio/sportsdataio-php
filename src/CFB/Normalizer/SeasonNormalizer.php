<?php

namespace Sportsdata\API\CFB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CFB\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\CFB\\Model\\Season';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CFB\\Model\\Season';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CFB\Model\Season();
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
        if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
            $object->setDescription($data['Description']);
        }
        elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('ApiSeason', $data) && $data['ApiSeason'] !== null) {
            $object->setApiSeason($data['ApiSeason']);
        }
        elseif (\array_key_exists('ApiSeason', $data) && $data['ApiSeason'] === null) {
            $object->setApiSeason(null);
        }
        if (\array_key_exists('ApiWeek', $data) && $data['ApiWeek'] !== null) {
            $object->setApiWeek($data['ApiWeek']);
        }
        elseif (\array_key_exists('ApiWeek', $data) && $data['ApiWeek'] === null) {
            $object->setApiWeek(null);
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
        if (null !== $object->getApiSeason()) {
            $data['ApiSeason'] = $object->getApiSeason();
        }
        if (null !== $object->getApiWeek()) {
            $data['ApiWeek'] = $object->getApiWeek();
        }
        return $data;
    }
}