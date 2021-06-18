<?php

namespace Sportsdata\API\CFB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CFB\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TeamGameTrendsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\CFB\\Model\\TeamGameTrends';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CFB\\Model\\TeamGameTrends';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CFB\Model\TeamGameTrends();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Scope', $data) && $data['Scope'] !== null) {
            $object->setScope($data['Scope']);
        }
        elseif (\array_key_exists('Scope', $data) && $data['Scope'] === null) {
            $object->setScope(null);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('OpponentID', $data) && $data['OpponentID'] !== null) {
            $object->setOpponentID($data['OpponentID']);
        }
        elseif (\array_key_exists('OpponentID', $data) && $data['OpponentID'] === null) {
            $object->setOpponentID(null);
        }
        if (\array_key_exists('Opponent', $data) && $data['Opponent'] !== null) {
            $object->setOpponent($data['Opponent']);
        }
        elseif (\array_key_exists('Opponent', $data) && $data['Opponent'] === null) {
            $object->setOpponent(null);
        }
        if (\array_key_exists('Wins', $data)) {
            $object->setWins($data['Wins']);
        }
        if (\array_key_exists('Losses', $data)) {
            $object->setLosses($data['Losses']);
        }
        if (\array_key_exists('Ties', $data)) {
            $object->setTies($data['Ties']);
        }
        if (\array_key_exists('WinsAgainstTheSpread', $data) && $data['WinsAgainstTheSpread'] !== null) {
            $object->setWinsAgainstTheSpread($data['WinsAgainstTheSpread']);
        }
        elseif (\array_key_exists('WinsAgainstTheSpread', $data) && $data['WinsAgainstTheSpread'] === null) {
            $object->setWinsAgainstTheSpread(null);
        }
        if (\array_key_exists('LossesAgainstTheSpread', $data) && $data['LossesAgainstTheSpread'] !== null) {
            $object->setLossesAgainstTheSpread($data['LossesAgainstTheSpread']);
        }
        elseif (\array_key_exists('LossesAgainstTheSpread', $data) && $data['LossesAgainstTheSpread'] === null) {
            $object->setLossesAgainstTheSpread(null);
        }
        if (\array_key_exists('PushesAgainstTheSpread', $data) && $data['PushesAgainstTheSpread'] !== null) {
            $object->setPushesAgainstTheSpread($data['PushesAgainstTheSpread']);
        }
        elseif (\array_key_exists('PushesAgainstTheSpread', $data) && $data['PushesAgainstTheSpread'] === null) {
            $object->setPushesAgainstTheSpread(null);
        }
        if (\array_key_exists('Overs', $data) && $data['Overs'] !== null) {
            $object->setOvers($data['Overs']);
        }
        elseif (\array_key_exists('Overs', $data) && $data['Overs'] === null) {
            $object->setOvers(null);
        }
        if (\array_key_exists('Unders', $data) && $data['Unders'] !== null) {
            $object->setUnders($data['Unders']);
        }
        elseif (\array_key_exists('Unders', $data) && $data['Unders'] === null) {
            $object->setUnders(null);
        }
        if (\array_key_exists('OverUnderPushes', $data) && $data['OverUnderPushes'] !== null) {
            $object->setOverUnderPushes($data['OverUnderPushes']);
        }
        elseif (\array_key_exists('OverUnderPushes', $data) && $data['OverUnderPushes'] === null) {
            $object->setOverUnderPushes(null);
        }
        if (\array_key_exists('AverageScore', $data) && $data['AverageScore'] !== null) {
            $object->setAverageScore($data['AverageScore']);
        }
        elseif (\array_key_exists('AverageScore', $data) && $data['AverageScore'] === null) {
            $object->setAverageScore(null);
        }
        if (\array_key_exists('AverageOpponentScore', $data) && $data['AverageOpponentScore'] !== null) {
            $object->setAverageOpponentScore($data['AverageOpponentScore']);
        }
        elseif (\array_key_exists('AverageOpponentScore', $data) && $data['AverageOpponentScore'] === null) {
            $object->setAverageOpponentScore(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getScope()) {
            $data['Scope'] = $object->getScope();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getOpponentID()) {
            $data['OpponentID'] = $object->getOpponentID();
        }
        if (null !== $object->getOpponent()) {
            $data['Opponent'] = $object->getOpponent();
        }
        if (null !== $object->getWins()) {
            $data['Wins'] = $object->getWins();
        }
        if (null !== $object->getLosses()) {
            $data['Losses'] = $object->getLosses();
        }
        if (null !== $object->getTies()) {
            $data['Ties'] = $object->getTies();
        }
        if (null !== $object->getWinsAgainstTheSpread()) {
            $data['WinsAgainstTheSpread'] = $object->getWinsAgainstTheSpread();
        }
        if (null !== $object->getLossesAgainstTheSpread()) {
            $data['LossesAgainstTheSpread'] = $object->getLossesAgainstTheSpread();
        }
        if (null !== $object->getPushesAgainstTheSpread()) {
            $data['PushesAgainstTheSpread'] = $object->getPushesAgainstTheSpread();
        }
        if (null !== $object->getOvers()) {
            $data['Overs'] = $object->getOvers();
        }
        if (null !== $object->getUnders()) {
            $data['Unders'] = $object->getUnders();
        }
        if (null !== $object->getOverUnderPushes()) {
            $data['OverUnderPushes'] = $object->getOverUnderPushes();
        }
        if (null !== $object->getAverageScore()) {
            $data['AverageScore'] = $object->getAverageScore();
        }
        if (null !== $object->getAverageOpponentScore()) {
            $data['AverageOpponentScore'] = $object->getAverageOpponentScore();
        }
        return $data;
    }
}