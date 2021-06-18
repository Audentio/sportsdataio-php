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
class MembershipNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\CSGO\\Model\\Membership';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CSGO\\Model\\Membership';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CSGO\Model\Membership();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('MembershipId', $data)) {
            $object->setMembershipId($data['MembershipId']);
        }
        if (\array_key_exists('TeamId', $data)) {
            $object->setTeamId($data['TeamId']);
        }
        if (\array_key_exists('PlayerId', $data)) {
            $object->setPlayerId($data['PlayerId']);
        }
        if (\array_key_exists('PlayerName', $data) && $data['PlayerName'] !== null) {
            $object->setPlayerName($data['PlayerName']);
        }
        elseif (\array_key_exists('PlayerName', $data) && $data['PlayerName'] === null) {
            $object->setPlayerName(null);
        }
        if (\array_key_exists('TeamName', $data) && $data['TeamName'] !== null) {
            $object->setTeamName($data['TeamName']);
        }
        elseif (\array_key_exists('TeamName', $data) && $data['TeamName'] === null) {
            $object->setTeamName(null);
        }
        if (\array_key_exists('TeamArea', $data) && $data['TeamArea'] !== null) {
            $object->setTeamArea($data['TeamArea']);
        }
        elseif (\array_key_exists('TeamArea', $data) && $data['TeamArea'] === null) {
            $object->setTeamArea(null);
        }
        if (\array_key_exists('Active', $data)) {
            $object->setActive($data['Active']);
        }
        if (\array_key_exists('StartDate', $data) && $data['StartDate'] !== null) {
            $object->setStartDate($data['StartDate']);
        }
        elseif (\array_key_exists('StartDate', $data) && $data['StartDate'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('EndDate', $data) && $data['EndDate'] !== null) {
            $object->setEndDate($data['EndDate']);
        }
        elseif (\array_key_exists('EndDate', $data) && $data['EndDate'] === null) {
            $object->setEndDate(null);
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
        if (null !== $object->getMembershipId()) {
            $data['MembershipId'] = $object->getMembershipId();
        }
        if (null !== $object->getTeamId()) {
            $data['TeamId'] = $object->getTeamId();
        }
        if (null !== $object->getPlayerId()) {
            $data['PlayerId'] = $object->getPlayerId();
        }
        if (null !== $object->getPlayerName()) {
            $data['PlayerName'] = $object->getPlayerName();
        }
        if (null !== $object->getTeamName()) {
            $data['TeamName'] = $object->getTeamName();
        }
        if (null !== $object->getTeamArea()) {
            $data['TeamArea'] = $object->getTeamArea();
        }
        if (null !== $object->getActive()) {
            $data['Active'] = $object->getActive();
        }
        if (null !== $object->getStartDate()) {
            $data['StartDate'] = $object->getStartDate();
        }
        if (null !== $object->getEndDate()) {
            $data['EndDate'] = $object->getEndDate();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        return $data;
    }
}