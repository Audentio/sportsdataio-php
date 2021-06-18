<?php

namespace Sportsdata\API\CBB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CBB\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TournamentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\CBB\\Model\\Tournament';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CBB\\Model\\Tournament';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CBB\Model\Tournament();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TournamentID', $data)) {
            $object->setTournamentID($data['TournamentID']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Location', $data) && $data['Location'] !== null) {
            $object->setLocation($data['Location']);
        }
        elseif (\array_key_exists('Location', $data) && $data['Location'] === null) {
            $object->setLocation(null);
        }
        if (\array_key_exists('Games', $data)) {
            $values = array();
            foreach ($data['Games'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\CBB\\Model\\Game', 'json', $context);
            }
            $object->setGames($values);
        }
        if (\array_key_exists('LeftTopBracketConference', $data) && $data['LeftTopBracketConference'] !== null) {
            $object->setLeftTopBracketConference($data['LeftTopBracketConference']);
        }
        elseif (\array_key_exists('LeftTopBracketConference', $data) && $data['LeftTopBracketConference'] === null) {
            $object->setLeftTopBracketConference(null);
        }
        if (\array_key_exists('LeftBottomBracketConference', $data) && $data['LeftBottomBracketConference'] !== null) {
            $object->setLeftBottomBracketConference($data['LeftBottomBracketConference']);
        }
        elseif (\array_key_exists('LeftBottomBracketConference', $data) && $data['LeftBottomBracketConference'] === null) {
            $object->setLeftBottomBracketConference(null);
        }
        if (\array_key_exists('RightTopBracketConference', $data) && $data['RightTopBracketConference'] !== null) {
            $object->setRightTopBracketConference($data['RightTopBracketConference']);
        }
        elseif (\array_key_exists('RightTopBracketConference', $data) && $data['RightTopBracketConference'] === null) {
            $object->setRightTopBracketConference(null);
        }
        if (\array_key_exists('RightBottomBracketConference', $data) && $data['RightBottomBracketConference'] !== null) {
            $object->setRightBottomBracketConference($data['RightBottomBracketConference']);
        }
        elseif (\array_key_exists('RightBottomBracketConference', $data) && $data['RightBottomBracketConference'] === null) {
            $object->setRightBottomBracketConference(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTournamentID()) {
            $data['TournamentID'] = $object->getTournamentID();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getLocation()) {
            $data['Location'] = $object->getLocation();
        }
        if (null !== $object->getGames()) {
            $values = array();
            foreach ($object->getGames() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Games'] = $values;
        }
        if (null !== $object->getLeftTopBracketConference()) {
            $data['LeftTopBracketConference'] = $object->getLeftTopBracketConference();
        }
        if (null !== $object->getLeftBottomBracketConference()) {
            $data['LeftBottomBracketConference'] = $object->getLeftBottomBracketConference();
        }
        if (null !== $object->getRightTopBracketConference()) {
            $data['RightTopBracketConference'] = $object->getRightTopBracketConference();
        }
        if (null !== $object->getRightBottomBracketConference()) {
            $data['RightBottomBracketConference'] = $object->getRightBottomBracketConference();
        }
        return $data;
    }
}