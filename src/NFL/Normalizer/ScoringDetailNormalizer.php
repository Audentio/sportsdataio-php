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
class ScoringDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\ScoringDetail';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\ScoringDetail';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\ScoringDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GameKey', $data) && $data['GameKey'] !== null) {
            $object->setGameKey($data['GameKey']);
        }
        elseif (\array_key_exists('GameKey', $data) && $data['GameKey'] === null) {
            $object->setGameKey(null);
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('PlayerID', $data) && $data['PlayerID'] !== null) {
            $object->setPlayerID($data['PlayerID']);
        }
        elseif (\array_key_exists('PlayerID', $data) && $data['PlayerID'] === null) {
            $object->setPlayerID(null);
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
        if (\array_key_exists('Week', $data)) {
            $object->setWeek($data['Week']);
        }
        if (\array_key_exists('ScoringType', $data) && $data['ScoringType'] !== null) {
            $object->setScoringType($data['ScoringType']);
        }
        elseif (\array_key_exists('ScoringType', $data) && $data['ScoringType'] === null) {
            $object->setScoringType(null);
        }
        if (\array_key_exists('Length', $data)) {
            $object->setLength($data['Length']);
        }
        if (\array_key_exists('ScoringDetailID', $data)) {
            $object->setScoringDetailID($data['ScoringDetailID']);
        }
        if (\array_key_exists('PlayerGameID', $data)) {
            $object->setPlayerGameID($data['PlayerGameID']);
        }
        if (\array_key_exists('ScoreID', $data) && $data['ScoreID'] !== null) {
            $object->setScoreID($data['ScoreID']);
        }
        elseif (\array_key_exists('ScoreID', $data) && $data['ScoreID'] === null) {
            $object->setScoreID(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGameKey()) {
            $data['GameKey'] = $object->getGameKey();
        }
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getWeek()) {
            $data['Week'] = $object->getWeek();
        }
        if (null !== $object->getScoringType()) {
            $data['ScoringType'] = $object->getScoringType();
        }
        if (null !== $object->getLength()) {
            $data['Length'] = $object->getLength();
        }
        if (null !== $object->getScoringDetailID()) {
            $data['ScoringDetailID'] = $object->getScoringDetailID();
        }
        if (null !== $object->getPlayerGameID()) {
            $data['PlayerGameID'] = $object->getPlayerGameID();
        }
        if (null !== $object->getScoreID()) {
            $data['ScoreID'] = $object->getScoreID();
        }
        return $data;
    }
}