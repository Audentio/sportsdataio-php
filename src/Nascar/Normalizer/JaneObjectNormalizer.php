<?php

namespace Sportsdata\API\Nascar\Normalizer;

use Sportsdata\API\Nascar\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Sportsdata\\API\\Nascar\\Model\\Series' => 'Sportsdata\\API\\Nascar\\Normalizer\\SeriesNormalizer', 'Sportsdata\\API\\Nascar\\Model\\Race' => 'Sportsdata\\API\\Nascar\\Normalizer\\RaceNormalizer', 'Sportsdata\\API\\Nascar\\Model\\Driver' => 'Sportsdata\\API\\Nascar\\Normalizer\\DriverNormalizer', 'Sportsdata\\API\\Nascar\\Model\\RaceResult' => 'Sportsdata\\API\\Nascar\\Normalizer\\RaceResultNormalizer', 'Sportsdata\\API\\Nascar\\Model\\DriverRace' => 'Sportsdata\\API\\Nascar\\Normalizer\\DriverRaceNormalizer', 'Sportsdata\\API\\Nascar\\Model\\DriverRaceProjection' => 'Sportsdata\\API\\Nascar\\Normalizer\\DriverRaceProjectionNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Sportsdata\\API\\Nascar\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
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