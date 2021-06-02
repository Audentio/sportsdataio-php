<?php

namespace Sportsdata\API\CFB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CFB\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\CFB\\Model\\Team';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CFB\\Model\\Team';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CFB\Model\Team();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('Key', $data)) {
            $object->setKey($data['Key']);
        }
        if (\array_key_exists('Active', $data)) {
            $object->setActive($data['Active']);
        }
        if (\array_key_exists('School', $data)) {
            $object->setSchool($data['School']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('StadiumID', $data)) {
            $object->setStadiumID($data['StadiumID']);
        }
        if (\array_key_exists('ApRank', $data)) {
            $object->setApRank($data['ApRank']);
        }
        if (\array_key_exists('Wins', $data)) {
            $object->setWins($data['Wins']);
        }
        if (\array_key_exists('Losses', $data)) {
            $object->setLosses($data['Losses']);
        }
        if (\array_key_exists('ConferenceWins', $data)) {
            $object->setConferenceWins($data['ConferenceWins']);
        }
        if (\array_key_exists('ConferenceLosses', $data)) {
            $object->setConferenceLosses($data['ConferenceLosses']);
        }
        if (\array_key_exists('GlobalTeamID', $data)) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        if (\array_key_exists('CoachesRank', $data)) {
            $object->setCoachesRank($data['CoachesRank']);
        }
        if (\array_key_exists('PlayoffRank', $data)) {
            $object->setPlayoffRank($data['PlayoffRank']);
        }
        if (\array_key_exists('TeamLogoUrl', $data)) {
            $object->setTeamLogoUrl($data['TeamLogoUrl']);
        }
        if (\array_key_exists('ConferenceID', $data)) {
            $object->setConferenceID($data['ConferenceID']);
        }
        if (\array_key_exists('Conference', $data)) {
            $object->setConference($data['Conference']);
        }
        if (\array_key_exists('ShortDisplayName', $data)) {
            $object->setShortDisplayName($data['ShortDisplayName']);
        }
        if (\array_key_exists('RankWeek', $data)) {
            $object->setRankWeek($data['RankWeek']);
        }
        if (\array_key_exists('RankSeason', $data)) {
            $object->setRankSeason($data['RankSeason']);
        }
        if (\array_key_exists('RankSeasonType', $data)) {
            $object->setRankSeasonType($data['RankSeasonType']);
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
        if (null !== $object->getStadiumID()) {
            $data['StadiumID'] = $object->getStadiumID();
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
        if (null !== $object->getCoachesRank()) {
            $data['CoachesRank'] = $object->getCoachesRank();
        }
        if (null !== $object->getPlayoffRank()) {
            $data['PlayoffRank'] = $object->getPlayoffRank();
        }
        if (null !== $object->getTeamLogoUrl()) {
            $data['TeamLogoUrl'] = $object->getTeamLogoUrl();
        }
        if (null !== $object->getConferenceID()) {
            $data['ConferenceID'] = $object->getConferenceID();
        }
        if (null !== $object->getConference()) {
            $data['Conference'] = $object->getConference();
        }
        if (null !== $object->getShortDisplayName()) {
            $data['ShortDisplayName'] = $object->getShortDisplayName();
        }
        if (null !== $object->getRankWeek()) {
            $data['RankWeek'] = $object->getRankWeek();
        }
        if (null !== $object->getRankSeason()) {
            $data['RankSeason'] = $object->getRankSeason();
        }
        if (null !== $object->getRankSeasonType()) {
            $data['RankSeasonType'] = $object->getRankSeasonType();
        }
        return $data;
    }
}