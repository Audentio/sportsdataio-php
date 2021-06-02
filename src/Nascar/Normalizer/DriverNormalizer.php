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
        if (\array_key_exists('FirstName', $data)) {
            $object->setFirstName($data['FirstName']);
        }
        if (\array_key_exists('LastName', $data)) {
            $object->setLastName($data['LastName']);
        }
        if (\array_key_exists('Number', $data)) {
            $object->setNumber($data['Number']);
        }
        if (\array_key_exists('NumberDisplay', $data)) {
            $object->setNumberDisplay($data['NumberDisplay']);
        }
        if (\array_key_exists('Team', $data)) {
            $object->setTeam($data['Team']);
        }
        if (\array_key_exists('BirthDate', $data)) {
            $object->setBirthDate($data['BirthDate']);
        }
        if (\array_key_exists('BirthPlace', $data)) {
            $object->setBirthPlace($data['BirthPlace']);
        }
        if (\array_key_exists('Gender', $data)) {
            $object->setGender($data['Gender']);
        }
        if (\array_key_exists('Height', $data)) {
            $object->setHeight($data['Height']);
        }
        if (\array_key_exists('Weight', $data)) {
            $object->setWeight($data['Weight']);
        }
        if (\array_key_exists('Manufacturer', $data)) {
            $object->setManufacturer($data['Manufacturer']);
        }
        if (\array_key_exists('Engine', $data)) {
            $object->setEngine($data['Engine']);
        }
        if (\array_key_exists('Chassis', $data)) {
            $object->setChassis($data['Chassis']);
        }
        if (\array_key_exists('Sponsors', $data)) {
            $object->setSponsors($data['Sponsors']);
        }
        if (\array_key_exists('CrewChief', $data)) {
            $object->setCrewChief($data['CrewChief']);
        }
        if (\array_key_exists('PhotoUrl', $data)) {
            $object->setPhotoUrl($data['PhotoUrl']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('Created', $data)) {
            $object->setCreated($data['Created']);
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