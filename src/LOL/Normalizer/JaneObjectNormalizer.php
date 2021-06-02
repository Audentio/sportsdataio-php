<?php

namespace Sportsdata\API\LOL\Normalizer;

use Sportsdata\API\LOL\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Sportsdata\\API\\LOL\\Model\\PlayerGameProjection' => 'Sportsdata\\API\\LOL\\Normalizer\\PlayerGameProjectionNormalizer', 'Sportsdata\\API\\LOL\\Model\\DfsSlate' => 'Sportsdata\\API\\LOL\\Normalizer\\DfsSlateNormalizer', 'Sportsdata\\API\\LOL\\Model\\DfsSlateGame' => 'Sportsdata\\API\\LOL\\Normalizer\\DfsSlateGameNormalizer', 'Sportsdata\\API\\LOL\\Model\\Game' => 'Sportsdata\\API\\LOL\\Normalizer\\GameNormalizer', 'Sportsdata\\API\\LOL\\Model\\DfsSlatePlayer' => 'Sportsdata\\API\\LOL\\Normalizer\\DfsSlatePlayerNormalizer', 'Sportsdata\\API\\LOL\\Model\\Area' => 'Sportsdata\\API\\LOL\\Normalizer\\AreaNormalizer', 'Sportsdata\\API\\LOL\\Model\\Competition' => 'Sportsdata\\API\\LOL\\Normalizer\\CompetitionNormalizer', 'Sportsdata\\API\\LOL\\Model\\Season' => 'Sportsdata\\API\\LOL\\Normalizer\\SeasonNormalizer', 'Sportsdata\\API\\LOL\\Model\\Round' => 'Sportsdata\\API\\LOL\\Normalizer\\RoundNormalizer', 'Sportsdata\\API\\LOL\\Model\\Team' => 'Sportsdata\\API\\LOL\\Normalizer\\TeamNormalizer', 'Sportsdata\\API\\LOL\\Model\\Venue' => 'Sportsdata\\API\\LOL\\Normalizer\\VenueNormalizer', 'Sportsdata\\API\\LOL\\Model\\SeasonTeam' => 'Sportsdata\\API\\LOL\\Normalizer\\SeasonTeamNormalizer', 'Sportsdata\\API\\LOL\\Model\\Player' => 'Sportsdata\\API\\LOL\\Normalizer\\PlayerNormalizer', 'Sportsdata\\API\\LOL\\Model\\CompetitionDetail' => 'Sportsdata\\API\\LOL\\Normalizer\\CompetitionDetailNormalizer', 'Sportsdata\\API\\LOL\\Model\\TeamDetail' => 'Sportsdata\\API\\LOL\\Normalizer\\TeamDetailNormalizer', 'Sportsdata\\API\\LOL\\Model\\Membership' => 'Sportsdata\\API\\LOL\\Normalizer\\MembershipNormalizer', 'Sportsdata\\API\\LOL\\Model\\Standing' => 'Sportsdata\\API\\LOL\\Normalizer\\StandingNormalizer', 'Sportsdata\\API\\LOL\\Model\\BoxScore' => 'Sportsdata\\API\\LOL\\Normalizer\\BoxScoreNormalizer', 'Sportsdata\\API\\LOL\\Model\\Match' => 'Sportsdata\\API\\LOL\\Normalizer\\MatchNormalizer', 'Sportsdata\\API\\LOL\\Model\\MatchBan' => 'Sportsdata\\API\\LOL\\Normalizer\\MatchBanNormalizer', 'Sportsdata\\API\\LOL\\Model\\ChampionInfo' => 'Sportsdata\\API\\LOL\\Normalizer\\ChampionInfoNormalizer', 'Sportsdata\\API\\LOL\\Model\\PlayerMatch' => 'Sportsdata\\API\\LOL\\Normalizer\\PlayerMatchNormalizer', 'Sportsdata\\API\\LOL\\Model\\Item' => 'Sportsdata\\API\\LOL\\Normalizer\\ItemNormalizer', 'Sportsdata\\API\\LOL\\Model\\Spell' => 'Sportsdata\\API\\LOL\\Normalizer\\SpellNormalizer', 'Sportsdata\\API\\LOL\\Model\\TeamMatch' => 'Sportsdata\\API\\LOL\\Normalizer\\TeamMatchNormalizer', 'Sportsdata\\API\\LOL\\Model\\PlayerGame' => 'Sportsdata\\API\\LOL\\Normalizer\\PlayerGameNormalizer', 'Sportsdata\\API\\LOL\\Model\\TeamGame' => 'Sportsdata\\API\\LOL\\Normalizer\\TeamGameNormalizer', 'Sportsdata\\API\\LOL\\Model\\Champion' => 'Sportsdata\\API\\LOL\\Normalizer\\ChampionNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Sportsdata\\API\\LOL\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
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