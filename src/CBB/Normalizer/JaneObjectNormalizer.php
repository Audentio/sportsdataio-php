<?php

namespace Sportsdata\API\CBB\Normalizer;

use Sportsdata\API\CBB\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Sportsdata\\API\\CBB\\Model\\Player' => 'Sportsdata\\API\\CBB\\Normalizer\\PlayerNormalizer', 'Sportsdata\\API\\CBB\\Model\\Team' => 'Sportsdata\\API\\CBB\\Normalizer\\TeamNormalizer', 'Sportsdata\\API\\CBB\\Model\\Stadium' => 'Sportsdata\\API\\CBB\\Normalizer\\StadiumNormalizer', 'Sportsdata\\API\\CBB\\Model\\Game' => 'Sportsdata\\API\\CBB\\Normalizer\\GameNormalizer', 'Sportsdata\\API\\CBB\\Model\\Period' => 'Sportsdata\\API\\CBB\\Normalizer\\PeriodNormalizer', 'Sportsdata\\API\\CBB\\Model\\TeamGame' => 'Sportsdata\\API\\CBB\\Normalizer\\TeamGameNormalizer', 'Sportsdata\\API\\CBB\\Model\\TeamSeason' => 'Sportsdata\\API\\CBB\\Normalizer\\TeamSeasonNormalizer', 'Sportsdata\\API\\CBB\\Model\\Season' => 'Sportsdata\\API\\CBB\\Normalizer\\SeasonNormalizer', 'Sportsdata\\API\\CBB\\Model\\Conference' => 'Sportsdata\\API\\CBB\\Normalizer\\ConferenceNormalizer', 'Sportsdata\\API\\CBB\\Model\\Tournament' => 'Sportsdata\\API\\CBB\\Normalizer\\TournamentNormalizer', 'Sportsdata\\API\\CBB\\Model\\Error' => 'Sportsdata\\API\\CBB\\Normalizer\\ErrorNormalizer', 'Sportsdata\\API\\CBB\\Model\\BoxScore' => 'Sportsdata\\API\\CBB\\Normalizer\\BoxScoreNormalizer', 'Sportsdata\\API\\CBB\\Model\\PlayerGame' => 'Sportsdata\\API\\CBB\\Normalizer\\PlayerGameNormalizer', 'Sportsdata\\API\\CBB\\Model\\PlayerSeason' => 'Sportsdata\\API\\CBB\\Normalizer\\PlayerSeasonNormalizer', 'Sportsdata\\API\\CBB\\Model\\PlayerGameProjection' => 'Sportsdata\\API\\CBB\\Normalizer\\PlayerGameProjectionNormalizer', 'Sportsdata\\API\\CBB\\Model\\GameInfo' => 'Sportsdata\\API\\CBB\\Normalizer\\GameInfoNormalizer', 'Sportsdata\\API\\CBB\\Model\\GameOdd' => 'Sportsdata\\API\\CBB\\Normalizer\\GameOddNormalizer', 'Sportsdata\\API\\CBB\\Model\\TeamTrends' => 'Sportsdata\\API\\CBB\\Normalizer\\TeamTrendsNormalizer', 'Sportsdata\\API\\CBB\\Model\\TeamGameTrends' => 'Sportsdata\\API\\CBB\\Normalizer\\TeamGameTrendsNormalizer', 'Sportsdata\\API\\CBB\\Model\\MatchupTrends' => 'Sportsdata\\API\\CBB\\Normalizer\\MatchupTrendsNormalizer', 'Sportsdata\\API\\CBB\\Model\\BettingEvent' => 'Sportsdata\\API\\CBB\\Normalizer\\BettingEventNormalizer', 'Sportsdata\\API\\CBB\\Model\\BettingMarket' => 'Sportsdata\\API\\CBB\\Normalizer\\BettingMarketNormalizer', 'Sportsdata\\API\\CBB\\Model\\Sportsbook' => 'Sportsdata\\API\\CBB\\Normalizer\\SportsbookNormalizer', 'Sportsdata\\API\\CBB\\Model\\BettingOutcome' => 'Sportsdata\\API\\CBB\\Normalizer\\BettingOutcomeNormalizer', 'Sportsdata\\API\\CBB\\Model\\ConsensusOutcome' => 'Sportsdata\\API\\CBB\\Normalizer\\ConsensusOutcomeNormalizer', 'Sportsdata\\API\\CBB\\Model\\BettingEntityMetadata' => 'Sportsdata\\API\\CBB\\Normalizer\\BettingEntityMetadataNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Sportsdata\\API\\CBB\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
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