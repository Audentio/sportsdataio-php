<?php

namespace Sportsdata\API\CWBB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CWBB\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TeamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\CWBB\\Model\\Team';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CWBB\\Model\\Team';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CWBB\Model\Team();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('Key', $data) && $data['Key'] !== null) {
            $object->setKey($data['Key']);
        }
        elseif (\array_key_exists('Key', $data) && $data['Key'] === null) {
            $object->setKey(null);
        }
        if (\array_key_exists('Active', $data)) {
            $object->setActive($data['Active']);
        }
        if (\array_key_exists('School', $data) && $data['School'] !== null) {
            $object->setSchool($data['School']);
        }
        elseif (\array_key_exists('School', $data) && $data['School'] === null) {
            $object->setSchool(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('ApRank', $data) && $data['ApRank'] !== null) {
            $object->setApRank($data['ApRank']);
        }
        elseif (\array_key_exists('ApRank', $data) && $data['ApRank'] === null) {
            $object->setApRank(null);
        }
        if (\array_key_exists('Wins', $data) && $data['Wins'] !== null) {
            $object->setWins($data['Wins']);
        }
        elseif (\array_key_exists('Wins', $data) && $data['Wins'] === null) {
            $object->setWins(null);
        }
        if (\array_key_exists('Losses', $data) && $data['Losses'] !== null) {
            $object->setLosses($data['Losses']);
        }
        elseif (\array_key_exists('Losses', $data) && $data['Losses'] === null) {
            $object->setLosses(null);
        }
        if (\array_key_exists('ConferenceWins', $data) && $data['ConferenceWins'] !== null) {
            $object->setConferenceWins($data['ConferenceWins']);
        }
        elseif (\array_key_exists('ConferenceWins', $data) && $data['ConferenceWins'] === null) {
            $object->setConferenceWins(null);
        }
        if (\array_key_exists('ConferenceLosses', $data) && $data['ConferenceLosses'] !== null) {
            $object->setConferenceLosses($data['ConferenceLosses']);
        }
        elseif (\array_key_exists('ConferenceLosses', $data) && $data['ConferenceLosses'] === null) {
            $object->setConferenceLosses(null);
        }
        if (\array_key_exists('GlobalTeamID', $data)) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        if (\array_key_exists('ConferenceID', $data) && $data['ConferenceID'] !== null) {
            $object->setConferenceID($data['ConferenceID']);
        }
        elseif (\array_key_exists('ConferenceID', $data) && $data['ConferenceID'] === null) {
            $object->setConferenceID(null);
        }
        if (\array_key_exists('Conference', $data) && $data['Conference'] !== null) {
            $object->setConference($data['Conference']);
        }
        elseif (\array_key_exists('Conference', $data) && $data['Conference'] === null) {
            $object->setConference(null);
        }
        if (\array_key_exists('TeamLogoUrl', $data) && $data['TeamLogoUrl'] !== null) {
            $object->setTeamLogoUrl($data['TeamLogoUrl']);
        }
        elseif (\array_key_exists('TeamLogoUrl', $data) && $data['TeamLogoUrl'] === null) {
            $object->setTeamLogoUrl(null);
        }
        if (\array_key_exists('ShortDisplayName', $data) && $data['ShortDisplayName'] !== null) {
            $object->setShortDisplayName($data['ShortDisplayName']);
        }
        elseif (\array_key_exists('ShortDisplayName', $data) && $data['ShortDisplayName'] === null) {
            $object->setShortDisplayName(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getKey()) {
            $data['Key'] = $object->getKey();
        }
        if (null !== $object->getActive()) {
            $data['Active'] = $object->getActive();
        }
        if (null !== $object->getSchool()) {
            $data['School'] = $object->getSchool();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getApRank()) {
            $data['ApRank'] = $object->getApRank();
        }
        if (null !== $object->getWins()) {
            $data['Wins'] = $object->getWins();
        }
        if (null !== $object->getLosses()) {
            $data['Losses'] = $object->getLosses();
        }
        if (null !== $object->getConferenceWins()) {
            $data['ConferenceWins'] = $object->getConferenceWins();
        }
        if (null !== $object->getConferenceLosses()) {
            $data['ConferenceLosses'] = $object->getConferenceLosses();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        if (null !== $object->getConferenceID()) {
            $data['ConferenceID'] = $object->getConferenceID();
        }
        if (null !== $object->getConference()) {
            $data['Conference'] = $object->getConference();
        }
        if (null !== $object->getTeamLogoUrl()) {
            $data['TeamLogoUrl'] = $object->getTeamLogoUrl();
        }
        if (null !== $object->getShortDisplayName()) {
            $data['ShortDisplayName'] = $object->getShortDisplayName();
        }
        return $data;
    }
}