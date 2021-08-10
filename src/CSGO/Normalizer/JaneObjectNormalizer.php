<?php

namespace Sportsdata\API\CSGO\Normalizer;

use Sportsdata\API\CSGO\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Sportsdata\\API\\CSGO\\Model\\PlayerGameProjection' => 'Sportsdata\\API\\CSGO\\Normalizer\\PlayerGameProjectionNormalizer', 'Sportsdata\\API\\CSGO\\Model\\DfsSlate' => 'Sportsdata\\API\\CSGO\\Normalizer\\DfsSlateNormalizer', 'Sportsdata\\API\\CSGO\\Model\\DfsSlateGame' => 'Sportsdata\\API\\CSGO\\Normalizer\\DfsSlateGameNormalizer', 'Sportsdata\\API\\CSGO\\Model\\Game' => 'Sportsdata\\API\\CSGO\\Normalizer\\GameNormalizer', 'Sportsdata\\API\\CSGO\\Model\\DfsSlatePlayer' => 'Sportsdata\\API\\CSGO\\Normalizer\\DfsSlatePlayerNormalizer', 'Sportsdata\\API\\CSGO\\Model\\Error' => 'Sportsdata\\API\\CSGO\\Normalizer\\ErrorNormalizer', 'Sportsdata\\API\\CSGO\\Model\\Area' => 'Sportsdata\\API\\CSGO\\Normalizer\\AreaNormalizer', 'Sportsdata\\API\\CSGO\\Model\\Competition' => 'Sportsdata\\API\\CSGO\\Normalizer\\CompetitionNormalizer', 'Sportsdata\\API\\CSGO\\Model\\Season' => 'Sportsdata\\API\\CSGO\\Normalizer\\SeasonNormalizer', 'Sportsdata\\API\\CSGO\\Model\\Round' => 'Sportsdata\\API\\CSGO\\Normalizer\\RoundNormalizer', 'Sportsdata\\API\\CSGO\\Model\\Team' => 'Sportsdata\\API\\CSGO\\Normalizer\\TeamNormalizer', 'Sportsdata\\API\\CSGO\\Model\\Venue' => 'Sportsdata\\API\\CSGO\\Normalizer\\VenueNormalizer', 'Sportsdata\\API\\CSGO\\Model\\SeasonTeam' => 'Sportsdata\\API\\CSGO\\Normalizer\\SeasonTeamNormalizer', 'Sportsdata\\API\\CSGO\\Model\\Player' => 'Sportsdata\\API\\CSGO\\Normalizer\\PlayerNormalizer', 'Sportsdata\\API\\CSGO\\Model\\CompetitionDetail' => 'Sportsdata\\API\\CSGO\\Normalizer\\CompetitionDetailNormalizer', 'Sportsdata\\API\\CSGO\\Model\\TeamDetail' => 'Sportsdata\\API\\CSGO\\Normalizer\\TeamDetailNormalizer', 'Sportsdata\\API\\CSGO\\Model\\Membership' => 'Sportsdata\\API\\CSGO\\Normalizer\\MembershipNormalizer', 'Sportsdata\\API\\CSGO\\Model\\Standing' => 'Sportsdata\\API\\CSGO\\Normalizer\\StandingNormalizer', 'Sportsdata\\API\\CSGO\\Model\\BoxScore' => 'Sportsdata\\API\\CSGO\\Normalizer\\BoxScoreNormalizer', 'Sportsdata\\API\\CSGO\\Model\\Map' => 'Sportsdata\\API\\CSGO\\Normalizer\\MapNormalizer', 'Sportsdata\\API\\CSGO\\Model\\Leaderboard' => 'Sportsdata\\API\\CSGO\\Normalizer\\LeaderboardNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Sportsdata\\API\\CSGO\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
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