<?php

namespace Sportsdata\API\NBA\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\NBA\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BettingOutcomeResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NBA\\Model\\BettingOutcomeResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NBA\\Model\\BettingOutcomeResult';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NBA\Model\BettingOutcomeResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('BettingOutcomeID', $data)) {
            $object->setBettingOutcomeID($data['BettingOutcomeID']);
        }
        if (\array_key_exists('BettingResultTypeID', $data) && $data['BettingResultTypeID'] !== null) {
            $object->setBettingResultTypeID($data['BettingResultTypeID']);
        }
        elseif (\array_key_exists('BettingResultTypeID', $data) && $data['BettingResultTypeID'] === null) {
            $object->setBettingResultTypeID(null);
        }
        if (\array_key_exists('BettingResultType', $data) && $data['BettingResultType'] !== null) {
            $object->setBettingResultType($data['BettingResultType']);
        }
        elseif (\array_key_exists('BettingResultType', $data) && $data['BettingResultType'] === null) {
            $object->setBettingResultType(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBettingOutcomeID()) {
            $data['BettingOutcomeID'] = $object->getBettingOutcomeID();
        }
        if (null !== $object->getBettingResultTypeID()) {
            $data['BettingResultTypeID'] = $object->getBettingResultTypeID();
        }
        if (null !== $object->getBettingResultType()) {
            $data['BettingResultType'] = $object->getBettingResultType();
        }
        return $data;
    }
}