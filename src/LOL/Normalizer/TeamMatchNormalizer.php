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
        if (\array_key_exists('FirstBlood', $data)) {
            $object->setFirstBlood($data['FirstBlood']);
        }
        if (\array_key_exists('FirstTower', $data)) {
            $object->setFirstTower($data['FirstTower']);
        }
        if (\array_key_exists('FirstInhibitor', $data)) {
            $object->setFirstInhibitor($data['FirstInhibitor']);
        }
        if (\array_key_exists('FirstBaron', $data)) {
            $object->setFirstBaron($data['FirstBaron']);
        }
        if (\array_key_exists('FirstDragon', $data)) {
            $object->setFirstDragon($data['FirstDragon']);
        }
        if (\array_key_exists('FirstRiftHerald', $data)) {
            $object->setFirstRiftHerald($data['FirstRiftHerald']);
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
        if (\array_key_exists('Position', $data)) {
            $object->setPosition($data['Position']);
        }
        if (\array_key_exists('PlayerId', $data)) {
            $object->setPlayerId($data['PlayerId']);
        }
        if (\array_key_exists('TeamId', $data)) {
            $object->setTeamId($data['TeamId']);
        }
        if (\array_key_exists('Team', $data)) {
            $object->setTeam($data['Team']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('MatchName', $data)) {
            $object->setMatchName($data['MatchName']);
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
        if (\array_key_exists('LargestKillingSpree', $data)) {
            $object->setLargestKillingSpree($data['LargestKillingSpree']);
        }
        if (\array_key_exists('LargestMultiKill', $data)) {
            $object->setLargestMultiKill($data['LargestMultiKill']);
        }
        if (\array_key_exists('KillingSpree', $data)) {
            $object->setKillingSpree($data['KillingSpree']);
        }
        if (\array_key_exists('LongestTimeSpentLiving', $data)) {
            $object->setLongestTimeSpentLiving($data['LongestTimeSpentLiving']);
        }
        if (\array_key_exists('DoubleKills', $data)) {
            $object->setDoubleKills($data['DoubleKills']);
        }
        if (\array_key_exists('TripleKills', $data)) {
            $object->setTripleKills($data['TripleKills']);
        }
        if (\array_key_exists('QuadraKills', $data)) {
            $object->setQuadraKills($data['QuadraKills']);
        }
        if (\array_key_exists('PentaKills', $data)) {
            $object->setPentaKills($data['PentaKills']);
        }
        if (\array_key_exists('UnrealKills', $data)) {
            $object->setUnrealKills($data['UnrealKills']);
        }
        if (\array_key_exists('TotalDamageDealt', $data)) {
            $object->setTotalDamageDealt($data['TotalDamageDealt']);
        }
        if (\array_key_exists('MagicDamageDealt', $data)) {
            $object->setMagicDamageDealt($data['MagicDamageDealt']);
        }
        if (\array_key_exists('PhysicalDamageDealt', $data)) {
            $object->setPhysicalDamageDealt($data['PhysicalDamageDealt']);
        }
        if (\array_key_exists('TrueDamageDealt', $data)) {
            $object->setTrueDamageDealt($data['TrueDamageDealt']);
        }
        if (\array_key_exists('LargestCriticalStrike', $data)) {
            $object->setLargestCriticalStrike($data['LargestCriticalStrike']);
        }
        if (\array_key_exists('TotalDamageDealtToChampions', $data)) {
            $object->setTotalDamageDealtToChampions($data['TotalDamageDealtToChampions']);
        }
        if (\array_key_exists('MagicDamageDealtToChampions', $data)) {
            $object->setMagicDamageDealtToChampions($data['MagicDamageDealtToChampions']);
        }
        if (\array_key_exists('PhysicalDamageDealtToChampions', $data)) {
            $object->setPhysicalDamageDealtToChampions($data['PhysicalDamageDealtToChampions']);
        }
        if (\array_key_exists('TrueDamageDealtToChampions', $data)) {
            $object->setTrueDamageDealtToChampions($data['TrueDamageDealtToChampions']);
        }
        if (\array_key_exists('TotalHeal', $data)) {
            $object->setTotalHeal($data['TotalHeal']);
        }
        if (\array_key_exists('TotalUnitsHealed', $data)) {
            $object->setTotalUnitsHealed($data['TotalUnitsHealed']);
        }
        if (\array_key_exists('TotalDamageTaken', $data)) {
            $object->setTotalDamageTaken($data['TotalDamageTaken']);
        }
        if (\array_key_exists('MagicDamageTaken', $data)) {
            $object->setMagicDamageTaken($data['MagicDamageTaken']);
        }
        if (\array_key_exists('PhysicalDamageTaken', $data)) {
            $object->setPhysicalDamageTaken($data['PhysicalDamageTaken']);
        }
        if (\array_key_exists('TrueDamageTaken', $data)) {
            $object->setTrueDamageTaken($data['TrueDamageTaken']);
        }
        if (\array_key_exists('GoldEarned', $data)) {
            $object->setGoldEarned($data['GoldEarned']);
        }
        if (\array_key_exists('GoldSpent', $data)) {
            $object->setGoldSpent($data['GoldSpent']);
        }
        if (\array_key_exists('TurretKills', $data)) {
            $object->setTurretKills($data['TurretKills']);
        }
        if (\array_key_exists('InhibitorKills', $data)) {
            $object->setInhibitorKills($data['InhibitorKills']);
        }
        if (\array_key_exists('TotalMinionsKilled', $data)) {
            $object->setTotalMinionsKilled($data['TotalMinionsKilled']);
        }
        if (\array_key_exists('NeutralMinionsKIlled', $data)) {
            $object->setNeutralMinionsKIlled($data['NeutralMinionsKIlled']);
        }
        if (\array_key_exists('NeutralMinionsKIlledTeamJungle', $data)) {
            $object->setNeutralMinionsKIlledTeamJungle($data['NeutralMinionsKIlledTeamJungle']);
        }
        if (\array_key_exists('NeutralMinionsKilledEnemyJungle', $data)) {
            $object->setNeutralMinionsKilledEnemyJungle($data['NeutralMinionsKilledEnemyJungle']);
        }
        if (\array_key_exists('TotalTimeCrowdControlDealt', $data)) {
            $object->setTotalTimeCrowdControlDealt($data['TotalTimeCrowdControlDealt']);
        }
        if (\array_key_exists('VisionWardsBoughtInGame', $data)) {
            $object->setVisionWardsBoughtInGame($data['VisionWardsBoughtInGame']);
        }
        if (\array_key_exists('SightWardsBoughtInGame', $data)) {
            $object->setSightWardsBoughtInGame($data['SightWardsBoughtInGame']);
        }
        if (\array_key_exists('WardsPlaced', $data)) {
            $object->setWardsPlaced($data['WardsPlaced']);
        }
        if (\array_key_exists('WardsKilled', $data)) {
            $object->setWardsKilled($data['WardsKilled']);
        }
        if (\array_key_exists('CombatPlayerScore', $data)) {
            $object->setCombatPlayerScore($data['CombatPlayerScore']);
        }
        if (\array_key_exists('ObjectivePlayerScore', $data)) {
            $object->setObjectivePlayerScore($data['ObjectivePlayerScore']);
        }
        if (\array_key_exists('TotalPlayerScore', $data)) {
            $object->setTotalPlayerScore($data['TotalPlayerScore']);
        }
        if (\array_key_exists('FantasyPoints', $data)) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        if (\array_key_exists('TenKillsOrAssists', $data)) {
            $object->setTenKillsOrAssists($data['TenKillsOrAssists']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
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