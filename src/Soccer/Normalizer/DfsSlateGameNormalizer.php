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
class DfsSlateGameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Soccer\\Model\\DfsSlateGame';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Soccer\\Model\\DfsSlateGame';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Soccer\Model\DfsSlateGame();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('SlateGameID', $data)) {
            $object->setSlateGameID($data['SlateGameID']);
        }
        if (\array_key_exists('SlateID', $data)) {
            $object->setSlateID($data['SlateID']);
        }
        if (\array_key_exists('GameID', $data) && $data['GameID'] !== null) {
            $object->setGameID($data['GameID']);
        }
        elseif (\array_key_exists('GameID', $data) && $data['GameID'] === null) {
            $object->setGameID(null);
        }
        if (\array_key_exists('Game', $data)) {
            $object->setGame($this->denormalizer->denormalize($data['Game'], 'Sportsdata\\API\\Soccer\\Model\\Game', 'json', $context));
        }
        if (\array_key_exists('OperatorGameID', $data) && $data['OperatorGameID'] !== null) {
            $object->setOperatorGameID($data['OperatorGameID']);
        }
        elseif (\array_key_exists('OperatorGameID', $data) && $data['OperatorGameID'] === null) {
            $object->setOperatorGameID(null);
        }
        if (\array_key_exists('RemovedByOperator', $data) && $data['RemovedByOperator'] !== null) {
            $object->setRemovedByOperator($data['RemovedByOperator']);
        }
        elseif (\array_key_exists('RemovedByOperator', $data) && $data['RemovedByOperator'] === null) {
            $object->setRemovedByOperator(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSlateGameID()) {
            $data['SlateGameID'] = $object->getSlateGameID();
        }
        if (null !== $object->getSlateID()) {
            $data['SlateID'] = $object->getSlateID();
        }
        if (null !== $object->getGameID()) {
            $data['GameID'] = $object->getGameID();
        }
        if (null !== $object->getGame()) {
            $data['Game'] = $this->normalizer->normalize($object->getGame(), 'json', $context);
        }
        if (null !== $object->getOperatorGameID()) {
            $data['OperatorGameID'] = $object->getOperatorGameID();
        }
        if (null !== $object->getRemovedByOperator()) {
            $data['RemovedByOperator'] = $object->getRemovedByOperator();
        }
        return $data;
    }
}