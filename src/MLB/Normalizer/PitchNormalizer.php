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
        if (\array_key_exists('PitchNumberThisAtBat', $data) && $data['PitchNumberThisAtBat'] !== null) {
            $object->setPitchNumberThisAtBat($data['PitchNumberThisAtBat']);
        }
        elseif (\array_key_exists('PitchNumberThisAtBat', $data) && $data['PitchNumberThisAtBat'] === null) {
            $object->setPitchNumberThisAtBat(null);
        }
        if (\array_key_exists('PitcherID', $data) && $data['PitcherID'] !== null) {
            $object->setPitcherID($data['PitcherID']);
        }
        elseif (\array_key_exists('PitcherID', $data) && $data['PitcherID'] === null) {
            $object->setPitcherID(null);
        }
        if (\array_key_exists('HitterID', $data) && $data['HitterID'] !== null) {
            $object->setHitterID($data['HitterID']);
        }
        elseif (\array_key_exists('HitterID', $data) && $data['HitterID'] === null) {
            $object->setHitterID(null);
        }
        if (\array_key_exists('Outs', $data) && $data['Outs'] !== null) {
            $object->setOuts($data['Outs']);
        }
        elseif (\array_key_exists('Outs', $data) && $data['Outs'] === null) {
            $object->setOuts(null);
        }
        if (\array_key_exists('BallsBeforePitch', $data) && $data['BallsBeforePitch'] !== null) {
            $object->setBallsBeforePitch($data['BallsBeforePitch']);
        }
        elseif (\array_key_exists('BallsBeforePitch', $data) && $data['BallsBeforePitch'] === null) {
            $object->setBallsBeforePitch(null);
        }
        if (\array_key_exists('StrikesBeforePitch', $data) && $data['StrikesBeforePitch'] !== null) {
            $object->setStrikesBeforePitch($data['StrikesBeforePitch']);
        }
        elseif (\array_key_exists('StrikesBeforePitch', $data) && $data['StrikesBeforePitch'] === null) {
            $object->setStrikesBeforePitch(null);
        }
        if (\array_key_exists('Strike', $data) && $data['Strike'] !== null) {
            $object->setStrike($data['Strike']);
        }
        elseif (\array_key_exists('Strike', $data) && $data['Strike'] === null) {
            $object->setStrike(null);
        }
        if (\array_key_exists('Ball', $data) && $data['Ball'] !== null) {
            $object->setBall($data['Ball']);
        }
        elseif (\array_key_exists('Ball', $data) && $data['Ball'] === null) {
            $object->setBall(null);
        }
        if (\array_key_exists('Foul', $data) && $data['Foul'] !== null) {
            $object->setFoul($data['Foul']);
        }
        elseif (\array_key_exists('Foul', $data) && $data['Foul'] === null) {
            $object->setFoul(null);
        }
        if (\array_key_exists('Swinging', $data) && $data['Swinging'] !== null) {
            $object->setSwinging($data['Swinging']);
        }
        elseif (\array_key_exists('Swinging', $data) && $data['Swinging'] === null) {
            $object->setSwinging(null);
        }
        if (\array_key_exists('Looking', $data) && $data['Looking'] !== null) {
            $object->setLooking($data['Looking']);
        }
        elseif (\array_key_exists('Looking', $data) && $data['Looking'] === null) {
            $object->setLooking(null);
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