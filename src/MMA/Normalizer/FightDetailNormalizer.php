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
class FightDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\MMA\\Model\\FightDetail';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\MMA\\Model\\FightDetail';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\MMA\Model\FightDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('FightStats', $data)) {
            $values = array();
            foreach ($data['FightStats'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\MMA\\Model\\FightStat', 'json', $context);
            }
            $object->setFightStats($values);
        }
        if (\array_key_exists('FightId', $data)) {
            $object->setFightId($data['FightId']);
        }
        if (\array_key_exists('Order', $data) && $data['Order'] !== null) {
            $object->setOrder($data['Order']);
        }
        elseif (\array_key_exists('Order', $data) && $data['Order'] === null) {
            $object->setOrder(null);
        }
        if (\array_key_exists('Status', $data) && $data['Status'] !== null) {
            $object->setStatus($data['Status']);
        }
        elseif (\array_key_exists('Status', $data) && $data['Status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('WeightClass', $data) && $data['WeightClass'] !== null) {
            $object->setWeightClass($data['WeightClass']);
        }
        elseif (\array_key_exists('WeightClass', $data) && $data['WeightClass'] === null) {
            $object->setWeightClass(null);
        }
        if (\array_key_exists('CardSegment', $data) && $data['CardSegment'] !== null) {
            $object->setCardSegment($data['CardSegment']);
        }
        elseif (\array_key_exists('CardSegment', $data) && $data['CardSegment'] === null) {
            $object->setCardSegment(null);
        }
        if (\array_key_exists('Referee', $data) && $data['Referee'] !== null) {
            $object->setReferee($data['Referee']);
        }
        elseif (\array_key_exists('Referee', $data) && $data['Referee'] === null) {
            $object->setReferee(null);
        }
        if (\array_key_exists('Rounds', $data) && $data['Rounds'] !== null) {
            $object->setRounds($data['Rounds']);
        }
        elseif (\array_key_exists('Rounds', $data) && $data['Rounds'] === null) {
            $object->setRounds(null);
        }
        if (\array_key_exists('ResultClock', $data) && $data['ResultClock'] !== null) {
            $object->setResultClock($data['ResultClock']);
        }
        elseif (\array_key_exists('ResultClock', $data) && $data['ResultClock'] === null) {
            $object->setResultClock(null);
        }
        if (\array_key_exists('ResultRound', $data) && $data['ResultRound'] !== null) {
            $object->setResultRound($data['ResultRound']);
        }
        elseif (\array_key_exists('ResultRound', $data) && $data['ResultRound'] === null) {
            $object->setResultRound(null);
        }
        if (\array_key_exists('ResultType', $data) && $data['ResultType'] !== null) {
            $object->setResultType($data['ResultType']);
        }
        elseif (\array_key_exists('ResultType', $data) && $data['ResultType'] === null) {
            $object->setResultType(null);
        }
        if (\array_key_exists('WinnerId', $data) && $data['WinnerId'] !== null) {
            $object->setWinnerId($data['WinnerId']);
        }
        elseif (\array_key_exists('WinnerId', $data) && $data['WinnerId'] === null) {
            $object->setWinnerId(null);
        }
        if (\array_key_exists('Fighters', $data)) {
            $values_1 = array();
            foreach ($data['Fighters'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\MMA\\Model\\FighterInfo', 'json', $context);
            }
            $object->setFighters($values_1);
        }
        if (\array_key_exists('Active', $data) && $data['Active'] !== null) {
            $object->setActive($data['Active']);
        }
        elseif (\array_key_exists('Active', $data) && $data['Active'] === null) {
            $object->setActive(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFightStats()) {
            $values = array();
            foreach ($object->getFightStats() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['FightStats'] = $values;
        }
        if (null !== $object->getFightId()) {
            $data['FightId'] = $object->getFightId();
        }
        if (null !== $object->getOrder()) {
            $data['Order'] = $object->getOrder();
        }
        if (null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus();
        }
        if (null !== $object->getWeightClass()) {
            $data['WeightClass'] = $object->getWeightClass();
        }
        if (null !== $object->getCardSegment()) {
            $data['CardSegment'] = $object->getCardSegment();
        }
        if (null !== $object->getReferee()) {
            $data['Referee'] = $object->getReferee();
        }
        if (null !== $object->getRounds()) {
            $data['Rounds'] = $object->getRounds();
        }
        if (null !== $object->getResultClock()) {
            $data['ResultClock'] = $object->getResultClock();
        }
        if (null !== $object->getResultRound()) {
            $data['ResultRound'] = $object->getResultRound();
        }
        if (null !== $object->getResultType()) {
            $data['ResultType'] = $object->getResultType();
        }
        if (null !== $object->getWinnerId()) {
            $data['WinnerId'] = $object->getWinnerId();
        }
        if (null !== $object->getFighters()) {
            $values_1 = array();
            foreach ($object->getFighters() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Fighters'] = $values_1;
        }
        if (null !== $object->getActive()) {
            $data['Active'] = $object->getActive();
        }
        return $data;
    }
}