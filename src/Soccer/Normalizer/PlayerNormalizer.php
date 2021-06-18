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
class PlayerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Soccer\\Model\\Player';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Soccer\\Model\\Player';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Soccer\Model\Player();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerId', $data)) {
            $object->setPlayerId($data['PlayerId']);
        }
        if (\array_key_exists('FirstName', $data) && $data['FirstName'] !== null) {
            $object->setFirstName($data['FirstName']);
        }
        elseif (\array_key_exists('FirstName', $data) && $data['FirstName'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('LastName', $data) && $data['LastName'] !== null) {
            $object->setLastName($data['LastName']);
        }
        elseif (\array_key_exists('LastName', $data) && $data['LastName'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('CommonName', $data) && $data['CommonName'] !== null) {
            $object->setCommonName($data['CommonName']);
        }
        elseif (\array_key_exists('CommonName', $data) && $data['CommonName'] === null) {
            $object->setCommonName(null);
        }
        if (\array_key_exists('ShortName', $data) && $data['ShortName'] !== null) {
            $object->setShortName($data['ShortName']);
        }
        elseif (\array_key_exists('ShortName', $data) && $data['ShortName'] === null) {
            $object->setShortName(null);
        }
        if (\array_key_exists('Position', $data) && $data['Position'] !== null) {
            $object->setPosition($data['Position']);
        }
        elseif (\array_key_exists('Position', $data) && $data['Position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('PositionCategory', $data) && $data['PositionCategory'] !== null) {
            $object->setPositionCategory($data['PositionCategory']);
        }
        elseif (\array_key_exists('PositionCategory', $data) && $data['PositionCategory'] === null) {
            $object->setPositionCategory(null);
        }
        if (\array_key_exists('Jersey', $data) && $data['Jersey'] !== null) {
            $object->setJersey($data['Jersey']);
        }
        elseif (\array_key_exists('Jersey', $data) && $data['Jersey'] === null) {
            $object->setJersey(null);
        }
        if (\array_key_exists('Foot', $data) && $data['Foot'] !== null) {
            $object->setFoot($data['Foot']);
        }
        elseif (\array_key_exists('Foot', $data) && $data['Foot'] === null) {
            $object->setFoot(null);
        }
        if (\array_key_exists('Height', $data) && $data['Height'] !== null) {
            $object->setHeight($data['Height']);
        }
        elseif (\array_key_exists('Height', $data) && $data['Height'] === null) {
            $object->setHeight(null);
        }
        if (\array_key_exists('Weight', $data) && $data['Weight'] !== null) {
            $object->setWeight($data['Weight']);
        }
        elseif (\array_key_exists('Weight', $data) && $data['Weight'] === null) {
            $object->setWeight(null);
        }
        if (\array_key_exists('Gender', $data) && $data['Gender'] !== null) {
            $object->setGender($data['Gender']);
        }
        elseif (\array_key_exists('Gender', $data) && $data['Gender'] === null) {
            $object->setGender(null);
        }
        if (\array_key_exists('BirthDate', $data) && $data['BirthDate'] !== null) {
            $object->setBirthDate($data['BirthDate']);
        }
        elseif (\array_key_exists('BirthDate', $data) && $data['BirthDate'] === null) {
            $object->setBirthDate(null);
        }
        if (\array_key_exists('BirthCity', $data) && $data['BirthCity'] !== null) {
            $object->setBirthCity($data['BirthCity']);
        }
        elseif (\array_key_exists('BirthCity', $data) && $data['BirthCity'] === null) {
            $object->setBirthCity(null);
        }
        if (\array_key_exists('BirthCountry', $data) && $data['BirthCountry'] !== null) {
            $object->setBirthCountry($data['BirthCountry']);
        }
        elseif (\array_key_exists('BirthCountry', $data) && $data['BirthCountry'] === null) {
            $object->setBirthCountry(null);
        }
        if (\array_key_exists('Nationality', $data) && $data['Nationality'] !== null) {
            $object->setNationality($data['Nationality']);
        }
        elseif (\array_key_exists('Nationality', $data) && $data['Nationality'] === null) {
            $object->setNationality(null);
        }
        if (\array_key_exists('InjuryStatus', $data) && $data['InjuryStatus'] !== null) {
            $object->setInjuryStatus($data['InjuryStatus']);
        }
        elseif (\array_key_exists('InjuryStatus', $data) && $data['InjuryStatus'] === null) {
            $object->setInjuryStatus(null);
        }
        if (\array_key_exists('InjuryBodyPart', $data) && $data['InjuryBodyPart'] !== null) {
            $object->setInjuryBodyPart($data['InjuryBodyPart']);
        }
        elseif (\array_key_exists('InjuryBodyPart', $data) && $data['InjuryBodyPart'] === null) {
            $object->setInjuryBodyPart(null);
        }
        if (\array_key_exists('InjuryNotes', $data) && $data['InjuryNotes'] !== null) {
            $object->setInjuryNotes($data['InjuryNotes']);
        }
        elseif (\array_key_exists('InjuryNotes', $data) && $data['InjuryNotes'] === null) {
            $object->setInjuryNotes(null);
        }
        if (\array_key_exists('InjuryStartDate', $data) && $data['InjuryStartDate'] !== null) {
            $object->setInjuryStartDate($data['InjuryStartDate']);
        }
        elseif (\array_key_exists('InjuryStartDate', $data) && $data['InjuryStartDate'] === null) {
            $object->setInjuryStartDate(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('PhotoUrl', $data) && $data['PhotoUrl'] !== null) {
            $object->setPhotoUrl($data['PhotoUrl']);
        }
        elseif (\array_key_exists('PhotoUrl', $data) && $data['PhotoUrl'] === null) {
            $object->setPhotoUrl(null);
        }
        if (\array_key_exists('RotoWirePlayerID', $data) && $data['RotoWirePlayerID'] !== null) {
            $object->setRotoWirePlayerID($data['RotoWirePlayerID']);
        }
        elseif (\array_key_exists('RotoWirePlayerID', $data) && $data['RotoWirePlayerID'] === null) {
            $object->setRotoWirePlayerID(null);
        }
        if (\array_key_exists('DraftKingsPosition', $data) && $data['DraftKingsPosition'] !== null) {
            $object->setDraftKingsPosition($data['DraftKingsPosition']);
        }
        elseif (\array_key_exists('DraftKingsPosition', $data) && $data['DraftKingsPosition'] === null) {
            $object->setDraftKingsPosition(null);
        }
        if (\array_key_exists('UsaTodayPlayerID', $data) && $data['UsaTodayPlayerID'] !== null) {
            $object->setUsaTodayPlayerID($data['UsaTodayPlayerID']);
        }
        elseif (\array_key_exists('UsaTodayPlayerID', $data) && $data['UsaTodayPlayerID'] === null) {
            $object->setUsaTodayPlayerID(null);
        }
        if (\array_key_exists('UsaTodayHeadshotUrl', $data) && $data['UsaTodayHeadshotUrl'] !== null) {
            $object->setUsaTodayHeadshotUrl($data['UsaTodayHeadshotUrl']);
        }
        elseif (\array_key_exists('UsaTodayHeadshotUrl', $data) && $data['UsaTodayHeadshotUrl'] === null) {
            $object->setUsaTodayHeadshotUrl(null);
        }
        if (\array_key_exists('UsaTodayHeadshotNoBackgroundUrl', $data) && $data['UsaTodayHeadshotNoBackgroundUrl'] !== null) {
            $object->setUsaTodayHeadshotNoBackgroundUrl($data['UsaTodayHeadshotNoBackgroundUrl']);
        }
        elseif (\array_key_exists('UsaTodayHeadshotNoBackgroundUrl', $data) && $data['UsaTodayHeadshotNoBackgroundUrl'] === null) {
            $object->setUsaTodayHeadshotNoBackgroundUrl(null);
        }
        if (\array_key_exists('UsaTodayHeadshotUpdated', $data) && $data['UsaTodayHeadshotUpdated'] !== null) {
            $object->setUsaTodayHeadshotUpdated($data['UsaTodayHeadshotUpdated']);
        }
        elseif (\array_key_exists('UsaTodayHeadshotUpdated', $data) && $data['UsaTodayHeadshotUpdated'] === null) {
            $object->setUsaTodayHeadshotUpdated(null);
        }
        if (\array_key_exists('UsaTodayHeadshotNoBackgroundUpdated', $data) && $data['UsaTodayHeadshotNoBackgroundUpdated'] !== null) {
            $object->setUsaTodayHeadshotNoBackgroundUpdated($data['UsaTodayHeadshotNoBackgroundUpdated']);
        }
        elseif (\array_key_exists('UsaTodayHeadshotNoBackgroundUpdated', $data) && $data['UsaTodayHeadshotNoBackgroundUpdated'] === null) {
            $object->setUsaTodayHeadshotNoBackgroundUpdated(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayerId()) {
            $data['PlayerId'] = $object->getPlayerId();
        }
        if (null !== $object->getFirstName()) {
            $data['FirstName'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['LastName'] = $object->getLastName();
        }
        if (null !== $object->getCommonName()) {
            $data['CommonName'] = $object->getCommonName();
        }
        if (null !== $object->getShortName()) {
            $data['ShortName'] = $object->getShortName();
        }
        if (null !== $object->getPosition()) {
            $data['Position'] = $object->getPosition();
        }
        if (null !== $object->getPositionCategory()) {
            $data['PositionCategory'] = $object->getPositionCategory();
        }
        if (null !== $object->getJersey()) {
            $data['Jersey'] = $object->getJersey();
        }
        if (null !== $object->getFoot()) {
            $data['Foot'] = $object->getFoot();
        }
        if (null !== $object->getHeight()) {
            $data['Height'] = $object->getHeight();
        }
        if (null !== $object->getWeight()) {
            $data['Weight'] = $object->getWeight();
        }
        if (null !== $object->getGender()) {
            $data['Gender'] = $object->getGender();
        }
        if (null !== $object->getBirthDate()) {
            $data['BirthDate'] = $object->getBirthDate();
        }
        if (null !== $object->getBirthCity()) {
            $data['BirthCity'] = $object->getBirthCity();
        }
        if (null !== $object->getBirthCountry()) {
            $data['BirthCountry'] = $object->getBirthCountry();
        }
        if (null !== $object->getNationality()) {
            $data['Nationality'] = $object->getNationality();
        }
        if (null !== $object->getInjuryStatus()) {
            $data['InjuryStatus'] = $object->getInjuryStatus();
        }
        if (null !== $object->getInjuryBodyPart()) {
            $data['InjuryBodyPart'] = $object->getInjuryBodyPart();
        }
        if (null !== $object->getInjuryNotes()) {
            $data['InjuryNotes'] = $object->getInjuryNotes();
        }
        if (null !== $object->getInjuryStartDate()) {
            $data['InjuryStartDate'] = $object->getInjuryStartDate();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getPhotoUrl()) {
            $data['PhotoUrl'] = $object->getPhotoUrl();
        }
        if (null !== $object->getRotoWirePlayerID()) {
            $data['RotoWirePlayerID'] = $object->getRotoWirePlayerID();
        }
        if (null !== $object->getDraftKingsPosition()) {
            $data['DraftKingsPosition'] = $object->getDraftKingsPosition();
        }
        if (null !== $object->getUsaTodayPlayerID()) {
            $data['UsaTodayPlayerID'] = $object->getUsaTodayPlayerID();
        }
        if (null !== $object->getUsaTodayHeadshotUrl()) {
            $data['UsaTodayHeadshotUrl'] = $object->getUsaTodayHeadshotUrl();
        }
        if (null !== $object->getUsaTodayHeadshotNoBackgroundUrl()) {
            $data['UsaTodayHeadshotNoBackgroundUrl'] = $object->getUsaTodayHeadshotNoBackgroundUrl();
        }
        if (null !== $object->getUsaTodayHeadshotUpdated()) {
            $data['UsaTodayHeadshotUpdated'] = $object->getUsaTodayHeadshotUpdated();
        }
        if (null !== $object->getUsaTodayHeadshotNoBackgroundUpdated()) {
            $data['UsaTodayHeadshotNoBackgroundUpdated'] = $object->getUsaTodayHeadshotNoBackgroundUpdated();
        }
        return $data;
    }
}