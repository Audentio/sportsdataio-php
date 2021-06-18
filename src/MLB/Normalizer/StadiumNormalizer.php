<?php

namespace Sportsdata\API\MLB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\MLB\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\MLB\\Model\\Stadium';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\MLB\\Model\\Stadium';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\MLB\Model\Stadium();
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
        if (\array_key_exists('Surface', $data) && $data['Surface'] !== null) {
            $object->setSurface($data['Surface']);
        }
        elseif (\array_key_exists('Surface', $data) && $data['Surface'] === null) {
            $object->setSurface(null);
        }
        if (\array_key_exists('LeftField', $data) && $data['LeftField'] !== null) {
            $object->setLeftField($data['LeftField']);
        }
        elseif (\array_key_exists('LeftField', $data) && $data['LeftField'] === null) {
            $object->setLeftField(null);
        }
        if (\array_key_exists('MidLeftField', $data) && $data['MidLeftField'] !== null) {
            $object->setMidLeftField($data['MidLeftField']);
        }
        elseif (\array_key_exists('MidLeftField', $data) && $data['MidLeftField'] === null) {
            $object->setMidLeftField(null);
        }
        if (\array_key_exists('LeftCenterField', $data) && $data['LeftCenterField'] !== null) {
            $object->setLeftCenterField($data['LeftCenterField']);
        }
        elseif (\array_key_exists('LeftCenterField', $data) && $data['LeftCenterField'] === null) {
            $object->setLeftCenterField(null);
        }
        if (\array_key_exists('MidLeftCenterField', $data) && $data['MidLeftCenterField'] !== null) {
            $object->setMidLeftCenterField($data['MidLeftCenterField']);
        }
        elseif (\array_key_exists('MidLeftCenterField', $data) && $data['MidLeftCenterField'] === null) {
            $object->setMidLeftCenterField(null);
        }
        if (\array_key_exists('CenterField', $data) && $data['CenterField'] !== null) {
            $object->setCenterField($data['CenterField']);
        }
        elseif (\array_key_exists('CenterField', $data) && $data['CenterField'] === null) {
            $object->setCenterField(null);
        }
        if (\array_key_exists('MidRightCenterField', $data) && $data['MidRightCenterField'] !== null) {
            $object->setMidRightCenterField($data['MidRightCenterField']);
        }
        elseif (\array_key_exists('MidRightCenterField', $data) && $data['MidRightCenterField'] === null) {
            $object->setMidRightCenterField(null);
        }
        if (\array_key_exists('RightCenterField', $data) && $data['RightCenterField'] !== null) {
            $object->setRightCenterField($data['RightCenterField']);
        }
        elseif (\array_key_exists('RightCenterField', $data) && $data['RightCenterField'] === null) {
            $object->setRightCenterField(null);
        }
        if (\array_key_exists('MidRightField', $data) && $data['MidRightField'] !== null) {
            $object->setMidRightField($data['MidRightField']);
        }
        elseif (\array_key_exists('MidRightField', $data) && $data['MidRightField'] === null) {
            $object->setMidRightField(null);
        }
        if (\array_key_exists('RightField', $data) && $data['RightField'] !== null) {
            $object->setRightField($data['RightField']);
        }
        elseif (\array_key_exists('RightField', $data) && $data['RightField'] === null) {
            $object->setRightField(null);
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
        if (\array_key_exists('Altitude', $data) && $data['Altitude'] !== null) {
            $object->setAltitude($data['Altitude']);
        }
        elseif (\array_key_exists('Altitude', $data) && $data['Altitude'] === null) {
            $object->setAltitude(null);
        }
        if (\array_key_exists('HomePlateDirection', $data) && $data['HomePlateDirection'] !== null) {
            $object->setHomePlateDirection($data['HomePlateDirection']);
        }
        elseif (\array_key_exists('HomePlateDirection', $data) && $data['HomePlateDirection'] === null) {
            $object->setHomePlateDirection(null);
        }
        if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
            $object->setType($data['Type']);
        }
        elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
            $object->setType(null);
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
        if (null !== $object->getCity()) {
            $data['City'] = $object->getCity();
        }
        if (null !== $object->getState()) {
            $data['State'] = $object->getState();
        }
        if (null !== $object->getCountry()) {
            $data['Country'] = $object->getCountry();
        }
        if (null !== $object->getCapacity()) {
            $data['Capacity'] = $object->getCapacity();
        }
        if (null !== $object->getSurface()) {
            $data['Surface'] = $object->getSurface();
        }
        if (null !== $object->getLeftField()) {
            $data['LeftField'] = $object->getLeftField();
        }
        if (null !== $object->getMidLeftField()) {
            $data['MidLeftField'] = $object->getMidLeftField();
        }
        if (null !== $object->getLeftCenterField()) {
            $data['LeftCenterField'] = $object->getLeftCenterField();
        }
        if (null !== $object->getMidLeftCenterField()) {
            $data['MidLeftCenterField'] = $object->getMidLeftCenterField();
        }
        if (null !== $object->getCenterField()) {
            $data['CenterField'] = $object->getCenterField();
        }
        if (null !== $object->getMidRightCenterField()) {
            $data['MidRightCenterField'] = $object->getMidRightCenterField();
        }
        if (null !== $object->getRightCenterField()) {
            $data['RightCenterField'] = $object->getRightCenterField();
        }
        if (null !== $object->getMidRightField()) {
            $data['MidRightField'] = $object->getMidRightField();
        }
        if (null !== $object->getRightField()) {
            $data['RightField'] = $object->getRightField();
        }
        if (null !== $object->getGeoLat()) {
            $data['GeoLat'] = $object->getGeoLat();
        }
        if (null !== $object->getGeoLong()) {
            $data['GeoLong'] = $object->getGeoLong();
        }
        if (null !== $object->getAltitude()) {
            $data['Altitude'] = $object->getAltitude();
        }
        if (null !== $object->getHomePlateDirection()) {
            $data['HomePlateDirection'] = $object->getHomePlateDirection();
        }
        if (null !== $object->getType()) {
            $data['Type'] = $object->getType();
        }
        return $data;
    }
}