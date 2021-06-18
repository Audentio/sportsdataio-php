<?php

namespace Sportsdata\API\LOL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\LOL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TeamMatchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\LOL\\Model\\TeamMatch';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\LOL\\Model\\TeamMatch';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\LOL\Model\TeamMatch();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('FirstBlood', $data) && $data['FirstBlood'] !== null) {
            $object->setFirstBlood($data['FirstBlood']);
        }
        elseif (\array_key_exists('FirstBlood', $data) && $data['FirstBlood'] === null) {
            $object->setFirstBlood(null);
        }
        if (\array_key_exists('FirstTower', $data) && $data['FirstTower'] !== null) {
            $object->setFirstTower($data['FirstTower']);
        }
        elseif (\array_key_exists('FirstTower', $data) && $data['FirstTower'] === null) {
            $object->setFirstTower(null);
        }
        if (\array_key_exists('FirstInhibitor', $data) && $data['FirstInhibitor'] !== null) {
            $object->setFirstInhibitor($data['FirstInhibitor']);
        }
        elseif (\array_key_exists('FirstInhibitor', $data) && $data['FirstInhibitor'] === null) {
            $object->setFirstInhibitor(null);
        }
        if (\array_key_exists('FirstBaron', $data) && $data['FirstBaron'] !== null) {
            $object->setFirstBaron($data['FirstBaron']);
        }
        elseif (\array_key_exists('FirstBaron', $data) && $data['FirstBaron'] === null) {
            $object->setFirstBaron(null);
        }
        if (\array_key_exists('FirstDragon', $data) && $data['FirstDragon'] !== null) {
            $object->setFirstDragon($data['FirstDragon']);
        }
        elseif (\array_key_exists('FirstDragon', $data) && $data['FirstDragon'] === null) {
            $object->setFirstDragon(null);
        }
        if (\array_key_exists('FirstRiftHerald', $data) && $data['FirstRiftHerald'] !== null) {
            $object->setFirstRiftHerald($data['FirstRiftHerald']);
        }
        elseif (\array_key_exists('FirstRiftHerald', $data) && $data['FirstRiftHerald'] === null) {
            $object->setFirstRiftHerald(null);
        }
        if (\array_key_exists('GameId', $data)) {
            $object->setGameId($data['GameId']);
        }
        if (\array_key_exists('OpponentId', $data)) {
            $object->setOpponentId($data['OpponentId']);
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
        if (\array_key_exists('Position', $data) && $data['Position'] !== null) {
            $object->setPosition($data['Position']);
        }
        elseif (\array_key_exists('Position', $data) && $data['Position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('PlayerId', $data)) {
            $object->setPlayerId($data['PlayerId']);
        }
        if (\array_key_exists('TeamId', $data) && $data['TeamId'] !== null) {
            $object->setTeamId($data['TeamId']);
        }
        elseif (\array_key_exists('TeamId', $data) && $data['TeamId'] === null) {
            $object->setTeamId(null);
        }
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
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
        if (\array_key_exists('LargestKillingSpree', $data) && $data['LargestKillingSpree'] !== null) {
            $object->setLargestKillingSpree($data['LargestKillingSpree']);
        }
        elseif (\array_key_exists('LargestKillingSpree', $data) && $data['LargestKillingSpree'] === null) {
            $object->setLargestKillingSpree(null);
        }
        if (\array_key_exists('LargestMultiKill', $data) && $data['LargestMultiKill'] !== null) {
            $object->setLargestMultiKill($data['LargestMultiKill']);
        }
        elseif (\array_key_exists('LargestMultiKill', $data) && $data['LargestMultiKill'] === null) {
            $object->setLargestMultiKill(null);
        }
        if (\array_key_exists('KillingSpree', $data) && $data['KillingSpree'] !== null) {
            $object->setKillingSpree($data['KillingSpree']);
        }
        elseif (\array_key_exists('KillingSpree', $data) && $data['KillingSpree'] === null) {
            $object->setKillingSpree(null);
        }
        if (\array_key_exists('LongestTimeSpentLiving', $data) && $data['LongestTimeSpentLiving'] !== null) {
            $object->setLongestTimeSpentLiving($data['LongestTimeSpentLiving']);
        }
        elseif (\array_key_exists('LongestTimeSpentLiving', $data) && $data['LongestTimeSpentLiving'] === null) {
            $object->setLongestTimeSpentLiving(null);
        }
        if (\array_key_exists('DoubleKills', $data) && $data['DoubleKills'] !== null) {
            $object->setDoubleKills($data['DoubleKills']);
        }
        elseif (\array_key_exists('DoubleKills', $data) && $data['DoubleKills'] === null) {
            $object->setDoubleKills(null);
        }
        if (\array_key_exists('TripleKills', $data) && $data['TripleKills'] !== null) {
            $object->setTripleKills($data['TripleKills']);
        }
        elseif (\array_key_exists('TripleKills', $data) && $data['TripleKills'] === null) {
            $object->setTripleKills(null);
        }
        if (\array_key_exists('QuadraKills', $data) && $data['QuadraKills'] !== null) {
            $object->setQuadraKills($data['QuadraKills']);
        }
        elseif (\array_key_exists('QuadraKills', $data) && $data['QuadraKills'] === null) {
            $object->setQuadraKills(null);
        }
        if (\array_key_exists('PentaKills', $data) && $data['PentaKills'] !== null) {
            $object->setPentaKills($data['PentaKills']);
        }
        elseif (\array_key_exists('PentaKills', $data) && $data['PentaKills'] === null) {
            $object->setPentaKills(null);
        }
        if (\array_key_exists('UnrealKills', $data) && $data['UnrealKills'] !== null) {
            $object->setUnrealKills($data['UnrealKills']);
        }
        elseif (\array_key_exists('UnrealKills', $data) && $data['UnrealKills'] === null) {
            $object->setUnrealKills(null);
        }
        if (\array_key_exists('TotalDamageDealt', $data) && $data['TotalDamageDealt'] !== null) {
            $object->setTotalDamageDealt($data['TotalDamageDealt']);
        }
        elseif (\array_key_exists('TotalDamageDealt', $data) && $data['TotalDamageDealt'] === null) {
            $object->setTotalDamageDealt(null);
        }
        if (\array_key_exists('MagicDamageDealt', $data) && $data['MagicDamageDealt'] !== null) {
            $object->setMagicDamageDealt($data['MagicDamageDealt']);
        }
        elseif (\array_key_exists('MagicDamageDealt', $data) && $data['MagicDamageDealt'] === null) {
            $object->setMagicDamageDealt(null);
        }
        if (\array_key_exists('PhysicalDamageDealt', $data) && $data['PhysicalDamageDealt'] !== null) {
            $object->setPhysicalDamageDealt($data['PhysicalDamageDealt']);
        }
        elseif (\array_key_exists('PhysicalDamageDealt', $data) && $data['PhysicalDamageDealt'] === null) {
            $object->setPhysicalDamageDealt(null);
        }
        if (\array_key_exists('TrueDamageDealt', $data) && $data['TrueDamageDealt'] !== null) {
            $object->setTrueDamageDealt($data['TrueDamageDealt']);
        }
        elseif (\array_key_exists('TrueDamageDealt', $data) && $data['TrueDamageDealt'] === null) {
            $object->setTrueDamageDealt(null);
        }
        if (\array_key_exists('LargestCriticalStrike', $data) && $data['LargestCriticalStrike'] !== null) {
            $object->setLargestCriticalStrike($data['LargestCriticalStrike']);
        }
        elseif (\array_key_exists('LargestCriticalStrike', $data) && $data['LargestCriticalStrike'] === null) {
            $object->setLargestCriticalStrike(null);
        }
        if (\array_key_exists('TotalDamageDealtToChampions', $data) && $data['TotalDamageDealtToChampions'] !== null) {
            $object->setTotalDamageDealtToChampions($data['TotalDamageDealtToChampions']);
        }
        elseif (\array_key_exists('TotalDamageDealtToChampions', $data) && $data['TotalDamageDealtToChampions'] === null) {
            $object->setTotalDamageDealtToChampions(null);
        }
        if (\array_key_exists('MagicDamageDealtToChampions', $data) && $data['MagicDamageDealtToChampions'] !== null) {
            $object->setMagicDamageDealtToChampions($data['MagicDamageDealtToChampions']);
        }
        elseif (\array_key_exists('MagicDamageDealtToChampions', $data) && $data['MagicDamageDealtToChampions'] === null) {
            $object->setMagicDamageDealtToChampions(null);
        }
        if (\array_key_exists('PhysicalDamageDealtToChampions', $data) && $data['PhysicalDamageDealtToChampions'] !== null) {
            $object->setPhysicalDamageDealtToChampions($data['PhysicalDamageDealtToChampions']);
        }
        elseif (\array_key_exists('PhysicalDamageDealtToChampions', $data) && $data['PhysicalDamageDealtToChampions'] === null) {
            $object->setPhysicalDamageDealtToChampions(null);
        }
        if (\array_key_exists('TrueDamageDealtToChampions', $data) && $data['TrueDamageDealtToChampions'] !== null) {
            $object->setTrueDamageDealtToChampions($data['TrueDamageDealtToChampions']);
        }
        elseif (\array_key_exists('TrueDamageDealtToChampions', $data) && $data['TrueDamageDealtToChampions'] === null) {
            $object->setTrueDamageDealtToChampions(null);
        }
        if (\array_key_exists('TotalHeal', $data) && $data['TotalHeal'] !== null) {
            $object->setTotalHeal($data['TotalHeal']);
        }
        elseif (\array_key_exists('TotalHeal', $data) && $data['TotalHeal'] === null) {
            $object->setTotalHeal(null);
        }
        if (\array_key_exists('TotalUnitsHealed', $data) && $data['TotalUnitsHealed'] !== null) {
            $object->setTotalUnitsHealed($data['TotalUnitsHealed']);
        }
        elseif (\array_key_exists('TotalUnitsHealed', $data) && $data['TotalUnitsHealed'] === null) {
            $object->setTotalUnitsHealed(null);
        }
        if (\array_key_exists('TotalDamageTaken', $data) && $data['TotalDamageTaken'] !== null) {
            $object->setTotalDamageTaken($data['TotalDamageTaken']);
        }
        elseif (\array_key_exists('TotalDamageTaken', $data) && $data['TotalDamageTaken'] === null) {
            $object->setTotalDamageTaken(null);
        }
        if (\array_key_exists('MagicDamageTaken', $data) && $data['MagicDamageTaken'] !== null) {
            $object->setMagicDamageTaken($data['MagicDamageTaken']);
        }
        elseif (\array_key_exists('MagicDamageTaken', $data) && $data['MagicDamageTaken'] === null) {
            $object->setMagicDamageTaken(null);
        }
        if (\array_key_exists('PhysicalDamageTaken', $data) && $data['PhysicalDamageTaken'] !== null) {
            $object->setPhysicalDamageTaken($data['PhysicalDamageTaken']);
        }
        elseif (\array_key_exists('PhysicalDamageTaken', $data) && $data['PhysicalDamageTaken'] === null) {
            $object->setPhysicalDamageTaken(null);
        }
        if (\array_key_exists('TrueDamageTaken', $data) && $data['TrueDamageTaken'] !== null) {
            $object->setTrueDamageTaken($data['TrueDamageTaken']);
        }
        elseif (\array_key_exists('TrueDamageTaken', $data) && $data['TrueDamageTaken'] === null) {
            $object->setTrueDamageTaken(null);
        }
        if (\array_key_exists('GoldEarned', $data) && $data['GoldEarned'] !== null) {
            $object->setGoldEarned($data['GoldEarned']);
        }
        elseif (\array_key_exists('GoldEarned', $data) && $data['GoldEarned'] === null) {
            $object->setGoldEarned(null);
        }
        if (\array_key_exists('GoldSpent', $data) && $data['GoldSpent'] !== null) {
            $object->setGoldSpent($data['GoldSpent']);
        }
        elseif (\array_key_exists('GoldSpent', $data) && $data['GoldSpent'] === null) {
            $object->setGoldSpent(null);
        }
        if (\array_key_exists('TurretKills', $data) && $data['TurretKills'] !== null) {
            $object->setTurretKills($data['TurretKills']);
        }
        elseif (\array_key_exists('TurretKills', $data) && $data['TurretKills'] === null) {
            $object->setTurretKills(null);
        }
        if (\array_key_exists('InhibitorKills', $data) && $data['InhibitorKills'] !== null) {
            $object->setInhibitorKills($data['InhibitorKills']);
        }
        elseif (\array_key_exists('InhibitorKills', $data) && $data['InhibitorKills'] === null) {
            $object->setInhibitorKills(null);
        }
        if (\array_key_exists('TotalMinionsKilled', $data) && $data['TotalMinionsKilled'] !== null) {
            $object->setTotalMinionsKilled($data['TotalMinionsKilled']);
        }
        elseif (\array_key_exists('TotalMinionsKilled', $data) && $data['TotalMinionsKilled'] === null) {
            $object->setTotalMinionsKilled(null);
        }
        if (\array_key_exists('NeutralMinionsKIlled', $data) && $data['NeutralMinionsKIlled'] !== null) {
            $object->setNeutralMinionsKIlled($data['NeutralMinionsKIlled']);
        }
        elseif (\array_key_exists('NeutralMinionsKIlled', $data) && $data['NeutralMinionsKIlled'] === null) {
            $object->setNeutralMinionsKIlled(null);
        }
        if (\array_key_exists('NeutralMinionsKIlledTeamJungle', $data) && $data['NeutralMinionsKIlledTeamJungle'] !== null) {
            $object->setNeutralMinionsKIlledTeamJungle($data['NeutralMinionsKIlledTeamJungle']);
        }
        elseif (\array_key_exists('NeutralMinionsKIlledTeamJungle', $data) && $data['NeutralMinionsKIlledTeamJungle'] === null) {
            $object->setNeutralMinionsKIlledTeamJungle(null);
        }
        if (\array_key_exists('NeutralMinionsKilledEnemyJungle', $data) && $data['NeutralMinionsKilledEnemyJungle'] !== null) {
            $object->setNeutralMinionsKilledEnemyJungle($data['NeutralMinionsKilledEnemyJungle']);
        }
        elseif (\array_key_exists('NeutralMinionsKilledEnemyJungle', $data) && $data['NeutralMinionsKilledEnemyJungle'] === null) {
            $object->setNeutralMinionsKilledEnemyJungle(null);
        }
        if (\array_key_exists('TotalTimeCrowdControlDealt', $data) && $data['TotalTimeCrowdControlDealt'] !== null) {
            $object->setTotalTimeCrowdControlDealt($data['TotalTimeCrowdControlDealt']);
        }
        elseif (\array_key_exists('TotalTimeCrowdControlDealt', $data) && $data['TotalTimeCrowdControlDealt'] === null) {
            $object->setTotalTimeCrowdControlDealt(null);
        }
        if (\array_key_exists('VisionWardsBoughtInGame', $data) && $data['VisionWardsBoughtInGame'] !== null) {
            $object->setVisionWardsBoughtInGame($data['VisionWardsBoughtInGame']);
        }
        elseif (\array_key_exists('VisionWardsBoughtInGame', $data) && $data['VisionWardsBoughtInGame'] === null) {
            $object->setVisionWardsBoughtInGame(null);
        }
        if (\array_key_exists('SightWardsBoughtInGame', $data) && $data['SightWardsBoughtInGame'] !== null) {
            $object->setSightWardsBoughtInGame($data['SightWardsBoughtInGame']);
        }
        elseif (\array_key_exists('SightWardsBoughtInGame', $data) && $data['SightWardsBoughtInGame'] === null) {
            $object->setSightWardsBoughtInGame(null);
        }
        if (\array_key_exists('WardsPlaced', $data) && $data['WardsPlaced'] !== null) {
            $object->setWardsPlaced($data['WardsPlaced']);
        }
        elseif (\array_key_exists('WardsPlaced', $data) && $data['WardsPlaced'] === null) {
            $object->setWardsPlaced(null);
        }
        if (\array_key_exists('WardsKilled', $data) && $data['WardsKilled'] !== null) {
            $object->setWardsKilled($data['WardsKilled']);
        }
        elseif (\array_key_exists('WardsKilled', $data) && $data['WardsKilled'] === null) {
            $object->setWardsKilled(null);
        }
        if (\array_key_exists('CombatPlayerScore', $data) && $data['CombatPlayerScore'] !== null) {
            $object->setCombatPlayerScore($data['CombatPlayerScore']);
        }
        elseif (\array_key_exists('CombatPlayerScore', $data) && $data['CombatPlayerScore'] === null) {
            $object->setCombatPlayerScore(null);
        }
        if (\array_key_exists('ObjectivePlayerScore', $data) && $data['ObjectivePlayerScore'] !== null) {
            $object->setObjectivePlayerScore($data['ObjectivePlayerScore']);
        }
        elseif (\array_key_exists('ObjectivePlayerScore', $data) && $data['ObjectivePlayerScore'] === null) {
            $object->setObjectivePlayerScore(null);
        }
        if (\array_key_exists('TotalPlayerScore', $data) && $data['TotalPlayerScore'] !== null) {
            $object->setTotalPlayerScore($data['TotalPlayerScore']);
        }
        elseif (\array_key_exists('TotalPlayerScore', $data) && $data['TotalPlayerScore'] === null) {
            $object->setTotalPlayerScore(null);
        }
        if (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] !== null) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        elseif (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] === null) {
            $object->setFantasyPoints(null);
        }
        if (\array_key_exists('TenKillsOrAssists', $data) && $data['TenKillsOrAssists'] !== null) {
            $object->setTenKillsOrAssists($data['TenKillsOrAssists']);
        }
        elseif (\array_key_exists('TenKillsOrAssists', $data) && $data['TenKillsOrAssists'] === null) {
            $object->setTenKillsOrAssists(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('Games', $data)) {
            $object->setGames($data['Games']);
        }
        if (\array_key_exists('Matches', $data)) {
            $object->setMatches($data['Matches']);
        }
        if (\array_key_exists('IsClosed', $data)) {
            $object->setIsClosed($data['IsClosed']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFirstBlood()) {
            $data['FirstBlood'] = $object->getFirstBlood();
        }
        if (null !== $object->getFirstTower()) {
            $data['FirstTower'] = $object->getFirstTower();
        }
        if (null !== $object->getFirstInhibitor()) {
            $data['FirstInhibitor'] = $object->getFirstInhibitor();
        }
        if (null !== $object->getFirstBaron()) {
            $data['FirstBaron'] = $object->getFirstBaron();
        }
        if (null !== $object->getFirstDragon()) {
            $data['FirstDragon'] = $object->getFirstDragon();
        }
        if (null !== $object->getFirstRiftHerald()) {
            $data['FirstRiftHerald'] = $object->getFirstRiftHerald();
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
        if (null !== $object->getPosition()) {
            $data['Position'] = $object->getPosition();
        }
        if (null !== $object->getPlayerId()) {
            $data['PlayerId'] = $object->getPlayerId();
        }
        if (null !== $object->getTeamId()) {
            $data['TeamId'] = $object->getTeamId();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getMatchName()) {
            $data['MatchName'] = $object->getMatchName();
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
        if (null !== $object->getLargestKillingSpree()) {
            $data['LargestKillingSpree'] = $object->getLargestKillingSpree();
        }
        if (null !== $object->getLargestMultiKill()) {
            $data['LargestMultiKill'] = $object->getLargestMultiKill();
        }
        if (null !== $object->getKillingSpree()) {
            $data['KillingSpree'] = $object->getKillingSpree();
        }
        if (null !== $object->getLongestTimeSpentLiving()) {
            $data['LongestTimeSpentLiving'] = $object->getLongestTimeSpentLiving();
        }
        if (null !== $object->getDoubleKills()) {
            $data['DoubleKills'] = $object->getDoubleKills();
        }
        if (null !== $object->getTripleKills()) {
            $data['TripleKills'] = $object->getTripleKills();
        }
        if (null !== $object->getQuadraKills()) {
            $data['QuadraKills'] = $object->getQuadraKills();
        }
        if (null !== $object->getPentaKills()) {
            $data['PentaKills'] = $object->getPentaKills();
        }
        if (null !== $object->getUnrealKills()) {
            $data['UnrealKills'] = $object->getUnrealKills();
        }
        if (null !== $object->getTotalDamageDealt()) {
            $data['TotalDamageDealt'] = $object->getTotalDamageDealt();
        }
        if (null !== $object->getMagicDamageDealt()) {
            $data['MagicDamageDealt'] = $object->getMagicDamageDealt();
        }
        if (null !== $object->getPhysicalDamageDealt()) {
            $data['PhysicalDamageDealt'] = $object->getPhysicalDamageDealt();
        }
        if (null !== $object->getTrueDamageDealt()) {
            $data['TrueDamageDealt'] = $object->getTrueDamageDealt();
        }
        if (null !== $object->getLargestCriticalStrike()) {
            $data['LargestCriticalStrike'] = $object->getLargestCriticalStrike();
        }
        if (null !== $object->getTotalDamageDealtToChampions()) {
            $data['TotalDamageDealtToChampions'] = $object->getTotalDamageDealtToChampions();
        }
        if (null !== $object->getMagicDamageDealtToChampions()) {
            $data['MagicDamageDealtToChampions'] = $object->getMagicDamageDealtToChampions();
        }
        if (null !== $object->getPhysicalDamageDealtToChampions()) {
            $data['PhysicalDamageDealtToChampions'] = $object->getPhysicalDamageDealtToChampions();
        }
        if (null !== $object->getTrueDamageDealtToChampions()) {
            $data['TrueDamageDealtToChampions'] = $object->getTrueDamageDealtToChampions();
        }
        if (null !== $object->getTotalHeal()) {
            $data['TotalHeal'] = $object->getTotalHeal();
        }
        if (null !== $object->getTotalUnitsHealed()) {
            $data['TotalUnitsHealed'] = $object->getTotalUnitsHealed();
        }
        if (null !== $object->getTotalDamageTaken()) {
            $data['TotalDamageTaken'] = $object->getTotalDamageTaken();
        }
        if (null !== $object->getMagicDamageTaken()) {
            $data['MagicDamageTaken'] = $object->getMagicDamageTaken();
        }
        if (null !== $object->getPhysicalDamageTaken()) {
            $data['PhysicalDamageTaken'] = $object->getPhysicalDamageTaken();
        }
        if (null !== $object->getTrueDamageTaken()) {
            $data['TrueDamageTaken'] = $object->getTrueDamageTaken();
        }
        if (null !== $object->getGoldEarned()) {
            $data['GoldEarned'] = $object->getGoldEarned();
        }
        if (null !== $object->getGoldSpent()) {
            $data['GoldSpent'] = $object->getGoldSpent();
        }
        if (null !== $object->getTurretKills()) {
            $data['TurretKills'] = $object->getTurretKills();
        }
        if (null !== $object->getInhibitorKills()) {
            $data['InhibitorKills'] = $object->getInhibitorKills();
        }
        if (null !== $object->getTotalMinionsKilled()) {
            $data['TotalMinionsKilled'] = $object->getTotalMinionsKilled();
        }
        if (null !== $object->getNeutralMinionsKIlled()) {
            $data['NeutralMinionsKIlled'] = $object->getNeutralMinionsKIlled();
        }
        if (null !== $object->getNeutralMinionsKIlledTeamJungle()) {
            $data['NeutralMinionsKIlledTeamJungle'] = $object->getNeutralMinionsKIlledTeamJungle();
        }
        if (null !== $object->getNeutralMinionsKilledEnemyJungle()) {
            $data['NeutralMinionsKilledEnemyJungle'] = $object->getNeutralMinionsKilledEnemyJungle();
        }
        if (null !== $object->getTotalTimeCrowdControlDealt()) {
            $data['TotalTimeCrowdControlDealt'] = $object->getTotalTimeCrowdControlDealt();
        }
        if (null !== $object->getVisionWardsBoughtInGame()) {
            $data['VisionWardsBoughtInGame'] = $object->getVisionWardsBoughtInGame();
        }
        if (null !== $object->getSightWardsBoughtInGame()) {
            $data['SightWardsBoughtInGame'] = $object->getSightWardsBoughtInGame();
        }
        if (null !== $object->getWardsPlaced()) {
            $data['WardsPlaced'] = $object->getWardsPlaced();
        }
        if (null !== $object->getWardsKilled()) {
            $data['WardsKilled'] = $object->getWardsKilled();
        }
        if (null !== $object->getCombatPlayerScore()) {
            $data['CombatPlayerScore'] = $object->getCombatPlayerScore();
        }
        if (null !== $object->getObjectivePlayerScore()) {
            $data['ObjectivePlayerScore'] = $object->getObjectivePlayerScore();
        }
        if (null !== $object->getTotalPlayerScore()) {
            $data['TotalPlayerScore'] = $object->getTotalPlayerScore();
        }
        if (null !== $object->getFantasyPoints()) {
            $data['FantasyPoints'] = $object->getFantasyPoints();
        }
        if (null !== $object->getTenKillsOrAssists()) {
            $data['TenKillsOrAssists'] = $object->getTenKillsOrAssists();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getGames()) {
            $data['Games'] = $object->getGames();
        }
        if (null !== $object->getMatches()) {
            $data['Matches'] = $object->getMatches();
        }
        if (null !== $object->getIsClosed()) {
            $data['IsClosed'] = $object->getIsClosed();
        }
        return $data;
    }
}