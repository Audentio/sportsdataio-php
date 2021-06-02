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
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('StartDate', $data)) {
            $object->setStartDate($data['StartDate']);
        }
        if (\array_key_exists('EndDate', $data)) {
            $object->setEndDate($data['EndDate']);
        }
        if (\array_key_exists('IsOver', $data)) {
            $object->setIsOver($data['IsOver']);
        }
        if (\array_key_exists('IsInProgress', $data)) {
            $object->setIsInProgress($data['IsInProgress']);
        }
        if (\array_key_exists('Venue', $data)) {
            $object->setVenue($data['Venue']);
        }
        if (\array_key_exists('Location', $data)) {
            $object->setLocation($data['Location']);
        }
        if (\array_key_exists('Par', $data)) {
            $object->setPar($data['Par']);
        }
        if (\array_key_exists('Yards', $data)) {
            $object->setYards($data['Yards']);
        }
        if (\array_key_exists('Purse', $data)) {
            $object->setPurse($data['Purse']);
        }
        if (\array_key_exists('StartDateTime', $data)) {
            $object->setStartDateTime($data['StartDateTime']);
        }
        if (\array_key_exists('Canceled', $data)) {
            $object->setCanceled($data['Canceled']);
        }
        if (\array_key_exists('Covered', $data)) {
            $object->setCovered($data['Covered']);
        }
        if (\array_key_exists('City', $data)) {
            $object->setCity($data['City']);
        }
        if (\array_key_exists('State', $data)) {
            $object->setState($data['State']);
        }
        if (\array_key_exists('ZipCode', $data)) {
            $object->setZipCode($data['ZipCode']);
        }
        if (\array_key_exists('Country', $data)) {
            $object->setCountry($data['Country']);
        }
        if (\array_key_exists('TimeZone', $data)) {
            $object->setTimeZone($data['TimeZone']);
        }
        if (\array_key_exists('Format', $data)) {
            $object->setFormat($data['Format']);
        }
        if (\array_key_exists('Rounds', $data)) {
            $values = array();
            foreach ($data['Rounds'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\Golf\\Model\\Round', 'json', $context);
            }
            $object->setRounds($values);
        }
        if (\array_key_exists('SportRadarTournamentID', $data)) {
            $object->setSportRadarTournamentID($data['SportRadarTournamentID']);
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