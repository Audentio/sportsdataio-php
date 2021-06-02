<?php

namespace Sportsdata\API\MLB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\MLB\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PitchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\MLB\\Model\\Pitch';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\MLB\\Model\\Pitch';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\MLB\Model\Pitch();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PitchID', $data)) {
            $object->setPitchID($data['PitchID']);
        }
        if (\array_key_exists('PlayID', $data)) {
            $object->setPlayID($data['PlayID']);
        }
        if (\array_key_exists('PitchNumberThisAtBat', $data)) {
            $object->setPitchNumberThisAtBat($data['PitchNumberThisAtBat']);
        }
        if (\array_key_exists('PitcherID', $data)) {
            $object->setPitcherID($data['PitcherID']);
        }
        if (\array_key_exists('HitterID', $data)) {
            $object->setHitterID($data['HitterID']);
        }
        if (\array_key_exists('Outs', $data)) {
            $object->setOuts($data['Outs']);
        }
        if (\array_key_exists('BallsBeforePitch', $data)) {
            $object->setBallsBeforePitch($data['BallsBeforePitch']);
        }
        if (\array_key_exists('StrikesBeforePitch', $data)) {
            $object->setStrikesBeforePitch($data['StrikesBeforePitch']);
        }
        if (\array_key_exists('Strike', $data)) {
            $object->setStrike($data['Strike']);
        }
        if (\array_key_exists('Ball', $data)) {
            $object->setBall($data['Ball']);
        }
        if (\array_key_exists('Foul', $data)) {
            $object->setFoul($data['Foul']);
        }
        if (\array_key_exists('Swinging', $data)) {
            $object->setSwinging($data['Swinging']);
        }
        if (\array_key_exists('Looking', $data)) {
            $object->setLooking($data['Looking']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPitchID()) {
            $data['PitchID'] = $object->getPitchID();
        }
        if (null !== $object->getPlayID()) {
            $data['PlayID'] = $object->getPlayID();
        }
        if (null !== $object->getPitchNumberThisAtBat()) {
            $data['PitchNumberThisAtBat'] = $object->getPitchNumberThisAtBat();
        }
        if (null !== $object->getPitcherID()) {
            $data['PitcherID'] = $object->getPitcherID();
        }
        if (null !== $object->getHitterID()) {
            $data['HitterID'] = $object->getHitterID();
        }
        if (null !== $object->getOuts()) {
            $data['Outs'] = $object->getOuts();
        }
        if (null !== $object->getBallsBeforePitch()) {
            $data['BallsBeforePitch'] = $object->getBallsBeforePitch();
        }
        if (null !== $object->getStrikesBeforePitch()) {
            $data['StrikesBeforePitch'] = $object->getStrikesBeforePitch();
        }
        if (null !== $object->getStrike()) {
            $data['Strike'] = $object->getStrike();
        }
        if (null !== $object->getBall()) {
            $data['Ball'] = $object->getBall();
        }
        if (null !== $object->getFoul()) {
            $data['Foul'] = $object->getFoul();
        }
        if (null !== $object->getSwinging()) {
            $data['Swinging'] = $object->getSwinging();
        }
        if (null !== $object->getLooking()) {
            $data['Looking'] = $object->getLooking();
        }
        return $data;
    }
}