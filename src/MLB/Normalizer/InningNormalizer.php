<?php

namespace Sportsdata\API\MLB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\MLB\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class InningNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\MLB\\Model\\Inning';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\MLB\\Model\\Inning';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\MLB\Model\Inning();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('InningID', $data)) {
            $object->setInningID($data['InningID']);
        }
        if (\array_key_exists('GameID', $data)) {
            $object->setGameID($data['GameID']);
        }
        if (\array_key_exists('InningNumber', $data)) {
            $object->setInningNumber($data['InningNumber']);
        }
        if (\array_key_exists('AwayTeamRuns', $data) && $data['AwayTeamRuns'] !== null) {
            $object->setAwayTeamRuns($data['AwayTeamRuns']);
        }
        elseif (\array_key_exists('AwayTeamRuns', $data) && $data['AwayTeamRuns'] === null) {
            $object->setAwayTeamRuns(null);
        }
        if (\array_key_exists('HomeTeamRuns', $data) && $data['HomeTeamRuns'] !== null) {
            $object->setHomeTeamRuns($data['HomeTeamRuns']);
        }
        elseif (\array_key_exists('HomeTeamRuns', $data) && $data['HomeTeamRuns'] === null) {
            $object->setHomeTeamRuns(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getInningID()) {
            $data['InningID'] = $object->getInningID();
        }
        if (null !== $object->getGameID()) {
            $data['GameID'] = $object->getGameID();
        }
        if (null !== $object->getInningNumber()) {
            $data['InningNumber'] = $object->getInningNumber();
        }
        if (null !== $object->getAwayTeamRuns()) {
            $data['AwayTeamRuns'] = $object->getAwayTeamRuns();
        }
        if (null !== $object->getHomeTeamRuns()) {
            $data['HomeTeamRuns'] = $object->getHomeTeamRuns();
        }
        return $data;
    }
}