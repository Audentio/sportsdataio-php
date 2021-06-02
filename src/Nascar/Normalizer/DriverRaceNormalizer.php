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
class DriverRaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Nascar\\Model\\DriverRace';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Nascar\\Model\\DriverRace';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Nascar\Model\DriverRace();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('StatID', $data)) {
            $object->setStatID($data['StatID']);
        }
        if (\array_key_exists('DriverID', $data)) {
            $object->setDriverID($data['DriverID']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Number', $data)) {
            $object->setNumber($data['Number']);
        }
        if (\array_key_exists('NumberDisplay', $data)) {
            $object->setNumberDisplay($data['NumberDisplay']);
        }
        if (\array_key_exists('Manufacturer', $data)) {
            $object->setManufacturer($data['Manufacturer']);
        }
        if (\array_key_exists('DraftKingsSalary', $data)) {
            $object->setDraftKingsSalary($data['DraftKingsSalary']);
        }
        if (\array_key_exists('RaceID', $data)) {
            $object->setRaceID($data['RaceID']);
        }
        if (\array_key_exists('Day', $data)) {
            $object->setDay($data['Day']);
        }
        if (\array_key_exists('DateTime', $data)) {
            $object->setDateTime($data['DateTime']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('Created', $data)) {
            $object->setCreated($data['Created']);
        }
        if (\array_key_exists('FantasyPoints', $data)) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        if (\array_key_exists('FantasyPointsDraftKings', $data)) {
            $object->setFantasyPointsDraftKings($data['FantasyPointsDraftKings']);
        }
        if (\array_key_exists('QualifyingSpeed', $data)) {
            $object->setQualifyingSpeed($data['QualifyingSpeed']);
        }
        if (\array_key_exists('PoleFinalPosition', $data)) {
            $object->setPoleFinalPosition($data['PoleFinalPosition']);
        }
        if (\array_key_exists('StartPosition', $data)) {
            $object->setStartPosition($data['StartPosition']);
        }
        if (\array_key_exists('FinalPosition', $data)) {
            $object->setFinalPosition($data['FinalPosition']);
        }
        if (\array_key_exists('PositionDifferential', $data)) {
            $object->setPositionDifferential($data['PositionDifferential']);
        }
        if (\array_key_exists('Laps', $data)) {
            $object->setLaps($data['Laps']);
        }
        if (\array_key_exists('LapsLed', $data)) {
            $object->setLapsLed($data['LapsLed']);
        }
        if (\array_key_exists('FastestLaps', $data)) {
            $object->setFastestLaps($data['FastestLaps']);
        }
        if (\array_key_exists('Points', $data)) {
            $object->setPoints($data['Points']);
        }
        if (\array_key_exists('Bonus', $data)) {
            $object->setBonus($data['Bonus']);
        }
        if (\array_key_exists('Penalty', $data)) {
            $object->setPenalty($data['Penalty']);
        }
        if (\array_key_exists('Wins', $data)) {
            $object->setWins($data['Wins']);
        }
        if (\array_key_exists('Poles', $data)) {
            $object->setPoles($data['Poles']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getStatID()) {
            $data['StatID'] = $object->getStatID();
        }
        if (null !== $object->getDriverID()) {
            $data['DriverID'] = $object->getDriverID();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getNumber()) {
            $data['Number'] = $object->getNumber();
        }
        if (null !== $object->getNumberDisplay()) {
            $data['NumberDisplay'] = $object->getNumberDisplay();
        }
        if (null !== $object->getManufacturer()) {
            $data['Manufacturer'] = $object->getManufacturer();
        }
        if (null !== $object->getDraftKingsSalary()) {
            $data['DraftKingsSalary'] = $object->getDraftKingsSalary();
        }
        if (null !== $object->getRaceID()) {
            $data['RaceID'] = $object->getRaceID();
        }
        if (null !== $object->getDay()) {
            $data['Day'] = $object->getDay();
        }
        if (null !== $object->getDateTime()) {
            $data['DateTime'] = $object->getDateTime();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if (null !== $object->getFantasyPoints()) {
            $data['FantasyPoints'] = $object->getFantasyPoints();
        }
        if (null !== $object->getFantasyPointsDraftKings()) {
            $data['FantasyPointsDraftKings'] = $object->getFantasyPointsDraftKings();
        }
        if (null !== $object->getQualifyingSpeed()) {
            $data['QualifyingSpeed'] = $object->getQualifyingSpeed();
        }
        if (null !== $object->getPoleFinalPosition()) {
            $data['PoleFinalPosition'] = $object->getPoleFinalPosition();
        }
        if (null !== $object->getStartPosition()) {
            $data['StartPosition'] = $object->getStartPosition();
        }
        if (null !== $object->getFinalPosition()) {
            $data['FinalPosition'] = $object->getFinalPosition();
        }
        if (null !== $object->getPositionDifferential()) {
            $data['PositionDifferential'] = $object->getPositionDifferential();
        }
        if (null !== $object->getLaps()) {
            $data['Laps'] = $object->getLaps();
        }
        if (null !== $object->getLapsLed()) {
            $data['LapsLed'] = $object->getLapsLed();
        }
        if (null !== $object->getFastestLaps()) {
            $data['FastestLaps'] = $object->getFastestLaps();
        }
        if (null !== $object->getPoints()) {
            $data['Points'] = $object->getPoints();
        }
        if (null !== $object->getBonus()) {
            $data['Bonus'] = $object->getBonus();
        }
        if (null !== $object->getPenalty()) {
            $data['Penalty'] = $object->getPenalty();
        }
        if (null !== $object->getWins()) {
            $data['Wins'] = $object->getWins();
        }
        if (null !== $object->getPoles()) {
            $data['Poles'] = $object->getPoles();
        }
        return $data;
    }
}