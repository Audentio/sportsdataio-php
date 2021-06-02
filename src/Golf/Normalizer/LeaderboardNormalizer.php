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
class LeaderboardNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Golf\\Model\\Leaderboard';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Golf\\Model\\Leaderboard';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Golf\Model\Leaderboard();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Tournament', $data)) {
            $object->setTournament($this->denormalizer->denormalize($data['Tournament'], 'Sportsdata\\API\\Golf\\Model\\Tournament', 'json', $context));
        }
        if (\array_key_exists('Players', $data)) {
            $values = array();
            foreach ($data['Players'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\Golf\\Model\\PlayerTournament', 'json', $context);
            }
            $object->setPlayers($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTournament()) {
            $data['Tournament'] = $this->normalizer->normalize($object->getTournament(), 'json', $context);
        }
        if (null !== $object->getPlayers()) {
            $values = array();
            foreach ($object->getPlayers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Players'] = $values;
        }
        return $data;
    }
}