<?php

namespace Sportsdata\API\NBA\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\NBA\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\NBA\\Model\\BoxScore';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NBA\\Model\\BoxScore';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NBA\Model\BoxScore();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Game', $data)) {
            $object->setGame($this->denormalizer->denormalize($data['Game'], 'Sportsdata\\API\\NBA\\Model\\Game', 'json', $context));
        }
        if (\array_key_exists('Quarters', $data)) {
            $values = array();
            foreach ($data['Quarters'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\NBA\\Model\\Quarter', 'json', $context);
            }
            $object->setQuarters($values);
        }
        if (\array_key_exists('TeamGames', $data)) {
            $values_1 = array();
            foreach ($data['TeamGames'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\NBA\\Model\\TeamGame', 'json', $context);
            }
            $object->setTeamGames($values_1);
        }
        if (\array_key_exists('PlayerGames', $data)) {
            $values_2 = array();
            foreach ($data['PlayerGames'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Sportsdata\\API\\NBA\\Model\\PlayerGame', 'json', $context);
            }
            $object->setPlayerGames($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGame()) {
            $data['Game'] = $this->normalizer->normalize($object->getGame(), 'json', $context);
        }
        if (null !== $object->getQuarters()) {
            $values = array();
            foreach ($object->getQuarters() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Quarters'] = $values;
        }
        if (null !== $object->getTeamGames()) {
            $values_1 = array();
            foreach ($object->getTeamGames() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['TeamGames'] = $values_1;
        }
        if (null !== $object->getPlayerGames()) {
            $values_2 = array();
            foreach ($object->getPlayerGames() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['PlayerGames'] = $values_2;
        }
        return $data;
    }
}