<?php

namespace Sportsdata\API\NFL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\NFL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TimeframeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\Timeframe';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\Timeframe';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\Timeframe();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('Week', $data)) {
            $object->setWeek($data['Week']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('ShortName', $data)) {
            $object->setShortName($data['ShortName']);
        }
        if (\array_key_exists('StartDate', $data)) {
            $object->setStartDate($data['StartDate']);
        }
        if (\array_key_exists('EndDate', $data)) {
            $object->setEndDate($data['EndDate']);
        }
        if (\array_key_exists('FirstGameStart', $data)) {
            $object->setFirstGameStart($data['FirstGameStart']);
        }
        if (\array_key_exists('FirstGameEnd', $data)) {
            $object->setFirstGameEnd($data['FirstGameEnd']);
        }
        if (\array_key_exists('LastGameEnd', $data)) {
            $object->setLastGameEnd($data['LastGameEnd']);
        }
        if (\array_key_exists('HasGames', $data)) {
            $object->setHasGames($data['HasGames']);
        }
        if (\array_key_exists('HasStarted', $data)) {
            $object->setHasStarted($data['HasStarted']);
        }
        if (\array_key_exists('HasEnded', $data)) {
            $object->setHasEnded($data['HasEnded']);
        }
        if (\array_key_exists('HasFirstGameStarted', $data)) {
            $object->setHasFirstGameStarted($data['HasFirstGameStarted']);
        }
        if (\array_key_exists('HasFirstGameEnded', $data)) {
            $object->setHasFirstGameEnded($data['HasFirstGameEnded']);
        }
        if (\array_key_exists('HasLastGameEnded', $data)) {
            $object->setHasLastGameEnded($data['HasLastGameEnded']);
        }
        if (\array_key_exists('ApiSeason', $data)) {
            $object->setApiSeason($data['ApiSeason']);
        }
        if (\array_key_exists('ApiWeek', $data)) {
            $object->setApiWeek($data['ApiWeek']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getWeek()) {
            $data['Week'] = $object->getWeek();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getShortName()) {
            $data['ShortName'] = $object->getShortName();
        }
        if (null !== $object->getStartDate()) {
            $data['StartDate'] = $object->getStartDate();
        }
        if (null !== $object->getEndDate()) {
            $data['EndDate'] = $object->getEndDate();
        }
        if (null !== $object->getFirstGameStart()) {
            $data['FirstGameStart'] = $object->getFirstGameStart();
        }
        if (null !== $object->getFirstGameEnd()) {
            $data['FirstGameEnd'] = $object->getFirstGameEnd();
        }
        if (null !== $object->getLastGameEnd()) {
            $data['LastGameEnd'] = $object->getLastGameEnd();
        }
        if (null !== $object->getHasGames()) {
            $data['HasGames'] = $object->getHasGames();
        }
        if (null !== $object->getHasStarted()) {
            $data['HasStarted'] = $object->getHasStarted();
        }
        if (null !== $object->getHasEnded()) {
            $data['HasEnded'] = $object->getHasEnded();
        }
        if (null !== $object->getHasFirstGameStarted()) {
            $data['HasFirstGameStarted'] = $object->getHasFirstGameStarted();
        }
        if (null !== $object->getHasFirstGameEnded()) {
            $data['HasFirstGameEnded'] = $object->getHasFirstGameEnded();
        }
        if (null !== $object->getHasLastGameEnded()) {
            $data['HasLastGameEnded'] = $object->getHasLastGameEnded();
        }
        if (null !== $object->getApiSeason()) {
            $data['ApiSeason'] = $object->getApiSeason();
        }
        if (null !== $object->getApiWeek()) {
            $data['ApiWeek'] = $object->getApiWeek();
        }
        return $data;
    }
}