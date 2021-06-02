<?php

namespace Sportsdata\API\NFL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\NFL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AdvancedPlayerMedicalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\AdvancedPlayerMedical';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\AdvancedPlayerMedical';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\AdvancedPlayerMedical();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AdvancedPlayerMedicalID', $data)) {
            $object->setAdvancedPlayerMedicalID($data['AdvancedPlayerMedicalID']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('Team', $data)) {
            $object->setTeam($data['Team']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('IncidentDate', $data)) {
            $object->setIncidentDate($data['IncidentDate']);
        }
        if (\array_key_exists('InjuryDescription', $data)) {
            $object->setInjuryDescription($data['InjuryDescription']);
        }
        if (\array_key_exists('Severity', $data)) {
            $object->setSeverity($data['Severity']);
        }
        if (\array_key_exists('GamesMissed', $data)) {
            $object->setGamesMissed($data['GamesMissed']);
        }
        if (\array_key_exists('GamesOnInjuryReport', $data)) {
            $object->setGamesOnInjuryReport($data['GamesOnInjuryReport']);
        }
        if (\array_key_exists('Surgery', $data)) {
            $object->setSurgery($data['Surgery']);
        }
        if (\array_key_exists('RecoveryTimetable', $data)) {
            $object->setRecoveryTimetable($data['RecoveryTimetable']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdvancedPlayerMedicalID()) {
            $data['AdvancedPlayerMedicalID'] = $object->getAdvancedPlayerMedicalID();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getIncidentDate()) {
            $data['IncidentDate'] = $object->getIncidentDate();
        }
        if (null !== $object->getInjuryDescription()) {
            $data['InjuryDescription'] = $object->getInjuryDescription();
        }
        if (null !== $object->getSeverity()) {
            $data['Severity'] = $object->getSeverity();
        }
        if (null !== $object->getGamesMissed()) {
            $data['GamesMissed'] = $object->getGamesMissed();
        }
        if (null !== $object->getGamesOnInjuryReport()) {
            $data['GamesOnInjuryReport'] = $object->getGamesOnInjuryReport();
        }
        if (null !== $object->getSurgery()) {
            $data['Surgery'] = $object->getSurgery();
        }
        if (null !== $object->getRecoveryTimetable()) {
            $data['RecoveryTimetable'] = $object->getRecoveryTimetable();
        }
        return $data;
    }
}