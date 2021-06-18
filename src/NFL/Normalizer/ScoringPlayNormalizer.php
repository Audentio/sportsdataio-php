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
class ScoringPlayNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\ScoringPlay';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\ScoringPlay';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\ScoringPlay();
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
        if (\array_key_exists('ScoringPlayID', $data)) {
            $object->setScoringPlayID($data['ScoringPlayID']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('Week', $data)) {
            $object->setWeek($data['Week']);
        }
        if (\array_key_exists('AwayTeam', $data) && $data['AwayTeam'] !== null) {
            $object->setAwayTeam($data['AwayTeam']);
        }
        elseif (\array_key_exists('AwayTeam', $data) && $data['AwayTeam'] === null) {
            $object->setAwayTeam(null);
        }
        if (\array_key_exists('HomeTeam', $data) && $data['HomeTeam'] !== null) {
            $object->setHomeTeam($data['HomeTeam']);
        }
        elseif (\array_key_exists('HomeTeam', $data) && $data['HomeTeam'] === null) {
            $object->setHomeTeam(null);
        }
        if (\array_key_exists('Date', $data) && $data['Date'] !== null) {
            $object->setDate($data['Date']);
        }
        elseif (\array_key_exists('Date', $data) && $data['Date'] === null) {
            $object->setDate(null);
        }
        if (\array_key_exists('Sequence', $data) && $data['Sequence'] !== null) {
            $object->setSequence($data['Sequence']);
        }
        elseif (\array_key_exists('Sequence', $data) && $data['Sequence'] === null) {
            $object->setSequence(null);
        }
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('Quarter', $data) && $data['Quarter'] !== null) {
            $object->setQuarter($data['Quarter']);
        }
        elseif (\array_key_exists('Quarter', $data) && $data['Quarter'] === null) {
            $object->setQuarter(null);
        }
        if (\array_key_exists('TimeRemaining', $data) && $data['TimeRemaining'] !== null) {
            $object->setTimeRemaining($data['TimeRemaining']);
        }
        elseif (\array_key_exists('TimeRemaining', $data) && $data['TimeRemaining'] === null) {
            $object->setTimeRemaining(null);
        }
        if (\array_key_exists('PlayDescription', $data) && $data['PlayDescription'] !== null) {
            $object->setPlayDescription($data['PlayDescription']);
        }
        elseif (\array_key_exists('PlayDescription', $data) && $data['PlayDescription'] === null) {
            $object->setPlayDescription(null);
        }
        if (\array_key_exists('AwayScore', $data) && $data['AwayScore'] !== null) {
            $object->setAwayScore($data['AwayScore']);
        }
        elseif (\array_key_exists('AwayScore', $data) && $data['AwayScore'] === null) {
            $object->setAwayScore(null);
        }
        if (\array_key_exists('HomeScore', $data) && $data['HomeScore'] !== null) {
            $object->setHomeScore($data['HomeScore']);
        }
        elseif (\array_key_exists('HomeScore', $data) && $data['HomeScore'] === null) {
            $object->setHomeScore(null);
        }
        if (\array_key_exists('ScoreID', $data)) {
            $object->setScoreID($data['ScoreID']);
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
        if (null !== $object->getScoringPlayID()) {
            $data['ScoringPlayID'] = $object->getScoringPlayID();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getWeek()) {
            $data['Week'] = $object->getWeek();
        }
        if (null !== $object->getAwayTeam()) {
            $data['AwayTeam'] = $object->getAwayTeam();
        }
        if (null !== $object->getHomeTeam()) {
            $data['HomeTeam'] = $object->getHomeTeam();
        }
        if (null !== $object->getDate()) {
            $data['Date'] = $object->getDate();
        }
        if (null !== $object->getSequence()) {
            $data['Sequence'] = $object->getSequence();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getQuarter()) {
            $data['Quarter'] = $object->getQuarter();
        }
        if (null !== $object->getTimeRemaining()) {
            $data['TimeRemaining'] = $object->getTimeRemaining();
        }
        if (null !== $object->getPlayDescription()) {
            $data['PlayDescription'] = $object->getPlayDescription();
        }
        if (null !== $object->getAwayScore()) {
            $data['AwayScore'] = $object->getAwayScore();
        }
        if (null !== $object->getHomeScore()) {
            $data['HomeScore'] = $object->getHomeScore();
        }
        if (null !== $object->getScoreID()) {
            $data['ScoreID'] = $object->getScoreID();
        }
        return $data;
    }
}