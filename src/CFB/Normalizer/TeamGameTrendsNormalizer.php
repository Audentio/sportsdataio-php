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
        if (\array_key_exists('Scope', $data)) {
            $object->setScope($data['Scope']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('Team', $data)) {
            $object->setTeam($data['Team']);
        }
        if (\array_key_exists('OpponentID', $data)) {
            $object->setOpponentID($data['OpponentID']);
        }
        if (\array_key_exists('Opponent', $data)) {
            $object->setOpponent($data['Opponent']);
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
        if (\array_key_exists('WinsAgainstTheSpread', $data)) {
            $object->setWinsAgainstTheSpread($data['WinsAgainstTheSpread']);
        }
        if (\array_key_exists('LossesAgainstTheSpread', $data)) {
            $object->setLossesAgainstTheSpread($data['LossesAgainstTheSpread']);
        }
        if (\array_key_exists('PushesAgainstTheSpread', $data)) {
            $object->setPushesAgainstTheSpread($data['PushesAgainstTheSpread']);
        }
        if (\array_key_exists('Overs', $data)) {
            $object->setOvers($data['Overs']);
        }
        if (\array_key_exists('Unders', $data)) {
            $object->setUnders($data['Unders']);
        }
        if (\array_key_exists('OverUnderPushes', $data)) {
            $object->setOverUnderPushes($data['OverUnderPushes']);
        }
        if (\array_key_exists('AverageScore', $data)) {
            $object->setAverageScore($data['AverageScore']);
        }
        if (\array_key_exists('AverageOpponentScore', $data)) {
            $object->setAverageOpponentScore($data['AverageOpponentScore']);
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