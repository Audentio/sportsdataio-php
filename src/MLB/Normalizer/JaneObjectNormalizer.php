<?php

namespace Sportsdata\API\MLB\Normalizer;

use Sportsdata\API\MLB\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Sportsdata\\API\\MLB\\Model\\PlayByPlay' => 'Sportsdata\\API\\MLB\\Normalizer\\PlayByPlayNormalizer', 'Sportsdata\\API\\MLB\\Model\\Game' => 'Sportsdata\\API\\MLB\\Normalizer\\GameNormalizer', 'Sportsdata\\API\\MLB\\Model\\Inning' => 'Sportsdata\\API\\MLB\\Normalizer\\InningNormalizer', 'Sportsdata\\API\\MLB\\Model\\Play' => 'Sportsdata\\API\\MLB\\Normalizer\\PlayNormalizer', 'Sportsdata\\API\\MLB\\Model\\Pitch' => 'Sportsdata\\API\\MLB\\Normalizer\\PitchNormalizer', 'Sportsdata\\API\\MLB\\Model\\Error' => 'Sportsdata\\API\\MLB\\Normalizer\\ErrorNormalizer', 'Sportsdata\\API\\MLB\\Model\\PlayerGameProjection' => 'Sportsdata\\API\\MLB\\Normalizer\\PlayerGameProjectionNormalizer', 'Sportsdata\\API\\MLB\\Model\\PlayerSeasonProjection' => 'Sportsdata\\API\\MLB\\Normalizer\\PlayerSeasonProjectionNormalizer', 'Sportsdata\\API\\MLB\\Model\\DfsSlate' => 'Sportsdata\\API\\MLB\\Normalizer\\DfsSlateNormalizer', 'Sportsdata\\API\\MLB\\Model\\DfsSlateGame' => 'Sportsdata\\API\\MLB\\Normalizer\\DfsSlateGameNormalizer', 'Sportsdata\\API\\MLB\\Model\\DfsSlatePlayer' => 'Sportsdata\\API\\MLB\\Normalizer\\DfsSlatePlayerNormalizer', 'Sportsdata\\API\\MLB\\Model\\Article' => 'Sportsdata\\API\\MLB\\Normalizer\\ArticleNormalizer', 'Sportsdata\\API\\MLB\\Model\\PlayerInfo' => 'Sportsdata\\API\\MLB\\Normalizer\\PlayerInfoNormalizer', 'Sportsdata\\API\\MLB\\Model\\News' => 'Sportsdata\\API\\MLB\\Normalizer\\NewsNormalizer', 'Sportsdata\\API\\MLB\\Model\\Team' => 'Sportsdata\\API\\MLB\\Normalizer\\TeamNormalizer', 'Sportsdata\\API\\MLB\\Model\\Stadium' => 'Sportsdata\\API\\MLB\\Normalizer\\StadiumNormalizer', 'Sportsdata\\API\\MLB\\Model\\Player' => 'Sportsdata\\API\\MLB\\Normalizer\\PlayerNormalizer', 'Sportsdata\\API\\MLB\\Model\\TeamGame' => 'Sportsdata\\API\\MLB\\Normalizer\\TeamGameNormalizer', 'Sportsdata\\API\\MLB\\Model\\TeamSeason' => 'Sportsdata\\API\\MLB\\Normalizer\\TeamSeasonNormalizer', 'Sportsdata\\API\\MLB\\Model\\Season' => 'Sportsdata\\API\\MLB\\Normalizer\\SeasonNormalizer', 'Sportsdata\\API\\MLB\\Model\\Standing' => 'Sportsdata\\API\\MLB\\Normalizer\\StandingNormalizer', 'Sportsdata\\API\\MLB\\Model\\PlayerGame' => 'Sportsdata\\API\\MLB\\Normalizer\\PlayerGameNormalizer', 'Sportsdata\\API\\MLB\\Model\\PlayerSeason' => 'Sportsdata\\API\\MLB\\Normalizer\\PlayerSeasonNormalizer', 'Sportsdata\\API\\MLB\\Model\\BoxScore' => 'Sportsdata\\API\\MLB\\Normalizer\\BoxScoreNormalizer', 'Sportsdata\\API\\MLB\\Model\\GameInfo' => 'Sportsdata\\API\\MLB\\Normalizer\\GameInfoNormalizer', 'Sportsdata\\API\\MLB\\Model\\GameOdd' => 'Sportsdata\\API\\MLB\\Normalizer\\GameOddNormalizer', 'Sportsdata\\API\\MLB\\Model\\PlayerProp' => 'Sportsdata\\API\\MLB\\Normalizer\\PlayerPropNormalizer', 'Sportsdata\\API\\MLB\\Model\\TeamTrends' => 'Sportsdata\\API\\MLB\\Normalizer\\TeamTrendsNormalizer', 'Sportsdata\\API\\MLB\\Model\\TeamGameTrends' => 'Sportsdata\\API\\MLB\\Normalizer\\TeamGameTrendsNormalizer', 'Sportsdata\\API\\MLB\\Model\\MatchupTrends' => 'Sportsdata\\API\\MLB\\Normalizer\\MatchupTrendsNormalizer', 'Sportsdata\\API\\MLB\\Model\\BettingEvent' => 'Sportsdata\\API\\MLB\\Normalizer\\BettingEventNormalizer', 'Sportsdata\\API\\MLB\\Model\\BettingMarket' => 'Sportsdata\\API\\MLB\\Normalizer\\BettingMarketNormalizer', 'Sportsdata\\API\\MLB\\Model\\Sportsbook' => 'Sportsdata\\API\\MLB\\Normalizer\\SportsbookNormalizer', 'Sportsdata\\API\\MLB\\Model\\BettingOutcome' => 'Sportsdata\\API\\MLB\\Normalizer\\BettingOutcomeNormalizer', 'Sportsdata\\API\\MLB\\Model\\ConsensusOutcome' => 'Sportsdata\\API\\MLB\\Normalizer\\ConsensusOutcomeNormalizer', 'Sportsdata\\API\\MLB\\Model\\BettingEntityMetadata' => 'Sportsdata\\API\\MLB\\Normalizer\\BettingEntityMetadataNormalizer', 'Sportsdata\\API\\MLB\\Model\\Headshot' => 'Sportsdata\\API\\MLB\\Normalizer\\HeadshotNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Sportsdata\\API\\MLB\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
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