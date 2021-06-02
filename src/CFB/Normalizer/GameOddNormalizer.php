<?php

namespace Sportsdata\API\CFB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\CFB\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GameOddNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\CFB\\Model\\GameOdd';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\CFB\\Model\\GameOdd';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\CFB\Model\GameOdd();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GameOddId', $data)) {
            $object->setGameOddId($data['GameOddId']);
        }
        if (\array_key_exists('Sportsbook', $data)) {
            $object->setSportsbook($data['Sportsbook']);
        }
        if (\array_key_exists('GameId', $data)) {
            $object->setGameId($data['GameId']);
        }
        if (\array_key_exists('Created', $data)) {
            $object->setCreated($data['Created']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('HomeMoneyLine', $data)) {
            $object->setHomeMoneyLine($data['HomeMoneyLine']);
        }
        if (\array_key_exists('AwayMoneyLine', $data)) {
            $object->setAwayMoneyLine($data['AwayMoneyLine']);
        }
        if (\array_key_exists('DrawMoneyLine', $data)) {
            $object->setDrawMoneyLine($data['DrawMoneyLine']);
        }
        if (\array_key_exists('HomePointSpread', $data)) {
            $object->setHomePointSpread($data['HomePointSpread']);
        }
        if (\array_key_exists('AwayPointSpread', $data)) {
            $object->setAwayPointSpread($data['AwayPointSpread']);
        }
        if (\array_key_exists('HomePointSpreadPayout', $data)) {
            $object->setHomePointSpreadPayout($data['HomePointSpreadPayout']);
        }
        if (\array_key_exists('AwayPointSpreadPayout', $data)) {
            $object->setAwayPointSpreadPayout($data['AwayPointSpreadPayout']);
        }
        if (\array_key_exists('OverUnder', $data)) {
            $object->setOverUnder($data['OverUnder']);
        }
        if (\array_key_exists('OverPayout', $data)) {
            $object->setOverPayout($data['OverPayout']);
        }
        if (\array_key_exists('UnderPayout', $data)) {
            $object->setUnderPayout($data['UnderPayout']);
        }
        if (\array_key_exists('SportsbookId', $data)) {
            $object->setSportsbookId($data['SportsbookId']);
        }
        if (\array_key_exists('OddType', $data)) {
            $object->setOddType($data['OddType']);
        }
        if (\array_key_exists('SportsbookUrl', $data)) {
            $object->setSportsbookUrl($data['SportsbookUrl']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGameOddId()) {
            $data['GameOddId'] = $object->getGameOddId();
        }
        if (null !== $object->getSportsbook()) {
            $data['Sportsbook'] = $object->getSportsbook();
        }
        if (null !== $object->getGameId()) {
            $data['GameId'] = $object->getGameId();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getHomeMoneyLine()) {
            $data['HomeMoneyLine'] = $object->getHomeMoneyLine();
        }
        if (null !== $object->getAwayMoneyLine()) {
            $data['AwayMoneyLine'] = $object->getAwayMoneyLine();
        }
        if (null !== $object->getDrawMoneyLine()) {
            $data['DrawMoneyLine'] = $object->getDrawMoneyLine();
        }
        if (null !== $object->getHomePointSpread()) {
            $data['HomePointSpread'] = $object->getHomePointSpread();
        }
        if (null !== $object->getAwayPointSpread()) {
            $data['AwayPointSpread'] = $object->getAwayPointSpread();
        }
        if (null !== $object->getHomePointSpreadPayout()) {
            $data['HomePointSpreadPayout'] = $object->getHomePointSpreadPayout();
        }
        if (null !== $object->getAwayPointSpreadPayout()) {
            $data['AwayPointSpreadPayout'] = $object->getAwayPointSpreadPayout();
        }
        if (null !== $object->getOverUnder()) {
            $data['OverUnder'] = $object->getOverUnder();
        }
        if (null !== $object->getOverPayout()) {
            $data['OverPayout'] = $object->getOverPayout();
        }
        if (null !== $object->getUnderPayout()) {
            $data['UnderPayout'] = $object->getUnderPayout();
        }
        if (null !== $object->getSportsbookId()) {
            $data['SportsbookId'] = $object->getSportsbookId();
        }
        if (null !== $object->getOddType()) {
            $data['OddType'] = $object->getOddType();
        }
        if (null !== $object->getSportsbookUrl()) {
            $data['SportsbookUrl'] = $object->getSportsbookUrl();
        }
        return $data;
    }
}