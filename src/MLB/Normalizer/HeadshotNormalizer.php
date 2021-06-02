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
class HeadshotNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\MLB\\Model\\Headshot';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\MLB\\Model\\Headshot';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\MLB\Model\Headshot();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('Team', $data)) {
            $object->setTeam($data['Team']);
        }
        if (\array_key_exists('Position', $data)) {
            $object->setPosition($data['Position']);
        }
        if (\array_key_exists('PreferredHostedHeadshotUrl', $data)) {
            $object->setPreferredHostedHeadshotUrl($data['PreferredHostedHeadshotUrl']);
        }
        if (\array_key_exists('PreferredHostedHeadshotUpdated', $data)) {
            $object->setPreferredHostedHeadshotUpdated($data['PreferredHostedHeadshotUpdated']);
        }
        if (\array_key_exists('HostedHeadshotWithBackgroundUrl', $data)) {
            $object->setHostedHeadshotWithBackgroundUrl($data['HostedHeadshotWithBackgroundUrl']);
        }
        if (\array_key_exists('HostedHeadshotWithBackgroundUpdated', $data)) {
            $object->setHostedHeadshotWithBackgroundUpdated($data['HostedHeadshotWithBackgroundUpdated']);
        }
        if (\array_key_exists('HostedHeadshotNoBackgroundUrl', $data)) {
            $object->setHostedHeadshotNoBackgroundUrl($data['HostedHeadshotNoBackgroundUrl']);
        }
        if (\array_key_exists('HostedHeadshotNoBackgroundUpdated', $data)) {
            $object->setHostedHeadshotNoBackgroundUpdated($data['HostedHeadshotNoBackgroundUpdated']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getPosition()) {
            $data['Position'] = $object->getPosition();
        }
        if (null !== $object->getPreferredHostedHeadshotUrl()) {
            $data['PreferredHostedHeadshotUrl'] = $object->getPreferredHostedHeadshotUrl();
        }
        if (null !== $object->getPreferredHostedHeadshotUpdated()) {
            $data['PreferredHostedHeadshotUpdated'] = $object->getPreferredHostedHeadshotUpdated();
        }
        if (null !== $object->getHostedHeadshotWithBackgroundUrl()) {
            $data['HostedHeadshotWithBackgroundUrl'] = $object->getHostedHeadshotWithBackgroundUrl();
        }
        if (null !== $object->getHostedHeadshotWithBackgroundUpdated()) {
            $data['HostedHeadshotWithBackgroundUpdated'] = $object->getHostedHeadshotWithBackgroundUpdated();
        }
        if (null !== $object->getHostedHeadshotNoBackgroundUrl()) {
            $data['HostedHeadshotNoBackgroundUrl'] = $object->getHostedHeadshotNoBackgroundUrl();
        }
        if (null !== $object->getHostedHeadshotNoBackgroundUpdated()) {
            $data['HostedHeadshotNoBackgroundUpdated'] = $object->getHostedHeadshotNoBackgroundUpdated();
        }
        return $data;
    }
}