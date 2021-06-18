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
class GameOddNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\GameOdd';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\GameOdd';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\GameOdd();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GameOddId', $data)) {
            $object->setGameOddId($data['GameOddId']);
        }
        if (\array_key_exists('Sportsbook', $data) && $data['Sportsbook'] !== null) {
            $object->setSportsbook($data['Sportsbook']);
        }
        elseif (\array_key_exists('Sportsbook', $data) && $data['Sportsbook'] === null) {
            $object->setSportsbook(null);
        }
        if (\array_key_exists('ScoreId', $data)) {
            $object->setScoreId($data['ScoreId']);
        }
        if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
            $object->setCreated($data['Created']);
        }
        elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
            $object->setCreated(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('HomeMoneyLine', $data) && $data['HomeMoneyLine'] !== null) {
            $object->setHomeMoneyLine($data['HomeMoneyLine']);
        }
        elseif (\array_key_exists('HomeMoneyLine', $data) && $data['HomeMoneyLine'] === null) {
            $object->setHomeMoneyLine(null);
        }
        if (\array_key_exists('AwayMoneyLine', $data) && $data['AwayMoneyLine'] !== null) {
            $object->setAwayMoneyLine($data['AwayMoneyLine']);
        }
        elseif (\array_key_exists('AwayMoneyLine', $data) && $data['AwayMoneyLine'] === null) {
            $object->setAwayMoneyLine(null);
        }
        if (\array_key_exists('DrawMoneyLine', $data) && $data['DrawMoneyLine'] !== null) {
            $object->setDrawMoneyLine($data['DrawMoneyLine']);
        }
        elseif (\array_key_exists('DrawMoneyLine', $data) && $data['DrawMoneyLine'] === null) {
            $object->setDrawMoneyLine(null);
        }
        if (\array_key_exists('HomePointSpread', $data) && $data['HomePointSpread'] !== null) {
            $object->setHomePointSpread($data['HomePointSpread']);
        }
        elseif (\array_key_exists('HomePointSpread', $data) && $data['HomePointSpread'] === null) {
            $object->setHomePointSpread(null);
        }
        if (\array_key_exists('AwayPointSpread', $data) && $data['AwayPointSpread'] !== null) {
            $object->setAwayPointSpread($data['AwayPointSpread']);
        }
        elseif (\array_key_exists('AwayPointSpread', $data) && $data['AwayPointSpread'] === null) {
            $object->setAwayPointSpread(null);
        }
        if (\array_key_exists('HomePointSpreadPayout', $data) && $data['HomePointSpreadPayout'] !== null) {
            $object->setHomePointSpreadPayout($data['HomePointSpreadPayout']);
        }
        elseif (\array_key_exists('HomePointSpreadPayout', $data) && $data['HomePointSpreadPayout'] === null) {
            $object->setHomePointSpreadPayout(null);
        }
        if (\array_key_exists('AwayPointSpreadPayout', $data) && $data['AwayPointSpreadPayout'] !== null) {
            $object->setAwayPointSpreadPayout($data['AwayPointSpreadPayout']);
        }
        elseif (\array_key_exists('AwayPointSpreadPayout', $data) && $data['AwayPointSpreadPayout'] === null) {
            $object->setAwayPointSpreadPayout(null);
        }
        if (\array_key_exists('OverUnder', $data) && $data['OverUnder'] !== null) {
            $object->setOverUnder($data['OverUnder']);
        }
        elseif (\array_key_exists('OverUnder', $data) && $data['OverUnder'] === null) {
            $object->setOverUnder(null);
        }
        if (\array_key_exists('OverPayout', $data) && $data['OverPayout'] !== null) {
            $object->setOverPayout($data['OverPayout']);
        }
        elseif (\array_key_exists('OverPayout', $data) && $data['OverPayout'] === null) {
            $object->setOverPayout(null);
        }
        if (\array_key_exists('UnderPayout', $data) && $data['UnderPayout'] !== null) {
            $object->setUnderPayout($data['UnderPayout']);
        }
        elseif (\array_key_exists('UnderPayout', $data) && $data['UnderPayout'] === null) {
            $object->setUnderPayout(null);
        }
        if (\array_key_exists('SportsbookId', $data) && $data['SportsbookId'] !== null) {
            $object->setSportsbookId($data['SportsbookId']);
        }
        elseif (\array_key_exists('SportsbookId', $data) && $data['SportsbookId'] === null) {
            $object->setSportsbookId(null);
        }
        if (\array_key_exists('OddType', $data) && $data['OddType'] !== null) {
            $object->setOddType($data['OddType']);
        }
        elseif (\array_key_exists('OddType', $data) && $data['OddType'] === null) {
            $object->setOddType(null);
        }
        if (\array_key_exists('SportsbookUrl', $data) && $data['SportsbookUrl'] !== null) {
            $object->setSportsbookUrl($data['SportsbookUrl']);
        }
        elseif (\array_key_exists('SportsbookUrl', $data) && $data['SportsbookUrl'] === null) {
            $object->setSportsbookUrl(null);
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
        if (null !== $object->getScoreId()) {
            $data['ScoreId'] = $object->getScoreId();
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