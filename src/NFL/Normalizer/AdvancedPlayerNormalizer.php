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
class AdvancedPlayerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\AdvancedPlayer';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\AdvancedPlayer';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\AdvancedPlayer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
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
        if (\array_key_exists('Position', $data) && $data['Position'] !== null) {
            $object->setPosition($data['Position']);
        }
        elseif (\array_key_exists('Position', $data) && $data['Position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('FantasyPosition', $data) && $data['FantasyPosition'] !== null) {
            $object->setFantasyPosition($data['FantasyPosition']);
        }
        elseif (\array_key_exists('FantasyPosition', $data) && $data['FantasyPosition'] === null) {
            $object->setFantasyPosition(null);
        }
        if (\array_key_exists('PositionGroup', $data) && $data['PositionGroup'] !== null) {
            $object->setPositionGroup($data['PositionGroup']);
        }
        elseif (\array_key_exists('PositionGroup', $data) && $data['PositionGroup'] === null) {
            $object->setPositionGroup(null);
        }
        if (\array_key_exists('BMI', $data) && $data['BMI'] !== null) {
            $object->setBMI($data['BMI']);
        }
        elseif (\array_key_exists('BMI', $data) && $data['BMI'] === null) {
            $object->setBMI(null);
        }
        if (\array_key_exists('BMIRank', $data) && $data['BMIRank'] !== null) {
            $object->setBMIRank($data['BMIRank']);
        }
        elseif (\array_key_exists('BMIRank', $data) && $data['BMIRank'] === null) {
            $object->setBMIRank(null);
        }
        if (\array_key_exists('HandSize', $data) && $data['HandSize'] !== null) {
            $object->setHandSize($data['HandSize']);
        }
        elseif (\array_key_exists('HandSize', $data) && $data['HandSize'] === null) {
            $object->setHandSize(null);
        }
        if (\array_key_exists('HandSizeRank', $data) && $data['HandSizeRank'] !== null) {
            $object->setHandSizeRank($data['HandSizeRank']);
        }
        elseif (\array_key_exists('HandSizeRank', $data) && $data['HandSizeRank'] === null) {
            $object->setHandSizeRank(null);
        }
        if (\array_key_exists('ArmLength', $data) && $data['ArmLength'] !== null) {
            $object->setArmLength($data['ArmLength']);
        }
        elseif (\array_key_exists('ArmLength', $data) && $data['ArmLength'] === null) {
            $object->setArmLength(null);
        }
        if (\array_key_exists('ArmLengthRank', $data) && $data['ArmLengthRank'] !== null) {
            $object->setArmLengthRank($data['ArmLengthRank']);
        }
        elseif (\array_key_exists('ArmLengthRank', $data) && $data['ArmLengthRank'] === null) {
            $object->setArmLengthRank(null);
        }
        if (\array_key_exists('QualityScore', $data) && $data['QualityScore'] !== null) {
            $object->setQualityScore($data['QualityScore']);
        }
        elseif (\array_key_exists('QualityScore', $data) && $data['QualityScore'] === null) {
            $object->setQualityScore(null);
        }
        if (\array_key_exists('QualityScoreRank', $data) && $data['QualityScoreRank'] !== null) {
            $object->setQualityScoreRank($data['QualityScoreRank']);
        }
        elseif (\array_key_exists('QualityScoreRank', $data) && $data['QualityScoreRank'] === null) {
            $object->setQualityScoreRank(null);
        }
        if (\array_key_exists('FortyYardDash', $data) && $data['FortyYardDash'] !== null) {
            $object->setFortyYardDash($data['FortyYardDash']);
        }
        elseif (\array_key_exists('FortyYardDash', $data) && $data['FortyYardDash'] === null) {
            $object->setFortyYardDash(null);
        }
        if (\array_key_exists('FortyYardDashRank', $data) && $data['FortyYardDashRank'] !== null) {
            $object->setFortyYardDashRank($data['FortyYardDashRank']);
        }
        elseif (\array_key_exists('FortyYardDashRank', $data) && $data['FortyYardDashRank'] === null) {
            $object->setFortyYardDashRank(null);
        }
        if (\array_key_exists('ThreeConeDrill', $data) && $data['ThreeConeDrill'] !== null) {
            $object->setThreeConeDrill($data['ThreeConeDrill']);
        }
        elseif (\array_key_exists('ThreeConeDrill', $data) && $data['ThreeConeDrill'] === null) {
            $object->setThreeConeDrill(null);
        }
        if (\array_key_exists('ThreeConeDrillRank', $data) && $data['ThreeConeDrillRank'] !== null) {
            $object->setThreeConeDrillRank($data['ThreeConeDrillRank']);
        }
        elseif (\array_key_exists('ThreeConeDrillRank', $data) && $data['ThreeConeDrillRank'] === null) {
            $object->setThreeConeDrillRank(null);
        }
        if (\array_key_exists('TwentyYardShuttle', $data) && $data['TwentyYardShuttle'] !== null) {
            $object->setTwentyYardShuttle($data['TwentyYardShuttle']);
        }
        elseif (\array_key_exists('TwentyYardShuttle', $data) && $data['TwentyYardShuttle'] === null) {
            $object->setTwentyYardShuttle(null);
        }
        if (\array_key_exists('TwentyYardShuttleRank', $data) && $data['TwentyYardShuttleRank'] !== null) {
            $object->setTwentyYardShuttleRank($data['TwentyYardShuttleRank']);
        }
        elseif (\array_key_exists('TwentyYardShuttleRank', $data) && $data['TwentyYardShuttleRank'] === null) {
            $object->setTwentyYardShuttleRank(null);
        }
        if (\array_key_exists('AgilityScore', $data) && $data['AgilityScore'] !== null) {
            $object->setAgilityScore($data['AgilityScore']);
        }
        elseif (\array_key_exists('AgilityScore', $data) && $data['AgilityScore'] === null) {
            $object->setAgilityScore(null);
        }
        if (\array_key_exists('AgilityScoreRank', $data) && $data['AgilityScoreRank'] !== null) {
            $object->setAgilityScoreRank($data['AgilityScoreRank']);
        }
        elseif (\array_key_exists('AgilityScoreRank', $data) && $data['AgilityScoreRank'] === null) {
            $object->setAgilityScoreRank(null);
        }
        if (\array_key_exists('VerticalJump', $data) && $data['VerticalJump'] !== null) {
            $object->setVerticalJump($data['VerticalJump']);
        }
        elseif (\array_key_exists('VerticalJump', $data) && $data['VerticalJump'] === null) {
            $object->setVerticalJump(null);
        }
        if (\array_key_exists('VerticalJumpRank', $data) && $data['VerticalJumpRank'] !== null) {
            $object->setVerticalJumpRank($data['VerticalJumpRank']);
        }
        elseif (\array_key_exists('VerticalJumpRank', $data) && $data['VerticalJumpRank'] === null) {
            $object->setVerticalJumpRank(null);
        }
        if (\array_key_exists('BroadJump', $data) && $data['BroadJump'] !== null) {
            $object->setBroadJump($data['BroadJump']);
        }
        elseif (\array_key_exists('BroadJump', $data) && $data['BroadJump'] === null) {
            $object->setBroadJump(null);
        }
        if (\array_key_exists('BroadJumpRank', $data) && $data['BroadJumpRank'] !== null) {
            $object->setBroadJumpRank($data['BroadJumpRank']);
        }
        elseif (\array_key_exists('BroadJumpRank', $data) && $data['BroadJumpRank'] === null) {
            $object->setBroadJumpRank(null);
        }
        if (\array_key_exists('BurstScore', $data) && $data['BurstScore'] !== null) {
            $object->setBurstScore($data['BurstScore']);
        }
        elseif (\array_key_exists('BurstScore', $data) && $data['BurstScore'] === null) {
            $object->setBurstScore(null);
        }
        if (\array_key_exists('BurstScoreRank', $data) && $data['BurstScoreRank'] !== null) {
            $object->setBurstScoreRank($data['BurstScoreRank']);
        }
        elseif (\array_key_exists('BurstScoreRank', $data) && $data['BurstScoreRank'] === null) {
            $object->setBurstScoreRank(null);
        }
        if (\array_key_exists('SPARQx', $data) && $data['SPARQx'] !== null) {
            $object->setSPARQx($data['SPARQx']);
        }
        elseif (\array_key_exists('SPARQx', $data) && $data['SPARQx'] === null) {
            $object->setSPARQx(null);
        }
        if (\array_key_exists('SPARQxRank', $data) && $data['SPARQxRank'] !== null) {
            $object->setSPARQxRank($data['SPARQxRank']);
        }
        elseif (\array_key_exists('SPARQxRank', $data) && $data['SPARQxRank'] === null) {
            $object->setSPARQxRank(null);
        }
        if (\array_key_exists('AthleticismScore', $data) && $data['AthleticismScore'] !== null) {
            $object->setAthleticismScore($data['AthleticismScore']);
        }
        elseif (\array_key_exists('AthleticismScore', $data) && $data['AthleticismScore'] === null) {
            $object->setAthleticismScore(null);
        }
        if (\array_key_exists('AthleticismScoreRank', $data) && $data['AthleticismScoreRank'] !== null) {
            $object->setAthleticismScoreRank($data['AthleticismScoreRank']);
        }
        elseif (\array_key_exists('AthleticismScoreRank', $data) && $data['AthleticismScoreRank'] === null) {
            $object->setAthleticismScoreRank(null);
        }
        if (\array_key_exists('SpeedScore', $data) && $data['SpeedScore'] !== null) {
            $object->setSpeedScore($data['SpeedScore']);
        }
        elseif (\array_key_exists('SpeedScore', $data) && $data['SpeedScore'] === null) {
            $object->setSpeedScore(null);
        }
        if (\array_key_exists('SpeedScoreRank', $data) && $data['SpeedScoreRank'] !== null) {
            $object->setSpeedScoreRank($data['SpeedScoreRank']);
        }
        elseif (\array_key_exists('SpeedScoreRank', $data) && $data['SpeedScoreRank'] === null) {
            $object->setSpeedScoreRank(null);
        }
        if (\array_key_exists('ThrowVelocity', $data) && $data['ThrowVelocity'] !== null) {
            $object->setThrowVelocity($data['ThrowVelocity']);
        }
        elseif (\array_key_exists('ThrowVelocity', $data) && $data['ThrowVelocity'] === null) {
            $object->setThrowVelocity(null);
        }
        if (\array_key_exists('ThrowVelocityRank', $data) && $data['ThrowVelocityRank'] !== null) {
            $object->setThrowVelocityRank($data['ThrowVelocityRank']);
        }
        elseif (\array_key_exists('ThrowVelocityRank', $data) && $data['ThrowVelocityRank'] === null) {
            $object->setThrowVelocityRank(null);
        }
        if (\array_key_exists('WonderlicScore', $data) && $data['WonderlicScore'] !== null) {
            $object->setWonderlicScore($data['WonderlicScore']);
        }
        elseif (\array_key_exists('WonderlicScore', $data) && $data['WonderlicScore'] === null) {
            $object->setWonderlicScore(null);
        }
        if (\array_key_exists('WonderlicScoreRank', $data) && $data['WonderlicScoreRank'] !== null) {
            $object->setWonderlicScoreRank($data['WonderlicScoreRank']);
        }
        elseif (\array_key_exists('WonderlicScoreRank', $data) && $data['WonderlicScoreRank'] === null) {
            $object->setWonderlicScoreRank(null);
        }
        if (\array_key_exists('HeightAdjustedSpeedScore', $data) && $data['HeightAdjustedSpeedScore'] !== null) {
            $object->setHeightAdjustedSpeedScore($data['HeightAdjustedSpeedScore']);
        }
        elseif (\array_key_exists('HeightAdjustedSpeedScore', $data) && $data['HeightAdjustedSpeedScore'] === null) {
            $object->setHeightAdjustedSpeedScore(null);
        }
        if (\array_key_exists('HeightAdjustedSpeedScoreRank', $data) && $data['HeightAdjustedSpeedScoreRank'] !== null) {
            $object->setHeightAdjustedSpeedScoreRank($data['HeightAdjustedSpeedScoreRank']);
        }
        elseif (\array_key_exists('HeightAdjustedSpeedScoreRank', $data) && $data['HeightAdjustedSpeedScoreRank'] === null) {
            $object->setHeightAdjustedSpeedScoreRank(null);
        }
        if (\array_key_exists('CatchRadius', $data) && $data['CatchRadius'] !== null) {
            $object->setCatchRadius($data['CatchRadius']);
        }
        elseif (\array_key_exists('CatchRadius', $data) && $data['CatchRadius'] === null) {
            $object->setCatchRadius(null);
        }
        if (\array_key_exists('CatchRadiusRank', $data) && $data['CatchRadiusRank'] !== null) {
            $object->setCatchRadiusRank($data['CatchRadiusRank']);
        }
        elseif (\array_key_exists('CatchRadiusRank', $data) && $data['CatchRadiusRank'] === null) {
            $object->setCatchRadiusRank(null);
        }
        if (\array_key_exists('BenchPress', $data) && $data['BenchPress'] !== null) {
            $object->setBenchPress($data['BenchPress']);
        }
        elseif (\array_key_exists('BenchPress', $data) && $data['BenchPress'] === null) {
            $object->setBenchPress(null);
        }
        if (\array_key_exists('BenchPressRank', $data) && $data['BenchPressRank'] !== null) {
            $object->setBenchPressRank($data['BenchPressRank']);
        }
        elseif (\array_key_exists('BenchPressRank', $data) && $data['BenchPressRank'] === null) {
            $object->setBenchPressRank(null);
        }
        if (\array_key_exists('PlaymakingRadius', $data) && $data['PlaymakingRadius'] !== null) {
            $object->setPlaymakingRadius($data['PlaymakingRadius']);
        }
        elseif (\array_key_exists('PlaymakingRadius', $data) && $data['PlaymakingRadius'] === null) {
            $object->setPlaymakingRadius(null);
        }
        if (\array_key_exists('PlaymakingRadiusRank', $data) && $data['PlaymakingRadiusRank'] !== null) {
            $object->setPlaymakingRadiusRank($data['PlaymakingRadiusRank']);
        }
        elseif (\array_key_exists('PlaymakingRadiusRank', $data) && $data['PlaymakingRadiusRank'] === null) {
            $object->setPlaymakingRadiusRank(null);
        }
        if (\array_key_exists('HighlightClip', $data) && $data['HighlightClip'] !== null) {
            $object->setHighlightClip($data['HighlightClip']);
        }
        elseif (\array_key_exists('HighlightClip', $data) && $data['HighlightClip'] === null) {
            $object->setHighlightClip(null);
        }
        if (\array_key_exists('MedicalHistory', $data)) {
            $values = array();
            foreach ($data['MedicalHistory'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\NFL\\Model\\AdvancedPlayerMedical', 'json', $context);
            }
            $object->setMedicalHistory($values);
        }
        if (\array_key_exists('ComparablePlayers', $data)) {
            $values_1 = array();
            foreach ($data['ComparablePlayers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Sportsdata\\API\\NFL\\Model\\PlayerInfo', 'json', $context);
            }
            $object->setComparablePlayers($values_1);
        }
        if (\array_key_exists('AdvancedPlayerSeasons', $data)) {
            $values_2 = array();
            foreach ($data['AdvancedPlayerSeasons'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Sportsdata\\API\\NFL\\Model\\AdvancedPlayerSeason', 'json', $context);
            }
            $object->setAdvancedPlayerSeasons($values_2);
        }
        if (\array_key_exists('AdvancedPlayerGames', $data)) {
            $values_3 = array();
            foreach ($data['AdvancedPlayerGames'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Sportsdata\\API\\NFL\\Model\\AdvancedPlayerGame', 'json', $context);
            }
            $object->setAdvancedPlayerGames($values_3);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getPosition()) {
            $data['Position'] = $object->getPosition();
        }
        if (null !== $object->getFantasyPosition()) {
            $data['FantasyPosition'] = $object->getFantasyPosition();
        }
        if (null !== $object->getPositionGroup()) {
            $data['PositionGroup'] = $object->getPositionGroup();
        }
        if (null !== $object->getBMI()) {
            $data['BMI'] = $object->getBMI();
        }
        if (null !== $object->getBMIRank()) {
            $data['BMIRank'] = $object->getBMIRank();
        }
        if (null !== $object->getHandSize()) {
            $data['HandSize'] = $object->getHandSize();
        }
        if (null !== $object->getHandSizeRank()) {
            $data['HandSizeRank'] = $object->getHandSizeRank();
        }
        if (null !== $object->getArmLength()) {
            $data['ArmLength'] = $object->getArmLength();
        }
        if (null !== $object->getArmLengthRank()) {
            $data['ArmLengthRank'] = $object->getArmLengthRank();
        }
        if (null !== $object->getQualityScore()) {
            $data['QualityScore'] = $object->getQualityScore();
        }
        if (null !== $object->getQualityScoreRank()) {
            $data['QualityScoreRank'] = $object->getQualityScoreRank();
        }
        if (null !== $object->getFortyYardDash()) {
            $data['FortyYardDash'] = $object->getFortyYardDash();
        }
        if (null !== $object->getFortyYardDashRank()) {
            $data['FortyYardDashRank'] = $object->getFortyYardDashRank();
        }
        if (null !== $object->getThreeConeDrill()) {
            $data['ThreeConeDrill'] = $object->getThreeConeDrill();
        }
        if (null !== $object->getThreeConeDrillRank()) {
            $data['ThreeConeDrillRank'] = $object->getThreeConeDrillRank();
        }
        if (null !== $object->getTwentyYardShuttle()) {
            $data['TwentyYardShuttle'] = $object->getTwentyYardShuttle();
        }
        if (null !== $object->getTwentyYardShuttleRank()) {
            $data['TwentyYardShuttleRank'] = $object->getTwentyYardShuttleRank();
        }
        if (null !== $object->getAgilityScore()) {
            $data['AgilityScore'] = $object->getAgilityScore();
        }
        if (null !== $object->getAgilityScoreRank()) {
            $data['AgilityScoreRank'] = $object->getAgilityScoreRank();
        }
        if (null !== $object->getVerticalJump()) {
            $data['VerticalJump'] = $object->getVerticalJump();
        }
        if (null !== $object->getVerticalJumpRank()) {
            $data['VerticalJumpRank'] = $object->getVerticalJumpRank();
        }
        if (null !== $object->getBroadJump()) {
            $data['BroadJump'] = $object->getBroadJump();
        }
        if (null !== $object->getBroadJumpRank()) {
            $data['BroadJumpRank'] = $object->getBroadJumpRank();
        }
        if (null !== $object->getBurstScore()) {
            $data['BurstScore'] = $object->getBurstScore();
        }
        if (null !== $object->getBurstScoreRank()) {
            $data['BurstScoreRank'] = $object->getBurstScoreRank();
        }
        if (null !== $object->getSPARQx()) {
            $data['SPARQx'] = $object->getSPARQx();
        }
        if (null !== $object->getSPARQxRank()) {
            $data['SPARQxRank'] = $object->getSPARQxRank();
        }
        if (null !== $object->getAthleticismScore()) {
            $data['AthleticismScore'] = $object->getAthleticismScore();
        }
        if (null !== $object->getAthleticismScoreRank()) {
            $data['AthleticismScoreRank'] = $object->getAthleticismScoreRank();
        }
        if (null !== $object->getSpeedScore()) {
            $data['SpeedScore'] = $object->getSpeedScore();
        }
        if (null !== $object->getSpeedScoreRank()) {
            $data['SpeedScoreRank'] = $object->getSpeedScoreRank();
        }
        if (null !== $object->getThrowVelocity()) {
            $data['ThrowVelocity'] = $object->getThrowVelocity();
        }
        if (null !== $object->getThrowVelocityRank()) {
            $data['ThrowVelocityRank'] = $object->getThrowVelocityRank();
        }
        if (null !== $object->getWonderlicScore()) {
            $data['WonderlicScore'] = $object->getWonderlicScore();
        }
        if (null !== $object->getWonderlicScoreRank()) {
            $data['WonderlicScoreRank'] = $object->getWonderlicScoreRank();
        }
        if (null !== $object->getHeightAdjustedSpeedScore()) {
            $data['HeightAdjustedSpeedScore'] = $object->getHeightAdjustedSpeedScore();
        }
        if (null !== $object->getHeightAdjustedSpeedScoreRank()) {
            $data['HeightAdjustedSpeedScoreRank'] = $object->getHeightAdjustedSpeedScoreRank();
        }
        if (null !== $object->getCatchRadius()) {
            $data['CatchRadius'] = $object->getCatchRadius();
        }
        if (null !== $object->getCatchRadiusRank()) {
            $data['CatchRadiusRank'] = $object->getCatchRadiusRank();
        }
        if (null !== $object->getBenchPress()) {
            $data['BenchPress'] = $object->getBenchPress();
        }
        if (null !== $object->getBenchPressRank()) {
            $data['BenchPressRank'] = $object->getBenchPressRank();
        }
        if (null !== $object->getPlaymakingRadius()) {
            $data['PlaymakingRadius'] = $object->getPlaymakingRadius();
        }
        if (null !== $object->getPlaymakingRadiusRank()) {
            $data['PlaymakingRadiusRank'] = $object->getPlaymakingRadiusRank();
        }
        if (null !== $object->getHighlightClip()) {
            $data['HighlightClip'] = $object->getHighlightClip();
        }
        if (null !== $object->getMedicalHistory()) {
            $values = array();
            foreach ($object->getMedicalHistory() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['MedicalHistory'] = $values;
        }
        if (null !== $object->getComparablePlayers()) {
            $values_1 = array();
            foreach ($object->getComparablePlayers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['ComparablePlayers'] = $values_1;
        }
        if (null !== $object->getAdvancedPlayerSeasons()) {
            $values_2 = array();
            foreach ($object->getAdvancedPlayerSeasons() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['AdvancedPlayerSeasons'] = $values_2;
        }
        if (null !== $object->getAdvancedPlayerGames()) {
            $values_3 = array();
            foreach ($object->getAdvancedPlayerGames() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['AdvancedPlayerGames'] = $values_3;
        }
        return $data;
    }
}