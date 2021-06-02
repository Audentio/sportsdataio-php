<?php

namespace Sportsdata\API\CSGO\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CSGO\Runtime\Normalizer\CheckArray;
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
        return $type === 'Sportsdata\\API\\CSGO\\Model\\Team';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CSGO\\Model\\Team';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CSGO\Model\Team();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TeamId', $data)) {
            $object->setTeamId($data['TeamId']);
        }
        if (\array_key_exists('AreaId', $data)) {
            $object->setAreaId($data['AreaId']);
        }
        if (\array_key_exists('AreaName', $data)) {
            $object->setAreaName($data['AreaName']);
        }
        if (\array_key_exists('Key', $data)) {
            $object->setKey($data['Key']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('ShortName', $data)) {
            $object->setShortName($data['ShortName']);
        }
        if (\array_key_exists('Active', $data)) {
            $object->setActive($data['Active']);
        }
        if (\array_key_exists('Gender', $data)) {
            $object->setGender($data['Gender']);
        }
        if (\array_key_exists('Type', $data)) {
            $object->setType($data['Type']);
        }
        if (\array_key_exists('Website', $data)) {
            $object->setWebsite($data['Website']);
        }
        if (\array_key_exists('Email', $data)) {
            $object->setEmail($data['Email']);
        }
        if (\array_key_exists('Founded', $data)) {
            $object->setFounded($data['Founded']);
        }
        if (\array_key_exists('PrimaryColor', $data)) {
            $object->setPrimaryColor($data['PrimaryColor']);
        }
        if (\array_key_exists('SecondaryColor', $data)) {
            $object->setSecondaryColor($data['SecondaryColor']);
        }
        if (\array_key_exists('TertiaryColor', $data)) {
            $object->setTertiaryColor($data['TertiaryColor']);
        }
        if (\array_key_exists('QuaternaryColor', $data)) {
            $object->setQuaternaryColor($data['QuaternaryColor']);
        }
        if (\array_key_exists('Facebook', $data)) {
            $object->setFacebook($data['Facebook']);
        }
        if (\array_key_exists('Twitter', $data)) {
            $object->setTwitter($data['Twitter']);
        }
        if (\array_key_exists('YouTube', $data)) {
            $object->setYouTube($data['YouTube']);
        }
        if (\array_key_exists('Instagram', $data)) {
            $object->setInstagram($data['Instagram']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTeamId()) {
            $data['TeamId'] = $object->getTeamId();
        }
        if (null !== $object->getAreaId()) {
            $data['AreaId'] = $object->getAreaId();
        }
        if (null !== $object->getAreaName()) {
            $data['AreaName'] = $object->getAreaName();
        }
        if (null !== $object->getKey()) {
            $data['Key'] = $object->getKey();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getShortName()) {
            $data['ShortName'] = $object->getShortName();
        }
        if (null !== $object->getActive()) {
            $data['Active'] = $object->getActive();
        }
        if (null !== $object->getGender()) {
            $data['Gender'] = $object->getGender();
        }
        if (null !== $object->getType()) {
            $data['Type'] = $object->getType();
        }
        if (null !== $object->getWebsite()) {
            $data['Website'] = $object->getWebsite();
        }
        if (null !== $object->getEmail()) {
            $data['Email'] = $object->getEmail();
        }
        if (null !== $object->getFounded()) {
            $data['Founded'] = $object->getFounded();
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
        if (null !== $object->getFacebook()) {
            $data['Facebook'] = $object->getFacebook();
        }
        if (null !== $object->getTwitter()) {
            $data['Twitter'] = $object->getTwitter();
        }
        if (null !== $object->getYouTube()) {
            $data['YouTube'] = $object->getYouTube();
        }
        if (null !== $object->getInstagram()) {
            $data['Instagram'] = $object->getInstagram();
        }
        return $data;
    }
}