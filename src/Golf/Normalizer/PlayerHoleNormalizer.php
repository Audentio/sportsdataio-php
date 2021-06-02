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
class PlayerHoleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Golf\\Model\\PlayerHole';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Golf\\Model\\PlayerHole';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Golf\Model\PlayerHole();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerRoundID', $data)) {
            $object->setPlayerRoundID($data['PlayerRoundID']);
        }
        if (\array_key_exists('Number', $data)) {
            $object->setNumber($data['Number']);
        }
        if (\array_key_exists('Par', $data)) {
            $object->setPar($data['Par']);
        }
        if (\array_key_exists('Score', $data)) {
            $object->setScore($data['Score']);
        }
        if (\array_key_exists('ToPar', $data)) {
            $object->setToPar($data['ToPar']);
        }
        if (\array_key_exists('HoleInOne', $data)) {
            $object->setHoleInOne($data['HoleInOne']);
        }
        if (\array_key_exists('DoubleEagle', $data)) {
            $object->setDoubleEagle($data['DoubleEagle']);
        }
        if (\array_key_exists('Eagle', $data)) {
            $object->setEagle($data['Eagle']);
        }
        if (\array_key_exists('Birdie', $data)) {
            $object->setBirdie($data['Birdie']);
        }
        if (\array_key_exists('IsPar', $data)) {
            $object->setIsPar($data['IsPar']);
        }
        if (\array_key_exists('Bogey', $data)) {
            $object->setBogey($data['Bogey']);
        }
        if (\array_key_exists('DoubleBogey', $data)) {
            $object->setDoubleBogey($data['DoubleBogey']);
        }
        if (\array_key_exists('WorseThanDoubleBogey', $data)) {
            $object->setWorseThanDoubleBogey($data['WorseThanDoubleBogey']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayerRoundID()) {
            $data['PlayerRoundID'] = $object->getPlayerRoundID();
        }
        if (null !== $object->getNumber()) {
            $data['Number'] = $object->getNumber();
        }
        if (null !== $object->getPar()) {
            $data['Par'] = $object->getPar();
        }
        if (null !== $object->getScore()) {
            $data['Score'] = $object->getScore();
        }
        if (null !== $object->getToPar()) {
            $data['ToPar'] = $object->getToPar();
        }
        if (null !== $object->getHoleInOne()) {
            $data['HoleInOne'] = $object->getHoleInOne();
        }
        if (null !== $object->getDoubleEagle()) {
            $data['DoubleEagle'] = $object->getDoubleEagle();
        }
        if (null !== $object->getEagle()) {
            $data['Eagle'] = $object->getEagle();
        }
        if (null !== $object->getBirdie()) {
            $data['Birdie'] = $object->getBirdie();
        }
        if (null !== $object->getIsPar()) {
            $data['IsPar'] = $object->getIsPar();
        }
        if (null !== $object->getBogey()) {
            $data['Bogey'] = $object->getBogey();
        }
        if (null !== $object->getDoubleBogey()) {
            $data['DoubleBogey'] = $object->getDoubleBogey();
        }
        if (null !== $object->getWorseThanDoubleBogey()) {
            $data['WorseThanDoubleBogey'] = $object->getWorseThanDoubleBogey();
        }
        return $data;
    }
}