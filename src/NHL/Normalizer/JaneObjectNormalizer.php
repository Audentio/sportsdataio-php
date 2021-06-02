<?php

namespace Sportsdata\API\NHL\Normalizer;

use Sportsdata\API\NHL\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Sportsdata\\API\\NHL\\Model\\PlayByPlay' => 'Sportsdata\\API\\NHL\\Normalizer\\PlayByPlayNormalizer', 'Sportsdata\\API\\NHL\\Model\\Game' => 'Sportsdata\\API\\NHL\\Normalizer\\GameNormalizer', 'Sportsdata\\API\\NHL\\Model\\Period' => 'Sportsdata\\API\\NHL\\Normalizer\\PeriodNormalizer', 'Sportsdata\\API\\NHL\\Model\\ScoringPlay' => 'Sportsdata\\API\\NHL\\Normalizer\\ScoringPlayNormalizer', 'Sportsdata\\API\\NHL\\Model\\Penalty' => 'Sportsdata\\API\\NHL\\Normalizer\\PenaltyNormalizer', 'Sportsdata\\API\\NHL\\Model\\Play' => 'Sportsdata\\API\\NHL\\Normalizer\\PlayNormalizer', 'Sportsdata\\API\\NHL\\Model\\PlayerGameProjection' => 'Sportsdata\\API\\NHL\\Normalizer\\PlayerGameProjectionNormalizer', 'Sportsdata\\API\\NHL\\Model\\DfsSlate' => 'Sportsdata\\API\\NHL\\Normalizer\\DfsSlateNormalizer', 'Sportsdata\\API\\NHL\\Model\\DfsSlateGame' => 'Sportsdata\\API\\NHL\\Normalizer\\DfsSlateGameNormalizer', 'Sportsdata\\API\\NHL\\Model\\DfsSlatePlayer' => 'Sportsdata\\API\\NHL\\Normalizer\\DfsSlatePlayerNormalizer', 'Sportsdata\\API\\NHL\\Model\\Player' => 'Sportsdata\\API\\NHL\\Normalizer\\PlayerNormalizer', 'Sportsdata\\API\\NHL\\Model\\Team' => 'Sportsdata\\API\\NHL\\Normalizer\\TeamNormalizer', 'Sportsdata\\API\\NHL\\Model\\News' => 'Sportsdata\\API\\NHL\\Normalizer\\NewsNormalizer', 'Sportsdata\\API\\NHL\\Model\\Stadium' => 'Sportsdata\\API\\NHL\\Normalizer\\StadiumNormalizer', 'Sportsdata\\API\\NHL\\Model\\TeamGame' => 'Sportsdata\\API\\NHL\\Normalizer\\TeamGameNormalizer', 'Sportsdata\\API\\NHL\\Model\\TeamSeason' => 'Sportsdata\\API\\NHL\\Normalizer\\TeamSeasonNormalizer', 'Sportsdata\\API\\NHL\\Model\\OpponentSeason' => 'Sportsdata\\API\\NHL\\Normalizer\\OpponentSeasonNormalizer', 'Sportsdata\\API\\NHL\\Model\\Season' => 'Sportsdata\\API\\NHL\\Normalizer\\SeasonNormalizer', 'Sportsdata\\API\\NHL\\Model\\Standing' => 'Sportsdata\\API\\NHL\\Normalizer\\StandingNormalizer', 'Sportsdata\\API\\NHL\\Model\\BoxScore' => 'Sportsdata\\API\\NHL\\Normalizer\\BoxScoreNormalizer', 'Sportsdata\\API\\NHL\\Model\\PlayerGame' => 'Sportsdata\\API\\NHL\\Normalizer\\PlayerGameNormalizer', 'Sportsdata\\API\\NHL\\Model\\PlayerSeason' => 'Sportsdata\\API\\NHL\\Normalizer\\PlayerSeasonNormalizer', 'Sportsdata\\API\\NHL\\Model\\TeamLine' => 'Sportsdata\\API\\NHL\\Normalizer\\TeamLineNormalizer', 'Sportsdata\\API\\NHL\\Model\\PlayerLine' => 'Sportsdata\\API\\NHL\\Normalizer\\PlayerLineNormalizer', 'Sportsdata\\API\\NHL\\Model\\GameInfo' => 'Sportsdata\\API\\NHL\\Normalizer\\GameInfoNormalizer', 'Sportsdata\\API\\NHL\\Model\\GameOdd' => 'Sportsdata\\API\\NHL\\Normalizer\\GameOddNormalizer', 'Sportsdata\\API\\NHL\\Model\\PlayerProp' => 'Sportsdata\\API\\NHL\\Normalizer\\PlayerPropNormalizer', 'Sportsdata\\API\\NHL\\Model\\TeamTrends' => 'Sportsdata\\API\\NHL\\Normalizer\\TeamTrendsNormalizer', 'Sportsdata\\API\\NHL\\Model\\TeamGameTrends' => 'Sportsdata\\API\\NHL\\Normalizer\\TeamGameTrendsNormalizer', 'Sportsdata\\API\\NHL\\Model\\MatchupTrends' => 'Sportsdata\\API\\NHL\\Normalizer\\MatchupTrendsNormalizer', 'Sportsdata\\API\\NHL\\Model\\BettingEvent' => 'Sportsdata\\API\\NHL\\Normalizer\\BettingEventNormalizer', 'Sportsdata\\API\\NHL\\Model\\BettingMarket' => 'Sportsdata\\API\\NHL\\Normalizer\\BettingMarketNormalizer', 'Sportsdata\\API\\NHL\\Model\\Sportsbook' => 'Sportsdata\\API\\NHL\\Normalizer\\SportsbookNormalizer', 'Sportsdata\\API\\NHL\\Model\\BettingOutcome' => 'Sportsdata\\API\\NHL\\Normalizer\\BettingOutcomeNormalizer', 'Sportsdata\\API\\NHL\\Model\\ConsensusOutcome' => 'Sportsdata\\API\\NHL\\Normalizer\\ConsensusOutcomeNormalizer', 'Sportsdata\\API\\NHL\\Model\\BettingEntityMetadata' => 'Sportsdata\\API\\NHL\\Normalizer\\BettingEntityMetadataNormalizer', 'Sportsdata\\API\\NHL\\Model\\Headshot' => 'Sportsdata\\API\\NHL\\Normalizer\\HeadshotNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Sportsdata\\API\\NHL\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
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