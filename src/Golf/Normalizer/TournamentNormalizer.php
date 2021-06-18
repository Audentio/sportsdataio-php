<?php

namespace Sportsdata\API\Golf\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\Golf\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TournamentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Golf\\Model\\Tournament';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Golf\\Model\\Tournament';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Golf\Model\Tournament();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TournamentID', $data)) {
            $object->setTournamentID($data['TournamentID']);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
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
        if (\array_key_exists('IsOver', $data)) {
            $object->setIsOver($data['IsOver']);
        }
        if (\array_key_exists('IsInProgress', $data)) {
            $object->setIsInProgress($data['IsInProgress']);
        }
        if (\array_key_exists('Venue', $data) && $data['Venue'] !== null) {
            $object->setVenue($data['Venue']);
        }
        elseif (\array_key_exists('Venue', $data) && $data['Venue'] === null) {
            $object->setVenue(null);
        }
        if (\array_key_exists('Location', $data) && $data['Location'] !== null) {
            $object->setLocation($data['Location']);
        }
        elseif (\array_key_exists('Location', $data) && $data['Location'] === null) {
            $object->setLocation(null);
        }
        if (\array_key_exists('Par', $data) && $data['Par'] !== null) {
            $object->setPar($data['Par']);
        }
        elseif (\array_key_exists('Par', $data) && $data['Par'] === null) {
            $object->setPar(null);
        }
        if (\array_key_exists('Yards', $data) && $data['Yards'] !== null) {
            $object->setYards($data['Yards']);
        }
        elseif (\array_key_exists('Yards', $data) && $data['Yards'] === null) {
            $object->setYards(null);
        }
        if (\array_key_exists('Purse', $data) && $data['Purse'] !== null) {
            $object->setPurse($data['Purse']);
        }
        elseif (\array_key_exists('Purse', $data) && $data['Purse'] === null) {
            $object->setPurse(null);
        }
        if (\array_key_exists('StartDateTime', $data) && $data['StartDateTime'] !== null) {
            $object->setStartDateTime($data['StartDateTime']);
        }
        elseif (\array_key_exists('StartDateTime', $data) && $data['StartDateTime'] === null) {
            $object->setStartDateTime(null);
        }
        if (\array_key_exists('Canceled', $data) && $data['Canceled'] !== null) {
            $object->setCanceled($data['Canceled']);
        }
        elseif (\array_key_exists('Canceled', $data) && $data['Canceled'] === null) {
            $object->setCanceled(null);
        }
        if (\array_key_exists('Covered', $data) && $data['Covered'] !== null) {
            $object->setCovered($data['Covered']);
        }
        elseif (\array_key_exists('Covered', $data) && $data['Covered'] === null) {
            $object->setCovered(null);
        }
        if (\array_key_exists('City', $data) && $data['City'] !== null) {
            $object->setCity($data['City']);
        }
        elseif (\array_key_exists('City', $data) && $data['City'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('State', $data) && $data['State'] !== null) {
            $object->setState($data['State']);
        }
        elseif (\array_key_exists('State', $data) && $data['State'] === null) {
            $object->setState(null);
        }
        if (\array_key_exists('ZipCode', $data) && $data['ZipCode'] !== null) {
            $object->setZipCode($data['ZipCode']);
        }
        elseif (\array_key_exists('ZipCode', $data) && $data['ZipCode'] === null) {
            $object->setZipCode(null);
        }
        if (\array_key_exists('Country', $data) && $data['Country'] !== null) {
            $object->setCountry($data['Country']);
        }
        elseif (\array_key_exists('Country', $data) && $data['Country'] === null) {
            $object->setCountry(null);
        }
        if (\array_key_exists('TimeZone', $data) && $data['TimeZone'] !== null) {
            $object->setTimeZone($data['TimeZone']);
        }
        elseif (\array_key_exists('TimeZone', $data) && $data['TimeZone'] === null) {
            $object->setTimeZone(null);
        }
        if (\array_key_exists('Format', $data) && $data['Format'] !== null) {
            $object->setFormat($data['Format']);
        }
        elseif (\array_key_exists('Format', $data) && $data['Format'] === null) {
            $object->setFormat(null);
        }
        if (\array_key_exists('Rounds', $data)) {
            $values = array();
            foreach ($data['Rounds'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\Golf\\Model\\Round', 'json', $context);
            }
            $object->setRounds($values);
        }
        if (\array_key_exists('SportRadarTournamentID', $data) && $data['SportRadarTournamentID'] !== null) {
            $object->setSportRadarTournamentID($data['SportRadarTournamentID']);
        }
        elseif (\array_key_exists('SportRadarTournamentID', $data) && $data['SportRadarTournamentID'] === null) {
            $object->setSportRadarTournamentID(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTournamentID()) {
            $data['TournamentID'] = $object->getTournamentID();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getStartDate()) {
            $data['StartDate'] = $object->getStartDate();
        }
        if (null !== $object->getEndDate()) {
            $data['EndDate'] = $object->getEndDate();
        }
        if (null !== $object->getIsOver()) {
            $data['IsOver'] = $object->getIsOver();
        }
        if (null !== $object->getIsInProgress()) {
            $data['IsInProgress'] = $object->getIsInProgress();
        }
        if (null !== $object->getVenue()) {
            $data['Venue'] = $object->getVenue();
        }
        if (null !== $object->getLocation()) {
            $data['Location'] = $object->getLocation();
        }
        if (null !== $object->getPar()) {
            $data['Par'] = $object->getPar();
        }
        if (null !== $object->getYards()) {
            $data['Yards'] = $object->getYards();
        }
        if (null !== $object->getPurse()) {
            $data['Purse'] = $object->getPurse();
        }
        if (null !== $object->getStartDateTime()) {
            $data['StartDateTime'] = $object->getStartDateTime();
        }
        if (null !== $object->getCanceled()) {
            $data['Canceled'] = $object->getCanceled();
        }
        if (null !== $object->getCovered()) {
            $data['Covered'] = $object->getCovered();
        }
        if (null !== $object->getCity()) {
            $data['City'] = $object->getCity();
        }
        if (null !== $object->getState()) {
            $data['State'] = $object->getState();
        }
        if (null !== $object->getZipCode()) {
            $data['ZipCode'] = $object->getZipCode();
        }
        if (null !== $object->getCountry()) {
            $data['Country'] = $object->getCountry();
        }
        if (null !== $object->getTimeZone()) {
            $data['TimeZone'] = $object->getTimeZone();
        }
        if (null !== $object->getFormat()) {
            $data['Format'] = $object->getFormat();
        }
        if (null !== $object->getRounds()) {
            $values = array();
            foreach ($object->getRounds() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Rounds'] = $values;
        }
        if (null !== $object->getSportRadarTournamentID()) {
            $data['SportRadarTournamentID'] = $object->getSportRadarTournamentID();
        }
        return $data;
    }
}