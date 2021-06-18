<?php

namespace Sportsdata\API\LOL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\LOL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class MatchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\LOL\\Model\\Match';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\LOL\\Model\\Match';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\LOL\Model\Match();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GameId', $data)) {
            $object->setGameId($data['GameId']);
        }
        if (\array_key_exists('Number', $data)) {
            $object->setNumber($data['Number']);
        }
        if (\array_key_exists('MapName', $data) && $data['MapName'] !== null) {
            $object->setMapName($data['MapName']);
        }
        elseif (\array_key_exists('MapName', $data) && $data['MapName'] === null) {
            $object->setMapName(null);
        }
        if (\array_key_exists('WinningTeamId', $data) && $data['WinningTeamId'] !== null) {
            $object->setWinningTeamId($data['WinningTeamId']);
        }
        elseif (\array_key_exists('WinningTeamId', $data) && $data['WinningTeamId'] === null) {
            $object->setWinningTeamId(null);
        }
        if (\array_key_exists('GameVersion', $data) && $data['GameVersion'] !== null) {
            $object->setGameVersion($data['GameVersion']);
        }
        elseif (\array_key_exists('GameVersion', $data) && $data['GameVersion'] === null) {
            $object->setGameVersion(null);
        }
        if (\array_key_exists('MatchBans', $data)) {
            $values = array();
            foreach ($data['MatchBans'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\LOL\\Model\\MatchBan', 'json', $context);
            }
            $object->setMatchBans($values);
        }
        if (\array_key_exists('PlayerMatches', $data)) {
            $values_1 = array();
            foreach ($data['PlayerMatches'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\LOL\\Model\\PlayerMatch', 'json', $context);
            }
            $object->setPlayerMatches($values_1);
        }
        if (\array_key_exists('TeamMatches', $data)) {
            $values_2 = array();
            foreach ($data['TeamMatches'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Sportsdata\\API\\LOL\\Model\\TeamMatch', 'json', $context);
            }
            $object->setTeamMatches($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGameId()) {
            $data['GameId'] = $object->getGameId();
        }
        if (null !== $object->getNumber()) {
            $data['Number'] = $object->getNumber();
        }
        if (null !== $object->getMapName()) {
            $data['MapName'] = $object->getMapName();
        }
        if (null !== $object->getWinningTeamId()) {
            $data['WinningTeamId'] = $object->getWinningTeamId();
        }
        if (null !== $object->getGameVersion()) {
            $data['GameVersion'] = $object->getGameVersion();
        }
        if (null !== $object->getMatchBans()) {
            $values = array();
            foreach ($object->getMatchBans() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['MatchBans'] = $values;
        }
        if (null !== $object->getPlayerMatches()) {
            $values_1 = array();
            foreach ($object->getPlayerMatches() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['PlayerMatches'] = $values_1;
        }
        if (null !== $object->getTeamMatches()) {
            $values_2 = array();
            foreach ($object->getTeamMatches() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['TeamMatches'] = $values_2;
        }
        return $data;
    }
}