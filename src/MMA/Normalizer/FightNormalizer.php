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
class FightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\MMA\\Model\\Fight';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\MMA\\Model\\Fight';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\MMA\Model\Fight();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('FightId', $data)) {
            $object->setFightId($data['FightId']);
        }
        if (\array_key_exists('Order', $data)) {
            $object->setOrder($data['Order']);
        }
        if (\array_key_exists('Status', $data)) {
            $object->setStatus($data['Status']);
        }
        if (\array_key_exists('WeightClass', $data)) {
            $object->setWeightClass($data['WeightClass']);
        }
        if (\array_key_exists('CardSegment', $data)) {
            $object->setCardSegment($data['CardSegment']);
        }
        if (\array_key_exists('Referee', $data)) {
            $object->setReferee($data['Referee']);
        }
        if (\array_key_exists('Rounds', $data)) {
            $object->setRounds($data['Rounds']);
        }
        if (\array_key_exists('ResultClock', $data)) {
            $object->setResultClock($data['ResultClock']);
        }
        if (\array_key_exists('ResultRound', $data)) {
            $object->setResultRound($data['ResultRound']);
        }
        if (\array_key_exists('ResultType', $data)) {
            $object->setResultType($data['ResultType']);
        }
        if (\array_key_exists('WinnerId', $data)) {
            $object->setWinnerId($data['WinnerId']);
        }
        if (\array_key_exists('Fighters', $data)) {
            $values = array();
            foreach ($data['Fighters'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\MMA\\Model\\FighterInfo', 'json', $context);
            }
            $object->setFighters($values);
        }
        if (\array_key_exists('Active', $data)) {
            $object->setActive($data['Active']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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
            $values = array();
            foreach ($object->getFighters() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Fighters'] = $values;
        }
        if (null !== $object->getActive()) {
            $data['Active'] = $object->getActive();
        }
        return $data;
    }
}