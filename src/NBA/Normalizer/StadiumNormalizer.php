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
class StadiumNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NBA\\Model\\Stadium';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NBA\\Model\\Stadium';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NBA\Model\Stadium();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('StadiumID', $data)) {
            $object->setStadiumID($data['StadiumID']);
        }
        if (\array_key_exists('Active', $data)) {
            $object->setActive($data['Active']);
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
        if (\array_key_exists('State', $data) && $data['State'] !== null) {
            $object->setState($data['State']);
        }
        elseif (\array_key_exists('State', $data) && $data['State'] === null) {
            $object->setState(null);
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
        if (null !== $object->getStadiumID()) {
            $data['StadiumID'] = $object->getStadiumID();
        }
        if (null !== $object->getActive()) {
            $data['Active'] = $object->getActive();
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
        if (null !== $object->getState()) {
            $data['State'] = $object->getState();
        }
        if (null !== $object->getZip()) {
            $data['Zip'] = $object->getZip();
        }
        if (null !== $object->getCountry()) {
            $data['Country'] = $object->getCountry();
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