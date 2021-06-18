<?php

namespace Sportsdata\API\Nascar\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\Nascar\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DriverNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Nascar\\Model\\Driver';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Nascar\\Model\\Driver';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Nascar\Model\Driver();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('DriverID', $data)) {
            $object->setDriverID($data['DriverID']);
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
        if (\array_key_exists('Number', $data) && $data['Number'] !== null) {
            $object->setNumber($data['Number']);
        }
        elseif (\array_key_exists('Number', $data) && $data['Number'] === null) {
            $object->setNumber(null);
        }
        if (\array_key_exists('NumberDisplay', $data) && $data['NumberDisplay'] !== null) {
            $object->setNumberDisplay($data['NumberDisplay']);
        }
        elseif (\array_key_exists('NumberDisplay', $data) && $data['NumberDisplay'] === null) {
            $object->setNumberDisplay(null);
        }
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('BirthDate', $data) && $data['BirthDate'] !== null) {
            $object->setBirthDate($data['BirthDate']);
        }
        elseif (\array_key_exists('BirthDate', $data) && $data['BirthDate'] === null) {
            $object->setBirthDate(null);
        }
        if (\array_key_exists('BirthPlace', $data) && $data['BirthPlace'] !== null) {
            $object->setBirthPlace($data['BirthPlace']);
        }
        elseif (\array_key_exists('BirthPlace', $data) && $data['BirthPlace'] === null) {
            $object->setBirthPlace(null);
        }
        if (\array_key_exists('Gender', $data) && $data['Gender'] !== null) {
            $object->setGender($data['Gender']);
        }
        elseif (\array_key_exists('Gender', $data) && $data['Gender'] === null) {
            $object->setGender(null);
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
        if (\array_key_exists('Manufacturer', $data) && $data['Manufacturer'] !== null) {
            $object->setManufacturer($data['Manufacturer']);
        }
        elseif (\array_key_exists('Manufacturer', $data) && $data['Manufacturer'] === null) {
            $object->setManufacturer(null);
        }
        if (\array_key_exists('Engine', $data) && $data['Engine'] !== null) {
            $object->setEngine($data['Engine']);
        }
        elseif (\array_key_exists('Engine', $data) && $data['Engine'] === null) {
            $object->setEngine(null);
        }
        if (\array_key_exists('Chassis', $data) && $data['Chassis'] !== null) {
            $object->setChassis($data['Chassis']);
        }
        elseif (\array_key_exists('Chassis', $data) && $data['Chassis'] === null) {
            $object->setChassis(null);
        }
        if (\array_key_exists('Sponsors', $data) && $data['Sponsors'] !== null) {
            $object->setSponsors($data['Sponsors']);
        }
        elseif (\array_key_exists('Sponsors', $data) && $data['Sponsors'] === null) {
            $object->setSponsors(null);
        }
        if (\array_key_exists('CrewChief', $data) && $data['CrewChief'] !== null) {
            $object->setCrewChief($data['CrewChief']);
        }
        elseif (\array_key_exists('CrewChief', $data) && $data['CrewChief'] === null) {
            $object->setCrewChief(null);
        }
        if (\array_key_exists('PhotoUrl', $data) && $data['PhotoUrl'] !== null) {
            $object->setPhotoUrl($data['PhotoUrl']);
        }
        elseif (\array_key_exists('PhotoUrl', $data) && $data['PhotoUrl'] === null) {
            $object->setPhotoUrl(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
            $object->setCreated($data['Created']);
        }
        elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
            $object->setCreated(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDriverID()) {
            $data['DriverID'] = $object->getDriverID();
        }
        if (null !== $object->getFirstName()) {
            $data['FirstName'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['LastName'] = $object->getLastName();
        }
        if (null !== $object->getNumber()) {
            $data['Number'] = $object->getNumber();
        }
        if (null !== $object->getNumberDisplay()) {
            $data['NumberDisplay'] = $object->getNumberDisplay();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getBirthDate()) {
            $data['BirthDate'] = $object->getBirthDate();
        }
        if (null !== $object->getBirthPlace()) {
            $data['BirthPlace'] = $object->getBirthPlace();
        }
        if (null !== $object->getGender()) {
            $data['Gender'] = $object->getGender();
        }
        if (null !== $object->getHeight()) {
            $data['Height'] = $object->getHeight();
        }
        if (null !== $object->getWeight()) {
            $data['Weight'] = $object->getWeight();
        }
        if (null !== $object->getManufacturer()) {
            $data['Manufacturer'] = $object->getManufacturer();
        }
        if (null !== $object->getEngine()) {
            $data['Engine'] = $object->getEngine();
        }
        if (null !== $object->getChassis()) {
            $data['Chassis'] = $object->getChassis();
        }
        if (null !== $object->getSponsors()) {
            $data['Sponsors'] = $object->getSponsors();
        }
        if (null !== $object->getCrewChief()) {
            $data['CrewChief'] = $object->getCrewChief();
        }
        if (null !== $object->getPhotoUrl()) {
            $data['PhotoUrl'] = $object->getPhotoUrl();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        return $data;
    }
}