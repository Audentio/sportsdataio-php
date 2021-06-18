<?php

namespace Sportsdata\API\NFL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\NFL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PlayerOwnershipNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\PlayerOwnership';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\PlayerOwnership';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\PlayerOwnership();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('Week', $data)) {
            $object->setWeek($data['Week']);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Position', $data) && $data['Position'] !== null) {
            $object->setPosition($data['Position']);
        }
        elseif (\array_key_exists('Position', $data) && $data['Position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('TeamID', $data) && $data['TeamID'] !== null) {
            $object->setTeamID($data['TeamID']);
        }
        elseif (\array_key_exists('TeamID', $data) && $data['TeamID'] === null) {
            $object->setTeamID(null);
        }
        if (\array_key_exists('OwnershipPercentage', $data) && $data['OwnershipPercentage'] !== null) {
            $object->setOwnershipPercentage($data['OwnershipPercentage']);
        }
        elseif (\array_key_exists('OwnershipPercentage', $data) && $data['OwnershipPercentage'] === null) {
            $object->setOwnershipPercentage(null);
        }
        if (\array_key_exists('DeltaOwnershipPercentage', $data) && $data['DeltaOwnershipPercentage'] !== null) {
            $object->setDeltaOwnershipPercentage($data['DeltaOwnershipPercentage']);
        }
        elseif (\array_key_exists('DeltaOwnershipPercentage', $data) && $data['DeltaOwnershipPercentage'] === null) {
            $object->setDeltaOwnershipPercentage(null);
        }
        if (\array_key_exists('StartPercentage', $data) && $data['StartPercentage'] !== null) {
            $object->setStartPercentage($data['StartPercentage']);
        }
        elseif (\array_key_exists('StartPercentage', $data) && $data['StartPercentage'] === null) {
            $object->setStartPercentage(null);
        }
        if (\array_key_exists('DeltaStartPercentage', $data) && $data['DeltaStartPercentage'] !== null) {
            $object->setDeltaStartPercentage($data['DeltaStartPercentage']);
        }
        elseif (\array_key_exists('DeltaStartPercentage', $data) && $data['DeltaStartPercentage'] === null) {
            $object->setDeltaStartPercentage(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getWeek()) {
            $data['Week'] = $object->getWeek();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getPosition()) {
            $data['Position'] = $object->getPosition();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getOwnershipPercentage()) {
            $data['OwnershipPercentage'] = $object->getOwnershipPercentage();
        }
        if (null !== $object->getDeltaOwnershipPercentage()) {
            $data['DeltaOwnershipPercentage'] = $object->getDeltaOwnershipPercentage();
        }
        if (null !== $object->getStartPercentage()) {
            $data['StartPercentage'] = $object->getStartPercentage();
        }
        if (null !== $object->getDeltaStartPercentage()) {
            $data['DeltaStartPercentage'] = $object->getDeltaStartPercentage();
        }
        return $data;
    }
}