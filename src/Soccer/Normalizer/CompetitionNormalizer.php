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
class CompetitionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Soccer\\Model\\Competition';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Soccer\\Model\\Competition';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Soccer\Model\Competition();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CompetitionId', $data)) {
            $object->setCompetitionId($data['CompetitionId']);
        }
        if (\array_key_exists('AreaId', $data)) {
            $object->setAreaId($data['AreaId']);
        }
        if (\array_key_exists('AreaName', $data) && $data['AreaName'] !== null) {
            $object->setAreaName($data['AreaName']);
        }
        elseif (\array_key_exists('AreaName', $data) && $data['AreaName'] === null) {
            $object->setAreaName(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Gender', $data) && $data['Gender'] !== null) {
            $object->setGender($data['Gender']);
        }
        elseif (\array_key_exists('Gender', $data) && $data['Gender'] === null) {
            $object->setGender(null);
        }
        if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
            $object->setType($data['Type']);
        }
        elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('Format', $data) && $data['Format'] !== null) {
            $object->setFormat($data['Format']);
        }
        elseif (\array_key_exists('Format', $data) && $data['Format'] === null) {
            $object->setFormat(null);
        }
        if (\array_key_exists('Seasons', $data)) {
            $values = array();
            foreach ($data['Seasons'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\Soccer\\Model\\Season', 'json', $context);
            }
            $object->setSeasons($values);
        }
        if (\array_key_exists('Key', $data) && $data['Key'] !== null) {
            $object->setKey($data['Key']);
        }
        elseif (\array_key_exists('Key', $data) && $data['Key'] === null) {
            $object->setKey(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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
            $values = array();
            foreach ($object->getSeasons() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Seasons'] = $values;
        }
        if (null !== $object->getKey()) {
            $data['Key'] = $object->getKey();
        }
        return $data;
    }
}