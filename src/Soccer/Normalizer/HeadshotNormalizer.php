<?php

namespace Sportsdata\API\Soccer\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\Soccer\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\Soccer\\Model\\Headshot';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Soccer\\Model\\Headshot';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Soccer\Model\Headshot();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('TeamID', $data) && $data['TeamID'] !== null) {
            $object->setTeamID($data['TeamID']);
        }
        elseif (\array_key_exists('TeamID', $data) && $data['TeamID'] === null) {
            $object->setTeamID(null);
        }
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('Position', $data) && $data['Position'] !== null) {
            $object->setPosition($data['Position']);
        }
        elseif (\array_key_exists('Position', $data) && $data['Position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('PreferredHostedHeadshotUrl', $data) && $data['PreferredHostedHeadshotUrl'] !== null) {
            $object->setPreferredHostedHeadshotUrl($data['PreferredHostedHeadshotUrl']);
        }
        elseif (\array_key_exists('PreferredHostedHeadshotUrl', $data) && $data['PreferredHostedHeadshotUrl'] === null) {
            $object->setPreferredHostedHeadshotUrl(null);
        }
        if (\array_key_exists('PreferredHostedHeadshotUpdated', $data) && $data['PreferredHostedHeadshotUpdated'] !== null) {
            $object->setPreferredHostedHeadshotUpdated($data['PreferredHostedHeadshotUpdated']);
        }
        elseif (\array_key_exists('PreferredHostedHeadshotUpdated', $data) && $data['PreferredHostedHeadshotUpdated'] === null) {
            $object->setPreferredHostedHeadshotUpdated(null);
        }
        if (\array_key_exists('HostedHeadshotWithBackgroundUrl', $data) && $data['HostedHeadshotWithBackgroundUrl'] !== null) {
            $object->setHostedHeadshotWithBackgroundUrl($data['HostedHeadshotWithBackgroundUrl']);
        }
        elseif (\array_key_exists('HostedHeadshotWithBackgroundUrl', $data) && $data['HostedHeadshotWithBackgroundUrl'] === null) {
            $object->setHostedHeadshotWithBackgroundUrl(null);
        }
        if (\array_key_exists('HostedHeadshotWithBackgroundUpdated', $data) && $data['HostedHeadshotWithBackgroundUpdated'] !== null) {
            $object->setHostedHeadshotWithBackgroundUpdated($data['HostedHeadshotWithBackgroundUpdated']);
        }
        elseif (\array_key_exists('HostedHeadshotWithBackgroundUpdated', $data) && $data['HostedHeadshotWithBackgroundUpdated'] === null) {
            $object->setHostedHeadshotWithBackgroundUpdated(null);
        }
        if (\array_key_exists('HostedHeadshotNoBackgroundUrl', $data) && $data['HostedHeadshotNoBackgroundUrl'] !== null) {
            $object->setHostedHeadshotNoBackgroundUrl($data['HostedHeadshotNoBackgroundUrl']);
        }
        elseif (\array_key_exists('HostedHeadshotNoBackgroundUrl', $data) && $data['HostedHeadshotNoBackgroundUrl'] === null) {
            $object->setHostedHeadshotNoBackgroundUrl(null);
        }
        if (\array_key_exists('HostedHeadshotNoBackgroundUpdated', $data) && $data['HostedHeadshotNoBackgroundUpdated'] !== null) {
            $object->setHostedHeadshotNoBackgroundUpdated($data['HostedHeadshotNoBackgroundUpdated']);
        }
        elseif (\array_key_exists('HostedHeadshotNoBackgroundUpdated', $data) && $data['HostedHeadshotNoBackgroundUpdated'] === null) {
            $object->setHostedHeadshotNoBackgroundUpdated(null);
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