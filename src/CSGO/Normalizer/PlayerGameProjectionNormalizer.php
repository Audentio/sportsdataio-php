<?php

namespace Sportsdata\API\CSGO\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CSGO\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PlayerGameProjectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\CSGO\\Model\\PlayerGameProjection';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CSGO\\Model\\PlayerGameProjection';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CSGO\Model\PlayerGameProjection();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerId', $data)) {
            $object->setPlayerId($data['PlayerId']);
        }
        if (\array_key_exists('TeamId', $data)) {
            $object->setTeamId($data['TeamId']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('MatchName', $data)) {
            $object->setMatchName($data['MatchName']);
        }
        if (\array_key_exists('Team', $data)) {
            $object->setTeam($data['Team']);
        }
        if (\array_key_exists('GameId', $data)) {
            $object->setGameId($data['GameId']);
        }
        if (\array_key_exists('OpponentId', $data)) {
            $object->setOpponentId($data['OpponentId']);
        }
        if (\array_key_exists('Opponent', $data)) {
            $object->setOpponent($data['Opponent']);
        }
        if (\array_key_exists('Day', $data)) {
            $object->setDay($data['Day']);
        }
        if (\array_key_exists('DateTime', $data)) {
            $object->setDateTime($data['DateTime']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('UpdatedUtc', $data)) {
            $object->setUpdatedUtc($data['UpdatedUtc']);
        }
        if (\array_key_exists('Games', $data)) {
            $object->setGames($data['Games']);
        }
        if (\array_key_exists('Maps', $data)) {
            $object->setMaps($data['Maps']);
        }
        if (\array_key_exists('FantasyPoints', $data)) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        if (\array_key_exists('Kills', $data)) {
            $object->setKills($data['Kills']);
        }
        if (\array_key_exists('Assists', $data)) {
            $object->setAssists($data['Assists']);
        }
        if (\array_key_exists('Deaths', $data)) {
            $object->setDeaths($data['Deaths']);
        }
        if (\array_key_exists('Headshots', $data)) {
            $object->setHeadshots($data['Headshots']);
        }
        if (\array_key_exists('AverageDamagePerRound', $data)) {
            $object->setAverageDamagePerRound($data['AverageDamagePerRound']);
        }
        if (\array_key_exists('Kast', $data)) {
            $object->setKast($data['Kast']);
        }
        if (\array_key_exists('Rating', $data)) {
            $object->setRating($data['Rating']);
        }
        if (\array_key_exists('EntryKills', $data)) {
            $object->setEntryKills($data['EntryKills']);
        }
        if (\array_key_exists('QuadKills', $data)) {
            $object->setQuadKills($data['QuadKills']);
        }
        if (\array_key_exists('Aces', $data)) {
            $object->setAces($data['Aces']);
        }
        if (\array_key_exists('Clutch1v2s', $data)) {
            $object->setClutch1v2s($data['Clutch1v2s']);
        }
        if (\array_key_exists('Clutch1v3s', $data)) {
            $object->setClutch1v3s($data['Clutch1v3s']);
        }
        if (\array_key_exists('Clutch1v4s', $data)) {
            $object->setClutch1v4s($data['Clutch1v4s']);
        }
        if (\array_key_exists('Clutch1v5s', $data)) {
            $object->setClutch1v5s($data['Clutch1v5s']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayerId()) {
            $data['PlayerId'] = $object->getPlayerId();
        }
        if (null !== $object->getTeamId()) {
            $data['TeamId'] = $object->getTeamId();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getMatchName()) {
            $data['MatchName'] = $object->getMatchName();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getGameId()) {
            $data['GameId'] = $object->getGameId();
        }
        if (null !== $object->getOpponentId()) {
            $data['OpponentId'] = $object->getOpponentId();
        }
        if (null !== $object->getOpponent()) {
            $data['Opponent'] = $object->getOpponent();
        }
        if (null !== $object->getDay()) {
            $data['Day'] = $object->getDay();
        }
        if (null !== $object->getDateTime()) {
            $data['DateTime'] = $object->getDateTime();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getUpdatedUtc()) {
            $data['UpdatedUtc'] = $object->getUpdatedUtc();
        }
        if (null !== $object->getGames()) {
            $data['Games'] = $object->getGames();
        }
        if (null !== $object->getMaps()) {
            $data['Maps'] = $object->getMaps();
        }
        if (null !== $object->getFantasyPoints()) {
            $data['FantasyPoints'] = $object->getFantasyPoints();
        }
        if (null !== $object->getKills()) {
            $data['Kills'] = $object->getKills();
        }
        if (null !== $object->getAssists()) {
            $data['Assists'] = $object->getAssists();
        }
        if (null !== $object->getDeaths()) {
            $data['Deaths'] = $object->getDeaths();
        }
        if (null !== $object->getHeadshots()) {
            $data['Headshots'] = $object->getHeadshots();
        }
        if (null !== $object->getAverageDamagePerRound()) {
            $data['AverageDamagePerRound'] = $object->getAverageDamagePerRound();
        }
        if (null !== $object->getKast()) {
            $data['Kast'] = $object->getKast();
        }
        if (null !== $object->getRating()) {
            $data['Rating'] = $object->getRating();
        }
        if (null !== $object->getEntryKills()) {
            $data['EntryKills'] = $object->getEntryKills();
        }
        if (null !== $object->getQuadKills()) {
            $data['QuadKills'] = $object->getQuadKills();
        }
        if (null !== $object->getAces()) {
            $data['Aces'] = $object->getAces();
        }
        if (null !== $object->getClutch1v2s()) {
            $data['Clutch1v2s'] = $object->getClutch1v2s();
        }
        if (null !== $object->getClutch1v3s()) {
            $data['Clutch1v3s'] = $object->getClutch1v3s();
        }
        if (null !== $object->getClutch1v4s()) {
            $data['Clutch1v4s'] = $object->getClutch1v4s();
        }
        if (null !== $object->getClutch1v5s()) {
            $data['Clutch1v5s'] = $object->getClutch1v5s();
        }
        return $data;
    }
}