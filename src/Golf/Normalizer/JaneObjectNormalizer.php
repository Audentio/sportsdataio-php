<?php

namespace Sportsdata\API\Golf\Normalizer;

use Sportsdata\API\Golf\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Sportsdata\\API\\Golf\\Model\\Tournament' => 'Sportsdata\\API\\Golf\\Normalizer\\TournamentNormalizer', 'Sportsdata\\API\\Golf\\Model\\Round' => 'Sportsdata\\API\\Golf\\Normalizer\\RoundNormalizer', 'Sportsdata\\API\\Golf\\Model\\Player' => 'Sportsdata\\API\\Golf\\Normalizer\\PlayerNormalizer', 'Sportsdata\\API\\Golf\\Model\\Leaderboard' => 'Sportsdata\\API\\Golf\\Normalizer\\LeaderboardNormalizer', 'Sportsdata\\API\\Golf\\Model\\PlayerTournament' => 'Sportsdata\\API\\Golf\\Normalizer\\PlayerTournamentNormalizer', 'Sportsdata\\API\\Golf\\Model\\PlayerRound' => 'Sportsdata\\API\\Golf\\Normalizer\\PlayerRoundNormalizer', 'Sportsdata\\API\\Golf\\Model\\PlayerHole' => 'Sportsdata\\API\\Golf\\Normalizer\\PlayerHoleNormalizer', 'Sportsdata\\API\\Golf\\Model\\News' => 'Sportsdata\\API\\Golf\\Normalizer\\NewsNormalizer', 'Sportsdata\\API\\Golf\\Model\\Injury' => 'Sportsdata\\API\\Golf\\Normalizer\\InjuryNormalizer', 'Sportsdata\\API\\Golf\\Model\\PlayerTournamentProjection' => 'Sportsdata\\API\\Golf\\Normalizer\\PlayerTournamentProjectionNormalizer', 'Sportsdata\\API\\Golf\\Model\\PlayerSeason' => 'Sportsdata\\API\\Golf\\Normalizer\\PlayerSeasonNormalizer', 'Sportsdata\\API\\Golf\\Model\\DfsSlate' => 'Sportsdata\\API\\Golf\\Normalizer\\DfsSlateNormalizer', 'Sportsdata\\API\\Golf\\Model\\DfsSlateTournament' => 'Sportsdata\\API\\Golf\\Normalizer\\DfsSlateTournamentNormalizer', 'Sportsdata\\API\\Golf\\Model\\DfsSlatePlayer' => 'Sportsdata\\API\\Golf\\Normalizer\\DfsSlatePlayerNormalizer', 'Sportsdata\\API\\Golf\\Model\\Season' => 'Sportsdata\\API\\Golf\\Normalizer\\SeasonNormalizer', 'Sportsdata\\API\\Golf\\Model\\Headshot' => 'Sportsdata\\API\\Golf\\Normalizer\\HeadshotNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Sportsdata\\API\\Golf\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
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