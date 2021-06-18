<?php

namespace Sportsdata\API\Soccer\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\Soccer\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class StandingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Soccer\\Model\\Standing';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Soccer\\Model\\Standing';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Soccer\Model\Standing();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('StandingId', $data)) {
            $object->setStandingId($data['StandingId']);
        }
        if (\array_key_exists('RoundId', $data)) {
            $object->setRoundId($data['RoundId']);
        }
        if (\array_key_exists('TeamId', $data)) {
            $object->setTeamId($data['TeamId']);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('ShortName', $data) && $data['ShortName'] !== null) {
            $object->setShortName($data['ShortName']);
        }
        elseif (\array_key_exists('ShortName', $data) && $data['ShortName'] === null) {
            $object->setShortName(null);
        }
        if (\array_key_exists('Scope', $data) && $data['Scope'] !== null) {
            $object->setScope($data['Scope']);
        }
        elseif (\array_key_exists('Scope', $data) && $data['Scope'] === null) {
            $object->setScope(null);
        }
        if (\array_key_exists('Order', $data) && $data['Order'] !== null) {
            $object->setOrder($data['Order']);
        }
        elseif (\array_key_exists('Order', $data) && $data['Order'] === null) {
            $object->setOrder(null);
        }
        if (\array_key_exists('Games', $data) && $data['Games'] !== null) {
            $object->setGames($data['Games']);
        }
        elseif (\array_key_exists('Games', $data) && $data['Games'] === null) {
            $object->setGames(null);
        }
        if (\array_key_exists('Wins', $data) && $data['Wins'] !== null) {
            $object->setWins($data['Wins']);
        }
        elseif (\array_key_exists('Wins', $data) && $data['Wins'] === null) {
            $object->setWins(null);
        }
        if (\array_key_exists('Losses', $data) && $data['Losses'] !== null) {
            $object->setLosses($data['Losses']);
        }
        elseif (\array_key_exists('Losses', $data) && $data['Losses'] === null) {
            $object->setLosses(null);
        }
        if (\array_key_exists('Draws', $data) && $data['Draws'] !== null) {
            $object->setDraws($data['Draws']);
        }
        elseif (\array_key_exists('Draws', $data) && $data['Draws'] === null) {
            $object->setDraws(null);
        }
        if (\array_key_exists('GoalsScored', $data) && $data['GoalsScored'] !== null) {
            $object->setGoalsScored($data['GoalsScored']);
        }
        elseif (\array_key_exists('GoalsScored', $data) && $data['GoalsScored'] === null) {
            $object->setGoalsScored(null);
        }
        if (\array_key_exists('GoalsAgainst', $data) && $data['GoalsAgainst'] !== null) {
            $object->setGoalsAgainst($data['GoalsAgainst']);
        }
        elseif (\array_key_exists('GoalsAgainst', $data) && $data['GoalsAgainst'] === null) {
            $object->setGoalsAgainst(null);
        }
        if (\array_key_exists('GoalsDifferential', $data) && $data['GoalsDifferential'] !== null) {
            $object->setGoalsDifferential($data['GoalsDifferential']);
        }
        elseif (\array_key_exists('GoalsDifferential', $data) && $data['GoalsDifferential'] === null) {
            $object->setGoalsDifferential(null);
        }
        if (\array_key_exists('Points', $data) && $data['Points'] !== null) {
            $object->setPoints($data['Points']);
        }
        elseif (\array_key_exists('Points', $data) && $data['Points'] === null) {
            $object->setPoints(null);
        }
        if (\array_key_exists('Group', $data) && $data['Group'] !== null) {
            $object->setGroup($data['Group']);
        }
        elseif (\array_key_exists('Group', $data) && $data['Group'] === null) {
            $object->setGroup(null);
        }
        if (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] !== null) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        elseif (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] === null) {
            $object->setGlobalTeamID(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getStandingId()) {
            $data['StandingId'] = $object->getStandingId();
        }
        if (null !== $object->getRoundId()) {
            $data['RoundId'] = $object->getRoundId();
        }
        if (null !== $object->getTeamId()) {
            $data['TeamId'] = $object->getTeamId();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getShortName()) {
            $data['ShortName'] = $object->getShortName();
        }
        if (null !== $object->getScope()) {
            $data['Scope'] = $object->getScope();
        }
        if (null !== $object->getOrder()) {
            $data['Order'] = $object->getOrder();
        }
        if (null !== $object->getGames()) {
            $data['Games'] = $object->getGames();
        }
        if (null !== $object->getWins()) {
            $data['Wins'] = $object->getWins();
        }
        if (null !== $object->getLosses()) {
            $data['Losses'] = $object->getLosses();
        }
        if (null !== $object->getDraws()) {
            $data['Draws'] = $object->getDraws();
        }
        if (null !== $object->getGoalsScored()) {
            $data['GoalsScored'] = $object->getGoalsScored();
        }
        if (null !== $object->getGoalsAgainst()) {
            $data['GoalsAgainst'] = $object->getGoalsAgainst();
        }
        if (null !== $object->getGoalsDifferential()) {
            $data['GoalsDifferential'] = $object->getGoalsDifferential();
        }
        if (null !== $object->getPoints()) {
            $data['Points'] = $object->getPoints();
        }
        if (null !== $object->getGroup()) {
            $data['Group'] = $object->getGroup();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        return $data;
    }
}