<?php

namespace Sportsdata\API\NBA\Normalizer;

use Sportsdata\API\NBA\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Sportsdata\\API\\NBA\\Model\\PlayByPlay' => 'Sportsdata\\API\\NBA\\Normalizer\\PlayByPlayNormalizer', 'Sportsdata\\API\\NBA\\Model\\Game' => 'Sportsdata\\API\\NBA\\Normalizer\\GameNormalizer', 'Sportsdata\\API\\NBA\\Model\\Quarter' => 'Sportsdata\\API\\NBA\\Normalizer\\QuarterNormalizer', 'Sportsdata\\API\\NBA\\Model\\Play' => 'Sportsdata\\API\\NBA\\Normalizer\\PlayNormalizer', 'Sportsdata\\API\\NBA\\Model\\PlayerGameProjection' => 'Sportsdata\\API\\NBA\\Normalizer\\PlayerGameProjectionNormalizer', 'Sportsdata\\API\\NBA\\Model\\DfsSlate' => 'Sportsdata\\API\\NBA\\Normalizer\\DfsSlateNormalizer', 'Sportsdata\\API\\NBA\\Model\\DfsSlateGame' => 'Sportsdata\\API\\NBA\\Normalizer\\DfsSlateGameNormalizer', 'Sportsdata\\API\\NBA\\Model\\DfsSlatePlayer' => 'Sportsdata\\API\\NBA\\Normalizer\\DfsSlatePlayerNormalizer', 'Sportsdata\\API\\NBA\\Model\\PlayerSeasonProjection' => 'Sportsdata\\API\\NBA\\Normalizer\\PlayerSeasonProjectionNormalizer', 'Sportsdata\\API\\NBA\\Model\\Article' => 'Sportsdata\\API\\NBA\\Normalizer\\ArticleNormalizer', 'Sportsdata\\API\\NBA\\Model\\PlayerInfo' => 'Sportsdata\\API\\NBA\\Normalizer\\PlayerInfoNormalizer', 'Sportsdata\\API\\NBA\\Model\\News' => 'Sportsdata\\API\\NBA\\Normalizer\\NewsNormalizer', 'Sportsdata\\API\\NBA\\Model\\Team' => 'Sportsdata\\API\\NBA\\Normalizer\\TeamNormalizer', 'Sportsdata\\API\\NBA\\Model\\Stadium' => 'Sportsdata\\API\\NBA\\Normalizer\\StadiumNormalizer', 'Sportsdata\\API\\NBA\\Model\\TeamGame' => 'Sportsdata\\API\\NBA\\Normalizer\\TeamGameNormalizer', 'Sportsdata\\API\\NBA\\Model\\TeamSeason' => 'Sportsdata\\API\\NBA\\Normalizer\\TeamSeasonNormalizer', 'Sportsdata\\API\\NBA\\Model\\OpponentSeason' => 'Sportsdata\\API\\NBA\\Normalizer\\OpponentSeasonNormalizer', 'Sportsdata\\API\\NBA\\Model\\Season' => 'Sportsdata\\API\\NBA\\Normalizer\\SeasonNormalizer', 'Sportsdata\\API\\NBA\\Model\\Standing' => 'Sportsdata\\API\\NBA\\Normalizer\\StandingNormalizer', 'Sportsdata\\API\\NBA\\Model\\Player' => 'Sportsdata\\API\\NBA\\Normalizer\\PlayerNormalizer', 'Sportsdata\\API\\NBA\\Model\\BoxScore' => 'Sportsdata\\API\\NBA\\Normalizer\\BoxScoreNormalizer', 'Sportsdata\\API\\NBA\\Model\\PlayerGame' => 'Sportsdata\\API\\NBA\\Normalizer\\PlayerGameNormalizer', 'Sportsdata\\API\\NBA\\Model\\PlayerSeason' => 'Sportsdata\\API\\NBA\\Normalizer\\PlayerSeasonNormalizer', 'Sportsdata\\API\\NBA\\Model\\GameInfo' => 'Sportsdata\\API\\NBA\\Normalizer\\GameInfoNormalizer', 'Sportsdata\\API\\NBA\\Model\\GameOdd' => 'Sportsdata\\API\\NBA\\Normalizer\\GameOddNormalizer', 'Sportsdata\\API\\NBA\\Model\\PlayerProp' => 'Sportsdata\\API\\NBA\\Normalizer\\PlayerPropNormalizer', 'Sportsdata\\API\\NBA\\Model\\BettingEvent' => 'Sportsdata\\API\\NBA\\Normalizer\\BettingEventNormalizer', 'Sportsdata\\API\\NBA\\Model\\BettingMarket' => 'Sportsdata\\API\\NBA\\Normalizer\\BettingMarketNormalizer', 'Sportsdata\\API\\NBA\\Model\\Sportsbook' => 'Sportsdata\\API\\NBA\\Normalizer\\SportsbookNormalizer', 'Sportsdata\\API\\NBA\\Model\\BettingOutcome' => 'Sportsdata\\API\\NBA\\Normalizer\\BettingOutcomeNormalizer', 'Sportsdata\\API\\NBA\\Model\\ConsensusOutcome' => 'Sportsdata\\API\\NBA\\Normalizer\\ConsensusOutcomeNormalizer', 'Sportsdata\\API\\NBA\\Model\\TeamTrends' => 'Sportsdata\\API\\NBA\\Normalizer\\TeamTrendsNormalizer', 'Sportsdata\\API\\NBA\\Model\\TeamGameTrends' => 'Sportsdata\\API\\NBA\\Normalizer\\TeamGameTrendsNormalizer', 'Sportsdata\\API\\NBA\\Model\\MatchupTrends' => 'Sportsdata\\API\\NBA\\Normalizer\\MatchupTrendsNormalizer', 'Sportsdata\\API\\NBA\\Model\\BettingEntityMetadata' => 'Sportsdata\\API\\NBA\\Normalizer\\BettingEntityMetadataNormalizer', 'Sportsdata\\API\\NBA\\Model\\BettingMarketResult' => 'Sportsdata\\API\\NBA\\Normalizer\\BettingMarketResultNormalizer', 'Sportsdata\\API\\NBA\\Model\\BettingOutcomeResult' => 'Sportsdata\\API\\NBA\\Normalizer\\BettingOutcomeResultNormalizer', 'Sportsdata\\API\\NBA\\Model\\Headshot' => 'Sportsdata\\API\\NBA\\Normalizer\\HeadshotNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Sportsdata\\API\\NBA\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
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