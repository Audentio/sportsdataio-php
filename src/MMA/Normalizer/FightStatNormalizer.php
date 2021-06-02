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
class FightStatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\MMA\\Model\\FightStat';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\MMA\\Model\\FightStat';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\MMA\Model\FightStat();
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
        if (\array_key_exists('Winner', $data)) {
            $object->setWinner($data['Winner']);
        }
        if (\array_key_exists('FantasyPoints', $data)) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        if (\array_key_exists('FantasyPointsDraftKings', $data)) {
            $object->setFantasyPointsDraftKings($data['FantasyPointsDraftKings']);
        }
        if (\array_key_exists('Knockdowns', $data)) {
            $object->setKnockdowns($data['Knockdowns']);
        }
        if (\array_key_exists('TotalStrikesAttempted', $data)) {
            $object->setTotalStrikesAttempted($data['TotalStrikesAttempted']);
        }
        if (\array_key_exists('TotalStrikesLanded', $data)) {
            $object->setTotalStrikesLanded($data['TotalStrikesLanded']);
        }
        if (\array_key_exists('SigStrikesAttempted', $data)) {
            $object->setSigStrikesAttempted($data['SigStrikesAttempted']);
        }
        if (\array_key_exists('SigStrikesLanded', $data)) {
            $object->setSigStrikesLanded($data['SigStrikesLanded']);
        }
        if (\array_key_exists('TakedownsAttempted', $data)) {
            $object->setTakedownsAttempted($data['TakedownsAttempted']);
        }
        if (\array_key_exists('TakedownsLanded', $data)) {
            $object->setTakedownsLanded($data['TakedownsLanded']);
        }
        if (\array_key_exists('TakedownsSlams', $data)) {
            $object->setTakedownsSlams($data['TakedownsSlams']);
        }
        if (\array_key_exists('TakedownAccuracy', $data)) {
            $object->setTakedownAccuracy($data['TakedownAccuracy']);
        }
        if (\array_key_exists('Advances', $data)) {
            $object->setAdvances($data['Advances']);
        }
        if (\array_key_exists('Reversals', $data)) {
            $object->setReversals($data['Reversals']);
        }
        if (\array_key_exists('Submissions', $data)) {
            $object->setSubmissions($data['Submissions']);
        }
        if (\array_key_exists('SlamRate', $data)) {
            $object->setSlamRate($data['SlamRate']);
        }
        if (\array_key_exists('TimeInControl', $data)) {
            $object->setTimeInControl($data['TimeInControl']);
        }
        if (\array_key_exists('FirstRoundWin', $data)) {
            $object->setFirstRoundWin($data['FirstRoundWin']);
        }
        if (\array_key_exists('SecondRoundWin', $data)) {
            $object->setSecondRoundWin($data['SecondRoundWin']);
        }
        if (\array_key_exists('ThirdRoundWin', $data)) {
            $object->setThirdRoundWin($data['ThirdRoundWin']);
        }
        if (\array_key_exists('FourthRoundWin', $data)) {
            $object->setFourthRoundWin($data['FourthRoundWin']);
        }
        if (\array_key_exists('FifthRoundWin', $data)) {
            $object->setFifthRoundWin($data['FifthRoundWin']);
        }
        if (\array_key_exists('DecisionWin', $data)) {
            $object->setDecisionWin($data['DecisionWin']);
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
        if (null !== $object->getWinner()) {
            $data['Winner'] = $object->getWinner();
        }
        if (null !== $object->getFantasyPoints()) {
            $data['FantasyPoints'] = $object->getFantasyPoints();
        }
        if (null !== $object->getFantasyPointsDraftKings()) {
            $data['FantasyPointsDraftKings'] = $object->getFantasyPointsDraftKings();
        }
        if (null !== $object->getKnockdowns()) {
            $data['Knockdowns'] = $object->getKnockdowns();
        }
        if (null !== $object->getTotalStrikesAttempted()) {
            $data['TotalStrikesAttempted'] = $object->getTotalStrikesAttempted();
        }
        if (null !== $object->getTotalStrikesLanded()) {
            $data['TotalStrikesLanded'] = $object->getTotalStrikesLanded();
        }
        if (null !== $object->getSigStrikesAttempted()) {
            $data['SigStrikesAttempted'] = $object->getSigStrikesAttempted();
        }
        if (null !== $object->getSigStrikesLanded()) {
            $data['SigStrikesLanded'] = $object->getSigStrikesLanded();
        }
        if (null !== $object->getTakedownsAttempted()) {
            $data['TakedownsAttempted'] = $object->getTakedownsAttempted();
        }
        if (null !== $object->getTakedownsLanded()) {
            $data['TakedownsLanded'] = $object->getTakedownsLanded();
        }
        if (null !== $object->getTakedownsSlams()) {
            $data['TakedownsSlams'] = $object->getTakedownsSlams();
        }
        if (null !== $object->getTakedownAccuracy()) {
            $data['TakedownAccuracy'] = $object->getTakedownAccuracy();
        }
        if (null !== $object->getAdvances()) {
            $data['Advances'] = $object->getAdvances();
        }
        if (null !== $object->getReversals()) {
            $data['Reversals'] = $object->getReversals();
        }
        if (null !== $object->getSubmissions()) {
            $data['Submissions'] = $object->getSubmissions();
        }
        if (null !== $object->getSlamRate()) {
            $data['SlamRate'] = $object->getSlamRate();
        }
        if (null !== $object->getTimeInControl()) {
            $data['TimeInControl'] = $object->getTimeInControl();
        }
        if (null !== $object->getFirstRoundWin()) {
            $data['FirstRoundWin'] = $object->getFirstRoundWin();
        }
        if (null !== $object->getSecondRoundWin()) {
            $data['SecondRoundWin'] = $object->getSecondRoundWin();
        }
        if (null !== $object->getThirdRoundWin()) {
            $data['ThirdRoundWin'] = $object->getThirdRoundWin();
        }
        if (null !== $object->getFourthRoundWin()) {
            $data['FourthRoundWin'] = $object->getFourthRoundWin();
        }
        if (null !== $object->getFifthRoundWin()) {
            $data['FifthRoundWin'] = $object->getFifthRoundWin();
        }
        if (null !== $object->getDecisionWin()) {
            $data['DecisionWin'] = $object->getDecisionWin();
        }
        return $data;
    }
}