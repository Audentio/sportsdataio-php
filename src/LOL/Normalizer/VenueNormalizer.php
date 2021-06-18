<?php

namespace Sportsdata\API\LOL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\LOL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class VenueNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\LOL\\Model\\Venue';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\LOL\\Model\\Venue';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\LOL\Model\Venue();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('VenueId', $data)) {
            $object->setVenueId($data['VenueId']);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Address', $data) && $data['Address'] !== null) {
            $object->setAddress($data['Address']);
        }
        elseif (\array_key_exists('Address', $data) && $data['Address'] === null) {
            $object->setAddress(null);
        }
        if (\array_key_exists('City', $data) && $data['City'] !== null) {
            $object->setCity($data['City']);
        }
        elseif (\array_key_exists('City', $data) && $data['City'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('Zip', $data) && $data['Zip'] !== null) {
            $object->setZip($data['Zip']);
        }
        elseif (\array_key_exists('Zip', $data) && $data['Zip'] === null) {
            $object->setZip(null);
        }
        if (\array_key_exists('Country', $data) && $data['Country'] !== null) {
            $object->setCountry($data['Country']);
        }
        elseif (\array_key_exists('Country', $data) && $data['Country'] === null) {
            $object->setCountry(null);
        }
        if (\array_key_exists('Open', $data)) {
            $object->setOpen($data['Open']);
        }
        if (\array_key_exists('Opened', $data) && $data['Opened'] !== null) {
            $object->setOpened($data['Opened']);
        }
        elseif (\array_key_exists('Opened', $data) && $data['Opened'] === null) {
            $object->setOpened(null);
        }
        if (\array_key_exists('Nickname1', $data) && $data['Nickname1'] !== null) {
            $object->setNickname1($data['Nickname1']);
        }
        elseif (\array_key_exists('Nickname1', $data) && $data['Nickname1'] === null) {
            $object->setNickname1(null);
        }
        if (\array_key_exists('Nickname2', $data) && $data['Nickname2'] !== null) {
            $object->setNickname2($data['Nickname2']);
        }
        elseif (\array_key_exists('Nickname2', $data) && $data['Nickname2'] === null) {
            $object->setNickname2(null);
        }
        if (\array_key_exists('Capacity', $data) && $data['Capacity'] !== null) {
            $object->setCapacity($data['Capacity']);
        }
        elseif (\array_key_exists('Capacity', $data) && $data['Capacity'] === null) {
            $object->setCapacity(null);
        }
        if (\array_key_exists('GeoLat', $data) && $data['GeoLat'] !== null) {
            $object->setGeoLat($data['GeoLat']);
        }
        elseif (\array_key_exists('GeoLat', $data) && $data['GeoLat'] === null) {
            $object->setGeoLat(null);
        }
        if (\array_key_exists('GeoLong', $data) && $data['GeoLong'] !== null) {
            $object->setGeoLong($data['GeoLong']);
        }
        elseif (\array_key_exists('GeoLong', $data) && $data['GeoLong'] === null) {
            $object->setGeoLong(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getVenueId()) {
            $data['VenueId'] = $object->getVenueId();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getAddress()) {
            $data['Address'] = $object->getAddress();
        }
        if (null !== $object->getCity()) {
            $data['City'] = $object->getCity();
        }
        if (null !== $object->getZip()) {
            $data['Zip'] = $object->getZip();
        }
        if (null !== $object->getCountry()) {
            $data['Country'] = $object->getCountry();
        }
        if (null !== $object->getOpen()) {
            $data['Open'] = $object->getOpen();
        }
        if (null !== $object->getOpened()) {
            $data['Opened'] = $object->getOpened();
        }
        if (null !== $object->getNickname1()) {
            $data['Nickname1'] = $object->getNickname1();
        }
        if (null !== $object->getNickname2()) {
            $data['Nickname2'] = $object->getNickname2();
        }
        if (null !== $object->getCapacity()) {
            $data['Capacity'] = $object->getCapacity();
        }
        if (null !== $object->getGeoLat()) {
            $data['GeoLat'] = $object->getGeoLat();
        }
        if (null !== $object->getGeoLong()) {
            $data['GeoLong'] = $object->getGeoLong();
        }
        return $data;
    }
}