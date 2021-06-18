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
class TeamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NBA\\Model\\Team';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NBA\\Model\\Team';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NBA\Model\Team();
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
        if (\array_key_exists('City', $data) && $data['City'] !== null) {
            $object->setCity($data['City']);
        }
        elseif (\array_key_exists('City', $data) && $data['City'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('LeagueID', $data) && $data['LeagueID'] !== null) {
            $object->setLeagueID($data['LeagueID']);
        }
        elseif (\array_key_exists('LeagueID', $data) && $data['LeagueID'] === null) {
            $object->setLeagueID(null);
        }
        if (\array_key_exists('StadiumID', $data) && $data['StadiumID'] !== null) {
            $object->setStadiumID($data['StadiumID']);
        }
        elseif (\array_key_exists('StadiumID', $data) && $data['StadiumID'] === null) {
            $object->setStadiumID(null);
        }
        if (\array_key_exists('Conference', $data) && $data['Conference'] !== null) {
            $object->setConference($data['Conference']);
        }
        elseif (\array_key_exists('Conference', $data) && $data['Conference'] === null) {
            $object->setConference(null);
        }
        if (\array_key_exists('Division', $data) && $data['Division'] !== null) {
            $object->setDivision($data['Division']);
        }
        elseif (\array_key_exists('Division', $data) && $data['Division'] === null) {
            $object->setDivision(null);
        }
        if (\array_key_exists('PrimaryColor', $data) && $data['PrimaryColor'] !== null) {
            $object->setPrimaryColor($data['PrimaryColor']);
        }
        elseif (\array_key_exists('PrimaryColor', $data) && $data['PrimaryColor'] === null) {
            $object->setPrimaryColor(null);
        }
        if (\array_key_exists('SecondaryColor', $data) && $data['SecondaryColor'] !== null) {
            $object->setSecondaryColor($data['SecondaryColor']);
        }
        elseif (\array_key_exists('SecondaryColor', $data) && $data['SecondaryColor'] === null) {
            $object->setSecondaryColor(null);
        }
        if (\array_key_exists('TertiaryColor', $data) && $data['TertiaryColor'] !== null) {
            $object->setTertiaryColor($data['TertiaryColor']);
        }
        elseif (\array_key_exists('TertiaryColor', $data) && $data['TertiaryColor'] === null) {
            $object->setTertiaryColor(null);
        }
        if (\array_key_exists('QuaternaryColor', $data) && $data['QuaternaryColor'] !== null) {
            $object->setQuaternaryColor($data['QuaternaryColor']);
        }
        elseif (\array_key_exists('QuaternaryColor', $data) && $data['QuaternaryColor'] === null) {
            $object->setQuaternaryColor(null);
        }
        if (\array_key_exists('WikipediaLogoUrl', $data) && $data['WikipediaLogoUrl'] !== null) {
            $object->setWikipediaLogoUrl($data['WikipediaLogoUrl']);
        }
        elseif (\array_key_exists('WikipediaLogoUrl', $data) && $data['WikipediaLogoUrl'] === null) {
            $object->setWikipediaLogoUrl(null);
        }
        if (\array_key_exists('WikipediaWordMarkUrl', $data) && $data['WikipediaWordMarkUrl'] !== null) {
            $object->setWikipediaWordMarkUrl($data['WikipediaWordMarkUrl']);
        }
        elseif (\array_key_exists('WikipediaWordMarkUrl', $data) && $data['WikipediaWordMarkUrl'] === null) {
            $object->setWikipediaWordMarkUrl(null);
        }
        if (\array_key_exists('GlobalTeamID', $data)) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        if (\array_key_exists('NbaDotComTeamID', $data) && $data['NbaDotComTeamID'] !== null) {
            $object->setNbaDotComTeamID($data['NbaDotComTeamID']);
        }
        elseif (\array_key_exists('NbaDotComTeamID', $data) && $data['NbaDotComTeamID'] === null) {
            $object->setNbaDotComTeamID(null);
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
        if (null !== $object->getCity()) {
            $data['City'] = $object->getCity();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getLeagueID()) {
            $data['LeagueID'] = $object->getLeagueID();
        }
        if (null !== $object->getStadiumID()) {
            $data['StadiumID'] = $object->getStadiumID();
        }
        if (null !== $object->getConference()) {
            $data['Conference'] = $object->getConference();
        }
        if (null !== $object->getDivision()) {
            $data['Division'] = $object->getDivision();
        }
        if (null !== $object->getPrimaryColor()) {
            $data['PrimaryColor'] = $object->getPrimaryColor();
        }
        if (null !== $object->getSecondaryColor()) {
            $data['SecondaryColor'] = $object->getSecondaryColor();
        }
        if (null !== $object->getTertiaryColor()) {
            $data['TertiaryColor'] = $object->getTertiaryColor();
        }
        if (null !== $object->getQuaternaryColor()) {
            $data['QuaternaryColor'] = $object->getQuaternaryColor();
        }
        if (null !== $object->getWikipediaLogoUrl()) {
            $data['WikipediaLogoUrl'] = $object->getWikipediaLogoUrl();
        }
        if (null !== $object->getWikipediaWordMarkUrl()) {
            $data['WikipediaWordMarkUrl'] = $object->getWikipediaWordMarkUrl();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        if (null !== $object->getNbaDotComTeamID()) {
            $data['NbaDotComTeamID'] = $object->getNbaDotComTeamID();
        }
        return $data;
    }
}