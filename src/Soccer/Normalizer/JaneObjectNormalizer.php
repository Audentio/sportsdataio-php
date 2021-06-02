<?php

namespace Sportsdata\API\Soccer\Normalizer;

use Sportsdata\API\Soccer\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Sportsdata\\API\\Soccer\\Model\\PlayerGameProjection' => 'Sportsdata\\API\\Soccer\\Normalizer\\PlayerGameProjectionNormalizer', 'Sportsdata\\API\\Soccer\\Model\\DfsSlate' => 'Sportsdata\\API\\Soccer\\Normalizer\\DfsSlateNormalizer', 'Sportsdata\\API\\Soccer\\Model\\DfsSlateGame' => 'Sportsdata\\API\\Soccer\\Normalizer\\DfsSlateGameNormalizer', 'Sportsdata\\API\\Soccer\\Model\\Game' => 'Sportsdata\\API\\Soccer\\Normalizer\\GameNormalizer', 'Sportsdata\\API\\Soccer\\Model\\PlayoffAggregateScore' => 'Sportsdata\\API\\Soccer\\Normalizer\\PlayoffAggregateScoreNormalizer', 'Sportsdata\\API\\Soccer\\Model\\DfsSlatePlayer' => 'Sportsdata\\API\\Soccer\\Normalizer\\DfsSlatePlayerNormalizer', 'Sportsdata\\API\\Soccer\\Model\\Area' => 'Sportsdata\\API\\Soccer\\Normalizer\\AreaNormalizer', 'Sportsdata\\API\\Soccer\\Model\\Competition' => 'Sportsdata\\API\\Soccer\\Normalizer\\CompetitionNormalizer', 'Sportsdata\\API\\Soccer\\Model\\Season' => 'Sportsdata\\API\\Soccer\\Normalizer\\SeasonNormalizer', 'Sportsdata\\API\\Soccer\\Model\\Round' => 'Sportsdata\\API\\Soccer\\Normalizer\\RoundNormalizer', 'Sportsdata\\API\\Soccer\\Model\\Team' => 'Sportsdata\\API\\Soccer\\Normalizer\\TeamNormalizer', 'Sportsdata\\API\\Soccer\\Model\\Venue' => 'Sportsdata\\API\\Soccer\\Normalizer\\VenueNormalizer', 'Sportsdata\\API\\Soccer\\Model\\SeasonTeam' => 'Sportsdata\\API\\Soccer\\Normalizer\\SeasonTeamNormalizer', 'Sportsdata\\API\\Soccer\\Model\\Player' => 'Sportsdata\\API\\Soccer\\Normalizer\\PlayerNormalizer', 'Sportsdata\\API\\Soccer\\Model\\TeamSeason' => 'Sportsdata\\API\\Soccer\\Normalizer\\TeamSeasonNormalizer', 'Sportsdata\\API\\Soccer\\Model\\TeamGame' => 'Sportsdata\\API\\Soccer\\Normalizer\\TeamGameNormalizer', 'Sportsdata\\API\\Soccer\\Model\\Standing' => 'Sportsdata\\API\\Soccer\\Normalizer\\StandingNormalizer', 'Sportsdata\\API\\Soccer\\Model\\CompetitionDetail' => 'Sportsdata\\API\\Soccer\\Normalizer\\CompetitionDetailNormalizer', 'Sportsdata\\API\\Soccer\\Model\\TeamDetail' => 'Sportsdata\\API\\Soccer\\Normalizer\\TeamDetailNormalizer', 'Sportsdata\\API\\Soccer\\Model\\Membership' => 'Sportsdata\\API\\Soccer\\Normalizer\\MembershipNormalizer', 'Sportsdata\\API\\Soccer\\Model\\CanceledMembership' => 'Sportsdata\\API\\Soccer\\Normalizer\\CanceledMembershipNormalizer', 'Sportsdata\\API\\Soccer\\Model\\BoxScore' => 'Sportsdata\\API\\Soccer\\Normalizer\\BoxScoreNormalizer', 'Sportsdata\\API\\Soccer\\Model\\Coach' => 'Sportsdata\\API\\Soccer\\Normalizer\\CoachNormalizer', 'Sportsdata\\API\\Soccer\\Model\\Referee' => 'Sportsdata\\API\\Soccer\\Normalizer\\RefereeNormalizer', 'Sportsdata\\API\\Soccer\\Model\\Lineup' => 'Sportsdata\\API\\Soccer\\Normalizer\\LineupNormalizer', 'Sportsdata\\API\\Soccer\\Model\\Goal' => 'Sportsdata\\API\\Soccer\\Normalizer\\GoalNormalizer', 'Sportsdata\\API\\Soccer\\Model\\Booking' => 'Sportsdata\\API\\Soccer\\Normalizer\\BookingNormalizer', 'Sportsdata\\API\\Soccer\\Model\\PenaltyShootout' => 'Sportsdata\\API\\Soccer\\Normalizer\\PenaltyShootoutNormalizer', 'Sportsdata\\API\\Soccer\\Model\\PlayerGame' => 'Sportsdata\\API\\Soccer\\Normalizer\\PlayerGameNormalizer', 'Sportsdata\\API\\Soccer\\Model\\PlayerSeason' => 'Sportsdata\\API\\Soccer\\Normalizer\\PlayerSeasonNormalizer', 'Sportsdata\\API\\Soccer\\Model\\GameInfo' => 'Sportsdata\\API\\Soccer\\Normalizer\\GameInfoNormalizer', 'Sportsdata\\API\\Soccer\\Model\\GameOdd' => 'Sportsdata\\API\\Soccer\\Normalizer\\GameOddNormalizer', 'Sportsdata\\API\\Soccer\\Model\\Sportsbook' => 'Sportsdata\\API\\Soccer\\Normalizer\\SportsbookNormalizer', 'Sportsdata\\API\\Soccer\\Model\\Headshot' => 'Sportsdata\\API\\Soccer\\Normalizer\\HeadshotNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Sportsdata\\API\\Soccer\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
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