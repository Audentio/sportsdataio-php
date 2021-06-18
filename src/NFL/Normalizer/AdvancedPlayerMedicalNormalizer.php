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
        if (\array_key_exists('TeamID', $data) && $data['TeamID'] !== null) {
            $object->setTeamID($data['TeamID']);
        }
        elseif (\array_key_exists('TeamID', $data) && $data['TeamID'] === null) {
            $object->setTeamID(null);
        }
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('IncidentDate', $data) && $data['IncidentDate'] !== null) {
            $object->setIncidentDate($data['IncidentDate']);
        }
        elseif (\array_key_exists('IncidentDate', $data) && $data['IncidentDate'] === null) {
            $object->setIncidentDate(null);
        }
        if (\array_key_exists('InjuryDescription', $data) && $data['InjuryDescription'] !== null) {
            $object->setInjuryDescription($data['InjuryDescription']);
        }
        elseif (\array_key_exists('InjuryDescription', $data) && $data['InjuryDescription'] === null) {
            $object->setInjuryDescription(null);
        }
        if (\array_key_exists('Severity', $data) && $data['Severity'] !== null) {
            $object->setSeverity($data['Severity']);
        }
        elseif (\array_key_exists('Severity', $data) && $data['Severity'] === null) {
            $object->setSeverity(null);
        }
        if (\array_key_exists('GamesMissed', $data) && $data['GamesMissed'] !== null) {
            $object->setGamesMissed($data['GamesMissed']);
        }
        elseif (\array_key_exists('GamesMissed', $data) && $data['GamesMissed'] === null) {
            $object->setGamesMissed(null);
        }
        if (\array_key_exists('GamesOnInjuryReport', $data) && $data['GamesOnInjuryReport'] !== null) {
            $object->setGamesOnInjuryReport($data['GamesOnInjuryReport']);
        }
        elseif (\array_key_exists('GamesOnInjuryReport', $data) && $data['GamesOnInjuryReport'] === null) {
            $object->setGamesOnInjuryReport(null);
        }
        if (\array_key_exists('Surgery', $data) && $data['Surgery'] !== null) {
            $object->setSurgery($data['Surgery']);
        }
        elseif (\array_key_exists('Surgery', $data) && $data['Surgery'] === null) {
            $object->setSurgery(null);
        }
        if (\array_key_exists('RecoveryTimetable', $data) && $data['RecoveryTimetable'] !== null) {
            $object->setRecoveryTimetable($data['RecoveryTimetable']);
        }
        elseif (\array_key_exists('RecoveryTimetable', $data) && $data['RecoveryTimetable'] === null) {
            $object->setRecoveryTimetable(null);
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