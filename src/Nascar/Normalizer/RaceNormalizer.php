<?php

namespace Sportsdata\API\Nascar\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\Nascar\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class RaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Nascar\\Model\\Race';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Nascar\\Model\\Race';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Nascar\Model\Race();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('RaceID', $data)) {
            $object->setRaceID($data['RaceID']);
        }
        if (\array_key_exists('SeriesID', $data)) {
            $object->setSeriesID($data['SeriesID']);
        }
        if (\array_key_exists('SeriesName', $data) && $data['SeriesName'] !== null) {
            $object->setSeriesName($data['SeriesName']);
        }
        elseif (\array_key_exists('SeriesName', $data) && $data['SeriesName'] === null) {
            $object->setSeriesName(null);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Day', $data) && $data['Day'] !== null) {
            $object->setDay($data['Day']);
        }
        elseif (\array_key_exists('Day', $data) && $data['Day'] === null) {
            $object->setDay(null);
        }
        if (\array_key_exists('DateTime', $data) && $data['DateTime'] !== null) {
            $object->setDateTime($data['DateTime']);
        }
        elseif (\array_key_exists('DateTime', $data) && $data['DateTime'] === null) {
            $object->setDateTime(null);
        }
        if (\array_key_exists('Track', $data) && $data['Track'] !== null) {
            $object->setTrack($data['Track']);
        }
        elseif (\array_key_exists('Track', $data) && $data['Track'] === null) {
            $object->setTrack(null);
        }
        if (\array_key_exists('Broadcast', $data) && $data['Broadcast'] !== null) {
            $object->setBroadcast($data['Broadcast']);
        }
        elseif (\array_key_exists('Broadcast', $data) && $data['Broadcast'] === null) {
            $object->setBroadcast(null);
        }
        if (\array_key_exists('WinnerID', $data) && $data['WinnerID'] !== null) {
            $object->setWinnerID($data['WinnerID']);
        }
        elseif (\array_key_exists('WinnerID', $data) && $data['WinnerID'] === null) {
            $object->setWinnerID(null);
        }
        if (\array_key_exists('PoleWinnerID', $data) && $data['PoleWinnerID'] !== null) {
            $object->setPoleWinnerID($data['PoleWinnerID']);
        }
        elseif (\array_key_exists('PoleWinnerID', $data) && $data['PoleWinnerID'] === null) {
            $object->setPoleWinnerID(null);
        }
        if (\array_key_exists('IsInProgress', $data)) {
            $object->setIsInProgress($data['IsInProgress']);
        }
        if (\array_key_exists('IsOver', $data)) {
            $object->setIsOver($data['IsOver']);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
            $object->setCreated($data['Created']);
        }
        elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
            $object->setCreated(null);
        }
        if (\array_key_exists('RescheduledDay', $data) && $data['RescheduledDay'] !== null) {
            $object->setRescheduledDay($data['RescheduledDay']);
        }
        elseif (\array_key_exists('RescheduledDay', $data) && $data['RescheduledDay'] === null) {
            $object->setRescheduledDay(null);
        }
        if (\array_key_exists('RescheduledDateTime', $data) && $data['RescheduledDateTime'] !== null) {
            $object->setRescheduledDateTime($data['RescheduledDateTime']);
        }
        elseif (\array_key_exists('RescheduledDateTime', $data) && $data['RescheduledDateTime'] === null) {
            $object->setRescheduledDateTime(null);
        }
        if (\array_key_exists('Canceled', $data)) {
            $object->setCanceled($data['Canceled']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRaceID()) {
            $data['RaceID'] = $object->getRaceID();
        }
        if (null !== $object->getSeriesID()) {
            $data['SeriesID'] = $object->getSeriesID();
        }
        if (null !== $object->getSeriesName()) {
            $data['SeriesName'] = $object->getSeriesName();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getDay()) {
            $data['Day'] = $object->getDay();
        }
        if (null !== $object->getDateTime()) {
            $data['DateTime'] = $object->getDateTime();
        }
        if (null !== $object->getTrack()) {
            $data['Track'] = $object->getTrack();
        }
        if (null !== $object->getBroadcast()) {
            $data['Broadcast'] = $object->getBroadcast();
        }
        if (null !== $object->getWinnerID()) {
            $data['WinnerID'] = $object->getWinnerID();
        }
        if (null !== $object->getPoleWinnerID()) {
            $data['PoleWinnerID'] = $object->getPoleWinnerID();
        }
        if (null !== $object->getIsInProgress()) {
            $data['IsInProgress'] = $object->getIsInProgress();
        }
        if (null !== $object->getIsOver()) {
            $data['IsOver'] = $object->getIsOver();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if (null !== $object->getRescheduledDay()) {
            $data['RescheduledDay'] = $object->getRescheduledDay();
        }
        if (null !== $object->getRescheduledDateTime()) {
            $data['RescheduledDateTime'] = $object->getRescheduledDateTime();
        }
        if (null !== $object->getCanceled()) {
            $data['Canceled'] = $object->getCanceled();
        }
        return $data;
    }
}