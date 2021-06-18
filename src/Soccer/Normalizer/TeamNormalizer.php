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
        if (\array_key_exists('AreaId', $data) && $data['AreaId'] !== null) {
            $object->setAreaId($data['AreaId']);
        }
        elseif (\array_key_exists('AreaId', $data) && $data['AreaId'] === null) {
            $object->setAreaId(null);
        }
        if (\array_key_exists('VenueId', $data) && $data['VenueId'] !== null) {
            $object->setVenueId($data['VenueId']);
        }
        elseif (\array_key_exists('VenueId', $data) && $data['VenueId'] === null) {
            $object->setVenueId(null);
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
        if (\array_key_exists('FullName', $data) && $data['FullName'] !== null) {
            $object->setFullName($data['FullName']);
        }
        elseif (\array_key_exists('FullName', $data) && $data['FullName'] === null) {
            $object->setFullName(null);
        }
        if (\array_key_exists('Active', $data)) {
            $object->setActive($data['Active']);
        }
        if (\array_key_exists('AreaName', $data) && $data['AreaName'] !== null) {
            $object->setAreaName($data['AreaName']);
        }
        elseif (\array_key_exists('AreaName', $data) && $data['AreaName'] === null) {
            $object->setAreaName(null);
        }
        if (\array_key_exists('VenueName', $data) && $data['VenueName'] !== null) {
            $object->setVenueName($data['VenueName']);
        }
        elseif (\array_key_exists('VenueName', $data) && $data['VenueName'] === null) {
            $object->setVenueName(null);
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
        if (\array_key_exists('Phone', $data) && $data['Phone'] !== null) {
            $object->setPhone($data['Phone']);
        }
        elseif (\array_key_exists('Phone', $data) && $data['Phone'] === null) {
            $object->setPhone(null);
        }
        if (\array_key_exists('Fax', $data) && $data['Fax'] !== null) {
            $object->setFax($data['Fax']);
        }
        elseif (\array_key_exists('Fax', $data) && $data['Fax'] === null) {
            $object->setFax(null);
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
        if (\array_key_exists('ClubColor1', $data) && $data['ClubColor1'] !== null) {
            $object->setClubColor1($data['ClubColor1']);
        }
        elseif (\array_key_exists('ClubColor1', $data) && $data['ClubColor1'] === null) {
            $object->setClubColor1(null);
        }
        if (\array_key_exists('ClubColor2', $data) && $data['ClubColor2'] !== null) {
            $object->setClubColor2($data['ClubColor2']);
        }
        elseif (\array_key_exists('ClubColor2', $data) && $data['ClubColor2'] === null) {
            $object->setClubColor2(null);
        }
        if (\array_key_exists('ClubColor3', $data) && $data['ClubColor3'] !== null) {
            $object->setClubColor3($data['ClubColor3']);
        }
        elseif (\array_key_exists('ClubColor3', $data) && $data['ClubColor3'] === null) {
            $object->setClubColor3(null);
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
        if (\array_key_exists('Nickname3', $data) && $data['Nickname3'] !== null) {
            $object->setNickname3($data['Nickname3']);
        }
        elseif (\array_key_exists('Nickname3', $data) && $data['Nickname3'] === null) {
            $object->setNickname3(null);
        }
        if (\array_key_exists('WikipediaLogoUrl', $data) && $data['WikipediaLogoUrl'] !== null) {
            $object->setWikipediaLogoUrl($data['WikipediaLogoUrl']);
        }
        elseif (\array_key_exists('WikipediaLogoUrl', $data) && $data['WikipediaLogoUrl'] === null) {
            $object->setWikipediaLogoUrl(null);
        }
        if (\array_key_exists('WikipediaWordMarkUrl', $data) && $data['WikipediaWordMarkUrl'] !== null) {
            $object->setWikipediaWordMarkUrl($data['WikipediaWordMarkUrl']);
        }
        elseif (\array_key_exists('WikipediaWordMarkUrl', $data) && $data['WikipediaWordMarkUrl'] === null) {
            $object->setWikipediaWordMarkUrl(null);
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