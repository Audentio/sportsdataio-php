<?php

namespace Sportsdata\API\MMA\Normalizer;

use Sportsdata\API\MMA\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Sportsdata\\API\\MMA\\Model\\Fighter' => 'Sportsdata\\API\\MMA\\Normalizer\\FighterNormalizer', 'Sportsdata\\API\\MMA\\Model\\CareerStat' => 'Sportsdata\\API\\MMA\\Normalizer\\CareerStatNormalizer', 'Sportsdata\\API\\MMA\\Model\\EventDetail' => 'Sportsdata\\API\\MMA\\Normalizer\\EventDetailNormalizer', 'Sportsdata\\API\\MMA\\Model\\Fight' => 'Sportsdata\\API\\MMA\\Normalizer\\FightNormalizer', 'Sportsdata\\API\\MMA\\Model\\FighterInfo' => 'Sportsdata\\API\\MMA\\Normalizer\\FighterInfoNormalizer', 'Sportsdata\\API\\MMA\\Model\\Event' => 'Sportsdata\\API\\MMA\\Normalizer\\EventNormalizer', 'Sportsdata\\API\\MMA\\Model\\League' => 'Sportsdata\\API\\MMA\\Normalizer\\LeagueNormalizer', 'Sportsdata\\API\\MMA\\Model\\FightDetail' => 'Sportsdata\\API\\MMA\\Normalizer\\FightDetailNormalizer', 'Sportsdata\\API\\MMA\\Model\\FightStat' => 'Sportsdata\\API\\MMA\\Normalizer\\FightStatNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Sportsdata\\API\\MMA\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
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