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
class TeamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\LOL\\Model\\Team';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\LOL\\Model\\Team';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\LOL\Model\Team();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TeamId', $data)) {
            $object->setTeamId($data['TeamId']);
        }
        if (\array_key_exists('AreaId', $data) && $data['AreaId'] !== null) {
            $object->setAreaId($data['AreaId']);
        }
        elseif (\array_key_exists('AreaId', $data) && $data['AreaId'] === null) {
            $object->setAreaId(null);
        }
        if (\array_key_exists('AreaName', $data) && $data['AreaName'] !== null) {
            $object->setAreaName($data['AreaName']);
        }
        elseif (\array_key_exists('AreaName', $data) && $data['AreaName'] === null) {
            $object->setAreaName(null);
        }
        if (\array_key_exists('Key', $data) && $data['Key'] !== null) {
            $object->setKey($data['Key']);
        }
        elseif (\array_key_exists('Key', $data) && $data['Key'] === null) {
            $object->setKey(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('ShortName', $data) && $data['ShortName'] !== null) {
            $object->setShortName($data['ShortName']);
        }
        elseif (\array_key_exists('ShortName', $data) && $data['ShortName'] === null) {
            $object->setShortName(null);
        }
        if (\array_key_exists('Active', $data)) {
            $object->setActive($data['Active']);
        }
        if (\array_key_exists('Gender', $data) && $data['Gender'] !== null) {
            $object->setGender($data['Gender']);
        }
        elseif (\array_key_exists('Gender', $data) && $data['Gender'] === null) {
            $object->setGender(null);
        }
        if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
            $object->setType($data['Type']);
        }
        elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('Website', $data) && $data['Website'] !== null) {
            $object->setWebsite($data['Website']);
        }
        elseif (\array_key_exists('Website', $data) && $data['Website'] === null) {
            $object->setWebsite(null);
        }
        if (\array_key_exists('Email', $data) && $data['Email'] !== null) {
            $object->setEmail($data['Email']);
        }
        elseif (\array_key_exists('Email', $data) && $data['Email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('Founded', $data) && $data['Founded'] !== null) {
            $object->setFounded($data['Founded']);
        }
        elseif (\array_key_exists('Founded', $data) && $data['Founded'] === null) {
            $object->setFounded(null);
        }
        if (\array_key_exists('PrimaryColor', $data) && $data['PrimaryColor'] !== null) {
            $object->setPrimaryColor($data['PrimaryColor']);
        }
        elseif (\array_key_exists('PrimaryColor', $data) && $data['PrimaryColor'] === null) {
            $object->setPrimaryColor(null);
        }
        if (\array_key_exists('SecondaryColor', $data) && $data['SecondaryColor'] !== null) {
            $object->setSecondaryColor($data['SecondaryColor']);
        }
        elseif (\array_key_exists('SecondaryColor', $data) && $data['SecondaryColor'] === null) {
            $object->setSecondaryColor(null);
        }
        if (\array_key_exists('TertiaryColor', $data) && $data['TertiaryColor'] !== null) {
            $object->setTertiaryColor($data['TertiaryColor']);
        }
        elseif (\array_key_exists('TertiaryColor', $data) && $data['TertiaryColor'] === null) {
            $object->setTertiaryColor(null);
        }
        if (\array_key_exists('QuaternaryColor', $data) && $data['QuaternaryColor'] !== null) {
            $object->setQuaternaryColor($data['QuaternaryColor']);
        }
        elseif (\array_key_exists('QuaternaryColor', $data) && $data['QuaternaryColor'] === null) {
            $object->setQuaternaryColor(null);
        }
        if (\array_key_exists('Facebook', $data) && $data['Facebook'] !== null) {
            $object->setFacebook($data['Facebook']);
        }
        elseif (\array_key_exists('Facebook', $data) && $data['Facebook'] === null) {
            $object->setFacebook(null);
        }
        if (\array_key_exists('Twitter', $data) && $data['Twitter'] !== null) {
            $object->setTwitter($data['Twitter']);
        }
        elseif (\array_key_exists('Twitter', $data) && $data['Twitter'] === null) {
            $object->setTwitter(null);
        }
        if (\array_key_exists('YouTube', $data) && $data['YouTube'] !== null) {
            $object->setYouTube($data['YouTube']);
        }
        elseif (\array_key_exists('YouTube', $data) && $data['YouTube'] === null) {
            $object->setYouTube(null);
        }
        if (\array_key_exists('Instagram', $data) && $data['Instagram'] !== null) {
            $object->setInstagram($data['Instagram']);
        }
        elseif (\array_key_exists('Instagram', $data) && $data['Instagram'] === null) {
            $object->setInstagram(null);
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