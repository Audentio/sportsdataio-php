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
        if (\array_key_exists('Winner', $data) && $data['Winner'] !== null) {
            $object->setWinner($data['Winner']);
        }
        elseif (\array_key_exists('Winner', $data) && $data['Winner'] === null) {
            $object->setWinner(null);
        }
        if (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] !== null) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        elseif (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] === null) {
            $object->setFantasyPoints(null);
        }
        if (\array_key_exists('FantasyPointsDraftKings', $data) && $data['FantasyPointsDraftKings'] !== null) {
            $object->setFantasyPointsDraftKings($data['FantasyPointsDraftKings']);
        }
        elseif (\array_key_exists('FantasyPointsDraftKings', $data) && $data['FantasyPointsDraftKings'] === null) {
            $object->setFantasyPointsDraftKings(null);
        }
        if (\array_key_exists('Knockdowns', $data) && $data['Knockdowns'] !== null) {
            $object->setKnockdowns($data['Knockdowns']);
        }
        elseif (\array_key_exists('Knockdowns', $data) && $data['Knockdowns'] === null) {
            $object->setKnockdowns(null);
        }
        if (\array_key_exists('TotalStrikesAttempted', $data) && $data['TotalStrikesAttempted'] !== null) {
            $object->setTotalStrikesAttempted($data['TotalStrikesAttempted']);
        }
        elseif (\array_key_exists('TotalStrikesAttempted', $data) && $data['TotalStrikesAttempted'] === null) {
            $object->setTotalStrikesAttempted(null);
        }
        if (\array_key_exists('TotalStrikesLanded', $data) && $data['TotalStrikesLanded'] !== null) {
            $object->setTotalStrikesLanded($data['TotalStrikesLanded']);
        }
        elseif (\array_key_exists('TotalStrikesLanded', $data) && $data['TotalStrikesLanded'] === null) {
            $object->setTotalStrikesLanded(null);
        }
        if (\array_key_exists('SigStrikesAttempted', $data) && $data['SigStrikesAttempted'] !== null) {
            $object->setSigStrikesAttempted($data['SigStrikesAttempted']);
        }
        elseif (\array_key_exists('SigStrikesAttempted', $data) && $data['SigStrikesAttempted'] === null) {
            $object->setSigStrikesAttempted(null);
        }
        if (\array_key_exists('SigStrikesLanded', $data) && $data['SigStrikesLanded'] !== null) {
            $object->setSigStrikesLanded($data['SigStrikesLanded']);
        }
        elseif (\array_key_exists('SigStrikesLanded', $data) && $data['SigStrikesLanded'] === null) {
            $object->setSigStrikesLanded(null);
        }
        if (\array_key_exists('TakedownsAttempted', $data) && $data['TakedownsAttempted'] !== null) {
            $object->setTakedownsAttempted($data['TakedownsAttempted']);
        }
        elseif (\array_key_exists('TakedownsAttempted', $data) && $data['TakedownsAttempted'] === null) {
            $object->setTakedownsAttempted(null);
        }
        if (\array_key_exists('TakedownsLanded', $data) && $data['TakedownsLanded'] !== null) {
            $object->setTakedownsLanded($data['TakedownsLanded']);
        }
        elseif (\array_key_exists('TakedownsLanded', $data) && $data['TakedownsLanded'] === null) {
            $object->setTakedownsLanded(null);
        }
        if (\array_key_exists('TakedownsSlams', $data) && $data['TakedownsSlams'] !== null) {
            $object->setTakedownsSlams($data['TakedownsSlams']);
        }
        elseif (\array_key_exists('TakedownsSlams', $data) && $data['TakedownsSlams'] === null) {
            $object->setTakedownsSlams(null);
        }
        if (\array_key_exists('TakedownAccuracy', $data) && $data['TakedownAccuracy'] !== null) {
            $object->setTakedownAccuracy($data['TakedownAccuracy']);
        }
        elseif (\array_key_exists('TakedownAccuracy', $data) && $data['TakedownAccuracy'] === null) {
            $object->setTakedownAccuracy(null);
        }
        if (\array_key_exists('Advances', $data) && $data['Advances'] !== null) {
            $object->setAdvances($data['Advances']);
        }
        elseif (\array_key_exists('Advances', $data) && $data['Advances'] === null) {
            $object->setAdvances(null);
        }
        if (\array_key_exists('Reversals', $data) && $data['Reversals'] !== null) {
            $object->setReversals($data['Reversals']);
        }
        elseif (\array_key_exists('Reversals', $data) && $data['Reversals'] === null) {
            $object->setReversals(null);
        }
        if (\array_key_exists('Submissions', $data) && $data['Submissions'] !== null) {
            $object->setSubmissions($data['Submissions']);
        }
        elseif (\array_key_exists('Submissions', $data) && $data['Submissions'] === null) {
            $object->setSubmissions(null);
        }
        if (\array_key_exists('SlamRate', $data) && $data['SlamRate'] !== null) {
            $object->setSlamRate($data['SlamRate']);
        }
        elseif (\array_key_exists('SlamRate', $data) && $data['SlamRate'] === null) {
            $object->setSlamRate(null);
        }
        if (\array_key_exists('TimeInControl', $data) && $data['TimeInControl'] !== null) {
            $object->setTimeInControl($data['TimeInControl']);
        }
        elseif (\array_key_exists('TimeInControl', $data) && $data['TimeInControl'] === null) {
            $object->setTimeInControl(null);
        }
        if (\array_key_exists('FirstRoundWin', $data) && $data['FirstRoundWin'] !== null) {
            $object->setFirstRoundWin($data['FirstRoundWin']);
        }
        elseif (\array_key_exists('FirstRoundWin', $data) && $data['FirstRoundWin'] === null) {
            $object->setFirstRoundWin(null);
        }
        if (\array_key_exists('SecondRoundWin', $data) && $data['SecondRoundWin'] !== null) {
            $object->setSecondRoundWin($data['SecondRoundWin']);
        }
        elseif (\array_key_exists('SecondRoundWin', $data) && $data['SecondRoundWin'] === null) {
            $object->setSecondRoundWin(null);
        }
        if (\array_key_exists('ThirdRoundWin', $data) && $data['ThirdRoundWin'] !== null) {
            $object->setThirdRoundWin($data['ThirdRoundWin']);
        }
        elseif (\array_key_exists('ThirdRoundWin', $data) && $data['ThirdRoundWin'] === null) {
            $object->setThirdRoundWin(null);
        }
        if (\array_key_exists('FourthRoundWin', $data) && $data['FourthRoundWin'] !== null) {
            $object->setFourthRoundWin($data['FourthRoundWin']);
        }
        elseif (\array_key_exists('FourthRoundWin', $data) && $data['FourthRoundWin'] === null) {
            $object->setFourthRoundWin(null);
        }
        if (\array_key_exists('FifthRoundWin', $data) && $data['FifthRoundWin'] !== null) {
            $object->setFifthRoundWin($data['FifthRoundWin']);
        }
        elseif (\array_key_exists('FifthRoundWin', $data) && $data['FifthRoundWin'] === null) {
            $object->setFifthRoundWin(null);
        }
        if (\array_key_exists('DecisionWin', $data) && $data['DecisionWin'] !== null) {
            $object->setDecisionWin($data['DecisionWin']);
        }
        elseif (\array_key_exists('DecisionWin', $data) && $data['DecisionWin'] === null) {
            $object->setDecisionWin(null);
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