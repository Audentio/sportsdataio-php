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
        if (\array_key_exists('FirstName', $data)) {
            $object->setFirstName($data['FirstName']);
        }
        if (\array_key_exists('LastName', $data)) {
            $object->setLastName($data['LastName']);
        }
        if (\array_key_exists('CommonName', $data)) {
            $object->setCommonName($data['CommonName']);
        }
        if (\array_key_exists('ShortName', $data)) {
            $object->setShortName($data['ShortName']);
        }
        if (\array_key_exists('Position', $data)) {
            $object->setPosition($data['Position']);
        }
        if (\array_key_exists('PositionCategory', $data)) {
            $object->setPositionCategory($data['PositionCategory']);
        }
        if (\array_key_exists('Jersey', $data)) {
            $object->setJersey($data['Jersey']);
        }
        if (\array_key_exists('Foot', $data)) {
            $object->setFoot($data['Foot']);
        }
        if (\array_key_exists('Height', $data)) {
            $object->setHeight($data['Height']);
        }
        if (\array_key_exists('Weight', $data)) {
            $object->setWeight($data['Weight']);
        }
        if (\array_key_exists('Gender', $data)) {
            $object->setGender($data['Gender']);
        }
        if (\array_key_exists('BirthDate', $data)) {
            $object->setBirthDate($data['BirthDate']);
        }
        if (\array_key_exists('BirthCity', $data)) {
            $object->setBirthCity($data['BirthCity']);
        }
        if (\array_key_exists('BirthCountry', $data)) {
            $object->setBirthCountry($data['BirthCountry']);
        }
        if (\array_key_exists('Nationality', $data)) {
            $object->setNationality($data['Nationality']);
        }
        if (\array_key_exists('InjuryStatus', $data)) {
            $object->setInjuryStatus($data['InjuryStatus']);
        }
        if (\array_key_exists('InjuryBodyPart', $data)) {
            $object->setInjuryBodyPart($data['InjuryBodyPart']);
        }
        if (\array_key_exists('InjuryNotes', $data)) {
            $object->setInjuryNotes($data['InjuryNotes']);
        }
        if (\array_key_exists('InjuryStartDate', $data)) {
            $object->setInjuryStartDate($data['InjuryStartDate']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('PhotoUrl', $data)) {
            $object->setPhotoUrl($data['PhotoUrl']);
        }
        if (\array_key_exists('RotoWirePlayerID', $data)) {
            $object->setRotoWirePlayerID($data['RotoWirePlayerID']);
        }
        if (\array_key_exists('DraftKingsPosition', $data)) {
            $object->setDraftKingsPosition($data['DraftKingsPosition']);
        }
        if (\array_key_exists('UsaTodayPlayerID', $data)) {
            $object->setUsaTodayPlayerID($data['UsaTodayPlayerID']);
        }
        if (\array_key_exists('UsaTodayHeadshotUrl', $data)) {
            $object->setUsaTodayHeadshotUrl($data['UsaTodayHeadshotUrl']);
        }
        if (\array_key_exists('UsaTodayHeadshotNoBackgroundUrl', $data)) {
            $object->setUsaTodayHeadshotNoBackgroundUrl($data['UsaTodayHeadshotNoBackgroundUrl']);
        }
        if (\array_key_exists('UsaTodayHeadshotUpdated', $data)) {
            $object->setUsaTodayHeadshotUpdated($data['UsaTodayHeadshotUpdated']);
        }
        if (\array_key_exists('UsaTodayHeadshotNoBackgroundUpdated', $data)) {
            $object->setUsaTodayHeadshotNoBackgroundUpdated($data['UsaTodayHeadshotNoBackgroundUpdated']);
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