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
class PlayerKickingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\PlayerKicking';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\PlayerKicking';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\PlayerKicking();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerGameID', $data) && $data['PlayerGameID'] !== null) {
            $object->setPlayerGameID($data['PlayerGameID']);
        }
        elseif (\array_key_exists('PlayerGameID', $data) && $data['PlayerGameID'] === null) {
            $object->setPlayerGameID(null);
        }
        if (\array_key_exists('PlayerID', $data) && $data['PlayerID'] !== null) {
            $object->setPlayerID($data['PlayerID']);
        }
        elseif (\array_key_exists('PlayerID', $data) && $data['PlayerID'] === null) {
            $object->setPlayerID(null);
        }
        if (\array_key_exists('ShortName', $data) && $data['ShortName'] !== null) {
            $object->setShortName($data['ShortName']);
        }
        elseif (\array_key_exists('ShortName', $data) && $data['ShortName'] === null) {
            $object->setShortName(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('Number', $data)) {
            $object->setNumber($data['Number']);
        }
        if (\array_key_exists('Position', $data) && $data['Position'] !== null) {
            $object->setPosition($data['Position']);
        }
        elseif (\array_key_exists('Position', $data) && $data['Position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('PositionCategory', $data) && $data['PositionCategory'] !== null) {
            $object->setPositionCategory($data['PositionCategory']);
        }
        elseif (\array_key_exists('PositionCategory', $data) && $data['PositionCategory'] === null) {
            $object->setPositionCategory(null);
        }
        if (\array_key_exists('FantasyPosition', $data) && $data['FantasyPosition'] !== null) {
            $object->setFantasyPosition($data['FantasyPosition']);
        }
        elseif (\array_key_exists('FantasyPosition', $data) && $data['FantasyPosition'] === null) {
            $object->setFantasyPosition(null);
        }
        if (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] !== null) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        elseif (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] === null) {
            $object->setFantasyPoints(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('ExtraPointsMade', $data)) {
            $object->setExtraPointsMade($data['ExtraPointsMade']);
        }
        if (\array_key_exists('ExtraPointsAttempted', $data)) {
            $object->setExtraPointsAttempted($data['ExtraPointsAttempted']);
        }
        if (\array_key_exists('FieldGoalsMade', $data)) {
            $object->setFieldGoalsMade($data['FieldGoalsMade']);
        }
        if (\array_key_exists('FieldGoalsAttempted', $data)) {
            $object->setFieldGoalsAttempted($data['FieldGoalsAttempted']);
        }
        if (\array_key_exists('FieldGoalsLongestMade', $data)) {
            $object->setFieldGoalsLongestMade($data['FieldGoalsLongestMade']);
        }
        if (\array_key_exists('FieldGoalPercentage', $data)) {
            $object->setFieldGoalPercentage($data['FieldGoalPercentage']);
        }
        if (\array_key_exists('FieldGoalsMade0to19', $data)) {
            $object->setFieldGoalsMade0to19($data['FieldGoalsMade0to19']);
        }
        if (\array_key_exists('FieldGoalsMade20to29', $data)) {
            $object->setFieldGoalsMade20to29($data['FieldGoalsMade20to29']);
        }
        if (\array_key_exists('FieldGoalsMade30to39', $data)) {
            $object->setFieldGoalsMade30to39($data['FieldGoalsMade30to39']);
        }
        if (\array_key_exists('FieldGoalsMade40to49', $data)) {
            $object->setFieldGoalsMade40to49($data['FieldGoalsMade40to49']);
        }
        if (\array_key_exists('FieldGoalsMade50Plus', $data)) {
            $object->setFieldGoalsMade50Plus($data['FieldGoalsMade50Plus']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayerGameID()) {
            $data['PlayerGameID'] = $object->getPlayerGameID();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getShortName()) {
            $data['ShortName'] = $object->getShortName();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getNumber()) {
            $data['Number'] = $object->getNumber();
        }
        if (null !== $object->getPosition()) {
            $data['Position'] = $object->getPosition();
        }
        if (null !== $object->getPositionCategory()) {
            $data['PositionCategory'] = $object->getPositionCategory();
        }
        if (null !== $object->getFantasyPosition()) {
            $data['FantasyPosition'] = $object->getFantasyPosition();
        }
        if (null !== $object->getFantasyPoints()) {
            $data['FantasyPoints'] = $object->getFantasyPoints();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getExtraPointsMade()) {
            $data['ExtraPointsMade'] = $object->getExtraPointsMade();
        }
        if (null !== $object->getExtraPointsAttempted()) {
            $data['ExtraPointsAttempted'] = $object->getExtraPointsAttempted();
        }
        if (null !== $object->getFieldGoalsMade()) {
            $data['FieldGoalsMade'] = $object->getFieldGoalsMade();
        }
        if (null !== $object->getFieldGoalsAttempted()) {
            $data['FieldGoalsAttempted'] = $object->getFieldGoalsAttempted();
        }
        if (null !== $object->getFieldGoalsLongestMade()) {
            $data['FieldGoalsLongestMade'] = $object->getFieldGoalsLongestMade();
        }
        if (null !== $object->getFieldGoalPercentage()) {
            $data['FieldGoalPercentage'] = $object->getFieldGoalPercentage();
        }
        if (null !== $object->getFieldGoalsMade0to19()) {
            $data['FieldGoalsMade0to19'] = $object->getFieldGoalsMade0to19();
        }
        if (null !== $object->getFieldGoalsMade20to29()) {
            $data['FieldGoalsMade20to29'] = $object->getFieldGoalsMade20to29();
        }
        if (null !== $object->getFieldGoalsMade30to39()) {
            $data['FieldGoalsMade30to39'] = $object->getFieldGoalsMade30to39();
        }
        if (null !== $object->getFieldGoalsMade40to49()) {
            $data['FieldGoalsMade40to49'] = $object->getFieldGoalsMade40to49();
        }
        if (null !== $object->getFieldGoalsMade50Plus()) {
            $data['FieldGoalsMade50Plus'] = $object->getFieldGoalsMade50Plus();
        }
        return $data;
    }
}