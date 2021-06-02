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
class FighterInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\MMA\\Model\\FighterInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\MMA\\Model\\FighterInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\MMA\Model\FighterInfo();
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
        if (\array_key_exists('PreFightWins', $data)) {
            $object->setPreFightWins($data['PreFightWins']);
        }
        if (\array_key_exists('PreFightLosses', $data)) {
            $object->setPreFightLosses($data['PreFightLosses']);
        }
        if (\array_key_exists('PreFightDraws', $data)) {
            $object->setPreFightDraws($data['PreFightDraws']);
        }
        if (\array_key_exists('PreFightNoContests', $data)) {
            $object->setPreFightNoContests($data['PreFightNoContests']);
        }
        if (\array_key_exists('Winner', $data)) {
            $object->setWinner($data['Winner']);
        }
        if (\array_key_exists('Moneyline', $data)) {
            $object->setMoneyline($data['Moneyline']);
        }
        if (\array_key_exists('Active', $data)) {
            $object->setActive($data['Active']);
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
        if (null !== $object->getPreFightWins()) {
            $data['PreFightWins'] = $object->getPreFightWins();
        }
        if (null !== $object->getPreFightLosses()) {
            $data['PreFightLosses'] = $object->getPreFightLosses();
        }
        if (null !== $object->getPreFightDraws()) {
            $data['PreFightDraws'] = $object->getPreFightDraws();
        }
        if (null !== $object->getPreFightNoContests()) {
            $data['PreFightNoContests'] = $object->getPreFightNoContests();
        }
        if (null !== $object->getWinner()) {
            $data['Winner'] = $object->getWinner();
        }
        if (null !== $object->getMoneyline()) {
            $data['Moneyline'] = $object->getMoneyline();
        }
        if (null !== $object->getActive()) {
            $data['Active'] = $object->getActive();
        }
        return $data;
    }
}