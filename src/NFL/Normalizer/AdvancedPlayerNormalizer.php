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
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('Team', $data)) {
            $object->setTeam($data['Team']);
        }
        if (\array_key_exists('Position', $data)) {
            $object->setPosition($data['Position']);
        }
        if (\array_key_exists('FantasyPosition', $data)) {
            $object->setFantasyPosition($data['FantasyPosition']);
        }
        if (\array_key_exists('PositionGroup', $data)) {
            $object->setPositionGroup($data['PositionGroup']);
        }
        if (\array_key_exists('BMI', $data)) {
            $object->setBMI($data['BMI']);
        }
        if (\array_key_exists('BMIRank', $data)) {
            $object->setBMIRank($data['BMIRank']);
        }
        if (\array_key_exists('HandSize', $data)) {
            $object->setHandSize($data['HandSize']);
        }
        if (\array_key_exists('HandSizeRank', $data)) {
            $object->setHandSizeRank($data['HandSizeRank']);
        }
        if (\array_key_exists('ArmLength', $data)) {
            $object->setArmLength($data['ArmLength']);
        }
        if (\array_key_exists('ArmLengthRank', $data)) {
            $object->setArmLengthRank($data['ArmLengthRank']);
        }
        if (\array_key_exists('QualityScore', $data)) {
            $object->setQualityScore($data['QualityScore']);
        }
        if (\array_key_exists('QualityScoreRank', $data)) {
            $object->setQualityScoreRank($data['QualityScoreRank']);
        }
        if (\array_key_exists('FortyYardDash', $data)) {
            $object->setFortyYardDash($data['FortyYardDash']);
        }
        if (\array_key_exists('FortyYardDashRank', $data)) {
            $object->setFortyYardDashRank($data['FortyYardDashRank']);
        }
        if (\array_key_exists('ThreeConeDrill', $data)) {
            $object->setThreeConeDrill($data['ThreeConeDrill']);
        }
        if (\array_key_exists('ThreeConeDrillRank', $data)) {
            $object->setThreeConeDrillRank($data['ThreeConeDrillRank']);
        }
        if (\array_key_exists('TwentyYardShuttle', $data)) {
            $object->setTwentyYardShuttle($data['TwentyYardShuttle']);
        }
        if (\array_key_exists('TwentyYardShuttleRank', $data)) {
            $object->setTwentyYardShuttleRank($data['TwentyYardShuttleRank']);
        }
        if (\array_key_exists('AgilityScore', $data)) {
            $object->setAgilityScore($data['AgilityScore']);
        }
        if (\array_key_exists('AgilityScoreRank', $data)) {
            $object->setAgilityScoreRank($data['AgilityScoreRank']);
        }
        if (\array_key_exists('VerticalJump', $data)) {
            $object->setVerticalJump($data['VerticalJump']);
        }
        if (\array_key_exists('VerticalJumpRank', $data)) {
            $object->setVerticalJumpRank($data['VerticalJumpRank']);
        }
        if (\array_key_exists('BroadJump', $data)) {
            $object->setBroadJump($data['BroadJump']);
        }
        if (\array_key_exists('BroadJumpRank', $data)) {
            $object->setBroadJumpRank($data['BroadJumpRank']);
        }
        if (\array_key_exists('BurstScore', $data)) {
            $object->setBurstScore($data['BurstScore']);
        }
        if (\array_key_exists('BurstScoreRank', $data)) {
            $object->setBurstScoreRank($data['BurstScoreRank']);
        }
        if (\array_key_exists('SPARQx', $data)) {
            $object->setSPARQx($data['SPARQx']);
        }
        if (\array_key_exists('SPARQxRank', $data)) {
            $object->setSPARQxRank($data['SPARQxRank']);
        }
        if (\array_key_exists('AthleticismScore', $data)) {
            $object->setAthleticismScore($data['AthleticismScore']);
        }
        if (\array_key_exists('AthleticismScoreRank', $data)) {
            $object->setAthleticismScoreRank($data['AthleticismScoreRank']);
        }
        if (\array_key_exists('SpeedScore', $data)) {
            $object->setSpeedScore($data['SpeedScore']);
        }
        if (\array_key_exists('SpeedScoreRank', $data)) {
            $object->setSpeedScoreRank($data['SpeedScoreRank']);
        }
        if (\array_key_exists('ThrowVelocity', $data)) {
            $object->setThrowVelocity($data['ThrowVelocity']);
        }
        if (\array_key_exists('ThrowVelocityRank', $data)) {
            $object->setThrowVelocityRank($data['ThrowVelocityRank']);
        }
        if (\array_key_exists('WonderlicScore', $data)) {
            $object->setWonderlicScore($data['WonderlicScore']);
        }
        if (\array_key_exists('WonderlicScoreRank', $data)) {
            $object->setWonderlicScoreRank($data['WonderlicScoreRank']);
        }
        if (\array_key_exists('HeightAdjustedSpeedScore', $data)) {
            $object->setHeightAdjustedSpeedScore($data['HeightAdjustedSpeedScore']);
        }
        if (\array_key_exists('HeightAdjustedSpeedScoreRank', $data)) {
            $object->setHeightAdjustedSpeedScoreRank($data['HeightAdjustedSpeedScoreRank']);
        }
        if (\array_key_exists('CatchRadius', $data)) {
            $object->setCatchRadius($data['CatchRadius']);
        }
        if (\array_key_exists('CatchRadiusRank', $data)) {
            $object->setCatchRadiusRank($data['CatchRadiusRank']);
        }
        if (\array_key_exists('BenchPress', $data)) {
            $object->setBenchPress($data['BenchPress']);
        }
        if (\array_key_exists('BenchPressRank', $data)) {
            $object->setBenchPressRank($data['BenchPressRank']);
        }
        if (\array_key_exists('PlaymakingRadius', $data)) {
            $object->setPlaymakingRadius($data['PlaymakingRadius']);
        }
        if (\array_key_exists('PlaymakingRadiusRank', $data)) {
            $object->setPlaymakingRadiusRank($data['PlaymakingRadiusRank']);
        }
        if (\array_key_exists('HighlightClip', $data)) {
            $object->setHighlightClip($data['HighlightClip']);
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