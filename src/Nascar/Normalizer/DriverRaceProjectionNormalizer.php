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
class DriverRaceProjectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Nascar\\Model\\DriverRaceProjection';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Nascar\\Model\\DriverRaceProjection';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Nascar\Model\DriverRaceProjection();
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
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Number', $data) && $data['Number'] !== null) {
            $object->setNumber($data['Number']);
        }
        elseif (\array_key_exists('Number', $data) && $data['Number'] === null) {
            $object->setNumber(null);
        }
        if (\array_key_exists('NumberDisplay', $data) && $data['NumberDisplay'] !== null) {
            $object->setNumberDisplay($data['NumberDisplay']);
        }
        elseif (\array_key_exists('NumberDisplay', $data) && $data['NumberDisplay'] === null) {
            $object->setNumberDisplay(null);
        }
        if (\array_key_exists('Manufacturer', $data) && $data['Manufacturer'] !== null) {
            $object->setManufacturer($data['Manufacturer']);
        }
        elseif (\array_key_exists('Manufacturer', $data) && $data['Manufacturer'] === null) {
            $object->setManufacturer(null);
        }
        if (\array_key_exists('DraftKingsSalary', $data) && $data['DraftKingsSalary'] !== null) {
            $object->setDraftKingsSalary($data['DraftKingsSalary']);
        }
        elseif (\array_key_exists('DraftKingsSalary', $data) && $data['DraftKingsSalary'] === null) {
            $object->setDraftKingsSalary(null);
        }
        if (\array_key_exists('RaceID', $data) && $data['RaceID'] !== null) {
            $object->setRaceID($data['RaceID']);
        }
        elseif (\array_key_exists('RaceID', $data) && $data['RaceID'] === null) {
            $object->setRaceID(null);
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
        if (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] !== null) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        elseif (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] === null) {
            $object->setFantasyPoints(null);
        }
        if (\array_key_exists('FantasyPointsDraftKings', $data) && $data['FantasyPointsDraftKings'] !== null) {
            $object->setFantasyPointsDraftKings($data['FantasyPointsDraftKings']);
        }
        elseif (\array_key_exists('FantasyPointsDraftKings', $data) && $data['FantasyPointsDraftKings'] === null) {
            $object->setFantasyPointsDraftKings(null);
        }
        if (\array_key_exists('QualifyingSpeed', $data) && $data['QualifyingSpeed'] !== null) {
            $object->setQualifyingSpeed($data['QualifyingSpeed']);
        }
        elseif (\array_key_exists('QualifyingSpeed', $data) && $data['QualifyingSpeed'] === null) {
            $object->setQualifyingSpeed(null);
        }
        if (\array_key_exists('PoleFinalPosition', $data) && $data['PoleFinalPosition'] !== null) {
            $object->setPoleFinalPosition($data['PoleFinalPosition']);
        }
        elseif (\array_key_exists('PoleFinalPosition', $data) && $data['PoleFinalPosition'] === null) {
            $object->setPoleFinalPosition(null);
        }
        if (\array_key_exists('StartPosition', $data) && $data['StartPosition'] !== null) {
            $object->setStartPosition($data['StartPosition']);
        }
        elseif (\array_key_exists('StartPosition', $data) && $data['StartPosition'] === null) {
            $object->setStartPosition(null);
        }
        if (\array_key_exists('FinalPosition', $data) && $data['FinalPosition'] !== null) {
            $object->setFinalPosition($data['FinalPosition']);
        }
        elseif (\array_key_exists('FinalPosition', $data) && $data['FinalPosition'] === null) {
            $object->setFinalPosition(null);
        }
        if (\array_key_exists('PositionDifferential', $data) && $data['PositionDifferential'] !== null) {
            $object->setPositionDifferential($data['PositionDifferential']);
        }
        elseif (\array_key_exists('PositionDifferential', $data) && $data['PositionDifferential'] === null) {
            $object->setPositionDifferential(null);
        }
        if (\array_key_exists('Laps', $data) && $data['Laps'] !== null) {
            $object->setLaps($data['Laps']);
        }
        elseif (\array_key_exists('Laps', $data) && $data['Laps'] === null) {
            $object->setLaps(null);
        }
        if (\array_key_exists('LapsLed', $data) && $data['LapsLed'] !== null) {
            $object->setLapsLed($data['LapsLed']);
        }
        elseif (\array_key_exists('LapsLed', $data) && $data['LapsLed'] === null) {
            $object->setLapsLed(null);
        }
        if (\array_key_exists('FastestLaps', $data) && $data['FastestLaps'] !== null) {
            $object->setFastestLaps($data['FastestLaps']);
        }
        elseif (\array_key_exists('FastestLaps', $data) && $data['FastestLaps'] === null) {
            $object->setFastestLaps(null);
        }
        if (\array_key_exists('Points', $data) && $data['Points'] !== null) {
            $object->setPoints($data['Points']);
        }
        elseif (\array_key_exists('Points', $data) && $data['Points'] === null) {
            $object->setPoints(null);
        }
        if (\array_key_exists('Bonus', $data) && $data['Bonus'] !== null) {
            $object->setBonus($data['Bonus']);
        }
        elseif (\array_key_exists('Bonus', $data) && $data['Bonus'] === null) {
            $object->setBonus(null);
        }
        if (\array_key_exists('Penalty', $data) && $data['Penalty'] !== null) {
            $object->setPenalty($data['Penalty']);
        }
        elseif (\array_key_exists('Penalty', $data) && $data['Penalty'] === null) {
            $object->setPenalty(null);
        }
        if (\array_key_exists('Wins', $data) && $data['Wins'] !== null) {
            $object->setWins($data['Wins']);
        }
        elseif (\array_key_exists('Wins', $data) && $data['Wins'] === null) {
            $object->setWins(null);
        }
        if (\array_key_exists('Poles', $data) && $data['Poles'] !== null) {
            $object->setPoles($data['Poles']);
        }
        elseif (\array_key_exists('Poles', $data) && $data['Poles'] === null) {
            $object->setPoles(null);
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