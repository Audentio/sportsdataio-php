<?php

namespace Sportsdata\API\NFL\Normalizer;

use Sportsdata\API\NFL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = array('Sportsdata\\API\\NFL\\Model\\PlayByPlay' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayByPlayNormalizer', 'Sportsdata\\API\\NFL\\Model\\Score' => 'Sportsdata\\API\\NFL\\Normalizer\\ScoreNormalizer', 'Sportsdata\\API\\NFL\\Model\\Stadium' => 'Sportsdata\\API\\NFL\\Normalizer\\StadiumNormalizer', 'Sportsdata\\API\\NFL\\Model\\Quarter' => 'Sportsdata\\API\\NFL\\Normalizer\\QuarterNormalizer', 'Sportsdata\\API\\NFL\\Model\\Play' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayNormalizer', 'Sportsdata\\API\\NFL\\Model\\ScoringPlay' => 'Sportsdata\\API\\NFL\\Normalizer\\ScoringPlayNormalizer', 'Sportsdata\\API\\NFL\\Model\\PlayStat' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayStatNormalizer', 'Sportsdata\\API\\NFL\\Model\\FantasyDefenseSeasonProjection' => 'Sportsdata\\API\\NFL\\Normalizer\\FantasyDefenseSeasonProjectionNormalizer', 'Sportsdata\\API\\NFL\\Model\\ScoringDetail' => 'Sportsdata\\API\\NFL\\Normalizer\\ScoringDetailNormalizer', 'Sportsdata\\API\\NFL\\Model\\FantasyDefenseGameProjection' => 'Sportsdata\\API\\NFL\\Normalizer\\FantasyDefenseGameProjectionNormalizer', 'Sportsdata\\API\\NFL\\Model\\PlayerGameProjection' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerGameProjectionNormalizer', 'Sportsdata\\API\\NFL\\Model\\PlayerSeasonProjection' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerSeasonProjectionNormalizer', 'Sportsdata\\API\\NFL\\Model\\DfsSlate' => 'Sportsdata\\API\\NFL\\Normalizer\\DfsSlateNormalizer', 'Sportsdata\\API\\NFL\\Model\\DfsSlateGame' => 'Sportsdata\\API\\NFL\\Normalizer\\DfsSlateGameNormalizer', 'Sportsdata\\API\\NFL\\Model\\Schedule' => 'Sportsdata\\API\\NFL\\Normalizer\\ScheduleNormalizer', 'Sportsdata\\API\\NFL\\Model\\DfsSlatePlayer' => 'Sportsdata\\API\\NFL\\Normalizer\\DfsSlatePlayerNormalizer', 'Sportsdata\\API\\NFL\\Model\\Article' => 'Sportsdata\\API\\NFL\\Normalizer\\ArticleNormalizer', 'Sportsdata\\API\\NFL\\Model\\PlayerInfo' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerInfoNormalizer', 'Sportsdata\\API\\NFL\\Model\\News' => 'Sportsdata\\API\\NFL\\Normalizer\\NewsNormalizer', 'Sportsdata\\API\\NFL\\Model\\Team' => 'Sportsdata\\API\\NFL\\Normalizer\\TeamNormalizer', 'Sportsdata\\API\\NFL\\Model\\Bye' => 'Sportsdata\\API\\NFL\\Normalizer\\ByeNormalizer', 'Sportsdata\\API\\NFL\\Model\\Standing' => 'Sportsdata\\API\\NFL\\Normalizer\\StandingNormalizer', 'Sportsdata\\API\\NFL\\Model\\Timeframe' => 'Sportsdata\\API\\NFL\\Normalizer\\TimeframeNormalizer', 'Sportsdata\\API\\NFL\\Model\\Game' => 'Sportsdata\\API\\NFL\\Normalizer\\GameNormalizer', 'Sportsdata\\API\\NFL\\Model\\TeamGame' => 'Sportsdata\\API\\NFL\\Normalizer\\TeamGameNormalizer', 'Sportsdata\\API\\NFL\\Model\\TeamSeason' => 'Sportsdata\\API\\NFL\\Normalizer\\TeamSeasonNormalizer', 'Sportsdata\\API\\NFL\\Model\\Player' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerNormalizer', 'Sportsdata\\API\\NFL\\Model\\PlayerDetail' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerDetailNormalizer', 'Sportsdata\\API\\NFL\\Model\\PlayerSeason' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerSeasonNormalizer', 'Sportsdata\\API\\NFL\\Model\\Referee' => 'Sportsdata\\API\\NFL\\Normalizer\\RefereeNormalizer', 'Sportsdata\\API\\NFL\\Model\\BoxScore' => 'Sportsdata\\API\\NFL\\Normalizer\\BoxScoreNormalizer', 'Sportsdata\\API\\NFL\\Model\\FantasyDefenseGame' => 'Sportsdata\\API\\NFL\\Normalizer\\FantasyDefenseGameNormalizer', 'Sportsdata\\API\\NFL\\Model\\PlayerPassing' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerPassingNormalizer', 'Sportsdata\\API\\NFL\\Model\\PlayerRushing' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerRushingNormalizer', 'Sportsdata\\API\\NFL\\Model\\PlayerReceiving' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerReceivingNormalizer', 'Sportsdata\\API\\NFL\\Model\\PlayerKicking' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerKickingNormalizer', 'Sportsdata\\API\\NFL\\Model\\PlayerPunting' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerPuntingNormalizer', 'Sportsdata\\API\\NFL\\Model\\PlayerKickPuntReturns' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerKickPuntReturnsNormalizer', 'Sportsdata\\API\\NFL\\Model\\PlayerDefense' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerDefenseNormalizer', 'Sportsdata\\API\\NFL\\Model\\DailyFantasyPlayer' => 'Sportsdata\\API\\NFL\\Normalizer\\DailyFantasyPlayerNormalizer', 'Sportsdata\\API\\NFL\\Model\\PlayerGame' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerGameNormalizer', 'Sportsdata\\API\\NFL\\Model\\FantasyDefenseSeason' => 'Sportsdata\\API\\NFL\\Normalizer\\FantasyDefenseSeasonNormalizer', 'Sportsdata\\API\\NFL\\Model\\Injury' => 'Sportsdata\\API\\NFL\\Normalizer\\InjuryNormalizer', 'Sportsdata\\API\\NFL\\Model\\FantasyPlayer' => 'Sportsdata\\API\\NFL\\Normalizer\\FantasyPlayerNormalizer', 'Sportsdata\\API\\NFL\\Model\\DailyFantasyScoring' => 'Sportsdata\\API\\NFL\\Normalizer\\DailyFantasyScoringNormalizer', 'Sportsdata\\API\\NFL\\Model\\PlayerSeasonRedZone' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerSeasonRedZoneNormalizer', 'Sportsdata\\API\\NFL\\Model\\PlayerSeasonThirdDown' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerSeasonThirdDownNormalizer', 'Sportsdata\\API\\NFL\\Model\\BoxScoreV3' => 'Sportsdata\\API\\NFL\\Normalizer\\BoxScoreV3Normalizer', 'Sportsdata\\API\\NFL\\Model\\PlayerOwnership' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerOwnershipNormalizer', 'Sportsdata\\API\\NFL\\Model\\PlayerGameRedZone' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerGameRedZoneNormalizer', 'Sportsdata\\API\\NFL\\Model\\GameInfo' => 'Sportsdata\\API\\NFL\\Normalizer\\GameInfoNormalizer', 'Sportsdata\\API\\NFL\\Model\\GameOdd' => 'Sportsdata\\API\\NFL\\Normalizer\\GameOddNormalizer', 'Sportsdata\\API\\NFL\\Model\\PlayerProp' => 'Sportsdata\\API\\NFL\\Normalizer\\PlayerPropNormalizer', 'Sportsdata\\API\\NFL\\Model\\TeamTrends' => 'Sportsdata\\API\\NFL\\Normalizer\\TeamTrendsNormalizer', 'Sportsdata\\API\\NFL\\Model\\TeamGameTrends' => 'Sportsdata\\API\\NFL\\Normalizer\\TeamGameTrendsNormalizer', 'Sportsdata\\API\\NFL\\Model\\MatchupTrends' => 'Sportsdata\\API\\NFL\\Normalizer\\MatchupTrendsNormalizer', 'Sportsdata\\API\\NFL\\Model\\BettingEvent' => 'Sportsdata\\API\\NFL\\Normalizer\\BettingEventNormalizer', 'Sportsdata\\API\\NFL\\Model\\BettingMarket' => 'Sportsdata\\API\\NFL\\Normalizer\\BettingMarketNormalizer', 'Sportsdata\\API\\NFL\\Model\\Sportsbook' => 'Sportsdata\\API\\NFL\\Normalizer\\SportsbookNormalizer', 'Sportsdata\\API\\NFL\\Model\\BettingOutcome' => 'Sportsdata\\API\\NFL\\Normalizer\\BettingOutcomeNormalizer', 'Sportsdata\\API\\NFL\\Model\\ConsensusOutcome' => 'Sportsdata\\API\\NFL\\Normalizer\\ConsensusOutcomeNormalizer', 'Sportsdata\\API\\NFL\\Model\\BettingEntityMetadata' => 'Sportsdata\\API\\NFL\\Normalizer\\BettingEntityMetadataNormalizer', 'Sportsdata\\API\\NFL\\Model\\AdvancedPlayerGame' => 'Sportsdata\\API\\NFL\\Normalizer\\AdvancedPlayerGameNormalizer', 'Sportsdata\\API\\NFL\\Model\\AdvancedPlayer' => 'Sportsdata\\API\\NFL\\Normalizer\\AdvancedPlayerNormalizer', 'Sportsdata\\API\\NFL\\Model\\AdvancedPlayerMedical' => 'Sportsdata\\API\\NFL\\Normalizer\\AdvancedPlayerMedicalNormalizer', 'Sportsdata\\API\\NFL\\Model\\AdvancedPlayerSeason' => 'Sportsdata\\API\\NFL\\Normalizer\\AdvancedPlayerSeasonNormalizer', 'Sportsdata\\API\\NFL\\Model\\Headshot' => 'Sportsdata\\API\\NFL\\Normalizer\\HeadshotNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Sportsdata\\API\\NFL\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}