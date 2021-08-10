<?php

namespace Sportsdata\API\CFB\Normalizer;

use Sportsdata\API\CFB\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Sportsdata\\API\\CFB\\Model\\Conference' => 'Sportsdata\\API\\CFB\\Normalizer\\ConferenceNormalizer', 'Sportsdata\\API\\CFB\\Model\\Team' => 'Sportsdata\\API\\CFB\\Normalizer\\TeamNormalizer', 'Sportsdata\\API\\CFB\\Model\\Game' => 'Sportsdata\\API\\CFB\\Normalizer\\GameNormalizer', 'Sportsdata\\API\\CFB\\Model\\Stadium' => 'Sportsdata\\API\\CFB\\Normalizer\\StadiumNormalizer', 'Sportsdata\\API\\CFB\\Model\\Period' => 'Sportsdata\\API\\CFB\\Normalizer\\PeriodNormalizer', 'Sportsdata\\API\\CFB\\Model\\TeamGame' => 'Sportsdata\\API\\CFB\\Normalizer\\TeamGameNormalizer', 'Sportsdata\\API\\CFB\\Model\\TeamSeason' => 'Sportsdata\\API\\CFB\\Normalizer\\TeamSeasonNormalizer', 'Sportsdata\\API\\CFB\\Model\\Season' => 'Sportsdata\\API\\CFB\\Normalizer\\SeasonNormalizer', 'Sportsdata\\API\\CFB\\Model\\Player' => 'Sportsdata\\API\\CFB\\Normalizer\\PlayerNormalizer', 'Sportsdata\\API\\CFB\\Model\\Error' => 'Sportsdata\\API\\CFB\\Normalizer\\ErrorNormalizer', 'Sportsdata\\API\\CFB\\Model\\BoxScore' => 'Sportsdata\\API\\CFB\\Normalizer\\BoxScoreNormalizer', 'Sportsdata\\API\\CFB\\Model\\PlayerGame' => 'Sportsdata\\API\\CFB\\Normalizer\\PlayerGameNormalizer', 'Sportsdata\\API\\CFB\\Model\\ScoringPlay' => 'Sportsdata\\API\\CFB\\Normalizer\\ScoringPlayNormalizer', 'Sportsdata\\API\\CFB\\Model\\PlayerSeason' => 'Sportsdata\\API\\CFB\\Normalizer\\PlayerSeasonNormalizer', 'Sportsdata\\API\\CFB\\Model\\GameInfo' => 'Sportsdata\\API\\CFB\\Normalizer\\GameInfoNormalizer', 'Sportsdata\\API\\CFB\\Model\\GameOdd' => 'Sportsdata\\API\\CFB\\Normalizer\\GameOddNormalizer', 'Sportsdata\\API\\CFB\\Model\\TeamTrends' => 'Sportsdata\\API\\CFB\\Normalizer\\TeamTrendsNormalizer', 'Sportsdata\\API\\CFB\\Model\\TeamGameTrends' => 'Sportsdata\\API\\CFB\\Normalizer\\TeamGameTrendsNormalizer', 'Sportsdata\\API\\CFB\\Model\\MatchupTrends' => 'Sportsdata\\API\\CFB\\Normalizer\\MatchupTrendsNormalizer', 'Sportsdata\\API\\CFB\\Model\\BettingEvent' => 'Sportsdata\\API\\CFB\\Normalizer\\BettingEventNormalizer', 'Sportsdata\\API\\CFB\\Model\\BettingMarket' => 'Sportsdata\\API\\CFB\\Normalizer\\BettingMarketNormalizer', 'Sportsdata\\API\\CFB\\Model\\Sportsbook' => 'Sportsdata\\API\\CFB\\Normalizer\\SportsbookNormalizer', 'Sportsdata\\API\\CFB\\Model\\BettingOutcome' => 'Sportsdata\\API\\CFB\\Normalizer\\BettingOutcomeNormalizer', 'Sportsdata\\API\\CFB\\Model\\ConsensusOutcome' => 'Sportsdata\\API\\CFB\\Normalizer\\ConsensusOutcomeNormalizer', 'Sportsdata\\API\\CFB\\Model\\BettingEntityMetadata' => 'Sportsdata\\API\\CFB\\Normalizer\\BettingEntityMetadataNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Sportsdata\\API\\CFB\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
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