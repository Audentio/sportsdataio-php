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
        if (\array_key_exists('FighterId', $data) && $data['FighterId'] !== null) {
            $object->setFighterId($data['FighterId']);
        }
        elseif (\array_key_exists('FighterId', $data) && $data['FighterId'] === null) {
            $object->setFighterId(null);
        }
        if (\array_key_exists('FirstName', $data) && $data['FirstName'] !== null) {
            $object->setFirstName($data['FirstName']);
        }
        elseif (\array_key_exists('FirstName', $data) && $data['FirstName'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('LastName', $data) && $data['LastName'] !== null) {
            $object->setLastName($data['LastName']);
        }
        elseif (\array_key_exists('LastName', $data) && $data['LastName'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('SigStrikesLandedPerMinute', $data) && $data['SigStrikesLandedPerMinute'] !== null) {
            $object->setSigStrikesLandedPerMinute($data['SigStrikesLandedPerMinute']);
        }
        elseif (\array_key_exists('SigStrikesLandedPerMinute', $data) && $data['SigStrikesLandedPerMinute'] === null) {
            $object->setSigStrikesLandedPerMinute(null);
        }
        if (\array_key_exists('SigStrikeAccuracy', $data) && $data['SigStrikeAccuracy'] !== null) {
            $object->setSigStrikeAccuracy($data['SigStrikeAccuracy']);
        }
        elseif (\array_key_exists('SigStrikeAccuracy', $data) && $data['SigStrikeAccuracy'] === null) {
            $object->setSigStrikeAccuracy(null);
        }
        if (\array_key_exists('TakedownAverage', $data) && $data['TakedownAverage'] !== null) {
            $object->setTakedownAverage($data['TakedownAverage']);
        }
        elseif (\array_key_exists('TakedownAverage', $data) && $data['TakedownAverage'] === null) {
            $object->setTakedownAverage(null);
        }
        if (\array_key_exists('SubmissionAverage', $data) && $data['SubmissionAverage'] !== null) {
            $object->setSubmissionAverage($data['SubmissionAverage']);
        }
        elseif (\array_key_exists('SubmissionAverage', $data) && $data['SubmissionAverage'] === null) {
            $object->setSubmissionAverage(null);
        }
        if (\array_key_exists('KnockoutPercentage', $data) && $data['KnockoutPercentage'] !== null) {
            $object->setKnockoutPercentage($data['KnockoutPercentage']);
        }
        elseif (\array_key_exists('KnockoutPercentage', $data) && $data['KnockoutPercentage'] === null) {
            $object->setKnockoutPercentage(null);
        }
        if (\array_key_exists('TechnicalKnockoutPercentage', $data) && $data['TechnicalKnockoutPercentage'] !== null) {
            $object->setTechnicalKnockoutPercentage($data['TechnicalKnockoutPercentage']);
        }
        elseif (\array_key_exists('TechnicalKnockoutPercentage', $data) && $data['TechnicalKnockoutPercentage'] === null) {
            $object->setTechnicalKnockoutPercentage(null);
        }
        if (\array_key_exists('DecisionPercentage', $data) && $data['DecisionPercentage'] !== null) {
            $object->setDecisionPercentage($data['DecisionPercentage']);
        }
        elseif (\array_key_exists('DecisionPercentage', $data) && $data['DecisionPercentage'] === null) {
            $object->setDecisionPercentage(null);
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