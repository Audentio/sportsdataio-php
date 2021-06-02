<?php

namespace Sportsdata\API\NHL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\NHL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class StandingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NHL\\Model\\Standing';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NHL\\Model\\Standing';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NHL\Model\Standing();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('Key', $data)) {
            $object->setKey($data['Key']);
        }
        if (\array_key_exists('City', $data)) {
            $object->setCity($data['City']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Conference', $data)) {
            $object->setConference($data['Conference']);
        }
        if (\array_key_exists('Division', $data)) {
            $object->setDivision($data['Division']);
        }
        if (\array_key_exists('Wins', $data)) {
            $object->setWins($data['Wins']);
        }
        if (\array_key_exists('Losses', $data)) {
            $object->setLosses($data['Losses']);
        }
        if (\array_key_exists('OvertimeLosses', $data)) {
            $object->setOvertimeLosses($data['OvertimeLosses']);
        }
        if (\array_key_exists('Percentage', $data)) {
            $object->setPercentage($data['Percentage']);
        }
        if (\array_key_exists('ConferenceWins', $data)) {
            $object->setConferenceWins($data['ConferenceWins']);
        }
        if (\array_key_exists('ConferenceLosses', $data)) {
            $object->setConferenceLosses($data['ConferenceLosses']);
        }
        if (\array_key_exists('DivisionWins', $data)) {
            $object->setDivisionWins($data['DivisionWins']);
        }
        if (\array_key_exists('DivisionLosses', $data)) {
            $object->setDivisionLosses($data['DivisionLosses']);
        }
        if (\array_key_exists('ShutoutWins', $data)) {
            $object->setShutoutWins($data['ShutoutWins']);
        }
        if (\array_key_exists('ConferenceRank', $data)) {
            $object->setConferenceRank($data['ConferenceRank']);
        }
        if (\array_key_exists('DivisionRank', $data)) {
            $object->setDivisionRank($data['DivisionRank']);
        }
        if (\array_key_exists('GlobalTeamID', $data)) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getKey()) {
            $data['Key'] = $object->getKey();
        }
        if (null !== $object->getCity()) {
            $data['City'] = $object->getCity();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getConference()) {
            $data['Conference'] = $object->getConference();
        }
        if (null !== $object->getDivision()) {
            $data['Division'] = $object->getDivision();
        }
        if (null !== $object->getWins()) {
            $data['Wins'] = $object->getWins();
        }
        if (null !== $object->getLosses()) {
            $data['Losses'] = $object->getLosses();
        }
        if (null !== $object->getOvertimeLosses()) {
            $data['OvertimeLosses'] = $object->getOvertimeLosses();
        }
        if (null !== $object->getPercentage()) {
            $data['Percentage'] = $object->getPercentage();
        }
        if (null !== $object->getConferenceWins()) {
            $data['ConferenceWins'] = $object->getConferenceWins();
        }
        if (null !== $object->getConferenceLosses()) {
            $data['ConferenceLosses'] = $object->getConferenceLosses();
        }
        if (null !== $object->getDivisionWins()) {
            $data['DivisionWins'] = $object->getDivisionWins();
        }
        if (null !== $object->getDivisionLosses()) {
            $data['DivisionLosses'] = $object->getDivisionLosses();
        }
        if (null !== $object->getShutoutWins()) {
            $data['ShutoutWins'] = $object->getShutoutWins();
        }
        if (null !== $object->getConferenceRank()) {
            $data['ConferenceRank'] = $object->getConferenceRank();
        }
        if (null !== $object->getDivisionRank()) {
            $data['DivisionRank'] = $object->getDivisionRank();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        return $data;
    }
}