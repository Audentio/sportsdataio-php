<?php

namespace Sportsdata\API\Golf\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\Golf\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class InjuryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Golf\\Model\\Injury';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Golf\\Model\\Injury';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Golf\Model\Injury();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('InjuryID', $data)) {
            $object->setInjuryID($data['InjuryID']);
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Active', $data)) {
            $object->setActive($data['Active']);
        }
        if (\array_key_exists('StartDate', $data) && $data['StartDate'] !== null) {
            $object->setStartDate($data['StartDate']);
        }
        elseif (\array_key_exists('StartDate', $data) && $data['StartDate'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('Status', $data) && $data['Status'] !== null) {
            $object->setStatus($data['Status']);
        }
        elseif (\array_key_exists('Status', $data) && $data['Status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('BodyPart', $data) && $data['BodyPart'] !== null) {
            $object->setBodyPart($data['BodyPart']);
        }
        elseif (\array_key_exists('BodyPart', $data) && $data['BodyPart'] === null) {
            $object->setBodyPart(null);
        }
        if (\array_key_exists('ExpectedReturn', $data) && $data['ExpectedReturn'] !== null) {
            $object->setExpectedReturn($data['ExpectedReturn']);
        }
        elseif (\array_key_exists('ExpectedReturn', $data) && $data['ExpectedReturn'] === null) {
            $object->setExpectedReturn(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getInjuryID()) {
            $data['InjuryID'] = $object->getInjuryID();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getActive()) {
            $data['Active'] = $object->getActive();
        }
        if (null !== $object->getStartDate()) {
            $data['StartDate'] = $object->getStartDate();
        }
        if (null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus();
        }
        if (null !== $object->getBodyPart()) {
            $data['BodyPart'] = $object->getBodyPart();
        }
        if (null !== $object->getExpectedReturn()) {
            $data['ExpectedReturn'] = $object->getExpectedReturn();
        }
        return $data;
    }
}