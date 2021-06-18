<?php

namespace Sportsdata\API\CSGO\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CSGO\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class MapNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\CSGO\\Model\\Map';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CSGO\\Model\\Map';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CSGO\Model\Map();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Number', $data) && $data['Number'] !== null) {
            $object->setNumber($data['Number']);
        }
        elseif (\array_key_exists('Number', $data) && $data['Number'] === null) {
            $object->setNumber(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Status', $data) && $data['Status'] !== null) {
            $object->setStatus($data['Status']);
        }
        elseif (\array_key_exists('Status', $data) && $data['Status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('CurrentRound', $data) && $data['CurrentRound'] !== null) {
            $object->setCurrentRound($data['CurrentRound']);
        }
        elseif (\array_key_exists('CurrentRound', $data) && $data['CurrentRound'] === null) {
            $object->setCurrentRound(null);
        }
        if (\array_key_exists('TeamAScore', $data) && $data['TeamAScore'] !== null) {
            $object->setTeamAScore($data['TeamAScore']);
        }
        elseif (\array_key_exists('TeamAScore', $data) && $data['TeamAScore'] === null) {
            $object->setTeamAScore(null);
        }
        if (\array_key_exists('TeamBScore', $data) && $data['TeamBScore'] !== null) {
            $object->setTeamBScore($data['TeamBScore']);
        }
        elseif (\array_key_exists('TeamBScore', $data) && $data['TeamBScore'] === null) {
            $object->setTeamBScore(null);
        }
        if (\array_key_exists('Leaderboards', $data)) {
            $values = array();
            foreach ($data['Leaderboards'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\CSGO\\Model\\Leaderboard', 'json', $context);
            }
            $object->setLeaderboards($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNumber()) {
            $data['Number'] = $object->getNumber();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus();
        }
        if (null !== $object->getCurrentRound()) {
            $data['CurrentRound'] = $object->getCurrentRound();
        }
        if (null !== $object->getTeamAScore()) {
            $data['TeamAScore'] = $object->getTeamAScore();
        }
        if (null !== $object->getTeamBScore()) {
            $data['TeamBScore'] = $object->getTeamBScore();
        }
        if (null !== $object->getLeaderboards()) {
            $values = array();
            foreach ($object->getLeaderboards() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Leaderboards'] = $values;
        }
        return $data;
    }
}