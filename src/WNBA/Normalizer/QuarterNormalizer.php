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
class QuarterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\WNBA\\Model\\Quarter';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\WNBA\\Model\\Quarter';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\WNBA\Model\Quarter();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('QuarterID', $data)) {
            $object->setQuarterID($data['QuarterID']);
        }
        if (\array_key_exists('GameID', $data)) {
            $object->setGameID($data['GameID']);
        }
        if (\array_key_exists('Number', $data)) {
            $object->setNumber($data['Number']);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('AwayScore', $data) && $data['AwayScore'] !== null) {
            $object->setAwayScore($data['AwayScore']);
        }
        elseif (\array_key_exists('AwayScore', $data) && $data['AwayScore'] === null) {
            $object->setAwayScore(null);
        }
        if (\array_key_exists('HomeScore', $data) && $data['HomeScore'] !== null) {
            $object->setHomeScore($data['HomeScore']);
        }
        elseif (\array_key_exists('HomeScore', $data) && $data['HomeScore'] === null) {
            $object->setHomeScore(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getQuarterID()) {
            $data['QuarterID'] = $object->getQuarterID();
        }
        if (null !== $object->getGameID()) {
            $data['GameID'] = $object->getGameID();
        }
        if (null !== $object->getNumber()) {
            $data['Number'] = $object->getNumber();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getAwayScore()) {
            $data['AwayScore'] = $object->getAwayScore();
        }
        if (null !== $object->getHomeScore()) {
            $data['HomeScore'] = $object->getHomeScore();
        }
        return $data;
    }
}