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
class PlayerKickPuntReturnsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\PlayerKickPuntReturns';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\PlayerKickPuntReturns';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\PlayerKickPuntReturns();
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
        if (\array_key_exists('KickReturns', $data)) {
            $object->setKickReturns($data['KickReturns']);
        }
        if (\array_key_exists('KickReturnYards', $data)) {
            $object->setKickReturnYards($data['KickReturnYards']);
        }
        if (\array_key_exists('KickReturnYardsPerAttempt', $data)) {
            $object->setKickReturnYardsPerAttempt($data['KickReturnYardsPerAttempt']);
        }
        if (\array_key_exists('KickReturnLong', $data)) {
            $object->setKickReturnLong($data['KickReturnLong']);
        }
        if (\array_key_exists('KickReturnTouchdowns', $data)) {
            $object->setKickReturnTouchdowns($data['KickReturnTouchdowns']);
        }
        if (\array_key_exists('PuntReturns', $data)) {
            $object->setPuntReturns($data['PuntReturns']);
        }
        if (\array_key_exists('PuntReturnYards', $data)) {
            $object->setPuntReturnYards($data['PuntReturnYards']);
        }
        if (\array_key_exists('PuntReturnYardsPerAttempt', $data)) {
            $object->setPuntReturnYardsPerAttempt($data['PuntReturnYardsPerAttempt']);
        }
        if (\array_key_exists('PuntReturnLong', $data)) {
            $object->setPuntReturnLong($data['PuntReturnLong']);
        }
        if (\array_key_exists('PuntReturnTouchdowns', $data)) {
            $object->setPuntReturnTouchdowns($data['PuntReturnTouchdowns']);
        }
        if (\array_key_exists('FumblesLost', $data)) {
            $object->setFumblesLost($data['FumblesLost']);
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
        if (null !== $object->getKickReturns()) {
            $data['KickReturns'] = $object->getKickReturns();
        }
        if (null !== $object->getKickReturnYards()) {
            $data['KickReturnYards'] = $object->getKickReturnYards();
        }
        if (null !== $object->getKickReturnYardsPerAttempt()) {
            $data['KickReturnYardsPerAttempt'] = $object->getKickReturnYardsPerAttempt();
        }
        if (null !== $object->getKickReturnLong()) {
            $data['KickReturnLong'] = $object->getKickReturnLong();
        }
        if (null !== $object->getKickReturnTouchdowns()) {
            $data['KickReturnTouchdowns'] = $object->getKickReturnTouchdowns();
        }
        if (null !== $object->getPuntReturns()) {
            $data['PuntReturns'] = $object->getPuntReturns();
        }
        if (null !== $object->getPuntReturnYards()) {
            $data['PuntReturnYards'] = $object->getPuntReturnYards();
        }
        if (null !== $object->getPuntReturnYardsPerAttempt()) {
            $data['PuntReturnYardsPerAttempt'] = $object->getPuntReturnYardsPerAttempt();
        }
        if (null !== $object->getPuntReturnLong()) {
            $data['PuntReturnLong'] = $object->getPuntReturnLong();
        }
        if (null !== $object->getPuntReturnTouchdowns()) {
            $data['PuntReturnTouchdowns'] = $object->getPuntReturnTouchdowns();
        }
        if (null !== $object->getFumblesLost()) {
            $data['FumblesLost'] = $object->getFumblesLost();
        }
        return $data;
    }
}