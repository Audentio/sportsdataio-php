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
class PlayNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\Play';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\Play';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\Play();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayID', $data)) {
            $object->setPlayID($data['PlayID']);
        }
        if (\array_key_exists('QuarterID', $data)) {
            $object->setQuarterID($data['QuarterID']);
        }
        if (\array_key_exists('QuarterName', $data) && $data['QuarterName'] !== null) {
            $object->setQuarterName($data['QuarterName']);
        }
        elseif (\array_key_exists('QuarterName', $data) && $data['QuarterName'] === null) {
            $object->setQuarterName(null);
        }
        if (\array_key_exists('Sequence', $data) && $data['Sequence'] !== null) {
            $object->setSequence($data['Sequence']);
        }
        elseif (\array_key_exists('Sequence', $data) && $data['Sequence'] === null) {
            $object->setSequence(null);
        }
        if (\array_key_exists('TimeRemainingMinutes', $data) && $data['TimeRemainingMinutes'] !== null) {
            $object->setTimeRemainingMinutes($data['TimeRemainingMinutes']);
        }
        elseif (\array_key_exists('TimeRemainingMinutes', $data) && $data['TimeRemainingMinutes'] === null) {
            $object->setTimeRemainingMinutes(null);
        }
        if (\array_key_exists('TimeRemainingSeconds', $data) && $data['TimeRemainingSeconds'] !== null) {
            $object->setTimeRemainingSeconds($data['TimeRemainingSeconds']);
        }
        elseif (\array_key_exists('TimeRemainingSeconds', $data) && $data['TimeRemainingSeconds'] === null) {
            $object->setTimeRemainingSeconds(null);
        }
        if (\array_key_exists('PlayTime', $data) && $data['PlayTime'] !== null) {
            $object->setPlayTime($data['PlayTime']);
        }
        elseif (\array_key_exists('PlayTime', $data) && $data['PlayTime'] === null) {
            $object->setPlayTime(null);
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
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('Opponent', $data) && $data['Opponent'] !== null) {
            $object->setOpponent($data['Opponent']);
        }
        elseif (\array_key_exists('Opponent', $data) && $data['Opponent'] === null) {
            $object->setOpponent(null);
        }
        if (\array_key_exists('Down', $data) && $data['Down'] !== null) {
            $object->setDown($data['Down']);
        }
        elseif (\array_key_exists('Down', $data) && $data['Down'] === null) {
            $object->setDown(null);
        }
        if (\array_key_exists('Distance', $data) && $data['Distance'] !== null) {
            $object->setDistance($data['Distance']);
        }
        elseif (\array_key_exists('Distance', $data) && $data['Distance'] === null) {
            $object->setDistance(null);
        }
        if (\array_key_exists('YardLine', $data) && $data['YardLine'] !== null) {
            $object->setYardLine($data['YardLine']);
        }
        elseif (\array_key_exists('YardLine', $data) && $data['YardLine'] === null) {
            $object->setYardLine(null);
        }
        if (\array_key_exists('YardLineTerritory', $data) && $data['YardLineTerritory'] !== null) {
            $object->setYardLineTerritory($data['YardLineTerritory']);
        }
        elseif (\array_key_exists('YardLineTerritory', $data) && $data['YardLineTerritory'] === null) {
            $object->setYardLineTerritory(null);
        }
        if (\array_key_exists('YardsToEndZone', $data) && $data['YardsToEndZone'] !== null) {
            $object->setYardsToEndZone($data['YardsToEndZone']);
        }
        elseif (\array_key_exists('YardsToEndZone', $data) && $data['YardsToEndZone'] === null) {
            $object->setYardsToEndZone(null);
        }
        if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
            $object->setType($data['Type']);
        }
        elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('YardsGained', $data) && $data['YardsGained'] !== null) {
            $object->setYardsGained($data['YardsGained']);
        }
        elseif (\array_key_exists('YardsGained', $data) && $data['YardsGained'] === null) {
            $object->setYardsGained(null);
        }
        if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
            $object->setDescription($data['Description']);
        }
        elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('IsScoringPlay', $data) && $data['IsScoringPlay'] !== null) {
            $object->setIsScoringPlay($data['IsScoringPlay']);
        }
        elseif (\array_key_exists('IsScoringPlay', $data) && $data['IsScoringPlay'] === null) {
            $object->setIsScoringPlay(null);
        }
        if (\array_key_exists('ScoringPlay', $data)) {
            $object->setScoringPlay($this->denormalizer->denormalize($data['ScoringPlay'], 'Sportsdata\\API\\NFL\\Model\\ScoringPlay', 'json', $context));
        }
        if (\array_key_exists('PlayStats', $data)) {
            $values = array();
            foreach ($data['PlayStats'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\NFL\\Model\\PlayStat', 'json', $context);
            }
            $object->setPlayStats($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayID()) {
            $data['PlayID'] = $object->getPlayID();
        }
        if (null !== $object->getQuarterID()) {
            $data['QuarterID'] = $object->getQuarterID();
        }
        if (null !== $object->getQuarterName()) {
            $data['QuarterName'] = $object->getQuarterName();
        }
        if (null !== $object->getSequence()) {
            $data['Sequence'] = $object->getSequence();
        }
        if (null !== $object->getTimeRemainingMinutes()) {
            $data['TimeRemainingMinutes'] = $object->getTimeRemainingMinutes();
        }
        if (null !== $object->getTimeRemainingSeconds()) {
            $data['TimeRemainingSeconds'] = $object->getTimeRemainingSeconds();
        }
        if (null !== $object->getPlayTime()) {
            $data['PlayTime'] = $object->getPlayTime();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getOpponent()) {
            $data['Opponent'] = $object->getOpponent();
        }
        if (null !== $object->getDown()) {
            $data['Down'] = $object->getDown();
        }
        if (null !== $object->getDistance()) {
            $data['Distance'] = $object->getDistance();
        }
        if (null !== $object->getYardLine()) {
            $data['YardLine'] = $object->getYardLine();
        }
        if (null !== $object->getYardLineTerritory()) {
            $data['YardLineTerritory'] = $object->getYardLineTerritory();
        }
        if (null !== $object->getYardsToEndZone()) {
            $data['YardsToEndZone'] = $object->getYardsToEndZone();
        }
        if (null !== $object->getType()) {
            $data['Type'] = $object->getType();
        }
        if (null !== $object->getYardsGained()) {
            $data['YardsGained'] = $object->getYardsGained();
        }
        if (null !== $object->getDescription()) {
            $data['Description'] = $object->getDescription();
        }
        if (null !== $object->getIsScoringPlay()) {
            $data['IsScoringPlay'] = $object->getIsScoringPlay();
        }
        if (null !== $object->getScoringPlay()) {
            $data['ScoringPlay'] = $this->normalizer->normalize($object->getScoringPlay(), 'json', $context);
        }
        if (null !== $object->getPlayStats()) {
            $values = array();
            foreach ($object->getPlayStats() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['PlayStats'] = $values;
        }
        return $data;
    }
}