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
class TeamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Soccer\\Model\\Team';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Soccer\\Model\\Team';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Soccer\Model\Team();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TeamId', $data)) {
            $object->setTeamId($data['TeamId']);
        }
        if (\array_key_exists('AreaId', $data)) {
            $object->setAreaId($data['AreaId']);
        }
        if (\array_key_exists('VenueId', $data)) {
            $object->setVenueId($data['VenueId']);
        }
        if (\array_key_exists('Key', $data)) {
            $object->setKey($data['Key']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('FullName', $data)) {
            $object->setFullName($data['FullName']);
        }
        if (\array_key_exists('Active', $data)) {
            $object->setActive($data['Active']);
        }
        if (\array_key_exists('AreaName', $data)) {
            $object->setAreaName($data['AreaName']);
        }
        if (\array_key_exists('VenueName', $data)) {
            $object->setVenueName($data['VenueName']);
        }
        if (\array_key_exists('Gender', $data)) {
            $object->setGender($data['Gender']);
        }
        if (\array_key_exists('Type', $data)) {
            $object->setType($data['Type']);
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
        if (\array_key_exists('Phone', $data)) {
            $object->setPhone($data['Phone']);
        }
        if (\array_key_exists('Fax', $data)) {
            $object->setFax($data['Fax']);
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
        if (\array_key_exists('ClubColor1', $data)) {
            $object->setClubColor1($data['ClubColor1']);
        }
        if (\array_key_exists('ClubColor2', $data)) {
            $object->setClubColor2($data['ClubColor2']);
        }
        if (\array_key_exists('ClubColor3', $data)) {
            $object->setClubColor3($data['ClubColor3']);
        }
        if (\array_key_exists('Nickname1', $data)) {
            $object->setNickname1($data['Nickname1']);
        }
        if (\array_key_exists('Nickname2', $data)) {
            $object->setNickname2($data['Nickname2']);
        }
        if (\array_key_exists('Nickname3', $data)) {
            $object->setNickname3($data['Nickname3']);
        }
        if (\array_key_exists('WikipediaLogoUrl', $data)) {
            $object->setWikipediaLogoUrl($data['WikipediaLogoUrl']);
        }
        if (\array_key_exists('WikipediaWordMarkUrl', $data)) {
            $object->setWikipediaWordMarkUrl($data['WikipediaWordMarkUrl']);
        }
        if (\array_key_exists('GlobalTeamId', $data)) {
            $object->setGlobalTeamId($data['GlobalTeamId']);
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
        if (null !== $object->getVenueId()) {
            $data['VenueId'] = $object->getVenueId();
        }
        if (null !== $object->getKey()) {
            $data['Key'] = $object->getKey();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getFullName()) {
            $data['FullName'] = $object->getFullName();
        }
        if (null !== $object->getActive()) {
            $data['Active'] = $object->getActive();
        }
        if (null !== $object->getAreaName()) {
            $data['AreaName'] = $object->getAreaName();
        }
        if (null !== $object->getVenueName()) {
            $data['VenueName'] = $object->getVenueName();
        }
        if (null !== $object->getGender()) {
            $data['Gender'] = $object->getGender();
        }
        if (null !== $object->getType()) {
            $data['Type'] = $object->getType();
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
        if (null !== $object->getPhone()) {
            $data['Phone'] = $object->getPhone();
        }
        if (null !== $object->getFax()) {
            $data['Fax'] = $object->getFax();
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
        if (null !== $object->getClubColor1()) {
            $data['ClubColor1'] = $object->getClubColor1();
        }
        if (null !== $object->getClubColor2()) {
            $data['ClubColor2'] = $object->getClubColor2();
        }
        if (null !== $object->getClubColor3()) {
            $data['ClubColor3'] = $object->getClubColor3();
        }
        if (null !== $object->getNickname1()) {
            $data['Nickname1'] = $object->getNickname1();
        }
        if (null !== $object->getNickname2()) {
            $data['Nickname2'] = $object->getNickname2();
        }
        if (null !== $object->getNickname3()) {
            $data['Nickname3'] = $object->getNickname3();
        }
        if (null !== $object->getWikipediaLogoUrl()) {
            $data['WikipediaLogoUrl'] = $object->getWikipediaLogoUrl();
        }
        if (null !== $object->getWikipediaWordMarkUrl()) {
            $data['WikipediaWordMarkUrl'] = $object->getWikipediaWordMarkUrl();
        }
        if (null !== $object->getGlobalTeamId()) {
            $data['GlobalTeamId'] = $object->getGlobalTeamId();
        }
        return $data;
    }
}