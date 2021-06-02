<?php

namespace Sportsdata\API\MMA\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\MMA\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CareerStatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\MMA\\Model\\CareerStat';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\MMA\\Model\\CareerStat';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\MMA\Model\CareerStat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('FighterId', $data)) {
            $object->setFighterId($data['FighterId']);
        }
        if (\array_key_exists('FirstName', $data)) {
            $object->setFirstName($data['FirstName']);
        }
        if (\array_key_exists('LastName', $data)) {
            $object->setLastName($data['LastName']);
        }
        if (\array_key_exists('SigStrikesLandedPerMinute', $data)) {
            $object->setSigStrikesLandedPerMinute($data['SigStrikesLandedPerMinute']);
        }
        if (\array_key_exists('SigStrikeAccuracy', $data)) {
            $object->setSigStrikeAccuracy($data['SigStrikeAccuracy']);
        }
        if (\array_key_exists('TakedownAverage', $data)) {
            $object->setTakedownAverage($data['TakedownAverage']);
        }
        if (\array_key_exists('SubmissionAverage', $data)) {
            $object->setSubmissionAverage($data['SubmissionAverage']);
        }
        if (\array_key_exists('KnockoutPercentage', $data)) {
            $object->setKnockoutPercentage($data['KnockoutPercentage']);
        }
        if (\array_key_exists('TechnicalKnockoutPercentage', $data)) {
            $object->setTechnicalKnockoutPercentage($data['TechnicalKnockoutPercentage']);
        }
        if (\array_key_exists('DecisionPercentage', $data)) {
            $object->setDecisionPercentage($data['DecisionPercentage']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFighterId()) {
            $data['FighterId'] = $object->getFighterId();
        }
        if (null !== $object->getFirstName()) {
            $data['FirstName'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['LastName'] = $object->getLastName();
        }
        if (null !== $object->getSigStrikesLandedPerMinute()) {
            $data['SigStrikesLandedPerMinute'] = $object->getSigStrikesLandedPerMinute();
        }
        if (null !== $object->getSigStrikeAccuracy()) {
            $data['SigStrikeAccuracy'] = $object->getSigStrikeAccuracy();
        }
        if (null !== $object->getTakedownAverage()) {
            $data['TakedownAverage'] = $object->getTakedownAverage();
        }
        if (null !== $object->getSubmissionAverage()) {
            $data['SubmissionAverage'] = $object->getSubmissionAverage();
        }
        if (null !== $object->getKnockoutPercentage()) {
            $data['KnockoutPercentage'] = $object->getKnockoutPercentage();
        }
        if (null !== $object->getTechnicalKnockoutPercentage()) {
            $data['TechnicalKnockoutPercentage'] = $object->getTechnicalKnockoutPercentage();
        }
        if (null !== $object->getDecisionPercentage()) {
            $data['DecisionPercentage'] = $object->getDecisionPercentage();
        }
        return $data;
    }
}