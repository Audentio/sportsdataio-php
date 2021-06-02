<?php

namespace Sportsdata\API\LOL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\LOL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\LOL\\Model\\Game';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\LOL\\Model\\Game';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\LOL\Model\Game();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GameId', $data)) {
            $object->setGameId($data['GameId']);
        }
        if (\array_key_exists('RoundId', $data)) {
            $object->setRoundId($data['RoundId']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('Group', $data)) {
            $object->setGroup($data['Group']);
        }
        if (\array_key_exists('TeamAId', $data)) {
            $object->setTeamAId($data['TeamAId']);
        }
        if (\array_key_exists('TeamBId', $data)) {
            $object->setTeamBId($data['TeamBId']);
        }
        if (\array_key_exists('VenueId', $data)) {
            $object->setVenueId($data['VenueId']);
        }
        if (\array_key_exists('Day', $data)) {
            $object->setDay($data['Day']);
        }
        if (\array_key_exists('DateTime', $data)) {
            $object->setDateTime($data['DateTime']);
        }
        if (\array_key_exists('Status', $data)) {
            $object->setStatus($data['Status']);
        }
        if (\array_key_exists('Week', $data)) {
            $object->setWeek($data['Week']);
        }
        if (\array_key_exists('BestOf', $data)) {
            $object->setBestOf($data['BestOf']);
        }
        if (\array_key_exists('Winner', $data)) {
            $object->setWinner($data['Winner']);
        }
        if (\array_key_exists('VenueType', $data)) {
            $object->setVenueType($data['VenueType']);
        }
        if (\array_key_exists('TeamAKey', $data)) {
            $object->setTeamAKey($data['TeamAKey']);
        }
        if (\array_key_exists('TeamAName', $data)) {
            $object->setTeamAName($data['TeamAName']);
        }
        if (\array_key_exists('TeamAScore', $data)) {
            $object->setTeamAScore($data['TeamAScore']);
        }
        if (\array_key_exists('TeamBKey', $data)) {
            $object->setTeamBKey($data['TeamBKey']);
        }
        if (\array_key_exists('TeamBName', $data)) {
            $object->setTeamBName($data['TeamBName']);
        }
        if (\array_key_exists('TeamBScore', $data)) {
            $object->setTeamBScore($data['TeamBScore']);
        }
        if (\array_key_exists('TeamAMoneyLine', $data)) {
            $object->setTeamAMoneyLine($data['TeamAMoneyLine']);
        }
        if (\array_key_exists('TeamBMoneyLine', $data)) {
            $object->setTeamBMoneyLine($data['TeamBMoneyLine']);
        }
        if (\array_key_exists('DrawMoneyLine', $data)) {
            $object->setDrawMoneyLine($data['DrawMoneyLine']);
        }
        if (\array_key_exists('PointSpread', $data)) {
            $object->setPointSpread($data['PointSpread']);
        }
        if (\array_key_exists('TeamAPointSpreadPayout', $data)) {
            $object->setTeamAPointSpreadPayout($data['TeamAPointSpreadPayout']);
        }
        if (\array_key_exists('TeamBPointSpreadPayout', $data)) {
            $object->setTeamBPointSpreadPayout($data['TeamBPointSpreadPayout']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('UpdatedUtc', $data)) {
            $object->setUpdatedUtc($data['UpdatedUtc']);
        }
        if (\array_key_exists('IsClosed', $data)) {
            $object->setIsClosed($data['IsClosed']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGameId()) {
            $data['GameId'] = $object->getGameId();
        }
        if (null !== $object->getRoundId()) {
            $data['RoundId'] = $object->getRoundId();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getGroup()) {
            $data['Group'] = $object->getGroup();
        }
        if (null !== $object->getTeamAId()) {
            $data['TeamAId'] = $object->getTeamAId();
        }
        if (null !== $object->getTeamBId()) {
            $data['TeamBId'] = $object->getTeamBId();
        }
        if (null !== $object->getVenueId()) {
            $data['VenueId'] = $object->getVenueId();
        }
        if (null !== $object->getDay()) {
            $data['Day'] = $object->getDay();
        }
        if (null !== $object->getDateTime()) {
            $data['DateTime'] = $object->getDateTime();
        }
        if (null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus();
        }
        if (null !== $object->getWeek()) {
            $data['Week'] = $object->getWeek();
        }
        if (null !== $object->getBestOf()) {
            $data['BestOf'] = $object->getBestOf();
        }
        if (null !== $object->getWinner()) {
            $data['Winner'] = $object->getWinner();
        }
        if (null !== $object->getVenueType()) {
            $data['VenueType'] = $object->getVenueType();
        }
        if (null !== $object->getTeamAKey()) {
            $data['TeamAKey'] = $object->getTeamAKey();
        }
        if (null !== $object->getTeamAName()) {
            $data['TeamAName'] = $object->getTeamAName();
        }
        if (null !== $object->getTeamAScore()) {
            $data['TeamAScore'] = $object->getTeamAScore();
        }
        if (null !== $object->getTeamBKey()) {
            $data['TeamBKey'] = $object->getTeamBKey();
        }
        if (null !== $object->getTeamBName()) {
            $data['TeamBName'] = $object->getTeamBName();
        }
        if (null !== $object->getTeamBScore()) {
            $data['TeamBScore'] = $object->getTeamBScore();
        }
        if (null !== $object->getTeamAMoneyLine()) {
            $data['TeamAMoneyLine'] = $object->getTeamAMoneyLine();
        }
        if (null !== $object->getTeamBMoneyLine()) {
            $data['TeamBMoneyLine'] = $object->getTeamBMoneyLine();
        }
        if (null !== $object->getDrawMoneyLine()) {
            $data['DrawMoneyLine'] = $object->getDrawMoneyLine();
        }
        if (null !== $object->getPointSpread()) {
            $data['PointSpread'] = $object->getPointSpread();
        }
        if (null !== $object->getTeamAPointSpreadPayout()) {
            $data['TeamAPointSpreadPayout'] = $object->getTeamAPointSpreadPayout();
        }
        if (null !== $object->getTeamBPointSpreadPayout()) {
            $data['TeamBPointSpreadPayout'] = $object->getTeamBPointSpreadPayout();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getUpdatedUtc()) {
            $data['UpdatedUtc'] = $object->getUpdatedUtc();
        }
        if (null !== $object->getIsClosed()) {
            $data['IsClosed'] = $object->getIsClosed();
        }
        return $data;
    }
}