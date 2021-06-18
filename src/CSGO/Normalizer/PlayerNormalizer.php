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
class PlayerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\CSGO\\Model\\Player';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CSGO\\Model\\Player';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CSGO\Model\Player();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerId', $data)) {
            $object->setPlayerId($data['PlayerId']);
        }
        if (\array_key_exists('FirstName', $data) && $data['FirstName'] !== null) {
            $object->setFirstName($data['FirstName']);
        }
        elseif (\array_key_exists('FirstName', $data) && $data['FirstName'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('LastName', $data) && $data['LastName'] !== null) {
            $object->setLastName($data['LastName']);
        }
        elseif (\array_key_exists('LastName', $data) && $data['LastName'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('CommonName', $data) && $data['CommonName'] !== null) {
            $object->setCommonName($data['CommonName']);
        }
        elseif (\array_key_exists('CommonName', $data) && $data['CommonName'] === null) {
            $object->setCommonName(null);
        }
        if (\array_key_exists('MatchName', $data) && $data['MatchName'] !== null) {
            $object->setMatchName($data['MatchName']);
        }
        elseif (\array_key_exists('MatchName', $data) && $data['MatchName'] === null) {
            $object->setMatchName(null);
        }
        if (\array_key_exists('Position', $data) && $data['Position'] !== null) {
            $object->setPosition($data['Position']);
        }
        elseif (\array_key_exists('Position', $data) && $data['Position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('Gender', $data) && $data['Gender'] !== null) {
            $object->setGender($data['Gender']);
        }
        elseif (\array_key_exists('Gender', $data) && $data['Gender'] === null) {
            $object->setGender(null);
        }
        if (\array_key_exists('BirthDate', $data) && $data['BirthDate'] !== null) {
            $object->setBirthDate($data['BirthDate']);
        }
        elseif (\array_key_exists('BirthDate', $data) && $data['BirthDate'] === null) {
            $object->setBirthDate(null);
        }
        if (\array_key_exists('BirthCity', $data) && $data['BirthCity'] !== null) {
            $object->setBirthCity($data['BirthCity']);
        }
        elseif (\array_key_exists('BirthCity', $data) && $data['BirthCity'] === null) {
            $object->setBirthCity(null);
        }
        if (\array_key_exists('BirthCountry', $data) && $data['BirthCountry'] !== null) {
            $object->setBirthCountry($data['BirthCountry']);
        }
        elseif (\array_key_exists('BirthCountry', $data) && $data['BirthCountry'] === null) {
            $object->setBirthCountry(null);
        }
        if (\array_key_exists('Nationality', $data) && $data['Nationality'] !== null) {
            $object->setNationality($data['Nationality']);
        }
        elseif (\array_key_exists('Nationality', $data) && $data['Nationality'] === null) {
            $object->setNationality(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayerId()) {
            $data['PlayerId'] = $object->getPlayerId();
        }
        if (null !== $object->getFirstName()) {
            $data['FirstName'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['LastName'] = $object->getLastName();
        }
        if (null !== $object->getCommonName()) {
            $data['CommonName'] = $object->getCommonName();
        }
        if (null !== $object->getMatchName()) {
            $data['MatchName'] = $object->getMatchName();
        }
        if (null !== $object->getPosition()) {
            $data['Position'] = $object->getPosition();
        }
        if (null !== $object->getGender()) {
            $data['Gender'] = $object->getGender();
        }
        if (null !== $object->getBirthDate()) {
            $data['BirthDate'] = $object->getBirthDate();
        }
        if (null !== $object->getBirthCity()) {
            $data['BirthCity'] = $object->getBirthCity();
        }
        if (null !== $object->getBirthCountry()) {
            $data['BirthCountry'] = $object->getBirthCountry();
        }
        if (null !== $object->getNationality()) {
            $data['Nationality'] = $object->getNationality();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        return $data;
    }
}