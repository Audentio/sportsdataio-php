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
        if (\array_key_exists('PlayerId', $data) && $data['PlayerId'] !== null) {
            $object->setPlayerId($data['PlayerId']);
        }
        elseif (\array_key_exists('PlayerId', $data) && $data['PlayerId'] === null) {
            $object->setPlayerId(null);
        }
        if (\array_key_exists('TeamId', $data) && $data['TeamId'] !== null) {
            $object->setTeamId($data['TeamId']);
        }
        elseif (\array_key_exists('TeamId', $data) && $data['TeamId'] === null) {
            $object->setTeamId(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('MatchName', $data) && $data['MatchName'] !== null) {
            $object->setMatchName($data['MatchName']);
        }
        elseif (\array_key_exists('MatchName', $data) && $data['MatchName'] === null) {
            $object->setMatchName(null);
        }
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('GameId', $data) && $data['GameId'] !== null) {
            $object->setGameId($data['GameId']);
        }
        elseif (\array_key_exists('GameId', $data) && $data['GameId'] === null) {
            $object->setGameId(null);
        }
        if (\array_key_exists('OpponentId', $data) && $data['OpponentId'] !== null) {
            $object->setOpponentId($data['OpponentId']);
        }
        elseif (\array_key_exists('OpponentId', $data) && $data['OpponentId'] === null) {
            $object->setOpponentId(null);
        }
        if (\array_key_exists('Opponent', $data) && $data['Opponent'] !== null) {
            $object->setOpponent($data['Opponent']);
        }
        elseif (\array_key_exists('Opponent', $data) && $data['Opponent'] === null) {
            $object->setOpponent(null);
        }
        if (\array_key_exists('Day', $data) && $data['Day'] !== null) {
            $object->setDay($data['Day']);
        }
        elseif (\array_key_exists('Day', $data) && $data['Day'] === null) {
            $object->setDay(null);
        }
        if (\array_key_exists('DateTime', $data) && $data['DateTime'] !== null) {
            $object->setDateTime($data['DateTime']);
        }
        elseif (\array_key_exists('DateTime', $data) && $data['DateTime'] === null) {
            $object->setDateTime(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('UpdatedUtc', $data) && $data['UpdatedUtc'] !== null) {
            $object->setUpdatedUtc($data['UpdatedUtc']);
        }
        elseif (\array_key_exists('UpdatedUtc', $data) && $data['UpdatedUtc'] === null) {
            $object->setUpdatedUtc(null);
        }
        if (\array_key_exists('Games', $data) && $data['Games'] !== null) {
            $object->setGames($data['Games']);
        }
        elseif (\array_key_exists('Games', $data) && $data['Games'] === null) {
            $object->setGames(null);
        }
        if (\array_key_exists('Maps', $data) && $data['Maps'] !== null) {
            $object->setMaps($data['Maps']);
        }
        elseif (\array_key_exists('Maps', $data) && $data['Maps'] === null) {
            $object->setMaps(null);
        }
        if (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] !== null) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        elseif (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] === null) {
            $object->setFantasyPoints(null);
        }
        if (\array_key_exists('Kills', $data) && $data['Kills'] !== null) {
            $object->setKills($data['Kills']);
        }
        elseif (\array_key_exists('Kills', $data) && $data['Kills'] === null) {
            $object->setKills(null);
        }
        if (\array_key_exists('Assists', $data) && $data['Assists'] !== null) {
            $object->setAssists($data['Assists']);
        }
        elseif (\array_key_exists('Assists', $data) && $data['Assists'] === null) {
            $object->setAssists(null);
        }
        if (\array_key_exists('Deaths', $data) && $data['Deaths'] !== null) {
            $object->setDeaths($data['Deaths']);
        }
        elseif (\array_key_exists('Deaths', $data) && $data['Deaths'] === null) {
            $object->setDeaths(null);
        }
        if (\array_key_exists('Headshots', $data) && $data['Headshots'] !== null) {
            $object->setHeadshots($data['Headshots']);
        }
        elseif (\array_key_exists('Headshots', $data) && $data['Headshots'] === null) {
            $object->setHeadshots(null);
        }
        if (\array_key_exists('AverageDamagePerRound', $data) && $data['AverageDamagePerRound'] !== null) {
            $object->setAverageDamagePerRound($data['AverageDamagePerRound']);
        }
        elseif (\array_key_exists('AverageDamagePerRound', $data) && $data['AverageDamagePerRound'] === null) {
            $object->setAverageDamagePerRound(null);
        }
        if (\array_key_exists('Kast', $data) && $data['Kast'] !== null) {
            $object->setKast($data['Kast']);
        }
        elseif (\array_key_exists('Kast', $data) && $data['Kast'] === null) {
            $object->setKast(null);
        }
        if (\array_key_exists('Rating', $data) && $data['Rating'] !== null) {
            $object->setRating($data['Rating']);
        }
        elseif (\array_key_exists('Rating', $data) && $data['Rating'] === null) {
            $object->setRating(null);
        }
        if (\array_key_exists('EntryKills', $data) && $data['EntryKills'] !== null) {
            $object->setEntryKills($data['EntryKills']);
        }
        elseif (\array_key_exists('EntryKills', $data) && $data['EntryKills'] === null) {
            $object->setEntryKills(null);
        }
        if (\array_key_exists('QuadKills', $data) && $data['QuadKills'] !== null) {
            $object->setQuadKills($data['QuadKills']);
        }
        elseif (\array_key_exists('QuadKills', $data) && $data['QuadKills'] === null) {
            $object->setQuadKills(null);
        }
        if (\array_key_exists('Aces', $data) && $data['Aces'] !== null) {
            $object->setAces($data['Aces']);
        }
        elseif (\array_key_exists('Aces', $data) && $data['Aces'] === null) {
            $object->setAces(null);
        }
        if (\array_key_exists('Clutch1v2s', $data) && $data['Clutch1v2s'] !== null) {
            $object->setClutch1v2s($data['Clutch1v2s']);
        }
        elseif (\array_key_exists('Clutch1v2s', $data) && $data['Clutch1v2s'] === null) {
            $object->setClutch1v2s(null);
        }
        if (\array_key_exists('Clutch1v3s', $data) && $data['Clutch1v3s'] !== null) {
            $object->setClutch1v3s($data['Clutch1v3s']);
        }
        elseif (\array_key_exists('Clutch1v3s', $data) && $data['Clutch1v3s'] === null) {
            $object->setClutch1v3s(null);
        }
        if (\array_key_exists('Clutch1v4s', $data) && $data['Clutch1v4s'] !== null) {
            $object->setClutch1v4s($data['Clutch1v4s']);
        }
        elseif (\array_key_exists('Clutch1v4s', $data) && $data['Clutch1v4s'] === null) {
            $object->setClutch1v4s(null);
        }
        if (\array_key_exists('Clutch1v5s', $data) && $data['Clutch1v5s'] !== null) {
            $object->setClutch1v5s($data['Clutch1v5s']);
        }
        elseif (\array_key_exists('Clutch1v5s', $data) && $data['Clutch1v5s'] === null) {
            $object->setClutch1v5s(null);
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