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
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('City', $data)) {
            $object->setCity($data['City']);
        }
        if (\array_key_exists('State', $data)) {
            $object->setState($data['State']);
        }
        if (\array_key_exists('Country', $data)) {
            $object->setCountry($data['Country']);
        }
        if (\array_key_exists('Capacity', $data)) {
            $object->setCapacity($data['Capacity']);
        }
        if (\array_key_exists('Surface', $data)) {
            $object->setSurface($data['Surface']);
        }
        if (\array_key_exists('LeftField', $data)) {
            $object->setLeftField($data['LeftField']);
        }
        if (\array_key_exists('MidLeftField', $data)) {
            $object->setMidLeftField($data['MidLeftField']);
        }
        if (\array_key_exists('LeftCenterField', $data)) {
            $object->setLeftCenterField($data['LeftCenterField']);
        }
        if (\array_key_exists('MidLeftCenterField', $data)) {
            $object->setMidLeftCenterField($data['MidLeftCenterField']);
        }
        if (\array_key_exists('CenterField', $data)) {
            $object->setCenterField($data['CenterField']);
        }
        if (\array_key_exists('MidRightCenterField', $data)) {
            $object->setMidRightCenterField($data['MidRightCenterField']);
        }
        if (\array_key_exists('RightCenterField', $data)) {
            $object->setRightCenterField($data['RightCenterField']);
        }
        if (\array_key_exists('MidRightField', $data)) {
            $object->setMidRightField($data['MidRightField']);
        }
        if (\array_key_exists('RightField', $data)) {
            $object->setRightField($data['RightField']);
        }
        if (\array_key_exists('GeoLat', $data)) {
            $object->setGeoLat($data['GeoLat']);
        }
        if (\array_key_exists('GeoLong', $data)) {
            $object->setGeoLong($data['GeoLong']);
        }
        if (\array_key_exists('Altitude', $data)) {
            $object->setAltitude($data['Altitude']);
        }
        if (\array_key_exists('HomePlateDirection', $data)) {
            $object->setHomePlateDirection($data['HomePlateDirection']);
        }
        if (\array_key_exists('Type', $data)) {
            $object->setType($data['Type']);
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