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
class BoxScoreNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\LOL\\Model\\BoxScore';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\LOL\\Model\\BoxScore';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\LOL\Model\BoxScore();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Game', $data)) {
            $object->setGame($this->denormalizer->denormalize($data['Game'], 'Sportsdata\\API\\LOL\\Model\\Game', 'json', $context));
        }
        if (\array_key_exists('Matches', $data)) {
            $values = array();
            foreach ($data['Matches'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\LOL\\Model\\Match', 'json', $context);
            }
            $object->setMatches($values);
        }
        if (\array_key_exists('PlayerGames', $data)) {
            $values_1 = array();
            foreach ($data['PlayerGames'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\LOL\\Model\\PlayerGame', 'json', $context);
            }
            $object->setPlayerGames($values_1);
        }
        if (\array_key_exists('TeamGames', $data)) {
            $values_2 = array();
            foreach ($data['TeamGames'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Sportsdata\\API\\LOL\\Model\\TeamGame', 'json', $context);
            }
            $object->setTeamGames($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGame()) {
            $data['Game'] = $this->normalizer->normalize($object->getGame(), 'json', $context);
        }
        if (null !== $object->getMatches()) {
            $values = array();
            foreach ($object->getMatches() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Matches'] = $values;
        }
        if (null !== $object->getPlayerGames()) {
            $values_1 = array();
            foreach ($object->getPlayerGames() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['PlayerGames'] = $values_1;
        }
        if (null !== $object->getTeamGames()) {
            $values_2 = array();
            foreach ($object->getTeamGames() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['TeamGames'] = $values_2;
        }
        return $data;
    }
}