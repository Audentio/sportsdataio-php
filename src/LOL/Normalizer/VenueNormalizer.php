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
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Address', $data)) {
            $object->setAddress($data['Address']);
        }
        if (\array_key_exists('City', $data)) {
            $object->setCity($data['City']);
        }
        if (\array_key_exists('Zip', $data)) {
            $object->setZip($data['Zip']);
        }
        if (\array_key_exists('Country', $data)) {
            $object->setCountry($data['Country']);
        }
        if (\array_key_exists('Open', $data)) {
            $object->setOpen($data['Open']);
        }
        if (\array_key_exists('Opened', $data)) {
            $object->setOpened($data['Opened']);
        }
        if (\array_key_exists('Nickname1', $data)) {
            $object->setNickname1($data['Nickname1']);
        }
        if (\array_key_exists('Nickname2', $data)) {
            $object->setNickname2($data['Nickname2']);
        }
        if (\array_key_exists('Capacity', $data)) {
            $object->setCapacity($data['Capacity']);
        }
        if (\array_key_exists('GeoLat', $data)) {
            $object->setGeoLat($data['GeoLat']);
        }
        if (\array_key_exists('GeoLong', $data)) {
            $object->setGeoLong($data['GeoLong']);
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